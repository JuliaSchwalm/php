

<?php
require_once 'conexao.php';
try {

    // Consulta para obter todos os dados da tabela
    $query = $conexao->query("SELECT * FROM cadastro_aluno");

    // Exibir os resultados
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        echo "Matrícula: " . $row['matricula'] . "<br>";
        echo "Nome: " . $row['nome'] . "<br>";
        echo "Curso: " . $row['curso'] . "<br>";
        echo "Cidade: " . $row['cidade'] . "<br>";
        echo "Idade: " . $row['idade'] . "<br>";
        echo "<br>";
    }
} catch (PDOException $e) {
    echo "Erro ao consultar dados: " . $e->getMessage();
}
?>