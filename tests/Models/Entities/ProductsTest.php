<?php

namespace Models\Entities;

use PHPUnit\Framework\TestCase;
use SoftwarePunt\PSAPI\Models\Entities\Products;
use SoftwarePunt\PSAPI\Models\Responses\ResponseElement;

class ProductsTest extends TestCase
{
    private function __makeTestCollection(): ResponseElement
    {
        $sampleRaw = file_get_contents(getcwd() . "/tests/samples/search_public_products.xml");
        $xml = simplexml_load_string($sampleRaw);
        $productElement = $xml->xpath("/envelope/body/products")[0];
        return new ResponseElement($productElement);
    }

    public function testReadProductsCollection()
    {
        $products = new Products();
        $products->fillFromItem($this->__makeTestCollection(), null);

        $this->assertInstanceOf("SoftwarePunt\PSAPI\Models\Entities\Products", $products);
        $this->assertIsArray($products->product);

        $this->assertInstanceOf("SoftwarePunt\PSAPI\Models\Entities\Product", $products->product[0]);
    }
}
