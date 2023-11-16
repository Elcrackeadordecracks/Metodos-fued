<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel = "stylesheet" href = "main.css">
</head>
<body>
  <div class = "login-container">
    <div id= "main">
      <h1>Sign In</h1>
      <input id = "email" type = "text" placeholder = "Email"></input>
      <input id = "password" type = "password" placeholder = "Password"></input>
      <button id = "submit">Submit</button>
      <p><span>or</span></p>
      <button id = "sign-up">Sign Up</button>
    </div>

    <div id = "create-acct">
      <h1>Create an Account</h1>
      <input id = "email-signup" type = "text" placeholder = "Email *"></input>
  <input id = "confirm-email-signup" type = "email" placeholder = "Confirm Email *"></input>
      <input id = "password-signup" type = "password" placeholder = "Password *"></input>
      <input id = "confirm-password-signup" type = "password" placeholder = "Confirm Password *"></input>
      <button id = "create-acct-btn">Create Account</button>
      <button id = "return-btn">Return to Login</button>
    </div>
  </div>


  <div class="container h-100" id= "main">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../stuff/sitio/logo4.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post" id="frmAcceso">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text"  class="form-control input_user" id="logina" placeholder="Nombre de usuario">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="clavea" class="form-control input_pass" id="clavea" placeholder="Contraseña">
						</div>

						<div class="row">
							<div class="col-8">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Recordarme</label>
							</div>
							<div class="col-4">
								<button type="submit" name="button" class="btn login_btn">Login</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
  <script type = "module" src = "script.js"></script>
</body>
</html>
