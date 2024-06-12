<!DOCTYPE html>
<html lang="en">
<style>
    table, td {
        border: 1px solid black;
        width : 300px;
    }
    th {
        border: 1px solid black; 
        background: red;
        height : 50px;
        font-size : 22px;
    }
</style>
<body>
<?php
$data = array("model 1"=>"Samsung Galaxy S22", 
            "model 2"=>"Samsung Galaxy S22+", 
            "model 3"=>"Samsung Galaxy A03", 
            "model 4"=>"Samsung Galaxy Xcover 5"); 
?>    
<table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>
    <?php
    foreach ($data as $key => $value) {
        echo "<tr><td>$value</td></tr>";
    }
    ?>
</table>
</body>
</html>
