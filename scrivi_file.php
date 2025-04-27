<?php
// Variabili di errore e conferma
$errore = "";
$successo = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanificazione dei dati per evitare vulnerabilità XSS
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = htmlspecialchars(trim($_POST['mail']));
    $messaggio = htmlspecialchars(trim($_POST['messaggio']));

    // Validazione dei dati
    if (empty($nome) || empty($email) || empty($messaggio)) {
        $errore = "Tutti i campi sono obbligatori!";
    } else {
        // Scrivere i dati nel file solo se tutto è valido
        $file = fopen("messaggi.txt", "a");
        if ($file) {
            $data = date('Y-m-d H:i:s');
            fwrite($file, "Nome: $nome\nEmail: $email\nMessaggio: $messaggio\nData: $data\n\n");
            fclose($file);
            $successo = "Il tuo messaggio è stato inviato con successo!";
        } else {
            $errore = "Errore nel salvataggio del messaggio. Riprova più tardi.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti | 21 OVEN</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/media-queries.css">
</head>
<body>
    
<?php include 'header.php'; ?>

    <!-- Sezione di messaggio di conferma invio -->
    <section class="contact-section">
    <h2 class="section-title" style="margin-top: 75px;">Grazie per averci contattato!</h2>

        <!-- Visualizza errore se presente -->
        <?php if ($errore): ?>
            <div class="alert alert-danger"><?php echo $errore; ?></div>
        <?php endif; ?>

        <!-- Visualizza conferma se presente -->
        <?php if ($successo): ?>
            <div class="alert alert-success"><?php echo $successo; ?></div>
        <?php endif; ?>
    </section>

    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
</body>
</html>
