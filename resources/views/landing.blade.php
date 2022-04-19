<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        

                    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                    <link href="/css/app/.css" rel="stylesheet">

                    <script src="https://kit.fontawesome.com/7f86e9340c.js"></script>
                    <script src="{{ asset('js/main.js') }}" defer></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
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
                    <li><a href="{{ url('/') }}" class="inner-shadow active">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="outer-shadow hover-in-shadow">About</a></li>
                    <li><a href="{{ url('/services') }}" class="outer-shadow hover-in-shadow">Services</a></li>
                    <li><a href="{{ url('/services') }}" class="outer-shadow hover-in-shadow">Portfolio</a></li>
                    <li><a href="{{ url('/services') }}" class="outer-shadow hover-in-shadow">Testimonial</a></li>
                    <li><a href="{{ url('/contact') }}" class="outer-shadow hover-in-shadow">Contact</a></li>
                </ul>
            </div>

            <p class="copyright-text">&copy; 2022 L'Phi Hub</p>
        </nav>

        <!--- Main Content -->
        <section class="home-section section">
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
                        <a href="#" class="btn-1 outer-shadow hover-in-shadow">More About Me</a>
                    </div>
                    <div class="home-img">
                        <div class="img-box inner-shadow">
                            <img src="{{asset('/public/pictures/propix.jpeg')}}" alt="profile pix" class="outer-shadow">
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- About Section -->
        <section class="about-section section">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2 data-heading="main info">About Me</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="about-img">
                        <div class="img-box inner-shadow">
                            <img src="/public/pictures/profile.jpeg" alt="About pix">
                        </div>
                        <div class="social-links">
                            <a href="#" class="outer-shadow hover-in-shadow"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="outer-shadow hover-in-shadow"> <i class="fab fa-twitter"></i></a>
                            <a href="#" class="outer-shadow hover-in-shadow"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="outer-shadow hover-in-shadow"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="about-info">
                        <p><span>Hi! My name is Lanre, I am a Developer</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur nihil repellendus nulla est quae suscipit harum quo dolore modi incidunt natus, quisquam officiis iste animi tempora quas. Dignissimos, nemo unde.</p>
                        <a href="cv.docx" class="btn-1 outer-shadow hover-in-shadow">Download CV</a>
                        <a href="" class="btn-1 outer-shadow hover-in-shadow">Hire Me</a>
                    </div>
                </div>
                <!-- About Tabs -->
                <div class="row">
                    <div class="about-tab">
                        <span class="tab-item outer-shadow active" data-target=".skills">Skills</span>
                        <span class="tab-item" data-target=".experience">Experience</span>
                        <span class="tab-item" data-target=".education">Education</span>
                    </div>
                </div>
                <!-- About Tabs ends -->
                <!-- skills starts -->
                <div class="row">
                    <div class="skills tab-content active">
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
                        <!-- skill item end -->

                        <!-- experience start -->
                        <div class="row">
                            <div class="experience tab-content">
                                <div class="row">
                                    <div class="timeline">
                                        <div class="row">
                                            <!-- timeline item start -->
                                            <div class="timeline-item">
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-briefcase icon"></i>
                                                    <span>Sep, 2020 - Present</span>
                                                    <h3>Full Stack Developer</h3>
                                                    <h4>Company name, Nigeria</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos minima magnam distinctio quaerat fuga ad autem sapiente laboriosam odio obcaecati ullam nihil cupiditate alias quia, ducimus quae tenetur! Ullam, voluptates!</p>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                            <!-- timeline item start -->
                                            <div class="timeline-item">                        
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-briefcase icon"></i>
                                                    <span>Sep, 2020 - Present</span>
                                                    <h3>PhD. Physics</h3>
                                                    <h4>MIT, US</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos minima magnam distinctio quaerat fuga ad autem sapiente laboriosam odio obcaecati ullam nihil cupiditate alias quia, ducimus quae tenetur! Ullam, voluptates!</p>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                            <!-- timeline item start -->
                                            <div class="timeline-item">
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-briefcase icon"></i>
                                                    <span>Sep, 2020 - Present</span>
                                                    <h3>BSc. Physics</h3>
                                                    <h4>OAU, Nigeria</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos minima magnam distinctio quaerat fuga ad autem sapiente laboriosam odio obcaecati ullam nihil cupiditate alias quia, ducimus quae tenetur! Ullam, voluptates!</p>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- experience end -->
                        <!-- education start -->
                        <div class="row">
                            <div class="education tab-content">
                                <div class="row">
                                    <div class="timeline">
                                        <div class="row">
                                            <!-- timeline item start -->
                                            <div class="timeline-item">
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-graduation-cap icon"></i>
                                                    <span>Sep, 2020 - Present</span>
                                                    <h3>Full Stack Developer</h3>
                                                    <h4>Company name, Nigeria</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos minima magnam distinctio quaerat fuga ad autem sapiente laboriosam odio obcaecati ullam nihil cupiditate alias quia, ducimus quae tenetur! Ullam, voluptates!</p>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                            <!-- timeline item start -->
                                            <div class="timeline-item">                        
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-graduation-cap icon"></i>
                                                    <span>Sep, 2020 - Present</span>
                                                    <h3>Senior Developer</h3>
                                                    <h4>Company name, Nigeria</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos minima magnam distinctio quaerat fuga ad autem sapiente laboriosam odio obcaecati ullam nihil cupiditate alias quia, ducimus quae tenetur! Ullam, voluptates!</p>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                            <!-- timeline item start -->
                                            <div class="timeline-item">
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-graduation-cap icon"></i>
                                                    <span>Sep, 2020 - Present</span>
                                                    <h3>Software Developer</h3>
                                                    <h4>Company name, Nigeria</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos minima magnam distinctio quaerat fuga ad autem sapiente laboriosam odio obcaecati ullam nihil cupiditate alias quia, ducimus quae tenetur! Ullam, voluptates!</p>
                                                </div>
                                            </div>
                                            <!-- timeline item end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- education ends -->
                </div>
        </section>

       

<script src="/resources/js/main.js"></script>

<script>
    /*-------about section tabs------*/
(()=>{
    const aboutSection = document.querySelector(".about-section"),
    tabsContainer = document.querySelector('.about-tabs');
    tabsContainer.addEventListener("click", (event)=>{
        console.log(event.target);
    })
})();
</script>
    </body>
</html>
