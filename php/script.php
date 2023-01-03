<?php
require_once 'Questions.php';

header("Content-Type:application/json");

try {
    $question = new Questions();
    echo $question->getQuestions();
} catch (Exception $e) {
    die("ERROR: " . $e->getMessage());
}
