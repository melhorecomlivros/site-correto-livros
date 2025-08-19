<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Especialistas em Desenvolvimento Infantil">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/og-image.jpg">
    
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/og-image.jpg">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo home_url(); ?>">
    
    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "Ebook Infância Blindada",
        "description": "Guia completo para proteger seus filhos da adultização precoce na era digital",
        "brand": {
            "@type": "Organization",
            "name": "<?php bloginfo('name'); ?>"
        },
        "offers": {
            "@type": "Offer",
            "price": "37.00",
            "priceCurrency": "BRL",
            "availability": "https://schema.org/InStock",
            "url": "<?php echo home_url(); ?>"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "127"
        }
    }
    </script>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- CTA Fixo (aparece após scroll) -->
<div id="fixed-cta" class="fixed-cta" style="display: none;">
    <div class="container">
        <div class="fixed-cta-content">
            <div class="cta-text">
                <p><strong>Proteja seus filhos hoje mesmo</strong></p>
                <small>Oferta por tempo limitado</small>
            </div>
            
            <div class="cta-actions">
                <a href="<?php echo esc_url(get_theme_mod('cta_link', '#offer')); ?>" class="btn btn-cta btn-sm">
                    Garantir Agora
                </a>
                <button class="btn-close" onclick="document.getElementById('fixed-cta').style.display='none'">
                    ✕
                </button>
            </div>
        </div>
    </div>
</div>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Pular para o conteúdo</a>