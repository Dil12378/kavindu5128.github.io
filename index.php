
<?php
function _e( $string ) {
	return htmlentities( $string, ENT_QUOTES, 'UTF-8', false );
}





// Check for form submission
if(isset($_POST["submit"])){
    $name   =$_POST["name"];
		$email  =$_POST["email"];
		$massage=$_POST["massage"];


$TO="senavirathne5128@gmail.com";
$mail_subject="my first email box";
$email_body="<b>FROM:</b>{$name}<br>";
$email_body="<b>EMAIL:</b>{$email}<br>";
$email_body="<b>MASSAGE:</b>{$massage}";
$header="From:{$email}\r\nContent-Type: text/html;";
mail($TO,$mail_subject,$email_body,$header);







}






















?>






















<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Email</title>

  </head>
<body>
  <style media="screen">
  .box-grid{display: grid;
    grid-auto-rows: 21px 1fr;
  grid-template-columns: 1fr;
  width: 800px;
  margin: 20px;}
  .name1{grid-row-start: 1/2;
  }
  .name{grid-row-start: 2/3;
  }
  .email{grid-row-start: 2/3;}
  .message{grid-row-start: 2/3;
  height: 50px;}
  .answer{grid-row-start: 2/3;}
  .button{width: 100px;}
  .title{padding-left: 20px;}
  .errors{background-color: red;}
  .success{background-color: green;}

  </style>
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
