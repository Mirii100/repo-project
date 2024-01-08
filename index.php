<?php
echo" hae";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$Password=$_POST['password'];
$Phonenumber=$_POST['phonenumber'];
$Email=$_POST['Email'];
$Radio=$_POST['Radio'];
$conn=new mysqli('localhost','root','Alexander07','form');
/*if ($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into 
    registration(firstname,lastname,
    Password,phonenumber,Email,Radio) 
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssiiss",$firstname,$lastname,$Password,
    $Phonenumber,$Email,$Radio);
    $stmt->execute();
    echo"regislation successifully";
    $stmt->close();
    $conn->close();
}*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['first_name']; // Changed from 'first name'
    $lastname = $_POST['last_name']; // Changed from 'last name'
    $Password = $_POST['password'];
    $Phonenumber = $_POST['phonenumber'];
    $Email = $_POST['email'];
    $Radio = $_POST['radio'];

    $conn = new mysqli('localhost', 'root', 'Alexander07', 'form');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO registration (firstname, lastname, Password, phonenumber, Email, Radio) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $firstname, $lastname, $Password, $Phonenumber, $Email, $Radio);
        $stmt->execute();
        echo "Registration successful";
        $stmt->close();
        $conn->close();
    }
}
?>

