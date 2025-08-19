    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-content text-center">
                <div class="footer-section">
                    <h3><?php bloginfo('name'); ?></h3>
                    <p>Protegendo a inocência infantil na era digital</p>
                </div>
                
                <div class="footer-links">
                    <a href="#hero">Início</a>
                    <a href="#problem">Problema</a>
                    <a href="#solution">Solução</a>
                    <a href="#offer">Oferta</a>
                </div>
                
                <div class="footer-guarantee">
                    <p><strong>🛡️ Garantia de 30 Dias</strong></p>
                    <p>100% do seu dinheiro de volta se não ficar satisfeito</p>
                </div>
                
                <div class="footer-contact">
                    <p>Dúvidas? Entre em contato: <strong><?php echo esc_html(get_theme_mod('contact_email', 'contato@seusite.com.br')); ?></strong></p>
                </div>
                
                <div class="footer-legal">
                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.</p>
                    <p><a href="/termos">Termos de Uso</a> | <a href="/privacidade">Política de Privacidade</a></p>
                </div>
            </div>
        </div>
    </footer>
</div>

<script>
// Smooth scrolling e countdown timer
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
    
    // Fixed CTA
    window.addEventListener('scroll', function() {
        const fixedCTA = document.getElementById('fixed-cta');
        if (fixedCTA && window.scrollY > 800) {
            fixedCTA.style.display = 'block';
        }
    });
    
    // Countdown
    function startCountdown() {
        const countdownTime = new Date().getTime() + (24 * 60 * 60 * 1000);
        setInterval(function() {
            const now = new Date().getTime();
            const distance = countdownTime - now;
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            const hoursEl = document.getElementById('hours');
            const minutesEl = document.getElementById('minutes'); 
            const secondsEl = document.getElementById('seconds');
            
            if (hoursEl) hoursEl.innerHTML = hours.toString().padStart(2, '0');
            if (minutesEl) minutesEl.innerHTML = minutes.toString().padStart(2, '0');
            if (secondsEl) secondsEl.innerHTML = seconds.toString().padStart(2, '0');
        }, 1000);
    }
    startCountdown();
});
</script>

<?php wp_footer(); ?>
</body>
</html>