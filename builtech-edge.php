<?php include 'head.php'; ?>

<body>
    <!-- page loader  -->
	<div id="bt-loader"></div>

    <!-- scroll to top  -->
    <div id="scroll-to-top" style="display:none;">
        <div class="img-wrap">
            <img src="images/icons/up-arrow.png" alt="scroll to top">
        </div>
    </div>

	<div id="bt-page">
		<!-- desktop nav  -->
		<aside id="bt-aside" role="complementary" class="border js-fullheight">
			<a href="index.php" id="bt-logo">
				<span class="logo-wrap">
					<img src="images/logo.png" alt="Builtech Logo">
				</span>
			</a>
			<nav id="bt-main-menu" role="navigation">
				<ul>
					<li><a href="index.php#bt-about-section" class="altr active">Builtech Edge</a></li>
					<li><a href="index.php#bt-projects-section" class="altr">Projects</a></li>
					<li><a href="index.php#bt-contact-section" class="altr">Contact Us</a></li>
				</ul>
            </nav>
            
            <p class="copyrights">All Rights Reserved | &copy; <script>document.write(new Date().getFullYear());</script> BUILTECH</p>
		</aside>

		<!-- tab and smartphone nav  -->
		<aside id="bt_sm_navbar1" class="bt_sm_navbar">
			<div id="bt_btn1" class="bt_btn">
				<div class="bt_line"></div>
				<div class="bt_line"></div>
				<div class="bt_line"></div>
			</div>
			<nav class="bt_sidebar">
				<div class="bt_sm-logo-wrap">
					<a href="index.php" id="bt_sm_logo">
						<span class="bt_logo-wrap">
							<img src="images/logo.png" alt="Builtech Logo">
						</span>
					</a>
				</div>

				<ul>
					<li><a href="index.php#bt-about-section" class="active altr">Builtech Edge</a></li>
					<li><a href="index.php#bt-projects-section" class="altr">Projects</a></li>
					<li><a href="index.php#bt-contact-section" class="altr">Contact Us</a></li>
				</ul>
            </nav>
            
            <p class="copyrights">All Rights Reserved | &copy; <script>document.write(new Date().getFullYear());</script> BUILTECH</p>
		</aside> 

		<div id="bt-main">
			<div class="bt-builtech-edge-wrap">
                <div class="bt-about bt-builtech-edge-banner">
                    <div class="container">
                        <div class="row nav-banner-content align-items-center">
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="about-desc">
                                    <h2 class="bt-heading hp-builtech">
                                        <span>Builtech</span><span> Edge</span>
                                        <span class="ico-wrap">
                                            <img src="images/icons/builtech-edge.png" alt="Builtech Edge">
                                        </span>
                                    </h2>
                                    <img src="images/home-abt.png" alt="Builtech Edge" class="img-fluid md-show bt-abt-img">
                                    <p>At Builtech, we know that buying a home is one of the most important decisions that you take and TRUST is everything. We take pride in building lasting relationships with each and every one of our customers, by being completely transparent with them. Our edge stems from the fact that all of our homes are thoughtfully designed, high-quality living spaces that are aesthetically beautiful, functional and cost-effective.</p>
                                </div>
                            </div>
                            <div class="col-md-6 hide-md lg-show">
                                <div class="about-img animate-box" data-animate-effect="fadeInLeft">
                                    <!-- style="background-image: url(images/img_bg_2.jpg);" -->
                                    <img src="images/home-abt.png" alt="Builtech Edge" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="row nav-tab-row">
                            <div class="col-md-12">
                                <div class="bt-nav-tab" id="bt-nav-tab">
                                    <a href="#builtech-relationships" class="item active">
                                        <span class="ico-wrap">
                                            <img src="images/icons/builtech-relationships.png" alt="Builtech Relationships">
                                        </span>
                                        <span class="tab-head">Builtech Relationships</span>
                                    </a>
                                    
                                    <a href="#builtech-design" class="item">
                                        <span class="ico-wrap ico-b">
                                            <img src="images/icons/builtech-design.png" alt="Builtech Design">
                                        </span>
                                        <span class="tab-head">Builtech Design</span>
                                    </a>

                                    <a href="#builtech-quality" class="item">
                                        <span class="ico-wrap ico-c">
                                            <img src="images/icons/builtech-quality.png" alt="Builtech Quality">
                                        </span>
                                        <span class="tab-head">Builtech Quality</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Work on below sections from here  -->
                <div class="bt-category-wrap">
                    <div id="builtech-relationships" class="animate-box" data-animate-effect="fadeInLeft">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-7 animate-box" data-animate-effect="fadeInLeft">
                                    <div class="intro-sec">
                                        <div class="head-wrap">
                                            <div class="ico-wrap ico-a">
                                                <img src="images/icons/builtech-relationships.png" alt="Builtech Relationships">
                                            </div>
                                            <h3>Not just homes, <br class="no-br-md"/>we build lasting <br class="no-br-md"/>relationships</h3>
                                        </div>
                                        <img src="images/bt-relationships.png" alt="Builtech Relationships" class="img-fluid md-show bt-feature-img">
                                        <div class="txt-wrap">
                                            <p>Nothing matters more to us than building transparent relationships with our customers. When you buy a Builtech home, you become part of a family, that will be with you every step of the way. That our founders get to know all of our clients personally, is a testimony to this fact. Over a span of four decades, our clientele has grown from a handful of acquaintances, to hundreds of families who now have a place they can proudly call their HOME!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5 hide-md lg-show animate-box" data-animate-effect="fadeInLeft">
                                    <img src="images/bt-relationships.png" alt="Builtech Relationships" class="img-fluid">
                                </div>
                            </div>

                            <div class="next-section-wrap">
                                <span class="txt-wrap" data-link="#builtech-design">Builtech Design <span class="icon-arrow-right-thick"></span></span>
                            </div>
                        </div>
                    </div>

                    <div id="builtech-design" style="display: none;" class="animate-box" data-animate-effect="fadeInLeft">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-5 hide-md lg-show animate-box" data-animate-effect="fadeInLeft">
                                    <img src="images/bt-design.png" alt="Builtech Design" class="img-fluid">
                                </div>

                                <div class="col-md-7 animate-box" data-animate-effect="fadeInLeft">
                                    <div class="intro-sec">
                                        <div class="head-wrap">
                                            <div class="ico-wrap ico-b">
                                                <img src="images/icons/builtech-design.png" alt="Builtech Design">
                                            </div>
                                            <h3 class="bt-ft-right">Meaningful designs <br class="no-br-md"/>which redefine your <br class="no-br-md"/>lifestyle.</h3>
                                        </div>
                                        <img src="images/bt-design.png" alt="Builtech Design" class="img-fluid md-show bt-feature-img">
                                        <div class="txt-wrap">
                                            <p class="bt-ft-right">At Builtech, Design is at the heart of everything we do. We understand that your home is not just an address, but a space which deeply influences your happiness and well-being. Keeping in mind the aesthetics, comfort, functionality and convenience, all of our designs are architecturally sensitive and fill your homes with a sense of balance and harmony. All of our houses are Vaastu compliant, well-ventilated and spacious with an abundance of natural lighting and greenery in common areas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bt-others">
                            <div class="container">
                                <div class="col-md-12">
                                    <h3>What our Architects say.</h3>

                                    <div class="bt-arch-blk">
                                        <div class="row arch-blk align-items-center no-d-flex-md">
                                            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                                                <div class="img-wrap md-show">
                                                    <img src="images/others/architect-1.png" alt="Builtech Architects" class="img-fluid">
                                                    <div class="arch-info">
                                                        <span>Ar. Tony Joseph & Ar. Rajesh</span>
                                                        <span>Stapati</span>
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <p>It has been a wonderful experience working with Builtech. Their passion for developing well designed spaces encouraged us to push boundaries. It definitely helped with Mr. Rajan being particular about every detail and quality of execution, making sure that the end users got the best. Nithin, being an architect, the discussions about design concepts and other aspects were much more meaningful. My partner Ar. Rajesh and I really enjoyed working with this father and son duo, who really understood the role of an architect in creating meaningful, experiential spaces.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 hide-md lg-show animate-box" data-animate-effect="fadeInLeft">
                                                <div class="img-wrap">
                                                    <img src="images/others/architect-1.png" alt="Builtech Architects" class="img-fluid">
                                                    <div class="arch-info">
                                                        <span>Ar. Tony Joseph & Ar. Rajesh</span>
                                                        <span>Stapati</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row arch-blk align-items-center no-d-flex-md">
                                            <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                                                <div class="img-wrap">
                                                    <img src="images/others/architect-2.png" alt="Builtech Architects" class="img-fluid">
                                                    <div class="arch-info right">
                                                        <span>Ar. Brijesh Shaijal</span>
                                                        <span>DAC</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                                                <div class="txt bt-ft-right">
                                                    <p>On behalf of DAC, I am honored to acknowledge you and your esteemed company – Builtech as one of our best clients. Collaborating with Builtech group was a memorable experience as we had our freedom to design and could build a lasting relationship with the team. The team was specific about quality of spaces rather than sticking to the area requirements. Builtech group was supportive to perceive the design from an end user’s perspective and implement innovative interventions.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="next-section-wrap" style="padding-top: 0;">
                                        <span class="txt-wrap" data-link="#builtech-quality">Builtech Quality <span class="icon-arrow-right-thick"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="builtech-quality" style="display: none;" class="animate-box" data-animate-effect="fadeInLeft">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                                    <div class="intro-sec">
                                        <div class="head-wrap">
                                            <div class="ico-wrap ico-c">
                                                <img src="images/icons/builtech-quality.png" alt="Builtech Quality">
                                            </div>
                                            <h3>Quality par <br class="no-br-md"/>excellence</h3>
                                        </div>
                                        <img src="images/bt-quality.png" alt="Builtech Quality" class="img-fluid md-show bt-feature-img">
                                        <div class="txt-wrap">
                                            <p>At Builtech, Quality is not just a requirement, it is a way of life. Our stringent Quality Control standards ensure that we utilise only the finest materials. We believe that exceptional quality is a function of two factors- partnering with top-class vendors and hiring the best people. Right from inception, we have been associated only with the most credible and established brands in India. Our workforce consists of a highly-talented, multidisciplinary team of engineers, contractors and skilled laborers.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 hide-md lg-show animate-box" data-animate-effect="fadeInLeft">
                                    <img src="images/bt-quality.png" alt="Builtech Quality" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="bt-others">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>What our Partners say.</h3>

                                        <div class="bt-carousel-partners owl-carousel"> <!-- owl-carousel -->
                                            <div class="item">
                                                <div class="pt-wrap">
                                                    <div class="pt-ct-img">
                                                        <div class="pt-logo">
                                                            <img src="images/others/kone.png" alt="kone logo">
                                                        </div>
                                                        <div class="pt-rep">
                                                            <img src="images/others/partner-1.png" alt="Builtech partner - Kone">
                                                            <div class="pt-info">
                                                                <span>Mr. Ravindran S</span>
                                                                <span>Regional Director – South India</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pt-ct-text">
                                                        <p>KONE India has been associated with Builtech, Palakkad for past several years, and I must say that they have always exceeded our expectations, and we consider them one of our trusted partners in Palakkad residential market. Our team has nothing but good things to say - the entire Builtech team lives and breathes excellence in everything they do. Professionalism, Integrity, initiative and intelligence are built into their projects. Our teams have always enjoyed working with them on many projects over the years. They love to build and are committed to attaining the highest quality of work. These dedicated construction professionals show what great teamwork is all about. At the end of the day, Builtech always steps up to the plate to make sure things are done right. It is refreshing to work with a company that possesses the ethics and character that they do.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="item">
                                                <div class="pt-wrap">
                                                    <div class="pt-ct-img">
                                                        <div class="pt-logo pt-logo-b">
                                                            <img src="images/others/johnson.png" alt="Johnson logo">
                                                        </div>
                                                        <div class="pt-rep">
                                                            <img src="images/others/default.png" alt="Builtech partner - Johnson">

                                                            <div class="pt-info">
                                                                <span>Mr. Sachin</span>
                                                                <span>Regional Director – South India</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pt-ct-text">
                                                        <p>H & R Johnson India a comprehensive solution provider in the tiles, sanitaryware, bath fittings and engineered stone category has been a leading name in the home styling industry for over 60 decades. With our commitment to quality and innovation, our association with Builtech was only befitting. Our decade long association with them has strengthened over the years.</p>
                                                        <p class="m-b-0">We at H & R Johnson India highly appreciate their drive for delivering quality products at affordable prices backed wit a superlative service, which had delighted many families of owning their dream home well within their budget.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="next-section-wrap">
                                        <span class="txt-wrap" data-link="#builtech-relationships">Builtech Relationships <span class="icon-arrow-right-thick"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php include 'foot.php';?>
		</div>
	</div>

    <?php include 'scripts.php';?>
    <script>
        $(document).ready( function(){
            var category_sel = localStorage.getItem("bt_category");

            if( category_sel == null ){
                return;
            } else {

                $('.bt-nav-tab').find('.active').removeClass('active');

                $('a[href='+category_sel+']').addClass('active');
                $('.bt-category-wrap').find(category_sel).show().siblings().hide();

                $('html, body').animate({
                    scrollTop: $("#bt-nav-tab").offset().top - 20
                }, 800);
            }


            //destroy carousel
            $('.bt-carousel-partners').trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
            $('.bt-carousel-partners').find('.owl-stage-outer').children().unwrap();
            //re-init
            $('.bt-carousel-partners').owlCarousel({
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                autoplay: false,
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                autoHeight: false,
                items: 1
                // navText: [
                // 	"<i class='icon-arrow-left3 owl-direction'></i>",
                // 	"<i class='icon-arrow-right3 owl-direction'></i>"
                // ]
            })
        });
    </script>
</body>
</html>