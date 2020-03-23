# Swagger\Client\WebhooksApi

All URIs are relative to *https://apis.pgf.cl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webhooksIdUserGet**](WebhooksApi.md#webhooksiduserget) | **GET** /webhooks/{idUser} | 
[**webhooksIdUserWebhookDelete**](WebhooksApi.md#webhooksiduserwebhookdelete) | **DELETE** /webhooks/{idUser}/{webhook} | 
[**webhooksIdUserWebhookPut**](WebhooksApi.md#webhooksiduserwebhookput) | **PUT** /webhooks/{idUser}/{webhook} | 
[**webhooksPost**](WebhooksApi.md#webhookspost) | **POST** /webhooks | 

# **webhooksIdUserGet**
> \Swagger\Client\Model\InlineResponse2004 webhooksIdUserGet($id_user)



Obtiene la lista de webhooks de un usuario.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_user = "id_user_example"; // string | ID del usuario a consultar

try {
    $result = $apiInstance->webhooksIdUserGet($id_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksIdUserGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_user** | **string**| ID del usuario a consultar |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksIdUserWebhookDelete**
> \Swagger\Client\Model\InlineResponse201 webhooksIdUserWebhookDelete($id_user, $webhook)



Elimina un webhook del usuario y tipo especificados

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_user = "id_user_example"; // string | ID del usuario a consultar
$webhook = "webhook_example"; // string | Tipo de evento del webhook

try {
    $result = $apiInstance->webhooksIdUserWebhookDelete($id_user, $webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksIdUserWebhookDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_user** | **string**| ID del usuario a consultar |
 **webhook** | **string**| Tipo de evento del webhook |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksIdUserWebhookPut**
> \Swagger\Client\Model\InlineResponse201 webhooksIdUserWebhookPut($id_user, $webhook, $body)



Actualiza un webhook para tus servicios.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_user = "id_user_example"; // string | ID del usuario a consultar
$webhook = "webhook_example"; // string | Tipo de evento del webhook
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $apiInstance->webhooksIdUserWebhookPut($id_user, $webhook, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksIdUserWebhookPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_user** | **string**| ID del usuario a consultar |
 **webhook** | **string**| Tipo de evento del webhook |
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksPost**
> \Swagger\Client\Model\InlineResponse201 webhooksPost($body)



Crea un webhook para tus servicios. <br> Se enviará un POST a esta URL cuando se realicen eventos como abonos a tu cuenta.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RequestBodyWebhook(); // \Swagger\Client\Model\RequestBodyWebhook | 

try {
    $result = $apiInstance->webhooksPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestBodyWebhook**](../Model/RequestBodyWebhook.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

