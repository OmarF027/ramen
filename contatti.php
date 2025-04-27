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
        /* CORREZIONI NAVBAR FISSA */
        header {
            position: fixed !important;
            top: 0 !important;
            width: 100% !important;
            z-index: 1000 !important;
            background: #ffffff !important; /* Sostituisci con il colore del tuo tema */
            box-shadow: 0 2px 10px rgba(0,0,0,0.1) !important;
        }

        body {
            padding-top: 50px !important; /* Ridotto per avvicinare la navbar */
        }

        /* ANIMAZIONI E STILI CONTENUTO */
        @keyframes titleAppear {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .contact-section {
            margin-top: 10px !important; /* Ridotto per avvicinare la sezione al top */
            padding: 40px 0;
        }

        h2.section-title {
            margin: 50px 0 30px 0 !important;
            animation: titleAppear 1s forwards 0.2s;
        }

        .contact-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<section class="contact-section">
    <h2 class="section-title">Contattaci</h2>

    <?php if (isset($_GET['msg'])): ?>
        <div class="alert">
            <?php echo htmlspecialchars($_GET['msg']); ?>
        </div>
    <?php endif; ?>

    <div class="contact-container">
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
<<<<<<< HEAD
=======

>>>>>>> df48e8f565e9864c351d7040514ecab427c105bb
