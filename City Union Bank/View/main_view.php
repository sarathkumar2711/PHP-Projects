
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
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
				font-family:calibri; font-size:18px; text-align: center; width: 20%;
				border: 2px solid rgb(66,113,155); background-color:#f2f2f2;
				border-radius:5px; box-shadow: 0 0 8px #888888; outline: 1px solid transparent;
				color:black;text-decoration: none;float: left; margin-left: 10%; padding: 5px 10px; 
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

			.back {
				float:right;margin-right:40px;font-family:calibri;margin-top:2px;font-size:16px;
			}

			#backlink {
				color:white;text-decoration: none;
			}

			.greet {
				float:right;margin-right:0.45%;font-family:calibri;margin-top:2px;font-size:15px;
			}
			
		</style>
		
		
	</head>
	
	<body>
		<header>
			<img id="logo" src="https://www.cityunionbank.com/assets/frontend/images/logo.png"></img>
			<h2 id="heading">
				<div><a href="http://localhost/codeIgniter/index.php/mainview_c"><i class="fa fa-home" id="home"></i></a></div>
				<div id="date"><span id="currentDate"></span></div>
				<span style="padding-right:5%">CUB Reports</span>
				<div class="greet"><b><i>Welcome Kumar</i></b></div>
				<div class="back"><a href="http://localhost/codeIgniter/index.php/mainview_c" id="backlink"><b><i>&#8617; back</i></b></a></div>
			</h2>
		</header>
		
		<script>
			// JavaScript to display the date in the desired format
			var currentDateElement = document.getElementById("currentDate");
			var currentDate = new Date();
			var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
			var formattedDate = currentDate.toLocaleDateString('en-US', options);
			currentDateElement.textContent = formattedDate;
		</script>
		
		<div id="subhead">	
					
			<a href="<?= base_url('index.php/mainview_c/adv_dept1'); ?>">
				<div id="subhead2"><b><i>Advances Department -1st Cut</i></b></div>
			</a>

			<a href="<?= base_url('index.php/mainview_c/biu_dept'); ?>">			
				<div id="subhead2"><b><i>BIU department</i></b></div>
			</a>

			<a href="<?= base_url('index.php/mainview_c/cmd_dept_final'); ?>">
				<div id="subhead2"><b><i>CMD department Final</i></b></div>
			</a>
			
			<div style="clear:both;"></div><br><br>
		</div>
	</body>
</html>