
<?php 
	
	require_once 'C:\wamp64\www\codeIgniter\application\models\DataModel.php';
	
	class wireframe45c extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
				
		}

		public function fetchdata() {			
			$selectedRegion = $_POST['region'];

			$dataModel = new DataModel();								// Create an instance of the DataModel
			$data = $dataModel->fetchDataByRegion($selectedRegion);		// Fetch data based on the selected category
			$dataModel->closeConnection();								// Close the database connection

			echo json_encode($data);									// Output the data as JSON																
		}	
		
		public function fetchdata_by_category() {		
		
			$selectedCategory = $_POST['category'];
			
			$dataModel = new DataModel();
			$data = $dataModel->fetchDataByCategory($selectedCategory);
			$dataModel->closeConnection();

			
			echo json_encode($data);
		}
		
		public function fetchdata_by_branch() {
			$selectedBranch = $_POST['branch'];

			$dataModel = new DataModel();
			$data = $dataModel->fetchDataByBranch($selectedBranch);
			$dataModel->closeConnection();

			echo json_encode($data);
		}
		
		public function fetchdata_by_section() {
			$selectedSection = $_POST['section'];

			$dataModel = new DataModel();
			$data = $dataModel->fetchDataBySection($selectedSection);
			$dataModel->closeConnection();

			echo json_encode($data);
		}
			
	}
?>