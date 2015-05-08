<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" type="text/css" href="contribute.css">
	
</head>
<body>
	<nav id="main_header">
		<ul>
			<li class="leaderboard"><a href="leaderboard.php"><img src="leaderboard.png"></a></li>
			<li id="logo"><a href="apptest.php"><img src="logo+tag.png"></a></li>
			<li class="contribute"><a href="contribute.php"><img src="contribute.png"></a></li>
		</ul>
	</nav>



<?
require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if(!$conn) echo "The connection failed.";

if(isset($_POST['artist']) && isset($_POST['song']) && isset($_POST['url']))
{
		$stmt = $conn->prepare("INSERT INTO user_suggestions VALUES(?,?,?,?)");
		$stmt->bind_param('ssss',$null, $artist, $song, $url);

		$null = null;
		$artist = $_POST['artist'];
		$song = $_POST['song'];
		$url = $_POST['url'];

		$stmt->execute();
};

	echo<<<_END
	<div id="xxxform">
	<form class="pure-form pure-form-aligned" action="contribute.php" method="post">
    <fieldset>
        <div class="pure-control-group">
            <label for="artist">Artist</label>
            <input id="artist" name="artist" type="text" placeholder="Artist">
        </div>

        <div class="pure-control-group">
            <label for="song">Song</label>
            <input id="song" name="song" type="text" placeholder="Song">
        </div>

        <div class="pure-control-group">
            <label for="url">SoundCloud URL</label>
            <input id="url" name="url" type="text" placeholder="SoundCloud URL">
        </div>

        <div class="pure-controls">
            <input type="submit" value="SUBMIT">
        </div>
    </fieldset>
</form>
</div>
	
_END;

?>

</body>
</html>