{{-- you can you a push in the componente if need to stack your css or js --}}
<script src="{{ asset('vendor/Flick/flickCode.js') }}"></script>

<body>

    <div id="render-img" >

    </div>

    <x-flick::flickImage qrContent="'google.com/'" donwload="true" />

</body>
<script>
    // var svgElement = document.createElement("div"),
    // u = "https://github.com",
    // s = QRCode.generateSVG(u, {
    //         ecclevel: "M",
    //         fillcolor: "#F2F2F2",
    //         textcolor: "#D13438",
    //         margin: 4,
    //         modulesize: 8
    //     });
    // svgElement.appendChild(s);
    // document.body.appendChild(svgElement);

    // if (document.implementation.hasFeature("http://www.w3.org/2000/svg","1.1")) {
    //     var dataUriSvgImage = document.createElement("img"),
    //     u = "https://github.com",
    //     s = QRCode.generateSVG(u, {
    //             ecclevel: "M",
    //             fillcolor: "#E6E6E6",
    //             textcolor: "#486860",
    //             margin: 4,
    //             modulesize: 8
    //         });
    //     var XMLS = new XMLSerializer();
    //     s = XMLS.serializeToString(s);
    //     s = "data:image/svg+xml;base64," + window.btoa(unescape(encodeURIComponent(s)));
    //     dataUriSvgImage.src = s;
    //     document.body.appendChild(dataUriSvgImage);
    // }

    var dataUriPngImage = document.createElement("img"),
    QRCodeData = "https://github.com",
    QRCodeImage = QRCode.generatePNG(QRCodeData, {
            ecclevel: "M",
            format: "html",
            fillcolor: "#CCCCCC",
            textcolor: "#006F94",
            margin: 4,
            modulesize: 8
        });

    dataUriPngImage.src = QRCodeImage;
    document.querySelector('#render-img').appendChild(dataUriPngImage);
    //document.body.appendChild(dataUriPngImage);

    // var htmlTable = document.createElement("div"),
    // u = "https://github.com",
    // s = QRCode.generateHTML(u, {
    //         ecclevel: "M",
    //         fillcolor: "#DCDCDC",
    //         textcolor: "#5C2E91",
    //         margin: 4,
    //         modulesize: 8
    //     });
    // htmlTable.appendChild(s);
    // document.body.appendChild(htmlTable);

    </script>
