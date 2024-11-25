<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDigital</title>
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <img src="assets/logo-site.jpeg" class="rounded-circle mx-3" border="1" width="40vw" height="40vw">
            <a class="navbar-brand" href="#">UDigital</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="php/login.php">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="php/login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="py-5 bg-secondary text-center flex-grow-1">
        <div class="container">
            <h1 class="display-4">Bem-vindo à UDigital</h1>
            <p class="lead">Encontre os melhores aparelhos eletrônicos com preços incríveis!</p>
            <a href="php/login.php" class="btn btn-primary btn-lg mt-3">Ver Produtos</a>
        </div>
    </header>

    <!-- Conteúdo Principal -->
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4 text-center">Sobre Nós</h2>
            <p class="text-center">
                Na UDigital, acreditamos que a tecnologia transforma vidas. Somos uma loja especializada em aparelhos
                eletrônicos, oferecendo produtos de alta qualidade que atendem às necessidades do dia a dia e às
                inovações do futuro.

                Nosso compromisso é trazer até você as últimas tendências em smartphones, laptops, acessórios e muito
                mais, sempre com preços competitivos e atendimento diferenciado. Valorizamos a confiança dos nossos
                clientes e buscamos proporcionar uma experiência de compra prática, segura e personalizada.

                Seja para trabalhar, estudar ou se divertir, estamos aqui para conectar você ao que há de melhor no
                mundo digital.
            </p>
            <div class="d-flex justify-content-center mt-4">
                <a href="#" class="btn btn-outline-light mx-2">Saiba Mais</a>
                <a href="#" class="btn btn-outline-light mx-2">Contato</a>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-primary text-center py-4 mt-auto">
        <div class="container">
            <p class="mb-0">© 2024 Eletrônicos. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>