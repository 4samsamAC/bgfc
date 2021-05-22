<?php
$type = $_GET['type'];
$tests = array(
    $_GET['num']
);

foreach ($tests as $element) {
    if (is_numeric($element)) {
        $num = $_GET['num'];
    } else {
        $num = 0;
    }
}
if ($type == "help") {
    if ($num == 0) {
        echo "<!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <link rel=\"stylesheet\" href=\"/style.css\">
            <title>version</title>
        </head>
        <body>
            <div id=\"cadre\">
                <h1>help</h1>
                <h3>back grounds change :</h3>
                <p><a href=\"./?type=help&num=1\">0. Le fond d'écran ne charge pas / le fond d'écran est buger</a></p>
                <br>
                <button onclick=\"contact()\">Un problème nés pas citer ?</button>
            </div>
        <script>
        function contact() {
          alert(\"Vous pouvez me contacter sur :\\ndiscord : 4samsamAC#1572\\nmail : contact@ddc.xnh.fr\");
        }
        </script>
        </body>
        </html>
        ";
    } if ($num == 1) {
        echo "
        <link rel=\"stylesheet\" href=\"/style.css\">
        <div id=\"cadre\">
            <h3>
                Attendez 1 min tout en rafraichissent régulièrement vautre fond d'écran (clique droit rafraichir ou f5)
                <br><br>
                Ci sella ne fonctionne pas au démarrage du programme tapes `aabbgdgdBA` `entres` `1`
            </h3>
        </div>
        ";
    }
}
?>