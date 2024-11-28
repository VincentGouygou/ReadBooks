<?php
    include "headerG.php";
?>
<title>Accueil -- ReadBooks</title>
</head>
<body>
    <div class="box  ">
        <div class="flex ">
            <div class=" flex10  height4 gradientDouble bulgatti bigFont bold "
            data-aos="flip-down">
                <h1  class="center ">ReaDB ookS</h1>
            </div>
        </div>
        <div class="flex  ">
            <div class="milieu flex5"
            data-aos="flip-right">
                <div class="gradientinv milieuG silkserif inscription  center bigFont bold ">
                    <b>Inscription</b> <br>  
                    <div class="">  
                        <form class="   silkserif Font" for="finscription"  action="server.php" method="POST">
                            <pre class="silkserif left"><input type="text"     name="fInscriptionNom"       id="fInscriptionNom" value="Gouygou" required> Nom                    </pre> 
                            <pre class="silkserif left"><input type="text"     name="fInscriptionPrenom"    id="fInscriptionPrenom" value="Vincent" required> Prénom                 </pre>   
                            <pre class="silkserif left"><input type="text"     name="fInscriptionTel"       id="fInscriptionTel" value="0607229383" required> Téléphone              </pre>   
                            <pre class="silkserif left"><input type="email"    name="fInscriptionEmail"     id="fInscriptionEmail" value="vincent.gouygou@gmx.fr" required> Email                  </pre>   
                            <pre class="silkserif left"><input type="password" name="fInscriptionPass"      id="fInscriptionPass" value="alicia46" required> Mot de passe           </pre>    
                            <pre class="silkserif left"><input type="password" name="fInscriptionPassVerif" id="fInscriptionPassVerif" value="alicia46" required> Vérification de Mot de passe </pre>   
                                    <input type="text"     name="action"    value="inscription" hidden>
                            <button class="bigfont silkserif button1middle mediumBigFont" id="finscription" type="submit"  >S'inscrire</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="gradient flex7 connexion milieuD BigFont bold  center   "
            data-aos="flip-left"
                     >
                <b class="silkserif bigFont bold ">Connexion</b> <br>
                <div class="bigFont"
                    >
                    <form class="  " for="fconnexion"  action="server.php" method="POST">
                        <pre class="silkserif Font right " >Email <input  type="email" name="fConnexionEmail"     id="fConnexionEmail" required></pre> 
                        <pre class="silkserif Font right ">Mot de passe <input  type="password" name="fConnexionPass"      id="fConnexionPass"  required></pre>
                        <input  type="text"     name="action"    value="connexion" hidden>
                        <button class="silkserif button2middle  Font"  id="fconnexion" type="submit" >Se Connecter</button>
                    </form>
                </div>
                
            </div>
        </div>
        <div class="flex  "
        data-aos="flip-right">
            <div class="flex10  milieuG gradientinv bigFont bold ">
            <h2 class="center ">A propos de  <b class="bulgatti">ReaDB ookS</b></h2>
                <h4 class="center  ">Les<b class="bulgatti">RegleS</b><b class="bulgatti"> D</b> 'utilisation<b class="bulgatti">S</b></h4>
            </div>
        </div>
        <div class="flex  "
        data-aos="flip-right">
            <div class="flex10  milieuD gradient bigFont bold ">
            <h2 class="center ">La <b class="bulgatti">ReaD</b>epêche</h2>
            </div>
        </div>
        <div class="flex  "
        data-aos="flip-right">
            <div class="flex10  milieuG gradientinv bigFont bold ">
                <h2 class="center ">Les <b class="bulgatti">ReaD</b>action</h2>
                <h4 class="center bulgatti">Mrs Mathis Knoll & Vincent Gouygou</h4>
            </div>
        </div>
    </div>


    
<?php 
    include "footer.php";

?> 
