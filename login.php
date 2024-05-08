<?php
include "inc/user.php";
$error = false;
if (isset($_SESSION["user"])) {
    header("location: index.php");
    exit;
}
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (login($username, $password)) {
        header('location: index.php');
        exit;
    } elseif (!login($username, $password)) {
        $error = "user not exist";
    } else {
        $error = "wrong passwrod";
    }
}
include "html/header.php";
?>
<div class="container mt-5">
    <h2>Login</h2>
    <?php
    if (!$error) {
        echo "<div class='alert alert-info' role='alert'>";
        echo $error;
        echo "</div>";
    }

    ?>
    <form method="post">
        <div class="form-group">
            <label for="username">Enter Your Username:</label>
            <input type="text" class="form-control mt-2 mb-3" id="username" name="username"
                placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="password">Enter Your Password:</label>
            <input type="password" name="password" class=" mb-3 form-control" id="password" placeholder="Password"
                min="8">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        <input type="submit" class="btn btn-primary mt-2" value="login">
    </form>
</div>
<?php
include "html/footer.php";
?>