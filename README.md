# OpenAPIClient-php

API de Pago Fácil

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 2.1.5
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/PSTPAGOFACIL/sdk-apis-php"
    }
  ],
  "require": {
    "PSTPAGOFACIL/sdk-apis-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login_body = new \OpenAPI\Client\Model\LoginBody(); // \OpenAPI\Client\Model\LoginBody | 

try {
    $result = $apiInstance->usersLoginPost($login_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->usersLoginPost: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://apis.pgf.cl*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthApi* | [**usersLoginPost**](docs/Api/AuthApi.md#usersloginpost) | **POST** /users/login | Autentificación con usuario y clave.
*IndicatorsApi* | [**indicatorsRemittancesGet**](docs/Api/IndicatorsApi.md#indicatorsremittancesget) | **GET** /indicators/remittances | Obtiene los datos de los abonos (remittances) realizados en una fecha específica y los futuros, además del saldo disponible
*PaymentsApi* | [**paymentsGet**](docs/Api/PaymentsApi.md#paymentsget) | **GET** /payments | 
*RemittancesApi* | [**remittancesConciliationGet**](docs/Api/RemittancesApi.md#remittancesconciliationget) | **GET** /remittances/conciliation | 
*TrxsApi* | [**trxsIdGet**](docs/Api/TrxsApi.md#trxsidget) | **GET** /trxs/{id} | Obtiene la informacion de la transacción exitosa, asociada a un id
*TrxsApi* | [**trxsIdTrxNullificationGet**](docs/Api/TrxsApi.md#trxsidtrxnullificationget) | **GET** /trxs/{idTrx}/nullification/ | 
*TrxsApi* | [**trxsIdTrxNullificationPost**](docs/Api/TrxsApi.md#trxsidtrxnullificationpost) | **POST** /trxs/{idTrx}/nullification | 
*TrxsApi* | [**trxsIdTrxNullificationStatusGet**](docs/Api/TrxsApi.md#trxsidtrxnullificationstatusget) | **GET** /trxs/{idTrx}/nullification/status | 
*TrxsApi* | [**trxsPost**](docs/Api/TrxsApi.md#trxspost) | **POST** /trxs | 
*UsersApi* | [**usersGet**](docs/Api/UsersApi.md#usersget) | **GET** /users | Obtener informacion del usuario.
*WebhooksApi* | [**webhooksIdUserGet**](docs/Api/WebhooksApi.md#webhooksiduserget) | **GET** /webhooks/{idUser} | 
*WebhooksApi* | [**webhooksIdUserWebhookDelete**](docs/Api/WebhooksApi.md#webhooksiduserwebhookdelete) | **DELETE** /webhooks/{idUser}/{webhook} | 
*WebhooksApi* | [**webhooksIdUserWebhookPut**](docs/Api/WebhooksApi.md#webhooksiduserwebhookput) | **PUT** /webhooks/{idUser}/{webhook} | 
*WebhooksApi* | [**webhooksPost**](docs/Api/WebhooksApi.md#webhookspost) | **POST** /webhooks | 


## Documentation For Models

 - [BillingDetails](docs/Model/BillingDetails.md)
 - [DataLoginResponse](docs/Model/DataLoginResponse.md)
 - [Document](docs/Model/Document.md)
 - [FutureRemittances](docs/Model/FutureRemittances.md)
 - [InlineObject](docs/Model/InlineObject.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2001Body](docs/Model/InlineResponse2001Body.md)
 - [InlineResponse2001BodyData](docs/Model/InlineResponse2001BodyData.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2002Data](docs/Model/InlineResponse2002Data.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2003Data](docs/Model/InlineResponse2003Data.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2005Types](docs/Model/InlineResponse2005Types.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse200Data](docs/Model/InlineResponse200Data.md)
 - [InlineResponse200DataDocument](docs/Model/InlineResponse200DataDocument.md)
 - [InlineResponse200DataItems](docs/Model/InlineResponse200DataItems.md)
 - [InlineResponse200DataNullifications](docs/Model/InlineResponse200DataNullifications.md)
 - [InlineResponse201](docs/Model/InlineResponse201.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [InlineResponse401](docs/Model/InlineResponse401.md)
 - [InlineResponse4011](docs/Model/InlineResponse4011.md)
 - [InlineResponse4012](docs/Model/InlineResponse4012.md)
 - [InlineResponse403](docs/Model/InlineResponse403.md)
 - [InlineResponse404](docs/Model/InlineResponse404.md)
 - [InlineResponse409](docs/Model/InlineResponse409.md)
 - [InlineResponse500](docs/Model/InlineResponse500.md)
 - [LoginBody](docs/Model/LoginBody.md)
 - [LoginResponse](docs/Model/LoginResponse.md)
 - [NullificationStatus](docs/Model/NullificationStatus.md)
 - [NullificationType](docs/Model/NullificationType.md)
 - [RemittanceByDate](docs/Model/RemittanceByDate.md)
 - [RequestBodyNullification](docs/Model/RequestBodyNullification.md)
 - [RequestBodyTrx](docs/Model/RequestBodyTrx.md)
 - [RequestBodyWebhook](docs/Model/RequestBodyWebhook.md)
 - [ResponseBodyGetTrx](docs/Model/ResponseBodyGetTrx.md)
 - [ResponseBodyGetTrxData](docs/Model/ResponseBodyGetTrxData.md)
 - [ResponseBodyNullification](docs/Model/ResponseBodyNullification.md)
 - [ResponseBodyNullificationData](docs/Model/ResponseBodyNullificationData.md)
 - [ResponseBodyRemittances](docs/Model/ResponseBodyRemittances.md)
 - [ResponseBodyRemittancesData](docs/Model/ResponseBodyRemittancesData.md)
 - [Shippment](docs/Model/Shippment.md)
 - [Status](docs/Model/Status.md)
 - [XCustomerEmail](docs/Model/XCustomerEmail.md)
 - [XShopCountry](docs/Model/XShopCountry.md)
 - [XUrlCallback](docs/Model/XUrlCallback.md)
 - [XUrlCancel](docs/Model/XUrlCancel.md)
 - [XUrlComplete](docs/Model/XUrlComplete.md)


## Documentation For Authorization



## JWTToken


- **Type**: Bearer authentication (JWT)



## Token


- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



## Author



