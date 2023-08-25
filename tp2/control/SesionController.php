<?php

class Sesion
{

private $user;
private $password;

public function __construct($usuario, $contraseña)
{
$this->user = $usuario;
$this->password = $contraseña;
}

public function getUser()
{
return $this->user;
}

public function getPassword()
{
return $this->password;
}

public function setUser($usario)
{
return $this->user = $usario;
}

public function setPassword($contraseña)
{
return $this->password = $contraseña;
}
}