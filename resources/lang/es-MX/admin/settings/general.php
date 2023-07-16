<?php

return array(
    'ad'				        => 'Directorio Activo',
    'ad_domain'				    => 'Dominio del Directorio Activo',
    'ad_domain_help'			=> 'Esto es a veces el mismo que su correo electrónico de dominio, pero no siempre.',
    'ad_append_domain_label'    => 'Añadir nombre de dominio',
    'ad_append_domain'          => 'Asignar nombre de dominio al campo del nombre de usuario',
    'ad_append_domain_help'     => 'No se requiere que el usuario escriba "username@dominio.empresa", ellos podrán, simplemente digitar su nombre de usuario "username".' ,
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'If you would like to send a copy of checkin/checkout emails that are sent to users to an additional email account, enter it here. Otherwise leave this field blank.',
    'is_ad'				        => 'Este es un servidor de Directorio Activo',
    'alert_email'				=> 'Enviar alertas a',
    'alerts_enabled'			=> 'Alertas habilitadas',
    'alert_interval'			=> 'Limite de alertas de expiración (en días)',
    'alert_inv_threshold'		=> 'Umbral de alerta del inventario',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> 'IDs de Recurso',
    'audit_interval'            => 'Intervalo de auditoría',
    'audit_interval_help'       => 'Si tiene que auditar físicamente sus activos periódicamente, ingrese el intervalo en meses.',
    'audit_warning_days'        => 'Umbral de advertencia de auditoría',
    'audit_warning_days_help'   => '¿Con cuántos días de antelación debemos advertirle cuándo se deben auditar los activos?',
    'auto_increment_assets'		=> 'Generar IDs de equipo autoincrementales',
    'auto_increment_prefix'		=> 'Prefijo (opcional)',
    'auto_incrementing_help'    => 'Activa la generación automática de IDs de equipo antes de configurar esto',
    'backups'					=> 'Copias de seguridad',
    'barcode_settings'			=> 'Configuración de Código de Barras',
    'confirm_purge'			    => 'Confirmar la purga',
    'confirm_purge_help'		=> 'Introduzca el texto "DELETE" en el cuadro de abajo para purgar sus registros borrados. Esta acción no se puede deshacer y borrará PERMANENTAMENTE todos los elementos y usuarios eliminados. (Se recomienda hacer una copia de seguridad previamente, para estar seguro.)',
    'custom_css'				=> 'CSS Personalizado',
    'custom_css_help'			=> 'Ingrese cualquier CSS personalizado que desee utilizar. No incluya tags como: &lt;style&gt;&lt;/style&gt.',
    'custom_forgot_pass_url'	=> 'Reestablecer URL de Contraseña Personalizada',
    'custom_forgot_pass_url_help'	=> 'Esto remplaza la URL incorporada para las contraseñas olvidadas en la pantalla de inicio, útil para dirigir a las personas a una funcionalidad de restablecimiento de contraseña LDAP interna o alojada. Esto efectivamente desactivará la funcionalidad local de olvido de contraseña.',
    'dashboard_message'			=> 'Mensajes del Panel',
    'dashboard_message_help'	=> 'Este texto aparecerá en el panel para cualquiera que tenga permiso de ver el Panel.',
    'default_currency'  		=> 'Moneda Predeterminada',
    'default_eula_text'			=> 'EULA por defecto',
    'default_language'			=> 'Idioma predeterminado',
    'default_eula_help_text'	=> 'También puede asociar EULAs personalizadas para categorías especificas de equipos.',
    'display_asset_name'        => 'Mostrar Nombre Equipo',
    'display_checkout_date'     => 'Mostrar Fecha de Salida',
    'display_eol'               => 'Mostrar EOL',
    'display_qr'                => 'Mostrar Códigos QR',
    'display_alt_barcode'		=> 'Mostrar códigos de barras en 1D',
    'email_logo'                => 'Logo de Email',
    'barcode_type'				=> 'Tipo de códigos de barras 2D',
    'alt_barcode_type'			=> 'Tipo de códigos de barras 1D',
    'email_logo_size'       => 'Los logotipos cuadrados se ven mejor en correo electrónico. ',
    'eula_settings'				=> 'Configuración EULA',
    'eula_markdown'				=> 'Este EULS permite <a href="https://help.github.com/articles/github-flavored-markdown/">makrdown estilo Github</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Los tipos de archivo aceptados son ico, png y gif. Otros formatos de imagen pueden no funcionar en todos los navegadores.',
    'favicon_size'          => 'Los favicons deben ser imágenes cuadradas, de 16x16 píxeles.',
    'footer_text'               => 'Texto Adicional de Pie de Página ',
    'footer_text_help'          => 'Este texto aparecerá en el lado derecho del pie de página. Los enlaces son permitidos usando <a href="https://help.github.com/articles/github-flavored-markdown/">el formato flavored de GitHub</a>. Saltos de línea, cabeceras, imágenes, etc, pueden resultar impredecibles.',
    'general_settings'			=> 'Configuración General',
    'generate_backup'			=> 'Generar Respaldo',
    'header_color'              => 'Color de encabezado',
    'info'                      => 'Estos parámetros permirten personalizar ciertos aspectos de la aplicación.',
    'label_logo'                => 'Logo de etiqueta',
    'label_logo_size'           => 'Los logos cuadrados se ven mejor - se mostrarán en la parte superior derecha de cada etiqueta de activo. ',
    'laravel'                   => 'Versión de Laravel',
    'ldap_enabled'              => 'LDAP activado',
    'ldap_integration'          => 'Integración LDAP',
    'ldap_settings'             => 'Ajustes LDAP',
    'ldap_login_test_help'      => 'Introduce un nombre de usuario LDAP válido y una contraseña de la DN base que especificaste anteriormente para probar si tu inicio de sesión LDAP está configurado correctamente. DEBES GUARDAR TUS CONFIGURACIONES LDAP ACTUALIZADAS PRIMERO.',
    'ldap_login_sync_help'      => 'Esto sólo prueba que LDAP puede sincronizarse correctamente. Si tu solicitud de Autenticación LDAP no es correcta, los usuarios aún no podrían iniciar sesión. DEBES GUARDAR TUS CONFIGURACIONES LDAP ACTUALIZADAS PRIMERO.',
    'ldap_server'               => 'Servidor LDAP',
    'ldap_server_help'          => 'Esto debería empezar con ldap:// (sin codificar o TLS) o ldaps:// (para SSL)',
    'ldap_server_cert'			=> 'Certificado de validación SSL LDAP',
    'ldap_server_cert_ignore'	=> 'Permitir certificados SSL inválidos',
    'ldap_server_cert_help'		=> 'Selecciona este campo si estás usando un certificado SSL auto firmado y quieres aceptar un certificado SSL inválido.',
    'ldap_tls'                  => 'Usar TLS',
    'ldap_tls_help'             => 'Esto se debe seleccionar si se está ejecutando STARTTLS en el servidor LDAP. ',
    'ldap_uname'                => 'Enlazar usuario LDAP',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'Enlazar contraseña LDAP',
    'ldap_basedn'               => 'Enlazar base DN',
    'ldap_filter'               => 'Filtro LDAP',
    'ldap_pw_sync'              => 'Sincronización de Contraseña LDAP',
    'ldap_pw_sync_help'         => 'Desmarca esta casilla si no quieres mantener las contraseñas LDAP sincronizadas con las contraseñas locales. Desactivar esto significa que tus usuarios no podrán acceder si tu servidor LDAP no está disponible por algún motivo.',
    'ldap_username_field'       => 'Campo de usuario',
    'ldap_lname_field'          => 'Apellido',
    'ldap_fname_field'          => 'Nombre LDAP',
    'ldap_auth_filter_query'    => 'Consulta de autentificación LDAP',
    'ldap_version'              => 'Versión LDAP',
    'ldap_active_flag'          => 'Flag activo LDAP',
    'ldap_activated_flag_help'  => 'This flag is used to determine whether a user can login to Snipe-IT and does not affect the ability to check items in or out to them.',
    'ldap_emp_num'              => 'Número de empleado LDAP',
    'ldap_email'                => 'Email LDAP',
    'license'                  => 'Licencia de Software',
    'load_remote_text'          => 'Scripts remotos',
    'load_remote_help_text'		=> 'Esta instalación de Snipe-IT puede cargar scripts desde fuera.',
    'login_note'                => 'Nota de inicio de sesión',
    'login_note_help'           => 'Opcionalmente incluya algunas oraciones en su pantalla de inicio de sesión, por ejemplo para ayudar a las personas que han encontrado un dispositivo perdido o robado. Este campo acepta <a href="https://help.github.com/articles/github-flavored-markdown/">Github con sabor markdown</a>',
    'login_remote_user_text'    => 'Opciones de inicio de sesión de usuario remoto',
    'login_remote_user_enabled_text' => 'Habilitar inicio de sesión con encabezado de usuario remoto',
    'login_remote_user_enabled_help' => 'Esta opción habilita la Autenticación mediante el encabezado REMOTE_USER de acuerdo con la "Interfaz de puerta de enlace común (rfc3875)"',
    'login_common_disabled_text' => 'Deshabilitar otros mecanismos de autenticación',
    'login_common_disabled_help' => 'Esta opción desactiva otros mecanismos de autenticación. Simplemente habilite esta opción si está seguro de que su inicio de sesión REMOTE_USER ya está funcionando',
    'login_remote_user_custom_logout_url_text' => 'URL de cierre de sesión personalizado',
    'login_remote_user_custom_logout_url_help' => 'Sí se especifica un URL, los usuarios serán redireccionados a este URL una vez que cierren sesión en Snipe-TI. Esto es útil para cerrar sesiones de usuario de su Authentication Provider de forma correcta.',
    'login_remote_user_header_name_text' => 'Cabecera de nombre de usuario personalizado',
    'login_remote_user_header_name_help' => 'Usar la cabecera especificada en lugar de REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Usar en Impresión',
    'logo_print_assets_help'    => 'Usar marca en la lista imprimible de equipos',
    'full_multiple_companies_support_help_text' => 'Usuarios restringidos (incluidos administradores) asignados a compañías de sus bienes de compañía.',
    'full_multiple_companies_support_text' => 'Soporte completo múltiple de compañías',
    'show_in_model_list'   => 'Mostrar en Desplegado de Modelos',
    'optional'					=> 'opcional',
    'per_page'                  => 'Resultados por página',
    'php'                       => 'Versión de PHP',
    'php_gd_info'               => 'Debes instalar php-gd para mostrar Códigos QR, ver instrucciones de instalación en <a href="http://www.php.net/manual/en/image.installation.php"></a>.',
    'php_gd_warning'            => 'PHP Image Processing y GD plugin NO instalados.',
    'pwd_secure_complexity'     => 'Complejidad de la contraseña',
    'pwd_secure_complexity_help' => 'Seleccione las reglas de complejidad de las contraseñas que desee aplicar.',
    'pwd_secure_min'            => 'Caracteres mínimos de contraseña',
    'pwd_secure_min_help'       => 'El valor mínimo permitido es 8',
    'pwd_secure_uncommon'       => 'Evitar contraseñas comunes',
    'pwd_secure_uncommon_help'  => 'Esto impedirá que los usuarios usen contraseñas comunes de las 10,000 contraseñas principales que se notifican en las infracciones.',
    'qr_help'                   => 'Activa Códigos QR antes para poder ver esto',
    'qr_text'                   => 'Texto Código QR',
    'saml_enabled'              => 'SAML activado',
    'saml_integration'          => 'Integración SAML',
    'saml_sp_entityid'          => 'ID de la entidad',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'URL Servicio individual de cierre de sesión (SLS)',
    'saml_sp_x509cert'          => 'Certificado público',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'Metadatos SAML IdP',
    'saml_idp_metadata_help'    => 'Puede especificar los metadatos IdP usando un archivo URL o XML.',
    'saml_attr_mapping_username' => 'Mapeo de Atributos - Nombre de Usuario',
    'saml_attr_mapping_username_help' => 'NameID se utilizará si el mapeo de atributos no está especificado o no es válido.',
    'saml_forcelogin_label'     => 'Forzar inicio de sesión SAML',
    'saml_forcelogin'           => 'Hacer SAML el inicio de sesión principal',
    'saml_forcelogin_help'      => 'Puedes usar \'/login?nosaml\' para llegar a la página de inicio de sesión normal.',
    'saml_slo_label'            => 'Cerrar sesión única SAML',
    'saml_slo'                  => 'Enviar una solicitud de salida a IdP al cerrar sesión',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'Puedes especificar ajustes adicionales a la biblioteca onelogin/php-saml. Úsalo bajo tu propio riesgo.',
    'setting'                   => 'Parámetro',
    'settings'                  => 'Configuración',
    'show_alerts_in_menu'       => 'Mostrar alertas en el menú superior',
    'show_archived_in_list'     => 'Activos archivados',
    'show_archived_in_list_text'     => 'Mostrar activos archivados en el listado de "todos los archivos"',
    'show_assigned_assets'      => 'Mostrar activos asignados a activos',
    'show_assigned_assets_help' => 'Mostrar los activos que fueron asignados a otros activos en Ver Usuarios -> Activos, Ver Usuarios -> Información -> Imprimir todo lo asignado en la cuenta -> Ver activos asignados.',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Nombre del sitio',
    'slack_botname'             => 'Nombre de bot en Slack',
    'slack_channel'             => 'Canal en Slack',
    'slack_endpoint'            => 'Terminal en Slack',
    'slack_integration'         => 'Configuración Slack',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Una vez que haya guardado su información de Slack, aparecerá un botón de prueba.',
    'slack_test_help'           => 'Pruebe si su integración de Slack está configurada correctamente. Debe Guardar Primero su configuracion Slack Actualizada.',
    'snipe_version'  			=> 'Version de Snipe-IT',
    'support_footer'            => 'Enlaces de Soporte de Pie de Página ',
    'support_footer_help'       => 'Especifica quien ve los enlaces de información de Soporte y Manual de Usuarios de Snipe-IT',
    'version_footer'            => 'Versión en pie de página ',
    'version_footer_help'       => 'Especificar quién ve la versión Snipe-IT y el número de compilación.',
    'system'                    => 'Información del Sistema',
    'update'                    => 'Actualizar Parámetros',
    'value'                     => 'Valor',
    'brand'                     => 'Marca',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Acerca de Ajustes',
    'about_settings_text'       => 'Estos ajustes te permiten personalizar ciertos aspectos de tu instalación.',
    'labels_per_page'           => 'Etiquetas por pàgina',
    'label_dimensions'          => 'Dimensiones de las etiquetas (pulgadas)',
    'next_auto_tag_base'        => 'Siguiente incremento automático',
    'page_padding'              => 'Margenès de pàgina (pulgadas)',
    'privacy_policy_link'       => 'Enlace a la Política de Privacidad',
    'privacy_policy'            => 'Política de Privacidad',
    'privacy_policy_link_help'  => 'Si se incluye una URL aquí, un enlace a tu Política de Privacidad se incluirá al pie de la aplicación y en cualquier correo electrónico que el sistema envíe, de conformidad con la ley GDPR. ',
    'purge'                     => 'Purgar registros eliminados',
    'labels_display_bgutter'    => 'Borde inferior de la Etiqueta',
    'labels_display_sgutter'    => 'Borde lateral de la Etiqueta',
    'labels_fontsize'           => 'Tamaño de fuente de la etiqueta',
    'labels_pagewidth'          => 'Ancho de la hoja de etiqueta',
    'labels_pageheight'         => 'Altura de la hoja de etiqueta',
    'label_gutters'        => 'Espaciamiento de etiqueta (pulgadas)',
    'page_dimensions'        => 'Dimensiones de la página (pulgadas)',
    'label_fields'          => 'Campos visibles de la etiqueta',
    'inches'        => 'pulgadas',
    'width_w'        => 'an',
    'height_h'        => 'al',
    'show_url_in_emails'                => 'Enlace a Snipe-IT en correos electrónicos',
    'show_url_in_emails_help_text'      => 'Desmarca esta casilla si no deseas volver a vincular tu instalación de Snipe-IT en tus pies de página de correo electrónico. Útil si la mayoría de sus usuarios nunca inician sesión.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Altura máxima de la miniatura',
    'thumbnail_max_h_help'   => 'Altura máxima en píxeles que las miniaturas pueden mostrar en la vista de listado. Mín. 25, máximo 500.',
    'two_factor'        => 'Autenticación en dos pasos',
    'two_factor_secret'        => 'Código de verificación en dos pasos',
    'two_factor_enrollment'        => 'Enrolamiento en verificación en dos pasos',
    'two_factor_enabled_text'        => 'Activar la verificación en dos pasos',
    'two_factor_reset'        => 'Reiniciar Secreto de verificación en dos pasos',
    'two_factor_reset_help'        => 'Esto forzará al usuario a inscribirse otra vez su dispositivo con Google Authenticator. Esto puede ser útil si la pérdida o robo de su dispositivo actualmente inscrito. ',
    'two_factor_reset_success'          => 'Verificación en dos pasos de dispositivo reiniciado exitosamente',
    'two_factor_reset_error'          => 'Falló la Verificación en dos pasos del dispositivo',
    'two_factor_enabled_warning'        => 'Permitiendo dos factores si no está activado inmediatamente obliga a autenticar con un dispositivo de autenticación de Google inscritos. Usted tendrá la posibilidad de inscribirse el dispositivo si uno no está inscrito actualmente.',
    'two_factor_enabled_help'        => 'Esto encenderá la autenticación de dos factores usando Google Authenticator.',
    'two_factor_optional'        => 'Selectiva (los usuarios pueden activar o desactivar si está permitido)',
    'two_factor_required'        => 'Requerido para todos los usuarios',
    'two_factor_disabled'        => 'Desactivado',
    'two_factor_enter_code'	=> 'Ingrese código de verificación en dos pasos',
    'two_factor_config_complete'	=> 'Enviar código',
    'two_factor_enabled_edit_not_allowed' => 'El administrador no permite modificar esta configuración.',
    'two_factor_enrollment_text'	=> "Autenticación de doble factor se requiere, sin embargo el dispositivo no ha inscrito todavía. Abra la aplicación Google Authenticator y escanear el código QR a continuación para inscribir a su dispositivo. Una vez que haya inscrito su dispositivo, introduzca el código de abajo",
    'require_accept_signature'      => 'Requerir Firma',
    'require_accept_signature_help_text'      => 'Para activar esta función se requiere que los usuarios firmen fisicamente aceptando el activo.',
    'left'        => 'izquierda',
    'right'        => 'derecha',
    'top'        => 'arriba',
    'bottom'        => 'fondo',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'unique_serial'                => 'Números de serie únicos',
    'unique_serial_help_text'                => 'Al marcar esta casilla se aplicará una restricción única en los seriales de los equipos',
    'zerofill_count'        => 'Longitud de etiquetas de activos, incluyendo relleno de ceros',
    'username_format_help'   => 'Esta configuración sólo será utilizada por el proceso de importación si no se proporciona un nombre de usuario y tenemos que generar un nombre de usuario para usted.',
);
