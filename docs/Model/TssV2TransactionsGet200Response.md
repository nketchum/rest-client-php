# TssV2TransactionsGet200Response

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | An unique identification number generated by Cybersource to identify the submitted request. Returned by all services. It is also appended to the endpoint of the resource. On incremental authorizations, this value with be the same as the identification number returned in the original authorization response. | [optional] 
**rootId** | **string** | Contains the transaction identifier for the first transaction in the series of transactions. For example, you might send an authorization request for a payment, followed by a capture request for that payment, and then a refund request for that captured payment. Each of those requests, if successful, creates a resource that is assigned an identifier, which is returned in the response. The rootId identifies the first ID in the series, which in this case would be the ID of the original authorization. | [optional] 
**reconciliationId** | **string** | Reference number for the transaction. Depending on how your Cybersource account is configured, this value could either be provided in the API request or generated by CyberSource. The actual value used in the request to the processor is provided back to you by Cybersource in the response. | [optional] 
**merchantId** | **string** | Your CyberSource merchant ID. | [optional] 
**submitTimeUTC** | **string** | Time of request in UTC. Format: &#x60;YYYY-MM-DDThh:mm:ssZ&#x60; **Example** &#x60;2016-08-11T22:47:57Z&#x60; equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The &#x60;T&#x60; separates the date and the time. The &#x60;Z&#x60; indicates UTC.  Returned by Cybersource for all services. | [optional] 
**status** | **string** | The status of the submitted transaction. | [optional] 
**applicationInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseApplicationInformation**](TssV2TransactionsGet200ResponseApplicationInformation.md) |  | [optional] 
**buyerInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseBuyerInformation**](TssV2TransactionsGet200ResponseBuyerInformation.md) |  | [optional] 
**clientReferenceInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseClientReferenceInformation**](TssV2TransactionsGet200ResponseClientReferenceInformation.md) |  | [optional] 
**consumerAuthenticationInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseConsumerAuthenticationInformation**](TssV2TransactionsGet200ResponseConsumerAuthenticationInformation.md) |  | [optional] 
**deviceInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseDeviceInformation**](TssV2TransactionsGet200ResponseDeviceInformation.md) |  | [optional] 
**errorInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseErrorInformation**](TssV2TransactionsGet200ResponseErrorInformation.md) |  | [optional] 
**installmentInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseInstallmentInformation**](TssV2TransactionsGet200ResponseInstallmentInformation.md) |  | [optional] 
**fraudMarkingInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseFraudMarkingInformation**](TssV2TransactionsGet200ResponseFraudMarkingInformation.md) |  | [optional] 
**healthCareInformation** | [**\CyberSource\Model\Ptsv2paymentsHealthCareInformation**](Ptsv2paymentsHealthCareInformation.md) |  | [optional] 
**merchantDefinedInformation** | [**\CyberSource\Model\Ptsv2paymentsMerchantDefinedInformation[]**](Ptsv2paymentsMerchantDefinedInformation.md) | The object containing the custom data that the merchant defines. | [optional] 
**merchantInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseMerchantInformation**](TssV2TransactionsGet200ResponseMerchantInformation.md) |  | [optional] 
**orderInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformation**](TssV2TransactionsGet200ResponseOrderInformation.md) |  | [optional] 
**paymentInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformation**](TssV2TransactionsGet200ResponsePaymentInformation.md) |  | [optional] 
**paymentInsightsInformation** | [**\CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentInsightsInformation**](PtsV2PaymentsPost201ResponsePaymentInsightsInformation.md) |  | [optional] 
**payoutOptions** | [**\CyberSource\Model\TssV2TransactionsGet200ResponsePayoutOptions**](TssV2TransactionsGet200ResponsePayoutOptions.md) |  | [optional] 
**processingInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseProcessingInformation**](TssV2TransactionsGet200ResponseProcessingInformation.md) |  | [optional] 
**processorInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformation**](TssV2TransactionsGet200ResponseProcessorInformation.md) |  | [optional] 
**pointOfSaleInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponsePointOfSaleInformation**](TssV2TransactionsGet200ResponsePointOfSaleInformation.md) |  | [optional] 
**riskInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformation**](TssV2TransactionsGet200ResponseRiskInformation.md) |  | [optional] 
**senderInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseSenderInformation**](TssV2TransactionsGet200ResponseSenderInformation.md) |  | [optional] 
**tokenInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseTokenInformation**](TssV2TransactionsGet200ResponseTokenInformation.md) |  | [optional] 
**links** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseLinks**](TssV2TransactionsGet200ResponseLinks.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

