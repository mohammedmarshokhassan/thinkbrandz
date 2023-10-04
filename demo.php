
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->

<head>
    <!-- Favicon -->
    <meta charset="utf-8">
    <title>Medshyne</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="title" content="Medshyne">
    <meta name="description" content="">
    <meta name="keywords" content="">

    


    <meta name="msapplication-square70x70logo" content="https://www.medshyne.com/assets/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="https://www.medshyne.com/assets/favicon/mstile-150x150.png" />
    <link rel="canonical" href="https://www.medshyne.com/" />
    <link rel="icon" type="image/png" href="https://www.medshyne.com/assets/favicon-32x32.png" sizes="32x32" />

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://www.medshyne.com/doctor_user_assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://www.medshyne.com/doctor_user_assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://www.medshyne.com/doctor_user_assets/plugins/fontawesome/css/all.min.css">


    <!-- Main CSS -->
    <link rel="stylesheet" href="https://www.medshyne.com/doctor_user_assets/css/style.css">

    <link rel="stylesheet" href="https://www.medshyne.com/doctor_user_assets/css/doctor_style.css">
    <link rel="stylesheet" href="https://www.medshyne.com/doctor_user_assets/css/header-style.css">

    <link rel="stylesheet" href="https://www.medshyne.com/doctor_assets/css/select2.min.css">
    <link rel="stylesheet" href="https://www.medshyne.com/doctor_assets/js/toastr/toastr.css">
    <link rel="stylesheet" href="https://www.medshyne.com/doctor_assets/js/toastr/toastr.min.css">
    <style>
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 99;
            display: block;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .flexboxloadbox {
            display: inline-block;
            width: 100%;
            top: 36%;
            position: relative;
        }

        .patientalldetail_left img {
            width: 100%;
        }

        .patientalldetailset .qrloader_set img {
            padding: 25px;
        }
    </style>
    <script src="https://www.medshyne.com/doctor_user_assets/js/jquery.min.js"></script>
</head>

        <body>
        
        <div class="loader" style="display: none;">
            <div class="flexboxloadbox">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgba(241, 242, 243, 0); display: block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <g transform="translate(20 50)">
                        <circle cx="0" cy="0" r="6" fill="#82C449" transform="scale(0.793141 0.793141)">
                            <animateTransform attributeName="transform" type="scale" begin="-0.375s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
                        </circle>
                    </g>
                    <g transform="translate(40 50)">
                        <circle cx="0" cy="0" r="6" fill="#82C449" transform="scale(0.45133 0.45133)">
                            <animateTransform attributeName="transform" type="scale" begin="-0.25s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
                        </circle>
                    </g>
                    <g transform="translate(60 50)">
                        <circle cx="0" cy="0" r="6" fill="#82C449" transform="scale(0.129595 0.129595)">
                            <animateTransform attributeName="transform" type="scale" begin="-0.125s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
                        </circle>
                    </g>
                    <g transform="translate(80 50)">
                        <circle cx="0" cy="0" r="6" fill="#82C449" transform="scale(0.00410122 0.00410122)">
                            <animateTransform attributeName="transform" type="scale" begin="0s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
                        </circle>
                    </g>
                </svg>
            </div>
        </div>
        <!-- Main Wrapper -->
        <div class="main-wrapper">
            <div class="headertopbatlinesetmain">
                <div class="container-fluid">
                    <div class="headertopbatline_left">
                        <p class="hlpbtnset_desk">Customer Support: <a href="tel:+91 1234567890">+91 80079 80010</a></p>
                        <p class="hlpbtnset_mob"><a href="tel:+91 1234567890">Need Help?</a>
                    </div>

                    <div class="headertopbatline_right">


                        <nav id="mainnav" class="profactname">
                            <ul class="menu">
                                <li style="padding-right: 0;">
                                                                            <a href="https://www.medshyne.com/doctor/login" class="probtnlginbtn">
                                            <img alt="Sign in Sign up" title="Sign in / Sign up" src="https://www.medshyne.com/assets/svg/user-icon-new.svg">
                                            <p>Sign in / Sign up</p>
                                        </a>
                                                                                                        </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
            <header class="navhedbox_cover newresdesignheader_cover" id="web_header">
                <div class="container-fluid">
                    <div class="logosrchcsart">
                        <div class="lefthedlogonav">
                            <a href="https://www.medshyne.com/doctor">
                                <img alt="" title="Medshyne" src="https://www.medshyne.com/assets/logo.png">
                            </a>
                        </div>
                        <nav class="navbar navbar-expand-lg navbar-light bg-light mobilenavboxset">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">

                                <img alt="" title="" src="https://www.medshyne.com/assets/svg/hamburger.svg">

                            </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.medshyne.com/aboutus">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.medshyne.com/contactus">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="tel:+91 80079 80010">Help : <span>+91 80079 80010</span></a>
                                    </li>

                                </ul>

                            </div>
                        </nav>

                        <div class="rightmenuyboxset headerightminoffcaruprx">
                            <div class="headerightminoffcart_cover">
                                 <div class="headerightminoffcart_offer">
                                    <a target="_blank" href="https://www.medshyne.com/home">
                                        <img alt="Pharmacy" title="" src="https://www.medshyne.com/assets/svg/pharmacy-icon-new.svg">
                                        <p>Pharmacy</p>
                                    </a>
                                </div>
                                <div class="headerightminoffcart_offer">
                                    <a target="_blank" href="https://www.medshyne.com/lab">
                                        <img alt="Diagnostics" title="" src="https://www.medshyne.com/assets/svg/diagnostic-icon-new.svg">
                                        <p>Diagnostics</p>
                                    </a>
                                </div> 

                                <div class="headerightminoffcart_upldrx">
                                    <a href="https://www.medshyne.com/my-health-record">Health Record</a>
                                                                        <!-- <a href="javascript:void(0);" onclick="getuserinfo_qr('');"><i class="fa fa-qrcode"></i></a> -->
                                                                    </div>

                            </div>
                        </div>

                        <div class="midserchbox">
                            <div id="form-wrapper">
                                <button type="button" class="search_icon go-button">
                                    <img alt="" title="Search in" src="https://www.medshyne.com/assets/svg/search-icon.svg">
                                </button>
                                <form action="https://www.medshyne.com/searchproduct/search_product" method="post" class="serachbarbox_set">
                                    <div class="in-wrap">
                                        <input type="text" name="search-doctor" id="search-box" class="sercboxslibox" placeholder="Search doctors, speciality, symptoms " autocomplete="off">
                                    </div>
                                </form>
                                <div class="col-md-12 col-xs-12 col-sm-12 search_box_dropdown" id="suggesstion-box" style="display: none;">
                                </div>
                            </div>

                        </div>



                        <div class="navmenulerboxset" style="display: none;">
                            <ul>
                                <li><a href="https://www.medshyne.com/"><img src="https://www.medshyne.com/assets/svg/home-icon.svg"> <span>Home</span></a></li>
                                
                                                                                                    <li><a href="https://www.medshyne.com/category"><img src="https://www.medshyne.com/assets/svg/category-icon.svg"><span>Category</span></a></li>
                                                                 <li><a href="javascript:void(0);"><img src="https://www.medshyne.com/assets/svg/doctor-icon1.svg"><span>E - Consultation</span></a></li> 
                                <li><a href="https://www.medshyne.com/"><img src="https://www.medshyne.com/assets/svg/category-icon.svg"> <span>Medicines</span></a></li> 
                                 <li><a  target="_blank" href="https://www.medshyne.com/lab"><img src="https://www.medshyne.com/assets/svg/laboratorie-icon.svg"><span>Diagnosis</span></a></li> 
                                <li><a href="https://www.medshyne.com/offer"><img src="https://www.medshyne.com/assets/svg/offer-icon.svg"><span>Offer</span></a></li>

                                <li class="helpbtnshownumb">
                                    <nav id="mainnav" class="mainnav">
                                        <ul class="menu">
                                            <li>
                                                <a href="javascript:;" class="helpbtnshowbtn">
                                                    <img alt="Help" src="https://www.medshyne.com/assets/svg/help-icon1.svg"><span>Help</span>
                                                </a>
                                                <ul class="submenu helpnumbox">
                                                    <div class="helpnubox_iner">
                                                        <a href="tel:+91 80079 80010">+91 80079 80010</a>
                                                    </div>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- <a href="javascript:void(0);"><img src="https://www.medshyne.com/assets/svg/help-icon1.svg"><span>Help</span></a> -->
                                </li>

                                <!-- <li><a href="javascript:void(0);"><img src="https://www.medshyne.com/assets/svg/aboutus-icon.svg"><span>About Us</span></a></li>
                            <li><a href="javascript:void(0);"><img src="https://www.medshyne.com/assets/svg/contactus-icon.svg"><span>Contact Us</span></a></li> -->
                            </ul>
                        </div>

                    </div>

                    <!-- <div class="hlpbntnboxset">
                        <a href="javascript:void(0);"><img src="https://www.medshyne.com/assets/svg/help-icon.svg"><span>Help?</span></a>
                    </div> -->
                </div>
            </header>


            <header class="navhedbox_cover" id="web_header" style="display: none;">
                <div style="float: right;" id="google_translate_element"></div>
                <div class="container_fluidhed">
                    <div class="logosrchcsart">
                        <div class="lefthedlogonav">
                            <a href="https://www.medshyne.com/doctor/">
                                <img alt="" title="" src="https://www.medshyne.com/assets/white-logo.png">
                            </a>
                        </div>
                        <nav class="navbar navbar-expand-lg navbar-light bg-light mobilenavboxset">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">

                                <img alt="hamburger" title="" src="https://www.medshyne.com/doctor_user_assets/svg/hamburger.svg">

                            </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.medshyne.com/">Medicines</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.medshyne.com/lab">Diagnostic</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.medshyne.com/doctor">E - Consultation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="tel:+91 80079 80010">Help : <span>+91 80079 80010 </span></a>
                                    </li>

                                </ul>

                            </div>
                        </nav>

                        <div class="rightmenuyboxset">
                            <ul>
                                <nav id="mainnav" class="profactname">
                                    <ul class="menu">
                                        <li style="padding-right: 0;">
                                                                                            <a href="https://www.medshyne.com/doctor/login" class="probtnlginbtn">
                                                    <img alt="Sign in Sign up" title="Sign in / Sign up" src="https://www.medshyne.com/doctor_user_assets/svg/user-icon.svg">
                                                    <p>Sign in / Sign up</p>
                                                </a>
                                                                                                                                </li>
                                    </ul>
                                </nav>
                            </ul>
                        </div>
                        <div class="midserchbox">
                            <div id="form-wrapper">

                                <button type="button" class="search_icon go-button">
                                    <img alt="" title="Search in" src="https://www.medshyne.com/doctor_user_assets/svg/search-icon.svg">
                                </button>

                                <div class="in-wrap">
                                    <input type="text" name="search-doctor" class="sercboxslibox" placeholder="Search doctors, speciality, symptoms " autocomplete="off">
                                </div>

                                <div class="col-md-12 col-xs-12 col-sm-12 search_box_dropdown" id="suggesstion-box" style="display: none;">
                                </div>
                            </div>

                        </div>
                        <div class="navmenulerboxset">
                            <ul>
                                <li><a href="https://www.medshyne.com/"><img src="https://www.medshyne.com/doctor_user_assets/svg/category-icon.svg"><span>Medicines</span></a></li>
                                <li><a href="https://www.medshyne.com/doctor"><img src="https://www.medshyne.com/doctor_user_assets/svg/e-consultation-icon-1.svg"><span>E - Consultation</span></a></li>
                                <li><a href="https://www.medshyne.com/lab"><img src="https://www.medshyne.com/doctor_user_assets/svg/diagnosis-icon.svg"><span>Diagnostic</span></a></li>
                                <li class="helpbtnshownumb">
                                    <nav id="mainnav" class="mainnav">
                                        <ul class="menu">
                                            <li>
                                                <a href="javascript:;" class="helpbtnshowbtn">
                                                    <img src="https://www.medshyne.com/doctor_user_assets/svg/help-icon1.svg"><span>Help</span>
                                                </a>
                                                <ul class="submenu helpnumbox">
                                                    <div class="helpnubox_iner">
                                                        <a href="tel:+91 80079 80010 ">+91 80079 80010 </a>
                                                    </div>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Header -->
            <header class="header" style="display: none;">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="javascript:;">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="https://www.medshyne.com/" class="navbar-brand logo">
                            <img src="https://www.medshyne.com/assets/logo.png" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="index-2.html" class="menu-logo">
                                <img src="https://www.medshyne.com/assets/logo.png" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:;">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <ul class="main-nav">
                            <li>
                                <a href="https://www.medshyne.com/doctor">Home</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
                                    <li><a href="appointments.html">Appointments</a></li>
                                    <li><a href="schedule-timings.html">Schedule Timing</a></li>
                                    <li><a href="my-patients.html">Patients List</a></li>
                                    <li><a href="patient-profile.html">Patients Profile</a></li>
                                    <li><a href="chat-doctor.html">Chat</a></li>
                                    <li><a href="invoices.html">Invoices</a></li>
                                    <li><a href="doctor-profile-settings.html">Profile Settings</a></li>
                                    <li><a href="reviews.html">Reviews</a></li>
                                    <li><a href="doctor-register.html">Doctor Register</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Patients <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="search.html">Search Doctor</a></li>
                                    <li><a href="doctor-profile.html">Doctor Profile</a></li>
                                    <li><a href="booking.html">Booking</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="booking-success.html">Booking Success</a></li>
                                    <li><a href="patient-dashboard.html">Patient Dashboard</a></li>
                                    <li><a href="favourites.html">Favourites</a></li>
                                    <li><a href="chat.html">Chat</a></li>
                                    <li><a href="profile-settings.html">Profile Settings</a></li>
                                    <li><a href="change-password.html">Change Password</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu active">
                                <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="voice-call.html">Voice Call</a></li>
                                    <li><a href="video-call.html">Video Call</a></li>
                                    <li><a href="search.html">Search Doctors</a></li>
                                    <li><a href="calendar.html">Calendar</a></li>
                                    <li><a href="components.html">Components</a></li>
                                    <li class="has-submenu">
                                        <a href="invoices.html">Invoices</a>
                                        <ul class="submenu">
                                            <li><a href="invoices.html">Invoices</a></li>
                                            <li><a href="invoice-view.html">Invoice View</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blank-page.html">Starter Page</a></li>
                                    <li class="active"><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="admin/index.html" target="_blank">Admin</a>
                            </li>
                                                            <li class="login-link">
                                    <a href="https://www.medshyne.com/doctor/login">Login</a>
                                </li>
                                <li class="login-link">
                                    <a href="https://www.medshyne.com/doctor/register">Signup</a>
                                </li>
                                                    </ul>
                    </div>
                    <ul class="nav header-navbar-rht">
                                                                            <li class="nav-item">
                                <a class="nav-link header-login" href="https://www.medshyne.com/doctor/login">login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link header-login" href="https://www.medshyne.com/doctor/register">Signup</a>
                            </li>
                                            </ul>
                </nav>
            </header>
            <!-- /Header --><link rel="stylesheet" href="https://www.medshyne.com/doctor_user_assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="https://www.medshyne.com/doctor_user_assets/css/owl.theme.default.min.css">
<style type="text/css">
	.section-features {
		background-color: #f6f6f6;
	}

	.ourclinkbox_coverset .seeallbtncover {
		margin-top: 35px;
	}

	.ourclinkbox_coverset {
		padding-top: 32px;
		padding-bottom: 40px;
	}

	.rating i.not-filled {
		color: #4f5051 !important;
	}

	.addressinfoset {
		display: -webkit-box;
		width: 100%;
		-webkit-line-clamp: 1;
		-webkit-box-orient: vertical;
		overflow: hidden;
		text-overflow: ellipsis;
		margin-bottom: 0;
	}
</style>
<!-- Home Banner -->
 <section class="section section-search">
				<div class="container-fluid">
					<div class="banner-wrapper">
						<div class="banner-header text-center">
							<h2>Search Doctor, Make an Appointment</h2>
							<p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
						</div>
                         
						
						<div class="search-box">
							<form action="templateshub.net">
								<div class="form-group search-location">
									<input type="text" class="form-control" placeholder="Search Location">
									<span class="form-text">Based on your Location</span>
								</div>
								<div class="form-group search-info">
									<input type="text" class="form-control" placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc">
									<span class="form-text">Ex : Dental or Sugar Check up etc</span>
								</div>
								<button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
							</form>
						</div>
						
						
					</div>
				</div>
			</section> 
<!-- /Home Banner -->
	<div class="homebannercoverbox">
		<div class="homebanner_inerbox desmobrispobnr1">
			<div class="owl-carousel owl-theme" id="owl-carousel1">
											<div class="item">
								<img src="https://www.medshyne.com/./uploads/doctor/banner/main/ThinkstockPhotos-122758213-1-1600x500_BANNER_1675083925.png" alt="ThinkstockPhotos-122758213-1-1600x500_BANNER_1675083925.png">
							</div>
											<div class="item">
								<img src="https://www.medshyne.com/./uploads/doctor/banner/main/medical-device11_BANNER_1675083862.jpg" alt="medical-device11_BANNER_1675083862.jpg">
							</div>
											<div class="item">
								<img src="https://www.medshyne.com/./uploads/doctor/banner/main/cropped-pexels-thirdman-5327916-scaled-1-1600x500_BANNER_1675083804.jpg" alt="cropped-pexels-thirdman-5327916-scaled-1-1600x500_BANNER_1675083804.jpg">
							</div>
											<div class="item">
								<img src="https://www.medshyne.com/./uploads/doctor/banner/main/pexels-public-domain-pictures-60022_BANNER_1648057508.jpg" alt="pexels-public-domain-pictures-60022_BANNER_1648057508.jpg">
							</div>
											<div class="item">
								<img src="https://www.medshyne.com/./uploads/doctor/banner/main/pexels-pavel-danilyuk-5998472_BANNER_1648045530.jpg" alt="pexels-pavel-danilyuk-5998472_BANNER_1648045530.jpg">
							</div>
							</div>
		</div>
		<div class="homebanner_inerbox desmobrispobnr2">
			<div class="owl-carousel owl-theme" id="owl-carouselmobile">
											<div class="item">
								<img src="https://www.medshyne.com/./uploads/doctor/banner/main/Doctor-app--banner-2_banner_1652967876.jpg" alt="Doctor-app--banner-2_banner_1652967876.jpg">
							</div>
											<div class="item">
								<img src="https://www.medshyne.com/./uploads/doctor/banner/main/Doctor-app--banner-1_banner_1652967842.jpg" alt="Doctor-app--banner-1_banner_1652967842.jpg">
							</div>
											<div class="item">
								<img src="https://www.medshyne.com/./uploads/doctor/banner/main/Doctor-app--banner_banner_1652967816.jpg" alt="Doctor-app--banner_banner_1652967816.jpg">
							</div>
							</div>
		</div>
	</div>

<div class="homvidclnisetain_cover">

	<div class="container">
											<div class="homvidclnisetain_iner">

						<a href="https://www.medshyne.com/service/video-consultation">
							<div class="catmaincoverimghlsitig">
								<img alt="" src="https://www.medshyne.com/doctor_assets/img/video-consultation-icon-new.png">
							</div>
							<p>Video Consultation</p>
						</a>
					</div>
															<div class="homvidclnisetain_iner">
						<a href="https://www.medshyne.com/service/clinic-visit">
							<div class="catmaincoverimghlsitig">
								<img alt="" src="https://www.medshyne.com/doctor_assets/img/clinic-visit-icon-new.png">
							</div>
							<p>Clinic Visit</p>
						</a>
					</div>
															<div class="homvidclnisetain_iner">
						<a href="https://www.medshyne.com/service/home-visit">
							<div class="catmaincoverimghlsitig">
								<img alt="" src="https://www.medshyne.com/doctor_assets/img/home-visit-icon-new.png">

							</div>
							<p>Home Visit</p>
						</a>
					</div>
							</div>

</div>

  <div class="constdoctboxset_cover">
	<div class="container">
		<div class="conrscategor_title">
			<h2>Choose Your Preferred Way of Meeting the Doctor</h2>
		</div>
		<div class="constdoctboxset_iner">
			<div class="constdoctboxset_left">
				<img src="https://www.medshyne.com/doctor_user_assets/img/doct-img-1.png" title="Doctor Image" alt="Doctor Image">
			</div>
			<div class="constdoctboxset_right">
										<div class="rightservsboxset_cov">
							<div class="rightservsboxset_inr">
																	<a href="https://www.medshyne.com/service/video-consultation">
										<i class="fas fa-video"></i>
										<h3>Video Consultation</h3>
										<p>Connect with the doctor virtually for medical consultation.</p>
										<p>No need to step outside for medical consultation. Visit this tab and meet the doctor online instead.</p>
									</a>
															</div>
						</div>
										<div class="rightservsboxset_cov">
							<div class="rightservsboxset_inr">
																	<a href="https://www.medshyne.com/service/clinic-visit">
										<i class="fas fa-clinic-medical"></i>
										<h3>Clinic Visit</h3>
										<p>Visit the clinic without waiting in a long queue.</p>
										<p>Book your prior appointment online. Click this tab to reserve your slot for the clinic appointment.</p>
									</a>
															</div>
						</div>
										<div class="rightservsboxset_cov">
							<div class="rightservsboxset_inr">
																	<a href="https://www.medshyne.com/service/home-visit">
										<i class="fas fa-home"></i>
										<h3>Home Visit</h3>
										<p>No need to travel. Call your doctor home.</p>
										<p>Navigate to this tab to quickly book an appointment and the doctor will come to your home at your chosen time.</p>
									</a>
															</div>
						</div>
							</div>
		</div>
	</div>
</div>  

			<!-- Popular Section -->
			<section class="section section-doctor doctbox_coverbook">
				<div class="container-fluid">
					<div class="row">

						<div class="bokdoctbox_cobevrhed">
							<h2>Consult with our Top Doctors</h2>
							<!-- <a href="javascript:void(0);">View All</a> -->
						</div>
						<div class="col-lg-12">
							<div class="owl-carousel owl-theme doctor_comsetbox">

																		<div class="item">
											<div class="profile-widget">
												<div class="doc-img">
													<a href="https://www.medshyne.com/doctor-details/dr-durairaj-a-102">
														<img class="img-fluid" title="Dr. DURAIRAJ A" alt="Dr. DURAIRAJ A" src="https://www.medshyne.com/./uploads/doctor/main/Untitleddesign1_CAT_1689850563.png">
													</a>
												</div>
												<div class="pro-content">
													<h3 class="title">
														<a href="https://www.medshyne.com/doctor-details/dr-durairaj-a-102">Dr. DURAIRAJ A</a>
														<i class="fas fa-check-circle verified"></i>
													</h3>
													<p class="speciality">MBBS,DNB(General Medical) General  Practioner</p>

													<div class="rating">
																													<i class="fa fa-star not-filled" aria-hidden="true"></i>
															<span class="d-inline-block average-rating">0</span>
																											</div>
													<ul class="available-info">
														<li>
																															<div class="addressinfoset">
																	<i class="fas fa-map-marker-alt"></i>DR Durairaj,Pondicherry																</div>
																														<!-- 													 -->
														</li>

													</ul>
													<div class="row row-sm">
														<div class="col-12">
															<a href="https://www.medshyne.com/doctor-details/dr-durairaj-a-102" class="btn view-btn">View Profile</a>
														</div>
													</div>
												</div>
											</div>
										</div>
																		<div class="item">
											<div class="profile-widget">
												<div class="doc-img">
													<a href="https://www.medshyne.com/doctor-details/dr-shahul-hamid-100">
														<img class="img-fluid" title="Dr. SHAHUL HAMID" alt="Dr. SHAHUL HAMID" src="https://www.medshyne.com/./uploads/doctor/main/2C197D32-CFA5-4D0F-B25A-FC4EE3F66880_doctor_1686399439.jpg">
													</a>
												</div>
												<div class="pro-content">
													<h3 class="title">
														<a href="https://www.medshyne.com/doctor-details/dr-shahul-hamid-100">Dr. SHAHUL HAMID</a>
														<i class="fas fa-check-circle verified"></i>
													</h3>
													<p class="speciality">MBBS,Fellowship In Diabetology Diabetology,General  Practioner</p>

													<div class="rating">
																													<i class="fa fa-star not-filled" aria-hidden="true"></i>
															<span class="d-inline-block average-rating">0</span>
																											</div>
													<ul class="available-info">
														<li>
																															<i class="fas fa-ma"></i>
																														<!-- 													 -->
														</li>

													</ul>
													<div class="row row-sm">
														<div class="col-12">
															<a href="https://www.medshyne.com/doctor-details/dr-shahul-hamid-100" class="btn view-btn">View Profile</a>
														</div>
													</div>
												</div>
											</div>
										</div>
																		<div class="item">
											<div class="profile-widget">
												<div class="doc-img">
													<a href="https://www.medshyne.com/doctor-details/dr-karuppiah-pandi-62">
														<img class="img-fluid" title=" Dr. KARUPPIAH PANDI" alt=" Dr. KARUPPIAH PANDI" src="https://www.medshyne.com/./uploads/NoImageDoctor.png">
													</a>
												</div>
												<div class="pro-content">
													<h3 class="title">
														<a href="https://www.medshyne.com/doctor-details/dr-karuppiah-pandi-62"> Dr. KARUPPIAH PANDI</a>
														<i class="fas fa-check-circle verified"></i>
													</h3>
													<p class="speciality">MBBS,MD Neonatologists,Paediatrics</p>

													<div class="rating">
																													<i class="fa fa-star not-filled" aria-hidden="true"></i>
															<span class="d-inline-block average-rating">0</span>
																											</div>
													<ul class="available-info">
														<li>
																															<div class="addressinfoset">
																	<i class="fas fa-map-marker-alt"></i>J Care Women And Child Clinic,Pondicherry																</div>
																														<!-- 													 -->
														</li>

													</ul>
													<div class="row row-sm">
														<div class="col-12">
															<a href="https://www.medshyne.com/doctor-details/dr-karuppiah-pandi-62" class="btn view-btn">View Profile</a>
														</div>
													</div>
												</div>
											</div>
										</div>
																		<div class="item">
											<div class="profile-widget">
												<div class="doc-img">
													<a href="https://www.medshyne.com/doctor-details/dr-loganayaki-s-242">
														<img class="img-fluid" title="Dr. LOGANAYAKI S" alt="Dr. LOGANAYAKI S" src="https://www.medshyne.com/./uploads/doctor/main/WhatsAppImage2023-07-14at33721PM_CAT_1689329320.jpeg">
													</a>
												</div>
												<div class="pro-content">
													<h3 class="title">
														<a href="https://www.medshyne.com/doctor-details/dr-loganayaki-s-242">Dr. LOGANAYAKI S</a>
														<i class="fas fa-check-circle verified"></i>
													</h3>
													<p class="speciality"> Physiotheraphy</p>

													<div class="rating">
																													<i class="fa fa-star not-filled" aria-hidden="true"></i>
															<span class="d-inline-block average-rating">0</span>
																											</div>
													<ul class="available-info">
														<li>
																															<div class="addressinfoset">
																	<i class="fas fa-map-marker-alt"></i>Loganayaki,Villupuram																</div>
																														<!-- 													 -->
														</li>

													</ul>
													<div class="row row-sm">
														<div class="col-12">
															<a href="https://www.medshyne.com/doctor-details/dr-loganayaki-s-242" class="btn view-btn">View Profile</a>
														</div>
													</div>
												</div>
											</div>
										</div>
																		<div class="item">
											<div class="profile-widget">
												<div class="doc-img">
													<a href="https://www.medshyne.com/doctor-details/dr-sathiya-chitra-204">
														<img class="img-fluid" title="Dr. SATHIYA CHITRA" alt="Dr. SATHIYA CHITRA" src="https://www.medshyne.com/./uploads/doctor/main/3508864152118139045552187085738859953934868n_CAT_1689050311.jpg">
													</a>
												</div>
												<div class="pro-content">
													<h3 class="title">
														<a href="https://www.medshyne.com/doctor-details/dr-sathiya-chitra-204">Dr. SATHIYA CHITRA</a>
														<i class="fas fa-check-circle verified"></i>
													</h3>
													<p class="speciality">MBBS General  Practioner</p>

													<div class="rating">
																													<i class="fas fa-star filled"></i>
															<span class="d-inline-block average-rating">5.0</span>
																											</div>
													<ul class="available-info">
														<li>
																															<i class="fas fa-ma"></i>
																														<!-- 													 -->
														</li>

													</ul>
													<div class="row row-sm">
														<div class="col-12">
															<a href="https://www.medshyne.com/doctor-details/dr-sathiya-chitra-204" class="btn view-btn">View Profile</a>
														</div>
													</div>
												</div>
											</div>
										</div>
																		<div class="item">
											<div class="profile-widget">
												<div class="doc-img">
													<a href="https://www.medshyne.com/doctor-details/dr-thulasi-doss-karunanithi-120">
														<img class="img-fluid" title="Dr. THULASI DOSS KARUNANITHI" alt="Dr. THULASI DOSS KARUNANITHI" src="https://www.medshyne.com/./uploads/doctor/main/IMG_20230414_111242_doctor_1681451048.jpg">
													</a>
												</div>
												<div class="pro-content">
													<h3 class="title">
														<a href="https://www.medshyne.com/doctor-details/dr-thulasi-doss-karunanithi-120">Dr. THULASI DOSS KARUNANITHI</a>
														<i class="fas fa-check-circle verified"></i>
													</h3>
													<p class="speciality">M.S ENT Ear Nose Throat,General  Practioner</p>

													<div class="rating">
																													<i class="fa fa-star not-filled" aria-hidden="true"></i>
															<span class="d-inline-block average-rating">0</span>
																											</div>
													<ul class="available-info">
														<li>
																															<div class="addressinfoset">
																	<i class="fas fa-map-marker-alt"></i>M.S  Health Care,Cuddalore																</div>
																														<!-- 													 -->
														</li>

													</ul>
													<div class="row row-sm">
														<div class="col-12">
															<a href="https://www.medshyne.com/doctor-details/dr-thulasi-doss-karunanithi-120" class="btn view-btn">View Profile</a>
														</div>
													</div>
												</div>
											</div>
										</div>
																		<div class="item">
											<div class="profile-widget">
												<div class="doc-img">
													<a href="https://www.medshyne.com/doctor-details/dr-theertha-a-93">
														<img class="img-fluid" title="Dr. THEERTHA A" alt="Dr. THEERTHA A" src="https://www.medshyne.com/./uploads/doctor/main/26097533813153728022338637567021488346886698n_CAT_1689400933.jpg">
													</a>
												</div>
												<div class="pro-content">
													<h3 class="title">
														<a href="https://www.medshyne.com/doctor-details/dr-theertha-a-93">Dr. THEERTHA A</a>
														<i class="fas fa-check-circle verified"></i>
													</h3>
													<p class="speciality">B.D.S Dentistry</p>

													<div class="rating">
																													<i class="fa fa-star not-filled" aria-hidden="true"></i>
															<span class="d-inline-block average-rating">0</span>
																											</div>
													<ul class="available-info">
														<li>
																															<div class="addressinfoset">
																	<i class="fas fa-map-marker-alt"></i>D Care Dental Clinic,Pondicherry																</div>
																														<!-- 													 -->
														</li>

													</ul>
													<div class="row row-sm">
														<div class="col-12">
															<a href="https://www.medshyne.com/doctor-details/dr-theertha-a-93" class="btn view-btn">View Profile</a>
														</div>
													</div>
												</div>
											</div>
										</div>
																		<div class="item">
											<div class="profile-widget">
												<div class="doc-img">
													<a href="https://www.medshyne.com/doctor-details/dr-madhanraj-221">
														<img class="img-fluid" title="Dr. MADHANRAJ" alt="Dr. MADHANRAJ" src="https://www.medshyne.com/./uploads/NoImageDoctor.png">
													</a>
												</div>
												<div class="pro-content">
													<h3 class="title">
														<a href="https://www.medshyne.com/doctor-details/dr-madhanraj-221">Dr. MADHANRAJ</a>
														<i class="fas fa-check-circle verified"></i>
													</h3>
													<p class="speciality">MD(SIDDHA) Siddha</p>

													<div class="rating">
																													<i class="fa fa-star not-filled" aria-hidden="true"></i>
															<span class="d-inline-block average-rating">0</span>
																											</div>
													<ul class="available-info">
														<li>
																															<div class="addressinfoset">
																	<i class="fas fa-map-marker-alt"></i>Shruthibala Siddha Clinic,pondicherry																</div>
																														<!-- 													 -->
														</li>

													</ul>
													<div class="row row-sm">
														<div class="col-12">
															<a href="https://www.medshyne.com/doctor-details/dr-madhanraj-221" class="btn view-btn">View Profile</a>
														</div>
													</div>
												</div>
											</div>
										</div>
																		<div class="item">
											<div class="profile-widget">
												<div class="doc-img">
													<a href="https://www.medshyne.com/doctor-details/dr-sahanaa-209">
														<img class="img-fluid" title="Dr. SAHANAA " alt="Dr. SAHANAA " src="https://www.medshyne.com/./uploads/NoImageDoctor.png">
													</a>
												</div>
												<div class="pro-content">
													<h3 class="title">
														<a href="https://www.medshyne.com/doctor-details/dr-sahanaa-209">Dr. SAHANAA </a>
														<i class="fas fa-check-circle verified"></i>
													</h3>
													<p class="speciality"> General  Practioner</p>

													<div class="rating">
																													<i class="fa fa-star not-filled" aria-hidden="true"></i>
															<span class="d-inline-block average-rating">0</span>
																											</div>
													<ul class="available-info">
														<li>
																															<i class="fas fa-ma"></i>
																														<!-- 													 -->
														</li>

													</ul>
													<div class="row row-sm">
														<div class="col-12">
															<a href="https://www.medshyne.com/doctor-details/dr-sahanaa-209" class="btn view-btn">View Profile</a>
														</div>
													</div>
												</div>
											</div>
										</div>
																		<div class="item">
											<div class="profile-widget">
												<div class="doc-img">
													<a href="https://www.medshyne.com/doctor-details/dr-t-thiruvazhudi-101">
														<img class="img-fluid" title="Dr. T THIRUVAZHUDI " alt="Dr. T THIRUVAZHUDI " src="https://www.medshyne.com/./uploads/NoImageDoctor.png">
													</a>
												</div>
												<div class="pro-content">
													<h3 class="title">
														<a href="https://www.medshyne.com/doctor-details/dr-t-thiruvazhudi-101">Dr. T THIRUVAZHUDI </a>
														<i class="fas fa-check-circle verified"></i>
													</h3>
													<p class="speciality">Mbbs General  Practioner</p>

													<div class="rating">
																													<i class="fa fa-star not-filled" aria-hidden="true"></i>
															<span class="d-inline-block average-rating">0</span>
																											</div>
													<ul class="available-info">
														<li>
																															<div class="addressinfoset">
																	<i class="fas fa-map-marker-alt"></i>Thiru  Clinic,Pondicherry																</div>
																														<!-- 													 -->
														</li>

													</ul>
													<div class="row row-sm">
														<div class="col-12">
															<a href="https://www.medshyne.com/doctor-details/dr-t-thiruvazhudi-101" class="btn view-btn">View Profile</a>
														</div>
													</div>
												</div>
											</div>
										</div>
															</div>
						</div>

						<!-- <div class="viewbtnDoctor">
							<a href="https://www.medshyne.com/doctor/view">See All Doctor</a>
						</div> -->
					</div>
				</div>
			</section>
			<!-- /Popular Section -->
					<section class="specialitieslist_cover newdiscovermainsetbox">
				<div class="bokdoctbox_cobevrhed">
					<h2>Consult Our Doctor with Specialization</h2>
				</div>
				<div class="specialitieslist_iner">
					<div class="container">
						<div class="owl-carousel owl-theme specialization_comsetbox">
																<div class="item">
										<div class="sepectlsld_inerbox">
											<a href="https://www.medshyne.com/speciality/general-practioner">
												<img src="https://www.medshyne.com/./uploads/doctor/speciality/main/General_SPECIALITY_1625032582.png" title="General  Practioner" alt="General  Practioner">
											</a>
											<p><a href="https://www.medshyne.com/speciality/general-practioner">General  Practioner</a></p>
										</div>
									</div>
																<div class="item">
										<div class="sepectlsld_inerbox">
											<a href="https://www.medshyne.com/speciality/neurology">
												<img src="https://www.medshyne.com/./uploads/doctor/speciality/main/Neurological_SPECIALITY_1625033886.png" title="Neurology" alt="Neurology">
											</a>
											<p><a href="https://www.medshyne.com/speciality/neurology">Neurology</a></p>
										</div>
									</div>
																<div class="item">
										<div class="sepectlsld_inerbox">
											<a href="https://www.medshyne.com/speciality/obstetrician-gynaecology">
												<img src="https://www.medshyne.com/./uploads/doctor/speciality/main/Obstetric-Gynaecological_SPECIALITY_1625034070.png" title="Obstetrician/Gynaecology" alt="Obstetrician/Gynaecology">
											</a>
											<p><a href="https://www.medshyne.com/speciality/obstetrician-gynaecology">Obstetrician/Gynaecology</a></p>
										</div>
									</div>
																<div class="item">
										<div class="sepectlsld_inerbox">
											<a href="https://www.medshyne.com/speciality/ophthalmology">
												<img src="https://www.medshyne.com/./uploads/doctor/speciality/main/Ocular_SPECIALITY_1625034108.png" title="Ophthalmology" alt="Ophthalmology">
											</a>
											<p><a href="https://www.medshyne.com/speciality/ophthalmology">Ophthalmology</a></p>
										</div>
									</div>
																<div class="item">
										<div class="sepectlsld_inerbox">
											<a href="https://www.medshyne.com/speciality/psychiatrist">
												<img src="https://www.medshyne.com/./uploads/doctor/speciality/main/Psychiatric_SPECIALITY_1625034143.png" title="Psychiatrist" alt="Psychiatrist">
											</a>
											<p><a href="https://www.medshyne.com/speciality/psychiatrist">Psychiatrist</a></p>
										</div>
									</div>
																<div class="item">
										<div class="sepectlsld_inerbox">
											<a href="https://www.medshyne.com/speciality/pulmonology">
												<img src="https://www.medshyne.com/./uploads/doctor/speciality/main/Pulmonary_SPECIALITY_1625034174.png" title="Pulmonology" alt="Pulmonology">
											</a>
											<p><a href="https://www.medshyne.com/speciality/pulmonology">Pulmonology</a></p>
										</div>
									</div>
																<div class="item">
										<div class="sepectlsld_inerbox">
											<a href="https://www.medshyne.com/speciality/general-surgery">
												<img src="https://www.medshyne.com/./uploads/doctor/speciality/main/gendreal_SPECIALITY_1661751626.png" title="General Surgery" alt="General Surgery">
											</a>
											<p><a href="https://www.medshyne.com/speciality/general-surgery">General Surgery</a></p>
										</div>
									</div>
													</div>
						<div class="viewallbtnrightox">
							<a href="https://www.medshyne.com/our-specialists">See All Specializations</a>
						</div>
					</div>
				</div>
			</section>
					<section class="symptomslist_cover">
				<div class="bokdoctbox_cobevrhed">
					<h2>Symptoms</h2>
				</div>
				<div class="symptomslist_iner">
					<div class="owl-carousel owl-theme symptoms_comsetbox">

														<div class="item">
									<div class="symptomsboxlistcover">
										<a href="https://www.medshyne.com/symptoms/abdominal-pain">
											<div class="symptboximgset">
												<img src="https://www.medshyne.com/./uploads/doctor/symptoms/main/abdominal-pain_SYMPTOMS_1625032391.png" alt="Abdominal pain" title="Abdominal pain">
											</div>

											<div class="symptnametitlesetbox">
												<p><a href="https://www.medshyne.com/symptoms/abdominal-pain">Abdominal pain</a></p>
											</div>
										</a>
									</div>
								</div>
														<div class="item">
									<div class="symptomsboxlistcover">
										<a href="https://www.medshyne.com/symptoms/anorexia">
											<div class="symptboximgset">
												<img src="https://www.medshyne.com/./uploads/doctor/symptoms/main/AnorexiaSYMPTOMS1625043346.png" alt="Anorexia" title="Anorexia">
											</div>

											<div class="symptnametitlesetbox">
												<p><a href="https://www.medshyne.com/symptoms/anorexia">Anorexia</a></p>
											</div>
										</a>
									</div>
								</div>
														<div class="item">
									<div class="symptomsboxlistcover">
										<a href="https://www.medshyne.com/symptoms/arrhythmia">
											<div class="symptboximgset">
												<img src="https://www.medshyne.com/./uploads/doctor/symptoms/main/arrhythmia_SYMPTOMS_1625031707.png" alt="Arrhythmia" title="Arrhythmia">
											</div>

											<div class="symptnametitlesetbox">
												<p><a href="https://www.medshyne.com/symptoms/arrhythmia">Arrhythmia</a></p>
											</div>
										</a>
									</div>
								</div>
														<div class="item">
									<div class="symptomsboxlistcover">
										<a href="https://www.medshyne.com/symptoms/bradycardia">
											<div class="symptboximgset">
												<img src="https://www.medshyne.com/./uploads/doctor/symptoms/main/bradycardia_SYMPTOMS_1625031748.png" alt="Bradycardia" title="Bradycardia">
											</div>

											<div class="symptnametitlesetbox">
												<p><a href="https://www.medshyne.com/symptoms/bradycardia">Bradycardia</a></p>
											</div>
										</a>
									</div>
								</div>
														<div class="item">
									<div class="symptomsboxlistcover">
										<a href="https://www.medshyne.com/symptoms/chest-pain">
											<div class="symptboximgset">
												<img src="https://www.medshyne.com/./uploads/doctor/symptoms/main/chest-pain_SYMPTOMS_1625032092.png" alt="Chest Pain" title="Chest Pain">
											</div>

											<div class="symptnametitlesetbox">
												<p><a href="https://www.medshyne.com/symptoms/chest-pain">Chest Pain</a></p>
											</div>
										</a>
									</div>
								</div>
														<div class="item">
									<div class="symptomsboxlistcover">
										<a href="https://www.medshyne.com/symptoms/dry-mouth">
											<div class="symptboximgset">
												<img src="https://www.medshyne.com/./uploads/doctor/symptoms/main/dry-mouth_SYMPTOMS_1625032155.png" alt="Dry Mouth" title="Dry Mouth">
											</div>

											<div class="symptnametitlesetbox">
												<p><a href="https://www.medshyne.com/symptoms/dry-mouth">Dry Mouth</a></p>
											</div>
										</a>
									</div>
								</div>
														<div class="item">
									<div class="symptomsboxlistcover">
										<a href="https://www.medshyne.com/symptoms/epistaxis">
											<div class="symptboximgset">
												<img src="https://www.medshyne.com/./uploads/doctor/symptoms/main/epistaxis_SYMPTOMS_1625032207.png" alt="Epistaxis" title="Epistaxis">
											</div>

											<div class="symptnametitlesetbox">
												<p><a href="https://www.medshyne.com/symptoms/epistaxis">Epistaxis</a></p>
											</div>
										</a>
									</div>
								</div>
														<div class="item">
									<div class="symptomsboxlistcover">
										<a href="https://www.medshyne.com/symptoms/anxiety">
											<div class="symptboximgset">
												<img src="https://www.medshyne.com/./uploads/doctor/symptoms/main/anxiety1SYMPTOMS1684142063.jpg" alt="Anxiety" title="Anxiety">
											</div>

											<div class="symptnametitlesetbox">
												<p><a href="https://www.medshyne.com/symptoms/anxiety">Anxiety</a></p>
											</div>
										</a>
									</div>
								</div>
														<div class="item">
									<div class="symptomsboxlistcover">
										<a href="https://www.medshyne.com/symptoms/body-pain">
											<div class="symptboximgset">
												<img src="https://www.medshyne.com/./uploads/doctor/symptoms/main/Back-PainSYMPTOMS1614255692SYMPTOMS1631686580_SYMPTOMS_1653623543.png" alt="Body Pain" title="Body Pain">
											</div>

											<div class="symptnametitlesetbox">
												<p><a href="https://www.medshyne.com/symptoms/body-pain">Body Pain</a></p>
											</div>
										</a>
									</div>
								</div>
											</div>
					<div class="viewallbtnrightox">
						<a href="https://www.medshyne.com/all-symptoms">See All Symptoms</a>
					</div>
				</div>
			</section>
						<section>
				<div class="ourclinkboxslidercover">
					<div class="ourclinkboxslider_title">
						<h3>Top Clinic</h3>
					</div>
					<div class="container-fluid">
						<div class="ourclinkboxslider_iner">

							<div class="owl-carousel owl-theme clinic_comsetbox">

																		<div class="item">
											<div class="orclinicboximgtext">
												<div class="orclinicbox_img">
													<a href="https://www.medshyne.com/clinic/j-care-women-and-child-clinic">
														<img title="J Care Women And Child Clinic" src="https://www.medshyne.com/./uploads/doctor/clinic/main/IMG-20230316-WA0058_jpg_PRE_1678971983.jpg" class="img-fluid" alt="J Care Women And Child Clinic"></a>
												</div>
												<div class="orclinicbox_text">
													<p><a href="https://www.medshyne.com/clinic/j-care-women-and-child-clinic">J Care Women And Child Clinic</a></p>
												</div>
											</div>
										</div>
																		<div class="item">
											<div class="orclinicboximgtext">
												<div class="orclinicbox_img">
													<a href="https://www.medshyne.com/clinic/atchayan-physiotherapy-center">
														<img title="Atchayan physiotherapy center " src="https://www.medshyne.com//assets/img/clinic-detail-found-img.png" class="img-fluid" alt="Atchayan physiotherapy center "></a>
												</div>
												<div class="orclinicbox_text">
													<p><a href="https://www.medshyne.com/clinic/atchayan-physiotherapy-center">Atchayan physiotherapy center </a></p>
												</div>
											</div>
										</div>
																		<div class="item">
											<div class="orclinicboximgtext">
												<div class="orclinicbox_img">
													<a href="https://www.medshyne.com/clinic/medshyne-clinic">
														<img title="Medshyne Clinic" src="https://www.medshyne.com//assets/img/clinic-detail-found-img.png" class="img-fluid" alt="Medshyne Clinic"></a>
												</div>
												<div class="orclinicbox_text">
													<p><a href="https://www.medshyne.com/clinic/medshyne-clinic">Medshyne Clinic</a></p>
												</div>
											</div>
										</div>
																		<div class="item">
											<div class="orclinicboximgtext">
												<div class="orclinicbox_img">
													<a href="https://www.medshyne.com/clinic/aayush-bio-acu-clinic">
														<img title="Aayush Bio Acu Clinic" src="https://www.medshyne.com//assets/img/clinic-detail-found-img.png" class="img-fluid" alt="Aayush Bio Acu Clinic"></a>
												</div>
												<div class="orclinicbox_text">
													<p><a href="https://www.medshyne.com/clinic/aayush-bio-acu-clinic">Aayush Bio Acu Clinic</a></p>
												</div>
											</div>
										</div>
															</div>
							<div class="viewallbtnrightox">
								<a href="https://www.medshyne.com/our-clinic">See All Clinic</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		  <div class="downloadbox_cover">
	<div class="container">
		<div class="downloadbox_inr">
			<div class="downloadbox_left">
				<img src="doctor_user_assets/img/doctor-mobile-img.png">
			</div>
			<div class="downloadbox_right">
				<h3>Download the App for FREE!</h3>
				<p>Carry this platform in your pocket with <span style="font-weight: bold;">Dawapaani </span>app! <br> Explore the offers and thousands of products for the need of your health. Place the order from anywhere, anytime with just a few clicks on your smartphone! Get alerts &amp; update instantly!</p>
				<h6>Download the app now!</h6>
									<a href="" target="_blank">
						<img src="doctor_user_assets/img/play-store-icon.png" class="playstoreiconbtn">
					</a>
													<a href="" target="_blank">
						<img src="doctor_user_assets/img/app-store-icon.png">
					</a>
							</div>
		</div>
	</div>
</div>  
  <div class="refandernsetmianbox_cover">
	<a href="">
		<img alt="Refer and earn" src="assets/img/invite-your-friends-refer-now-mob.jpg" class="refand_mobcoverset">
		<img alt="Refer and earn" src="assets/img/invite-your-friends-refer-now.png" class="refand_deskcoverset">
	</a>
</div>  
	<div class="ourblogdatamindatacov">
		<div class="ourclinkboxslider_title">
			<h3>Health Corner</h3>
		</div>
		<div class="container-fluid">
			<div class="ourclinkboxslider_iner">
				<div class="owl-carousel owl-theme blogdesign_newdata">
										<div class="item">
						<div class="bloglistdeta_iner">
							<a href="https://www.medshyne.com/doctor/blog/key-management-of-hypertension-strategies-reduce-your-blood-pressure-instantly">
								<div class="allblogdatacoverset">
									<div class="bloglistdeta_img">
																						<img alt="Key management of hypertension strategies: Reduce your blood pressure instantly!" title="Key management of hypertension strategies: Reduce your blood pressure instantly!" src="https://www.medshyne.com/uploads/blog/main/atleast1mfromother_CAT_1686658227.jpg">
																				</div>
									<div class="bloglistdeta_detail">
										<h3>Key management of hypertension strategies: Reduce your blood pressure instantly!</h3>
										<!-- <div class="blog_content">
											<p></p>
										</div> -->

									</div>
								</div>
							</a>
						</div>
					</div>
										<div class="item">
						<div class="bloglistdeta_iner">
							<a href="https://www.medshyne.com/doctor/blog/malaria">
								<div class="allblogdatacoverset">
									<div class="bloglistdeta_img">
																						<img alt="MALARIA" title="MALARIA" src="https://www.medshyne.com/uploads/blog/main/Untitleddesign2_CAT_1682416907.jpg">
																				</div>
									<div class="bloglistdeta_detail">
										<h3>MALARIA</h3>
										<!-- <div class="blog_content">
											<p></p>
										</div> -->

									</div>
								</div>
							</a>
						</div>
					</div>
										<div class="item">
						<div class="bloglistdeta_iner">
							<a href="https://www.medshyne.com/doctor/blog/haemophilia">
								<div class="allblogdatacoverset">
									<div class="bloglistdeta_img">
																						<img alt="HAEMOPHILIA" title="HAEMOPHILIA" src="https://www.medshyne.com/uploads/blog/main/haem600x340_CAT_1681713863.png">
																				</div>
									<div class="bloglistdeta_detail">
										<h3>HAEMOPHILIA</h3>
										<!-- <div class="blog_content">
											<p></p>
										</div> -->

									</div>
								</div>
							</a>
						</div>
					</div>
										<div class="item">
						<div class="bloglistdeta_iner">
							<a href="https://www.medshyne.com/doctor/blog/hiv">
								<div class="allblogdatacoverset">
									<div class="bloglistdeta_img">
																						<img alt="HIV" title="HIV" src="https://www.medshyne.com/uploads/blog/main/Untitleddesign1_CAT_1681284331.jpg">
																				</div>
									<div class="bloglistdeta_detail">
										<h3>HIV</h3>
										<!-- <div class="blog_content">
											<p></p>
										</div> -->

									</div>
								</div>
							</a>
						</div>
					</div>
										<div class="item">
						<div class="bloglistdeta_iner">
							<a href="https://www.medshyne.com/doctor/blog/hypertension">
								<div class="allblogdatacoverset">
									<div class="bloglistdeta_img">
																						<img alt="Hypertension" title="Hypertension" src="https://www.medshyne.com/uploads/blog/main/Untitleddesign_CAT_1680773975.jpg">
																				</div>
									<div class="bloglistdeta_detail">
										<h3>Hypertension</h3>
										<!-- <div class="blog_content">
											<p></p>
										</div> -->

									</div>
								</div>
							</a>
						</div>
					</div>
										<div class="item">
						<div class="bloglistdeta_iner">
							<a href="https://www.medshyne.com/doctor/blog/surviving-the-pandemic-strategies-to-overcome-covid-19-challenges">
								<div class="allblogdatacoverset">
									<div class="bloglistdeta_img">
																						<img alt="Surviving The Pandemic: Strategies to Overcome COVID-19 Challenges" title="Surviving The Pandemic: Strategies to Overcome COVID-19 Challenges" src="https://www.medshyne.com/uploads/blog/main/atleast1mfromother4_CAT_1680067465.png">
																				</div>
									<div class="bloglistdeta_detail">
										<h3>Surviving The Pandemic: Strategies to Overcome COVID-19 Challenges</h3>
										<!-- <div class="blog_content">
											<p></p>
										</div> -->

									</div>
								</div>
							</a>
						</div>
					</div>
									</div>
				<div class="viewallbtnrightox">
					<a href="https://www.medshyne.com/doctor/blog">See All Health Corner</a>
				</div>
			</div>
		</div>
	</div>
<div class="downldappbotypart_cover">
	<div class="container">
		<div class="downldappbotypart_iner">
			<!-- <div class="page_section_load" style="display: none;"></div> -->
			<div class="downldappbotypart_left">
				<h3>Download the App for <span>free!</span></h3>
				<p>Carry this platform in your pocket with <span style="font-weight: bold;">Medshyne </span>app! <br>
					Explore the offers and thousands of products for the need of your health. Place the order from anywhere,
					anytime with just a few clicks on your smartphone! Get alerts &amp; update instantly!</p>
				<!-- <p>Download the app now!</p> -->
									<a href="https://play.google.com/store/apps/details?id=com.medshyne" target="_blank">
						<img src="https://www.medshyne.com/assets/svg/app-store-icon.svg">
					</a>
													<a href="https://apps.apple.com/us/app/medshyne/id1660705674" target="_blank">
						<img src="https://www.medshyne.com/assets/svg/play-store-icon.svg" class="playstoreiconbtn">

					</a>
							</div>
			<div class="downldappbotypart_right">
				<img src="https://www.medshyne.com/doctor_user_assets/img/doctor-mobile-img.png" title="mobile app image" alt="mobile app image">
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<footer class="loadsectbox" id="web_footer">
  <div class="page_section_load"></div>
  <div class="allfootcoverbox">
    <div class="container-fluid">
      <div class="footboxmanuset1 onlylogosetbox">
        <a href="javascript:;">
          <img alt="Medshyne" title="Medshyne" src="https://www.medshyne.com/assets/logo.png" style="">
        </a>
        <p></p>

        <div class="solclogboseticonsetcover">
          <ul>
            <li>
              
            </li>
            <li>
                          </li>
            <li>
                          </li>
            <li>
                          </li>

          </ul>
        </div>
      </div>
      <div class="footboxmanuset4">
        <div class="fotmenuboxcover">
          <h3>Policy Info</h3>
          <ul>
            <li><a href="https://www.medshyne.com/doctor/aboutus">About Us</a></li>
            <li><a href="https://www.medshyne.com/doctor/privacy-policy">Privacy Policy</a></li>
            <li><a href="https://www.medshyne.com/doctor/terms-condition">Terms & Conditions</a></li>

          </ul>
        </div>
      </div>
      <div class="footboxmanuset_cover">

        <div class="footboxmanuset3">
          <div class="fotmenuboxcover">
            <h3>Quick Links</h3>
            <ul>
              <li><a href="https://www.medshyne.com/doctor/doctor_appointment/appointment_list">My Appointment</a></li>
              <li><a href="https://www.medshyne.com/doctor/contactus">Contact Us</a></li>
              <li><a href="https://www.medshyne.com/doctor/faqs">FAQ's</a></li>
              <!-- <li><a href="javascript:void(0);" onclick="myModalnewform('partner')">Partner With Us</a></li>
              <li><a href="javascript:void(0);" onclick="myModalnewform('ads')">Post Your Advertisement</a></li> -->
            </ul>
          </div>
        </div>
      </div>


      <div class="footboxmanuset5">
        <div class="titleboxsetiner">
          <h3>Contact Us</h3>
        </div>
        <div class="addloctcont">
          <p><i class="fa fa-home" aria-hidden="true"></i> No-34, Airport Main Road, Lawspet, Puducherry-605008.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               </p>
        </div>
        <div class="addloctcont">
          <p><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+91 80079 80010">+91 80079 80010</a></p>
        </div>
        <div class="addloctcont">
          <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:health@medshyne.com">health@medshyne.com</a></p>
        </div>
      </div>

    </div>
  </div>


  <div class="lastfootcopyrightbox">
    <div class="container-fluid">
      <p>Copyright © 2023 <span>Medshyne</span>. All rights reserved.</p>
    </div>
  </div>

</footer>
<div class="modal offeradvcover barcodebtnpadd_set" id="getuserinfo_qr" aria-hidden="true" role="dialog" style="z-index: 99999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p>Scan QR code</p>
        <div class="patientalldetailset">

          <div class="patientalldetail_left qrloader_set">
            <img src="https://www.medshyne.com//assets/img/qr_scan.gif" title="Patient Detail">
          </div>

        </div>
      </div>
      <div class="closebarcodeicon_set">
        <a href="javascript:void(0);" onClick="window.location.reload();"><i class="fa fa-times" aria-hidden="true" data-dismiss="modal"></i></a>
      </div>
    </div>
  </div>
</div>

<!-- /Footer -->
</div>
<div class="coming-loader" id="doctor_loader" style="display: none;">
  <div class="coming-loader-img">
    <img class="img-responsive" src="https://www.medshyne.com//doctor_assets/img/loading-buffering.gif" alt="">
  </div>
</div>
<div class="modal fade" id="informationmodal" aria-hidden="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h6 class="heltrecodboxslcover">

        </h6>
        <div class="text-right">
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="confirm_close">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModalnewform" class="modal fade modsetformpartoadv" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title title_class">Partner With Us</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="formsetcovamodboxcov">
          <div class="form-group">
            <label>Name<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="inqr_name" name="inqr_name">
            <span class="text-danger inqr_name_err"></span>
          </div>
          <div class="form-group">
            <label>Contact No.<span class="text-danger">*</span></label>
            <input class="form-control numbers-only" type="text" id="inqr_contact_no" name="inqr_contact_no">
            <span class="text-danger inqr_contact_no_err"></span>
          </div>
          <div class="form-group">
            <label>Email<span class="text-danger">*</span></label>
            <input class="form-control" type="email" id="inqr_email" name="inqr_email">
            <span class="text-danger inqr_email_err"></span>
          </div>
          <div class="form-group">
            <label>City<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="inqr_city" name="inqr_city">
            <span class="text-danger inqr_city_err"></span>
          </div>
          <div class="form-group">
            <label>Industry type<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="inqr_industry_type" name="inqr_industry_type" placeholder="i.g. Lab, Dctor etc">
            <span class="text-danger inqr_industry_type_err"></span>
          </div>
          <div class="form-group">
            <label>Message<span class="text-danger">*</span></label>
            <textarea class="form-control" rows="" id="inqr_message" name="inqr_message"></textarea>
            <span class="text-danger inqr_message_err"></span>
          </div>
          <input type="hidden" name="inqr_types" id="inqr_types" value="0">
        </div>
        <div class="submtbtnformsetcov">
          <button class="submitbtnstyle" type="button" id="inquiry_submit">Submit</button>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->

<!-- /Main Wrapper -->
<!-- jQuery -->
<!-- <script src="https://www.medshyne.com/doctor_admin_assets/js/jquery.min.js"></script> -->

<!-- Bootstrap Core JS -->
<!-- <script src="https://www.medshyne.com/doctor_user_assets/js/popper.min.js"></script>
<script src="https://www.medshyne.com/doctor_user_assets/js/bootstrap.min.js"></script> -->
<!-- Slick JS -->
<!-- <script src="https://www.medshyne.com/doctor_user_assets/js/slick.js"></script> -->

<!-- Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- toastr js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Sticky Sidebar JS -->

<script src="https://www.medshyne.com/doctor_user_assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="https://www.medshyne.com/doctor_user_assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

<!-- Custom JS -->
<!-- <script src="https://www.medshyne.com/doctor_user_assets/js/script.js"></script> -->
<script type="text/javascript" src="https://www.medshyne.com/doctor_assets/js/select2.min.js"></script>
<!-- <script src="doctor_user_assets/js/toastr/toastr.min.js"></script> -->
<script src="https://www.medshyne.com/assets/js/jquery.firstVisitPopup.js"></script>
<script>
  /********************** Start - Ads & Partner with us code *********************/
  function myModalnewform(types) {
    if (types == 'ads') {
      $('.title_class').html('Post Your Advertisement');
      $('#inqr_types').val('1');
    } else {
      $('.title_class').html('Partner With Us');
      $('#inqr_types').val('0');
    }
    $('#myModalnewform').modal('show');
  }

  $('#inquiry_submit').click(function() {
    const name = $('#inqr_name').val();
    const contact_no = $('#inqr_contact_no').val();
    const email = $('#inqr_email').val();
    const city = $('#inqr_city').val();
    const industry_type = $('#inqr_industry_type').val();
    const message = $('#inqr_message').val();
    const types = $('#inqr_types').val();
    $('#doctor_loader').show();
    $.ajax({
      type: "post",
      url: "https://www.medshyne.com/api/inquiry",
      data: {
        'name': name,
        'contact_no': contact_no,
        'email': email,
        'city': city,
        'industry_type': industry_type,
        'message': message,
        'types': types
      },
      dataType: 'json',
      success: function(res) {
        $('#doctor_loader').hide();
        if (res.status == '0') {
          // console.log(res.msg)
          if (res.msg == 'Name is required') {
            $('#inqr_name').focus();
            $('.inqr_name_err').html(res.msg);
          } else {
            $('.inqr_name_err').html('');
          }
          if (res.msg == 'Contact number is required') {
            $('#inqr_contact_no').focus();
            $('.inqr_contact_no_err').html(res.msg);
          } else {
            $('.inqr_contact_no_err').html('');
          }
          if (res.msg == 'Email id is required') {
            $('#inqr_email').focus();
            $('.inqr_email_err').html(res.msg);
          } else {
            if (res.msg == 'Invalid email format') {
              $('#inqr_email').focus();
              $('.inqr_email_err').html(res.msg);
            } else {
              $('.inqr_email_err').html('');
            }
          }
          if (res.msg == 'City is required') {
            $('#inqr_city').focus();
            $('.inqr_city_err').html(res.msg);
          } else {
            $('.inqr_city_err').html('');
          }
          if (res.msg == 'Industry type is required') {
            $('#inqr_industry_type').focus();
            $('.inqr_industry_type_err').html(res.msg);
          } else {
            $('.inqr_industry_type_err').html('');
          }
          if (res.msg == 'Message is required') {
            $('#inqr_message').focus();
            $('.inqr_message_err').html(res.msg);
          } else {
            $('.inqr_message_err').html('');
          }
          if (res.msg == 'Minimum 15 characters is required in message.') {
            $('#inqr_message').focus();
            $('.inqr_message_err').html(res.msg);
          } else {
            $('.inqr_message_err').html('');
          }
          return false;
        } else {
          $('#inquiry_submit').attr('disabled', true);
          $('#inquiry_submit').css('pointer-events', 'none');
          $('#myModalnewform').modal('hide');

          $('#informationmodal').modal('show');
          $('.heltrecodboxslcover').html(res.msg);
        }
      }
    })
  });

  $('.numbers-only').on('keypress', function(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
    } else {
      return true;
    }
  });
  /********************** End - Ads & Partner with us code *********************/
</script>

<script type="text/javascript">
  $(function() {
    $('#popup').firstVisitPopup({
      cookieName: 'homepage',
      showAgainSelector: '#show-message'
    });
  });
  $('#askmelater-close').click(function() {
    $("#fvpp-close").trigger("click");
    $('#popup').hide();
  });
  $('#confirm_close').click(function() {
    location.reload();
  });



  
  toastr.options = {
    "closeButton": true,
    "newestOnTop": true,
    "progressBar": false,
    "positionClass": "toast-bottom-full-width",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "3000",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "slideDown",
    "hideMethod": "slideUp",
  }
</script>
<script>
  $("#search_city").keyup(function() {
    var search_city = $("#search_city").val();
    if (search_city.length >= 3) {
      $.ajax({
        type: "POST",
        dataType: "json",
        url: "https://www.medshyne.com/doctor/search/serachCity",
        data: {
          keyword: search_city
        },
        beforeSend: function() {
          $("#search_city").css("url(nxbgtvt.vn/images/image-preloader.gif) no-repeat 1px");
        },
        success: function(data) {
          $("#suggesstion-box").show();
          $("#suggesstion-box").html(data.res);
          //$("#search_city").css("");
        },
        completed: function() {
          $("#search_city").css("");
        },
      });
    } else {
      $("#suggesstion-box").hide();
      $("#suggesstion-box").html('');
    }
  });

  function select_search_city(city_id, city_name) {
    if (city_id != '') {
      $("#search_city").val(city_name);
      $("#search_city_id").val(city_id);
      $("#suggesstion-box").html("");
      $("#suggesstion-box").hide();
    }
  }

  $("#search-box").keyup(function() {
    var search_doctor = $("#search-box").val();
    var city_name = $("#search_city").val();
    //var search_city_id = $("#search_city_id").val();
    if (search_doctor.length >= 3) {
      $.ajax({
        type: "POST",
        dataType: "json",
        url: "https://www.medshyne.com/doctor/search/serachDoctor",
        data: {
          keyword: search_doctor,
          city: city_name
        },
        beforeSend: function() {
          $("#search-box").css("url(nxbgtvt.vn/images/image-preloader.gif) no-repeat 1px");
        },
        success: function(data) {
          $("#suggesstion-box").show();
          $("#suggesstion-box").html(data.res);
        },
        completed: function() {
          $("#search_city").css("");
        },
      });
    } else {
      $("#suggesstion-box").hide();
      $("#suggesstion-box").html('');
    }
  });

  $(document).mouseup(function(e) {
    var container = $("#suggesstion-box");
    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      container.hide();
      container.html('');
      //$("#search_city");
    }
  });
  $("#search-box,#search_city").on('keypress', function(e) {
    if (e.key === 'Enter' || e.keyCode === 13) {
      return false;
      //var val=$("#myUL li a").first().text();
    }
  });

  // Code provided by Google
  // function googleTranslateElementInit() {
  //   new google.translate.TranslateElement({
  //     pageLanguage: 'en',
  //     layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
  //     autoDisplay: true
  //   }, 'google_translate_element');
  // }

  function getuserinfo_qr(get_user_id) {
    $.ajax({
      type: "POST",
      url: "https://www.medshyne.com/api/profile/getuserinfo_qr",
      data: {
        platform: 'doctor',
        user_id: get_user_id
      },
      dataType: 'json',
      success: function(data) {
        $("#getuserinfo_qr").show();
        setTimeout(function() {
          $(".patientalldetailset").html(data);
        }, 600)
      }
    });
    return false;
  }
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6214b5741ffac05b1d7b166f/1fsge9lfm';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script--></body>

</html><script src="https://www.medshyne.com/doctor_user_assets/js/owl.carousel.min.js"></script>
<script type="text/javascript">
	$('#owl-carousel1').owlCarousel({
		loop: false,
		margin: 10,
		nav: true,
		navText: ['<img src="https://www.medshyne.com/doctor_user_assets/svg/left-arrow.svg" alt="Left arrow" class="leftarrowbox">', '<img src="https://www.medshyne.com/doctor_user_assets/svg/right-arrow.svg" alt="Right arrow" class="rightarrowbox">'],
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	})
	// $('#healthblogid').owlCarousel({
	// 	loop: false,
	// 	nav: true,
	// 	autoplay: false,
	// 	autoplayTimeout: 4000,
	// 	mouseDrag: false,
	// 	pagination: false,
	// 	dots: false,
	// 	navText: ['<img src="https://www.medshyne.com/assets/svg/left-arrow.svg" alt="Left arrow" class="leftarrowbox">', '<img src="https://www.medshyne.com/assets/svg/right-arrow.svg" alt="Right arrow" class="rightarrowbox">'],
	// 	item: 4,
	// 	responsive: {
	// 		0: {
	// 			items: 1,
	// 		},
	// 		390: {
	// 			items: 1,
	// 		},
	// 		420: {
	// 			items: 1,
	// 		},
	// 		520: {
	// 			items: 1
	// 		},
	// 		566: {
	// 			items: 1
	// 		},
	// 		768: {
	// 			items: 2
	// 		},
	// 		900: {
	// 			items: 2
	// 		},
	// 		992: {
	// 			items: 3
	// 		},
	// 		1200: {
	// 			items: 4
	// 		}
	// 	}
	// });

	$('#owl-carouselmobile').owlCarousel({
		loop: false,
		margin: 10,
		nav: true,
		navText: ['<img src="https://www.medshyne.com/doctor_user_assets/svg/left-arrow.svg" alt="Left arrow" class="leftarrowbox">', '<img src="https://www.medshyne.com/doctor_user_assets/svg/right-arrow.svg" alt="Right arrow" class="rightarrowbox">'],
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	})

	$('.specialization_comsetbox').owlCarousel({
		loop: false,
		margin: 10,
		nav: true,
		navText: ['<img src="https://www.medshyne.com/doctor_user_assets/svg/left-arrow.svg" alt="Left arrow" class="leftarrowbox">', '<img src="https://www.medshyne.com/doctor_user_assets/svg/right-arrow.svg" alt="Right arrow" class="rightarrowbox">'],
		responsive: {
			0: {
				items: 1
			},
			414: {
				items: 2
			},
			500: {
				items: 2
			},
			650: {
				items: 3
			},
			700: {
				items: 3
			},
			767: {
				items: 4
			},
			991: {
				items: 4
			},
			1199: {
				items: 4
			}
		}
	})

	$('.blogdesign_newdata').owlCarousel({
		loop: false,
		margin: 10,
		nav: true,
		navText: ['<img src="https://www.medshyne.com/doctor_user_assets/svg/left-arrow.svg" alt="Left arrow" class="leftarrowbox">', '<img src="https://www.medshyne.com/doctor_user_assets/svg/right-arrow.svg" alt="Right arrow" class="rightarrowbox">'],
		responsive: {
			0: {
				items: 1,
			},
			390: {
				items: 1,
			},
			420: {
				items: 1,
			},
			520: {
				items: 1
			},
			566: {
				items: 1
			},
			768: {
				items: 2
			},
			900: {
				items: 2
			},
			992: {
				items: 3
			},
			1200: {
				items: 4
			}
		}
	})

	


	$('.clinic_comsetbox').owlCarousel({
		loop: false,
		margin: 10,
		responsiveClass: true,
		// center: true,
		nav: true,
		navText: ['<img src="https://www.medshyne.com/doctor_user_assets/svg/left-arrow.svg" alt="Left arrow" class="leftarrowbox">', '<img src="https://www.medshyne.com/doctor_user_assets/svg/right-arrow.svg" alt="Right arrow" class="rightarrowbox">'],
		responsive: {
			0: {
				items: 1
			},
			400: {
				items: 2
			},
			500: {
				items: 3
			},
			767: {
				items: 4
			},
			850: {
				items: 5
			},
			1199: {
				items: 7
			}
		}
	})

	$('.doctor_comsetbox').owlCarousel({
		loop: false,
		margin: 10,
		nav: true,
		navText: ['<img src="https://www.medshyne.com/doctor_user_assets/svg/left-arrow.svg" alt="Left arrow" class="leftarrowbox">', '<img src="https://www.medshyne.com/doctor_user_assets/svg/right-arrow.svg" alt="Right arrow" class="rightarrowbox">'],
		responsive: {
			0: {
				items: 1
			},
			650: {
				items: 2
			},
			767: {
				items: 2
			},
			991: {
				items: 3
			},
			1199: {
				items: 4
			}
		}
	})

	$('.symptoms_comsetbox').owlCarousel({
		loop: false,
		margin: 10,
		nav: true,
		navText: ['<img src="https://www.medshyne.com/doctor_user_assets/svg/left-arrow.svg" alt="Left arrow" class="leftarrowbox">', '<img src="https://www.medshyne.com/doctor_user_assets/svg/right-arrow.svg" alt="Right arrow" class="rightarrowbox">'],
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			850: {
				items: 3
			},
			1199: {
				items: 4
			}
		}
	})

	$('#owl-carousel6').owlCarousel({
		loop: false,
		margin: 10,
		nav: true,
		navText: ['<img src="https://www.medshyne.com/doctor_user_assets/svg/left-arrow.svg" alt="Left arrow" class="leftarrowbox">', '<img src="https://www.medshyne.com/doctor_user_assets/svg/right-arrow.svg" alt="Right arrow" class="rightarrowbox">'],
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 5
			}
		}
	})
</script>