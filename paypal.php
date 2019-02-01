<?php
class PayPal {
 
    public function __construct() {
        // Your Code here //
    }
 
    public function sendPayment($amount) {
        // Paying via Paypal //
        echo "Paying via PayPal: ". $amount;
    }
}
 

interface payAdapter {
    public function send($amount);
}


class paypaladaptor implements payAdapter {
 

  private $paypal;
    
   public function __construct(PayPal $paypal) {
   $this->paypal = $paypal;
}

   public function send($amount) {
     $this->paypal->sendPayment($amount);
}

}

$paypaladaptor = new paypaladaptor(new PayPal());

$paypaladaptor->send('23');

