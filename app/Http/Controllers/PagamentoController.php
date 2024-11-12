<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session as LaravelSession; // Alias para a sessão do Laravel
use Stripe\Checkout\Session as StripeSession; // Alias para a sessão do Stripe

class PagamentoController extends Controller
{
    public function show()
    {
        $subtotal = 0; // valor padrão ou de teste
    
        // Criar um array com todas as informações que você deseja passar para a view
        $data = [
            'subtotal' => $subtotal,
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
    
        // Passar o array para a view
        return view('pagamentos', $data);
    }
    
    public function store(Request $request)
    {
        $subtotal = $request->input('subtotal');
        return view('pagamentos', ['subtotal' => $subtotal]);
    }

    public function gerarBoleto(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
    
        $subtotal = $request->input('subtotal');
    
        LaravelSession::put('subtotal', $subtotal);
    
        try {
            $session = StripeSession::create([                 'payment_method_types' => ['boleto'],
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

        return view('/cancelado');
    }
}
