<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Домен Active Directory',
    'ad_domain_help'			=> 'Обычно, то же, что и ваш домен, но не всегда.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".' ,
    'admin_cc_email'            => 'Скрытая копия',
    'admin_cc_email_help'       => 'Если вы хотите отправлять копии писем, что приходят пользователям при выдаче/возврате, на какой-то дополнительный адрес электронной почты, то введите его здесь. В противном случае оставьте это поле пустым.',
    'is_ad'				        => 'У вас сервер Active Directory',
    'alert_email'				=> 'Посылать уведомления на',
    'alerts_enabled'			=> 'Уведомления включены',
    'alert_interval'			=> 'Предупреждение об истечении срока (в днях)',
    'alert_inv_threshold'		=> 'Порог оповещения о запасах',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> 'ID актива',
    'audit_interval'            => 'Интервал аудита',
    'audit_interval_help'       => 'Если вам требуется регулярно физически проверять свои активы, введите интервал в месяцах.',
    'audit_warning_days'        => 'Предупреждающий порог предупреждения',
    'audit_warning_days_help'   => 'За сколько дней мы должны предупредить вас, когда активы подлежат аудиту?',
    'auto_increment_assets'		=> 'Генерировать автоматическое возрастание идентификационных номеров активов',
    'auto_increment_prefix'		=> 'Префикс ( не обязательно )',
    'auto_incrementing_help'    => 'Включить автоматические возрастание ID активов начиная с',
    'backups'					=> 'Резервные копии',
    'barcode_settings'			=> 'Настройки штрихкода',
    'confirm_purge'			    => 'Подтвердить удаление',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'Пользовательское CSS',
    'custom_css_help'			=> 'Введите любое пользовательское CSS, которые вы хотите использовать. Не указывайте &lt;style&gt;&lt;/style&gt; теги.',
    'custom_forgot_pass_url'	=> 'Пользовательский URL для сброса пароля',
    'custom_forgot_pass_url_help'	=> 'Этим заменяется встроенный URL забытого пароля на экране входа в систему, что полезно, чтобы направлять пользователей на внутренние или размещенные в LDAP функции сброса пароля. Это позволит эффективно отключить локальный функционал восстановления забытого пользовательского пароля.',
    'dashboard_message'			=> 'Сообщение панели управления',
    'dashboard_message_help'	=> 'Этот текст будет отображаться на панели управления у всех кто обладает правом просмотра панели управления.',
    'default_currency'  		=> 'Валюта по-умолчанию',
    'default_eula_text'			=> 'Пользовательское соглашение по умолчанию',
    'default_language'			=> 'Язык по умолчанию',
    'default_eula_help_text'	=> 'Вы так же можете привязать собственные пользовательские соглашения к определенным категориям активов.',
    'display_asset_name'        => 'Отображаемое имя актива',
    'display_checkout_date'     => 'Отображать дату выдачи',
    'display_eol'               => 'Отображать дату истечения срока гарантии в таблице',
    'display_qr'                => 'Отображать QR коды',
    'display_alt_barcode'		=> 'Показывать штрих-коды',
    'email_logo'                => 'Логотип E-Mail',
    'barcode_type'				=> 'Тип 2D штрихкода',
    'alt_barcode_type'			=> 'Тип линейного штрихкода',
    'email_logo_size'       => 'Square logos in email look best. ',
    'eula_settings'				=> 'Настройки лицензионного соглашения',
    'eula_markdown'				=> 'Это EULA поддерживает <a href="https://help.github.com/articles/github-flavored-markdown/">форматирование Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Разрешенные типы файлов: ico, png и gif. Другие форматы изображений могут не отображаться во всех браузерах.',
    'favicon_size'          => 'Favicon\'ы быть квадратными размером 16х16 пикселей.',
    'footer_text'               => 'Дополнительный текст нижнего колонтитула ',
    'footer_text_help'          => 'Этот текст будет отображаться в правой части нижнего колонтитула. Разрешается использовать ссылки следующего вида <a href="https://help.github.com/articles/github-flavored-markdown/">Github ароматизированные уценок</a>. Использование прочей HTML разметки, переводов строк, изображений - может привести к непредсказуемым результатам.',
    'general_settings'			=> 'Общие настройки',
    'generate_backup'			=> 'Создать резервную копию',
    'header_color'              => 'Цвет заголовка',
    'info'                      => 'Эти настройки позволяют персонализировать некоторые аспекты вашей установки.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Версия Laravel',
    'ldap_enabled'              => 'LDAP активно',
    'ldap_integration'          => 'Интеграция LDAP',
    'ldap_settings'             => 'Настройка LDAP',
    'ldap_login_test_help'      => 'Введите действительное имя пользователя и пароль LDAP из базового DN, указанного выше, чтобы проверить, правильно ли настроен логин LDAP. СНАЧАЛА ВЫ ДОЛЖНЫ СОХРАНИТЬ ВАШИ ОБНОВЛЕННЫЕ НАСТРОЙКИ LDAP.',
    'ldap_login_sync_help'      => 'Этим производится проверка правильности синхронизации LDAP. Если тест подлинности LDAP не пройдёт, пользователи так и не смогут войти в систему. СНАЧАЛА ВЫ ДОЛЖНЫ СОХРАНИТЬ ВАШИ ОБНОВЛЕННЫЕ НАСТРОЙКИ LDAP.',
    'ldap_server'               => 'Сервер LDAP',
    'ldap_server_help'          => 'Должен начинаться с ldap:// (для незашифрованных или TLS соединений) или ldaps:// (SSL)',
    'ldap_server_cert'			=> 'Подтверждение SSL сертификата LDAP',
    'ldap_server_cert_ignore'	=> 'Разрешить невалидный SSL сертификат',
    'ldap_server_cert_help'		=> 'Выберите галочку если вы используете самоподписанный SSL сертификат и хотите принять невалидный SSL сертификат.',
    'ldap_tls'                  => 'Использовать TLS',
    'ldap_tls_help'             => 'Отметьте, только если у вас запущен STARTTLS на вашем LDAP сервере. ',
    'ldap_uname'                => 'Имя пользователя LDAP Bind',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'Пароль LDAP Bind',
    'ldap_basedn'               => 'Основной Bind DN',
    'ldap_filter'               => 'Фильтр LDAP',
    'ldap_pw_sync'              => 'LDAP синхронизация паролей',
    'ldap_pw_sync_help'         => 'Снимите галку, если вы не хотите синхронизировать LDAP пароли с локальными. Отключение этого означает, что ваши пользователи не смогут зайти в систему, если ваш LDAP сервер станет недоступным.',
    'ldap_username_field'       => 'Поле имени пользователя',
    'ldap_lname_field'          => 'Фамилия',
    'ldap_fname_field'          => 'LDAP Имя',
    'ldap_auth_filter_query'    => 'Запрос аутентификации LDAP',
    'ldap_version'              => 'Версия LDAP',
    'ldap_active_flag'          => 'Активный флаг LDAP',
    'ldap_activated_flag_help'  => 'Этот флажок используется для определение возможности входа для пользователей в Snipe-IT и не затрагивает возможность выдавать\\забирать у них предметы.',
    'ldap_emp_num'              => 'Номер сотрудника LDAP',
    'ldap_email'                => 'Email LDAP',
    'license'                  => 'Лицензия на ПО',
    'load_remote_text'          => 'Внешние скрипты',
    'load_remote_help_text'		=> 'Данная установка Snipe-IT может загружать внешние скрипты.',
    'login_note'                => 'Комментарий для экрана логина',
    'login_note_help'           => 'Опционально выводит несколько предложений на экране логина. Например, чтобы помочь людям, которые нашли потерянное или украденное устройство. Здесь можно использовать <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'login_remote_user_text'    => 'Параметры входа удаленного пользователя',
    'login_remote_user_enabled_text' => 'Включение входа через использование Remote User Header',
    'login_remote_user_enabled_help' => 'Эта опция дает возможность аутентификации с использванием заголовка REMOTE_USER согласно спецификации "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Отключить прочие механизмы аутентификации',
    'login_common_disabled_help' => 'Этот параметр отключает другие механизмы аутентификации. Просто включите эту опцию, если вы уверены, что ваш  REMOTE_USER логин уже работает.',
    'login_remote_user_custom_logout_url_text' => 'Пользовательский URL выхода',
    'login_remote_user_custom_logout_url_help' => 'Если здесь будет указан URL-адрес, пользователи будут перенаправлены туда после выхода из Snipe-IT. Это полезно для правильного закрытия пользовательской сессии вашего поставщика аутентификации.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Логотип',
    'logo_print_assets'         => 'Используется при печати',
    'logo_print_assets_help'    => 'Использование брендинга в распечатке списка активов ',
    'full_multiple_companies_support_help_text' => 'Ограничить доступ пользователям (включая админов) только активами их компаний.',
    'full_multiple_companies_support_text' => 'Полная поддержка нескольких компаний',
    'show_in_model_list'   => 'Показать в списках (дропдаунах) модели',
    'optional'					=> 'не обязательно',
    'per_page'                  => 'Результатов на страницу',
    'php'                       => 'Версия PHP',
    'php_gd_info'               => 'Для отображения QR кодов необходимо установить модуль php-gd.',
    'php_gd_warning'            => 'Библиотеки PHP Image Processing и GD plugin не установлены.',
    'pwd_secure_complexity'     => 'Сложность пароля',
    'pwd_secure_complexity_help' => 'Выберете необходимые вам правила сложности паролей.',
    'pwd_secure_min'            => 'Минимальное количество символов',
    'pwd_secure_min_help'       => 'Минимально разрешенное значение - 8',
    'pwd_secure_uncommon'       => 'Запретить простые пароли',
    'pwd_secure_uncommon_help'  => 'Запретит пользователям использовать пароли входящие в 10 000 самых популярных.',
    'qr_help'                   => 'Включить QR коды',
    'qr_text'                   => 'Текст QR кода',
    'saml_enabled'              => 'SAML включён',
    'saml_integration'          => 'Интеграция SAML',
    'saml_sp_entityid'          => 'ID записи',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Открытая часть Сертификата',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Привязка Атрибута - Имя Пользователя',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Сделать SAML-авторизацию входом по умолчанию',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'Дополнительные параметры SAML',
    'saml_custom_settings_help' => 'Вы можете указать дополнительные параметры библиотеке onelogin/php-saml. Используйте на свой страх и риск.',
    'setting'                   => 'Настройка',
    'settings'                  => 'Настройки',
    'show_alerts_in_menu'       => 'Показать оповещения в верхнем меню',
    'show_archived_in_list'     => 'Архивные активы',
    'show_archived_in_list_text'     => 'Отображать активы из архива в списке «все активы»',
    'show_assigned_assets'      => 'Показать активы, назначенные активам',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Показать изображения в письмах',
    'show_images_in_email_help'   => 'Снимите этот флажок, если ваша установка Snipe-IT находится за VPN или в закрытой сети в случае, если в E-mail-ах, которые просматриваются пользователями за пределами указанной сети не отбражаются/не загружаются изображения из данной установки Snipe-IT.',
    'site_name'                 => 'Название сайта',
    'slack_botname'             => 'Имя бота в Slack',
    'slack_channel'             => 'Канал в Slack',
    'slack_endpoint'            => 'Slack endpoint',
    'slack_integration'         => 'Настройки Slack',
    'slack_integration_help'    => 'Интеграция со Slack - необязательна, однако конечная точка и канал - обязательны, если Вы планируете её использовать. Для конфигурации интеграции со Slack, Вы должны в первую очередь <a href=":slack_link" target="_new" rel="noopener"> создать исходящий веб-хук</a> на свою учетную запись Slack. Нажмите на кнопку <strong> Протестировать Интеграцию со Slack</strong> чтобы убедится перед сохранением, что Ваши параметры - верны. ',
    'slack_integration_help_button'    => 'Как только вы сохраните вашу информацию в Slack, появится кнопка тест.',
    'slack_test_help'           => 'Тест конфигурации Slack. ПЕРЕД ЭТИМ ИЗМЕНЕННЫЕ НАСТРОЙКИ SLACK ДОЛЖНЫ БЫЛИ БЫТЬ СОХРАНЕНЫ.',
    'snipe_version'  			=> 'Версия Snipe-IT',
    'support_footer'            => 'Ссылки на поддержу в нижнем колонтитуле ',
    'support_footer_help'       => 'Отображать или не отображать ссылку на руководство пользователя и поддержку Snipe-IT',
    'version_footer'            => 'Версия в нижнем колонтитуле ',
    'version_footer_help'       => 'Отображать или не отображать версию и номер сборки Snipe-IT.',
    'system'                    => 'Информация о системе',
    'update'                    => 'Обновить настройки',
    'value'                     => 'Значение',
    'brand'                     => 'Фирменный стиль',
    'web_brand'                 => 'Тип Web-Брендинга',
    'about_settings_title'      => 'О настройках',
    'about_settings_text'       => 'Эти настройки позволяют персонализировать некоторые аспекты вашей установки.',
    'labels_per_page'           => 'Этикеток на странице',
    'label_dimensions'          => 'Размеры наклеек (в дюймах)',
    'next_auto_tag_base'        => 'Следующий автоинкремент',
    'page_padding'              => 'Поля страницы (в дюймах)',
    'privacy_policy_link'       => 'Ссылка на политику конфиденциальности',
    'privacy_policy'            => 'Политика конфидициальности',
    'privacy_policy_link_help'  => 'Добавленный здесь URL-адрес, будет являться ссылкой на политику конфиденциальности и будет отображаться в футере приложения, а также будет добавлен в e-mail сообщения, которые посылает система, в соответствии с GDPR. ',
    'purge'                     => 'Очистка удалённых записей',
    'labels_display_bgutter'    => 'Метка внизу страницы',
    'labels_display_sgutter'    => 'Метка сбоку страницы',
    'labels_fontsize'           => 'Размер шрифта метки',
    'labels_pagewidth'          => 'Ширина ярлыка',
    'labels_pageheight'         => 'Высота ярлыка',
    'label_gutters'        => 'Интервал ярлыков (дюймы)',
    'page_dimensions'        => 'Размер страницы (дюймы)',
    'label_fields'          => 'Видимые поля ярлыков',
    'inches'        => 'дюймы',
    'width_w'        => 'ширина',
    'height_h'        => 'высота',
    'show_url_in_emails'                => 'Ссылка на Snipe-IT в электронных письмах',
    'show_url_in_emails_help_text'      => 'Снимите этот флажок, если вы не хотите ссылаться на свою установку Snipe-IT в нижних колонтитулах электронной почты. Полезно, если большинство ваших пользователей никогда не заходят в систему.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Максимальная высота иконки',
    'thumbnail_max_h_help'   => 'Максимальная высота в пикселях для отображения в списке. Минимум 25, максимум 500.',
    'two_factor'        => 'Двухфакторная аутентификация',
    'two_factor_secret'        => 'Двухфакторный код',
    'two_factor_enrollment'        => 'Двухфакторная регистрация',
    'two_factor_enabled_text'        => 'Включить двухфакторную аутентификацию',
    'two_factor_reset'        => 'Сбросить двухфакторный секрет',
    'two_factor_reset_help'        => 'Это заставит пользователя снова регистрировать свое устройство с помощью Google Authenticator. Это может быть полезно, если их зарегистрированное устройство потеряно или украдено. ',
    'two_factor_reset_success'          => 'Двухфакторное устройство успешно сброшено',
    'two_factor_reset_error'          => 'Ошибка сброса двухфакторного устройства',
    'two_factor_enabled_warning'        => 'Если включить двухфакторный режим (если он в данный момент не включен) вы сразу же будете вынуждены проходить аутентификацию на устройстве, зарегистрированном в Google Auth. У вас будет возможность зарегистрировать свое устройство, если оно не зарегистрировано.',
    'two_factor_enabled_help'        => 'Это включит двухфакторную проверку подлинности с помощью Google Authenticator.',
    'two_factor_optional'        => 'Выборочно (пользователи могут включить или отключить если разрешено)',
    'two_factor_required'        => 'Требуется для всех пользователей',
    'two_factor_disabled'        => 'Выключен',
    'two_factor_enter_code'	=> 'Введите Двухфакторный код',
    'two_factor_config_complete'	=> 'Подтвердить код',
    'two_factor_enabled_edit_not_allowed' => 'Ваш администратор не позволяет изменять этот параметр.',
    'two_factor_enrollment_text'	=> "Требуется двухфакторная аутентификация, однако ваше устройство еще не зарегистрировано. Откройте приложение Google Authenticator и отсканируйте QR-код ниже, чтобы зарегистрировать свое устройство. После того, как вы зарегистрируете свое устройство, введите приведенный ниже код",
    'require_accept_signature'      => 'Требуется подпись',
    'require_accept_signature_help_text'      => 'Включение этой функции потребует от пользователей физического выхода из системы при принятии актива.',
    'left'        => 'слева',
    'right'        => 'справа',
    'top'        => 'сверху',
    'bottom'        => 'снизу',
    'vertical'        => 'вертикально',
    'horizontal'        => 'горизонтально',
    'unique_serial'                => 'Уникальные серийные номера',
    'unique_serial_help_text'                => 'Установка этого флажка включает ограничение по уникальности на серии активов',
    'zerofill_count'        => 'Длина инвентарного номера, включая заполнение нулями',
    'username_format_help'   => 'Этот параметр используется только в процессе импорта, если имя пользователя не предоставляется и мы должны сгенерировать его для Вас.',
);
