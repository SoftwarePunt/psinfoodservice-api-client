<?php

namespace SoftwarePunt\PSAPI\Api;

use Psr\Http\Message\ResponseInterface;
use SoftwarePunt\PSAPI\Client;

abstract class AbstractApi
{
    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function get(string $path, ?array $queryParams = null): ResponseInterface
    {
        return $this->client->sendRequest($path, $queryParams);
    }

    protected function post(string $path, ?array $postData = null): ResponseInterface
    {
        return $this->client->sendRequest($path, postData: $postData);
    }
}