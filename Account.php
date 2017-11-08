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

class Card
{
	private $credit;
	private $id;
	private $type;

	public function __construct( float $credit, string $id, string $type )
	{
		$this->credit = $credit;
		$this->id = $id;
		$this->type = $type;
	}

	public function getCredit()
	{
		return $this->credit;
	}
	public function getId()
	{
		return $this->id;
	}
	public function getType()
	{
		return $this->type;
	}
}