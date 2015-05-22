<html>
	<head>
		<title>SERLER</title>
	</head>
	
	<body>
		<center>
			<h1>Welcome to SERLER</h1>
			<h4>Feel free to view data in the repository.</h4>
			
			<?php
				require_once('sqlinfo.inc.php');
				
				$connection = @mysqli_connect($sql_host, $sql_user, $sql_pass, $sql_db);
				
				if (!$connection) {
					
				} else {
					$query = "SELECT * FROM $sql_tble";
					
					$result = mysqli_query($connection, $query);
					if (!$result) {
						echo "<p>Something is wrong with ", $query, "</p>";
					} else {
						// inform users if there are no results, otherwise show results.
						if (mysqli_num_rows($result)==0) {
							echo "<p>There are no results for this search. Sorry!</p>";
						} else {
							echo "<table border=\"1\">";
								
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr>";
								echo "<td>Title: ", $row["title"], "</td>";
								echo "<td>First Name: ", $row["fname"], "</td>";
								echo "<td>Last Name: ", $row["lname"], "</td>";
								echo "<td>Date Added: ", $row["dateadded"], "</td>";
								echo "<td>Date Published: ", $row["datepublish"], "</td>";
								echo "<td>Category: ", $row["category"], "</td>";
								echo "</tr>";
							}
						}
					}
					echo "</table>";
				}			
			?>
			
			<br><a href="inputdataform.php">Click here to submit data! (registered users only)</a>
			<br><a href="index.php">Click here to return to Home Page</a>
		</center>
	</body>
</html>
