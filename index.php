<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata of the Webpage -->
    <!-- Character-set Metadata -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!-- Description Metadata-->
    <meta name="description" content="Portfolio Website" />
    <!-- Author Metadata -->
    <meta name="author" content="Christian Kyle Aquino" />
    <!-- Keyword Metadata -->
    <meta name="keywords" content="Christian Kyle Aquino Portfolio"/>
    <!-- Webpage Logo -->
    <link rel="shortcut icon" href="assets/favicon.ico" />
    <title>Personal Website</title>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
        <!-- Navbar -->
        <div class="nav">
            <div class="nav-title"><a href="#home">My Portfolio</a></div>
            <div class="nav-btn" onclick="toggleMenu()">☰</div>
            <div class="nav-links" id="nav-links">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#portfolio">Portfolio</a>
                <a href="#skills">Skills</a>
                <a href="#contact">Contact</a>
                <a href="#comment">Comment</a>
            </div>
        </div>

        <!-- Home Section -->
        <section id="home">
            <div class="home-container">
                <div class="home-image">
                    <img src="assets/jpg/Picture.jpg" alt="Avatar">
                </div>
                <div class="home-text">
                    <h2>Welcome to My Portfolio</h2>
                    <p>A passionate web developer creating modern and interactive experiences.</p>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="about-area" id="about">
            <div id="particles-js"></div>
            <div class="container">
                <div class="about">
                    <div class="about-content">
                        <h4>About Me</h4>
                        <ul>
                          <li> I have built a solid foundation in software development, particularly in areas such as C#, PHP, SQL, Git, and GitHub.</li>
                          <li> My expertise in these areas allows me to approach projects with confidence and deliver high-quality results. I have a strong belief in the value of continuous learning and staying adaptable in the ever-evolving world of software engineering.</li>
                          <li> I actively seek out opportunities to expand my knowledge and skills, embracing new technologies and approaches. Feel free to explore my work and get in touch if you have any questions or opportunities to collaborate. </li>
                        </ul>
                    </div>
                                      
                    <div class="about-skills">
                        <ul>
                            <li>Name: Christian Kyle Aquino</li>
                            <li>Age: 27</li>     
                            <li>From: Santa Maria, Bulacan</li>
                            <li>Email: christian.aquino53@gmail.com</li>
                            <li>Availabiltiy: Fulltime</li>
                            <li>Experience: <span id="total-experience"></span></li>
                        </ul>
                    </div>
                </div>
                   <!-- Download CV Button -->
                    <div class="cv-download">
                        <a href="./img/pdf/UpdatedResume_ChristianKyleAquino_v1.1.pdf" target="_blank" class="btn">Download CV</a>
                    </div>
            </div>
        </section>
    
        <!-- Education & Experience -->
        <section class="education-content" id="education">
            <div id="particles-snow-js"></div>
            <div class="container">
                <div class="row">
                    <div class="education">
                        <h3 class="title">Education</h3>
                        <div class="row">
                            <div class="timeline-box">
                                <div class="timeline">
    
                                    <!-- Timeline-item -->
                                    <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-title">
                                            TERTIARY SCHOOL
                                        </h3>
                                        <h3 class="timeline-title">
                                            BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY
                                        </h3>
                                        <h4 class="timeline-title">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES - SANTA MARIA, BULACAN CAMPUS</h4>
                                        <h4 class="timeline-title">
                                            <i class="fa fa-calendar"></i> 2014 - 2018
                                        </h4>
                                    </div> 
                                    <!-- Timeline-item -->
                                    <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-title">
                                            SECONDARY SCHOOL
                                        </h3>
                                        <h4 class="timeline-title">SACRED HEART ACADEMY OF STA MARIA INC</h4>
                                        <h4 class="timeline-title">
                                            <i class="fa fa-calendar"></i> 2010 - 2014
                                        </h4>
                                    </div>
                                    <!-- Timeline-item -->
                                    <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-title">
                                           PRIMARY SCHOOL
                                        </h3>
                                        <h4 class="timeline-title">SACRED HEART ACADEMY OF STA MARIA INC</h4>
                                        <h4 class="timeline-title">
                                            <i class="fa fa-calendar"></i> 2009 - 2010
                                        </h4>

                                        <h4 class="timeline-title">SANTA CLARA ELEMENTARY SCHOOL</h4>
                                        <h4 class="timeline-title">
                                            <i class="fa fa-calendar"></i> 2004 - 2009
                                        </h4>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="experience">
                        <h3 class="title">Experience</h3>
                        <div class="row">
                            <div class="timeline-box">
                                <div class="timeline">
                                    <!-- Timeline-item -->
                                    <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-title">
                                            APPLICATION SUPPORT ENGINEER - DATABASE DEVELOPER
                                        </h3>
                                        <h4 class="timeline-title">VIA APPIA TECHNOLOGY</h4>
                                        <h4 class="timeline-title">
                                            <i class="fa fa-calendar"></i> NOV 2022 - MAY 2024
                                        </h4>
                                        <li class="timeline-text">Support Programmer from checking a databases, logs, metrics,
                                            errors and etc.
                                        </li>
                                        <li class="timeline-text">Responsible for the day-to-day maintenance of the application
                                            systems in operation, including tasks related to identifying and
                                            troubleshooting application issues and issues resolution or
                                            escalation using Ticketing System.
                                        </li>
                                        <li class="timeline-text">Deployment of new updates in Outsystems.</li>
                                    </div> 
                                    <!-- Timeline-item -->
                                    <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-title">SOFTWARE ENGINEER</h3>
                                        <h4 class="timeline-title">SIMPLEVIA TECHNOLOGIES INC</h4>
                                        <h4 class="timeline-title">
                                            <i class="fa fa-calendar"></i> JUL 2021 - JUN 2022
                                        </h4>
                                        <li class="timeline-text">Develop and Design the remaining modules of Point of Sale System (with integration in
                                            Inventory and Mail Management System).</li>
                                    </div>
                                     <!-- Timeline-item -->
                                     <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-title">SOFTWARE ENGINEER</h3>
                                        <h4 class="timeline-title">QUANTUM CLOUD CORPORATION</h4>
                                        <h4 class="timeline-title">
                                            <i class="fa fa-calendar"></i> SEPT 2020 - JUN 2021
                                        </h4>
                                        <li class="timeline-text">Develop and Design a Barangay Management Website (Blotter, Documents Printing,
                                            Lupon Summon, Resident Creation Modules).</li>
                                        <li class="timeline-text">Develop and Design a Vaccination System (Web and On Premise Application).</li>
                                        <li class="timeline-text">Develop and Design the front end of Human Resources Management System.</li>
                                    </div>
                                      <!-- Timeline-item -->
                                      <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-title">WEB DEVELOPER</h3>
                                        <h4 class="timeline-title">GEODATA SOLUTIONS INC</h4>
                                        <h4 class="timeline-title">
                                            <i class="fa fa-calendar"></i> MAR 2019 - AUG 2020
                                        </h4>
                                        <li class="timeline-text">Develop and Design a Treasury Management System.</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hobbies -->
        <section class="hobbies-content" id="hobbies">
            <div class="container">
                <div class="hobbies-title">
                    <h4>My Hobbies</h4>
                    <p>Here are some of the things I love doing in my free time.</p>
                </div>
        
                <!-- Swiper Carousel -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!-- Hobby 1 -->
                        <div class="swiper-slide hobby-card">
                            <img src="https://images.unsplash.com/photo-1669023414180-4dcf35d943e1?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Coding">
                            <h4>Coding</h4>
                            <p>I enjoy solving problems and building projects in various programming languages.</p>
                        </div>
                        <!-- Hobby 2 -->
                        <div class="swiper-slide hobby-card">
                            <img src="https://images.unsplash.com/photo-1486572788966-cfd3df1f5b42?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Gaming">
                            <h4>Gaming</h4>
                            <p>I love playing competitive games and exploring new game mechanics.</p>
                        </div>
                        <!-- Hobby 3 -->
                        <div class="swiper-slide hobby-card">
                            <img src="https://images.unsplash.com/photo-1527150122806-f682d2fd8b09?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Music">
                            <h4>Music</h4>
                            <p>Listening to music is one of my favorite ways to relax.</p>
                        </div>
                        <!-- Hobby 4 -->
                        <div class="swiper-slide hobby-card">
                            <img src="https://images.unsplash.com/photo-1490040294057-084081e0a643?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Traveling">
                            <h4>Traveling</h4>
                            <p>Exploring new places and experiencing different cultures is always exciting for me.</p>
                        </div>
                       <!-- Hobby 5 -->
                        <div class="swiper-slide hobby-card">
                            <img src="https://images.unsplash.com/photo-1659367527460-92759bf33263?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGJhc2tldGJhbGwlMjBpbiUyMHRoZSUyMHBoaWxpcHBpbmVzfGVufDB8fDB8fHww" alt="Basketball">
                            <h4>Basketball</h4>
                            <p>Playing and watching basketball helps me stay active and enjoy friendly competition with friends.</p>
                        </div>

                        <!-- Hobby 6 -->
                        <div class="swiper-slide hobby-card">
                            <img src="https://images.unsplash.com/photo-1694854263084-0fe4a2f20c93?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Nature Trip">
                            <h4>Nature Trip</h4>
                            <p>Exploring nature gives me a sense of peace and appreciation for the outdoors.</p>
                        </div>

                        <!-- Hobby 7 -->
                        <div class="swiper-slide hobby-card">
                            <img src="https://images.unsplash.com/photo-1658505470097-4b7d8f67fa9a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Drone Operator">
                            <h4>Drone Flying</h4>
                            <p>Capturing stunning aerial shots with my drone allows me to see the world from a different perspective.</p>
                        </div>  

                        <!-- Hobby 8 -->
                        <div class="swiper-slide hobby-card">
                            <img src="https://images.unsplash.com/photo-1597633425046-08f5110420b5?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Animal Lover">
                            <h4>Animal Lover</h4>
                            <p>Spending time with animals brings me joy, whether it's caring for pets or observing wildlife.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Work Album Section -->
        <section class="work-area section" id="portfolio">
            <div class="container">
                <div class="work-title">
                    <h4>My Work</h4>
                    <p>Explore my projects, including freelance work and sample projects.</p>
                </div>

                <!-- Filter Buttons -->
                <div class="filter-buttons">
                    <button class="filter-btn active  font-weight-bold" data-filter="all">All</button>
                    <button class="filter-btn  font-weight-bold" data-filter="freelance">Freelance</button>
                    <button class="filter-btn  font-weight-bold" data-filter="sample">Sample Work</button>
                </div>

                <!-- Work Grid -->
                <div class="work-grid">
                    <!-- Freelance Work 1 -->
                    <div class="work-item freelance">
                        <img src="assets/jpg/12.png" alt="Freelance Project 1">
                        <div class="overlay">
                            <h4>Freelance</h4>
                            <p>Cloud-based Barangay Management System.</p>
                        </div>
                    </div>
                    <div class="work-item freelance">
                        <img src="assets/jpg/8.png" alt="Freelance Project 2">
                        <div class="overlay">
                            <h4>Freelance</h4>
                            <p>Command Center of Covid Vaccination Registration System.</p>
                        </div>
                    </div>
                    <!-- Sample Work 1 -->
                    <div class="work-item sample">
                        <img src="assets/jpg/9.png" alt="Sample Project 1">
                        <div class="overlay">
                            <h4>Sample Project</h4>
                            <p>Fun Run for a Cause.</p>
                        </div>
                    </div>
                    <a href="https://logiztic.vercel.app/" target="_blank">
                        <div class="work-item sample">
                                <img src="assets/jpg/11.png" alt="Sample Project 2">
                                <div class="overlay">
                                    <h4>Sample Project</h4>
                                    <p>Logistic Webpage.</p>
                                </div>
                        </div>
                    </a>
                    <a href="https://mathvalidatorgame.netlify.app/" target="_blank">
                        <div class="work-item sample">
                            <img src="assets/jpg/10.png" alt="Sample Project 3">
                            <div class="overlay">
                                <h4>Sample Project</h4>
                                <p>Math Validator Game.</p>
                            </div>
                        </div>
                    </a>
                    <a href="https://admirable-sprite-6eb345.netlify.app/" target="_blank">
                        <div class="work-item sample">
                            <img src="assets/jpg/14.png" alt="Sample Project 4">
                            <div class="overlay">
                                <h4>Sample Project</h4>
                                <p>Book Summary Website.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section class="skills-section" id="skills">
            
            <div class="work-title center">
                <h4>My Skills</h4>
                <p>Technical & Soft Skills with Proficiency Levels and Years of Expertise</p>
            </div>
            <div class="skills-container">
            
                <!-- Technical Skills -->
                <div class="skill-box">
                    <h3>Technical Skills</h3>
    
                    <div class="skill">
                        <div class="skill-title">
                            <span>HTML</span>
                            <span>4 Years - Advanced</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress shimmer" data-percent="95"></div>
                        </div>
                    </div>
    
                    <div class="skill">
                        <div class="skill-title">
                            <span>CSS</span>
                            <span>4 Years - Advanced</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress shimmer" data-percent="90"></div>
                        </div>
                    </div>
    
                    <div class="skill">
                        <div class="skill-title">
                            <span>JavaScript</span>
                            <span>4 Years - Advanced</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress shimmer" data-percent="85"></div>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="skill-title">
                            <span>C#</span>
                            <span>4 Years - Advanced</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress shimmer" data-percent="85"></div>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="skill-title">
                            <span>PHP</span>
                            <span>4 Years - Advanced</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress shimmer" data-percent="85"></div>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="skill-title">
                            <span>SQL</span>
                            <span>4 Years - Advanced</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress shimmer" data-percent="85"></div>
                        </div>
                    </div>
                </div>
    
                <!-- Soft Skills -->
                <div class="skill-box">
                    <h3>Soft Skills</h3>
    
                    <div class="skill">
                        <div class="skill-title">
                            <span>Communication</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress shimmer" data-percent="95"></div>
                        </div>
                    </div>
    
                    <div class="skill">
                        <div class="skill-title">
                            <span>Problem-Solving</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress shimmer" data-percent="90"></div>
                        </div>
                    </div>
    
                    <div class="skill">
                        <div class="skill-title">
                            <span>Leadership</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress shimmer" data-percent="85"></div>
                        </div>
                    </div>
                    
                    <div class="skill">
                        <div class="skill-title">
                            <span>Time Management</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress shimmer" data-percent="95"></div>
                        </div>
                    </div>
                    
                    <div class="skill">
                        <div class="skill-title">
                            <span>Adaptability </span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress shimmer" data-percent="95"></div>
                        </div>
                    </div>
                    
                    <div class="skill">
                        <div class="skill-title">
                            <span>Teamwork </span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress shimmer" data-percent="95"></div>
                        </div>
                    </div>
                </div>
    
            </div>
        </section>
        
        <!-- Contact Section -->
        <section class="contact-section section" id="contact">
                <div class="work-title">
                    <h4>Contact Me</h4>
                    <p>Any question or remarks? Just write us a message!</p>
                </div>
                <!-- Contact Info Cards -->
                <div class="contact-info">
                    <div class="contact-card">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>My Address</h3>
                        <p>Santa Clara, Santa Maria, Bulacan 3022</p>
                    </div>
                    <div class="contact-card">
                        <i class="fas fa-phone-alt"></i>
                        <h3>My Phone Number</h3>
                        <p>+639212164686 <br> +639636658228</p>
                    </div>
                    <div class="contact-card">
                        <i class="fas fa-envelope"></i>
                        <h3>My Email</h3>
                        <p><a href="mailto:christian.aquino53@gmail.com" target="_blank">christian.aquino53@gmail.com</a></p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form">
                    <div class="form-container">
                        <h2>Get in Touch</h2>
                        <p>Reach out for any inquiries, assistance, or more information you need.</p>
                        <div class="social-links">
                            <a href="https://sykey.vercel.app/" target="_blank"><i class="fa fa-cloud" alt="My Website"></i></a>
                            <a href="https://www.linkedin.com/in/christian-kyle-aquino-7833261b3/" target="_blank"><i class="fab fa-linkedin" alt="My Linked In"></i></a>
                            <a href="https://github.com/area69" target="_blank"><i class="fab fa-github" alt="My Github"></i></a>
                        </div>
                    </div>
                    <div class="form-container">
                        <form id="contactForm">
                            <div class="form-group">
                                <input type="email" id="email" name="email"  placeholder="Enter a valid email address" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="name" name="name" placeholder="Enter your Name" required>
                            </div>
                            <div class="form-group">
                                <textarea id="message" name="message"  rows="5" placeholder="Enter your message" required></textarea>
                            </div>
                            <button type="submit" class="btn-submit">Submit</button>
                            <div class="loading-spinner"></div>
                        </form>
                    </div>
                </div>
        </section>

        <!-- Comment Section -->
        <section class="comments-section last-section" id="comment">
                <div class="comment-box">
                    <h2>Leave a Comment</h2>
                    <form id="commentForm">
                        <input type="text" id="comments_name" name="comments_name" class="comments-input" placeholder="Your Name" required>
                        <textarea id="comments_comment" name="comments_comment" class="comments-textarea" placeholder="Write your comment..." required></textarea>
                        <button type="submit" class="comments-button">Submit</button>
                        <div class="comment_loading_spinner" style="display:none;">Submitting...</div>
                    </form>
                </div>

                <div class="comments-container">
                    <h2>All Comments</h2>
                    <div id="comments-list">
                        <!-- Comments will be loaded here dynamically -->
                    </div>
                    <div id="pagination-controls" class="pagination"></div>
                </div>
            </section>
        <!-- Footer -->
            <footer class="footer" id="footer">
                <p>&copy; Christian Kyle Aquino, 2025</p>
            </footer>

        <!-- Back to Top Button -->
        <button class="back-to-top" id="backToTop"><i class="fas fa-arrow-up"></i></button>

<script src="assets/js/custom.js"></script>
</body>
</html>