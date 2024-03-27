
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class RegionModel extends CI_Model {

		public function getDistinctRegions() {
			// Implement the logic to fetch regions from the database
			$query = $this->db->query("SELECT DISTINCT Region FROM dropdown");
			return $query->result();
		}
		
		public function getDistinctCategories() {
			$query = $this->db->query("SELECT DISTINCT Category FROM dropdown");
			return $query->result();
		}

		public function getDistinctBranches() {
			$query = $this->db->query("SELECT DISTINCT Branch FROM dropdown");
			return $query->result();
		}

		public function getDistinctSections() {
			$query = $this->db->query("SELECT DISTINCT Section FROM dropdown");
			return $query->result();
		}
		
		
	}
?>