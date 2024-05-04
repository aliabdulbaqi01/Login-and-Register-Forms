<?php
include "user.php";
if (isset($_SESSION["user"])) {
    header("location: index.php");
    exit;
}
if (isset($_POST['username'])) {
    echo "true";
}
include "html/header.php";
?>
<form method="post">
    <div class="form-group">
        <label for="username">Enter Your Username:</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
    </div>
    <div class="form-group">
        <label for="password">Enter Your Password:</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" min="8">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
    </div>
    <input type="submit" class="btn btn-primary" value="login">
</form>
<?php
include "html/footer.php";
?>