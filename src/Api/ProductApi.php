<?php

namespace SoftwarePunt\PSAPI\Api;

use Psr\Http\Message\ResponseInterface;
use SoftwarePunt\PSAPI\Models\Params\ProductSearchParams;

class ProductApi extends AbstractApi
{
    public function search(?ProductSearchParams $params): ResponseInterface
    {
        if (!$params) {
            // Default params
            $params = new ProductSearchParams();
            $params->ShowPublicProductSet = true;
        }

        return $this->post('/Product/Search', $params->toPostData());
    }
}