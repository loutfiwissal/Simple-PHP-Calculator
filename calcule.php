<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #f0f0f0;
        }
        fieldset {
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        legend {
            font-weight: bold;
            font-size: 1.2em;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="number"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: inset 1px 1px 3px rgba(0, 0, 0, 0.1);
        }
        label {
            margin-right: 10px;
        }
        .operations {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }
        .operations input {
            margin-right: 10px;
        }
        #button {
            background-color: greenyellow;
            width: 100px;
            padding: 10px;
            border: none;
            border-radius: 25px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            font-weight: bold;
        }
        #button:hover {
            background-color: limegreen;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <fieldset>
            <legend>Calculatrice</legend> 
            <label for="nb1">NB-1 :</label>
            <input type="number" id="nb1" name="nb1" required><br>
            <label for="nb2">NB-2 :</label>
            <input type="number" id="nb2" name="nb2" required><br>
            <div class="operations">
                <input type="radio" id="+" name="op" value="+" required>
                <label for="+"><b>+</b></label>
                <input type="radio" id="-" name="op" value="-">
                <label for="-"><b>-</b></label>
                <input type="radio" id="*" name="op" value="*">
                <label for="*"><b>*</b></label>
            </div>
            <input type="submit" value=" = " id="button">
        </fieldset>
    </form>
    <?php
    if (isset($_GET["nb1"]) && isset($_GET["nb2"]) && isset($_GET["op"])) {
        $nb1 =  $_GET["nb1"];
        $nb2 =  $_GET["nb2"];
        $operation = $_GET['op'];
        $result = "";
        if ($operation == "+") {
            $result = $nb1 + $nb2;
        } elseif ($operation == "-") {
            $result = $nb1 - $nb2;
        } elseif ($operation == "*") {
            $result = $nb1 * $nb2;
        }
        echo "<p class='result'>Resultat: $result</p>";
    }
    ?>
</body>
</html>
