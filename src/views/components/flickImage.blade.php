<div>

    {{-- you can you a push in the componente if need to stack your css or js --}}
<script src="{{ asset('vendor/Flick/flickCode.js') }}"></script>

<div id="flick-img-render" >
</div>

<script>

var dataUriPngImage = document.createElement("img"),
QRCodeData = "{{ $qrContent ?? 'https://github.com' }}",
QRCodeImage = QRCode.generatePNG(QRCodeData, {
        ecclevel: "M",
        format: "html",
        fillcolor: "#CCCCCC",
        textcolor: "#006f04",
        margin: 4,
        modulesize: 8
    });
dataUriPngImage.src = QRCodeImage;
document.querySelector('#flick-img-render').appendChild(dataUriPngImage);

// Force download the img
if ('{{ $donwload ?? "false" }}' == 'true') {
    var a = document.createElement("a"); //Create <a>
    a.href = QRCodeImage; //Image Base64 Goes here
    a.download = "Image.png"; //File name Here
    a.click(); //Downloaded file
}

</script>


</div>
