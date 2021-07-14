<?php

namespace SoftwarePunt\PSAPI\Api;

use SoftwarePunt\PSAPI\Client;
use SoftwarePunt\PSAPI\Models\Responses\ApiResponse;

abstract class AbstractApi
{
    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function get(string $path, ?array $queryParams = null): ApiResponse
    {
        return $this->client->sendRequest($path, $queryParams);
    }

    protected function post(string $path, ?array $postData = null): ApiResponse
    {
        return $this->client->sendRequest($path, postData: $postData);
    }
}