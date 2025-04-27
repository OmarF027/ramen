<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti | GOL D. RAMEN</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/media-queries.css">

    <style>
        /* Animazione per la parola "Contattaci" */
        @keyframes titleAppear {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Ridurre il margine superiore del titolo */
        h2.section-title {
            margin-top: 20px; /* Ridotto il margine superiore */
            opacity: 1;
            transform: translateY(0);
            animation: titleAppear 1s forwards 0.2s;
        }

        /* Abbassare la sezione di contatto con un margine negativo */
        .contact-section {
            margin-top: -40px; /* Aggiunto un margine negativo per avvicinare il modulo */
        }

        /* Rimuovere il padding e margine superiore dal body */
        body {
            padding-top: 0;
            margin-top: 0;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<section class="contact-section">
    <h2 class="section-title">Contattaci</h2>

    <!-- Mostra il messaggio di conferma o errore se presente -->
    <?php if (isset($_GET['msg'])): ?>
        <div class="alert">
            <?php echo htmlspecialchars($_GET['msg']); ?>
        </div>
    <?php endif; ?>

    <div class="contact-container">
        <!-- Il form è qui, invia i dati a scrivi_file.php per l'elaborazione -->
        <form action="scrivi_file.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-Mail</label>
                <input type="email" class="form-control" name="mail" id="email" required>
            </div>
            <div class="mb-4">
                <label for="messaggio" class="form-label">Messaggio</label>
                <textarea class="form-control" name="messaggio" id="messaggio" rows="5" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="order-button">Invia</button>
                <button type="reset" class="order-button">Cancella</button>
            </div>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>

