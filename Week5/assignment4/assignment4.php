<?php
	//connect to MySQL database
	//SOURCE: http://www.homeandlearn.co.uk/php/php13p1.html
	mysql_connect("localhost", "root", "");
	$db = mysql_select_db("Store");
	if ($db) {echo "SUCCESS: DATABASE FOUND<br>";} else {echo "ERROR: DATABASE NOT FOUND";}
	$query = "SELECT * FROM Inventory";
	$result = mysql_query($query);

	//function: rename date_received column to date_updated
	//SOURCE: http://stackoverflow.com/questions/3532622/mysql-rename-column-from-within-php
	//SOURCE: http://www.w3schools.com/sql/sql_alter.asp
	function renameColumn($table, $c1, $c2) {
		mysql_query("ALTER TABLE " . $table . " CHANGE " . $c1 . " " . $c2 . " date");
		echo "SUCCESS: COLUMN " . $c1 . " RENAMED TO " . $c2 . "<br>";
	}

	//function: trim Description column to a length of 20 (you don't have to update varchar(20) but that is potentially BONUS 3)
	function trimColumn($table, $c, $length) {
		mysql_query("ALTER TABLE " . $table . " CHANGE " . $c . " "  . $c . " VARCHAR(" . $length . ") CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL");
		echo "SUCCESS: COLUMN " . $c . " TRIMMED TO varchar(" . $length . ")<br>";
	}

	//function: remove the timestamp from date_updated
	function removeTimestamp($table, $c) {
		mysql_query("ALTER TABLE " . $table . " CHANGE " . $c . " DATE NULL DEFAULT NULL");
		echo "SUCCESS: COLUMN " . $c . " CHANGED TO DATE ONLY<br>";
	}

	//run all functions
	renameColumn("Inventory", "Date_Received", "Date_Updated");
	trimColumn("Inventory", "Description", 20);
	removeTimestamp("Inventory", "Date_Updated");

	//display results in a table view
	//SOURCE: http://stackoverflow.com/questions/15251095/display-data-from-sql-database-into-php-html-table
	echo "<br><table>";
	echo "<tr><td>INVENTORY_ID</td><td>(PART_NUMBER)</td><td>DESCRIPTION</td><td>[xQUANTITY]</td><td>PRICE</td><td>(DATE_UPDATED)</td></tr>";
	while ($row = mysql_fetch_array($result)) {
		echo "<tr><td>" . $row['Inventory_ID'] . "</td><td>(" . $row['Part_Number'] . ")</td><td>" . $row['Description'] . "</td><td>[x" . $row['Quantity'] . "]</td><td>$" . $row['Price'] . "</td><td>(" . $row['Date_Updated'] . ")</td></tr>";
	}
	echo "</table><br><br>";
	echo "SUCCESS: PRINTED TABLE";

	//close the database connection
	mysql_close();

	//BONUS: Style the table results
	//BONUS: Add sort functionality
	//BONUS: Other extra credit stuff, just do cool things
	//100%: a fully functional branch with proper comments throughout the code
?>