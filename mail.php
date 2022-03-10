<?php
if(isset($_POST['btnsend']))
{
$from = $_POST['email'];
$mobile = $_POST['mobile'];
$name = $_POST['name'];
$subject = $_POST['sub'];
$msg ="Hi,".$name."contact:".$mobile."this is the message". $_POST['msg'];
//$to = "info@theunirise.com";
$to = "info@theunirise.com";
$headers = "From:".$from."" . "\r\n";


if(mail($to,$subject,$msg,$headers)){
    echo "<script>alert('mail has been sent successfully'); window.location='contact.php';</script>";

}
else{
    echo "<script>alert('something went wrong!please try again');window.location='contact.php';</script>";
}
}


?>