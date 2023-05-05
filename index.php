<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="vh-100 d-flex justify-content-center align-items-center">
    <div >
    <h1>Password Generator</h1>
	<form action="index.php" method="get">
		<label for="length">Length:</label>
		<input type="number" id="length" name="length" min="1" max="100">
		<button type="submit">Generate</button>
	</form>
	<?php
		include 'functions.php';
		if (isset($_GET['length'])) {
			$password = generatePassword($_GET['length']);
			echo "<p>Your password is: $password</p>";
		}
	?>
    </div>
    
    
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="./assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>