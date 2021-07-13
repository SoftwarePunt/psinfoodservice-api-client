<?php

use PHPUnit\Framework\TestCase;
use SoftwarePunt\PSAPI\Client;

class ClientTest extends TestCase
{
    public function testGetUrl()
    {
        $client = new Client();
        $this->assertSame(
            expected: 'https://webapi.psinfoodservice.com/v6/prod/api/master/all',
            actual: $client->getUrl('/master/all'),
            message: 'getUrl() should return absolute URLs'
        );
        $this->assertSame(
            expected: 'https://webapi.psinfoodservice.com/v6/prod/api/master/all',
            actual: $client->getUrl('master/all'),
            message: 'getUrl() should ensure the path has a slash prefix'
        );
        $this->assertSame(
            expected: 'https://webapi.psinfoodservice.com/v6/prod/api/product/search?ShowPublicProductSet=1&take=2',
            actual: $client->getUrl('/product/search', ['ShowPublicProductSet' => true, 'take' => 2]),
            message: 'getUrl() should format query parameters properly'
        );
    }
}
