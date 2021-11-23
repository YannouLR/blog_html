<?php
session_start();

require("../templates/head.php");
require("../templates/header.php");
?>
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
<?php
require("../templates/footer.php");

?>