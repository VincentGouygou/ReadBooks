<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 

// sql to create database

// $sql = "CREATE DATABASE rrrrEaDBooks";

// if ($conn->query($sql) === TRUE) {
//   echo "database rEaDBooks created successfully";
// } else {
//   echo "Error creating reaDBooks: " . $conn->error;
// }

// $conn->close(); 

//----------------------------------------------------------------------------------------------------

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rrrrEaDBooks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}  


// create table

// $sqlTable2= " CREATE TABLE users(
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// nom VARCHAR(30) NOT NULL,
// prenom VARCHAR(30) NOT NULL,
// telephone VARCHAR(30),
// email VARCHAR(30) NOT NULL,
// password VARCHAR(30) NOT NULL,
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sqlTable2) === TRUE) {
//     echo "table users created successfully";
//   } else {
//     echo "Error creating table users: " . $conn->error;
//   }





      // ----------------------------------------------------------------------------------------------------------------------------------------------
      $sql = "SELECT id, titre, auteur FROM bookstable";
      $result = $conn->query($sql);

            
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          // echo "email: " . $row["email"]. " - password: " . $row["password"]. "<br>"; 
          if  ($email==$row["titre"] )  {
            echo "Vous êtes dèjà inscrit  ! ! ! ";
            exit;
          }
  
  



        }
        $nom=       $_POST['nom'];
        $prenom=    $_POST['prenom'];
        $telephone= $_POST['telephone'];
        $email=     $_POST['email'];
        $pass=      $_POST['pass'];
        $insert = "INSERT INTO users(nom,prenom,telephone,email,password) 
        VALUES ('$nom','$prenom','$telephone','$email','$pass')";
        
        $response=['connected'=> $nom];
    
        echo  json_encode($response );
        
        if ($conn->query($insert) === TRUE) {
          
         
        } else {
          echo "Error inserting: " . $conn->error;
        }
      } else {
      
        echo "0 results";
      }
    