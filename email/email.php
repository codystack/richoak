<?php
# @Date:   2017-08-02T13:05:52+01:00
# @Last modified time: 2017-08-03T11:30:37+01:00



require('smtp/class.phpmailer.php');
$fname = trim($_POST['fname']);
$emailu = trim($_POST['email']);
$tel = trim($_POST['tel']);
$msg = trim($_POST['msg']);
$email ='info@richoakschools.com';


$mail = new PHPMailer();
if($fname == "" || $emailu == "" || $tel=="" || $msg == ""){
    header("Location: ../contact-us.php?update=wrong");
}else {
    $subject = "Rich Oak School | User Contacted You";
    $content = "<h3>Customer, <b>$fname&nbsp;, with Email: $emailu and Telephone: $tel, Contacted You</b></h3>
<p>
<br/>
<br/>
<p>Saying: $msg
 </p>
<br/>
<br/>
<p>Ignore this message if your not an Admin</p>
</p>";
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "ssl";
    $mail->Port     = 465;
    $mail->Username = "sender@richoakschools.com";
    $mail->Password = "RichOak2020@@";
    $mail->Host     = "a2plvcpnl8385.prod.iad2.secureserver.net";
    $mail->Mailer   = "smtp";
    $mail->SetFrom("sender@richoakschools.com", "Rich Oak Schools");
    $mail->AddReplyTo("sender@richoakschools.com", "Rich Oak Schools");
    $mail->AddAddress($email);
    $mail->Subject = $subject;
    $mail->WordWrap   = 80;
    $mail->MsgHTML($content);
    $mail->IsHTML(true);

    if (!$mail->Send())
        header("Location: ../contact-us.php?update=failed");
    else
        header("Location: ../contact-us.php?update=success");

}
?>
