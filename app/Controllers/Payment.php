<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use Stripe\Exception\CardException;
use Stripe\Charge;
use Stripe\Token;
use Stripe\Stripe;

class Payment extends BaseController
{
    use ResponseTrait;

    public function __construct()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }

    public function createPayment()
    {
         
        $amount = $this->request->getPost('amount');
        $cardName = $this->request->getPost('cardName');
        $cardNumber = $this->request->getPost('cardNumber');
        $expiryMonth = $this->request->getPost('expiryMonth');
        $expiryYear = $this->request->getPost('expiryYear');
        $cvv = $this->request->getPost('cvv');
        $description = $this->request->getPost('description');

        try {
            $amount = $amount * 100;

            $token = Token::create([
                'card' => [
                    'name' => $cardName,
                    'number' => $cardNumber,
                    'exp_month' => $expiryMonth,
                    'exp_year' => $expiryYear,
                    'cvc' => $cvv,
                ],
            ]);

            $charge = Charge::create([
                'amount' => $amount,
                'currency' => 'usd',
                'source' => $token->id,
                'description' => $description,
            ]);

            if ($charge->status === 'succeeded') {
                return $this->respond([
                    'success' => true,
                    'title' => 'Congratulations!',
                    'message' => 'Transaction succeeded.',
                ], 200);
            } else {
                return $this->respond([
                    'success' => false,
                    'title' => 'Transaction failed!',
                    'message' => 'Transaction failed.',
                ], 200);
            }
        } catch (CardException $e) {
            return $this->respond([
                'error' => $e->getError()->message,
            ]);
        }
    }
}
