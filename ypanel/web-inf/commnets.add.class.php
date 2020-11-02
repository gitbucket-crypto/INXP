<?php
require_once ('database.class.php');
require_once ('server.class.php');

if(!empty($_POST) &&  _valida() && _email())
{
	$nome = strip_tags((trim($_POST['name'])));
	$email = strip_tags((trim($_POST['email'])));
	$website = strip_tags((trim($_POST['website'])));
	$comentario= strip_tags((trim($_POST['comment'])));
	$id = strip_tags((trim($_POST['id'])));

	date_default_timezone_set('America/Sao_Paulo');
	$now=date('Y-m-d');
	
	$sql= "INSERT INTO tb_comment (id_artigo,nome,email,website,comentario,data_criacao) VALUES ('$id','$nome','$email','$website','$comentario','$now')";
	$db = DB::getInstance();		
	$stm = $db->prepare($sql);
	$result=$stm->execute([$id,$nome, $email, $website,$comentario,$now]);	
	if($result)
	{
			$_server = mailServer::getInstance();
			$_server->_setX($nome,$comentario,$website,$email);
			$b =$_server->emailComment();
			if($b)
				{
					_error_(20,'Comentario realizado com sucesso.');
				}	
				else _error_(10,'Houve uma falha no sistema tente mais tarde');
	}
}


function _valida()
	{
				$err='';				
				if(empty(trim($_POST['name'])))
				{
						$err.='O Nome deve ser preenchido,';
						$err.=' ';
				}				
				if(empty(trim($_POST['email'])))
				{
						$err.='O e-mail deve ser preenchido,';
						$err.=' ';
				}
				if(empty(trim($_POST['comment'])))
				{
						$err.='O comentario deve ser preenchido,';
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
			$response = array('id'=>'20','mail'=>$e);
			echo json_encode($response);
		break;
	}
}


function _email()
	{ 
		if(!preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(.[[:lower:]]{2,3})(.[[:lower:]]{2})?$/", trim($_POST['email'])))
		{
			_error_(10,'O Email dever ser valido.');
			return FALSE; die();
		}
		return TRUE;
	}

?>