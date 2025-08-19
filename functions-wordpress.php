<?php
/**
 * Funções do tema Infância Blindada
 */

// Evita acesso direto
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configuração do tema
 */
function infancia_blindada_setup() {
    // Suporte a título dinâmico
    add_theme_support('title-tag');
    
    // Suporte a imagens destacadas
    add_theme_support('post-thumbnails');
    
    // Suporte a menus
    add_theme_support('menus');
    
    // Suporte a HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Tamanhos personalizados de imagem
    add_image_size('hero-image', 600, 400, true);
    add_image_size('ebook-cover', 400, 500, true);
}
add_action('after_setup_theme', 'infancia_blindada_setup');

/**
 * Enfileirar estilos e scripts
 */
function infancia_blindada_scripts() {
    // Estilo principal
    wp_enqueue_style('infancia-blindada-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null);
    
    // Script principal
    wp_enqueue_script('infancia-blindada-main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
    
    // Localizar script para AJAX
    wp_localize_script('infancia-blindada-main', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('infancia_blindada_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'infancia_blindada_scripts');

/**
 * Customizer - Configurações do tema
 */
function infancia_blindada_customize_register($wp_customize) {
    
    // Seção Hero
    $wp_customize->add_section('hero_section', array(
        'title' => 'Seção Hero',
        'priority' => 30,
    ));
    
    // Título Hero
    $wp_customize->add_setting('hero_title', array(
        'default' => 'Nossos Filhos Estão Perdendo a Infância',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label' => 'Título Hero',
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    // Subtítulo Hero
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => 'E a culpa não é só da internet',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label' => 'Subtítulo Hero',
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    // Descrição Hero
    $wp_customize->add_setting('hero_description', array(
        'default' => 'Descubra como proteger seus filhos da adultização precoce que está roubando a inocência infantil através de músicas, redes sociais e influenciadores.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_description', array(
        'label' => 'Descrição Hero',
        'section' => 'hero_section',
        'type' => 'textarea',
    ));
    
    // Seção Oferta
    $wp_customize->add_section('offer_section', array(
        'title' => 'Seção Oferta',
        'priority' => 31,
    ));
    
    // Preço do produto
    $wp_customize->add_setting('product_price', array(
        'default' => 'R$ 37,00',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('product_price', array(
        'label' => 'Preço do Produto',
        'section' => 'offer_section',
        'type' => 'text',
    ));
    
    // Link de compra
    $wp_customize->add_setting('purchase_link', array(
        'default' => 'https://pay.kiwify.com.br/seu-link',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('purchase_link', array(
        'label' => 'Link de Compra',
        'section' => 'offer_section',
        'type' => 'url',
    ));
    
    // Seção Contato
    $wp_customize->add_section('contact_section', array(
        'title' => 'Informações de Contato',
        'priority' => 32,
    ));
    
    // Email de contato
    $wp_customize->add_setting('contact_email', array(
        'default' => 'contato@seusite.com.br',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label' => 'Email de Contato',
        'section' => 'contact_section',
        'type' => 'email',
    ));
}
add_action('customize_register', 'infancia_blindada_customize_register');

/**
 * Shortcode para botão CTA
 */
function infancia_blindada_cta_button($atts) {
    $atts = shortcode_atts(array(
        'text' => 'Quero Proteger Meu Filho Agora',
        'variant' => 'cta',
        'size' => 'xl',
    ), $atts);
    
    $purchase_link = get_theme_mod('purchase_link', 'https://pay.kiwify.com.br/seu-link');
    
    return sprintf(
        '<a href="%s" class="btn btn-%s btn-%s" target="_blank">%s</a>',
        esc_url($purchase_link),
        esc_attr($atts['variant']),
        esc_attr($atts['size']),
        esc_html($atts['text'])
    );
}
add_shortcode('cta_button', 'infancia_blindada_cta_button');

/**
 * Custom Post Type para Depoimentos
 */
function register_testimonials_post_type() {
    $labels = array(
        'name' => 'Depoimentos',
        'singular_name' => 'Depoimento',
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar Novo Depoimento',
        'edit_item' => 'Editar Depoimento',
        'new_item' => 'Novo Depoimento',
        'view_item' => 'Ver Depoimento',
        'search_items' => 'Buscar Depoimentos',
        'not_found' => 'Nenhum depoimento encontrado',
        'not_found_in_trash' => 'Nenhum depoimento encontrado na lixeira',
        'menu_name' => 'Depoimentos'
    );
    
    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array('title', 'editor'),
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => false,
        'query_var' => false,
    );
    
    register_post_type('testimonial', $args);
}
add_action('init', 'register_testimonials_post_type');

/**
 * Meta boxes para depoimentos
 */
function add_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial-details',
        'Detalhes do Depoimento',
        'testimonial_meta_box_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_testimonial_meta_boxes');

function testimonial_meta_box_callback($post) {
    wp_nonce_field('testimonial_meta_box', 'testimonial_meta_box_nonce');
    
    $client_name = get_post_meta($post->ID, '_client_name', true);
    $client_role = get_post_meta($post->ID, '_client_role', true);
    $rating = get_post_meta($post->ID, '_rating', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="client_name">Nome do Cliente:</label></th>';
    echo '<td><input type="text" id="client_name" name="client_name" value="' . esc_attr($client_name) . '" class="regular-text" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="client_role">Função/Descrição:</label></th>';
    echo '<td><input type="text" id="client_role" name="client_role" value="' . esc_attr($client_role) . '" class="regular-text" placeholder="Ex: Mãe de 2 filhos" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="rating">Avaliação:</label></th>';
    echo '<td>';
    echo '<select id="rating" name="rating">';
    for ($i = 1; $i <= 5; $i++) {
        $selected = ($rating == $i) ? 'selected' : '';
        echo '<option value="' . $i . '" ' . $selected . '>' . $i . ' estrela' . ($i > 1 ? 's' : '') . '</option>';
    }
    echo '</select>';
    echo '</td>';
    echo '</tr>';
    echo '</table>';
}

function save_testimonial_meta_box($post_id) {
    if (!isset($_POST['testimonial_meta_box_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['testimonial_meta_box_nonce'], 'testimonial_meta_box')) {
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
add_action('save_post', 'save_testimonial_meta_box');

/**
 * Função para buscar depoimentos
 */
function get_testimonials($limit = 3) {
    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => $limit,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC'
    );
    
    return get_posts($args);
}

/**
 * Exibir estrelas de avaliação
 */
function display_rating_stars($rating) {
    $output = '<div class="testimonial-rating">';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $rating) {
            $output .= '<span class="star">★</span>';
        } else {
            $output .= '<span class="star empty">☆</span>';
        }
    }
    $output .= '</div>';
    return $output;
}

/**
 * Adicionar estilos do admin
 */
function infancia_blindada_admin_styles() {
    echo '<style>
        .testimonial-rating .star { color: #f59e0b; font-size: 16px; }
        .testimonial-rating .star.empty { color: #d1d5db; }
    </style>';
}
add_action('admin_head', 'infancia_blindada_admin_styles');

/**
 * Remover itens desnecessários do menu admin
 */
function infancia_blindada_admin_menu() {
    if (!current_user_can('administrator')) {
        remove_menu_page('edit-comments.php');
        remove_menu_page('tools.php');
    }
}
add_action('admin_menu', 'infancia_blindada_admin_menu');

/**
 * Otimizações de performance
 */

// Remover emoji scripts
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Remover versão do WordPress
remove_action('wp_head', 'wp_generator');

// Remover RSD link
remove_action('wp_head', 'rsd_link');

// Remover wlwmanifest link
remove_action('wp_head', 'wlwmanifest_link');

// Limpar wp_head
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

/**
 * Configurações de SEO básicas
 */
function infancia_blindada_seo_meta() {
    if (is_front_page()) {
        echo '<meta name="description" content="Proteja seus filhos da adultização precoce na era digital. Estratégias comprovadas para preservar a inocência infantil. Garantia de 30 dias.">' . "\n";
        echo '<meta name="keywords" content="proteção infantil, adultização precoce, educação digital, pais, filhos, segurança online">' . "\n";
        echo '<meta property="og:title" content="Infância Blindada - Proteja Seus Filhos da Adultização Precoce">' . "\n";
        echo '<meta property="og:description" content="Descubra como proteger seus filhos da adultização precoce causada por músicas, redes sociais e influenciadores inadequados.">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:url" content="' . home_url() . '">' . "\n";
        echo '<meta property="og:image" content="' . get_template_directory_uri() . '/images/hero-child.jpg">' . "\n";
    }
}
add_action('wp_head', 'infancia_blindada_seo_meta');

/**
 * Structured Data (Schema.org)
 */
function infancia_blindada_structured_data() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Product',
            'name' => 'Infância Blindada - Ebook',
            'description' => 'Guia completo para proteger seus filhos da adultização precoce na era digital',
            'brand' => array(
                '@type' => 'Brand',
                'name' => 'Infância Blindada'
            ),
            'offers' => array(
                '@type' => 'Offer',
                'price' => '37.00',
                'priceCurrency' => 'BRL',
                'availability' => 'https://schema.org/InStock',
                'seller' => array(
                    '@type' => 'Organization',
                    'name' => 'Infância Blindada'
                )
            ),
            'aggregateRating' => array(
                '@type' => 'AggregateRating',
                'ratingValue' => '5',
                'reviewCount' => '50'
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($schema) . '</script>' . "\n";
    }
}
add_action('wp_head', 'infancia_blindada_structured_data');

?>