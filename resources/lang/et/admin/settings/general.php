<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domeen',
    'ad_domain_help'			=> 'See on mõnikord sama kui teie e-posti domeen, kuid mitte alati.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".' ,
    'admin_cc_email'            => 'CC e-mail',
    'admin_cc_email_help'       => 'If you would like to send a copy of checkin/checkout emails that are sent to users to an additional email account, enter it here. Otherwise leave this field blank.',
    'is_ad'				        => 'See on Active Directory server',
    'alert_email'				=> 'Saada hoiatusi',
    'alerts_enabled'			=> 'Hoiatused on lubatud',
    'alert_interval'			=> 'Aegumatu häiretaseme künnis (päevades)',
    'alert_inv_threshold'		=> 'Inventari hoiatuslävi',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> 'Varade ID-d',
    'audit_interval'            => 'Auditi intervall',
    'audit_interval_help'       => 'Kui teil on kohustus kontrollida oma vara füüsiliselt, sisestage intervall kuude kaupa.',
    'audit_warning_days'        => 'Auditi hoiatuslävi',
    'audit_warning_days_help'   => 'Kui mitu päeva ette peaksime hoiatama, kui vara on auditeerimiseks ette nähtud?',
    'auto_increment_assets'		=> 'Loo automaatselt kasvavad vara ID-d',
    'auto_increment_prefix'		=> 'Eesliide (valikuline)',
    'auto_incrementing_help'    => 'Enne automaatse suurendamise varade ID-de määramist kõigepealt määrake see',
    'backups'					=> 'Varukoopiad',
    'barcode_settings'			=> 'Triipkoodide seadistused',
    'confirm_purge'			    => 'Kinnitage puhastamine',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'Kohandatud CSS',
    'custom_css_help'			=> 'Sisestage kõik kohandatud CSS-i muudatused, mida soovite kasutada. Ärge lisage silte &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
    'default_currency'  		=> 'Valuuta vaikimisi',
    'default_eula_text'			=> 'EULA vaikimisi',
    'default_language'			=> 'Vaikimisi keel',
    'default_eula_help_text'	=> 'Võite ka kohandatud EULA-sid siduda kindlate varakategooriatega.',
    'display_asset_name'        => 'Kuvatava vara nimi',
    'display_checkout_date'     => 'Display Checkout Kuupäev',
    'display_eol'               => 'Kuva EOL tabeli vaates',
    'display_qr'                => 'Kuva ruudukoodid',
    'display_alt_barcode'		=> 'Kuvage 1D vöötkood',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> '2D-triipkoodi tüüp',
    'alt_barcode_type'			=> '1D-vöötkoodi tüüp',
    'email_logo_size'       => 'Square logos in email look best. ',
    'eula_settings'				=> 'EULA seaded',
    'eula_markdown'				=> 'EULA võimaldab <a href="https://help.github.com/articles/github-flavored-markdown/">Githubi maitsestatud hinnalisa</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Additional Footer Text ',
    'footer_text_help'          => 'This text will appear in the right-side footer. Links are allowed using <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Line breaks, headers, images, etc may result in unpredictable results.',
    'general_settings'			=> 'üldised seaded',
    'generate_backup'			=> 'Loo varundamine',
    'header_color'              => 'Päise värv',
    'info'                      => 'Need sätted võimaldavad teil kohandada oma installi teatud aspekte.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Laraveli versioon',
    'ldap_enabled'              => 'LDAP on lubatud',
    'ldap_integration'          => 'LDAP-i integreerimine',
    'ldap_settings'             => 'LDAP seaded',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'LDAP server',
    'ldap_server_help'          => 'See peaks algama ldap: // (krüpteerimata või TLS-i puhul) või ldaps: // (SSL-i puhul)',
    'ldap_server_cert'			=> 'LDAP SSL-sertifikaadi valideerimine',
    'ldap_server_cert_ignore'	=> 'Lubage kehtetu SSL-sertifikaat',
    'ldap_server_cert_help'		=> 'Märkige see ruut, kui kasutate ennastkasutatud SSL-i sertifikaati ja soovite nõustuda sobiva SSL-sertifikaadiga.',
    'ldap_tls'                  => 'Kasutage TLS-i',
    'ldap_tls_help'             => 'Seda tuleks kontrollida ainult siis, kui kasutate oma LDAP-serveris STARTTLS-i.',
    'ldap_uname'                => 'LDAP Bind\'i kasutajanimi',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'LDAP bind parool',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP-filter',
    'ldap_pw_sync'              => 'LDAP paroolide sünkroonimine',
    'ldap_pw_sync_help'         => 'Tühjendage see ruut, kui te ei soovi LDAP paroole sünkroonida kohalike paroolidega. Selle keelamine tähendab, et teie kasutajad ei pruugi siseneda, kui teie LDAP-server mingil põhjusel pole saavutatav.',
    'ldap_username_field'       => 'Kasutajanimi väli',
    'ldap_lname_field'          => 'Perekonnanimi',
    'ldap_fname_field'          => 'LDAP eesnimi',
    'ldap_auth_filter_query'    => 'LDAP-i autentimise päring',
    'ldap_version'              => 'LDAP versioon',
    'ldap_active_flag'          => 'LDAP aktiivne lipp',
    'ldap_activated_flag_help'  => 'This flag is used to determine whether a user can login to Snipe-IT and does not affect the ability to check items in or out to them.',
    'ldap_emp_num'              => 'LDAPi töötaja number',
    'ldap_email'                => 'LDAP-e-post',
    'license'                  => 'Software License',
    'load_remote_text'          => 'Remote skriptid',
    'load_remote_help_text'		=> 'See Snipe-IT-i install võib laadida skripte välisest maailmast.',
    'login_note'                => 'Logi sisse Märkus',
    'login_note_help'           => 'Soovi korral lisage oma sisselogimisekraanile mõni lause, näiteks selleks, et aidata inimesi, kes on leidnud kadunud või varastatud seadme. See väli võtab vastu <a href="https://help.github.com/articles/github-flavored-markdown/">Github maitsestatud markdown</a>',
    'login_remote_user_text'    => 'Remote User login options',
    'login_remote_user_enabled_text' => 'Enable Login with Remote User Header',
    'login_remote_user_enabled_help' => 'This option enables Authentication via the REMOTE_USER header according to the "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Disable other authentication mechanisms',
    'login_common_disabled_help' => 'This option disables other authentication mechanisms. Just enable this option if you are sure that your REMOTE_USER login is already working',
    'login_remote_user_custom_logout_url_text' => 'Custom logout URL',
    'login_remote_user_custom_logout_url_help' => 'If a url is provided here, users will get redirected to this URL after the user logs out of Snipe-IT. This is useful to close the user sessions of your Authentication provider correctly.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Use in Print',
    'logo_print_assets_help'    => 'Use branding on printable asset lists ',
    'full_multiple_companies_support_help_text' => 'Kasutajate (sh administraatorite) piiramine, mis on määratud firmadele ettevõtte varadele.',
    'full_multiple_companies_support_text' => 'Terve mitu ettevõtete toetust',
    'show_in_model_list'   => 'Show in Model Dropdowns',
    'optional'					=> 'vabatahtlik',
    'per_page'                  => 'Tulemused lehel',
    'php'                       => 'PHP versioon',
    'php_gd_info'               => 'Peate installima php-gd, et kuvada QR-koode, vt installijuhiseid.',
    'php_gd_warning'            => 'PHP pilditöötlust ja GD pluginat ei ole installitud.',
    'pwd_secure_complexity'     => 'Parool keerukus',
    'pwd_secure_complexity_help' => 'Valige mis parooli keerukuse reeglid soovite jõustada.',
    'pwd_secure_min'            => 'Parool miinimummärke',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'Vältida tavapäraseid paroole',
    'pwd_secure_uncommon_help'  => 'See keelab kasutajatel kasutada tavapäraseid paroole 10 000 paroole, mis on teatatud rikkumistest.',
    'qr_help'                   => 'Luba QR-koodid esmalt selle seadistamiseks',
    'qr_text'                   => 'QR-koodi tekst',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'setting'                   => 'Seadistus',
    'settings'                  => 'Seaded',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Saidi nimi',
    'slack_botname'             => 'Vähene botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Lõpp-punkt',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Once you have saved your Slack information, a test button will appear.',
    'slack_test_help'           => 'Test whether your Slack integration is configured correctly. YOU MUST SAVE YOUR UPDATED SLACK SETTINGS FIRST.',
    'snipe_version'  			=> 'Snipe-IT versioon',
    'support_footer'            => 'Support Footer Links ',
    'support_footer_help'       => 'Specify who sees the links to the Snipe-IT Support info and Users Manual',
    'version_footer'            => 'Version in Footer ',
    'version_footer_help'       => 'Specify who sees the Snipe-IT version and build number.',
    'system'                    => 'Süsteemi informatsioon',
    'update'                    => 'Värskenda seaded',
    'value'                     => 'Väärtus',
    'brand'                     => 'Branding',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Seadistuste kohta',
    'about_settings_text'       => 'Need sätted võimaldavad teil kohandada oma installi teatud aspekte.',
    'labels_per_page'           => 'Sildid lehel',
    'label_dimensions'          => 'Märgise mõõtmed (tollid)',
    'next_auto_tag_base'        => 'Järgmine automaatne juurdekasv',
    'page_padding'              => 'Lehe marginaalid (tollid)',
    'privacy_policy_link'       => 'Link to Privacy Policy',
    'privacy_policy'            => 'Privacy Policy',
    'privacy_policy_link_help'  => 'If a url is included here, a link to your privacy policy will be included in the app footer and in any emails that the system sends out, in compliance with GDPR. ',
    'purge'                     => 'Puhasta kustutatud dokumendid',
    'labels_display_bgutter'    => 'Sildi alumine veekraan',
    'labels_display_sgutter'    => 'Märgise külgrauad',
    'labels_fontsize'           => 'Sildi suuruse font',
    'labels_pagewidth'          => 'Märgistri laius',
    'labels_pageheight'         => 'Märgistuste lehe kõrgus',
    'label_gutters'        => 'Märgise vahe (tollides)',
    'page_dimensions'        => 'Lehe mõõtmed (tolli kohta)',
    'label_fields'          => 'Märgistage nähtavaid välju',
    'inches'        => 'tolli',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link Snipe-IT-ile meilides',
    'show_url_in_emails_help_text'      => 'Tühjendage see ruut, kui te ei soovi teie e-posti jalustisse naasta Snipe-IT-i installatsioonile. Kasulik, kui enamik teie kasutajaid kunagi ei logi sisse.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Maksimaalne pisipildi kõrgus',
    'thumbnail_max_h_help'   => 'Pikilehtede maksimaalne kõrgus võib pisipilte lugeda loendi vaates. Min 25, max 500.',
    'two_factor'        => 'Kaks teguri autentimist',
    'two_factor_secret'        => 'Kahe faktori kood',
    'two_factor_enrollment'        => 'Kahe faktori registreerimine',
    'two_factor_enabled_text'        => 'Luba kaks tegurit',
    'two_factor_reset'        => 'Lähtesta kahefaktori saladus',
    'two_factor_reset_help'        => 'See sunnib kasutajat uuesti oma seadet Google Authenticatoriga registreerima. See võib olla kasulik, kui nende praegu registreeritav seade on kadunud või varastatud.',
    'two_factor_reset_success'          => 'Kahe faktori seade on edukalt lähtestatud',
    'two_factor_reset_error'          => 'Kaks tegurit seadete lähtestamine nurjus',
    'two_factor_enabled_warning'        => 'Kaheteguri lubamine, kui see pole praegu lubatud, viib teid otsekohe Google Auth-seadmesse autentimiseks. Teil on võimalus oma seadet registreeruda, kui seda praegu ei ole.',
    'two_factor_enabled_help'        => 'See lülitab kaheteguri autentimise abil Google Authenticatori.',
    'two_factor_optional'        => 'Valikuline (Kasutajad saavad lubada või keelata)',
    'two_factor_required'        => 'Nõutav kõigile kasutajatele',
    'two_factor_disabled'        => 'Keelatud',
    'two_factor_enter_code'	=> 'Sisestage kahe faktori kood',
    'two_factor_config_complete'	=> 'Esita koodeks',
    'two_factor_enabled_edit_not_allowed' => 'Teie administraator ei luba seda sätet muuta.',
    'two_factor_enrollment_text'	=> "Vaja on kahte tegurit, kuid teie seadet ei ole veel registreeritud. Avage oma Google Authenticatori rakendus ja skannige oma seadme registreerimiseks allolevat QR-koodi. Kui olete oma seadme sisestanud, sisestage allolev kood",
    'require_accept_signature'      => 'Nõuda allkirja',
    'require_accept_signature_help_text'      => 'Selle funktsiooni lubamine nõuab, et kasutajad võtaksid vara füüsiliselt alla.',
    'left'        => 'lahkus',
    'right'        => 'õige',
    'top'        => 'üleval',
    'bottom'        => 'põhja',
    'vertical'        => 'vertikaalne',
    'horizontal'        => 'horisontaalne',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count'        => 'Varasiltide, sealhulgas zerofilli pikkus',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
);
