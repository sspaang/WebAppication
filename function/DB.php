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
}