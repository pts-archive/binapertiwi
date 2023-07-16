<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory-domän',
    'ad_domain_help'			=> 'Detta är ibland samma som din e-post domän, men inte alltid.',
    'ad_append_domain_label'    => 'Lägg till domännamn',
    'ad_append_domain'          => 'Lägg till domännamn i fältet användarnamn',
    'ad_append_domain_help'     => 'Användaren behöver inte skriva "username@domain.local", det räcker att skriva "username".' ,
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'Om du vill skicka en kopia av checkin / checkout-e-postmeddelanden som skickas till användare till ett extra e-postkonto, skriv det här. Annars lämnar du fältet tomt.',
    'is_ad'				        => 'Detta är en Active Directory-server',
    'alert_email'				=> 'Skicka larm till',
    'alerts_enabled'			=> 'Larm aktivt',
    'alert_interval'			=> 'Utgående varningströskel (i dagar)',
    'alert_inv_threshold'		=> 'Varna om lågt lagersaldo',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> 'Tillgångs-ID',
    'audit_interval'            => 'Inventeringsintervall',
    'audit_interval_help'       => 'Om ni är i behov av regelbunden fysisk inventering av era tillgångar anger du intervallet i månader.',
    'audit_warning_days'        => 'Gränsvärde för varning om nästa inventering',
    'audit_warning_days_help'   => 'Hur många dagar i förväg vill du bli varnad när det närmar sig revision av tillgångar?',
    'auto_increment_assets'		=> 'Skapa automatiskt stigande tillgångs-ID',
    'auto_increment_prefix'		=> 'Prefix (frivilligt)',
    'auto_incrementing_help'    => 'Aktivera automatisk inkrementering av tillgångs-ID först för att ställa in detta',
    'backups'					=> 'Säkerhetskopior',
    'barcode_settings'			=> 'Streckkodsinställningar',
    'confirm_purge'			    => 'Bekräfta tömning',
    'confirm_purge_help'		=> 'Ange texten "DELETE" i rutan nedan för att rensa dina raderade poster. Denna åtgärd kan inte ångras och kommer PERMANENT ta bort alla mjuk-raderade objekt och användare. (Du bör göra en säkerhetskopia först, för att vara säker.)',
    'custom_css'				=> 'Anpassad CSS',
    'custom_css_help'			=> 'Fyll i eventuella anpassade CSS-överskridningar du vill använda. Inkludera inte &lt;style&gt;&lt;/style&gt; taggar.',
    'custom_forgot_pass_url'	=> 'Anpassad lösenordsåterställningsadress',
    'custom_forgot_pass_url_help'	=> 'Detta ersätter den inbyggda glömda lösenord URLen på inloggningsskärmen, användbart för att styra människor till den interna eller hostade LDAP-lösenordsåterställningen. Det kommer att effektivt inaktivera den lokala "glömt lösenord" funktionen.',
    'dashboard_message'			=> 'Dashboard-meddelande',
    'dashboard_message_help'	=> 'Denna text kommer att visas på instrumentbrädan för alla med behörighet att visa instrumentbrädan.',
    'default_currency'  		=> 'Standardvaluta',
    'default_eula_text'			=> 'Standard EULA',
    'default_language'			=> 'Standardspråk',
    'default_eula_help_text'	=> 'Du kan också associera anpassade EULA till specifika tillgångskategorier.',
    'display_asset_name'        => 'Visa tillgångens namn',
    'display_checkout_date'     => 'Visa utcheckningsdatum',
    'display_eol'               => 'Visa EOL i tabellvy',
    'display_qr'                => 'Visa QR-koder',
    'display_alt_barcode'		=> 'Visa 1D streckkod',
    'email_logo'                => 'E-Post logotyp',
    'barcode_type'				=> '2D streckkodstyp',
    'alt_barcode_type'			=> '1D streckkodstyp',
    'email_logo_size'       => 'Kvadratiska logotyper i e-post ser bäst ut. ',
    'eula_settings'				=> 'EULA-inställningar',
    'eula_markdown'				=> 'Detta EULA tillåter <a href="https://help.github.com/articles/github-flavored-markdown/">Github smaksatt markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Godkända filtyper är ico, png och gif. Andra bildformat fungerar inte i alla webbläsare.',
    'favicon_size'          => 'Favicon-bilder ska vara fyrkantiga, 16x16 pixlar.',
    'footer_text'               => 'Ytterligare Footer Text ',
    'footer_text_help'          => 'Denna text kommer visas i höger sidfot. Länkar ska anges enligt <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Radbrytningar, rubriker, bilder, etc kan ge oförutsägbara resultat.',
    'general_settings'			=> 'Allmänna inställningar',
    'generate_backup'			=> 'Skapa säkerhetskopia',
    'header_color'              => 'Sidhuvudets färg',
    'info'                      => 'Med dessa inställningar kan du anpassa vissa delar av din installation.',
    'label_logo'                => 'Etikett logotyp',
    'label_logo_size'           => 'Fyrkantiga logotyper ser bäst ut - kommer att visas i det övre högra hörnet av varje tillgångsetikett. ',
    'laravel'                   => 'Laravel Version',
    'ldap_enabled'              => 'LDAP aktiverad',
    'ldap_integration'          => 'LDAP-integration',
    'ldap_settings'             => 'LDAP-inställningar',
    'ldap_login_test_help'      => 'Ange ett giltigt LDAP användarnamn och lösenord från basen DN du angav ovan för att testa om LDAP-inloggningen är korrekt konfigurerad. DU MÅSTE SPARA DINA UPPDATERADE LDAPINSTÄLLNINGAR FÖRST.',
    'ldap_login_sync_help'      => 'Detta testar bara att LDAP kan synkroniseras korrekt. Om din LDAP-autentiseringsfråga inte är korrekt kan användarna fortfarande inte logga in. DU MÅSTE SPARA DINA UPPDATERADE LDAPINSTÄLLNINGAR FÖRST.',
    'ldap_server'               => 'LDAP-server',
    'ldap_server_help'          => 'Detta bör börja med ldap: // (för okrypterad eller TLS) eller ldaps: // (för SSL)',
    'ldap_server_cert'			=> 'Validering av LDAP SSL-certifikat',
    'ldap_server_cert_ignore'	=> 'Tillåt ogiltigt SSL-certifikat',
    'ldap_server_cert_help'		=> 'Markera den här kryssrutan om du använder en självtecknad SSL-cert och vill acceptera ett ogiltigt SSL-certifikat.',
    'ldap_tls'                  => 'Använd TLS',
    'ldap_tls_help'             => 'Detta bör endast kontrolleras om du kör STARTTLS på din LDAP-server.',
    'ldap_uname'                => 'LDAP Bind användarnamn',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'LDAP-bindlösenord',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP-filter',
    'ldap_pw_sync'              => 'LDAP-lösenordssynkronisering',
    'ldap_pw_sync_help'         => 'Avmarkera den här rutan om du inte vill behålla LDAP-lösenord synkroniserade med lokala lösenord. Inaktivera detta innebär att dina användare kanske inte kan logga in om din LDAP-server inte är tillgänglig för någon anledning.',
    'ldap_username_field'       => 'Användarnamn fält',
    'ldap_lname_field'          => 'Efternamn',
    'ldap_fname_field'          => 'LDAP förnamn',
    'ldap_auth_filter_query'    => 'LDAP-autentiseringsfråga',
    'ldap_version'              => 'LDAP-version',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'Denna flagga används för att avgöra om en användare kan logga in på Snipe-IT och påverkar inte möjligheten att checka in eller ut objekt till dem.',
    'ldap_emp_num'              => 'LDAP anställd nummer',
    'ldap_email'                => 'LDAP-e-post',
    'license'                  => 'Mjukvarulicens',
    'load_remote_text'          => 'Fjärrskript',
    'load_remote_help_text'		=> 'Denna Snipe-IT-installation kan ladda skript från omvärlden.',
    'login_note'                => 'Inloggning Obs',
    'login_note_help'           => 'Lägg till valfri text på din inloggningsskärm, till exempel för att hjälpa personer som har hittat en borttappad eller stulen enhet. Detta fält accepterar <a href="https://help.github.com/articles/github-flavored-markdown/">GitHub Flavored Markdown</a>',
    'login_remote_user_text'    => 'Alternativ för fjärrinloggning',
    'login_remote_user_enabled_text' => 'Aktivera inloggning med REMOTE_USER header',
    'login_remote_user_enabled_help' => 'Detta gör det möjligt att autentisera via REMOTE_USER header i enlighet med "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Inaktivera andra autentiseringsmekanismer',
    'login_common_disabled_help' => 'Det här alternativet inaktiverar andra autentiseringsmetoder. Aktivera bara detta om du är säker på att din REMOTE_USER inloggning fungerar',
    'login_remote_user_custom_logout_url_text' => 'Anpassad utloggnings-URL',
    'login_remote_user_custom_logout_url_help' => 'Om en URL tillhandahålls här kommer användarna att omdirigeras till den här webbadressen efter att användaren loggat ut från Snipe-IT. Det här är användbart för att stänga användarsessionerna i din autentiseringsleverantör korrekt.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logotyp',
    'logo_print_assets'         => 'Använd vid utskrift',
    'logo_print_assets_help'    => 'Använda branding på utskrivbara tillgångs-listor ',
    'full_multiple_companies_support_help_text' => 'Begränsa användare (inklusive administratörer) tilldelade företag till företagets tillgångar.',
    'full_multiple_companies_support_text' => 'Full Multiple Companies Support',
    'show_in_model_list'   => 'Visa i rullgardinsmeny för modell',
    'optional'					=> 'frivillig',
    'per_page'                  => 'Resultat per sida',
    'php'                       => 'PHP-versionen',
    'php_gd_info'               => 'Du måste installera php-gd för att visa QR-koder, se installationsanvisningarna.',
    'php_gd_warning'            => 'PHP Image Processing och GD plugin är INTE installerat.',
    'pwd_secure_complexity'     => 'Lösenordspolicy',
    'pwd_secure_complexity_help' => 'Välj vilka kriterier lösenordet måste uppfylla.',
    'pwd_secure_min'            => 'Minsta antal tecken för lösenord',
    'pwd_secure_min_help'       => 'Lägsta tillåtna värde är 8',
    'pwd_secure_uncommon'       => 'Förbjud vanliga lösenord',
    'pwd_secure_uncommon_help'  => 'Det här kommer att förhindra användarna från att använda något av de 10,000 oftast förekommande lösenorden som rapporterats vid dataintrång.',
    'qr_help'                   => 'Aktivera QR-koder först för att ställa in detta',
    'qr_text'                   => 'QR Kod Text',
    'saml_enabled'              => 'SAML aktiverat',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entitet ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Offentligt certifikat',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Tvinga inloggning',
    'saml_forcelogin'           => 'Gör SAML till den primära inloggningstypen',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML engångsutloggning',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML egna inställningar',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'setting'                   => 'Miljö',
    'settings'                  => 'inställningar',
    'show_alerts_in_menu'       => 'Visa varningar i toppmenyn',
    'show_archived_in_list'     => 'Arkiverade tillgångar',
    'show_archived_in_list_text'     => 'Visa arkiverade tillgångar i listan "alla tillgångar"',
    'show_assigned_assets'      => 'Visa tillgångar tilldelade till tillgångar',
    'show_assigned_assets_help' => 'Visa tillgångar som tilldelats andra tillgångar i Visa användare -> Tillgångar, Se användare -> Information -> Skriv ut Alla Tilldelade och i Konto -> Visa Tilldelade Tillgångar.',
    'show_images_in_email'     => 'Visa bilder i e-postmeddelanden',
    'show_images_in_email_help'   => 'Avmarkera den här rutan om din Snipe-IT-installation ligger bakom ett VPN eller ett stängt nätverk och användare utanför nätverket kan inte ladda bilder som visas från den här installationen i sina e-postmeddelanden.',
    'site_name'                 => 'Sidnamn',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'När du har sparat din Slack-information visas en testknapp.',
    'slack_test_help'           => 'Testa om din Slack-integration är konfigurerad korrekt. DU MÅSTE SPARA DINA UPPDATERADE SLACK-INSTÄLLNINGAR FÖRST.',
    'snipe_version'  			=> 'Snipe-IT-versionen',
    'support_footer'            => 'Stöd länkar i sidfot ',
    'support_footer_help'       => 'Ange vem som kan se länkarna till Snipe-IT Support info och användarmanual',
    'version_footer'            => 'Version i sidfot ',
    'version_footer_help'       => 'Specificera vilka som kan se Snipe-IT version och build nummer.',
    'system'                    => 'Systeminformation',
    'update'                    => 'Uppdatera inställningarna',
    'value'                     => 'Värde',
    'brand'                     => 'branding',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Om inställningar',
    'about_settings_text'       => 'Med dessa inställningar kan du anpassa vissa aspekter av din installation.',
    'labels_per_page'           => 'Etiketter per sida',
    'label_dimensions'          => 'Märkdimensioner (tum)',
    'next_auto_tag_base'        => 'Nästa auto-inkrement',
    'page_padding'              => 'Sidmarginaler (tum)',
    'privacy_policy_link'       => 'Länk till sekretesspolicy',
    'privacy_policy'            => 'Integritetspolicy',
    'privacy_policy_link_help'  => 'Om en URL ingår här kommer en länk till din integritetspolicy att finnas med i appfoten och i alla e-postmeddelanden som systemet skickar ut, i enlighet med GDPR. ',
    'purge'                     => 'Rensa borttagna poster',
    'labels_display_bgutter'    => 'Etikett botten takrännan',
    'labels_display_sgutter'    => 'Etikett sidotång',
    'labels_fontsize'           => 'Etikettstorlek',
    'labels_pagewidth'          => 'Märkbladets bredd',
    'labels_pageheight'         => 'Märkbladshöjd',
    'label_gutters'        => 'Etikettavstånd (tum)',
    'page_dimensions'        => 'Siddimensioner (tum)',
    'label_fields'          => 'Etikett synliga fält',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Länk till Snipe-IT i e-post',
    'show_url_in_emails_help_text'      => 'Avmarkera den här rutan om du inte vill länka tillbaka till din Snipe-IT-installation i dina e-postfoton. Användbart om de flesta av dina användare aldrig loggar in.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max miniatyrhöjd',
    'thumbnail_max_h_help'   => 'Maximal höjd i pixlar som miniatyrer kan visas i listningsvyn. Min 25, max 500.',
    'two_factor'        => 'Tvåfaktorsautentisering',
    'two_factor_secret'        => 'Tvåfaktorskod',
    'two_factor_enrollment'        => 'Tvåfaktorsregistrering',
    'two_factor_enabled_text'        => 'Aktivera tvåfaktorsautentisering',
    'two_factor_reset'        => 'Återställ tvåfaktorshemlighet',
    'two_factor_reset_help'        => 'Detta kommer att tvinga användaren att anmäla sin enhet med Google Authenticator igen. Detta kan vara användbart om den för närvarande inskrivna enheten är förlorad eller stulen.',
    'two_factor_reset_success'          => 'Tvåfaktorsenheten har återställts',
    'two_factor_reset_error'          => 'Återställningen av tvåfelsenhet misslyckades',
    'two_factor_enabled_warning'        => 'Aktivering av tvåfaktorn om den inte är aktiverad för tillfället tvingar dig omedelbart att verifiera med en Google Auth-registrerad enhet. Du kommer att ha möjlighet att registrera din enhet om du inte är inloggad för närvarande.',
    'two_factor_enabled_help'        => 'Detta aktiverar tvåfaktorsautentisering med hjälp av Google Authenticator.',
    'two_factor_optional'        => 'Selective (Användare kan aktivera eller inaktivera om tillåtet)',
    'two_factor_required'        => 'Krävs för alla användare',
    'two_factor_disabled'        => 'Inaktiverad',
    'two_factor_enter_code'	=> 'Ange tvåfaktorskod',
    'two_factor_config_complete'	=> 'Skicka kod',
    'two_factor_enabled_edit_not_allowed' => 'Din administratör tillåter dig inte att redigera den här inställningen.',
    'two_factor_enrollment_text'	=> "Tvåfaktorsautentisering krävs, men din enhet har inte registrerats än. Öppna din Google Authenticator-app och skanna QR-koden nedan för att registrera din enhet. När enheten är registrerad anger du koden nedan",
    'require_accept_signature'      => 'Kräver signatur',
    'require_accept_signature_help_text'      => 'Aktivering av denna funktion kräver att användarna fysiskt loggar av när de accepterar en tillgång.',
    'left'        => 'vänster',
    'right'        => 'höger',
    'top'        => 'topp',
    'bottom'        => 'botten',
    'vertical'        => 'vertikal',
    'horizontal'        => 'horisontell',
    'unique_serial'                => 'Unika serienummer',
    'unique_serial_help_text'                => 'Genom att kryssa denna ruta skapas ett krav på unikt serienummer för varje enhet',
    'zerofill_count'        => 'Längd på tillgångstaggar, inklusive zerofill',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
);
