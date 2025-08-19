    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-content">
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
                    <p>
                        <a href="/termos-de-uso">Termos de Uso</a> | 
                        <a href="/politica-de-privacidade">Política de Privacidade</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<style>
/* Footer Styles */
.site-footer {
    background: linear-gradient(135deg, #1e293b, #334155);
    color: white;
    padding: 60px 0 20px;
    margin-top: 80px;
}

.footer-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.footer-section {
    margin-bottom: 40px;
}

.footer-section h3 {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 12px;
    color: #10b981;
}

.footer-section p {
    opacity: 0.9;
    font-size: 1.1rem;
}

.footer-links {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-bottom: 40px;
    flex-wrap: wrap;
}

.footer-links a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.footer-links a:hover {
    color: #10b981;
}

.footer-guarantee {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    padding: 24px;
    margin-bottom: 30px;
    backdrop-filter: blur(10px);
}

.footer-guarantee p:first-child {
    font-size: 1.2rem;
    margin-bottom: 8px;
}

.footer-contact {
    margin-bottom: 30px;
    padding: 20px;
    background: rgba(16, 185, 129, 0.1);
    border-radius: 8px;
}

.footer-contact strong {
    color: #10b981;
}

.footer-legal {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    padding-top: 20px;
    opacity: 0.8;
    font-size: 0.9rem;
}

.footer-legal a {
    color: #10b981;
    text-decoration: none;
}

.footer-legal a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .footer-links {
        flex-direction: column;
        gap: 15px;
    }
    
    .footer-section h3 {
        font-size: 1.5rem;
    }
}
</style>

<script>
// Smooth scrolling e fixed CTA
document.addEventListener('DOMContentLoaded', function() {
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
    
    // Fixed CTA
    const fixedCTA = document.getElementById('fixed-cta');
    
    window.addEventListener('scroll', function() {
        if (fixedCTA && window.scrollY > 800) {
            fixedCTA.classList.add('show');
        } else if (fixedCTA) {
            fixedCTA.classList.remove('show');
        }
    });
    
    // Countdown timer
    function startCountdown() {
        // Define o tempo final (24 horas a partir de agora)
        const countdownTime = new Date().getTime() + (24 * 60 * 60 * 1000);
        
        const timer = setInterval(function() {
            const now = new Date().getTime();
            const distance = countdownTime - now;
            
            // Cálculos de tempo
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            // Exibir o resultado nos elementos
            const hoursEl = document.getElementById('hours');
            const minutesEl = document.getElementById('minutes'); 
            const secondsEl = document.getElementById('seconds');
            
            if (hoursEl) hoursEl.innerHTML = hours.toString().padStart(2, '0');
            if (minutesEl) minutesEl.innerHTML = minutes.toString().padStart(2, '0');
            if (secondsEl) secondsEl.innerHTML = seconds.toString().padStart(2, '0');
            
            // Se o countdown terminar
            if (distance < 0) {
                clearInterval(timer);
                if (hoursEl) hoursEl.innerHTML = "00";
                if (minutesEl) minutesEl.innerHTML = "00";
                if (secondsEl) secondsEl.innerHTML = "00";
            }
        }, 1000);
    }
    
    // Iniciar countdown se existir na página
    if (document.getElementById('countdown')) {
        startCountdown();
    }
    
    // Animações on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, observerOptions);
    
    // Observar elementos para animação
    document.querySelectorAll('.problem-card, .testimonial-card, .urgency-card, .solution-grid > *, .hero-content, .hero-image').forEach(el => {
        observer.observe(el);
    });
});

// Função para scroll suave para oferta
function scrollToOffer() {
    const offerSection = document.getElementById('offer');
    if (offerSection) {
        offerSection.scrollIntoView({ behavior: 'smooth' });
    }
}

// Função para scroll suave para depoimentos  
function scrollToTestimonials() {
    const testimonialsSection = document.getElementById('testimonials');
    if (testimonialsSection) {
        testimonialsSection.scrollIntoView({ behavior: 'smooth' });
    }
}
</script>

<?php wp_footer(); ?>
</body>
</html>