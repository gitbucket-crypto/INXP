<?PHP
require_once ('database.class.php');
require_once ('server.class.php');
 
 
if(!empty($_POST) &&  _valida() &&_email())
{
	$email= strval($_POST['emailr1'].'');
	$username = strip_tags(trim($_POST['user1']));
	$sql="SELECT nome, email, senha, username FROM tb_usuario WHERE  email ='$email' OR nome='$username'";
	$db = DB::getInstance();		
	$stm = $db->prepare($sql);
	$stm->execute();
	$result=$stm->fetchAll(PDO::FETCH_ASSOC);
	//$result = $result[0];
	//print_r($result);	
	if(!empty($result[0]))
	{
		$result = $result[0];
		$nome = $result['nome'];
		$email = $result['email'];
		$senha = base64_decode($result['senha']);
		$username =$result['username'];
		$_server = mailServer::getInstance();
		$_server->_set($nome,$senha,$username,$email);
		$b= $_server->emailRecovery();
		if($b)
		{
			_error_(20,'Os dados de login foram enviados para o e-mail cadastrado: '.$email); die();
		}
	}else _error_(10,'Usuário não cadastrado.'); die();	
}
 
 function _valida()
{
	$err='';
	if(empty(trim($_POST['emailr1'])))
	{
			$err.='O e-mail deve ser preenchido,';
			$err.=' ';
	}
	if(empty(trim($_POST['user1'])))
	{
			$err.='O nome de usuario deve ser preenchido,';
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
	if(!preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(.[[:lower:]]{2,3})(.[[:lower:]]{2})?$/", trim($_POST['emailr1'])))
	{
			_error_(10,'O Email dever ser valido.');
			return FALSE; die();
	}
	return TRUE;
}	

?>