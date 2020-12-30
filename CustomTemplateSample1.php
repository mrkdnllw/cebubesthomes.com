<?php /* Template Name: CustomTemplateSample1 */ ?>
<p>Hello there!</p>
<p>This page demos sample select sql statement to db from WordPress.</p>

<?php
    
	
	$db_host = 'mysql.cebubesthomes.dream.press'; // Server Name
$db_user = 'cebubesthomesdre'; // Username
$db_pass = 'jy-bVdKP'; // Password
$db_name = 'cebubesthomes_dream_pres'; // Database Name
	
	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
	
$sql = 'SELECT * 
		FROM Locations';
		
		
$query = mysqli_query($conn, $sql);

		
	?>
	
	<table >
		
		<thead>
			<tr>
				<th>id</th>
				<th>location name</th>
				<th>description</th>
				
			</tr>
		</thead>
		<tbody>
		<?php
		//$no 	= 1;
		//$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					
					<td>'.$row['id'].'</td>
					<td>'.$row['location_name'].'</td>
					<td>'. $row['description'] . '</td>
				</tr>';
		}?>
		</tbody>
	</table>