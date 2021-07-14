<?php

namespace SoftwarePunt\PSAPI\Api;

use SoftwarePunt\PSAPI\Models\Entities\Products;
use SoftwarePunt\PSAPI\Models\Params\ProductSearchParams;

class ProductApi extends AbstractApi
{
    public function search(?ProductSearchParams $params): Products
    {
        if (!$params) {
            // Default params
            $params = new ProductSearchParams();
            $params->ShowPublicProductSet = true;
        }

        $response = $this->post('/Product/Search', $params->toPostData())
            ->getBody();

        $products = new Products();
        $products->fillFromItem($response);
        return $products;
    }
}