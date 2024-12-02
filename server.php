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


  if (   $_POST['action']=='inscription' ) {

    // {'email': email,'pass':pass,'passVerif':passVerif,'action':'inscription'};
    $nom=       $_POST['nom'];
    $prenom=    $_POST['prenom'];
    $email=     $_POST['email'];
    $telephone= $_POST['telephone'];
    $pass=      $_POST['pass'];
    $passVerif= $_POST['passVerif'];
 
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
          // echo "email: " . $row["email"]. " - password: " . $row["password"]. "<br>"; 
          if  ($email==$row["email"] )  {
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

if ( isset($_POST['email']) && isset($_POST['pass'])  && $_POST['action'] =='connexion' ) {

    $email=$_POST['email'];
    $password=$_POST['pass'];
    $sql = "SELECT id, nom, prenom, email, password FROM users";
    $result = $conn->query($sql);

          
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        
        if ( ($email==$row["email"] ) &&  ($password==$row["password"] ) ){
          $nom=$row["nom"];
          $prenom=$row["prenom"];
          $id=$row["id"];
          $email==$row["email"];
          // echo "prenom: ".$prenom. "email: " . $row["email"]. " - password: " . $row["password"]. "<br>"; 
           $response=['connected'=> $prenom,
                      'nom'=> $nom,
                      'id'=>$id,
                      'email'=>$email] ;
          // echo $prenom;
          echo  json_encode($response);
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