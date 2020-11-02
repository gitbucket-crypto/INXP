<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

class mailServer
{
		private function __construct()
		{
			
		}
		
		public static function getInstance() 
		{
			if(!self::$_instance) 
			{ 
			self::$_instance = new self();
			}
			return self::$_instance;
		}
		
		
		protected $name;
		protected $senha;
		protected $username;
		protected $email;
		protected $comentario;
		protected $website;
		private static $_instance;  
		private static $_mail;

		public function _set($n,$s,$u,$e)
		{
			$this->name =$n;
			$this->senha =$s;
			$this->username =$u;
			$this->email=$e;
		}

		public function _setX($n1,$cmt,$web,$e1)
		{
			$this->name =$n1;
			$this->comentario =$cmt;
			$this->website =$web;
			$this->email=$e1;
		}
		
		
		
		public function emailLogin()
		{
				date_default_timezone_set('America/Sao_Paulo');		
				$subject = "Login Realizado ".date("d/m/y")."  ".date("H:i")." no YPanel";
				$msg = " Não responda este e-mail, este é um email de aviso, toda vez que se logarem.";
				$posted = false;
				$htmlbody=""; 
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; ' . "\r\n";
				$headers .= "From: noreply@inesp.com.br\r\n";
				$headers .= "Reply-To: noreply@inesp.com.br\r\n";
				$htmlbody.="<!DOCTYPE html>";
				$htmlbody.="<html>";
				$htmlbody.='<table>';
				$htmlbody.='<tr>';
				$htmlbody.='<td width="80px">&nbsp;</td>';
				$htmlbody.=' <td width="84%" align="left" valign="top"><p><strong><em>"'.$subject.'"</em></strong><br/>';
				$htmlbody.='</p>';
				$htmlbody.='<p>>Nome:'.$this->name.'</p><hr>';
				$htmlbody.='<p>Email:'.$this->email.'</p><hr>';
				$htmlbody.='<p>Username:'.$this->username.'</p><hr>';       
				$htmlbody.='<br>';
				$htmlbody.='<p><strong><em>Enviou a seguinte menssagem,</em></strong></p>';
				$htmlbody.='<p><font style="font-family: Verdana, Geneva, sans-serif; color:#666766; font-size:13px; line-height:21px">'.$msg.'<br/>';
				$htmlbody.='<br/>';
				$htmlbody.='<td width="8%">&nbsp;</td>';
				$htmlbody.='</tr>';
				$htmlbody.='<tr>';
				$htmlbody.='<td>&nbsp;</td>';
				$htmlbody.='</tr>';
				$htmlbody.='</table>';
				$htmlbody.="</html>";
				//=========================================================
				$_mail = new PHPMailer();
                $_mail->isSMTP();
                $_mail->Host = 'smtp.gmail.com';
                $_mail->SMTPAuth = true;
                $_mail->SMTPSecure = 'tls';
                $_mail->Username = 'contato.fastcoffee@gmail.com';
                $_mail->Password = 'fast9002';
                $_mail->Port = 587;
                $_mail->CharSet="UTF-8";
                $_mail->Sender='noreply@inesp.com.br';
                $_mail->setFrom('noreply@inesp.com.br');
                $_mail->AddReplyTo('noreply@inesp.com.br');
                $_mail->addAddress($this->email, $this->name);
                $_mail->Subject=$subject;
                $_mail->IsHTML(true);
                $_mail->Body =$htmlbody;
				//=========================================================
				 if($_mail->send())
				 {
					 return TRUE; exit;
				 }	 
				 else return FALSE;
		}
		



	public function emailSiginup()
		{
				date_default_timezone_set('America/Sao_Paulo');		
				$subject = "Cadastro Realizado ".date("d/m/y")."  ".date("H:i")." no YPanel";
				$msg = " Não responda este e-mail, este é um email de aviso, esta é uma confimração de cadastro no YPanel.";
				$posted = false;
				$htmlbody=""; 
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; ' . "\r\n";
				$headers .= "From: noreply@inesp.com.br\r\n";
				$headers .= "Reply-To: noreply@inesp.com.br\r\n";
				$htmlbody.="<!DOCTYPE html>";
				$htmlbody.="<html>";
				$htmlbody.='<table>';
				$htmlbody.='<tr>';
				$htmlbody.='<td width="80px">&nbsp;</td>';
				$htmlbody.=' <td width="84%" align="left" valign="top"><p><strong><em>"'.$subject.'"</em></strong><br/>';
				$htmlbody.='</p>';
				$htmlbody.='<p>>Nome:&nbsp;'.$this->name.'</p><hr>';
				$htmlbody.='<p>Email:&nbsp;'.$this->email.'</p><hr>';
				$htmlbody.='<p>Username:&nbsp;'.$this->username.'</p><hr>';       
				$htmlbody.='<p>Senha:&nbsp;'.$this->senha.'</p><hr>';       
				$htmlbody.='<br>';
				$htmlbody.='<p><strong><em>Enviou a seguinte menssagem,</em></strong></p>';
				$htmlbody.='<p><font style="font-family: Verdana, Geneva, sans-serif; color:#666766; font-size:13px; line-height:21px">'.$msg.'<br/>';
				$htmlbody.='<br/>';
				$htmlbody.='<td width="8%">&nbsp;</td>';
				$htmlbody.='</tr>';
				$htmlbody.='<tr>';
				$htmlbody.='<td>&nbsp;</td>';
				$htmlbody.='</tr>';
				$htmlbody.='</table>';
				$htmlbody.="</html>";
				//=========================================================
				$_mail = new PHPMailer();
                $_mail->isSMTP();
                $_mail->Host = 'smtp.gmail.com';
                $_mail->SMTPAuth = true;
                $_mail->SMTPSecure = 'tls';
                $_mail->Username = 'contato.fastcoffee@gmail.com';
                $_mail->Password = 'fast9002';
                $_mail->Port = 587;
                $_mail->CharSet="UTF-8";
                $_mail->Sender='noreply@inesp.com.br';
                $_mail->setFrom('noreply@inesp.com.br');
                $_mail->AddReplyTo('noreply@inesp.com.br');
                $_mail->addAddress($this->email, $this->name);
                $_mail->Subject=$subject;
                $_mail->IsHTML(true);
                $_mail->Body =$htmlbody;
				//=========================================================
				 if($_mail->send())
				 {
					 return TRUE; exit;
				 }	 
				 else return FALSE;
		}
		
		
		public function emailRecovery()
		{
				date_default_timezone_set('America/Sao_Paulo');		
				$subject = "Recuperação de Senha site Iensp  ".date("d/m/y")."  ".date("H:i")." no YPanel";
				$msg = " Não responda este e-mail, este é um email de aviso, esta é uma de que foi solicitado a recuperação de usuário e senha.";
				$posted = false;
				$htmlbody=""; 
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; ' . "\r\n";
				$headers .= "From: noreply@inesp.com.br\r\n";
				$headers .= "Reply-To: noreply@inesp.com.br\r\n";
				$htmlbody.="<!DOCTYPE html>";
				$htmlbody.="<html>";
				$htmlbody.='<table>';
				$htmlbody.='<tr>';
				$htmlbody.='<td width="80px">&nbsp;</td>';
				$htmlbody.=' <td width="84%" align="left" valign="top"><p><strong><em>"'.$subject.'"</em></strong><br/>';
				$htmlbody.='</p>';
				$htmlbody.='<p>>Nome:&nbsp;'.$this->name.'</p><hr>';
				$htmlbody.='<p>Email:&nbsp;'.$this->email.'</p><hr>';
				$htmlbody.='<p>Username:&nbsp;'.$this->username.'</p><hr>';       
				$htmlbody.='<p>Senha:&nbsp;'.$this->senha.'</p><hr>';       
				$htmlbody.='<br>';
				$htmlbody.='<p><strong><em>Enviou a seguinte menssagem,</em></strong></p>';
				$htmlbody.='<p><font style="font-family: Verdana, Geneva, sans-serif; color:#666766; font-size:13px; line-height:21px">'.$msg.'<br/>';
				$htmlbody.='<br/>';
				$htmlbody.='<td width="8%">&nbsp;</td>';
				$htmlbody.='</tr>';
				$htmlbody.='<tr>';
				$htmlbody.='<td>&nbsp;</td>';
				$htmlbody.='</tr>';
				$htmlbody.='</table>';
				$htmlbody.="</html>";
				//=========================================================
				$_mail = new PHPMailer();
                $_mail->isSMTP();
                $_mail->Host = 'smtp.gmail.com';
                $_mail->SMTPAuth = true;
                $_mail->SMTPSecure = 'tls';
                $_mail->Username = 'contato.fastcoffee@gmail.com';
                $_mail->Password = 'fast9002';
                $_mail->Port = 587;
                $_mail->CharSet="UTF-8";
                $_mail->Sender='noreply@inesp.com.br';
                $_mail->setFrom('noreply@inesp.com.br');
                $_mail->AddReplyTo('noreply@inesp.com.br');
                $_mail->addAddress($this->email, $this->name);
                $_mail->Subject=$subject;
                $_mail->IsHTML(true);
                $_mail->Body =$htmlbody;
				//=========================================================
				 if($_mail->send())
				 {
					 return TRUE; exit;
				 }	 
				 else return FALSE;
		}


		public function emailComment()
		{
				date_default_timezone_set('America/Sao_Paulo');		
				$subject = "Comentario Postado em  ".date("d/m/y")."  ".date("H:i")." no website INESP";
				$msg = " Não responda este e-mail, este é um email de aviso";
				$posted = false;
				$htmlbody=""; 
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; ' . "\r\n";
				$headers .= "From: noreply@inesp.com.br\r\n";
				$headers .= "Reply-To: noreply@inesp.com.br\r\n";
				$htmlbody.="<!DOCTYPE html>";
				$htmlbody.="<html>";
				$htmlbody.='<table>';
				$htmlbody.='<tr>';
				$htmlbody.='<td width="80px">&nbsp;</td>';
				$htmlbody.=' <td width="84%" align="left" valign="top"><p><strong><em>"'.$subject.'"</em></strong><br/>';
				$htmlbody.='</p>';
				$htmlbody.='<p>Nome:&nbsp;'.$this->name.'</p><hr>';
				$htmlbody.='<p>Email:&nbsp;'.$this->email.'</p><hr>';
				$htmlbody.='<p>Comentario:&nbsp;'.$this->comentario.'</p><hr>';       
				$htmlbody.='<p>Website:&nbsp;'.$this->website.'</p><hr>';       
				$htmlbody.='<br>';
				$htmlbody.='<p><strong><em>Enviou a seguinte menssagem,</em></strong></p>';
				$htmlbody.='<p><font style="font-family: Verdana, Geneva, sans-serif; color:#666766; font-size:13px; line-height:21px">'.$msg.'<br/>';
				$htmlbody.='<br/>';
				$htmlbody.='<td width="8%">&nbsp;</td>';
				$htmlbody.='</tr>';
				$htmlbody.='<tr>';
				$htmlbody.='<td>&nbsp;</td>';
				$htmlbody.='</tr>';
				$htmlbody.='</table>';
				$htmlbody.="</html>";
				//=========================================================
				$_mail = new PHPMailer();
                $_mail->isSMTP();
                $_mail->Host = 'smtp.gmail.com';
                $_mail->SMTPAuth = true;
                $_mail->SMTPSecure = 'tls';
                $_mail->Username = 'contato.fastcoffee@gmail.com';
                $_mail->Password = 'fast9002';
                $_mail->Port = 587;
                $_mail->CharSet="UTF-8";
                $_mail->Sender='noreply@inesp.com.br';
                $_mail->setFrom('noreply@inesp.com.br');
                $_mail->AddReplyTo('noreply@inesp.com.br');
                $_mail->addAddress($this->email, $this->name);
                $_mail->Subject=$subject;
                $_mail->IsHTML(true);
                $_mail->Body =$htmlbody;
				//=========================================================
				 if($_mail->send())
				 {
					 return TRUE; exit;
				 }	 
				 else return FALSE;
		}
		
}

?>