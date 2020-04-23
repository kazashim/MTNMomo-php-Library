## Momo

MomoPay library in PHP for the MTN MobileMoney. Developers can integrate into their apps.

## Product support

* Collections
* Disbursements
* Remittances

## To Get Started

* Signup For A developer  Account and [Register](https://momodeveloper.mtn.com/)

## Subscribe To Any Of The Products
* Collections
* Disbursements
* Remittances

## Generate UUID
To Generate UUID Go to This link [UUID-Generator](https://www.uuidgenerator.net/)

## Installation

Add the Autoload Path to get access to the MomoPay Library

```php
<?php
require 'vendor/autoload.php';
```
```php
<?php
use Cynojine\Mtnmomo\Products\Collection;


$options = [
    'subscriptionKey' => '', //Add Subscription key
    'xReferenceId' => '', //Api user reference id (in UUID format) Generate your UUID https://www.uuidgenerator.net/
    'apiKey' => '', // Api user key (Supply this after generating it 
];

```php
<?php
require 'vendor/autoload.php';
```

## Usage
### Creating a product instance

```php
<?php
use Cynojine\Mtnmomo\Products\Collection;
use Cynojine\Mtnmomo\Products\Disbursement;
use Cynojine\Mtnmomo\Products\Remittance;

$options = [
    'subscriptionKey' => '', //Product Subscription key
    'xReferenceId' => '', //Api user reference id (in UUID format) Generate your UUID https://www.uuidgenerator.net/
    'apiKey' => '', // Api user key (Supply this after generating it at 'Create API Key')
];

// Using collection
$collection = Collection::create($options);

// Using disbursement
$disbursement = Disbursement::create($options);

// Using remittance
$remittance = Remittance::create($options);

```

### Sandbox User Provisioning
#### Create API User
```php
<?php
use Cynojine\Mtnmomo\Products\Collection;
use Cynojine\Mtnmomo\Products\Disbursement;
use Cynojine\Mtnmomo\Products\Remittance;

// Using collection
$product = Collection::create($options);

// Using disbursement
$product = Disbursement::create($options);

// Using remittance
$product = Remittance::create($options);

$product->createApiUser(); //{"statusCode": 201}

```

#### GET API User Details
```php
<?php
use Cynojine\Mtnmomo\Products\Collection;
use Cynojine\Mtnmomo\Products\Disbursement;
use Cynojine\Mtnmomo\Products\Remittance;

// Using collection
$product = Collection::create($options);

// Using disbursement
$product = Disbursement::create($options);

// Using remittance
$product = Remittance::create($options);

$apiUser = $product->getApiUser();
$apiUser->getProviderCallbackHost(); //http://localhost:8000
$apiUser->getTargetEnvironment(); //sandbox

```

#### Create API Key
```php
<?php
use Cynojine\Mtnmomo\Products\Collection;
use Cynojine\Mtnmomo\Products\Disbursement;
use Cynojine\Mtnmomo\Products\Remittance;

// Using collection
$product = Collection::create($options);

// Using disbursement
$product = Disbursement::create($options);

// Using remittance
$product = Remittance::create($options);

$apiKey = $product->createApiKey();
$apiKey->getApiKey(); //apiKey

```

### Oauth 2.0
#### Get token
```php
<?php
use Cynojine\Mtnmomo\Products\Collection;
use Cynojine\Mtnmomo\Products\Disbursement;
use Cynojine\Mtnmomo\Products\Remittance;

// Using collection
$product = Collection::create($options);

// Using disbursement
$product = Disbursement::create($options);

// Using remittance
$product = Remittance::create($options);

$token = $product->getToken();
$token->getAccessToken(); //accessToken
$token->getTokenType(); //tokenType
$token->getExpiresIn(); //expiry in seconds

```

### Transactions
#### Get account balance
```php
<?php
use Cynojine\Mtnmomo\Products\Collection;
use Cynojine\Mtnmomo\Products\Disbursement;
use Cynojine\Mtnmomo\Products\Remittance;

// Using collection
$product = Collection::create($options);

// Using disbursement
$product = Disbursement::create($options);

// Using remittance
$product = Remittance::create($options);

$balance = $product->getAccountBalance();
$balance->getAvailableBalance(); //accountBalance
$balance->getCurrency(); //currency

```
#### Get account holder status
```php
<?php
use Cynojine\Mtnmomo\Products\Collection;
use Cynojine\Mtnmomo\Products\Disbursement;
use Cynojine\Mtnmomo\Products\Remittance;

// Using collection
$product = Collection::create($options);

// Using disbursement
$product = Disbursement::create($options);

// Using remittance
$product = Remittance::create($options);

$product->getAccountHolderInfo($accountHolderId); //{"statusCode": 201}

```

### Collections
#### Request to pay
```php
<?php
use Cynojine\Mtnmomo\Products\Collection;

// Using collection
$product = Collection::create($options);

$product->requestToPay($externalId, $partyId, $amount, $currency, $payerMessage = '', $payeeNote = ''); // {"statusCode": 200, "financialTransactionId": "8f3077a6-ce43-4584-a425-589c50cfcbe4"}

```
#### Request to pay status
```php
<?php
use Cynojine\Mtnmomo\Products\Collection;

// Using collection
$product = Collection::create($options);

$transactionStatus = $product->getRequestToPayStatus($financialTransactionId);
$transactionStatus->getAmount(); //amount
$transactionStatus->getCurrency(); //currency
$transactionStatus->getExternalId(); //externalId
$transactionStatus->getPayer(); //payer object
$transactionStatus->getStatus(); //status

```
### Disbursements and Remittances
#### Transfer
```php
<?php
use Cynojine\Mtnmomo\Products\Disbursement;
use Cynojine\Mtnmomo\Products\Remittance;

// Using disbursement
$product = Disbursement::create($options);

// Using remittance
$product = Remittance::create($options);

$product->transfer($externalId, $partyId, $amount, $currency, $payerMessage = '', $payeeNote = '');// {"statusCode": 200, "financialTransactionId": "8f3077a6-ce43-4584-a425-589c50cfcbe4"}

```
#### Transfer status
```php
<?php
use Cynojine\Mtnmomo\Products\Disbursement;
use Cynojine\Mtnmomo\Products\Remittance;

// Using disbursement
$product = Disbursement::create($options);

// Using remittance
$product = Remittance::create($options);

$transactionStatus = $product->transferStatus($financialTransactionId);
$transactionStatus->getAmount(); //amount
$transactionStatus->getCurrency(); //currency
$transactionStatus->getExternalId(); //externalId
$transactionStatus->getPayer(); //payer object
$transactionStatus->getStatus(); //status

```


