# Yii2 Twitter API

[![Test Coverage](https://codeclimate.com/github/naffiq/yii2-twitter-api/badges/coverage.svg)](https://codeclimate.com/github/naffiq/yii2-twitter-api/coverage)
[![Code Climate](https://codeclimate.com/github/naffiq/yii2-twitter-api/badges/gpa.svg)](https://codeclimate.com/github/naffiq/yii2-twitter-api)
[![Build Status](https://travis-ci.org/naffiq/yii2-twitter-api.svg?branch=master)](https://travis-ci.org/naffiq/yii2-twitter-api)

This package provides component wrapper for [J7mbo/twitter-api-php](https://github.com/J7mbo/twitter-api-php) library.
Basically it just helps you to move settings to your app config.

## Installation

The preferred way to install this package is through [composer](https://getcomposer.org/):
```bash
$ composer require naffiq/yii2-twitter-api
```

## Configuration

Add following code to your components config section:
```php
<?php
return [
    // Your app settings ...
    'components' => [
        // Other components ...
        'twitter' => [
            'class' => 'naffiq\twitterapi\TwitterAPI',
            'oauthAccessToken' => 'YOUR_OAUTH_ACCESS_TOKEN',
            'oauthAccessTokenSecret' => 'YOUR_OAUTH_ACCESS_TOKEN',
            'consumerKey' => 'YOUR_CONSUMER_KEY',
            'consumerSecret' => 'YOUR_CONSUMER_SECRET'
        ]        
    ]
    // ...
];
```

And we are ready to roll

## Usage

Once you set up the component, you can use all of the [J7mbo/twitter-api-php](https://github.com/J7mbo/twitter-api-php)
library's methods, just like this:
```php
<?php

/**
 * @var \naffiq\twitterapi\TwitterAPI $twitter
 */
$twitter = \Yii::$app->get('twitter');

$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';
$postFields = [
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
];

$twitter->buildOauth($url, $requestMethod)
    ->setPostfields($postFields)
    ->performRequest();
```
