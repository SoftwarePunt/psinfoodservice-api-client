<?php

namespace SoftwarePunt\PSAPI\Models\Responses;

use Psr\Http\Message\ResponseInterface;

class ApiResponse
{
    private \SimpleXMLElement $xml;

    private string $version;
    private int $totalRowCount;
    private string $transactionRef;

    public function __construct(string $xmlRaw)
    {
        $this->parseXml($xmlRaw);
    }

    public static function fromResponse(ResponseInterface $httpResponse): ApiResponse
    {
        return new ApiResponse($httpResponse->getBody()->getContents());
    }

    // -----------------------------------------------------------------------------------------------------------------
    // Parse

    protected function parseXml(string $xmlRaw): void
    {
        $xml = simplexml_load_string($xmlRaw);

        if (!($xml instanceof \SimpleXMLElement))
            throw new \InvalidArgumentException("Content string could not be parsed as XML");

        $this->xml = $xml;

        if (!$this->readHeader())
            throw new \InvalidArgumentException("Content string does not appear to be a valid PS-API response");
    }

    protected function readHeader(): bool
    {
        $header = $this->xml->xpath('/envelope/header')[0] ?? null;

        if (!$header)
            return false;

        $headerData = (array)$header;

        $this->version = $headerData['version'] ?? "";
        $this->totalRowCount = intval($headerData['totalrowcount'] ?? 1);
        $this->transactionRef = $headerData['transactionRef'] ?? "";
        return true;
    }

    public function getBody(): ?ResponseElement
    {
        if ($body = $this->xml->xpath('/envelope/body/*')[0] ?? null) {
            return new ResponseElement($body);
        }
        return null;
    }

    // -----------------------------------------------------------------------------------------------------------------
    // Getters

    public function getVersion(): string
    {
        return $this->version;
    }

    public function getTotalRowCount(): int
    {
        return $this->totalRowCount;
    }

    public function getTransactionRef(): string
    {
        return $this->transactionRef;
    }
}