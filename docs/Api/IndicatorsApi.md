# Swagger\Client\IndicatorsApi

All URIs are relative to *https://apis.pgf.cl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**indicatorsRemittancesGet**](IndicatorsApi.md#indicatorsremittancesget) | **GET** /indicators/remittances | Obtiene los datos de los abonos (remittances) realizados en una fecha específica y los futuros, además del saldo disponible

# **indicatorsRemittancesGet**
> \Swagger\Client\Model\ResponseBodyRemittances indicatorsRemittancesGet($id_user, $id_trx, $available_balance, $remittance_by_date, $future_remittances)

Obtiene los datos de los abonos (remittances) realizados en una fecha específica y los futuros, además del saldo disponible

1.-Requiere el uso del Token rescatado en el LOGIN (autorización heredada) <br> 2.-Se debe configurar los parámetros como \"Query Params\" <br> 3.-Solo los usuarios Administradores pueden obtener información etregando el parámetros \"IdUser\". Para usuarios no Administradores este parámetro no se informa y siempre retronará información del usuario logado. 4.-Se debe informar alguno de los parámetros, de lo contrario la API responde con un error <br>     -Setear en true or false los parámetros \"availableBalance\" o \"futureRemittances\" <br>     -Entregar una fecha en el parámetro \"remittanceByDate\"<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWTToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\IndicatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_user = new \Swagger\Client\Model\IdUser(); // \Swagger\Client\Model\IdUser | ID del usuario a consultar
$id_trx = new \Swagger\Client\Model\IdTrx(); // \Swagger\Client\Model\IdTrx | ID de la transacción a consultar
$available_balance = true; // bool | Define si se desea obtener el saldo disponible del usuario
$remittance_by_date = new \Swagger\Client\Model\\DateTime(); // \Swagger\Client\Model\\DateTime | Fecha de la que se desea obtener información del abono
$future_remittances = true; // bool | Define si se desea obtener los abonos futuros

try {
    $result = $apiInstance->indicatorsRemittancesGet($id_user, $id_trx, $available_balance, $remittance_by_date, $future_remittances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndicatorsApi->indicatorsRemittancesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_user** | [**\Swagger\Client\Model\IdUser**](../Model/.md)| ID del usuario a consultar | [optional]
 **id_trx** | [**\Swagger\Client\Model\IdTrx**](../Model/.md)| ID de la transacción a consultar | [optional]
 **available_balance** | **bool**| Define si se desea obtener el saldo disponible del usuario | [optional]
 **remittance_by_date** | [**\Swagger\Client\Model\\DateTime**](../Model/.md)| Fecha de la que se desea obtener información del abono | [optional]
 **future_remittances** | **bool**| Define si se desea obtener los abonos futuros | [optional]

### Return type

[**\Swagger\Client\Model\ResponseBodyRemittances**](../Model/ResponseBodyRemittances.md)

### Authorization

[JWTToken](../../README.md#JWTToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

