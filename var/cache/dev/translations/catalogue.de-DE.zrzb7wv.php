<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('de-DE', array (
  'messages' => 
  array (
    'defaultTitle' => 'The Example App',
    'whatIsThisApp' => 'Hilfe',
    'metaDescription' => 'Dies ist die Beispielanwendung, eine Anwendung die Ihnen hilft Ihre eigene Anwendung mit Contentful zu bauen.',
    'metaTwitterCard' => 'Dies ist die Beispielanwendung, eine Anwendung die Ihnen hilft Ihre eigene Anwendung mit Contentful zu bauen.',
    'metaImageAlt' => 'Dies ist die Beispielanwendung, eine Anwendung die Ihnen hilft Ihre eigene Anwendung mit Contentful zu bauen.',
    'metaImageDescription' => 'Dies ist die Beispielanwendung, eine Anwendung die Ihnen hilft Ihre eigene Anwendung mit Contentful zu bauen.',
    'viewOnGithub' => 'Auf GitHub ansehen',
    'apiSwitcherHelp' => 'Ansehen des veröffentlichten und unveröffentlichten Inhalts durch Wechsel von Delivery und Preview APIs.',
    'contentDeliveryApiLabel' => 'Content Delivery API',
    'contentDeliveryApiHelp' => 'Diese API zeigt veröffentlichte Inhalte',
    'contentPreviewApiLabel' => 'Content Preview API',
    'contentPreviewApiHelp' => 'Diese API zeigt unveröffentlichte Inhalte und Änderungen',
    'locale' => 'Sprache',
    'localeQuestion' => 'Sie arbeiten mit verschiedenen Sprachen? Dann können Sie die Sprache für Anfragen an die Content Delivery API definieren.',
    'settingsLabel' => 'Einstellungen',
    'logoAlt' => 'Die Beispielanwendung für Contentful',
    'homeLabel' => 'Startseite',
    'coursesLabel' => 'Kurse',
    'lessonsLabel' => 'Lektionen',
    'footerDisclaimer' => 'Powered by Contentful. Diese Website und deren Materialien existieren nur für Demonstrationszwecken. Sie können diese benutzen, um den Inhalt ihres Contentful Kontos anzusehen.',
    'imprintLabel' => 'Impressum',
    'contactUsLabel' => 'Kontakt',
    'modalTitle' => 'Ein Beispiel für Entwickler, die Contentful benutzen',
    'modalTitleDotnet' => 'Ein Beispiel für .NET Entwickler, die Contentful benutzen',
    'modalTitleRuby' => 'Ein Beispiel für Ruby Entwickler, die Contentful benutzen',
    'modalTitlePhp' => 'Ein Beispiel für PHP Entwickler, die Contentful benutzen',
    'modalTitlePython' => 'Ein Beispiel für Python Entwickler, die Contentful benutzen',
    'modalTitleSwift' => 'Ein Beispiel für Swift Entwickler, die Contentful benutzen',
    'modalTitleAndroid' => 'Ein Beispiel für Android Entwickler, die Contentful benutzen',
    'modalTitleJava' => 'Ein Beispiel für Java Entwickler, die Contentful benutzen',
    'modalIntro' => 'Dies ist "The Node.js Example App". Während Sie Ihre eigenen Anwendungen mit Contentful bauen, können Sie dieses Beispiel als Referenz verwenden. Den Quellcode finden Sie auf',
    'modalIntroDotnet' => 'Dies ist "The .NET Example App". Während Sie Ihre eigenen Anwendungen mit Contentful bauen, können Sie dieses Beispiel als Referenz verwenden. Den Quellcode finden Sie auf',
    'modalIntroRuby' => 'Dies ist "The Ruby Example App". Während Sie Ihre eigenen Anwendungen mit Contentful bauen, können Sie dieses Beispiel als Referenz verwenden. Den Quellcode finden Sie auf',
    'modalIntroPhp' => 'Dies ist "The PHP Example App". Während Sie Ihre eigenen Anwendungen mit Contentful bauen, können Sie dieses Beispiel als Referenz verwenden. Den Quellcode finden Sie auf',
    'modalIntroPython' => 'Dies ist "The Python Example App". Während Sie Ihre eigenen Anwendungen mit Contentful bauen, können Sie dieses Beispiel als Referenz verwenden. Den Quellcode finden Sie auf',
    'modalIntroSwift' => 'Dies ist "The Swift Example App". Während Sie Ihre eigenen Anwendungen mit Contentful bauen, können Sie dieses Beispiel als Referenz verwenden. Den Quellcode finden Sie auf',
    'modalIntroAndroid' => 'Dies ist "The Android Example App". Während Sie Ihre eigenen Anwendungen mit Contentful bauen, können Sie dieses Beispiel als Referenz verwenden. Den Quellcode finden Sie auf',
    'modalIntroJava' => 'Dies ist "The Java Example App". Während Sie Ihre eigenen Anwendungen mit Contentful bauen, können Sie dieses Beispiel als Referenz verwenden. Den Quellcode finden Sie auf',
    'modalSpaceIntro' => 'Den Inhalt dieser Anwendung können Sie selbst bearbeiten. Dafür müssen Sie den "The Example App" space in Ihren Contentful Account importieren. Anleitung hierzu gibt es',
    'modalPlatforms' => 'Diese App ist auch in den folgenden Plattformen und Sprachen verfügbar:',
    'modalSpaceLinkLabel' => 'hier',
    'modalCTALabel' => 'Gut, verstanden.',
    'editorialFeaturesHint' => 'Bearbeiten Sie diesen Eintrag in der Contentful Web App. Sie müssen sich eingelogged haben und Zugang zum Space haben, um diese Funktion nutzen zu können.',
    'draftLabel' => 'Entwurf',
    'pendingChangesLabel' => 'Änderungen verfügbar',
    'lessonModuleErrorTitle' => '⚠️ Ungültiges Lektionsmodul',
    'lessonModuleErrorBody' => 'Konnte den Typ nicht erkennen: ',
    'nextLessonLabel' => 'Nächste Lektion ansehen',
    'imageErrorTitle' => '⚠️ Bild fehlt',
    'viewCourseLabel' => 'Kurs ansehen',
    'categoriesWelcomeLabel' => 'Willkommen zur folgenden Kategorie: ',
    'sitemapWelcomeLabel' => 'Willkommen zur folgenden Kategorie: ',
    'tableOfContentsLabel' => 'Inhalt',
    'courseOverviewLabel' => 'Kurs Übersicht',
    'overviewLabel' => 'Übersicht',
    'durationLabel' => 'Dauer',
    'minutesLabel' => 'min',
    'skillLevelLabel' => 'Schwierigkeit',
    'startCourseLabel' => 'Kurs beginnen',
    'categoriesLabel' => 'Kategorien',
    'allCoursesLabel' => 'Alle Kurse',
    'companyLabel' => 'Firma',
    'officeLabel' => 'Büro in Berlin',
    'germanyLabel' => 'Deutschland',
    'registrationCourtLabel' => 'Amtsgericht',
    'managingDirectorLabel' => 'Verwalter',
    'vatNumberLabel' => 'Steuernummer',
    'settingsIntroLabel' => 'Um Inhalt von unseren APIs zu bekommen, müssen Anwendungen von Kunden sich authentifizieren, sowohl mit der Space ID als auch dem Access Token.',
    'changesSavedLabel' => 'Änderungen erfolgreich gespeichert!',
    'errorOccurredTitleLabel' => 'Fehler aufgetreten',
    'errorOccurredMessageLabel' => 'Einige Fehler sind aufgetreten. Bitte schauen Sie sich die Fehlermeldungen neben den Feldern an.',
    'connectedToSpaceLabel' => 'Verbundener Space ',
    'spaceIdLabel' => 'Space ID',
    'spaceIdHelpText' => 'Die Space Id ist eine eindeutige Identifizierung für Ihren Space.',
    'accessTokenLabel' => 'Access Token',
    'cdaAccessTokenLabel' => 'Content Delivery API Access Token',
    'cpaAccessTokenLabel' => 'Content Preview API Access Token',
    'contentDeliveryApiHelpText' => 'Schauen Sie sich veröffentlichten Inhalt mit diesem Token an.',
    'contentPreviewApiHelpText' => 'Schauen Sie sich veröffentlichten Inhalt mit diesem Token an. (z.B. Inhalt im Zustand “Entwurf”).',
    'enableEditorialFeaturesLabel' => 'Editoriale Funktionen aktivieren',
    'enableEditorialFeaturesHelpText' => 'Aktivieren, um Bearbeitung und weitere kontextabhängige Helfer zu aktivieren. Damit dies funktioniert, müssen sie Zugang zu dem Space haben.',
    'saveSettingsButtonLabel' => 'Einstellungen Speichern',
    'fieldIsRequiredLabel' => 'Diese Feld ist notwendig.',
    'deliveryKeyInvalidLabel' => 'Ihr Delivery API Zugangsschlüssel ist ungültig.',
    'spaceOrTokenInvalid' => 'Dieser Space existiert nicht, oder Ihr Access Token kommt nicht von diesem Space.',
    'previewKeyInvalidLabel' => 'Ihr Preview API Zugangsschlüssel ist ungültig.',
    'beginnerLabel' => 'Anfänger',
    'intermediateLabel' => 'Fortgeschrittener',
    'advancedLabel' => 'Experte',
    'editInTheWebAppLabel' => 'In der Contentful web app bearbeiten',
    'currentLocaleLabel' => 'Deutsch (Deutschland)',
    'hostedLabel' => 'Gehostet',
    'comingSoonLabel' => 'Bald verfügbar',
    'credentialSourceLabel' => 'Ursprung der Zugangsdaten:',
    'readMoreLabel' => 'Weiterlesen',
    'credentialsLocationLabel' => 'Ihre Zugangsdaten werden derzeit aus',
    'overwriteCredentialsLabel' => 'Sie können überschrieben werden, indem Sie das Formular unten oder einen Querystring Parameter verwenden.',
    'copyLinkLabel' => 'Einen Link zum Verteilen kopieren',
    'resetCredentialsLabel' => 'Zugangsdaten zurücksetzen',
    'resetAboveLabel' => 'Sie können auf voreingestellten Zugangsdaten zurücksetzen.',
    'closeLabel' => 'Schließen',
    'overrideConfigLabel' => 'Diese Konfiguration kann durch das folgende Formular oder durch Verwendung von Querystring Parameter überschrieben werden.',
    'loadedFromLocalFileLabel' => 'Geladen von der lokalen Datei',
    'usingServerCredentialsLabel' => 'Die Beispielanwendung verwendet derzeit serverseitig gespeicherte Anmeldeinformationen zum Herstellen einer Verbindung mit einem Contentful-Space.',
    'usingSessionCredentialsLabel' => 'Die Beispielanwendung verwendet derzeit Anmeldeinformationen von der Anwendungssitzung, um eine Verbindung zu einem Contentful-Space herzustellen.',
    'applicationCredentialsLabel' => 'Anmeldeinformationen für die Anwendungssitzung',
    'noContentLabel' => 'Keinen Inhalt gefunden.',
    'errorHighlightedCourse' => '⚠️ Dieser Kurs wurde nicht veröffentlicht oder existiert nicht.',
    'somethingWentWrongLabel' => 'Hmm, etwas ging schief.',
    'errorMessage404Route' => 'Diese Seite existiert nicht.',
    'errorMessage404Lesson' => 'Diese Lektion existiert nicht.',
    'errorMessage404Course' => 'Dieser Kurs existiert nicht.',
    'errorMessage404Category' => 'Diese Kategorie existiert nicht.',
    'hintsLabel' => 'Versuchen Sie Folgendes um die Probleme zu lösen:',
    'notFoundErrorHint' => 'Überprüfen Sie, ob dieser Inhalt existiert und veröffentlicht wurde.',
    'contentModelChangedErrorHint' => 'Überprüfen Sie, ob die Struktur der Inhalte geändert wurde. Haben Sie einen Inhaltstyp oder ein benötigtes Feld gelöscht?',
    'draftOrPublishedErrorHint' => 'Überprüfen Sie, ob der Inhalt veröffentlicht wurde, Änderungen enthält (Content Delivery API) oder gelöscht wurde (Content Preview API & Content Delivery API).',
    'localeContentErrorHint' => 'Überprüfen Sie, ob alle benötigten Felder dieser Sprache befüllt wurden.',
    'verifyCredentialsErrorHint' => 'Überprüfen Sie, ob die Space ID und die Access Tokens richtig und nicht abgelaufen sind.',
    'stackTraceErrorHint' => 'Schauen Sie sich den folgenden Stack Trace an.',
    'errorLabel' => 'Fehler von Contentful:',
    'stackTraceLabel' => 'Stack trace:',
  ),
));

$catalogueDe = new MessageCatalogue('de', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Dieses Formular sollte keine zusätzlichen Felder enthalten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Die hochgeladene Datei ist zu groß. Versuchen Sie bitte eine kleinere Datei hochzuladen.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Der CSRF-Token ist ungültig. Versuchen Sie bitte, das Formular erneut zu senden.',
    'This value is not a valid HTML5 color.' => 'Dieser Wert ist keine gültige HTML5 Farbe.',
    'Please enter a valid birthdate.' => 'Bitte geben Sie ein gültiges Geburtsdatum ein.',
    'The selected choice is invalid.' => 'Die Auswahl ist ungültig.',
    'The collection is invalid.' => 'Diese Gruppe von Feldern ist ungültig.',
    'Please select a valid color.' => 'Bitte geben Sie eine gültige Farbe ein.',
    'Please select a valid country.' => 'Bitte wählen Sie ein gültiges Land aus.',
    'Please select a valid currency.' => 'Bitte wählen Sie eine gültige Währung aus.',
    'Please choose a valid date interval.' => 'Bitte wählen Sie ein gültiges Datumsintervall.',
    'Please enter a valid date and time.' => 'Bitte geben Sie ein gültiges Datum samt Uhrzeit ein.',
    'Please enter a valid date.' => 'Bitte geben Sie ein gültiges Datum ein.',
    'Please select a valid file.' => 'Bitte wählen Sie eine gültige Datei.',
    'The hidden field is invalid.' => 'Das versteckte Feld ist ungültig.',
    'Please enter an integer.' => 'Bitte geben Sie eine ganze Zahl ein.',
    'Please select a valid language.' => 'Bitte wählen Sie eine gültige Sprache.',
    'Please select a valid locale.' => 'Bitte wählen Sie eine gültige Locale-Einstellung aus.',
    'Please enter a valid money amount.' => 'Bitte geben Sie einen gültigen Geldbetrag ein.',
    'Please enter a number.' => 'Bitte geben Sie eine gültige Zahl ein.',
    'The password is invalid.' => 'Das Kennwort ist ungültig.',
    'Please enter a percentage value.' => 'Bitte geben Sie einen gültigen Prozentwert ein.',
    'The values do not match.' => 'Die Werte stimmen nicht überein.',
    'Please enter a valid time.' => 'Bitte geben Sie eine gültige Uhrzeit ein.',
    'Please select a valid timezone.' => 'Bitte wählen Sie eine gültige Zeitzone.',
    'Please enter a valid URL.' => 'Bitte geben Sie eine gültige URL ein.',
    'Please enter a valid search term.' => 'Bitte geben Sie einen gültigen Suchbegriff ein.',
    'Please provide a valid phone number.' => 'Bitte geben Sie eine gültige Telefonnummer ein.',
    'The checkbox has an invalid value.' => 'Das Kontrollkästchen hat einen ungültigen Wert.',
    'Please enter a valid email address.' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.',
    'Please select a valid option.' => 'Bitte wählen Sie eine gültige Option.',
    'Please select a valid range.' => 'Bitte wählen Sie einen gültigen Bereich.',
    'Please enter a valid week.' => 'Bitte geben Sie eine gültige Woche ein.',
    'This value should be false.' => 'Dieser Wert sollte false sein.',
    'This value should be true.' => 'Dieser Wert sollte true sein.',
    'This value should be of type {{ type }}.' => 'Dieser Wert sollte vom Typ {{ type }} sein.',
    'This value should be blank.' => 'Dieser Wert sollte leer sein.',
    'The value you selected is not a valid choice.' => 'Sie haben einen ungültigen Wert ausgewählt.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Sie müssen mindestens {{ limit }} Möglichkeit wählen.|Sie müssen mindestens {{ limit }} Möglichkeiten wählen.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Sie dürfen höchstens {{ limit }} Möglichkeit wählen.|Sie dürfen höchstens {{ limit }} Möglichkeiten wählen.',
    'One or more of the given values is invalid.' => 'Einer oder mehrere der angegebenen Werte sind ungültig.',
    'This field was not expected.' => 'Dieses Feld wurde nicht erwartet.',
    'This field is missing.' => 'Dieses Feld fehlt.',
    'This value is not a valid date.' => 'Dieser Wert entspricht keiner gültigen Datumsangabe.',
    'This value is not a valid datetime.' => 'Dieser Wert entspricht keiner gültigen Datums- und Zeitangabe.',
    'This value is not a valid email address.' => 'Dieser Wert ist keine gültige E-Mail-Adresse.',
    'The file could not be found.' => 'Die Datei wurde nicht gefunden.',
    'The file is not readable.' => 'Die Datei ist nicht lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß ({{ size }} {{ suffix }}). Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Der Dateityp ist ungültig ({{ type }}). Erlaubte Dateitypen sind {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dieser Wert sollte kleiner oder gleich {{ limit }} sein.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.',
    'This value should be {{ limit }} or more.' => 'Dieser Wert sollte größer oder gleich {{ limit }} sein.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.',
    'This value should not be blank.' => 'Dieser Wert sollte nicht leer sein.',
    'This value should not be null.' => 'Dieser Wert sollte nicht null sein.',
    'This value should be null.' => 'Dieser Wert sollte null sein.',
    'This value is not valid.' => 'Dieser Wert ist nicht gültig.',
    'This value is not a valid time.' => 'Dieser Wert entspricht keiner gültigen Zeitangabe.',
    'This value is not a valid URL.' => 'Dieser Wert ist keine gültige URL.',
    'The two values should be equal.' => 'Die beiden Werte sollten identisch sein.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß. Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die Datei ist zu groß.',
    'The file could not be uploaded.' => 'Die Datei konnte nicht hochgeladen werden.',
    'This value should be a valid number.' => 'Dieser Wert sollte eine gültige Zahl sein.',
    'This file is not a valid image.' => 'Diese Datei ist kein gültiges Bild.',
    'This is not a valid IP address.' => 'Dies ist keine gültige IP-Adresse.',
    'This value is not a valid language.' => 'Dieser Wert entspricht keiner gültigen Sprache.',
    'This value is not a valid locale.' => 'Dieser Wert entspricht keinem gültigen Gebietsschema.',
    'This value is not a valid country.' => 'Dieser Wert entspricht keinem gültigen Land.',
    'This value is already used.' => 'Dieser Wert wird bereits verwendet.',
    'The size of the image could not be detected.' => 'Die Größe des Bildes konnte nicht ermittelt werden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die Bildbreite ist zu groß ({{ width }}px). Die maximal zulässige Breite beträgt {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die Bildbreite ist zu gering ({{ width }}px). Die erwartete Mindestbreite beträgt {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die Bildhöhe ist zu groß ({{ height }}px). Die maximal zulässige Höhe beträgt {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die Bildhöhe ist zu gering ({{ height }}px). Die erwartete Mindesthöhe beträgt {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dieser Wert sollte dem aktuellen Benutzerpasswort entsprechen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dieser Wert sollte genau {{ limit }} Zeichen lang sein.|Dieser Wert sollte genau {{ limit }} Zeichen lang sein.',
    'The file was only partially uploaded.' => 'Die Datei wurde nur teilweise hochgeladen.',
    'No file was uploaded.' => 'Es wurde keine Datei hochgeladen.',
    'No temporary folder was configured in php.ini.' => 'Es wurde kein temporärer Ordner in der php.ini konfiguriert oder der temporäre Ordner existiert nicht.',
    'Cannot write temporary file to disk.' => 'Kann die temporäre Datei nicht speichern.',
    'A PHP extension caused the upload to fail.' => 'Eine PHP-Erweiterung verhinderte den Upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Diese Sammlung sollte genau {{ limit }} Element beinhalten.|Diese Sammlung sollte genau {{ limit }} Elemente beinhalten.',
    'Invalid card number.' => 'Ungültige Kartennummer.',
    'Unsupported card type or invalid card number.' => 'Nicht unterstützer Kartentyp oder ungültige Kartennummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dieser Wert ist keine gültige internationale Bankkontonummer (IBAN).',
    'This value is not a valid ISBN-10.' => 'Dieser Wert entspricht keiner gültigen ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Dieser Wert entspricht keiner gültigen ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Dieser Wert ist weder eine gültige ISBN-10 noch eine gültige ISBN-13.',
    'This value is not a valid ISSN.' => 'Dieser Wert ist keine gültige ISSN.',
    'This value is not a valid currency.' => 'Dieser Wert ist keine gültige Währung.',
    'This value should be equal to {{ compared_value }}.' => 'Dieser Wert sollte gleich {{ compared_value }} sein.',
    'This value should be greater than {{ compared_value }}.' => 'Dieser Wert sollte größer als {{ compared_value }} sein.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dieser Wert sollte größer oder gleich {{ compared_value }} sein.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dieser Wert sollte kleiner als {{ compared_value }} sein.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dieser Wert sollte kleiner oder gleich {{ compared_value }} sein.',
    'This value should not be equal to {{ compared_value }}.' => 'Dieser Wert sollte nicht {{ compared_value }} sein.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte nicht identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu groß ({{ ratio }}). Der erlaubte Maximalwert ist {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu klein ({{ ratio }}). Der erwartete Minimalwert ist {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Das Bild ist quadratisch ({{ width }}x{{ height }}px). Quadratische Bilder sind nicht erlaubt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Das Bild ist im Querformat ({{ width }}x{{ height }}px). Bilder im Querformat sind nicht erlaubt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Das Bild ist im Hochformat ({{ width }}x{{ height }}px). Bilder im Hochformat sind nicht erlaubt.',
    'An empty file is not allowed.' => 'Eine leere Datei ist nicht erlaubt.',
    'The host could not be resolved.' => 'Der Hostname konnte nicht aufgelöst werden.',
    'This value does not match the expected {{ charset }} charset.' => 'Dieser Wert entspricht nicht dem erwarteten Zeichensatz {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dieser Wert ist kein gültiger BIC.',
    'Error' => 'Fehler',
    'This is not a valid UUID.' => 'Dies ist keine gültige UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Dieser Wert sollte ein Vielfaches von {{ compared_value }} sein.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Diese internationale Bankleitzahl (BIC) ist nicht mit der IBAN {{ iban }} assoziiert.',
    'This value should be valid JSON.' => 'Dieser Wert sollte gültiges JSON sein.',
    'This collection should contain only unique elements.' => 'Diese Sammlung darf keine doppelten Elemente enthalten.',
    'This value should be positive.' => 'Diese Zahl sollte positiv sein.',
    'This value should be either positive or zero.' => 'Diese Zahl sollte entweder positiv oder 0 sein.',
    'This value should be negative.' => 'Diese Zahl sollte negativ sein.',
    'This value should be either negative or zero.' => 'Diese Zahl sollte entweder negativ oder 0 sein.',
    'This value is not a valid timezone.' => 'Dieser Wert ist keine gültige Zeitzone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Dieses Passwort ist Teil eines Datenlecks, es darf nicht verwendet werden.',
    'This value should be between {{ min }} and {{ max }}.' => 'Dieser Wert sollte zwischen {{ min }} und {{ max }} sein.',
    'This value is not a valid hostname.' => 'Dieser Wert ist kein gültiger Hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Die Anzahl an Elementen in dieser Sammlung sollte ein Vielfaches von {{ compared_value }} sein.',
    'This value should satisfy at least one of the following constraints:' => 'Dieser Wert sollte eine der folgenden Bedingungen erfüllen:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Jedes Element dieser Sammlung sollte seine eigene Menge an Bedingungen erfüllen.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueDe);
$catalogueEn_US = new MessageCatalogue('en-US', array (
  'messages' => 
  array (
    'defaultTitle' => 'The Example App',
    'whatIsThisApp' => 'Help',
    'metaDescription' => 'This is "The Example App", a reference for building your own applications using Contentful.',
    'metaTwitterCard' => 'This is "The Example App", a reference for building your own applications using Contentful.',
    'metaImageAlt' => 'This is "The Example App", a reference for building your own applications using Contentful.',
    'metaImageDescription' => 'This is "The Example App", a reference for building your own applications using Contentful.',
    'viewOnGithub' => 'View on GitHub',
    'apiSwitcherHelp' => 'View the published or draft content by simply switching between the Deliver and Preview APIs.',
    'contentDeliveryApiLabel' => 'Content Delivery API',
    'contentDeliveryApiHelp' => 'This API fetches published content from the Content Delivery API',
    'contentPreviewApiLabel' => 'Content Preview API',
    'contentPreviewApiHelp' => 'This API fetches un-published content from the Content Preview API',
    'locale' => 'Locale',
    'localeQuestion' => 'Working with multiple languages? You can query the Content Delivery API for a specific locale.',
    'settingsLabel' => 'Settings',
    'logoAlt' => 'Contentful Example App',
    'homeLabel' => 'Home',
    'coursesLabel' => 'Courses',
    'lessonsLabel' => 'Lessons',
    'footerDisclaimer' => 'Powered by Contentful. This website and the materials found on it are for demo purposes. You can use this to preview the content created on your Contentful account.',
    'imprintLabel' => 'Imprint',
    'contactUsLabel' => 'Contact us',
    'modalTitle' => 'A reference for Node.js developers using Contentful',
    'modalTitleDotnet' => 'A reference for .NET developers using Contentful',
    'modalTitleRuby' => 'A reference for Ruby developers using Contentful',
    'modalTitlePhp' => 'A reference for PHP developers using Contentful',
    'modalTitlePython' => 'A reference for Python developers using Contentful',
    'modalTitleSwift' => 'A reference for Swift developers using Contentful',
    'modalTitleAndroid' => 'A reference for Android developers using Contentful',
    'modalTitleJava' => 'A reference for Java developers using Contentful',
    'modalIntro' => 'This is "The Node.js Example App". While building your own apps with Contentful, you can reference this app\'s code, found on',
    'modalIntroDotnet' => 'This is "The .NET Example App". While building your own apps with Contentful, you can reference this app\'s code, found on',
    'modalIntroRuby' => 'This is "The Ruby Example App". While building your own apps with Contentful, you can reference this app\'s code, found on',
    'modalIntroPhp' => 'This is "The PHP Example App". While building your own apps with Contentful, you can reference this app\'s code, found on',
    'modalIntroPython' => 'This is "The Python Example App". While building your own apps with Contentful, you can reference this app\'s code, found on',
    'modalIntroSwift' => 'This is "The Swift Example App". While building your own apps with Contentful, you can reference this app\'s code, found on',
    'modalIntroAndroid' => 'This is "The Android Example App". While building your own apps with Contentful, you can reference this app\'s code, found on',
    'modalIntroJava' => 'This is "The Java Example App". While building your own apps with Contentful, you can reference this app\'s code, found on',
    'modalSpaceIntro' => 'You can also edit the content in the app by cloning the Contentful space to your own Contentful account by following the instructions',
    'modalPlatforms' => 'This app is also available in the following platforms and languages:',
    'modalSpaceLinkLabel' => 'here',
    'modalCTALabel' => 'Ok, got it.',
    'editorialFeaturesHint' => 'Edit this entry in the Contentful web app. You have to be logged in and have access to the connected space to use this feature.',
    'draftLabel' => 'draft',
    'pendingChangesLabel' => 'pending changes',
    'lessonModuleErrorTitle' => '⚠️ Invalid lesson module',
    'lessonModuleErrorBody' => 'Could not determine type of',
    'nextLessonLabel' => 'Go to the next lesson',
    'imageErrorTitle' => '⚠️ Image missing',
    'viewCourseLabel' => 'view course',
    'categoriesWelcomeLabel' => 'Welcome to',
    'sitemapWelcomeLabel' => 'Welcome to',
    'tableOfContentsLabel' => 'Table of contents',
    'courseOverviewLabel' => 'Course overview',
    'overviewLabel' => 'Overview',
    'durationLabel' => 'Duration',
    'minutesLabel' => 'min',
    'skillLevelLabel' => 'Skill level',
    'startCourseLabel' => 'Start course',
    'categoriesLabel' => 'Categories',
    'allCoursesLabel' => 'All courses',
    'companyLabel' => 'Company',
    'officeLabel' => 'Office Berlin',
    'germanyLabel' => 'Germany',
    'registrationCourtLabel' => 'Registration Court',
    'managingDirectorLabel' => 'Managing Director',
    'vatNumberLabel' => 'VAT Number',
    'settingsIntroLabel' => 'To query and get content using the APIs, client applications need to authenticate with both the Space ID and an access token.',
    'changesSavedLabel' => 'Changes saved successfully!',
    'errorOccurredTitleLabel' => 'Error occurred',
    'errorOccurredMessageLabel' => 'Some errors occurred. Please check the error messages next to the fields.',
    'connectedToSpaceLabel' => 'Connected space',
    'spaceIdLabel' => 'Space ID',
    'spaceIdHelpText' => 'The Space ID is a unique identifier for your space.',
    'accessTokenLabel' => 'access token',
    'cdaAccessTokenLabel' => 'Content Delivery API access token',
    'cpaAccessTokenLabel' => 'Content Preview API access token',
    'contentDeliveryApiHelpText' => 'View published content using this token.',
    'contentPreviewApiHelpText' => 'Preview unpublished content using this token (i.e. content with “Draft” status).',
    'enableEditorialFeaturesLabel' => 'Enable editorial features',
    'enableEditorialFeaturesHelpText' => 'Enable to display an edit link and other contextual helpers for authors. You need to have access to the connected space to make this work.',
    'saveSettingsButtonLabel' => 'Save settings',
    'fieldIsRequiredLabel' => 'This field is required',
    'deliveryKeyInvalidLabel' => 'Your Delivery API key is invalid.',
    'spaceOrTokenInvalid' => 'This space does not exist or your access token is not associated with your space.',
    'previewKeyInvalidLabel' => 'Your Preview API key is invalid.',
    'beginnerLabel' => 'Beginner',
    'intermediateLabel' => 'Intermediate',
    'advancedLabel' => 'Advanced',
    'editInTheWebAppLabel' => 'Edit in the Contentful web app',
    'currentLocaleLabel' => 'English (United States)',
    'hostedLabel' => 'Hosted',
    'comingSoonLabel' => 'Coming soon',
    'credentialSourceLabel' => 'Credentials source',
    'readMoreLabel' => 'Read more',
    'credentialsLocationLabel' => 'Your credentials are currently loaded from',
    'overwriteCredentialsLabel' => 'They can be overwritten by changing them below or using query string parameters.',
    'copyLinkLabel' => 'Copy session deeplink to clipboard',
    'resetCredentialsLabel' => 'Reset credentials to default',
    'resetAboveLabel' => 'You can reset to the default credentials above.',
    'closeLabel' => 'Close',
    'overrideConfigLabel' => 'This configuration can be overridden through the form below or by using query string parameters.',
    'loadedFromLocalFileLabel' => 'Loaded from local file',
    'usingServerCredentialsLabel' => 'The example app is currently using server side stored credentials to connect to a Contentful space.',
    'usingSessionCredentialsLabel' => 'The example app is currently using application session stored credentials to connect to a Contentful space.',
    'applicationCredentialsLabel' => 'Application session credentials',
    'noContentLabel' => 'No content found.',
    'errorHighlightedCourse' => '⚠️ The course is not published or does not exist.',
    'somethingWentWrongLabel' => 'Oops, something went wrong',
    'errorMessage404Route' => 'The page you are trying to open does not exist.',
    'errorMessage404Lesson' => 'The lesson you are trying to open does not exist.',
    'errorMessage404Course' => 'The course you are trying to open does not exist.',
    'errorMessage404Category' => 'The category you are trying to open does not exist.',
    'hintsLabel' => 'Try the following to fix the issue(s):',
    'notFoundErrorHint' => 'Make sure the content you are trying to access exists and is published.',
    'contentModelChangedErrorHint' => 'Check if the content model has changed. Did you delete a content type or a required field?',
    'draftOrPublishedErrorHint' => 'Check if the content is in a draft or pending changes state (Content Delivery API), or if it has been deleted (Content Preview API & Content Delivery API).',
    'localeContentErrorHint' => 'Check if all required fields have content for this locale.',
    'verifyCredentialsErrorHint' => 'Verify that your space id and access tokens are correct and up to date.',
    'stackTraceErrorHint' => 'Check the stack trace below.',
    'errorLabel' => 'Error from Contentful:',
    'stackTraceLabel' => 'Stack trace:',
  ),
));
$catalogueDe->addFallbackCatalogue($catalogueEn_US);

return $catalogue;
