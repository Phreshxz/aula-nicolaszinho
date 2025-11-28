<?php
include("conexao.php");

$titulo = isset($_POST['titulo']) ? trim($_POST['titulo']) : '';
$autor = isset($_POST['autor']) ? trim($_POST['autor']) : '';
$ano = isset($_POST['ano']) ? trim($_POST['ano']) : '';
$categoria = isset($_POST['cate']) ? trim($_POST['cate']) : '';
$quantidade = isset($_POST['quant']) ? trim($_POST['quant']) : '';

$mensagem = "";
$tipo = "";

// 🚨 Validação extra: impedir campos vazios ou só espaços
if ($titulo === '' || $autor === '' || $ano === '' || $categoria === '' || $quantidade === '') {
    $mensagem = "❌ Preencha todos os campos corretamente (não pode ser só espaços).";
    $tipo = "error";
} else {
    // Verifica se já existe livro com mesmo título
    $sql_check = "SELECT * FROM livros WHERE titulo = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $titulo);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    if ($result->num_rows > 0) {
        $mensagem = "❌ Este Livro já está cadastrado!";
        $tipo = "error";
    } else {
        $sql = "INSERT INTO livros (titulo, autor, ano, categoria, quantidade) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $titulo, $autor, $ano, $categoria, $quantidade);

        if ($stmt->execute()) {
            $mensagem = "✅ Cadastro realizado com sucesso!";
            $tipo = "success";
        } else {
            $mensagem = "❌ Erro ao cadastrar: " . $conn->error;
            $tipo = "error";
        }
    }
}
?>

<!-- HTML permanece igual -->


<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #eef1ff;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}

.message-box {
    background: white;
    padding: 40px 30px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    width: 360px;
    animation: fadeIn 0.6s ease;
}

.success { color: #81C784; }
.error { color: #E57373; }

a {
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    background: #4b5eff;
    color: white;
    padding: 10px 20px;
    border-radius: 6px;
    transition: 0.3s;
}

button {
    margin-top: 20px;
    width: 100%;
   background-color: #2C73D2;
    color: #666666;
    border: none;
    padding: 10px;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
}
a:hover { background: #3846e0; }

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
</head>
<body>
<div class="message-box">
    <h2 class="<?php echo $tipo; ?>"><?php echo htmlspecialchars($mensagem); ?></h2>

    <?php if ($tipo === "success"): ?>
        <a href="st.php"><button>Ir para biblioteca</button></a>
    <?php else: ?>
        <a href="index.html"><button>Voltar para cadastro</button></a>
    <?php endif; ?>
</div>
</body>
</html>
