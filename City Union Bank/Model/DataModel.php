
<?php
	class DataModel {
		
			private $servername = "localhost";
			private $username = "root";
			private $password = "";
			private $dbname = "etmsci";
			private $conn;

			public function __construct() {
				// Create a connection to the database
				$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
				if ($this->conn->connect_error) {
					die("Connection failed: " . $this->conn->connect_error);
				}			
			}
					
			public function getRegionData() {
				// Fetch data from the database and build the regionData array
				$regionData = array();

				$sql = "SELECT DISTINCT Region FROM dropdown";
				$result = $this->conn->query($sql);
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						$region = $row["Region"];
						// Fetch categories, branch codes, and sections for each region
						$categories = array();
						$branchCodes = array();
						$sections = array();

						// Fetch categories for the current region
						$categorySql = "SELECT DISTINCT Category FROM dropdown WHERE Region = '$region'";
						$categoryResult = $this->conn->query($categorySql);
						if ($categoryResult->num_rows > 0) {
							while ($categoryRow = $categoryResult->fetch_assoc()) {
								$categories[] = $categoryRow["Category"];
							}
						}

						// Fetch branch codes for the current region
						$branchCodeSql = "SELECT DISTINCT Branch FROM dropdown WHERE Region = '$region'";
						$branchCodeResult = $this->conn->query($branchCodeSql);
						if ($branchCodeResult->num_rows > 0) {
							while ($branchCodeRow = $branchCodeResult->fetch_assoc()) {
								$branchCodes[] = $branchCodeRow["Branch"];
							}
						}

						// Fetch sections for the current region
						$sectionSql = "SELECT DISTINCT Section FROM dropdown WHERE Region = '$region'";
						$sectionResult = $this->conn->query($sectionSql);
						if ($sectionResult->num_rows > 0) {
							while ($sectionRow = $sectionResult->fetch_assoc()) {
								$sections[] = $sectionRow["Section"];
							}
						}

						// Build the regionData entry for this region
						$regionData[$region] = array(
							"categories" => $categories,
							"branchCodes" => $branchCodes,
							"sections" => $sections,
						);
					}
				}

				return $regionData;
			}
			
			public function getCategoryData() {
				$categoryData = array();

				// Fetch distinct categories
				$categorySql = "SELECT DISTINCT Category FROM dropdown";
				$categoryResult = $this->conn->query($categorySql);

				if ($categoryResult->num_rows > 0) {
					while ($categoryRow = $categoryResult->fetch_assoc()) {
						$category = $categoryRow["Category"];
						// Fetch regions, branch codes, and sections for each category
						
						$branchCodes = array();
						$sections = array();


						// Fetch branch codes for the current category
						$branchCodeSql = "SELECT DISTINCT Branch FROM dropdown WHERE Category = '$category'";
						$branchCodeResult = $this->conn->query($branchCodeSql);
						if ($branchCodeResult->num_rows > 0) {
							while ($branchCodeRow = $branchCodeResult->fetch_assoc()) {
								$branchCodes[] = $branchCodeRow["Branch"];
							}
						}

						// Fetch sections for the current category
						$sectionSql = "SELECT DISTINCT Section FROM dropdown WHERE Category = '$category'";
						$sectionResult = $this->conn->query($sectionSql);
						if ($sectionResult->num_rows > 0) {
							while ($sectionRow = $sectionResult->fetch_assoc()) {
								$sections[] = $sectionRow["Section"];
							}
						}

						// Build the categoryData entry for this category
						$categoryData[$category] = array(
							
							"branchCodes" => $branchCodes,
							"sections" => $sections,
						);
					}
				}

				return $categoryData;
			}
			
			public function getBranchData() {
				$branchData = array();

				// Fetch distinct branches
				$branchSql = "SELECT DISTINCT Branch FROM dropdown";
				$branchResult = $this->conn->query($branchSql);

				if ($branchResult->num_rows > 0) {
					while ($branchRow = $branchResult->fetch_assoc()) {
						$branch = $branchRow["Branch"];
						// Fetch regions, categories, and sections for each branch
						
						$sections = array();

						// Fetch sections for the current branch
						$sectionSql = "SELECT DISTINCT Section FROM dropdown WHERE Branch = '$branch'";
						$sectionResult = $this->conn->query($sectionSql);
						if ($sectionResult->num_rows > 0) {
							while ($sectionRow = $sectionResult->fetch_assoc()) {
								$sections[] = $sectionRow["Section"];
							}
						}

						// Build the branchData entry for this branch
						$branchData[$branch] = array(

							"sections" => $sections,
						);
					}
				}

				return $branchData;
			}

			public function fetchDataByRegion($selectedRegion) {
				// Query to fetch data based on the selected category
				$sql = "SELECT * FROM dropdown WHERE Region = '$selectedRegion'";
				$result = $this->conn->query($sql);

				$data = array();

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						$data[] = $row;
					}
				}

				return $data;
			}
			
			public function fetchDataByCategory($selectedCategory) {
				// Query to fetch data based on the selected category
				$sql = "SELECT * FROM dropdown WHERE Category = '$selectedCategory'";
				$result = $this->conn->query($sql);

				$data = array();

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						$data[] = $row;
					}
				}

				return $data;
			}
			
			
			public function fetchDataByBranch($selectedBranch) {
				// Query to fetch data based on the selected category
				$sql = "SELECT * FROM dropdown WHERE Branch = '$selectedBranch'";
				$result = $this->conn->query($sql);

				$data = array();

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						$data[] = $row;
					}
				}

				return $data;
			}
			
			public function fetchDataBySection($selectedSection) {
				// Query to fetch data based on the selected category
				$sql = "SELECT * FROM dropdown WHERE Section = '$selectedSection'";
				$result = $this->conn->query($sql);

				$data = array();

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						$data[] = $row;
					}
				}

				return $data;
			}
			
			public function closeConnection() {
				// Close the database connection
				$this->conn->close();
			}
		
	}
?>