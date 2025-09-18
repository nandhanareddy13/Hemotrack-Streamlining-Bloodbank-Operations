<?php
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>HemoTrack | About Us </title>
	<!-- Meta tag Keywords -->
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<?php include('includes/header.php');?>

	<!-- banner 2 -->
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
		<!-- //banner 2 -->
	</div>
	<!-- page details -->
	<!-- <div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">About Us</li>
			</ol>
		</div>
	</div> -->
	<!-- //page details -->

	<!-- about -->
	<section class="about">
		<div class="container py-xl-2 py-lg-2">
		<div class="w3ls-titles text-center mb-md-5 mb-4">
				<h3 class="title">What is HemoTrack?</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="py-3">Our mission is to establish a centralized platform that seamlessly connects blood donors with recipients, enhancing the efficiency and accessibility of blood donation. Our website serves as a hub to raise awareness and educate the public on the critical importance of regular blood donation. By harnessing advanced technology to streamline the donation process and facilitate real-time connections between donors and recipients, we aim to make a significant, positive impact on the lives of those requiring life-saving blood transfusions.</p>
			</div>		
		</div>
	</section>
	
	<!-- our teams -->
	<section class="p-5">
	<h3 class="title py-xl-2 py-lg-2"><center>Behind This Project</center></h3>
	<div class="card-deck">
	<div class="card">
    <!--<img src="images\saad.jpeg" class="card-img-top team-img" alt="saad khanzada" style="height:50%">-->
    <div class="card-body">
      <h4 class="card-title">Arifa Saher</h4>
      <p class="card-text">Arifa Saher is a dedicated third-year Computer Science student with a passion for coding and software development. She excels in problem-solving and has a keen interest in emerging technologies. Arifa is actively involved in various projects and is always eager to learn and innovate.</p>      
	  <div class="row p-2">
	  <ul class="top-right-info">                            
                                <li class="mx-3">
                                    <a href="https://www.linkedin.com/in/arifa-saher-577a12249/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/Saad-Khanzada">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>                                
                            </ul>
	  </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Mansi Bhootadi</h4>
      <p class="card-text">Mansi Bhootadi is a dedicated third-year Computer Science student with expertise in frontend development. Her commitment to growth and continuous learning makes her a valuable asset to any software development project. With a strong foundation in these areas, Mansi is well-equipped to make significant contributions to the team.</p>      
	  <div class="row p-2">
	  <ul class="top-right-info">                            
                                <li class="mx-3">
                                    <a href="https://www.linkedin.com/in/mansi-bhootadi/">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/mansibhootadi">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>                                
                            </ul>
	  </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Nandhana Reddy</h4>
      <p class="card-text">Nandhana Reddy is a driven third-year Computer Science student specializing in backend development. Her relentless pursuit of knowledge and dedication to mastering her craft make her an invaluable addition to any software development initiative. With a robust skill set in backend technologies, Nandhana is poised to deliver impactful solutions and drive team success.</p>      
	  <div class="row p-2">
	  <ul class="top-right-info">                            
                                <li class="mx-3">
                                    <a href="https://www.linkedin.com/in/nandhana-reddy">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/nandhanareddy13">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>                                
                            </ul>
	  </div>
    </div>
  </div>
</div>
</section>
	<!-- //about -->



	<?php include('includes/footer.php');?>


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>