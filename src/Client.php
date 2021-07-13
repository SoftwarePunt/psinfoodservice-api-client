<?php

namespace SoftwarePunt\PSAPI;

/**
 * Base API client for the PS in foodservice Web API (PS-API)
 */
class Client
{
    public const BaseUrl = "https://webapi.psinfoodservice.com/v6/prod/api";

    private ?string $username;
    private ?string $password;

    public function __construct(?string $username = null, ?string $password = null)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getUrl(string $path, ?array $queryParams = null): string
    {
        // Ensure path always starts with "/"
        if (!str_starts_with($path, '/')) {
            $path = '/' . $path;
        }

        $url = self::BaseUrl . $path;

        // Add query parameters if provided
        if (!empty($queryParams)) {
            $url .= '?';
            $url .= http_build_query($queryParams, encoding_type: PHP_QUERY_RFC3986);
        }

        return $url;
    }
}