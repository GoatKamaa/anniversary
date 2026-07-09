<?php
require_once "config.php";

if (!isset($_SESSION["stage"]) || $_SESSION["stage"] < 3) {
    header("Location: index.php");
    exit;
}

$_SESSION["stage"] = 4;
include "includes/header.php";
?>

<section class="card">
    <div class="progress">Step 4 of 7</div>

    <h1>Our Memories</h1>
    <p>Every photo tells a story, but ours tells my favorite one.</p>

    <!-- EDIT HERE: Replace these images in assets/images/ -->
    <div class="photo-grid">
        <img src="assets/images/photo1.jpg" alt="Memory photo 1">
        <img src="assets/images/photo2.jpg" alt="Memory photo 2">
        <img src="assets/images/photo3.jpg" alt="Memory photo 3">
    </div>

    <a href="love-note.php" class="btn">Open Love Note</a>
</section>

<?php include "includes/footer.php"; ?>