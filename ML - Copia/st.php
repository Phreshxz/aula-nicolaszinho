<?php
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Biblioteca</title>
  <link rel="stylesheet" href="st.css" />
</head>
<body>
  <header class="header">
    <div class="header-title">
      <h1>Biblioteca</h1>
      <p>Bem-vindo(a)</p>
    </div>
    <div class="header-buttons">
      <a href="index.html"><button id="btn-sair">Sair</button></a>
    </div>
  </header>

  <main>
    <section class="livros-cadastrados">
      <h2>📚 Livros Registrados</h2>

      <!-- Formulário de filtro -->
      <form method="GET" class="filtro-categoria">
        <label for="categoria">Filtrar por categoria:</label>
        <select name="categoria" id="categoria" onchange="this.form.submit()">
          <option value="Todas" <?php if (!isset($_GET['categoria']) || $_GET['categoria'] === "Todas") echo "selected"; ?>>Todas</option>
          <option value="Romance" <?php if (isset($_GET['categoria']) && $_GET['categoria'] === "Romance") echo "selected"; ?>>Romance</option>
          <option value="Fantasia" <?php if (isset($_GET['categoria']) && $_GET['categoria'] === "Fantasia") echo "selected"; ?>>Fantasia</option>
          <option value="Didático" <?php if (isset($_GET['categoria']) && $_GET['categoria'] === "Didático") echo "selected"; ?>>Didático</option>
          <option value="Suspense" <?php if (isset($_GET['categoria']) && $_GET['categoria'] === "Suspense") echo "selected"; ?>>Suspense</option>
          <option value="Aventura" <?php if (isset($_GET['categoria']) && $_GET['categoria'] === "Aventura") echo "selected"; ?>>Aventura</option>
          <option value="Biografia" <?php if (isset($_GET['categoria']) && $_GET['categoria'] === "Biografia") echo "selected"; ?>>Biografia</option>
          <option value="Infantil" <?php if (isset($_GET['categoria']) && $_GET['categoria'] === "Infantil") echo "selected"; ?>>Infantil</option>
          <option value="Drama" <?php if (isset($_GET['categoria']) && $_GET['categoria'] === "Drama") echo "selected"; ?>>Drama</option>
          <option value="História" <?php if (isset($_GET['categoria']) && $_GET['categoria'] === "História") echo "selected"; ?>>História</option>
        </select>
      </form>

      <!-- Listagem dos livros -->
      <div class="livros-lista">
        <?php
        $categoriaSelecionada = isset($_GET['categoria']) ? $_GET['categoria'] : '';

        if ($categoriaSelecionada && $categoriaSelecionada !== "Todas") {
            $sql = "SELECT titulo, autor, ano, categoria, quantidade FROM livros WHERE categoria = ? ORDER BY titulo ASC";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $categoriaSelecionada);
            $stmt->execute();
            $result = $stmt->get_result();
        } else {
            $sql = "SELECT titulo, autor, ano, categoria, quantidade FROM livros ORDER BY titulo ASC";
            $result = $conn->query($sql);
        }

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='livro-card'>";
                echo "<h3>" . htmlspecialchars($row['titulo']) . "</h3>";
                echo "<p><span>Autor:</span> " . htmlspecialchars($row['autor']) . "</p>";
                echo "<p><span>Ano:</span> " . htmlspecialchars($row['ano']) . "</p>";
                echo "<p><span>Categoria:</span> " . htmlspecialchars($row['categoria']) . "</p>";
                echo "<p><span>Quantidade disponível:</span> " . htmlspecialchars($row['quantidade']) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p class='sem-livros'>📭 Nenhum livro encontrado nessa categoria.</p>";
        }
        ?>
      </div>
    </section>
  </main>

  <script src="st.js"></script>
</body>
</html>
