<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>
	<form action="/welcome" method="POST">
		@csrf;
		<label for="firstname">Firstname :</label><br><br>
		<input type="text" name="firstname" id="firstname"><br><br>
		<label for="lastname">Lastname :</label><br><br>
		<input type="text" name="lastname" id="lastname"><br><br>
		<label for="gender">Gender :</label> <br><br>
		<input type="radio" name="gender" id="male"> <label for="male">Male</label> <br>
		<input type="radio" name="gender" id="female"> <label for="female">Female</label> <br>
		<input type="radio" name="gender" id="other"> <label for="other">Other</label> <br><br>
		<label for="nationality">Nationality :</label> <br><br>
		<select id="nationality" name="nationality">
			<option value="indonesia">Indonesia</option>
			<option value="usa">USA</option>
			<option value="malaysia">Malaysia</option>
			<option value="england">England</option>
		</select>
		<p>Language Spoken :</p>
		<input type="checkbox" name="" id="bhsIndonesia"> <label for="bhsIndonesia">Bahasa Indonesia</label> <br>
		<input type="checkbox" name="" id="english"> <label for="english">English</label> <br>
		<input type="checkbox" name="" id="bhsOther"> <label for="bhsOther">Other</label> <br><br>
		<label>Bio :</label> <br>
		<textarea name="bio" rows="10" cols="30" id="bio"></textarea> <br>
		<input type="submit" name="signup" value="Sign Up">
	</form>
</body>
</html>