<!DOCTYPE html>
<html>
<head>
    <title>Pencetak Karakter</title>
    <style>
        span {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="inputString" id="inputString" value="<?php echo isset($_POST['inputString']) ? htmlspecialchars($_POST['inputString']) : ''; ?>">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $inputString = htmlspecialchars($_POST['inputString']);
        $panjangString = strlen($inputString);
        echo "<br>";
        for ($i = 0; $i < $panjangString; $i++) {
            $char = $inputString[$i];
            echo strtoupper($char);
            for ($j = 0; $j < $panjangString - 1; $j++) {
                echo strtolower($char);
            }
        }
    }
    ?>
</body>
</html>
