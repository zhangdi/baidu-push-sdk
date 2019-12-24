<?php


namespace ZhangDi\BaiduPush\Push;


use ZhangDi\SdkKernel\BaseClient;

class Client extends BaseClient
{
    protected function getToken(): ?string
    {
        return $this->accessToken->getToken()['token'];
    }

    protected function getSite(): ?string
    {
        return $this->app->config->get('baidu.site');
    }

    /**
     * 推送 URLs
     *
     * @param array $urls
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function push(array $urls)
    {
        return $this->request('POST', 'http://data.zz.baidu.com/urls', [
            'query' => [
                'site' => $this->getSite(),
                'token' => $this->getToken(),
            ],
            'header' => [
                'Content-Type' => "text/plain"
            ],
            'body' => implode("\n", $urls),
        ]);
    }

    /**
     * 更新 URLs
     *
     * @param array $urls
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update(array $urls)
    {
        return $this->request('POST', 'http://data.zz.baidu.com/update', [
            'query' => [
                'site' => $this->getSite(),
                'token' => $this->getToken(),
            ],
            'header' => [
                'Content-Type' => "text/plain"
            ],
            'body' => implode("\n", $urls),
        ]);
    }

    /**
     * 删除 URLs
     *
     * @param array $urls
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete(array $urls)
    {
        return $this->request('POST', 'http://data.zz.baidu.com/delete', [
            'query' => [
                'site' => $this->getSite(),
                'token' => $this->getToken(),
            ],
            'header' => [
                'Content-Type' => "text/plain"
            ],
            'body' => implode("\n", $urls),
        ]);
    }
}