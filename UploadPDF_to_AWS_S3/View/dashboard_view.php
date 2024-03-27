
<!DOCTYPE html>
<html>
	<head>
		<title>File Upload</title>
		<style>
			body {
				font-family: Arial, sans-serif; background-color: #f2f2f2;
				text-align: center; margin: 0; padding: 0;
			}
			.container {
				max-width: 400px; margin: 50px auto; background-color: #ffffff; padding: 20px;
				border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			}
			
			form {
				margin-top: 20px;
			}
			label {
				display: block; margin-bottom: 10px; font-weight: bold;
			}
			input[type="file"] {
				width: 90%; padding: 10px; margin-bottom: 20px;
				border: 1px solid #ccc; border-radius: 3px;
			}
			input[type="submit"] {
				background-color: #007bff; color: #fff; border: none;
				padding: 10px 20px; border-radius: 3px; cursor: pointer;
			}
			
			input[type="reset"] {
				background-color: #ff4d4d; color: #fff; border: none; padding: 10px 20px;
				border-radius: 3px; cursor: pointer; margin-left:15px;
			}
			
			input[type="submit"]:hover {
				background-color: #0056b3;
			}
			
			#uploaded-files-container{
				border-collapse: collapse; margin: 0px 400px; border-spacing: 0; 
				border: 1px solid black; width:50%; padding:10px; border-radius: 5px; 
			}
		</style>
	</head>
	<body>
		<div class="container">

			<form method="post" action="<?php echo base_url('index.php/LoginController/uploadPdfToS3'); ?>" enctype="multipart/form-data">
				<label for="userfiles"><h2>Select PDF files to Upload:</h2></label>
				<input type="file" name="userfiles[]" id="userfiles" multiple>
				<input type="submit" value="Upload">
				<input type="reset" value="Cancel">

			</form>
		</div>
		
		<!-- Container for uploaded files and success messages -->
		<div id="uploaded-files-container" >
			<?php if (!empty($uploaded_files)): ?>
				<?php foreach ($uploaded_files as $item): ?>
					<?php echo $item; ?>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
		
	</body>
</html>



<!-- --profile-directory="Default" -->