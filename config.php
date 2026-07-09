<?php
session_start();

/*
EDIT HERE:
Change questions, answers, hints, love notes, images, and final message.
*/

$anniversaryDate = "2027-01-14T00:00:00";

$questions = [
    "first_memory" => [
        "question" => "Where did our beautiful journey begin?",
        "answer" => "School",
        "hint" => "Think about the place where my heart first felt at home."
    ],
    "favourite_moment" => [
        "question" => "What is one moment we always smile about?",
        "answer" => "first date",
        "hint" => "It is one of those memories that still makes us laugh or feel warm."
    ],
    "final_unlock" => [
        "question" => "What date marks our 5-year anniversary?",
        "answer" => "14 january 2027",
        "hint" => "It is the special date this whole surprise was made for."
    ]
];

$loveNote = "Every page you open is a little piece of my heart. Thank you for being my peace, my joy, and my favorite person.";

$finalMessage = "
My love,

Happy 5-year anniversary.

Five years with you has been one of the greatest blessings of my life. 
Thank you for your love, your patience, your kindness, your laughter, and every memory we have created together.

We have grown, learned, smiled, faced life, and built something beautiful. 
You have made my world softer, brighter, and happier in ways I can never fully explain.

I am grateful for every day with you, every lesson, every hug, every conversation, and every quiet moment that reminded me how lucky I am to have you.

Here is to us, to our journey, and to many more years of love, growth, happiness, and beautiful memories.

I love you deeply.
";
?>