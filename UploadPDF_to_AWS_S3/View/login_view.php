
<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<style>
			body {
				font-family: Arial, sans-serif; text-align: center;
			}
			.login-container { 
				width: 300px; margin: 50px auto; padding: 20px;
				border: 1px solid #ccc; border-radius: 5px; background-color: #f4f4f4;
			}
			input[type="text"], input[type="password"] {
				width: 90%; padding: 10px; margin: 5px 0;
				border: 1px solid #ccc; border-radius: 3px;
			}
			button {
				width: 98%; padding: 10px; background-color: #007bff; color: #fff;
				border: none; border-radius: 3px; cursor: pointer;
			}
			.error-message {
				color: red;
			}
		</style>
	</head>
	
	<body>
		<div class="login-container">
			<h1>Login</h1>
			
			<!-- Display flashdata error message if it exists -->
			<?php if ($this->session->flashdata('error_message')): ?>
				<div class="error-message">
					<?php echo $this->session->flashdata('error_message'); ?>
				</div>
			<?php endif; ?>


			<form method="post" action="<?php echo base_url('index.php/LoginController/loginProcess'); ?>" onsubmit="onFormSubmit();">
				<input type="text" name="username" placeholder="Username" required>
				<input type="password" name="password" placeholder="Password" required>
				<button type="submit">Login</button>
			</form>
		
			<script>		
				function onFormSubmit() {
					event.preventDefault();

				}
			</script>

		</div>
	</body>
</html>
  
			<!--
					login credentials
					
					username - varthana
					password - varthana
			-->