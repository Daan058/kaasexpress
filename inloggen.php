<html>

<head>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php
    include ('header.php');
    include ('connection.php');
    ?>

    <section class="form-panel">
        <div class="form-container">
            <div class="form-header">Registreren</div>
            <form action="php/register.php"  method="POST">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Gebruikersnaam" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Wachtwoord" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="register-btn">Registreren</button>
                </div>
            </form>
        </div>
        <div class="form-container">
            <div class="form-header">Inloggen</div>
            <form action="php/inlog.php"  method="POST">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Gebruikersnaam" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Wachtwoord" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="login-btn">Inloggen</button>
                </div>
            </form>
        </div>
    </section>


    <?php include ('footer.php') ?>


</body>

</html>