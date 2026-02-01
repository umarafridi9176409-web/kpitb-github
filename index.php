<?php
class Account{
    public $balance;

    public function _construct($balance){
        // $this -> balance = $amount + $this -> balance;


    }
    public function withdraw($amount){
        $this -> balance = $this -> balance - $amount;

        
    }
    public function getBalance(){

    } 
}

class savingAccount entends Account
{
    public $interset
    // public function deposit ($amount)
    public function _construct($balance, $interset)
    parent ::_construct($balance);

}
    public function deposit($amount)
    {
    $this -> balance = $amount * $this-> interest;
    // {
    //     // $static -> balance = $amount  + $this -> interset;
    // }
}
    $savingAccount = new SavingAccount (10000, 10)
    $balance = $avingAccount -> getBalance();

    echo 'Balance before interest' .$savingBalance;

    $savingAccount -> deposit(10000);

    $savingbalance = $savingAccount -> getBalance();

    echo '<br> Saving Balance: ' .$savingBalance; 

    // class CurrentAccount extend Account()

    // $account = new Account(2000);
    // // $account -> balance = 2000;
    // $account -> deposit = (10000);
    // $balance =  $account -> getBalance();

    // echo 'This balance is: ' .$balance;

    // $account -> withdraw (500);
    // $balance = $account -> getBalance();

    // echo '<br> The balance after withdrawl is: '.$balance;
