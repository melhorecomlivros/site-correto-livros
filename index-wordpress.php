<?php get_header(); ?>

<main id="content" class="site-main">

    <!-- Seção Hero -->
    <section id="hero" class="hero-section">
        <div class="hero-background"></div>
        
        <div class="container">
            <div class="hero-grid">
                <!-- Conteúdo de Texto -->
                <div class="hero-content">
                    <div class="hero-text">
                        <h1 class="hero-title">
                            <span class="text-primary">Nossos Filhos Estão</span>
                            <span class="text-gradient">Perdendo a Infância</span>
                        </h1>
                        <p class="hero-subtitle">E a culpa não é só da internet</p>
                    </div>
                    
                    <p class="hero-description">
                        Descubra como proteger seus filhos da adultização precoce que está roubando 
                        a inocência infantil através de músicas, redes sociais e influenciadores.
                    </p>
                    
                    <div class="hero-buttons">
                        <a href="#offer" class="btn btn-cta btn-xl">
                            Quero Proteger Meu Filho Agora
                        </a>
                        <a href="#problem" class="btn btn-hero btn-xl">
                            Entender o Problema
                        </a>
                    </div>
                    
                    <div class="hero-indicators">
                        <div class="indicator">
                            <div class="indicator-dot pulse"></div>
                            <span>Oferta por tempo limitado</span>
                        </div>
                        <div class="indicator">
                            <div class="indicator-dot"></div>
                            <span>Estratégias comprovadas</span>
                        </div>
                    </div>
                </div>
                
                <!-- Imagem -->
                <div class="hero-image">
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/hero-child.jpg" 
                             alt="Criança pensativa segurando smartphone, representando os desafios da era digital" />
                        <div class="image-overlay"></div>
                    </div>
                    
                    <!-- Stats flutuantes -->
                    <div class="floating-stat stat-1">
                        <div class="stat-number">73%</div>
                        <div class="stat-label">das crianças expostas</div>
                    </div>
                    
                    <div class="floating-stat stat-2">
                        <div class="stat-number">8 anos</div>
                        <div class="stat-label">idade média</div>
                    </div>
                </div>
            </div>
            
            <!-- Indicador de scroll -->
            <div class="scroll-indicator">
                <div class="scroll-mouse">
                    <div class="scroll-wheel"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Story -->
    <section id="story" class="story-section">
        <div class="container">
            <div class="story-content">
                <div class="section-header">
                    <h2 class="section-title">A História que Toda Mãe Teme Viver</h2>
                    <div class="section-divider"></div>
                </div>
                
                <div class="video-container">
                    <div class="video-wrapper">
                        <iframe 
                            src="https://drive.google.com/file/d/1PTCQmLcCMxCupJ7DnS8VGceMldEcxu_Y/preview" 
                            width="100%" 
                            height="100%" 
                            allow="autoplay"
                            title="História sobre adultização infantil">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Problema -->
    <section id="problem" class="problem-section">
        <div class="container">
            <div class="section-header">
                <div class="alert-badge">
                    <span class="alert-icon">⚠️</span>
                    <span class="alert-text">ALERTA URGENTE</span>
                </div>
                
                <h2 class="section-title">
                    Os Verdadeiros Culpados pela 
                    <span class="text-danger">Perda da Inocência</span>
                </h2>
                
                <p class="section-subtitle">
                    Enquanto você acha que está protegendo seu filho, forças invisíveis 
                    estão moldando sua mente de forma irreversível
                </p>
            </div>

            <div class="problems-grid">
                <div class="problem-card">
                    <div class="problem-header">
                        <div class="problem-icon">🎵</div>
                        <div class="problem-info">
                            <h3 class="problem-title">Músicas Inadequadas</h3>
                            <p class="problem-stat">89% das músicas populares</p>
                        </div>
                    </div>
                    <p class="problem-description">
                        Letras com conteúdo adulto normalizando comportamentos precoces
                    </p>
                </div>

                <div class="problem-card">
                    <div class="problem-header">
                        <div class="problem-icon">📱</div>
                        <div class="problem-info">
                            <h3 class="problem-title">Redes Sociais</h3>
                            <p class="problem-stat">73% das crianças expostas</p>
                        </div>
                    </div>
                    <p class="problem-description">
                        Algoritmos que empurram conteúdo adulto para perfis infantis
                    </p>
                </div>

                <div class="problem-card">
                    <div class="problem-header">
                        <div class="problem-icon">👥</div>
                        <div class="problem-info">
                            <h3 class="problem-title">Influenciadores</h3>
                            <p class="problem-stat">6 em cada 10 crianças</p>
                        </div>
                    </div>
                    <p class="problem-description">
                        Creators que promovem padrões de beleza e comportamento adultos
                    </p>
                </div>
            </div>

            <div class="problem-impact">
                <h3 class="impact-title">O Que Está Acontecendo com Nossas Crianças?</h3>
                
                <div class="impact-grid">
                    <div class="impact-column">
                        <h4 class="impact-subtitle">Antes dos 10 Anos:</h4>
                        <ul class="impact-list">
                            <li>• Preocupação excessiva com aparência física</li>
                            <li>• Interesse por temas inadequados para a idade</li>
                            <li>• Perda de interesse por brincadeiras infantis</li>
                        </ul>
                    </div>
                    
                    <div class="impact-column">
                        <h4 class="impact-subtitle">Consequências:</h4>
                        <ul class="impact-list warning">
                            <li>• Ansiedade e baixa autoestima</li>
                            <li>• Distorção da imagem corporal</li>
                            <li>• Comportamentos de risco precoces</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Solução -->
    <section id="solution" class="solution-section">
        <div class="container">
            <div class="solution-grid">
                <div class="solution-content">
                    <div class="success-badge">
                        <span class="success-icon">✅</span>
                        <span class="success-text">Solução Comprovada</span>
                    </div>
                    
                    <h2 class="solution-title">Infância Blindada: Seu Guia Completo</h2>
                    
                    <p class="solution-description">
                        Um método testado e aprovado por especialistas para proteger seus filhos 
                        e preservar a inocência infantil na era digital.
                    </p>
                    
                    <ul class="benefits-list">
                        <li>🛡️ Estratégias de proteção digital</li>
                        <li>🎯 Técnicas de comunicação assertiva</li>
                        <li>📚 Atividades para desenvolvimento saudável</li>
                        <li>⚖️ Como equilibrar tecnologia e infância</li>
                        <li>🔍 Sinais de alerta para identificar problemas</li>
                        <li>💪 Fortalecimento do vínculo familiar</li>
                    </ul>
                    
                    <a href="#offer" class="btn btn-cta btn-xl">
                        Quero Proteger Meu Filho
                    </a>
                </div>
                
                <div class="solution-image">
                    <div class="ebook-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ebook-cover.jpg" 
                             alt="Capa do Ebook Infância Blindada" />
                        
                        <div class="ebook-badge badge-1">
                            <span class="badge-number">50+</span>
                            <span class="badge-text">Páginas</span>
                        </div>
                        
                        <div class="ebook-badge badge-2">
                            <span class="badge-text">PDF Digital</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Depoimentos -->
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">
                    Mães que Já 
                    <span class="text-accent">Protegeram Seus Filhos</span>
                </h2>
                
                <p class="section-subtitle">
                    Depoimentos reais de mães que aplicaram nossas estratégias 
                    e viram resultados surpreendentes
                </p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-author">
                            <h4 class="author-name">Ana Paula Santos</h4>
                            <p class="author-info">Mãe de 2 filhos</p>
                        </div>
                        <div class="testimonial-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>
                    
                    <div class="testimonial-quote">
                        <span class="quote-icon">"</span>
                        <p class="testimonial-text">
                            Em apenas 2 semanas aplicando as técnicas do ebook, minha filha de 9 anos 
                            voltou a brincar de boneca e parou de se preocupar tanto com sua aparência. 
                            Sou muito grata!
                        </p>
                    </div>
                    
                    <div class="testimonial-highlight">
                        ✓ Resultados em 2 semanas
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-author">
                            <h4 class="author-name">Carla Mendes</h4>
                            <p class="author-info">Mãe de 3 filhos</p>
                        </div>
                        <div class="testimonial-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>
                    
                    <div class="testimonial-quote">
                        <span class="quote-icon">"</span>
                        <p class="testimonial-text">
                            O que mais me impressionou foi como aprendi a conversar com meus filhos sobre 
                            temas difíceis. Agora eles me procuram quando veem algo estranho na internet.
                        </p>
                    </div>
                    
                    <div class="testimonial-highlight">
                        ✓ Comunicação transformada
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-author">
                            <h4 class="author-name">Juliana Costa</h4>
                            <p class="author-info">Mãe de 1 filho</p>
                        </div>
                        <div class="testimonial-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>
                    
                    <div class="testimonial-quote">
                        <span class="quote-icon">"</span>
                        <p class="testimonial-text">
                            Estava desesperada vendo meu filho de 8 anos repetir palavrões de músicas. 
                            Com as estratégias do ebook, consegui filtrar o conteúdo e ele voltou a ser 
                            uma criança normal.
                        </p>
                    </div>
                    
                    <div class="testimonial-highlight">
                        ✓ Problema resolvido
                    </div>
                </div>
            </div>

            <!-- Prova social -->
            <div class="social-proof">
                <div class="social-stats">
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Famílias protegidas</div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Taxa de sucesso</div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-number">15 dias</div>
                        <div class="stat-label">Tempo médio de resultado</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Urgência -->
    <section id="urgency" class="urgency-section">
        <div class="container">
            <div class="urgency-content">
                <div class="urgency-header">
                    <div class="alert-badge">
                        <span class="alert-icon pulse">⚠️</span>
                        <span class="alert-text">O QUE ACONTECE SE VOCÊ NÃO AGIR HOJE?</span>
                    </div>
                    
                    <h2 class="urgency-title">
                        Cada Dia que Passa, Seus Filhos 
                        <span class="text-danger">Ficam Mais Vulneráveis</span>
                    </h2>
                </div>

                <div class="urgency-grid">
                    <div class="urgency-card">
                        <div class="urgency-icon">📉</div>
                        <h3 class="urgency-card-title">Autoestima em Queda</h3>
                        <p class="urgency-card-text">
                            A cada dia exposta a padrões inadequados, a autoestima do seu filho 
                            diminui gradualmente
                        </p>
                    </div>

                    <div class="urgency-card">
                        <div class="urgency-icon">👥</div>
                        <h3 class="urgency-card-title">Influência Negativa</h3>
                        <p class="urgency-card-text">
                            Quanto mais tempo sem proteção, maior a influência de conteúdos 
                            prejudiciais
                        </p>
                    </div>

                    <div class="urgency-card">
                        <div class="urgency-icon">⏰</div>
                        <h3 class="urgency-card-title">Tempo Perdido</h3>
                        <p class="urgency-card-text">
                            A infância perdida não volta. Cada momento é precioso e 
                            irreversível
                        </p>
                    </div>
                </div>

                <div class="urgency-question">
                    <h3 class="question-title">A Pergunta que Você Precisa se Fazer:</h3>
                    
                    <div class="question-text">
                        "Que tipo de adulto meu filho se tornará se eu não protegê-lo agora?"
                    </div>
                    
                    <p class="question-explanation">
                        Estudos mostram que crianças expostas à adultização precoce têm 3x mais chances 
                        de desenvolver ansiedade, depressão e problemas de relacionamento na vida adulta.
                    </p>

                    <div class="solution-box">
                        <h4 class="solution-box-title">Mas ainda há tempo de mudar isso!</h4>
                        <p class="solution-box-text">
                            Pais que implementaram nossas estratégias viram mudanças positivas em menos de 15 dias. 
                            Seus filhos voltaram a ser crianças felizes, seguras e protegidas.
                        </p>
                        
                        <a href="#offer" class="btn btn-cta btn-xl">
                            Sim, Quero Proteger Meu Filho Agora
                        </a>
                    </div>
                </div>

                <div class="urgency-quote">
                    <p class="quote-text">
                        "O maior arrependimento dos pais não é o que fizeram, mas o que deixaram de fazer 
                        quando ainda era tempo."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Oferta -->
    <section id="offer" class="offer-section">
        <div class="container">
            <div class="offer-content">
                <h2 class="offer-title">Oferta Especial Por Tempo Limitado</h2>
                
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
                
                <div class="price-section">
                    <p class="price-original">De R$ 97,00</p>
                    <p class="price-current">R$ 37,00</p>
                    <p class="discount">Desconto de 62%</p>
                </div>
                
                <div class="guarantee">
                    <h3 class="guarantee-title">🛡️ Garantia Incondicional de 30 Dias</h3>
                    <p class="guarantee-text">
                        Se você não ficar completamente satisfeito, devolvemos 100% do seu investimento. 
                        Sem perguntas, sem complicações.
                    </p>
                </div>
                
                <div class="cta-section">
                    <a href="https://pay.kiwify.com.br/seu-link" class="btn btn-cta btn-xl" target="_blank">
                        Garantir Minha Cópia Agora
                    </a>
                    <p class="payment-info">Pagamento 100% seguro via Kiwify</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>