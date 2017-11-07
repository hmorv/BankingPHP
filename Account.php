<?php

namespace Account;

class Account
{
	private $balance;

	public function __construct( float $init_balance ) 
	{
		$this->balance = $init_balance;
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