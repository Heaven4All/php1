<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lv', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Šajā veidlapā nevajadzētu būt papildus ievades laukiem.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Augšupielādētā faila izmērs bija par lielu. Lūdzu mēģiniet augšupielādēt mazāka izmēra failu.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Dotais CSRF talons nav derīgs. Lūdzu mēģiniet vēlreiz iesniegt veidlapu.',
    'This value is not a valid HTML5 color.' => 'Šī vertība nav derīga HTML5 krāsa.',
    'Please enter a valid birthdate.' => 'Lūdzu, ievadiet derīgu dzimšanas datumu.',
    'The selected choice is invalid.' => 'Iezīmētā izvēle nav derīga.',
    'The collection is invalid.' => 'Kolekcija nav derīga.',
    'Please select a valid color.' => 'Lūdzu, izvēlieties derīgu krāsu.',
    'Please select a valid country.' => 'Lūdzu, izvēlieties derīgu valsti.',
    'Please select a valid currency.' => 'Lūdzu, izvēlieties derīgu valūtu.',
    'Please choose a valid date interval.' => 'Lūdzu, izvēlieties derīgu datumu intervālu.',
    'Please enter a valid date and time.' => 'Lūdzu, ievadiet derīgu datumu un laiku.',
    'Please enter a valid date.' => 'Lūdzu, ievadiet derīgu datumu.',
    'Please select a valid file.' => 'Lūdzu, izvēlieties derīgu failu.',
    'The hidden field is invalid.' => 'Slēptā lauka vērtība ir nederīga.',
    'Please enter an integer.' => 'Lūdzu, ievadiet veselu skaitli.',
    'Please select a valid language.' => 'Lūdzu, izvēlieties derīgu valodu.',
    'Please select a valid locale.' => 'Lūdzu, izvēlieties derīgu lokalizāciju.',
    'Please enter a valid money amount.' => 'Lūdzu, ievadiet derīgu naudas lielumu.',
    'Please enter a number.' => 'Lūdzu, ievadiet skaitli.',
    'The password is invalid.' => 'Parole ir nederīga.',
    'Please enter a percentage value.' => 'Lūdzu, ievadiet procentuālo lielumu.',
    'The values do not match.' => 'Vērtības nesakrīt.',
    'Please enter a valid time.' => 'Lūdzu, ievadiet derīgu laiku.',
    'Please select a valid timezone.' => 'Lūdzu, izvēlieties derīgu laika zonu.',
    'Please enter a valid URL.' => 'Lūdzu, ievadiet derīgu URL.',
    'Please enter a valid search term.' => 'Lūdzu, ievadiet derīgu meklēšanas nosacījumu.',
    'Please provide a valid phone number.' => 'Lūdzu, ievadiet derīgu tālruņa numuru.',
    'The checkbox has an invalid value.' => 'Izvēles rūtiņai ir nederīga vērtība.',
    'Please enter a valid email address.' => 'Lūdzu, ievadiet derīgu e-pasta adresi.',
    'Please select a valid option.' => 'Lūdzu, izvēlieties derīgu opciju.',
    'Please select a valid range.' => 'Lūdzu, izvēlieties derīgu diapazonu.',
    'Please enter a valid week.' => 'Lūdzu, ievadiet derīgu nedeļu.',
    'This value should be false.' => 'Šai vērtībai ir jābūt nepatiesai.',
    'This value should be true.' => 'Šai vērtībai ir jābūt patiesai.',
    'This value should be of type {{ type }}.' => 'Šīs vērtības tipam ir jābūt {{ type }}.',
    'This value should be blank.' => 'Šai vērtībai ir jābūt tukšai.',
    'The value you selected is not a valid choice.' => 'Vērtība, kuru jūs izvēlējāties nav derīga izvēle.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Jums nav jāveic izvēle.|Jums ir jāveic vismaz {{ limit }} izvēle.|Jums ir jāveic vismaz {{ limit }} izvēles.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Jums nav jāveic izvēle.|Jums ir jāveic ne vairāk kā {{ limit }} izvēle.|Jums ir jāveic ne vairāk kā {{ limit }} izvēles.',
    'One or more of the given values is invalid.' => 'Viena vai vairākas no dotajām vērtībām ir nederīgas.',
    'This field was not expected.' => 'Šis lauks netika gaidīts.',
    'This field is missing.' => 'Šis lauks ir pazudis.',
    'This value is not a valid date.' => 'Šī vērtība ir nederīgs datums.',
    'This value is not a valid datetime.' => 'Šī vērtība ir nederīgs datums un laiks',
    'This value is not a valid email address.' => 'Šī vērtība ir nederīga e-pasta adrese.',
    'The file could not be found.' => 'Fails nav atrasts.',
    'The file is not readable.' => 'Fails nav lasāms.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fails ir pārāk liels ({{ size }} {{ suffix }}). Atļautais maksimālais izmērs ir {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faila mime tips nav derīgs ({{ type }}). Atļautie mime tipi ir {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Šai vērtībai ir jābūt ne vairāk kā {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Šīs vērtības garums ir 0 rakstzīmju.|Šī vērtība ir pārāk gara. Tai būtu jābūt ne vairāk kā {{ limit }} rakstzīmei.|Šī vērtība ir pārāk gara. Tai būtu jābūt ne vairāk kā {{ limit }} rakstzīmēm.',
    'This value should be {{ limit }} or more.' => 'Šai vērtībai ir jābūt ne mazāk kā {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Šīs vērtības garums ir 0 rakstzīmju.|Šī vērtība ir pārāk īsa. Tai būtu jābūt ne mazāk kā {{ limit }} rakstzīmei.|Šī vērtība ir pārāk īsa. Tai būtu jābūt ne mazāk kā {{ limit }} rakstzīmēm.',
    'This value should not be blank.' => 'Šai vērtībai nav jābūt tukšai.',
    'This value should not be null.' => 'Šai vērtībai nav jābūt null.',
    'This value should be null.' => 'Šai vērtībai ir jābūt null.',
    'This value is not valid.' => 'Šī vērtība ir nederīga.',
    'This value is not a valid time.' => 'Šī vērtība ir nederīgs laiks.',
    'This value is not a valid URL.' => 'Šī vērtība ir nederīgs URL.',
    'The two values should be equal.' => 'Abām vērtībām jābūt vienādam.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fails ir pārāk liels. Atļautais maksimālais izmērs ir {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fails ir pārāk liels.',
    'The file could not be uploaded.' => 'Failu nevarēja augšupielādēt.',
    'This value should be a valid number.' => 'Šai vērtībai ir jābūt derīgam skaitlim.',
    'This file is not a valid image.' => 'Šis fails nav derīgs attēls.',
    'This is not a valid IP address.' => 'Šī nav derīga IP adrese.',
    'This value is not a valid language.' => 'Šī vērtība nav derīga valoda.',
    'This value is not a valid locale.' => 'Šī vērtība nav derīga lokalizācija.',
    'This value is not a valid country.' => 'Šī vērtība nav derīga valsts.',
    'This value is already used.' => 'Šī vērtība jau tiek izmantota.',
    'The size of the image could not be detected.' => 'Nevar noteikt attēla izmēru.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Attēla platums ir pārāk liels ({{ width }}px). Atļautais maksimālais platums ir {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Attēla platums ir pārāk mazs ({{ width }}px). Minimālais sagaidāmais platums ir {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Attēla augstums ir pārāk liels ({{ height }}px). Atļautais maksimālais augstums ir {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Attēla augstums ir pārāk mazs ({{ height }}px). Minimālais sagaidāmais augstums ir {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Šai vērtībai ir jābūt lietotāja pašreizējai parolei.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Šīs vērtības garums ir 0 rakstzīmju.|Šai vērtībai ir jābūt tieši {{ limit }} rakstzīmei.|Šai vērtībai ir jābūt tieši {{ limit }} rakstzīmēm.',
    'The file was only partially uploaded.' => 'Fails bija tikai daļēji augšupielādēts.',
    'No file was uploaded.' => 'Fails netika augšupielādēts.',
    'No temporary folder was configured in php.ini.' => 'Pagaidu mape php.ini failā nav nokonfigurēta.',
    'Cannot write temporary file to disk.' => 'Nevar ierakstīt pagaidu failu uz diska.',
    'A PHP extension caused the upload to fail.' => 'PHP paplašinājums izraisīja augšupielādes neizdošanos.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Šis krājums satur 0 elementu.|Šim krājumam jāsatur vismaz {{ limit }} elementu.|Šim krājumam jāsatur vismaz {{ limit }} elementus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Šis krājums satur 0 elementu.|Šim krājumam jāsatur ne vairāk kā {{ limit }} elementu.|Šim krājumam jāsatur ne vairāk kā {{ limit }} elementus.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Šis krājums satur 0 elementu.|Šim krājumam jāsatur tieši {{ limit }} elementu.|Šim krājumam jāsatur tieši {{ limit }} elementus.',
    'Invalid card number.' => 'Nederīgs kartes numurs.',
    'Unsupported card type or invalid card number.' => 'Neatbalstīts kartes tips vai nederīgs kartes numurs.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Šis nav derīgs starptautisks banku konta numurs (IBAN).',
    'This value is not a valid ISBN-10.' => 'Šī vērtība nav derīgs ISBN-10 numurs.',
    'This value is not a valid ISBN-13.' => 'Šī vērtība nav derīgs ISBN-13 numurs',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Šī vērtība neatbilst ne derīgam ISBN-10 numuram, ne derīgm ISBN-13 numuram.',
    'This value is not a valid ISSN.' => 'Šī vērtība nav derīgs ISSN numurs',
    'This value is not a valid currency.' => 'Šī vērtība nav derīga valūta',
    'This value should be equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt vienādai ar {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Šai vērtībai ir jābūt lielākai par {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt lielākai vai vienādai ar {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Šai vērtībai ir jābūt identiskai ar {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Šai vērtībai ir jābūt mazākai par {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'TŠai vērtībai ir jābūt mazākai vai vienādai ar {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt vienādai ar {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Šai vērtībai nav jābūt identiskai ar {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Attēla attiecība ir pārāk liela ({{ ratio }}). Atļautā maksimālā attiecība ir {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Attēla attiecība ir pārāk maza ({{ ratio }}). Minimālā sagaidāmā attiecība ir {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Šis attēls ir kvadrāts ({{ width }}x{{ height }}px). Kvadrātveida attēli nav atļauti.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Attēls ir orientēts kā ainava ({{ width }}x{{ height }}px). Attēli, kas ir orientēti kā ainavas nav atļauti.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Attēls ir orientēts kā portrets ({{ width }}x{{ height }}px). Attēli, kas ir orientēti kā portreti nav atļauti.',
    'An empty file is not allowed.' => 'Tukšs fails nav atļauts.',
    'The host could not be resolved.' => 'Resursdatora nosaukumu nevar atrisināt.',
    'This value does not match the expected {{ charset }} charset.' => 'Šī vērtība neatbilst sagaidāmajai rakstzīmju kopai {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Šī vērtība nav derīgs Biznesa Identifikācijas Kods (BIC).',
    'Error' => 'Kļūda',
    'This is not a valid UUID.' => 'Šis nav derīgs UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Šai vērtībai jābūt vairākas reizes atkārtotai {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Šis Biznesa Identifikācijas Kods (BIC) neatbilst {{ iban }} konta numuram (IBAN).',
    'This value should be valid JSON.' => 'Šai vērtībai jābūt derīgam JSON.',
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