<?

if (!isset($_GET['file'])) {
    exit;
}

if (substr($_GET['file'], -4, 4) == '.css') {
    header('Content-type: text/css');
}

if (substr($_GET['file'], -4, 4) == '.png') {
    header('Content-type: image/png');
}

if (substr($_GET['file'], -4, 4) == '.gif') {
    header('Content-type: image/gif');
}

if (substr($_GET['file'], -4, 4) == '.jpg') {
    header('Content-type: image/jpeg');
}

if (file_exists("/var/www/contents/" . $_GET['file'])) {
    print file_get_contents("/var/www/contents/" . $_GET['file']);
}
