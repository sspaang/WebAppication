<?php 

class DB {  
    // get product from the database
    public function getData($tablename) {
        require('server.php');
        $sql = "SELECT * FROM $tablename";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            return $result;
        }
    }

    public function enrolledClass($student_id) {
        require('server.php');
        $sql = "SELECT * FROM class WHERE class.class_id IN 
                (SELECT class.class_id FROM enroll JOIN class 
                ON enroll.class_id = class.class_id
                AND id_student = $student_id) ORDER BY class.class_id ASC";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            return $result;
        }
    }

    public function notEnrolledClass($student_id) {
        require('server.php');
        $sql = "SELECT * FROM class WHERE class.class_id NOT IN 
        (SELECT class.class_id FROM enroll JOIN class 
        ON enroll.class_id = class.class_id
        AND id_student = $student_id) ORDER BY class.class_id ASC";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            return $result;
        }
    }
}