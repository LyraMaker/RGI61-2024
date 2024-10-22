<?php

class User{
    private string $username;
    private string $password;
    private bool $ativo;


	public function getAtivo()
	{
		return $this->ativo;
	}

	public function setAtivo($ativo)
	{
		$this->ativo = $ativo;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}
}