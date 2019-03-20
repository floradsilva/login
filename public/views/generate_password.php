<?php
$array = [];
if (isset($_POST['registeredEmail'])) {
    $registeredEmail = $_POST['registered-email'];
    try {
        $STH = $DBH->prepare("SELECT * FROM User WHERE email=:email");
        $STH->execute(['email' => $registeredEmail]); 
        // $STH->setFetchMode(PDO::FETCH_ASSOC);

        if ($row = $STH->fetch()) {
            
            $to = $row['email'];
            $subject = "Password Reset Link";
            $message = "Reset Link: http://php.dv/login\n\n Username:".$row['username']."\n\n Password: ".$row['passwd'];
            $headers = 'From: noreply@wisdmlabs.com';
            
            $success = mail($to, $subject, $message, $headers);
            if (!$success) {
                $array["success"] = error_get_last()['message'];
            }
            else {
                $array["success"] = "An email has been sent to you at corresponding email. Kindly check the email";
            }
        }
        else {
            $array["success"] = "Email Id not registered";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

echo json_encode($array);