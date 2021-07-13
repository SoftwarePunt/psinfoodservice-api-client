<?php

namespace SoftwarePunt\PSAPI;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Base API client for the PS in foodservice Web API (PS-API)
 */
class Client
{
    public const BaseUrl = "https://webapi.psinfoodservice.com/v6/prod/api";

    private \GuzzleHttp\Client $httpClient;

    private ?string $username;
    private ?string $password;
    private float $timeout = 0;

    // -----------------------------------------------------------------------------------------------------------------
    // Configuration

    /**
     * Initializes the PS-API client with optional options.
     *
     * @param string|null $username Username credential provided by PS in food service.
     * @param string|null $password Password credential provided by PS in food service.
     * @param float $timeout Total timeout of the request in seconds, or 0 to wait indefinitely.
     */
    public function __construct(?string $username = null, ?string $password = null, float $timeout = 0.0)
    {
        $this->httpClient = new GuzzleClient();
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setTimeout($timeout);
    }

    /**
     * Sets the API username credential, as provided by PS in food service.
     * Will affect all future requests.
     *
     * @param string|null $username
     */
    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    /**
     * Sets the API password credential, as provided by PS in food service.
     * Will affect all future requests.
     *
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * Sets the total timeout of all API requests in seconds, or 0 to wait indefinitely.
     * Will affect all future requests.
     *
     * @param float $timeout
     */
    public function setTimeout(float $timeout = 0.0)
    {
        $this->timeout = $timeout;
    }

    // -----------------------------------------------------------------------------------------------------------------
    // Request logic

    /**
     * Builds an absolute URL string for the PS-API.
     *
     * @param string $path The URL path (e.g. "/master/all")
     * @param array|null $queryParams Optional Query parameters
     * @return string The generated absolute URL, optionally with query parameters
     */
    public function buildUrl(string $path, ?array $queryParams = null): string
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

    /**
     * Builds an HTTP request for the PS-API.
     *
     * @param string $path The URL path (e.g. "/master/all")
     * @param array|null $queryParams Optional Query parameters
     * @param array|null $postData Optional POST parameters
     * @return RequestInterface The generated request
     */
    public function buildRequest(string $path, ?array $queryParams = null, ?array $postData = null): RequestInterface
    {
        $requestMethod = empty($postData) ? "GET" : "POST";
        $requestUrl = $this->buildUrl($path, $queryParams);

        return new Request($requestMethod, $requestUrl, [
            'User-Agent' => "softwarepunt/psinfoodservice-api-client"
        ]);
    }

    /**
     * Sends an HTTP request using the API credentials and options.
     *
     * @throws \GuzzleHttp\Exception\GuzzleException On HTTP request / network error
     */
    protected function sendRequest(RequestInterface $request): ResponseInterface
    {
        if (empty($this->username) || empty($this->password))
            throw new \RuntimeException('Username or password is missing, cannot send requests');

        return $this->httpClient->send($request, [
            'auth' => [$this->username, $this->password],
            'timeout' => $this->timeout,
            'http_errors' => false
        ]);
    }
}