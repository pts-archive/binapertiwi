<?php

return array(
    'ad'				        => 'Directorio Activo',
    'ad_domain'				    => 'Dominio del Directorio Activo',
    'ad_domain_help'			=> 'Este es a veces el mismo que el correo electrónico de dominio, pero no siempre.',
    'ad_append_domain_label'    => 'Añadir nombre de dominio',
    'ad_append_domain'          => 'Añadir nombre de dominio al campo de nombre de usuario',
    'ad_append_domain_help'     => 'El usuario no necesita escribir "username@domain.local", puede escribir únicamente "username".' ,
    'admin_cc_email'            => 'Email CC',
    'admin_cc_email_help'       => 'Si deseas enviar una notificación por correo electrónico de las asignaciones de activos que se envían a los usuarios a una cuenta adicional, ingrésela aquí. De lo contrario, deja este campo en blanco.',
    'is_ad'				        => 'Este es un servidor de Directorio Activo',
    'alert_email'				=> 'Enviar alertas a',
    'alerts_enabled'			=> 'Alertas de correo electrónico habilitadas',
    'alert_interval'			=> 'Limite de alertas de expiración (en días)',
    'alert_inv_threshold'		=> 'Umbral de alerta del inventario',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> 'IDs de activos',
    'audit_interval'            => 'Intervalo de Auditoría',
    'audit_interval_help'       => 'Si tienes la obligación de auditar física y regularmente tus activos, ingresa el intervalo en meses.',
    'audit_warning_days'        => 'Umbral de Aviso de Auditoría',
    'audit_warning_days_help'   => '¿Con cuántos días de antelación deberíamos advertirte que tus activos se deben auditar?',
    'auto_increment_assets'		=> 'Generar identificaciones de activos autoincrementales',
    'auto_increment_prefix'		=> 'Prefijo (opcional)',
    'auto_incrementing_help'    => 'Activar las identificaciones de activos autoincrementantes para establecer esto',
    'backups'					=> 'Copias de Seguridad',
    'barcode_settings'			=> 'Configuración del Código de Barras',
    'confirm_purge'			    => 'Confirmar Purga',
    'confirm_purge_help'		=> 'Introduzca el texto "DELETE" en el cuadro de abajo para purgar sus registros borrados. Esta acción no se puede deshacer y borrará PERMANENTAMENTE todos los elementos y usuarios eliminados. (Se recomienda hacer una copia de seguridad previamente, para estar seguro.)',
    'custom_css'				=> 'CSS Personalizado',
    'custom_css_help'			=> 'Introduce cualquier CSS personalizado que quieras utilizar. No incluyas las etiquetas &lt;style&gt;&lt;/style&gt; .',
    'custom_forgot_pass_url'	=> 'Personalizar URL de Restablecimiento de Contraseña',
    'custom_forgot_pass_url_help'	=> 'Esto remplaza la URL incorporada para contraseña olvidada en la pantalla de inicio, útil para dirigir a las personas a una funcionalidad de restablecimiento de interna o alojada en LDPA. Esto deshabilitará la funcionalidad local de contraseña olvidada.',
    'dashboard_message'			=> 'Mensajes del Panel',
    'dashboard_message_help'	=> 'Este texto aparecerá en el panel para cualquiera que tenga permiso de ver el panel.',
    'default_currency'  		=> 'Divisa predeterminada',
    'default_eula_text'			=> 'Licencia Predeterminada',
    'default_language'			=> 'Lenguaje Predeterminado',
    'default_eula_help_text'	=> 'También puedes asociar licencias personalizadas a categorías de activos específicas.',
    'display_asset_name'        => 'Mostrar Nombre del Equipo',
    'display_checkout_date'     => 'Mostrar fecha de Salida',
    'display_eol'               => 'Mostrar Fin de Vida en la vista de tabla',
    'display_qr'                => 'Mostrar Códigos QR',
    'display_alt_barcode'		=> 'Mostrar código de barras 1D',
    'email_logo'                => 'Logo de Email',
    'barcode_type'				=> 'Tipo de código de barras 2D',
    'alt_barcode_type'			=> 'Tipo de código de barras 1D',
    'email_logo_size'       => 'Los logotipos cuadrados en el correo electrónico se ven mejor. ',
    'eula_settings'				=> 'Configuración de Licencia',
    'eula_markdown'				=> 'Esta licencia permite <a href="https://help.github.com/articles/github-flavored-markdown/">markdown estilo Github</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Los tipos de archivo aceptados son ico, png y gif. Otros formatos de imagen pueden no funcionar en todos los navegadores.',
    'favicon_size'          => 'Los Favicons deben ser imágenes cuadradas, 16x16 píxeles.',
    'footer_text'               => 'Texto adicional de pie de página ',
    'footer_text_help'          => 'Este texto aparecerá en el lado derecho del pie de página. Los enlaces están permitidos usando <a href="https://help.github.com/articles/github-flavored-markdown/">el markdown estilo Github</a>. Saltos de línea, cabeceras, imágenes, etc., pueden dar resultados impredecibles.',
    'general_settings'			=> 'Configuración General',
    'generate_backup'			=> 'Generar Respaldo',
    'header_color'              => 'Color de Encabezado',
    'info'                      => 'Estos ajustes te dejan personalizar ciertos aspectos de tu instalación.',
    'label_logo'                => 'Logo de etiqueta',
    'label_logo_size'           => 'Los logos cuadrados se ven mejor - se mostrarán en la parte superior derecha de cada etiqueta de activo. ',
    'laravel'                   => 'Versión de Lavarel',
    'ldap_enabled'              => 'LDAP activado',
    'ldap_integration'          => 'Integración LDAP',
    'ldap_settings'             => 'Configuración LDAP',
    'ldap_login_test_help'      => 'Introduce un usuario y contraseña LDAP válidos desde la base DN que especificaste antes para probar si tu inicio de sesión LDAP está configurado correctamente. DEBES GUARDAR TUS CONFIGURACIONES LDAP ACTUALIZADAS PRIMERO.',
    'ldap_login_sync_help'      => 'Esto solo prueba que LDAP puede sincronizarse correctamente. Si tu solicitud de Autenticación LDAP no es correcta, los usuarios no podrían iniciar sesión. DEBES GUARDAR TUS CONFIGURACIONES LDAP ACTUALIZADAS PRIMERO.',
    'ldap_server'               => 'Servidor LDAP',
    'ldap_server_help'          => 'Esto debería empezar con ldap:// (para no-encriptados o TLS) o ldaps:// (para SSL)',
    'ldap_server_cert'			=> 'Validación de certificado LDAP SSL',
    'ldap_server_cert_ignore'	=> 'Permitir Certificado SSL inválido',
    'ldap_server_cert_help'		=> 'Selecciona este campo si estás usando un certificado SSL autofirmado y te gustaría aceptar un certificado SSL inválido.',
    'ldap_tls'                  => 'Usar TLS',
    'ldap_tls_help'             => 'Esto debe seleccionarse solamente si estás ejecutando STARTTLS en tu servidor LDAP. ',
    'ldap_uname'                => 'Enlazar Nombre de Usuario LDAP',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'Enlazar Contraseña LDAP',
    'ldap_basedn'               => 'Enlazar Base DN',
    'ldap_filter'               => 'Filtro LDAP',
    'ldap_pw_sync'              => 'Sincronización de Contraseña LDAP',
    'ldap_pw_sync_help'         => 'Desmarca esta casilla si no deseas mantener las contraseñas LDAP sincronizadas con las contraseñas locales. Desactivar esto significa que tus usuarios no podrían acceder al inicio de sesión si tu servidor LDAP no está disponible por alguno razón.',
    'ldap_username_field'       => 'Campo de Nombre de Usuario',
    'ldap_lname_field'          => 'Apellido',
    'ldap_fname_field'          => 'Primer Nombre LDAP',
    'ldap_auth_filter_query'    => 'Solicitud de Autenticación LDAP',
    'ldap_version'              => 'Versión LDAP',
    'ldap_active_flag'          => 'Flag activo LDAP',
    'ldap_activated_flag_help'  => 'This flag is used to determine whether a user can login to Snipe-IT and does not affect the ability to check items in or out to them.',
    'ldap_emp_num'              => 'Número de Empleado LDAP',
    'ldap_email'                => 'Correo electrónico LDAP',
    'license'                  => 'Licencia de Software',
    'load_remote_text'          => 'Scripts remotos',
    'load_remote_help_text'		=> 'Esta instalación de Snipe-IT puede cargar scripts desde el mundo exterior.',
    'login_note'                => 'Nota de Inicio de Sesión',
    'login_note_help'           => 'Opcionalmente incluye unas pocas oraciones, por ejemplo para asistir a personas que han encontrado o perdido un dispositivo. Este campo acepta el <a href="https://help.github.com/articles/github-flavored-markdown/">markdown estilo Github</a>',
    'login_remote_user_text'    => 'Opciones de inicio de sesión de usuario remoto',
    'login_remote_user_enabled_text' => 'Habilitar inicio de sesión con encabezado de usuario remoto',
    'login_remote_user_enabled_help' => 'Esta opción habilita la Autenticación mediante el encabezado REMOTE_USER de acuerdo con la "Interfaz de puerta de enlace común (rfc3875)"',
    'login_common_disabled_text' => 'Deshabilitar otros mecanismos de autenticación',
    'login_common_disabled_help' => 'Esta opción desactiva otros mecanismos de autenticación. Simplemente habilite esta opción si está seguro de que su inicio de sesión REMOTE_USER ya está funcionando',
    'login_remote_user_custom_logout_url_text' => 'URL de cierre de sesión personalizado',
    'login_remote_user_custom_logout_url_help' => 'Si se proporciona una url aquí, los usuarios serán redirigidos a esta URL después de que el usuario cierre la sesión de Snipe-IT. Esto es útil para cerrar correctamente las sesiones de usuario de su proveedor de autenticación.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Usar la cabecera especificada en lugar de REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Utilizar en impresión',
    'logo_print_assets_help'    => 'Utilice la marca en las listas de activos imprimibles ',
    'full_multiple_companies_support_help_text' => 'Restringir usuarios (incluyendo administradores) asignados a compañías a sus activos de la compañía.',
    'full_multiple_companies_support_text' => 'Soporte Completo de Múltiples Compañías',
    'show_in_model_list'   => 'Mostrar en Modelos Desplegados',
    'optional'					=> 'opcional',
    'per_page'                  => 'Resultados por Página',
    'php'                       => 'Versión de PHP',
    'php_gd_info'               => 'Debes instalar php-gd para mostrar códigos QR, ve las instrucciones de instalación.',
    'php_gd_warning'            => 'PHP Image Processing y GD plugin NO ESTÁN instalados.',
    'pwd_secure_complexity'     => 'Complejidad de la contraseña',
    'pwd_secure_complexity_help' => 'Selecciona las reglas de complejidad que quieras aplicar.',
    'pwd_secure_min'            => 'Caracteres mínimos de contraseña',
    'pwd_secure_min_help'       => 'El valor mínimo permitido es 8',
    'pwd_secure_uncommon'       => 'Evitar contraseñas comunes',
    'pwd_secure_uncommon_help'  => 'Esto impedirá a los usuarios de usar contraseñas comunes de el top 10.000 de contraseñas que se notifiquen en las infracciones.',
    'qr_help'                   => 'Activa Códigos QR primero para establecer esto',
    'qr_text'                   => 'Texto del Código QR',
    'saml_enabled'              => 'SAML activado',
    'saml_integration'          => 'Integración SAML',
    'saml_sp_entityid'          => 'ID de la entidad',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Certificado público',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Mapeo de Atributos - Nombre de Usuario',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'setting'                   => 'Configuración',
    'settings'                  => 'Configuraciones',
    'show_alerts_in_menu'       => 'Mostrar alertas en el menú superior',
    'show_archived_in_list'     => 'Activos archivados',
    'show_archived_in_list_text'     => 'Mostrar activos archivados en la lista de "todos los activos"',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Mostrar imágenes en emails',
    'show_images_in_email_help'   => 'Desmarca esta casilla si tu instalación de Snipe-IT está detrás de una red privada o VPN y los usuarios fuera de la red no pueden cargar las imágenes servidas desde este servidor en sus correos electrónicos.',
    'site_name'                 => 'Nombre del Sitio',
    'slack_botname'             => 'Nombre de bot en Slack',
    'slack_channel'             => 'Canal en Slack',
    'slack_endpoint'            => 'Terminal en Slack',
    'slack_integration'         => 'Configuración Slack',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Una vez que haya guardado su información de Slack, aparecerá un botón de prueba.',
    'slack_test_help'           => 'Pruebe si su integración de Slack está configurada correctamente. Debe Guardar Primero su configuracion Slack Actualizada.',
    'snipe_version'  			=> 'Version de Snipe-IT',
    'support_footer'            => 'Enlaces de Soporte de Pie de Página ',
    'support_footer_help'       => 'Especifica quién ve los links a la información de Soporte Snipe-IT y el Manual de Usuario',
    'version_footer'            => 'Versión en pie de página ',
    'version_footer_help'       => 'Especifica quién ve la versión y el número de compilación de Snipe-IT.',
    'system'                    => 'Información de Sistema',
    'update'                    => 'Actualizar Configuraciones',
    'value'                     => 'Valor',
    'brand'                     => 'Marca',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Acerca de las Configuraciones',
    'about_settings_text'       => 'Estas configuraciones te dejan personalizar ciertos aspectos de tu instalación.',
    'labels_per_page'           => 'Etiquetas por página',
    'label_dimensions'          => 'Dimensiones de las etiquetas (pulgadas)',
    'next_auto_tag_base'        => 'Próximo auto-incremento',
    'page_padding'              => 'Márgenes de página (pulgadas)',
    'privacy_policy_link'       => 'Enlace a la Política de Privacidad',
    'privacy_policy'            => 'Política de Privacidad',
    'privacy_policy_link_help'  => 'Si incluye una URL aquí, un enlace a su Política de Privacidad será incluido al pie de la aplicación y en cualquier correo electrónico que envíe el sistema, de conformidad con la ley GDPR. ',
    'purge'                     => 'Purgar Registros Eliminados',
    'labels_display_bgutter'    => 'Borde inferior de la etiqueta',
    'labels_display_sgutter'    => 'Borde lateral de la etiqueta',
    'labels_fontsize'           => 'Tamaño de fuente de la etiqueta',
    'labels_pagewidth'          => 'Ancho de la hoja de etiqueta',
    'labels_pageheight'         => 'Altura de la hoja de etiqueta',
    'label_gutters'        => 'Espaciado de etiquetas (pulgadas)',
    'page_dimensions'        => 'Dimensiones de la página (pulgadas)',
    'label_fields'          => 'Campos visibles de la etiqueta',
    'inches'        => 'pulgadas',
    'width_w'        => 'an',
    'height_h'        => 'al',
    'show_url_in_emails'                => 'Enlace a Snipe-IT en correos electrónicos',
    'show_url_in_emails_help_text'      => 'Desmarca esta casilla si no deseas volver a enlazar a tu instalación Snipe-IT en los pie de página de tu correo electrónico. Útil si la mayoría de tus usuarios nunca inicia sesión. ',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Altura máxima de la miniatura',
    'thumbnail_max_h_help'   => 'Altura máxima en píxeles que las miniaturas pueden mostrar en la vista de lista. Mín 25, max 500.',
    'two_factor'        => 'Autenticación en dos pasos',
    'two_factor_secret'        => 'Código de verificación en dos pasos',
    'two_factor_enrollment'        => 'Inscripción de verificación en dos pasos',
    'two_factor_enabled_text'        => 'Activar la verificación en dos pasos',
    'two_factor_reset'        => 'Reiniciar Secreto de Verificación en dos Pasos',
    'two_factor_reset_help'        => 'Esto forzará al usuario a inscribir sus dispositivos con el Autenticador de Google nuevamente. Esto puede ser útil si su dispositivo inscrito actualmente se pierde o es robado. ',
    'two_factor_reset_success'          => 'Verificación de dos pasos del dispositivo reiniciado exitosamente',
    'two_factor_reset_error'          => 'La verificación de dos pasos del dispositivo ha fallado',
    'two_factor_enabled_warning'        => 'Habilitar la verificación de dos factores si no está activado actualmente de inmediato te forzará a autenticarte con un dispositivo inscrito en Autenticación de Google. Tendrás la habilidad de inscribir tu dispositivo si uno no está actualmente inscrito.',
    'two_factor_enabled_help'        => 'Esto activará la autenticación de la verificación de dos factores usando el Autenticador de Google.',
    'two_factor_optional'        => 'Selectivo (Usuarios pueden habilitar o deshabilitar si está permitido)',
    'two_factor_required'        => 'Requerido para todos los usuarios',
    'two_factor_disabled'        => 'Desactivado',
    'two_factor_enter_code'	=> 'Ingrese Código de Verificación en dos pasos',
    'two_factor_config_complete'	=> 'Enviar Código',
    'two_factor_enabled_edit_not_allowed' => 'Tu administrador no te permite editar esta configuración.',
    'two_factor_enrollment_text'	=> "La autenticación de dos pasos es necesaria, sin embargo, tu dispositivo no ha sido inscrito aún. Abre tu aplicación de Autenticador de Google y escanea el código QR abajo para registrar tu dispositivo. Una vez hayas registrado tu dispositivo, introduce el código abajo",
    'require_accept_signature'      => 'Requerir Firma',
    'require_accept_signature_help_text'      => 'Habilitar esta función requerirá a los usuarios firmar físicamente al aceptar un activo.',
    'left'        => 'izquierda',
    'right'        => 'derecha',
    'top'        => 'arriba',
    'bottom'        => 'abajo',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'unique_serial'                => 'Números de serie únicos',
    'unique_serial_help_text'                => 'Al marcar esta casilla se forzarán números de serie únicos a los activos',
    'zerofill_count'        => 'Longitud de las etiquetas de activos, incluyendo relleno de ceros',
    'username_format_help'   => 'Esta configuración sólo será utilizada por el proceso de importación si no se proporciona un nombre de usuario y tenemos que generar un nombre de usuario para usted.',
);
