<?php include("controller.php"); 


?>
<!doctype html>
<html>
<head>
    
    <style>
        html {
    position: relative;
    min-height: 100%;
}
.carousel-fade .carousel-inner .item {
    opacity: 0;
    transition-duration: 3s;
  
}
.carousel-fade .carousel-inner .active {
    opacity: 0.7;
}
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
    left: 0;
    opacity: 0.7;
    z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  
}
.carousel-fade .carousel-control {
    z-index: 2;
}
@media all and (transform-3d),
(-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
       
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
    
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
        
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}
.item:nth-child(1) {
    background: url(stud2.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

}
.item:nth-child(2) {
    background: url(stud5.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover; 
    background-size: cover;
}
.item:nth-child(3) {
    background: url(stud6.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover; 
    background-size: cover;
}
.item:nth-child(4) {
    background: url(stud7.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover; 
    background-size: cover;
}
.carousel {
    z-index: -99;
}
.carousel .item {
    position: fixed;
    width: 100%;
    height: 100%;
    opacity:0.5;
}
.title {
  text-align: center;
  margin-top: 20px;
  padding: 10px;
  text-shadow: 2px 2px #000;
  color: #FFF;
}
    </style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
-->
<link rel="stylesheet" href="sidebar2.css">

<title>Login</title>
<!--<style>
.bgimage {
     background-image: url("newbg.jpg");

}

.header1 {
     width: 100%;
     height: 13rem;
     background-image: url("newbg2.JPG");

}

.border1 {
    background-color: darkgrey;
    width: 100%;
    height: 7px;
}

.subbg {
    background-color: white;
    width: 100%;
    height: 65rem;
}

.font1 {
    font-size: 20px;
    font-weight: bold;
    color: white;
}

.log {
    width: 122px;
    height: 122px;
}
.br1 {
    width: 800px;
    height: 95px;
}

.div1 {
    width: 100%;
    height: 2rem;
}

.div2 {
    width: 100%;
    height: 5px;
}
.log2 {
    width: 115px;
    height: 115px;
}
.srms {
    width: 630px;
    height: 440px;
}

.box {
    background-color: lightgray;
    width: 40rem;
    height: 45rem;
    border-radius: 4%;
}
.box2 {
    background-color: rgb(209, 47, 47);
    width: 100%;
    height: 8rem;
    border-radius: 4%;
}

.lblfont{
    font-size: 3rem;
    color: white;
    font-weight: bold;
}

.lblfont2 {
    font-size: 16px;
    color: black;
    font-weight: bold;
}

.divc {
    width: 100%;
}

.tbl {
    width:"6rem";
}

.lblfont3 {
    font-size: 10px;
    color: blue;

}

.btn1 {
    width: 35%;
    background-color: rgb(94, 94, 247);
    height: 8%;
    border-radius: 15px;
    color: white;
    font-weight: bold;
}

.button {
    border: none;
    display: inline-block;
}

.btn {
    border: none;
    opacity: 1;
    transition: 0.3s;
}

.btn:hover {opacity: 0.6}

</style> -->
</head>
<div class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        </div>
        <div class="item">
        </div>
        <div class="item">
        </div>
        <div class="item">
        </div>
     
        
    </div>
</div>

<body>
    <div class="container-fluid header1 wrapper">
        <div class="row">   
            
            <div class="col-lg-12 pt-3" style=" padding-left: 10rem;">
                 <img src="usn7.png" class="headimg3">
                                 <img src="ust3.png" class="headimg4">
                                 <img src="iics3.png" class="headimg5">

            </div>
          
          <!--  <div class="col-lg-2" style="padding-left:10%;">
                <img src="ust.png" class="log">
            </div>
            <div class="col-lg-6 "  style="padding-left: 5%;">
                    <img src="textlogo.png" class="br1">
            </div>
            <div class="col-lg-3 "  style="padding-left: 15%;">
                    <img src="iics.png" class="log2">                   
            </div>  -->                     
        </div>
    </div>
    
    <div class="container-fluid">
        <div class = "log">
    <div class="row" style="min-width: 2050px; max-width: 2050px;">
            <div class="border1" style="min-width: 2050px; max-width: 2050px;">

            </div>

            <div class="col-lg-7 ">
                <br/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; 
                  <img src="srmsloglog.png" class="srms">
            </div>
            <div class="col-lg-5 pt-3" style="margin-bottom:5%;">
                <br/>
                <div class="box text-center">
                     <div class="box2 text-center">
                         <br>
                            <br>
                          <font class="lblfont">Login</font>
                     </div>
                     <br>
                     <form action="controller.php" method="POST">
                     <?php echo error1(); ?>
                     <div class="divc"><font class="lblfont2">Email</font></div>
                    <div class="divc"><input type="text" name="email" id="email" style="width: 80%;" ></div>
                    <div style="width: 100%; height: 1rem;"></div>
                    <div class="divc"><font class="lblfont2">Password</font></div>
                    <div class="divc"><input type="password" name="password" id="password" style="width: 80%;" ></div>
                    <div style="width: 100%; height: 1rem;"></div>
                    <div class="divc text-left lblfont3">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <font class="btn">FORGOT PASSWORD?</font>
                    </div>

                    <br>
                    <br>
                    <a href="#"><button type="submit" class="btn1 btn" name="button1" id="login_btn">
                        Login
                    </button></a></form>
                    <a href="register.php"><button type="submit" class="btn2 btn" name="button2" id="reg_btn">
                        Register
                    </button></a>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>