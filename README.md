# HasOffers API PHP client

This is a PHP client to connect to the HasOffers API.

## Usage

``` php
$client = new \GuzzleHttp\Client();
$affiliateController = new \Iqu\HasOffersAPIClient\Controllers\AffiliateController($networkToken, $networkId, $client);

try {
    $response = $affiliateController->findAll();

    var_dump($response);
} catch (\Exception $e) {
    echo($e->getMessage());
}
```