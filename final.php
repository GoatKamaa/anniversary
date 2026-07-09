<?php
require_once "config.php";

if (!isset($_SESSION["stage"]) || $_SESSION["stage"] < 6) {
    header("Location: index.php");
    exit;
}

include "includes/header.php";
?>

<section class="card final-card">
    <div class="progress">Step 7 of 7</div>

    <h1>Happy 5-Year Anniversary</h1>
    <h2>14 January 2027</h2>

    <p class="final-message">
        <?php echo nl2br($finalMessage); ?>
    </p>

    <div class="big-heart">♥</div>
</section>

<?php include "includes/footer.php"; ?>