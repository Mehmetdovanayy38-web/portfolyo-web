<?php get_header(); ?>

    <!-- Hero Section -->
    <section id="giris" class="hero">
        <div class="container hero-container">
            <div class="hero-content">
                <span class="badge">Erişilebilir ve dinamik arayüzler</span>
                <h1 class="hero-title">Merhaba, Ben <span class="text-primary">Mehmet</span>,<br>Web Tasarım
                    ve<br>Kodlama Öğrencisiyim</h1>
                <p class="hero-subtitle">Modern kodlama yapıları ve düzgün web tasarım süreçleriyle estetik, fonksiyonel
                    ve kullanıcı odaklı dijital deneyimler inşa ediyorum.</p>
                <div class="hero-buttons">
                    <a href="#projeler" class="btn btn-primary">Çalışmalarımı Gör</a>
                    <a href="#iletisim" class="btn btn-outline">İletişime Geç</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="image-wrapper">
                    <!-- Profil Fotoğrafı (Kullanıcının fotoğrafı buraya gelecek) -->
                    <img src="<?php echo get_template_directory_uri(); ?>/profil.jpg" alt="Mehmet - Web Tasarım Öğrencisi">
                    <div class="floating-badge">
                        <span class="status-dot"></span> Freelance projelere açık
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hakkımda Section -->
    <section id="hakkimda" class="section bg-light">
        <div class="container section-center">
            <h2 class="section-title">Hakkımda</h2>
            <p class="section-text">Ben Web Tasarım ve Kodlama bölümü 2. sınıf öğrencisiyim. Karmaşık problemlere zarif
                çözümler üretme tutkusuyla yola çıktım. Teknolojiyi okuduğum, estetik duyarlılık ile teknik merakın
                birleşiminden besleniyor. Modern web standartları ve kullanıcı deneyimi odaklı projeler geliştirmeye
                devam ediyorum.</p>
        </div>
    </section>

    <!-- Yeteneklerim Section -->
    <section id="yetenekler" class="section bg-light">
        <div class="container">
            <h2 class="section-title text-center">Yeteneklerim</h2>
            <div class="skills-grid">
                <!-- Skill 1 -->
                <div class="skill-card">
                    <div class="skill-icon"><i class="fa-brands fa-html5"></i></div>
                    <div class="skill-info">
                        <h3>HTML5</h3>
                        <div class="progress-bar">
                            <div class="progress" style="width: 90%;"></div>
                        </div>
                        <span class="skill-percent">90%</span>
                    </div>
                </div>
                <!-- Skill 2 -->
                <div class="skill-card">
                    <div class="skill-icon"><i class="fa-brands fa-css3-alt"></i></div>
                    <div class="skill-info">
                        <h3>CSS3 & Tailwind</h3>
                        <div class="progress-bar">
                            <div class="progress" style="width: 85%;"></div>
                        </div>
                        <span class="skill-percent">85%</span>
                    </div>
                </div>
                <!-- Skill 3 -->
                <div class="skill-card">
                    <div class="skill-icon"><i class="fa-brands fa-js"></i></div>
                    <div class="skill-info">
                        <h3>JavaScript</h3>
                        <div class="progress-bar">
                            <div class="progress" style="width: 80%;"></div>
                        </div>
                        <span class="skill-percent">80%</span>
                    </div>
                </div>
                <!-- Skill 4 -->
                <div class="skill-card">
                    <div class="skill-icon"><i class="fa-brands fa-figma"></i></div>
                    <div class="skill-info">
                        <h3>Adobe XD / Figma</h3>
                        <div class="progress-bar">
                            <div class="progress" style="width: 85%;"></div>
                        </div>
                        <span class="skill-percent">85%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projelerim Section -->
    <section id="projeler" class="section bg-light">
        <div class="container">
            <h2 class="section-title text-center">Projelerim</h2>
            <p class="section-subtitle text-center">Son zamanlarda üzerinde çalıştığım tasarım ve geliştirme projeleri.
            </p>

            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <div class="project-image" style="background-color: #1a362f;">
                        <!-- Representation of the image -->
                        <div class="project-mockup text-white" style="text-align:center; padding: 40px;">
                            <h3 style="font-size: 24px;">Minimal tarım / mahsul / Satış sitesi tasarımı</h3>
                        </div>
                    </div>
                    <div class="project-content">
                        <span class="project-category">WEB UYGULAMASI</span>
                        <h3 class="project-title">Proje Adı: DataFlow Analiz</h3>
                        <p class="project-desc">React ve Tailwind CSS kullanılarak bulut tabanlı için oluşturulmuş
                            gerçek zamanlı veri görselleştirme paneli.</p>
                        <a href="#" class="project-link">Projeyi İncele <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card">
                    <div class="project-image"
                        style="background-color: #518c72; display: flex; align-items: center; justify-content: center;">
                        <span style="font-size: 150px; color: #3e735d; font-weight: 800;">2</span>
                    </div>
                    <div class="project-content">
                        <span class="project-category">E-TİCARET</span>
                        <h3 class="project-title">Proje Adı: Lumina Saat Mağazası</h3>
                        <p class="project-desc">Özel düzey tipografi ve temiz ızgara düzenlerine odaklanan minimalist
                            bir e-ticaret portfolyosu.</p>
                        <a href="#" class="project-link">Projeyi İncele <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card">
                    <div class="project-image" style="background-color: #839d74;"></div>
                    <div class="project-content">
                        <span class="project-category">MOBİL TASARIM</span>
                        <h3 class="project-title">Proje Adı: TaskSync Mobil</h3>
                        <p class="project-desc">Kullanıcı kolaylığı ve erişilebilirliğe odaklanan, öğrenci işbirliği
                            için tasarlanmış bir mobil UI/UX uygulaması.</p>
                        <a href="#" class="project-link">Projeyi İncele <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="project-card">
                    <div class="project-image"
                        style="background-color: #3f6050; padding: 40px; color: white; display:flex; justify-content: space-between; align-items: center;">
                        <div>
                            <div style="width: 80px; height: 3px; background: white; margin-bottom: 5px;"></div>
                            <h2 style="font-size: 32px; letter-spacing: 2px;">PROJECT</h2>
                            <div style="width: 140px; height: 3px; background: white; margin-top: 5px;"></div>
                        </div>
                        <span style="font-size: 120px; font-weight: 800; opacity: 0.8; line-height: 1;">4</span>
                    </div>
                    <div class="project-content">
                        <span class="project-category">MARKALAŞMA</span>
                        <h3 class="project-title">Proje Adı: Aura Studio</h3>
                        <p class="project-desc">Giriş tasarımı kolektifi için tasarlanan tam marka kimliği ve portfolyo
                            web sitesi.</p>
                        <a href="#" class="project-link">Projeyi İncele <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- İletişim Section -->
    <section id="iletisim" class="section bg-light">
        <div class="container contact-container">
            <div class="contact-info">
                <h2 class="section-title">İletişim</h2>
                <p class="section-text" style="max-width: 400px; margin-bottom: 2rem;">Bir projeniz mi var yoksa sadece
                    merhaba mı demek istiyorsunuz? Yeni fırsatlara ve tasarımlara ekibimle her zaman açığım.</p>

                <div class="contact-item">
                    <div class="contact-icon"><i class="fa-regular fa-envelope"></i></div>
                    <span>merhaba@ogrenci.dev</span>
                </div>
                <div class="contact-item">
                    <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <span>İstanbul, Türkiye</span>
                </div>
            </div>

            <div class="contact-form">
                <form action="#" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Ad Soyad</label>
                            <input type="text" id="name" placeholder="Adınız Soyadınız">
                        </div>
                        <div class="form-group">
                            <label for="email">E-posta</label>
                            <input type="email" id="email" placeholder="E-posta adresiniz">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Mesajınız</label>
                        <textarea id="message" rows="4" placeholder="Size nasıl yardımcı olabilirim?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">Gönder</button>
                </form>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
