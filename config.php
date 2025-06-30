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
    'daniel@infopowersistemas.com.br' => '$2y$10$92X85vL5t.T9Z7H9dQOz/OAjC2E6KQeBp8XJk91ZRoNxG7VlDdQ0u' // masterkey
);

// Usuários com acesso somente leitura
$readonly_users = array();

// Configurações de exibição
$use_highlightjs = true;
$highlightjs_style = 'vs';
$edit_files = true;

// Configurações de tempo
$default_timezone = 'America/Sao_Paulo';

// Caminhos (CRUCIAL)
$root_path = '/home/easypanel/apps/servidor2025/storage/uploads';
$root_url = ''; // IMPORTANTE: deixe vazio
$http_host = $_SERVER['HTTP_HOST'];

// Restrição de diretórios (OBRIGATÓRIO)
$directories_users = array(
    'daniel@infopowersistemas.com.br' => '/home/easypanel/apps/servidor2025/storage/uploads'
);

// Configurações de segurança
$exclude_items = array('.htaccess', '.env');
$allowed_upload_extensions = 'jpg,jpeg,png,gif,pdf,doc,docx';
$max_upload_size_bytes = 5000;

// Configurações de IP
$ip_ruleset = 'OFF';
?>
