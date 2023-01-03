<?php
require_once 'db.php';

class Questions extends Database
{
    public function getQuestions()
    {
        try {
            $sql = "SELECT `id`, `correct`, `comment` FROM `answer`";
            $a_stmt = $this->connection()->prepare($sql);

            $sql = "SELECT `question-id`, `id`, `content` FROM `options`";
            $o_stmt = $this->connection()->prepare($sql);

            $sql = "SELECT * FROM `questions`";
            $stmt = $this->connection()->prepare($sql);

            if ($stmt->execute()) {

                $obj = new stdClass;
                $obj->title = "AWS - Quiz";
                $obj->description = "AWS Certified Cloud Practitioner (CLF-C01) Sample Exam Questions";
                // $obj = (object)$stmt->fetch();
                $questions_array = [];
                while ($question = $stmt->fetch()) {
                    $Q = (object)$question;
                    $options_array = [];
                    $answers_array = [];
                    $o_stmt->execute();
                    $a_stmt->execute();
                    while ($option = $o_stmt->fetch()) {
                        if ($option['question-id'] == $question['id']) {
                            $options_array[] = (object)$option;
                        }
                    }
                    while ($answer = $a_stmt->fetch()) {
                        if ($answer['id'] == $question['id']) {
                            $Q->answer = (object)$answer;
                        }
                    }
                    $Q->options = $options_array;
                    $questions_array[] = $Q;
                }
                $obj->questions = $questions_array;
                return json_encode($obj, JSON_PRETTY_PRINT);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "ERROR: Could not prepare/execute query: $sql. " . $e->getMessage();
            return false;
        }
    }
}
