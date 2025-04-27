<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordina | GOL D. RAMEN</title>
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
    /* Animazione automatica all'apertura della pagina */
    .menu-title-animation {
        animation: slideIn 1.5s ease forwards;
    }

    /* Keyframe per l'animazione */
    @keyframes slideIn {
        0% {
            opacity: 0;
            transform: translateX(-100%);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .grid {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        margin-top: 40px;
    }

    .item {
        width: 48%; /* Ridurre la larghezza per un miglior allineamento */
    }

    .delivery-text {
        padding: 20px;
        background-color: #f8f8f8;
        border-radius: 8px;
        border: 1px solid #ddd; /* Definisce il bordo delle card */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    h3 {
        font-size: 1.3rem;
        margin-bottom: 15px; /* Spazio tra titolo e testo */
    }

    p {
        color: #555;
        margin-bottom: 20px; /* Spazio tra descrizione e bottone */
    }

    .order-button {
        display: inline-block;
        text-align: center;
        background-color: #000000; /* Bottone nero */
        color: #fff;
        padding: 10px 20px;
        border-radius: 4px;
        text-transform: uppercase;
        font-weight: 600;
        text-decoration: none; 
        transition: background-color 0.3s ease;
        margin-top: auto; 
    }

    .order-button:hover {
        background-color: #333333; /* Bottone scuro al passaggio del mouse */
    }

    /* Definizione per migliorare il layout delle box */
    .grid-container {
        margin-top: 20px;
    }

    .item .delivery-text {
        height: 100%;
    }

    /* Media queries per dispositivi piccoli */
    @media (max-width: 768px) {
        .grid {
            flex-direction: column;
            align-items: center;
        }

        .item {
            width: 80%; /* Rendi le box più larghe su dispositivi mobili */
        }
    }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<section class="order-section">
    <div class="container">
        <div class="order-content">
            <h1 class="menu-title-animation" style="color:#BB0620; margin-top: 5px;">Il nostro ramen caldo, a casa tua. Ordina ora!</h1>
            
            <div class="grid">
                <!-- Consegna a domicilio -->
                <div class="item">
                    <div class="delivery-text">
                        <h3>Consegna a domicilio</h3>
                        <p>Il tuo ramen pronto in 30-45 minuti, direttamente a casa tua!</p>
                        <a href="https://glovoapp.com" target="_blank" class="order-button">Ordina con Glovo</a>
                    </div>
                </div>

                <!-- Ritiro in pizzeria -->
                <div class="item">
                    <div class="delivery-text">
                        <h3>Prenota un tavolo</h3>
                        <p>Chiama il nostro numero fisso per prenotare un tavolo.</p>
                        <a href="tel:+390566234567" class="order-button">Chiama per prenotare</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
