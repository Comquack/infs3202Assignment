<?php
if(isset($_SESSION['username'])){
	$user = $_SESSION['username'];
		print("		<div id = \"logout\">
			Hello ".$_SESSION['username'].
			"<form method=\"POST\" action=\"logout.php\">
				<div class=\"container\">
					<button type=\"submit\">Logout</button>
				</div>
			</form>
		</div>");		
}else{
		print("		<div id = \"login\">
			<form method=\"POST\" action=\"login.php\">
				<div class=\"container\">
					<label><b>Username</b></label>
					<input type = \"text\" placeholder= \"Username\" name=\"username\">
					
					<label><b>Password</b></label>
					<input type=\"password\" placeholder= \"Password\" name=\"password\">
					
					<button type=\"submit\">Login</button>
				</div>
			</form>
			<form method=\"POST\" action=\"signup1.php\">
				<div class=\"container\">
					<button type=\"submit\">Sign up</button>
				</div>
			</form>
		</div>");
	}
	?>