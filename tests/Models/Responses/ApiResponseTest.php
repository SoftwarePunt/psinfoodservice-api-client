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

        // Header parse
        $this->assertSame("6.3.6", $response->getVersion());
        $this->assertSame(88995, $response->getTotalRowCount());
        $this->assertSame("6480XXXX-4b5c-474f-XXXX-2df0091c8fb2", $response->getTransactionRef());

        // Collection - pagination
        $items = $response->asCollection();

        $this->assertSame(88995, $items->getTotalItemCount());
        $this->assertSame(10, $items->getPageSize());
        $this->assertSame(8900, $items->getPageCount());

        // Collection - item read
        $itemByIndex = $items->getByIndex(0);

        $this->assertSame("988887", $itemByIndex->getString("summary/id"));
        $this->assertSame("PS Citroensnoepje 20g", $itemByIndex->getString("summary/name"));
        $this->assertSame("PS Citroensnoepje 20g", $itemByIndex->getString("summary/name/value"));
        $this->assertSame(null, $itemByIndex->getString("summary/name/invalid"));
    }
}
