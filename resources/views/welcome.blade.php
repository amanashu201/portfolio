<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    
    <style>
        body { font-family: 'Arial', sans-serif; }
        .navbar { background-color: #083f6f; }
        .navbar-brand, .nav-link { color: white !important; }
        .hero { height: 95vh; display: flex; align-items: center; justify-content: center; text-align: center; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://source.unsplash.com/1600x900/?technology') no-repeat center/cover; color: white; }
        .hero h1 { font-size: 3rem; font-weight: bold; }
        
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(135deg, #1e3c72, #2a5298); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="#" style="font-size: 1.5rem; letter-spacing: 1px;">AmanBytes</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white fw-medium px-3" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-medium px-3" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-medium px-3" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-medium px-3" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    

    <!-- Hero Section with Profile Picture -->
    <!-- Hero Section -->
<!-- Hero Section -->
<section class="hero text-white" style="font-family: 'Times New Roman', Times, serif; background-color: rgb(185, 131, 30);">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-md-6">
                <h1 class="fw-bold display-4">Hi, I'm Aman Kumar</h1>
                <p>
                    Aman Kumar (born March 30, 2003) is a final year student at IIMT College of Engineering. 
                </p>
                <p>
                    A highly skilled and detail-oriented <strong>Full-Stack Web Developer</strong> with a deep passion for building cutting-edge, scalable, and efficient digital solutions. 
                    My expertise spans across <strong>MERN (MongoDB, Express.js, React, Node.js), Laravel, PHP, and MySQL</strong>, allowing me to craft dynamic, data-driven applications 
                    that provide seamless user experiences.
                </p>

                <p>
                    I thrive in creating <strong>robust backend systems</strong> and architecting intuitive <strong>front-end interfaces</strong>, ensuring a perfect blend of functionality and aesthetics. 
                    Leveraging the latest technologies, I specialize in building highly responsive web applications that prioritize <strong>performance, security, and scalability</strong>. 
                </p>

                <p>
                    As a relentless problem solver, I constantly push the boundaries of innovation, blending technical expertise with creative problem-solving. 
                    Driven by curiosity and a passion for excellence, I aspire to create impactful web applications that leave a lasting impression.
                </p>

                <div class="mt-4">
                    <a href="#contact" class="btn btn-outline-light btn-lg">Hire Me</a>
                    <a href="/resume.pdf" download class="btn btn-outline-light btn-lg">Download Resume</a>
                </div>
            </div>

            <!-- Image -->
            <div class="col-md-6 text-center">
                <img src="images/aman.jpg" alt="Aman Kumar" class="img-fluid" style="max-width: 100%; height: 650px; width: 80%;">
            </div>
        </div>
    </div>
</section>

    <!-- About Me Section -->
<section id="about" class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold text-left mb-4">About Me</h2>
        
        <div class="row">
            <!-- Left Side: Personal Information -->
            <div class="col-md-6">
                <div class="card p-4 shadow-sm">
                    <h3 class="">Personal Information</h3>
                    <ul class="list-unstyled">
                        <li><strong>Born:</strong> 30 March 2003</li>
                        <li><strong>Student:</strong> B.tech in Computer Science & Engineering</li>
                        <li><strong>College:</strong> IIMT College of Engineering, Greater Noida</li>
                        <li><strong>Affiliated to:</strong> Dr. APJ Abdul Kalam Technical University, Lucknow</li>
                        <li><strong>Current Location:</strong> Greater Noida, Uttar Pradesh</li>
                        <li><strong>Hometown:</strong> Muzaffarpur, Bihar</li>
                    </ul>
                </div>
            </div>

            <!-- Right Side: Technical Skills -->
            <div class="col-md-6">
                <div class="card p-4 shadow-sm">
                    <h3 class="">Technical Expertise</h3>
                    <ul class="list-unstyled">
                        <li><strong>Full-Stack Development:</strong> Laravel, MERN(MongoDB, Express.js, React, Node.js), PHP</li>
                        <li><strong>Programming Languages:</strong> C, C++, Java, Python, JavaScript</li>
                        <li><strong>Database Management:</strong> MySQL, MongoDB</li>
                        <li><strong>Frontend Development:</strong> HTML, CSS, Bootstrap</li>
                        <li><strong>DevOps & Cloud:</strong> API Development, Cloud Deployment, Business Management</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- More Information Link -->
        <div class="text-center mt-4">
            <a href="https://www.iimtindia.net/" target="_blank" class="btn btn-outline-primary">
                Know More About
            </a>
        </div>
    </div>
</section>



    <!-- Projects Section -->
    <section id="projects" class="py-5">
        <div class="container">
            <h2 class="text-left fw-bold">Projects</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center p-4 h-100">
                        
                        <div class="card-body">
                            <h5 class="card-title">LMS</h5>
                            <p class="card-text">An ERP system for businesses.</p>
                            <a href="#" class="gradient-btn">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center p-4 h-100">
                        
                        <div class="card-body">
                            <h5 class="card-title">Election Prediction</h5>
                            <p class="card-text">Predict election results and outcomes.</p>
                            <a href="#" class="gradient-btn">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center p-4 h-100">
                        
                        <div class="card-body">
                            <h5 class="card-title">Bharat Expedition</h5>
                            <p class="card-text">A web page to explore BHARAT.</p>
                            <a href="#" class="gradient-btn">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center mt-4 p-4 h-100">
                       
                        <div class="card-body">
                            <h5 class="card-title">SPTCONN</h5>
                            <p class="card-text">Student's Teacher's Professional's Connection.</p>
                            <a href="#" class="gradient-btn">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center mt-4 p-4 h-100">
                        
                        <div class="card-body">
                            <h5 class="card-title">School Portal</h5>
                            <p class="card-text">A web page used for PHP and MySQL.</p>
                            <a href="#" class="gradient-btn">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center mt-4 p-4 h-100">
                        
                        <div class="card-body">
                            <h5 class="card-title">Portfolio</h5>
                            <p class="card-text">A web page used for Laravel.</p>
                            <a href="#" class="gradient-btn">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <h2 class="text-left fw-bold mb-4">Technical Skills</h2>
            
            <div class="row">
                <!-- Programming Languages -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center p-4 h-100">
                        <h4 class=""><i class="fas fa-code me-2"></i> Programming Languages</h4>
                        <ul class="list-unstyled mt-3">
                            <li><a href="https://www.learn-c.org/" target="_blank">C</a></li>
                            <li><a href="https://www.learn-cpp.org/" target="_blank">C++</a></li>
                            <li><a href="https://www.learnjavaonline.org/" target="_blank">Java</a></li>
                            <li><a href="https://www.w3schools.com/python/" target="_blank">Python</a></li>
                        </ul>
                    </div>
                </div>
    
                <!-- Web Development -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center p-4 h-100">
                        <h4 class=""><i class="fas fa-globe me-2"></i> Web Development</h4>
                        <ul class="list-unstyled mt-3">
                            <li><a href="https://www.php.net/" target="_blank">PHP</a></li>
                            <li><a href="https://www.w3schools.com/html/" target="_blank">HTML</a></li>
                            <li><a href="https://www.w3schools.com/css/" target="_blank">CSS</a></li>
                            <li><a href="https://www.w3schools.com/js/" target="_blank">JavaScript</a></li>
                        </ul>
                    </div>
                </div>
    
                <!-- Frameworks & Technologies -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center p-4 h-100">
                        <h4 class=""><i class="fas fa-laptop-code me-2"></i> Frameworks & Tools</h4>
                        <ul class="list-unstyled mt-3">
                            <li><a href="https://laravel.com/" target="_blank">Laravel</a></li>
                            <li><a href="https://react.dev/" target="_blank">React.js</a></li>
                            <li><a href="https://nodejs.org/en" target="_blank">Node.js</a></li>
                            <li><a href="https://expressjs.com/" target="_blank">Express.js</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    
            <div class="row mt-4">
                <!-- Databases -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center p-4 h-100">
                        <h4 class=""><i class="fas fa-database me-2"></i> Databases</h4>
                        <ul class="list-unstyled mt-3">
                            <li><a href="https://www.mysql.com/" target="_blank">MySQL</a></li>
                            <li><a href="https://www.mongodb.com/" target="_blank">MongoDB</a></li>
                        </ul>
                    </div>
                </div>
    
                <!-- DevOps & Cloud -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center p-4 h-100">
                        <h4 class=""><i class="fas fa-server me-2"></i> DevOps & Cloud</h4>
                        <ul class="list-unstyled mt-3">
                            <li><a href="https://docs.docker.com/" target="_blank">Docker</a></li>
                            <li><a href="https://kubernetes.io/" target="_blank">Kubernetes</a></li>
                            <li><a href="https://aws.amazon.com/" target="_blank">AWS</a></li>
                        </ul>
                    </div>
                </div>
    
                <!-- Business & Management -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center p-4 h-100">
                        <h4 class=""><i class="fas fa-briefcase me-2"></i> Business & Management</h4>
                        <ul class="list-unstyled mt-3">
                            <li><a href="https://www.projectmanagement.com/" target="_blank">Project Management</a></li>
                            <li><a href="https://www.salesforce.com/" target="_blank">CRM</a></li>
                            <li><a href="https://asana.com/" target="_blank">Agile & Scrum</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    
        </div>
    </section>
    

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-left fw-bold mb-5">Contact Me</h2>
            <div class="row">
                <!-- Left Side: Contact Form -->
                <div class="col-md-6">
                    <div class="card shadow-sm border-0 p-4 h-100">
                        <form class="mt-2">
                            <div class="mb-3">
                                <label class="form-label ">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">Message</label>
                                <textarea class="form-control" name="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-light-gray btn-lg px-3 py-2">Send Message</button>


                        </form>
                    </div>
                </div>
    
                <!-- Right Side: Why Send Mail? -->
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h3 class="">Why Contact Me?</h3>
                        <p>
                            📩 <strong>Collaboration:</strong> Let's work together on innovative projects.<br>
                            🚀 <strong>Freelance Projects:</strong> Need a skilled web developer? I'm here to help.<br>
                            💡 <strong>Tech Consultation:</strong> Get insights on MERN, Laravel, ASP.NET, and more.<br>
                            🛠️ <strong>Bug Fixes & Optimization:</strong> I can help troubleshoot and improve your website.<br>
                            🌍 <strong>Networking:</strong> I'm open to tech discussions and networking opportunities.
                        </p>
                        <p class="fw-bold">Drop me a message, and I'll get back to you soon! 😊</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- Footer -->
<footer class="py-4 bg-gray text-black">
    <div class="container text-center">
        <p>&copy; 2025 Aman Kumar | All Rights Reserved.</p>
        <p class="small">This page was last edited on 18 March 2025, at 11:45 (UTC).</p>
        
        
        <div class="mt-3">
          
            <a href="#" class="text-decoration-none  me-3">Privacy Policy</a>
            <a href="#" class="text-decoration-none  me-3">About AmanBytes</a>
            <a href="#" class="text-decoration-none  me-3">Disclaimers</a>
            <a href="#" class="text-decoration-none  me-3">Contact</a>
            <a href="#" class="text-decoration-none  me-3">Developers</a>
            <a href="#" class="text-decoration-none  me-3">Statistics</a>
            <a href="#" class="text-decoration-none ">Cookie Statement</a>
        </div>
    </div>
</footer>

<!-- Bootstrap JS (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
