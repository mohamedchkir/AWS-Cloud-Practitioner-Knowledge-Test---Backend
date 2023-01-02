<?php
require_once 'Questions.php';

header("Content-Type:application/json");

try {
    $question = new Questions();

    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        echo $question->getQuestion();
    } else {
        echo $question->getAllQuestions();
    }
} catch (Exception $e) {
    die("ERROR: " . $e->getMessage());
}
