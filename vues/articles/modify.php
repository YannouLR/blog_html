<?php
session_start();

require("../templates/head.php");
require("../templates/header.php");
?>

    <main id="main">
    <div class="cont">
        <h2>Articles</h2>
        <p>Ajoute un article ici</p>
        <form action="/controller/articleController.php?type=modify" method="post">
            <input type="hidden" name="user_id" id="user_id" value="<?php if(isset($_SESSION['user']['id'])) { echo $_SESSION['user']['id']; } ?>">
            <input type="text" id="title" name="title" placeholder="Titre de l'article" required><br>
            <textarea id="content" name="content" placeholder="contenu*" required></textarea><br>


            <div>
                <select name="categorie" id="categories">
                    <option value="1">Objectif</option>
                    <option value="2">Appareil photo</option>
                    <option value="3">Object</option>
                </select>
            </div>

            <input type="submit" value="Envoyer l'article" class="submit">
        </form>

        </div>
    </main>
</body>
<?php
require("../templates/footer.php");

?>