<?php
    $fname = $_POST['fname'];
    $lname = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $description = $_POST['description'];
    $fp = fopen(”formdata.txt”, “a”);
    $savestring = $fname . “,” . $lname . "," . $phone . "," . $email . "," . $website . "," description . “n”;
    fwrite($fp, $savestring);
    fclose($fp);
    echo “<h1>You data has been saved in a text file!</h1>”;
?>