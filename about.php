<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/pic7.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>We are here to provide you with exceptional customer service whenever you need us before, during and after the sale. We're dedicated to giving you the best service and products possible each and every time. Your satisfaction is always our goal</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>Explore our fresh modern Furniture at low prices. The quality you want at prices you love. Restyle your home for a fresh look! Explore our fresh new Furniture styles at low prices. Designer looks for less. No money down financing. Fast delivery service.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/dine3.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/pink4.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>With a history that spans over 10 years, Our furniture website is a leader in the furniture industry and a global company deeply committed to its people, its local communities and the world around us.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/client-1.jpg" alt="">
            <p>Very happy with the quality of the sofa recliners purchased and the smooth and quick delivery. Excellent value for money.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Crystal Emily</h3>
        </div>

        <div class="box">
            <img src="images/client-2.jpg" alt="">
            <p>The delivery chaps were polite, courteous and on time. I have no hesitation in recommending this company.
</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Deo</h3>
        </div>

        <div class="box">
            <img src="images/client-3.jpg" alt="">
            <p>Excellent service and delivered arrived on time. Kept well informed the recliner was better than I expected</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Laura Sussane</h3>
        </div>

        <div class="box">
            <img src="images/author-1.jpg" alt="">
            <p>Very comfortable and fits in my room very well
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Joseph Harris</h3>
        </div>

        <div class="box">
            <img src="images/author-2.jpg" alt="">
            <p>Great product, easy to assemble, arrived on time, great price</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Amalia Martin</h3>
        </div>

        <div class="box">
            <img src="images/author-3.jpg" alt="">
            <p>My first purchase with this Company was 100% satisfactory.100% delivery satisfaction.
</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Edwen Clark</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>