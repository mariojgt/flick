<div>
    {{-- Need for the flick QrCode to work --}}
    <script src="{{ asset('vendor/Flick/flickCode.js') }}"></script>

    @if ($display == 'true')
        <div id="flick-img-render" >
        </div>
    @endif

    <script>
        // Get the php varaible and convert to a javascript variable
        let dataToRender = '{!! $qrContent !!}';
        let dataUriPngImage = document.createElement("img"),
            QRCodeData = dataToRender ?? 'empty data',
            QRCodeImage = QRCode.generatePNG(QRCodeData, {
                ecclevel: "M",
                format: "html",
                fillcolor: "#CCCCCC",
                textcolor: "#006f04",
                margin: 4,
                modulesize: 8
            });
        dataUriPngImage.src = QRCodeImage;

        // Check if the user want to display or not
        if ('{{ $display ?? "false" }}' == 'true') {
            document.querySelector('#flick-img-render').appendChild(dataUriPngImage);
        }

        // Force download the img
        if ('{{ $download ?? "false" }}' == 'true') {
            var a = document.createElement("a"); //Create temp <a>
            a.href = QRCodeImage; //Image Base64 Goes here
            a.download = "Image.png"; //File name Here
            a.click(); //Downloaded file
        }
    </script>
</div>
