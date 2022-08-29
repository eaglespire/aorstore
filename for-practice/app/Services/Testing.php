<?php

class Testing
{
    public $paymentLink;
    public function __construct(PaymentGateway $gateway)
    {
        $this->paymentLink = $gateway;
    }
    public function test()
    {
        return $this->paymentLink->getPaymentLink();
    }
}
