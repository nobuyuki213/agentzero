<?php

namespace App\Utils;

class SearchConsole
{
    const APP_NAME = 'agentzero';
    const SCOPES = [
        'https://www.googleapis.com/auth/webmasters',
        'https://www.googleapis.com/auth/webmasters.readonly',
    ];
    const KEY_FILE_LOCATION = __DIR__ . '/agentzero-6008150df855.json';

    private $webmasters;

    /**
     * API設定の初期化
     */
    public function __construct()
    {
        $client = new \Google_Client();
        $client->setApplicationName(self::APP_NAME);
        $client->setAuthConfig(self::KEY_FILE_LOCATION);
        $client->setScopes(self::SCOPES);
        $this->webmasters = new \Google_Service_Webmasters($client);
    }

    /**
     * サイトマップ送信
     */
    public function sitemapsSubmit($url, $feedUrl)
    {
        return $this->webmasters->sitemaps->submit($url, $feedUrl);
    }
}