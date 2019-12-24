<?php


namespace ZhangDi\BaiduPush\Push;


use ZhangDi\BaiduPush\Token;
use ZhangDi\SdkKernel\Application;
use ZhangDi\SdkKernel\Contracts\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app->set('push', new Client($app, new Token($app)));
    }

}