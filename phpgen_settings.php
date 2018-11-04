<?php

//  define('SHOW_VARIABLES', 1);
//  define('DEBUG_LEVEL', 1);

//  error_reporting(E_ALL ^ E_NOTICE);
//  ini_set('display_errors', 'On');

set_include_path('.' . PATH_SEPARATOR . get_include_path());


include_once dirname(__FILE__) . '/' . 'components/utils/system_utils.php';
include_once dirname(__FILE__) . '/' . 'components/mail/mailer.php';
include_once dirname(__FILE__) . '/' . 'components/mail/phpmailer_based_mailer.php';
require_once dirname(__FILE__) . '/' . 'database_engine/mysql_engine.php';

//  SystemUtils::DisableMagicQuotesRuntime();

SystemUtils::SetTimeZoneIfNeed('America/Argentina/Buenos_Aires');

function GetGlobalConnectionOptions()
{
    return
        array(
          'server' => 'localhost',
          'port' => '3306',
          'username' => 'root',
          'database' => 'gerador',
          'client_encoding' => 'utf8'
        );
}

function HasAdminPage()
{
    return false;
}

function HasHomePage()
{
    return true;
}

function GetHomeURL()
{
    return 'index.php';
}

function GetHomePageBanner()
{
    return '';
}

function GetPageGroups()
{
    $result = array();
    $result[] = array('caption' => 'Default', 'description' => '');
    $result[] = array('caption' => 'Filmes Torrent', 'description' => '');
    $result[] = array('caption' => 'Arrow', 'description' => '');
    $result[] = array('caption' => 'The Flash', 'description' => '');
    $result[] = array('caption' => 'Dragon Ball', 'description' => '');
    $result[] = array('caption' => 'Agents Of Shield
    ', 'description' => '');
    $result[] = array('caption' => 'The Walking Dead', 'description' => '');
    $result[] = array('caption' => 'Menu Base', 'description' => '');
    return $result;
}

function GetPageInfos()
{
    $result = array();
    $result[] = array('caption' => 'Filmes Torrent', 'short_caption' => 'Filmes Torrent', 'filename' => 'filmes_torrent.php', 'name' => 'filmes_torrent', 'group_name' => 'Filmes Torrent', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Dragon Ball Super', 'short_caption' => 'Dragon Ball Super', 'filename' => 'dragon_ball_super.php', 'name' => 'dragon_ball_super', 'group_name' => 'Dragon Ball', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Dragon Ball Heroes', 'short_caption' => 'Dragon Ball Heroes', 'filename' => 'dragon_ball_heroes.php', 'name' => 'dragon_ball_heroes', 'group_name' => 'Dragon Ball', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'The Flash 5ª Temporada', 'short_caption' => 'The Flash 5ª Temporada', 'filename' => 'the_flash_5_temporada.php', 'name' => 'the_flash_5_temporada', 'group_name' => 'The Flash', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Walking Dead 1ª Temporada', 'short_caption' => 'Walking Dead 1ª Temporada', 'filename' => 'the_walking_dead_1_temporada.php', 'name' => 'the_walking_dead_1_temporada', 'group_name' => 'The Walking Dead', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Walking Dead 2ª Temporada', 'short_caption' => 'Walking Dead 2ª Temporada', 'filename' => 'the_walking_dead_2_temporada.php', 'name' => 'the_walking_dead_2_temporada', 'group_name' => 'The Walking Dead', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Walking Dead 3ª Temporada', 'short_caption' => 'Walking Dead 3ª Temporada', 'filename' => 'the_walking_dead_3_temporada.php', 'name' => 'the_walking_dead_3_temporada', 'group_name' => 'The Walking Dead', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Walking Dead 4ª Temporada', 'short_caption' => 'Walking Dead 4ª Temporada', 'filename' => 'the_walking_dead_4_temporada.php', 'name' => 'the_walking_dead_4_temporada', 'group_name' => 'The Walking Dead', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Walking Dead 5ª Temporada', 'short_caption' => 'Walking Dead 5ª Temporada', 'filename' => 'the_walking_dead_5_temporada.php', 'name' => 'the_walking_dead_5_temporada', 'group_name' => 'The Walking Dead', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Walking Dead 6ª Temporada', 'short_caption' => 'Walking Dead 6ª Temporada', 'filename' => 'the_walking_dead_6_temporada.php', 'name' => 'the_walking_dead_6_temporada', 'group_name' => 'The Walking Dead', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Walking Dead 7ª Temporada', 'short_caption' => 'Walking Dead 7ª Temporada', 'filename' => 'the_walking_dead_7_temporada.php', 'name' => 'the_walking_dead_7_temporada', 'group_name' => 'The Walking Dead', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Walking Dead 8ª Temporada', 'short_caption' => 'Walking Dead 8ª Temporada', 'filename' => 'the_walking_dead_8_temporada.php', 'name' => 'the_walking_dead_8_temporada', 'group_name' => 'The Walking Dead', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Walking Dead 9ª Temporada', 'short_caption' => 'Walking Dead 9ª Temporada', 'filename' => 'the_walking_dead_9_temporada.php', 'name' => 'the_walking_dead_9_temporada', 'group_name' => 'The Walking Dead', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Arrow 7ª Temporada', 'short_caption' => 'Arrow 7ª Temporada', 'filename' => 'arrow_7_temporada.php', 'name' => 'arrow_7_temporada', 'group_name' => 'Arrow', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Usuario', 'short_caption' => 'Usuario', 'filename' => 'usuario.php', 'name' => 'usuario', 'group_name' => 'Default', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Arrow', 'short_caption' => 'Arrow', 'filename' => 'arrow.php', 'name' => 'arrow', 'group_name' => 'Menu Base', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Agents Of Shield', 'short_caption' => 'Agents Of Shield', 'filename' => 'agents_of_shield.php', 'name' => 'agents_of_shield', 'group_name' => 'Menu Base', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Dragon Ball', 'short_caption' => 'Dragon Ball', 'filename' => 'dragon_ball.php', 'name' => 'dragon_ball', 'group_name' => 'Menu Base', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'The Flash', 'short_caption' => 'The Flash', 'filename' => 'the_flash.php', 'name' => 'the_flash', 'group_name' => 'Menu Base', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'The Walking Dead', 'short_caption' => 'The Walking Dead', 'filename' => 'the_walking_dead.php', 'name' => 'the_walking_dead', 'group_name' => 'Menu Base', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Menu Base', 'short_caption' => 'Menu Base', 'filename' => 'menu_base.php', 'name' => 'menu_base', 'group_name' => 'Menu Base', 'add_separator' => true, 'description' => '');
    $result[] = array('caption' => 'Agents Of Shield 1ª Temporada', 'short_caption' => 'Agents Of Shield 1ª Temporada', 'filename' => 'agents_of_shield_1_temporada.php', 'name' => 'agents_of_shield_1_temporada', 'group_name' => 'Agents Of Shield
    ', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Agents Of Shield 2ª Temporada', 'short_caption' => 'Agents Of Shield 2ª Temporada', 'filename' => 'agents_of_shield_2_temporada.php', 'name' => 'agents_of_shield_2_temporada', 'group_name' => 'Agents Of Shield
    ', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Agents Of Shield 3ª Temporada', 'short_caption' => 'Agents Of Shield 3ª Temporada', 'filename' => 'agents_of_shield_3_temporada.php', 'name' => 'agents_of_shield_3_temporada', 'group_name' => 'Agents Of Shield
    ', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Agents Of Shield 4ª Temporada', 'short_caption' => 'Agents Of Shield 4ª Temporada', 'filename' => 'agents_of_shield_4_temporada.php', 'name' => 'agents_of_shield_4_temporada', 'group_name' => 'Agents Of Shield
    ', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => 'Agents Of Shield 5ª Temporada', 'short_caption' => 'Agents Of Shield 5ª Temporada', 'filename' => 'agents_of_shield_5_temporada.php', 'name' => 'agents_of_shield_5_temporada', 'group_name' => 'Agents Of Shield
    ', 'add_separator' => false, 'description' => '');
    return $result;
}

function GetPagesHeader()
{
    return
        '<span class="navbar-brand">

    <span>

        <img src="xml1.png" style="height: 44px; margin-top: -14px;">

    </span>

</span>

<span class="navbar-brand">    

    <span class="hidden-xs"><strong>Gerador de Listas xml</strong></span>

</span>';
}

function GetPagesFooter()
{
    return
        '<table class="table table-condensed legend">
<caption>Legenda</caption>
    <tr>
        <td><span class="label label-success">Novo</span></td>
        <td>Páginas adicionadas recentemente ou significativamente atualizadas.</td>
    </tr>
        <tr>
        <td><span class="label label-warning">Pro</span></td>
        <td>Páginas que ilustram recursos disponíveis apenas na edição Professional do PHP Generator.</td>
    </tr>
</table>
<p>Copyright &copy; <span class="copyright"><script type="text/javascript" >document.write(new Date().getFullYear().toString())</script></span> <a href="http://" target="_blank">Gerador de Listas</a></p>
<p>Criador por <a href="http://" target="_blank">marfegte</a>.</p>';
}

function ApplyCommonPageSettings(Page $page, Grid $grid)
{
    $page->SetShowUserAuthBar(true);
    $page->setShowNavigation(true);
    $page->OnCustomHTMLHeader->AddListener('Global_CustomHTMLHeaderHandler');
    $page->OnGetCustomTemplate->AddListener('Global_GetCustomTemplateHandler');
    $page->OnGetCustomExportOptions->AddListener('Global_OnGetCustomExportOptions');
    $page->getDataset()->OnGetFieldValue->AddListener('Global_OnGetFieldValue');
    $page->getDataset()->OnGetFieldValue->AddListener('OnGetFieldValue', $page);
    $grid->BeforeUpdateRecord->AddListener('Global_BeforeUpdateHandler');
    $grid->BeforeDeleteRecord->AddListener('Global_BeforeDeleteHandler');
    $grid->BeforeInsertRecord->AddListener('Global_BeforeInsertHandler');
    $grid->AfterUpdateRecord->AddListener('Global_AfterUpdateHandler');
    $grid->AfterDeleteRecord->AddListener('Global_AfterDeleteHandler');
    $grid->AfterInsertRecord->AddListener('Global_AfterInsertHandler');
}

function GetAnsiEncoding() { return 'windows-1252'; }

function Global_OnGetCustomPagePermissionsHandler(Page $page, PermissionSet &$permissions, &$handled)
{

}

function Global_CustomHTMLHeaderHandler($page, &$customHtmlHeaderText)
{
    $customHtmlHeaderText  = '<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.4.0/styles/agate.min.css">';
    $customHtmlHeaderText .= '<link rel="icon" href="favicon.ico" type="image/x-icon">';
    $customHtmlHeaderText .= '<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.4.0/highlight.min.js"></script>';
}

function Global_GetCustomTemplateHandler($type, $part, $mode, &$result, &$params, CommonPage $page = null)
{
    if ($part == PagePart::Layout)
    {
        $themes = array(
            "Default" => "",
            "Default compact" => "_default-compact",
            "Cerulean" => "_cerulean",
            "Cerulean compact" => "_cerulean-compact",
            "Cosmo" => "_cosmo",
            "Cyborg" => "_cyborg",
            "Darkly" => "_darkly",
            "Darkly compact" => "_darkly-compact",
            "Facebook" => "_facebook",
            "Flatly" => "_flatly",
            "Journal" => "_journal",
            "Lumen" => "_lumen",
            "Paper" => "_paper",
            "Readable" => "_readable",
            "Sandstone" => "_sandstone",
            "Simplex" => "_simplex",
            "Slate" => "_slate",
            "Slate compact" => "_slate-compact",
            "Spacelab" => "_spacelab",
            "Superhero" => "_superhero",
            "Superhero compact" => "_superhero-compact",
            "United" => "_united",
            "United compact" => "_united-compact",
            "Yeti" => "_yeti",
            "Yeti compact" => "_yeti-compact",
        );
        
        $themePostfix = "";
        $themeCookieVariable = 'theme';
        $demoThemeCookieVariable = 'demo_theme';
                                                
        if (($page->GetPageId() === 'v_color_themes') && isset($_COOKIE[$demoThemeCookieVariable]) && 
                $_COOKIE[$demoThemeCookieVariable] && isset($themes[$_COOKIE[$demoThemeCookieVariable]])) {
            $themePostfix = $themes[$_COOKIE[$demoThemeCookieVariable]];    
        } elseif (isset($_COOKIE[$themeCookieVariable]) && $_COOKIE[$themeCookieVariable] && isset($themes[$_COOKIE[$themeCookieVariable]])) {
            $themePostfix = $themes[$_COOKIE[$themeCookieVariable]];
        }
    
        $params['themes'] = $themes;
        $params['themePostfix'] = $themePostfix;
        $params['showThemesMenu'] = true;
        $result = 'custom_layout.tpl';
    
        if ($page->GetPageId() === 'v_tweaking_custom_theme') {
            $params['StyleFile'] = 'components/assets/css/main_facebook_custom.css';
            $params['showThemesMenu'] = false;
        } else {
            $params['StyleFile'] = 'components/assets/css/main' . $themePostfix . '.css';
        }
    
        $langs = array(
            'br' => 'Brasileiro',
            'en' => 'Inglês',
            'de' => 'Alemão',                
            'es' => 'Espanhol',
            'fr' => 'Francês',        
            'it' => 'Italiano',        
            'ru' => 'Russo',        
            'ar' => 'Árabe'
        );
    
        $lang = 'en';
        if (isset($_COOKIE['lang']) && $_COOKIE['lang'] && isset($langs[$_COOKIE['lang']])) {
            $lang = $_COOKIE['lang'];
        }
    
        $params['availableLangs'] = $langs;
        $params['currentLang'] = $lang;
    }
    
    if (PageType::Data === $type && $mode === PageMode::ViewAll && $part === PagePart::Layout && !$page instanceof DetailPage) {
        $descriptions = require('external_data/doc/page_descriptions.php');
        $filename = $page->getPageFileName();
        if (isset($descriptions[$filename])) {
            if (isset($descriptions[$filename]['class_attribute'])) {
                $params['pageContentBlockClass'] = 'page-title-' . $descriptions[$filename]['class_attribute'];
            }
            if (isset($descriptions[$filename]['demo_video_link'])) {
                $params['pageDemoVideoLink'] = '<span class="demo-video-link" data-demo-video-link="'. $descriptions[$filename]['demo_video_link'] .'"></span>';
            }
        }
    }
    
    if ($type === PageType::Home) {
        $params['Banner'] = file_get_contents("external_data/doc/home_page_banner.html"); 
    }
}

function Global_OnGetCustomExportOptions($page, $exportType, $rowData, &$options)
{

}

function Global_OnGetFieldValue($fieldName, &$value, $tableName)
{

}

function Global_GetCustomPageList(CommonPage $page, PageList $pageList)
{
    $customPageInfos = require('external_data/doc/page_descriptions.php');
    $pageLinks = $pageList->getPages();
    $linksAlternativeCaptions = array();
    
    foreach ($pageLinks as $pageLink) {
        $url = $pageLink->getLink();
    
        if (!isset($customPageInfos[$url])) {
            continue;
        }
    
        if (isset($customPageInfos[$url]['class_attribute'])) {
            $pageLink->setClassAttribute($customPageInfos[$url]['class_attribute']);
        }
    
        if (isset($customPageInfos[$url]['description'])) {
            if (isset($customPageInfos[$url]['demo_video_link'])) {
                $videoLinkCode = 
                    '<a class="demo-video" href="' . $customPageInfos[$url]['demo_video_link'] . '" target="_blank">' .
                    'Watch video<span class="icon-play"></span>' .
                    '</a>';
                $pageLink->setDescription($customPageInfos[$url]['description'] . $videoLinkCode);        
            } else {
                $pageLink->setDescription($customPageInfos[$url]['description']);
            }
        }
        
        if (isset($customPageInfos[$url]['alternative_caption'])) {
            $linksAlternativeCaptions[$url] = $customPageInfos[$url]['alternative_caption'];
        }
        
        if (isset($customPageInfos[$url]['alternative_link'])) {
            $pageLink->setLink($customPageInfos[$url]['alternative_link']);
        }        
    }
    
    $groupName = "Custom Templates";
    $pageList->AddGroup($groupName);
    foreach ($pageLinks as $pageLink) {
        if (strstr($pageLink->getClassAttribute(), 'custom') !== false) {
            $customLink = clone $pageLink;
            if (isset($linksAlternativeCaptions[$pageLink->getLink()])) {
                $customLink->SetCaption($linksAlternativeCaptions[$pageLink->getLink()]);
            }
            $pageList->AddPage(
                $customLink
                    ->setGroupName($groupName)
                    ->SetBeginNewGroup(false)
                    ->setShowAsText(false)
                    ->setLink($customLink->getLink() . '#custom')
            );
        }
    }
        
    $groupName = "Adicionado/Atualizado";
    $pageList->addGroupAt($groupName, 0);
    foreach ($pageLinks as $pageLink) {
        if (strstr($pageLink->getClassAttribute(), 'recently-added') !== false) {
            $customLink = clone $pageLink;
            if (isset($linksAlternativeCaptions[$pageLink->getLink()])) {
                $customLink->SetCaption($linksAlternativeCaptions[$pageLink->getLink()]);
            }
            $pageList->AddPage(
                $customLink
                    ->setGroupName($groupName)
                    ->SetBeginNewGroup(false)
                    ->setShowAsText(false)
                    ->setLink($customLink->getLink() . '#recently-added')
            );
        }
    }
    
    $groupDescriptions = require('external_data/doc/group_descriptions.php');
    $pageGroups = $pageList->GetGroups();
    foreach ($pageGroups as $pageGroup) {
        if (isset($groupDescriptions[$pageGroup->getCaption()])) {
           $pageGroup->setDescription($groupDescriptions[$pageGroup->getCaption()]);              
        }     
    }
}

function Global_BeforeInsertHandler($page, &$rowData, $tableName, &$cancel, &$message, &$messageDisplayTime)
{

}

function Global_BeforeUpdateHandler($page, $oldRowData, &$rowData, $tableName, &$cancel, &$message, &$messageDisplayTime)
{

}

function Global_BeforeDeleteHandler($page, &$rowData, $tableName, &$cancel, &$message, &$messageDisplayTime)
{

}

function Global_AfterInsertHandler($page, $rowData, $tableName, &$success, &$message, &$messageDisplayTime)
{

}

function Global_AfterUpdateHandler($page, $oldRowData, $rowData, $tableName, &$success, &$message, &$messageDisplayTime)
{

}

function Global_AfterDeleteHandler($page, $rowData, $tableName, &$success, &$message, &$messageDisplayTime)
{

}

function GetDefaultDateFormat()
{
    return 'd-m-Y';
}

function GetFirstDayOfWeek()
{
    return 0;
}

function GetPageListType()
{
    return PageList::TYPE_SIDEBAR;
}

function GetNullLabel()
{
    return null;
}

function UseMinifiedJS()
{
    return true;
}

function GetOfflineMode()
{
    return false;
}

function GetInactivityTimeout()
{
    return 0;
}

function GetMailer()
{
    $mailerOptions = new MailerOptions(MailerType::Sendmail, '', '');
    
    return PHPMailerBasedMailer::getInstance($mailerOptions);
}

function sendMailMessage($recipients, $messageSubject, $messageBody, $attachments = '', $cc = '', $bcc = '')
{
    GetMailer()->send($recipients, $messageSubject, $messageBody, $attachments, $cc, $bcc);
}

function createConnection()
{
    $connectionOptions = GetGlobalConnectionOptions();
    $connectionOptions['client_encoding'] = 'utf8';

    $connectionFactory = MyPDOConnectionFactory::getInstance();
    return $connectionFactory->CreateConnection($connectionOptions);
}
