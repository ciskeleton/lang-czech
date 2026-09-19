<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponenty';
$lang['admin_content'] = 'Obsah';
$lang['admin_database_backup'] = 'Zálohy databáze';
$lang['admin_extensions'] = 'Rozšíření';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Nápověda';
$lang['admin_languages'] = 'Jazyky';
$lang['admin_logs'] = 'Systémové záznamy';
$lang['admin_media'] = 'Knihovna médií';
$lang['admin_modules'] = 'Moduly';
$lang['admin_plugins'] = 'Pluginy';
$lang['admin_reports'] = 'Záznam aktivit';
$lang['admin_settings'] = 'Nastavení systému';
$lang['admin_sysinfo'] = 'Informace o systému';
$lang['admin_system'] = 'Systém';
$lang['admin_system_firewall'] = 'Systémový firewall';
$lang['admin_themes'] = 'Šablony';
$lang['admin_updates'] = 'Aktualizace systému';
$lang['admin_users'] = 'Uživatelé';
$lang['admin_view_site'] = 'Zobrazit web';
$lang['per_page'] = 'Na stránku';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Děkujeme, že vytváříte s <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Žádné aktivní položky.} other{<b>#</b> z <b>%s</b> položek je aktivních.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Instalovat';
$lang['admin_install_error'] = 'Instalace balíčku se nezdařila.';
$lang['admin_install_error_com'] = 'Instalace se nezdařila: %s';
$lang['admin_install_location_app'] = 'Pouze tato aplikace';
$lang['admin_install_location_core'] = 'Všechny aplikace';
$lang['admin_install_location_select'] = '&#151; Vyberte umístění &#151;';
$lang['admin_install_success'] = 'Balíček byl úspěšně nainstalován.';
$lang['admin_install_upload'] = 'Nahrát';
$lang['admin_install_upload_error'] = 'Nahrání balíčku se nezdařilo.';
$lang['admin_install_upload_success'] = 'Balíček byl úspěšně nahrán.';
$lang['admin_install_upload_tip'] = 'Nainstalujte balíček nahráním jeho souboru <b>.zip</b> zde.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Nelze vyčistit staré záložní soubory.';
$lang['admin_database_backup_clean_success'] = '%d záložních souborů bylo smazáno. Uvolněno %d místa na disku.';
$lang['admin_database_backup_create'] = 'Vytvořit zálohu';
$lang['admin_database_backup_create_confirm'] = 'Opravdu chcete nyní vytvořit zálohu?';
$lang['admin_database_backup_create_error'] = 'Nelze vytvořit záložní soubor. Ujistěte se, že složka <b>%s</b> je zapisovatelná.';
$lang['admin_database_backup_create_success'] = 'Záložní soubor databáze <b>%s</b> byl úspěšně vytvořen.';
$lang['admin_database_backup_delete_confirm'] = 'Opravdu chcete smazat tyto záložní soubory?';
$lang['admin_database_backup_delete_error'] = 'Nelze smazat vybrané záložní soubory.';
$lang['admin_database_backup_delete_success'] = 'Záložní soubory byly úspěšně smazány.';
$lang['admin_database_backup_download_error'] = 'Nelze stáhnout vybraný záložní soubor.';
$lang['admin_database_backup_download_success'] = 'Záložní soubor byl úspěšně stažen.';
$lang['admin_database_backup_lock_confirm'] = 'Opravdu chcete uzamknout tyto záložní soubory?';
$lang['admin_database_backup_lock_error'] = 'Nelze uzamknout vybrané záložní soubory.';
$lang['admin_database_backup_lock_success'] = 'Záložní soubory byly úspěšně uzamčeny.';
$lang['admin_database_backup_locked_error'] = 'Nelze smazat uzamčené záložní soubory.';
$lang['admin_database_backup_missing_error'] = 'Záložní soubor nebyl nalezen.';
$lang['admin_database_backup_unlock_confirm'] = 'Opravdu chcete odemknout tyto záložní soubory?';
$lang['admin_database_backup_unlock_error'] = 'Nelze odemknout vybrané záložní soubory.';
$lang['admin_database_backup_unlock_success'] = 'Záložní soubory byly úspěšně odemčeny.';
$lang['admin_database_prune'] = 'Pročištění';
$lang['admin_database_prune_confirm'] = 'Opravdu chcete pročistit databázi? Před spuštěním bude vytvořena záloha.';
$lang['admin_database_prune_error'] = 'Nelze pročistit databázi.';
$lang['admin_database_prune_next'] = 'Další pročištění: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Databáze byla úspěšně pročištěna.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Smazat záznamy';
$lang['admin_logs_delete_confirm'] = 'Opravdu chcete smazat vybrané soubory se záznamy?';
$lang['admin_logs_delete_error'] = 'Nelze smazat soubory se záznamy.';
$lang['admin_logs_delete_success'] = 'Soubory se záznamy byly úspěšně smazány.';
$lang['admin_logs_error_disabled'] = 'Záznamy nejsou momentálně povoleny.';
$lang['admin_logs_error_empty'] = 'Nebyl nalezen žádný záznam.';
$lang['admin_logs_error_missing'] = 'Buď soubor se záznamy nebyl nalezen, nebo byl prázdný.';
$lang['admin_logs_tip'] = 'Záznamy mohou rychle vytvořit velmi velké soubory. Na živých webech zvažte smazání starších souborů.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Opravdu chcete smazat vybrané e-maily?';
$lang['admin_emails_delete_error'] = 'Nelze smazat vybrané e-maily.';
$lang['admin_emails_delete_success'] = 'Vybrané e-maily byly úspěšně smazány.';
$lang['admin_emails_email_from'] = 'Odesláno od';
$lang['admin_emails_mail_queue'] = 'Fronta e-mailů';
$lang['admin_emails_mailer'] = 'Hromadný e-mail';
$lang['admin_emails_search'] = 'Hledat e-maily podle předmětu nebo obsahu...';
$lang['admin_emails_send_error'] = 'E-mail se nepodařilo zařadit do fronty. Zkuste to znovu.';
$lang['admin_emails_send_none'] = 'Žádní uživatelé nesplňují vybraná kritéria.';
$lang['admin_emails_send_success'] = 'E-mail byl zařazen do fronty a brzy bude odeslán.';
$lang['admin_emails_send_to_banned'] = 'Odeslat zablokovaným uživatelům.';
$lang['admin_emails_send_to_deleted'] = 'Odeslat smazaným uživatelům.';
$lang['admin_emails_send_to_disabled'] = 'Odeslat neaktivním uživatelům.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Přidat uživatele';
$lang['admin_users_all_users'] = 'Všichni uživatelé';
$lang['admin_users_ban_confirm'] = 'Opravdu chcete zakázat přístup vybraným uživatelům?';
$lang['admin_users_ban_error'] = 'Nelze zakázat přístup vybraným uživatelům.';
$lang['admin_users_ban_success'] = 'Vybraným uživatelům byl úspěšně zakázán přístup.';
$lang['admin_users_delete_confirm'] = 'Opravdu chcete odstranit vybrané uživatele?';
$lang['admin_users_delete_error'] = 'Nelze odstranit vybrané uživatele.';
$lang['admin_users_delete_success'] = 'Vybraní uživatelé byli úspěšně odstraněni.';
$lang['admin_users_disable_confirm'] = 'Opravdu chcete deaktivovat vybrané uživatele?';
$lang['admin_users_disable_error'] = 'Nelze deaktivovat vybrané uživatele.';
$lang['admin_users_disable_success'] = 'Vybraní uživatelé byli úspěšně deaktivováni.';
$lang['admin_users_edit'] = 'Upravit uživatele';
$lang['admin_users_edit_error'] = 'Nelze aktualizovat uživatele.';
$lang['admin_users_edit_success'] = 'Uživatel byl úspěšně aktualizován.';
$lang['admin_users_enable_confirm'] = 'Opravdu chcete aktivovat vybrané uživatele?';
$lang['admin_users_enable_error'] = 'Nelze aktivovat vybrané uživatele.';
$lang['admin_users_enable_success'] = 'Vybraní uživatelé byli úspěšně aktivováni.';
$lang['admin_users_groups'] = 'Skupiny';
$lang['admin_users_lock_confirm'] = 'Opravdu chcete uzamknout vybrané uživatele?';
$lang['admin_users_lock_error'] = 'Nepodařilo se uzamknout vybrané uživatele.';
$lang['admin_users_lock_success'] = 'Vybraní uživatelé byli úspěšně uzamčeni.';
$lang['admin_users_logged'] = 'Přihlášení uživatelé';
$lang['admin_users_manage'] = 'Správa uživatelů';
$lang['admin_users_remove_confirm'] = 'Opravdu chcete trvale odstranit vybrané uživatele a všechna jejich data?';
$lang['admin_users_remove_error'] = 'Nelze trvale odstranit vybrané uživatele a všechna jejich data.';
$lang['admin_users_remove_success'] = 'Vybraní uživatelé a všechna jejich data byli úspěšně odstraněni.';
$lang['admin_users_restore_confirm'] = 'Opravdu chcete obnovit vybrané uživatele?';
$lang['admin_users_restore_error'] = 'Nelze obnovit vybrané uživatele.';
$lang['admin_users_restore_success'] = 'Vybraní uživatelé byli úspěšně obnoveni.';
$lang['admin_users_search'] = 'Hledat jméno nebo e-mail...';
$lang['admin_users_unban_confirm'] = 'Opravdu chcete zrušit zákaz přístupu vybraným uživatelům?';
$lang['admin_users_unban_error'] = 'Nelze zrušit zákaz přístupu vybraným uživatelům.';
$lang['admin_users_unban_success'] = 'Zákaz přístupu vybraným uživatelům byl úspěšně zrušen.';
$lang['admin_users_unlock_confirm'] = 'Opravdu chcete odemknout vybrané uživatele?';
$lang['admin_users_unlock_error'] = 'Nepodařilo se odemknout vybrané uživatele.';
$lang['admin_users_unlock_success'] = 'Vybraní uživatelé byli úspěšně odemknuti.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Vymazat záznamy';
$lang['admin_reports_clear_confirm'] = 'Opravdu chcete vymazat záznamy akcí?';
$lang['admin_reports_clear_error'] = 'Nelze vymazat záznamy akcí.';
$lang['admin_reports_clear_success'] = 'Záznamy akcí byly úspěšně vymazány.';
$lang['admin_reports_latest_actions'] = 'Poslední akce';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Opravdu chcete odstranit vybrané soubory?';
$lang['admin_media_delete_error'] = 'Nelze odstranit soubory.';
$lang['admin_media_delete_success'] = 'Soubory byly úspěšně odstraněny.';
$lang['admin_media_file_delete_error'] = 'Nelze odstranit soubor.';
$lang['admin_media_file_delete_success'] = 'Soubor byl úspěšně odstraněn.';
$lang['admin_media_file_update_error'] = 'Nelze aktualizovat soubor.';
$lang['admin_media_file_update_success'] = 'Soubor byl úspěšně aktualizován.';
$lang['admin_media_search'] = 'Hledat podle názvu, popisu nebo názvu souboru...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Žádné aktivní moduly.} other{<b>#</b> z <b>%s</b> modulů je aktivních.}';
$lang['admin_modules_add'] = 'Přidat modul';
$lang['admin_modules_delete_confirm'] = 'Opravdu chcete odstranit modul: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Nelze odstranit modul.';
$lang['admin_modules_delete_success'] = 'Modul byl úspěšně odstraněn.';
$lang['admin_modules_disable_all_confirm'] = 'Opravdu chcete zakázat všechny moduly?';
$lang['admin_modules_disable_all_error'] = 'Nelze zakázat všechny moduly.';
$lang['admin_modules_disable_all_success'] = 'Všechny moduly byly úspěšně zakázány.';
$lang['admin_modules_disable_confirm'] = 'Opravdu chcete deaktivovat modul: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Nelze deaktivovat modul.';
$lang['admin_modules_disable_success'] = 'Modul byl úspěšně deaktivován.';
$lang['admin_modules_enable_all_confirm'] = 'Opravdu chcete povolit všechny moduly?';
$lang['admin_modules_enable_all_error'] = 'Nelze povolit všechny moduly.';
$lang['admin_modules_enable_all_success'] = 'Všechny moduly byly úspěšně povoleny.';
$lang['admin_modules_enable_confirm'] = 'Opravdu chcete aktivovat modul: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Nelze aktivovat modul.';
$lang['admin_modules_enable_success'] = 'Modul byl úspěšně aktivován.';
$lang['admin_modules_install_confirm'] = 'Opravdu chcete nainstalovat tento modul?';
$lang['admin_modules_install_error'] = 'Instalace modulu se nezdařila.';
$lang['admin_modules_install_success'] = 'Modul byl úspěšně nainstalován.';
$lang['admin_modules_install_tip'] = 'Moduly přidávají nové funkce a vlastnosti vašemu webu. Procházejte dostupné moduly v <a href="%s" target="_blank" rel="noopener">adresáři modulů</a> nebo nahrajte balíček <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Žádné aktivní pluginy.} other{<b>#</b> z <b>%s</b> pluginů je aktivních.}';
$lang['admin_plugins_add'] = 'Přidat plugin';
$lang['admin_plugins_delete_confirm'] = 'Opravdu chcete smazat plugin: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Nelze smazat plugin.';
$lang['admin_plugins_delete_success'] = 'Plugin úspěšně smazán.';
$lang['admin_plugins_disable_all_confirm'] = 'Opravdu chcete zakázat všechny pluginy?';
$lang['admin_plugins_disable_all_error'] = 'Nelze zakázat všechny pluginy.';
$lang['admin_plugins_disable_all_success'] = 'Všechny pluginy byly úspěšně zakázány.';
$lang['admin_plugins_disable_confirm'] = 'Opravdu chcete deaktivovat plugin: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Nelze deaktivovat plugin.';
$lang['admin_plugins_disable_success'] = 'Plugin úspěšně deaktivován.';
$lang['admin_plugins_enable_all_confirm'] = 'Opravdu chcete povolit všechny pluginy?';
$lang['admin_plugins_enable_all_error'] = 'Nelze povolit všechny pluginy.';
$lang['admin_plugins_enable_all_success'] = 'Všechny pluginy byly úspěšně povoleny.';
$lang['admin_plugins_enable_confirm'] = 'Opravdu chcete aktivovat plugin: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Nelze aktivovat plugin.';
$lang['admin_plugins_enable_success'] = 'Plugin úspěšně aktivován.';
$lang['admin_plugins_install_confirm'] = 'Opravdu chcete nainstalovat tento plugin?';
$lang['admin_plugins_install_error'] = 'Instalace pluginu se nezdařila.';
$lang['admin_plugins_install_success'] = 'Plugin byl úspěšně nainstalován.';
$lang['admin_plugins_install_tip'] = 'Pluginy rozšiřují existující funkce o další možnosti nebo integrace. Nainstalujte z <a href="%s" target="_blank" rel="noopener">adresáře pluginů</a> nebo nahrajte soubor <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Přidat motiv';
$lang['admin_themes_delete_confirm'] = 'Opravdu chcete odstranit motiv: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Nelze odstranit motiv.';
$lang['admin_themes_delete_error_active'] = 'Nemůžete odstranit aktuálně aktivní motiv.';
$lang['admin_themes_delete_success'] = 'Motiv byl úspěšně odstraněn.';
$lang['admin_themes_disable_confirm'] = 'Opravdu chcete deaktivovat motiv: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Motiv nelze deaktivovat.';
$lang['admin_themes_disable_success'] = 'Motiv byl úspěšně deaktivován.';
$lang['admin_themes_enable_confirm'] = 'Opravdu chcete aktivovat motiv: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Nelze aktivovat motiv.';
$lang['admin_themes_enable_success'] = 'Motiv byl úspěšně aktivován.';
$lang['admin_themes_install_confirm'] = 'Opravdu chcete nainstalovat toto téma?';
$lang['admin_themes_install_error'] = 'Instalace tématu se nezdařila.';
$lang['admin_themes_install_success'] = 'Téma bylo úspěšně nainstalováno.';
$lang['admin_themes_install_tip'] = 'Témata mění vzhled a rozvržení vašeho webu. Vyberte z <a href="%s" target="_blank" rel="noopener">knihovny témat</a> nebo nahrajte soubor <b>.zip</b> pro instalaci vlastního.';
$lang['admin_themes_none_tip'] = 'Tato aplikace běží bez motivu. Nainstalujte motiv, chcete-li přizpůsobit veřejné rozhraní.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menu';
$lang['admin_menus_assign_error'] = 'Nelze aktualizovat umístění menu.';
$lang['admin_menus_assign_success'] = 'Umístění menu bylo úspěšně aktualizováno.';
$lang['admin_menus_header'] = 'Je k dispozici <b>%s</b> umístění menu.';
$lang['admin_menus_location'] = 'Umístění';
$lang['admin_menus_locations'] = 'Umístění menu';
$lang['admin_menus_manage'] = 'Spravovat menu';
$lang['admin_menus_menu'] = 'Přiřazené menu';
$lang['admin_menus_none'] = '&#151; Žádné &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Přidat jazyk';
$lang['admin_languages_default_confirm'] = 'Opravdu chcete nastavit tento jazyk jako výchozí jazyk webu?';
$lang['admin_languages_default_error'] = 'Nelze změnit výchozí jazyk.';
$lang['admin_languages_default_error_nochange'] = 'Tento jazyk je již nastaven jako výchozí.';
$lang['admin_languages_default_success'] = 'Výchozí jazyk byl úspěšně změněn.';
$lang['admin_languages_disable_all_confirm'] = 'Opravdu chcete zakázat všechny jazyky?';
$lang['admin_languages_disable_all_error'] = 'Nelze zakázat všechny jazyky.';
$lang['admin_languages_disable_all_success'] = 'Všechny jazyky byly úspěšně zakázány.';
$lang['admin_languages_disable_confirm'] = 'Opravdu chcete deaktivovat jazyk: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Nelze deaktivovat jazyk.';
$lang['admin_languages_disable_error_default'] = 'Výchozí jazyk nelze deaktivovat.';
$lang['admin_languages_disable_error_nochange'] = 'Tento jazyk je již deaktivován.';
$lang['admin_languages_disable_success'] = 'Jazyk byl úspěšně deaktivován.';
$lang['admin_languages_enable_all_confirm'] = 'Opravdu chcete povolit všechny jazyky?';
$lang['admin_languages_enable_all_error'] = 'Nelze povolit všechny jazyky.';
$lang['admin_languages_enable_all_success'] = 'Všechny jazyky byly úspěšně povoleny.';
$lang['admin_languages_enable_confirm'] = 'Opravdu chcete aktivovat jazyk: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Nelze aktivovat jazyk.';
$lang['admin_languages_enable_error_nochange'] = 'Tento jazyk je již aktivován.';
$lang['admin_languages_enable_success'] = 'Jazyk byl úspěšně aktivován.';
$lang['admin_languages_install_confirm'] = 'Opravdu chcete nainstalovat tento jazyk?';
$lang['admin_languages_install_error'] = 'Instalace jazyka se nezdařila.';
$lang['admin_languages_install_success'] = 'Jazyk byl úspěšně nainstalován.';
$lang['admin_languages_install_tip'] = 'Jazyky přidávají překlady pro rozhraní a obsah vašeho webu. Prohlédněte si dostupné jazyky v <a href="%s" target="_blank" rel="noopener">adresáři jazyků</a> nebo nahrajte balíček <b>.zip</b> a nainstalujte si vlastní.';
$lang['admin_languages_tip'] = 'Povolte, zakažte a nastavte výchozí jazyk webu. Povolené jazyky jsou dostupné návštěvníkům webu.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Balíček již existuje.';
$lang['package_archive_download_failed'] = 'Nepodařilo se stáhnout archiv balíčku.';
$lang['package_backup_create_error'] = 'Nepodařilo se vytvořit zálohu balíčku.';
$lang['package_backup_dir_failed'] = 'Nepodařilo se vytvořit záložní adresář %s';
$lang['package_backup_missing'] = 'Záložní soubor neexistuje.';
$lang['package_backup_path_error'] = 'Cestu k záložnímu souboru se nepodařilo vyřešit.';
$lang['package_backup_request_invalid'] = 'Neplatný požadavek na zálohu.';
$lang['package_backup_restore_error'] = 'Nepodařilo se obnovit zálohu balíčku.';
$lang['package_catalog_type_unknown'] = 'Neznámý typ katalogu.';
$lang['package_checksum_error'] = 'Ověření kontrolního součtu (checksum) balíčku selhalo.';
$lang['package_copy_files_error'] = 'Nepodařilo se zkopírovat soubory balíčku do cíle.';
$lang['package_copy_updates_error'] = 'Nepodařilo se zkopírovat aktualizační soubory do cíle.';
$lang['package_dest_dir_failed'] = 'Nepodařilo se vytvořit cílový adresář %s';
$lang['package_destination_error'] = 'Cíl balíčku se nepodařilo vyřešit.';
$lang['package_download_dir_failed'] = 'Nepodařilo se vytvořit adresář pro stahování %s';
$lang['package_download_empty'] = 'Stažení balíčku vrátilo prázdnou odpověď.';
$lang['package_download_request_invalid'] = 'Neplatný požadavek na stažení balíčku.';
$lang['package_extract_failed'] = 'Nepodařilo se rozbalit ZIP %s';
$lang['package_invalid_lang_files'] = 'Neplatný jazyk — chybí požadované jazykové soubory aplikace.';
$lang['package_invalid_lang_structure'] = 'Neplatný jazyk — chybí adresáře admin a/nebo ci3.';
$lang['package_invalid_missing_info'] = 'Neplatný %s: chybí "info.php".';
$lang['package_invalid_module_structure'] = 'Neplatný modul — chybí požadované adresáře config a/nebo controllers.';
$lang['package_invalid_plugin_boot'] = 'Neplatný plugin — chybí "boot.php".';
$lang['package_invalid_plugin_contents'] = 'Neplatný plugin — pluginy nesmí obsahovat kontrolery ani pohledy (views).';
$lang['package_invalid_theme_boot'] = 'Neplatný vzhled — chybí "boot.php".';
$lang['package_invalid_theme_views'] = 'Neplatný vzhled — chybí adresář views.';
$lang['package_no_root_dir'] = 'Balíček neobsahuje kořenový adresář.';
$lang['package_not_downloadable'] = 'Balíček není veřejně stažitelný.';
$lang['package_not_in_registry'] = 'Balíček není k dispozici ve veřejném registru.';
$lang['package_request_invalid'] = 'Neplatný požadavek na balíček.';
$lang['package_rollback_request_invalid'] = 'Neplatný požadavek na návrat k předchozí verzi.';
$lang['package_root_mismatch'] = 'Kořenový adresář archivu balíčku neodpovídá %s';
$lang['package_single_root_required'] = 'Balíček musí obsahovat právě jeden kořenový adresář.';
$lang['package_source_error'] = 'Zdroj balíčku se nepodařilo vyřešit.';
$lang['package_system_core_restricted'] = 'Systémové komponenty nelze instalovat jako balíčky.';
$lang['package_temp_dir_failed'] = 'Nepodařilo se vytvořit dočasný adresář %s';
$lang['package_type_unknown'] = 'Neznámý typ balíčku.';
$lang['package_update_request_invalid'] = 'Neplatný požadavek na aktualizaci balíčku.';
$lang['package_update_root_mismatch'] = 'Kořenový adresář archivu aktualizace neodpovídá %s.';
$lang['package_upload_dir_failed'] = 'Nepodařilo se vytvořit adresář pro nahrávání %s';
$lang['package_url_invalid'] = 'Neplatná adresa URL distribuce balíčku.';
$lang['package_write_failed'] = 'Nepodařilo se zapsat balíček do %s';
$lang['package_zip_not_found'] = 'ZIP balíček neexistuje: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'K dispozici jsou nové aktualizace!';
$lang['update_backup_error'] = 'Nelze vytvořit zálohu existujícího balíčku. Aktualizace byla přerušena.';
$lang['update_check_disabled'] = 'Automatické kontroly aktualizací jsou zakázány. Povolte je pro zobrazení aktualizací.';
$lang['update_check_error'] = 'Kontrolu aktualizací nelze v tuto chvíli spustit.';
$lang['update_check_success'] = 'Kontrola aktualizací úspěšně dokončena.';
$lang['update_install_error'] = 'Balíček nemohl být nainstalován. Předchozí verze byla zachována.';
$lang['update_install_success'] = 'Balíček byl úspěšně aktualizován na nejnovější verzi.';
$lang['update_interval_3days'] = 'Každé 3 dny';
$lang['update_interval_biweekly'] = 'Každé 2 týdny';
$lang['update_interval_daily'] = 'Každý den';
$lang['update_interval_monthly'] = 'Jednou měsíčně';
$lang['update_interval_weekly'] = 'Jednou týdně';
$lang['update_not_available'] = 'Vaše webové stránky jsou aktuální.';
$lang['update_rollback_error'] = 'Předchozí verzi nelze obnovit. Může být nutný ruční zásah.';
$lang['update_rollback_success'] = 'Předchozí verze úspěšně obnovena.';
$lang['updates_available'] = 'Dostupné aktualizace';
$lang['updates_check_now'] = 'Zkontrolovat nyní';
$lang['updates_check_now_confirm'] = 'Jste si jisti, že chcete nyní zkontrolovat aktualizace?';
$lang['updates_current_version'] = 'Aktuální verze';
$lang['updates_enable'] = 'Povolit aktualizace';
$lang['updates_last_check'] = 'Poslední kontrola: %s';
$lang['updates_latest_version'] = 'Nejnovější verze';
$lang['updates_next_check'] = 'Další naplánovaná kontrola: %s';
$lang['updates_previous_version'] = 'Předchozí verze';
$lang['updates_recent'] = 'Nedávno aktualizováno';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Zablokování zadané IP adresy se nezdařilo.';
$lang['admin_firewall_ban_success'] = 'IP adresa byla úspěšně zablokována.';
$lang['admin_firewall_block_ip'] = 'Zablokovat IP adresu';
$lang['admin_firewall_delete_confirm'] = 'Opravdu chcete odblokovat vybrané IP adresy?';
$lang['admin_firewall_delete_error'] = 'Odblokování vybraných IP adres se nezdařilo.';
$lang['admin_firewall_delete_success'] = 'Vybrané IP adresy byly úspěšně odblokovány.';
$lang['admin_firewall_duration'] = 'Délka zákazu';
$lang['admin_firewall_permanent'] = 'Trvalý';
$lang['admin_firewall_reason'] = 'Důvod zákazu';
$lang['admin_firewall_tip'] = 'Prohlížejte a spravujte IP adresy blokované firewallem kvůli opakovaným přestupkům nebo podezřelé aktivitě.';

// Settings
$lang['404_ban_duration'] = 'Doba trvání blokování 404';
$lang['404_threshold'] = 'Limit 404';
$lang['uri_ban_duration'] = 'Doba zablokování URI';
$lang['uri_strike_threshold'] = 'Limit URI';
