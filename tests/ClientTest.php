<?php

use PHPUnit\Framework\TestCase;
use SoftwarePunt\PSAPI\Client;

class ClientTest extends TestCase
{
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

    public function testBuildRequest_GET()
    {
        $client = new Client();
        $request = $client->buildRequest('/master/all', ['take' => 2]);
        $this->assertSame(
            expected: "GET",
            actual: $request->getMethod()
        );
        $this->assertSame(
            expected: "https://webapi.psinfoodservice.com/v6/prod/api/master/all?take=2",
            actual: (string)$request->getUri()
        );
        $this->assertStringContainsString(
            needle: "psinfoodservice-api-client",
            haystack: $request->getHeaderLine('User-Agent')
        );
    }
}
