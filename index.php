<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barry ILA | Développeur Full-Stack & Data Analyst</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    
    <style>
        :root {
            --primary: #006064;
            --primary-light: #00838f;
            --secondary: #00bcd4;
            --dark: #002f33;
            --light: #e0f7fa;
            --white: #ffffff;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            overflow-x: hidden;
            padding-top: 70px;
        }
        
        /* Header */
        header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
            top: 0;
        }
        
        .header-solid {
            background-color: var(--white) !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary);
        }
        
        .navbar-brand img {
            transition: transform 0.5s ease;
        }
        
        .navbar-brand:hover img {
            transform: rotate(360deg);
        }
        
        .nav-link {
            color: var(--dark) !important;
            font-weight: 500;
            position: relative;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary);
            bottom: 5px;
            left: 0;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        /* Hero Section */
        #acceil {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            padding: 6rem 0 4rem;
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        #acceil::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 20%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="%23e0f7fa"/><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="%23e0f7fa"/><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%23e0f7fa"/></svg>') no-repeat;
            background-size: cover;
            z-index: 1;
        }
        
        .profile-img {
            width: 100%;
            max-width: 350px;
            border: 5px solid var(--white);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            transition: all 0.5s ease;
            position: relative;
            z-index: 2;
        }
        
        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 2;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 2;
        }
        
        .hero-description {
            font-size: 1.1rem;
            line-height: 1.8;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            border-radius: 10px;
            backdrop-filter: blur(5px);
            position: relative;
            z-index: 2;
        }
        
        /* About Section */
        #propos {
            padding: 5rem 0;
            background-color: var(--light);
            position: relative;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            position: relative;
            display: inline-block;
            margin-bottom: 3rem;
            color: var(--primary);
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--primary);
            border-radius: 2px;
        }
        
        .about-card {
            background-color: var(--white);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .about-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 0;
            background: var(--primary);
            transition: height 0.6s ease;
        }
        
        .about-card:hover::before {
            height: 100%;
        }
        
        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .btn-more {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-more::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 5px;
            height: 5px;
            background: rgba(255, 255, 255, 0.5);
            opacity: 0;
            border-radius: 100%;
            transform: scale(1, 1) translate(-50%);
            transform-origin: 50% 50%;
        }
        
        .btn-more:hover::after {
            animation: ripple 1s ease-out;
        }
        
        /* Skills Section */
        .skills-container {
            background-color: var(--white);
            padding: 5rem 0;
            position: relative;
        }
        
        .skill-category {
            margin-bottom: 3rem;
            position: relative;
        }
        
        .skill-category-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--primary);
            display: flex;
            align-items: center;
            position: relative;
        }
        
        .skill-category-title i {
            margin-right: 0.8rem;
            font-size: 1.8rem;
        }
        
        .skill-item {
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .progress {
            height: 8px;
            background-color: #e2e8f0;
            border-radius: 4px;
            overflow: hidden;
        }
        
        .progress-bar {
            background-color: var(--primary);
            border-radius: 4px;
            transition: width 1.5s ease;
        }
        
        /* Projects Section */
        #projets {
            padding: 5rem 0;
            background-color: var(--primary-light);
            color: white;
            position: relative;
        }
        
        .project-card {
            background-color: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            color: var(--dark);
            margin: 15px;
            position: relative;
        }
        
        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 188, 212, 0.3), rgba(0, 96, 100, 0.3));
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .project-card:hover::before {
            opacity: 1;
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .project-image {
            height: 200px;
            overflow: hidden;
            position: relative;
        }
        
        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .project-card:hover .project-image img {
            transform: scale(1.1);
        }
        
        .project-content {
            padding: 1.5rem;
            position: relative;
        }
        
        .project-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--primary);
        }
        
        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin: 1rem 0;
        }
        
        .tech-tag {
            background-color: #e0e7ff;
            color: var(--primary);
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .tech-tag:hover {
            background-color: var(--primary);
            color: white;
        }
        
        /* Contact Section */
        #contact {
            padding: 5rem 0;
            background-color: var(--light);
            position: relative;
        }
        
        .contact-card {
            background-color: var(--white);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: all 0.3s ease;
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .contact-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            background-color: #e0e7ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.2rem;
            margin-right: 1rem;
            transition: all 0.3s ease;
        }
        
        .contact-info-item:hover .contact-icon {
            background-color: var(--primary);
            color: white;
            transform: rotate(15deg);
        }
        
        .form-control {
            border-radius: 5px;
            padding: 0.8rem 1rem;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, 0.25);
        }
        
        /* Footer */
        #footer {
            background-color: var(--dark);
            color: white;
            padding: 3rem 0 0;
            position: relative;
        }
        
        .footer-logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 1.5rem;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .footer-logo:hover {
            color: var(--secondary);
            transform: scale(1.05);
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .footer-links a {
            color: var(--white);
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .footer-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--secondary);
            bottom: -5px;
            left: 0;
            transition: width 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--secondary);
        }
        
        .footer-links a:hover::after {
            width: 100%;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .social-links a {
            color: var(--white);
            font-size: 1.5rem;
            transition: all 0.3s ease;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .social-links a:hover {
            color: var(--white);
            background-color: var(--secondary);
            transform: translateY(-3px);
        }
        
        .copyright {
            padding: 1.5rem 0;
            background-color: rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        
        /* Animations */
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        @keyframes shake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-5px); }
            100% { transform: translateX(0); }
        }
        
        @keyframes ripple {
            0% {
                transform: scale(0, 0);
                opacity: 1;
            }
            20% {
                transform: scale(25, 25);
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: scale(40, 40);
            }
        }
        
        @keyframes progress-animation {
            from { width: 0%; }
            to { width: attr(data-width); }
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.3rem;
            }
            
            #acceil {
                padding: 8rem 0 4rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
                text-align: center;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
                text-align: center;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .profile-img {
                max-width: 250px;
                margin: 0 auto 2rem;
            }
            
            #acceil {
                padding: 7rem 0 3rem;
            }
            
            .btn-more, .btn {
                width: 100%;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="img/barry.png" width="40" height="40" alt="Logo" class="d-inline-block align-top mr-2">
                    Barry ILA
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#acceil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#propos">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#competences">Compétences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projets">Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="acceil">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                    <div class="text-center floating">
                        <img src="img/barry1.png" alt="Barry ILA" class="profile-img pulse">
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                    <h1 class="hero-title">ILA BARRY</h1>
                    <h2 class="hero-subtitle">Développeur Full-Stack & Data Analyst</h2>
                    <div class="hero-description">
                        <p>
                            Développeur web passionné par la création d'interfaces utilisateurs intuitives et d'applications sécurisées. 
                            Spécialisé dans les technologies modernes avec une expertise en traitement de données avancées. 
                            Capacité à travailler en équipe et à m'adapter aux nouvelles technologies.
                        </p>
                    </div>
                    <div class="mt-4">
                        <a href="#projets" class="btn btn-primary btn-lg mr-3 shake">Voir mes projets</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg shake">Me contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="propos">
        <div class="container">
            <h2 class="text-center section-title" data-aos="zoom-in">Qui suis-je ?</h2>
            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="about-card">
                        <p>
                            Je suis <strong>ILA BARRY</strong>, né en Haute Casamance (Sénégal). Après un parcours scolaire complet (primaire à lycée), j'ai obtenu mon BAC au lycée Général De Gaulle à Saint-Louis.
                        </p>
                        <p>
                            Actuellement étudiant en Développement d'Applications à l'Université Numérique Cheikh Hamidou Kane, je me spécialise dans les technologies web et mobiles. J'ai complété ma formation par un programme intensif en développement Full-Stack au Centre de Formation Académique Les Tutoriels.
                        </p>
                        <button class="btn-more" id="btn">Voir plus</button>
                    </div>
                </div>
                <div class="col-lg-6 mb-4" data-aos="fade-left" data-aos-delay="200">
                    <div id="afiche" class="about-card" style="display: flex;">
                        <p>
                            Mon parcours atypique, alliant études traditionnelles et formation intensive en informatique, m'a doté d'une grande capacité d'adaptation. Passionné par la technologie et le football, je combine rigueur technique et esprit d'équipe.
                       
                            En plus de mes compétences en développement, j'ai suivi une formation avancée en traitement de données (Excel, Power Query, Power Pivot) qui me permet d'analyser et visualiser efficacement des données complexes. <br><br>
                        <button class="btn-more" id="btnimg">Voir mon parcours</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="competences" class="skills-container">
        <div class="container">
            <h2 class="text-center section-title" data-aos="zoom-in">Mes Compétences Techniques</h2>
            
            <div class="row">
                <!-- Langages -->
                <div class="col-md-4" data-aos="flip-left" data-aos-delay="100">
                    <div class="skill-category">
                        <h3 class="skill-category-title"><i class="fas fa-code"></i> Langages</h3>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>HTML5</span>
                                <span>100%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" data-width="100%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>CSS3</span>
                                <span>85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" data-width="85%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>JavaScript</span>
                                <span>80%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-width="80%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>PHP</span>
                                <span>95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" data-width="95%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>SQL</span>
                                <span>95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" data-width="95%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Frameworks -->
                <div class="col-md-4" data-aos="flip-left" data-aos-delay="200">
                    <div class="skill-category">
                        <h3 class="skill-category-title"><i class="fas fa-layer-group"></i> Frameworks</h3>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>Bootstrap</span>
                                <span>100%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" data-width="100%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>Angular</span>
                                <span>95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" data-width="95%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>Laravel</span>
                                <span>95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" data-width="95%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>jQuery</span>
                                <span>85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" data-width="85%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Traitement de données -->
                <div class="col-md-4" data-aos="flip-left" data-aos-delay="300">
                    <div class="skill-category">
                        <h3 class="skill-category-title"><i class="fas fa-database"></i> Data Analysis</h3>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>Excel Avancé</span>
                                <span>95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" data-width="95%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>Power Query</span>
                                <span>80%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-width="80%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>Power Pivot</span>
                                <span>80%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-width="80%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>MySQL</span>
                                <span>93%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" data-width="93%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projets">
        <div class="container">
            <h2 class="text-center section-title text-white" data-aos="zoom-in">Mes Projets</h2>
            
            <div class="projects-slider">
                <div class="project-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="project-image">
                        <img src="img/projet_tele.jpg" alt="OuzTV">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">OuzTV - Plateforme de gestion</h3>
                        <p class="card-text">Solution complète pour la gestion des émissions télévisées et le suivi des journalistes avec système de pointage automatisé.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Angular</span>
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">MySQL</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-2">Voir le projet</a>
                    </div>
                </div>
                
                <div class="project-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="project-image">
                        <img src="img/projet_voyage.jpg" alt="Sénégal Transport">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Sénégal Transport</h3>
                        <p class="card-text">Plateforme de réservation de billets pour les transports inter-régionaux avec système de paiement en ligne sécurisé.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Bootstrap</span>
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">JavaScript</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-2">Voir le projet</a>
                    </div>
                </div>
                
                <div class="project-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="project-image">
                        <img src="img/projet_resto.jpg" alt="Resto Bien-Être">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Resto Bien-Être</h3>
                        <p class="card-text">Site web complet pour restaurant avec système de réservation en ligne, menu digital et gestion des commandes.</p>
                        <div class="project-tech">
                            <span class="tech-tag">HTML5</span>
                            <span class="tech-tag">CSS3</span>
                            <span class="tech-tag">jQuery</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-2">Voir le projet</a>
                    </div>
                </div>
                
                <div class="project-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="project-image">
                        <img src="https://via.placeholder.com/400x200?text=Dashboard+Data" alt="Dashboard Data">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Dashboard Analytique</h3>
                        <p class="card-text">Tableau de bord interactif pour l'analyse de données avec Power Query et Power Pivot.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Excel</span>
                            <span class="tech-tag">Power Query</span>
                            <span class="tech-tag">Power Pivot</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-2">Voir le projet</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="text-center section-title" data-aos="zoom-in">Contactez-moi</h2>
            
            <div class="row">
                <div class="col-lg-5 mb-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="contact-card">
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h4>Téléphone</h4>
                                <p>+221 78 324 94 24</p>
                                <p>+221 70 736 49 86</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4>Email</h4>
                                <p>barryila20@gmail.com</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4>Adresse</h4>
                                <p>Saint-Louis, Sénégal</p>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <h4>Réseaux sociaux</h4>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- partie dans votre section contact -->
                <div class="col-lg-7 mb-4" data-aos="fade-left" data-aos-delay="200">
                    <div class="contact-card">
                        <form id="contactForm" action="send_email.php" method="POST">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="prenom">Prénom</label>
                                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="nom">Nom de famille</label>
                                    <input type="text" class="form-control" id="nom" name="nom" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Adresse email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="sujet">Sujet</label>
                                <input type="text" class="form-control" id="sujet" name="sujet" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-block">Envoyer le message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <a href="#" class="footer-logo">Barry ILA</a>
                
                <div class="footer-links">
                    <a href="#acceil">Accueil</a>
                    <a href="#propos">À propos</a>
                    <a href="#competences">Compétences</a>
                    <a href="#projets">Projets</a>
                    <a href="#contact">Contact</a>
                </div>
                
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="copyright">
                <p class="mb-0">&copy; 2024 Barry ILA. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Slick Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    
    <script>
        // Initialiser AOS
        AOS.init({
            duration: 800,
            easing: 'ease-out-quad',
            once: true,
            mirror: false
        });
        
        // Initialiser le slider
        $(document).ready(function(){

            $('.projects-slider').slick({
                dots: true,
                infinite: true,
                speed: 800,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                cssEase: 'ease-out',
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            // const urlParams = new URLSearchParams(window.location.search);
            // const status = urlParams.get('status');
            
            // if (status === 'success') {
            //     alert('Message envoyé avec succès!');
            //     // Nettoyer l'URL
            //     window.history.replaceState({}, document.title, window.location.pathname);
            // } else if (status === 'error') {
            //     const errorMessage = urlParams.get('message');
            //     alert('Erreur lors de l\'envoi du message: ' + errorMessage);
            //     window.history.replaceState({}, document.title, window.location.pathname);
            // }

        });
        // Animation du header au scroll
        window.addEventListener('scroll', function() {
            const header = document.getElementById('navbar');
            if (window.scrollY > 100) {
                header.classList.add('header-solid');
            } else {
                header.classList.remove('header-solid');
            }
        });
        
        // Animation des barres de compétences
        function animateSkills() {
            const skillsSection = document.querySelector('.skills-container');
            const skillBars = document.querySelectorAll('.progress-bar');
            const skillsSectionTop = skillsSection.offsetTop;
            const windowHeight = window.innerHeight;
            
            window.addEventListener('scroll', function() {
                if (window.scrollY > skillsSectionTop - windowHeight + 200) {
                    skillBars.forEach(bar => {
                        const width = bar.getAttribute('aria-valuenow');
                        bar.style.width = width + '%';
                    });
                }
            });
        }
        
        animateSkills();
        
        // Animation des cartes au scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.about-card, .project-card, .contact-card');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;
                
                if(elementPosition < screenPosition) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        };
        
        // Initial state
        document.querySelectorAll('.about-card, .project-card, .contact-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease-out';
        });
        
        window.addEventListener('scroll', animateOnScroll);
        animateOnScroll(); // Trigger une fois au chargement
        
        // Smooth scrolling pour tous les liens
        $('a[href*="#"]').on('click', function(e) {
            e.preventDefault();
            
            $('html, body').animate(
                {
                    scrollTop: $($(this).attr('href')).offset().top - 70,
                },
                500,
                'linear'
            );
        });
        
        // Gestion du formulaire de contact
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Ici vous pourriez ajouter le code pour envoyer le formulaire
            alert('Message envoyé avec succès!');
            this.reset();
        });
    </script>
</body>
</html>