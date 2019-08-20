<!DOCTYPE html>

<html> <head>
<meta charset="utf-8" />

<title>Tabela</title>

</head> <body>
<h1>Tabela</h1>

<?php
//Database connection details to mySQL
$host = 'localhost'; $user = 'aluno'; $passw = 'aluno'; $dbname = 'atv_prt_042_bd';
//Make a connection to the database
$conn = mysqli_connect($host, $user, $passw, $dbname) or die
("Unable to connect!");
//Create the SQL query
$query = "SELECT user_id, testID, nome, idade FROM teste1";
$result = mysqli_query( $conn, $query ) or die ("Error in query");
//Fetch the result into an associative array
while ( $row = mysqli_fetch_assoc( $result ) ) {
$table[] = $row; //add each row into the table array
}
?>

<table>
<tr>
<td><strong>Test ID</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Nome</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Idade</strong></td>
<td width="10">&nbsp;</td>

</tr>
<?php
if ($table) { //Check if there are any rows to be displayed
//Retrieve each element of the array
foreach($table as $d_row) {
?>

<tr>
<td><?php echo($d_row["testID"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["nome"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["idade"]); ?></td>
<td width="10">&nbsp;</td>
</tr>

<?php
}
}
?>
</table>

<p>Número de Registros : <?php echo(mysqli_num_rows($result)); ?></p>

<?php
mysqli_close($conn);
?>
</body>
</html>
