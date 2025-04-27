<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menù | GOL D. RAMEN</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/body_menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/media-queries.css">
</head>

<body class="menu-page">
    <section class="sezione">
        <div class="container">
        <h2 style="margin-top: 90px; margin-bottom: 10px;">Il nostro Menù</h2>
        <h3 class="ramen-category" style="margin-top: 10px;">Ramen Classici</h3>
            <div class="grid">
                <!-- Shoyu Ramen -->
                <div class="item">
                    <h4>Shoyu Ramen</h4>
                    <p>Brodo di pollo chiaro aromatizzato con salsa di soia, noodles artigianali, uova marinata, cipollotto e nori</p>
                    <div>
                        <strong>€12.00</strong>
                    </div>
                </div>

                <!-- Miso Ramen -->
                <div class="item">
                    <h4>Miso Ramen</h4>
                    <p>Brodo ricco di maiale con pasta di miso, noodles spessi, maiale chashu, mais, burro e germogli di soia</p>
                    <div>
                        <strong>€13.50</strong>
                    </div>
                </div>

                <!-- Tonkotsu Ramen -->
                <div class="item">
                    <h4>Tonkotsu Ramen</h4>
                    <p>Brodo cremoso di ossa di maiale bollite per 18 ore, noodles sottili, maiale brasato, funghi shiitake e aglio croccante</p>
                    <div>
                        <strong>€14.00</strong>
                    </div>
                </div>
            </div>

            <h3 class="ramen-category">Ramen Speciali</h3>
            <div class="grid">
                <!-- Ramen Inferno -->
                <div class="item">
                    <h4>Ramen Inferno</h4>
                    <p>Brodo piccante con sesamo, pancetta croccante, uova marinata, bok choy e olio speziato</p>
                    <div>
                        <strong>€15.00</strong>
                    </div>
                </div>

                <!-- Ramen Vegetariano -->
                <div class="item">
                    <h4>Ramen Vegetariano</h4>
                    <p>Brodo di verdure e shiitake, tofu fritto dorato, funghi misti saltati, spinaci freschi e uova di quaglia delicate</p>
                    <div>
                        <strong>€13.00</strong>
                    </div>
                </div>

                <!-- Ramen Mare -->
                <div class="item">
                    <h4>Ramen Mare</h4>
                    <p>Brodo di pesce e alghe, noodles sottili, gamberi, vongole, calamari e salsa di ostriche</p>
                    <div>
                        <strong>€16.00</strong>
                    </div>
                </div>
            </div>

            <h3 class="ramen-category">Extra e Aggiunte</h3>
            <div class="grid">
                <!-- Extra Noodles -->
                <div class="item">
                    <h4>Extra Noodles</h4>
                    <p>Aggiunta di noodles freschi</p>
                    <div>
                        <strong>€3.00</strong>
                    </div>
                </div>

                <!-- Uova Ajitsuke -->
                <div class="item">
                    <h4>Uova Ajitsuke</h4>
                    <p>Uova marinate nella soia</p>
                    <div>
                        <strong>€2.50</strong>
                    </div>
                </div>

                <!-- Chashu Extra -->
                <div class="item">
                    <h4>Chashu Extra</h4>
                    <p>Fette aggiuntive di maiale brasato</p>
                    <div>
                        <strong>€4.00</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>