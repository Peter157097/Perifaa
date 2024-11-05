<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class PagamentoController extends Controller
{
    // Exibir a página de pagamento com um valor padrão
    public function show()
    {
        $subtotal = 0; // valor padrão ou de teste
    
        // Criar um array com todas as informações que você deseja passar para a view
        $data = [
            'subtotal' => $subtotal,
            'nome' => Session::get('nome'),
            'email' => Session::get('email'),
            'numero' => Session::get('numero'),
            'logradouro' => Session::get('logradouro'),
            'cep' => Session::get('cep'),
            'cidade' => Session::get('cidade'),
            'estado' => Session::get('estado'),
            'imagemCliente' => Session::get('imagemCliente'),
            'numCasaCliente' => Session::get('numCasaCliente')
        ];
    
        // Passar o array para a view
        return view('pagamentos', $data);
    }
    

    // Método POST para exibir a página de pagamento com o subtotal fornecido
    public function store(Request $request)
    {
        $subtotal = $request->input('subtotal');
        return view('pagamentos', ['subtotal' => $subtotal]);
    }

    // Gera o boleto em PDF
    // Gera o boleto usando o valor de subtotal
    public function gerarBoleto(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
    
        $subtotal = $request->input('subtotal');
    
        session(['subtotal' => $subtotal]);
    
        try {
            $session = Session::create([
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

        return view('/cancelado');
    }
}
