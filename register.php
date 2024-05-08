<?php
include "inc/user.php";

if (isset($_SESSION['user'])) {
    header("location: index.php");
}


include "html/header.php";
?>

<!-- main -->
<div class="container">
    <form action="" method="post">
        <div class="group-from mt-3">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username">

        </div>
        <div class="group-from mt-3">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">

        </div>
        <div class="group-from mt-3">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="123456kK#">

        </div>
        <div class="group-from mt-3">
            <label for="repassword">Confirm Password:</label>
            <input type="password" name="re_password" class="form-control" id="repassword" placeholder="123456kK#">

        </div>
        <input type="submit" value="Sign Up" id="btn btn-primary">
    </form>
</div>
<?php
include "html/footer.php";
?>