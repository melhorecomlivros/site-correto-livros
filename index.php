<?php get_header(); ?>

<main id="content" class="site-main">

    <!-- Seção Hero -->
    <section id="hero" class="section section-hero">
        <div class="container">
            <div class="grid grid-2">
                <div class="hero-content">
                    <div class="badge badge-warning">
                        🚨 Alerta para Pais
                    </div>
                    
                    <h1><?php echo esc_html(get_theme_mod('hero_title', 'Proteja Seus Filhos da Adultização Precoce na Era Digital')); ?></h1>
                    
                    <p class="hero-subtitle">
                        <?php echo esc_html(get_theme_mod('hero_subtitle', 'Descubra como preservar a inocência e garantir um desenvolvimento saudável para suas crianças')); ?>
                    </p>
                    
                    <div class="hero-cta">
                        <?php echo do_shortcode('[cta_button]'); ?>
                    </div>
                </div>
                
                <div class="hero-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/hero-child.jpg" alt="Criança feliz e protegida" />
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Problema -->
    <section id="problem" class="section section-problem">
        <div class="container">
            <h2 class="text-center mb-8">O Que Está Acontecendo com Nossas Crianças?</h2>
            
            <div class="grid grid-3">
                <div class="card">
                    <h3>📱 Exposição Precoce</h3>
                    <p>Crianças cada vez mais cedo têm acesso a conteúdos inadequados para sua idade através de dispositivos digitais.</p>
                </div>
                
                <div class="card">
                    <h3>⚡ Adultização Forçada</h3>
                    <p>A pressão social e midiática força nossas crianças a crescerem antes do tempo, perdendo momentos preciosos da infância.</p>
                </div>
                
                <div class="card">
                    <h3>🧠 Impacto no Desenvolvimento</h3>
                    <p>A exposição prematura a conteúdos adultos pode causar danos irreversíveis no desenvolvimento emocional e psicológico.</p>
                </div>
            </div>
            
            <div class="text-center mb-8">
                <div class="stat-box">
                    <div class="stat-number text-gradient-cta">73%</div>
                    <div class="stat-text">das crianças são expostas a conteúdo inadequado antes dos 10 anos</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Solução -->
    <section id="solution" class="section section-solution">
        <div class="container">
            <div class="grid grid-2">
                <div class="solution-content">
                    <div class="badge badge-success">
                        ✅ Solução Comprovada
                    </div>
                    
                    <h2>Infância Blindada: Seu Guia Completo</h2>
                    
                    <p>Um método testado e aprovado por especialistas para proteger seus filhos e preservar a inocência infantil na era digital.</p>
                    
                    <ul class="benefits-list">
                        <li>🛡️ Estratégias de proteção digital</li>
                        <li>🎯 Técnicas de comunicação assertiva</li>
                        <li>📚 Atividades para desenvolvimento saudável</li>
                        <li>⚖️ Como equilibrar tecnologia e infância</li>
                        <li>🔍 Sinais de alerta para identificar problemas</li>
                        <li>💪 Fortalecimento do vínculo familiar</li>
                    </ul>
                    
                    <?php echo do_shortcode('[cta_button text="Quero Proteger Meu Filho"]'); ?>
                </div>
                
                <div class="solution-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ebook-cover.jpg" alt="Capa do Ebook Infância Blindada" />
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Depoimentos -->
    <section id="testimonials" class="section">
        <div class="container">
            <h2 class="text-center mb-8">O Que Dizem Os Pais</h2>
            
            <div class="grid grid-3">
                <?php
                $testimonials = get_testimonials(3);
                if ($testimonials) {
                    foreach ($testimonials as $testimonial) {
                        $client_name = get_post_meta($testimonial->ID, '_client_name', true);
                        $client_role = get_post_meta($testimonial->ID, '_client_role', true);
                        $rating = get_post_meta($testimonial->ID, '_rating', true);
                        ?>
                        <div class="testimonial">
                            <?php echo display_rating_stars($rating ?: 5); ?>
                            <div class="testimonial-content">
                                <?php echo wp_kses_post($testimonial->post_content); ?>
                            </div>
                            <div class="testimonial-author">
                                <?php echo esc_html($client_name ?: 'Cliente Satisfeito'); ?>
                            </div>
                            <div class="testimonial-role">
                                <?php echo esc_html($client_role ?: 'Pai/Mãe'); ?>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    // Depoimentos padrão se não houver posts
                    ?>
                    <div class="testimonial">
                        <div class="stars">★★★★★</div>
                        <div class="testimonial-content">
                            "Finalmente encontrei um guia completo para proteger minha filha. As estratégias são práticas e realmente funcionam!"
                        </div>
                        <div class="testimonial-author">Maria Silva</div>
                        <div class="testimonial-role">Mãe de 2 filhos</div>
                    </div>
                    
                    <div class="testimonial">
                        <div class="stars">★★★★★</div>
                        <div class="testimonial-content">
                            "O ebook me ajudou a entender melhor os perigos da internet e como conversar com meu filho sobre isso."
                        </div>
                        <div class="testimonial-author">João Santos</div>
                        <div class="testimonial-role">Pai de 1 filho</div>
                    </div>
                    
                    <div class="testimonial">
                        <div class="stars">★★★★★</div>
                        <div class="testimonial-content">
                            "Método incrível! Consegui criar um ambiente mais seguro para meus filhos sem ser invasiva."
                        </div>
                        <div class="testimonial-author">Ana Costa</div>
                        <div class="testimonial-role">Mãe de 3 filhos</div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Seção Oferta -->
    <section id="offer" class="section section-offer">
        <div class="container text-center">
            <h2 class="mb-6">Oferta Especial Por Tempo Limitado</h2>
            
            <!-- Countdown Timer -->
            <div class="countdown" id="countdown">
                <div class="countdown-item">
                    <span class="countdown-number" id="hours">23</span>
                    <span class="countdown-label">Horas</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-number" id="minutes">45</span>
                    <span class="countdown-label">Minutos</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-number" id="seconds">12</span>
                    <span class="countdown-label">Segundos</span>
                </div>
            </div>
            
            <div class="offer-content">
                <div class="price-section">
                    <p class="price-original">De R$ 97,00</p>
                    <p class="price-current"><?php echo esc_html(get_theme_mod('product_price', 'R$ 37,00')); ?></p>
                    <p class="discount">Desconto de 62%</p>
                </div>
                
                <div class="guarantee">
                    <h3>🛡️ Garantia Incondicional de 30 Dias</h3>
                    <p>Se você não ficar completamente satisfeito, devolvemos 100% do seu investimento. Sem perguntas, sem complicações.</p>
                </div>
                
                <div class="cta-section">
                    <?php echo do_shortcode('[cta_button text="Garantir Minha Cópia Agora" variant="cta"]'); ?>
                    <p class="payment-info">Pagamento 100% seguro via Kiwify</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Urgência -->
    <section id="urgency" class="section">
        <div class="container text-center">
            <h2 class="mb-6">Não Espere Mais!</h2>
            
            <p class="urgency-text">
                Cada dia que passa é um dia a menos para proteger seus filhos. 
                A adultização precoce está acontecendo agora, e suas crianças precisam de proteção hoje.
            </p>
            
            <div class="urgency-stats">
                <div class="stat-item">
                    <span class="stat-number">1.247</span>
                    <span class="stat-label">Pais já protegeram seus filhos</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">98%</span>
                    <span class="stat-label">Taxa de satisfação</span>
                </div>
            </div>
            
            <?php echo do_shortcode('[cta_button text="Proteger Meus Filhos Agora" variant="cta"]'); ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>