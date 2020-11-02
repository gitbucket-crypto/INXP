<?php
php_ini_loaded_file();
require_once ('../web-inf/database.class.php');

$path= "uploads/";
$valid_extensions = array('jpeg', 'jpg', 'png', 'pdf' ); // valid extensions


if(!empty($_POST) && isset($_FILES)  **_valida())
{
	//var_dump($_FILES);
	//echo ('error'.$_FILES['png']['error']);
	$img = $_FILES['png']['name'];
	$tmpIMG = $_FILES['png']['tmp_name'];
	
	$pdf = $_FILES['pdf']['name'];	
	$tmpPDF = $_FILES['pdf']['tmp_name'];
	
	$ext1 = strtolower(pathinfo($img, PATHINFO_EXTENSION));
	$ext2 = strtolower(pathinfo($pdf, PATHINFO_EXTENSION));
	$tags = $_POST['tags'];
	
	$final_image = rand(1000,1000000).$img;
	$final_file = rand(1000,1000000).$pdf;
	$b = file_exists("uploads". DIRECTORY_SEPARATOR);
	
	 /**
	 if($b===FALSE)
	{
		mkdir('uploads' ,0777, true);
	}
	 **/
	if(in_array($ext1, $valid_extensions) & in_array($ext2, $valid_extensions)) 
	{
		$path1 = $path.strtolower($final_image); 
		$path2 = $path.strtolower($final_file);	
			
		
		if(move_uploaded_file($tmpIMG,$path1) && move_uploaded_file($tmpPDF,$path2))
		{			
			$titulo = strip_tags(trim($_POST['title']));
			$resumo = strip_tags(trim($_POST['resumo']));
			$autor = strip_tags(trim($_POST['autor']));
			
			$autor2=''; 
			$autor3='';
			if(isset($_POST['autor_2']))
			{
				if(!empty(trim($_POST['autor_2'])))
				{
					$autor2= strip_tags(trim($_POST['autor_2']));
				}
			}else  $autor2='';
			
			if(isset($_POST['autor_3']))
			{
				if(!empty(trim($_POST['autor_3']))) 
				{
					$autor3= strip_tags(trim($_POST['autor_3']));
				}
			}else $autor3='';		
			date_default_timezone_set('America/Sao_Paulo');
			$now=date('Y-m-d');
			
			$sql="INSERT INTO tb_artigo (titulo,resumo,imagem,pdf,autor_prin,autor_sec,autor_terc,imagem_path,pdf_path,data_criacao,tags) values('$titulo','$resumo','$path1','$path2','$autor','$autor2','$autor3','$path1','$path2','$now','$tags')";
		
			$db = DB::getInstance();	
			$stm = $db->prepare($sql);
			$result=$stm->execute([$titulo, $resumo,$path1,$path2,$autor,$autor2,$autor3,$path1,$path2,$now,$tags ]);
			
			if($result)
			{
					_error_(20,'Cadastro realizado com sucesso.');					
			}
			else _error_(10,'Erro ao cadastrar o artigo.');	
		}else echo 'fail';
	}	 

}


function _valida()
	{
				$err='';				
				if(empty(trim($_POST['title'])))
				{
						$err.='O Titulo deve ser preenchido, ';
						$err.=' ';
				}
				if(empty(trim($_POST['resumo'])))
				{
						$err.='O resumo deve ser preenchido,';
						$err.=' ';
				}
				if(empty(trim($_POST['autor'])))
				{
						$err.='O autor(es) deve ser preenchido,';
						$err.=' ';
				}
				if(empty(trim($_POST['tags'])))
				{
						$err.='As tags devem ser preenchidas,';
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