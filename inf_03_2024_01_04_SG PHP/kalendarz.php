<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>

<body>
    <header>
        <section id="first">
            <img src="logo1.png" alt="lipiec">
        </section>
        <section id="second">
            <h1>TERMINARZ</h1>
            <p>najbliższe zadania:</p>
            <?php
                $con = mysqli_connect('localhost', 'root', '','terminarz');
                
                $q = SELECT DISTINCT wpis FROM zadania WHERE wpis IS NOT NULL AND wpis!='' AND dataZadania BETWEEN '2020-07-01' AND '2020-07-07';
                $r = mysqli_query($con, $q);

                while($w = mysqli_fetch_array($r)){
                    echo "$w[0];";
                }
            ?>
        </section>
    </header>
    <main>
        <!-- skrypt2 -->
    </main>
    <footer>
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: </p>
    </footer>
</body>

</html>