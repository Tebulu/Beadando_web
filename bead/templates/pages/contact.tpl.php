<h3>Ha szeretné felvenni a kapcsolatot velünk, kérjük töltse ki az alábbi űrlapot!</h3>
<div class="container">
	<h2>Kapcsolat</h2>
	<form class="form-horizontal" name="contact" action = ".?page=contact_action" method = "post" onsubmit="return check();">
		<div class="form-group">
			<label class="control-label col-sm-2"  for="name">Név (minimum 5 karakter):</label>
			<div class="col-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" class="form-control" id="name" placeholder="Name:" name="name" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2"  for="email">Email:</label>
			<div class="col-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
					<input type="email" class="form-control" id="email" placeholder="Email:" name="email" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2"  for="message">Üzenet:</label>
			<div class="col-sm-10">
					<textarea class="form-control" rows="5" id="message" name="message" required></textarea>
			</div>
		</div>
		<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-10">
			<button type="submit" onclick="ellenoriz();" class="btn btn-default">Ellenőriz</button>
			<button type="submit" id="send" class="btn btn-default">Küld</button>
		  </div>
		</div>
	</form>
</div>