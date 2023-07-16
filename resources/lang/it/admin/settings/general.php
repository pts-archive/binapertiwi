<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Dominio Active Directory',
    'ad_domain_help'			=> 'Questo a volte è lo stesso del dominio email, ma non sempre.',
    'ad_append_domain_label'    => 'Aggiungi il dominio',
    'ad_append_domain'          => 'Aggiungi il dominio al campo username',
    'ad_append_domain_help'     => 'L\'utente non è tenuto a scrivere "username@domain.local", può semplicemente digitare "username".' ,
    'admin_cc_email'            => 'Email CC',
    'admin_cc_email_help'       => 'Se desideri inviare una copia delle e-mail di consegna / ritiro che vengono inviate agli utenti a un altro account e-mail, inseriscile qui. Altrimenti, lascia questo campo vuoto.',
    'is_ad'				        => 'Si tratta di un server Active Directory',
    'alert_email'				=> 'Invia avvisi a',
    'alerts_enabled'			=> 'Avvisi Attivati',
    'alert_interval'			=> 'Soglia di avviso di scadenza (in giorni)',
    'alert_inv_threshold'		=> 'Soglia di avviso di inventario',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> 'ID Bene',
    'audit_interval'            => 'Intervallo di controllo',
    'audit_interval_help'       => 'Se sei tenuto a controllare regolarmente le risorse, inserisci l\'intervallo in mesi.',
    'audit_warning_days'        => 'Soglia di allarme di controllo',
    'audit_warning_days_help'   => 'Quanti giorni in anticipo dovremmo avvisare quando i beni sono dovuti per il controllo?',
    'auto_increment_assets'		=> 'Genera auto-incremento ID beni',
    'auto_increment_prefix'		=> 'Prefisso (Opzionale)',
    'auto_incrementing_help'    => 'Abilita auto-incremento ID beni prima di impostare questa',
    'backups'					=> 'Backups',
    'barcode_settings'			=> 'Impostazioni codice a barre',
    'confirm_purge'			    => 'Conferma Cancellazione',
    'confirm_purge_help'		=> 'Inserisci il testo "DELETE" nella casella sottostante per eliminare i tuoi record eliminati. Questa azione non può essere annullata e cancellerà PERMANENTEMENTE tutti gli elementi e gli utenti. (Effettuare un backup, per essere sicuri.)',
    'custom_css'				=> 'CSS Personalizzato',
    'custom_css_help'			=> 'Inserisci qualsiasi CSS personalizzato che vuoi utilizzare. Do not include the &lt;style&gt;&lt;/style&gt; tags.',
    'custom_forgot_pass_url'	=> 'URL di Reset Password personalizzata',
    'custom_forgot_pass_url_help'	=> 'Sostituisce l\'URL della password dimenticata incorporata nella schermata di accesso, utile per indirizzare le persone alla funzionalità di ripristino della password LDAP interna o ospitata. Disabiliterà completamente la funzionalità della password dimenticata dell\'utente locale.',
    'dashboard_message'			=> 'Messaggio di dashboard',
    'dashboard_message_help'	=> 'Questo testo verrà visualizzato nella dashboard per chiunque abbia il permesso di visualizzare il dashboard.',
    'default_currency'  		=> 'Valuta predefinita',
    'default_eula_text'			=> 'EULA Predefinita',
    'default_language'			=> 'Lingua predefinita',
    'default_eula_help_text'	=> 'È possibile associare EULAs personalizzati a categorie di beni specifici.',
    'display_asset_name'        => 'Mostra Nome Bene',
    'display_checkout_date'     => 'Mostra Data Estrazione',
    'display_eol'               => 'Visualizzare EOL in vista tabella',
    'display_qr'                => 'Visualizza codici quadrati',
    'display_alt_barcode'		=> 'Visualizza codici a barre',
    'email_logo'                => 'Logo Email',
    'barcode_type'				=> 'Tipo di codice a barre 2D',
    'alt_barcode_type'			=> 'Tipo di codice a barre 1D',
    'email_logo_size'       => 'I loghi quadrati nelle email hanno un aspetto migliore. ',
    'eula_settings'				=> 'Impostazioni EULA',
    'eula_markdown'				=> 'Questa EULA consente <a href="https://help.github.com/articles/github aromatizzato-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'I tipi di file accettati sono ico, png e gif. Altri formati potrebbero non funzionare in tutti i browser.',
    'favicon_size'          => 'Le Favicons dovrebbero essere preferibilmente quadrate, di dimensione 16x16 pixel.',
    'footer_text'               => 'Ulteriori testo di piè di pagina ',
    'footer_text_help'          => 'Questo testo verrà visualizzato nel piè di pagina destro. I collegamenti sono consentiti utilizzando <a href="https://help.github.com/articles/github-flavored-markdown/">markdown Github</a>. Le interruzioni di linea, le intestazioni, le immagini, ecc. Possono dare risultati imprevedibili.',
    'general_settings'			=> 'Impostazioni Generali',
    'generate_backup'			=> 'Crea Backup',
    'header_color'              => 'Colore intestazione',
    'info'                      => 'Queste impostazioni consentono di personalizzare alcuni aspetti della vostra installazione.',
    'label_logo'                => 'Logo Etichetta',
    'label_logo_size'           => 'I loghi quadrati hanno un aspetto migliore - verranno visualizzati in alto a destra di ogni etichetta dell\'asset. ',
    'laravel'                   => 'Laravel Version',
    'ldap_enabled'              => 'LDAP abilitato',
    'ldap_integration'          => 'Integrazione LDAP',
    'ldap_settings'             => 'Impostazioni LDAP',
    'ldap_login_test_help'      => 'Immettere un nome utente e una password LDAP validi dal DN di base specificato in precedenza per verificare se il login LDAP è configurato correttamente. DEVI SALVARE LE IMPOSTAZIONI LDAP AGGIORNATE PRIMA.',
    'ldap_login_sync_help'      => 'Questo verifica solamente che LDAP possa sincronizzare correttamente. Se la tua query di autenticazione LDAP non è corretta, gli utenti potrebbero non essere ancora in grado di accedere. DEVI SALVARE LE IMPOSTAZIONI LDAP PRIMA DI EFFETTUARE QUESTO TEST.',
    'ldap_server'               => 'Server LDAP',
    'ldap_server_help'          => 'Questo dovrebbe iniziare con ldap: // (per unencrypted o TLS) o ldaps: // (per SSL)',
    'ldap_server_cert'			=> 'Validazione certificato SSL di LDAP',
    'ldap_server_cert_ignore'	=> 'Consenti Certificato SSL non valido',
    'ldap_server_cert_help'		=> 'Seleziona questa casella se stai utilizzando un certificato SSL autofirmato e vuoi accettare un certificato SSL non valido.',
    'ldap_tls'                  => 'Usa TLS',
    'ldap_tls_help'             => 'Questo dovrebbe essere controllato solo se si esegue STARTTLS sul server LDAP.',
    'ldap_uname'                => 'Nome utente LDAP',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'Password LDAP',
    'ldap_basedn'               => 'DN Base',
    'ldap_filter'               => 'Filtro LDAP',
    'ldap_pw_sync'              => 'Sincronizzazione password LDAP',
    'ldap_pw_sync_help'         => 'Deseleziona questa casella se non desideri mantenere le password LDAP sincronizzate con le password locali. Disattivare questo significa che i tuoi utenti potrebbero non essere in grado di accedere se il server LDAP non è raggiungibile per qualche motivo.',
    'ldap_username_field'       => 'Campo nome utente',
    'ldap_lname_field'          => 'Cognome',
    'ldap_fname_field'          => 'Nome LDAP',
    'ldap_auth_filter_query'    => 'Query di Autenticazione LDAP',
    'ldap_version'              => 'Versione LDAP',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'This flag is used to determine whether a user can login to Snipe-IT and does not affect the ability to check items in or out to them.',
    'ldap_emp_num'              => 'ID impiegato LDAP',
    'ldap_email'                => 'Email LDAP',
    'license'                  => 'Licenza software',
    'load_remote_text'          => 'Script remoti',
    'load_remote_help_text'		=> 'Questa installazione di Snipe-IT può caricare script dal mondo esterno.',
    'login_note'                => 'Nota di accesso',
    'login_note_help'           => 'Facoltativamente includere alcune frasi nella schermata di login, ad esempio per aiutare le persone che hanno trovato un dispositivo perso o rubato. Questo campo accetta <a href="https://help.github.com/articles/github-flavored-markdown/">Goodotto flavored markdown</a>',
    'login_remote_user_text'    => 'Opzioni di accesso utente remoto',
    'login_remote_user_enabled_text' => 'Abilita accesso con intestazione utente remota',
    'login_remote_user_enabled_help' => 'Questa opzione abilita l\'autenticazione tramite l\'intestazione REMOTE_USER in base alla "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Disabilita altri meccanismi di autenticazione',
    'login_common_disabled_help' => 'Questa opzione disabilita altri meccanismi di autenticazione. Abilita questa opzione solo se sei sicuro che il tuo login REMOTE_USER sta già funzionando',
    'login_remote_user_custom_logout_url_text' => 'URL di logout personalizzato',
    'login_remote_user_custom_logout_url_help' => 'Se qui viene indicato un URL, gli utenti verranno reindirizzato a questo URL dopo essere usciti da Snipe-IT. Questo è utile per chiudere correttamente le sessioni dell\'utente.',
    'login_remote_user_header_name_text' => 'Intestazione del nome utente personalizzato',
    'login_remote_user_header_name_help' => 'Usa l\'intestazione specificata invece di REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Usa in stampa',
    'logo_print_assets_help'    => 'Usa il brand sulla lista dei beni stampabili ',
    'full_multiple_companies_support_help_text' => 'Restringere gli utenti (amministratori inclusi) assegnati ad una azienda agli asset della propria azienda.',
    'full_multiple_companies_support_text' => 'Supporto completo ad aziende multiple',
    'show_in_model_list'   => 'Mostra in menu a discesa del modello',
    'optional'					=> 'facoltativo',
    'per_page'                  => 'Risultati per Pagina',
    'php'                       => 'PHP Version',
    'php_gd_info'               => 'È necessario installare php-gd per visualizzare i codici QR, consultare le istruzioni di installazione.',
    'php_gd_warning'            => 'Il plugin PHP Image Processing and GD non è installato.',
    'pwd_secure_complexity'     => 'Complicità di password',
    'pwd_secure_complexity_help' => 'Seleziona quale regola di complessità password desideri applicare.',
    'pwd_secure_min'            => 'Caratteri minimi di password',
    'pwd_secure_min_help'       => 'Il valore minimo consentito è 8',
    'pwd_secure_uncommon'       => 'Impedire le password comuni',
    'pwd_secure_uncommon_help'  => 'Questo impedirà agli utenti di utilizzare le password comuni dalle prime 10.000 password segnalate in violazione.',
    'qr_help'                   => 'Abilita codici QR primo di impostare questo',
    'qr_text'                   => 'QR Code Text',
    'saml_enabled'              => 'SAML attivo',
    'saml_integration'          => 'Integrazione SAML',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Certificato',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'È possibile specificare i metadati IdP utilizzando un file URL o XML.',
    'saml_attr_mapping_username' => 'Mappatura Attributi - Username',
    'saml_attr_mapping_username_help' => 'Verrà utilizzato NameID se la mappatura degli attributi non è specificata o non è valida.',
    'saml_forcelogin_label'     => 'SAML obbligatorio',
    'saml_forcelogin'           => 'Imposta SAML come autenticazione principale',
    'saml_forcelogin_help'      => 'Puoi usare \'/login?nosaml\' per l\'autenticazione senza SAML.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Invia un LogoutRequest a IdP in caso di Logout',
    'saml_slo_help'             => 'Questo farà sì che l\'utente venga reindirizzato per primo all\'IdP al momento del logout. Deselezionare, se l\'IdP non supporta correttamente SAML SLO.',
    'saml_custom_settings'      => 'Impostazioni Personalizzate SAML',
    'saml_custom_settings_help' => 'È possibile specificare impostazioni aggiuntive alla libreria onelogin/php-saml. Utilizzare a proprio rischio.',
    'setting'                   => 'Impostazioni',
    'settings'                  => 'Impostazioni',
    'show_alerts_in_menu'       => 'Mostra avvisi nel menu in alto',
    'show_archived_in_list'     => 'Risorse archiviate',
    'show_archived_in_list_text'     => 'Mostra le risorse archiviate nella lista "tutte le risorse"',
    'show_assigned_assets'      => 'Mostra gli asset assegnati agli asset',
    'show_assigned_assets_help' => 'Visualizza gli asset assegnati agli altri asset in Visualizza Utenti -> Assets, Visualizza Utenti -> Info -> Stampa assets assegnati e in Account -> Visualizza Asset assegnati.',
    'show_images_in_email'     => 'Mostra le immagini nelle e-mail',
    'show_images_in_email_help'   => 'Deseleziona questa casella se l\'installazione di Snipe-IT si trova dietro una rete VPN o chiusa e gli utenti esterni alla rete non saranno in grado di caricare le immagini fornite da questa installazione nelle loro e-mail.',
    'site_name'                 => 'Nome sito',
    'slack_botname'             => 'Botname Slack',
    'slack_channel'             => 'Canale Slack',
    'slack_endpoint'            => 'Finale Slack',
    'slack_integration'         => 'Impostazioni Slack',
    'slack_integration_help'    => 'L\'integrazione di Slack è facoltativa, tuttavia l\'endpoint e il canale sono necessari se si desidera utilizzarla. Per configurare l\'integrazione di Slack devi prima <a href=":slack_link" target="_new" rel="noopener">creare un webhook in arrivo</a> sul tuo account Slack. Clicca sul pulsante <strong>Verifica integrazione Slack</strong> per effettuare un test e confermare che le impostazioni sono corrette, prima di salvare. ',
    'slack_integration_help_button'    => 'Dopo aver salvato le informazioni Slack, apparirà un pulsante di test.',
    'slack_test_help'           => 'Verifica se l\'integrazione Slack è configurata correttamente. PRIMA È NECESSARIO SALVARE LE IMPOSTAZIONI SLACK AGGIORNATE.',
    'snipe_version'  			=> 'Snipe-IT version',
    'support_footer'            => 'Supporto per i collegamenti a piè di pagina ',
    'support_footer_help'       => 'Specificare chi vede i collegamenti alle informazioni sul supporto IT e su Snipe-IT',
    'version_footer'            => 'Versione a piè di pagina ',
    'version_footer_help'       => 'Specifica chi può vedere la versione di Snipe-IT e il numero di build.',
    'system'                    => 'Informazioni di sistema',
    'update'                    => 'Aggiorna impostazioni',
    'value'                     => 'Valore',
    'brand'                     => 'Personalizzazione',
    'web_brand'                 => 'Tipologia di Web Branding',
    'about_settings_title'      => 'Impostazioni',
    'about_settings_text'       => 'Queste impostazioni ti permettono di personalizzare alcuni aspetti della tua installazione.',
    'labels_per_page'           => 'Etichetta per pagina',
    'label_dimensions'          => 'Dimensioni dell\'etichetta (pollici)',
    'next_auto_tag_base'        => 'Avanzamento automatico successivo',
    'page_padding'              => 'Margini della pagina (pollici)',
    'privacy_policy_link'       => 'Link alla politica sulla privacy',
    'privacy_policy'            => 'Informativa sulla privacy',
    'privacy_policy_link_help'  => 'Se un URL è incluso qui, un link alla tua politica sulla privacy sarà incluso nel footer dell\'app e in tutte le e-mail che il sistema invia, in conformità con GDPR. ',
    'purge'                     => 'Eliminare i record cancellati',
    'labels_display_bgutter'    => 'Etichettare la grondaia inferiore',
    'labels_display_sgutter'    => 'Lato laterale dell\'etichetta',
    'labels_fontsize'           => 'Dimensione carattere etichetta',
    'labels_pagewidth'          => 'Larghezza della lastra di etichetta',
    'labels_pageheight'         => 'Altezza del foglio di etichetta',
    'label_gutters'        => 'Distanza etichetta (pollici)',
    'page_dimensions'        => 'Dimensioni della pagina (pollici)',
    'label_fields'          => 'Campi visibili delle etichette',
    'inches'        => 'pollici',
    'width_w'        => 'l',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Collegamento a Snipe-IT in posta elettronica',
    'show_url_in_emails_help_text'      => 'Deseleziona questa casella se non si desidera collegare nuovamente all\'installazione Snipe-IT nei piè di pagina di posta elettronica. Utile se la maggior parte dei tuoi utenti non entra mai in login.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Altezza massima miniatura',
    'thumbnail_max_h_help'   => 'Altezza massima in pixel che le miniature possono essere visualizzate nella vista elenco. Min 25, max 500.',
    'two_factor'        => 'Autenticazione due fattori',
    'two_factor_secret'        => 'Codice a due fattori',
    'two_factor_enrollment'        => 'Iscrizione a due fattori',
    'two_factor_enabled_text'        => 'Abilita due fattori',
    'two_factor_reset'        => 'Resettare il segreto a due fattori',
    'two_factor_reset_help'        => 'Ciò obbligherà l\'utente a registrare nuovamente il proprio dispositivo con Google Authenticator. Ciò può essere utile se il dispositivo correntemente iscritto viene perso o rubato.',
    'two_factor_reset_success'          => 'Il dispositivo a due fattori viene resettato con successo',
    'two_factor_reset_error'          => 'Il reset del dispositivo a due fattori è fallito',
    'two_factor_enabled_warning'        => 'L\'abilitazione di due fattori se non è attualmente abilitata vi obbliga immediatamente a autenticare con un dispositivo di accesso a Google Auth. Avrai la possibilità di registrare il tuo dispositivo se uno non è attualmente iscritto.',
    'two_factor_enabled_help'        => 'Questo accenderà l\'autenticazione a due fattori utilizzando Google Authenticator.',
    'two_factor_optional'        => 'Selettivo (gli utenti possono abilitare o disabilitare se consentiti)',
    'two_factor_required'        => 'Obbligatorio per tutti gli utenti',
    'two_factor_disabled'        => 'Disabilitato',
    'two_factor_enter_code'	=> 'Inserisci codice a due fattori',
    'two_factor_config_complete'	=> 'Invia il codice',
    'two_factor_enabled_edit_not_allowed' => 'L\'amministratore non consente di modificare questa impostazione.',
    'two_factor_enrollment_text'	=> "È necessaria l'autenticazione di due fattori, tuttavia il tuo dispositivo non è ancora stato iscritto. Apri l'applicazione Google Authenticator e analizza il codice QR qui sotto per iscriverti al tuo dispositivo. Una volta che hai iscritto il tuo dispositivo, inserisci il codice qui sotto",
    'require_accept_signature'      => 'Richiedi la firma',
    'require_accept_signature_help_text'      => 'L\'attivazione di questa funzionalità richiede che gli utenti si connettano fisicamente all\'accettazione di un\'attività.',
    'left'        => 'sinistra',
    'right'        => 'destra',
    'top'        => 'superiore',
    'bottom'        => 'parte inferiore',
    'vertical'        => 'verticale',
    'horizontal'        => 'orizzontale',
    'unique_serial'                => 'Seriali univoci',
    'unique_serial_help_text'                => 'Selezionando questa casella viene forzato un vincolo di unicità sul seriale del bene',
    'zerofill_count'        => 'Lunghezza dei tag di asset, incluso zerofill',
    'username_format_help'   => 'Questa impostazione sarà usata dal processo di importazione solo se un nome utente non è fornito, e se è necessario creare un nome utente.',
);
