
<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	include("./vendor/autoload.php");
	use Aws\S3\S3Client;

	class LoginController extends CI_Controller { 
		
		public function __construct() {
			parent::__construct();
			$this->load->library('upload');
			
		}

		public function index() {
			$this->load->view('login_view');
		}

		public function loginProcess() {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

																												// Dummy credentials for demonstration
			$dummyUsername = "varthana";
			$dummyPassword = "varthana";

			if ($username === $dummyUsername && $password === $dummyPassword) {
				// Login successful
				$this->load->view('dashboard_view');
			} else {
				// Invalid credentials
				$this->session->set_flashdata('error_message', 'Invalid credentials. Please try again.');
				redirect('LoginController'); // Redirect back to the login page
			}
		}
		
		
		
		public function uploadPdfToS3() {
			// Define your AWS credentials and S3 bucket information
			$aws_access_key = 'Enter Your AWS Access Key';
			$aws_secret_key = 'Enter Your AWS Secret Key';
			$bucket_name = 'Enter Your Bucket Name';
			$s3_region = 'Enter Your S3 Region';

			$cacertPath = 'C:\wamp64\php\php8.2.0\cacert.pem'; // Replace with the actual path


			// Initialize the S3 client
			$s3 = new S3Client([
				'version' => 'latest',
				'region' => $s3_region,
				'credentials' => [
					'key' => $aws_access_key,
					'secret' => $aws_secret_key,
				],
				'http' => [
					'verify' => $cacertPath, // Specify the CA bundle path
				],
			]);


			// Check if the form was submitted
			if ($this->input->server('REQUEST_METHOD') == 'POST') {										//
				// Check if any files were uploaded
				if (empty($_FILES['userfiles']['name'])) {
					echo "Please select a file to upload.";
					return;
				}

				$uploaded_files = [];

				foreach ($_FILES['userfiles']['tmp_name'] as $index => $tmp_name) {
					$file_name = $_FILES['userfiles']['name'][$index];
					
					// Read the file content
					$file_contents = file_get_contents($tmp_name);

					// Upload the file to AWS S3
					try {
						$result = $s3->putObject([
							'Bucket' => $bucket_name,
							'Key' => 'input/' . $file_name, // Adjust the key as needed
							'Body' => $file_contents, // Upload the file content
						]);

						// Prepare the success message
						$success_message = "<span style='font-size:16px'>'$file_name'<span style='color:#00cc00;margin-left:25px;font-size:16px'> - Uploaded Successfully</span><br><br>";

						// Add the success message to the uploaded files array
						$uploaded_files[] = $success_message;
					} catch (AwsException $e) {
						// Handle any potential exceptions here, if needed
						$error_message = "Error uploading file '$file_name' to S3: " . $e->getMessage();

						// Add the error message to the uploaded files array
						$uploaded_files[] = $error_message;
					}
				}

				$data['uploaded_files'] = $uploaded_files;
				$this->load->view('dashboard_view', $data);
		
			} else {
				// Display the form if it's a GET request
				$this->load->view('upload_form');
			}
		}
	}
?>