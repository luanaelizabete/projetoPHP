<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    echo "<h2>tabuadaaa do $numero:</h2>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
     echo "<tr>";
     echo "<td>$numero x $i</td>";
     echo "<td>=</td>";
     echo "<td>" . ($numero * $i) . "</td>";
     echo "</tr>";
    }
    echo "</table>";
}

?>
