<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Utils\SearchConsole;

class WebmastersSitemapSend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'webmasters:sitemap:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'サイトマップを送信';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $url = 'https://agentzero.jp/';
        $feedUrl = 'https://agentzero.jp/sitemap.xml';

        $searchConsole = new SearchConsole();
        $res = $searchConsole->sitemapsSubmit($url, $feedUrl);
    }
}
