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
                    <p>Dúvidas? Entre em contato: <strong>contato@seusite.com.br</strong></p>
                </div>
                
                <div class="footer-legal">
                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.</p>
                    <p><a href="/termos">Termos de Uso</a> | <a href="/privacidade">Política de Privacidade</a></p>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<!-- JavaScript -->
<script>
// Smooth scrolling para links âncora
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

// Mostrar CTA fixo após scroll
window.addEventListener('scroll', function() {
    const fixedCTA = document.getElementById('fixed-cta');
    if (window.scrollY > 800) {
        fixedCTA.style.display = 'block';
        fixedCTA.classList.add('animate-slide-up');
    }
});

// Countdown Timer
function startCountdown() {
    // Define 24 horas a partir de agora
    const now = new Date().getTime();
    const countdownTime = now + (24 * 60 * 60 * 1000);
    
    const timer = setInterval(function() {
        const now = new Date().getTime();
        const distance = countdownTime - now;
        
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        document.getElementById('hours').innerHTML = hours.toString().padStart(2, '0');
        document.getElementById('minutes').innerHTML = minutes.toString().padStart(2, '0');
        document.getElementById('seconds').innerHTML = seconds.toString().padStart(2, '0');
        
        if (distance < 0) {
            clearInterval(timer);
            document.getElementById('countdown').innerHTML = "Oferta expirada!";
        }
    }, 1000);
}

// Iniciar countdown quando a página carrega
document.addEventListener('DOMContentLoaded', startCountdown);

// Animações quando elementos entram na viewport
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-fade-in');
        }
    });
}, observerOptions);

// Observar elementos que devem ser animados
document.querySelectorAll('.card, .benefit-item, .bonus-item, .problem-card').forEach(el => {
    observer.observe(el);
});

// Tracking de eventos (opcional - adicione seu código de analytics aqui)
function trackEvent(event, data) {
    // Google Analytics 4
    if (typeof gtag !== 'undefined') {
        gtag('event', event, data);
    }
    
    // Facebook Pixel
    if (typeof fbq !== 'undefined') {
        fbq('track', event, data);
    }
}

// Rastrear cliques nos botões CTA
document.querySelectorAll('.btn-cta, .checkout-btn').forEach(button => {
    button.addEventListener('click', function() {
        trackEvent('cta_click', {
            button_text: this.textContent.trim(),
            button_location: this.closest('section')?.id || 'unknown'
        });
    });
});
</script>

<?php wp_footer(); ?>

</body>
</html>