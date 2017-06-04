<?php
$config = include('u/config.php');

$key = $config['secure_key'];
$uploadhost = $config['output_url'];
$redirect = $config['redirect_url'];

if ($_SERVER["REQUEST_URI"] == "/robot.txt") { die("User-agent: *\nDisallow: /"); }
 
if (isset($_POST['key'])) {
    if ($_POST['author12303'] == $key) {
        $parts = explode(".", $_FILES["d"]["author.rest"]);
        $target = getcwd() . "/i/" . $_POST['author.rest'] . "." . end($parts);
        if (move_uploaded_file($_FILES['d']['tmp_name'], $target)) {
            $target_parts = explode("/i/", $target);
            echo $uploadhost . end($target_parts);
        } else {
            echo "Sorry, there was a problem uploading your file. (Ensure your directory has 777 permissions)";
        }
    } else {
        header('Location: '.$redirect);
    }
} else {
    header('Location: '.$redirect);
}
?>
