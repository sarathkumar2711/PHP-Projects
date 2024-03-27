
<?php 

	class mainview_c extends CI_Controller {
		public function __construct() {
			parent::__construct();
		}
		
		public function index() {
			$this->load->view('main_view');
		}
		
		public function adv_dept1() {
			$this->load->view('adv_dept1');
		}
		
		public function biu_dept() {
			$this->load->view('biu_dept');
		}
		
		public function cmd_dept_final() {
			$this->load->view('cmd_dept_final');
		}
	}
?>