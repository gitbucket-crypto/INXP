<?php

require_once ('database.class.php');
require_once ('server.class.php');

if(!empty($_POST) &&  _valida() &&_email())
{		
	$email= strval($_POST['emails1'].'');
	$pass =base64_encode(strip_tags(trim($_POST['pass1'])));	
	$sql = "SELECT nome, email, senha, username FROM tb_usuario WHERE email ='$email' AND senha='$pass'";	
	try
	{
		$db = DB::getInstance();		
		$stm = $db->prepare($sql);
		$stm->execute();
		$result=$stm->fetchAll(PDO::FETCH_ASSOC);		
		$nome = $result[0]['nome'];
		$email =$result[0]['email'];
		$username =$result[0]['username'];		
		/**
		Array ( [0] => Array ( [nome] => Pedro Henrique [email] => pedro.hsdeus@gmail.com [senha] => ZmFzdDkwMDI= [username] => dev_0561 ) )
		**/	
		if(strcmp($pass,$result[0]['senha'])==0)
		{
				session_start();
				$_SESSION['login'] = $username;
				$_SESSION['senha'] = $pass;
				$_SESSION['nome']  = $nome;
				$_SESSION['email']=  $email;
				$_SESSION['valid']= TRUE;
				//=========================================================
				$_server = mailServer::getInstance();
				$_server->_set($nome,$pass,$username,$email);
				$b= $_server->emailLogin();
				if($b)
				{
					_error_(20,'');
				}	
		}		
	}catch(Exception $e)
	{
		print $e->getMessage();
	}
	
}


function _valida()
{
		$err='';
		if(empty(trim($_POST['emails1'])))
		{
			$err.='O e-mail deve ser preenchido,';
			$err.=' ';
		}
		if(empty(trim($_POST['pass1'])))
		{
			$err.='A senha deve ser preenchida.';
			$err.=' ';
		}
		if(isset($err) && strlen(trim($err))>0)
		{    
			_error_(10,$err);
			return FALSE;
		}else return TRUE;
}
	
function _error_($code,$e)
{		
	switch($code)
	{
		case 10:
			$response = array('id'=>'10','msg'=>$e);
			echo json_encode($response);
		break;			
		case 20:
			$response = array('id'=>'20','mail'=>'Login realizado com Sucesso');
			echo json_encode($response);
		break;
	}
}	

function _email()
	{ 
		if(!preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(.[[:lower:]]{2,3})(.[[:lower:]]{2})?$/", trim($_POST['emails1'])))
		{
			_error_(10,'O Email dever ser valido.');
			return FALSE; die();
		}
		return TRUE;
	}
	


?>