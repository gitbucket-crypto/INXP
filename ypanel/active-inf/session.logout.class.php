<?php


if(empty($_SERVER['CONTENT_TYPE']))
{
    session_start();

    $_SERVER['CONTENT_TYPE'] = "application/x-www-form-urlencoded";
    if(isset($_SESSION["nome"]))
    {
      session_destroy();
      unset($_SESSION['nome']); unset($_SESSION['login']);
      http_response_code (200);
	  $response = array('http'=>'200','msg'=>'Logout realizado com sucesso.');	  
      echo json_encode($response);
      
    }
   else
   {
     session_destroy();
     unset($_SESSION['nome']); unset($_SESSION['login']);
	 $response = array('http'=>'403','cli'=>'Usuario nao logado!');	  
     echo json_encode($response);    
     die();
   }
}


?>