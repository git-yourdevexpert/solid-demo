<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Payment\BrainTreePayment;
use App\Repository\UserRepository;
use App\Services\CreditCardPaymentStatusService;
use App\Services\NotificationService;
use App\Services\PaymentService;
use App\Services\WireTransferPaymentStatusService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaymentController extends Controller
{
    /**
     * @param  Request  $request
     * @param  PaymentService  $paymentService
     * @param  NotificationService  $notificationService
     * @return RedirectResponse
     * @bodyParam payment_type string required The payment_type. Example: Paypal
     */
    public function pay(Request $request, PaymentService $paymentService, UserRepository $userRepository)
    {
        $payment_type = $request->input('payment_type');

        $payment = $paymentService->initialize($payment_type,'fsfay');
        $response = $payment->pay();
        return response()->json(['response' =>$response], Response::HTTP_OK);
    }

    /**
     * @return string
     */
    public function status()
    {

        $status = new WireTransferPaymentStatusService();

        return $status->getStatus();
    }
}