<?php
session_start();

$nome      = trim($_POST['nome'] ?? '');
$matricula = trim($_POST['matricula'] ?? '');
$email     = trim($_POST['email_institucional'] ?? '');

// Só verifica se está vazio
if ($nome !== '' && $matricula !== '' && $email !== '') {
    $_SESSION['dados'] = [
        'nome'      => $nome,
        'matricula' => $matricula,
        'email'     => $email
    ];
    header("Location: sucesso.php");
    exit;
} else {
    header("Location: falha.php");
    exit;
}