<?php
require_once("funcoes_valida_login.php");

$login_usuario = $_POST['login'];
$senha_usuario = $_POST['senha'];

$usuario_validado = valida_login($login_usuario, $senha_usuario);

if($usuario_validado){
    header  ('location:pedidos.php');

}else{
    header  ('location:Negado.php');
}
?>