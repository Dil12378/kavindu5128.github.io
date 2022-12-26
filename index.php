
<?php
if(isset($_POST["submit"])){
    $name   =$_POST["name"];
		$email  =$_POST["email"];
		$massage=$_POST["massage"];


    $to="senavirathne5128@gmail.com";
    $mail_subject="my first email box";
    $email_body="<b>FROM:</b>{$name}<br>";
    $email_body.="<b>EMAIL:</b>{$email}<br>";
    $email_body.="<b>MASSAGE:</b>{$massage}";
    $header="From:{$email}\r\nContent-Type: text/html;";
    mail($to,$mail_subject,$email_body,$header);
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Email</title>
<link rel="stylesheet" href="style.css">

  </head>
<body>

    <div class="">
        <h1 class="title">Enter your massage below</h1>
        <div class="errors">

        </div>
        <div class="success">

        </div>
        <form class="" action="index.html" method="post">
            <div class="box-grid">
                <label for="" class="name1">Name</label>
                <input type="text" name="name" value="" class="name" placeholder="e.g kavindu">
            </div>
            <div class="box-grid">
                <label for="" class="name1">Email</label>
                <input type="text" name="email" value="" class="email" placeholder="e.g dilshan@gmail.com">
            </div>
            <div class="box-grid">
                <label for="" class="name1">Message</label>
                <input type="text" name="massage" value="" class="message">
            </div>

            <div class="box-grid">
              	<input id="submit" name="submit" type="submit" value="Send" class="button">
            </div>
        </form>
    </div>


</body>
</html>
