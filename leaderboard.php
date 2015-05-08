<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" type="text/css" href="leaderboard.css">
	
</head>
<body>
	<nav id="main_header">
		<ul>
			<li class="leaderboard"><a href="leaderboard.php"><img src="leaderboard.png"></a></li>
			<li id="logo"><a href="apptest.php"><img src="logo+tag.png"></a></li>
			<li class="contribute"><a href="contribute.php"><img src="contribute.png"></a></li>
		</ul>
	</nav>

	<table>
		<tr>
			<th>SONG</th>
			<th>CRUNCHES</th>
		</tr>

<?
require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if(!$conn) echo "The connection failed.";
	
$query = "SELECT * FROM songs ORDER BY crunch DESC";
$result = $conn->query($query);



for($i=0; $i<$result->num_rows; ++$i){
	$result->data_seek($i);
	$tablerow = $result->fetch_array(MYSQL_ASSOC);
	echo<<<_END
	<tbody>
		<tr>
			<td class="url_iframe"><iframe src=$tablerow[url]></iframe></td>
			<td class="crunch">$tablerow[crunch]</td>
		</tr>
	</tbody>	
_END;
};



?>

</table>

</body>
</html>