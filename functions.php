<?php
/**
 * Tema Infância Blindada - Funções
 */

// Evitar acesso direto
if (!defined('ABSPATH')) {
    exit;
}

// Setup do tema
function infancia_blindada_setup() {
    // Suporte a título do site
    add_theme_support('title-tag');
    
    // Suporte a imagens destacadas
    add_theme_support('post-thumbnails');
    
    // Suporte a HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Suporte a menus
    register_nav_menus(array(
        'primary' => 'Menu Principal',
    ));
    
    // Suporte a logotipo personalizado
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'infancia_blindada_setup');

// Enfileirar estilos e scripts
function infancia_blindada_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap', array(), null);
    
    // Estilo principal
    wp_enqueue_style('infancia-blindada-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    
    // Scripts personalizados
    wp_enqueue_script('infancia-blindada-script', get_template_directory_uri() . '/js/main.js', array(), wp_get_theme()->get('Version'), true);
    
    // Localizar script para AJAX
    wp_localize_script('infancia-blindada-script', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('infancia_blindada_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'infancia_blindada_scripts');

// Registrar áreas de widgets
function infancia_blindada_widgets_init() {
    register_sidebar(array(
        'name'          => 'Sidebar Principal',
        'id'            => 'sidebar-1',
        'description'   => 'Sidebar principal do site',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => 'Footer',
        'id'            => 'footer-1',
        'description'   => 'Área do rodapé',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'infancia_blindada_widgets_init');

// Customizer
function infancia_blindada_customize_register($wp_customize) {
    // Seção de configurações gerais
    $wp_customize->add_section('infancia_blindada_settings', array(
        'title'    => 'Configurações do Tema',
        'priority' => 30,
    ));
    
    // Texto do botão CTA
    $wp_customize->add_setting('cta_text', array(
        'default'           => 'Quero Proteger Meu Filho Agora',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('cta_text', array(
        'label'   => 'Texto do Botão CTA',
        'section' => 'infancia_blindada_settings',
        'type'    => 'text',
    ));
    
    // Link do botão CTA
    $wp_customize->add_setting('cta_link', array(
        'default'           => 'https://pay.kiwify.com.br/seu-link',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('cta_link', array(
        'label'   => 'Link do Botão CTA',
        'section' => 'infancia_blindada_settings',
        'type'    => 'url',
    ));
    
    // Preço do produto
    $wp_customize->add_setting('product_price', array(
        'default'           => 'R$ 37,00',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('product_price', array(
        'label'   => 'Preço do Produto',
        'section' => 'infancia_blindada_settings',
        'type'    => 'text',
    ));
    
    // Seção Hero
    $wp_customize->add_section('hero_section', array(
        'title'    => 'Seção Hero',
        'priority' => 31,
    ));
    
    // Título Hero
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Proteja Seus Filhos da Adultização Precoce na Era Digital',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label'   => 'Título Principal',
        'section' => 'hero_section',
        'type'    => 'text',
    ));
    
    // Subtítulo Hero
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Descubra como preservar a inocência e garantir um desenvolvimento saudável para suas crianças',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => 'Subtítulo',
        'section' => 'hero_section',
        'type'    => 'textarea',
    ));
    
    // Seção de Contato
    $wp_customize->add_section('contact_section', array(
        'title'    => 'Informações de Contato',
        'priority' => 32,
    ));
    
    // Email de contato
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'contato@seusite.com.br',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label'   => 'Email de Contato',
        'section' => 'contact_section',
        'type'    => 'email',
    ));
}
add_action('customize_register', 'infancia_blindada_customize_register');

// Campos personalizados para depoimentos
function infancia_blindada_add_meta_boxes() {
    add_meta_box(
        'testimonial_meta',
        'Dados do Depoimento',
        'infancia_blindada_testimonial_meta_callback',
        'post',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'infancia_blindada_add_meta_boxes');

function infancia_blindada_testimonial_meta_callback($post) {
    wp_nonce_field('infancia_blindada_testimonial_meta', 'infancia_blindada_testimonial_nonce');
    
    $client_name = get_post_meta($post->ID, '_client_name', true);
    $client_role = get_post_meta($post->ID, '_client_role', true);
    $rating = get_post_meta($post->ID, '_rating', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="client_name">Nome do Cliente</label></th>';
    echo '<td><input type="text" id="client_name" name="client_name" value="' . esc_attr($client_name) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="client_role">Cargo/Descrição</label></th>';
    echo '<td><input type="text" id="client_role" name="client_role" value="' . esc_attr($client_role) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="rating">Avaliação (1-5)</label></th>';
    echo '<td><select id="rating" name="rating">';
    for ($i = 1; $i <= 5; $i++) {
        echo '<option value="' . $i . '"' . selected($rating, $i, false) . '>' . $i . ' estrela' . ($i > 1 ? 's' : '') . '</option>';
    }
    echo '</select></td></tr>';
    echo '</table>';
}

function infancia_blindada_save_testimonial_meta($post_id) {
    if (!isset($_POST['infancia_blindada_testimonial_nonce']) || 
        !wp_verify_nonce($_POST['infancia_blindada_testimonial_nonce'], 'infancia_blindada_testimonial_meta')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['client_name'])) {
        update_post_meta($post_id, '_client_name', sanitize_text_field($_POST['client_name']));
    }
    
    if (isset($_POST['client_role'])) {
        update_post_meta($post_id, '_client_role', sanitize_text_field($_POST['client_role']));
    }
    
    if (isset($_POST['rating'])) {
        update_post_meta($post_id, '_rating', intval($_POST['rating']));
    }
}
add_action('save_post', 'infancia_blindada_save_testimonial_meta');

// Shortcode para exibir estatísticas
function infancia_blindada_stats_shortcode($atts) {
    $atts = shortcode_atts(array(
        'number' => '73%',
        'text' => 'das crianças expostas',
        'color' => 'destructive'
    ), $atts);
    
    return sprintf(
        '<div class="stat-box">
            <div class="stat-number text-%s">%s</div>
            <div class="stat-text">%s</div>
        </div>',
        esc_attr($atts['color']),
        esc_html($atts['number']),
        esc_html($atts['text'])
    );
}
add_shortcode('stat', 'infancia_blindada_stats_shortcode');

// Shortcode para botão CTA
function infancia_blindada_cta_button_shortcode($atts) {
    $atts = shortcode_atts(array(
        'text' => get_theme_mod('cta_text', 'Quero Proteger Meu Filho Agora'),
        'link' => get_theme_mod('cta_link', 'https://pay.kiwify.com.br/seu-link'),
        'variant' => 'cta'
    ), $atts);
    
    return sprintf(
        '<a href="%s" class="btn btn-%s" target="_blank" rel="noopener">%s</a>',
        esc_url($atts['link']),
        esc_attr($atts['variant']),
        esc_html($atts['text'])
    );
}
add_shortcode('cta_button', 'infancia_blindada_cta_button_shortcode');

// Função para obter depoimentos
function get_testimonials($limit = 3) {
    $testimonials = get_posts(array(
        'post_type' => 'post',
        'posts_per_page' => $limit,
        'category_name' => 'depoimentos',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC'
    ));
    
    return $testimonials;
}

// Adicionar suporte a excerpt personalizado
function infancia_blindada_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'infancia_blindada_excerpt_length');

function infancia_blindada_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'infancia_blindada_excerpt_more');

// Remover emojis do WordPress para performance
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Otimizações - remover links desnecessários do head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

// Função para exibir estrelas de avaliação
function display_rating_stars($rating) {
    $output = '<div class="stars">';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $rating) {
            $output .= '★';
        } else {
            $output .= '☆';
        }
    }
    $output .= '</div>';
    return $output;
}

// Função para gerar Schema.org JSON-LD
function infancia_blindada_schema_org() {
    if (is_front_page()) {
        $schema = array(
            "@context" => "https://schema.org",
            "@type" => "Product",
            "name" => "Ebook Infância Blindada",
            "description" => "Guia completo para proteger seus filhos da adultização precoce na era digital",
            "brand" => array(
                "@type" => "Organization",
                "name" => get_bloginfo('name')
            ),
            "offers" => array(
                "@type" => "Offer",
                "price" => "37.00",
                "priceCurrency" => "BRL",
                "availability" => "https://schema.org/InStock",
                "url" => home_url()
            ),
            "aggregateRating" => array(
                "@type" => "AggregateRating",
                "ratingValue" => "4.9",
                "reviewCount" => "127"
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
    }
}
add_action('wp_head', 'infancia_blindada_schema_org');

// Adicionar preload para fontes importantes
function infancia_blindada_preload_fonts() {
    echo '<link rel="preload" href="https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyfAZ9hiJ-Ek-_EeA.woff2" as="font" type="font/woff2" crossorigin>';
    echo '<link rel="preload" href="https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJfecnFHGPc.woff2" as="font" type="font/woff2" crossorigin>';
}
add_action('wp_head', 'infancia_blindada_preload_fonts', 1);

?>