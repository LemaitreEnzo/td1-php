<?php
// déclaration de variable

$bs_title_class = 'text-center display-4';

$languages = ['C', 'Java', 'Perl'];

/**
 * Votre code ici
 */

// Chaque variables doivent commencer par "$" et se finir par ";"

// question 1

$language = "PHP";
$tradLanguage = "Hypertext PreProcessor";
$typeOfLanguage = "Script";
$Where = "Serveur";

// question 2

$nb1 = 10;
$nb2 = 18;

// question 3

// question 4

$firstLine = "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. ";
$secondLine = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, nulla nemo esse accusantium dolorum iste accusamus?";
// $firstLine .= $secondLine
$finalSentence = $firstLine . $secondLine;


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Découverte des bases du PHP</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="<?= "$bs_title_class" ?>"> Découverte des bases du PHP</h1>

        <p class="text-justify" id="intro">
            <abbr title="PHP: Hypertext Preprocessor"><?= "$language" ?></abbr> est un acronyme récursif, qui signifie <?= "$tradLanguage" ?> : c'est un langage de <mark><?= "$typeOfLanguage" ?></mark> HTML,
            exécuté côté <mark><?= "$Where" ?></mark> . Sa syntaxe est empruntée aux langages C, Java et Perl , et
            est facile à apprendre. Le
            but de ce langage est de permettre aux développeurs web d'écrire des pages dynamiques rapidement, mais vous
            pouvez faire beaucoup plus avec PHP.
        </p>
        <h2>Que peut-on faire avec PHP ?</h2>
        <div id="accordion" role="tablist">
            <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                    <h3 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Des opérations mathématiques avec les chiffres #1
                        </a>
                    </h3>
                </div>

                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-body">
                        <p>Somme : <?= "$nb1 + $nb2 = ", $nb1 + $nb2 ?></p>
                        <p>Produit : <?= "$nb1 * $nb2 = ",  $nb1 * $nb2 ?></p>
                        <p>Modulo : <?= "$nb1 % $nb2 = ", $nb1 % $nb2 ?></p>
                        <p>Différence : <?= "$nb1 - $nb2 = ", $nb1 - $nb2 ?></p>
                        <p>Division : <?= "$nb1 / $nb2 = ",  $nb1 / $nb2 ?></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                    <h3 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Manipulation de texte #2
                        </a>
                    </h3>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="card-body">
                        <p>
                            <?= "$finalSentence" ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                    <h3 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Manipulation de booléen #3
                        </a>
                    </h3>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="card-body">
                        <h4>Comparaison de variables</h4>
                        <p>
                            La variable un est supérieure à la variable deux :
                            <!-- écrire votre code dans le span -->
                            <span class="bg-secondary p-2">
                                <?php
                                if ($nb1 >= $nb2) { #boucle "if" pour comparer deux variables 
                                    echo "true";
                                } else {
                                    echo "false";
                                }
                                ?>
                            </span>
                        </p>
                        <p>La variable un est strictement supérieure à la variable deux :
                            <!-- écrire votre code dans le span -->
                            <span class="bg-secondary p-2">
                                <?php
                                if ($nb1 > $nb2) { #boucle "if" pour comparer deux variables
                                    echo "true";
                                } else {
                                    echo "false";
                                } ?>
                            </span>
                        </p>
                        <p>La variable un est égale à la variable deux :
                            <span class="bg-secondary p-2">
                                <?php
                                if ($nb1 == $nb2) { #boucle "if" pour comparer deux variables
                                    echo "true";
                                } else {
                                    echo "false";
                                } ?>
                            </span>
                        </p>
                        <p>La variable un est strictement égale à la variable deux :
                            <span class="bg-secondary p-2">
                                <?php
                                if ($nb1 === $nb2) { #boucle "if" pour comparer deux variables
                                    echo "true";
                                } else {
                                    echo "false";
                                } ?>
                            </span>
                        </p>
                        <p>La variable un est supérieure ou égale à la variable deux :
                            <span class="bg-secondary p-2">
                                <?php
                                if ($nb1 >= $nb2) { #boucle "if" pour comparer deux variables
                                    echo "true";
                                } else {
                                    echo "false";
                                } ?>
                            </span>
                        </p>
                        <p>La variable un est inférieure ou strictement égale à la variable deux :
                            <span class="bg-secondary p-2">
                                <?php
                                if ($nb1 <= $nb2) { #boucle "if" pour comparer deux variables
                                    echo "true";
                                } else {
                                    echo "false";
                                } ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingFour">
                    <h3 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Manipulation de liste #4
                        </a>
                    </h3>
                </div>
                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="card-body">
                        <h4>Liste des langages dont la syntaxe du PHP est inspirée</h4>
                        <!-- écrire votre code ici -->
                        <ul> <?php foreach ($languages as $element) {
                                    echo "<li>$element</li>";
                                } ?>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>