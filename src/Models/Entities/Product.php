<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

class Product extends AbstractEntity
{
    public ProductSummary $summary;
}