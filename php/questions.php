<?php
require_once 'db.php';

class Questions extends Database
{

    public function getAllQuestions()
    {
        try {
            $sql = "SELECT * FROM `questions`";
            $stmt = $this->connection()->prepare($sql);

            if ($stmt->execute()) {
                return json_encode($stmt->fetchAll(), JSON_PRETTY_PRINT);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "ERROR: Could not prepare/execute query: $sql. " . $e->getMessage();
            return false;
        }
    }

    public function getQuestion()
    {
        try {
            $sql = "SELECT `right-option-id` FROM `answers` WHERE `question-id` = $this->id";
            $a_stmt = $this->connection()->prepare($sql);

            $sql = "SELECT `id`, `option` FROM `options` WHERE `question-id` = $this->id";
            $o_stmt = $this->connection()->prepare($sql);

            $sql = "SELECT * FROM `questions` WHERE id = $this->id";
            $stmt = $this->connection()->prepare($sql);

            if ($stmt->execute() && $a_stmt->execute() && $o_stmt->execute()) {
                $obj = (object)$stmt->fetch();

                $options_array = [];
                $answers_array = [];

                while ($option = $o_stmt->fetch()) {
                    $options_array[] = (object)$option;
                }
                while ($answer = $a_stmt->fetch()) {
                    $answers_array[] = $answer['right-option-id'];
                }

                $obj->options = $options_array;
                $obj->answers = $answers_array;
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
