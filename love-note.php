<?php
require_once "config.php";

if (!isset($_SESSION["stage"]) || $_SESSION["stage"] < 4) {
    header("Location: index.php");
    exit;
}

$_SESSION["stage"] = 5;
include "includes/header.php";
?>

<section class="card">
    <div class="progress">Step 5 of 7</div>

    <h1>A Little Love Note</h1>
    <p class="love-note">
        <?php echo nl2br($loveNote); ?>
    </p>

    <a href="final-question.php" class="btn">One Last Question</a>
</section>

<?php include "includes/footer.php"; ?>