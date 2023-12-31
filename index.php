



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE PRIVATE TUTOR</title>

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <style type="text/css">
        
        :root{
    --gradient:linear-gradient(90deg, #a10f, #f387);
}

*{
    font-family: 'Open Sans', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    border:none; outline: none;
    border-image: url("home-bg.jpg");
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
}

*::selection{
    background:#f39c12;
    color:#fff;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
}

html::-webkit-scrollbar{
    width:1.5rem;
}

html::-webkit-scrollbar-track{
    background:#333;
}

html::-webkit-scrollbar-thumb{
    background:linear-gradient(#f1c40f, #f39c12);
}

section{
    min-height: 100vh;
    padding:1rem 7%;
    padding-top:6rem;
}

.btn{
    padding:.7rem 3rem;
    font-size: 2rem;
    color:#fff;
    background:var(--gradient);
    border-radius: 5rem;
    margin-top: 1rem;
    cursor: pointer;
    box-shadow: 0 .1rem .3rem rgba(0,0,0,.3);
    position: relative;
    overflow: hidden;
    z-index: 0;
}

.btn::before{
    content: '';
    position: absolute;
    top:-1rem; left:-100%;
    background:#fff9;
    height:150%;
    width:20%;
    transform: rotate(25deg);
    z-index: -1;
}

.btn:hover::before{
    transition: .3s linear;
    left: 120%;
}

.heading{
    color:#444;
    padding:1rem;
    font-size: 4rem;
    text-align: center;
}

header{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: fixed;
    top:0; left: 0;
    z-index: 1000;
    padding:1.5rem 7%;
    background:var(--gradient);
    box-shadow: 0 .1rem .3rem rgba(0,0,0,.3);
}

header .logo{
    color:#fff;
    font-size: 2.5rem;
}

header .navbar ul{
    display: flex;
    align-items: center;
    justify-content: center;
    list-style: none;
}

header .navbar ul li{
    margin:0 1rem;
}

header .navbar ul li a{
    font-size: 2rem;
    color:#fff;
}


header .navbar ul li a:hover{
    color:#444;
}

header #login{
    font-size: 3rem;
    color:#fff;
    cursor: pointer;
}

header #login:hover{
    color:#444;
}

header #menu{
    font-size: 3rem;
    color:#fff;
    cursor: pointer;
    display: none;
}

.login-form{
    height:100%;
    width:100%;
    position: fixed;
    top:-120%; left: 0;
    z-index: 1000;
    background:rgba(0,0,0,.5);
    display: flex;
    align-items: center;
    justify-content: center;
}

.login-form.popup{
    top:0;
}

.login-form form{
    width:35rem;
    background:#fff;
    margin:0 2rem;
    padding:1rem 3rem;
    border-radius: .5rem;
    box-shadow: 0 .1rem .3rem #333;
    position: relative;
}

.login-form form h3{
    font-size: 3rem;
    color:#f39c12;
    padding:1rem 0;
}

.login-form form .box{
    width:100%;
    padding:1rem 0;
    margin:1rem 0;
    border-bottom: .2rem solid #666;
    font-size: 1.6rem;
    color:#333;
    text-transform: none;
}

.login-form form .box::placeholder{
    text-transform: capitalize;
}

.login-form form .box:focus{
    border-color: #f39c12;
}

.login-form form .box:nth-child(3){
    margin-bottom: 5rem;
}

.login-form form p{
    font-size: 1.4rem;
    color:#666;
    padding:.5rem 0;
}

.login-form form p a{
    color:#f39c12;
}

.login-form form .btn{
    width: 100%;
    margin:2rem 0;
}

.login-form form .btn:hover{
    background:#444;
}

.login-form form .fa-times{
    position: absolute;
    top:1.5rem; right:2rem;
    font-size: 2.5rem;
    cursor: pointer;
    color:#999;
}

.login-form form .fa-times:hover{
    color:#444;
}

.home{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-flow: column;
    background:url(../images/home-bg.jpg) no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    position: relative;
    text-align: center;
}

.home h1{
    font-size: 6rem;
    color:#666;
}

.home p{
    font-size: 1.9rem;
    color:#999;
    padding:1rem 0;
    width:70rem;
}

.home .shape{
    position: absolute;
    bottom:-.2rem; left: 0;
    height:15rem;
    width:100%;
    background:url(../images/shape.png);
    block-size: 100rem 15rem;
    filter: drop-shadow(0 -.1rem .1rem rgba(0,0,0,.2));
    animation: animate 10s linear infinite;
}

@keyframes animate{

    0%{
        background-position-x: 0rem;
    }

    100%{
        background-position-x: 100rem;
    }

}

.about{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.about .image{
    flex:1 1 40rem;
}

.about .image img{
    height:65vh;
    width:100%;
}

.about .content{
    flex:1 1 40rem;
}

.about .content h3{
    font-size: 3.5rem;
    color:#666;
}

.about .content p{
    font-size: 1.5rem;
    color:#666;
    padding:1rem 0;
}

.course .box-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.course .box-container .box{
    width:35rem;
    border:.1rem solid rgba(0,0,0,.3);
    position: relative;
    margin:1.5rem;  
}

.course .box-container .box img{
    height:20rem;
    width: 100%;
    object-fit: cover;
}

.course .box-container .box .content{
    padding:1rem;
}

.course .box-container .box .content .stars i{
    color:#f39c12;
    font-size: 1.7rem;
    padding:1rem .1rem;
}

.course .box-container .box .content .title{
    color:#444;
    font-size: 2.1rem;
}

.course .box-container .box .content .title:hover{
    text-decoration: underline;
}

.course .box-container .box .content p{
    padding:1rem 0;
    color:#666;
    font-size: 1.5rem;
}

.course .box-container .box .content .info{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: .5rem;
    border-top: .1rem solid rgba(0,0,0,.3);
}

.course .box-container .box .content .info h3{
    font-size: 1.5rem;
    padding:1rem;
    color:#666;
}

.course .box-container .box .content .info h3 i{
    color:#f39c12;
}

.course .box-container .box .price{
    position: absolute;
    top:16rem; right:1rem;
    height:8rem;
    width:8rem;
    line-height: 8rem;
    text-align: center;
    border-radius: 50%;
    background:var(--gradient);
    color:#fff;
    font-size: 3rem;
}

.teacher,.student{
    text-align: center;
    background:url(../images/teachers.jfif) no-repeat;
    background-size: cover;
    background-position: bottom;
}

.teacher,.student p{
    font-size: 1.8rem;
    color:#666;
    width:65rem;
    margin:1rem auto;
}

.contact{
    background:#111;
}

.contact .heading{
    color:#fff;
}

.contact .row{
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-wrap: wrap;
}

.contact .row form{
    flex:1 1 50rem;
    background:#222;
    padding:2rem;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-top: 3rem;
    align-items: flex-start;
}

.contact .row form .box{
    height:5rem;
    width:49%;
    border:.1rem solid #eee;
    padding:0 1rem;
    margin:1rem 0;
    font-size: 1.7rem;
    color:#fff;
    background:none;
    text-transform: none;
}

.contact .row form .box:focus{
    border-color: #f39c12;
}

.contact .row form .box::placeholder{
    text-transform: capitalize;
}

.contact .row form .address{
    height:15rem;
    padding:1rem;
    resize: none;
    width:100%;
}

.contact .row form .btn:hover{
    background:#fff;
    color:#333;
}

.contact .row .image img{
    height: 80vh;
    margin-top: 2rem;
}

.footer{
    background:#333;
}

.footer .box-container{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.footer .box-container .box{
    margin:1.5rem;
    text-align: center;
    flex:1 1 25rem;
}

.footer .box-container .box h3{
    font-size: 2.5rem;
    color:#fff;
    padding:1rem 0;
}

.footer .box-container .box p{
    font-size: 1.7rem;
    color:#eee;
    padding:.7rem 0;
}

.footer .box-container .box p i{
    padding-right: .5rem;
    color:#f39c12;
}

.footer .box-container .box a{
    font-size: 1.8rem;
    display: block;
    padding:.5rem 0;
    color:#eee;
}

.footer .box-container .box a:hover{
    text-decoration: underline;
}

.footer .credit{
    padding:2rem 1rem;
    font-size: 2rem;
    color:#fff;
    background:#111;
    text-align: center;
    font-weight: normal;
    padding-bottom: 9rem;
}

.footer .credit a{
    color:#f39c12
}















/* media queries  */

@media (max-width:768px){

    html{
        font-size: 55%;
    }

    header #menu{
        display: block;
    }

    header .navbar{
        position: fixed;
        top:-120%; left:0;
        width:100%;
        background:#444;
    }

    header .navbar ul{
        flex-flow: column;
        padding:2rem 0;
    }

    header .navbar ul li{
        margin:1.5rem 0;
        text-align: center;
        width:100%;
    }

    header .navbar ul li a{
        font-size: 2.5rem;
        display: block;
    }

    header .navbar ul li a.active,
    header .navbar ul li a:hover{
        color:#f39c12;
    }

    .fa-times{
        transform: rotate(180deg);
    }

    header .navbar.nav-toggle{
        top:6.4rem;
    }

    .home h1{
        font-size: 4rem;
    }

    .home p{
        width: auto;
    }

    .teacher p{
        width:auto;
    }

    .contact .row .image{
        display: none;
    }

}

@media (max-width:500px){

    html{
        font-size: 50%;
    }

    .contact .row form .box{
        width:100%;
    }

}
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #FFA500;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #2F4F4F;
}

    </style>

</head>
<body>
   
<!-- header section starts  -->

<header>

    <div id="menu" class="fas fa-bars"></div>

    <a href="#" class="logo"><i class="fas fa-user-graduate"></i>ONLINE TUTOR</a>
   
    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#course">course</a></li>
            <li><a href="#teacher">teacher</a></li>
            <li><a href="#student">student</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

    <div id="login" class="fas fa-user-circle"></div>


<form class="example" action="#">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>




</header>

<!-- header section ends -->

<!-- login form  -->

<div class="login-form">

    <form action="">
        <h1><a href="logout.php">Logout</a></h1>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">
	<h1>Hello, </h1>

    <h1>Online Private Tutor</h1>
    <p>Find your perfect subject tutor and arrange a Free Meeting. Then book one-to-one Lesson to fit your schedule</p>
    <a href="#"><button class="btn">get started</button></a>

    <div class="shape"></div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="coff.jpg" alt="">
    </div>

    <div class="content">
        <h3>why choose us?</h3>
        <p>Our friendly tutors have excellent grades in the subjects they teach, are studying at top UK universities, and have been personally interviewed by a member of the MyTutor team. They’re champions.</p>
        <p>Our friendly tutors have excellent grades in the subjects they teach, are studying at top UK universities, and have been personally interviewed by a member of the Online Tutor team. They’re champions</p>
        <a href="#"><button class="btn">learn more</button></a>
    </div>

</section>

<!-- about section ends -->

<!-- course section starts  -->

<section class="course" id="course">

<h1 class="heading">our popular courses</h1>    

<div class="box-container">

    <div class="box">
        <img src="coff.jpg" alt="">
        <h3 class="price">$50</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">learn Internet Programming</a>
            <p>Get study tips, revision hacks & careers advice to help you achieve your best at school and beyond!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="coff.jpg" alt="">
        <h3 class="price">$50</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">learn computer netwoking</a>
            <p>Get study tips, revision hacks & careers advice to help you achieve your best at school and beyond!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="coff.jpg" alt="">
        <h3 class="price">$50</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">learn Object Oriented Programming</a>
            <p>Get study tips, revision hacks & careers advice to help you achieve your best at school and beyond!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="coff.jpg" alt="">
        <h3 class="price">$50</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">learn Object Oriented Programming</a>
            <p>Get study tips, revision hacks & careers advice to help you achieve your best at school and beyond!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="coff.jpg" alt="">
        <h3 class="price">$50</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">learn Computer Networking</a>
            <p>Get study tips, revision hacks & careers advice to help you achieve your best at school and beyond!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="coff.jpg" alt="">
        <h3 class="price">$50</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">learn Internet Programming</a>
            <p>Get study tips, revision hacks & careers advice to help you achieve your best at school and beyond.!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

</div>

</section>

<!-- course section ends -->

<!-- teacher section starts  -->

<section class="teacher" id="teacher">

<h1 class="heading">our expert teachers</h1>

<p>Our friendly tutors have excellent grades in the subjects they teach, are studying at top UK universities, and have been personally interviewed by a member of the MyTutor team. They’re champions.</p>

<a href="ind.php"><button class="btn">learn more</button></a>

</section>

<!-- teacher section ends -->
<section class="student" id="student">

<h1 class="heading">our students</h1>

<p>Our friendly students have excellent grades in the subjects they recive tutoring. They score top grade in everything and are achiving their dreams.</p>

<a href="review.html"><button class="btn">learn more</button></a>

</section>
<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading">contact us</h1>

<div class="row">

    <form action="">
        <input type="text" placeholder="full name" class="box">
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <input type="number" placeholder="your number" class="box">
        <textarea name="" id="" cols="30" rows="10" class="box address" placeholder="your address"></textarea>
        <input type="submit" class="btn" value="send now">
    </form>

    <div class="image">
        <img src="it" alt="">
    </div>

</div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>branch locations</h3>
            <a href="#">Ethiopia</a>
            <a href="#">UK</a>
            <a href="#">Sudan</a>
            <a href="#">Kenya</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">course</a>
            <a href="#">teachers</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i> Addis Ababa, Ethiopia. </p>
            <p> <i class="fas fa-envelope"></i> tutor@gmail.com </p>
            <p> <i class="fas fa-phone"></i> +251-911-1111 </p>
        </div>

    </div>

    <h1 class="credit">created by <a href="#">Neima Nasser</a> all rights reserved. </h1>

</div>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script >

    $(document).ready(function(){


    $('#menu').click(function(){
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

    $('#login').click(function(){
        $('.login-form').addClass('popup');
    });

    $('.login-form form .fa-times').click(function(){
        $('.login-form').removeClass('popup');
    });

    $(window).on('load scroll',function(){

        $('#menu').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');

        $('.login-form').removeClass('popup');

        $('section').each(function(){

            let top = $(window).scrollTop();
            let height = $(this).height();
            let id = $(this).attr('id');
            let offset = $(this).offset().top - 200;

            if(top > offset && top < offset + height){
                $('.navbar ul li a').removeClass('active');
                $('.navbar').find(`[href="#${id}"]`).addClass('active');
            }


        });

    });

});</script>

</body>
</html>





