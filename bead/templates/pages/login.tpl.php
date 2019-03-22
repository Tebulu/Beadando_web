<!--Bejelentkezés, regisztráció-->
<h3>Ha már regisztrált, jelentkezzen be!</h3>
<div class="container">
	<h2>Bejelentkezés</h2>
	<form class="form-horizontal" action = "?page=login_action" method = "post">
		<div class="form-group">
			<label class="control-label col-sm-2" for="user_name">Felhasználó név:</label>
			<div class="col-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" class="form-control" id="user_name" placeholder="User Name:" name="user_name" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="password">Password:</label>
			<div class="col-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>			
					<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
				</div>
			</div>
		</div>
		<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Submit</button>
		  </div>
		</div>
	</form>
</div>
   
    <h3>Regisztrálja magát, ha még nem felhasználó!</h3>
	<div class="container">
	<h2>Regisztráció</h2>
	<form class="form-horizontal" action = "?page=signup_action" method = "post">
		<div class="form-group">
			<label class="control-label col-sm-2" for="first_name">Vezeték név:</label>
			<div class="col-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" class="form-control" id="first_name" placeholder="First Name:" name="first_name" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="last_name">Kereszt név:</label>
			<div class="col-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" class="form-control" id="last_name" placeholder="Last Name:" name="last_name" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="user_name">Felhasználó név:</label>
			<div class="col-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" class="form-control" id="user_name" placeholder="User Name:" name="user_name" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Email:</label>
			<div class="col-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
					<input type="email" class="form-control" id="email" placeholder="Email:" name="email" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="password">Jelszó:</label>
			<div class="col-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>			
					<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="password2">Jelszó (még egyszer):</label>
			<div class="col-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>			
					<input type="password" class="form-control" id="password2" placeholder="Password (retry):" name="password2" required>
				</div>
			</div>
		</div>
		<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Regisztráció</button>
		  </div>
		</div>
	</form>
</div>
