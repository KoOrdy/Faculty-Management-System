<?php
include 'user.php';
class Student extends users
{
    private $db;
    private $sql;



    public function __construct()
    {
        include_once 'DatabaseClass.php';
        $this->db = new database();
    }
    public function register($name, $age, $email, $pass, $phone, $level)
    {
        $ch = "INSERT INTO user(name,username,password,type) Values('$name','$email','$pass','student')";
        $this->db->insert($ch);
        $test = "SELECT id FROM user WHERE username='$email' ";
        $id = $this->db->select($test);

        if (!empty($id)) {
            $this->sql = "INSERT INTO students(StudentID,Name,Age,Email,Password,PhoneNumber,LevelId)
                VALUES ($id[id],'$name','$age','$email','$pass','$phone','$level')";
            $this->db->insert($this->sql);
            return true;



        }
    }

    public function allCourses()
    {
        $this->sql = "SELECT course.* , subject.subjectName From course 
            inner join subject 
            on course.SubjectID = subject.subID ";
        $row = $this->db->display($this->sql);
        return $row;
    }


    public function RegisterCourse($student_id, $name, $course_id)
    {
        $this->sql = "INSERT INTO enrollments (StudentID,Name,CourseID)
            VALUES ('$student_id','$name','$course_id')";
        $this->db->insert($this->sql);
        return true;
    }

    public function listCourse($id)
    {
        $this->sql = "SELECT * from enrollments where StudentId='$id'";
        $row = $this->db->display($this->sql);
        return $row;
    }

    public function count()
    {
        $num = $this->db->check($this->sql);
        return $num;
    }
    public function viewQuestions($cid)
    {
        $this->sql = "select QustionText from questions where courseid= '$cid'";
        $row = $this->db->display($this->sql);
        return $row;
    }
    public function viewtranscript($stdid)
    {
        $this->sql = "SELECT transcript.CourseID , Grade from transcript where StudentID = '$stdid'";
        $row = $this->db->display($this->sql);
        return $row;

    }
}

?>