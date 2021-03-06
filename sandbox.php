<?php
session_start();

$prev = "sandbox.php";

if (!isset($_SESSION['login'])) {
    header("location: login.php?previous=$prev");
}
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
        id = [container]
        <div id="header">
            id = [header]
            <table class="t1">
                <tr>
                    <td class="d1">
                        <a href="index.html">class = [logo]<img class="logo" height="100" width="100" src="./img/logo.png" alt="Powrót do strony głównej" /></a>
                    </td>
                    <td class="d2">

                        <h1 id="main-header" class="center">[main-header] SANDBOX STRONY GŁÓWNEJ</h1>

                    <td class="d3">
                        <?php
                        echo '<p style="color: white;font-size: 40px;">' . $_SESSION['login'] . '</p>';
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <div id="main-row">
            <div id="mr-left" class="xxx">
                id = [mr-left]
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
                <br>
                <a href="history.html">Krótka historia gitary...</a>
                <br>
                <br>
                <a href="kalkulator.html">Kalkulator rabatów - sprawdź ile zapłacisz za gitarę po obniżce cen.</a>
            </div>


            <div id="mr-center" class="xxx">
                id = [mr-center]
                <section id="main-section">
                    id = [main-section]
                    <article class="xxx">
                        class = [xxx] - article
                        <h1 id="index0">id = [index0] Rodzaje gitar</h1>
                        <h2 id="anchor0">id = [anchor0] Gitary można podzielić na dwie duże kategorie: akustyczne i elektryczne.
                        </h2>

                        <h3>Gitary akustyczne</h3>
                        <br />

                        <div id="anchor1"></div>
                        <h4>Gitara barokowa</h4>
                        <p>
                            Gitara barokowa używana była w XVII wieku w dobie renesansu i baroku. Była poprzedniczką nowoczesnej gitary klasycznej. Była jednak od niej znacznie mniejsza, bardziej delikatna oraz grała ciszej. Zazwyczaj gitary barokowe miały pięć chórów strojonych
                            najczęściej A-D-G-H-e (przy czym najcieńsza struna była pojedyncza), co odpowiada strojowi pięciu cieńszych strun współczesnej gitary klasycznej. Niekiedy miała tylko cztery struny.
                        </p>
                        <br />

                        <div id="anchor2"></div>
                        <h4>Gitara klasyczna</h4>
                        <p>
                            Znana współcześnie gitara klasyczna wywodzi się od gitary barokowej, która w 2 poł. XVIII otrzymała szósty chór. Najstarszą zachowaną sześciochórową gitarą jest instrument wykonany przez Francisco Sanguino w 1759, zaś pierwszą publikację na ten instrument
                            wydał Antonio Ballesteros pt. Obra para guitarra de seis órdenes w 1780. Taka gitara zyskiwała popularność od lat 60. Następnie z chórów rezygnowano na rzecz pojedynczych strun, w latach 80. lutnicy i gitarzyści włoscy i francuscy
                            już zdecydowanie preferowali pojedyncze struny. W ten sposób powstał instrument znany wtedy jako gitara hiszpańska (w odróżnieniu od gitary angielskiej), a współcześnie jako gitara romantyczna lub gitara wczesnoromantyczna
                            (ang. early romantic guitar).
                        </p>
                        <br />


                        <div id="anchor3"></div>
                        <h4>Gitara akustyczna</h4>
                        <p>
                            Gitara akustyczna wywodzi się od gitary klasycznej. Głównym powodem powstania tego typu gitary było użycie metalowych strun. Z tego powodu konstrukcja gitary musiała być mocniejsza aby wytrzymać siłę naciągu strun. Struny metalowe wydają mocniejszy, metaliczny
                            dźwięk. Pudło rezonansowe jest większe aby jeszcze bardziej wzmocnić dynamikę dźwięku.
                        </p>
                        <br />

                        <div id="anchor4"></div>
                        <h3>Gitary akustyczne z wbudowanym mikrofonem lub przetwornikiem</h3>
                        <br />

                        <div id="anchor5"></div>
                        <h3>Gitary elektryczne</h3>

                        <div id="anchor6"></div>
                        <h4>Gitara elektryczna</h4>

                        <div id="anchor7"></div>
                        <h4>Gitara basowa</h4>

                        <div id="anchor8"></div>
                        <h4>Gitara elektroklasyczna</h4>

                        <div id="anchor9"></div>
                        <h4>Cigar Box Guitar</h4>

                        <div id="anchor10"></div>
                        <h3>Inne gitary:</h3>

                        <div id="anchor11"></div>
                        <h4>basowa akustyczna</h4>
                        <p>
                            Określenie gitara basowa najczęściej jest używane w odniesieniu do elektrycznej wersji tego instrumentu.
                        </p>
                        <br />
                        <p id="anchor12">
                            Gitara wielogryfowa <br> Jest to szersza wersja gitary elektrycznej posiadająca więcej niż jeden gryf (najczęściej dwa).
                        </p>
                    </article>
                </section>

                <section id="news-section">
                    id = [news-section]
                    <section class="big-header">
                        <h1 id="index1" class="highlight">id = [index1] Nowinki w świecie gitar:</h1>
                    </section>
                    <br>
                    <article>
                        <details>
                            <summary style="font-family:'Franklin Gothic Medium'; font-size: 200%;display: inline;" id="index2">
                                Jackson połączył siły z uznanym gitarzystą Christianem Andreu z zespołu Gojira!
                            </summary>
                            <p>Jackson połączył siły z uznanym gitarzystą Christianem Andreu z zespołu Gojira, aby stworzyć charakterystyczną "sygnaturę", dzięki której masywne riffy brzmią jeszcze lepiej!
                            </p>
                            <p lang="en">"French metal act Gojira blends thrash and progressive elements to create a groove metal sound like no other. The quartet gracefully swings between quaking and quivering guitars, mind-bending percussion, chillingly elegant
                                melodies, and cosmic atmospherics. A band has always dealt in extremes, uncovering light in darkness and finding beauty in heaviness, and with each release, they seek to further expand the sonic palette."</p>
                            <p>cytat z oficjalnej strony <strong>Jackson</strong></p>
                            <p>Jak mówi gitarzysta zespołu Gojira <mark>" I believe, with Jackson we can get through
                                    another great adventure once again"</mark></p>
                            <br>
                            <aside>
                                <p> Nawiązując do słów artysty, czyżby szykował się kolejny album francuskiego zespołu? Dajcie znać w komentarzach co myślicie! A już niedługo kolejna dawka informacji ze świata muzycznego.
                                </p>
                            </aside>
                        </details>
                        <br>

                        <a id="imgurs" href="https://www.jacksonguitars.com/artists/christian-andreu-bio" title="Zobacz na stronie!">
                            <img class="imgur1" width="350" height="350" src="img/jackson-gojira.jpg" alt="ups! nie wczytano zdjęcia" />
                            <img class="imgur2" width="350" height="350" src="img/guitar.png" alt="ups! nie wczytano zdjęcia" />
                        </a>

                    </article>
                </section>
                <div id="ending"></div>
            </div>


            <div id="mr-right" class="xxx">
                <div id="st">
                    <form onsubmit="return false" action="#">
                        <p><input type="text" id="gbi" value="index1">
                            <input type="button" value="Złap element" id="selectButton"></p>
                        <p><input type="text" id="ins">
                            <input type="button" value="Wstaw przed" id="insertButton"></p>
                        <p><input type="text" id="append">
                            <input type="button" value="Dołącz w" id="appendButton"></p>
                        <p><input type="text" id="replace">
                            <input type="button" value="Podmień" id="replaceButton"></p>
                        <p><input type="button" value="Usuń" id="removeButton"></p>
                        <p><input type="text" id="color" placeholder="ang. nazwa koloru"><input type="button" value="zmień tło" id="backgroundColorButton"></p>
                        <p><input type="text" id="textColor" placeholder="ang. nazwa koloru"><input type="button" value="zmień tekst" id="textColorButton"></p>
                        <select id="fontlist">
                            <option value="Times New Roman">Times new roman</option>
                            <option value="Arial">Arial</option>
                            <option value="Andale">Andale</option>
                            <option value="Courier">Courier</option>
                        </select>
                    </form>

                    <form method="POST" action=''>
                        <input type="submit" name="reset-session">
                    </form>
                    <?php
                    if (isset($_POST['reset-session'])) {
                        session_unset();

                        session_destroy();

                        header("Refresh:0");
                    }
                    ?>

                </div>
            </div>
        </div>
        <footer>
            <table class="t1">
                <tr>
                    <td class="d1">
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
    <script src="sandbox.js"></script>
</body>

</html>