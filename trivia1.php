<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $answer = strtolower(trim($_POST["answer"]));

    if ($answer === strtolower($questions["first_memory"]["answer"])) {
        $_SESSION["stage"] = 2;
        header("Location: trivia2.php");
        exit;
    } else {
        $hint = $questions["first_memory"]["hint"];
    }
}

include "includes/header.php";
?>

<section class="card">
    <div class="progress">Step 2 of 7</div>

    <h1>First Memory</h1>
    <p><?php echo $questions["first_memory"]["question"]; ?></p>

    <form method="POST">
        <input type="text" name="answer" placeholder="Type your answer..." required>
        <button class="btn" type="submit">Unlock Next Page</button>
    </form>

    <?php if (!empty($hint)): ?>
        <p class="hint">Sweet hint: <?php echo $hint; ?></p>
    <?php endif; ?>
</section>

<?php include "includes/footer.php"; ?>