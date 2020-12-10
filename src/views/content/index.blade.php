
@php
    $myData = [
    'your data1 in here' => 'Data 1',
    'your data2 in here' => 'Data 2',
    'your data3 in here' => 'Data 3',
    ];
@endphp

<x-flick::flickImage
    qrContent="{!! json_encode($myData) !!}"
    download="true"
    display="false"
/>
