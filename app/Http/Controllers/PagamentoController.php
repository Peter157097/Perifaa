<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session as LaravelSession; 
use Stripe\Checkout\Session as StripeSession;


class PagamentoController extends Controller
{


    public function show()
    {
        $subtotal = LaravelSession::get('subtotal', 0);
        $selectedProducts = LaravelSession::get('selectedProducts', []);
    
        $data = [
            'subtotal' => $subtotal,
            'selectedProducts' => $selectedProducts,
            'id' => LaravelSession::get('id'),
            'nome' => LaravelSession::get('nome'),
            'email' => LaravelSession::get('email'),
            'numero' => LaravelSession::get('numero'),
            'logradouro' => LaravelSession::get('logradouro'),
            'cep' => LaravelSession::get('cep'),
            'cidade' => LaravelSession::get('cidade'),
            'estado' => LaravelSession::get('estado'),
            'imagemCliente' => LaravelSession::get('imagemCliente'),
            'numCasaCliente' => LaravelSession::get('numCasaCliente')
        ];
    
        return view('pagamentos', $data);
    }
    




    public function store(Request $request)
    {
        $subtotal = $request->input('subtotal');
        $selectedProducts = $request->input('selectedProducts');
        $idCliente = LaravelSession::get('id');


        $decodedProducts = json_decode($selectedProducts, true);

        LaravelSession::put('subtotal', $subtotal);
        LaravelSession::put('selectedProducts', $decodedProducts);

        return view('pagamentos', [
            'subtotal' => $subtotal,
            'selectedProducts' => $decodedProducts,
            'idCliente' => $idCliente,
        ]);
    }

    public function gerarBoleto(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $subtotal = $request->input('subtotal');

        LaravelSession::put('subtotal', $subtotal);

        try {
            $session = StripeSession::create([
                'payment_method_types' => ['boleto'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'brl',
                        'product_data' => [
                            'name' => 'Perifa',
                            'description' => 'Boleto ',
                        ],
                        'unit_amount' => (int)(($subtotal * 100) + 11 * 100),
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'payment_method_options' => [
                    'boleto' => [
                        'expires_after_days' => 7,
                    ]
                ],
                'success_url' => route('boleto.sucesso'),
                'cancel_url' => route('boleto.cancelado'),
            ]);

            return redirect($session->url);
        } catch (\Exception $e) {
            Log::error('Erro ao criar sessão de pagamento: ' . $e->getMessage());
            return back()->withErrors('Erro ao gerar boleto: ' . $e->getMessage());
        }
    }
    public function sucesso()
    {
        return view('pagamento.sucesso');
    }

    public function cancelado(Request $request)
    {

        return redirect()->back()->with('success', 'Compra cancelada!');
    }

    public function storeCartao(Request $request)
    {

        $validatedData = $request->validate([
            'nomeCartao' => 'required|string|max:256',
            'cpfCartao' => 'required|string|max:25',
            'numeroCartao' => 'required|string|max:17',
            'validadeCartao' => 'required|string|max:5',
            'cvcCartao' => 'required|string|max:3',
        ]);
    
        try {
   
            $valorTotalVenda = $request->input('valorTotalVenda');
            $idCliente = $request->input('idCliente');
            $logradouroEntrega = $request->input('logradouroEntrega');
            $numCasaEntrega = $request->input('numCasaEntrega');
            $metodoPagamento = $request->input('metodoPagamento', 1);
    
            $produtos = $request->input('produtos', []);
            $vendedores = $request->input('vendedores', []);
    
 
            foreach ($produtos as $index => $idProduto) {
                $idVendedor = $vendedores[$index] ?? null;
    
                \App\Models\TbVenda::create([
                    'dataVenda' => now(),
                    'valorTotalVenda' => $valorTotalVenda,
                    'idCliente' => $idCliente,
                    'nomeCartao' => $validatedData['nomeCartao'],
                    'cpfCartao' => $validatedData['cpfCartao'],
                    'numeroCartao' => $validatedData['numeroCartao'],
                    'validadeCartao' => $validatedData['validadeCartao'],
                    'cvcCartao' => $validatedData['cvcCartao'],
                    'idVendedor' => $idVendedor,
                    'logradouroEntrega' => $logradouroEntrega,
                    'numCasaEntrega' => $numCasaEntrega,
                    'metodoPagamento' => $metodoPagamento,
                    'idProduto' => $idProduto,
                ]);
            }
    
            return redirect()->route('pedidos')->with('success', 'Pagamento realizado com sucesso!');
        } catch (\Exception $e) {
            Log::error('Erro ao processar o pagamento: ' . $e->getMessage());
            return back()->withErrors('Erro ao processar o pagamento. Por favor, tente novamente.');
        }
    }
    
    
}
