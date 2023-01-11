<?php

    if(isset($_POST['submit'])){
        //grabs the data from the contact form
        $name = $_POST["name"];
        $mailFrom = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $mailTo = "barrettcode@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have recieved an email from ".$name.".\n\n".$message;
        //3 parameters 1: where to send to 2: subject 3: content
        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend");
    }
?>