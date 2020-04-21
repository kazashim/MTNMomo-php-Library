## Momo

Zambia MomoPay is a library in PHP for the MTN MobileMoney.  Developers can itergrate into thier apps.

## Product support

* Collections
* Disbursements
* Remittances

## To Get Started

* Signup For A developer portal Account and [Register](https://momodeveloper.mtn.com/)

## Subscribe To Any Of The Products
* Collections
* Disbursements
* Remittances

## Generate UUID
To Generate UUIS Go to This link [UUID-Generator](https://www.uuidgenerator.net/)

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

//  collection
$collection = Collection::create($options);

```