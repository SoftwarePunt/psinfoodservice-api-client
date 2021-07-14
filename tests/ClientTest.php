<?php

use PHPUnit\Framework\TestCase;
use SoftwarePunt\PSAPI\Client;

class ClientTest extends TestCase
{
    // -----------------------------------------------------------------------------------------------------------------
    // Config

    public function testBuildUrl()
    {
        $client = new Client();
        $this->assertSame(
            expected: 'https://webapi.psinfoodservice.com/v6/prod/api/master/all',
            actual: $client->buildUrl('/master/all'),
            message: 'buildUrl() should return absolute URLs'
        );
        $this->assertSame(
            expected: 'https://webapi.psinfoodservice.com/v6/prod/api/master/all',
            actual: $client->buildUrl('master/all'),
            message: 'buildUrl() should ensure the path has a slash prefix'
        );
        $this->assertSame(
            expected: 'https://webapi.psinfoodservice.com/v6/prod/api/product/search?ShowPublicProductSet=1&take=2',
            actual: $client->buildUrl('/product/search', ['ShowPublicProductSet' => true, 'take' => 2]),
            message: 'buildUrl() should format query parameters properly'
        );
    }

    // -----------------------------------------------------------------------------------------------------------------
    // Code path sanity checks

    public function testGetProductApi()
    {
        $productApi = (new Client())->product();
        $this->assertInstanceOf("SoftwarePunt\PSAPI\Api\ProductApi", $productApi);
    }
}
