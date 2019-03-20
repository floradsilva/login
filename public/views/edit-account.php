<?php require_once "templates/head.php"; ?>
<?php require_once "templates/header.php"; ?>
<div class="container">
    <h2>Upate Information</h2>
    <form class="form-horizontal content" action="index.php">
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
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" required>
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
                <button type="submit" class="btn btn-default">Update Account</button>
            </div>
        </div>
    </form>
</div>
<?php require_once "templates/footer.php"; ?>
<?php require_once "templates/end-html.php"; ?>