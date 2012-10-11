<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * Core translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 * 
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/contao/language/nl/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][0] = 'Titel van de website';
$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][1] = 'Geef de titel van uw website op.';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][0] = 'E-mail adres van de systeembeheerder';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][1] = 'Automatisch gegenereerde berichten zoals aanmeldingen of bevestigingen worden naar dit adres verstuurd.';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][0] = 'Datumnotatie';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][1] = 'Geef een datumnotatie op zoals gebruikt door PHP functie date().';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][0] = 'Tijdnotatie';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][1] = 'Geef een tijdnotatie op zoals gebruikt door PHP functie date().';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][0] = 'Datum- en tijdnotatie';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][1] = 'Geef een datum- en tijdnotatie op zoals gebruikt door PHP functie date() .';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][0] = 'Tijdzone';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][1] = 'Selecteer uw tijdzone.';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][0] = 'Relatief pad naar Contao directory';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][1] = 'Het relatieve pad naar de Contao directory wordt gewoonlijk automatisch aangemaakt door het install tool.';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][0] = 'Karakterset';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][1] = 'Selecteer de karakterset. Het wordt aangeraden om UTF-8 te gebruiken om er zeker van te zijn dat alle speciale karakters correct worden weergegeven.';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][0] = 'Eigen lay-out secties';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][1] = 'Hier kunt u een door komma\'s gescheiden lijst van eigen lay-out secties opgeven.';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][0] = 'Uitschakelen van de commando planner';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][1] = 'Schakel de periodieke commando scheduler uit en voer het cron.php script uit door een echte cron job (deze dient u handmatig in te stellen).';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][0] = 'Verkleinen opmaak';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][1] = 'Verklein de HTML-opmaak voordat deze verstuurd wordt naar de browser (vereist PHP tidy extensie).';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][0] = 'Comprimeer scripts';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][1] = 'Maak een gecomprimeerde versie van de gecombineerde CSS en JavaScript-bestanden. Vereist aanpassingen van het .htaccess-bestand.';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][0] = 'Aantal resultaten per pagina';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][1] = 'Het aantal resultaten per pagina wordt gebruikt om query resultaten te limiteren in de backend. Dit geldt niet voor de zoekmachine.';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][0] = 'Maximaal aantal items per pagina';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][1] = 'De algemene limiet wordt gebruikt als de gebruiker de optie "show all records" kiest.';
$GLOBALS['TL_LANG']['tl_settings']['fileSyncExclude'][0] = 'Mappen uitsluiten van synchronisatie';
$GLOBALS['TL_LANG']['tl_settings']['fileSyncExclude'][1] = 'Hier kunt u een door komma\'s gescheiden lijst met mappen opgeven welke zijn vrijgesteld van bestandsynchronisatie (bijvoorbeeld <em> attachments, music_academy </ em>). Merk op dat uitgesloten bronnen niet kunnen worden gebruikt in bv. beeld of download elementen!';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][0] = 'Elementen niet samenvouwen';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][1] = 'Bestands elementen en andere resources in de backend niet samenvouwen.';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][0] = 'URL achtervoegsel';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][1] = 'Een URL achtervoegsel is een bestandsextensie die wordt toegevoegd aan de URL string die statische documenten simuleert.';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][0] = 'Cache mode';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][1] = 'Hier kunt de cache mode selecteren.';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][0] = 'Anonimiseren IP-adressen';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][1] = 'Anonimiseer elk IP adres dat is opgeslagen in de database, behalve in de <em>tl_session</em> tabel (het IP-adres is gebonden aan de sessie om veiligheidsredenen).';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][0] = 'Anonimiseren Google Analytics';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][1] = 'Anonimiseer de IP adressen die verzonden worden naar Google Analytics.';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][0] = 'URLs herschrijven';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][1] = 'Met deze optie kan Contao statische URLs zonder "index.php" genereren (bv. <em>alias.html</em> i.p.v. <em>index.php/alias.html</em>). Deze optie maakt gebruik van de Apache module <em>mod_rewrite</em>!';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][0] = 'Voeg taal toe aan de URL';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][1] = 'Voeg taal reeks als eerste URL-parameter (bv. <em>http://domain.tld/en/</em>).';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][0] = 'Redirect geen lege URLs';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][1] = 'In geval van een lege URL toon de website in plaats van door te verwijzen naar de taal root pagina (niet aanbevolen).';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][0] = 'Gebruik de auto_item parameter';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][1] = 'Gebruik geen <em>items/</em> of <em>events/</em> fragmenten in de URL, maar alleen de <em>auto_item</em> waarde.';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][0] = 'Deactiveer pagina alias';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][1] = 'Gebruik het nummer ID van een pagina in plaats van zijn alias.';
$GLOBALS['TL_LANG']['tl_settings']['folderUrl'][0] = 'Activeer map URLs';
$GLOBALS['TL_LANG']['tl_settings']['folderUrl'][1] = 'Hier kunt u de map-stijl pagina aliassen mogelijk maken zoals <em> docs / install / download.html </ em> in plaats van <em> docs-install-download.xhtml </ em>.';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][0] = 'Toegestane HTML tags';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][1] = 'Geef een lijst op van toegestane HTML tags. Alle andere tags zullen verwijderd worden uit de gebruikersinvoer.';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][0] = 'Debug mode';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][1] = 'Als u deze optie kiest wordt bepaalde runtime informatie (bv. database queries) afgedrukt op het scherm.';
$GLOBALS['TL_LANG']['tl_settings']['bypassCache'][0] = 'Interne cache omzeilen';
$GLOBALS['TL_LANG']['tl_settings']['bypassCache'][1] = 'Maak geen gebruik van de interne cache (b.v. nuttig bij ontwikkelen van extensies).';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][0] = 'Uitschakelen request tokens';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][1] = 'Request token niet controleren wanneer een formulier wordt ingediend. Let op: potentieel veiligheidsrisico!';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][0] = 'Wachttijd bij een tijdelijk inactief account';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][1] = 'Geef op hoelang een gebruiker moet wachten vooraleer hij opnieuw kan inloggen nadat een wachtwoord drie maal achter elkaar verkeerd is ingegeven.';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][0] = 'Foutmeldingen weergeven';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][1] = 'Als u deze optie kiest worden foutmeldingen op het scherm weergegeven. (niet aanbevolen voor operationele sites).';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][0] = 'Log foutmeldingen';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][1] = 'Schrijf foutmeldingen naar het foutmeldings bestand (<em>system/logs/error.log</em>).';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][0] = 'Uitvoeren in veilige modus';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][1] = 'Voer Contao uit in de veilige modus en laadt alleen kern modules.';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][0] = 'Uitschakelen IP check';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][1] = 'Sessies niet met IP adressen verbinden. Kiezen van deze optie is een potentieel veiligheidsrisico!';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][0] = 'Geldige download bestandstypes';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][1] = 'Geef een door komma\'s gescheiden lijst op van extensies van downloadbare bestandstypes.';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][0] = 'Geldige afbeeldingstypes';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][1] = 'Geef een door komma\'s gescheiden lijst van geldige bestandstypes op die ondersteund worden door de image class.';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][0] = 'Bewerkbare bestandstypes';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][1] = 'Geef een door komma\'s gescheiden lijst op van extensies die bewerkt kunnen worden in de bestandseditor.';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][0] = 'Template bestandstype';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][1] = 'Hier kunt u een komma gescheiden lijst van ondersteunde template bestandstypen invoeren.';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][0] = 'Maximum afbeeldingsbreedte';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][1] = 'Hier kunt u de maximum breedte van afbeeldingen en media bestanden opgeven. Als de breedte van een inhoudselement deze waarde overschrijdt, zal het automatisch verkleind worden.';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][0] = 'Thumbnail kwaliteit';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][1] = 'Geef de thumbnail kwaliteit op in procenten (alleen geldig voor JPG).';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][0] = 'Maximale GD afbeelding breedte';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][1] = 'Hier kunt u de maximale afbeelding breedte invoeren die de GD library zal proberen te hanteren.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][0] = 'Maximale GD afbeelding hoogte';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][1] = 'Hier kunt u de maximale afbeelding hoogte invoeren die de GD library zal proberen te hanteren.';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][0] = 'Bestandsdirectory';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][1] = 'Geef het relatieve pad op naar de bestandsdirectory (standaard: tl_files).';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][0] = 'Geldige upload bestandstypes';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][1] = 'Geef een door komma\'s gescheiden lijst op van extensies die geüpload kunnen worden. Om veiligheidsredenen zijn bestandsuploads beperkt tot de files directory en zijn subfolders.';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][0] = 'Gelijktijdige uploads';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][1] = 'Geef het maximum aantal gelijktijdige uploads op .';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][0] = 'Maximum upload bestandsgrootte';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][1] = 'Geef de maximum grootte in bytes op die geüploade bestanden mogen hebben (standaard: 2 MB = 2048 KB = 2048000 bytes).';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][0] = 'Maximum afbeeldingsbreedte';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][1] = 'Geef de maximum afbeeldingsbreedte in pixels op voor te uploaden bestanden.';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][0] = 'Maximum afbeeldingshoogte';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][1] = 'Geef de maximum afbeeldingshoogte in pixels op voor te uploaden bestanden.';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][0] = 'Zoekmachine inschakelen';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][1] = 'Indexeer frontend pagina\'s automatisch zodat ze gevonden worden door de zoekmachine.';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][0] = 'Indexeer beschermde pagina\'s';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][1] = 'Gebruik deze optie voorzichtig en sluit persoonlijke pagina\'s altijd uit van indexering!';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][0] = 'Gebruik SMTP om e-mails te zenden';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][1] = 'Gebruik een SMTP-server in plaats van de PHP mail() functie om e-mails te versturen.';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][0] = 'SMTP hostnaam';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][1] = 'Geef de hostnaam van uw SMTP-server op (standaard is dat localhost).';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][0] = 'SMTP gebruikersnaam';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][1] = 'Als u zich moet aanmelden bij uw SMTP server, geef dan hier uw gebruikersnaam op.';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][0] = 'SMTP wachtwoord';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][1] = 'Als u zich moet aanmelden bij uw SMTP server, geef dan hier uw wachtwoord op.';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][0] = 'SMTP encryptie';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][1] = 'Hier kunt u een encryptie methode kiezen (SSL of TLS).';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][0] = 'SMTP poortnummer';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][1] = 'Geef het poortnummer van uw SMTP-server op (standaard poort 25 of 465 voor SSL).';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][0] = 'Deactiveer backend modules';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][1] = 'Hier kunt u niet benodigde backend modules deactiveren.';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][0] = 'Bewaartijd voor undo stappen';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][1] = 'Geef de bewaartijd op voor undo stappen in seconden (standaard: 24 uren = 86400 seconden).';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][0] = 'Bewaartijd voor versies';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][1] = 'Geef de bewaartijd op voor verschillende versies van records in seconden (standaard: 90 dagen = 7776000 seconden).';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][0] = 'Bewaartijd voor log entries';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][1] = 'Geef de bewaartijd voor log entries in seconden op (standaard: 14 dagen = 1209600 seconden).';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][0] = 'Sessie timeout';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][1] = 'Geef de maximale levensduur van een sessie in seconden op (standaard: 60 minuten = 3600 seconden).';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][0] = 'Auto login periode';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][1] = 'Geef de frontend auto login periode in seconden op (standaard: 90 dagen = 7776000 seconden).';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][0] = 'Standaard paginagebruiker';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][1] = 'Hier kunt u een gebruiker kiezen als de standaard eigenaar van een pagina.';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][0] = 'Standaard paginagroep';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][1] = 'Hier kunt u een groep kiezen als de standaard eigenaar van een pagina.';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][0] = 'Standaard pagina permissies';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][1] = 'Een pagina gebruikt standaard dezelfde permissies als de bovenliggende pagina. Als er geen permissies gedefinieerd zijn zullen deze standaard permissies gebruikt worden.';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][0] = 'Live Update URL';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][1] = 'Hier kunt u de Live Update URL invoeren';
$GLOBALS['TL_LANG']['tl_settings']['title_legend'] = 'Website titel';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Datum en tijd';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Globale configuratie';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Backend configuratie';
$GLOBALS['TL_LANG']['tl_settings']['frontend_legend'] = 'Frontend configuratie';
$GLOBALS['TL_LANG']['tl_settings']['sections_legend'] = 'lay-out secties';
$GLOBALS['TL_LANG']['tl_settings']['privacy_legend'] = 'Privacy instellingen';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Veiligheidsinstellingen';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'Bestanden en afbeeldingen';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Upload instellingen';
$GLOBALS['TL_LANG']['tl_settings']['search_legend'] = 'Zoekmachine instellingen';
$GLOBALS['TL_LANG']['tl_settings']['smtp_legend'] = 'SMTP configuratie';
$GLOBALS['TL_LANG']['tl_settings']['ftp_legend'] = 'Safe Mode Hack';
$GLOBALS['TL_LANG']['tl_settings']['modules_legend'] = 'Inactieve extensies';
$GLOBALS['TL_LANG']['tl_settings']['timeout_legend'] = 'Timeout waarden';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Standaard toegangsrechten';
$GLOBALS['TL_LANG']['tl_settings']['update_legend'] = 'Live Update';
$GLOBALS['TL_LANG']['tl_settings']['static_legend'] = 'Statische hulpbronnen';
$GLOBALS['TL_LANG']['tl_settings']['edit'] = 'Wijzig lokale configuratie';
$GLOBALS['TL_LANG']['tl_settings']['both'] = 'Gebruik de cache van server en browser';
$GLOBALS['TL_LANG']['tl_settings']['server'] = 'Gebruik alleen de server cache';
$GLOBALS['TL_LANG']['tl_settings']['browser'] = 'Gebruik alleen de browser cache';
$GLOBALS['TL_LANG']['tl_settings']['none'] = 'Caching uitschakelen';
