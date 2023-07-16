<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domæne',
    'ad_domain_help'			=> 'Dette er nogle gange det samme som dit e-mail-domæne, men ikke altid.',
    'ad_append_domain_label'    => 'Tilføj domænenavn',
    'ad_append_domain'          => 'Tilføj domænenavn til feltet brugernavn',
    'ad_append_domain_help'     => 'Brugeren er ikke forpligtet til at skrive "username@domain.local", de kan bare skrive "brugernavn".' ,
    'admin_cc_email'            => 'CC email',
    'admin_cc_email_help'       => 'Hvis du vil sende en kopi af checkin/checkout emails som er sendt til brugere til en ekstra email konto, så tilføj den her. Ellers efterlad feltet tomt.',
    'is_ad'				        => 'Dette er en Active Directory-server',
    'alert_email'				=> 'Send advarsler til',
    'alerts_enabled'			=> 'Advarsler aktiveret',
    'alert_interval'			=> 'Udløbsvarsel Threshold (i dage)',
    'alert_inv_threshold'		=> 'Lagervarsletærskel',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> 'Aktiv-id\'er',
    'audit_interval'            => 'Revisionsinterval',
    'audit_interval_help'       => 'Hvis du skal regelmæssigt kontrollere dine aktiver fysisk, skal du indtaste intervallet i måneder.',
    'audit_warning_days'        => 'Audit Warning Threshold',
    'audit_warning_days_help'   => 'Hvor mange dage i forvejen skal vi advare dig, når aktiver skal betales for revision?',
    'auto_increment_assets'		=> 'Generer automatisk stigende aktiv-id\'er',
    'auto_increment_prefix'		=> 'Præfiks (valgfrit)',
    'auto_incrementing_help'    => 'Aktivér automatisk inkrementering af aktiv ID\'er for at indstille dette',
    'backups'					=> 'Backups',
    'barcode_settings'			=> 'Stregkodeindstillinger',
    'confirm_purge'			    => 'Bekræft rensning',
    'confirm_purge_help'		=> 'Indtast teksten "DELETE" i boksen nedenfor for at tømme dine slettede poster. Denne handling kan ikke fortrydes og vil slette alle soft-slettede elementer og brugere PERMANENT. (Du bør lave en sikkerhedskopi først, bare for at være sikker.)',
    'custom_css'				=> 'Brugerdefineret CSS',
    'custom_css_help'			=> 'Indtast eventuelle brugerdefinerede CSS overskridelser, du gerne vil bruge. Indsæt ikke de &lt;style&gt;&lt;/style&gt; tags.',
    'custom_forgot_pass_url'	=> 'Tilpasset Kodeord reset URL',
    'custom_forgot_pass_url_help'	=> 'Dette anvendes i stedet for den indbyggede URL til "glemt kodeord" på login billedet, anvendelig til at sende besøgende til en intern eller hosted LDAP kodeord reset funktion. Den vil effektivt afstille den lokale "glemt kodeord" funktionalitet.',
    'dashboard_message'			=> 'Dashboard meddelelse',
    'dashboard_message_help'	=> 'Denne tekst vil vises på dashboard for alle som har tilladelse til at se dashbordet.',
    'default_currency'  		=> 'Standardvaluta',
    'default_eula_text'			=> 'Standard EULA',
    'default_language'			=> 'Standard sprog',
    'default_eula_help_text'	=> 'Du kan også knytte brugerdefinerede EULA til specifikke aktivkategorier.',
    'display_asset_name'        => 'Vis aktivnavn',
    'display_checkout_date'     => 'Vis checkout dato',
    'display_eol'               => 'Vis EOL i tabelvisning',
    'display_qr'                => 'Vis firkantede koder',
    'display_alt_barcode'		=> 'Vis 1D stregkode',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> '2D stregkode type',
    'alt_barcode_type'			=> '1D stregkode type',
    'email_logo_size'       => 'Kvadratiske logoer i e-mail ser bedst ud. ',
    'eula_settings'				=> 'EULA-indstillinger',
    'eula_markdown'				=> 'Denne EULA tillader <a href="https://help.github.com/articles/github-flavored-markdown/">Github smagsmærket markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepterede filtyper er ico, png, og gif. Andre billedformater fungerer muligvis ikke i alle browsere.',
    'favicon_size'          => 'Favicons skal være firkantede billeder, 16x16 pixels.',
    'footer_text'               => 'Ekstra footer tekst ',
    'footer_text_help'          => 'Denne tekst vil vises i footeren i højre side. Der kan anvendes links ved hjælp af <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Linjeskift, headere, billeder etc. kan føre til uforudsigelige resultater.',
    'general_settings'			=> 'Generelle indstillinger',
    'generate_backup'			=> 'Generer sikkerhedskopiering',
    'header_color'              => 'Hovedfarge',
    'info'                      => 'Disse indstillinger giver dig mulighed for at tilpasse visse aspekter af din installation.',
    'label_logo'                => 'Etiketlogo',
    'label_logo_size'           => 'Firkantede logoer ser bedst ud - vil blive vist øverst til højre på hver aktiv etiket. ',
    'laravel'                   => 'Laravel Version',
    'ldap_enabled'              => 'LDAP aktiveret',
    'ldap_integration'          => 'LDAP Integration',
    'ldap_settings'             => 'LDAP-indstillinger',
    'ldap_login_test_help'      => 'Indtast validt LDAP brugernavn og kodeord fra den basis DN du angav ovenfor for at teste om dit LDAP login er korrekt konfigureret. DU SKAL FØRST OPDATERE og GEMME DINE LDAP INDSTILLINGER.',
    'ldap_login_sync_help'      => 'Dette tester kun om LDAP kan synkronisere korrekt. Hvis din LDAP authentisering ikke er korrekt, er det usikkert om brugere kan logge ind. DU SKAL FØRST OPDATERE OG GEMME DINE LDAP INDSTILLINGER.',
    'ldap_server'               => 'LDAP-server',
    'ldap_server_help'          => 'Dette skal starte med ldap: // (for ukrypteret eller TLS) eller ldaps: // (for SSL)',
    'ldap_server_cert'			=> 'Validering af LDAP SSL-certifikat',
    'ldap_server_cert_ignore'	=> 'Tillad ugyldigt SSL-certifikat',
    'ldap_server_cert_help'		=> 'Marker dette afkrydsningsfelt, hvis du bruger et selvtegnet SSL cert og vil gerne acceptere et ugyldigt SSL-certifikat.',
    'ldap_tls'                  => 'Brug TLS',
    'ldap_tls_help'             => 'Dette bør kun kontrolleres, hvis du kører STARTTLS på din LDAP-server.',
    'ldap_uname'                => 'LDAP Bind Brugernavn',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'LDAP-bindingsadgangskode',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP-filter',
    'ldap_pw_sync'              => 'LDAP Password Sync',
    'ldap_pw_sync_help'         => 'Fjern markeringen i dette felt, hvis du ikke vil beholde LDAP-adgangskoder synkroniseret med lokale adgangskoder. Deaktivering dette betyder, at dine brugere muligvis ikke kan logge ind, hvis din LDAP-server ikke er tilgængelig af en eller anden grund.',
    'ldap_username_field'       => 'Brugernavn felt',
    'ldap_lname_field'          => 'Efternavn',
    'ldap_fname_field'          => 'LDAP fornavn',
    'ldap_auth_filter_query'    => 'LDAP-godkendelse forespørgsel',
    'ldap_version'              => 'LDAP Version',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'Dette flag bruges til at afgøre, om en bruger kan logge ind på Snipe-IT og påvirker ikke evnen til at tjekke elementer ind eller ud til dem.',
    'ldap_emp_num'              => 'LDAP medarbejdernummer',
    'ldap_email'                => 'LDAP Email',
    'license'                  => 'Software licens',
    'load_remote_text'          => 'Fjernskrifter',
    'load_remote_help_text'		=> 'Denne Snipe-IT-installation kan indlæse scripts fra omverdenen.',
    'login_note'                => 'Login Note',
    'login_note_help'           => 'Indsæt eventuelt nogle sætninger på din loginskærm, for eksempel for at hjælpe personer, der har fundet en tabt eller stjålet enhed. Dette felt accepterer <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'login_remote_user_text'    => 'Loginoptions for fjernbrugere',
    'login_remote_user_enabled_text' => 'Tillad login med fjernbrugerheader',
    'login_remote_user_enabled_help' => 'Denne option tillader authentisering via REMOTE_USER headr jf. "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Deaktiver andre authentiseringsmekanismer',
    'login_common_disabled_help' => 'Denne option deaktiverer andre authentiseringsmekanismer. Aktiver denne option, hvis du er sikker på at dit REMOTE_USER login allerede virker',
    'login_remote_user_custom_logout_url_text' => 'Tilpasset logout URL',
    'login_remote_user_custom_logout_url_help' => 'Hvis en URL er angivet her, vil brugere blive omstillet til den efter de har logget ud af Snipe-IT. Det er anvendeligt for at lukke bruger sessions i din authentiseringsmekanisme korrekt.',
    'login_remote_user_header_name_text' => 'Brugerdefineret brugernavn header',
    'login_remote_user_header_name_help' => 'Brug den angivne overskrift i stedet for REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Brug i udskrift',
    'logo_print_assets_help'    => 'Brug branding på udskrevne aktivlister ',
    'full_multiple_companies_support_help_text' => 'Begrænsning af brugere (herunder admins) tildelt virksomheder til deres virksomheds aktiver.',
    'full_multiple_companies_support_text' => 'Fuld flere virksomheder support',
    'show_in_model_list'   => 'Vis i modeldropdown',
    'optional'					=> 'valgfri',
    'per_page'                  => 'Resultater pr. Side',
    'php'                       => 'PHP Version',
    'php_gd_info'               => 'Du skal installere php-gd for at vise QR-koder, se installationsvejledningen.',
    'php_gd_warning'            => 'PHP Image Processing og GD plugin er IKKE installeret.',
    'pwd_secure_complexity'     => 'Password Complexity',
    'pwd_secure_complexity_help' => 'Vælg, hvilke regler for adgangskompleksitet du ønsker at håndhæve.',
    'pwd_secure_min'            => 'Minimumskode til adgangskode',
    'pwd_secure_min_help'       => 'Mindste tilladte værdi er 8',
    'pwd_secure_uncommon'       => 'Forhindre almindelige adgangskoder',
    'pwd_secure_uncommon_help'  => 'Dette vil gøre det muligt for brugere at bruge almindelige adgangskoder fra de 10.000 passwords, der er rapporteret i tilfælde af brud.',
    'qr_help'                   => 'Aktiver QR-koder først for at indstille dette',
    'qr_text'                   => 'QR Kode Tekst',
    'saml_enabled'              => 'SAML aktiveret',
    'saml_integration'          => 'SAML-integration',
    'saml_sp_entityid'          => 'Enheds ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Offentligt Certifikat',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'Du kan angive IdP metadata ved hjælp af en URL eller XML-fil.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Brugernavn',
    'saml_attr_mapping_username_help' => 'NavnID vil blive brugt hvis attributmapping er uspecificeret eller ugyldig.',
    'saml_forcelogin_label'     => 'SAML gennemtving Login',
    'saml_forcelogin'           => 'Gør SAML til det primære login',
    'saml_forcelogin_help'      => 'Du kan bruge \'/login?nosaml\' for at komme til den normale loginside.',
    'saml_slo_label'            => 'SAML Single log af',
    'saml_slo'                  => 'Send en LogoutRequest til IdP ved Log af',
    'saml_slo_help'             => 'Dette vil omdirigere brugeren til IdP ved logout. Lad være umarkeret hvis IdP ikke korrekt understøtter SP-initieret SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'Du kan angive yderligere indstillinger til onelogin/php-saml biblioteket. Brug på egen risiko.',
    'setting'                   => 'Indstilling',
    'settings'                  => 'Indstillinger',
    'show_alerts_in_menu'       => 'Vis meddelelser i top menu',
    'show_archived_in_list'     => 'Arkiverede aktiver',
    'show_archived_in_list_text'     => 'Vis arkiverede aktiver i "Alle aktiver" listen',
    'show_assigned_assets'      => 'Vis assets tildelt til assets',
    'show_assigned_assets_help' => 'Vis assets som blev tildelt til andre assets i Vis bruger -> Aktiver, Vis bruger -> Info -> Udskriv alle Tildelt og på konto -> Vis Tildelte aktiver.',
    'show_images_in_email'     => 'Vis billeder i emails',
    'show_images_in_email_help'   => 'Afkryds denne boks hvis din Snipe-IT installation er bag en VPN eller i et lukket netværk og brugere udenfor netværket vil forhinderes i at anvende billeder fra netværket i deres emails.',
    'site_name'                 => 'Side navn',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slap endepunkt',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Slack integration er valgfri, men endpoint og kanal er påkrævet, hvis du ønsker at bruge det. For at konfigurere Slack integration, skal du først <a href=":slack_link" target="_new" rel="noopener">oprette en indgående webhook</a> på din Slack konto. Klik på knappen <strong>Test Slack Integration</strong> for at bekræfte, at dine indstillinger er korrekte, før du gemmer. ',
    'slack_integration_help_button'    => 'Nå du har gemt din Slack information, vil testknappen blive synlig.',
    'slack_test_help'           => 'Test om din Slack integration er konfigureret korrekt. DU SKAL FØRST OPDATERE OG GEMME DINE SLACK\'s INDSTILLINGER.',
    'snipe_version'  			=> 'Snipe-IT version',
    'support_footer'            => 'Understøt footer links ',
    'support_footer_help'       => 'Angiv hvem der kan se links i Snipe-IT Support info og brugermanual',
    'version_footer'            => 'Version in footer ',
    'version_footer_help'       => 'Angiv hvem der kan se Snipe-IT versions- og buildnummer.',
    'system'                    => 'Systemoplysninger',
    'update'                    => 'Opdater indstillinger',
    'value'                     => 'Værdi',
    'brand'                     => 'Branding',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Om indstillinger',
    'about_settings_text'       => 'Disse indstillinger giver dig mulighed for at tilpasse visse aspekter af din installation.',
    'labels_per_page'           => 'Etiketter pr. Side',
    'label_dimensions'          => 'Etiket dimensioner (inches)',
    'next_auto_tag_base'        => 'Næste automatisk stigning',
    'page_padding'              => 'Sidemarginer (tommer)',
    'privacy_policy_link'       => 'Link til persondatapolitik',
    'privacy_policy'            => 'Persondatapolitik',
    'privacy_policy_link_help'  => 'Hvis der inkluderes en URL her, vil der blive inkluderet et link til din persondatapolitik i app\'ens footer og i alle emails systemet sender ud ( overensstemmelse med GDPR). ',
    'purge'                     => 'Ryd slettet poster',
    'labels_display_bgutter'    => 'Etiket bundgitter',
    'labels_display_sgutter'    => 'Label side rende',
    'labels_fontsize'           => 'Etiket skriftstørrelse',
    'labels_pagewidth'          => 'Labelark bredde',
    'labels_pageheight'         => 'Etiketark højde',
    'label_gutters'        => 'Etiketafstand (tommer)',
    'page_dimensions'        => 'Side dimensioner (tommer)',
    'label_fields'          => 'Label synlige felter',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link til Snipe-IT i e-mails',
    'show_url_in_emails_help_text'      => 'Fjern markeringen i dette felt, hvis du ikke vil linke tilbage til din Snipe-IT-installation i dine e-mail-fodbold. Nyttigt, hvis de fleste af dine brugere aldrig logger ind.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max miniaturehøjde',
    'thumbnail_max_h_help'   => 'Maksimal højde i pixels, som miniaturer kan vises i listevisningen. Min 25, maks 500.',
    'two_factor'        => 'To faktor godkendelse',
    'two_factor_secret'        => 'Tofaktorkode',
    'two_factor_enrollment'        => 'Two-Factor Enrollment',
    'two_factor_enabled_text'        => 'Aktivér to faktorer',
    'two_factor_reset'        => 'Reset 2-Factor Secret',
    'two_factor_reset_help'        => 'Dette vil tvinge brugeren til at tilmelde deres enhed med Google Authenticator igen. Dette kan være nyttigt, hvis deres tilmeldte enhed er tabt eller stjålet.',
    'two_factor_reset_success'          => 'To faktor enhed nulstilles',
    'two_factor_reset_error'          => 'To-faktor enhed reset mislykkedes',
    'two_factor_enabled_warning'        => 'Aktivering af to-faktor, hvis den ikke er aktiveret, vil straks tvinge dig til at godkende med en Google Auth-indskrevet enhed. Du vil have mulighed for at tilmelde din enhed, hvis en ikke er indskrevet på nuværende tidspunkt.',
    'two_factor_enabled_help'        => 'Dette aktiverer tofaktors godkendelse ved hjælp af Google Authenticator.',
    'two_factor_optional'        => 'Selektiv (Brugere kan aktivere eller deaktivere hvis tilladt)',
    'two_factor_required'        => 'Påkrævet for alle brugere',
    'two_factor_disabled'        => 'handicappet',
    'two_factor_enter_code'	=> 'Indtast tofaktorkode',
    'two_factor_config_complete'	=> 'Indsend kode',
    'two_factor_enabled_edit_not_allowed' => 'Din administrator tillader ikke dig at redigere denne indstilling.',
    'two_factor_enrollment_text'	=> "To faktor godkendelse er påkrævet, men din enhed er endnu ikke blevet tilmeldt. Åbn din Google Authenticator-app og scan QR-koden nedenfor for at tilmelde din enhed. Når du har tilmeldt din enhed, skal du indtaste koden nedenfor",
    'require_accept_signature'      => 'Kræver Signatur',
    'require_accept_signature_help_text'      => 'Aktivering af denne funktion kræver, at brugerne fysisk logger af ved at acceptere et aktiv.',
    'left'        => 'venstre',
    'right'        => 'højre',
    'top'        => 'top',
    'bottom'        => 'bund',
    'vertical'        => 'lodret',
    'horizontal'        => 'vandret',
    'unique_serial'                => 'Unikke serienumre',
    'unique_serial_help_text'                => 'Markering af denne boks medfører en unik begrænsning af aktivserier',
    'zerofill_count'        => 'Længde af aktivetiketter, herunder zerofill',
    'username_format_help'   => 'Denne indstilling vil kun blive brugt af importprocessen, hvis et brugernavn ikke er angivet, og vi er nødt til at generere et brugernavn til dig.',
);
