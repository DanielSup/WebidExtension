<?php
/***************************************************************************
 *   copyright				: (C) 2008 - 2017 WeBid
 *   site					: http://www.webidsupport.com/
 ***************************************************************************/

/***************************************************************************
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version. Although none of the code may be
 *   sold. If you have been sold this script, get a refund.
 ***************************************************************************/
// 90/110
if (!defined('InWeBid') || !defined('InAdmin')) {
    exit();
}

// common strings
$MSG['editor_help'] = "Note: each new line character will be converted to <b>&lt;br&gt;</b> HTML tag.";
$MSG['cannot_delete'] = "Cannot be deleted";

// aboutus.php
$MSG['about_us_page'] = "Stránka o nás";
$MSG['active_about_us'] = "Aktivovat stránku o nás?";
$MSG['active_about_us_explain'] = "Aktivujte tuto možnost, pokud chcete, aby se v zápatí vašich stránek objevil odkaz <u> O nás </u>.";
$MSG['about_us_content'] = "O nás obsah stránky";
$MSG['about_us_content_explain'] = "Poznámka: každý nový řádkový znak bude převeden na <b>&lt;br&gt;</b> HTML tag.";
$MSG['about_us_updated'] = "O nás Aktualizováno";

// accounts.php
// nothing

// activatenewsletter.php
$MSG['newsletter_settings_updated'] = "Nastavení zpravodaje bylo aktualizováno";
$MSG['activate_newsletter'] = 'Povolit zpravodaj';
$MSG['activate_newsletter_explain'] = 'Pokud tuto možnost aktivujete, uživatelé dostanou možnost přihlásit se k odběru novinek. <br> \ "Správa bulletinů \" vám umožní zasílat e-mailové zprávy přihlášeným uživatelům.';

// addnew.php
// nothing

// adminusers.php
$MSG['1100'] = 'Účet, ze kterého jste právě přihlášeni, nemůžete odstranit';
$MSG['1101'] = 'Účty správce byly smazány';

// analytics.php
$MSG['analytics'] = "analytika";
$MSG['analytics_updated'] = "Nastavení analytiky bylo aktualizováno";
$MSG['analytics_tracking_code'] = "Sledovací kód Analytiky";
$MSG['analytics_tracking_code_hint'] = "Zde zkopírujte a vložte svůj analytický sledovací kód (např. Google Analytics). Musíte zahrnout otevírání a zavírání &lt;script&gt;&lt;/script&gt; tags.";

// auctions.php
$MSG['auction_settings'] = "Nastavení aukce";
$MSG['auction_settings_updated'] = "Nastavení aukce bylo aktualizováno";
$MSG['error_numeric_values'] = "Zadejte platné číselné hodnoty.";
$MSG['error_max_pic_size_zero'] = "<i>Maximální velikost obrázku</i> nemůže být nula.";
$MSG['error_max_num_pics_numeric'] = "<i>Max. počet obrázků</i> musí být vyjádřen číselně.";
$MSG['error_max_pic_size_numeric'] = "<i>Max velikost obrázku</i> musí být vyjádřeno číselně.";
$MSG['enable_proxy_bidding'] = "Povolit nabízení proxy";
$MSG['enable_proxy_bidding_explain'] = "Proxy nabízení funguje, když vítězný uchazeč platí místo své nejvyšší nabídky cenu druhé nejvyšší nabídky plus definovaný přírůstek. <a href=\"https://en.wikipedia.org/wiki/Proxy_bid\" target=\"_blank\">Wikipedia explaination</a>";
$MSG['enable_custom_start_date'] = "Povolit vlastní datum zahájení?";
$MSG['enable_custom_start_date_explain'] = "Uživatelé mohou nastavit vlastní datum zahájení aukcí";
$MSG['enable_custom_end_date'] = "Povolit vlastní datum ukončení?";
$MSG['enable_custom_end_date_explain'] = "Uživatelé mohou pro aukce nastavit vlastní <b> konec </b> datum";
$MSG['enable_custom_increments'] = "Povolit vlastní přírůstky";
$MSG['enable_custom_increments_explain'] = "Uživatelé mohou pro své aukce nastavit vlastní přírůstky nabídek (toto je minimální rozdíl mezi dvěma nabídkami)";
$MSG['hours_until_countdown'] = "Hodiny do ukončení aukce se odpočítávají";
$MSG['hours_until_countdown_explain'] = "Zbývající hodiny v aukci, dokud se zbývající čas nestane automatickým odpočítávacím časovačem";
$MSG['additional_auction_options'] = "Další aukční možnosti";
$MSG['enable_featured_items'] = "Povolit vybrané položky";
$MSG['enable_featured_items_explain'] = "Umožňuje prodejcům provádět aukce na domovské stránce a na stránkách kategorií";
$MSG['enable_hightlighted_items'] = "Povolit zvýrazněné položky";
$MSG['enable_hightlighted_items_explain'] = "Umožňuje prodejcům zvýraznit své aukce (zobrazený výpis v jiné barvě ve výsledcích vyhledávání atd.)";
$MSG['enable_bold_items'] = "Povolit tučné písmo položky";
$MSG['enable_bold_items_explain'] = "Umožňuje prodejcům zvýraznit své aukce tučným písmem (zobrazený výpis tučným písmem ve výsledcích vyhledávání atd.)";
$MSG['enable_subtitles'] = 'Povolit titulky';
$MSG['enable_subtitles_explain'] = 'Umožňuje prodejcům přidat do aukce titulky, které se objeví na všech seznamech aukcí';
$MSG['enable_second_cat'] = 'Povolit podkategorii';
$MSG['enable_second_cat_explain'] = 'Umožňuje prodejcům přidat aukci do více kategorií';
$MSG['enable_auto_relist'] = 'Povolit automatické relistování';
$MSG['enable_auto_relist_explain'] = 'Umožněte uživatelům automaticky znovu zapnout aukce, pokud skončí bez vítěze';
$MSG['max_relists'] = 'Max Relistování';
$MSG['max_relists_explain'] = 'Nastavte maximální počet relistování v určité aukci';
$MSG['auction_extension_settings'] = "Nastavení prodloužení aukce";
$MSG['enable_auto_extension'] = "Povolit automatické prodloužení aukce?";
$MSG['enable_auto_extension_explain'] = "Automatické prodloužení aukcí vám dává možnost automaticky prodloužit čas ukončení aukce o <b> X </b> sekund,
pokud někdo nabídky v posledních <b> Y </b> sekundách trvání aukce.";
$MSG['auto_extend_auction_by'] = "Prodlužte aukci o %s , pokud někdo nabídne nabídku během posledních %s";
$MSG['enable_picture_gallery'] = "Povolit galerii obrázků?";
$MSG['enable_picture_gallery_explain'] = "Umožňuje prodejcům nahrát do své aukce více obrázků.";
$MSG['gallery_images_allowance'] = "Max. Počet obrázků"; // Also index.php
$MSG['gallery_image_max_kb'] = "Max. velikost obrázků"; // Also index.php
$MSG['gallery_image_max_kb_explain'] = "Zadejte maximální povolenou velikost (v kB) obrázků, které mohou prodejci nahrát pro každou aukci.";
$MSG['thumbnail_size'] = "Velikost miniatury."; // Also displaysettings.php
$MSG['thumbnail_size_explain'] = "Toto je velikost miniatury, která se zobrazí na stránce výpisu aukcí";
$MSG['pixels'] = " pixelů "; // Also displaysettings.php
$MSG['gallery_image_max_size'] = "Maximální velikost fotografie v galerii";
$MSG['gallery_image_max_size_explain'] = "Nastavte maximální šířku nebo výšku, kterou může mít fotografie, pokud je větší, bude změněna její velikost";

// banips.php/tpl
$MSG['ip_addresses'] = "IP Adresy"; // Also user-sidebar.tpl
$MSG['ip_ban_management'] = "Správa zákazů IP";
$MSG['ban_this_ip'] = "Zákaz těchto IP adres: ";
$MSG['ip_example'] = "(Kompletní IP adresa - příklad: 185.39.51.63)";
$MSG['no_ips_banned'] = 'Dosud nebyly zakázány žádné adresy IP.';
$MSG['manually_entered'] = "Ručně zadáno";
$MSG['ip_address'] = "IP Adresa"; // Also viewuserips.tpl
$MSG['ban'] = "Zákaz"; // Also viewuserips.tpl
$MSG['accept'] = "Přijmout"; // Also viewuserips.tpl
$MSG['accepted'] = 'Přijato'; // Also viewuserips.tpl
$MSG['banned'] = 'Zakázáno'; // Also viewuserips.tpl
$MSG['process_selection'] = "Výběr procesu"; // Also viewuserips.tpl
$MSG['ip_banned'] = "IP adresa zakázána.";
$MSG['ip_bans_removed'] = "%d IP adresy byly odstraněny ze seznamu zákazů.";
$MSG['ip_bans_added'] = "Do seznamu zákazů bylo přidáno %d IP adres.";
$MSG['error_cannot_ban_self'] = "Nemůžete zakázat svou vlastní IP adresu";

// banners.php
$MSG['banner_admin'] = "Správa bannerů";
$MSG['activate_banner_support'] = "Aktivujte podporu bannerů?";
$MSG['activate_banner_support_explain'] = "Systém bannerů WeBid načítá bannery náhodně z databáze po použití filtrů, které jste nastavili při vložení banneru.";
$MSG['banner_settings_updated'] = "Nastavení bannerů bylo aktualizováno";

// boards.php/tpl
$MSG['board_management'] = "Správa nástěnky"; // Also editboard, newboard, editmessage
$MSG['boards_removed'] = "Vybrané nástěnky byly odstraněny";
$MSG['num_messages'] = "# MSGS"; // Also editboards.tpl
$MSG['show'] = "UKÁZAT";
$MSG['delete_board_warning'] = "POZNÁMKA: odstraněním nástěnky se odstraní všechny související zprávy.";

// boardsettings.php
$MSG['msg_board_settings'] = "Nastavení nástěnek";
$MSG['msg_board_settings_updated'] = "Nastavení nástěnky bylo aktualizováno";
$MSG['enable_message_boards'] = "Povolit nástěnky?";
$MSG['enable_message_boards_explain'] = "Nástěnky jsou místem, kde si uživatelé mohou navzájem zveřejňovat veřejné zprávy a dotazy";

// buyerprivacy.php
$MSG['bidder_privacy'] = "Ochrana soukromí dražitelů";
$MSG['bidder_privacy_updated'] = "Nastavení ochrany osobních údajů u dražících aktualizováno";
$MSG['enable_bidder_privacy'] = "Povolit annonymitu u  dražitele?";
$MSG['enable_bidder_privacy_explain'] = "Pokud je tato možnost povolena, identita dražicích je skryta všem, kromě prodejce položky";

// buyitnow.php
$MSG['buy_it_now_settings_updated'] = "Koupit nyní aktualizace nastavení";
$MSG['enable_buy_it_now'] = "Aktivovat Koupit hned teď?";
$MSG['enable_buy_it_now_explain'] = "Poskytuje prodejcům možnost nastavit si cenu v  Kup to Nyní.";
$MSG['enable_buy_it_now_only'] = "Povolit jako jedinou možnost Kup to Nyní";
$MSG['enable_buy_it_now_only_explain'] = "Poskytněte svým prodejcům možnost nastavit aukce, pro které nebude možné podat žádnou nabídku, ale použijte pouze funkci <b> Koupit hned </b> (aukce s pevnou cenou). <br> <b> Poznámka: </b> Možnost <b> Koupit pouze nyní </b> se projeví, pouze pokud je povolena možnost <b> Koupit nyní </b>.";
$MSG['enable_bin_only_auto_disable'] = "Možnost Koupit to nyní pouze automatický zakáz";
$MSG['enable_bin_only_auto_disable_explain'] = "Funkce Zakázat nyní automatické deaktivace automaticky deaktivuje možnost Koupit pouze nyní pro uživatele, pokud procento nákupu Pouze nyní aukce dosáhnou stanovené hodnoty, můžete ji použít jako odrazující prostředek, který zabrání lidem v šíření spamu nyní pouze aukce";
$MSG['buy_it_now_only_limit'] = "Limit pro Kup to Nyní";

// categories.php
$MSG['delete_category_move_auctions'] = 'Co chcete dělat s aukcemi a podkategoriemi v následujících kategoriích <br> <small> (Pokud je chcete přesunout, musíte zadat ID kategorie, kam se chcete přesunout)</small>';
$MSG['move_category_missing_id'] = 'Některé kategorie vybrané k přesunutí nelze zpracovat, protože nebylo zadáno platné ID kategorie, kam by byly přesunuty';
$MSG['this_cannot_be_undone'] = 'Tuto akci nelze vrátit zpět.';

// categoriestrans.php
// nothing

// catsorting.php
$MSG['category_sorting'] = "Třídění Kategorií";
$MSG['category_sorting_updated']= "Aktualizace nastavení třídění kategorií";
$MSG['category_sorting_explain'] = "Seznam kategorií v levém sloupci domovské stránky lze třídit <b>alphabetically</b> nebo o počtu aukcí obsažených v každé kategorii(<b>categories counters</b>).<br>
			Níže vyberte metodu třídění, kterou chcete použít";
$MSG['category_sorting_alpha'] = "Abecedně";
$MSG['category_sorting_count'] = "Počítadla kategorií";
$MSG['categories_to_show'] = "Kategorie k zobrazení: ";
$MSG['categories_to_show_explain'] = "V levém sloupci domovské stránky můžete nastavit počet kategorií, které chcete zobrazit";

// checkversion.php
$MSG['error_file_access_disabled'] = "<p>Přístup k souborům URL na vašem serveru je zakázán, takže WeBid nemůže spustit kontrolu verze</p>"; // Also index.php
$MSG['outdated_version'] = "Používáte starou verzi, ze které si můžete stáhnout nejnovější verzi<a href='http://sourceforge.net/project/showfiles.php?group_id=181393'>here</a>";
$MSG['current_version'] = "Používáte nejnovější verzi";

// clear_image_cache.php/.tpl
$MSG['clear_image_cache'] = "Vymazat mezipaměť obrázků";
$MSG['image_cache_cleared'] = "Mezipaměť obrázků byla vyčištěna";
$MSG['clear_image_cache_explain'] = "Smažte všechny soubory mezipaměti obrázků. Může to pomoci, pokud se na webu nezobrazují některé obrázky";

// clearcache.php
$MSG['clear_cache'] = "Clear Cache";
$MSG['clear_cache_explain'] = "Delete all the template cache files, you will need to do this each time you edit a template file";
$MSG['cache_cleared'] = "Cache cleared";

// contactseller.php
$MSG['contact_seller'] = "Contact the seller";
$MSG['contact_seller_explain'] = "Giving anybody the option to contact sellers through your website is not recommended. For this reason WeBid
      gives you the ability to decide if sellers can be contacted by users browsing your site or not.";
$MSG['contact_seller_anyone'] = "Any visitor can contact the seller (the ability to contact the seller will be ALWAYS shown)";
$MSG['contact_seller_users_only'] = "Only logged in users can contact the seller (the ability to contact the seller will be shown only to other users of your site if logged in)";
$MSG['contact_seller_disabled'] = "Nobody can contact the seller (the ability to contact the seller will NEVER be shown)";
$MSG['hide_user_emails'] = "Hide user E-Mails";
$MSG['hide_user_emails_explain'] = "You can decide to allow users to see each others E-Mail addresses or to hide them and all communication must be done via PMs";

// cookiespolicy.php
$MSG['cookie_policy_updated'] = "Cookie Policy Settings Updated";
$MSG['enable_cookie_policy'] = "Enable Cookies Policy Page?";
$MSG['enable_cookie_policy_explain'] = "Activate this option if you want a Cookies Policy link to appear in the footer of your pages.";
$MSG['cookie_policy_content'] = "Cookies Policy content<br>(HTML allowed)";

// counters.php
$MSG['counter_settings'] = "Show counters";
$MSG['counter_settings_updated'] = "Counters Settings Updated";
$MSG['counters_shown'] = "Counters you want to show";
$MSG['counters_shown_explain'] = "You can decide to show some counters in the header of your site's pages.<br>
        There are three different counters available:
        <ul>
        <li>Active auctions</li>
        <li>Registered users</li>
        <li>Online users</li>
        </ul>
        You can enable/disable each counter below";
$MSG['counters_online'] = "Online users";
$MSG['counters_active'] = "Active auctions";
$MSG['counters_registered'] = "Registered users";

// countries.php
$MSG['countries_updated'] = "Countries updated";

// currency.php
$MSG['currency_settings'] = "Currency Settings";
$MSG['currency_settings_updated'] = "Currency settings updated";
$MSG['default_currency'] = "Default Currency";
$MSG['default_currency_explain'] = "You can use the currency of your choice throughout the site.";
$MSG['money_format'] = "Money format";
$MSG['money_format_us'] = "US style: 1,250.00";
$MSG['money_format_euro'] = "European style: 1.250,00";
$MSG['money_decimals'] = "Decimal digits";
$MSG['money_decimals_explain'] = "Set to zero or leave blank if you don't want decimal digits in your money representation";
$MSG['money_symbol_position'] = "Symbol position";
$MSG['money_symbol_position_before'] = "Before the amount (i.e. USD 200)";
$MSG['money_symbol_position_after'] = "After the amount (i.e. 200 USD)";
$MSG['new_currency'] = 'Add New Currency';
$MSG['curreny_country_explain'] = "Example: <b>United States</b><br>Must fill in all 3 textboxs to add a new Currency.";
$MSG['currency_name'] = "Currency Name";
$MSG['curreny_name_explain'] = "Example: <b>U.S. Dollar</b>";
$MSG['curreny_symbol'] = "Currency Symbol";
$MSG['curreny_symbol_explain'] = "Example: <b>USD</b>";

// defaultcountry.php
$MSG['default_country'] = "Default country";
$MSG['default_country_explain'] = "You can select a default country for your site.<br>It will automatically appear as the selected country in the countries select box throughout the site.";
$MSG['default_country_updated'] = "Default country updated";

// deleteauction.php
$MSG['confirm_auction_delete'] = 'Are you sure you want to delete the auction \'%s\'';

// deletebanner.php
// nothing

// deletemessage.php
$MSG['confirm_msg_delete'] = 'Are you sure you want to delete this message (ID: %s)';

// deletenews.php
$MSG['confirm_news_delete'] = 'Are you sure you want to delete the news item \'%s\'';

// deleteuser.php
$MSG['confirm_user_delete'] = 'Are you sure you want to delete the user \'%s\'';
$MSG['user_has_active_auctions'] = "The user has active auctions:<br>";
$MSG['plus_x_more'] = "plus %d more";
$MSG['user_has_x_bids'] = "The user has placed bids on %s auction(s).";

// deleteuserfeed.php
$MSG['confirm_feedback_delete'] = 'Are you sure you want to delete this user feedback (ID: %s)';

// displaysettings.php
$MSG['display_settings'] = 'Display Settings';
$MSG['display_settings_updated'] = 'Display Settings Updated';
$MSG['show_per_page'] = 'Results shown per page';
$MSG['show_per_page_explain'] = 'The maximum number of items before a page break';
$MSG['max_featured_items'] = 'Max number of featured items shown';
$MSG['max_featured_items_explain'] = 'Featured items are shown above the normal items on searches, this is how may will be shown on each page.';
$MSG['thumbnail_size'] = 'Thumbnail size';
$MSG['thumbnail_size_explain'] = 'This is the size of the thumbnail that will appear on lists of auctions such as when a user does a search';
$MSG['front_page_settings'] = 'Front Page Settings';
$MSG['home_page_featured'] = "Home Page Featured Items";
$MSG['home_page_featured_explain'] = "This is the number of featured items to show in the home page.<br>0 (zero) is permitted.";
$MSG['home_page_recent'] = "Last Created Items";
$MSG['home_page_recent_explain'] = "This is the number of most recent items to show in the home page.<br>0 (zero) is permitted.";
$MSG['home_page_hot'] = "Hot Items";
$MSG['home_page_hot_explain'] = "This is the number of items to show in the Hot Items list in the home page.<br>0 (zero) is permitted.";
$MSG['home_page_ending_soon'] = "Next Ending";
$MSG['home_page_ending_soon_explain'] = "This is the number of items to show in the Next Ending list in the home page.<br>0 (zero) is permitted.";
$MSG['home_page_login'] = "Display login box?";
$MSG['home_page_login_explain'] = "Will enable the quick login box on the home page.";
$MSG['home_page_news'] = "Display news box?";
$MSG['home_page_news_explain'] = "Will show news items on the home page.";
$MSG['number_news_shown'] = "Number of news you want to show";

// durations.php
$MSG['duration_table_updated'] = "Durations table updated";

// editadminuser.php
// nothing

// editauction.php
$MSG['error_current_bid_too_low'] = "Current Bid must be greater than minimum bid.";

// editbanner.php
$MSG['error_wrong_file_type'] = "Wrong file type. Allowed formats: GIF, JPG, PNG, SWF"; // Also userbanners.php

// editbanneruser.php
// nothing

// editboards.php
$MSG['error_msg_numeric'] = "Messages to show must be numeric"; // Also newboard.php
$MSG['error_msg_not_zero'] = "Messages to show cannot be zero"; // Also newboard.php

//editfaq.php
// nothing

// editfaqcategory.php
// nothing

// editmessage.php
// nothing

// editmessages.php
// nothing

// editnew.php
$MSG['edit_news'] = "Edit news";

// edituser.php
// nothing

// edituserfeed.php
// nothing

// emailsettings.php
$MSG['email_settings'] = 'Email Settings';
$MSG['error_missing_SMTP_settings'] = 'Please enter missing or incorrect SMTP settings';
$MSG['mail_protocol'] = 'Mail Protocol:';
$MSG['mail_parameters'] = 'Webid Mail Parameters:';
$MSG['mail_parameters_explain'] = '*When using \'Webid Mail\', additional mail parameters can be added here (e.g. "-femail@yourwebid.com").';
$MSG['SMTP_settings'] = "SMTP Specific Options:";
$MSG['SMTP_settings_explain'] = 'Used <b>only</b> for SMTP mail';
$MSG['SMTP_authentication'] = 'SMTP Authentication';
$MSG['SMTP_security'] = 'SMTP Security:';
$MSG['SMTP_port'] = 'SMTP Port:';
$MSG['SMTP_username'] = 'SMTP Username:';
$MSG['SMTP_password'] = 'SMTP Password:';
$MSG['SMTP_host'] = 'SMTP Host:';
$MSG['SMTP_host_explain'] = '*For Gmail accounts. Set the encryption system using a prefix of [<b>ssl://</b>] or [<b>tls://</b>] Examples:<br>[ ssl://smtp.googlemail.com ], [ tls://smtp.googlemail.com ]';
$MSG['other_admin_emails'] = 'Additional Admin E-Mails:';
$MSG['other_admin_emails_explain'] = 'Additional email accounts you want to receive admin related email, in addition to the main site email address of %s. (comma separated)';
$MSG['email_sending_success'] = 'Your email has been successfully sent.';
$MSG['email_sending_failure'] = 'Email not sent! Please check your PHP mail configuration.Response:<br>%s';

// enablefees.php
$MSG['enable_fees'] = "Enable/Disable Fees";
$MSG['enable_fees_explain'] = "Do you want your auction site to be completely free or do you want to charge for it";
$MSG['fee_settings_updated'] = 'Fee Settings Updated';
$MSG['set_payment_type'] = "Set payment type";
$MSG['set_payment_type_explain'] = "This is how users will pay the fees. Balance mode is where the users can choose when to pay and live payments is where the user must pay for every action that has a fee";
$MSG['balance_mode'] = "Balance mode";
$MSG['live_payments'] = "Live payments";
$MSG['payment_sandbox'] = "Payment gateway sandbox";
$MSG['payment_sandbox_explain'] = 'You can turn on the payment gateways sandbox to test the payment gateways but make sure disable the sandbox mode before making your site live';
$MSG['balance_mode_settings'] = "The following settings are only used when in balance mode";
$MSG['max_debt'] = "Maximum Debt";
$MSG['max_debt_explain'] = "The maximum debt an account can have before they must pay it back";
$MSG['signup_credit'] = "Signup Credit";
$MSG['signup_credit_explain'] = "Free credit given to an account on its creation";
$MSG['suspend_debt_accounts'] = "Suspend Accounts";
$MSG['suspend_debt_accounts_explain'] = "Suspend Accounts that are over the Debit Limit";

// errorhandling.php
$MSG['error_handling'] = "Error Handling";
$MSG['error_settings_updated'] = "Error Handling settings updated.";
$MSG['error_text'] = "Error Text";
$MSG['error_text_explain'] = "Fatal errors that occur during WeBid's execution (typically MySQL errors) will redirect users to an error page. You can customise the error message you want to appear in the error page below.";

// errorlog.php
$MSG['error_log_purged'] = "Error Log Purged";
$MSG['error_log_empty'] = 'Error log is currently empty';

// excludeauction.php
$MSG['suspend_auction'] = "Suspend auction";
$MSG['unsuspend_auction'] = "Reactivate auction";

// excludeuser.php
$MSG['suspend_user'] = "Suspend User";
$MSG['suspend_user_confirm'] = "Are you sure you want to suspend this user?";
$MSG['activate_user'] = 'Activate User';
$MSG['activate_user_confirm'] = 'Are you sure you want to activate this user?';
$MSG['reactivate_user'] = "Reactivate User";
$MSG['reactivate_user_confirm'] = "Are you sure you want to reactivate this user?";

// faqs.php
$MSG['faqs_deleted'] = 'FAQs deleted';

// faqscategories.php
$MSG['faq_delete_action'] = 'What do you want to do with the FAQs in the following categories';
$MSG['confirm_faq_action'] = 'Are you sure you want to process the following categories: ';
$MSG['contains_x_faqs'] = '(contains %d FAQs)';

// fee_gateways.php
$MSG['gateway_settings_update'] = 'Fee Gateway Settings Updated';

// fees.php
$MSG['error_from_must_be_less_than_to'] = 'The <i>from</i> value must be less than the <i>to</i> value'; // also increments.php

// footer.php
// nothing

// header.php
// nothing

// help.php
// nothing

// increments.php
$MSG['increments_updated'] = "Increments table updated";

// index.php
$MSG['counters_updated'] = "Counters updated";

// invoice_settings.php
$MSG['invoice_settings'] = 'Invoice Settings';
$MSG['invoice_settings_updated'] = 'Invoice settings updated';
$MSG['invoice_notice'] = 'Invoice Notice';
$MSG['invoice_notice_explain'] = 'This will show in a yellow box above the end message on users invoices';
$MSG['invoice_end_msg'] = 'Invoice End Message';
$MSG['invoice_end_msg_explain'] = 'This will show at the end of every users invoice';

// invoice.php
// nothing

// listauctions.php
$MSG['view_open_auctions'] = "View Open Auctions";

// listclosedauctions.php
// nothing

// listreportedauctions.php
$MSG['view_reported_auctions'] = "View Reported Auctions";

// listsuspendedauctions.php
$MSG['view_suspended_auctions'] = "View Suspended Auctions";

// listusers.php
// nothing

// loggedin.inc.php
// nothing

// login.php
// nothing

// logo_upload.php
$MSG['your_logo'] = "Your logo";
$MSG['current_logo'] = "Current logo";
$MSG['upload_new_logo'] = "Upload a new logo";
$MSG['logo_upload_success'] = 'Logo uploaded successfully';

// logout.php
// nothing

// maintenance.php
$MSG['maintenance_settings'] = "Under Maintenance Page";
$MSG['maintenance_settings_updated'] = "Under Maintenance settings updated";
$MSG['enable_maintenance_mode'] = "Enable \"Under Maintenance\" mode?";
$MSG['enable_maintenance_mode_explain'] = "You can temporary disable the access to your site if necessary.<br>
                In Maintenance mode only one user will have access to it. After you registered a user via <a target=\"_new\" href=\"../register.php\">the usual users registration page</a>
                , insert below the username. After switching the site to Maintenance mode <a target=\"_new\" href=\"../user_login.php\">login here</a> to access the site.";
$MSG['maintenance_mode_msg'] = "Under Maintenance HTML code";

// managebanners.php
// nothing

// membertypes.php
$MSG['member_types_updates'] = 'Member types Updated';

// metatags.php
$MSG['metatag_settings'] = "HTML meta Tags";
$MSG['metatag_settings_updated'] = "Meta Tags Settings Updated";
$MSG['metatag_desc'] = "Meta Description Tag";
$MSG['metatag_desc_explain'] = "The Meta Description Tag is usually used to describe your pages in the search results pages search engines show.<br>
				Enter the text which better describes your site below.";
$MSG['metatag_keywords'] = "Meta Keywords Tag";
$MSG['metatag_keywords_explain'] = "The Meta Keywords Tag gives some search engines additional information to use to index your site.<br>
				Enter the your keywords below separated by comas (i.e. books, books auctions, book sales).";

// moderateauctions.php
// nothing

// moderation.php
$MSG['moderation_settings'] = 'Moderation Settings';
$MSG['moderation_settings_updated'] = "Moderation Settings updated";
$MSG['moderation'] = 'Moderation';
$MSG['auction_moderation'] = 'Auction Moderation';
$MSG['new_auction_moderation'] = 'New auction moderation';
$MSG['moderation_disabled'] = 'Disabled';
$MSG['moderation_pre_moderation'] = 'Pre-moderation';
$MSG['moderation_post_moderation'] = 'Post-moderation';

// multilingual.php
$MSG['multilingual_support_settings_updated'] = 'Multilingual Support Settings updated';
$MSG['multilingual_support'] = "Multilingual support";
$MSG['default_language'] = "Default language";
$MSG['default_language_explain'] = "This is the language that will show for guests and new users";
$MSG['current_default_language'] = '<span style="color:#CD0000;"><b>Current default language</b></span>';

// newadminuser.php
$MSG['new_admin_user'] = "New admin user";

// newbanneruser.php
// nothing

// newboard.php
// nothing

// newfaq.php
// nothing

// news.php
// nothing

// newsletter.php
$MSG['error_subject_or_body_missing'] = "The newsletter subject or body is missing";
$MSG['x_messages_sent'] = "%d messages sent.";
$MSG['all_users'] = "All users"; // Also listusers.tpl
$MSG['active_users'] = "Active users"; // Also listusers.tpl
$MSG['suspended_by_admin'] = "Suspended by the admin"; // Also listusers.tpl
$MSG['signup_fee_unpaid'] = "Sign up fee not paid"; // Also listusers.tpl
$MSG['account_never_confirmed'] = "Account never confirmed"; // Also listusers.tpl

// newuser.php
// nothing

// payments.php
$MSG['payment_methods_updated'] = "Payment methods table updated";

// privacypolicy.php
$MSG['privacy_policy'] = "Privacy Policy Page";
$MSG['privacy_policy_updated'] = "Privacy Policy Settings Updated";
$MSG['enable_privacy_policy'] = "Enable Privacy Policy Page?";
$MSG['enable_privacy_policy_explain'] = "Enable this option if you want a Privacy Policy link to appear in the footer of your pages.";
$MSG['privacy_policy_content'] = "Privacy Policy content<br>(HTML allowed)";

// profile.php
$MSG['registration_fields_updated'] = 'User Registration Fields Updated';
$MSG['error_required_field_cannot_be_hidden'] = 'A field must be shown if it\'s a required field';

// removefrommoderation.php
// nothing

// searchauctions.php
$MSG['search_auctions'] = "Search Auctions";

// settings.php
$MSG['general_settings'] = "General Settings"; // Also sidebar-settings.tpl
$MSG['general_settings_updated'] = "General settings updated";
$MSG['site_name'] = "Site name";
$MSG['site_name_explain'] = "Your site's name will appear in the e-mail messages WeBid sends to users";
$MSG['site_url'] = "Site URL"; // Also home.tpl
$MSG['site_url_explain'] = "This must be the complete URL (starting with <b>http://</b>) of your WeBid installation.<br>Be sure to include the ending slash.";
$MSG['admin_email'] = "Admin e-mail"; // Also home.tpl
$MSG['admin_email_explain'] = "The admin e-mail address is used to send automatic e-mail messages";
$MSG['copyright_msg'] = "Your copyright message";
$MSG['copyright_msg_explain'] = "This is a message that is added to the bottom of every page";
$MSG['batch_settings'] = "Batch Procedures Settings";
$MSG['run_cron'] = "Run cron";
$MSG['run_cron_explain'] = "WeBid needs to periodically run <code>batch.php</code> to close expired auctions and send notification e-mails to the seller and/or the winner. The recommended way to run <code>batch.php</code> is to set up a <a href=\"http://www.webidsupport.com/forums/index.php?threads/setting-up-a-cronjob.10244/\" target=\"_blank\">cronjob</a> if you run a Unix/Linux server.<br>If for any reason you can't run a cronjob on your server, you can choose the <b>Non-batch</b> option below to have <code>batch.php</code> run by WeBid itself: in this case <code>cron.php</code> will be run each time someone access your home page.";
$MSG['batch'] = "Batch"; // Also index.php
$MSG['non_batch'] = "Non-batch"; // Also index.php
$MSG['clear_closed_auctions'] = "Delete auctions older than";
$MSG['clear_closed_auctions_explain'] = "After an auction is closed how many days will an auction be kept before it is deleted. Can be set to 0 to keep indefinatly.";
$MSG['optimisation'] = "Optimisation";
$MSG['enable_template_cache'] = "Enable the template cache?";
$MSG['enable_template_cache_explain'] = "This will increase the speed of your site. It is recommended this is only disabled when making updates to your template";
$MSG['ssl_support'] = "SSL Support";
$MSG['enable_ssl'] = "Enable SSL support?";
$MSG['enable_ssl_explain'] = "<p>If you have SSL support on the server where you are running WeBid, you may want to give your customers a safer environment to operate.</p>Once The SSL Support is activated, your users will operate under secure HTTPS transactions when they log in or register.";
$MSG['ssl_url'] = 'Shared SSL URL';
$MSG['ssl_url_explain'] = 'If you\'re using shared SSL enter the URL here';

// spam.php
$MSG['spam_settings'] = 'Spam settings'; // Also sidebar-settings.tpl
$MSG['spam_settings_updated'] = 'Spam settings updated';
$MSG['error_recaptcha_missing_keys'] = 'You cannot use reCaptcha without the two keys';
$MSG['recaptcha_public_key'] = "reCaptcha public key";
$MSG['recaptcha_public_key_explain'] = 'To use reCaptcha you must create a free account with <a href="https://www.google.com/recaptcha/intro/index.html" class="new-window">Google reCAPTCHA</a> and add this domain to a key pair';
$MSG['recaptcha_secret_key'] = "Recaptcha secret key";
$MSG['registration_captcha_type'] = "Captcha type on registration page";
$MSG['registration_captcha_type_explain'] = "Captcha are used to prevent spam it is generally a good idea to enable some sort of captcha";
$MSG['friend_captcha_type'] = "Captcha type on send auction to friend page";
$MSG['item_report_captcha_type'] = "Captcha type on item report page";
$MSG['spam_blocked_email_enabled'] = 'Enable block email domains';
$MSG['spam_blocked_email_domains'] = 'Deny registration from disposable emails';
$MSG['spam_blocked_email_domains_explain'] = 'Put each domain on a new line';

// stat_settings.php
$MSG['statistics_settings_updated'] = "Statistics Settings Updated.";
$MSG['error_stat_type_missing'] = "You must select at least one statistic type (accesses, browsers &amp; platforms, by country)";
$MSG['statistics_explain'] = "Please, choose below if you want WeBid to generate access statistics for your site.";
$MSG['enable_statistics'] = "Enable Statistics?";
$MSG['stat_types_explain'] = "Select which type of statistics you want to generate";
$MSG['enable_user_access_stats'] = "Generate user access statistics";
$MSG['enable_browser_stats'] = "Generate browser and platform statistics";

// tax_levels.php
// nothing

// tax.php
$MSG['tax_settings'] = 'Tax Settings';
$MSG['tax_settings_updated'] = 'Tax settings updated';
$MSG['enable_tax'] = 'Enable Tax';
$MSG['enable_tax_explain'] = 'Global setting to enable or disable tax';
$MSG['enable_user_tax'] = 'Users can charge tax';
$MSG['enable_user_tax_explain'] = 'Enable to give users an option to tax their items';

// terms.php
$MSG['terms_conditions_page'] = "Terms &amp; Conditions Page"; // Also sidebar-content.tpl
$MSG['terms_conditions_settings_updated'] = "Terms &amp; Conditions Settings Updated";
$MSG['enable_terms_conditions'] = "Enable Terms &amp; Conditions page?";
$MSG['enable_terms_conditions_explain'] = "Will display a <u>Terms &amp; Conditions</u> link in the footer of every page.";
$MSG['terms_conditions_content'] = "Terms &amp; Conditions page content<br>(HTML allowed)";

// theme.php
$MSG['default_theme_updated'] = "Default Theme Updated";
$MSG['error_theme_missing'] = "Chosen theme does not exist";

// time.php
$MSG['time_settings'] = "Time Settings"; // also sidebar-settings.tpl
$MSG['time_settings_updated'] = "Time settings updated";
$MSG['date_format'] = "Dates Format"; // also home.tpl
$MSG['date_format_explain'] = "Choose the format you want date to appear on your site.";
$MSG['american_dates'] = "mm/dd/yyyy"; // also index.php
$MSG['european_dates'] = "dd/mm/yyyy"; // also index.php
$MSG['default_time_zone'] = "Default Time Zone";
$MSG['default_time_zone_explain'] = "Choose the default time zone";

// userbanners.php
// nothing

// userfeedback.php
// nothing

// usergroups.php
$MSG['error_must_have_one_autojoin'] = "At least one group must have Auto Join enabled";
$MSG['cannot_delete_default_user_groups'] = 'Default User Groups (Sellers & Buyers) cannot be removed';
$MSG['user_group_deleted'] = 'User Group Deleted';
$MSG['user_group_name_empty_update'] = 'Group name cannot be empty. User Group was not updated';
$MSG['user_group_name_empty_new'] = 'Group name cannot be empty. The new User Group was not created';

// usersettings.php
$MSG['user_settings'] = "User Settings"; // Also sidebar-settings.tpl
$MSG['user_settings_updated'] = "User Settings Updated";
$MSG['enable_reauthentication'] = "Enable User Re-authentication";
$MSG['enable_reauthentication_explain'] = "The users will be asked to enter their password before completing actions such as leaving feedback, submitting an auction or leaving a bid.";
$MSG['user_confirm_method'] = "Users Confirmation Method";
$MSG['user_confirm_method_explain'] = "On WeBid each users account must be activated before it can be used. Choose which method you want to use";
$MSG['prune_unactivated_users'] = "Prune unactivated users";
$MSG['prune_unactivated_users_explain'] = "Automatically delete unactivated user accounts.";
$MSG['prune_unactivated_users_days'] = "Numbers of days before deleting unactivated accounts";
$MSG['prune_unactivated_users_days_explain'] = "Numbers of days before deleting unactivated accounts.";
$MSG['bidding_visable_to_guest'] = 'Buy now visible to guests';
$MSG['bidding_visable_to_guest_explain'] = 'Guest can see the Bid now/Buy now option when viewing an auction, this should be disabled if you plan to run a single seller site';
$MSG['email_admin_on_signup'] = 'Email admin on signup';
$MSG['email_admin_on_signup_explain'] = 'Admin receives an email each time a new user registers';
$MSG['user_request_seller_permission'] = 'Users can request to become sellers';
$MSG['user_request_seller_permission_explain'] = 'Users who do not have permission to sell items can request to gain permission';

// util_cc1.php
$MSG['category_table_updated'] = "Categories table updated";

// viewaccessstats.php
$MSG['monthly_report'] = "Monthly Report"; // Also accounts.tpl
$MSG['years_months'] = "Years/Months";
$MSG['weekly_report'] = 'Weekly Report'; // Also accounts.tpl
$MSG['week'] = 'Week'; // Also accounts.php
$MSG['day'] = "Day";

// viewbrowserstats.php
// nothing

// viewfilters.php
$MSG['banner_filters'] = 'Banner filters';

// viewplatformstats.php
// nothing

// viewuserips.php
$MSG['registration_ip'] = "Registration IP";

// viewwinners.php
// nothing

// wordsfilter.php
$MSG['word_filter_updated'] = "Words Filter Updated";
