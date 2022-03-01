<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<div class="visible-print text-center">
    <h1>Laravel 5.7 - QR Code Generator Example</h1>
    <p>SVG:</p>
    {!! QrCode::size(200)->generate('http://auezovinstitute.kz/ru/reader/6#epubcfi(/6/2[id1]!/4/122/1:0)'); !!}
    <p>QR coded text: {{$url}}</p>
    <p>PNG:</p>
    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate('http://auezovinstitute.kz/ru/reader/6#epubcfi(/6/2[id1]!/4/122/1:0)')) !!} ">
</div>

</body>
</html>
