<?php
php_ini_loaded_file();
session_start();
ob_start();

function onload()
{
  if(!isset($_SESSION["nome"]))
  {
  // Usuário não logado! Redireciona para a página de login
  header("Location: ../index.html");
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
		
		.label{font-size:16px; color:lightgray;}
		
				
		div.content{
			border-radius: 15px;
			background: white;
			padding: 160px;
			margin-left:250px !important;
			margin-right:50px !important;
			padding-top:30px;
			height:800px !important; 
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
			padding-left:60px !important;
			height:600px !important;
		}
		
		#out{color:white;}	

		input[type=text], textarea,input[type=file] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: none;
			border-bottom: 2px solid #4CAF50;
			font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; font-size: 24px; font-style: normal; font-variant: normal; font-size: 16px; font-style: normal
			font-size:14px;
			}	
			
			label{width:170px !important; }
			
			input[type=button], input[type=submit], input[type=reset] 
			{
					background-color: #4CAF50;
					border: 5px;
					color: white;
					padding: 16px 32px;
					text-decoration: none;
					margin: 4px 2px;
					cursor: pointer;
					font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; font-size: 24px; font-style: normal; font-variant: normal; font-size: 16px; font-style: normal
					font-size:16px;
			}
		 </style>
		 
	</head>
	<body onload="onload();" data-spy="scroll" data-target=".site-navbar-target" oncontextmenu="return false"

    ondragstart="return false" onmouseover="window.status='..message perso .. '; return true;">
		
		<section>
		<div class='nav' >
		<ul>			
			<li><a href='javascript:void(0)'><p id='out' >Logout</p></a></li>
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
			<div id='form01' class='wrap-login100 '>			  
				<span style='font-size: 26px;' style='padding-left:120px !important;'>
					&nbsp;Cadastro de Artigos e Publicações
				</span>
				<form id='form'  style=' width:60%;' autocomplete="off"  method="post">
					<input type="hidden" autocomplete="false"><br><br>
					<div style='120px;'>
					<label for="title" >Título:</label>
					<input type="text" name="title"id="title" placeholder="Título" autocomplete="off"></div>
					<div style='120px;'>
					<label for="autor">Autor:</label>
					<input type="text" name="autor"id="autor" placeholder="Autor"autocomplete="off"></div>
					<div style='120px;'><br>
					<label for="check">Segundo Autor:</label>
					<input type="checkbox" name="check1"id="check1" placeholder="Autor"autocomplete="off" onclick='enableA();'></div><br>
					<div style='120px;'>
					<label for="autor_2">Seg. Autor:</label>
					<input type="text" name="autor_2"id="autor_2" placeholder="Autor"autocomplete="off" disabled><br></div>
					<div style='120px;'><br>
					<label for="check">Terceiro Autor:</label>
					<input type="checkbox" name="check2"id="check2" placeholder="Autor"autocomplete="off" onclick='enableB();'></div><br>
					<div style='120px;'>
					<label for="autor_3">Terc. Autor:</label>
					<input type="text" name="autor_3"id="autor_3" placeholder="Autor"autocomplete="off" disabled><br></div><br>
					<div style='120px;'>
					<label for="tags">Tags:</label>
					<input type="text" name="tags"id="tags" placeholder="tags" autocomplete="off" ><br></div><br>	
					<label for="resumo">Resumo:</label>
					<textarea  name="resumo"id="resumo" placeholder="Resumo" rows='3' autocomplete="off"></textarea></div>
					<div style='120px;'>
					<label for="pdf">Arquivo PDF:</label>
					<input type="file" id="pdf" name="pdf"  accept="application/pdf" placeholder="Arquivo"><br></div>
					<div style='120px;'>
					<label for="png">Imagem:</label>
					<input type="file" tid="png" name="png"  accept="image/png,image/jpeg" placeholder="Arquivo"><br></div>
					<div style='120px;'>
						 <input type="submit" class="login100-form-btn" value="Cadastar" id="saveBTN">&nbsp; 
						 <input type="reset" class="login100-form-btn" value="Cancelar">
					<br></div>
				</form>	
			</div>
		</div>
		</section>
		
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
		 		<script>
			  $(document).ready(function(e) 
				{
					$('#form').on('submit',function (e)
					{
						e.preventDefault();
						$.ajax({
							url: "file.uploader.class.php",
							type: "POST",
							data:  new FormData(this),
							cache: false,
							contentType: false,							
							processData:false,
							success: function(response)
							{
								var obj = JSON.parse(response);
								switch(obj.id)
								{
									case 10:case '10': alert(obj.msg); break;
									case 20:case '20': alert(obj.mail); $("#form")[0].reset(); $( "#autor_2" ).prop( "disabled", true ); $( "#autor_3" ).prop( "disabled", true );break;
								}
							}         
						});
						
					});
				});
		 </script>
		 <script>
			function enableA()
			{
				
				if($('#autor_2').is(':disabled')===true)
				{
					$( "#autor_2" ).prop( "disabled", false );
				}else $( "#autor_2" ).prop( "disabled", true );
			}
			function enableB()
			{
				if($('#autor_3').is(':disabled')===true)
				{
					$( "#autor_3" ).prop( "disabled", false );
				}else $( "#autor_3" ).prop( "disabled", true );
			}
			
		 </script>
	</body>	
	
</html>
