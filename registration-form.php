<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Katalog gitar</title>
    <meta name="description" content="Największy katalog gitarowy na świecie. Mayones, Yamaha, Epiphone, Ibanez i wiele wiele innch." />
    <meta name="keywords" content="gitara,gitary,yamaha,katalog,mayones" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="styles.css" type="text/css" />

</head>

<body>

    <div id="container">
        <div id="header">
            <table class="t1">
                <tr>
                    <td class="d1">
                        <a href="index.html"><img class="logo" height="100" width="100" src="./img/logo.png" alt="Powrót do strony głównej" /></a>
                    </td>
                    <td class="d2">
                        <?php

                        if (!isset($_SESSION['login'])) {
                            echo '<h1 class="center">Rejestracja</h1>';
                        } else {
                            echo '<h1 class="center">Edycja danych</h1>';
                        }
                        ?>
                    <td class="d3">
                    </td>
                </tr>
            </table>
        </div>
        <div id="main-row">
            <div id="mr-left" class="xxx">
                <h2>Kategorie</h2>
                <nav>
                    <ol>
                        <li><strong>Elektryczne </strong><br />
                            <ul>
                                <li><a href="e-mayones.html">Mayones</a></li>
                                <li><a href="e-ibanez.html">Ibanez</a></li>
                            </ul>
                        </li>
                        <li><strong>Basowe</strong><br />
                            <ul>
                                <li><a href="b-mayones.html">Mayones</a></li>
                                <li>Epiphone</li>
                                <li>Ibanez</li>
                            </ul>
                        </li>
                        <li><strong>Akustyczne</strong><br />
                            <ul>
                                <li>Ibanez</li>
                                <li>Yamaha</li>
                            </ul>
                        </li>
                        <li><strong>Klasyczne</strong><br />
                            <ul>
                                <li>Yamaha</li>
                            </ul>
                        </li>
                    </ol>
                </nav>
            </div>


            <div id="mr-center" class="xxx">
                <?php
                $zalogowany = False;

                $iserror = False;
                $bdateerror = False;
                $error = "";

                if (isset($_SESSION["login"])) {
                    $zalogowany = True;
                    $login = $_SESSION["login"];

                    $query = "SELECT * FROM users " .
                        "WHERE login = \"$login\"";

                    if (!($database = mysqli_connect("localhost", "root", "", "userList"))) {
                        die("<p>Could not connect to database</p>");
                    }

                    if (!($result = mysqli_query($database, $query))) {
                        print("<p>Could not execute query!</p>");
                        die(mysqli_error($database));
                    }

                    if (($row = mysqli_fetch_row($result)) != NULL) {
                        $email = $row[2];
                        $bdate = $row[3];
                        $haslo = $row[4];
                    } else {
                        $error = "Z jakiegoś powodu nie udało się pobrać wartości.";
                    }

                    mysqli_close($database);
                }
                if (isset($_POST["submit"])) {

                    $login = isset($_POST["login"]) ? $_POST["login"] : "";
                    $email = isset($_POST["email"]) ? $_POST["email"] : "";
                    $bdate = isset($_POST["bdate"]) ? $_POST["bdate"] : "";
                    $haslo = isset($_POST["haslo"]) ? $_POST["haslo"] : "";

                    if (!preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/", $bdate)) {
                        $bdateerror = True;
                        $iserror = true;
                    } // end if

                    if ($login == "") $iserror = True;

                    if ($email == "") $iserror = True;

                    if ($haslo == "") $iserror = True;

                    if (isset($_SESSION["login"])) {
                        $query = "UPDATE users " .
                            "SET login = \"" . $login . "\", " .
                            "email = \"" . $email . "\", " .
                            "bdate = \"" . $bdate . "\", " .
                            "haslo = \"" . $haslo . "\" " .
                            "WHERE login = \"" . $_SESSION["login"] . "\"";
                    } else {
                        $query = "INSERT INTO users " .
                            "( login, email, bdate, haslo ) " .
                            "VALUES ( '$login', '$email', '$bdate', '$haslo')";
                    }

                    if ($iserror) {
                        if ($bdateerror) $error = '<p style="color: red;">Data urodzenia musi być w formacie 0000-00-00 </p>';
                        else $error = '<p style="color: red;">Wszystkie pola muszą być wypełnione!</p>';
                    } else {
                        // Connect to MySQL
                        if (!($database = mysqli_connect("localhost", "root", "", "userList"))) {
                            die("<p>Could not connect to database</p>");
                        }

                        // execute query in database
                        if (!($result = mysqli_query($database, $query))) {
                            print("<p>Could not execute query!</p>");
                            die(mysqli_error($database));
                        }

                        mysqli_close($database);

                        $error = '<p style="color: green;"> Rejestracja przebiegła pomyślnie. </p>';
                        $_SESSION["login"] = $login;
                    }
                }
                ?>
                <form method="post" action="" autocomplete="off">
                    <table class="t1">
                        <tr>
                            <td class="d1">
                                <label>Login</label>
                            </td>
                            <td>
                                <?php
                                echo '<input name="login" type="text" size="33"' . ($zalogowany ? 'value="' . $login . '"' : '') . '  autofocus>';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="d1">
                                <label>Email</label>
                            </td>
                            <td>
                                <?php
                                echo '<input name="email" type="text" size="33"' . ($zalogowany ? 'value="' . $email . '"' : '') . '>';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="d1">
                                <label>Data urodzenia</label>
                            </td>
                            <td>
                                <?php
                                echo '<input name="bdate" type="text" size="33"' . ($zalogowany ? 'value="' . $bdate . '"' : '') . '>';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="d1">
                                <label>Hasło</label>
                            </td>
                            <td>
                                <?php
                                echo '<input name="haslo" type="text" size="33"' . ($zalogowany ? 'value="' . $haslo . '"' : '') . '>';
                                ?>
                            </td>
                        </tr>
                    </table>

                    <p>
                        <input type="submit" name="submit" value="Zarejestruj">
                        </input>
                    </p>
                    <span><?php echo $error; ?></span>
                </form>
            </div>


            <div id="mr-right" class="xxx">
                <a href="diagnostics.php"> Strona diagnostyczna</a>
            </div>
        </div>
        <footer>
            <table class="t1">
                <tr>
                    <td class="d1">
                        <a href="liczbowy-formularz.php">formularz obliczeniowy</a>
                    </td>
                    <td class="d2">
                        &copy; Copyright. All right reserved
                    <td rowspan="2" class="d3">
                        <p>Newsletter:</p>
                        <a href="newsletter.html"><img src="img/newsletter.png" height="30" width="30" alt="Newsletter" /></a>
                    </td>
                </tr>
                <tr>
                    <td class="d1">
                    </td>
                    <td class="d2">
                        <a href="mailto:kataloggitarowy@katag.com">Skontaktuj się z nami mailowo</a> lub wypełnij <a href="formularz.html">formularz</a>
                </tr>
            </table>
        </footer>

    </div>

</body>

</html>