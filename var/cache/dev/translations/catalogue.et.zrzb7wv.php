<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('et', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Väljade grupp ei tohiks sisalda lisaväljasid.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Üleslaaditud fail oli liiga suur. Palun proovi uuesti väiksema failiga.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-märgis on vigane. Palun proovi vormi uuesti esitada.',
    'This value is not a valid HTML5 color.' => 'See väärtus ei ole korrektne HTML5 värv.',
    'Please enter a valid birthdate.' => 'Palun sisesta korrektne sünnikuupäev.',
    'The selected choice is invalid.' => 'Tehtud valik on vigane.',
    'The collection is invalid.' => 'Kogum on vigane.',
    'Please select a valid color.' => 'Palun vali korrektne värv.',
    'Please select a valid country.' => 'Palun vali korrektne riik.',
    'Please select a valid currency.' => 'Palun vali korrektne valuuta.',
    'Please choose a valid date interval.' => 'Palun vali korrektne kuupäevade vahemik.',
    'Please enter a valid date and time.' => 'Palun sisesta korrektne kuupäev ja kellaaeg.',
    'Please enter a valid date.' => 'Palun sisesta korrektne kuupäev.',
    'Please select a valid file.' => 'Palun vali korrektne fail.',
    'The hidden field is invalid.' => 'Peidetud väli on vigane.',
    'Please enter an integer.' => 'Palun sisesta täisarv.',
    'Please select a valid language.' => 'Palun vali korrektne keel.',
    'Please select a valid locale.' => 'Palun vali korrektne keelekood.',
    'Please enter a valid money amount.' => 'Palun sisesta korrektne rahaline väärtus.',
    'Please enter a number.' => 'Palun sisesta number.',
    'The password is invalid.' => 'Vigane parool.',
    'Please enter a percentage value.' => 'Palun sisesta protsendiline väärtus.',
    'The values do not match.' => 'Väärtused ei klapi.',
    'Please enter a valid time.' => 'Palun sisesta korrektne aeg.',
    'Please select a valid timezone.' => 'Palun vali korrektne ajavöönd.',
    'Please enter a valid URL.' => 'Palun sisesta korrektne URL.',
    'Please enter a valid search term.' => 'Palun sisesta korrektne otsingutermin.',
    'Please provide a valid phone number.' => 'Palun sisesta korrektne telefoninumber.',
    'The checkbox has an invalid value.' => 'Märkeruudu väärtus on vigane.',
    'Please enter a valid email address.' => 'Palun sisesta korrektne e-posti aadress.',
    'Please select a valid option.' => 'Palun tee korrektne valik.',
    'Please select a valid range.' => 'Palun vali korrektne vahemik.',
    'Please enter a valid week.' => 'Palun sisesta korrektne nädal.',
    'This value should be false.' => 'Väärtus peaks olema väär.',
    'This value should be true.' => 'Väärtus peaks oleme tõene.',
    'This value should be of type {{ type }}.' => 'Väärtus peaks olema {{ type }}-tüüpi.',
    'This value should be blank.' => 'Väärtus peaks olema tühi.',
    'The value you selected is not a valid choice.' => 'Väärtus peaks olema üks etteantud valikutest.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Valima peaks vähemalt {{ limit }} valikut.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Valima peaks mitte rohkem kui  {{ limit }} valikut.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'See väli ei oodatud.',
    'This field is missing.' => 'See väli on puudu.',
    'This value is not a valid date.' => 'Väärtus pole korrektne kuupäev.',
    'This value is not a valid datetime.' => 'Väärtus pole korrektne kuupäev ja kellaeg.',
    'This value is not a valid email address.' => 'Väärtus pole korrektne e-maili aadress.',
    'The file could not be found.' => 'Faili ei leita.',
    'The file is not readable.' => 'Fail ei ole loetav.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fail on liiga suur ({{ size }} {{ suffix }}). Suurim lubatud suurus on {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faili sisutüüp on vigane ({{ type }}). Lubatud sisutüübid on {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Väärtus peaks olema {{ limit }} või vähem.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Väärtus on liiga pikk. Pikkus peaks olema {{ limit }} tähemärki või vähem.',
    'This value should be {{ limit }} or more.' => 'Väärtus peaks olema {{ limit }} või rohkem.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Väärtus on liiga lühike. Pikkus peaks  olema {{ limit }} tähemärki või rohkem.',
    'This value should not be blank.' => 'Väärtus ei tohiks olla tühi.',
    'This value should not be null.' => 'Väärtus ei tohiks olla \'null\'.',
    'This value should be null.' => 'Väärtus peaks olema \'null\'.',
    'This value is not valid.' => 'Väärtus on vigane.',
    'This value is not a valid time.' => 'Väärtus pole korrektne aeg.',
    'This value is not a valid URL.' => 'Väärtus pole korrektne URL.',
    'The two values should be equal.' => 'Väärtused peaksid olema võrdsed.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fail on liiga suur. Maksimaalne lubatud suurus on {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fail on liiga suur.',
    'The file could not be uploaded.' => 'Faili ei saa üles laadida.',
    'This value should be a valid number.' => 'Väärtus peaks olema korrektne number.',
    'This file is not a valid image.' => 'Fail ei ole korrektne pilt.',
    'This is not a valid IP address.' => 'IP aadress pole korrektne.',
    'This value is not a valid language.' => 'Väärtus pole korrektne keel.',
    'This value is not a valid locale.' => 'Väärtus pole korrektne asukohakeel.',
    'This value is not a valid country.' => 'Väärtus pole olemasolev riik.',
    'This value is already used.' => 'Väärtust on juba kasutatud.',
    'The size of the image could not be detected.' => 'Pildi suurust polnud võimalik tuvastada.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Pilt on liiga lai ({{ width }}px). Suurim lubatud laius on {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Pilt on liiga kitsas ({{ width }}px). Vähim lubatud laius on {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Pilt on liiga pikk ({{ height }}px). Lubatud suurim pikkus on {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Pilt pole piisavalt pikk ({{ height }}px). Lubatud vähim pikkus on {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Väärtus peaks olema kasutaja kehtiv salasõna.',
    'This value should have exactly {{ limit }} characters.' => 'Väärtus peaks olema täpselt {{ limit }} tähemärk pikk.|Väärtus peaks olema täpselt {{ limit }} tähemärki pikk.',
    'The file was only partially uploaded.' => 'Fail ei laetud täielikult üles.',
    'No file was uploaded.' => 'Ühtegi faili ei laetud üles.',
    'No temporary folder was configured in php.ini.' => 'Ühtegi ajutist kausta polnud php.ini-s seadistatud.',
    'Cannot write temporary file to disk.' => 'Ajutist faili ei saa kettale kirjutada.',
    'A PHP extension caused the upload to fail.' => 'PHP laiendi tõttu ebaõnnestus faili üleslaadimine.',
    'This collection should contain {{ limit }} elements or more.' => 'Kogumikus peaks olema vähemalt {{ limit }} element.|Kogumikus peaks olema vähemalt {{ limit }} elementi.',
    'This collection should contain {{ limit }} elements or less.' => 'Kogumikus peaks olema ülimalt {{ limit }} element.|Kogumikus peaks olema ülimalt {{ limit }} elementi.',
    'This collection should contain exactly {{ limit }} elements.' => 'Kogumikus peaks olema täpselt {{ limit }} element.|Kogumikus peaks olema täpselt {{ limit }}|elementi.',
    'Invalid card number.' => 'Vigane kaardi number.',
    'Unsupported card type or invalid card number.' => 'Kaardi tüüpi ei toetata või kaardi number on vigane.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Väärtus pole korrektne IBAN-number.',
    'This value is not a valid ISBN-10.' => 'Väärtus pole korrektne ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Väärtus pole korrektne ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Väärtus pole korrektne ISBN-10 ega ISBN-13.',
    'This value is not a valid ISSN.' => 'Väärtus pole korrektne ISSN.',
    'This value is not a valid currency.' => 'Väärtus pole korrektne valuuta.',
    'This value should be equal to {{ compared_value }}.' => 'Väärtus peaks olema võrdne {{ compared_value }}-ga.',
    'This value should be greater than {{ compared_value }}.' => 'Väärtus peaks olema suurem kui {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Väärtus peaks olema suurem kui või võrduma {{ compared_value }}-ga.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Väärtus peaks olema identne väärtusega {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Väärtus peaks olema väiksem kui {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Väärtus peaks olema väiksem kui või võrduma {{ compared_value }}-ga.',
    'This value should not be equal to {{ compared_value }}.' => 'Väärtus ei tohiks võrduda {{ compared_value }}-ga.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Väärtus ei tohiks olla identne väärtusega {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Kuvasuhe on liiga suur ({{ ratio }}). Lubatud maksimaalne suhe on {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Kuvasuhe on liiga väike ({{ ratio }}). Oodatav minimaalne suhe on {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Pilt on ruudukujuline ({{ width }}x{{ height }}px). Ruudukujulised pildid pole lubatud.',
  ),
));

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
$catalogue->addFallbackCatalogue($catalogueEn_US);

return $catalogue;
