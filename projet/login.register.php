<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  
</head>

</html>
<h2></h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="register_action.php" method="POST">
			<h1>Create Account</h1>
			<div class="social-container">
			<img src="http://localhost/projet/img/register.png" width=35% >
				
			</div>
			<span>Use your email for registration</span>
			<input name="Nom" type="text" placeholder="Nom" />
            <input name="Prenom" type="text" placeholder="pernom" />
			<input name="email"type="email" placeholder="Email" />
			<input name="Mot_passe" type="password" placeholder="Mot de passe" />
			<button type="submit">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login_action.php"  method="POST" >
			<h1>Sign in</h1>
			<div class="social-container">
				
				<img src="http://localhost/projet/img/login.png" width=80% >
				
			</div>
			<span> Use your account</span>
			<input for="search"  name="email" type="email" placeholder="Email" />
			<input for="search" name="Mot_passe"type="password" placeholder="Mot de passe" />
			<button type="submit">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<body>
    <script>
        const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
}); 
    </script>
</body>