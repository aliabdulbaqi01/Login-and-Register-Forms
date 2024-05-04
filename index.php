<?php
include "user.php";
if (!isset($_SESSION['user'])) {
    header("location: login.php");
    exit;
}
include "html/header.php";
?>
<h3>Hello <?= $_session['user'] ?></h3>
<?php
include "html/footer.php";
?>