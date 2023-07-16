<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory 域',
    'ad_domain_help'			=> '通常(但並非全部情況下)這與您的郵件域相同。',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".' ,
    'admin_cc_email'            => '電子郵件副本',
    'admin_cc_email_help'       => '如果您想將發送給用戶的繳回/借出電子郵件的副本發送到其他電子郵件帳戶，請在此處輸入。否則，請將此字段留空。',
    'is_ad'				        => '這是AD域伺服器',
    'alert_email'				=> '發送警報',
    'alerts_enabled'			=> '警報已啟用',
    'alert_interval'			=> '警報閾值(天)',
    'alert_inv_threshold'		=> '庫存警報閾值',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> '資產ID',
    'audit_interval'            => '稽核間隔',
    'audit_interval_help'       => '如果您需要定期對您的資產進行身體審核，請輸入幾個月的時間間隔。',
    'audit_warning_days'        => '稽核警告閾值',
    'audit_warning_days_help'   => '當資產到期時，我們應該提前幾天提前審核？',
    'auto_increment_assets'		=> '產生自動遞增資產ID',
    'auto_increment_prefix'		=> '前綴(可選)',
    'auto_incrementing_help'    => '在啟用自動遞增的資產ID之前設定此處。',
    'backups'					=> '備份',
    'barcode_settings'			=> '條碼設定',
    'confirm_purge'			    => '確認清除',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> '自訂CSS',
    'custom_css_help'			=> '輸入您喜歡的CSS格式覆蓋。不要包括 &lt;style&gt;&lt;/style&gt; 標籤。',
    'custom_forgot_pass_url'	=> '自訂密碼重置網址',
    'custom_forgot_pass_url_help'	=> '這將替換登錄屏幕上的忘記密碼URL，有助於將用戶引導至內部或託管的LDAP密碼重置功能。它將禁用本地用戶遺忘密的碼功能。',
    'dashboard_message'			=> '儀表板消息',
    'dashboard_message_help'	=> '該段文字將顯示在儀表板上，供有權查看儀表板的任何人使用。',
    'default_currency'  		=> '預設貨幣',
    'default_eula_text'			=> '預設EULA',
    'default_language'			=> '預設語言',
    'default_eula_help_text'	=> '您也可以將自訂的EULA與特定資產類別相關聯。',
    'display_asset_name'        => '顯示資產名稱',
    'display_checkout_date'     => '顯示借出日期',
    'display_eol'               => '以表格形式顯示EOL',
    'display_qr'                => '顯示二維條碼',
    'display_alt_barcode'		=> '顯示條碼',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> '二維條碼類型',
    'alt_barcode_type'			=> '條碼類型',
    'email_logo_size'       => 'Square logos in email look best. ',
    'eula_settings'				=> 'EULA 設定',
    'eula_markdown'				=> 'EULA中可使用<a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => '附加頁尾文字',
    'footer_text_help'          => '此段文字將出現在右側頁尾中。鏈接允許使用 <a href="https://help.github.com/articles/github-flavored-markdown/">Github風格Markdown</a>。換行符、標題、圖像等可能會導致不可預知的結果。',
    'general_settings'			=> '一般設定',
    'generate_backup'			=> '產生備份',
    'header_color'              => '標題顏色',
    'info'                      => '這些設定允許您自訂您的安裝選項',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Laravel版本',
    'ldap_enabled'              => '啟用LDAP驗證',
    'ldap_integration'          => 'LDAP整合',
    'ldap_settings'             => 'LDAP設定',
    'ldap_login_test_help'      => '從上方指定的 DN 中輸入有效的 LDAP 使用者名和密碼, 以測試是否正確配置了 LDAP 登錄。您必須先保存更新的 LDAP 設置。',
    'ldap_login_sync_help'      => '這僅測試 LDAP 可以正確同步。如果 LDAP 身份驗證查詢不正確, 使用者可能仍無法登錄。您必須先保存更新的 LDAP 設置。',
    'ldap_server'               => 'LDAP伺服器',
    'ldap_server_help'          => '這應以 ldap:// (未加密或TLS加密) 或 ldaps:// (SSL加密) 開頭',
    'ldap_server_cert'			=> '檢查LDAP的SSL憑證',
    'ldap_server_cert_ignore'	=> '允許未通過校驗旳SSL憑證',
    'ldap_server_cert_help'		=> '如果您使用了自簽署憑證，請勾選',
    'ldap_tls'                  => '使用TLS',
    'ldap_tls_help'             => '當LDAP伺服器使用STARTTLS時請勾選此選項',
    'ldap_uname'                => 'LDAP使用者',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'LDAP密碼',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP篩選',
    'ldap_pw_sync'              => 'LDAP 密碼同步',
    'ldap_pw_sync_help'         => '如果您不想要LDAP密碼與本地端密碼同步，請取消勾選。取消同步設定將造成當本地端與LDAP失去連線時，使用者無法登入。
',
    'ldap_username_field'       => '使用者名稱',
    'ldap_lname_field'          => '姓',
    'ldap_fname_field'          => 'LDAP 名',
    'ldap_auth_filter_query'    => 'LDAP 認證請求',
    'ldap_version'              => 'LDAP 版本',
    'ldap_active_flag'          => 'LDAP 啟用標誌',
    'ldap_activated_flag_help'  => 'This flag is used to determine whether a user can login to Snipe-IT and does not affect the ability to check items in or out to them.',
    'ldap_emp_num'              => 'LDAP 員工編號',
    'ldap_email'                => 'LDAP Email',
    'license'                  => '軟體授權',
    'load_remote_text'          => '外部腳本',
    'load_remote_help_text'		=> '允許 Snipe-IT 安裝外部腳本',
    'login_note'                => '登錄說明',
    'login_note_help'           => '可選地，在您的登錄屏幕上包括幾個句子，例如幫助找到丟失或被盜設備的人。此字段接受<a href="https://help.github.com/articles/github-flavored-markdown/">Github風味的markdown</a>',
    'login_remote_user_text'    => '遠端使用者登錄選項',
    'login_remote_user_enabled_text' => '啟用遠端使用者登錄',
    'login_remote_user_enabled_help' => '此選項根據 "公用網關介面 (rfc3875)"標準，啟用 REMOTE_USER 進行身份驗證',
    'login_common_disabled_text' => '禁用其他認證機制',
    'login_common_disabled_help' => '該選項禁用其他身份驗證機制。如果您確定您的REMOTE_USER登錄已在使用，請啟用此選項',
    'login_remote_user_custom_logout_url_text' => '自訂登出網址',
    'login_remote_user_custom_logout_url_help' => '如果此處提供了 URL，則在用戶登出 Snipe-IT 後，用戶將被重定向到此 URL。這對於正確關閉身份驗證提供程序非常有用。',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => '在列印中使用',
    'logo_print_assets_help'    => '在可列印資產清單上使用商標 ',
    'full_multiple_companies_support_help_text' => '限制使用者（包括管理員） 僅能存取該公司的資產',
    'full_multiple_companies_support_text' => '完整支援多公司',
    'show_in_model_list'   => '在模型下拉選單中顯示',
    'optional'					=> '可選',
    'per_page'                  => '每頁呈現結果',
    'php'                       => 'PHP 版本',
    'php_gd_info'               => '您必須安裝 php-gd 顯示二維條碼，請參閱安裝說明。',
    'php_gd_warning'            => 'PHP 圖形處理及 php-gd 套件沒有安裝',
    'pwd_secure_complexity'     => '密碼複雜性',
    'pwd_secure_complexity_help' => '選擇要強制執行的任何密碼複雜度規則。',
    'pwd_secure_min'            => '密碼的最少字元',
    'pwd_secure_min_help'       => '最小允許值是 8',
    'pwd_secure_uncommon'       => '防止常見密碼',
    'pwd_secure_uncommon_help'  => '這將不允許用戶使用違反報告的前10,000個密碼的常用密碼。',
    'qr_help'                   => '允許二維條碼首次設置',
    'qr_text'                   => '二維條碼文字',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML 整合',
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
    'setting'                   => '設定',
    'settings'                  => '設定',
    'show_alerts_in_menu'       => '在頂部選單中顯示警告',
    'show_archived_in_list'     => '封存的資產',
    'show_archived_in_list_text'     => '在“所有資產”列表中顯示已封存的資產',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => '在電子郵件中顯示圖片',
    'show_images_in_email_help'   => '如果您的Snipe-IT安裝位於VPN或封閉網絡後面，並且外部網絡的用戶無法將通過此安裝提供的圖像加載到其電子郵件中，請取消選中此框。',
    'site_name'                 => '站台名稱',
    'slack_botname'             => 'Slack Bot 名稱',
    'slack_channel'             => 'Slack 頻道',
    'slack_endpoint'            => 'Slack 節點',
    'slack_integration'         => 'Slack 設定',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => '一旦你保存了你的Slack信息，就會出現一個測試按鈕。',
    'slack_test_help'           => '測試您的Slack集成是否配置正確。你必須首先保存你的更新的設置。',
    'snipe_version'  			=> 'Snipe-IT 版本',
    'support_footer'            => '支援頁尾連結',
    'support_footer_help'       => '指定誰可以看到指向Snipe-IT支持信息和用戶手冊的鏈接',
    'version_footer'            => '頁尾版本 ',
    'version_footer_help'       => '指定誰可以看到Snipe-IT版本和內部版本號。',
    'system'                    => '系統資訊',
    'update'                    => '更新設定',
    'value'                     => '價值',
    'brand'                     => '企業識別',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => '關於設定',
    'about_settings_text'       => '這些設定允許您自訂您的安裝偏好',
    'labels_per_page'           => '每頁顯示',
    'label_dimensions'          => '標籤尺寸（英吋）',
    'next_auto_tag_base'        => '下一個自動增量',
    'page_padding'              => '頁面邊框（英吋）',
    'privacy_policy_link'       => '連結到隱私條款。',
    'privacy_policy'            => '隱私條款',
    'privacy_policy_link_help'  => '如果此處包含網址，則根據GDPR，頁尾和系統發送的任何電子郵件中都會包含指向您的隱私權政策的鏈接。 ',
    'purge'                     => '清除已標記刪除的記錄',
    'labels_display_bgutter'    => '標籤底部裝訂線',
    'labels_display_sgutter'    => '標籤側邊裝訂線',
    'labels_fontsize'           => '標籤字體大小',
    'labels_pagewidth'          => '標籤寬度',
    'labels_pageheight'         => '標籤高度',
    'label_gutters'        => '標籤間隔（英吋）',
    'page_dimensions'        => '頁面尺寸（英吋）',
    'label_fields'          => '標籤可見欄位',
    'inches'        => '英吋',
    'width_w'        => '寬',
    'height_h'        => '高',
    'show_url_in_emails'                => '鏈接到Snipe-IT在電子郵件',
    'show_url_in_emails_help_text'      => '如果您不希望鏈接回電子郵件頁腳中的Snipe-IT安裝，請取消選中此框。如果您的大多數用戶從未登錄，則很有用',
    'text_pt'        => '磅',
    'thumbnail_max_h'   => '最大縮略圖高度',
    'thumbnail_max_h_help'   => '縮略圖可能在列表視圖中顯示的最大高度（以像素為單位）。最小25，最多500。',
    'two_factor'        => '雙因素身份驗證',
    'two_factor_secret'        => '雙因素驗證代碼',
    'two_factor_enrollment'        => '登記雙因素驗證',
    'two_factor_enabled_text'        => '啟用雙因素驗證',
    'two_factor_reset'        => '重設雙因素驗證',
    'two_factor_reset_help'        => '此動作會強制使用者再次透過 Google Authenticator 登記行動裝置，此動作可解決原登記行動裝置遺失的問題。',
    'two_factor_reset_success'          => '重設雙因素驗證裝置成功',
    'two_factor_reset_error'          => '重設雙因素驗證裝置失敗',
    'two_factor_enabled_warning'        => '啟用雙因素認證將需要您立即用登記的行動裝置驗證身份。如您尚未設置雙因素認證，您現在可以登記您的設備',
    'two_factor_enabled_help'        => '這將使用 Google Authenticator 做雙因素驗證。',
    'two_factor_optional'        => '可選項（如果允許，用戶可以啟用或禁用）',
    'two_factor_required'        => '強制所有使用者啟用',
    'two_factor_disabled'        => '已停用',
    'two_factor_enter_code'	=> '輸入雙因素認證代碼',
    'two_factor_config_complete'	=> '送出代碼',
    'two_factor_enabled_edit_not_allowed' => '您的管理員不允許您編輯此設定。',
    'two_factor_enrollment_text'	=> "雙因素認證是必要的，無論您是否已登記行動裝置。開啟您的 Google Authenticator app 並且掃描下方的 QR Code 以登記雙因素認證。當您已登記您的裝置，請在下方輸入認證代碼",
    'require_accept_signature'      => '需要簽名',
    'require_accept_signature_help_text'      => '啟用此功能將需要使用者親自簽名來接受一項資產。',
    'left'        => '左',
    'right'        => '右',
    'top'        => '頂部',
    'bottom'        => '底部',
    'vertical'        => '垂直',
    'horizontal'        => '水平',
    'unique_serial'                => '唯一序號',
    'unique_serial_help_text'                => '選中此框將強制對資產序號進行唯一性約束',
    'zerofill_count'        => '資產標籤長度，包括補零',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
);
