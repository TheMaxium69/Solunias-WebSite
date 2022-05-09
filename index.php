<?php include "app/app.php"; $page = 1; head($page); ?>
<body> <?php navbar($page); ?>

    <div class="section" id="about"><h1>A Propos</h1><hr></div>

    <div class="container" id="about2">
        <div class="row">
            <div class="col-md-4">
                <div class="well">
                    <img src="https://tyrolium.fr/Contenu/Image/TyroDiscord.png" style="height:100%; width:100%; border-radius: 10px">
                </div>
            </div>
            <div class="col-md-8">
                <div class="well">
                    <h3>TyroDiscord ?</h3>
                    <p>TyroDiscord est avant tout un projet appartenant à l'entreprise Tyrolium, qui travaille dans la tech.<br><br>

                        Plus d'informations sur le bouton ci-dessous.<br><br>

                        TyroDiscord œuvre à améliorer l'expérience du réseau social Discord avec des logiciels, progiciels et bot<br><br>

                        Mais avant tout en respectant le réseau et ses exigences.<br><br>
                        A aucun moment le projet a pour but d'utiliser ses compétences à des fins de modifications, obtentions/collectes de données non conformes à leur règlement.</p>
                    <p><a target="_blank" href="https://tyrolium.fr"  class="btn btn-default">Plus d'informations</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="work"><h1>Nos Travaux</h1><hr></div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="well">
                    <img src="img/1.png" style="height:100%; width:100%; border-radius: 10px">
                </div>
            </div>
            <div class="col-md-8">
                <div class="well">
                    <h3>
                        TyroDiscordRCPSwitch
                    </h3>
                    <p>Il s'agit d'un projet qui a pour but d'afficher sur Discord le jeu auquel vous jouez sur votre Nintendo Switch.
                        Ce logiciel est actuellement en cours de développement mais téléchargeable juste en dessous.
                        Il affiche pour l'instant seulement une dizaine de jeux, code du projet open source.</p>
                    <p><a target="_blank" href="https://github.com/TheMaxium69/TyroDiscordRCPSwitch/releases/download/0.1.0/TyroDiscordRCPSwitch.jar" class="btn btn-default">Téléchargement</a>  <a target="_blank" href="https://github.com/TheMaxium69/TyroDiscordRCPSwitch" class="btn btn-default">Code / Repository</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="well">
                    <img src="img/2.png" style="height:100%; width:100%; border-radius: 10px">
                </div>
            </div>
            <div class="col-md-8">
                <div class="well">
                    <h3>TyroBot</h3>
                    <p>TyroBot est un chat bot Discord qui a pour but de vous aider à créer votre communauté sur Discord en vous donnant accès à des commandes de modération de jeux et des simplifications de paramètres.
                        Il a aussi pour objectif de connecter des API à Discord.
                        Ce bot est en cours de développement et open source.
                        Vous pouvez inviter ce bot avec le bouton ci-dessous.</p>
                    <p><a target="_blank" href="https://discord.com/oauth2/authorize?client_id=856464238720712715&permissions=8&scope=bot" class="btn btn-default">Inviter</a>  <a target="_blank" href="https://github.com/TheMaxium69/TyroBotDiscord" class="btn btn-default">Code / Repository</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="otherwork"><h1>Travaux Privé</h1><hr></div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="well">
                    <a href="https://tyroserv.fr"><img src="https://tyrolium.fr/Contenu/Image/TyroServBot.png" alt="tyroserv.fr" height="150px" class="pull-left" style="border-radius: 15px; margin-right: 10px;
    margin-bottom: 35px;"></a>
                    <h3>TyroServBot</h3>
                    <p>Bot Discord officiel du serveur Minecraft <a style="color: #1c1c1c" href="https://tyroserv.fr">TyroServ</a>.
                        Il sert à connecter les informations du serveur Minecraft vers le serveur Discord</p>
                    <div class="spacer"></div><div class="spacer"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="well">
                    <a href="https://solidserv.fr"><img src="https://tyrolium.fr/Contenu/Image/SolidServ.png" alt="solidserv.fr" height="150px" class="pull-left" style="border-radius: 15px; margin-right: 10px"></a>
                    <h3>SolidServBot</h3>
                    <p>Bot Discord officiel du projet <a style="color: #1c1c1c" href="https://solidserv.fr">SolidServ</a>. Il synchronise les actualités et les tickets support du site à Discord.</p>
                    <div class="spacer"></div><div class="spacer"></div>
                </div>
            </div>
        </div>
    </div>





<?php footer($page); ?></body> </html>