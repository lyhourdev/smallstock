<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    {{--<link rel="stylesheet" href="aacs-tt-speaker-lucky-draw/css/style.css">--}}

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style>
        @font-face {
            font-family: myFirstFont;
            src: url('crillee-italic-bt-59822d0a93e63.ttf');
        }

        body {
            font-family: myFirstFont;
        }
    html, body{height:100%;}
    body{
        margin:0;
        /*background: no-repeat url(http://i.stack.imgur.com/DGzcs.png) 50%;*/
        background-size: cover;
    }

    #result
    {
        font-weight: bold;
        display: inline-block;
        color: #e69a24;
        background: none;
        border: none;
        text-transform: capitalize;
        width: 33.2%;
        height: 15%;
        text-align: center;
        font-size: 320%;

        position:absolute;

        top:40.8%; /* if circle bulb in image is at 60% set at 60% */
        left:52%;
        /*!*width: 7%;*!*/
        /*height:5%;*/
    }

    #start_{
        background: none;
        /*border-radius:50%;*/
        border: none;

        position:absolute;

        top:60.5%; /* if circle bulb in image is at 60% set at 60% */
        left:59.5%;
        width: 7%;
        height:5%;
        /*margin-top:  -50px;*/
        /*margin-left: -50px;*/
    }

    #stop_{
        background: none;
        /*border-radius:50%;*/
        border: none;

        position:absolute;

        top:60.5%; /* if circle bulb in image is at 60% set at 60% */
        left:70.7%;
        width: 7%;
        height:5%;
        /*margin-top:  -50px;*/
        /*margin-left: -50px;*/
    }

    #lucky{
        background: none;
        /*border-radius:50%;*/
        border: none;

        position:absolute;

        top:21%; /* if circle bulb in image is at 60% set at 60% */
        left:20%;
        width: 19.5%;
        height:5%;
        /*margin-top:  -50px;*/
        /*margin-left: -50px;*/
    }
        .win{
            font-weight: bold;
            display: inline-block;
            color: #e69a24;
            background: none;
            border: red;
            text-transform: capitalize;
            text-align: center;
            font-size: 200%;

            height:200%;



            position:absolute;

            left:1%;

        }
        .win1{
            font-weight: bold;
            display: inline-block;
            color: #e69a24;
            background: none;
            border: red;
            text-transform: capitalize;
            text-align: center;
            font-size: 200%;

            height:198%;



            position:absolute;
            top:372%;
            left:1%;

        }
        .win2{
            font-weight: bold;
            display: inline-block;
            color: #e69a24;
            background: none;
            border: red;
            text-transform: capitalize;
            text-align: center;
            font-size: 200%;

            height:200%;



            position:absolute;
            top:200%;
            left:1%;

        }
        .win3{
            font-weight: bold;
            display: inline-block;
            color: #e69a24;
            background: none;
            border: red;
            text-transform: capitalize;
            text-align: center;
            font-size: 200%;

            height:200%;



            position:absolute;
            top:560%;
            left:1%;

        }
        .win4{
            font-weight: bold;
            display: inline-block;
            color: #e69a24;
            background: none;
            border: red;
            text-transform: capitalize;
            text-align: center;
            font-size: 200%;
            height:200%;
            position:absolute;
            top:749%;
            left:1%;

        }
</style>
</head>
{{--class="row" style=" width: 100%;height: 100%;background-image: url('/Image_a08bccd.jpg');background-size: 100%;background-repeat: no-repeat;"--}}
<body onselectstart="return false" class="row" style="position: relative; background-image:url('/Look.jpg');background-repeat: no-repeat;background-size:100% 100%;">

    <div id="lucky">
        {{--<input style="width: 280px" type="text" class="win" value="test">--}}
        {{--<input style="width: 280px" type="text" class="win1" value="test">--}}
        {{--<input style="width: 280px" type="text" class="win2" value="test">--}}
        {{--<input style="width: 280px" type="text" class="win3" value="test">--}}
        {{--<input style="width: 280px" type="text" class="win4" value="test">--}}
        {{--<p ></p>--}}
    </div>
    <div id="result" ></div>
    <button id="start_" type="button" class="btn btn-default"></button>
    <button id="stop_" type="button" class="btn btn-default"></button>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>


    {{--<script src="aacs-tt-speaker-lucky-draw/js/index.js"></script>--}}

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $(function(){
            var tms = ["Leap Lyhour","yifei","xiaoming","jinsong","aifen","leslie","beulah","harley","joe","haifeng","yuanwei","renxing","richard","jinrong","vivian","chengsi","james","vicky"];
            var candidates = [];
            var animate = false;
            tms = tms.sort();
            var nn = 0;

            function draw(){
                candidates = [];
                cancelAnimationFrame(animate);
                var index = Math.floor(Math.random()*candidates.length);
                $("#result ").html(candidates[index]);
                nn++;
                console.log(nn);
                if(nn == 1){
                    $("#lucky").append('<input style="width: 280px" type="text" class="win" value="'+$('#result').html()+'">');
                }else if(nn == 3){
                    $("#lucky").append('<input style="width: 280px" type="text" class="win1" value="'+$('#result').html()+'">');
                }else if(nn == 2){
                    $("#lucky").append('<input style="width: 280px" type="text" class="win2" value="'+$('#result').html()+'">');
                }else if(nn == 4){
                    $("#lucky").append('<input style="width: 280px" type="text" class="win3" value="'+$('#result').html()+'">');
                }else if(nn == 5){
                    $("#lucky").append('<input style="width: 280px" type="text" class="win4" value="'+$('#result').html()+'">');
                }
            }

            $("#stop_").click(function(){draw();});
            $("#start_").click(function(){slots();});

            function slots(){
                $("#result").html(tms[Math.floor(Math.random()*(tms.length-1))]);
                animate = requestAnimationFrame(slots);
            }
        })

    </script>

    <script>
        $(function (){
            $('.start_btn').on('click', function(e){
                e.preventDefault();
                $.ajax({
                    url: '{{url('/start-button')}}',
                    type: 'GET',
                    dataType: 'json',
                    async: false,
                    //async: true,
                    data: {
                    },
                    success: function (data) {
                        if (data){
                            var len = data.length;
                            _gogo = setInterval(function(){
                                var num = Math.floor(Math.random()* len);
                                //var id = obj[num]['id'];
                                var id = data[num].id;
                                //var v = obj[num]['mobile'];
                                var v = data[num].mobile;
                                $("#roll").html(v);
                                $("#mid").val(id);
                            },10);
                            $('.stop_btn').show();
                            $('.start_btn').hide();
                        }else{
                            $("#roll").html('System can not find the data source, first import the data.');
                        }
                    },
                    error: function () {
                    }
                });
            });

            $('.stop_btn').on('click', function(e){
                e.preventDefault();
                clearInterval(_gogo);
                var mid = $("#mid").val();
                $.ajax({
                    url: '{{url('/get-start-button')}}',
                    type: 'GET',
                    dataType: 'json',
                    async: false,
                    //async: true,
                    data: {
                        id: mid,
                    },
                    success: function (msg) {
                        if(msg == 1){

                            var mobile = $("#roll").html();
                            $("#result").append("<p>"+mobile+"</p>");
                        }
                        $('.stop_btn').hide();
                        $('.start_btn').show();
                    },
                    error: function () {
                    }
                });
            });
        });
    </script>

</body>
</html>
