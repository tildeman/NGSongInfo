<!DOCTYPE html>
<html>
<head>
	<title>Get NG song info by tFS123</title>
</head>
<body>
	<form method="post">
		<input type="number" name="songID">
		<input type='submit' name='subm'>
	</form>
	<?php
		if (isset($_POST['subm'])) {
			echo "Raw data: ";
			include 'getGJSongInfo.php';
			if (!isset($returnres)) {
				$returnres=$result;
			}
			echo '<br>';
			$uniformdata=explode('~|~',$returnres);
			echo 'Song ID: '.$uniformdata[1].'<br>Song Name: '.$uniformdata[3].'<br>Artist ID: '.$uniformdata[5].'<br>';
			echo 'Song artist (upon publishment, may be incorrect): '.$uniformdata[7].'<br>Size: '.$uniformdata[9].'MB<br>';
			echo 'Download link: <a href="'.urldecode($uniformdata[13]).'">'.urldecode($uniformdata[13]).'</a>';
		}
	?>
</body>
</html>