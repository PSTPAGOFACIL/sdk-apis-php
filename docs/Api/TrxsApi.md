# Swagger\Client\TrxsApi

All URIs are relative to *https://apis.pgf.cl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**trxsIdGet**](TrxsApi.md#trxsidget) | **GET** /trxs/{id} | Obtiene la informacion de la transacción exitosa, asociada a un id
[**trxsIdTrxNullificationGet**](TrxsApi.md#trxsidtrxnullificationget) | **GET** /trxs/{idTrx}/nullification/ | 
[**trxsIdTrxNullificationPost**](TrxsApi.md#trxsidtrxnullificationpost) | **POST** /trxs/{idTrx}/nullification | 
[**trxsIdTrxNullificationStatusGet**](TrxsApi.md#trxsidtrxnullificationstatusget) | **GET** /trxs/{idTrx}/nullification/status | 
[**trxsPost**](TrxsApi.md#trxspost) | **POST** /trxs | 

# **trxsIdGet**
> \Swagger\Client\Model\ResponseBodyGetTrx trxsIdGet($id)

Obtiene la informacion de la transacción exitosa, asociada a un id

Retorna información de una transacción asociada a un id, para lo que debe ingresarse en el URL el ID de la transacción a consultar. <br> El token de autorización es el obtenido a través de /Login (\"Inherit from parent\") <br> Endpoints <br> - Producción https://apis.pgf.cl/trxs/{id} <br> - Desarrollo https://apis-dev.pgf.cl/trxs/{id}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWTToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TrxsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1.2; // float | 

try {
    $result = $apiInstance->trxsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrxsApi->trxsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**|  |

### Return type

[**\Swagger\Client\Model\ResponseBodyGetTrx**](../Model/ResponseBodyGetTrx.md)

### Authorization

[JWTToken](../../README.md#JWTToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trxsIdTrxNullificationGet**
> \Swagger\Client\Model\InlineResponse2002 trxsIdTrxNullificationGet($id_trx)



Obtiene las anulaciones asociadas a una transacción

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWTToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TrxsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_trx = 1.2; // float | 

try {
    $result = $apiInstance->trxsIdTrxNullificationGet($id_trx);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrxsApi->trxsIdTrxNullificationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_trx** | **float**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[JWTToken](../../README.md#JWTToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trxsIdTrxNullificationPost**
> \Swagger\Client\Model\ResponseBodyNullification trxsIdTrxNullificationPost($id_trx, $body)



Envía una transacción a anular

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWTToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TrxsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_trx = 1.2; // float | 
$body = new \Swagger\Client\Model\RequestBodyNullification(); // \Swagger\Client\Model\RequestBodyNullification | 

try {
    $result = $apiInstance->trxsIdTrxNullificationPost($id_trx, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrxsApi->trxsIdTrxNullificationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_trx** | **float**|  |
 **body** | [**\Swagger\Client\Model\RequestBodyNullification**](../Model/RequestBodyNullification.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponseBodyNullification**](../Model/ResponseBodyNullification.md)

### Authorization

[JWTToken](../../README.md#JWTToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trxsIdTrxNullificationStatusGet**
> \Swagger\Client\Model\InlineResponse2003 trxsIdTrxNullificationStatusGet($id_trx, $verification_token)



Obtiene el estado de una anulación

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWTToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TrxsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_trx = 1.2; // float | 
$verification_token = new \Swagger\Client\Model\Uuid(); // \Swagger\Client\Model\Uuid | 

try {
    $result = $apiInstance->trxsIdTrxNullificationStatusGet($id_trx, $verification_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrxsApi->trxsIdTrxNullificationStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_trx** | **float**|  |
 **verification_token** | [**\Swagger\Client\Model\Uuid**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[JWTToken](../../README.md#JWTToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trxsPost**
> \Swagger\Client\Model\InlineResponse2001 trxsPost($body)



Crea una transaccion en estado pendiente. <br> La respuesta tiene distintos métodos y URLs para pago

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TrxsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RequestBodyTrx(); // \Swagger\Client\Model\RequestBodyTrx | 

try {
    $result = $apiInstance->trxsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrxsApi->trxsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestBodyTrx**](../Model/RequestBodyTrx.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

