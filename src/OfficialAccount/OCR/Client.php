<?php

namespace EasySwoole\WeChat\OfficialAccount\OCR;


use EasySwoole\WeChat\Kernel\BaseClient;
use EasySwoole\WeChat\Kernel\ServiceProviders;
use Psr\Http\Message\StreamInterface;

class Client extends BaseClient
{

    public function idCardByUrl(string $url)
    {
        $response = $this->getClient()
            ->setMethod('GET')
            ->send($this->buildUrl(
                '/cv/ocr/idcard',
                ['access_token' => $this->app[ServiceProviders::AccessToken]->getToken(), 'img_url' => $url])
            );

        $this->checkResponse($response, $parseData);

        return $parseData;
    }

    public function idCardByStream(StreamInterface $stream)
    {
        $response = $this->getClient()
            ->setMethod('POST')
            ->addStream($stream, 'img')
            ->send($this->buildUrl(
                '/cv/ocr/idcard',
                ['access_token' => $this->app[ServiceProviders::AccessToken]->getToken()])
            );

        $this->checkResponse($response, $parseData);

        return $parseData;
    }

    public function bankCardByUrl(string $path)
    {
        $response = $this->getClient()
            ->setMethod('GET')
            ->send($this->buildUrl(
                '/cv/ocr/bankcard',
                ['access_token' => $this->app[ServiceProviders::AccessToken]->getToken(), 'img_url' => $url])
            );

        $this->checkResponse($response, $parseData);

        return $parseData;
    }

    public function bankCardByStream(StreamInterface $stream)
    {
        $response = $this->getClient()
            ->setMethod('POST')
            ->addStream($stream, 'img')
            ->send($this->buildUrl(
                '/cv/ocr/bankcard',
                ['access_token' => $this->app[ServiceProviders::AccessToken]->getToken()])
            );

        $this->checkResponse($response, $parseData);

        return $parseData;
    }


    public function vehicleLicenseByUrl(string $url)
    {
        $response = $this->getClient()
            ->setMethod('GET')
            ->send($this->buildUrl(
                '/cv/ocr/drivinglicense',
                ['access_token' => $this->app[ServiceProviders::AccessToken]->getToken(), 'img_url' => $url])
            );

        $this->checkResponse($response, $parseData);

        return $parseData;
    }

    public function vehicleLicenseByStream(StreamInterface $stream)
    {
        $response = $this->getClient()
            ->setMethod('POST')
            ->addStream($stream, 'img')
            ->send($this->buildUrl(
                '/cv/ocr/drivinglicense',
                ['access_token' => $this->app[ServiceProviders::AccessToken]->getToken()])
            );

        $this->checkResponse($response, $parseData);

        return $parseData;
    }
}