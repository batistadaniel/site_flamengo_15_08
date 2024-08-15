<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['login'])) {
    $_SESSION['alert_message'] = 'Você precisa estar logado para acessar esta página!';
    header('Location: index.php');
    exit();
}

include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="src/css/comentarios.css">
    <title>Nação - Comentarios</title>
</head>

<body>
    <!-- <p class='msg'>Por favor, preencha tudo</p> -->
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <header>
        <div class="logo-mobile">
            <a href="index.php"><img src="src/img/logo-crf.png" alt="Logo CRF" class="logo-mobile"></a>
        </div>
        <div class="titulo">
            <a href="index.php">
                <h1>Feed do Urubu</h1>
            </a>
        </div>
        <div class="icone-perfil">
            <?php
                
                /* Adicionado 12/08/2024 */

                // Verifica se a sessão está iniciada
                if (isset($_SESSION['login'])) {
                    
                    // Consulta para buscar o nome baseado no email da sessão
                    $email = $_SESSION['login'];
                    $query = "SELECT nome FROM dados WHERE email = ?";
                    $stmt = mysqli_prepare($conexao, $query);
                    mysqli_stmt_bind_param($stmt, 's', $email);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $nome);
                    mysqli_stmt_fetch($stmt);
                    mysqli_stmt_close($stmt);

                    // Exibe o nome se encontrado
                    if (!empty($nome)) {
                        echo "<h3 class='nome-comentario'>$nome</h3>";
                    } else {
                        echo "<h3 class='nome-comentario'>Nome não encontrado</h3>";
                    }
                }
            ?> <!-- Adicionado 12/08/2024 -->
            <i class="bi bi-person-circle"></i>
        </div>
    </header>

    <main>
        <section class="sessao-comentario">
            <form action="processa_comentario.php" method="post">
                <div class="box-comentario">
                    <textarea type="text" name="comentario" id="" placeholder="Deixe seu comentario...">

                    </textarea>
                    <!-- <input type="text" name="" id="" placeholder="Deixe seu comentario..."> -->
                </div>

                <!-- <div class="email-comentario">
                    <input type="email" name="emailcoment" id="" placeholder="Seu email ">
                </div> -->

                <button class="btn-comentario" type="submit">Comentar</button>
            </form>

            <?php
            if (isset($_GET['delete'])) {
                $id = (int)$_GET['delete'];
                if ($id > 0) {

                    $delete = "DELETE FROM comentarios WHERE id = $id";
                    if (mysqli_query($conexao, $delete) === true) {
                        header("Location: comentarios.php?pagina=1");
                        exit();
                    }
                }
            }
            //Receber o número da página
            $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
            $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
    
            //Quantidade de itens por página
            $qnt_result_pg = 5;
    
            //Calcula o inicio da visualização de um registro 
            $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

            // Consulta para selecionar os usuários com limite para paginação
            $select_user = "SELECT c.id , d.nome, c.comentario, c.created, c.email  FROM dados d LEFT JOIN comentarios c ON d.id = c.dados_id ORDER BY c.created DESC LIMIT  $inicio, $qnt_result_pg";
            $selected_user = mysqli_query($conexao, $select_user);
            // Loop para exibir os usuários da página atual
            while ($row_user = mysqli_fetch_assoc($selected_user)) {
                if (!empty($row_user['comentario'])) {
                    $comentario_id = $row_user['id'];
                    $nome = $row_user['nome'];
                    $data = date('d/m/Y H:i', strtotime($row_user['created']));

                    echo "<div id='comentario-$comentario_id' class='comentario-container'>";
                        echo "<div class='comentario' id='comentario-text-$comentario_id'>";
                            echo "<div class='top-comentario'>";
                                echo "<h3 class='nome-comentario'>$nome</h3>";
                                echo "<p class='data-comentario'>$data</p>";
                            echo "</div>";
                            echo "<p class='texto-comentario'>".$row_user['comentario']."</p>";

                    //Conta o  numero total de registros e atribui o total dentro da variavel
                    $result_pg = "SELECT COUNT(id) as num_result FROM comentarios";
                    $resultado_pg = mysqli_query($conexao, $result_pg);
                    $row_pg = mysqli_fetch_assoc($resultado_pg);
    
                    //Calcula a quantidade de página
                    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);


                    if ($_SESSION['login'] == $row_user['email']) {

                        // /* Adicionado 12/08/2024 */
                        // echo "<div class='acoes-comentarios'>";
                                    
                        //     echo '<div id="likes" class="likes">'; /* Adicionado 12/08/2024 */
                        //         echo '<div class="like">';
                        //             echo '<img src="https://img.icons8.com/?size=100&id=24816&format=png&color=000000" alt="Like" id="like"">';
                        //             echo '<h3 id="likeDisplay">0</h3>';
                        //         echo '</div>';
                                    
                        //         echo '<div class="dislike">';
                        //             echo '<img src="https://img.icons8.com/?size=100&id=24816&format=png&color=000000" alt="Dislike" id="dislike">';
                        //             echo '<h3 id="dislikeDisplay">0</h3>';
                        //         echo '</div>';
                        //     echo '</div>'; /* Adicionado 12/08/2024 */

                            echo "<div class='btn-acao'>";
                                echo "<a href='#' class='btn-editar' onclick='editarComentario($comentario_id)'>";
                                    echo "<i class='bi bi-pen'></i>";
                                echo "</a>";
                                echo "<a href='?delete=$comentario_id' class='btn-excluir'>";
                                    echo "<i class='bi bi-trash-fill'></i>";
                                echo "</a>";
                            echo "</div>";
                                
                        echo "</div>"; /* Adicionado 12/08/2024 */
                            }

                        echo "</div>";

                        // Formulário de edição (inicialmente escondido)
                        echo "<div id='edit-form-$comentario_id' class='edit-form' style='display: none;'>";
                            echo "<form action='update_comentario.php' method='POST'>";
                                echo "<input type='hidden' name='id' value='$comentario_id'>";
                                echo "<textarea class='comentario' name='comentario' required>".$row_user['comentario']."</textarea>";
                                echo "<div class='btn-acao-edit'>";
                                    echo "<button class='btn-editar2' type='submit'>Salvar</button>";
                                    echo "<button class='btn-editar2' type='button' onclick='cancelarEdicao($comentario_id)'>Cancelar</button>";
                                echo "</div>";
                            echo "</form>";
                        echo "</div>";

                        echo "<hr>";
                    echo "</div>";

                }
            }
            echo "<div class='paginação'>";
                //Limita os links antes e depois
                $max_links = 1;

                //Esse link leva a primeira pagina
                echo "<a class='primeira_pag' href='comentarios.php?pagina=1'>Primeira</a>";

                //Exibe os links das paginas anteriores dependendo do $max_links
                for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
                if ($pag_ant >= 1) {
                    echo "<a class='pagina_ant' href='comentarios.php?pagina=$pag_ant'>$pag_ant</a>";
                    }
                }

                //Exibe a página atual
                echo "<p class='pagina_atual'>$pagina_atual</p>";

                //Exibe os links das paginas posteriores dependendo do $max_links
                for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
                    if ($pag_dep <= $quantidade_pg) {
                        echo "<a class='pag_dep' href='comentarios.php?pagina=$pag_dep'>$pag_dep</a>";
                    }
                }
                //Esse link leva a ultima pagina
                echo "<a class='ultima_pag' href='comentarios.php?pagina=$quantidade_pg'>Última</a>";
            echo "</div>";
            ?>
        </section>
    </main>

    <script src="src/js/script.js" defer></script>
</body>

</html>