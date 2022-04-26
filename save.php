<?php
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['psw'];
        $con_pass = $_POST['con-pass']; 

        echo "Full Name" . $fname."". $lname . "\n";
        echo "Email: " . $email;

        $file = fopen('registrationdetails.txt','a+');

        fwrite( $file,"\n".$fname . "  " . $lname . "\n");
        fwrite( $file,$email."|");
        fwrite( $file,$pass);
        fclose( $file);

    }


?>