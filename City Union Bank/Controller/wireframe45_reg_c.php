
<?php

	class wireframe45_reg_c extends CI_Controller {
		public function __construct() {
			parent::__construct();
		}
		
		public function index() {
			$this->load->model('RegionModel'); // Load the data_model model

            // Fetch data from the data_model
            $data['regions'] = $this->RegionModel->getDistinctRegions();
            $data['categories'] = $this->RegionModel->getDistinctCategories();
            $data['branches'] = $this->RegionModel->getDistinctBranches();
            $data['sections'] = $this->RegionModel->getDistinctSections();

            $this->load->view('wireframe45', $data);
		}
	}
?>