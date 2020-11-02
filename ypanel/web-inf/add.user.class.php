<?PHP
require_once ('database.class.php');
require_once ('server.class.php');

if(!empty($_POST) &&  _valida())
{
	if(_email() && _senhas())
	{
			$nome = strip_tags(trim($_POST['namec1']));
			$username = strip_tags(trim($_POST['unamec1']));
			$email = strip_tags(trim($_POST['emailc1']));
			$senha= strip_tags(trim($_POST['passc2']));
			$senha= base64_encode($senha);
			//===========================================================================
			date_default_timezone_set('America/Sao_Paulo');
			$now=date('Y-m-d H:i:s');
			$sql="INSERT INTO tb_usuario (nome,username,email,senha,data_criacao)
                VALUES ('$nome', '$username','$email','$senha','$now')";	
			//=========================================================================== 
			$db = DB::getInstance();		
			$stm = $db->prepare($sql);
			$result=$stm->execute([$nome, $username, $email,$senha,$now]);			
			if($result)
			{
				$_server = mailServer::getInstance();
				$_server->_set($nome,base64_decode($senha),$username,$email);
				$b= $_server->emailSiginup();
				if($b)
				{
					_error_(20,'Cadastro realizado com sucesso.');
				}	
			}	
			else
			{
				$sql = "SELECT * FROM tb_usuario WHERE email ='$email'";
				$stm = $db->prepare($sql);
				$stm->execute();
				$result=$stm->fetchAll(PDO::FETCH_ASSOC);
				if(!empty($result[0]['email']))
				{
					_error_(10,'Usuario já cadastreado, por favor tente usar a opção de recuperação de senha');
					die();
				}		
			}
	}
}	


function _email()
	{ 
		if(!preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(.[[:lower:]]{2,3})(.[[:lower:]]{2})?$/", trim($_POST['emailc1'])))
		{
			_error_(10,'O Email dever ser valido.');
			return FALSE; die();
		}
		return TRUE;
	}
	

function _senhas()
{
	$p1 =strlen(trim($_POST['passc1']));
	$p2 =strlen(trim($_POST['passc2']));
	$val=0;
	if($p1==$p2)
	{
		$e1=str_split(trim($_POST['passc1']));
		$e2=str_split(trim($_POST['passc2']));
		for($i = 0; $i < $p1; $i++)
		{		
			if($e1[$i]===$e2[$i])
			{
				$val=1;
			}else $val=0;
			
		}
		if($val===1)
		{	
			return TRUE;
		}else _error_(10,'As senhas não coincidem');		
	}
	else _error_(10,'As senhas não são igauis');
}



function _valida()
	{
				$err='';				
				if(empty(trim($_POST['namec1'])))
				{
						$err.='O Nome deve ser preenchido,';
						$err.=' ';
				}
				if(empty(trim($_POST['unamec1'])))
				{
						$err.='O nome de usuario deve ser preenchido,';
						$err.=' ';
				}
				if(empty(trim($_POST['emailc1'])))
				{
						$err.='O e-mail deve ser preenchido,';
						$err.=' ';
				}
				if(empty(trim($_POST['passc1'])))
				{
						$err.='A senha deve ser preenchido,';
						$err.=' ';
				}
				if(empty(trim($_POST['passc2'])))
				{
						$err.='A confimação de senha deve ser preenchida,';
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

?>