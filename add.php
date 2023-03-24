<?
    $sql = new mysqli("localhost", "whatsup3SFxPF", "ibd9IFQCW3saaGZi", "whatsupQ7Hl9f");

    if (!isset($_POST['name']) ||
    	!isset($_POST['website']) ||
    	!isset($_POST['message'])) {
    	print 'Niet alle velden zijn ingevuld';
    	exit;
    }

    $result = $sql->query("INSERT INTO messages (name, site, message) VALUES ('" .
    	$_POST['name'] . "','" . $_POST['website'] . "','" .
    	$_POST['message'] . "')");

    if (!$result) {
    	print 'Fout_IN_SQL';
    	exit;
    }

    $id = $sql->insert_id;

    header("Location: view.php?id=" . intval($id));
?>