# Swagger\Client\RemittancesApi

All URIs are relative to *https://apis.pgf.cl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**remittancesConciliationGet**](RemittancesApi.md#remittancesconciliationget) | **GET** /remittances/conciliation | 

# **remittancesConciliationGet**
> \Swagger\Client\Model\InlineResponse200 remittancesConciliationGet($email, $date)



Permite obtener la conciliación de los abonos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWTToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\RemittancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = new \Swagger\Client\Model\Email(); // \Swagger\Client\Model\Email | Email a consultar
$date = new \Swagger\Client\Model\\DateTime(); // \Swagger\Client\Model\\DateTime | Fecha de consulta año-mes-dia <br> Ej: 2019-12-31

try {
    $result = $apiInstance->remittancesConciliationGet($email, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemittancesApi->remittancesConciliationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [**\Swagger\Client\Model\Email**](../Model/.md)| Email a consultar |
 **date** | [**\Swagger\Client\Model\\DateTime**](../Model/.md)| Fecha de consulta año-mes-dia &lt;br&gt; Ej: 2019-12-31 |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[JWTToken](../../README.md#JWTToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

