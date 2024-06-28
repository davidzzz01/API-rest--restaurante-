<?php 
include('conexao.php');





$sql = "SELECT * FROM pedidos";
$result = mysqli_query($conn, $sql);


if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $clientes = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $clientes[] = $row;
        }
        echo json_encode($clientes, JSON_PRETTY_PRINT);
    } else {
        echo json_encode(["message" => "Nenhum resultado encontrado."]);
    }
} else {
    echo json_encode(["error" => "Erro na consulta SQL."]);
}


mysqli_close($conn);
?>