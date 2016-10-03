<?php

$questions = array("q1" => "How many NCAA basketball championships has the University of Kansas won?",
                "q2" => "Which team did the Kansas City Chiefs defeat in their only Super Bowl victory?",
                "q3" => "Which team did the Kansas City Royals lose to in the 2014 World Series?",
                "q4" => "Which NBA team used to be located in Kansas City?",
                "q5" => "Which team did the Kansas City Chiefs defeat in their last playoff victory?");

$answers = array("q1" => "Three",
    "q2" => "Minnesota Vikings",
    "q3" => "San Francisco Giants",
    "q4" => "Sacramento Kings",
    "q5" => "Houston Texans");

$correctAnswers = 0;

foreach($_POST as $key => $value) {
    if($answers[$key] == $_POST[$key]) {
        $correctAnswers++;
    }
}

$percentCorrect = ($correctAnswers/count($answers))*100;

$index = 1;
foreach($questions as $key => $value) {
    echo "<strong>Question ".$index.": ".$questions[$key]."</strong><br/>";
    echo "You answered: ".$_POST[$key]."<br/>";
    echo "Correct answer: ".$answers[$key]."<br/><br/>";
    $index++;
}


echo "You got <strong>".$correctAnswers."</strong> question(s) correct.<br/>";
echo "Your score is <strong>".$percentCorrect."</strong> percent.<br/>";

?>


