<?php
php_ini_loaded_file();
session_start();
ob_start();

function onload()
{
  if(!isset($_SESSION["nome"]))
  {
  // Usuário não logado! Redireciona para a página de login
  header("Location: index.html");
  exit;
  die();
  }
}

onload();

?>
<html>
	<head>
		<title>Dashboard YPanel</title>
		<meta charset="UTF-8">
		<!--===============================================================================================-->	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="../meta-inf/images/icons/favicon.ico"/>
		<!--===============================================================================================-->	
		<script src="../meta-inf/js/lock.js"></script>
		<link rel="stylesheet" type="text/css" href="../meta-inf/css/util.css">
		<link rel="stylesheet" type="text/css" href="../meta-inf/css/main.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!--===============================================================================================-->	
		 <style>
		 body
		 {
			 background-color:#f1f1f1;
			 margin:0 0 0 0;
		 }
		 
		ul 
		{
			list-style-type: none;
			margin: 0;
			padding: 0;
			padding-top:10px;
			width: 17%;
			background-color: #333;  
			position: fixed;
			height: 100%;
			overflow: auto;
			font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; font-size: 24px; font-style: normal; font-variant: normal; font-size: 16px; font-style: normal
		}

		li a 
		{
			display: block;
			color:white;
			padding: 8px 16px;
			text-decoration: none;
		}

		li a.active 
		{
			background-color: #4CAF50;
			color: white;
		}

		li a:hover:not(.active) 
		{
			background-color: #4CAF50;
			color: white;
		}
		
		label{font-size:16px;}
		
		div.content{
			border-radius: 15px;
			background: white;
			padding: 60px;
			margin-left:250px !important;
			margin-right:50px !important;
			padding-top:30px;
			height:600px !important; 
			font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; font-size: 24px; font-style: normal; font-variant: normal; font-size: 14px; font-style: normal
					
		}
		
		div.nav{
			width: 15%;
			background-color: #333;  
			margin-top:0px;
			padding-top:0px;
			flex:left;
		}
		
		div.form01{				
			padding-left:200px !important;
		}
		
		 </style>
		 <script>
			  $(document).ready(function() 
				{
					$('#out').click(function ()
					{
						$.post('session.logout.class.php', function(response)
						{
							var obj = JSON.parse(response);
							//$response = array('http'=>'200','msg'=>'Logout realizado com sucesso.');	  
							if(obj.http=='200' | obj.http==200)
							{
								window.alert(obj.msg);
								window.location = '../index.html';
							}
							else if(obj.http=='403' | obj.http==403)
							{
								window.location = '../index.html';
							}		
						});
					});
				});
		 </script>
	</head>
	<body onload="onload();" data-spy="scroll" data-target=".site-navbar-target" oncontextmenu="return false"

    ondragstart="return false" onmouseover="window.status='..message perso .. '; return true;">
		
		<section>
		<div class='nav' >
		<ul>			
			<li><a id='out'>Logout</a></li>
			<li><a href="uploader.php" >Cadastrar Artigo</a></li>
			<li><a href="#contact">Contact</a></li>
			
			<li><a href='javascript:void(N);' ><?php echo $_SESSION["nome"]; ?></a></li>
			
			<li><a href='javascript:void(N);'><?php echo $_SESSION['email']; ?></a></li>
		</ul>
		</div>		
		</section>
		<section>
		<br>
		<div class='content'>
			
			</div>
		</div>
		</section>
	</body>	
</html>