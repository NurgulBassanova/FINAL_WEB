<?php
$host='localhost';
$user='nurgul';
$pass='Nurgul22!';
$dbnm='croissave';

$link=mysqli_connect($host, $user, $pass, $dbnm);



    if (isset($_POST['next'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    

    $sel1 = mysqli_query($link,"SELECT `password` FROM `guests` WHERE `name_guest` = '$firstName' AND `surname_guest` = '$lastName' ;");

    $data1 = mysqli_fetch_assoc($sel1);

    if ($data1['password']==$passw1) {
        echo "Now you can <a href = '../appl.html'> submit application!";
    }

    else {
        echo "Wrong entered data!";
    }

}


    


?>