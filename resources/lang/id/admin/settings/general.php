<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Domain Active Directory',
    'ad_domain_help'			=> 'Hal ini kadang-kadang sama sebagai domain email Anda, tetapi tidak selalu.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".' ,
    'admin_cc_email'            => 'Tembusan Email',
    'admin_cc_email_help'       => 'Jika Anda ingin mengirim salinan email checkin / checkout yang dikirimkan ke pengguna akun email tambahan, masukkan di sini. Jika tidak, biarkan bidang ini kosong.',
    'is_ad'				        => 'Ini adalah server Active Directory',
    'alert_email'				=> 'Kirim pemberitahuan kepada',
    'alerts_enabled'			=> 'Aktifkan pemberitahuan',
    'alert_interval'			=> 'Ambang batas pemberitahuan kadaluarsa (dalam hari)',
    'alert_inv_threshold'		=> 'Ambang pemberitahuan persediaan',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> 'Aset id',
    'audit_interval'            => 'Interval Audit',
    'audit_interval_help'       => 'Jika Anda diminta untuk secara teratur melakukan audit aset secara fisik, masukkan selang waktu dalam beberapa bulan.',
    'audit_warning_days'        => 'Ambang Peringatan Audit',
    'audit_warning_days_help'   => 'Berapa hari sebelumnya yang harus kami peringatkan saat aset akan dilelang?',
    'auto_increment_assets'		=> 'Membuat otomatis pembahan nomor ID aset',
    'auto_increment_prefix'		=> 'Awalan (pilihan)',
    'auto_incrementing_help'    => 'Hidupkan penambahan otomatis terlebih dahulu sebelumnya',
    'backups'					=> 'Cadangan',
    'barcode_settings'			=> 'Pengaturan barcode',
    'confirm_purge'			    => 'Konfirmasi pembersihan',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'Custom CSS',
    'custom_css_help'			=> 'Masukan modifikasi CSS yang hendak anda gunakan. Jangan sertakan &lt;style&gt;&lt;/style&gt; tags.',
    'custom_forgot_pass_url'	=> 'URL Reset Kata Sandi Kustom',
    'custom_forgot_pass_url_help'	=> 'Ini menggantikan URL lupa kata sandi bawaan pada layar login, berguna untuk mengarahkan orang ke fungsi reset kata sandi LDAP internal atau yang dihosting. Ini secara efektif akan menonaktifkan fungsionalitas lupa kata sandi lokal.',
    'dashboard_message'			=> 'Pesan Dasbor',
    'dashboard_message_help'	=> 'Teks ini akan muncul di dasbor bagi siapa pun yang memiliki izin untuk melihat dasbor.',
    'default_currency'  		=> 'Mata uang utama',
    'default_eula_text'			=> 'EULA utama',
    'default_language'			=> 'Bahasa utama',
    'default_eula_help_text'	=> 'Anda juga dapat mengaitkan kustom EULAs untuk kategori aset tertentu.',
    'display_asset_name'        => 'Tampilan Nama Aset',
    'display_checkout_date'     => 'Tampilan Tanggal Keluar',
    'display_eol'               => 'Tampilan EOL dalam bentuk tabel',
    'display_qr'                => 'Tampilan kode kotak',
    'display_alt_barcode'		=> 'Tampilan barcode 1D',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> 'Tipe Barcode 2D',
    'alt_barcode_type'			=> 'Tipe Barcode 1D',
    'email_logo_size'       => 'Square logos in email look best. ',
    'eula_settings'				=> 'Konfigurasi EULA',
    'eula_markdown'				=> 'EULA mengijinkan <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Teks Footer Tambahan ',
    'footer_text_help'          => 'Teks ini akan muncul di footer sebelah kanan. Tautan diizinkan menggunakan <a href="https://help.github.com/articles/github-flavored-markdown/">marka bergaya Github</a>. Baris baru, header, gambar, dll mungkin akan mengakibatkan hasil yang tidak sesuai.',
    'general_settings'			=> 'Konfigurasi umum',
    'generate_backup'			=> 'Membuat cadangan',
    'header_color'              => 'Warna Header',
    'info'                      => 'Dengan pengaturan ini anda dapat merubah aspek tertentu pada instalasi.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Versi Laravel',
    'ldap_enabled'              => 'Aktifkan LDAP',
    'ldap_integration'          => 'Integrasi LDAP',
    'ldap_settings'             => 'Konfigurasi LDAP',
    'ldap_login_test_help'      => 'Masukkan nama pengguna dan kata sandi LDAP yang valid dari DN dasar yang Anda tentukan di atas untuk menguji apakah pengaturan login LDAP Anda telah dikonfigurasi dengan benar. PERTAMA-TAMA ANDA HARUS MENYIMPAN PENGATURAN LDAP ANDA.',
    'ldap_login_sync_help'      => 'Ini hanya menguji bahwa LDAP dapat tersinkronisasi dengan benar. Jika kueri Otentikasi LDAP Anda tidak benar, pengguna mungkin masih belum dapat masuk. PERTAMA-TAMA ANDA HARUS MENYIMPAN PENGATURAN LDAP ANDA.',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'Ini harus dimulai dengan ldap: / / (untuk tidak terenkripsi atau TLS) atau ldaps: / / (untuk SSL)',
    'ldap_server_cert'			=> 'Validasi sertifikat LDAP SSL',
    'ldap_server_cert_ignore'	=> 'Izinkan sertifikat SSL tak terdaftar',
    'ldap_server_cert_help'		=> 'Pilih kotak ini jika anda menggunakan sertifikat SSL self sign dan menerima sertifikat SSL yang tak terdaftar.',
    'ldap_tls'                  => 'Gunakan TLS',
    'ldap_tls_help'             => 'Ini digunakan jika anda menggunakan STARTTLS di server LDAP anda. ',
    'ldap_uname'                => 'Nama pengguna LDAP',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'Katakunci LDAP',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'Saring LDAP',
    'ldap_pw_sync'              => 'Sinkronisasi Password LDAP',
    'ldap_pw_sync_help'         => 'Hapus tanda centang kotak ini jika Anda tidak ingin menyimpan password LDAP disinkronkan dengan password lokal. Menonaktifkan ini berarti bahwa pengguna Anda mungkin tidak bisa login jika server LDAP Anda tidak bisa diakses untuk beberapa alasan.',
    'ldap_username_field'       => 'Kolom nama pengguna',
    'ldap_lname_field'          => 'Nama Belakang',
    'ldap_fname_field'          => 'LDAP Nama Depan',
    'ldap_auth_filter_query'    => 'Permintaan Otentikasi LDAP',
    'ldap_version'              => 'Versi LDAP',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'This flag is used to determine whether a user can login to Snipe-IT and does not affect the ability to check items in or out to them.',
    'ldap_emp_num'              => 'Nomor karyawan LDAP',
    'ldap_email'                => 'LDAP Email',
    'license'                  => 'Lisensi Perangkat Lunak',
    'load_remote_text'          => 'Kode jarak jauh',
    'load_remote_help_text'		=> 'Snipe-IT dapat menggunakan kode program dari luar.',
    'login_note'                => 'Login Catatan',
    'login_note_help'           => 'Opsional memasukkan beberapa kalimat di layar masuk Anda, misalnya untuk membantu orang-orang yang telah menemukan perangkat yang hilang atau dicuri. Bidang ini menerima <a href="https://help.github.com/articles/github-flavored-markdown/">posur rasa Github</a>',
    'login_remote_user_text'    => 'Opsi masuk Pengguna Jarak Jauh',
    'login_remote_user_enabled_text' => 'Aktifkan Login dengan Remote User Header',
    'login_remote_user_enabled_help' => 'Opsi ini memungkinkan Otentikasi melalui header REMOTE_USER sesuai dengan "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Nonaktifkan mekanisme autentikasi lainnya',
    'login_common_disabled_help' => 'Opsi ini menonaktifkan mekanisme otentikasi lainnya. Cukup aktifkan opsi ini jika Anda yakin bahwa login REMOTE_USER Anda sudah berfungsi',
    'login_remote_user_custom_logout_url_text' => 'Penyesuaian URL logout',
    'login_remote_user_custom_logout_url_help' => 'Jika diisi, pengguna akan dialihkan ke URL ini setelah keluar atau logout. Berfungsi untuk menutup sesi pengguna dengan sempurna.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Gunakan saat mencetak',
    'logo_print_assets_help'    => 'Menggunakan branding Anda pada semua hasil cetak daftar aset ',
    'full_multiple_companies_support_help_text' => 'Membatasi pengguna (termasuk admin) diberikan kepada perusahaan untuk aset perusahaan mereka.',
    'full_multiple_companies_support_text' => 'Dukungan penuh beberapa perusahaan',
    'show_in_model_list'   => 'Tampilkan dalam Model Dropdown',
    'optional'					=> 'pilihan',
    'per_page'                  => 'Hasil per halaman',
    'php'                       => 'Versi PHP',
    'php_gd_info'               => 'Anda harus memasang php-gd untuk menampilkan kode QR, baca petunjuk pemasangan.',
    'php_gd_warning'            => 'Plugin PHP pengolahan citra dan GD tidak diinstal.',
    'pwd_secure_complexity'     => 'Kompleksitas Password',
    'pwd_secure_complexity_help' => 'Pilih aturan kerumitan kompleksitas yang ingin Anda tegakkan.',
    'pwd_secure_min'            => 'Karakter minimum kata sandi',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'Mencegah password umum',
    'pwd_secure_uncommon_help'  => 'Ini akan melarang pengguna menggunakan kata kunci umum dari 10.000 sandi teratas yang dilaporkan mengalami pelanggaran.',
    'qr_help'                   => 'Hidupkan kode QR sebelumnya',
    'qr_text'                   => 'Teks kode QR',
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
    'setting'                   => 'Pengaturan',
    'settings'                  => 'Pengaturan',
    'show_alerts_in_menu'       => 'Tampilkan pemberitahuan di menu atas',
    'show_archived_in_list'     => 'Aset yang Diarsipkan',
    'show_archived_in_list_text'     => 'Tampilkan aset yang diarsipkan dalam daftar "semua aset"',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Tampilkan gambar dalam email',
    'show_images_in_email_help'   => 'Hapus centang kotak ini jika instalasi Snipe-IT Anda berada di belakang VPN atau jaringan tertutup dan pengguna di luar jaringan tidak akan dapat memuat gambar yang disajikan dari instalasi ini di email mereka.',
    'site_name'                 => 'Nama Situs',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Pengaturan Slack',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Setelah Anda menyimpan informasi Slack Anda, tombol tes akan muncul.',
    'slack_test_help'           => 'Uji apakah integrasi Slack Anda dikonfigurasi dengan benar. ANDA HARUS MENYIMPAN SETELAN PENGATURAN KESELAMATAN ANDA PERTAMA.',
    'snipe_version'  			=> 'Versi Snipe-IT',
    'support_footer'            => 'Mendukung Footer Links ',
    'support_footer_help'       => 'Tentukan siapa yang melihat tautan ke info Dukungan Snipe-IT dan Panduan Pengguna',
    'version_footer'            => 'Versi pada Footer ',
    'version_footer_help'       => 'Tentukan siapa saja yang dapat melihat versi dan build number dari Snipe-IT.',
    'system'                    => 'Informasi Sistem',
    'update'                    => 'Pengaturan perbaruan',
    'value'                     => 'Harga',
    'brand'                     => 'Merek',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Tentang pengaturan',
    'about_settings_text'       => 'Dengan pengaturan ini anda dapat merubah aspek tertentu pada instalasi.',
    'labels_per_page'           => 'Label per halaman',
    'label_dimensions'          => 'Dimensi label (inch)',
    'next_auto_tag_base'        => 'Berikutnya auto-increment',
    'page_padding'              => 'Marjin halaman (inch)',
    'privacy_policy_link'       => 'Tautan ke Kebijakan Privasi',
    'privacy_policy'            => 'Kebijakan privasi',
    'privacy_policy_link_help'  => 'Jika url disertakan di sini, tautan ke kebijakan privasi Anda akan dimasukkan dalam footer aplikasi dan di email apa pun yang dikirimkan sistem, sesuai dengan GDPR. ',
    'purge'                     => 'Pembersihan catatan yang telah terhapus',
    'labels_display_bgutter'    => 'Ukuran bawah label',
    'labels_display_sgutter'    => 'Ukuran samping label',
    'labels_fontsize'           => 'Ukuran huruf label',
    'labels_pagewidth'          => 'Lebar halaman label',
    'labels_pageheight'         => 'Tinggi kertas label',
    'label_gutters'        => 'Spasi label (inci)',
    'page_dimensions'        => 'Dimensi halaman (inch)',
    'label_fields'          => 'Field label yang terlihat',
    'inches'        => 'inci',
    'width_w'        => 'l',
    'height_h'        => 't',
    'show_url_in_emails'                => 'Tautan ke Snipe-IT di Email',
    'show_url_in_emails_help_text'      => 'Hapus centang pada kotak ini jika Anda tidak ingin menautkan kembali ke instalasi Snipe-IT Anda di footer email Anda. Berguna jika sebagian besar pengguna Anda tidak pernah masuk.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Tinggi thumbnail maks',
    'thumbnail_max_h_help'   => 'Tinggi maksimum piksel yang dapat ditampilkan thumbnail dalam tampilan daftar. Min 25, maks 500.',
    'two_factor'        => 'Dua faktor otentikasi',
    'two_factor_secret'        => 'Kode Dua Faktor',
    'two_factor_enrollment'        => 'Pendaftaran Dua Faktor',
    'two_factor_enabled_text'        => 'Aktifkan Dua Faktor',
    'two_factor_reset'        => 'Reset Dua Faktor Rahasia',
    'two_factor_reset_help'        => 'Ini akan memaksa pengguna untuk mendaftarkan perangkat mereka dengan Google Authenticator lagi. Ini bisa berguna jika perangkat mereka saat ini terdaftar hilang atau dicuri.',
    'two_factor_reset_success'          => 'Dua perangkat faktor berhasil di-reset',
    'two_factor_reset_error'          => 'Dua faktor perangkat reset gagal',
    'two_factor_enabled_warning'        => 'Mengaktifkan dua faktor jika saat ini tidak diaktifkan akan segera memaksa Anda untuk melakukan otentikasi dengan perangkat yang terdaftar di Google Auth. Anda akan memiliki kemampuan untuk mendaftarkan perangkat Anda jika seseorang tidak terdaftar saat ini.',
    'two_factor_enabled_help'        => 'Ini akan mengaktifkan autentikasi dua faktor menggunakan Google Authenticator.',
    'two_factor_optional'        => 'Selektif (Pengguna dapat mengaktifkan atau menonaktifkan jika diizinkan)',
    'two_factor_required'        => 'Diperlukan untuk semua pengguna',
    'two_factor_disabled'        => 'Cacat',
    'two_factor_enter_code'	=> 'Masukkan Kode Dua Faktor',
    'two_factor_config_complete'	=> 'Kirim Kode',
    'two_factor_enabled_edit_not_allowed' => 'Administrator Anda tidak mengizinkan Anda untuk mengedit pengaturan ini.',
    'two_factor_enrollment_text'	=> "Diperlukan dua faktor otentikasi, namun perangkat Anda belum terdaftar. Buka aplikasi Google Authenticator Anda dan pindai kode QR di bawah ini untuk mendaftarkan perangkat Anda. Setelah mendaftarkan perangkat Anda, masukkan kode di bawah ini",
    'require_accept_signature'      => 'Membutuhkan tanda tangan',
    'require_accept_signature_help_text'      => 'Mengaktifkan fitur ini akan mengharuskan pengguna untuk secara fisik menandatangani untuk menerima aset.',
    'left'        => 'kiri',
    'right'        => 'kanan',
    'top'        => 'atas',
    'bottom'        => 'bawah',
    'vertical'        => 'vertikal',
    'horizontal'        => 'horisontal',
    'unique_serial'                => 'Nomor seri unik',
    'unique_serial_help_text'                => 'Menandai boks ini akan membuat adanya batasan keunikan pada tiap nomor seri aset',
    'zerofill_count'        => 'Jarak tag aset, termasuk angka nol',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
);
