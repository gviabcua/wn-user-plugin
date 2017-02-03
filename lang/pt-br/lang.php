<?php

return [
    'plugin' => [
        'name' => 'Usuário',
        'description' => 'Gerenciamento de usuários de front-end.',
        'tab' => 'Usuário',
        'access_users' => 'Gerenciar usuários'
        'access_groups' => 'Gerenciar Grupos de Usuários',
        'access_settings' => 'Gerenciar configurações do usuário'
    ],
    'users' => [
        'menu_label' => 'Usuários',
        'all_users' => 'Todos os Usuários',
        'new_user' => 'Novo Usuário',
        'list_title' => 'Gerenciar Usuários',
        'trashed_hint_title' => 'O usuário desativou sua conta',
        'trashed_hint_desc' => 'Este usuário desativou sua conta e não quer mais aparecer no site. Eles podem restaurar sua conta a qualquer momento, fazendo login novamente.',
        'banned_hint_title' => 'O usuário foi banido',
        'banned_hint_desc' => 'Este usuário foi banido por um administrador e não poderá iniciar sessão.',
        'guest_hint_title' => 'Este é um usuário convidado',
        'guest_hint_desc' => 'Esse usuário é armazenado apenas para fins de referência e precisa se registrar antes de fazer login.',
        'activate_warning_title' => 'Usuário não ativado!',
        'activate_warning_desc' => 'Este usuário ainda não foi ativado e pode ser incapaz de fazer login.',
        'activate_confirm' => 'Deseja realmente ativar este usuário?',
        'activated_success' => 'O usuário foi ativado',
        'activate_manually' => 'Ativar este usuário manualmente',
        'convert_guest_confirm' => 'Converter este convidado para um usuário?',
        'convert_guest_manually' => 'Converter para usuário registrado',
        'convert_guest_success' => 'O usuário foi convertido em uma conta registrada',
        'delete_confirm' => 'Deseja mesmo excluir este usuário?',
        'unban_user' => 'Desbanir este usuário',
        'unban_confirm' => 'Você realmente quer desbanir este usuário?',
        'unbanned_success' => 'O usuário foi desbanido',
        'return_to_list' => 'Voltar à lista de usuários',
        'update_details' => 'Atualizar detalhes',
        'bulk_actions' => 'Ações em massa',
        'delete_selected' => 'Excluir selecionado',
        'delete_selected_confirm' => 'Excluir os usuários selecionados?',
        'delete_selected_empty' => 'Não há usuários selecionados a serem excluídos.',
        'delete_selected_success' => 'Os usuários selecionados foram excluídos com êxito.',
        'deactivate_selected' => 'Desativar selecionado',
        'deactivate_selected_confirm' => 'Desativar os usuários selecionados?',
        'deactivate_selected_empty' => 'Não há usuários selecionados para desativar.',
        'deactivate_selected_success' => 'Os Usuários selecionados foram desativados com sucesso.',
        'restore_selected' => 'Restaurar selecionado',
        'restore_selected_confirm' => 'Restaurar usuários selecionados?',
        'restore_selected_empty' => 'Não há usuários selecionados para restaurar.',
        'restore_selected_success' => 'Os usuários selecionados foram restaurado com sucesso.',
        'ban_selected' => 'Banir selecionado',
        'ban_selected_confirm' => 'Banir os usuários selecionados?',
        'ban_selected_empty' => 'Não há usuários selecionados para banir.',
        'ban_selected_success' => 'Os usuários selecionados foram banidos com sucesso',
        'unban_selected' => 'Desbanir selecionado',
        'unban_selected_confirm' => 'Desbanir os usuários selecionados?',
        'unban_selected_empty' => 'Não há usuários selecionados para desbanir.',
        'unban_selected_success' => 'Os usuários selecionados foram desbanidos com sucesso.',
    ],
    'settings' => [
        'users' => 'Usuários',
        'menu_label' => 'Configurações de usuário',
        'menu_description' => 'Gerenciar configurações relacionadas a usuários.',
        'activation_tab' => 'Ativação',
        'signin_tab' => 'Login',
        'registration_tab' => 'Registração',
        'notifications_tab' => 'Notificações',
        'allow_registration' => 'Permitir o registro do usuário',
        'allow_registration_comment' => 'Se isso estiver desabilitado, os usuários só podem ser criados por administradores.',
        'activate_mode' => 'Modo de ativação',
        'activate_mode_comment' => 'Selecione como uma conta de usuário deve ser ativada.',
        'activate_mode_auto' => 'Automática',
        'activate_mode_auto_comment' => 'Ativada automaticamente mediante o cadastro.',
        'activate_mode_user' => 'Usuário',
        'activate_mode_user_comment' => 'O usuário ativa sua própria conta usando o email.',
        'activate_mode_admin' => 'Administrador',
        'activate_mode_admin_comment' => 'Apenas um Administrador pode ativar um usuário.',
        'welcome_template' => 'Modelo de Boas Vindas',
        'welcome_template_comment' => 'Modelo de email a ser enviado ao usuário quanto ele é ativado.',
        'require_activation' => 'Login requer ativação',
        'require_activation_comment' => 'Usuários precisam ter uma conta ativada para logar.',
        'use_throttle' => 'Tentativas limitadas',
        'use_throttle_comment' => 'Tentativas repetidas de login mal-sucedidas suspenderão temporariamente o usuário.',
        'login_attribute' => 'Atributo para login',
        'login_attribute_comment' => 'Selecione qual atributo do usuário deve ser usado para logar.',
        'no_mail_template' => 'Não enviar uma notificação',
        'hint_templates' => 'Você pode customizar modelos de e-mail selecionando E-mail > Modelos de E-mail no menu de configurações.'
    ],
    'user' => [
        'label' => 'Usuário',
        'id' => 'ID',
        'username' => 'Nome de usuário',
        'name' => 'Nome',
        'name_empty' => 'Anônimo',
        'surname' => 'Sobrenome',
        'email' => 'Email',
        'created_at' => 'Registrado',
        'last_seen' => 'Visto pela última vez',
        'is_guest' => 'Convidado',
        'joined' => 'Ingressou',
        'is_online' => 'Online agora',
        'is_offline' => 'Affline agora',
        'send_invite' => 'Enviar convite por e-mail',
        'send_invite_comment' => 'Envia uma mensagem de boas-vindas contendo informações de login e senha.',
        'create_password' => 'Criar Senha',
        'create_password_comment' => 'Informe uma senha para login do usuário.',
        'reset_password' => 'Resetar senha',
        'reset_password_comment' => 'Para resetar a senha deste usuário, informe uma nova senha aqui.',
        'confirm_password' => 'Confirmação de Senha',
        'confirm_password_comment' => 'Informe a senha novamente para confirmá-la.',
        'groups' => 'Grupos',
        'empty_groups' => 'Não há grupos disponíveis.',
        'avatar' => 'Avatar',
        'details' => 'Detalhes',
        'account' => 'Conta',
        'block_mail' => 'Bloquear todos os envios de e-mail para este usuário.'
        'status_guest' => 'Convidado',
        'status_activated' => 'Ativado',
        'status_registered' => 'Registrado'
    ],
    'group' => [
        'label' => 'Grupo',
        'id' => 'ID',
        'name' => 'Nome',
        'description_field' => 'Descrição',
        'code' => 'Código',
        'code_comment' => 'Insira um código exclusivo usado para identificar esse grupo.',
        'created_at' => 'Criado',
        'users_count' => 'Usuários'
    ],
    'groups' => [
        'menu_label' => 'Grupos',
        'all_groups' => 'Grupos de Usuários',
        'new_group' => 'Novo grupo',
        'delete_selected_confirm' => 'Deseja realmente excluir grupos selecionados?',
        'list_title' => 'Gerenciar grupos',
        'delete_confirm' => 'Deseja realmente excluir este grupo?',
        'delete_selected_success' => 'Os grupos selecionados foram excluídos com êxito.',
        'delete_selected_empty' => 'Não há grupos selecionados para excluir.',
        'return_to_list' => 'Voltar à lista de grupos',
        'return_to_users' => 'Voltar à lista de usuários',
        'create_title' => 'Criar grupo de Usuários',
        'update_title' => 'Editar grupo de usuários',
        'preview_title' => 'Visualização de grupo de usuário'
    ],
    'login' => [
        'attribute_email' => 'Email',
        'attribute_username' => 'Nome de usuário'
    ],
    'account' => [
        'account' => 'Conta',
        'account_desc' => 'Formulário de gerenciamento de usuário.',
        'redirect_to' => 'Redirecionar para',
        'redirect_to_desc' => 'Nome da página para a qual redirecionar após atualização, login ou cadastro.',
        'code_param' => 'Parâmetro de Código de Ativação',
        'code_param_desc' => 'O parâmetro de URL da página usado para o código de ativação de cadastro',
        'invalid_user' => 'Não foi encontrado um usuário com as credenciais informadas.',
        'invalid_activation_code' => 'Código de ativação informado inválido',
        'invalid_deactivation_pass' => 'A senha inserida é inválida.',
        'success_activation' => 'Sua conta foi ativada com sucesso.',
        'success_deactivation' => 'Sua conta foi desativada com sucesso. Lamentamos ver você ir!',
        'success_saved' => 'Configurações salvas com sucesso!',
        'login_first' => 'Você precisa logar primeiro!',
        'already_active' => 'Sua conta já está ativada!',
        'activation_email_sent' => 'Email de ativação foi enviado para o endereço de e-mail informado.',
        'registration_disabled' => 'Atualmente, as inscrições estão desabilitadas.',
        'sign_in' => 'Entrar',
        'register' => 'Cadastrar-se',
        'full_name' => 'Nome Completo',
        'email' => 'Email',
        'password' => 'Senha',
        'login' => 'Entrar',
        'new_password' => 'Nova Senha',
        'new_password_confirm' => 'Confirmar Nova Senha'
    ],
    'reset_password' => [
        'reset_password' => 'Resetar Senha',
        'reset_password_desc' => 'Formulário de resetar senha.',
        'code_param' => 'Parâmetro de código para resetar senha ',
        'code_param_desc' => 'O parâmetro de URL da página usado para o código'
    ],
    'session' => [
        'session' => 'Sessão',
        'session_desc' => 'Adiciona a sessão do usuário a uma página e pode restringir o acesso à página.',
        'security_title' => 'Permitir apenas',
        'security_desc' => 'Quem tem permissão para acessar esta página.',
        'all' => 'Todos',
        'users' => 'Usuários',
        'guests' => 'Convidados',
        'redirect_title' => 'Redirecionar para',
        'redirect_desc' => 'Nome da página para qual redirecionar se o acesso for negado.',
        'logout' => 'Você foi desconectado com sucesso!'
    ]
];
