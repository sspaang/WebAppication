
            <div class="container-fluid">
            <div class="mx-3">
                    <h3>Your classes</h3>
                </div> 
                <div class="row text-center py-2 my-2">
                    <?php 
                        $result = $database->enrolledClass($student_id);
                        if (!$result) {
                            $warning = "You haven't enrolled any classes yet";
                        } else {
                            while ($row = mysqli_fetch_assoc($result)) {
                                enrolledComponent($row['class_name'], $row['class_img'], '#');
                            }
                        }
                    ?>
                    <span class="mx-5">
                        <?php if(!$result) : ?>
                            <h4><?php echo $warning; ?></h4>
                        <?php endif ?>
                    </span>
                </div>
                <div class="mx-3">
                    <h3>More classes</h3>
                </div>
                <div class="row text-center py-2 my-2 mb-5">
                    <?php 
                        $result = $database->notEnrolledClass($student_id);
                        if (!$result) {
                            $warning = "You have already enrolled all classes.";
                        } else {
                            while ($row = mysqli_fetch_assoc($result)) {
                                Component('home.php',$row['class_name'], $row['class_price'], $row['class_img'], $row['class_id']);
                            }
                        }
                    ?>
                    <span class="mx-5">
                        <?php if(!$result) : ?>
                            <h4><?php echo $warning; ?></h4>
                        <?php endif ?> 
                    </span> 
                </div>
            </div>
        </div>
    </div>