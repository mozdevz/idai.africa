
<!DOCTYPE html>
<html >
<head>
    <!-- Site made with Mobirise Website Builder v4.8.2, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-final2-1-122x86.png" type="image/x-icon">
    <meta name="description" content="">
    <title>Registration user</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="funcoes.js"></script>

    <style type="text/css">

        body{
            background: lightblue;
        }
        .form-box{
            width: 400px;
            margin: 0 auto;
            margin-top: 100px;
        }

        textarea,input[type="text"]{
            width: 100%;
        }

        input[type="text"]{
            margin-bottom: 10px;
        }

        .label-check{
            margin-left: 15px;
        }

        input[type="submit"]{
            margin-bottom: 15px;
        }

        .registration{
            margin-bottom:50px;
        }

        #local,#remote{

            display: none;
        }

        h4, label{
            width: 70%;
            margin-left: 30px;
        }

        #form_box{
            margin-top: 15%;

        }
        #register{
            margin-top: 10px;
            margin-left: 150px;
        }
        input{
            margin-left: 70px;
        }



    </style>


</head>
<body>


<div class="form-box" id="form_box">
    <form>


        <label ><h4 class="btn btn-primary btn-block" onclick="local()">Local</h4></label>
        <div id="local" >
            @foreach($categories as $category)
                <input type="checkbox" name="local_category[]" value="{{ $category->id }}"><label class="label-check">{{ $category->name }}</label><br>
            @endforeach
            {{--<input type="checkbox" name="access"><label class="label-check">Access</label><br>--}}
            {{--<input type="checkbox" name="transport"><label class="label-check">Transport</label><br>--}}
            {{--<input type="checkbox" name="storage"><label class="label-check">Storage</label><br>--}}
            {{--<input type="checkbox" name="labour"><label class="label-check">Labour</label><br>--}}
            {{--<input type="checkbox" name="translation"><label class="label-check">Translation</label><br>--}}
            {{--<input type="checkbox" name="accomodation"><label class="label-check">Accomodation</label><br>--}}
            {{--<input type="checkbox" name="Changing_Points"><label class="label-check">Changing Points</label><br>--}}
            {{--<input type="checkbox" name="Water_Food"><label class="label-check">Water + Food</label><br>--}}
        </div>


        <label><h4 class="btn btn-primary btn-block" onclick="remote()">Remote</h4></label><br>
        <div id="remote">
            @foreach($categories as $category)
                <input type="checkbox" name="remote_category[]" value="{{ $category->id }}"><label class="label-check">{{ $category->name }}</label><br>
            @endforeach
        </div>




        <input id="register" type="submit" name="submit" value="REGISTER" class="btn btn-primary ">

    </form>
</div>




</body>
</html>