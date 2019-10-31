<?php
var_dump($_POST);
?>

<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="fantaoiseaux/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fantaoiseaux/css/style.css">
    <meta name="viewport" content="width-device-width, initial-scale-1-0">
    <title>Modif Article User</title>
    <meta charset="utf-8">

</head>

<body>
    <div class="container-fluit">
        <div class="row= 6">
            <section>
                <H1>Modifier un article</H1>

                <form action="articles_liste.php" method="post">
                    <section>

                        <div>
                            <label for="titre">Titre : </label>
                            <input type="text" id="titre" name="titre" placeholder="Entrez un titre">
                        </div>
                        <div>
                            <input type="file" id="image" name="image" accept="image/png, image/jpeg, image/jpg">
                        </div>
                        <div>
                            <label for="intro">Introduction : </label>
                            <input type="text" id="intro" name="intro" placeholder="Écrivez une introduction d'article">
                        </div>

                    </section>
                    <section>
                        <div>
                            <label for="sujet">Catégorie : </label>
                            <select id="sujet" name="sujet">
                                <option value="1">Votre article concerne : </option>
                                <option value="2">Informatique</option>
                                <option value="3">Bicyclette</option>
                                <option value="4">Autre demande....</option>
                            </select>
                        </div>
                        <div>
                            <label for="text">Texte : </label>
                            <textarea id="text" name="text" placeholder="Texte"></textarea>
                        </div>

                        <div>
                            <label for="url">En savoir plus : </label>
                            <input type="url" id="url" name="url" placeholder="Lien vers le site de l'évènement">
                        </div>

                        <div>
                            <label for="alaune">Article à la une : </label>
                            <input type="checkbox" id="alaune" name="alaune">
                        </div>

                    </section>
                    <div><input type="submit" value="Envoyer"></div>

                </form>
            </section>
        </div>
    </div>    
        <footer>
            <div>
                <p>Crédits : fantaoiseauxteam </p>
            </div>
        </footer>


</body>

</html>