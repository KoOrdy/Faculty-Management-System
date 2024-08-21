<?php
include 'user.php';
class professor extends users
{
    private $LastName;
    private $Degree;
    private $Gender;
    private $NationalID;
    private $DateOfBirth;
    private $Department;
    private $db;
    function __construct()
    {
        include_once 'DatabaseClass.php';
        $this->db = new database;
    }

    function addQuestion($courseId, $questionText)
    {
        try {

            $checkProfessorCourseSql = "SELECT * FROM course WHERE CourseID = '$courseId' LIMIT 1";
            $isAssociated = $this->db->select($checkProfessorCourseSql);

            if (!$isAssociated) {
                echo "Error: You are not associated with the selected course.";
            } else {
                $existingQuestionSql = "SELECT QuestionID FROM questions WHERE CourseID = '$courseId' LIMIT 1";
                $existingQuestion = $this->db->select($existingQuestionSql);

                if ($existingQuestion) {
                    echo "Error: You can only add one question per course.";
                } else {
                    $insertQuestionSql = "INSERT INTO questions (CourseID, QuestionText) VALUES ('$courseId', '$questionText')";
                    $insertResult = $this->db->insert($insertQuestionSql);

                    if ($insertResult) {
                        echo "Question added successfully.";
                    } else {
                        echo "Error: Unable to add question.";
                    }
                }
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }


    }

    function getLastName()
    {

        return $this->LastName;
    }
    function getDegree()
    {

        return $this->Degree;
    }
    function getGender()
    {

        return $this->Gender;
    }
    function getNationalID()
    {

        return $this->NationalID;
    }
    function getDateOfBirth()
    {

        return $this->DateOfBirth;
    }
    function getDepartment()
    {

        return $this->Department;
    }
    function setLastName($LastName)
    {
        $this->LastName = $LastName;
    }
    function setDegree($Degree)
    {
        $this->Degree = $Degree;
    }
    function setGender($Gender)
    {
        $this->Gender = $Gender;
    }
    function setNationalID($NationalID)
    {
        $this->NationalID = $NationalID;
    }
    function setLDateOfBirth($LDateOfBirth)
    {
        $this->LDateOfBirth = $LDateOfBirth;
    }
    function setDepartment($Department)
    {
        $this->Department = $Department;
    }









}