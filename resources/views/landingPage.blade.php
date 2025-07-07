<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Courses Tracking </title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, rgb(0,119,189) 0%, rgb(34,193,195) 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header {
            padding: 20px 0;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo::before {
            content: "🎓";
            margin-right: 10px;
            font-size: 2rem;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: rgb(255,235,59);
            transform: translateY(-2px);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: rgb(255,235,59);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .hero {
            text-align: center;
            padding: 80px 0;
            color: white;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
            opacity: 0;
            animation: fadeInUp 1s ease 0.3s forwards;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            opacity: 0;
            animation: fadeInUp 1s ease 0.6s forwards;
        }

        .btn {
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: rgb(255,235,59);
            color: rgb(0,119,189);
            box-shadow: 0 4px 15px rgba(255,235,59,0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255,235,59,0.4);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: white;
            color: rgb(0,119,189);
            transform: translateY(-3px);
        }

        .features {
            padding: 80px 0;
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
        }

        .features h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 60px;
            color: white;
            font-weight: 700;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            background: rgba(255,255,255,0.15);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            display: block;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: white;
            font-weight: 600;
        }

        .feature-card p {
            color: rgba(255,255,255,0.9);
            line-height: 1.6;
        }

        .stats {
            padding: 60px 0;
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }

        .stat-item {
            color: white;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: rgb(255,235,59);
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .footer {
            background: rgba(0,0,0,0.2);
            padding: 40px 0;
            text-align: center;
            color: white;
        }

        .footer p {
            margin-bottom: 20px;
            opacity: 0.8;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-links a {
            color: white;
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            color: rgb(255,235,59);
            transform: translateY(-3px);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .shape {
            position: absolute;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            top: 20%;
            left: 10%;
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            top: 60%;
            right: 10%;
            width: 120px;
            height: 120px;
            background: rgb(255,235,59);
            border-radius: 20px;
            animation-delay: 2s;
        }

        .shape:nth-child(3) {
            top: 80%;
            left: 20%;
            width: 60px;
            height: 60px;
            background: white;
            border-radius: 50%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .auth-buttons {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .auth-btn {
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .auth-btn.login {
            color: white;
            border-color: rgba(255,255,255,0.3);
        }

        .auth-btn.login:hover {
            background: rgba(255,255,255,0.1);
            transform: translateY(-2px);
        }

        .auth-btn.register {
            background: rgb(255,235,59);
            color: rgb(0,119,189);
            font-weight: 600;
        }

        .auth-btn.register:hover {
            background: rgb(255,245,99);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255,235,59,0.3);
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .nav-links {
                display: none;
            }

            .auth-buttons {
                flex-direction: column;
                gap: 10px;
            }

            .mobile-auth {
                display: flex;
                gap: 10px;
                margin-top: 10px;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 250px;
            }
        }
    </style>
</head>
<body>
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <header class="header">
        <div class="container">
            <nav class="nav">
                <img src="{{ asset('images/app_logo.png') }}" style="height:70px;">
                <div class="nav-links">
                    <a href="#home">Home</a>
                    <a href="#courses">Courses</a>
                    <a href="#about">About</a>
                </div>
                <div class="auth-buttons">
                    <a href="{{ route('login') }}" class="auth-btn login">Login</a>
                    <a href="{{ route('register') }}" class="auth-btn register">Sign Up</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Welcome to CourseTracker</h1>
                <p>Your ultimate destination for tracking and managing your learning journey. Monitor progress, set goals, and achieve excellence in your educational pursuits.</p>
                <div class="cta-buttons">
                    <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
                    <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <h2>Why Choose CourseTracker?</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <span class="feature-icon">📊</span>
                        <h3>Progress Tracking</h3>
                        <p>Monitor your learning progress with detailed analytics and visual representations of your achievements.</p>
                    </div>
                    <div class="feature-card">
                        <span class="feature-icon">🎯</span>
                        <h3>Goal Setting</h3>
                        <p>Set personalized learning goals and track your journey towards mastering new skills and subjects.</p>
                    </div>
                    <div class="feature-card">
                        <span class="feature-icon">📚</span>
                        <h3>Course Management</h3>
                        <p>Organize and manage all your courses in one place with intuitive tools and seamless navigation.</p>
                    </div>
                    <div class="feature-card">
                        <span class="feature-icon">🏆</span>
                        <h3>Achievement System</h3>
                        <p>Earn badges and certificates as you complete courses and reach important milestones.</p>
                    </div>
                    <div class="feature-card">
                        <span class="feature-icon">📱</span>
                        <h3>Mobile Friendly</h3>
                        <p>Access your courses and track progress anywhere, anytime with our responsive design.</p>
                    </div>
                    <div class="feature-card">
                        <span class="feature-icon">🔒</span>
                        <h3>Secure & Private</h3>
                        <p>Your learning data is protected with enterprise-grade security and privacy measures.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="stats">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">1,200+</div>
                        <div class="stat-label">Active Students</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Available Courses</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Success Rate</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Support Available</div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 CourseTracker. Built with Laravel. All rights reserved.</p>
            <div class="social-links">
                <a href="#">📧</a>
                <a href="#">🐦</a>
                <a href="#">💼</a>
                <a href="#">📘</a>
            </div>
        </div>
    </footer>

    <script>
        // Add smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add counter animation for stats
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target;
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 20);
        }

        // Intersection Observer for stats animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumbers = entry.target.querySelectorAll('.stat-number');
                    statNumbers.forEach(stat => {
                        const text = stat.textContent;
                        const number = parseInt(text.replace(/[^\d]/g, ''));
                        if (number && !stat.dataset.animated) {
                            stat.dataset.animated = true;
                            animateCounter(stat, number);
                        }
                    });
                }
            });
        });

        const statsSection = document.querySelector('.stats');
        if (statsSection) {
            observer.observe(statsSection);
        }
    </script>
</body>
</html>
