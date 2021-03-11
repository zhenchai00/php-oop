<?php
abstract class Visa {
    public function visaPayment() {
        return "Perform this payment.";
    }

    abstract public function getPayment();
}