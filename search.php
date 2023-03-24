<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<link rel="stylesheet" type="text/css" href="contents.php?file=style.css" media="screen"/>
<title>What's up</title>
</head>
<body>
<div class="top">
    <div class="header">
    	<div class="left"></div>
    	<div class="right">
    		<h2>What's up</h2>
    		<p>Deze website maakt onderdeel uit van een Certified Secure challenge en wordt beveiligd door de beste specialisten!</p>
    	</div>
    </div>
</div>
<div class="container">
    <div class="main">
    	<div class="content">
    		<h1>ResultaatS_SEARCH</h1>
<?
    $sql = new mysqli("localhost", "whatsup3SFxPF", "ibd9IFQCW3saaGZi", "whatsupQ7Hl9f");

    if (isset($_GET['search'])) {
    	$result = $sql->query("SELECT name, site, message, `when` FROM messages WHERE message LIKE '%" . $_GET['search'] . "%'");

        while($res = $result->fetch_array(MYSQLI_ASSOC)) {
?>
    		<div class="descr"><?=$res['when']?> door <a href=<?=$res['site']?>><?=$res['name']?></a></div>
    		<blockquote>
    		<p><?=$res['message']?></p>
    		</blockquote>
<?
    	}
    }
?>
    		<h1>What's up?</h1>
    		<form method="POST" action="add.php">
    		<label for="name">Naam</label><input type="text" name="name" id="name"/>
    		<div class="clearer"></div>
    		<label for="website">Website</label><input type="text" name="website" id="website"/>
    		<div class="clearer"></div>
    		<label for="message">What's up</label><textarea name="message" id="message"></textarea>
    		<div class="clearer"></div>
    		<label for="submit"></label><input type="submit" id="submit"/>
    		</form>
    	</div>
    	<div class="sidenav">
    		<h2>Zoek</h2>
    		<form method="GET" action="search.php">
    		<input type="text" name="search" size="16"/><input type="submit" value="zoek"/>
    		</form>
    		<h2>Over</h2>
    		<p>Op deze website mag iedereen vertellen hoe het met hem of haar gaat. Heb je een slechte dag gehad omdat je site is gekraakt? Ben je ontslagen? Of heb je juist een nieuwe baan als security officer gevonden? Laat het weten!</p>
    	</div>
    	<div class="clearer"><span></span></div>
    </div>
    <div class="footer">&copy;2017 What's up. Template design door<a href="http://arcsin.se">Arcsin</a> </div>
</div>
</body>
</html>