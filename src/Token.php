<?php


namespace ZhangDi\BaiduPush;


use Psr\Http\Message\RequestInterface;
use ZhangDi\SdkKernel\Contracts\AccessTokenInterface;

class Token implements AccessTokenInterface
{
    /**
     * @var Application
     */
    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function getToken(): array
    {
        $config = $this->app->config;
        return [
            'token' => $config->get('baidu.token')
        ];
    }

    public function refresh(): AccessTokenInterface
    {
        return new static($this->app);
    }

    public function applyToRequest(RequestInterface $request, array $requestOptions = []): RequestInterface
    {
        return $request;
    }

}