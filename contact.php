<html>

<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    include ('header.php');
    include ('connection.php');
    ?>

    <div class="test">
        <section class="form-panel">
            <div class="form-container">
                <div class="form-header">Contacteer ons</div>
                <form action="php/contactform.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="naam" placeholder="Voor hier uw volledige naam in." required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Voer hier e-mail in." required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="tel" placeholder="Voer hier uw telefoon nummer in," required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="info"
                            placeholder="Voer hier informatie in dat belangerijk voor ons is om te weten.">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="register-btn">Contacteer</button>
                    </div>
                </form>
            </div>
        </section>
    </div>




    <?php include ('footer.php') ?>


</body>

</html>