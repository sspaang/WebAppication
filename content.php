<!-- page content -->
        
            <div class="container-fluid">
                <div class="mx-3">
                    <h3>Lesson</h3>
                </div> 
                <div class="row text-center py-2 my-2">
                    <?php 
                        $result = $database->getData('class');
                        while ($row = mysqli_fetch_assoc($result)) {
                            component($row['class_name'], $row['class_price'], $row['class_img']);
                        }
                    ?> 
                </div>
                <div class="mx-3">
                    <h3>New Course</h3>
                </div>
                <!-- Other Catagory Here -->
            </div>
        </div>
    </div>
