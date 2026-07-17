<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1>Hurtownia z najlepszymi cenami</h1>
    </header>
    <main>
        <section id="left">
            <h2>Nasze ceny</h2>
            <table>
                <!-- skrypt 1 -->
            </table>
        </section>
        <section id="mid">
            <h2>Koszt zakupów</h2>
            <form action="" method="post">
                <label for="artykul">wybierz artykuł</label>
                <select name="artykul" id="artykul">
                    <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                    <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                    <option value="Cyrkiel">Cyrkiel</option>
                    <option value="Linijka">Linijka</option>
                </select>
                <br>
                <label for="ilosc">liczba sztuk</label>
                <input type="number" name="ilosc" id="ilosc">
                <br>
                <button type="submit">OBLICZ</button>
            </form>
            <!-- skrypt 2 -->
        </section>
        <section id="right">
            <h2>Kontakt</h2>
            <img src="zakupy.png" alt="hurtownia">
            <p>e-mail: <a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a></p>
        </section>
    </main>
    <footer>
        <h4>Witrynę wykonał: 00000000</h4>
    </footer>
</body>

</html>