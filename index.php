<?php
require_once "config.php";
$_SESSION["stage"] = 1;
include "includes/header.php";
?>

<section class="card hero">
    <h1>Happy 5-Year Anniversary, My Love</h1>
    <p>
        Welcome to a little journey made just for you.
        Each page unlocks a memory, a smile, and a piece of my heart.
    </p>

    <div class="countdown-box">
        <p>Our special day:</p>
        <h2>14 January 2027</h2>
        <div id="countdown"></div>
    </div>

    <a href="trivia1.php" class="btn">Start the Journey</a>
</section>

<?php include "includes/footer.php"; ?>