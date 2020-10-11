<?php 

function component($coursename, $courseprice, $courseimg) {
    $element = "
    
    <div class='col-md-2 col-sm-6 my-3 my-md-0'>
        <form action='index.php' method='post'>
            <div class='card shadow'>
                <div>
                    <img src='$courseimg' alt='Image1' class='img-fluid card-img-top'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>$coursename</h5>
                    <h6>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star'></i>
                    </h6>
                    <p class='card-text small-text'>
                        Database 305365-2
                    </p>
                    <h5>
                        <small><s class='text-secondary'>฿799</s></small>
                        <span class='price'>฿$courseprice</span>
                    </h5>
                    <button type='submit' class='btn btn-primary my-3' name='add'>Add to cart <i class='fas fa-shopping-cart'></i></button>
                </div>
            </div>
        </form>
    </div>
    
    ";
    echo $element;
}
