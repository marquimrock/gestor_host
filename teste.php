<?php
require 'banco/conexao.php';
require 'lib/funcs.php';

$conn = conecta();


$sql = "SELECT * FROM tb_tipo_licenca";
$result = $conn->query($sql);
?>
<select>
    <?php
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<option >" . $row['sistema'] . " - Cod" .$row['codigo']. "</option>";
        }
        ?>
    </select>

    <?php
} else {
    echo "0 results";
}
$conn->close();
?>