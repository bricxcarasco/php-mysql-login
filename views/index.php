<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	<input class="txtUserName" type="text" name="" id="txtUserName">

	<input class="pwdPassword" type="password" name="" id="pwdPassword">

	<button id="btnLogin">Login</button>

</body>

<script type="text/javascript">
	$(document).ready(function() {

		$("#btnLogin").click(function() {
			var txtUserName = $("#txtUserName").val();
			var pwdPassword = $("#pwdPassword").val();
			getLoginInfo(txtUserName, pwdPassword);
		});

		function getLoginInfo(txtUserName, pwdPassword) {
			$.ajax({
				type: "post",
				url: "../controller/LoginController.php?getLoginInfo",
				dataType: "json",
				data: {
					Username: txtUserName,
					Password: pwdPassword
				},
				success: function(data) {
					console.log(data);
					if (data == '1') {
						alert("Access Granted");
					} else {
						alert('False Login');
					}
				}

			});
		}

	});
</script>

</html>