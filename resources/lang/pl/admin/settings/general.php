<?php

return array(
    'ad'				        => 'Usługa katalogowa Active Directory',
    'ad_domain'				    => 'Domena Active Directory',
    'ad_domain_help'			=> 'Czasami jest taka sama jak domena poczty e-mail, ale nie zawsze.',
    'ad_append_domain_label'    => 'Dołącz nazwę domeny',
    'ad_append_domain'          => 'Dołącz nazwę domeny do pola nazwy użytkownika',
    'ad_append_domain_help'     => 'Użytkownik nie jest wymagany do wpisywania "username@domain.local", może po prostu wpisać "username".' ,
    'admin_cc_email'            => 'Kopia',
    'admin_cc_email_help'       => 'Jeśli chcesz otrzymywać kopię e-maili przypisań wysyłanych do użytkowników na dodatkowy adres e-mail, wpisz go tutaj. W przeciwnym razie zostaw to pole puste.',
    'is_ad'				        => 'To jest serwer Active Directory',
    'alert_email'				=> 'Wyślij powiadomienia do',
    'alerts_enabled'			=> 'Alarmy włączone',
    'alert_interval'			=> 'Próg wygasających alarmów (w dniach)',
    'alert_inv_threshold'		=> 'Inwentarz progu alarmów',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> 'ID Aktywa',
    'audit_interval'            => 'Interwał audytu',
    'audit_interval_help'       => 'Jeśli wymagane są regularne kontrole fizycznie aktyw, wprowadź interwał w miesiącach.',
    'audit_warning_days'        => 'Próg ostrzegania przed audytem',
    'audit_warning_days_help'   => 'Ile dni wcześniej powinniśmy ostrzec Cię, gdy majątek ma zostać poddany audytowi?',
    'auto_increment_assets'		=> 'Generuj automatycznie zwiększane ID aktywa',
    'auto_increment_prefix'		=> 'Prefix (opcjonalnie)',
    'auto_incrementing_help'    => 'Najpierw aktywuj automatycznie zwiększane ID Aktywa, by móc ustawić te opcje.',
    'backups'					=> 'Kopie zapasowe',
    'barcode_settings'			=> 'Ustawienia Kodów Kreskowych',
    'confirm_purge'			    => 'Potwierdź wyczyszczenie',
    'confirm_purge_help'		=> 'Wprowadź tekst "DELETE" w poniższym polu, aby wyczyścić usunięte rekordy. Ta akcja nie może zostać cofnięta i będzie NIEZALEŻNIE usuwać wszystkich miękkich elementów i użytkowników. (powinieneś najpierw utworzyć kopię zapasową, po prostu aby być bezpiecznym.)',
    'custom_css'				=> 'Własny CSS',
    'custom_css_help'			=> 'Wprowadź własny kod CSS. Nie używaj tagów &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'Niestandardowy adres URL resetowania hasła',
    'custom_forgot_pass_url_help'	=> 'Zastępuje domyślny URL do strony "zapomniałeś hasła?" na ekranie logowania. Pomocne przy potrzebie przekierowania ludzi do własnej strony resetowania hasła LDAP. Uniemożliwi użytkownikowi zresetowanie hasła tradycyjną metodą.',
    'dashboard_message'			=> 'Komunikat pulpitu nawigacyjnego',
    'dashboard_message_help'	=> 'Ten tekst pojawi się na pulpicie nawigacyjnym dla każdego, kto ma uprawnienia do wyświetlania pulpitu.',
    'default_currency'  		=> 'Domyślna Waluta',
    'default_eula_text'			=> 'Domyślna EULA',
    'default_language'			=> 'Domyślny język',
    'default_eula_help_text'	=> 'Możesz również sporządzić własną licencje by sprecyzować kategorie aktywa.',
    'display_asset_name'        => 'Wyświetl nazwę aktywa',
    'display_checkout_date'     => 'Wyświetl Datę Przypisania',
    'display_eol'               => 'Wyświetl koniec linii w widoku tabeli',
    'display_qr'                => 'Wyświetlaj QR kody',
    'display_alt_barcode'		=> 'Wyświetlaj kod kreskowy w 1D',
    'email_logo'                => 'Logo w emailach',
    'barcode_type'				=> 'Kod kreskowy typu 2D',
    'alt_barcode_type'			=> 'Kod kreskowy typu 1D',
    'email_logo_size'       => 'Kwadratowe logo wygląda najlepiej w wiadomościach e-mail. ',
    'eula_settings'				=> 'Ustawienia Licencji',
    'eula_markdown'				=> 'Ta licencja zezwala na <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Ikona ulubionych',
    'favicon_format'            => 'Akceptowane typy plików to ico, png i gif. Inne formaty obrazów mogą nie działać we wszystkich przeglądarkach.',
    'favicon_size'          => 'Favikony powinny być kwadratowymi grafikami 16x16 pikseli.',
    'footer_text'               => 'Dodatkowy tekst stopki ',
    'footer_text_help'          => 'Ten tekst pojawi się po prawej stronie stopki. Umieszczanie linków możliwe przy użyciu <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Przejścia linii, nagłowki, obrazki itp. dadzą nieokreślone rezultaty.',
    'general_settings'			=> 'Ustawienia ogólne',
    'generate_backup'			=> 'Stwórz Kopie zapasową',
    'header_color'              => 'Kolor nagłówka',
    'info'                      => 'Te ustawienia pozwalają ci zdefiniować najważniejsze szczegóły twojej instalacji.',
    'label_logo'                => 'Logo na etykiecie',
    'label_logo_size'           => 'Najlepiej wygląda logo kwadratowe - będzie wyświetlane w prawym górnym rogu każdej etykiety aktywów. ',
    'laravel'                   => 'Wersja Laravel',
    'ldap_enabled'              => 'LDAP włączone',
    'ldap_integration'          => 'Integracja z LDAP',
    'ldap_settings'             => 'Ustawienia LDAP',
    'ldap_login_test_help'      => 'Wprowadź poprawną nazwę użytkownika i hasło w podstawowej domenie, którą wprowadziłeś wyżej. W ten sposób przetestujesz czy logowanie LDAP jest poprawnie skonfigurowane. KONIECZNIE ZAPISZ WCZEŚNIEJ SWOJE USTAWIENIA LDAP.',
    'ldap_login_sync_help'      => 'To tylko sprawdza, czy LDAP może poprawnie się synchronizować. Jeśli zapytanie o autoryzację LDAP nie jest poprawne, użytkownicy nadal mogą nie być w stanie się zalogować. NAJPIERW MUSISZ ZAPISAĆ TWOJE WCZEŚNIEJSZE AKTUALIZACJE USTAWIEŃ LDAP.',
    'ldap_server'               => 'Serwery LDAP',
    'ldap_server_help'          => 'To powinno się rozpocząć od ldap: / / (dla nieszyfrowanych połączeń) lub ldaps: / / (dla szyfrowanych połączeń)',
    'ldap_server_cert'			=> 'Walidacja certyfikatu SSL dla LDAP',
    'ldap_server_cert_ignore'	=> 'Zezwalaj na nieprawidłowy certyfikat SSL',
    'ldap_server_cert_help'		=> 'Zaznacz tą opcje jeśli używasz certyfikatu SSL podpisanego przez samego siebie i chcesz zezwolić na nieprawidłowy certyfikat.',
    'ldap_tls'                  => 'Używaj TLS',
    'ldap_tls_help'             => 'Ta opcja powinna zaznaczony jedynie gdy używasz STARTLS w swoim serwerze LDAP. ',
    'ldap_uname'                => 'Użytkownik do łączenia się z serwerem LDAP',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'Hasło użytkownika wpisanego do łączenia się z serwerem LDAP',
    'ldap_basedn'               => 'DN',
    'ldap_filter'               => 'Filtr LDAP',
    'ldap_pw_sync'              => 'Synchronizacja haseł LDAP',
    'ldap_pw_sync_help'         => 'Odznacz jeśli nie chcesz synchronizować haseł z LDAP z lokalnymi',
    'ldap_username_field'       => 'Pole użytkownika',
    'ldap_lname_field'          => 'Nazwisko',
    'ldap_fname_field'          => 'Imię',
    'ldap_auth_filter_query'    => 'Autoryzacja LDAP',
    'ldap_version'              => 'Wersja LDAP',
    'ldap_active_flag'          => 'Aktywna flaga LDAP',
    'ldap_activated_flag_help'  => 'Ta opcja jest używana do określenia, czy użytkownik może zalogować się do Snipe-IT i nie ma wpływu na możliwość wydawania mu/przyjmowania od niego przedmiotów.',
    'ldap_emp_num'              => 'Nr pracownika LDAP',
    'ldap_email'                => 'E-mail pracownika LDAP',
    'license'                  => 'Licencja oprogramowania',
    'load_remote_text'          => 'Skrypty zdalne',
    'load_remote_help_text'		=> 'Ta instalacja Snipe-IT może załadować skrypty z zewnętrznego świata.',
    'login_note'                => 'Noty logowania',
    'login_note_help'           => 'Opcjonalnie umieść kilka zdań na ekranie logowania, na przykład w celu pomocy osobom, które znalazły zagubione lub skradzione urządzenia. To pole akceptuje <a href="https://help.github.com/articles/github-flavored-markdown/"> oznaczenia Github </a>',
    'login_remote_user_text'    => 'Opcje logowania zdalnego użytkownika',
    'login_remote_user_enabled_text' => 'Włącz Logowanie za Pomocą Nagłówka Zdalnego Użytkownika',
    'login_remote_user_enabled_help' => 'Ta opcja umożliwia uwierzytelnianie za pośrednictwem nagłówka REMOTE_USER według "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Wyłącz inne mechanizmy uwierzytelniania',
    'login_common_disabled_help' => 'Ta opcja wyłącza inne mechanizmy uwierzytelniania. Po prostu włącz tę opcję, jeśli masz pewność, że twój login REMOTE_USER już działa',
    'login_remote_user_custom_logout_url_text' => 'Niestandardowy adres URL wylogowania',
    'login_remote_user_custom_logout_url_help' => 'Jeżeli URL jest tutaj wpisany, użytkownicy zostaną przekierowani do tego adresu URL po wylogowaniu ze Snipe-IT. Jest to przydatne do prawidłowego zamknięcia sesji użytkownika twojego dostawcy uwierzytelniania.',
    'login_remote_user_header_name_text' => 'Niestandardowy nagłówek nazwy użytkownika',
    'login_remote_user_header_name_help' => 'Użyj określonego nagłówka zamiast REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Użyj Na Wydruku',
    'logo_print_assets_help'    => 'Użyj marki na listach zasobów do wydrukowania',
    'full_multiple_companies_support_help_text' => 'Ograniczenie do użytkowników',
    'full_multiple_companies_support_text' => 'Wsparcie dla wielu firm',
    'show_in_model_list'   => 'Pokaż w Menu Rozwijanym Modelu',
    'optional'					=> 'opcjonalny',
    'per_page'                  => 'Wyników na stronie',
    'php'                       => 'Wersja PHP',
    'php_gd_info'               => 'Aby wyświetlić kody QR wymagana jest instalacja php-gd, sprawdź instrukcję.',
    'php_gd_warning'            => 'PHP Image Processing i GD plugin nie są zainstalowane.',
    'pwd_secure_complexity'     => 'Złożoności haseł',
    'pwd_secure_complexity_help' => 'Wybierz dowolną regułę złożoności hasła, którą chcesz wymusić.',
    'pwd_secure_min'            => 'Minimalne znaki hasła',
    'pwd_secure_min_help'       => 'Minimalna dozwolona wartość to 8',
    'pwd_secure_uncommon'       => 'Zapobieganie wspólnym hasłom',
    'pwd_secure_uncommon_help'  => 'Uniemożliwi to użytkownikom używanie wspólnych haseł z 10 000 haseł zgłaszanych z naruszeniem.',
    'qr_help'                   => 'Aby użyć tej opcji odblokuj Kody QR',
    'qr_text'                   => 'Tekst kodu QR',
    'saml_enabled'              => 'SAML włączone',
    'saml_integration'          => 'Integracja z SAML',
    'saml_sp_entityid'          => 'ID jednostki',
    'saml_sp_acs_url'           => 'Adres URL Assertion Consumer Service (ACS)',
    'saml_sp_sls_url'           => 'Adres URL Single Logout Service (SLS)',
    'saml_sp_x509cert'          => 'Publiczny certyfikat',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'Metadane SAML IdP',
    'saml_idp_metadata_help'    => 'Możesz określić metadane IdP za pomocą adresu URL lub pliku XML.',
    'saml_attr_mapping_username' => 'Mapowanie atrybutów - nazwa użytkownika',
    'saml_attr_mapping_username_help' => 'NameID zostanie użyty, jeżeli mapowanie atrybutów nie zostało określone lub jest nieprawidłowe.',
    'saml_forcelogin_label'     => 'Wymuś logowanie SAML',
    'saml_forcelogin'           => 'Ustaw SAML jako główny sposób logowania',
    'saml_forcelogin_help'      => 'Możesz użyć \'/login?nosaml\' aby przejść do normalnej strony logowania.',
    'saml_slo_label'            => 'Single Log Out (SLO) SAML',
    'saml_slo'                  => 'Przy wylogowaniu wyślij LogoutRequest do IdP',
    'saml_slo_help'             => 'To spowoduje, że użytkownik najpierw zostanie przekierowany do IdP przy wylogowaniu. Pozostaw niezaznaczone, jeżeli IdP nie wspiera poprawnie zainizjowanego przez dostawcę usługi (SP-initiated) SAML SLO.',
    'saml_custom_settings'      => 'Ustawienia niestandardowe SAML',
    'saml_custom_settings_help' => 'Możesz określić dodatkowe ustawienia do biblioteki onlogin/php-saml. Używaj na własne ryzyko.',
    'setting'                   => 'Ustawienie',
    'settings'                  => 'Ustawienia',
    'show_alerts_in_menu'       => 'Pokaż ostrzeżenia w górnym menu',
    'show_archived_in_list'     => 'Zarchiwizowane zasoby',
    'show_archived_in_list_text'     => 'Pokaż zarchiwizowane zasoby na liście "wszystkie zasoby"',
    'show_assigned_assets'      => 'Pokaż sprzęty przypisane do sprzętów',
    'show_assigned_assets_help' => 'Wyświetl zasoby, które zostały przypisane do innych zasobów w Widoku użytkownika -> Zasoby, Zobacz użytkownika -> Informacje -> Wydrukuj wszystkie przypisane i w Konto -> Zobacz przypisane zasoby.',
    'show_images_in_email'     => 'Pokaż obrazki w wiadomościach e-mail.',
    'show_images_in_email_help'   => 'Odznacz to pole, jeśli twoja instalacja Snipe-IT znajduje się za siecią VPN lub siecią zamkniętą, a użytkownicy spoza sieci nie będą mogli załadować obrazów obsługiwanych przez tę instalację w swoich wiadomościach e-mail.',
    'site_name'                 => 'Nazwa Witryny',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Kanał Slack',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Ustawienia Slack',
    'slack_integration_help'    => 'Integracja ze Slack jest opcjonalna, jednak endpoint i kanał są wymagane, jeżeli chcesz jej używać. Aby skonfigurować integrację ze Slack, musisz najpierw <a href=":slack_link" target="_new" rel="noopener">utworzyć Incoming Webhook</a> na swoim koncie Slack. Kliknij przycisk <strong>Test Slack Integration</strong>, aby zweryfikować poprawność swoich ustawień przed zapisaniem.',
    'slack_integration_help_button'    => 'Po zapisaniu ustawień Slack, pojawi się przycisk testu.',
    'slack_test_help'           => 'Sprawdź, czy integracja Slack jest poprawnie skonfigurowana. NAJPIERW ZAPISZ ZAKTUALIZOWANE USTAWIENIA SLACK.',
    'snipe_version'  			=> 'Wersja Snipe-IT',
    'support_footer'            => 'Obsługa linków stopki ',
    'support_footer_help'       => 'Określ kto widzi linki do Snipe-IT Instrukcji Obsługi oraz Wsparcia',
    'version_footer'            => 'Wersja w stopce ',
    'version_footer_help'       => 'Określ, kto widzi wersję oraz numer kompilacji Snipe-IT.',
    'system'                    => 'Informacje o Systemie',
    'update'                    => 'Ustawienia Aktualizacji',
    'value'                     => 'Wartość',
    'brand'                     => 'Nagłówek',
    'web_brand'                 => 'Typ markowania witryny',
    'about_settings_title'      => 'O Ustawieniach',
    'about_settings_text'       => 'Te ustawienia pozwalają ci zmodyfikować najważniejsze szczegóły twojej instalacji.',
    'labels_per_page'           => 'Etykieta per strona',
    'label_dimensions'          => 'rozmiar etykiety',
    'next_auto_tag_base'        => 'Następny automatyczny przyrost',
    'page_padding'              => 'Margines strony (cale)',
    'privacy_policy_link'       => 'Link do Polityki prywatności',
    'privacy_policy'            => 'Polityka prywatności',
    'privacy_policy_link_help'  => 'Jeśli adres URL znajduje się tutaj, link do polityki prywatności zostanie umieszczony w stopce aplikacji oraz we wszystkich wiadomościach e-mail wysyłanych przez system zgodnie z GDPR.',
    'purge'                     => 'Wyczyść usunięte rekordy',
    'labels_display_bgutter'    => 'Etykieta z rynną dolną',
    'labels_display_sgutter'    => 'Etykieta z rynną boczną',
    'labels_fontsize'           => 'Rozmiar czcionki na etykiecie',
    'labels_pagewidth'          => 'Szerokość arkusza etykiety',
    'labels_pageheight'         => 'Wysokość arkusza etykiet',
    'label_gutters'        => 'Rozstaw etykiet (cale)',
    'page_dimensions'        => 'Margines strony (cale)',
    'label_fields'          => 'Widoczne póla etykiet',
    'inches'        => 'cale',
    'width_w'        => 'szerokość',
    'height_h'        => 'wysokość',
    'show_url_in_emails'                => 'Połącz się z Snipe-IT w wiadomościach e-mail',
    'show_url_in_emails_help_text'      => 'Usuń zaznaczenie tego pola, jeśli nie chcesz łączyć się z instalacją Snipe-IT w stopkach wiadomości e-mail. Przydatne, jeśli większość użytkowników nigdy nie loguje się.',
    'text_pt'        => 'piksel',
    'thumbnail_max_h'   => 'Max wysokość miniatur',
    'thumbnail_max_h_help'   => 'Maksymalna wysokość w pikselach, które miniatury mogą wyświetlać w widoku aukcji. Min 25, maks. 500.',
    'two_factor'        => 'Autoryzacja dwuskładnikowa',
    'two_factor_secret'        => 'Kod jednorazowy',
    'two_factor_enrollment'        => 'Rejestracja dwóch czynników',
    'two_factor_enabled_text'        => 'Włącz uwieżytelnianie dwuskładnikowe',
    'two_factor_reset'        => 'Zresetować dwuskładnikowy klucz',
    'two_factor_reset_help'        => 'Spowoduje to zmuszenie użytkownika do ponownego zapisu swojego urządzenia w usłudze Google Authenticator. Może to być przydatne, jeśli ich aktualnie zapisane urządzenie zostanie utracone lub skradzione.',
    'two_factor_reset_success'          => 'Dwa urządzenia współczynnikowe z powodzeniem zresetowane',
    'two_factor_reset_error'          => 'Nie udało się zresetować urządzenia',
    'two_factor_enabled_warning'        => 'Włączenie dwóch czynników, jeśli nie jest aktualnie włączone, natychmiast zmusi Cię do uwierzytelnienia przy użyciu urządzenia z certyfikatem Google Authentication. Będziesz mieć możliwość zapisania urządzenia, jeśli nie jest on aktualnie zapisany.',
    'two_factor_enabled_help'        => 'Włączy to uwierzytelnianie dwuskładnikowe za pomocą narzędzia Google Authenticator.',
    'two_factor_optional'        => 'Wybiórczo (Użytkownicy mogą włączyć lub wyłączyć jeśli posiadają uprawnienie)',
    'two_factor_required'        => 'Wymagane dla wszystkich użytkowników',
    'two_factor_disabled'        => 'Wyłączony',
    'two_factor_enter_code'	=> 'Wprowadź kod jednorazowy',
    'two_factor_config_complete'	=> 'Zatwierdź kod',
    'two_factor_enabled_edit_not_allowed' => 'Administrator nie zezwala na edycję tego ustawienia.',
    'two_factor_enrollment_text'	=> "Wymagane jest uwierzytelnianie dwóch elementów, ale urządzenie nie zostało jeszcze zapisane. Otwórz aplikację Google Authenticator i zeskanuj kod QR poniżej, aby zarejestrować urządzenie. Po zarejestrowaniu urządzenia wprowadź poniższy kod",
    'require_accept_signature'      => 'Wymagany podpis',
    'require_accept_signature_help_text'      => 'Włączając tę funkcjonalność wymusza się na użytkownikach fizycznego podpisania przyjęcia aktywa.',
    'left'        => 'lewo',
    'right'        => 'prawo',
    'top'        => 'góra',
    'bottom'        => 'dół',
    'vertical'        => 'pionowy',
    'horizontal'        => 'poziomy',
    'unique_serial'                => 'Unikalne numery seryjne',
    'unique_serial_help_text'                => 'Zaznaczenie tego pola wymusi sprawdzanie czy numer seryjny nie został już przypisany w zasobach',
    'zerofill_count'        => 'Długość znaczników zasobów, w tym zerofill',
    'username_format_help'   => 'To ustawienie będzie używane przez proces importu tylko wtedy, gdy nazwa użytkownika nie jest podana i musimy wygenerować nazwę użytkownika dla Ciebie.',
);
