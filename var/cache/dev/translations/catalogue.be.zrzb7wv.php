<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('be', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Гэта форма не павінна мець дадатковых палей.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Запампаваны файл быў занадта вялікім. Калі ласка, паспрабуйце запампаваць файл меншага памеру.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-токен не сапраўдны. Калі ласка, паспрабуйце яшчэ раз адправіць форму.',
    'This value is not a valid HTML5 color.' => 'Значэнне не з\'яўляецца карэктным HTML5 колерам.',
    'Please enter a valid birthdate.' => 'Калі ласка, увядзіце карэктную дату нараджэння.',
    'The selected choice is invalid.' => 'Выбраны варыянт некарэктны.',
    'The collection is invalid.' => 'Калекцыя некарэктна.',
    'Please select a valid color.' => 'Калі ласка, выберыце карэктны колер.',
    'Please select a valid country.' => 'Калі ласка, выберыце карэктную краіну.',
    'Please select a valid currency.' => 'Калі ласка, выберыце карэктную валюту.',
    'Please choose a valid date interval.' => 'Калі ласка, выберыце карэктны інтэрвал дат.',
    'Please enter a valid date and time.' => 'Калі ласка, увядзіце карэктныя дату і час.',
    'Please enter a valid date.' => 'Калі ласка, увядзіце карэктную дату.',
    'Please select a valid file.' => 'Калі ласка, выберыце карэктны файл.',
    'The hidden field is invalid.' => 'Значэнне схаванага поля некарэктна.',
    'Please enter an integer.' => 'Калі ласка, увядзіце цэлы лік.',
    'Please select a valid language.' => 'Калі ласка, выберыце карэктную мову.',
    'Please select a valid locale.' => 'Калі ласка, выберыце карэктную лакаль.',
    'Please enter a valid money amount.' => 'Калі ласка, увядзіце карэктную колькасць грошай.',
    'Please enter a number.' => 'Калі ласка, увядзіце нумар.',
    'The password is invalid.' => 'Няправільны пароль.',
    'Please enter a percentage value.' => 'Калі ласка, увядзіце працэнтнае значэнне.',
    'The values do not match.' => 'Значэнні не супадаюць.',
    'Please enter a valid time.' => 'Калі ласка, увядзіце карэктны час.',
    'Please select a valid timezone.' => 'Калі ласка, выберыце карэктны гадзінны пояс.',
    'Please enter a valid URL.' => 'Калі ласка, увядзіце карэктны URL.',
    'Please enter a valid search term.' => 'Калі ласка, увядзіце карэктны пошукавы запыт.',
    'Please provide a valid phone number.' => 'Калі ласка, увядзіце карэктны нумар тэлефона.',
    'The checkbox has an invalid value.' => 'Флажок мае некарэктнае значэнне.',
    'Please enter a valid email address.' => 'Калі ласка, увядзіце карэктны адрас электроннай пошты.',
    'Please select a valid option.' => 'Калі ласка, выберыце карэктны варыянт.',
    'Please select a valid range.' => 'Калі ласка, выберыце карэктны дыяпазон.',
    'Please enter a valid week.' => 'Калі ласка, увядзіце карэктны тыдзень.',
    'This value should be false.' => 'Значэнне павінна быць Не.',
    'This value should be true.' => 'Значэнне павінна быць Так.',
    'This value should be of type {{ type }}.' => 'Тып значэння павінен быць {{ type }}.',
    'This value should be blank.' => 'Значэнне павінна быць пустым.',
    'The value you selected is not a valid choice.' => 'Абранае вамі значэнне не сапраўднае.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Вы павінны выбраць хаця б {{ limit }} варыянт.|Вы павінны выбраць хаця б {{ limit }} варыянтаў.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Вы павінны выбраць не больш за {{ limit }} варыянт.|Вы павінны выбраць не больш за {{ limit }} варыянтаў.',
    'One or more of the given values is invalid.' => 'Адзін або некалькі пазначаных значэнняў з\'яўляецца несапраўдным.',
    'This field was not expected.' => 'Гэта поле не чакаецца.',
    'This field is missing.' => 'Гэта поле адсутнічае.',
    'This value is not a valid date.' => 'Гэта значэнне не з\'яўляецца карэктнай датай.',
    'This value is not a valid datetime.' => 'Гэта значэнне не з\'яўляецца карэктнай датай i часом.',
    'This value is not a valid email address.' => 'Гэта значэнне не з\'яўляецца карэктным адрасам электроннай пошты.',
    'The file could not be found.' => 'Файл не знойдзен.',
    'The file is not readable.' => 'Файл не чытаецца.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадта вялікі ({{ size }} {{ suffix }}). Максімальна дазволены памер {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-тып файлу некарэкты ({{ type }}). Дазволеныя MIME-тыпы файлу {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Значэнне павінна быць {{ limit }} або менш.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Значэнне занадта доўгае. Яно павінна мець {{ limit }} сімвал або менш.|Значэнне занадта доўгае. Яно павінна мець {{ limit }} сімвалаў або менш.',
    'This value should be {{ limit }} or more.' => 'Значэнне павінна быць {{ limit }} або больш.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Значэнне занадта кароткае. Яно павінна мець прынамсі {{ limit }} сімвал.|Значэнне занадта кароткае. Яно павінна мець прынамсі {{ limit }} сімвалаў.',
    'This value should not be blank.' => 'Значэнне не павінна быць пустым.',
    'This value should not be null.' => 'Значэнне не павінна быць null.',
    'This value should be null.' => 'Значэнне павінна быць null.',
    'This value is not valid.' => 'Значэнне з\'яўляецца не сапраўдным.',
    'This value is not a valid time.' => 'Значэнне не з\'яўляецца сапраўдным часам.',
    'This value is not a valid URL.' => 'Значэнне не з\'яўляецца сапраўдным URL-адрасам.',
    'The two values should be equal.' => 'Абодва значэнні павінны быць аднолькавымі.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадта вялікі. Максімальна дазволены памер {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файл занадта вялікі.',
    'The file could not be uploaded.' => 'Немагчыма запампаваць файл.',
    'This value should be a valid number.' => 'Значэнне павінна быць лікам.',
    'This file is not a valid image.' => 'Гэты файл не з\'яўляецца сапраўднай выявай.',
    'This is not a valid IP address.' => 'Значэнне не з\'яўляецца сапраўдным IP-адрасам.',
    'This value is not a valid language.' => 'Значэнне не з\'яўляецца сапраўдным мовай.',
    'This value is not a valid locale.' => 'Значэнне не з\'яўляецца сапраўднай лакаллю.',
    'This value is not a valid country.' => 'Значэнне не з\'яўляецца сапраўднай краінай.',
    'This value is already used.' => 'Гэта значэнне ўжо выкарыстоўваецца.',
    'The size of the image could not be detected.' => 'Немагчыма вызначыць памер выявы.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Гэта выява занадта вялікая ({{ width }}px). Дазваляецца максімальная шырыня {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Гэта выява занадта маленькая ({{ width }}px). Дазваляецца мінімальная шырыня {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Гэты выява занадта вялікая ({{ width }}px). Дазваляецца максімальная вышыня {{ max_width }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Гэта выява занадта маленькая ({{ width }}px). Дазваляецца мінімальная вышыня {{ min_width }}px.',
    'This value should be the user\'s current password.' => 'Значэнне павінна быць цяперашнім паролем карыстальніка.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Значэнне павінна мець {{ limit }} сімвал.|Значэнне павінна мець {{ limit }} сімвалаў.',
    'The file was only partially uploaded.' => 'Файл быў запампаваны толькі часткова.',
    'No file was uploaded.' => 'Файл не быў запампаваны.',
    'No temporary folder was configured in php.ini.' => 'У php.ini не была налажана часовая папка, або часовая папка не існуе.',
    'Cannot write temporary file to disk.' => 'Немагчыма запісаць часовы файл на дыск.',
    'A PHP extension caused the upload to fail.' => 'Пашырэнне PHP выклікала памылку загрузкі.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Калекцыя павінна змяшчаць прынамсі {{ limit }} элемент.|Калекцыя павінна змяшчаць прынамсі {{ limit }} элементаў.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Калекцыя павінна змяшчаць {{ limit }} або менш элемент.|Калекцыя павінна змяшчаць {{ limit }} або менш элементаў.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Калекцыя павінна змяшчаць роўна {{ limit }} элемент.|Калекцыя павінна змяшчаць роўна {{ limit }} элементаў.',
    'Invalid card number.' => 'Несапраўдны нумар карты.',
    'Unsupported card type or invalid card number.' => 'Тып карты не падтрымліваецца або несапраўдны нумар карты.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Несапраўдны міжнародны нумар банкаўскага рахунку (IBAN).',
    'This value is not a valid ISBN-10.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISBN-10 або ISBN-13.',
    'This value is not a valid ISSN.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISSN.',
    'This value is not a valid currency.' => 'Гэта значэнне не з\'яўляецца сапраўднай валютай.',
    'This value should be equal to {{ compared_value }}.' => 'Значэнне павінна раўняцца {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Значэнне павінна быць больш чым {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Значэнне павінна быць больш чым або раўняцца {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значэнне павінна быць ідэнтычным {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Значэнне павінна быць менш чым {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Значэнне павінна быць менш чым або раўняцца {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Значэнне не павінна раўняцца {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значэнне не павінна быць ідэнтычным {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Суадносіны бакоў выявы з\'яўляецца занадта вялікім ({{ ratio }}). Дазваляецца максімальныя суадносіны {{max_ratio}} .',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Суадносіны бакоў выявы з\'яўляецца занадта маленькімі ({{ ratio }}). Дазваляецца мінімальныя суадносіны {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Выява квадратная ({{width}}x{{height}}px). Квадратныя выявы не дазволены.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Выява ў альбомнай арыентацыі ({{ width }}x{{ height }}px). Выявы ў альбомнай арыентацыі не дазволены.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Выява ў партрэтнай арыентацыі ({{ width }}x{{ height }}px). Выявы ў партрэтнай арыентацыі не дазволены.',
    'An empty file is not allowed.' => 'Пусты файл не дазволены.',
    'The host could not be resolved.' => 'Не магчыма знайсці імя хоста.',
    'This value does not match the expected {{ charset }} charset.' => 'Гэта значэнне не супадае з чаканай {{ charset }} кадыроўкай.',
    'This is not a valid Business Identifier Code (BIC).' => 'Несапраўдны банкаўскі ідэнтыфікацыйны код (BIC).',
    'Error' => 'Памылка',
    'This is not a valid UUID.' => 'Гэта несапраўдны UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Значэнне павінна быць кратным {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Банкаўскі ідэнтыфікацыйны код (BIC) не звязан з IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Гэта значэнне павінна быць у фармаце JSON.',
    'This collection should contain only unique elements.' => 'Калекцыя павінна змяшчаць толькі ўнікальныя элементы.',
    'This value should be positive.' => 'Значэнне павінна быць дадатным.',
    'This value should be either positive or zero.' => 'Значэнне павінна быць дадатным ці нуль.',
    'This value should be negative.' => 'Значэнне павінна быць адмоўным.',
    'This value should be either negative or zero.' => 'Значэнне павінна быць адмоўным ці нуль.',
    'This value is not a valid timezone.' => 'Значэнне не з\'яўляецца сапраўдным гадзінным поясам.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Гэты пароль быў выкрадзены ў выніку ўзлому дадзеных, таму яго нельга выкарыстоўваць. Калі ласка, выкарыстоўвайце іншы пароль.',
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
