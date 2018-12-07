<html>
<head>

    <style>
        body {
            background-image:url('../../public/images/guitarFret.jpg');
            background-size:100%;
            background-repeat: no-repeat;
            background-position: center;
        }

        img {
            width:400px;

        }

        .header {

        }

        .content {

        }

        .aDowload {
            display:inline-block;
            width:300px;
            height:200px;
        }

    </style>

</head>

<body>
<div class="header">
    Blah Header Blah
</div>

<div class="content">
    {{--["20181205_225722.jpg", "0"],--}}

    <?php
        $fileList=[
            ["20181205_223623.mp4", "0"],
            ["20181205_223632.mp4", "0"],
            ["20181205_225747.mp4", "0"],
            ["20181205_230214.mp4", "0"],
            ["20181205_231817.mp4", "0"],
        ];
    ?>
    <img src="20181205_225723.jpg" class="" />
    @foreach($fileList as $file)
        <div class="aDownload">
            <b>{{$file[0]}}</b><br>
            Filesize: {{$file[1]}}<br>
            <a href="{{$file[0]}}">Download</a>
        </div>
    @endforeach
</div>
</body>
</html>