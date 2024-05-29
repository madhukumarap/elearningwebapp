<?phpsession_start();require('db.php');$email=$_POST['email'];	$html="Registration successfully completed ";	smtp_mailer($email,'Registration successfull',$html);function smtp_mailer($to,$subject, $msg){
	require("smtp/class.phpmailer.php");
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPDebug = 1; 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'TLS'; 	$mail->Host = "smtp.gmail.com";	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "prasadmp151@gmail.com";
	$mail->Password = "Sachinmprasad";
	$mail->SetFrom("prasadmp151@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		return 0;
	}else{
		return 1;
	}
}?>