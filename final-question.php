<?php
require_once "config.php";

if (!isset($_SESSION["stage"]) || $_SESSION["stage"] < 5) {
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $answer = strtolower(trim($_POST["answer"]));

    if ($answer === strtolower($questions["final_unlock"]["answer"])) {
        $_SESSION["stage"] = 6;
        header("Location: final.php");
        exit;
    } else {
        $hint = $questions["final_unlock"]["hint"];
    }
}

include "includes/header.php";
?>

<section class="card">
    <div class="progress">Step 6 of 7</div>

    <h1>Final Unlock</h1>
    <p><?php echo $questions["final_unlock"]["question"]; ?></p>

    <form method="POST">
        <input type="text" name="answer" placeholder="Type your answer..." required>
        <button class="btn" type="submit">Reveal Final Message</button>
    </form>

    <?php if (!empty($hint)): ?>
        <p class="hint">Sweet hint: <?php echo $hint; ?></p>
    <?php endif; ?>
</section>

<?php include "includes/footer.php"; ?>