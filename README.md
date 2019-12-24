# 百度推送 SDK

百度推送 SDK For PHP

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist zhangdi/baidu-push-sdk
```

or add

```json
"zhangdi/baidu-push-sdk": "*"
```

to the require section of your composer.json.

## Usage

```php
<?php

use ZhangDi\BaiduPush\Application;

$app = new Application([
    'baidu'=>[
        'site'=>'www.example.com',
        'token'=>'your-baidu-push-token'
    ]
]);

$app->push->push([
    'http://www.example.com',
    'http://www.example.com/page-1.html',
    'http://www.example.com/page-2.html',
]);
```
