<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>jeu de Go</title>
		<meta http-equiv="content-language" content="fr" />
		<script
			src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous">
		</script>
	</head>

	<body>
		<div class="wrapper">


			<table>

 				<?php 
					for ($i=13 - 1; $i >= 0; $i--) {
						echo "<tr id='line-" . $i"'>";
						for ($j=0; $j < 13; $j++) { 
							echo "<td id='" . $i."-".$j . "'>";
						}
						echo "</tr>";
					}
				?>

<!-- 				<tr id="line-0">
					<td id="0-0"></td>
					<td id="0-1"></td>
					<td id="0-2"></td>
					<td id="0-3"></td>
					<td id="0-4"></td>
					<td id="0-5"></td>
					<td id="0-6"></td>
					<td id="0-7"></td>
					<td id="0-8"></td>
					<td id="0-9"></td>
					<td id="0-10"></td>
					<td id="0-11"></td>
					<td id="0-12"></td>	
				</tr>

				<tr id="line-1">
					<td id="1-0"></td>
					<td id="1-1"></td>
					<td id="1-2"></td>
					<td id="1-3"></td>
					<td id="1-4"></td>
					<td id="1-5"></td>
					<td id="1-6"></td>
					<td id="1-7"></td>
					<td id="1-8"></td>
					<td id="1-9"></td>
					<td id="1-10"></td>
					<td id="1-11"></td>
					<td id="1-12"></td>	
				</tr>

				<tr id="line-2">
					<td id="2-0"></td>
					<td id="2-1"></td>
					<td id="2-2"></td>
					<td id="2-3"></td>
					<td id="2-4"></td>
					<td id="2-5"></td>
					<td id="2-6"></td>
					<td id="2-7"></td>
					<td id="2-8"></td>
					<td id="2-9"></td>
					<td id="2-10"></td>
					<td id="2-11"></td>
					<td id="2-12"></td>	
				</tr>

				<tr id="line-3">
					<td id="3-0"></td>
					<td id="3-1"></td>
					<td id="3-2"></td>
					<td id="3-3"></td>
					<td id="3-4"></td>
					<td id="3-5"></td>
					<td id="3-6"></td>
					<td id="3-7"></td>
					<td id="3-8"></td>
					<td id="3-9"></td>
					<td id="3-10"></td>
					<td id="3-11"></td>
					<td id="3-12"></td>	
				</tr>

				<tr id="line-4">
					<td id="4-0"></td>
					<td id="4-1"></td>
					<td id="4-2"></td>
					<td id="4-3"></td>
					<td id="4-4"></td>
					<td id="4-5"></td>
					<td id="4-6"></td>
					<td id="4-7"></td>
					<td id="4-8"></td>
					<td id="4-9"></td>
					<td id="4-10"></td>
					<td id="4-11"></td>
					<td id="4-12"></td>	
				</tr>

				<tr id="line-5">
					<td id="5-0"></td>
					<td id="5-1"></td>
					<td id="5-2"></td>
					<td id="5-3"></td>
					<td id="5-4"></td>
					<td id="5-5"></td>
					<td id="5-6"></td>
					<td id="5-7"></td>
					<td id="5-8"></td>
					<td id="5-9"></td>
					<td id="5-10"></td>
					<td id="5-11"></td>
					<td id="5-12"></td>	
				</tr>

				<tr id="line-6">
					<td id="6-0"></td>
					<td id="6-1"></td>
					<td id="6-2"></td>
					<td id="6-3"></td>
					<td id="6-4"></td>
					<td id="6-5"></td>
					<td id="6-6"></td>
					<td id="6-7"></td>
					<td id="6-8"></td>
					<td id="6-9"></td>
					<td id="6-10"></td>
					<td id="6-11"></td>
					<td id="6-12"></td>
				</tr>

				<tr id="line-7">
					<td id="7-0"></td>
					<td id="7-1"></td>
					<td id="7-2"></td>
					<td id="7-3"></td>
					<td id="7-4"></td>
					<td id="7-5"></td>
					<td id="7-6"></td>
					<td id="7-7"></td>
					<td id="7-8"></td>
					<td id="7-9"></td>
					<td id="7-10"></td>
					<td id="7-11"></td>
					<td id="7-12"></td>
				</tr>

				<tr id="line-8">
					<td id="8-0"></td>
					<td id="8-1"></td>
					<td id="8-2"></td>
					<td id="8-3"></td>
					<td id="8-4"></td>
					<td id="8-5"></td>
					<td id="8-6"></td>
					<td id="8-7"></td>
					<td id="8-8"></td>
					<td id="8-9"></td>
					<td id="8-10"></td>
					<td id="8-11"></td>
					<td id="8-12"></td>
				</tr>

				<tr id="line-9">
					<td id="9-0"></td>
					<td id="9-1"></td>
					<td id="9-2"></td>
					<td id="9-3"></td>
					<td id="9-4"></td>
					<td id="9-5"></td>
					<td id="9-6"></td>
					<td id="9-7"></td>
					<td id="9-8"></td>
					<td id="9-9"></td>
					<td id="9-10"></td>
					<td id="9-11"></td>
					<td id="9-12"></td>
				</tr>

				<tr id="line-10">
					<td id="10-0"></td>
					<td id="10-1"></td>
					<td id="10-2"></td>
					<td id="10-3"></td>
					<td id="10-4"></td>
					<td id="10-5"></td>
					<td id="10-6"></td>
					<td id="10-7"></td>
					<td id="10-8"></td>
					<td id="10-9"></td>
					<td id="10-10"></td>
					<td id="10-11"></td>
					<td id="10-12"></td>	
				</tr>

				<tr id="line-11">
					<td id="11-0"></td>
					<td id="11-1"></td>
					<td id="11-2"></td>
					<td id="11-3"></td>
					<td id="11-4"></td>
					<td id="11-5"></td>
					<td id="11-6"></td>
					<td id="11-7"></td>
					<td id="11-8"></td>
					<td id="11-9"></td>
					<td id="11-10"></td>
					<td id="11-11"></td>
					<td id="11-12"></td>
				</tr>

				<tr id="line-12">
					<td id="12-0"></td>
					<td id="12-1"></td>
					<td id="12-2"></td>
					<td id="12-3"></td>
					<td id="12-4"></td>
					<td id="12-5"></td>
					<td id="12-6"></td>
					<td id="12-7"></td>
					<td id="12-8"></td>
					<td id="12-9"></td>
					<td id="12-10"></td>
					<td id="12-11"></td>
					<td id="12-12"></td>	
				</tr> -->
			</table>


		</div>
		<script src="javascript.js"></script>
	</body>
</html>
