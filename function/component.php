<?php 

function component($action,$coursename, $courseprice, $courseimg, $classid) {
    $element = "
    
    <div class='col-xl-2 col-lg-5 col-md-5 col-sm-6 my-3 my-md-0 py-2'>
        <form action='$action' method='post'>
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
                        Do you want to learn this?
                    </p>
                    <h5>
                        <small><s class='text-secondary'>฿799</s></small>
                        <span class='price'>฿$courseprice</span>
                    </h5>
                    <button type='submit' class='btn btn-primary my-3' name='add'>Add to cart <i class='fas fa-shopping-cart'></i></button>
                    <input type='hidden' name='class_id' value='$classid'>
                </div>
            </div>
        </form>
    </div>
    
    ";
    echo $element;
}

function classlist($classlink, $classname) {
    $element = "

    <li>
        <a href='$classlink'>$classname</a>
    </li>

    ";
    echo $element;
}

function enrolledComponent($coursename, $courseimg, $classlink) {

    $element = "
    
    <div class='col-xl-2 col-lg-2 col-md-5 col-sm-6 my-3 my-md-0 py-2'>
        <form action='edit_db.php' method='post'>
            <div class='card shadow'>
                <div>
                    <img src='$courseimg' alt='Image1' class='img-fluid card-img-top'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>$coursename</h5>
                    <p class='card-text small-text'>
                        Do you want to learn this?
                    </p>
                    <a class='btn btn-primary' href='$classlink' role='button'>Learn</a>
                </div>
            </div>
        </form>
    </div>
    
    ";
    echo $element;
}

