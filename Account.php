<?php

namespace Account;

class Account
{
	private $balance;
	private $accountNumber;

	public function __construct( float $init_balance, int $accountNumber ) 
	{
		$this->balance = $init_balance;
		$this->accountNumber = $accountNumber;
	}

	public function getBalance()
	{
		return $this->balance;
	}
	public function deposit ( float $amt )
	{
		$this->balance += $amt;
	}
	public function withdraw ( float $amt )
	{
		$this->balance -= $amt;
	}
}

class Customer
{
	private $account;
	private $name;

	public function __construct( Account $account, string $name )
	{
		$this->account = $account;
		$this->name = $name;
	}
}