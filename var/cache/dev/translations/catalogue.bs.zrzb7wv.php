<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('bs', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Ovaj obrazac ne bi trebalo da sadrži dodatna polja.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Prenijeta (uploaded) datoteka je prevelika. Molim pokušajte prenijeti manju datoteku.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF vrijednost nije ispravna. Molim pokušajte ponovo da pošaljete obrazac.',
    'This value is not a valid HTML5 color.' => 'Ova vrijednost nije važeća HTML5 boja.',
    'Please enter a valid birthdate.' => 'Molim upišite ispravan datum rođenja.',
    'The selected choice is invalid.' => 'Odabrani izbor nije ispravan.',
    'The collection is invalid.' => 'Ova kolekcija nije ispravna.',
    'Please select a valid color.' => 'Molim izaberite ispravnu boju.',
    'Please select a valid country.' => 'Molim izaberite ispravnu državu.',
    'Please select a valid currency.' => 'Molim izaberite ispravnu valutu.',
    'Please choose a valid date interval.' => 'Molim izaberite ispravan datumski interval.',
    'Please enter a valid date and time.' => 'Molim upišite ispravan datum i vrijeme.',
    'Please enter a valid date.' => 'Molim upišite ispravan datum.',
    'Please select a valid file.' => 'Molim izaberite ispravnu datoteku.',
    'The hidden field is invalid.' => 'Skriveno polje nije ispravno.',
    'Please enter an integer.' => 'Molim upišite cijeli broj (integer).',
    'Please select a valid language.' => 'Molim izaberite ispravan jezik.',
    'Please select a valid locale.' => 'Molim izaberite ispravnu lokalizaciju.',
    'Please enter a valid money amount.' => 'Molim upišite ispravnu količinu novca.',
    'Please enter a number.' => 'Molim upišite broj.',
    'The password is invalid.' => 'Ova lozinka nije ispravna.',
    'Please enter a percentage value.' => 'Molim upišite procentualnu vrijednost.',
    'The values do not match.' => 'Date vrijednosti se ne poklapaju.',
    'Please enter a valid time.' => 'Molim upišite ispravno vrijeme.',
    'Please select a valid timezone.' => 'Molim izaberite ispravnu vremensku zonu.',
    'Please enter a valid URL.' => 'Molim upišite ispravan URL.',
    'Please enter a valid search term.' => 'Molim upišite ispravan termin za pretragu.',
    'Please provide a valid phone number.' => 'Molim navedite ispravan broj telefona.',
    'The checkbox has an invalid value.' => 'Polje za potvrdu sadrži neispravnu vrijednost.',
    'Please enter a valid email address.' => 'Molim upišite ispravnu email adresu.',
    'Please select a valid option.' => 'Molim izaberite ispravnu opciju.',
    'Please select a valid range.' => 'Molim izaberite ispravan opseg.',
    'Please enter a valid week.' => 'Molim upišite ispravnu sedmicu.',
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