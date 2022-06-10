<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lanre's Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        

                    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                    <!-- <link href="/css/app.css" rel="stylesheet"> -->
                    
                    <!-- style switcher css -->
                    <link href="{{ asset('css/skins/color-1.css') }}" rel="stylesheet" type="text/css" class="alternate-style" title="color-1">
                    <link href="{{ asset('css/skins/color-2.css') }}" rel="stylesheet" type="text/css" class="alternate-style" title="color-2" disabled>
                    <link href="{{ asset('css/skins/color-3.css') }}" rel="stylesheet" type="text/css" class="alternate-style" title="color-3" disabled>
                    <link href="{{ asset('css/skins/color-4.css') }}" rel="stylesheet" type="text/css" class="alternate-style" title="color-4" disabled>
                    <link href="{{ asset('css/skins/color-5.css') }}" rel="stylesheet" type="text/css" class="alternate-style" title="color-5" disabled>
                    <!-- <link href="/css/app/.css" rel="stylesheet"> -->

                    <script src="https://kit.fontawesome.com/7f86e9340c.js"></script>
                    <script src="{{ asset('js/main.js') }}" defer></script>
                    <!-- <script src="/resources/js/main.js"></script> -->
        <style>
            /* body {
                font-family: 'Nunito', sans-serif;
            } */
        </style>
    </head>
    <body class="dark">
        <!--- preloader start -->
        <div class="preloader">
            <div class="box">
                <div></div><div></div><div></div>
            </div>
        </div>
        <!--- preloader end -->

        <!--- Header -->
        <header class="header">
            <div class="container">
                    <div class="row justify-content-between">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <!-- <img src="{{ asset('img/logo.png') }}" alt=""> -->
                                L
                            </a>
                        </div>
                        <div class="hamburger-btn outer-shadow hover-in-shadow">
                            <span></span>
                        </div>
                    </div>
            </div>
        </header>

        <!--- Navigation -->
        <nav class="nav-menu">
            <div class="close-nav-menu outer-shadow hover-in-shadow">&times;</div>
            <div class="nav-menu-inner">
                <ul>
                    <li><a href="#home" class="link-item inner-shadow active">Home</a></li>
                    <li><a href="#about" class="link-item outer-shadow hover-in-shadow">About</a></li>
                    <li><a href="#services" class="link-item outer-shadow hover-in-shadow">Services</a></li>
                    <li><a href="#portfolio" class="link-item outer-shadow hover-in-shadow">Portfolio</a></li>
                    <li><a href="#testimonial" class="link-item outer-shadow hover-in-shadow">Testimonial</a></li>
                    <li><a href="#contact" class="link-item outer-shadow hover-in-shadow">Contact</a></li>
                </ul>
            </div>

            <p class="copyright-text">&copy; 2022 L'Phi Hub</p>
        </nav>
        <div class="fade-out-effect"></div>
        <!--- Navigation menu end -->

        <!--- Main Content -->
        <section class="home-section section active" id="home">
            <!-- effect wrap start -->
            <div class="effect-wrap">
                <div class="effect effect-1">
                </div>
                <div class="effect effect-2">
                <div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                <div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                <div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                <div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                </div>
                <div class="effect effect-3"></div>
                <div class="effect effect-4"></div>
                <div class="effect effect-5">
                 <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                </div>
            </div>
            <!-- effect wrap end -->
            <div class="container">
                <div class="row full-screen align-items-center">
                    <div class="home-text">
                        <p>Hello</p>
                        <h2>I'm Lanre</h2>
                        <h1>Software Developer</h1>
                        <a href="#about" class="link-item btn-1 outer-shadow hover-in-shadow">More About Me</a>
                    </div>
                    <div class="home-img">
                        <div class="img-box inner-shadow">
                            <img src="{{asset('../pictures/propix.jpeg')}}" alt="profile pix" class="outer-shadow">
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- About Section -->
        <section class="about-section section" id="about">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2 data-heading="main info">About Me</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="about-img">
                        <div class="img-box inner-shadow">
                            <img src="../pictures/profile.jpeg" alt="About pix">
                        </div>
                        <div class="social-links">
                            <a href="https://m.facebook.com/lanre.sanni.739" target="_blank" class="outer-shadow hover-in-shadow"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/OluwaEinstein01?t=_vFS_m13tfGQ5kTYFZLDrg&s=09" target="_blank" class="outer-shadow hover-in-shadow"> <i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/sanni-lanre-686125ba" target="_blank" class="outer-shadow hover-in-shadow"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://github.com/oluwaeinstein007" target="_blank" class="outer-shadow hover-in-shadow"><i class="fab fa-github"></i></a>
                            <a href="https://alvo.chat/cm" target="_blank" class="outer-shadow hover-in-shadow"><i class="fab fa-whatsapp"></i></a>
                            <a href="sms:{08057322330}?body=Hello Lanre, I have a job for you" target="_blank" class="outer-shadow hover-in-shadow"><i class="fas fa-comment"></i></a>
                        </div>
                    </div>
                    <div class="about-info">
                        <p><span>Hi! My name is Lanre, I am a Developer</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur nihil repellendus nulla est quae suscipit harum quo dolore modi incidunt natus, quisquam officiis iste animi tempora quas. Dignissimos, nemo unde.</p>
                        <a href="{{ asset('../pictures/cv.docx') }}" class="btn-1 outer-shadow hover-in-shadow">Download CV</a>
                        <a href="#contact" class="link-item btn-1 outer-shadow hover-in-shadow">Hire Me</a>
                        <div class="codr"><img src="../pictures/MWL.svg" alt="testimonial"></div>
                    </div>
                </div>
                <!-- About Tabs -->
                <div class="row">
                    <div class="about-tab">
                        <span class="tab-item outer-shadow active" data-target=".skills">Skills</span>
                        <span class="tab-item" data-target=".experience">Experience</span>
                        <span class="tab-item" data-target=".education">Education</span>
                        <span class="tab-item" data-target=".achievement">Achievement</span>
                    </div>
                </div>
                <!-- About Tabs ends -->
                <!-- skills starts -->
                <div class="row">
                    <div class="skills tab-content active">
                        <div class="illustrate"><img src="../pictures/devWork.svg" alt="testimonial"></div>
                        <div class="row">
                        <!-- skill-items starts -->
                            <div class="skill-item">
                                <p>HTML</p>
                                <div class="progress inner-shadow">
                                    <div class="progress-bar" style="width: calc(50% - 14px)">
                                    <span>50%</span>
                                    </div>
                                </div>
                            </div>
                        
                        <!-- skill item end -->
                        <!-- skill-items starts -->
                        <div class="skill-item">
                                <p>JavaScript</p>
                                <div class="progress inner-shadow">
                                    <div class="progress-bar" style="width: calc(60% - 14px)">
                                    <span>60%</span>
                                    </div>
                                </div>
                            </div>
                        <!-- skill item end -->
                        <!-- skill-items starts -->
                            <div class="skill-item">
                                    <p>React</p>
                                    <div class="progress inner-shadow">
                                        <div class="progress-bar" style="width: calc(70% - 14px)">
                                        <span>70%</span>
                                        </div>
                                    </div>
                            </div>
                        <!-- skill item end -->
                        <!-- skill-items starts -->
                            <div class="skill-item">
                                <p>Laravel</p>
                                <div class="progress inner-shadow">
                                    <div class="progress-bar" style="width: calc(80% - 14px)">
                                    <span>80%</span>
                                    </div>
                                </div>
                            </div>
                        <!-- skill item end -->
                        <!-- skill-items starts -->
                            <div class="skill-item">
                                <p>React Native</p>
                                <div class="progress inner-shadow">
                                    <div class="progress-bar" style="width: calc(60% - 14px)">
                                    <span>60%</span>
                                    </div>
                                </div>
                            </div>
                        <!-- skill item end -->
                        <!-- skill-items starts -->
                            <div class="skill-item">
                                <p>SASS/SCSS</p>
                                <div class="progress inner-shadow">
                                    <div class="progress-bar" style="width: calc(60% - 14px)">
                                    <span>60%</span>
                                    </div>
                                </div>
                            </div>
                       
                        </div>
                            </div>
                        </div>
                         <!-- skill item end -->

                        <!-- experience start -->
                        <div class="row">
                            <div class="experience tab-content">
                                <div class="illustrate"><img src="../pictures/expert.svg" alt="testimonial"></div>
                                <div class="row">
                                    <div class="timeline">
                                        <div class="row">
                                            <!-- timeline item start -->
                                            <div class="timeline-item">
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-briefcase icon"></i>
                                                    <span>March, 2022 - Present</span>
                                                    <h3>Full Stack Web Developer</h3>
                                                    <h4>Tramango, Nigeria</h4>
                                                    <p>I worked at every stage of the development of Tramango OTA, from brainstorming and project planning to launch, and mainly working on the Backend of the OTA, creating the OTA API and implementing thirdparty APIs like Amadeus, Paystack, etc</p>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                            <!-- timeline item start -->
                                            <div class="timeline-item">                        
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-briefcase icon"></i>
                                                    <span>Dec., 2021 - Present</span>
                                                    <h3>Fullstack Web/Mobile Dev.</h3>
                                                    <h4>Balaga</h4>
                                                    <p>I led a team to develop Balaga dating app and got involed in every aspect of the development from brainstorming to launching, and mainly contributed in the Mobile App of the project</p>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                            <!-- timeline item start -->
                                            <div class="timeline-item">
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-briefcase icon"></i>
                                                    <span>April, 2021 - July, 2021</span>
                                                    <h3>Bootcamp Course Educator</h3>
                                                    <h4>Scholar Nurture</h4>
                                                    <p>I worked as Frontend Course Coordinator, developed React Roadmap, weekly accessments and projects</p>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                            <!-- timeline item start -->
                                            <div class="timeline-item">                        
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-briefcase icon"></i>
                                                    <span>July, 2020 - Present</span>
                                                    <h3>Freelancing Fullstack Web/Mobile Dev.</h3>
                                                    <h4>Al-Faruq, Nigeria. Noir labs, US. GoAhead Homes, UK</h4>
                                                    <p>I build a complete E-Learning App with payment portal for Al Faruq college in 2020 during the lockdown, worked on the Noir lab's noirportal project, and built GoAhead Homes Web. App.</p>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                        <!-- experience end -->
                        
                        <!-- education start -->
                        <div class="row">
                            <div class="education tab-content">
                            <div class="illustrate"><img src="../pictures/Learn.svg" alt="testimonial"></div>
                                <div class="row">
                                    <div class="timeline">
                                        <div class="row">
                                            <!-- timeline item start -->
                                            <div class="timeline-item">
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-graduation-cap icon"></i>
                                                    <span>2015 - Present</span>
                                                    <h3>Self-taught Programming</h3>
                                                    <h4>Youtube and Internet generally</h4>
                                                    <p>I first got into coding in 2015 learning Java on Bucky Robert's NewBoston Youtube channel, later acing a Java course in my sophomore year in OAU, then started learning web development with Traversy media and many other youtube channels and got serious in my Tech career in 2020</p>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                            <!-- timeline item start -->
                                            <div class="timeline-item">                        
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-graduation-cap icon"></i>
                                                    <span>2020 - 2021</span>
                                                    <h3>Android path, 2020. & Mobile Web, 2021.</h3>
                                                    <h4>Google Africa Developer Scholarship</h4>
                                                    <p>I was lucky to be part of the program twice and getting to second stage both times</p>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                            <!-- timeline item start -->
                                            <div class="timeline-item">
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-graduation-cap icon"></i>
                                                    <span>2016 - 2021</span>
                                                    <h3>BSc. Engineering Physics</h3>
                                                    <h4>Obafemi Awolowo University, Nigeria</h4>
                                                    <p>I studied Engineering Physics, a 4 years course, but specialized in theoretical physics, getting trained in Nuclear physics, Astrophysics, Mathematical physics, Material Science, Solidstates, Optics, Relativity, Quantum mechanics, Electromagnetism and Thermodynamics</p>
                                                    <a href="{{ asset('../pictures/cv.docx') }}" class="btn-1 outer-shadow hover-in-shadow">Download My Thesis</a>
                                                </div>
                                            </div> 
                                            </div></div></div></div>
                                            <!-- timeline item end -->
                                       
                               
                        <!-- education ends -->

                        <!-- achievement start -->
                        <div class="row">
                            <div class="achievement tab-content">
                                <div class="row">
                                    <div class="timeline">
                                        <div class="row">
                                            <!-- timeline item start -->
                                            <div class="timeline-item">
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-trophy icon"></i>
                                                    <span>2020</span>
                                                    <h3>Certificate of Participation</h3>
                                                    <h4>#BuildforSDG Challenge 2020 Class of Cohort 2</h4>
                                                    <p>I got Certificate of Participation for my part in a team of 8 Developer building our Mobile clinic entry</p>
                                                    <a href="https://storage.cloud.google.com/open-cert.appspot.com/alc/sdg/certs/fb/cohort1/sanniQudusOlanrewaju_cbb5727d-61d1-48c3-a1ad-aea957d699aa.pdf" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View My Cert.</a>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                            <!-- timeline item start -->
                                            <div class="timeline-item">                        
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-trophy icon"></i>
                                                    <span>2020</span>
                                                    <h3>Certificate of Participation</h3>
                                                    <h4>Google Africa Developer Scholarship, 2020</h4>
                                                    <p>I got Certificate of Participation for getting to the second stage of the program</p>
                                                    <a href="https://adscerts.com/scholar/B4D8202DE3C248E6" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View My Cert.</a>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                            <!-- timeline item start -->
                                            <div class="timeline-item">
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-trophy icon"></i>
                                                    <span>2018</span>
                                                    <h3>Presidential Aspirant</h3>
                                                    <h4>Department of Physics & Engineering Physics, OAU</h4>
                                                    <p>I contested to be president of PEPSA (Physics and Engineering Physics Student Association) but came in first runner-up</p>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                            <!-- timeline item start -->
                                            <div class="timeline-item">
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-trophy icon"></i>
                                                    <span>2017 - 2018</span>
                                                    <h3>Computer Coordinator</h3>
                                                    <h4>Department of Physics & Engineering Physics, OAU</h4>
                                                    <p>I was elected to be computer coordinator of PEPSA (Physics and Engineering Physics Student Association) in charge of all the computer assests of the Student Association, and I upgraded all our web pressence alongside other projects</p>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                       
                               
                        <!-- achievement ends -->
               
        </section>

        <!-- servive section  -->
        <section class="service-section section" id="services">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2 data-heading="Services">What I do</h2>
                    </div>
                </div>
                <div class="row">
                    <!-- service item start -->
                    <div class="service-item">
                        <div class="service-item-inner outer-shadow">
                            <div class="icon inner-shadow">
                                <i class="fas fa-code"></i>
                            </div>
                            <h3>Web Development</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nesciunt eos fuga. Provident perspiciatis quaerat, ab rem officia totam, reiciendis dolore consequatur dignissimos quam harum hic sapiente cupiditate suscipit iure.</p>
                        </div>
                    </div>
                    <!-- service item ends -->
                    <!-- service item start -->
                    <div class="service-item">
                        <div class="service-item-inner outer-shadow">
                            <div class="icon inner-shadow">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <h3>Web Development</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nesciunt eos fuga. Provident perspiciatis quaerat, ab rem officia totam, reiciendis dolore consequatur dignissimos quam harum hic sapiente cupiditate suscipit iure.</p>
                        </div>
                    </div>
                    <!-- service item ends -->
                    <!-- service item start -->
                    <div class="service-item">
                        <div class="service-item-inner outer-shadow">
                            <div class="icon inner-shadow">
                                <i class="fas fa-search"></i>
                            </div>
                            <h3>Web Development</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nesciunt eos fuga. Provident perspiciatis quaerat, ab rem officia totam, reiciendis dolore consequatur dignissimos quam harum hic sapiente cupiditate suscipit iure.</p>
                        </div>
                    </div>
                    <!-- service item ends -->
                    <!-- service item start -->
                    <div class="service-item">
                        <div class="service-item-inner outer-shadow">
                            <div class="icon inner-shadow">
                                <i class="fas fa-palette"></i>
                            </div>
                            <h3>Web Development</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nesciunt eos fuga. Provident perspiciatis quaerat, ab rem officia totam, reiciendis dolore consequatur dignissimos quam harum hic sapiente cupiditate suscipit iure.</p>
                        </div>
                    </div>
                    <!-- service item ends -->
                    <!-- service item start -->
                    <div class="service-item">
                        <div class="service-item-inner outer-shadow">
                            <div class="icon inner-shadow">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h3>Web Development</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nesciunt eos fuga. Provident perspiciatis quaerat, ab rem officia totam, reiciendis dolore consequatur dignissimos quam harum hic sapiente cupiditate suscipit iure.</p>
                        </div>
                    </div>
                    <!-- service item ends -->
                    <!-- service item start -->
                    <div class="service-item">
                        <div class="service-item-inner outer-shadow">
                            <div class="icon inner-shadow">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h3>Web Development</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nesciunt eos fuga. Provident perspiciatis quaerat, ab rem officia totam, reiciendis dolore consequatur dignissimos quam harum hic sapiente cupiditate suscipit iure.</p>
                        </div>
                    </div>
                    <!-- service item ends -->
                    
                </div>
            </div>
        </section>
        <!-- service ends -->

        <!-- Portfolio section starts -->
        <section class="portfolio-section section" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2 data-heading="portfolio">Latest Works</h2>
                    </div>
                </div>
                <!-- portfolio filter start -->
                <div class="row">
                    <div class="portfolio-filter">
                        <span class="filter-item outer-shadow active hover-in-shadow" data-target="all">all</span>
                        <span class="filter-item hover-in-shadow" data-target="web-application">web application</span>
                        <span class="filter-item hover-in-shadow" data-target="mobile-app">mobile app</span>
                        <span class="filter-item hover-in-shadow" data-target="e-commerce">e commerce</span>
                        <span class="filter-item hover-in-shadow" data-target="e-learning">e learning</span>
                    </div>
                </div>
                <!-- portfolio filter end -->

                <!-- portfolio items start -->
                <div class="row portfolio-items">
                    <!-- portfolio item start -->
                    <div class="portfolio-item" data-category="e-learning">
                    <div class="portfolio-item-inner outer-shadow">
                    <div class="portfolio-item-img">
                    <img src="../pictures/profile.jpeg" alt="Protfolio" data-screenshots="../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg">
                    <!-- view project btn -->
                    <span class="view-project">view project</span>
                    </div>
                    <p class="portfolio-item-title">personal portfolio</p>
                    <!-- portfolio item details start -->
                    <div class="portfolio-item-details">
                        <div class="row">
                            <div class="description">
                                <h3>Project Brief:</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore necessitatibus aliquam laboriosam eum laborum accusamus repudiandae. Asperiores numquam nostrum voluptate, illum atque fugiat cumque consequatur exercitationem possimus natus excepturi beatae.</p>
                            </div>
                            <div class="info">
                                <h3>Project Info:</h3>
                                <ul>
                                    <li>Date - <span>2020</span></li>
                                    <li>Client - <span>Balaga inc.</span></li>
                                    <li>Tools - <span>html, css, javascript</span></li>
                                    <li>Web - <span><a href="#" target="_blank" rel="noopener noreferrer">www.domain.com</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio item details ends -->
                    </div>
                    </div>
                    <!-- portfolio item end -->
                    <!-- portfolio item start -->
                    <div class="portfolio-item" data-category="e-commerce">
                    <div class="portfolio-item-inner outer-shadow">
                    <div class="portfolio-item-img">
                    <img src="../pictures/profile.jpeg" alt="Protfolio" data-screenshots="../pictures/profile.jpeg,
                    ../pictures/profile.jpeg, 
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg">
                    <!-- view project btn -->
                    <span class="view-project">view project</span>
                    </div>
                    <p class="portfolio-item-title">E Commerce</p>
                    <!-- portfolio item details start -->
                    <div class="portfolio-item-details">
                        <div class="row">
                            <div class="description">
                                <h3>Project Brief:</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore necessitatibus aliquam laboriosam eum laborum accusamus repudiandae. Asperiores numquam nostrum voluptate, illum atque fugiat cumque consequatur exercitationem possimus natus excepturi beatae.</p>
                            </div>
                            <div class="info">
                                <h3>Project Info:</h3>
                                <ul>
                                    <li>Date - <span>2020</span></li>
                                    <li>Client - <span>Balaga inc.</span></li>
                                    <li>Tools - <span>html, css, javascript</span></li>
                                    <li>Web - <span><a href="#" target="_blank" rel="noopener noreferrer">www.domain.com</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio item details ends -->
                    </div>
                    </div>
                    <!-- portfolio item end -->
                    <!-- portfolio item start -->
                    <div class="portfolio-item" data-category="web-application">
                    <div class="portfolio-item-inner outer-shadow">
                    <div class="portfolio-item-img">
                    <img src="../pictures/profile.jpeg" alt="Protfolio" data-screenshots="../pictures/profile.jpeg,
                    ../pictures/profile.jpeg, 
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg">
                    <!-- view project btn -->
                    <span class="view-project">view project</span>
                    </div>
                    <p class="portfolio-item-title">Go Ahead Homes</p>
                    <!-- portfolio item details start -->
                    <div class="portfolio-item-details">
                        <div class="row">
                            <div class="description">
                                <h3>Project Brief:</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore necessitatibus aliquam laboriosam eum laborum accusamus repudiandae. Asperiores numquam nostrum voluptate, illum atque fugiat cumque consequatur exercitationem possimus natus excepturi beatae.</p>
                            </div>
                            <div class="info">
                                <h3>Project Info:</h3>
                                <ul>
                                    <li>Date - <span>2020</span></li>
                                    <li>Client - <span>Balaga inc.</span></li>
                                    <li>Tools - <span>html, css, javascript</span></li>
                                    <li>Web - <span><a href="#" target="_blank" rel="noopener noreferrer">www.domain.com</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio item details ends -->
                    </div>
                    </div>
                    <!-- portfolio item start -->
                    
                    <!-- portfolio item start -->
                    <div class="portfolio-item" data-category="web-application">
                    <div class="portfolio-item-inner outer-shadow">
                    <div class="portfolio-item-img">
                    <img src="../pictures/profile.jpeg" alt="Protfolio" data-screenshots="../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg">
                    <!-- view project btn -->
                    <span class="view-project">view project</span>
                    </div>
                    <p class="portfolio-item-title">personal portfolio</p>
                    <!-- portfolio item details start -->
                    <div class="portfolio-item-details">
                        <div class="row">
                            <div class="description">
                                <h3>Project Brief:</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore necessitatibus aliquam laboriosam eum laborum accusamus repudiandae. Asperiores numquam nostrum voluptate, illum atque fugiat cumque consequatur exercitationem possimus natus excepturi beatae.</p>
                            </div>
                            <div class="info">
                                <h3>Project Info:</h3>
                                <ul>
                                    <li>Date - <span>2020</span></li>
                                    <li>Client - <span>Balaga inc.</span></li>
                                    <li>Tools - <span>html, css, javascript</span></li>
                                    <li>Web - <span><a href="#" target="_blank" rel="noopener noreferrer">www.domain.com</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio item details ends -->
                    </div>
                    </div>
                    <!-- portfolio item end -->
                    <!-- portfolio item start -->
                    <div class="portfolio-item" data-category="e-commerce">
                    <div class="portfolio-item-inner outer-shadow">
                    <div class="portfolio-item-img">
                    <img src="../pictures/profile.jpeg" alt="Protfolio" data-screenshots="../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg">
                    <!-- view project btn -->
                    <span class="view-project">view project</span>
                    </div>
                    <p class="portfolio-item-title">personal portfolio</p>
                    <!-- portfolio item details start -->
                    <div class="portfolio-item-details">
                        <div class="row">
                            <div class="description">
                                <h3>Project Brief:</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore necessitatibus aliquam laboriosam eum laborum accusamus repudiandae. Asperiores numquam nostrum voluptate, illum atque fugiat cumque consequatur exercitationem possimus natus excepturi beatae.</p>
                            </div>
                            <div class="info">
                                <h3>Project Info:</h3>
                                <ul>
                                    <li>Date - <span>2020</span></li>
                                    <li>Client - <span>Balaga inc.</span></li>
                                    <li>Tools - <span>html, css, javascript</span></li>
                                    <li>Web - <span><a href="#" target="_blank" rel="noopener noreferrer">www.domain.com</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio item details ends -->
                    </div>
                    </div>
                    <!-- portfolio item start -->
                    <!-- portfolio item start -->
                    <div class="portfolio-item" data-category="mobile-app">
                    <div class="portfolio-item-inner outer-shadow">
                    <div class="portfolio-item-img">
                    <img src="../pictures/profile.jpeg" alt="Protfolio" data-screenshots="../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg,
                    ../pictures/profile.jpeg">
                    <!-- view project btn -->
                    <span class="view-project">view project</span>
                    </div>
                    <p class="portfolio-item-title">personal portfolio</p>
                    <!-- portfolio item details start -->
                    <div class="portfolio-item-details">
                        <div class="row">
                            <div class="description">
                                <h3>Project Brief:</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore necessitatibus aliquam laboriosam eum laborum accusamus repudiandae. Asperiores numquam nostrum voluptate, illum atque fugiat cumque consequatur exercitationem possimus natus excepturi beatae.</p>
                            </div>
                            <div class="info">
                                <h3>Project Info:</h3>
                                <ul>
                                    <li>Date - <span>2022</span></li>
                                    <li>Client - <span>Tramango inc.</span></li>
                                    <li>Tools - <span>html, css, javascript</span></li>
                                    <li>Web - <span><a href="#" target="_blank" rel="noopener noreferrer">www.domain.com</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio item details ends -->
                    </div>
                    </div>
                    <!-- portfolio item end -->
                </div>
                <!-- portfolio items end -->
            </div>
        </section>
        <!-- Portfolio section ends -->

        <!-- Testimonial section starts -->
        <section class="testimonial-section section" id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                    <h2 data-heading="testimonial">Clients Says</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="testi-box">
                        <div class="testi-slider outer-shadow">
                            <div class="testi-slider-container">
                                <!-- testi item start -->
                                <div class="testi-item active">
                                    <img src="../pictures/propix.jpeg" alt="testimonial">
                                    <i class="fas fa-quote-left left"></i>
                                    <i class="fas fa-quote-right right"></i>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nesciunt totam consequuntur fuga dolorum sit accusantium optio minus doloremque iusto, tempora culpa nobis ducimus asperiores sapiente reprehenderit similique ut quis.</p>
                                    <span>Emmanuel Eleruja</span>
                                </div>
                                <!-- testi item end -->
                                <!-- testi item start -->
                                <div class="testi-item">
                                    <img src="../pictures/propix.jpeg" alt="testimonial">
                                    <i class="fas fa-quote-left left"></i>
                                    <i class="fas fa-quote-right right"></i>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nesciunt totam consequuntur fuga dolorum sit accusantium optio minus doloremque iusto, tempora culpa nobis ducimus asperiores sapiente reprehenderit similique ut quis.</p>
                                    <span>Emmanuel Momoh</span>
                                </div>
                                <!-- testi item end -->
                                <!-- testi item start -->
                                <div class="testi-item ">
                                    <img src="../pictures/propix.jpeg" alt="testimonial">
                                    <i class="fas fa-quote-left left"></i>
                                    <i class="fas fa-quote-right right"></i>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nesciunt totam consequuntur fuga dolorum sit accusantium optio minus doloremque iusto, tempora culpa nobis ducimus asperiores sapiente reprehenderit similique ut quis.</p>
                                    <span>Segun Akanbi</span>
                                </div>
                                <!-- testi item end -->
                                <!-- testi item start -->
                                <div class="testi-item">
                                    <img src="../pictures/propix.jpeg" alt="testimonial">
                                    <i class="fas fa-quote-left left"></i>
                                    <i class="fas fa-quote-right right"></i>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nesciunt totam consequuntur fuga dolorum sit accusantium optio minus doloremque iusto, tempora culpa nobis ducimus asperiores sapiente reprehenderit similique ut quis.</p>
                                    <span>Elon Musk</span>
                                </div>
                                <!-- testi item end -->
                            </div>
                        </div>
                        <div class="testi-slider-nav">
                            <span class="prev outer-shadow hover-in-shadow"><i class="fas fa-angle-left"></i></span>
                            <span class="next outer-shadow hover-in-shadow"><i class="fas fa-angle-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial section ends -->

        <!-- Contact section starts -->
        <section class="contact-section section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2 data-heading="contact">Get In Touch</h2>
                    </div>
                </div>
                <div class="row">
                    <!-- contact item start -->
                    <div class="contact-item">
                        <div class="contact-item-inner outer-shadow">
                            <a href="tel:{08057322330}"><i class="fas fa-phone"></i></a>
                            <span>Phone</span>
                            <p>+2348057322330</p>
                        </div>
                    </div>
                    <!-- contact item end -->
                    <!-- contact item start -->
                    <div class="contact-item">
                        <div class="contact-item-inner outer-shadow">
                            <a href="mailto:{slanre26@gmail.com}?subject=I have a job for you&body=Hello Lanre" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a>
                            <span>Email</span>
                            <p>slanre26@gmail.com</p>
                        </div>
                    </div>
                    <!-- contact item end -->
                    <!-- contact item start -->
                    <div class="contact-item">
                        <div class="contact-item-inner outer-shadow">
                            <i class="fas fa-map-marker-alt"></i>
                            <span id="address">Address</span>
                            <p>Jamiu Raji Street, Ikotun, Lagos</p>
                        </div>
                    </div>
                    <!-- contact item end -->
                </div>
                <div class="row">
                    <div class="contact-form">
                        <form action="" method="post">
                        @csrf
                            <div class="row">
                                <div class="w-50">
                                    <div class="input-group outer-shadow hover-in-shadow">
                                        <input type="text" name="name" placeholder="Name" class="input-control" required>
                                    </div>
                                    <div class="input-group outer-shadow hover-in-shadow">
                                        <input type="email" name="email" placeholder="Email" class="input-control" required>
                                    </div>
                                    <div class="input-group outer-shadow hover-in-shadow">
                                        <input type="text" name="subject" placeholder="Subject" class="input-control" required>
                                    </div>
                                    <div class="input-group outer-shadow hover-in-shadow">
                                        <input type="text" name="phone" placeholder="Phone Number" class="input-control" required>
                                    </div>
                                </div>
                                <div class="w-50">
                                    <div class="input-group outer-shadow hover-in-shadow">
                                        <textarea class="input-control" name="message" id="message" placeholder="Message" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="submit-btn">
                                    <button type="submit" class="btn-1 outer-shadow hover-in-shadow">Send Email</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section ends -->

        <div class="map">
            hello
        </div>

       <!-- Portfoli popup start -->
       <div class="pp portfolio-popup">
           <div class="pp-details">
               <div class="pp-details-inner">
                   <div class="pp-title">
                       <h2>personal portfolio</h2>
                       <p>Category - <span class="pp-project-category">Web Application</span></p>
                   </div>
                   <div class="pp-project-details">
                   <div class="row">
                            <div class="description">
                                <h3>Project Brief:</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore necessitatibus aliquam laboriosam eum laborum accusamus repudiandae. Asperiores numquam nostrum voluptate, illum atque fugiat cumque consequatur exercitationem possimus natus excepturi beatae.</p>
                            </div>
                            <div class="info">
                                <h3>Project Info:</h3>
                                <ul>
                                    <li>Date - <span>2020</span></li>
                                    <li>Client - <span>Balaga inc.</span></li>
                                    <li>Tools - <span>html, css, javascript</span></li>
                                    <li>Web - <span><a href="#" target="_blank" rel="noopener noreferrer">www.domain.com</a></span></li>
                                </ul>
                            </div>
                        </div>
                   </div>
               </div>
           </div>

           <div class="separator"></div>

           <div class="pp-main">
               <div class="pp-main-inner">
                   <div class="pp-project-details-btn outer-shadow hover-in-shadow">Project Details <i class="fas fa-plus"></i></div>
                   <div class="pp-close outer-shadow hover-in-shadow">&times;</div>
                   <img src="../pictures/profile.jpeg" alt="Portfolio img" class="pp-img outer-shadow">
                   <div class="pp-counter">1 of 6</div>
               </div>
               <div class="pp-loader">
                   <div></div>
               </div>
               <!-- pp Navigation -->
               <div class="pp-prev"><i class="fas fa-play"></i></div>
               <div class="pp-next"><i class="fas fa-play"></i></div>
           </div>
       </div>
       <!-- Portfoli popup end -->

        <!-- Style switcher start -->

        <div class="style-switcher outer-shadow">
            <div class="style-switcher-toggler s-icon outer-shadow hover-in-shadow">
               <i class="fas fa-cog fa-spin"></i>
            </div>
            <div class="day-night s-icon outer-shadow hover-in-shadow">
                <i class="fas"></i>
            </div>
            <h4>Themes</h4>
            <div class="colors">
               <span class="color-1" onclick="setActiveStyle('color-1')"></span>
               <span class="color-2" onclick="setActiveStyle('color-2')"></span>
               <span class="color-3" onclick="setActiveStyle('color-3')"></span>
               <span class="color-4" onclick="setActiveStyle('color-4')"></span>
               <span class="color-5" onclick="setActiveStyle('color-5')"></span>
            </div>


        </div>
        <!-- <div class="style-switcher outer-shadow">
           
           <div class="day-night s-icon">
           
           <div class="style-switcher-toggler colors s-icon outer-shadow hover-in-shadow">
           
           </div>
               
           </div>
       </div> -->
       <!-- Style switcher end -->




    </body>
</html>
