

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- 
			kitchen -	https://media.istockphoto.com/id/624028400/photo/wood-table-top-on-blur-kitchen-window-background.jpg?s=612x612&w=0&k=20&c=LzeM9h-zU-LbFuYFG2Xgc-yD3un80NrGNY6Md4IHw0U=
			pink - 		https://media.istockphoto.com/id/638041564/photo/technology-background-pcb-and-code-3d-illustration.jpg?s=612x612&w=0&k=20&c=gXAMB_6FIlDIqZnIj4VItij9aIZBAOuE5gVkqHta-bg=
			world - 	https://media.istockphoto.com/id/1169668336/photo/global-communication-network-concept-worldwide-business.jpg?s=612x612&w=0&k=20&c=NTKol4NcJlPf3px2QR5B7Nvkfu8Sva9lIYsHHRXOZjM=
			colour - 	https://www.pexels.com/photo/defocused-image-of-lights-255379/
		-->
							
		<style>
			body {
				position: relative;  font-family: 'Arial', sans-serif; font-size: 15px;
			}

			body::before {
				content: ""; background-image: url('https://media.istockphoto.com/id/624028400/photo/wood-table-top-on-blur-kitchen-window-background.jpg?s=612x612&w=0&k=20&c=LzeM9h-zU-LbFuYFG2Xgc-yD3un80NrGNY6Md4IHw0U=');
				background-size: cover; background-repeat: no-repeat; background-attachment: fixed; position:fixed;
				opacity:0.8; position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; background-position: center center; 
			}
			#heading {
				background: linear-gradient(to right, #0033AC , rgb(249, 31, 137)); width:93%; border: rgb(234, 0, 255);
				text-align:center;padding:10px 8px 8px 8px; margin-left:20px;  color:white; margin-top:15px;
				border-radius: 5px; font-family:calibri; font-size:20px; margin-bottom:20px;
				float:left;position:relative; border-radius:7px
			}
			
			#logo {
				float:left; position:relative; margin-left:0.20%; width:65px;height:65px;
			}
			
			#subhead2 {
				width: 505px; font-family:calibri; font-size:18px;
				border: 2px solid rgb(66,113,155);
				border-radius:5px; box-shadow: 0 0 8px #888888; outline: 1px solid transparent;
				float:left;margin-left:33%;padding:5px 10px;text-align:center
			}
			
			#date {
				float:left;margin-left:15px;margin-top:0px;margin-bottom:3px
			}
			#currentDate {
				font-weight: bold; font-size: 15px; font-family:calibri;
			}
			
			#home {
				font-size:24px;float:left;margin-left:0.40%;margin-top:0px;
				color:white;text-decoration: none;
			}
			
			.tabtr {
				background-color: rgb(191, 144, 0); color: white; font-family: 'Arial', sans-serif; font-size: 14px;
			}
			
			.back {
				float:right;margin-right:40px;font-family:calibri;margin-top:2px;font-size:16px;
			}
			#backlink {
				color:white;text-decoration: none;
			}
			.greet {
				float:right;margin-right:0.45%;font-family:calibri;margin-top:2px;font-size:15px;
			}
			
			.dropdown-container {
				float:left; margin-left:50px;
			}
			
			.dropdown-select {
				width:210px;height:22px;text-align:center; border-radius: 5px;
			}
			
			.dropdown-label {
				border-radius: 3px; background-color:lightgray;
			}
			
			#dataTable {
				width: 100%; border: 0.25px solid #4d4d4d;
			}
			
			#dataTable tr:hover {
				background-color: #f5f5f5; cursor: pointer; 
			}
			
			#dataTable th, #dataTable td {
				border: 0.25px solid #4d4d4d; padding: 8px; text-align: center; 
			}
			
			.dataTables_filter {
				margin-bottom: 10px; 
			}
			
			#downloadButton {
				background-color: #008000; color: #fff; padding: 10px 20px;
				border: none; border-radius: 5px; cursor: pointer; float: right; margin-right: 1%;
			}

			#downloadButton:hover {
				background-color: #006400; 
			}

			

		</style>
	</head>
	<body>
		<header>
			<img id="logo" src="https://www.cityunionbank.com/assets/frontend/images/logo.png"></img>
			<h2 id="heading">
				<div><a href="http://localhost/codeIgniter/index.php/mainview_c"><i class="fa fa-home" id="home"></i></a></div>
				<div id="date"><span id="currentDate"></span></div>
				<span style="padding-right:8%">Advances</span>
				<div class="greet"><b><i>Welcome Kumar</i></b></div>
				<div class="back"><a href="http://localhost/codeIgniter/index.php/mainview_c/adv_dept1" id="backlink"><b><i>&#8617; back</i></b></a></div>
			</h2>
		</header>
				
		<script>
			// JavaScript to display the date in the desired format
			var currentDateElement = document.getElementById("currentDate");
			var formattedDate = new Date().toLocaleDateString('en-US', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'});
			currentDateElement.textContent = formattedDate;
		</script>

		
		<div>
											
			<div id="subhead2"><b><i>Renewal consol report - MVL</i></b></div>
			
		  
			<div style="clear:both;"></div><br><br>
    
			<div style="float:left; margin-left:18%">
				<label for="regionDropdown" class="dropdown-label" style="padding:3px 81.5px">Region</label><br>
				<select id="regionDropdown" class="dropdown-select">
					<option value="" selected disabled hidden>Select</option>
					<?php foreach ($regions as $region): ?>
						<option value="<?php echo $region->Region; ?>"><?php echo $region->Region; ?></option>
					<?php endforeach; ?>
				</select>
			</div>

			<div class="dropdown-container">
				<label for="categoryDropdown" class="dropdown-label" style="padding: 3px 74.5px;">Category</label><br>
				<select id="categoryDropdown" class="dropdown-select">
					<option value="" selected disabled hidden>Select</option>
					<?php foreach ($categories as $category): ?>
						<option value="<?php echo $category->Category; ?>"><?php echo $category->Category; ?></option>
					<?php endforeach; ?>
				</select>
			</div>

			<div class="dropdown-container">
				<label for="branchCodeDropdown" class="dropdown-label" style="padding:3px 9px">Branch code & Branch name</label><br>
				<select id="branchCodeDropdown" class="dropdown-select">
					<option value="" selected disabled hidden>Select</option>
					<?php foreach ($branches as $branch): ?>
						<option value="<?php echo $branch->Branch; ?>"><?php echo $branch->Branch; ?></option>
					<?php endforeach; ?>
				</select>
			</div>

			<div class="dropdown-container">
				<label for="sectionDropdown" class="dropdown-label" style="padding:3px 80px">Section</label><br>
				<select id="sectionDropdown" class="dropdown-select">
					<option value="" selected disabled hidden>Select</option>
					<?php foreach ($sections as $section): ?>
						<option value="<?php echo $section->Section; ?>"><?php echo $section->Section; ?></option>
					<?php endforeach; ?>
				</select>
			</div>

				<div style="clear:both;"></div><br>
			
				<?php
					require_once 'C:\wamp64\www\codeIgniter\application\models\DataModel.php';

					$dataModel    = new DataModel();
					$regionData   = $dataModel->getRegionData();
					$categoryData = $dataModel->getCategoryData();
					$branchData   = $dataModel->getBranchData();
					$dataModel->closeConnection();
				?>
				

			<!-- Add this JavaScript code to handle cascading dropdowns -->
			<script>
				$(document).ready(function () {
					// Get references to the dropdowns
					const regionDropdown     = document.getElementById("regionDropdown");
					const categoryDropdown   = document.getElementById("categoryDropdown");
					const branchCodeDropdown = document.getElementById("branchCodeDropdown");
					const sectionDropdown    = document.getElementById("sectionDropdown");
					const tableBody          = document.getElementById("tableBody");
					
					const regionData   = <?= json_encode($regionData) ?>;
					const categoryData = <?= json_encode($categoryData) ?>;
					const branchData   = <?= json_encode($branchData) ?>;
																		

					// Initialize DataTable
					let dataTable = $('#dataTable').DataTable();

					// Function to populate a dropdown based on selected data
					function populateDropdown(dropdown, data) {
					   
						dropdown.innerHTML = '<option value="" selected disabled hidden>Select</option>';
						data.forEach(option => {
							const optionElement = document.createElement("option");
							optionElement.value = option;
							optionElement.textContent = option;
							dropdown.appendChild(optionElement);
						});
					}

					// Event listener for the "Region" dropdown
					regionDropdown.addEventListener("change", function () {
						const selectedRegion = regionDropdown.value;

						// Make an AJAX request to fetch data based on the selected region
						$.ajax({
							url: "<?php echo base_url('/index.php/wireframe45c/fetchdata'); ?>",
							method: 'POST',
							data: { region: selectedRegion },
							success: function (data) {
								// Clear existing table rows
								dataTable.clear();

								// Populate the table with data
								jsonData = JSON.parse(data);
								jsonData.forEach(function (row) {
									dataTable.row.add([
										row.Region,
										row.Category,
										row.Branch,
										row.Section
									]).draw(false);
								});

								// Now, populate the "Category, Branch & Section" dropdown with data based on the selected region
								const selectedData = regionData[selectedRegion];
								populateDropdown(categoryDropdown, selectedData.categories);
								populateDropdown(branchCodeDropdown, selectedData.branchCodes);
								populateDropdown(sectionDropdown, selectedData.sections);
							}
						});
					});

					// Event listener for the "Category" dropdown
					categoryDropdown.addEventListener("change", function () {
						const selectedCategory = categoryDropdown.value;

						// Make an AJAX request to fetch data based on the selected category and region
						$.ajax({
							url: "<?php echo base_url('/index.php/wireframe45c/fetchdata_by_category'); ?>",
							method: 'POST',
							data: { category: selectedCategory },
							success: function (data) {
								// Clear existing table rows
								dataTable.clear();

								// Populate the table with data
								jsonData = JSON.parse(data);
								jsonData.forEach(function (row) {
									dataTable.row.add([
										row.Region,
										row.Category,
										row.Branch,
										row.Section
									]).draw(false);
								});

								// Now, populate the "Branch code & Branch Name and Section" dropdowns with data based on the selected category
								const selectedData = categoryData[selectedCategory];
								populateDropdown(branchCodeDropdown, selectedData.branchCodes);
								populateDropdown(sectionDropdown, selectedData.sections);
							}
						});
					});

					// Event listener for the "Branch code & Branch Name" dropdown
					branchCodeDropdown.addEventListener("change", function () {
						const selectedBranch = branchCodeDropdown.value;

						// Make an AJAX request to fetch data based on the selected branch code and category
						$.ajax({
							url: "<?php echo base_url('/index.php/wireframe45c/fetchdata_by_branch'); ?>",
							method: 'POST',
							data: { branch: selectedBranch },
							success: function (data) {
								// Clear existing table rows
								dataTable.clear();

								// Populate the table with data
								jsonData = JSON.parse(data);
								jsonData.forEach(function (row) {
									dataTable.row.add([
										row.Region,
										row.Category,
										row.Branch,
										row.Section
									]).draw(false);
								});

								// Now, populate the "Section" dropdown with data based on the selected branch code
								const selectedData = branchData[selectedBranch];
								populateDropdown(sectionDropdown, selectedData.sections);
							}
						});
					});
					
					// Event listener for the "Section" dropdown
					sectionDropdown.addEventListener("change", function () {
						const selectedSection = sectionDropdown.value;

						// Make an AJAX request to fetch data based on the selected section
						$.ajax({
							url: "<?php echo base_url('/index.php/wireframe45c/fetchdata_by_section'); ?>",
							method: 'POST',
							data: { section : selectedSection },
							success: function (data) {
								// Clear existing table rows
								dataTable.clear();

								// Populate the table with data
								jsonData = JSON.parse(data);
								jsonData.forEach(function (row) {
									dataTable.row.add([
										row.Region,
										row.Category,
										row.Branch,
										row.Section
									]).draw(false);
								});
							}
						});
					});
				});		
			</script>

			<script>
				function downloadCSV() {
					var dataTable = $('#dataTable').DataTable(); // Get a reference to the DataTable
					var data = dataTable.rows().data().toArray(); // Get the data from the DataTable
					var headers = dataTable.columns().header().toArray().map(header => header.textContent); // Get table headers
					// var headers = dataTable.columns().header().toArray().map(header => '<b>' + header.textContent + '</b>'); // Make the headers bold with <b> tags


					var csvContent = "data:text/csv;charset=utf-8,";
					csvContent += headers.join(",") + "\n"; // Add headers to the CSV content

					data.forEach(function (row) {
						csvContent += row.join(",") + "\n"; // Add data rows to the CSV content
					});

					var encodedUri = encodeURI(csvContent);
					var link = document.createElement("a");
					link.setAttribute("href", encodedUri);
					link.setAttribute("download", "table_data.csv");
					link.click();
				}

			</script>
			
			

			<table id="dataTable">
				<thead>
					<tr>
						<th class="tabtr">Region</th>
						<th class="tabtr">Category</th>
						<th class="tabtr">Branch code & Branch Name</th>
						<th class="tabtr">Section</th>
					</tr>
				</thead>
				<tbody id="tableBody" style="text-align:center">
					<!-- Data will be populated here -->
				</tbody>
			</table>
				
			<div style="clear:both;"></div><br>
				
			<button id="downloadButton" onclick="downloadCSV()">Download Report</button>

	
		</div>
	</body>
</html>

<!--	
	
	// branch code and branch name split
	
	success: function(data) {
		// Clear existing table rows
		$('#tableBody').empty();

		// Populate the table with data
		jsonData = JSON.parse(data);
		jsonData.forEach(function(row) {
			var newRow = $('<tr>');
			newRow.append('<td>' + row.Region + '</td>');
			newRow.append('<td>' + row.Category + '</td>');

			// Split the "Branch" data into "Branch Code" and "Branch Name"
			var branchParts = row.Branch.split(' - ');
			newRow.append('<td>' + branchParts[0] + '</td>'); // Branch Code
			newRow.append('<td>' + branchParts[1] + '</td>'); // Branch Name

			newRow.append('<td>' + row.Section + '</td>');
			$('#tableBody').append(newRow);
		});

		const selectedData = regionData[selectedRegion];
		// Now, populate the dropdowns with data based on the selected region
		populateDropdown(categoryDropdown, selectedData.categories);
		populateDropdown(branchCodeDropdown, selectedData.branchCodes);
		populateDropdown(sectionDropdown, selectedData.sections);
	}

-->


