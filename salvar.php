<?php

  $nome= $_POST("nome");
  $sobrenome=$_POST("sobrenome");
  $email=$_POST("email");
  $matricula=$_POST("matricula");
 $usuario=$_POST("usuario");
  $senha=$_POST("senha");
  $confirmarsenha=$_POST("confirmarsenha");
 
  $conexao=mysql_connect("localhost:3306","root","PUC@1234","bancoweb")

  $query="INSERT INTO usuario(nome, sobrenome, email, matricula,usuario, senha, confirmarsenha, )VALUES ('$nome','$sobrenome','$email','$matricula','$usuario','$senha','$confirmarsenha')";

  echo $query;

  mysql_query($conexao,$query);

?>