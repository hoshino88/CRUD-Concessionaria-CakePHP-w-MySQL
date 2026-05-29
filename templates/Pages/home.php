<?php $this->disableAutoLayout(); // Desativa o menu lateral padrão do Cake ?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>Sistema de Frota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { background: #f4f7f6; display: flex; align-items: center; height: 100vh; }
        .card-menu { transition: transform 0.2s; cursor: pointer; text-decoration: none; color: inherit; }
        .card-menu:hover { transform: translateY(-5px); }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1 class="mb-5">Gerenciador de Frota</h1>
        <div class="row justify-content-center">
            
            <a href="<?= $this->Url->build(['controller' => 'Marcas', 'action' => 'index']) ?>" class="col-md-4 card-menu">
                <div class="card shadow-sm p-4">
                    <h3>Marcas</h3>
                    <p class="text-muted">Gerenciar fabricantes</p>
                </div>
            </a>

            <div class="col-md-1"></div> <a href="<?= $this->Url->build(['controller' => 'Carros', 'action' => 'index']) ?>" class="col-md-4 card-menu">
                <div class="card shadow-sm p-4">
                    <h3>Carros</h3>
                    <p class="text-muted">Gerenciar veículos</p>
                </div>
            </a>

        </div>
    </div>
</body>
</html>