<?php
    if (isset($_POST)) {
        print_r($_POST);
        try {
            $username = $_POST['uname'];
            $passwd = $_POST['passwd'];
            $first_name = $_POST['fname'];
            $last_name = $_POST['lname'];
            $full_name = $first_name." ".$last_name;
            $contact_number = $_POST['phoneNum'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $created_at = "121212";
            print_r([$username, $passwd, $first_name, $last_name, $full_name, $contact_number, $gender, $email, $created_at]);

            $STH = $DBH->prepare('INSERT INTO User (username, passwd, first_name, last_name, full_name, contact_number, gender, email, created_at) VALUES 
                (:username, :passwd, :first_name, :last_name, :full_name, :contact_number, :gender, :email, :created_at)');
            $STH->bindParam(':username', $username, PDO::PARAM_STR);
            $STH->bindParam(':passwd', $passwd, PDO::PARAM_STR);
            $STH->bindParam(':first_name', $first_name, PDO::PARAM_STR);
            $STH->bindParam(':last_name', $last_name, PDO::PARAM_STR);
            $STH->bindParam(':full_name', $full_name, PDO::PARAM_STR);
            $STH->bindParam(':contact_number', $contact_number, PDO::PARAM_STR);
            $STH->bindParam(':gender', $gender, PDO::PARAM_STR);
            $STH->bindParam(':email', $email, PDO::PARAM_STR);
            $STH->bindParam(':created_at', $created_at, PDO::PARAM_STR);


            $STH->execute();

            $STH = $DBH->prepare("SELECT * FROM User WHERE username=:username and passwd=:passwd");
            $STH->execute(['username' => $username, 'passwd' => $passwd]);
            $row = $STH->fetch();
            $_SESSION['username'] = $row['username'];

            // $sth->debugDumpParams();
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    if (isset($_SESSION['username'])) {
        header('Location: /');
    }
?>
<?php include_once "templates/head.php"; ?>
<?php include_once "templates/header.php"; ?>
<div class="container">
    <h2>User Registration</h2>
    <form class="form-horizontal content" action="#" method="post">
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="fname">First Name:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" required>
            </div>
        </div>
        <div class="form-group">
           <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="lname">Last Name:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" required>
            </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2"></div>
            <label for="phoneNum" class="control-label col-sm-2">Contact Number:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="phoneNum" placeholder="Enter contact number" name="phoneNum" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="gender">Gender:</label>
            <div class="radio col-sm-4">
                <label><input type="radio" name="gender" value="male" checked>Male</label>
            </div>
            <div class="radio col-sm-4">
                <label><input type="radio" name="gender" value="female">Female</label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="uname">Username:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="uname" placeholder="Enter username of your choice" name="uname" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-6">
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-6">
                <input type="password" name="passwd" class="form-control" id="pwd" placeholder="Enter password" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="confirm-pwd"> Confirm Password:</label>
            <div class="col-sm-6"> 
                <input type="password" class="form-control" id="confirm-pwd" placeholder="Confirm password" required>
            </div>
        </div>
        <div class="form-group"> 
            <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>
<?php include_once "templates/footer.php"; ?>
<?php include_once "templates/end-html.php"; ?>