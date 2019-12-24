<?php


namespace ZhangDi\BaiduPush;

/**
 * Class Application
 * @package ZhangDi\BaiduPush
 * @property Push\Client $push
 */
class Application extends \ZhangDi\SdkKernel\Application
{
    public $id = 'baidu-push-sdk';
    public $name = '百度推送SDK';

    public $providers = [
        Push\ServiceProvider::class,
    ];

}