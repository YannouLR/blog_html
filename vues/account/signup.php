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
            <h2>Sign Up</h2>
            <p>Inscrivez-vous ici</p>
            <form action="/controller/AccountController.php" method="post">
                <input type="text" id="pseudo" name="pseudo" class="pseudo" pattern="[a-Z_0-9]{4,8}" placeholder="@UserName*" required><br>
                <input type="email" id="email" name="email" placeholder="@Email*" required><br>
                <input type="password" id="password" name="password" placeholder="Password*" required><br>
                <input type="password" id="comfirm_password" name="comfirm_password" placeholder="Confirmer_Password*" required><br>
                <select name="user_type" id="user_type">
                    <optgroup label="Statut:"></optgroup>
                    <option value="admin">Admin</option>
                    <option value="eleve">Elève</option>
                </select><br>
                <div class="accept">
                    <label for="accepted">En cochant cette case, j'accepte que mes données soient exploitées par ....</label>
                    <input type="checkbox" name="accepted" id="accepted" required>
                </div>
                <input type="submit" value="Valider" class="submit">

            </form>
            <div class="btn">
                <a href="#"></a><button> Mot de passe oublié</button></a>
                <a href="/vues/account/login.html"></a><button> Login</button></a>
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