<?php

$my_current_lang = apply_filters( 'wpml_current_language', NULL );
$homePage = get_home_url();

$sobrePage     = get_page_link(get_page_by_path('sobre')->ID);
$servicosPage  = get_page_link(get_page_by_path('servicos')->ID);
$escolaPage    = get_page_link(get_page_by_path('escola')->ID);
$escolaPage    = $my_current_lang == 'pt-br' ? 'https://ateliedoboulanger.com.br' : '/?lang=en';
$parceirosPage = get_page_link(get_page_by_path('parceiros')->ID);
$contatoPage   = get_page_link(get_page_by_path('contato')->ID);
$politicaPrivacidade   = get_page_link(get_page_by_path('politica-de-privacidade')->ID);
global $post;

$currentPage = $post->post_name;