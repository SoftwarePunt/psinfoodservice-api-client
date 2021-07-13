# psinfoodservice-api-client
***Unofficial* PHP API Client for PS in foodservice Web API (PS-API)**

This library helps you interact with the PS-API, version 6.

|🌍 **PS in foodservice**|https://psinfoodservice.nl/|
|---|---|
|📕 **API documentation**|https://webapi.psinfoodservice.com/V6/prod/Home/EN|
|📦 **Composer package**|[softwarepunt/psinfoodservice-api-client](softwarepunt/psinfoodservice-api-client)|

## Installation
### Requirements
- PHP 8.0+
  - with extensions: curl, xml 
- [Composer](https://getcomposer.org/)

### Setup
Use Composer to add the package as a dependency to your project:

```shell
composer require softwarepunt/psinfoodservice-api-client
```

## Usage
### Getting started
To begin, include the Client and set your credentials and options. 

🔒 If you do not have credentials yet, [contact PS in foodservice](https://webapi.psinfoodservice.com/V6/prod/Home/EN) to request them first.

```php
<?php

use SoftwarePunt\PSAPI\Client;

require_once "vendor/autoload.php";

$client = new Client();
$client->setUsername("webapi@yourorg.ps");
$client->setPassword("************");
$client->setTimeout(30);
```

All implemented API routes will match the URL structure, for example:

```php
// Example of structure - the code route for "api/Product/Search" call:
$client->product()->search(); 
```

⚠ **Not all API features are implemented yet. PRs are welcome. :)**

### Searching for products
You can search for a product by providing parameters. You must select one "product set" at minimum; for example: all public products:

```php
use SoftwarePunt\PSAPI\Models\Params\ProductSearchParams;

$searchParams = new ProductSearchParams();
$searchParams->ShowPublicProductSet = true;

$results = $client->product()->search($searchParams);
```