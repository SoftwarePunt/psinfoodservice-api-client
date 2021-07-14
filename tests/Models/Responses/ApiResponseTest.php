<?php

namespace Models\Responses;

use PHPUnit\Framework\TestCase;
use SoftwarePunt\PSAPI\Models\Responses\ApiResponse;

class ApiResponseTest extends TestCase
{
    public function testParse()
    {
        $sampleRaw = file_get_contents(getcwd() . "/tests/samples/search_public_products.xml");

        $response = new ApiResponse($sampleRaw);

        $this->assertSame("6.3.6", $response->getVersion());
        $this->assertSame(88995, $response->getTotalRowCount());
        $this->assertSame("6480XXXX-4b5c-474f-XXXX-2df0091c8fb2", $response->getTransactionRef());
    }
}
