<?php
session_start();

require("../templates/head.php");
require("../templates/header.php");
?>

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
<?php
require("../templates/footer.php");

?>