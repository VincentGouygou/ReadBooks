<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reaDbooks add book</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<div class="box  ">
        <div class="flex ">
            <div class=" flex10    gradientDouble bulgatti bigFont bold "
            data-aos="flip-down">
                <h1  class="center ">ReaDB ookS</h1>
                
            </div>
        </div>
        <div class="flex10 milieu">
                    <h2 class="center ">Ajoutes ton bouquin</h2>
                    <div class="salut center"> Bienvenue <b id="nom" >dfgdg</b> !!! </div> 
        </div>
       <div class="flex ">
       
                <div  class="gradientinv milieuG flex7 silkserif    superBigFont bold ">
                    <pre class="silkserif left">  <input type="text" name="faddbookTitre"    id="faddbookTitre"     value="" required> Titre          </pre> 
                    <pre class="silkserif left">  <input type="text" name="faddbookauteur"   id="faddbookauteur"    value="" required> Auteur         </pre>   
                    <pre class="silkserif left">  <input type="text" name="faddbooktheme"    id="faddbooktheme"     value="" required> Thème          </pre>   
                    <pre class="silkserif left">  <input type="text" name="faddbookNbrePages"id="faddbookNbrePages" value="" required> Nombre de pages</pre>   
                    <pre class="silkserif left">  <input type="integer" name="faddbookcaution"  id="faddbookcaution"   value="" required> Caution     </pre>    
                    <pre class="silkserif left">  <input type="text" name="faddbookSynopsis" id="faddbookSynopsis"  value="" required> Synopsis       </pre>    
                    <pre class="silkserif left">  <input type="text" name="faddbookComment"  id="faddbookComment"   value="" required> Commentaire    </pre>     
                
                </div>
                <div  class="gradient milieuD silkserif  flex5 bigFont bold ">
                          <pre class="silkserif Font right">      Metttez un titre et peut etre un auteur  <br>et des infos copiables vont apparaitre</pre>               
                        <pre class="silkserif Font right">  Ajoutez votre livre ! ! !  <button class="silkserif left Font " id="addbook">Go !!!</button></pre>
                     
                </div> 
           
       
            
       </div>

</div>
<script>   var tabparam=[];
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

    $('#nom').html(tabparam.nom+" "+tabparam.prenom);

    var q = $('#faddbookTitre').val();
    document.getElementById('faddbookTitre').onblur = function() {
        var q = $('#faddbookTitre').val();
        
        window.open('https://duckduckgo.com/?t=ftsa&q='+q);

        // window.open('https://googlethatforyou.com?q='+q);
    }



</script>
<script src="assets/vendor/aos/aos.js"></script>
        <script>
            AOS.init({duration: 3000});
        </script>
    
</body>
</html>