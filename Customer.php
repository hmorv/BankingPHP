<?php

class Customer
{
	private $accounts;

	public function __construct( Account $accounts )
	{
		$this->accounts = $accounts;
	}

	public function getAccounts()
	{
		return $this->accounts;
	}

	public function getAccountsNumber()
	{
		return sizeof($this->accounts);
	}
	public function hasAccounts()
	{
		return sizeof($this->accounts) > 0;
	}
}