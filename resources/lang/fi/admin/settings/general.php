<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory -toimialue',
    'ad_domain_help'			=> 'Tämä on joskus sama kuin sähköpostiosoitteesi loppuosa, mutta ei aina.',
    'ad_append_domain_label'    => 'Lisää toimialueen nimi loppuun',
    'ad_append_domain'          => 'Lisää toimialueen nimi käyttäjänimikentän loppuun',
    'ad_append_domain_help'     => 'Käyttäjätunnusta ei tarvitse kirjoittaa muodossa "käyttätunnus@domain.local", pelkkä "käyttäjätunnus" riittää.' ,
    'admin_cc_email'            => 'Kopio sähköpostiosoite',
    'admin_cc_email_help'       => 'Mikäli haluat lähettää erilliseen sähköpostiosoitteeseen kopion käyttäjälle lähetettävästä sähköposti-ilmoituksesta palautuksiin/luovutuksiin liittyen, syötä se tähän. Muussa tapauksessa jätä kenttä tyhjäksi.',
    'is_ad'				        => 'Käytössä on Active Directory -palvelin',
    'alert_email'				=> 'Lähetä ilmoitukset',
    'alerts_enabled'			=> 'Sähköposti hälytykset käytössä',
    'alert_interval'			=> 'Kynnys ilmoituksille vanhentuvista (päivinä)',
    'alert_inv_threshold'		=> 'Varaston hälytysraja',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> 'Laitetunnisteet',
    'audit_interval'            => 'Tarkastusväli',
    'audit_interval_help'       => 'Jos sinun on säännöllisesti tarkastettava laitteesi, anna aikaväli kuukausina.',
    'audit_warning_days'        => 'Tarkastuksen ennakkovaroitus',
    'audit_warning_days_help'   => 'Kuinka monta päivää etukäteen varoitamme, kun laitteet on tarkoitus tarkastaa?',
    'auto_increment_assets'		=> 'Luo automaattisesti kasvavat laitetunnisteet',
    'auto_increment_prefix'		=> 'Etuliite (valinnainen)',
    'auto_incrementing_help'    => 'Valitaksesi tämän, ota ensin käyttöön automaattisesti kasvavat laitetunnisteet',
    'backups'					=> 'Varmuuskopiot',
    'barcode_settings'			=> 'Viivakoodi asetukset',
    'confirm_purge'			    => 'Vahvista puhdistus',
    'confirm_purge_help'		=> 'Kirjoita alla olevaan kenttään teksti "DELETE" puhdistaaksesi poistetut tietueet. Tätä toimintoa ei voi kumota ja se poistaa kaikki "soft-deleted" poistetut kohteet ja käyttäjät. (Varmuuskopioi tiedot ensin, varmuuden vuoksi)',
    'custom_css'				=> 'Mukautettu CSS',
    'custom_css_help'			=> 'Anna haluamasi mukautettu CSS. Älä lisää &lt;style&gt;&lt;/style&gt; tunnisteita.',
    'custom_forgot_pass_url'	=> 'Mukautettu salasanan nollaus URL-osoite',
    'custom_forgot_pass_url_help'	=> 'Tämä korvaa sisäänrakennetun salasanan palautuspalvelun URL-osoitteen. Sen avulla voit ohjata käyttäjät organisaation sisäiseen tai isännöityyn LDAP-salasanan vaihtotoimintoon.',
    'dashboard_message'			=> 'Työpöydän viesti',
    'dashboard_message_help'	=> 'Tämä teksti esiintyy työpöydällä kaikille, joilla on oikeus tarkastella työpöytää.',
    'default_currency'  		=> 'Oletusvaluutta',
    'default_eula_text'			=> 'Yleiset käyttöehdot',
    'default_language'			=> 'Oletuskieli',
    'default_eula_help_text'	=> 'Voit myös liittää mukautettuja käyttöehtoja tiettyihin laitekategorioihin.',
    'display_asset_name'        => 'Näytä laitteen nimi',
    'display_checkout_date'     => 'Näytä luovutuspäivämäärä listauksessa',
    'display_eol'               => 'Näytä elinaika listauksessa',
    'display_qr'                => 'Näytä neliökoodit',
    'display_alt_barcode'		=> 'Näytä 1D viivakoodi',
    'email_logo'                => 'Sähköpostin logo',
    'barcode_type'				=> '2D viivakoodityyppi',
    'alt_barcode_type'			=> '1D viivakoodityyppi',
    'email_logo_size'       => 'Neliönmuotoiset logot näyttävät sähköpostissa parhailta. ',
    'eula_settings'				=> 'Käyttöehtojen asetukset',
    'eula_markdown'				=> 'Käyttäehdossa voi käyttää<a href="https://help.github.com/articles/github-flavored-markdown/">Github-merkintöjä</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Hyväksytyt tiedostotyypit ovat ico, png ja gif. Muut kuvamuodot eivät välttämättä toimi kaikissa selaimissa.',
    'favicon_size'          => 'Faviconien tulee olla neliömuotoisia, 16x16 pikseliä.',
    'footer_text'               => 'Lisäys alatunnisteen tekstiin ',
    'footer_text_help'          => 'Tämä teksti esiintyy oikeanpuoleisessa alatunnisteessa. Linkkejä voi lisätä käyttämällä <a href="https://help.github.com/articles/github-flavored-markdown/">Github merkintätapaa</a>. Rivinvaihdot, otsikot, kuvat, jne. voivat johtaa epätoivottuihin tuloksiin.',
    'general_settings'			=> 'Yleiset asetukset',
    'generate_backup'			=> 'Luo varmuuskopio',
    'header_color'              => 'Yläosion logo',
    'info'                      => 'Näiden asetusten avulla voit mukauttaa tiettyjä toimintoja.',
    'label_logo'                => 'Tunnisteen logo',
    'label_logo_size'           => 'Neliönmuotoiset logot näyttävät parhailta - näytetään oikeassa yläkulmassa jokaisen laitetunnisteen kohdalla. ',
    'laravel'                   => 'Laravel-versio',
    'ldap_enabled'              => 'LDAP käytössä',
    'ldap_integration'          => 'LDAP integraatio',
    'ldap_settings'             => 'LDAP-asetukset',
    'ldap_login_test_help'      => 'Syötä toimiva LDAP-käyttäjätunnus ja salasana määrittelemästäsi base DN: stä testataksesi LDAP-kirjautumisen toimivuutta. SINUN TULEE TALLENTAA UUDET LDAP ASETUKSET ENSIN.',
    'ldap_login_sync_help'      => 'Tämä testaa vain LDAP-synkronoinnin toimivuutta. Mikäli LDAP autentikointikysely on virheellinen, käyttäjät eivät voi kirjautua sisään. SINUN TULEE TALLENTAA UUDET ASETUKSET ENSIN.',
    'ldap_server'               => 'LDAP Palvelin',
    'ldap_server_help'          => 'Tämän pitäisi alkaa ldap: // (salaamaton tai TLS) tai ldaps: // (SSL)',
    'ldap_server_cert'			=> 'LDAP SSL varmenteen varmennus',
    'ldap_server_cert_ignore'	=> 'Salli virheelliset SSL Varmenteet',
    'ldap_server_cert_help'		=> 'Valitse tämä, jos käytät itse allekirjoitettua SSL-varmennetta ja haluat hyväksyä virheellisen SSL-varmenteen.',
    'ldap_tls'                  => 'Käytä TLS:ää',
    'ldap_tls_help'             => 'Merkitse tämä vain, jos käynnistät STARTTLS: n LDAP-palvelimella. ',
    'ldap_uname'                => 'LDAP-sidonta käyttäjätunnus',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'LDAP-sidonta salasana',
    'ldap_basedn'               => 'Kohdehaaran DN',
    'ldap_filter'               => 'LDAP suodatin',
    'ldap_pw_sync'              => 'LDAP salasanan synkronointi',
    'ldap_pw_sync_help'         => 'Poista valinta, jos et halua säilyttää LDAP-salasanoja synkronoituna paikallisiin salasanoihin. Tällöin käyttäjät eivät voi kirjautua sisään, jos LDAP-palvelin ei jostain syystä ole tavoitettavissa.',
    'ldap_username_field'       => 'Käyttäjätunnus kenttä',
    'ldap_lname_field'          => 'Sukunimi',
    'ldap_fname_field'          => 'LDAP etunimi',
    'ldap_auth_filter_query'    => 'LDAP todennuskysely',
    'ldap_version'              => 'LDAP versio',
    'ldap_active_flag'          => 'LDAP-aktiivinen lippu',
    'ldap_activated_flag_help'  => 'Tätä käytetään sen määrittämiseen, voiko käyttäjä kirjautua Snipe-IT: ään. Tällä ei ole vaikutusta luovutus ja palautus toimintoihin.',
    'ldap_emp_num'              => 'LDAP henkilönumero',
    'ldap_email'                => 'LDAP sähköposti',
    'license'                  => 'Ohjelmistolisenssi',
    'load_remote_text'          => 'Etäkriptit',
    'load_remote_help_text'		=> 'Tämä Snipe-IT-asennus voi ladata skriptejä ulkopuolelta.',
    'login_note'                => 'Kirjautumisviesti',
    'login_note_help'           => 'Voit lisätä muutamia lauseita kirjautumisruudulle, esimerkiksi neuvoaksesi heitä jotka ovat löytäneet kadonneen tai varastetun laitteen. Tässä kentässä voi käyttää <a href="https://help.github.com/articles/github-flavored-markdown/">Github-muotoiluja</a>',
    'login_remote_user_text'    => 'Etäkäyttäjän kirjautumisvaihtoehdot',
    'login_remote_user_enabled_text' => 'Salli kirjautuminen etäkäyttäjäkäyttäjän otsikolla',
    'login_remote_user_enabled_help' => 'Tämä vaihtoehto mahdollistaa autentikoinnin REMOTE_USER otsikolla "Common Gateway Interface (rfc3875)" määrityksen mukaisesti',
    'login_common_disabled_text' => 'Estä muut autentikointimenetelmät',
    'login_common_disabled_help' => 'Tämä vaihtoehto estää muut autentikointimenetelmät. Salli tämä vaihtoehto, jos olet varma REMOTE_USER kirjautumisen toimivuudesta',
    'login_remote_user_custom_logout_url_text' => 'Räätälöity uloskirjautumisen URL',
    'login_remote_user_custom_logout_url_help' => 'Jos URL on syötetty, käyttäjät ohjataan tähän URL-osoitteeseen uloskirjautumisen yhteydessä. Tämä on hyödyllinen esimerkiksi ulkoisen autentikointipalvelun käyttäjäistuntojen päättämisessä oikein.',
    'login_remote_user_header_name_text' => 'Mukautettu käyttäjänimen otsikko',
    'login_remote_user_header_name_help' => 'Käytä määritettyä headeria REMOTE_USERin sijaan',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Käytä tulostuksessa',
    'logo_print_assets_help'    => 'Käytä brändäystä tulostettavissa nimikelistoissa ',
    'full_multiple_companies_support_help_text' => 'Käyttäjien (myös ylläpitäjien) rajoittaminen vain yritykselle kirjattuihin laitteisiin.',
    'full_multiple_companies_support_text' => 'Täysi monien yritysten tuki',
    'show_in_model_list'   => 'Näytä mallinvalinta-listoissa',
    'optional'					=> 'valinnainen',
    'per_page'                  => 'Tuloksia per sivu',
    'php'                       => 'PHP versio',
    'php_gd_info'               => 'Sinun tulee asentaa php-gd paketti näyttääksesi QR-koodit, katso lisätietoja asennusohjeista.',
    'php_gd_warning'            => 'PHP Image Prosessing ja GD-lisäosia EI ole asennettuna.',
    'pwd_secure_complexity'     => 'Salasanan monimutkaisuus',
    'pwd_secure_complexity_help' => 'Valitse mikä tahansa salasanan monimutkaisuus sääntö, jonka haluat panna täytäntöön.',
    'pwd_secure_min'            => 'Salasanan minimimerkit',
    'pwd_secure_min_help'       => 'Pienin sallittu arvo on 8',
    'pwd_secure_uncommon'       => 'Estä yleisimmät salasanat',
    'pwd_secure_uncommon_help'  => 'Tämä estää käyttäjiä käyttämästä yleisimpiä 10 000 salasanaa, jotka on julkaistu tietovuodoissa.',
    'qr_help'                   => 'Ota ensin QR-koodit käyttöön valitaksesi tämän',
    'qr_text'                   => 'QR-koodin teksti',
    'saml_enabled'              => 'SAML käytössä',
    'saml_integration'          => 'SAML Integraatio',
    'saml_sp_entityid'          => 'Entiteetin ID',
    'saml_sp_acs_url'           => 'Vakuutuksen kuluttajapalvelu (ACS) URL',
    'saml_sp_sls_url'           => 'Kertauloskirjautumispalvelu (SLS) URL',
    'saml_sp_x509cert'          => 'Julkinen SSL-varmenne',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'Voit määritellä IdP metadatan käyttämällä URLia tai XML-tiedostoa.',
    'saml_attr_mapping_username' => 'Attribuuttien kohdennus - Käyttäjänimi',
    'saml_attr_mapping_username_help' => 'NameID:tä käytetään, jos attribuuttia on määrittelemätön tai virheellinen.',
    'saml_forcelogin_label'     => 'Pakoita SAML kirjautuminen',
    'saml_forcelogin'           => 'Tee SAML:sta ensisijainen kirjautumistapa',
    'saml_forcelogin_help'      => 'Voit käyttää osoitteessa \'/login?nosaml\' päästäksesi tavalliselle kirjautumissivulle.',
    'saml_slo_label'            => 'SAML kertauloskirjautuminen',
    'saml_slo'                  => 'Lähetä uloskirjautumispyyntö IdP:lle uloskirjauduttaessa',
    'saml_slo_help'             => 'Tämä johtaa siihen, että käyttäjä ohjataan aluksi IdP:hen uloskirjautuessa. Jätä valitsematta, jos IdP ei tue SP-aloitettua SAML SLO:ta.',
    'saml_custom_settings'      => 'SAML mukautetut asetukset',
    'saml_custom_settings_help' => 'Voit määrittää lisäasetuksia onelogin/php-saml kirjastoon. Käytä omalla vastuullasi.',
    'setting'                   => 'Asetus',
    'settings'                  => 'Asetukset',
    'show_alerts_in_menu'       => 'Näytä ilmoitukset ylävalikossa',
    'show_archived_in_list'     => 'Arkistoidut laitteet',
    'show_archived_in_list_text'     => 'Näytä arkistoidut laitteet "Kaikki laitteet" listauksessa',
    'show_assigned_assets'      => 'Näytä laitteille kohdistetut laitteet',
    'show_assigned_assets_help' => 'Näytä laitteet, jotka on liitetty muihin laitteisiin näkymissä Näytä käyttäjä -> Laitteet, Näytä käyttäjä -> Tiedot-> Tulosta kaikki luovutetut , sekä sivulla Käyttäjätili -> Näytä luovutetut laitteet.',
    'show_images_in_email'     => 'Näytä kuvia sähköposteissa',
    'show_images_in_email_help'   => 'Poista tämä valinta, jos Snipe-IT asennus on toteutettu VPN: n avulla tai suljetussa verkossa, koska sähköposteissa käytetyt kuvat eivät voi latautua näkyviin sähköposteissa.',
    'site_name'                 => 'Sivuston nimi',
    'slack_botname'             => 'Slack-botin nimi',
    'slack_channel'             => 'Slack-kanava',
    'slack_endpoint'            => 'Slack-yhdyspiste',
    'slack_integration'         => 'Slackin asetukset',
    'slack_integration_help'    => 'Slack-integraatio on valinnainen, mutta päätepiste ja kanava vaaditaan, jos haluat käyttää sitä. Määrittääksesi Slack-integraation, sinun täytyy ensin <a href=":slack_link" target="_new" rel="noopener">luoda saapuva webhook</a> Slack-tilillesi. Klikkaa <strong>Testaa Slack Integraatio</strong> -painiketta varmistaaksesi, että asetuksesi ovat oikein ennen tallentamista. ',
    'slack_integration_help_button'    => 'Kun olet tallentanut tiedot Slackista, testinappi ilmestyy.',
    'slack_test_help'           => 'Testaa, onko integraatio Slackiin määritelty oikein. SINUN TULEE TALLENTAA UUDET ASETUKSET ENSIN.',
    'snipe_version'  			=> 'Snipe-IT versio',
    'support_footer'            => 'Tuki-alatunnisteen linkit ',
    'support_footer_help'       => 'Määrittele, kuka voi nähdä linkit Snipe-IT tukipalvelun tietoihin ja käyttöohjeeseen',
    'version_footer'            => 'Versio alatunnisteessa ',
    'version_footer_help'       => 'Määrittele, kuka näkee Snipe-IT järjestelmän version ja käännöksen numeron.',
    'system'                    => 'Järjestelmän tiedot',
    'update'                    => 'Päivitä asetukset',
    'value'                     => 'Arvo',
    'brand'                     => 'Brändäys',
    'web_brand'                 => 'Web-brändäyksen tyyppi',
    'about_settings_title'      => 'Tietoa asetuksista',
    'about_settings_text'       => 'Näiden asetusten avulla voit mukauttaa tiettyjä toimintoja.',
    'labels_per_page'           => 'Tunnisteita sivua kohden',
    'label_dimensions'          => 'Tunnisteen mitat (tuumaa)',
    'next_auto_tag_base'        => 'Seuraava tunnistenumero',
    'page_padding'              => 'Sivun marginaalit (tuumaa)',
    'privacy_policy_link'       => 'Linkki tietosuojaselosteeseen',
    'privacy_policy'            => 'Tietosuojaseloste',
    'privacy_policy_link_help'  => 'Jos osoite on määritelty, GDPR-vaatimusten mukaisesti kaikkien sähköpostien alatunnisteisiin lisätään linkki tietosuojaselosteeseen. ',
    'purge'                     => 'Puhdista poistetut tietueet',
    'labels_display_bgutter'    => 'Tunnisteen alamarginaali',
    'labels_display_sgutter'    => 'Tunnisteen sivumarginaali',
    'labels_fontsize'           => 'Tunnisteen fontin koko',
    'labels_pagewidth'          => 'Tunniste-arkin leveys',
    'labels_pageheight'         => 'Tunniste-arkin korkeus',
    'label_gutters'        => 'Tunnisteiden etäisyys (tuumaa)',
    'page_dimensions'        => 'Sivun mitat (tuumaa)',
    'label_fields'          => 'Tunnisteen kentät',
    'inches'        => 'tuumaa',
    'width_w'        => 'l',
    'height_h'        => 'k',
    'show_url_in_emails'                => 'Linkki Snipe-IT: hen sähköposteissa',
    'show_url_in_emails_help_text'      => 'Poista tämä valintaruutu, jos et halua linkata takaisin Snipe-IT-asennukseen sähköpostin alatunnisteisiin. Hyödyllinen, jos useimmat käyttäjät eivät koskaan kirjaudu sisään.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Pikkukuvan suurin korkeus',
    'thumbnail_max_h_help'   => 'Enimmäiskorkeus kuvapisteissä pikkukuville listanäkymässä. Min 25, max 500.',
    'two_factor'        => 'Kaksivaiheinen todentaminen',
    'two_factor_secret'        => 'MFA koodi',
    'two_factor_enrollment'        => 'Kaksivaiheisen tunnistautumisen käyttöönotto',
    'two_factor_enabled_text'        => 'Ota käyttöön kaksivaiheinen tunnistautuminen',
    'two_factor_reset'        => 'Nollaa MFA salaisuus',
    'two_factor_reset_help'        => 'Tämä pakottaa käyttäjän rekisteröimään laitteen uudelleen Google Authenticator -palveluun. Tämä voi olla hyödyllistä, jos heille tällä hetkellä rekisteröidyt laitteet menetetään tai varastetaan. ',
    'two_factor_reset_success'          => 'MFA laite onnistuneesti nollattu',
    'two_factor_reset_error'          => 'MFA laitteen nollaus epäonnistui',
    'two_factor_enabled_warning'        => 'Kaksivaiheisen tunnistautumisen ottaminen käyttöön,, pakottaa sinut autentikoimaan Google Auth - laitteella. Voit lisätä sellaisen, jos sellaista ei ole vielä käytössä.',
    'two_factor_enabled_help'        => 'Ottaa käyttöön kaksivaiheisen todennuksen käyttämällä Google Authenticatoria.',
    'two_factor_optional'        => 'Valikoiva (Käyttäjät voivat ottaa käyttöön tai poistaa käytöstä)',
    'two_factor_required'        => 'Vaadittu kaikille käyttäjille',
    'two_factor_disabled'        => 'Ei käytössä',
    'two_factor_enter_code'	=> 'Syötä MFA koodi',
    'two_factor_config_complete'	=> 'Lähetä koodi',
    'two_factor_enabled_edit_not_allowed' => 'Järjestelmänvalvoja ei salli sinun muokata tätä asetusta.',
    'two_factor_enrollment_text'	=> "Kaksivaiheinen tunnistautuminen vaaditaan, mutta et ole rekisteröinyt itsellesi laitetta. Avaa Google Authenticator -sovellus ja skannaa alla oleva QR-koodi rekisteröidäksesi laitteesi. Kun olet rekisteröinyt laitteesi, kirjoita koodi",
    'require_accept_signature'      => 'Vaadi allekirjoitus',
    'require_accept_signature_help_text'      => 'Tämän ominaisuuden ottaminen käyttöön edellyttää käyttäjiltä allekirjoitusta hyväksymisen yhteydessä.',
    'left'        => 'vasen',
    'right'        => 'oikea',
    'top'        => 'ylä',
    'bottom'        => 'ala',
    'vertical'        => 'pystysuora',
    'horizontal'        => 'vaakasuora',
    'unique_serial'                => 'Yksilölliset sarjanumerot',
    'unique_serial_help_text'                => 'Vaadi laitteilta yksilölliset sarjanumerot',
    'zerofill_count'        => 'Laitetunnisteen pituus, mukaan lukien nollat',
    'username_format_help'   => 'Käytetään tietoja tuodessa, jos käyttäjänimeä ei ole annettu ja nimitietojen perusteella on luotava käyttäjälle käyttäjätunnus.',
);
