<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Dostupné aktualizace systému';
$lang['emails_updates_available_message'] = <<<EOT
Dobrý den,

byly zjištěny nové aktualizace systému pro {site_anchor}.

Tyto aktualizace mohou zahrnovat opravy zabezpečení, vylepšení výkonu nebo nové funkce.
Doporučujeme je co nejdříve zkontrolovat.

Dostupné aktualizace můžete zkontrolovat a spravovat v administračním panelu:
{link}

Pokud jste aktualizace již zkontrolovali nebo nainstalovali, není třeba provádět žádné další kroky.

Toto je automatická systémová zpráva odeslaná {site_name}.
Na tento e-mail prosím neodpovídejte.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Aktivace účtu';
$lang['emails_account_activation_request_message'] = <<<EOT
Dobrý den, {name},

Děkujeme za registraci na {site_anchor}. Váš účet byl vytvořen, ale je třeba jej aktivovat, než jej budete moci používat.

Pro aktivaci svého účtu klikněte na následující odkaz nebo jej zkopírujte a vložte do prohlížeče:
{link}

S přáním všeho dobrého,
-- Tým {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Nový aktivační odkaz';
$lang['emails_account_activation_resend_message'] = <<<EOT
Dobrý den, {name},

Nedávno jste si na {site_anchor} vyžádali nový aktivační odkaz, protože váš účet nebyl aktivní.
Pro aktivaci účtu klikněte na následující odkaz nebo jej zkopírujte a vložte do prohlížeče:
{link}

Pokud jste o tento odkaz nežádali, nemusíte podnikat žádné další kroky.

Tato žádost byla odeslána z této IP adresy: {ip_link}

S přáním všeho dobrého,
-- Tým {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Účet aktivován';
$lang['emails_account_activation_success_message'] = <<<EOT
Dobrý den, {name},

Váš účet na {site_anchor} byl úspěšně aktivován. Nyní se můžete <a href="{login_url}" target="_blank" rel="noopener">přihlásit</a> kdykoli budete chtít.

Doufáme, že si pobyt u nás užijete, přijměte naše srdečné pozdravy.

S pozdravem,
-- Tým {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Účet čeká na schválení';
$lang['emails_account_approval_pending_message'] = <<<EOT
Dobrý den, {name},

Děkujeme, že jste se připojili k {site_anchor}. Váš účet byl vytvořen, ale než bude aktivní, musí být schválen administrátorem.
Omlouváme se za tuto nezbytnou fázi – je zavedena výhradně z bezpečnostních důvodů.

Jakmile bude váš účet schválen, obdržíte potvrzovací e-mail.

Doufáme, že se vám u nás bude líbit. Přijměte náš upřímný pozdrav.

-- Tým {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Účet schválen';
$lang['emails_account_approval_success_message'] = <<<EOT
Dobrý den, {name},

Skvělé zprávy! Váš účet na {site_anchor} byl právě schválen.

Nyní se můžete přihlásit a ihned začít svůj účet používat:
{link}

Jsme rádi, že jste s námi.

-- Tým {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Účet obnoven';
$lang['emails_account_restored_message'] = <<<EOT
Dobrý den, {name},

Tento e-mail potvrzuje, že váš účet na {site_anchor} byl úspěšně obnoven.

Vítejte zpět! Doufáme, že si tentokrát pobyt u nás opravdu užijete.

S pozdravem,
-- Tým {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Vítejte na {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Dobrý den, {name},

Většina webů vás po registraci zasype dlouhou sérií uvítacích e-mailů.

Dobrá zpráva: my mezi ně nepatříme.
Přesto vás chceme srdečně přivítat a poděkovat, že jste se připojili k {site_anchor}.

Doufáme, že se vám u nás bude líbit. Přijměte náš upřímný pozdrav.

-- Tým {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Žádost o změnu e-mailu';
$lang['emails_email_change_request_message'] = <<<EOT
Dobrý den, {name},

Tento e-mail jste obdrželi, protože jsme obdrželi žádost o změnu e-mailové adresy pro váš účet na {site_anchor}.

Pokud si přejete pokračovat, klikněte na následující odkaz nebo jej zkopírujte a vložte do prohlížeče:
{link}

Pokud jste o změnu e-mailové adresy nežádali, nemusíte podnikat žádné další kroky.

Tato žádost byla odeslána z této IP adresy: {ip_link}

S pozdravem,
-- Tým {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'E-mailová adresa změněna';
$lang['emails_email_change_success_message'] = <<<EOT
Dobrý den, {name},

Tento e-mail potvrzuje, že vaše e-mailová adresa používaná na {site_anchor} byla úspěšně změněna.

Pokud jste tuto akci neprovedli, co nejdříve nás kontaktujte, abychom tento problém vyřešili.

Tato akce byla provedena z této IP adresy: {ip_link}.

S pozdravem,
-- Tým {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Upozornění na neúspěšné přihlášení';
$lang['emails_login_alert_failure_message'] = <<<EOT
Dobrý den, {name},

Někdo se nedávno pokusil přihlásit k vašemu účtu na {site_name} pomocí nesprávného hesla.

Datum serveru: {date}
Zařízení: {browser}, {platform}
IP adresa: {ip_link}

Pokud jste to nebyli vy, buďte v klidu – přihlášení nebylo úspěšné.

Pokud jste to byli vy a nepamatujete si své heslo, klikněte na následující odkaz pro jeho obnovení:
{reset_link}

Máte-li potíže s přihlášením, kontaktujte náš tým nebo požádejte o jednorázový přihlašovací odkaz.

-- Tým {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Oznámení o úspěšném přihlášení';
$lang['emails_login_alert_success_message'] = <<<EOT
Dobrý den, {name},

Tento e-mail vám posíláme v návaznosti na úspěšné přihlášení k vašemu účtu na {site_name}.

Datum serveru: {date}
Zařízení: {browser}, {platform}
IP adresa: {ip_link}

Pokud jste to byli vy, tento e-mail můžete klidně ignorovat.

Pokud jste se nepřihlašovali vy, změňte prosím ihned své heslo a zabezpečte účet.

V případě potřeby nás neváhejte kontaktovat.

-- Tým {site_name}.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Odkaz pro rychlé přihlášení';
$lang['emails_login_magic_link_message'] = <<<EOT
Dobrý den, {name},

Požádali jste o přihlášení jedním kliknutím ke svému účtu na {site_anchor}.

Klikněte na odkaz níže, nebo ho zkopírujte a vložte do prohlížeče a budete okamžitě přihlášeni:
{link}

Tento odkaz vyprší za 15 minut. Pokud jste o něj nežádali, prosím ignorujte tento e-mail.

Tato žádost byla odeslána z této IP adresy: {ip_link}

S pozdravem,
-- Tým {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Dvoufaktorové ověření';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Dobrý den, {name},

Váš ověřovací kód pro dvoufázové přihlášení je: <strong>{code}</strong>

Dvoufázové ověření můžete kdykoli vypnout v nastavení svého účtu.

Tato akce byla provedena z této IP adresy: {ip_link}.

S pozdravem,
-- Tým {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Žádost o obnovení hesla';
$lang['emails_password_change_request_message'] = <<<EOT
Dobrý den, {name},

Tento e-mail jste obdrželi, protože jsme obdrželi žádost o obnovení hesla k vašemu účtu na {site_anchor}.

Pokud si přejete pokračovat, klikněte na následující odkaz nebo jej zkopírujte a vložte do prohlížeče:
{link}

Pokud jste o resetování hesla nežádali, nemusíte podnikat žádné další kroky.

Tato žádost byla odeslána z této IP adresy: {ip_link}

S pozdravem,
-- Tým {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Heslo úspěšně změněno';
$lang['emails_password_change_success_message'] = <<<EOT
Dobrý den, {name},

Tento e-mail potvrzuje, že vaše heslo na {site_anchor} bylo úspěšně změněno. Nyní se můžete <a href="{login_url}" target="_blank" rel="noopener">přihlásit</a> pomocí nového hesla.

Pokud jste tuto akci neprovedli vy, kontaktujte nás prosím co nejdříve, abychom problém vyřešili.

Tato akce byla provedena z této IP adresy: {ip_link}.

S pozdravem,
-- Tým {site_name}.
EOT;
