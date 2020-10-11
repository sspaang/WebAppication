<div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>

                    <div class="navbar-nav ml-auto">
                        <a href="cart.php" class="nav-item nav-link active">
                            <i class="fas fa-shopping-cart"></i> Cart
                            <?php 
                            
                                if(isset($_SESSION['cart'])) {
                                    $count = count($_SESSION['cart']);
                                    echo "<span id='cart_count'>$count</span>";
                                } else {
                                    echo "<span id='cart_count'>0</span>";
                                }

                            ?>  
                        </a>
                    </div>
                </div>
            </nav>