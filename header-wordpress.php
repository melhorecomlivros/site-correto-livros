<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Preconnect para otimização -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Pular para o conteúdo</a>
    
    <!-- Fixed CTA (será mostrado via JavaScript) -->
    <div id="fixed-cta" class="fixed-cta">
        <div class="container">
            <div class="fixed-cta-content">
                <div class="cta-text">
                    <strong>Proteja seus filhos hoje mesmo</strong>
                    <small>Oferta por tempo limitado</small>
                </div>
                <div class="cta-actions">
                    <a href="<?php echo esc_url(get_theme_mod('purchase_link', 'https://pay.kiwify.com.br/seu-link')); ?>" 
                       class="btn btn-cta" target="_blank">
                        Garantir Agora
                    </a>
                    <button class="btn-close" onclick="document.getElementById('fixed-cta').style.display='none'">✕</button>
                </div>
            </div>
        </div>
    </div>