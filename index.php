<?php
    require __DIR__ . '/vendor/autoload.php';

    $faker = Faker\Factory::create('ja_JP');

    $data = [];
    // Base
    $data['base'] = [
        'randomDigit'=> $faker->randomDigit,
        'randomNumber'=> $faker->randomNumber($nbDigits = 4, $strict = false),
        'randomFloat'=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100),
        'numberBetween'=> $faker->numberBetween($min = 1000, $max = 9000), 
        'randomElements' => $faker->randomElements($array = ['red','blue','white'], $count = 2),
        'randomElement' => $faker->randomElement($array = ['red','blue','white']),
        'shuffle'=> $faker->shuffle('Hello World'),
        'numerify'=> $faker->numerify('Hello ###'),
        'lexify'=> $faker->lexify('Hello ???'),
        'regexify' => $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}')
    ];

    // Lorem
    $data['lorem'] = [
        'sentence'              => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'paragraph'             => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'text'                  => $faker->text($maxNbChars = 100),
        'realRext'              => $faker->realText(100)
    ];

    // Person
    $data['person'] = [
        'name'                  => $faker->name,
        'kanaName'              => $faker->kanaName,
        'userName'              => $faker->userName,
        'firstName'             => $faker->firstName,
        'lastName'              => $faker->lastName,
        'firstKanaName'         => $faker->firstKanaName,
        'lastKanaName'          => $faker->lastKanaName,
        'firstNameMale'         => $faker->firstNameMale,
        'firstNameFeMale'       => $faker->firstNameFeMale,
        'firstKanaNameMale'     => $faker->firstKanaNameMale,
        'firstKanaNameFemale'   => $faker->firstKanaNameFemale,
    ];

    // Address
    $data['address'] = [
        'country'               => $faker->country,
        'postcode'              => $faker->postcode,
        'postcode1'             => $faker->postcode1,
        'postcode2'             => $faker->postcode2,
        'prefecture'            => $faker->prefecture,
        'ward'                  => $faker->ward,
        'areaNumber'            => $faker->areaNumber,
        'city'                  => $faker->city,
        'address'               => $faker->streetAddress,
        'secondaryAddress'      => $faker->secondaryAddress,
        'lat'                   => $faker->latitude,
        'lon'                   => $faker->longitude,
    ];

    // PhoneNumber
    $data['phone_number'] = [
        'phoneNumber'                 => $faker->phoneNumber,
        'e164PhoneNumber'             => $faker->e164PhoneNumber,
    ];

    // Company
    $data['company'] = [
        'company'               => $faker->company,
        'companyPrefix'         => $faker->companyPrefix,
        'companySuffix'         => $faker->companySuffix,
        'jobTitle'              => $faker->jobTitle
    ];

    // Text
    // 宮沢賢治　銀河鉄道の夜
    $data['text'] = [
        'realText'              => $faker->realText(100),    // ダミーテキスト 200文字
    ];

    // DateTime
    $data['datetime'] = [
        'timezone'              => $faker->timezone,
        'unixTime'              => $faker->unixTime,
        'dateTime'              => $faker->dateTime($max = 'now', $timezone = null),
        'date'                  => $faker->date($format = 'Y-m-d', $max = 'now'),
        'year'                  => $faker->year,
        'month'                  => $faker->month,
        'monthName'             => $faker->monthName,
        'dayOfMonth'            => $faker->dayOfMonth($max = 'now'),
        'dayOfWeek'             => $faker->dayOfWeek($max = 'now'),
        'amPm'                  => $faker->amPm,
        'time'                  => $faker->time($format = 'H:i:s', $max = 'now'),
    ];

    // Internet
    $data['internet'] = [
        'email'                 => $faker->email,
        'safeEmail'                 => $faker->safeEmail,
        'freeEmail'                 => $faker->freeEmail,
        'companyEmail'                 => $faker->companyEmail,
        'freeEmailDomain'                 => $faker->freeEmailDomain,
        'safeEmailDomain'                 => $faker->safeEmailDomain,
        'userName'  => $faker->userName,
        'password'  => $faker->password,
        'tld'  => $faker->tld,
        'url'  => $faker->url,
        'ipv4'                    => $faker->ipv4,
        'ipv6'                    => $faker->ipv6,
        'localIpv4'                    => $faker->localIpv4,
        'macAssress'            => $faker->macAddress,
        'domainName'            => $faker->domainName,
        'domainWord'            => $faker->domainWord,
    ];

    // UserAgent
    $data['user_agent'] = [
        'userAgent'             => $faker->userAgent,
        'chrome'                => $faker->chrome,
        'firefox'                => $faker->firefox,
        'safari'                => $faker->safari,
        'opera'                => $faker->opera,
        'internetExplorer'                => $faker->internetExplorer,
    ];

    // Payment
    $data['payment'] = [
        'creditCardType'             => $faker->creditCardType,
        'creditCardNumber'             => $faker->creditCardNumber,
        'creditCardExpirationDateString'             => $faker->creditCardExpirationDateString,
        'creditCardDetails'             => $faker->creditCardDetails
    ];

    // Color
    $data['color'] = [
        'hexcolor'             => $faker->hexcolor,
        'rgbcolor'             => $faker->rgbcolor,
        'rgbCssColor'             => $faker->rgbCssColor,
        'safeColorName'             => $faker->safeColorName,
        'colorName'             => $faker->colorName
    ];

    //  file
    $data['file'] = [
        'fileExtension'             => $faker->fileExtension,
        'mimeType'             => $faker->mimeType
    ];

    // image
    $data['image'] = [
        'image' => $faker->image($dir = '/tmp')
    ];

    // uuid
    $data['uuid'] = [
        'uuid'                  => $faker->uuid
    ];

    // Miscellaneous
    $data['miscellaneous'] = [
        'md5'           => $faker->md5,
        'sha1'          => $faker->sha1,
        'sha256'        => $faker->sha256,
        'locale'        => $faker->locale,
        'countryCode'   => $faker->countryCode,
        'languageCode'  => $faker->languageCode,
        'currencyCode'  => $faker->currencyCode,
        'emoji'         => $faker->emoji
    ];

    // HtmlLorem
    $data['html_lorem'] = [
        'randomHtml'                  => $faker->randomHtml(2,3)
    ];

    echo "<pre>";
        print_r($data);
    echo "</pre>";
