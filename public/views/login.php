<?php
    print_r($_POST);
if (isset($_POST['uname'])) {
    $username = $_POST['uname'];
    $passwd = $_POST['passwd'];
        
    try {
        $STH = $DBH->prepare("SELECT * FROM User WHERE username=:username and passwd=:passwd");
        $STH->execute(['username' => $username, 'passwd' => $passwd]); 
        // $STH->setFetchMode(PDO::FETCH_ASSOC);

        $row = $STH->fetch();
        $_SESSION['username'] = $row['username'];
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_SESSION['username'])) {
    header('Location: /');
}
?>

<?php require_once "templates/head.php"; ?>
<?php require_once "templates/header.php"; ?>
<div class="container">
    <h2>Login</h2>
    <form class="form-horizontal content" action="#" method="post">
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="uname">Username:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="passwd" required>
            </div>
        </div>
        <div class="form-group submit">
            <div class="col-sm-2"></div>
            <div class="col-sm-2 pad-2" id="forgot-password">
                <a href="#">Forgot Password</a>
            </div>
            <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
    <form class="form-horizontal content" action="#" method="post" id="forgot-password-form">
        <hr />
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="registered-email">Email:</label>
            <div class="col-sm-6">
                <input type="email" id="registered-email" class="form-control" name="registered-email" placeholder="Enter registered email id" required>
            </div>
        </div>
        <div class="form-group submit">
            <div class="col-sm-2"></div>
            <div class="col-sm-offset-3 col-sm-4">
                <button type="submit" id="gen-password" class="btn btn-default">Send me password</button>
            </div>
        </div>
    </form>
</div>
<?php require_once "templates/footer.php"; ?>
<?php require_once "templates/end-html.php"; ?>