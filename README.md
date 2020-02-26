# Criteo Marketing SDK for PHP

[![Build Status](https://travis-ci.com/criteo/criteo-php-marketing-sdk.svg?branch=master)](https://travis-ci.com/criteo/criteo-php-marketing-sdk)
[![](https://img.shields.io/packagist/v/criteo/criteo-php-marketing-sdk)](https://packagist.org/packages/criteo/criteo-php-marketing-sdk)

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: v.1.0
- Package version: 1.0.7
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 7.1 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/):

either run the following command: `composer require criteo/criteo-php-marketing-sdk`

or add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/criteo/criteo-php-marketing-sdk.git"
    }
  ],
  "require": {
    "criteo/criteo-php-marketing-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/CriteoMarketing/vendor/autoload.php');
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

$clientId = 'YOUR_CLIENT_ID';
$clientCredentials = 'YOUR_PASSWORD';

// Automatic token refresh
$apiInstance = new Criteo\Marketing\Api\AdvertisersApi(new TokenAutoRefreshClient($clientId, $clientCredentials));

$advertiser_id = 56;
$authorization = 'Bearer VALID_JWT_TOKEN_BASE64';

try {
    $result = $apiInstance->getCampaigns($advertiser_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}

?>
```

You can find the full example [here](examples/).

## Documentation for API Endpoints

All URIs are relative to *https://api.criteo.com/marketing*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdvertisersApi* | [**getCampaigns**](docs/Api/AdvertisersApi.md#getcampaigns) | **GET** /v1/advertisers/{advertiserId}/campaigns | Gets all advertiser&#39;s campaigns
*AdvertisersApi* | [**getCategories**](docs/Api/AdvertisersApi.md#getcategories) | **GET** /v1/advertisers/{advertiserId}/categories | Gets all advertiser&#39;s categories
*AdvertisersApi* | [**getCategory**](docs/Api/AdvertisersApi.md#getcategory) | **GET** /v1/advertisers/{advertiserId}/categories/{categoryHashCode} | Gets a specific advertiser&#39;s category
*AudiencesApi* | [**addRemoveUsersToAudience**](docs/Api/AudiencesApi.md#addremoveuserstoaudience) | **PATCH** /v1/audiences/userlist/{audienceId} | Add/Remove users to an Audience.
*AudiencesApi* | [**createAudience**](docs/Api/AudiencesApi.md#createaudience) | **POST** /v1/audiences/userlist | Create a new Audience.
*AudiencesApi* | [**deleteAudience**](docs/Api/AudiencesApi.md#deleteaudience) | **DELETE** /v1/audiences/{audienceId} | Delete an Audience.
*AudiencesApi* | [**getAudiences**](docs/Api/AudiencesApi.md#getaudiences) | **GET** /v1/audiences | Get the list of Audiences.
*AudiencesApi* | [**removeUsersFromAudience**](docs/Api/AudiencesApi.md#removeusersfromaudience) | **DELETE** /v1/audiences/userlist/{audienceId}/users | Remove all users from an Audience.
*AudiencesApi* | [**updateAudienceMetadata**](docs/Api/AudiencesApi.md#updateaudiencemetadata) | **PUT** /v1/audiences/{audienceId} | Update an Audience metadata.
*AuthenticationApi* | [**oAuth2TokenPost**](docs/Api/AuthenticationApi.md#oauth2tokenpost) | **POST** /oauth2/token | Authenticates provided credentials and returns an access token
*BudgetsApi* | [**get**](docs/Api/BudgetsApi.md#get) | **GET** /v1/budgets | Gets budgets
*CampaignsApi* | [**getBids**](docs/Api/CampaignsApi.md#getbids) | **GET** /v1/campaigns/bids | Gets a the bids for campaigns and their categories
*CampaignsApi* | [**getCampaign**](docs/Api/CampaignsApi.md#getcampaign) | **GET** /v1/campaigns/{campaignId} | Gets a specific campaign
*CampaignsApi* | [**getCampaigns**](docs/Api/CampaignsApi.md#getcampaigns) | **GET** /v1/campaigns | Gets campaigns
*CampaignsApi* | [**getCategories**](docs/Api/CampaignsApi.md#getcategories) | **GET** /v1/campaigns/{campaignId}/categories | Gets categories
*CampaignsApi* | [**getCategory**](docs/Api/CampaignsApi.md#getcategory) | **GET** /v1/campaigns/{campaignId}/categories/{categoryHashCode} | Gets a specific category
*CampaignsApi* | [**updateBids**](docs/Api/CampaignsApi.md#updatebids) | **PUT** /v1/campaigns/bids | Update bids for campaigns and their categories
*CategoriesApi* | [**getCategories**](docs/Api/CategoriesApi.md#getcategories) | **GET** /v1/categories | Gets categories
*CategoriesApi* | [**updateCategories**](docs/Api/CategoriesApi.md#updatecategories) | **PUT** /v1/categories | Enables/disables categories
*PortfolioApi* | [**getPortfolio**](docs/Api/PortfolioApi.md#getportfolio) | **GET** /v1/portfolio | Gets portfolio
*PublishersApi* | [**getStats**](docs/Api/PublishersApi.md#getstats) | **POST** /v1/publishers/stats | 
*SellersApi* | [**createBudgets**](docs/Api/SellersApi.md#createbudgets) | **POST** /v1/sellers/budgets | Creates a budget for a seller/list of sellers.
*SellersApi* | [**get**](docs/Api/SellersApi.md#get) | **GET** /v1/sellers | Gets sellers details.
*SellersApi* | [**getCampaigns**](docs/Api/SellersApi.md#getcampaigns) | **GET** /v1/sellers/campaigns | Gets campaigns
*SellersApi* | [**getStats**](docs/Api/SellersApi.md#getstats) | **POST** /v1/sellers/stats | Generates a statistics report
*SellersApi* | [**updateBids**](docs/Api/SellersApi.md#updatebids) | **PUT** /v1/sellers/bids | Set or update a bid for a seller/list of sellers.
*SellersApi* | [**updateBudgets**](docs/Api/SellersApi.md#updatebudgets) | **PUT** /v1/sellers/budgets | Updates a budget for a seller/list of sellers.
*SellersV2Api* | [**createSellerBudgets**](docs/Api/SellersV2Api.md#createsellerbudgets) | **POST** /v2/crp/budgets | Create a collection of budgets.
*SellersV2Api* | [**createSellerCampaignsBySeller**](docs/Api/SellersV2Api.md#createsellercampaignsbyseller) | **POST** /v2/crp/sellers/{sellerId}/seller-campaigns | Create a SellerCampaign
*SellersV2Api* | [**createSellers**](docs/Api/SellersV2Api.md#createsellers) | **POST** /v2/crp/advertisers/{advertiserId}/sellers | Create new sellers for an advertiser
*SellersV2Api* | [**getAdvertiserCampaigns**](docs/Api/SellersV2Api.md#getadvertisercampaigns) | **GET** /v2/crp/advertisers/{advertiserId} | Get the collection of CRP campaigns associated with the advertiserId.
*SellersV2Api* | [**getAdvertisers**](docs/Api/SellersV2Api.md#getadvertisers) | **GET** /v2/crp/advertisers | Get the collection of advertisers associated with the user.
*SellersV2Api* | [**getBudgetsBySeller**](docs/Api/SellersV2Api.md#getbudgetsbyseller) | **GET** /v2/crp/sellers/{sellerId}/budgets | Get a collection of budgets for this seller.
*SellersV2Api* | [**getBudgetsBySellerCampaignId**](docs/Api/SellersV2Api.md#getbudgetsbysellercampaignid) | **GET** /v2/crp/seller-campaigns/{sellerCampaignId}/budgets | Get a collection of budgets for this seller campaign.
*SellersV2Api* | [**getSeller**](docs/Api/SellersV2Api.md#getseller) | **GET** /v2/crp/sellers/{sellerId} | Get details for a seller.
*SellersV2Api* | [**getSellerBudget**](docs/Api/SellersV2Api.md#getsellerbudget) | **GET** /v2/crp/budgets/{budgetId} | Get details for a budget.
*SellersV2Api* | [**getSellerBudgets**](docs/Api/SellersV2Api.md#getsellerbudgets) | **GET** /v2/crp/budgets | Get a collection of budgets.
*SellersV2Api* | [**getSellerCampaign**](docs/Api/SellersV2Api.md#getsellercampaign) | **GET** /v2/crp/seller-campaigns/{sellerCampaignId} | Get details for a seller campaign.
*SellersV2Api* | [**getSellerCampaigns**](docs/Api/SellersV2Api.md#getsellercampaigns) | **GET** /v2/crp/seller-campaigns | Get a collection of seller campaigns.
*SellersV2Api* | [**getSellerCampaignsBySeller**](docs/Api/SellersV2Api.md#getsellercampaignsbyseller) | **GET** /v2/crp/sellers/{sellerId}/seller-campaigns | Get a collection of seller campaigns for this seller.
*SellersV2Api* | [**getSellers**](docs/Api/SellersV2Api.md#getsellers) | **GET** /v2/crp/sellers | Get a collection of sellers.
*SellersV2Api* | [**updateSellerBudget**](docs/Api/SellersV2Api.md#updatesellerbudget) | **PATCH** /v2/crp/budgets/{budgetId} | Modify a single budget.
*SellersV2Api* | [**updateSellerBudgets**](docs/Api/SellersV2Api.md#updatesellerbudgets) | **PATCH** /v2/crp/budgets | Modify a collection of budgets.
*SellersV2Api* | [**updateSellerCampaign**](docs/Api/SellersV2Api.md#updatesellercampaign) | **PATCH** /v2/crp/seller-campaigns/{sellerCampaignId} | Update an existing seller campaign.
*SellersV2Api* | [**updateSellerCampaigns**](docs/Api/SellersV2Api.md#updatesellercampaigns) | **PATCH** /v2/crp/seller-campaigns | Update a collection of seller campaigns.
*SellersV2StatsApi* | [**campaigns**](docs/Api/SellersV2StatsApi.md#campaigns) | **GET** /v2/crp/stats/campaigns | Get stats by campaign.
*SellersV2StatsApi* | [**sellerCampaigns**](docs/Api/SellersV2StatsApi.md#sellercampaigns) | **GET** /v2/crp/stats/seller-campaigns | Get stats by seller-campaign.
*SellersV2StatsApi* | [**sellers**](docs/Api/SellersV2StatsApi.md#sellers) | **GET** /v2/crp/stats/sellers | Get stats by seller.
*StatisticsApi* | [**getStats**](docs/Api/StatisticsApi.md#getstats) | **POST** /v1/statistics | Generates a statistics report


## Documentation For Models

 - [AdvertiserCampaignMessage](docs/Model/AdvertiserCampaignMessage.md)
 - [AdvertiserInfoMessage](docs/Model/AdvertiserInfoMessage.md)
 - [AudienceCreateRequest](docs/Model/AudienceCreateRequest.md)
 - [AudienceCreateResponse](docs/Model/AudienceCreateResponse.md)
 - [AudiencePatchRequest](docs/Model/AudiencePatchRequest.md)
 - [AudiencePatchResponse](docs/Model/AudiencePatchResponse.md)
 - [AudiencePutRequest](docs/Model/AudiencePutRequest.md)
 - [AudienceResponse](docs/Model/AudienceResponse.md)
 - [AudiencesGetResponse](docs/Model/AudiencesGetResponse.md)
 - [BidMessage](docs/Model/BidMessage.md)
 - [BudgetMessage](docs/Model/BudgetMessage.md)
 - [CampaignBidChangeRequest](docs/Model/CampaignBidChangeRequest.md)
 - [CampaignBidChangeResponse](docs/Model/CampaignBidChangeResponse.md)
 - [CampaignBidMessage](docs/Model/CampaignBidMessage.md)
 - [CampaignMessage](docs/Model/CampaignMessage.md)
 - [CatalogProduct](docs/Model/CatalogProduct.md)
 - [CategoryBidChangeRequest](docs/Model/CategoryBidChangeRequest.md)
 - [CategoryBidMessage](docs/Model/CategoryBidMessage.md)
 - [CategoryMessage](docs/Model/CategoryMessage.md)
 - [CategoryUpdateError](docs/Model/CategoryUpdateError.md)
 - [CategoryUpdateInput](docs/Model/CategoryUpdateInput.md)
 - [CategoryUpdatesPerCatalog](docs/Model/CategoryUpdatesPerCatalog.md)
 - [CategoryUpdatesPerCatalogError](docs/Model/CategoryUpdatesPerCatalogError.md)
 - [CheckResult](docs/Model/CheckResult.md)
 - [ClientRegistrationRequestMessage](docs/Model/ClientRegistrationRequestMessage.md)
 - [ClientRegistrationResponseMessage](docs/Model/ClientRegistrationResponseMessage.md)
 - [CreateSellerBudgetMapiMessage](docs/Model/CreateSellerBudgetMapiMessage.md)
 - [CreateSellerCampaignMessageMapi](docs/Model/CreateSellerCampaignMessageMapi.md)
 - [ErrorSource](docs/Model/ErrorSource.md)
 - [GoogleProduct](docs/Model/GoogleProduct.md)
 - [IThrottlingConfiguration](docs/Model/IThrottlingConfiguration.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [Installment](docs/Model/Installment.md)
 - [InstallmentAmount](docs/Model/InstallmentAmount.md)
 - [LoyatyPoints](docs/Model/LoyatyPoints.md)
 - [MapiUserMessage](docs/Model/MapiUserMessage.md)
 - [MarketplaceCampaignMessage](docs/Model/MarketplaceCampaignMessage.md)
 - [MessageWithDetailsCampaignBidChangeResponse](docs/Model/MessageWithDetailsCampaignBidChangeResponse.md)
 - [MessageWithDetailsCategoryUpdatesPerCatalogError](docs/Model/MessageWithDetailsCategoryUpdatesPerCatalogError.md)
 - [PolicyRouteInfo](docs/Model/PolicyRouteInfo.md)
 - [PortfolioMessage](docs/Model/PortfolioMessage.md)
 - [Price](docs/Model/Price.md)
 - [ProductImporterMessage](docs/Model/ProductImporterMessage.md)
 - [PublisherFileStatsMessage](docs/Model/PublisherFileStatsMessage.md)
 - [PublisherStatsMessage](docs/Model/PublisherStatsMessage.md)
 - [PublisherStatsQueryMessage](docs/Model/PublisherStatsQueryMessage.md)
 - [RoutePolicy](docs/Model/RoutePolicy.md)
 - [SellerBase](docs/Model/SellerBase.md)
 - [SellerBidInfoMessage](docs/Model/SellerBidInfoMessage.md)
 - [SellerBidsMessage](docs/Model/SellerBidsMessage.md)
 - [SellerBudgetCreateMessage](docs/Model/SellerBudgetCreateMessage.md)
 - [SellerBudgetInfoMessage](docs/Model/SellerBudgetInfoMessage.md)
 - [SellerBudgetMessage](docs/Model/SellerBudgetMessage.md)
 - [SellerBudgetResponseMessage](docs/Model/SellerBudgetResponseMessage.md)
 - [SellerBudgetUpdateMessage](docs/Model/SellerBudgetUpdateMessage.md)
 - [SellerBudgetsCreateMessage](docs/Model/SellerBudgetsCreateMessage.md)
 - [SellerBudgetsMessage](docs/Model/SellerBudgetsMessage.md)
 - [SellerBudgetsUpdateMessage](docs/Model/SellerBudgetsUpdateMessage.md)
 - [SellerCampaignMessage](docs/Model/SellerCampaignMessage.md)
 - [SellerCampaignUpdate](docs/Model/SellerCampaignUpdate.md)
 - [SellerInfoMessage](docs/Model/SellerInfoMessage.md)
 - [SellerMessage](docs/Model/SellerMessage.md)
 - [ServiceStatusCheckResult](docs/Model/ServiceStatusCheckResult.md)
 - [Shipping](docs/Model/Shipping.md)
 - [ShippingSize](docs/Model/ShippingSize.md)
 - [StatsQueryMessage](docs/Model/StatsQueryMessage.md)
 - [StatsQueryMessageEx](docs/Model/StatsQueryMessageEx.md)
 - [Tax](docs/Model/Tax.md)
 - [ThrottlePolicy](docs/Model/ThrottlePolicy.md)
 - [ThrottlePolicyRates](docs/Model/ThrottlePolicyRates.md)
 - [UnitMeasure](docs/Model/UnitMeasure.md)
 - [UpdateSellerBudgetMessage](docs/Model/UpdateSellerBudgetMessage.md)
 - [UpdateSellerBudgetMessageBase](docs/Model/UpdateSellerBudgetMessageBase.md)


## Documentation For Authorization

In order to ease usage of this client library, you might want to use the TokenAutoRefreshClient
as explained in the [example](examples/).




### Authorization


- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



## Author
[Criteo](https://www.criteo.com/)

## Disclaimer
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

