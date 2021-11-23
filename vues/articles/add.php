<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Le Blog des vieux" />
    <meta name="keywords" content="blog, vieux, discution, jeux, test" />
    <meta name="author" content="Yann Lenerand" />
    <title>Accueil - Blog</title>
    <link rel="stylesheet" href="/assets/style/main.css">
</head>

<body>
    <header>
        <a href="/index.php">
            <h1 id="title">
                Blog des vieux
            </h1>
        </a>
        <nav>
            <a href="/vues/articles/articles.php">Articles</a>
            <div class="subnav">
                <button class="subnavbtn">
                    <a href="/vues/articles/categories.php">
                        Catégories
                    </a>
                </button>
                <div class="subnav-content">
                    <a href="amelie.php">Amélie</a>
                    <a href="adeline.php">Adeline</a>
                </div>
            </div>
            <a href="/vues/articles/add.php" id="add">Ajouter un article</a>
            <a href="/vues/account/signup.php">Inscription</a>
            <a href="/vues/account/login.php">Connexion</a>
            <a href="/vues/account/logout.php">Déconnexion</a>
        </nav>
    </header>

    <main id="main">
    <div class="cont">
        <h2>Articles</h2>
        <p>Ajoute un article ici</p>
        <form action="/controller/articleController.php?type=add" method="post">
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
<footer id="footer">
    <div>
        <span>&#copy YannouLR</span>
    </div>
</footer>

</html>