

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link
			rel="stylesheet"
			href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
		/>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="process.php" method="post">

			<div class="popo">
				<label for="username"><i class="fas fa-user"></i></label>
				<input class="popi"
					type="email"
					name="email"
					required="required"
					placeholder="email"
					autocomplete="off"
				/>
			</div>
			<div class="popo">
				<label for="password"><i class="fas fa-lock"></i></label>
				<input class="popi"
					type="password"
					name="password"
					required="required"
					placeholder="password"
					autocomplete="off"
				/>
</div>
				<input type="submit" value="login" />
			</form>
		</div>
	</body>
</html>
