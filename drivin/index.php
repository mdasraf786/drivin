<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Drivin - Driving School Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <style>
    p {
        color: black; /* Optional: Increase line height for better readability */
    }
    .form-container {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Shadow for the container */
        border-radius: 10px; /* Optional: rounded corners for the container */
        padding: 20px; /* Optional: some padding for the container */
    }

    .form-floating {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Shadow for each input field */
        border-radius: 5px; /* Optional: rounded corners for input fields */
        margin-bottom: 15px; /* Optional: spacing between input fields */
    }

    .btn {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Shadow for the button */
    }
    .containerrr {
        display: flex;
        justify-content: center; /* Center the flex items horizontally */
        align-items: center; /* Center the flex items vertically */
        width: 90%; /* Maintain the width of the container */
        height: 15vh; /* Use viewport height for better centering */
        margin: auto; /* Center the container in its parent */
    }

    .stat-box {
        width: 20%; /* Set width to allow all boxes to fit in one row */
        text-align: center;
        padding: 30px; /* Increase padding for larger boxes */
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 1%; /* Maintain margin for spacing */
        height: auto; /* Allow the height to adjust based on content */
    }

    .stat-number {
        font-size: 50px; /* Increase size of the number */
        font-weight: bold;
        color: #f58220; /* Your desired orange color */
    }

    .stat-description {
        font-size: 18px; /* Increase size of the description */
        color: #003a66 !important; /* Change color for description */
        font-weight: 500; /* Normal weight for the description */
    }
</style>


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid  bg-dark text-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-map-marker-alt icon-color me-2"></small>
                <small>Road N0.2, Lahan, Siraha</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <small class="far fa-clock icon-color me-2"></small>
                <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-phone-alt icon-color me-2"></small>
                <small>+012 345 6789</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <a class="btn-square btn-link rounded-0 border-0 " href="">
                    <i class="fab fa-facebook-f icon-color"></i>
                </a>
                <a class="btn-square btn-link rounded-0 border-0 " href="">
                    <i class="fab fa-twitter icon-color"></i>
                </a>
                <a class="btn-square btn-link rounded-0 border-0 " href="">
                    <i class="fab fa-linkedin-in icon-color"></i>
                </a>
                <a class="btn-square btn-link rounded-0" href="">
                    <i class="fab fa-instagram icon-color"></i>
                </a>
            </div>
        </div>
    </div>
</div>

    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center  px-4 px-lg-5">
    <img src="img/logo2.png" alt="Logo" style="height: 150px; width: auto;">
</a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">HOME</a>
                <a href="about.html" class="nav-item nav-link">ABOUT</a>
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">STUDY ABROAD</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Austrelia</a>
                        <a href="appointment.html" class="dropdown-item">USA</a>
                        <a href="team.html" class="dropdown-item">UK</a>
                        <a href="testimonial.html" class="dropdown-item">India</a>
                        <a href="404.html" class="dropdown-item">Canada</a>
                    </div>
                </div>
                <a href="courses.html" class="nav-item nav-link">MIGRATE TO CANADA</a>
                <a href="courses.html" class="nav-item nav-link">IELTS/PTE TEST PREPARATION</a>
                <a href="contact.html" class="nav-item nav-link">CONTACT</a>
            </div>
           
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/usa.jpg" alt="Image" style="height: 800px; object-fit: cover;">
                <div class="carousel-caption custom-overlay">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-dark mb-5 animated slideInDown">Study in Top Universities</h1>
                                <a href="#" class="btn py-sm-3 px-sm-5" style="background-color: #f36522; color: white; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#003a66'; this.style.color='white';" onmouseout="this.style.backgroundColor='#f36522'; this.style.color='white';">Get Start</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat similar changes for other carousel items -->
            <div class="carousel-item">
                <img class="w-100" src="https://images.pexels.com/photos/28354752/pexels-photo-28354752/free-photo-of-a-man-and-woman-holding-a-child-in-the-air.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Image" style="height: 800px; object-fit: cover;">
                <div class="carousel-caption custom-overlay">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-dark mb-5 animated slideInDown">Migrate to Canada with Family</h1>
                                <a href="#" class="btn py-sm-3 px-sm-5" style="background-color: #f36522; color: white; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#003a66'; this.style.color='white';" onmouseout="this.style.backgroundColor='#f36522'; this.style.color='white';">Get Start</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="https://images.pexels.com/photos/27239040/pexels-photo-27239040/free-photo-of-royal-holloway-university-of-london-egham-hill-egham-surrey-united-kingdom-graduation-ceremony-17-06-2024.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Image" style="height: 800px; object-fit: cover;">
                <div class="carousel-caption custom-overlay">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-dark mb-5 animated slideInDown">Study in Us and make your future</h1>
                                <a href="#" class="btn py-sm-3 px-sm-5" style="background-color: #f36522; color: white; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#003a66'; this.style.color='white';" onmouseout="this.style.backgroundColor='#f36522'; this.style.color='white';">Get Start</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="https://images.pexels.com/photos/1184580/pexels-photo-1184580.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Image" style="height: 800px; object-fit: cover;">
                <div class="carousel-caption custom-overlay">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-dark mb-5 animated slideInDown">Study In Uk & Unlock the good Potential</h1>
                                <a href="#" class="btn py-sm-3 px-sm-5" style="background-color: #f36522; color: white; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#003a66'; this.style.color='white';" onmouseout="this.style.backgroundColor='#f36522'; this.style.color='white';">Get Start</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Previous Button -->
<button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" style="width: 40px; height: 40px; background-color: rgba(0, 0, 0, 0.5); border-radius: 50%; display: flex; align-items: center; justify-content: center; position: absolute; top: 50%; transform: translateY(-50%); left: 10px; z-index: 1;">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="border-radius: 50%; width: 100%; height: 100%;"></span>
    <span class="visually-hidden">Previous</span>
</button>

<!-- Next Button -->
<button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next" style="width: 40px; height: 40px; background-color: rgba(0, 0, 0, 0.5); border-radius: 50%; display: flex; align-items: center; justify-content: center; position: absolute; top: 50%; transform: translateY(-50%); right: 10px; z-index: 1;">
    <span class="carousel-control-next-icon" aria-hidden="true" style="border-radius: 50%; width: 100%; height: 100%;"></span>
    <span class="visually-hidden">Next</span>
</button>


    </div>
</div>

    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-custom shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                <div class="d-flex">
                    <div style="position: relative; display: inline-block;">
    <!-- Circle container with value zero -->
    <div style="position: absolute; top: -10px; right: -10px; width: 20px; height: 20px; background-color: #f36522; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; border: 1px solid #f36522;">
        0
    </div>
    <!-- Icon container with border radius -->
    <div class="flex-shrink-0 btn-lg-square" style="background-color: #003a66; border-radius: 8px; padding: 10px;">
        <i class="fa fa-file-alt text-white"></i>
    </div>
</div>
                        <div class="ps-4">
                            <h5 class="text-dark">Choose Your Destination</h5> <!-- Applied text-dark class -->
                            <span class="text-darkk">Choose your desired destination for abroad study.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-custom shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                <div class="d-flex">
                    <div style="position: relative; display: inline-block;">
    <!-- Circle container with value zero -->
    <div style="position: absolute; top: -10px; right: -10px; width: 20px; height: 20px; background-color: #f36522; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; border: 1px solid #f36522;">
        1
    </div>
    <!-- Icon container with border radius -->
    <div class="flex-shrink-0 btn-lg-square" style="background-color: #003a66; border-radius: 8px; padding: 10px;">
        <i class="fa fa-file-alt text-white"></i>
    </div>
</div>
                        <div class="ps-4">
                            <h5 class="text-dark">Process Your Document</h5> <!-- Applied text-dark class -->
                            <span class="text-darkk">Prepare the required documents and process for available Intake.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-custom shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                    <div class="d-flex">
                    <div style="position: relative; display: inline-block;">
    <!-- Circle container with value zero -->
    <div style="position: absolute; top: -10px; right: -10px; width: 20px; height: 20px; background-color: #f36522; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; border: 1px solid #f36522;">
        2
    </div>
    <!-- Icon container with border radius -->
    <div class="flex-shrink-0 btn-lg-square" style="background-color: #003a66; border-radius: 8px; padding: 10px;">
        <i class="fa fa-file-alt text-white"></i>
    </div>
</div>
                <div class="ps-4">
                            <h5 class="text-dark">Wait For Approval</h5> <!-- Applied text-dark class -->
                            <span class="text-darkk">Relax till colleges and universities take time to evaluate the applications</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Facts End -->
     


    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="https://espotinternational.com/wp-content/uploads/2024/04/about-01-new.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="https://espotinternational.com/wp-content/uploads/2024/04/about-02-new.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-orange text-uppercase mb-2">About Us</h6>
                        <h1 class="display-6 mb-4">Your One Stop Solution</h1>
                        <p>Espot International Education Consultancy guides individuals in their academic and professional journey across countries like Canada, Australia, UK, USA and India. Specializing in personalised services, we provide guidance, support and advice to the parents, students, applicants and institutions.</p>
                        <p class="mb-4">Established in 2016 and approved by Ministry of Education, Nepal, Espot International Education Consultancy excels in career counseling, University admissions and study abroad services.</p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-orange me-2"></i><strong style="color: #003a66 ;">High Visa Success Rate</strong>
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-orange me-2"></i><strong style="color: #003a66 ;">Experienced Team</strong>
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-orange me-2"></i><strong style="color: #003a66 ;">Authorized IELTS Center</strong>
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-orange me-2"></i><strong style="color: #003a66 ;">Excellent Preparation</strong>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="btn py-3 px-5" href="">Read More</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="d-inline-flex align-items-center btn  border-2 p-2" href="tel:+0123456789">
                                    <span class="flex-shrink-0 btn-square bg-text-orange">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </span>
                                    <span class="px-3">+012 345 6789</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="containerrr">
  <div class="stat-box">
    <span class="stat-number" id="experience">0+</span> <br>
    <span class="stat-description">Years of Experience</span>
  </div>
  <div class="stat-box">
    <span class="stat-number" id="destinations">0+</span><br>
    <span class="stat-description" >Study Destinations</span>
  </div>
  <div class="stat-box">
    <span class="stat-number" id="students">0+</span><br>
    <span class="stat-description">Enrolled Students</span>
  </div>
  <div class="stat-box">
    <span class="stat-number" id="colleges">0+</span><br>
    <span class="stat-description">Colleges & Universities</span>
  </div>
</div> 



    <!-- Courses Start -->
    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-orange text-uppercase mb-2">E-Sport Courses</h6>
                <h1 class="display-6 mb-4">Our Courses Upskill You With Preparation</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                        <div class="d-inline-block text-white fs-5 py-1 px-4 mb-4" style="background-color: #f36522;">$99</div>
                        <h5 class="mb-3">IELT/PTE PREPARATION</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus quibusdam, nam maiores libero porro provident officia ad. Quibusdam praesentium tenetur delectus necessitatibus, non illum pariatur error qui iure quidem nulla?</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-orange me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-orange me-2"></i>3 Week</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="https://images.pexels.com/photos/5212320/pexels-photo-5212320.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            <div class="courses-overlay">
                                <a class="btn  border-2" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                        <div class="d-inline-block text-white fs-5 py-1 px-4 mb-4" style="background-color: #f36522;">$99</div>
                            <h5 class="mb-3">JAPANES LANGAUAGE PREAPRATION</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus beatae similique amet saepe eligendi nostrum dignissimos tempore, quibusdam culpa et quasi dolores praesentium odio blanditiis maxime doloribus animi at libero?</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-orange me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-orange me-2"></i>3 Week</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="https://images.pexels.com/photos/5212338/pexels-photo-5212338.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            <div class="courses-overlay">
                                <a class="btn  border-2" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                        <div class="d-inline-block text-white fs-5 py-1 px-4 mb-4" style="background-color: #f36522;">$99</div>
                            <h5 class="mb-3">German Langauge</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur a nisi sint facere harum eveniet vel quibusdam odio at asperiores et temporibus, eum qui possimus est! Est quibusdam amet eveniet!</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="https://images.pexels.com/photos/5212329/pexels-photo-5212329.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            <div class="courses-overlay">
                                <a class="btn   text-light border-2" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 my-6 mb-0 wow fadeInUp form-container" data-wow-delay="0.1s">
    <div class="text-center p-5">
        <h1 class="mb-4">Make Appointment</h1>
        <form>
            <div class="row g-3">
                <div class="col-sm-6">
                    <div class="form-floating">
                        <input type="text" class="form-control border-0" id="gname" placeholder="Guardian Name">
                        <label for="gname">Your Name</label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-floating">
                        <input type="email" class="form-control border-0" id="gmail" placeholder="Guardian Email">
                        <label for="gmail">Your Email</label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-floating">
                        <input type="text" class="form-control border-0" id="cname" placeholder="Child Name">
                        <label for="cname">Courses Type</label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-floating">
                        <input type="text" class="form-control border-0" id="cage" placeholder="Child Age">
                        <label for="cage">Phone Number</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                        <label for="message">Message</label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-outline-light btn-dark w-100 py-3" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Features Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-orange text-uppercase mb-2">Why Choose E-Spot</h6>
                    <h1 class="display-6 mb-4">Your Journey to Global Education Excellence</h1>
                    <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square  me-3" style="background-color: #f36522;">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">High Visa Success Rate</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square  me-3" style="background-color: #f36522;">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Experienced Team</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square  me-3" style="background-color: #f36522;">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Afordable Fee</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square  me-3" style="background-color: #f36522;">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Authorized IELTS Registration Center</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="https://images.pexels.com/photos/28578851/pexels-photo-28578851/free-photo-of-serene-black-and-white-library-aisle-view.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="https://images.pexels.com/photos/5212345/pexels-photo-5212345.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" style="width: 200px; height: 200px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Meet The Team</h6>
                <h1 class="display-6 mb-4">We Have Great Experience Of Driving</h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Trainer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Testimonial</h6>
                <h1 class="display-6 mb-4">What Our Clients Say!</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-1.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-2.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-3.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Get In Touch</h4>
                    <h2 class="text-primary mb-4"><i class="fa fa-car text-white me-2"></i>Drivin</h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Popular Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg  btn-lg-square back-to-top" style="background-color: #f36522; color: white; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#003a66'; this.style.color='white';" onmouseout="this.style.backgroundColor='#f36522'; this.style.color='white';">
    <i class="bi bi-arrow-up"></i>
</a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        const experienceCounter = document.getElementById("experience");
  const destinationsCounter = document.getElementById("destinations");
  const studentsCounter = document.getElementById("students");
  const collegesCounter = document.getElementById("colleges");

  // Set the target values
  const targetExperience = 10;
  const targetDestinations = 5;
  const targetStudents = 5000; // 50k
  const targetColleges = 1000; // 100k

  // Set the increment speeds (adjust as needed)
  let experienceIncrement = 1;
  let destinationsIncrement = 1;
  let studentsIncrement = 10;
  let collegesIncrement = 5;

  // Counter function
  function updateCounter(counter, target, increment) {
    let count = 0;
    const intervalId = setInterval(() => {
      if (count < target) {
        count += increment;
        counter.textContent = count;
      } else {
        clearInterval(intervalId);
        counter.textContent = target + "+"; // Add "+" symbol after the target value
      }
    }, 10); // Adjust the interval for animation speed (in milliseconds)
  }

  // Start the counters
  updateCounter(experienceCounter, targetExperience, experienceIncrement);
  updateCounter(
    destinationsCounter,
    targetDestinations,
    destinationsIncrement
  );
  updateCounter(studentsCounter, targetStudents, studentsIncrement);
  updateCounter(collegesCounter, targetColleges, collegesIncrement);
    </script>
</body>

</html>