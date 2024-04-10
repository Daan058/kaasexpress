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
            <div class="form-header">Resarveren</div>
            <form action="php/resarveren.php" method="POST">
                <div class="form-group">
                    <input type="text" name="naam" placeholder="Voor hier uw volledige naam in." required>
                </div>
                <div class="form-group">
                    <input type="date" name="datum" placeholder="Voer hier uw gewenste datum in." required>
                </div>
                <div class="form-group">
                    <input type="time" name="tijd" placeholder="Voer hier uw gewenste tijd in." required>
                </div>
                <div class="form-group">
                    <input type="text" name="extra"
                        placeholder="Voer hier extra informatie in dat belangerijk voor ons is om te weten.">
                </div>
                <div class="form-group">
                    <button type="submit" class="register-btn">Resarveren</button>
                </div>
            </form>
        </div>
    </section>


    <?php include ('footer.php') ?>


</body>

</html>