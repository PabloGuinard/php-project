<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<?php
    include "class/db.php";
    include "class/form.php";
    include "modules/banner.php";
    include 'modules/header.php';
?>
<main>
    <section id="formContact">
        <form data-aos="slide-right" data-aos-duration="1000" data-aos-easing="ease-out" action="contactTraitement.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>CONTACTEZ-MOI</legend>
                <div id="formulaireContact">
                    <?php
                        $list = array('sujet', 'email', 'tel', 'nom', 'prenom', 'message');
                        $f1 = new form();
                        $f1->setList($list);
                        $f1->input();
                    ?>
                    <div id="divButtons">
                        <button class="envoyerContact" type="submit">Envoyer</button>
                        <button class="effacerContact" type="reset">Effacer</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
    <section id="coordonnées" data-aos="slide-left" data-aos-duration="1000" data-aos-easing="ease-out">
        <h2 id="titreHoraires">MES HORAIRES</h2>
        <table id="tabHoraire">
            <thead>
                <tr><th colspan="4" id="thHoraires"> </th></tr>
            </thead>
            <tbody>
                <tr><th class="ligneHaut">9h / 11h</th><th class="ligneHaut">11h / 14h</th><th class="ligneHaut">14h / 17h</th><th class="ligneHaut">17h / 21h</th></tr>
                <tr><th class="ligne">Lundi</th><td class="ligne"><img src="img/refuse.png" alt="non" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td></tr>
                <tr><th class="ligne">Mardi</th><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td></tr>
                <tr><th class="ligne">Mercredi</th><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td></tr>
                <tr><th class="ligne">Jeudi</th><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td></tr>
                <tr><th class="ligne">Vendredi</th><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td></tr>
                <tr><th class="ligne">Samedi</th><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td></tr>
            </tbody>
        </table>
        <h2 id="titreTrouvezMoi">TROUVEZ-MOI</h2>
        <div id="divTrouvezMoi">
            <div id="texteTouvezMoi">
                <p class="sousTitreTrouvezMoi">Email :</p>
                <p>pablo.guinard@etu.univ-lyon1.fr</p>
                <p class="sousTitreTrouvezMoi">Tel :</p>
                <p>06 68 39 32 21</p>
                <p class="sousTitreTrouvezMoi">Adresse :</p>
                <p>6 rue de la Paix 01000 Bourg-en-Bresse</p>
            </div>
        </div>
    </section>
</main>
<?php include 'modules/footer.php'?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>