<?php /* Capçalera comuna. Variable opcional: $titolPagina */ ?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($titolPagina ?? 'Cartellera') ?> · Cinemes Màgic Badalona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<header class="cartellera-header text-center py-4">
    <h1 class="mb-0">🎬 Cartellera</h1>
    <p class="mb-0 lead">Cinemes Màgic Badalona</p>
</header>
<main class="container py-4">
