# kinoheld\AwsServerlessImageHandler
Library to build image URLs according to https://github.com/awslabs/serverless-image-handler

## Installation
Via composer:
```
composer require kinoheld/aws-serverless-image-handler
```

## Usage
```php
$imageHandler = new kinoheld\AwsServerlessImageHandler\ImageHandler;
$imageHandler->setDomain('https://xxx.cloudfront.net/');
$imageHandler->setBucket('my-bucket');

// Original image.
$imageUrlOriginal = $imageHandler->getUrl('images/my-image.png');

// Resized image.
$imageUrlResized = $imageHandler->getUrl('images/my-image.png', [
  'resize' => [
    'width' => 600,
    'fit' => 'cover',
  ],
]);
```
