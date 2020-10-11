
            <div class="container-fluid">
            <div class="mx-3">
                    <h3>Your classes</h3>
                </div> 
                <div class="row text-center py-2 my-2">
                    <?php 
                        $result = $database->enrolledClass($student_id);
                        while ($row = mysqli_fetch_assoc($result)) {
                            enrolledComponent($row['class_name'], $row['class_img']);
                        }
                    ?> 
                </div>
                <div class="mx-3">
                    <h3>More classes</h3>
                </div>
                <div class="row text-center py-2 my-2 mb-5">
                    <?php 
                        $result = $database->notEnrolledClass($student_id);
                        while ($row = mysqli_fetch_assoc($result)) {
                            Component($row['class_name'], $row['class_price'], $row['class_img']);
                        }
                    ?> 
                </div>
            </div>
        </div>
    </div>