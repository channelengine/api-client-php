# ChannelEngine
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.4.1
- Package version: 2.4.1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/channelengine/api-client-php.git"
    }
  ],
  "require": {
    "channelengine/api-client-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/ChannelEngine/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\CancellationApi();
$cancellation = new \ChannelEngine\ApiClient\Model\MerchantCancellationRequest(); // \ChannelEngine\ApiClient\Model\MerchantCancellationRequest | 

try {
    $result = $api_instance->cancellationCreate($cancellation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancellationApi->cancellationCreate: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://dev.channelengine.local/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CancellationApi* | [**cancellationCreate**](docs/Api/CancellationApi.md#cancellationcreate) | **POST** /v2/cancellations | Merchant: Create Cancellation
*CancellationApi* | [**cancellationIndex**](docs/Api/CancellationApi.md#cancellationindex) | **GET** /v2/cancellations | Channel: Get Cancellations
*ClientApi* | [**clientGet**](docs/Api/ClientApi.md#clientget) | **GET** /v2/clients/{language} | Get API Client
*OfferApi* | [**offerStockPriceUpdate**](docs/Api/OfferApi.md#offerstockpriceupdate) | **PUT** /v2/offer | Update stock or price.
*OrderApi* | [**orderAcknowledge**](docs/Api/OrderApi.md#orderacknowledge) | **POST** /v2/orders/acknowledge | Merchant: Acknowledge Order
*OrderApi* | [**orderCreate**](docs/Api/OrderApi.md#ordercreate) | **POST** /v2/orders | Channel: Create Order
*OrderApi* | [**orderGetByFilter**](docs/Api/OrderApi.md#ordergetbyfilter) | **GET** /v2/orders | Merchant: Get Orders By Filter
*OrderApi* | [**orderGetNew**](docs/Api/OrderApi.md#ordergetnew) | **GET** /v2/orders/new | Merchant: Get New Orders
*OrderApi* | [**orderInvoice**](docs/Api/OrderApi.md#orderinvoice) | **GET** /v2/orders/{merchantOrderNo}/invoice | Merchant: Download Invoice
*OrderApi* | [**orderPackingSlip**](docs/Api/OrderApi.md#orderpackingslip) | **GET** /v2/orders/{merchantOrderNo}/packingslip | Merchant: Download Packing Slip
*ProductApi* | [**productAcknowledgeDataChanges**](docs/Api/ProductApi.md#productacknowledgedatachanges) | **POST** /v2/products/data | Channel: Acknowledge Product Data Changes
*ProductApi* | [**productAcknowledgeOfferChanges**](docs/Api/ProductApi.md#productacknowledgeofferchanges) | **POST** /v2/products/offers | Channel: Acknowledge Product Offer Changes
*ProductApi* | [**productCreate**](docs/Api/ProductApi.md#productcreate) | **POST** /v2/products | Merchant: Upsert Products
*ProductApi* | [**productDelete**](docs/Api/ProductApi.md#productdelete) | **DELETE** /v2/products/{merchantProductNo} | Merchant: Delete Product
*ProductApi* | [**productGetByMerchantProductNo**](docs/Api/ProductApi.md#productgetbymerchantproductno) | **GET** /v2/products/merchant/{merchantProductNo} | Merchant: Get Product
*ProductApi* | [**productGetDataChanges**](docs/Api/ProductApi.md#productgetdatachanges) | **GET** /v2/products/data | Channel: Get Product Data Changes
*ProductApi* | [**productGetOfferChanges**](docs/Api/ProductApi.md#productgetofferchanges) | **GET** /v2/products/offers | Channel: Get Product Offer Changes
*ReturnApi* | [**returnDeclareForChannel**](docs/Api/ReturnApi.md#returndeclareforchannel) | **POST** /v2/returns/channel | Channel: Create Return
*ReturnApi* | [**returnDeclareForMerchant**](docs/Api/ReturnApi.md#returndeclareformerchant) | **POST** /v2/returns/merchant | Merchant: Create Return
*ReturnApi* | [**returnGetDeclaredByChannel**](docs/Api/ReturnApi.md#returngetdeclaredbychannel) | **GET** /v2/returns/merchant | Merchant: Get Returns
*ReturnApi* | [**returnGetDeclaredByMerchant**](docs/Api/ReturnApi.md#returngetdeclaredbymerchant) | **GET** /v2/returns/channel | Channel: Get Returns
*ShipmentApi* | [**shipmentCreate**](docs/Api/ShipmentApi.md#shipmentcreate) | **POST** /v2/shipments | Merchant: Create Shipment
*ShipmentApi* | [**shipmentIndex**](docs/Api/ShipmentApi.md#shipmentindex) | **GET** /v2/shipments | Channel: Get Shipments
*ShipmentApi* | [**shipmentUpdate**](docs/Api/ShipmentApi.md#shipmentupdate) | **PUT** /v2/shipments/{merchantShipmentNo} | Merchant: Update Shipment


## Documentation For Models

 - [ApiResponse](docs/Model/ApiResponse.md)
 - [ChannelCancellationLineResponse](docs/Model/ChannelCancellationLineResponse.md)
 - [ChannelCancellationResponse](docs/Model/ChannelCancellationResponse.md)
 - [ChannelOfferResponse](docs/Model/ChannelOfferResponse.md)
 - [ChannelOrderLineRequest](docs/Model/ChannelOrderLineRequest.md)
 - [ChannelOrderRequest](docs/Model/ChannelOrderRequest.md)
 - [ChannelProcessedChangesRequest](docs/Model/ChannelProcessedChangesRequest.md)
 - [ChannelProductChangesResponse](docs/Model/ChannelProductChangesResponse.md)
 - [ChannelProductResponse](docs/Model/ChannelProductResponse.md)
 - [ChannelReferencesRequest](docs/Model/ChannelReferencesRequest.md)
 - [ChannelReturnLineRequest](docs/Model/ChannelReturnLineRequest.md)
 - [ChannelReturnLineResponse](docs/Model/ChannelReturnLineResponse.md)
 - [ChannelReturnRequest](docs/Model/ChannelReturnRequest.md)
 - [ChannelReturnResponse](docs/Model/ChannelReturnResponse.md)
 - [ChannelShipmentLineResponse](docs/Model/ChannelShipmentLineResponse.md)
 - [ChannelShipmentResponse](docs/Model/ChannelShipmentResponse.md)
 - [CollectionOfChannelCancellationResponse](docs/Model/CollectionOfChannelCancellationResponse.md)
 - [CollectionOfChannelOfferResponse](docs/Model/CollectionOfChannelOfferResponse.md)
 - [CollectionOfChannelReturnResponse](docs/Model/CollectionOfChannelReturnResponse.md)
 - [CollectionOfChannelShipmentResponse](docs/Model/CollectionOfChannelShipmentResponse.md)
 - [CollectionOfMerchantOrderResponse](docs/Model/CollectionOfMerchantOrderResponse.md)
 - [CollectionOfMerchantReturnResponse](docs/Model/CollectionOfMerchantReturnResponse.md)
 - [EntitiesAddressModels](docs/Model/EntitiesAddressModels.md)
 - [ExtraDataItem](docs/Model/ExtraDataItem.md)
 - [MerchantCancellationLineRequest](docs/Model/MerchantCancellationLineRequest.md)
 - [MerchantCancellationRequest](docs/Model/MerchantCancellationRequest.md)
 - [MerchantOrderLineResponse](docs/Model/MerchantOrderLineResponse.md)
 - [MerchantOrderResponse](docs/Model/MerchantOrderResponse.md)
 - [MerchantProductRequest](docs/Model/MerchantProductRequest.md)
 - [MerchantProductResponse](docs/Model/MerchantProductResponse.md)
 - [MerchantReturnLineRequest](docs/Model/MerchantReturnLineRequest.md)
 - [MerchantReturnLineResponse](docs/Model/MerchantReturnLineResponse.md)
 - [MerchantReturnRequest](docs/Model/MerchantReturnRequest.md)
 - [MerchantReturnResponse](docs/Model/MerchantReturnResponse.md)
 - [MerchantShipmentLineRequest](docs/Model/MerchantShipmentLineRequest.md)
 - [MerchantShipmentRequest](docs/Model/MerchantShipmentRequest.md)
 - [MerchantShipmentTrackingRequest](docs/Model/MerchantShipmentTrackingRequest.md)
 - [MerchantStockPriceUpdateRequest](docs/Model/MerchantStockPriceUpdateRequest.md)
 - [OrderAcknowledgement](docs/Model/OrderAcknowledgement.md)
 - [OrderFilter](docs/Model/OrderFilter.md)
 - [ProductCreationResult](docs/Model/ProductCreationResult.md)
 - [ProductMessage](docs/Model/ProductMessage.md)
 - [SingleOfChannelProductChangesResponse](docs/Model/SingleOfChannelProductChangesResponse.md)
 - [SingleOfCollectionsDictionary2Generic](docs/Model/SingleOfCollectionsDictionary2Generic.md)
 - [SingleOfMerchantProductResponse](docs/Model/SingleOfMerchantProductResponse.md)
 - [SingleOfProductCreationResult](docs/Model/SingleOfProductCreationResult.md)


## Documentation For Authorization


## apikey

- **Type**: API key
- **API key parameter name**: apikey
- **Location**: URL query string


## Author




