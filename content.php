<!-- page content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button> 
                </div>
            </nav>
            <div class="container-fluid">
                <div class="mx-3">
                    <h3>Lesson</h3>
                </div> 
                <div class="row text-center py-2">
                    <?php 
                        $result = $database->getData('class');
                        while ($row = mysqli_fetch_assoc($result)) {
                            component($row['class_name'], $row['class_price'], $row['class_img']);
                        }
                    ?> 
                </div> 
            </div>
        </div>
    </div>