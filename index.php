<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barry ILA | Développeur Full-Stack & Analyste de Données</title>
    <link rel="icon" type="image" href="img/barry-copie.png">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>

        :root {
            --primary: #2563eb; /* Bleu moderne */
            --primary-dark: #1e40af;
            --primary-light: #3b82f6;
            --dark: #1f2937;
            --light: #f9fafb;
            --white: #ffffff;
            --dark-mode-bg: #111827;
            --dark-mode-card: #1f2937;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--dark);
            background-color: var(--light);
            overflow-x: hidden;
            padding-top: 80px;
            transition: all 0.3s ease;
        }
        
        body.dark-mode {
            background-color: var(--dark-mode-bg);
            color: #e5e7eb;
        }
        
        /* Header */
        header {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); */
            position: fixed;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
            top: 0;
        }
        
        .dark-mode header {
            background-color: rgba(17, 24, 39, 0.95);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary);
            display: flex;
            align-items: center;
        }
        
        .dark-mode .navbar-brand {
            color: var(--primary-light);
        }
        
        .navbar-brand img {
            margin-right: 10px;
            transition: transform 0.5s ease;
        }
        
        .navbar-brand:hover img {
            transform: rotate(360deg);
        }
        
        .nav-link {
            font-weight: 500;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
            color: var(--dark) !important;
            position: relative;
        }
        
        .dark-mode .nav-link {
            color: #e5e7eb !important;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        /* Dark Mode Toggle */
        .dark-mode-toggle {
            background: transparent;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            color: var(--dark);
            transition: all 0.3s ease;
        }
        
        .dark-mode .dark-mode-toggle {
            color: #e5e7eb;
        }
        
        /* Hero Section */
        #hero {
            min-height: 90vh;
            display: flex;
            align-items: center;
            padding: 2rem 0;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .dark-mode #hero {
            background: linear-gradient(135deg, var(--dark-mode-card), var(--dark-mode-bg));
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            font-weight: 400;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .hero-description {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 2.5rem;
            max-width: 600px;
        }
        
        .hero-img-container {
            position: relative;
            display: flex;
            justify-content: center;
        }
        
        .hero-img {
            width: 100%;
            max-width: 350px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            transition: all 0.5s ease;
            border: 5px solid rgba(255, 255, 255, 0.1);
        }
        
        .dark-mode .hero-img {
            border-color: rgba(255, 255, 255, 0.2);
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            padding: 0.75rem 1.75rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
        }
        
        .btn-outline-light {
            border-radius: 8px;
            padding: 0.75rem 1.75rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-outline-light:hover {
            transform: translateY(-2px);
        }

        /* Hero Freelance Badge */
        #hero .badge {
            font-size: 0.9rem;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1px;
            animation: pulse 2s infinite;
        }

        .dark-mode #hero .badge {
            background-color: var(--primary-light) !important;
            color: white !important;
        }

        /* Freelance info */
        .freelance-info {
            background: rgba(255, 255, 255, 0.1);
            padding: 1rem;
            border-radius: 8px;
            max-width: 90%;
        }

        .dark-mode .freelance-info {
            background: rgba(255, 255, 255, 0.05);
        }

        /* Animation pulsation */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        /* About Section */
        #about {
            padding: 5rem 0;
            background-color: var(--light);
        }
        
        .dark-mode #about {
            background-color: var(--dark-mode-bg);
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            color: var(--primary);
            position: relative;
            display: inline-block;
        }
        
        .dark-mode .section-title {
            color: var(--primary-light);
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
        
        .dark-mode .section-title::after {
            background: var(--primary-light);
        }
        
        .about-card {
            background-color: var(--white);
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .dark-mode .about-card {
            background-color: var(--dark-mode-card);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 255, 255, 0.05);
        }
        
        .about-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .dark-mode .about-card:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        /* Services Section */
        #services {
            padding: 5rem 0;
            background-color: var(--white);
        }

        .dark-mode #services {
            background-color: var(--dark-mode-card);
        }

        .service-icon {
            color: var(--primary);
            transition: all 0.3s ease;
        }

        .dark-mode .service-icon {
            color: var(--primary-light);
        }

        .service-card:hover .service-icon {
            transform: scale(1.1);
        }

        .service-card ul {
            padding-left: 0;
        }

        .service-card li {
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
        }
        
        /* Skills Section */
        #skills {
            padding: 5rem 0;
            background-color: var(--white);
        }
        
        .dark-mode #skills {
            background-color: var(--dark-mode-card);
        }
        
        .skill-category {
            margin-bottom: 3rem;
        }
        
        .skill-category-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--primary);
            display: flex;
            align-items: center;
        }
        
        .dark-mode .skill-category-title {
            color: var(--primary-light);
        }
        
        .skill-category-title i {
            margin-right: 0.8rem;
            font-size: 1.5rem;
        }
        
        .skill-item {
            margin-bottom: 1.5rem;
        }
        
        .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .progress {
            height: 8px;
            background-color: #e5e7eb;
            border-radius: 4px;
            overflow: hidden;
        }
        
        .dark-mode .progress {
            background-color: #374151;
        }
        
        .progress-bar {
            background-color: var(--primary);
            border-radius: 4px;
            transition: width 1.5s ease;
        }
        
        /* Projects Section */
        #projects {
            padding: 5rem 0;
            background-color: var(--light);
        }
        
        .dark-mode #projects {
            background-color: var(--dark-mode-bg);
        }
        
        .project-card {
            background-color: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .dark-mode .project-card {
            background-color: var(--dark-mode-card);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 255, 255, 0.05);
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .dark-mode .project-card:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }
        
        .project-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
            transition: transform 0.5s ease;
        }
        
        .project-card:hover .project-img {
            transform: scale(1.05);
        }
        
        .project-content {
            padding: 1.5rem;
        }
        
        .project-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--primary);
        }
        
        .dark-mode .project-title {
            color: var(--primary-light);
        }
        
        .project-description {
            color: #6b7280;
            margin-bottom: 1rem;
        }
        
        .dark-mode .project-description {
            color: #9ca3af;
        }
        
        .tech-badge {
            display: inline-block;
            background-color: #e0e7ff;
            color: var(--primary);
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .dark-mode .tech-badge {
            background-color: rgba(59, 130, 246, 0.2);
            color: var(--primary-light);
        }
        
        /* Contact Section */
        #contact {
            padding: 5rem 0;
            background-color: var(--white);
        }
        
        .dark-mode #contact {
            background-color: var(--dark-mode-card);
        }
        
        .contact-card {
            background-color: var(--light);
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: 100%;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .dark-mode .contact-card {
            background-color: var(--dark-mode-bg);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 255, 255, 0.05);
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
        
        .dark-mode .contact-icon {
            background-color: rgba(59, 130, 246, 0.2);
            color: var(--primary-light);
        }
        
        .contact-info-item:hover .contact-icon {
            background-color: var(--primary);
            color: white;
            transform: rotate(15deg);
        }
        
        .dark-mode .contact-info-item:hover .contact-icon {
            background-color: var(--primary-light);
        }
        
        .form-control {
            border-radius: 8px;
            padding: 0.8rem 1rem;
            border: 1px solid #e5e7eb;
            transition: all 0.3s ease;
            background-color: var(--white);
        }
        
        .dark-mode .form-control {
            background-color: var(--dark-mode-card);
            border-color: #374151;
            color: #e5e7eb;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.25);
        }
        
        .dark-mode .form-control:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 0.2rem rgba(59, 130, 246, 0.25);
        }
        
        /* Footer */
        #footer {
            background-color: var(--dark);
            color: white;
            padding: 3rem 0 0;
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
            color: var(--primary-light);
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
            background: var(--primary-light);
            bottom: -5px;
            left: 0;
            transition: width 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--primary-light);
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
            font-size: 1.2rem;
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
            background-color: var(--primary-light);
            transform: translateY(-3px);
        }
        
        .copyright {
            padding: 1.5rem 0;
            background-color: rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.3rem;
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
            
            .hero-description {
                text-align: center;
                margin-left: auto;
                margin-right: auto;
            }
            
            .hero-buttons {
                justify-content: center;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .hero-img {
                max-width: 120px;
                margin-bottom: 1rem;
            }
        }
        
        @media (max-width: 576px) {
            body {
                padding-top: 70px;
            }
            
            .hero-title {
                font-size: 1.8rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .btn {
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
                    <img src="img/logo.png" width="40" height="40" alt="Logo Barry ILA" class="d-inline-block align-top">
                    ILA Barry 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#hero">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Mes revices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">Compétences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <button class="dark-mode-toggle ms-3" id="darkModeToggle">
                        <i class="fas fa-moon"></i>
                    </button>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
        <section id="hero">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <span class="badge bg-light text-dark mb-3">Freelance Disponible</span>
                        <h1 class="hero-title">ILA Barry</h1>
                        <h2 class="hero-subtitle">Développeur Full-Stack Freelance & Analyste de Données</h2>
                        <p class="hero-description">
                            Je crée des solutions web sur mesure pour les entreprises et particuliers. 
                            <strong>Disponible pour des missions en freelance</strong>, je combine expertise technique 
                            et approche personnalisée pour répondre à vos besoins digitaux.
                        </p>
                        <div class="d-flex flex-wrap hero-buttons">
                            <a href="#contact" class="btn btn-primary me-3 mb-3">
                                <i class="fas fa-calendar-check me-2"></i>Disponibilités
                            </a>
                            <a href="cv complet/index.html" target="_blank" class="btn btn-outline-light mb-3">
                                <i class="fas fa-file-alt me-2"></i>Voir mon CV
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="hero-img-container">
                            <img src="img/propos-removebg-preview.png" alt="Photo de Barry ILA - Développeur Freelance" class="hero-img">
                        </div>
                        <div class="freelance-info mt-2">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Disponible pour des missions courtes ou longues durées</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Travail à distance ou sur Saint-Louis et environs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h2 class="text-center section-title" data-aos="zoom-in">À propos de moi</h2>
            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="about-card">
                        <h3 class="mb-3">Mon parcours</h3>
                        <p>
                            Je suis <strong>ILA Barry</strong>, né en Haute Casamance (Sénégal). Après un parcours scolaire complet (primaire à lycée), j'ai obtenu mon BAC au lycée Charlles De Gaulle à Saint-Louis.
                        </p>
                        <p>
                            Actuellement étudiant en Développement d'Applications à l'Université Numérique Cheikh Hamidou Kane, je me spécialise dans les technologies web et mobiles. J'ai complété ma formation par un programme intensif en développement Full-Stack au Centre de Formation Académique Les Tutoriels.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="about-card">
                        <h3 class="mb-3">Mes atouts</h3>
                        <p>
                            Mon parcours atypique, alliant études traditionnelles et formation intensive en informatique, m'a doté d'une grande capacité d'adaptation. Passionné par la technologie et le football, je combine rigueur technique et esprit d'équipe.
                        </p>
                        <p>
                            En plus de mes compétences en développement, j'ai suivi une formation avancée en traitement de données (Excel, Power Query, Power Pivot) qui me permet d'analyser et visualiser efficacement des données complexes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-2 bg-white">
        <div class="container">
            <h2 class="text-center section-title" data-aos="zoom-in">Services Professionnels</h2>
            <p class="text-center mb-4 fs-5" data-aos="fade-up">Solutions techniques clés en main pour startups et PME</p>
            
            <div class="row g-4">
                <!-- Service 1 - Développement -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card about-card h-100 d-flex flex-column">
                        <div>
                            <div class="service-icon mb-3">
                                <i class="fas fa-laptop-code fa-3x text-primary"></i>
                            </div>
                            <h3 class="mb-3">Développement Sur Mesure</h3>
                            <p class="text-muted">
                                Applications web performantes adaptées à vos processus métiers.
                            </p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                                    <span>Sites vitrines & boutiques en ligne</span>
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                                    <span>Systèmes de gestion (CRM, ERP simplifiés)</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                                    <span>Intégration d'APIs externes</span><br>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto pt-3 border-top">
                            <p class="small text-primary fw-bold mb-1">À partir de 300 000 FCFA</p>
                            <p class="small text-muted">Livraison en 2-4 semaines</p>
                        </div>
                    </div>
                </div>
                
                <!-- Service 2 - Data -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="service-card about-card h-100 d-flex flex-column">
                        <div>
                            <div class="service-icon mb-3">
                                <i class="fas fa-chart-line fa-3x text-primary"></i>
                            </div>
                            <h3 class="mb-3">Automatisation Data</h3>
                            <p class="text-muted">
                                Transformez vos fichiers Excel en outils décisionnels.
                            </p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                                    <span>Rapports automatisés (Power Query)</span>
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                                    <span>Tableaux de bord Excel/Power BI</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                                    <span>Migration Excel → Base de données</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto pt-3 border-top">
                            <p class="small text-primary fw-bold mb-1">À partir de 150 000 FCFA</p>
                            <p class="small text-muted">Premiers résultats en 48h</p>
                        </div>
                    </div>
                </div>
                
                <!-- Service 3 - Maintenance -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card about-card h-100 d-flex flex-column">
                        <div>
                            <div class="service-icon mb-3">
                                <i class="fas fa-shield-alt fa-3x text-primary"></i>
                            </div>
                            <h3 class="mb-3">Optimisation Technique</h3>
                            <p class="text-muted">
                                Améliorez votre application existante.
                            </p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                                    <span>Audit de performance et sécurité</span>
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                                    <span>Correction de bugs urgents</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                                    <span>Formation utilisateurs/admin</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto pt-3 border-top">
                            <p class="small text-primary fw-bold mb-1">Forfait journalier : 75 000 FCFA</p>
                            <p class="small text-muted">Intervention rapide</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4" data-aos="fade-up">
                <div class="d-inline-block bg-light rounded-pill px-4 py-2 mb-3">
                    <p class="mb-0 small text-muted">
                        <i class="fas fa-star text-warning me-1"></i> 
                        <strong>30% de réduction</strong> sur ton premier projet
                    </p>
                </div>
                <a href="#contact" class="btn btn-primary btn-lg px-4">
                    <i class="fas fa-calendar-check me-2"></i>Planifier un appel
                </a>
                <p class="small text-muted mt-2">Réponse sous 24h</p>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <div class="container">
            <h2 class="text-center section-title" data-aos="zoom-in">Mes Compétences</h2>
            
            <div class="row">
                <!-- Langages & Outils -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="skill-category">
                        <h3 class="skill-category-title"><i class="fas fa-code me-2"></i>Langages & Outils</h3>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>HTML5/CSS3</span>
                                <span>95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" data-width="95%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>JavaScript</span>
                                <span>85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" data-width="85%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>PHP</span>
                                <span>90%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" data-width="90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>VS CODE/XAMPP</span>
                                <span>100%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-width="80%"></div>
                            </div>
                        </div><div class="skill-item">
                            <div class="skill-name">
                                <span>Git/GitHub</span>
                                <span>80%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-width="80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Frameworks -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="skill-category">
                        <h3 class="skill-category-title"><i class="fas fa-layer-group me-2"></i>Frameworks</h3>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>Bootstrap</span>
                                <span>95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" data-width="95%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>Laravel</span>
                                <span>90%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" data-width="90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>JQUERY</span>
                                <span>85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" data-width="85%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>Angular</span>
                                <span>80%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-width="80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Data Analysis -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="skill-category">
                        <h3 class="skill-category-title"><i class="fas fa-database me-2"></i>Analyse de Données</h3>
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
                                <span>Power BI</span>
                                <span>75%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" data-width="85%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>SQL</span>
                                <span>90%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" data-width="90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>Power Query/Pivot</span>
                                <span>85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" data-width="85%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <div class="container">
            <h2 class="text-center section-title" data-aos="zoom-in">Mes Projets Récents</h2>
            
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="project-card">
                        <img src="img/bibliotheque.jpg" alt="Gestion Bibliothèque" class="project-img">
                        <div class="project-content">
                            <h3 class="project-title">Gestion de Bibliothèque</h3>
                            <p class="project-description">
                                Solution complète pour la gestion des livres et événements avec système de réservation automatisé.
                            </p>
                            <div class="mb-3">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">Bootstrap</span>
                                <span class="tech-badge">MySQL</span>
                            </div>
                            <a href="https://github.com/Ilabarry/Laravel-gestion_bibbliotheque-evenement" target="_blank" class="btn btn-primary w-100">
                                <i class="fab fa-github me-2"></i>Voir le code
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="project-card">
                        <img src="img/projet_voyage.jpg" alt="Sénégal Transport" class="project-img">
                        <div class="project-content">
                            <h3 class="project-title">Sénégal Transport</h3>
                            <p class="project-description">
                                Plateforme de réservation de billets pour les transports inter-régionaux avec système de paiement en ligne sécurisé.
                            </p>
                            <div class="mb-3">
                                <span class="tech-badge">PHP</span>
                                <span class="tech-badge">JavaScript</span>
                                <span class="tech-badge">Bootstrap</span>
                            </div>
                            <a href="https://github.com/Ilabarry/Transport" target="_blank" class="btn btn-primary w-100">
                                <i class="fas fa-external-link-alt me-2"></i>Voir le code
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="project-card">
                        <img src="img/acceuil.jpg" alt="Portfolio" class="project-img">
                        <div class="project-content">
                            <h3 class="project-title">Mon Portfolio</h3>
                            <p class="project-description">
                                Site web personnel présentant mes compétences, projets et parcours professionnel.
                            </p>
                            <div class="mb-3">
                                <span class="tech-badge">HTML5</span>
                                <span class="tech-badge">CSS3</span>
                                <span class="tech-badge">JavaScript</span>
                            </div>
                            <a href="https://github.com/Ilabarry/my_portfolio" target="_blank" class="btn btn-primary w-100">
                                <i class="fab fa-github me-2"></i>Voir le code
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="text-center section-title" data-aos="zoom-in">Contactez-moi</h2>
            
            <div class="row g-4">
                <div class="col-lg-5" data-aos="fade-right">
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
                                <p>barryila35@gmail.com</p>
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
                                <a href="https://m.facebook.com/profile.php?id=100073612819131" aria-label="Facebook"><i class="fab fa-facebook-f text-primary"></i></a>
                                <a href="https://www.linkedin.com/in/ila-barry-259008343/" aria-label="LinkedIn"><i class="fab fa-linkedin-in text-primary"></i></a>
                                <a href="https://github.com/Ilabarry" aria-label="GitHub"><i class="fab fa-github text-primary"></i></a>
                                <a href="https://www.instagram.com/ilabarry2?igsh=YzljYTk1ODg3Zg==" aria-label="Instagram"><i class="fab fa-instagram text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="contact-card">
                        <form id="contactForm" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">Prénom</label>
                                    <input type="text" class="form-control" name="firstName" id="firstName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Nom</label>
                                    <input type="text" class="form-control" name="lastName" id="lastName" required>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label">Sujet</label>
                                    <input type="text" class="form-control" name="subject" id="subject" required>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="5" name="message" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">
                                        <i class="fas fa-paper-plane me-2"></i>Envoyer le message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="bg-dark text-white pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h3 class="h4 mb-3">ILA Barry</h3>
                    <p>
                        Développeur Full-Stack & Analyste de Données passionné par la création de solutions innovantes et performantes.
                    </p>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h4 class="h5 mb-3">Liens rapides</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#hero" class="text-white text-decoration-none">Accueil</a></li>
                        <li class="mb-2"><a href="#about" class="text-white text-decoration-none">À propos</a></li>
                        <li class="mb-2"><a href="#skills" class="text-white text-decoration-none">Compétences</a></li>
                        <li class="mb-2"><a href="#projects" class="text-white text-decoration-none">Projets</a></li>
                        <li><a href="#contact" class="text-white text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h4 class="h5 mb-3">Ressources</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="cv complet/index.html" target="_blank" class="text-white text-decoration-none">Mon CV</a></li>
                        <li class="mb-2"><a href="LM-complet/index.html" target="_blank" class="text-white text-decoration-none">Lettre de motivation</a></li>
                        <li><a href="https://github.com/Ilabarry" target="_blank" class="text-white text-decoration-none">Mon GitHub</a></li><br>
                        <li><a href="https://www.linkedin.com/in/ila-barry-259008343/" target="_blank" class="text-white text-decoration-none">Mon Linkdin</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h4 class="h5 mb-3">Contact</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-phone-alt me-2"></i> +221 78 324 94 24</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> barryila35@gmail.com</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i> Saint-Louis, Sénégal</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <p class="mb-0">© 2024 ILA Barry | Full-Stack Developer & Data Analyst | All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="social-links justify-content-md-end">
                        <a href="https://m.facebook.com/profile.php?id=100073612819131" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/in/ila-barry-259008343/" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/Ilabarry" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="https://www.instagram.com/ilabarry2?igsh=YzljYTk1ODg3Zg==" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    
    <!-- Main JS -->
    <script>
        // Initialiser AOS Animation
        AOS.init({
            duration: 800,
            easing: 'ease-out-quad',
            once: true
        });
        
        // Dark Mode Toggle
        const darkModeToggle = document.getElementById('darkModeToggle');
        const body = document.body;
        
        // Vérifier le mode préféré de l'utilisateur
        if (localStorage.getItem('darkMode') === 'enabled') {
            body.classList.add('dark-mode');
            darkModeToggle.innerHTML = '<i class="fas fa-sun"></i>';
        }
        
        darkModeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            
            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('darkMode', 'enabled');
                darkModeToggle.innerHTML = '<i class="fas fa-sun"></i>';
            } else {
                localStorage.setItem('darkMode', 'disabled');
                darkModeToggle.innerHTML = '<i class="fas fa-moon"></i>';
            }
        });
        
        // Animation des barres de compétences
        function animateSkills() {
            const skillBars = document.querySelectorAll('.progress-bar');
            
            skillBars.forEach(bar => {
                const width = bar.getAttribute('data-width');
                bar.style.width = width;
            });
        }
        
        // Détecter quand la section compétences est visible
        const skillsSection = document.getElementById('skills');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateSkills();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        observer.observe(skillsSection);
        
        // Gestion du formulaire de contact
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();
            
            const formData = new FormData(this);

            fetch('send_email.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json()) // essaie de lire le JSON
            .then(data => {
                if (data.success) {
                    alert("✅ " + data.message);
                    document.getElementById('contactForm').reset();
                } else {
                    alert("❌ " + data.message);
                }
            })
            .catch(error => {
                console.error("Erreur réseau:", error);
                alert("❌ Une erreur s'est produite.");
            });
        });
        
        // Navigation fluide
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Header solide au scroll
        window.addEventListener('scroll', () => {
            const header = document.getElementById('navbar');
            if (window.scrollY > 100) {
                header.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.1)';
                header.style.background = 'rgba(255, 255, 255, 0.98)';
                
                if (body.classList.contains('dark-mode')) {
                    header.style.background = 'rgba(17, 24, 39, 0.98)';
                }
            } else {
                header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                
                if (body.classList.contains('dark-mode')) {
                    header.style.background = 'rgba(17, 24, 39, 0.95)';
                }
            }
        });
    </script>
</body>
</html>