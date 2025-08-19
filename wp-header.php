<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    
    <link rel="canonical" href="<?php echo home_url(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="fixed-cta" class="fixed-cta" style="display: none;">
    <div class="container">
        <div class="fixed-cta-content">
            <div class="cta-text">
                <p><strong>Proteja seus filhos hoje mesmo</strong></p>
                <small>Oferta por tempo limitado</small>
            </div>
            <div class="cta-actions">
                <a href="<?php echo esc_url(get_theme_mod('cta_link', 'https://pay.kiwify.com.br/seu-link')); ?>" class="btn btn-cta" target="_blank">
                    Garantir Agora
                </a>
                <button class="btn-close" onclick="document.getElementById('fixed-cta').style.display='none'">✕</button>
            </div>
        </div>
    </div>
</div>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Pular para o conteúdo</a>