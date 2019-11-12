<?php
    session_start();
    $_SESSION['form_id'] = uniqid();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form1</title>
    </head>

    <body>
        <?php
            if( !empty($_SESSION['error_message'] )) {
                echo '<h2>' . implode('<br>',$_SESSION['error_message'] ) . '</h2>';
            }
        ?>
        <form method="post" action="form1_submit.php">
            <p>
                <label for="nom">Nom : </label>
                <input type="text" name="nom" id="nom"> <br>
            </p>

            <p>
                <label for="prenom">Prénom : </label>
                <input type="text" name="prenom" id="prenom">
            </p>

            <p>
                <input type="radio" name="gender" value="male"> Homme<br>
                <input type="radio" name="gender" value="female"> Femme<br>
            </p>

            <p>
                <label for="start">Start date:</label>
                <input type="date" id="start">
            </p>

            <p style="text-align: center">
                <input type="submit" value="Valider">
            </p>
            <input type="hidden" name="form_id" value="<?php print $_SESSION['form_id'];?>">
        </form>
    </body>
</html>

