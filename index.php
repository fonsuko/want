<?php require_once('connect.php'); ?>
<?php
  mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("datatot");
  mysql_query("SET NAMES UTF8");
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Internship-ข้อมูลท่อร้อยสายใต้ดิน</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1>TOT DUCT INFRASTRUCTURE</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">หน้าหลัก</a></li>
        <li><a href="#about">บันทึกข้อมูลชุมสาย</a></li>
		<li><a href="#service">บันทึกข้อมูลโครงสร้างบ่อพัก</a></li>
		<li><a href="#contact">แผนที่ท่อ</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">ข้อมูลท่อ<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">ข้อมูลชุมสาย</a></li>
            <li><a href="#">ข้อมูลบ่อพัก</a></li>
            <li><a href="#">Example menu</a></li>
          </ul>
        </li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">

		<div class="slogan">
			<h2>ระบบบันทึกข้อมูล<span class="text_color">ท่อร้อยสายใต้ดิน</span> </h2>
			<h4>ส่วนปฏิบัติการท่อร้อยสาย บริษัททีโอทีจำกัดมหาชน</h4>
		</div>
		<div class="page-scroll">
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->

	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>บันทึกข้อมูลชุมสาย</h2>
          <i class="fa fa-2x fa-angle-down"></i>
          <div class="row">
      			<div class="col-lg-2 col-lg-offset-5">
      				<hr class="marginbot-50">
      			</div>
      		</div>

          <!-- start editing from fon -->
          <div class="row">
              <div class="col-lg-8">
                  <div class="boxed-grey">
                      <form id="contact-form">
                      <div class="row">
                          <div class="col-md-6">

                              <div class="form-group">
                                  <label for="name">
                                     จังหวัด</label>
                                  <input type="text" class="form-control" id="name" placeholder="เช่น กรุงเทพฯ,กระบี่" required="required" />
                                  </div>


                              <div class="form-group">
                                  <label for="name">
                                     ชื่อชุมสาย</label>
                                  <input type="text" class="form-control" id="name" placeholder="เช่น ชุมสายหาดใหญ่" required="required" />
                              </div>


                              <div class="form-group">
                                  <label for="name">
                                      Latitude</label>
                                  <div class="for">
                                      <span class=""><span class=""></span>
                                      </span>
                                      <input type="text" class="form-control"  placeholder="เช่น 32.54423" required="required" /></div>
                              </div>

                              <div class="form-group">
                                  <label for="name">
                                      Longitude</label>
                                  <div class="for">
                                      <span class=""><span class=""></span>
                                      </span>
                                      <input type="text" class="form-control"  placeholder="เช่น 154.43395" required="required" /></div>
                              </div>

                          </div>

                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="name">
                                      ประเภทบ่อพัก</label>
                                      <select id="subject" name="subject" class="form-control" required="required">
                                          <option value="na" selected="">เลือกประเภทบ่อ :</option>
                                          <option value="service">Pullbox</option>
                                          <option value="suggestions">Manhole</option>
                                      </select>

                                  <text name="message"   rows="9" cols="25" required="required"
                                      placeholder="Message"></text>
                              </div>

                              <div class="form-group">
                                  <label for="name">
                                     ชนิดบ่อพัก</label>
                                  <input type="text" class="form-control" id="name" placeholder="เช่น A-1,JUF11" required="required" />
                              </div>

                              <div class="form-group">
                                  <label for="name">
                                     ถนน</label>
                                  <input type="text" class="form-control" id="name" placeholder="เช่น ถนนสุขุมวิท" required="required" />
                              </div>

                              <div class="form-group">
                                  <label for="name">
                                     ผู้สำรวจ</label>
                                  <input type="text" class="form-control" id="name" placeholder="เช่น พิทักษ์ เอื้อสุจริต" required="required" />
                              </div>

                              <div class="col-md-12">
                                  <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                                      บันทึกข้อมูล </button>
                              </div>

                      </div>
                      </form>
                  </div>
              </div>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>

	</section>
	<!-- /Section: about -->


	<!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">

		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">



					<h2>บันทึกข้อมูลโครงสร้างบ่อพัก</h2>
					<i class="fa fa-2x fa-angle-down"></i>

          <div class="row">
              <div class="col-lg-8">
                  <div class="boxed-grey">
                      <form id="contact-form">
                      <div class="row">
                          <div class="col-md-6">

                              <div class="form-group">
                                  <label for="name">
                                     ชุมสาย</label>
                                  <input type="text" class="form-control" id="name" placeholder="เช่น ชุมสายหาดใหญ่" required="required" />
                                  </div>


                              <div class="form-group">
                                  <label for="name">
                                     บ่อพัก</label>
                                  <input type="text" class="form-control" id="name" placeholder="เช่น MH#001" required="required" />
                              </div>


                              <div class="form-group">
                                  <label for="name">
                                      Latitude</label>
                                  <div class="for">
                                      <span class=""><span class=""></span>
                                      </span>
                                      <input type="text" class="form-control"  placeholder="เช่น 32.54423" required="required" /></div>
                              </div>

                              <div class="form-group">
                                  <label for="name">
                                      Longitude</label>
                                  <div class="for">
                                      <span class=""><span class=""></span>
                                      </span>
                                      <input type="text" class="form-control"  placeholder="เช่น 154.43395" required="required" /></div>
                              </div>

                          </div>

                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="name">
                                      ประเภทบ่อพัก</label>
                                      <select id="subject" name="subject" class="form-control" required="required">
                                          <option value="na" selected="">เลือกประเภทบ่อ :</option>
                                          <option value="service">Pullbox</option>
                                          <option value="suggestions">Manhole</option>
                                      </select>

                                  <text name="message"   rows="9" cols="25" required="required"
                                      placeholder="Message"></text>
                              </div>

                              <div class="form-group">
                                  <label for="name">
                                     ชนิดบ่อพัก</label>
                                  <input type="text" class="form-control" id="name" placeholder="เช่น A-1,JUF11" required="required" />
                              </div>

                              <div class="form-group">
                                  <label for="name">
                                     ถนน</label>
                                  <input type="text" class="form-control" id="name" placeholder="เช่น ถนนสุขุมวิท" required="required" />
                              </div>

                              <div class="form-group">
                                  <label for="name">
                                     ผู้สำรวจ</label>
                                  <input type="text" class="form-control" id="name" placeholder="เช่น พิทักษ์ เอื้อสุจริต" required="required" />
                              </div>






                          </div>





                          <div class="col-md-12">
                              <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                                  บันทึกข้อมูล</button>
                          </div>
                      </div>
                      </form>
                  </div>
              </div>


					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <div class="col-sm-3 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-1.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>Print</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-2.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>Web Design</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-3.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>Photography</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-4.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>Cloud System</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
					</div>
                </div>
				</div>
            </div>
        </div>
		</div>
	</section>
	<!-- /Section: services -->




	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>แผนที่จุดติดตั้งท่อร้อยสาย</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                <form id="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                ประเภทบ่อพัก</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-center" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>

		<div class="col-lg-4">
			<div class="widget-contact">
				<h5>Main Office</h5>

				<address>
				  <strong>Squas Design, Inc.</strong><br>
				  Tower 795 Folsom Ave, Beautiful Suite 600<br>
				  San Francisco, CA 94107<br>
				  <abbr title="Phone">P:</abbr> (123) 456-7890
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">email.name@example.com</a>
				</address>
				<address>
				  <strong>We're on social networks</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
				</address>

			</div>
		</div>
    </div>

		</div>
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy; 5722770864 All rights reserved. <a href="http://bootstraptaste.com/">TOT Public Company Limited</a>.</p>
                    <!--
                        All links in the footer should remain intact.
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Squadfree
                    -->
				</div>
			</div>
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

</body>

</html>
