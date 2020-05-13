<?php
require_once('cnn.php');
$user = $_POST['inp_username'];
$pass = $_POST['inp_password'];

$stmt = $cnn->prepare("SELECT * FROM user WHERE nick = ?");
$stmt->bind_param("s", $_POST['inp_username']);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
if (password_verify($_POST['inp_password'], $user['hash']))
{   session_start();
 $_SESSION["user"] = $user['nick'];
 $_SESSION['logged-in'] = true;
 header('Location: home.php');
 exit;
 
 ?>
<!-- <script> window.location.href = 'home.php';</script>-->
<?php
 
} else {
    header("location: login.php"); 
}
mysqli_free_result($user);
mysqli_close($cnn);
//$test = password_hash('1234', PASSWORD_DEFAULT);
?>
