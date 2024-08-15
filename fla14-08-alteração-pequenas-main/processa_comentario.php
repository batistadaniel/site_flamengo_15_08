<?php
session_start();
include_once 'conexao.php';

// Filtra e valida os dados do formulário
$comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);
$email = $_SESSION['login'];

// Verifica se o email está cadastrado na tabela 'dados'
$verifica_email = "SELECT id FROM dados WHERE Email = '$email'";
$result_email = mysqli_query($conexao, $verifica_email);

// Se o email não está cadastrado, mostra mensagem de erro
if (mysqli_num_rows($result_email) == 0) {
    $_SESSION['msg'] = "<p class='msg'>Email não cadastrado.</p>";
    header('location: comentarios.php?pagina=1');
} else {
    // Pega o id do usuário associado ao email
    $row = mysqli_fetch_assoc($result_email);
    $dados_id = $row['id'];

    // Insere o comentário na tabela 'comentários'
    $criar_comentarios = "INSERT INTO comentarios (dados_id,comentario, email, created) VALUES ('$dados_id', '$comentario', '$email', now())";
    $comentario_criado = mysqli_query($conexao, $criar_comentarios);

    if ($comentario_criado) {
        //echo "Comentário adicionado com sucesso.";
        header('Location: comentarios.php?pagina=1');
        exit();
    } else {
        die("Erro ao adicionar o comentário: " . mysqli_error($conexao));
    }
}


// Excluir comentarios



