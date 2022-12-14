<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('he', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'הטופס לא צריך להכיל שדות נוספים.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'הקובץ שהועלה גדול מדי. נסה להעלות קובץ קטן יותר.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'אסימון CSRF אינו חוקי. אנא נסה לשלוח שוב את הטופס.',
    'This value is not a valid HTML5 color.' => 'ערך זה אינו צבע HTML5 חוקי.',
    'Please enter a valid birthdate.' => 'נא להזין את תאריך לידה תקני.',
    'The selected choice is invalid.' => 'הבחירה שנבחרה אינה חוקית.',
    'The collection is invalid.' => 'האוסף אינו חוקי.',
    'Please select a valid color.' => 'אנא בחר צבע חוקי.',
    'Please select a valid country.' => 'אנא בחר מדינה חוקית.',
    'Please select a valid currency.' => 'אנא בחר מטבע חוקי.',
    'Please choose a valid date interval.' => 'אנא בחר מרווח תאריכים חוקי.',
    'Please enter a valid date and time.' => 'אנא הזן תאריך ושעה תקנים.',
    'Please enter a valid date.' => 'נא להזין תאריך חוקי.',
    'Please select a valid file.' => 'אנא בחר קובץ חוקי.',
    'The hidden field is invalid.' => 'השדה הנסתר אינו חוקי.',
    'Please enter an integer.' => 'אנא הזן מספר שלם.',
    'Please select a valid language.' => 'אנא בחר שפה חוקי.',
    'Please select a valid locale.' => 'אנא בחר שפה מקומית.',
    'Please enter a valid money amount.' => 'אנא הזן סכום כסף חוקי.',
    'Please enter a number.' => 'אנא הזן מספר.',
    'The password is invalid.' => 'הסיסמה אינה חוקית.',
    'Please enter a percentage value.' => 'אנא הזן ערך באחוזים.',
    'The values do not match.' => 'הערכים אינם תואמים.',
    'Please enter a valid time.' => 'אנא הזן שעה חוקי.',
    'Please select a valid timezone.' => 'אנא בחר אזור זמן חוקי.',
    'Please enter a valid URL.' => 'נא להזין את כתובת אתר חוקית.',
    'Please enter a valid search term.' => 'אנא הזן מונח חיפוש חוקי.',
    'Please provide a valid phone number.' => 'אנא ספק מספר טלפון חוקי.',
    'The checkbox has an invalid value.' => 'לתיבת הסימון יש ערך לא חוקי.',
    'Please enter a valid email address.' => 'אנא הזן כתובת דוא"ל תקנית.',
    'Please select a valid option.' => 'אנא בחר אפשרות חוקית.',
    'Please select a valid range.' => 'אנא בחר טווח חוקי.',
    'Please enter a valid week.' => 'אנא הזן שבוע תקף.',
    'This value should be false.' => 'הערך צריך להיות שקר.',
    'This value should be true.' => 'הערך צריך להיות אמת.',
    'This value should be of type {{ type }}.' => 'הערך צריך להיות מסוג {{ type }}.',
    'This value should be blank.' => 'הערך צריך להיות ריק.',
    'The value you selected is not a valid choice.' => 'הערך שבחרת אינו חוקי.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'אתה צריך לבחור לפחות {{ limit }} אפשרויות.|אתה צריך לבחור לפחות {{ limit }} אפשרויות.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'אתה צריך לבחור לכל היותר {{ limit }} אפשרויות.|אתה צריך לבחור לכל היותר {{ limit }} אפשרויות.',
    'One or more of the given values is invalid.' => 'אחד או יותר מהערכים אינו חוקי.',
    'This field was not expected.' => 'שדה זה לא היה צפוי',
    'This field is missing.' => 'שדה זה חסר.',
    'This value is not a valid date.' => 'הערך אינו תאריך חוקי.',
    'This value is not a valid datetime.' => 'הערך אינו תאריך ושעה חוקיים.',
    'This value is not a valid email address.' => 'כתובת המייל אינה תקינה.',
    'The file could not be found.' => 'הקובץ לא נמצא.',
    'The file is not readable.' => 'לא ניתן לקרוא את הקובץ.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'הקובץ גדול מדי ({{ size }} {{ suffix }}). הגודל המרבי המותר הוא {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'סוג MIME של הקובץ אינו חוקי ({{ type }}). מותרים סוגי MIME {{ types }}.',
    'This value should be {{ limit }} or less.' => 'הערך צריך להכיל {{ limit }} תווים לכל היותר.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'הערך ארוך מידי. הוא צריך להכיל {{ limit }} תווים לכל היותר.|הערך ארוך מידי. הוא צריך להכיל {{ limit }} תווים לכל היותר.',
    'This value should be {{ limit }} or more.' => 'הערך צריך להכיל {{ limit }} תווים לפחות.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'הערך קצר מידי. הוא צריך להכיל {{ limit }} תווים לפחות.|הערך קצר מידיץ הוא צריך להכיל {{ limit }} תווים לפחות.',
    'This value should not be blank.' => 'הערך לא אמור להיות ריק.',
    'This value should not be null.' => 'הערך לא אמור להיות ריק.',
    'This value should be null.' => 'הערך צריך להיות ריק.',
    'This value is not valid.' => 'הערך אינו חוקי.',
    'This value is not a valid time.' => 'הערך אינו זמן תקין.',
    'This value is not a valid URL.' => 'זאת אינה כתובת אתר תקינה.',
    'The two values should be equal.' => 'שני הערכים צריכים להיות שווים.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'הקובץ גדול מדי. הגודל המרבי המותר הוא {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'הקובץ גדול מדי.',
    'The file could not be uploaded.' => 'לא ניתן לעלות את הקובץ.',
    'This value should be a valid number.' => 'הערך צריך להיות מספר חוקי.',
    'This file is not a valid image.' => 'הקובץ הזה אינו תמונה תקינה.',
    'This is not a valid IP address.' => 'זו אינה כתובת IP חוקית.',
    'This value is not a valid language.' => 'הערך אינו שפה חוקית.',
    'This value is not a valid locale.' => 'הערך אינו אזור תקף.',
    'This value is not a valid country.' => 'הערך אינו ארץ חוקית.',
    'This value is already used.' => 'הערך כבר בשימוש.',
    'The size of the image could not be detected.' => 'לא ניתן לקבוע את גודל התמונה.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'רוחב התמונה גדול מדי ({{ width }}px). הרוחב המקסימלי הוא {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'רוחב התמונה קטן מדי ({{ width }}px). הרוחב המינימלי הוא {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'גובה התמונה גדול מדי ({{ height }}px). הגובה המקסימלי הוא {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'גובה התמונה קטן מדי ({{ height }}px). הגובה המינימלי הוא {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'הערך צריך להיות סיסמת המשתמש הנוכחי.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'הערך צריך להיות בדיוק {{ limit }} תווים.|הערך צריך להיות בדיוק {{ limit }} תווים.',
    'The file was only partially uploaded.' => 'הקובץ הועלה באופן חלקי.',
    'No file was uploaded.' => 'הקובץ לא הועלה.',
    'No temporary folder was configured in php.ini.' => 'לא הוגדרה תיקייה זמנית ב php.ini.',
    'Cannot write temporary file to disk.' => 'לא ניתן לכתוב קובץ זמני לדיסק.',
    'A PHP extension caused the upload to fail.' => 'סיומת PHP גרם להעלאה להיכשל.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'האוסף אמור להכיל {{ limit }} אלמנטים או יותר.|האוסף אמור להכיל {{ limit }} אלמנטים או יותר.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'האוסף אמור להכיל {{ limit }} אלמנטים או פחות.|האוסף אמור להכיל {{ limit }} אלמנטים או פחות.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'האוסף צריך להכיל בדיוק {{ limit }} אלמנטים.|האוסף צריך להכיל בדיוק {{ limit }} אלמנטים.',
    'Invalid card number.' => 'מספר הכרטיס אינו חוקי.',
    'Unsupported card type or invalid card number.' => 'סוג הכרטיס אינו נתמך או לא חוקי.',
    'This is not a valid International Bank Account Number (IBAN).' => 'מספר חשבון בנק בינלאומי אינו חוקי (IBAN).',
    'This value is not a valid ISBN-10.' => 'הערך אינו ערך ISBN-10 חוקי.',
    'This value is not a valid ISBN-13.' => 'הערך אינו ערך ISBN-13 חוקי.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'הערך אינו ערך ISBN-10 חוקי או ערך ISBN-13 חוקי.',
    'This value is not a valid ISSN.' => 'הערך אינו ערך ISSN חוקי.',
    'This value is not a valid currency.' => 'הערך אינו ערך מטבע חוקי.',
    'This value should be equal to {{ compared_value }}.' => 'הערך חייב להיות שווה ל {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'הערך חייב להיות גדול מ {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'הערך חייב להיות גדול או שווה ל {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'הערך חייב להיות זהה ל {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'הערך חייב להיות קטן מ {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'הערך חייב להיות קטן או שווה ל {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'הערך חייב להיות לא שווה ל {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'הערך חייב להיות לא זהה ל {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'היחס של התמונה הוא גדול מדי ({{ ratio }}). היחס המקסימלי האפשרי הוא {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'היחס של התמונה הוא קטן מדי ({{ ratio }}). היחס המינימלי האפשרי הוא {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'התמונה מרובעת ({{ width }}x{{ height }}px). אסורות תמונות מרובעות.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'התמונה היא לרוחב ({{ width }}x{{ height }}px). אסורות תמונות לרוחב.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'התמונה היא לאורך ({{ width }}x{{ height }}px). אסורות תמונות לאורך.',
    'An empty file is not allowed.' => 'אסור קובץ ריק.',
    'The host could not be resolved.' => 'לא הייתה אפשרות לזהות את המארח.',
    'This value does not match the expected {{ charset }} charset.' => 'הערך אינו תואם למערך התווים {{ charset }} הצפוי.',
    'This is not a valid Business Identifier Code (BIC).' => 'קוד זיהוי עסקי אינו חוקי (BIC).',
    'Error' => 'שגיאה',
    'This is not a valid UUID.' => 'הערך אינו ערך UUID חוקי.',
    'This value should be a multiple of {{ compared_value }}.' => 'הערך חייב להיות כפולה של {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'הקוד זיהוי עסקי (BIC) אינו משוייך ל IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'הערך אינו ערך JSON תקין.',
    'This collection should contain only unique elements.' => 'האוסף חייב להכיל רק אלמנטים ייחודיים.',
    'This value should be positive.' => 'הערך חייב להיות חיובי.',
    'This value should be either positive or zero.' => 'הערך חייב להיות חיובי או אפס.',
    'This value should be negative.' => 'הערך חייב להיות שלילי.',
    'This value should be either negative or zero.' => 'הערך חייב להיות שלילי או אפס.',
    'This value is not a valid timezone.' => 'הערך אינו אזור זמן תקין.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'סיסמא זו הודלפה בהדלפת מידע, אסור להשתמש בה. אנא השתמש בסיסמה אחרת.',
    'This value should be between {{ min }} and {{ max }}.' => 'הערך חייב להיות בין {{ min }} ו- {{ max }}.',
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
