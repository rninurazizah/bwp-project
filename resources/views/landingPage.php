<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balukea Wijaya & Partners - Law Firm</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            color: #2E2E2E;
            overflow-x: hidden;
            background: #FFFFFF;
            padding-top: 85px; /* kurangi dari 110px sesuai navbar yang lebih kecil */
        }
        
        /* Navbar */
        nav {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            background: #FFFFFF; /* putih */
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.04);
            transition: all 0.35s ease;
        }

        /* Navbar container: beri ruang kiri untuk logo yang diposisikan absolut di dalam <nav> */
        .nav-container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 12px 80px 12px 200px; /* navbar lebih compact */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-full {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        /* Logo: posisikan di pojok navbar (relatif ke <nav> yang sudah position:fixed) */
        .logo-image {
            position: absolute;
            left: 20px;
            top: 12px;
            width: 180px;
            height: 60px;
            background: transparent;
            padding: 2px;
            z-index: 1100;
        }

        .logo-image-img {
            width: auto;
            height: 100%;
            object-fit: contain;
            display: block;
            background: transparent; /* pastikan transparent */
        }

        .nav-links {
            display: flex;
            gap: 35px; /* kurangi dari 40px */
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: #000000; /* teks hitam untuk kontras */
            font-weight: 600;
            font-size: 13px;
            transition: color 0.25s ease;
            position: relative;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .nav-links a:hover {
            color: #C9A646; /* hover: emas lembut */
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #C9A646;
            transition: width 0.25s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Pastikan body punya padding-top cukup agar konten tidak tertutup navbar */
        body { padding-top: 85px; }

        /* Hero Section */
        .hero {
            min-height: 85vh;
            background: linear-gradient(135deg, #D9EDF7 0%, #a8d3e8ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            padding: 150px 80px 80px;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 1000px;
            height: 1000px;
            background: radial-gradient(circle, rgba(139, 0, 0, 0.12) 0%, transparent 70%);
            border-radius: 50%;
            top: -400px;
            right: -400px;
            animation: pulse 8s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.12; }
            50% { transform: scale(1.1); opacity: 0.18; }
        }

        .hero-content {
            max-width: 1600px;
            width: 100%;
            z-index: 1;
        }

        .hero-badge {
            display: inline-block;
            padding: 10px 25px;
            background:#AB2626;
            border: 1px solid #AB2626;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease;
            text-transform: uppercase;
            color: #FFF;
        }

        .hero h1 {
            font-size: 72px;
            font-weight: 900;
            margin-bottom: 25px;
            line-height: 1.1;
            animation: fadeInUp 1s ease 0.2s both;
            letter-spacing: -2px;
            color: #1a1a1a;
        }

        .hero-tagline {
            font-size: 28px;
            font-weight: 300;
            color: #AB2626;
            margin-bottom: 25px;
            animation: fadeInUp 1s ease 0.3s both;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .hero p {
            font-size: 19px;
            margin-bottom: 50px;
            color: rgba(16, 15, 15, 0.8);
            max-width: 700px;
            line-height: 1.8;
            animation: fadeInUp 1s ease 0.4s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            animation: fadeInUp 1s ease 0.5s both;
        }

        .cta-button {
            display: inline-block;
            padding: 18px 45px;
            background: #AB2626;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 700;
            font-size: 14px;
            transition: all 0.3s ease;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .cta-button:hover {
            background: #a00000;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(139, 0, 0, 0.3);
        }

        .cta-button-outline {
            background: ;
            border: 2px #AB2626;
        }

        .cta-button-outline:hover {
            background: white;
            color: #AB2626;
            border-color: white;
        }

        /* News & Updates Section */
        .news-updates {
            padding: 100px 80px;
            background: white;
        }

        .section-header {
            max-width: 1600px;
            margin: 0 auto 60px;
        }

        .section-title {
            font-size: 42px;
            font-weight: 900;
            margin-bottom: 15px;
            color: #1a1a1a;
            letter-spacing: -1px;
        }

        .section-subtitle {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

        .news-grid {
            max-width: 1600px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 30px;
        }

        .news-card {
            background: white;
            border: 1px solid #e5e5e5;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .news-card:hover {
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
            transform: translateY(-5px);
            border-color: #AB2626;
        }

        .news-image {
            width: 100%;
            height: 240px;
            background: linear-gradient(135deg, #f5f5f5, #e5e5e5);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 64px;
            color: #d5d5d5;
        }

        .news-content {
            padding: 35px;
        }

        .news-date {
            font-size: 12px;
            color: #AB2626;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 15px;
        }

        .news-card h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #1a1a1a;
            font-weight: 700;
            line-height: 1.4;
        }

        .news-card p {
            color: #666;
            line-height: 1.7;
            font-size: 15px;
            margin-bottom: 20px;
        }

        .read-more {
            color: #AB2626;
            font-weight: 700;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: gap 0.3s ease;
        }

        .read-more:hover {
            gap: 12px;
        }

        /* Case Studies Section */
        .case-studies {
            padding: 100px 80px;
            background: #f9f9f9;
        }

        .case-grid {
            max-width: 1600px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }

        .case-card {
            background: white;
            padding: 50px;
            border-left: 4px solid #AB2626;
            transition: all 0.3s ease;
        }

        .case-card:hover {
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            transform: translateX(5px);
        }

        .case-category {
            font-size: 12px;
            color: #AB2626;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 20px;
        }

        .case-card h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #1a1a1a;
            font-weight: 700;
            line-height: 1.3;
        }

        .case-card p {
            color: #666;
            line-height: 1.8;
            font-size: 15px;
            margin-bottom: 20px;
        }

        .case-result {
            padding: 20px;
            background: #F5F5F5;
            border-radius: 4px;
            margin-top: 25px;
        }

        .case-result-label {
            font-size: 11px;
            color: #AB2626;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
        }

        .case-result-text {
            color: #333;
            font-weight: 600;
            font-size: 15px;
            line-height: 1.6;
        }

        /* About Section */
        .about {
            padding: 100px 80px;
            background: white;
        }

        .about-content {
            max-width: 1600px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1.3fr;
            gap: 80px;
            align-items: start;
        }

        .about-sidebar {
            position: sticky;
            top: 120px;
        }

        .about-sidebar h2 {
            font-size: 42px;
            margin-bottom: 25px;
            color: #1a1a1a;
            font-weight: 900;
            line-height: 1.2;
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-top: 40px;
        }

        .stat-box {
            padding: 25px;
            background: #f9f9f9;
            border-left: 3px solid #AB2626;
        }

        .stat-number {
            font-size: 36px;
            font-weight: 900;
            color: #AB2626;
            margin-bottom: 8px;
        }

        .stat-label {
            font-size: 13px;
            color: #666;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .about-text p {
            font-size: 16px;
            line-height: 1.9;
            color: #555;
            margin-bottom: 25px;
        }

        .about-text strong {
            color: #1a1a1a;
            font-weight: 700;
        }

        /* Services Section */
        .services {
            padding: 100px 80px;
            background: #f9f9f9;
        }

        .services-grid {
            max-width: 1600px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2px;
            background: #e5e5e5;
        }

        .service-card {
            padding: 45px;
            background: white;
            transition: all 0.3s ease;
            position: relative;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 0;
            background: #AB2626;
            transition: height 0.3s ease;
        }

        .service-card:hover {
            background: #f9f9f9;
        }

        .service-card:hover::before {
            height: 100%;
        }

        .service-number {
            font-size: 14px;
            font-weight: 900;
            color: #e5e5e5;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .service-card:hover .service-number {
            color: #AB2626;
        }

        .service-card h3 {
            font-size: 18px;
            margin-bottom: 18px;
            color: #1a1a1a;
            font-weight: 700;
            line-height: 1.3;
        }

        .service-card p {
            color: #666;
            line-height: 1.7;
            font-size: 14px;
        }

        /* Team Section */
        .team {
            padding: 100px 80px;
            background: white;
        }

        .team-content {
            max-width: 1600px;
            margin: 0 auto;
        }

        .partner-main {
            display: grid;
            grid-template-columns: 350px 1fr;
            gap: 60px;
            margin-bottom: 80px;
            padding-bottom: 80px;
            border-bottom: 1px solid #e5e5e5;
        }

        .partner-photo {
            width: 100%;
            aspect-ratio: 3/4;
            background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
            position: relative;
            overflow: hidden;
        }

        .partner-photo::after {
            content: '⚖️';
            position: absolute;
            font-size: 150px;
            bottom: -30px;
            right: -30px;
            opacity: 0.05;
        }

        .partner-info h3 {
            font-size: 32px;
            margin-bottom: 10px;
            color: #1a1a1a;
            font-weight: 900;
        }

        .partner-role {
            font-size: 14px;
            color: #AB2626;
            font-weight: 700;
            margin-bottom: 30px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .partner-info p {
            font-size: 15px;
            line-height: 1.9;
            color: #555;
            margin-bottom: 20px;
        }

        .team-structure {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .team-role-card {
            padding: 40px 30px;
            background: #f9f9f9;
            text-align: center;
            transition: all 0.3s ease;
            border-top: 3px solid transparent;
        }

        .team-role-card:hover {
            background: white;
            border-top-color: #AB2626;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        }

        .role-icon {
            font-size: 42px;
            margin-bottom: 20px;
        }

        .team-role-card h4 {
            font-size: 16px;
            color: #1a1a1a;
            margin-bottom: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .team-role-card p {
            color: #666;
            line-height: 1.6;
            font-size: 14px;
        }

        /* Clients Section */
        .clients {
            padding: 100px 80px;
            background: #f9f9f9;
        }

        .clients-grid {
            max-width: 1600px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2px;
            background: #e5e5e5;
        }

        .client-card {
            padding: 40px;
            background: white;
            text-align: center;
            font-weight: 600;
            color: #333;
            font-size: 15px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .client-card:hover {
            background: #AB2626;
            color: white;
        }

        /* Contact Section */
        .contact {
            padding: 100px 80px;
            background: #1a1a1a;
            color: white;
        }

        .contact-content {
            max-width: 1600px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 100px;
        }

        .contact-info h2 {
            font-size: 42px;
            margin-bottom: 30px;
            font-weight: 900;
        }

        .contact-info p {
            font-size: 16px;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 50px;
        }

        .info-grid {
            display: grid;
            gap: 30px;
        }

        .info-item {
            padding: 0;
        }

        .info-label {
            font-size: 12px;
            font-weight: 700;
            color: #AB2626;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
        }

        .info-text {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.8;
        }

        .info-text a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .info-text a:hover {
            color: #AB2626;
        }

        .contact-form {
            display: grid;
            gap: 25px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 10px;
            font-weight: 700;
            color: white;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-group input,
        .form-group textarea {
            padding: 16px 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.15);
            font-size: 15px;
            font-family: inherit;
            color: white;
            transition: all 0.3s ease;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.08);
            border-color: #AB2626;
        }

        .form-group textarea {
            min-height: 140px;
            resize: vertical;
        }

        .submit-button {
            padding: 18px 45px;
            background: #AB2626;
            color: white;
            border: none;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            justify-self: start;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .submit-button:hover {
            background: #a00000;
        }

        /* Footer */
        footer {
            background: #111111;
            color: #EEE;
            padding: 60px 80px 40px;
        }

        .footer-content {
            max-width: 1600px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 60px;
            margin-bottom: 50px;
        }

        .footer-section h4 {
            margin-bottom: 20px;
            color: white;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .footer-section p,
        .footer-section a {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            display: block;
            margin-bottom: 12px;
            line-height: 1.7;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: #AB2626;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 40px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.5);
            font-size: 13px;
        }

        /* Responsive */
        @media (max-width: 1400px) {
            .nav-container,
            .hero,
            .news-updates,
            .case-studies,
            .about,
            .services,
            .team,
            .clients,
            .contact,
            footer {
                padding-left: 40px;
                padding-right: 40px;
            }
        }

        @media (max-width: 1024px) {
            .nav-container {
                padding-left: 160px;
            }
            .hero h1 {
                font-size: 56px;
            }

            .about-content,
            .partner-main,
            .contact-content {
                grid-template-columns: 1fr;
            }

            .case-grid {
                grid-template-columns: 1fr;
            }

            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .team-structure {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .nav-container {
                padding-left: 140px;
                padding-right: 40px;
            }
            .hero h1 {
                font-size: 42px;
            }

            .services-grid,
            .team-structure,
            .form-row {
                grid-template-columns: 1fr;
            }

            .news-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <div class="logo-full">
                <div class="logo-image">
                    <img src="/images/logo.png" alt="Balukea Wijaya & Partners Logo" class="logo-image-img">
                </div>
                
            </div>
            <ul class="nav-links">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#updates">Updates</a></li>
                <li><a href="#tentang">Tentang</a></li>
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="#tim">Tim</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="beranda">
        <div class="hero-content">
            <div class="hero-badge">Law Firm Since 2021</div>
            <h1>Mitra Strategis<br>Solusi Hukum Anda</h1>
            <div class="hero-tagline">Personal • Strategis • Terukur</div>
            <p>Layanan hukum profesional dengan pendekatan yang eksklusif, terfokus, dan disesuaikan secara mendalam untuk setiap kebutuhan klien.</p>
            <div class="cta-buttons">
                <a href="#kontak" class="cta-button">Konsultasi Sekarang</a>
                <a href="#tentang" class="cta-button cta-button-outline">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </section>

    <!-- News & Updates Section -->
    <section class="news-updates" id="updates">
        <div class="section-header">
            <h2 class="section-title">Berita & Update Terkini</h2>
            <p class="section-subtitle">Informasi terbaru seputar perkembangan hukum dan pencapaian firma kami</p>
        </div>
        <div class="news-grid">
            <div class="news-card">
                <div class="news-image">📰</div>
                <div class="news-content">
                    <div class="news-date">Oktober 2025</div>
                    <h3>Balukea Wijaya & Partners Memenangkan Sengketa Komersial Bernilai Tinggi</h3>
                    <p>Firma kami berhasil memenangkan perkara sengketa komersial senilai lebih dari Rp 50 miliar di Pengadilan Negeri Jakarta Selatan, memberikan kepuasan penuh kepada klien korporasi kami.</p>
                    <a href="#" class="read-more">Baca Selengkapnya →</a>
                </div>
            </div>
            <div class="news-card">
                <div class="news-image">🏢</div>
                <div class="news-content">
                    <div class="news-date">September 2025</div>
                    <h3>Pendampingan Merger & Acquisition Perusahaan Teknologi</h3>
                    <p>Tim kami sukses mendampingi proses merger dan akuisisi antara dua perusahaan teknologi terkemuka, memastikan seluruh aspek legal compliance terpenuhi dengan sempurna.</p>
                    <a href="#" class="read-more">Baca Selengkapnya →</a>
                </div>
            </div>
            <div class="news-card">
                <div class="news-image">🎓</div>
                <div class="news-content">
                    <div class="news-date">Agustus 2025</div>
                    <h3>Seminar Hukum: Perlindungan Data Pribadi di Era Digital</h3>
                    <p>Managing Partner kami, Rizcki D.S.P. Balukea, menjadi pembicara utama dalam seminar nasional tentang implementasi UU Perlindungan Data Pribadi untuk perusahaan start-up dan teknologi.</p>
                    <a href="#" class="read-more">Baca Selengkapnya →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="case-studies" id="studi-kasus">
        <div class="section-header">
            <h2 class="section-title">Studi Kasus & Pencapaian</h2>
            <p class="section-subtitle">Rekam jejak kesuksesan dalam menangani berbagai perkara kompleks</p>
        </div>
        <div class="case-grid">
            <div class="case-card">
                <div class="case-category">Litigasi Komersial</div>
                <h3>Sengketa Wanprestasi Kontrak Distribusi Senilai Rp 75 Miliar</h3>
                <p>Klien kami, sebuah perusahaan distribusi nasional, mengalami kerugian besar akibat wanprestasi dari mitra bisnis. Tim kami berhasil membuktikan seluruh dalil gugatan dengan bukti-bukti yang komprehensif.</p>
                <div class="case-result">
                    <div class="case-result-label">Hasil</div>
                    <div class="case-result-text">Klien memenangkan perkara di tingkat Pengadilan Negeri dengan putusan untuk membayar ganti rugi penuh plus denda keterlambatan. Putusan dikuatkan di Pengadilan Tinggi.</div>
                </div>
            </div>
            <div class="case-card">
                <div class="case-category">Hukum Korporasi</div>
                <h3>Merger Dua Perusahaan Manufaktur dengan Valuasi USD 15 Juta</h3>
                <p>Mendampingi proses merger kompleks yang melibatkan due diligence menyeluruh, negosiasi dengan multiple stakeholders, dan penyusunan perjanjian merger yang komprehensif sesuai regulasi OJK dan BKPM.</p>
                <div class="case-result">
                    <div class="case-result-label">Hasil</div>
                    <div class="case-result-text">Merger berhasil diselesaikan dalam waktu 6 bulan dengan struktur legal yang optimal, menghemat pajak lebih dari Rp 8 miliar dan memastikan continuity operasional kedua entitas.</div>
                </div>
            </div>
            <div class="case-card">
                <div class="case-category">Hukum Properti & Pertanahan</div>
                <h3>Penyelesaian Sengketa Kepemilikan Tanah 5 Hektar</h3>
                <p>Klien menghadapi klaim kepemilikan ganda atas tanah komersial strategis. Tim kami melakukan investigasi mendalam terhadap riwayat kepemilikan, dokumen historis, dan melakukan mediasi intensif dengan pihak-pihak terkait.</p>
                <div class="case-result">
                    <div class="case-result-label">Hasil</div>
                    <div class="case-result-text">Sengketa diselesaikan melalui mediasi dengan kesepakatan win-win solution. Klien mempertahankan 100% kepemilikan tanah dengan kompensasi yang wajar kepada pihak lawan.</div>
                </div>
            </div>
            <div class="case-card">
                <div class="case-category">Hukum Ketenagakerjaan</div>
                <h3>Pendampingan PHK Massal 200+ Karyawan</h3>
                <p>Perusahaan klien harus melakukan efisiensi operasional dengan PHK besar-besaran. Kami menyusun strategi yang legal compliant, memastikan proses fair, dan meminimalkan risiko gugatan di kemudian hari.</p>
                <div class="case-result">
                    <div class="case-result-label">Hasil</div>
                    <div class="case-result-text">Proses PHK berjalan lancar dengan zero litigation. Seluruh karyawan menerima hak-haknya sesuai UU Cipta Kerja, dan perusahaan menghemat biaya legal hingga 40%.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="tentang">
        <div class="about-content">
            <div class="about-sidebar">
                <h2>Tentang Balukea Wijaya & Partners</h2>
                <div class="about-stats">
                    <div class="stat-box">
                        <div class="stat-number">4+</div>
                        <div class="stat-label">Tahun Pengalaman</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">150+</div>
                        <div class="stat-label">Kasus Ditangani</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Tingkat Keberhasilan</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Klien Aktif</div>
                    </div>
                </div>
            </div>
            <div class="about-text">
                <p><strong>Balukea Wijaya & Partners</strong> adalah firma hukum profesional yang berdiri sejak tahun 2021, awalnya dikenal dengan nama Senandika Samitra Law Office. Firma ini didirikan dengan komitmen untuk memberikan layanan hukum yang tidak hanya berlandaskan pada keahlian hukum, tetapi juga pada pendekatan personal, ketelitian analisis, dan perhatian terhadap kebutuhan khusus setiap Klien.</p>
                
                <p>Seiring dengan perkembangan praktik dan visi jangka panjang, pada tahun 2022 firma ini resmi bertransformasi menjadi <strong>Balukea Wijaya & Partners</strong>. Perubahan ini menandai langkah strategis untuk memperkuat identitas firma sebagai <strong>Law Firm</strong> — firma hukum yang fokus pada kualitas, spesialisasi, dan pendekatan layanan yang dirancang secara eksklusif.</p>

                <p>Sebagai Law Firm, kami mengedepankan model layanan yang <strong>eksklusif, terfokus, dan disesuaikan secara mendalam</strong>. Kami percaya bahwa solusi hukum yang efektif hanya dapat disusun melalui pemahaman menyeluruh atas konteks, dinamika, dan tujuan yang dihadapi klien. Oleh karena itu, setiap strategi hukum yang kami tawarkan merupakan hasil perancangan yang spesifik dan kontekstual, bukan berbasis pendekatan umum.</p>

                <p>Tim kami terdiri dari para profesional yang berpengalaman dalam menangani berbagai jenis perkara, baik <strong>litigasi maupun non-litigasi</strong>, mulai dari sengketa komersial, korporasi, pertanahan, hingga teknologi dan ketenagakerjaan. Dengan keterlibatan langsung dari Para Partner Lawyer, kami memastikan bahwa setiap Klien mendapatkan layanan yang strategis, responsif, dan terukur.</p>

                <p>Sejak berdiri, Balukea Wijaya & Partners telah dipercaya oleh berbagai klien—mulai dari <strong>korporasi, investor, pelaku usaha, hingga individu profesional</strong>—yang membutuhkan pendampingan hukum dengan standar kualitas tinggi dan pendekatan yang selaras dengan kebutuhan bisnis mereka.</p>

                <p><em>Bagi kami, firma hukum bukan sekadar tempat meminta nasihat hukum, tetapi adalah mitra strategis yang tumbuh bersama klien dan berperan aktif dalam mendukung arah kebijakan serta keputusan penting yang memerlukan dasar hukum yang kuat.</em></p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="layanan">
        <div class="section-header">
            <h2 class="section-title">Bidang Spesialisasi Kami</h2>
            <p class="section-subtitle">Fokus di bidang kritis dengan solusi bernilai tinggi yang dirancang khusus untuk kebutuhan Anda</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-number">01</div>
                <h3>Litigasi Bisnis dan Komersial</h3>
                <p>Pendampingan dan representasi hukum dalam sengketa antar perusahaan, kontrak bisnis, wanprestasi, dan perbuatan melawan hukum di pengadilan maupun arbitrase.</p>
            </div>
            <div class="service-card">
                <div class="service-number">02</div>
                <h3>Hukum Korporasi dan Investasi</h3>
                <p>Penyusunan dan review perjanjian, pendirian perusahaan, merger & acquisition, legal compliance, serta pendampingan investor asing dan domestik.</p>
            </div>
            <div class="service-card">
                <div class="service-number">03</div>
                <h3>Penyelesaian Sengketa Alternatif</h3>
                <p>Mediasi, negosiasi, dan arbitrase sebagai alternatif penyelesaian yang efisien dan strategis di luar pengadilan.</p>
            </div>
            <div class="service-card">
                <div class="service-number">04</div>
                <h3>Hukum Properti dan Pertanahan</h3>
                <p>Pemeriksaan legalitas tanah, pengurusan jual beli dan balik nama, serta penyelesaian sengketa kepemilikan dan sertifikasi.</p>
            </div>
            <div class="service-card">
                <div class="service-number">05</div>
                <h3>Hukum Ketenagakerjaan</h3>
                <p>Penyusunan kontrak kerja, penanganan perselisihan tenaga kerja, PHK, PKB, hingga pendampingan perselisihan hubungan industrial.</p>
            </div>
            <div class="service-card">
                <div class="service-number">06</div>
                <h3>Hukum Teknologi & Start-up</h3>
                <p>Pendampingan hukum untuk perusahaan teknologi dan start-up, termasuk perlindungan data pribadi, perizinan PSE, dan kontr
                <p>Pendampingan perizinan, kontrak kerja sama, dan penyelesaian sengketa sektor energi dan pertambangan.</p>
            </div>
            <div class="service-card">
                <div class="service-number">10</div>
                <h3>Hukum Anti Korupsi</h3>
                <p>Pembelaan, pendampingan investigasi, dan mitigasi risiko hukum terkait anti-fraud dan compliance korporat.</p>
            </div>
            <div class="service-card">
                <div class="service-number">11</div>
                <h3>Hukum Konstitusi</h3>
                <p>Kajian peraturan perundang-undangan, uji materi, serta pendampingan perkara hukum publik.</p>
            </div>
            <div class="service-card">
                <div class="service-number">12</div>
                <h3>Pendampingan Strategis Usaha</h3>
                <p>Konsultasi hukum menyeluruh untuk ekspansi bisnis dan pengambilan keputusan berbasis kepatuhan.</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team" id="tim">
        <div class="section-header">
            <h2 class="section-title">Tim Profesional Kami</h2>
            <p class="section-subtitle">Dipimpin oleh pengacara berpengalaman dengan dedikasi tinggi dalam memberikan solusi hukum terbaik</p>
        </div>
        <div class="team-content">
            <!-- Managing Partner -->
            <div class="partner-main">
                <div class="partner-photo"></div>
                <div class="partner-info">
                    <h3>RIZCKI D.S.P. BALUKEA, S.H.</h3>
                    <div class="partner-role">Managing Partner</div>
                    <p>Rizcki D.S.P. Balukea adalah <strong>Managing Partner</strong> sekaligus salah satu pendiri Balukea Wijaya & Partners. Berbekal pengalaman hampir satu dekade di bidang hukum, beliau telah menangani berbagai perkara litigasi, khususnya yang berkaitan dengan <strong>sengketa bisnis, perdata, niaga, dan hukum properti</strong>.</p>
                    
                    <p>Reputasinya sebagai <strong>litigator yang tangguh dan analitis</strong> menjadikannya sosok yang dipercaya oleh klien dari beragam sektor industri untuk menangani perkara-perkara strategis dan bernilai tinggi. Beliau dikenal dengan pendekatannya yang komprehensif dan terstruktur, memadukan ketajaman analisis hukum dengan pemahaman terhadap konteks bisnis dan risiko jangka panjang yang dihadapi klien.</p>
                    
                    <p>Dalam praktiknya, Rizcki aktif merancang strategi litigasi, memimpin proses mediasi dan negosiasi penyelesaian sengketa, serta memberikan pendampingan hukum dalam berbagai transaksi bisnis, termasuk investasi berskala besar. Kemampuannya dalam membaca detail perkara dan menyusun argumen hukum yang kuat telah menjadi aset penting dalam berbagai kemenangan firma di pengadilan maupun penyelesaian di luar pengadilan.</p>
                    
                    <p>Sebagai pemimpin firma, Rizcki menanamkan budaya kerja yang menjunjung tinggi <strong>integritas, akuntabilitas, dan orientasi pada hasil</strong>, serta mendorong pengembangan kapasitas profesional seluruh tim agar setiap klien mendapatkan layanan hukum yang personal, berkualitas, dan berdaya guna.</p>
                </div>
            </div>

            <!-- Team Structure -->
            <h3 style="font-size: 32px; margin-bottom: 40px; color: #1a1a1a; font-weight: 900;">Struktur Tim Profesional</h3>
            <div class="team-structure">
                <div class="team-role-card">
                    <div class="role-icon">⚖️</div>
                    <h4>Partner Lawyers</h4>
                    <p>Pengacara senior dengan keahlian khusus yang menangani langsung setiap kasus strategis dan memberikan arahan hukum yang tajam</p>
                </div>
                <div class="team-role-card">
                    <div class="role-icon">🎓</div>
                    <h4>Legal Advisors</h4>
                    <p>Tim konsultan hukum berpengalaman dalam berbagai bidang spesialisasi untuk memberikan solusi komprehensif</p>
                </div>
                <div class="team-role-card">
                    <div class="role-icon">💼</div>
                    <h4>Associate Lawyers</h4>
                    <p>Pengacara profesional yang mendukung proses litigasi dan non-litigasi dengan analisis mendalam</p>
                </div>
                <div class="team-role-card">
                    <div class="role-icon">📋</div>
                    <h4>Legal Researchers</h4>
                    <p>Tim riset hukum yang memastikan setiap strategi berbasis analisis mendalam dan data akurat</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="clients" id="klien">
        <div class="section-header">
            <h2 class="section-title">Klien Kami</h2>
            <p class="section-subtitle">Dipercaya oleh berbagai perusahaan dan organisasi terkemuka</p>
        </div>
        <div class="clients-grid">
            <div class="client-card">PT. MOTO MANUFACTURING INDUSTRY</div>
            <div class="client-card">PT. TESHIN INDONESIA</div>
            <div class="client-card">PT. PRANDITA JAYA CEMERLANG</div>
            <div class="client-card">CV. WISATA SANTAI INDONESIA</div>
            <div class="client-card">DOCTOR VAPOR PALEMBANG</div>
            <div class="client-card">PPPSRS KONDOTEL LE EMINENCE</div>
            <div class="client-card">PPPSRS KONDOTEL BELEVUE</div>
            <div class="client-card">WENDY WALTERS</div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="kontak">
        <div class="contact-content">
            <div class="contact-info">
                <h2>Hubungi Kami</h2>
                <p>Jika Anda membutuhkan pendampingan hukum yang strategis, berorientasi hasil, dan disesuaikan secara khusus dengan kebutuhan Anda, Balukea Wijaya & Partners siap menjadi mitra hukum yang dapat Anda andalkan.</p>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Alamat</div>
                        <div class="info-text">Menara 165 Lt. 4 Kav. 1, Jln. TB Simatupang,<br>Cilandak Timur, Pasar Minggu,<br>Jakarta Selatan, DKI Jakarta – Indonesia</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Telepon</div>
                        <div class="info-text">
                            <a href="tel:02150812001">021-50812001 (EXT. 706)</a><br>
                            <a href="tel:082113728594">0821-1372-8594</a>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Email</div>
                        <div class="info-text">
                            <a href="mailto:info@balukeawijaya.com">info@balukeawijaya.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Perusahaan</label>
                        <input type="text" id="company" name="company" placeholder="Nama perusahaan (opsional)">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="email@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" placeholder="+62" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject">Subjek</label>
                    <input type="text" id="subject" name="subject" placeholder="Topik konsultasi" required>
                </div>
                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" placeholder="Jelaskan kebutuhan hukum Anda..." required></textarea>
                </div>
                <button type="submit" class="submit-button">Kirim Pesan</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>Balukea Wijaya & Partners</h4>
                <p>law firm yang fokus pada kualitas, spesialisasi, dan pendekatan layanan yang dirancang secara eksklusif untuk setiap klien.</p>
                <p style="margin-top: 20px;"><strong>Personal • Strategis • Terukur</strong></p>
            </div>
            <div class="footer-section">
                <h4>Layanan</h4>
                <a href="#layanan">Litigasi Bisnis</a>
                <a href="#layanan">Hukum Korporasi</a>
                <a href="#layanan">Hukum Properti</a>
                <a href="#layanan">Hukum Ketenagakerjaan</a>
                <a href="#layanan">Lihat Semua</a>
            </div>
            <div class="footer-section">
                <h4>Firma</h4>
                <a href="#tentang">Tentang Kami</a>
                <a href="#tim">Tim Kami</a>
                <a href="#studi-kasus">Studi Kasus</a>
                <a href="#klien">Klien</a>
            </div>
            <div class="footer-section">
                <h4>Kontak</h4>
                <p>Menara 165 Lt. 4 Kav. 1<br>Jakarta Selatan</p>
                <a href="tel:02150812001">021-50812001 (706)</a>
                <a href="tel:082113728594">0821-1372-8594</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Balukea Wijaya & Partners. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form submission
        document.querySelector('.contact-form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Terima kasih! Pesan Anda telah dikirim. Tim kami akan segera menghubungi Anda.');
            e.target.reset();
        });

        // Navbar scroll effect
        let lastScroll = 0;
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                nav.style.padding = '10px 80px';
                nav.style.boxShadow = '0 2px 30px rgba(0, 0, 0, 0.12)';
            } else {
                nav.style.padding = '20px 80px';
                nav.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.06)';
            }
            
            lastScroll = currentScroll;
        });
    </script>
</body>
</html>