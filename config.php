<?php
/*
#################################################################################################################
Configuração do TinyFileManager para o usuário Daniel
#################################################################################################################
*/

// Ativar autenticação por login/senha
$use_auth = true;

// Usuários e senhas
$auth_users = array(
    'daniel@infopowersistemas.com.br' => '$2y$10$r45fg9EyNrUl3LG/AvjsRuUjRT1maCWcY5XkzYLdMFTQhLnNIn56K' // senha: masterkey
);

// Usuários com acesso somente leitura
$readonly_users = array();

// Configurações de exibição
$use_highlightjs = true;
$highlightjs_style = 'vs';
$edit_files = true;

// Configurações de tempo
$default_timezone = 'America/Sao_Paulo'; // Fuso horário de São Paulo

// Caminhos
$root_path = $_SERVER['DOCUMENT_ROOT'];
$root_url = '';
$http_host = $_SERVER['HTTP_HOST'];

// Configurações adicionais
$directories_users = array();
$iconv_input_encoding = 'UTF-8';
$datetime_format = 'd.m.y H:i:s';
$allowed_file_extensions = '';
$allowed_upload_extensions = '';
$favicon_path = '';
$exclude_items = array();
$online_viewer = 'google';
$sticky_navbar = true;
$path_display_mode = 'full';
$max_upload_size_bytes = 5000;

// Configurações de IP
$ip_ruleset = 'OFF';
$ip_silent = true;
$ip_whitelist = array('127.0.0.1', '::1');
$ip_blacklist = array('0.0.0.0', '::');

?>
