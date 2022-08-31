<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="jquery-script-clear"></div>
<div class="main">
    <div class="kai_banner_container clearfix hidden-xs">
        <div class="kai_banner_body clearfix">
            @foreach ($banners as $banner)
                <a style="pointer-events: none;"><img src="{{ $banner ? asset('uploads/' . $banner->image_show) : ""}}"></a>
            @endforeach
        </div>
        <div class="kai_banner_prevbtn side_btn"></div>
        <div class="kai_banner_nextbtn side_btn"></div>
    </div>
</div>

<script type="text/javascript" src="js/jquery.kaibanner.js"></script>
<script type="text/javascript">

    $('.kai_banner_container').kaiBanner({
        minWidth:1200,
        intervalTime:2000,
        highlightClass:'highlight'
    });

    $('.kai_banner2_container').kaiBanner();

    $('.kai_banner3_container').kaiBanner({
        speed:1000,
        intervalTime:3000,
        fixedWidth:true,
        minWidth:980,
        highlightClass:'highlight'
    });
</script>
</body>
</html>

