<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use Stripe\Exception\CardException;
use Stripe\Charge;
use Stripe\Token;
use Stripe\Stripe;

// This class represents a controller named Payment which extends the BaseController
class Payment extends BaseController
{
    use ResponseTrait; // Using ResponseTrait to simplify response handling

    // Constructor method to set up Stripe API key
    public function __construct()
    {
        Stripe::setApiKey(env('STRIPE_SECRET')); // Setting the Stripe API key from environment variables
    }

    // Method to handle creating a payment
    public function createPayment()
    {
        // Retrieving POST data from the request
        $amount = $this->request->getPost('amount');
        $cardName = $this->request->getPost('cardName');
        $cardNumber = $this->request->getPost('cardNumber');
        $expiryMonth = $this->request->getPost('expiryMonth');
        $expiryYear = $this->request->getPost('expiryYear');
        $cvv = $this->request->getPost('cvv');
        $description = $this->request->getPost('description');

        try {
            $amount = $amount * 100; // Converting amount to cents

            // Creating a token using the provided card information
            $token = Token::create([
                'card' => [
                    'name' => $cardName,
                    'number' => $cardNumber,
                    'exp_month' => $expiryMonth,
                    'exp_year' => $expiryYear,
                    'cvc' => $cvv,
                ],
            ]);

            // Creating a charge using the token
            $charge = Charge::create([
                'amount' => $amount,
                'currency' => 'usd', // Currency for the charge (in this case, USD)
                'source' => $token->id, // Using the token ID as the payment source
                'description' => $description, // Description of the charge
            ]);

            // Checking if the charge was successful
            if ($charge->status === 'succeeded') {
                // Responding with success message if the transaction succeeded
                return $this->respond([
                    'success' => true,
                    'title' => 'Congratulations!',
                    'message' => 'Transaction succeeded.',
                ], 200);
            } else {
                // Responding with failure message if the transaction failed
                return $this->respond([
                    'success' => false,
                    'title' => 'Transaction failed!',
                    'message' => 'Transaction failed.',
                ], 200);
            }
        } catch (CardException $e) {
            // Handling card-related exceptions
            return $this->respond([
                'error' => $e->getError()->message, // Responding with the error message
            ]);
        }
    }
}
