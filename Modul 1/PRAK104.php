<!DOCTYPE html>
<html lang="en">
<style>
    table, td {
        border: 1px solid black;
    }
    th {
        border: 1px solid black; 
        text-align: left;
    }
</style>
<body>
<?php
$data = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
?>    
<table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>
    <?php
    foreach ($data as $value) {
        echo "<tr><td>$value</td></tr>";
    }
    ?>
</table>
</body>
</html>
