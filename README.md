# flick
A Laravel Super Low Weight Qrcode Generator using javascript.

### How to install

1: composer required mariojgt/flick

2: you need to do a php artisan vendor:publish in this package so it can move the need js file to work

### How To use 

You can do the following.

```php+HTML

@php
    $myData = [
    'your data1 in here' => 'Data 1',
    'your data2 in here' => 'Data 2',
    'your data3 in here' => 'Data 3',
    ];
@endphp

<x-flick::flickImage
    qrContent="{!! json_encode($myData) !!}" // Required
    download="true" // rrue or false
    display="false" // rrue or false
/>

```

### Features

1: you can generate any string into a qrcode image

2:you can download the image

3:you can display for hide the image

### Planed features

1: send as a post request to a url.