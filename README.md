# psinfoodservice-api-client
***Unofficial* PHP API Client for PS in foodservice Web API (PS-API)**

[![PHPUnit](https://github.com/SoftwarePunt/psinfoodservice-api-client/actions/workflows/phpunit.yml/badge.svg)](https://github.com/SoftwarePunt/psinfoodservice-api-client/actions/workflows/phpunit.yml)
[![Version](http://poser.pugx.org/softwarepunt/psinfoodservice-api-client/version)](https://packagist.org/packages/softwarepunt/psinfoodservice-api-client)

This library helps you interact with the PS-API, version 6.

<table>
  <tbody>
    <tr>
      <td>🌍 <strong>PS in foodservice</strong></td>
      <td><a href="https://psinfoodservice.nl/">https://psinfoodservice.nl/</a></td>
    </tr>
    <tr>
      <td>📕 <strong>API documentation</strong></td>
      <td><a href="https://webapi.psinfoodservice.com/V6/prod/Home/EN">https://webapi.psinfoodservice.com/V6/prod/Home/EN</a></td>
    </tr>
    <tr>
      <td>📦 <strong>Composer package</strong></td>
      <td><a href="https://packagist.org/packages/softwarepunt/psinfoodservice-api-client">softwarepunt/psinfoodservice-api-client</a></td>
    </tr>
  </tbody>
</table>

⚠ **Heads up - Limited scope:** this library currently only supports retrieving product information. PRs for other API features are welcome. :)

## Installation
### Requirements
- PHP 8.0+
  - with extensions: curl, simplexml 
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

### Searching for products
You can search for a product by providing parameters. You must select one "product set" at minimum; for example: all public products.

You will typically use this to find a specific product, for example:

```php
use SoftwarePunt\PSAPI\Models\Params\ProductSearchParams;

$searchParams = new ProductSearchParams();
$searchParams->ShowPublicProductSet = true;
$searchParams->FilterOnEan = "1213456789125";

$products = $client->product()->search($searchParams);
$product = $products->product[0];
echo $product->summary->name; // PS Citroensnoepje 20g
```

☝ The objects returned by this library are based on the API's actual XML response structure. They are fully type-hinted and have docblocks where available. 

## Development

### Generating entity types
This project contains a tool that can generate or update entities from the XSD file provided by PS. All classes in `src/Models/Entities` are generated using this tool. You can use it as follows:

To use it, manually run the CLI script from the project directory:

```shell
php cli/xsdgen.php path/to/PS_XSD.xsd
```

You can download the latest XSD via the documentation page:
https://webapi.psinfoodservice.com/V6/prod/Documentation/Xsd