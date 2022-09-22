
<!DOCTYPE html>
<html>
    <head>
<title>Student  Management System || Home Page</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="assets/js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="assets/js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--hover-girds-->
<link rel="stylesheet" type="text/css" href="assets/css/default.css" />
<link rel="stylesheet" type="text/css" href="assets/css/component.css" />


<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f2335702-9774-4b1c-b0da-c92f58fbccc6";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
<!-- <link rel="stylesheet" href="css/style.css"> -->
<!--/script-->
</head>





	<body>





<!--header-->
<div class="header" id="home">
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>
          </button>


          <!-- LOGO -->

          <!-- <a href="#"><img src="assets/img/aiti.png" alt="" width="" height=""></a> -->
          <h1><a class="navbar-brand" href="index.php">Logo</a></h1>


          
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
                <li><a href="#" target="_blank"><span data-hover="Home">Home</span></a></li>
                <li><a href="about.php" target="_blank"><span data-hover="About">About</span></a></li>
                <li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
                <li><a href="#" target="_blank"><span data-hover="Home">SMS</span></a></li>
                <li><a href="#" target="_blank"><span data-hover="About">Email</span></a></li>
                <li><a href="#"><span data-hover="Contact">Voting</span></a></li>
                <li><a href="login" target="_blank"><span data-hover="About">Sign In</span></a></li>
                <!-- <li><a href="user/login.php" target="_blank"><span data-hover="Shortcodes">Student</span></a></li> -->
              </ul>
              <div class="clearfix"> </div>
            </div><!-- /.navbar-collapse -->
        <!-- /.container-fluid -->

      </nav>
<!--/script-->
       <div class="clearfix"> </div>
</div>
<!-- Top Navigation -->

<!--header-->














<div class="banner">
  <div class="container">
  <script type="text/javascript" src="assets/js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="slider">
       <div class="callbacks_container">
        <ul class="rslides" id="slider">
         <li>     
          <h3>Student Management System</h3>      
           <p>You can also Login or Sign In here</p>             
          <div class="readmore">
          <a href="login" target="_blank">Sign In <i style="font-size: 20px;"> > </i> </a>
          <!-- <a href="user/login.php">Student Login<i style="font-size: 20px;"> > </i></a> -->
          </div>
         </li>

 
        </ul>
      </div>
    </div>
</div>      
  </div>
<div class="welcome">
	<div class="container">

        <h2>About Us</h2>
<h4>
The Ghana-India Kofi Annan Centre of Excellence in ICT is Ghana's first Advanced Information Technology Institute l.
 It was established in 2003, through a partnership between the Government of Ghana and the Government of India.
 The centre also houses West Africa's first supercomputer
</h4>
	</div>
</div>
<!--/welcome-->


<!--testmonials-->
<div class="testimonials">
	<div class="container">
			<div class="testimonial-nfo">
        <h3>Events</h3>
         <marquee  style="height:350px;" direction ="up" onmouseover="this.stop();" onmouseout="this.start();">


         <?php
            $connection = mysqli_connect("localhost","root","","dbschool");
                        //$connection = pg_connect("host=ec2-3-212-143-188.compute-1.amazonaws.com port=5432 dbname=dfmlibde0ugb8m user=zvgmbzipahfthh password=4d0f3e0f3b2857779e9a29cc9ad00865670b7970d3a8bedf8a495d7158d5440f");

            $query = "SELECT * FROM events";
            $query_run = mysqli_query($connection, $query);
            
        ?>


<?php

if (mysqli_num_rows($query_run) > 0)
 {
    while ($row = mysqli_fetch_assoc($query_run))
     {
?>
    

       <a href="#" style="color:#fff; font-size:20px;"> <?php echo $row['eventTitle']; ?> </a>(
        <?php echo $row['eventDescription']; ?> .venue--> <?php echo $row['enentPlace']; ?>)
        
        <a href="#" style="color:#fff; font-weight: bolder;"><?php echo $row['eventDate']; ?> </a> 

        <hr /><br />
    <?php
    }

 }
 else
 {
     echo "No Event";
 }

    ?>





	</marquee></div>
	</div>
</div>
<!--\testmonials-->
<!--specfication-->

<!--/specfication-->
<!--footer-->
<div class="footer">
    <!-- container -->
    <div class="container">
      <div class="col-md-6 footer-left">
        <ul>
          <li><a href="#" target="_blank">Home</a></li>
          <li><a href="#" target="_blank">About</a></li>
          <li><a href="#" target="_blank">Contact</a></li>
          <li><a href="login" target="_blank">Sign In</a></li>
        </ul>
       
      </div>


      <div class="col-md-3 footer-middle">

        <h3>Address</h3>
        <div class="address">
          <!-- <p>890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)</p> -->
<p>
          <?php
            $connection = mysqli_connect("localhost","root","","dbschool");

            $query = "SELECT fieldValue FROM settings WHERE fieldName = 'address' ";
            $query_run = mysqli_query($connection, $query);
            
        ?>

<?php

if (mysqli_num_rows($query_run) > 0)
 {
    while ($row = mysqli_fetch_assoc($query_run))
     {
?>
 <?php echo $row['fieldValue']; ?>

    <?php
    }

 }


    ?>

</p>


        </div>
        <div class="phone">
          <!-- <p>7896541236</p> -->




          <p>
          <?php
            $connection = mysqli_connect("localhost","root","","dbschool");

            $query = "SELECT fieldValue FROM settings WHERE fieldName = 'phoneNo' ";
            $query_run = mysqli_query($connection, $query);
            
        ?>

<?php

if (mysqli_num_rows($query_run) > 0)
 {
    while ($row = mysqli_fetch_assoc($query_run))
     {
?>
 <?php echo $row['fieldValue']; ?>

    <?php
    }

 }


    ?>

</p>




        </div>
</div>
      <div class="col-md-3 footer-right">
        <h3>STUDENT MANAGEMENT SYSTEM</h3>
        <p>Student Management System.</p>
      </div>
      <div class="clearfix"> </div> 
    </div>
    <!-- //container -->
  </div>
<!--/footer-->
<!--copy-rights-->
<div class="copyright">
    <!-- container -->
    <div class="container">
      <div class="copyright-left">
      <!-- <p>© <?php echo date('Y');?> Student Management System </p> -->




      <p>©
          <?php
            $connection = mysqli_connect("localhost","root","","dbschool");

            $query = "SELECT fieldValue FROM settings WHERE fieldName = 'footer' ";
            $query_run = mysqli_query($connection, $query);
            
        ?>

<?php

if (mysqli_num_rows($query_run) > 0)
 {
    while ($row = mysqli_fetch_assoc($query_run))
     {
?>
 <?php echo $row['fieldValue']; ?>

    <?php
    }

 }


    ?>

</p>



      </div>
      <div class="copyright-right">
        <ul>
          <li><a href="#" class="twitter" target="_blank"> </a></li>
          <li><a href="#" class="twitter facebook" target="_blank"> </a></li>
          <li><a href="#" class="twitter chrome" target="_blank"> </a></li>
          <li><a href="#" class="twitter pinterest" target="_blank"> </a></li>
          <li><a href="#" class="twitter linkedin" target="_blank"> </a></li>
          <li><a href="#" class="twitter dribbble" target="_blank"> </a></li>
        </ul>
      </div>
      <div class="clearfix"> </div>
      
    </div>
    <!-- //container -->
    <!---->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
        */
    $().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
  </div>
<!--/copy-rights-->
















<style>
    .banner{
	background:url(assets/img/banner.jpg);
	background-size:cover;
	min-height:650px;
	padding-top:0em !important;
	text-align:center;
}

.testimonials {
    background: url(assets/img/i15.jpg) no-repeat 0 0px;
    background-size: cover;
    padding: 2em 0 0 0;
    position: relative;
    text-align: center;
    margin-bottom: 0;
    min-height: 307px;
}

.address p {
  color: #989898;
  font-size: 14px;
  line-height: 1.8em;
  padding-left: 3em;
  margin: 2em 0 0 0;
  background: url(assets/img/location.png) no-repeat 0px 5px;
}

.phone p{
	color: #989898;
    font-size: .85em;
	line-height: 1.8em;
	padding-left: 3em;
	margin: 2em 0 0 0;
	background: url(assets/img/phone.png) no-repeat 0px 0px;
}

.copyright-right{
	float:right;
}
.copyright-right ul{
	padding:0;
	margin:0;
}
.copyright-right ul li{
	display:inline-block;
	margin:0 .5em;
}
.copyright-right ul li a.twitter{
  background: url(assets/img/icons1.png) no-repeat 0px 0px;
  height: 24px;
  display: block;
  width: 24px;
}
.copyright-right ul li a.facebook{
  background: url(assets/img/icons1.png) no-repeat -33px 0px;
}
.copyright-right ul li a.chrome{
  background: url(assets/img/icons1.png) no-repeat -66px 0px;
}
.copyright-right ul li a.pinterest{
  background: url(assets/img/icons1.png) no-repeat -99px 0px;
}
.copyright-right ul li a.linkedin{
  background: url(assets/img/icons1.png) no-repeat -132px 0px;
}
.copyright-right ul li a.dribbble{
  background: url(assets/img/icons1.png) no-repeat -164px 0px;
}
.copyright-right ul li a.twitter:hover {
  opacity: 0.5;
}

#toTop {
    display: none;
    text-decoration: none;
    position: fixed;
    bottom: 14px;
    right: 90%;
    overflow: hidden;
    width: 40px;
    height: 40px;
    border: none;
    text-indent: 100%;
    background: url("assets/img/to-top1.png") no-repeat 0px 0px;
}
</style>







<script src="js/modernizr.custom.js"></script>
<!--/hover-grids-->
<script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

	</body>
</html>
