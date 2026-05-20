<?php
    include 'conecta.php';
    function consulta($pdo) { 
    $sql = "SELECT * FROM tb_camiseta"; 
    $stmt = $pdo->query($sql);
    echo "<table>";
    echo "<thead>
            <tr>
                <th>ID</th>
                <th>Cor</th>
                <th>Tamanho</th>
            </tr>
          </thead>";
    echo "<tbody>";
    
    while ($row = $stmt->fetch()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['cor']) . "</td>";
        echo "<td>" . htmlspecialchars($row['tamanho']) . "</td>";
        echo "</tr>";
    }
    
    echo "</tbody>";
    echo "</table>";
}
?>
