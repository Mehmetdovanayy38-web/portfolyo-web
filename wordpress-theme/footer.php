    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-logo">
                <i class="fa-solid fa-code" style="color: var(--primary);"></i>
                <span>Mehmet Portfolyo © <?php echo date('Y'); ?></span>
            </div>
            <div class="footer-social">
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <div id="modal-dataflow" class="modal-overlay" onclick="closeModal(event, 'modal-dataflow')">
        <div class="modal-content" onclick="event.stopPropagation()">
            <button class="modal-close" onclick="closeModal(null, 'modal-dataflow')"><i class="fa-solid fa-xmark"></i></button>
            <img src="<?php echo get_template_directory_uri(); ?>/dataflow.png" alt="DataFlow Analiz" class="modal-image">
            <span class="modal-category">WEB UYGULAMASI</span>
            <h3 class="modal-title">DataFlow Analiz Paneli</h3>
            <p class="modal-desc">
                Bu proje, React ve Tailwind CSS kullanılarak geliştirilmiş, bulut tabanlı uygulamalar için karmaşık ve yüksek hacimli verilerin gerçek zamanlı olarak görselleştirilmesini sağlayan modern bir paneldir. Kullanıcılar anlık istatistikleri takip edebilir, özelleştirilebilir grafiklerle verilerini istedikleri formatta inceleyebilirler. Verimlilik ve anında tepki verebilirlik odağa alınarak tasarlanmıştır.
            </p>
            <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Projeye Git <i class="fa-solid fa-arrow-up-right-from-square" style="margin-left: 8px;"></i></a>
        </div>
    </div>

    <div id="modal-lumina" class="modal-overlay" onclick="closeModal(event, 'modal-lumina')">
        <div class="modal-content" onclick="event.stopPropagation()">
            <button class="modal-close" onclick="closeModal(null, 'modal-lumina')"><i class="fa-solid fa-xmark"></i></button>
            <img src="<?php echo get_template_directory_uri(); ?>/lumina.png" alt="Lumina Saat Mağazası" class="modal-image">
            <span class="modal-category">E-TİCARET</span>
            <h3 class="modal-title">Lumina Saat Mağazası</h3>
            <p class="modal-desc">
                Lumina, zarif saat koleksiyonlarını kullanıcılara en sade ve sofistike yolla sunmayı hedefleyen e-ticaret portfolyosudur. Sitede özel düzey tipografi, geniş beyaz alan kullanımı ve temiz ızgara (grid) düzenleri tercih edilerek lüks hissi uyandıran bir alışveriş deneyimi yaratıldı. Sorunsuz sepet işlemleri ve ürün detay sayfaları özenle kodlandı.
            </p>
            <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Projeye Git <i class="fa-solid fa-arrow-up-right-from-square" style="margin-left: 8px;"></i></a>
        </div>
    </div>

    <div id="modal-tasksync" class="modal-overlay" onclick="closeModal(event, 'modal-tasksync')">
        <div class="modal-content" onclick="event.stopPropagation()">
            <button class="modal-close" onclick="closeModal(null, 'modal-tasksync')"><i class="fa-solid fa-xmark"></i></button>
            <img src="<?php echo get_template_directory_uri(); ?>/tasksync.png" alt="TaskSync Mobil" class="modal-image">
            <span class="modal-category">MOBİL TASARIM</span>
            <h3 class="modal-title">TaskSync Mobil Uygulaması</h3>
            <p class="modal-desc">
                Öğrencilerin proje gruplarında işbirliğini artırmak ve kişisel görev yönetimlerini kolaylaştırmak amacıyla tasarlanmış modern bir mobil uygulama arayüzü (UI/UX). Tasarım sürecinde erişilebilirlik standartlarına dikkat edildi ve temiz bir kullanıcı deneyimi oluşturulmasına odaklanıldı. Minimalist ve dikkati dağıtmayan unsurlara sahip.
            </p>
            <a href="https://dribbble.com" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Projeye Git <i class="fa-solid fa-arrow-up-right-from-square" style="margin-left: 8px;"></i></a>
        </div>
    </div>

    <div id="modal-aura" class="modal-overlay" onclick="closeModal(event, 'modal-aura')">
        <div class="modal-content" onclick="event.stopPropagation()">
            <button class="modal-close" onclick="closeModal(null, 'modal-aura')"><i class="fa-solid fa-xmark"></i></button>
            <img src="<?php echo get_template_directory_uri(); ?>/aura.png" alt="Aura Studio" class="modal-image">
            <span class="modal-category">MARKALAŞMA</span>
            <h3 class="modal-title">Aura Studio Kimliği</h3>
            <p class="modal-desc">
                Aura Studio, yeni nesil bir tasarım kolektifi için tasarlanmış kapsamlı marka kimliği ve portfolyo web sitesi çalışmasıdır. Proje, şirketin yaratıcı vizyonunu yansıtan özgün bir logo, dinamik bir renk paleti ve etkileşimli geçiş animasyonlarıyla zenginleştirildi. Ajansın en iyi çalışmalarını sergileyecek estetik bir platform altyapısı sunar.
            </p>
            <a href="https://behance.net" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Projeye Git <i class="fa-solid fa-arrow-up-right-from-square" style="margin-left: 8px;"></i></a>
        </div>
    </div>

    <!-- Toast Notification -->
    <div id="toast" class="toast-notification">
        <i class="fa-solid fa-circle-check toast-icon"></i>
        <span>Talebiniz gönderildi, en kısa zamanda sizlerle iletişime geçilecektir.</span>
    </div>

    <!-- CV Modal -->
    <div id="modal-cv" class="modal-overlay" onclick="closeModal(event, 'modal-cv')">
        <div class="modal-content" onclick="event.stopPropagation()">
            <button class="modal-close" onclick="closeModal(null, 'modal-cv')"><i class="fa-solid fa-xmark"></i></button>
            <h3 class="modal-title" style="margin-bottom: 24px;">Özgeçmişim (CV)</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/cv.png" alt="Mehmet Dovanay CV" class="modal-image" style="height: auto; max-height: 60vh; object-fit: contain; background: #f9fafb; padding: 10px;">
            <p class="modal-desc text-center">
                Özgeçmişimi buradan inceleyebilir veya aşağıdaki butondan indirebilirsiniz.
            </p>
            <a href="<?php echo get_template_directory_uri(); ?>/cv.png" download="Mehmet_Dovanay_CV.png" class="btn btn-primary btn-full"><i class="fa-solid fa-download" style="margin-right: 8px;"></i>CV İndir</a>
        </div>
    </div>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.add('active');
            document.body.style.overflow = 'hidden'; // Kaydırmayı engelle
        }

        function closeModal(event, modalId) {
            // Eğer event varsa overlaye tıklanmıştır, event yoksa X butonuna tıklanmıştır
            document.getElementById(modalId).classList.remove('active');
            document.body.style.overflow = 'auto'; // Kaydırmayı geri aç
        }

        function handleContactSubmit(event) {
            event.preventDefault(); // Sayfanın yenilenmesini engelle

            // Toast mesajını göster
            const toast = document.getElementById('toast');
            toast.classList.add('show');

            // Form alanlarını temizle
            event.target.reset();

            // 5 saniye (5000ms) sonra toast mesajını gizle
            setTimeout(() => {
                toast.classList.remove('show');
            }, 5000);

            return false;
        }
    </script>
    <?php wp_footer(); ?>
</body>
</html>
