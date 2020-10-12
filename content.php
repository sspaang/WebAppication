<!-- page content -->
        
            <div class="container-fluid">
                <div class="mx-3">
                    <h3>Lesson</h3>
                </div> 
                <div class="row text-center py-2 my-2">
                    <?php 
                        $result = $database->getData('class');
                        while ($row = mysqli_fetch_assoc($result)) {
                            component('index.php',$row['class_name'], $row['class_price'], $row['class_img'],$row['class_id']);
                        }
                    ?> 
                </div>
                <div class="mx-3">
                    <!-- Other Catagory Title Here -->
                </div>
                <!-- Other Catagory Here -->
            </div>
        </div>
    </div>
