<?php
    include('server.php'); 
    session_start();

    require_once('./function/DB.php');
    require('./function/component.php');

    $database = new DB();
    $student_id = $_SESSION['id'];

    if(isset($_POST['remove'])){
        if($_GET['action'] == 'remove'){
            foreach($_SESSION['cart'] as $key => $value){
                if($value['class_id'] == $_GET['classid']){
                    unset($_SESSION['cart'][$key]);
                    echo "<script>";
                    echo "alert(\" Course has been removed.\");"; 
                    echo "window.history.back()";
                    echo "</script>";
                }
            }
        }
    }

    $title = 'Cart';
    include 'header.php';
    include 'sidebar.php';
    include 'toggleMenu.php';
?>

            <div class="container-fluid">
                <div class="row px-5">
                    <div class="col-md-7">
                        <div class="shopping-cart">
                            <h5>My Cart</h5>
                            <hr>
                            <?php
                                $total = 0;
                                if(isset($_SESSION['cart'])){
                                    $classid = array_column($_SESSION['cart'], "class_id");

                                    $result = $database->getData('class');
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        foreach($classid as $id){
                                            if($row['class_id'] == $id){
                                                cartElement($row['class_img'], $row['class_name'], $row['class_price'], $row['class_id']);
                                                $total = $total + (int)$row['class_price'];
                                            }
                                        }
                                    }
                                } else {
                                    echo "<h5>Cart is Empty</h5>";
                                }

                            ?>
                        </div>
                    </div>
                    <div class="col-md-4 offser-md-1 border rounded mt-5 bg-white h-25 mx-5">

                        <div class="pt-1">
                            <h6>PRICE DETAILS</h6>
                            <hr>
                            <div class="row price-details">
                                <div class="col-md-6">
                                    <?php
                                    if(isset($_SESSION['cart'])){
                                        count($_SESSION['cart']);
                                        echo "<h6>Total $count course(s)</h6>";
                                    } else {
                                        echo "<h6>Total 0 course(s)</h6>";
                                    }
                                    ?>
                                    <h6>Fee</h6>
                                    <hr>
                                    <h6>Amont Payable</h6>
                                </div>
                                <div class="col-md-5">
                                    <h6>฿<?php echo $total; ?></h6>
                                    <h6 class="text-success">FREE</h6>
                                    <hr>
                                    <h6>฿<?php echo $total; ?></h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>