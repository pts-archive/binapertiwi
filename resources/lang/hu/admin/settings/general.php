<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory tartomány',
    'ad_domain_help'			=> 'Ez néha megegyezik az e-mail domainjével, de nem mindig.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".' ,
    'admin_cc_email'            => 'Email másolat',
    'admin_cc_email_help'       => 'Ha azt szeretné, hogy a kiadáskor/visszavételkor a felhasználóknak küldött levél másolata egy másik címre is elmenjen, akkor írja be a címet ide. Ellenkező esetben hagyja szabadon a mezőt.',
    'is_ad'				        => 'Ez egy Active Directory szerver',
    'alert_email'				=> 'Riasztás címzettje',
    'alerts_enabled'			=> 'Riasztás engedélyezve',
    'alert_interval'			=> 'A figyelmeztetések lejárata küszöbérték (napokban)',
    'alert_inv_threshold'		=> 'Leltár riasztási küszöb',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> 'Eszköz ID',
    'audit_interval'            => 'Audit időtartam',
    'audit_interval_help'       => 'Ha rendszeres fizikai ellenőrzést igényel az eszközökkel, adja meg az intervallumot hónapokban.',
    'audit_warning_days'        => 'Ellenőrzési figyelmeztető küszöbérték',
    'audit_warning_days_help'   => 'Hány nappal előre figyelmeztetni kell Önt arra, hogy az eszközöknek az ellenőrzésre van szükségük?',
    'auto_increment_assets'		=> 'Automatikusan növekvő eszközazonosítókat generál',
    'auto_increment_prefix'		=> 'Előtag (opcionális)',
    'auto_incrementing_help'    => 'Engedélyezze az automatikus értéknövelés eszközazonosítót, hogy beállítsa ezt',
    'backups'					=> 'Biztonsági mentések',
    'barcode_settings'			=> 'Vonalkód beállítások',
    'confirm_purge'			    => 'Nyugtázza a tisztítást',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'Egyéni CSS',
    'custom_css_help'			=> 'Adjon meg olyan egyedi CSS felülírást, amelyet használni szeretne. Ne tüntesse fel a &lt;style&gt;&lt;/style&gt; címkéket.',
    'custom_forgot_pass_url'	=> 'Egyéni jelszó visszaállítási URL',
    'custom_forgot_pass_url_help'	=> 'Ez felváltja a beépített elfelejtett jelszó URL-jét a bejelentkezési képernyőn, amely hasznos lehet arra, hogy az embereket belső vagy hosztolt LDAP jelszó-visszaállítási funkciókra irányítsa. Hatékonyan kikapcsolja a helyi felhasználók elfelejtett jelszavát.',
    'dashboard_message'			=> 'Irányítópult üzenet',
    'dashboard_message_help'	=> 'Ez a szöveg megjelenik a műszerfalon bárki számára, aki engedélyt kapott a vezérlőpult megtekintésére.',
    'default_currency'  		=> 'Alapértelmezett pénznem',
    'default_eula_text'			=> 'Alapértelmezett EULA',
    'default_language'			=> 'Alapértelmezett nyelv',
    'default_eula_help_text'	=> 'Egyéni EULA-kat is társíthat bizonyos eszközkategóriákhoz.',
    'display_asset_name'        => 'Eszköznév megjelenítése',
    'display_checkout_date'     => 'Megjelenik a Checkout dátum',
    'display_eol'               => 'Táblázat nézetben az EOL megjelenítése',
    'display_qr'                => 'Kijelző négyzetek',
    'display_alt_barcode'		=> '1D vonalkód megjelenítése',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> '2D vonalkód típusa',
    'alt_barcode_type'			=> '1D vonalkód típusa',
    'email_logo_size'       => 'Square logos in email look best. ',
    'eula_settings'				=> 'EULA beállítások',
    'eula_markdown'				=> 'Ez az EULA lehetővé teszi <a href="https://help.github.com/articles/github-flavored-markdown/">Github ízesített markdown</a>-et.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'A favicon egy 16x16 pixeles kép kell legyen.',
    'footer_text'               => 'További lábjegyzet szöveg ',
    'footer_text_help'          => 'Ez a szöveg a lábléc jobb oldalán fog megjelenni. Linkek használata engedélyezett <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a> formátumban. Sortörések, fejlécek, képek, stb. okozhatnak problémákat a megjelenítés során.',
    'general_settings'			=> 'Általános beállítások',
    'generate_backup'			=> 'Háttér létrehozása',
    'header_color'              => 'Fejléc színe',
    'info'                      => 'Ezek a beállítások lehetővé teszik a telepítés egyes szempontjainak testreszabását.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Laravel verzió',
    'ldap_enabled'              => 'LDAP bekapcsolva',
    'ldap_integration'          => 'LDAP integráció',
    'ldap_settings'             => 'LDAP beállítások',
    'ldap_login_test_help'      => 'Adjon meg egy érvényes LDAP felhasználónevet és jelszót a fenti alapszintű DN-ből, hogy ellenőrizze, hogy az LDAP-bejelentkezés megfelelően van-e beállítva. EL KELL MENTENIE A MÓDOSÍTOTT LDAP BEÁLLÍTÁSOKAT ELŐBB.',
    'ldap_login_sync_help'      => 'Ez csak azt teszteli, hogy az LDAP helyesen szinkronizálható. Ha az LDAP hitelesítési lekérdezése nem megfelelő, a felhasználók még mindig nem tudnak bejelentkezni. EL KELL MENTENIE A MÓDOSÍTOTT LDAP BEÁLLÍTÁSOKAT ELŐBB.',
    'ldap_server'               => 'LDAP szerver',
    'ldap_server_help'          => 'Ezt az ldap: // (titkosítatlan vagy TLS) vagy az ldaps:',
    'ldap_server_cert'			=> 'LDAP SSL tanúsítvány érvényesítés',
    'ldap_server_cert_ignore'	=> 'Érvénytelen SSL-tanúsítvány engedélyezése',
    'ldap_server_cert_help'		=> 'Jelölje be ezt a jelölőnégyzetet, ha önállóan aláírt SSL-tanúsítványt használ, és szeretne elfogadni egy érvénytelen SSL-tanúsítványt.',
    'ldap_tls'                  => 'TLS használata',
    'ldap_tls_help'             => 'Ezt csak akkor kell ellenőrizni, ha STARTTLS-t futtat az LDAP kiszolgálón.',
    'ldap_uname'                => 'LDAP összekapcsolja a felhasználónevet',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'LDAP összekötő jelszó',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP szűrő',
    'ldap_pw_sync'              => 'LDAP jelszószinkronizálás',
    'ldap_pw_sync_help'         => 'Törölje a jelölőnégyzetet, ha nem szeretné megőrizni az LDAP jelszavakat szinkronizált helyi jelszavakkal. A letiltás azt jelenti, hogy a felhasználók esetleg nem tudnak bejelentkezni, ha az LDAP-kiszolgáló valamilyen okból elérhetetlenné válik.',
    'ldap_username_field'       => 'Felhasználónév mező',
    'ldap_lname_field'          => 'Vezetéknév',
    'ldap_fname_field'          => 'LDAP keresztnév',
    'ldap_auth_filter_query'    => 'LDAP hitelesítési lekérdezés',
    'ldap_version'              => 'LDAP verzió',
    'ldap_active_flag'          => 'LDAP aktív zászló',
    'ldap_activated_flag_help'  => 'This flag is used to determine whether a user can login to Snipe-IT and does not affect the ability to check items in or out to them.',
    'ldap_emp_num'              => 'LDAP alkalmazott száma',
    'ldap_email'                => 'LDAP e-mail',
    'license'                  => 'Szoftverlicenc',
    'load_remote_text'          => 'Távoli parancsfájlok',
    'load_remote_help_text'		=> 'Ez a Snipe-IT telepítés betölti a szkripteket a külvilágtól.',
    'login_note'                => 'Bejelentkezési megjegyzés',
    'login_note_help'           => 'Opcionálisan tartalmazhat néhány mondatot a bejelentkezési képernyőn, például, hogy segítse az embereket, akik elvesztett vagy ellopott eszközt találtak. Ez a mező elfogad <a href="https://help.github.com/articles/github-flavored-markdown/">Github ízesített markdown</a>-et',
    'login_remote_user_text'    => 'Távoli felhasználói bejelentkezési beállítások',
    'login_remote_user_enabled_text' => 'Bejelentkezés engedélyezése Remote User Header segítségével',
    'login_remote_user_enabled_help' => 'Ez az opció lehetővé teszi a hitelesítést REMOTE_USER fejléc segítségével a "Common Gateway Interface (rfc3875)" szabvány alapján',
    'login_common_disabled_text' => 'Egyéb hitelesítési mechanizmusok letiltása',
    'login_common_disabled_help' => 'Ez a beállítás letiltja a többi hitelesítési mechanizmust. Engedélyezd ezt a lehetőséget, ha biztos, hogy a REMOTE_USER bejelentkezés már működik',
    'login_remote_user_custom_logout_url_text' => 'Egyéni kijelentkezési URL',
    'login_remote_user_custom_logout_url_help' => 'Ha megad itt egy URL-t, a felhasználók a Snipe-IT-ből való kilépéskor át lesznek irányítva a megadott URL-re. Ez hasznos lehet a hitelesítés szolgáltatónál meglévő felhasználói munkamenet megfelelő lezárására.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'logo',
    'logo_print_assets'         => 'Használat nyomtatásnál',
    'logo_print_assets_help'    => 'Arculati elemek használata a nyomtatott eszköz listáknál ',
    'full_multiple_companies_support_help_text' => 'A vállalatoknak a vállalat eszközeihez rendelt felhasználók (köztük az adminisztrátorok) korlátozása.',
    'full_multiple_companies_support_text' => 'Teljes több vállalat támogatása',
    'show_in_model_list'   => 'Mutassa a modellek lenyíló listájában',
    'optional'					=> 'választható',
    'per_page'                  => 'Eredmények oldalanként',
    'php'                       => 'PHP verzió',
    'php_gd_info'               => 'A QR-kódok megjelenítéséhez telepíteni kell a php-gd-t, lásd a telepítési utasításokat.',
    'php_gd_warning'            => 'A PHP Image Processing és a GD plugin NEM van telepítve.',
    'pwd_secure_complexity'     => 'Jelszó komplexitás',
    'pwd_secure_complexity_help' => 'Válassza ki a jelszavak összetettségi szabályait, amelyeket érvényesíteni kíván.',
    'pwd_secure_min'            => 'Jelszó minimális karakterek',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'A közös jelszavak megakadályozása',
    'pwd_secure_uncommon_help'  => 'Ez megakadályozza a felhasználók számára, hogy közös jelszavakat használjanak fel a leggyakrabban előforduló 10 000 jelszóból.',
    'qr_help'                   => 'Először engedélyezze a QR kódokat, hogy ezt beállítsa',
    'qr_text'                   => 'QR kód szöveg',
    'saml_enabled'              => 'SAML engedélyezve',
    'saml_integration'          => 'SAML integráció',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metaadat',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Kényszerített belépés',
    'saml_forcelogin'           => 'A SAML legyen az elsődleges belépési mód',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'setting'                   => 'Beállítás',
    'settings'                  => 'Beállítások',
    'show_alerts_in_menu'       => 'Figyelmeztetések megjelenítése a felső menüben',
    'show_archived_in_list'     => 'Archivált eszközök',
    'show_archived_in_list_text'     => 'Mutassa az archivált eszközöket az "összes eszköz" listában',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Képek használata az email-ekben',
    'show_images_in_email_help'   => 'Vegye ki a jelölést innen, ha az Ön Snipe-IT alkalmazása VPN mögött, vagy zárt hálózaton található, és a felhasználók a hálózaton kívül nem tudják az emailekben megjeleníteni az alkalmazás által szolgáltatott képeket.',
    'site_name'                 => 'Webhely neve',
    'slack_botname'             => 'Laza botneve',
    'slack_channel'             => 'Laza csatorna',
    'slack_endpoint'            => 'Laza végpont',
    'slack_integration'         => 'Laza beállítások',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Miután mentette a Slack információkat, egy teszt gomb jelenik meg.',
    'slack_test_help'           => 'Annak tesztelése megfelelő -e a Slack integráció beállítása. ELŐSZÖR EL KELL MENTENI A FRISSÍTETT SLACK BEÁLLÍTÁSOKAT.',
    'snipe_version'  			=> 'Snipe-IT változat',
    'support_footer'            => 'Lábjegyzet linkek támogatása ',
    'support_footer_help'       => 'Adja meg, hogy ki láthassa a Snipe-IT támogatási információ és a felhasználói kézikönyv linkjeit',
    'version_footer'            => 'Verzió a láblécben ',
    'version_footer_help'       => 'Határozza meg, hogy ki láthassa a Snipe-IT verzió és build adatokat.',
    'system'                    => 'Rendszer információ',
    'update'                    => 'Frissítési beállítások',
    'value'                     => 'Érték',
    'brand'                     => 'Branding',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'A Beállítások részről',
    'about_settings_text'       => 'Ezek a beállítások lehetővé teszik a telepítés egyes szempontjainak testreszabását.',
    'labels_per_page'           => 'Címkék oldalanként',
    'label_dimensions'          => 'Címke méretei (hüvelyk)',
    'next_auto_tag_base'        => 'Következő automatikus növekmény',
    'page_padding'              => 'Oldal margó (hüvelyk)',
    'privacy_policy_link'       => 'Link az Adatkezelési Nyilatkozathoz',
    'privacy_policy'            => 'Adatvédelmi nyilatkozat',
    'privacy_policy_link_help'  => 'Ha elhelyezi ide az Adatkezelési Nyilatkozat URL-jét, akkor a GDPR előírásainak megfelelően egy oda mutató link kerül elhelyezésre az alkalmazás láblécében, valamint minden a rendszer által küldött levélben. ',
    'purge'                     => 'Törölje a törölt rekordokat',
    'labels_display_bgutter'    => 'Jelölje le az alsó csatornát',
    'labels_display_sgutter'    => 'Címke oldalsó csatorna',
    'labels_fontsize'           => 'Címke betűmérete',
    'labels_pagewidth'          => 'Címke lap szélessége',
    'labels_pageheight'         => 'Címke lapmagassága',
    'label_gutters'        => 'Címke távolsága (hüvelyk)',
    'page_dimensions'        => 'Oldalméretek (hüvelyk)',
    'label_fields'          => 'Címke látható mezők',
    'inches'        => 'hüvelyk',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link a Snipe-IT-re az e-mailekben',
    'show_url_in_emails_help_text'      => 'Törölje a jelet a jelölőnégyzetből, ha nem kíván visszaváltani a Snipe-IT telepítéséhez az e-mail láblécében. Hasznos ha a legtöbb felhasználó soha nem jelentkezik be.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max thumbnail height',
    'thumbnail_max_h_help'   => 'Maximális képpontos magasság, amelyet a bélyegképek megjelenhetnek a listázási nézetben. Min 25, max 500.',
    'two_factor'        => 'Két tényező hitelesítés',
    'two_factor_secret'        => 'Két faktor kód',
    'two_factor_enrollment'        => 'Két faktoros beiratkozás',
    'two_factor_enabled_text'        => 'Engedélyezze a két tényezőt',
    'two_factor_reset'        => 'Törölje a két faktor titkát',
    'two_factor_reset_help'        => 'Ez arra kényszeríti a felhasználót, hogy újból beiktassa eszközét a Google Hitelesítővel. Ez hasznos lehet, ha az éppen beiratkozott eszközüket elveszik vagy ellopják.',
    'two_factor_reset_success'          => 'Két tényező eszköz sikeresen visszaáll',
    'two_factor_reset_error'          => 'Két faktoros eszköz visszaállítása sikertelen',
    'two_factor_enabled_warning'        => 'A két tényező bekapcsolása, ha nincs aktuálisan engedélyezve, azonnal kényszeríti Önt arra, hogy hitelesítést végezzen egy Google Auth által beiratkozott eszközzel. Lehetőséged lesz arra, hogy beírja a készüléket, ha nincs beiratkozva.',
    'two_factor_enabled_help'        => 'Ezzel a Google Authenticator használatával kétfaktoros hitelesítést kapcsolhat be.',
    'two_factor_optional'        => 'Szelektív (a felhasználók engedélyezhetik vagy letilthatják, ha megengedettek)',
    'two_factor_required'        => 'Minden felhasználó számára kötelező',
    'two_factor_disabled'        => 'Tiltva',
    'two_factor_enter_code'	=> 'Adja meg a két faktor kódot',
    'two_factor_config_complete'	=> 'Kód küldése',
    'two_factor_enabled_edit_not_allowed' => 'Az adminisztrátor nem teszi lehetővé a beállítás szerkesztését.',
    'two_factor_enrollment_text'	=> "Két tényező hitelesítésre van szükség, de a készülék még nem került bejegyzésre. Nyissa meg a Google Hitelesítő alkalmazást, és szkennelje be az alábbi QR-kódot a készülék regisztrálásához. Miután beírta a készüléket, adja meg az alábbi kódot",
    'require_accept_signature'      => 'Aláírásra van szükség',
    'require_accept_signature_help_text'      => 'Ha engedélyezni szeretné ezt a funkciót, akkor a felhasználóknak fizikailag ki kell jelentkezniük egy eszköz elfogadásáról.',
    'left'        => 'balra',
    'right'        => 'jobb',
    'top'        => 'felső',
    'bottom'        => 'alsó',
    'vertical'        => 'függőleges',
    'horizontal'        => 'vízszintes',
    'unique_serial'                => 'Egyedi sorozatszámok',
    'unique_serial_help_text'                => 'Bejelölés esetén az eszközök széria számának egyedinek kell lenni',
    'zerofill_count'        => 'Az eszközcímkék hossza, beleértve a nem töltöt',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
);
