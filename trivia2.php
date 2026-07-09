<?php
require_once "config.php";

if (!isset($_SESSION["stage"]) || $_SESSION["stage"] < 2) {
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $answer = strtolower(trim($_POST["answer"]));

    if ($answer === strtolower($questions["favourite_moment"]["answer"])) {
        $_SESSION["stage"] = 3;
        header("Location: photo.php");
        exit;
    } else {
        $hint = $questions["favourite_moment"]["hint"];
    }
}

include "includes/header.php";
?>

<section class="card">
    <div class="progress">Step 3 of 7</div>

    <h1>Favourite Moment</h1>
    <p><?php echo $questions["favourite_moment"]["question"]; ?></p>

    <form method="POST">
        <input type="text" name="answer" placeholder="Type your answer..." required>
        <button class="btn" type="submit">Continue</button>
    </form>

    <?php if (!empty($hint)): ?>
        <p class="hint">Sweet hint: <?php echo $hint; ?></p>
    <?php endif; ?>
</section>

<?php include "includes/footer.php"; ?>