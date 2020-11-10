<?php

$classAnonymous = new class{       //classe anônima
    public function log($message){
        return $message;
    }

};

class BankAccount{

    public function withdrawn($value, $classAnonymous){

        return $classAnonymous->log('Sacando valor..');
    }
}

$b = new BankAccount();
print $b->withdrawn(19, $classAnonymous);