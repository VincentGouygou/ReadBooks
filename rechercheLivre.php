<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="styleRecherche.css">
 
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReaDBookS</title>
</head>
<body>
<div class="box  ">
        <div class="flex ">
            <div class=" flex10  height4 gradientDouble bulgatti bigFont bold "
            data-aos="flip-down">
                <h1  class="center ">ReaDB ookS</h1>
            </div>
        </div>

       <div class="flex ">
        <div class="flex10">
            <div class="salut "> Bienvenue <b id="nom" >dfgdg</b> !!! </div>
                <div  class="gradient milieuD silkserif    superBigFont bold ">
                        <pre class="silkserif bigFont right">votre recherche <input type="text"     name="frecherche"       id="frecherche"   required> <button class="silkserif right " id="search"> Go !!!</button> </pre> 
                         
                </div>
                <div  class="gradientinv milieuG silkserif    superBigFont bold ">
                        <pre class="silkserif bigFont left">  Ajoutes ton livre ! ! !  <button class="silkserif left Font " id="addbook" onclick="addbook()">Ajouter un livre</button> Si tu ne le trouves pas</pre>
                     
                </div>
                <div  class="gradient milieuD silkserif center  superBigFont bold ">
                         <pre class="silkserif bigFont right" id="bookslist"> Listes des bouquins <br> </pre>
                </div>
           
        </div>
            
       </div>

</div>



 <script>  
 
console.log(window.location.search
    .substr(1)
    .split('&')
    .reduce(
        function(accumulator, currentValue) {
            var pair = currentValue
                .split('=')
                .map(function(value) {
                    return decodeURIComponent(value);
                });

            accumulator[pair[0]] = pair[1];

            return accumulator;
        },
        {}
    )
);
var tabparam=[];
tabparam=window.location.search
    .substr(1)
    .split('&')
    .reduce(
        function(accumulator, currentValue) {
            var pair = currentValue
                .split('=')
                .map(function(value) {
                    return decodeURIComponent(value);
                });

            accumulator[pair[0]] = pair[1];

            return accumulator;
        },
        {}
    );
    console.log(tabparam);
 

// const params = new URLSearchParams(urlstr);
// for (const [key, value] of params) {
//   console.log(`Key: ${key}, Value: ${value}`);
// }
// console.log(params.get('year'))
// console.log(params.get('month'))




   

    $('#nom').html(tabparam.nom+" "+tabparam.connected);
   
    function addbook() {
        var id=tabparam.id;
    var email=tabparam.email;
    var nom=tabparam.nom;
    var prenom=tabparam.connected;
    var action ='getuserinfo';
    let urll='addbook.php?prenom='+prenom+"&nom="+nom+"&id="+id+"&email="+email;
                            
    window.location.href=urll;
    }   
    //    var myData =  { "nom":  nom,
    //                    "id" : id,
    //                    "action": 'getuserinfo',
    //                    "prenom": prenom,
    //                     "email": email};
                   
    //    $.ajax({
    //                        url: "addbook.php", // Url appelée
    //                        method: "POST",              // la méthode GET ou POST
    //                        data:myData,
                          
    //                        // si l'envoi est réussi 
    //                        success: function(response) {
                               
    //                            console.log(response);
    //                         //    console.log(response['connected']) ;
    //                         //    let urll='addbook.php?connected='+response.connected+"&nom="+response.nom+"&id="+response.id+"&email="+response.email;
    //                         //    if (response.connected!==null) {
    //                         //       window.location.href=urll;
                               
                             
    //                        },
    //                        // s il y a une erreur je l'affiche en console et dans la div #messageID
    //                        error: function(error) {
    //                            console.log("errrrroreu"+error.statusText);
                            
    //                        }
    //                    });

   

 </script>



<?php
 include 'footer.php'
?>


