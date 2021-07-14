<?php

namespace SoftwarePunt\PSAPI\Api;

use SoftwarePunt\PSAPI\Models\Params\ProductSearchParams;
use SoftwarePunt\PSAPI\Models\Responses\ApiResponse;

class ProductApi extends AbstractApi
{
    public function search(?ProductSearchParams $params): ApiResponse
    {
        if (!$params) {
            // Default params
            $params = new ProductSearchParams();
            $params->ShowPublicProductSet = true;
        }
        return $this->post('/Product/Search', $params->toPostData());
    }
}