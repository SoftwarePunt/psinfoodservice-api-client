<?php

namespace SoftwarePunt\PSAPI;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use SoftwarePunt\PSAPI\Api\ProductApi;
use SoftwarePunt\PSAPI\Models\PsApiException;
use SoftwarePunt\PSAPI\Models\Responses\ApiResponse;

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
     * Sends an HTTP request using the API credentials and options.
     *
     * @throws PsApiException On HTTP request / network error
     */
    public function sendRequest(string $path, ?array $queryParams = null, ?array $postData = null): ApiResponse
    {
        if (empty($this->username) || empty($this->password))
            throw new \RuntimeException('Username or password is missing, cannot send requests');

        $requestMethod = empty($postData) ? "GET" : "POST";
        $requestUrl = $this->buildUrl($path, $queryParams);

        /**
         * @var $response ResponseInterface|null
         */
        $response = null;

        try {
            $response = $this->httpClient->request($requestMethod, $requestUrl, [
                'auth' => [$this->username, $this->password],
                'form_params' => $postData,
                'timeout' => $this->timeout,
                'http_errors' => false
            ]);
        } catch (GuzzleException $ex) {
            throw new PsApiException("Guzzle request error: {$ex->getMessage()}", previous: $ex);
        }

        if ($response->getStatusCode() !== 200) {
            $bodyText = $response->getBody()?->getContents() ?? "(Empty body)";
            throw new PsApiException("API response error ({$response->getReasonPhrase()}): {$bodyText}");
        }

        return ApiResponse::fromResponse($response);
    }

    // -----------------------------------------------------------------------------------------------------------------
    // API paths

    public function product(): ProductApi
    {
        return new ProductApi($this);
    }
}