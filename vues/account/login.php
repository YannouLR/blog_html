
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Le Blog des vieux" />
    <meta name="keywords" content="blog, vieux, discution, jeux, test" />
    <meta name="author" content="Yann Lenerand" />
    <title>Inscription - Blog</title>
    <link rel="stylesheet" href="/assets/style/main.css">
</head>

<body>
    <header>
        <a class="test" href="/index.php">
            <h1 id="title">
                Blog des vieux
            </h1>
        </a>
        <nav>
            <a href="/vues/articles/articles.php">Articles</a>
            <div class="subnav">
                <button class="subnavbtn"><a href="/vues/articles/categories.php">Catégories <i class="fa fa-caret-down"></i></a></button>
                <div class="subnav-content">
                    <a href="amelie.php">Amélie</a>
                    <a href="adeline.php">Adeline</a>
                </div>
            </div>
            <a href="/vues/articles/add.php">Ajouter un article</a>
            <a href="/vues/account/signup.php" id="signup">Inscription</a>
            <a href="/vues/account/login.php">Connexion</a>
            <a href="/vues/account/logout.php">Déconnexion</a>
        </nav>
    </header>

    <main id="main">
        <div class="cont">
            <h2>Log In</h2>
            <p>Connectez-vous ici</p>
            <form action="/controller/AccountController.php" method="post">
                <input type="email" id="email" name="email" placeholder="@Email*" required><br>
                <input type="password" id="password" name="password" placeholder="Password*" required><br>
                <input type="submit" value="Valider" class="submit">

            </form>
            <div class="btn">
                <a href="#"></a><button> Mot de passe oublié</button></a>
                <a href="/vues/account/login.html"></a><button> Sign Up</button></a>
            </div>
        </div>
    </main>
</body>
<footer id="footer">
    <div>
        <span>&#copy YannouLR</span>
    </div>
</footer>

</html>