<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

// // sql to create table
// $sql = "CREATE DATABASE readBooks";

// if ($conn->query($sql) === TRUE) {
//   echo "database myDb created successfully";
// } else {
//   echo "Error creating db: " . $conn->error;
// }

// $conn->close(); 

//----------------------------------------------------------------------------------------------------

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "readBooks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else echo "Connected successfully";

// $sqlTable2= " CREATE TABLE users(
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// email VARCHAR(30) NOT NULL,
// password VARCHAR(30) NOT NULL,
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sqlTable2) === TRUE) {
//     echo "table users created successfully";
//   } else {
//     echo "Error creating table users: " . $conn->error;
//   }


  if ( isset($_POST['fInscriptionEmail']) && isset($_POST['fInscriptionPass']) && $_POST['action']=='inscription' ) {

    // {'email': email,'pass':pass,'passVerif':passVerif,'action':'inscription'};
    $email=$_POST['fInscriptionEmail'];
    $pass=$_POST['fInscriptionPass'];
    $passVerif=$_POST['fInscriptionPassVerif'];

    // $fileContentJson= file_get_contents("ListInscrits.json");

    $trouve=false;
    if ($pass!==$passVerif) { 
        echo "les mots de passe ne sont pas similaires"; 
        exit();
    } else { 


      // ----------------------------------------------------------------------------------------------------------------------------------------------
      $sql = "SELECT id, email, password FROM users";
      $result = $conn->query($sql);

            
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "email: " . $row["email"]. " - password: " . $row["password"]. "<br>"; 
          if  ($email==$row["email"] )  {
            echo "Vous êtes dèjà inscrit  ! ! ! ";
            exit;
          }

  
         

          $email=$_POST['fInscriptionEmail'];
          $pass=$_POST['fInscriptionPass'];
          $insert = "INSERT INTO users(email,password) 
          VALUES ('$email','$pass')";
                  echo $insert;
          if ($conn->query($insert) === TRUE) {
            echo "insert inserted successfully" ;
            echo "Vous êtes inscrit !!!"; 
          } else {
            echo "Error inserting: " . $conn->error;
          }
         
  



        }
      } else {
        echo "0 results";
      }
    
        // if (  strlen($fileContentJson) == 0) {
        // $tabInscrits=[];
        // } else {
        //     $tabInscrits= json_decode($fileContentJson,true);
        // }
        // for ($i=0; $i < count($tabInscrits) && $trouve=false; $i++) { 
        //     $element=$tabInscrits[$i];
        //     $emailListed=$element['email'];
        //     $passListed=$element['password'];
        //     if ( $emailListed==$email && $passListed==$pass)  {
        //         $trouve=true;
        //         echo "Vous êtes dèjà inscrit  ! ! ! ";
    
        //     } 
            
        // }

        // array_push($tabInscrits, [
        // 'email' => $email,
        // 'password'  => $pass
        // ]); 
        // $tabInscritsJson=json_encode($tabInscrits);
        // file_put_contents("ListInscrits.json", $tabInscritsJson);

      
    }

    

    
} // fin inscription

// connexion -------------------------------------------------------------------------------------

if ( isset($_POST['fConnexionEmail']) && isset($_POST['fConnexionPass'])  && $_POST['action'] =='connexion' ) {

    $email=$_POST['fConnexionEmail'];
    $password=$_POST['fConnexionPass'];
    $sql = "SELECT id, email, password FROM users";
    $result = $conn->query($sql);

          
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "email: " . $row["email"]. " - password: " . $row["password"]. "<br>"; 
        if ( ($email==$row["email"] ) &&  ($password==$row["password"] ) ){
          echo "Vous êtes connecté ! ! ! ";
          exit;
        }
      }
    } else {
      echo "Email et/ou Mot de passe invalide";
    }


    // $trouve=false;
    // $fileContentJson= file_get_contents("ListInscrits.json");
    // if (  strlen($fileContentJson) == 0) {
    //     echo "Personne n'est inscrit ! ! ! ";
    //     } else {
    //         $tabInscrits= json_decode($fileContentJson,true);
    //     }
    // for ($i=0; $i < count($tabInscrits) && $trouve=false; $i++) { 
    //     $element=$tabInscrits[$i];
    //     $emailListed=$element['email'];
    //     $passListed=$element['password'];
    //     if ( $emailListed==$email && $passListed==$pass)  {
    //         $trouve=true;
    //         echo "Vous êtes connecté";

    //     }
        
    // } if ($trouve==false) {echo "Email et/ou Mot de passe invalide";}

}
$conn->close(); 
?> 