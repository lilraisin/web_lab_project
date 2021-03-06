<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Kalkulator rabatowy: </title>
    <meta name="description" content="Największy katalog gitarowy na świecie. Mayones, Yamaha, Epiphone, Ibanez i wiele wiele innych." />
    <meta name="keywords" content="gitara,gitary,yamaha,katalog,mayones" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


<?php include('styledefinitions.php'); ?>
 <script src = "kalkulator.js"></script>

</head>

<body>

    <div id="container">
        <div id="header">
            <table class="t1">
                <tr>
                    <td class="d1">
                        <a href="index.html"><img height="100" width="100" src="./img/logo.png" alt="Powrót do strony głównej" /></a>
                    </td>
                    <td class="d2">
                        <h1>Zapisz się do naszego Newsletter'a!</h1>
                        <td class="d3">
                        </td>
                </tr>
            </table>
        </div>
        <div id="main-row">
            <div id="mr-left" class="xxx">
                <h2>Kategorie</h2>
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
            </div>
            <div id="mr-center" class="xxx">


                <p id="output"></p>
				<br>
				<img src="./img/och.png" id="animation" alt="kalkulator">
				<br>
				<p>Linki na tej stronie:</p>
				<div id = "links"></div>
				<br>
				<p>Ilość obrazów na tej stronie:</p>
				<div id = "images"></div>
				
            <br>
			<a name="html" style="color:#000000;">Przykładowy anchor!</a><br>
			<p>Ilość anchorów na tej stronie:</p>
				<div id = "anchors"></div>
			
<p><b>Zmień motyw kolorystyczny strony!:</b></p>			
<?php
// SWITCHER LINK
while(list($key, $val) = each($listaStylow)){

echo "<a href='styleswitcher.php?SETSTYLE=".$key."'>".$val["text"]."<br /></a>";
}
?>


				
            
			</div>
            <div id="mr-right" class="xxx">

            </div>
        </div>
        <footer>
            &copy; Copyright. All right reserved
            <br />
            <a href="mailto:kataloggitarowy@katag.com">Skontaktuj się z nami mailowo</a>
        </footer>

    </div>

</body>

</html>