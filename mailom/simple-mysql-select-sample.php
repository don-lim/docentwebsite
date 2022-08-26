<?php
$con = mysqli_connect("localhost","***","b%)S,d2(?t[(","***");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}	


$sql = "SELECT CONCAT( 'ALTER TABLE ', table_name, ' CHANGE ', column_name, ' ', LOWER(column_name), ' ', column_type, ' ', extra, CASE WHEN IS_NULLABLE = 'YES' THEN ' NULL' ELSE ' NOT NULL' END, ';') AS line FROM information_schema.columns WHERE table_schema = 'docentc1_web' AND data_type IN ('char', 'varchar','INT', 'TINYINT', 'datetime','text','double','decimal') ORDER BY line;";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($result)) {
    foreach( $row as $field => $value) {
		echo "{$field} - {$value}<br>";
    }
}

while($row = mysqli_fetch_assoc($result)) {
	echo $row["line"]."<br>";
}

?>