<?php

require_once 'phpgen_settings.php';
require_once 'components/application.php';
require_once 'components/security/permission_set.php';
require_once 'components/security/user_authentication/table_based_user_authentication.php';
require_once 'components/security/grant_manager/user_grant_manager.php';
require_once 'components/security/grant_manager/composite_grant_manager.php';
require_once 'components/security/grant_manager/hard_coded_user_grant_manager.php';
require_once 'components/security/grant_manager/table_based_user_grant_manager.php';
require_once 'components/security/table_based_user_manager.php';

include_once 'components/security/user_identity_storage/user_identity_session_storage.php';

require_once 'database_engine/mysql_engine.php';

$grants = array('guest' => 
        array('generos' => new PermissionSet(false, false, false, false),
        'filmes_torrent' => new PermissionSet(true, false, false, false),
        'dragon_ball_super' => new PermissionSet(true, false, false, false),
        'dragon_ball_heroes' => new PermissionSet(true, false, false, false),
        'the_flash_5_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_1_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_2_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_3_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_4_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_5_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_6_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_7_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_8_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_9_temporada' => new PermissionSet(true, false, false, false),
        'arrow_7_temporada' => new PermissionSet(true, false, false, false),
        'usuario' => new PermissionSet(false, false, false, false),
        'arrow' => new PermissionSet(true, false, false, false),
        'agents_of_shield' => new PermissionSet(true, false, false, false),
        'dragon_ball' => new PermissionSet(true, false, false, false),
        'the_flash' => new PermissionSet(true, false, false, false),
        'the_walking_dead' => new PermissionSet(true, false, false, false),
        'menu_base' => new PermissionSet(true, false, false, false),
        'agents_of_shield_1_temporada' => new PermissionSet(false, false, false, false),
        'agents_of_shield_2_temporada' => new PermissionSet(false, false, false, false),
        'agents_of_shield_3_temporada' => new PermissionSet(false, false, false, false),
        'agents_of_shield_4_temporada' => new PermissionSet(false, false, false, false),
        'agents_of_shield_5_temporada' => new PermissionSet(true, false, false, false))
    ,
    'defaultUser' => 
        array('generos' => new PermissionSet(false, false, false, false),
        'filmes_torrent' => new PermissionSet(true, false, false, false),
        'dragon_ball_super' => new PermissionSet(false, false, false, false),
        'dragon_ball_heroes' => new PermissionSet(true, false, false, false),
        'the_flash_5_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_1_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_2_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_3_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_4_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_5_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_6_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_7_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_8_temporada' => new PermissionSet(true, false, false, false),
        'the_walking_dead_9_temporada' => new PermissionSet(true, false, false, false),
        'arrow_7_temporada' => new PermissionSet(true, false, false, false),
        'usuario' => new PermissionSet(false, false, false, false),
        'arrow' => new PermissionSet(false, false, false, false),
        'agents_of_shield' => new PermissionSet(false, false, false, false),
        'dragon_ball' => new PermissionSet(false, false, false, false),
        'the_flash' => new PermissionSet(false, false, false, false),
        'the_walking_dead' => new PermissionSet(false, false, false, false),
        'menu_base' => new PermissionSet(false, false, false, false),
        'agents_of_shield_1_temporada' => new PermissionSet(false, false, false, false),
        'agents_of_shield_2_temporada' => new PermissionSet(false, false, false, false),
        'agents_of_shield_3_temporada' => new PermissionSet(false, false, false, false),
        'agents_of_shield_4_temporada' => new PermissionSet(false, false, false, false),
        'agents_of_shield_5_temporada' => new PermissionSet(true, false, false, false))
    ,
    'marfegte' => 
        array('generos' => new PermissionSet(false, false, false, false),
        'filmes_torrent' => new PermissionSet(false, false, false, false),
        'dragon_ball_super' => new PermissionSet(false, false, false, false),
        'dragon_ball_heroes' => new PermissionSet(false, false, false, false),
        'the_flash_5_temporada' => new PermissionSet(false, false, false, false),
        'the_walking_dead_1_temporada' => new PermissionSet(false, false, false, false),
        'the_walking_dead_2_temporada' => new PermissionSet(false, false, false, false),
        'the_walking_dead_3_temporada' => new PermissionSet(false, false, false, false),
        'the_walking_dead_4_temporada' => new PermissionSet(false, false, false, false),
        'the_walking_dead_5_temporada' => new PermissionSet(false, false, false, false),
        'the_walking_dead_6_temporada' => new PermissionSet(false, false, false, false),
        'the_walking_dead_7_temporada' => new PermissionSet(false, false, false, false),
        'the_walking_dead_8_temporada' => new PermissionSet(false, false, false, false),
        'the_walking_dead_9_temporada' => new PermissionSet(false, false, false, false),
        'arrow_7_temporada' => new PermissionSet(false, false, false, false),
        'usuario' => new PermissionSet(false, false, false, false),
        'arrow' => new PermissionSet(false, false, false, false),
        'agents_of_shield' => new PermissionSet(false, false, false, false),
        'dragon_ball' => new PermissionSet(false, false, false, false),
        'the_flash' => new PermissionSet(false, false, false, false),
        'the_walking_dead' => new PermissionSet(false, false, false, false),
        'menu_base' => new PermissionSet(false, false, false, false),
        'agents_of_shield_1_temporada' => new PermissionSet(false, false, false, false),
        'agents_of_shield_2_temporada' => new PermissionSet(false, false, false, false),
        'agents_of_shield_3_temporada' => new PermissionSet(false, false, false, false),
        'agents_of_shield_4_temporada' => new PermissionSet(false, false, false, false),
        'agents_of_shield_5_temporada' => new PermissionSet(false, false, false, false))
    );

$appGrants = array('guest' => new PermissionSet(false, false, false, false),
    'defaultUser' => new PermissionSet(true, false, false, false),
    'marfegte' => new AdminPermissionSet());

$dataSourceRecordPermissions = array();

$tableCaptions = array('generos' => 'Categorias',
'filmes_torrent' => 'Filmes Torrent',
'dragon_ball_super' => 'Dragon Ball Super',
'dragon_ball_heroes' => 'Dragon Ball Heroes',
'the_flash_5_temporada' => 'The Flash 5ª Temporada',
'the_walking_dead_1_temporada' => 'Walking Dead 1ª Temporada',
'the_walking_dead_2_temporada' => 'Walking Dead 2ª Temporada',
'the_walking_dead_3_temporada' => 'Walking Dead 3ª Temporada',
'the_walking_dead_4_temporada' => 'Walking Dead 4ª Temporada',
'the_walking_dead_5_temporada' => 'Walking Dead 5ª Temporada',
'the_walking_dead_6_temporada' => 'Walking Dead 6ª Temporada',
'the_walking_dead_7_temporada' => 'Walking Dead 7ª Temporada',
'the_walking_dead_8_temporada' => 'Walking Dead 8ª Temporada',
'the_walking_dead_9_temporada' => 'Walking Dead 9ª Temporada',
'arrow_7_temporada' => 'Arrow 7ª Temporada',
'usuario' => 'Usuario',
'arrow' => 'Arrow',
'agents_of_shield' => 'Agents Of Shield',
'dragon_ball' => 'Dragon Ball',
'the_flash' => 'The Flash',
'the_walking_dead' => 'The Walking Dead',
'menu_base' => 'Menu Base',
'agents_of_shield_1_temporada' => 'Agents Of Shield 1ª Temporada',
'agents_of_shield_2_temporada' => 'Agents Of Shield 2ª Temporada',
'agents_of_shield_3_temporada' => 'Agents Of Shield 3ª Temporada',
'agents_of_shield_4_temporada' => 'Agents Of Shield 4ª Temporada',
'agents_of_shield_5_temporada' => 'Agents Of Shield 5ª Temporada');

$usersTableInfo = array(
    'TableName' => 'usuario',
    'UserId' => 'id_usuario',
    'UserName' => 'nome_usuario',
    'Password' => 'senha_usuario',
    'Email' => 'email_usuario',
    'UserToken' => 'token_usuario',
    'UserStatus' => 'status_usuario'
);

function EncryptPassword($password, &$result)
{

}

function VerifyPassword($enteredPassword, $encryptedPassword, &$result)
{

}

function BeforeUserRegistration($username, $email, $password, &$allowRegistration, &$errorMessage)
{

}    

function AfterUserRegistration($username, $email)
{

}    

function PasswordResetRequest($username, $email)
{

}

function PasswordResetComplete($username, $email)
{

}

function CreatePasswordHasher()
{
    $hasher = CreateHasher('');
    if ($hasher instanceof CustomStringHasher) {
        $hasher->OnEncryptPassword->AddListener('EncryptPassword');
        $hasher->OnVerifyPassword->AddListener('VerifyPassword');
    }
    return $hasher;
}

function CreateTableBasedGrantManager()
{
    return null;
}

function CreateTableBasedUserManager() {
    global $usersTableInfo;
    return new TableBasedUserManager(MyPDOConnectionFactory::getInstance(), GetGlobalConnectionOptions(), $usersTableInfo, CreatePasswordHasher(), true);
}

function SetUpUserAuthorization()
{
    global $grants;
    global $appGrants;
    global $dataSourceRecordPermissions;

    $hasher = CreatePasswordHasher();

    $hardCodedGrantManager = new HardCodedUserGrantManager($grants, $appGrants);
    $tableBasedGrantManager = CreateTableBasedGrantManager();
    $grantManager = new CompositeGrantManager();
    $grantManager->AddGrantManager($hardCodedGrantManager);
    if (!is_null($tableBasedGrantManager)) {
        $grantManager->AddGrantManager($tableBasedGrantManager);
    }

    $userAuthentication = new TableBasedUserAuthentication(new UserIdentitySessionStorage(), true, $hasher, CreateTableBasedUserManager(), false, false, true);

    GetApplication()->SetUserAuthentication($userAuthentication);
    GetApplication()->SetUserGrantManager($grantManager);
    GetApplication()->SetDataSourceRecordPermissionRetrieveStrategy(new HardCodedDataSourceRecordPermissionRetrieveStrategy($dataSourceRecordPermissions));
}
