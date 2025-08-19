/**
 * JavaScript principal do tema Infância Blindada
 */

(function() {
    'use strict';
    
    // Aguarda o carregamento completo do DOM
    document.addEventListener('DOMContentLoaded', function() {
        
        // Inicializar componentes
        initSmoothScrolling();
        initFixedCTA();
        initCountdown();
        initScrollAnimations();
        initFormValidation();
        
    });
    
    /**
     * Navegação suave para âncoras
     */
    function initSmoothScrolling() {
        // Seleciona todos os links que começam com #
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        
        anchorLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Verifica se é um link âncora válido
                if (href !== '#' && href.length > 1) {
                    e.preventDefault();
                    
                    const target = document.querySelector(href);
                    if (target) {
                        // Calcula a posição considerando header fixo se houver
                        const headerHeight = getHeaderHeight();
                        const targetPosition = target.offsetTop - headerHeight;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    }
    
    /**
     * Calcula altura do header se for fixo
     */
    function getHeaderHeight() {
        const header = document.querySelector('header');
        if (header && getComputedStyle(header).position === 'fixed') {
            return header.offsetHeight;
        }
        return 0;
    }
    
    /**
     * CTA fixo no bottom
     */
    function initFixedCTA() {
        const fixedCTA = document.getElementById('fixed-cta');
        if (!fixedCTA) return;
        
        let ctaVisible = false;
        
        function toggleCTA() {
            const scrollPosition = window.scrollY;
            const showAt = 800; // Mostra após 800px de scroll
            
            if (scrollPosition > showAt && !ctaVisible) {
                fixedCTA.classList.add('show');
                ctaVisible = true;
            } else if (scrollPosition <= showAt && ctaVisible) {
                fixedCTA.classList.remove('show');
                ctaVisible = false;
            }
        }
        
        // Throttle scroll event para performance
        let ticking = false;
        window.addEventListener('scroll', function() {
            if (!ticking) {
                requestAnimationFrame(function() {
                    toggleCTA();
                    ticking = false;
                });
                ticking = true;
            }
        });
        
        // Botão de fechar CTA
        const closeBtn = fixedCTA.querySelector('.btn-close');
        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                fixedCTA.style.display = 'none';
            });
        }
    }
    
    /**
     * Timer countdown
     */
    function initCountdown() {
        const countdownEl = document.getElementById('countdown');
        if (!countdownEl) return;
        
        const hoursEl = document.getElementById('hours');
        const minutesEl = document.getElementById('minutes');
        const secondsEl = document.getElementById('seconds');
        
        if (!hoursEl || !minutesEl || !secondsEl) return;
        
        // Define tempo final (24 horas a partir de agora)
        // Em produção, você pode querer salvar isso no localStorage ou servidor
        let endTime = localStorage.getItem('countdown_end');
        if (!endTime) {
            endTime = new Date().getTime() + (24 * 60 * 60 * 1000);
            localStorage.setItem('countdown_end', endTime);
        } else {
            endTime = parseInt(endTime);
        }
        
        function updateCountdown() {
            const now = new Date().getTime();
            const distance = endTime - now;
            
            if (distance < 0) {
                // Countdown acabou - reiniciar para mais 24h
                endTime = new Date().getTime() + (24 * 60 * 60 * 1000);
                localStorage.setItem('countdown_end', endTime);
                return;
            }
            
            // Cálculos de tempo
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            // Atualizar elementos
            hoursEl.textContent = hours.toString().padStart(2, '0');
            minutesEl.textContent = minutes.toString().padStart(2, '0');
            secondsEl.textContent = seconds.toString().padStart(2, '0');
        }
        
        // Atualizar imediatamente e depois a cada segundo
        updateCountdown();
        setInterval(updateCountdown, 1000);
    }
    
    /**
     * Animações no scroll
     */
    function initScrollAnimations() {
        // Verifica se o browser suporta IntersectionObserver
        if (!('IntersectionObserver' in window)) {
            // Fallback para browsers antigos - adiciona classes imediatamente
            document.querySelectorAll('.fade-in, .slide-up').forEach(function(el) {
                el.classList.add('animated');
            });
            return;
        }
        
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    // Para de observar o elemento após animar
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        // Elementos para animar
        const elementsToAnimate = document.querySelectorAll(
            '.problem-card, .testimonial-card, .urgency-card, ' +
            '.solution-grid > *, .hero-content, .hero-image, ' +
            '.section-header, .benefits-list li'
        );
        
        elementsToAnimate.forEach(function(el) {
            observer.observe(el);
        });
        
        // Animação em cascata para listas
        const lists = document.querySelectorAll('.benefits-list, .impact-list');
        lists.forEach(function(list) {
            const items = list.querySelectorAll('li');
            items.forEach(function(item, index) {
                item.style.animationDelay = (index * 0.1) + 's';
            });
        });
    }
    
    /**
     * Validação de formulários (se houver)
     */
    function initFormValidation() {
        const forms = document.querySelectorAll('form');
        
        forms.forEach(function(form) {
            form.addEventListener('submit', function(e) {
                if (!validateForm(form)) {
                    e.preventDefault();
                    showFormErrors(form);
                }
            });
        });
    }
    
    function validateForm(form) {
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');
        
        requiredFields.forEach(function(field) {
            if (!field.value.trim()) {
                field.classList.add('error');
                isValid = false;
            } else {
                field.classList.remove('error');
            }
            
            // Validação específica por tipo
            if (field.type === 'email' && field.value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(field.value)) {
                    field.classList.add('error');
                    isValid = false;
                }
            }
        });
        
        return isValid;
    }
    
    function showFormErrors(form) {
        const errorFields = form.querySelectorAll('.error');
        if (errorFields.length > 0) {
            errorFields[0].focus();
            
            // Mostra mensagem de erro se não existir
            let errorMsg = form.querySelector('.form-error-message');
            if (!errorMsg) {
                errorMsg = document.createElement('div');
                errorMsg.className = 'form-error-message';
                errorMsg.style.cssText = 'color: #ef4444; margin-top: 10px; font-size: 14px;';
                form.appendChild(errorMsg);
            }
            errorMsg.textContent = 'Por favor, preencha todos os campos obrigatórios corretamente.';
        }
    }
    
    /**
     * Utilitários globais
     */
    window.InfanciaBlindada = {
        // Função para scroll para seção específica
        scrollToSection: function(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                const headerHeight = getHeaderHeight();
                const targetPosition = section.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        },
        
        // Função para tracking de eventos (se conectado com analytics)
        trackEvent: function(category, action, label) {
            // Google Analytics
            if (typeof gtag !== 'undefined') {
                gtag('event', action, {
                    event_category: category,
                    event_label: label
                });
            }
            
            // Facebook Pixel
            if (typeof fbq !== 'undefined') {
                fbq('trackCustom', action, {
                    category: category,
                    label: label
                });
            }
        },
        
        // Função para mostrar notificações
        showNotification: function(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = `notification notification-${type}`;
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: ${type === 'error' ? '#ef4444' : '#10b981'};
                color: white;
                padding: 15px 20px;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                z-index: 10000;
                max-width: 300px;
                animation: slideInRight 0.3s ease;
            `;
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            // Remove after 4 seconds
            setTimeout(function() {
                notification.style.animation = 'slideOutRight 0.3s ease';
                setTimeout(function() {
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                }, 300);
            }, 4000);
        }
    };
    
    /**
     * CSS adicional para animações
     */
    const additionalCSS = `
        @keyframes slideInRight {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes slideOutRight {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(100%); opacity: 0; }
        }
        
        .form-field.error {
            border-color: #ef4444 !important;
            box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.2) !important;
        }
        
        .animated {
            animation: fadeInUp 0.6s ease forwards;
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
    `;
    
    // Adiciona CSS adicional
    const style = document.createElement('style');
    style.textContent = additionalCSS;
    document.head.appendChild(style);
    
})();