<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">
</head>

<body>

    <?php
    include ('header.php');
    include ('connection.php');
    ?>

    <div class="formulieren">

        <div class="formulieradmin">
            <h1>Producten</h1>
            <?php

            $sql = "SELECT * FROM products";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll();


            foreach ($results as $key => $value) {

                foreach ($value as $key1 => $value2) {
                    if ($key1 == 'name') {
                        echo '<h1 class="pruductenadmin"> Product naam: ' . $value2 . '</h1>';
                    } elseif ($key1 == 'id') {
                        echo '<h1 class="pruductenadmin"> Product id: ' . $value2 . '</h1>';
                    } elseif ($key1 == 'description') {
                        echo '<h1 class="pruductenadmin"> Product Beschrijving: ' . $value2 . '</h1>';
                    }

                }


            }

            ?>
        </div>


        <div class="formulieradmin">

            <h1>Voeg een product toe!</h1>
            <form action="php/addproduct.php" method="POST">
                <input type="text" name="name" placeholder="productnaam">
                <input type="text" name="description" placeholder="omschrijving">
                <input type="text" name="price" placeholder="prijs">
                <input type="text" name="img" placeholder="Plaats van afbeelding.">
                <input type="submit" value="Plaatsen">
            </form>


        </div>



        <div class="formulieradmin">
            <h1>Verwijder een product</h1>
            <form class="formulieradmin" action="php/removeproduct.php" method="POST">
                <input type="text" name="id" placeholder="Product id">
                <input type="submit" value="Verwijderen">
            </form>

        </div>

        <div class="formulieradmin">
            <h1>Verander Beschrijving van een product</h1>
            <form class="formulieradmin" action="php/updateomschrijving.php" method="POST">
                <input type="text" name="id" placeholder="Product id">
                <input type="text" name="newdisc" placeholder="Nieuwe omschrijving">
                <input type="submit" value="Update">
            </form>
        </div>


        <div class="formulieradmin">
            <h1>Resarveringen</h1>
            <h1>Verwijder een resarvering</h1>
            <form class="formulieradmin" action="php/removeresarvering.php" method="POST">
                <input type="text" name="id" placeholder="Resarverings id">
                <input type="submit" value="Verwijderen">
            </form>
            <?php

            $sql = "SELECT * FROM resarveringen";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll();


            foreach ($results as $key => $value) {

                foreach ($value as $key1 => $value2) {
                    if ($key1 == 'naam') {
                        echo '<h1 class="pruductenadmin"> naam: ' . $value2 . '</h1>';
                    } elseif ($key1 == 'datum') {
                        echo '<h1 class="pruductenadmin"> datum: ' . $value2 . '</h1>';
                    } elseif ($key1 == 'tijd') {
                        echo '<h1 class="pruductenadmin"> tijd: ' . $value2 . '</h1>';
                    } elseif ($key1 == 'extra') {
                        echo '<h1 class="pruductenadmin"> Extra: ' . $value2 . '</h1>';
                    } elseif ($key1 == 'id') {
                        echo '<h1 class="pruductenadmin"> id: ' . $value2 . '</h1>';
                    }

                }



            }
            ?>
        </div>

        <div>
        <h1>Contact</h1>
            <h1>Verwijder een Contact ding</h1>
            <form class="formulieradmin" action="php/removecontact.php" method="POST">
                <input type="text" name="id" placeholder="Resarverings id">
                <input type="submit" value="Verwijderen">
            </form>
            <?php

            $sql = "SELECT * FROM contact";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll();


            foreach ($results as $key => $value) {

                foreach ($value as $key1 => $value2) {
                    if ($key1 == 'naam') {
                        echo '<h1 class="pruductenadmin"> naam: ' . $value2 . '</h1>';
                    } elseif ($key1 == 'email') {
                        echo '<h1 class="pruductenadmin"> email: ' . $value2 . '</h1>';
                    } elseif ($key1 == 'tel') {
                        echo '<h1 class="pruductenadmin"> tel: ' . $value2 . '</h1>';
                    } elseif ($key1 == 'info') {
                        echo '<h1 class="pruductenadmin"> info: ' . $value2 . '</h1>';
                    } elseif ($key1 == 'id') {
                        echo '<h1 class="pruductenadmin"> id: ' . $value2 . '</h1>';
                    }

                }



            }
            ?>
        </div>

    </div>



    <?php include ('footer.php') ?>
</body>

</html>