<!DOCTYPE html>
<html>
<head>

    <!-- Site made with Mobirise Website Builder v4.8.2, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-final2-1-122x86.png') }}" type="image/x-icon">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/listaVoluntarios.css') }}">
    <title>Lista de voluntarios</title>
    <style type="text/css">

        body{

        }


    </style>




</head>
<body>


<div class="brand">
    <div class="brand-logo">
        <img src="{{ asset('img/logo.png') }}" class="logo">
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 input-message">
            <a href="/organizations/find-volunteers" class="btn btn-primary"> Voltar</a>
            <h2 class="text-center volunteer-search">Found {{ count($volunterCategories) }} volunteers </h2><small><a class="see-users" href="javascript:;">See users</a></small>

            <ul class="flag-show d-none">
                @foreach($volunterCategories as $volunterCategory)
                    <li>Mário Coluna - 842022789 | teste@teste.co.mz</li>
                @endforeach
                {{--<li>Mário Coluna - 842022789 | teste@teste.co.mz</li>--}}
                {{--<li>Mário Coluna - 842022789 | teste@teste.co.mz</li>--}}
                {{--<li>Mário Coluna - 842022789 | teste@teste.co.mz</li>--}}
                {{--<li>Mário Coluna - 842022789 | teste@teste.co.mz</li>--}}
                {{--<li>Mário Coluna - 842022789 | teste@teste.co.mz</li>--}}
                {{--<li>Mário Coluna - 842022789 | teste@teste.co.mz</li>--}}
                {{--<li>Mário Coluna - 842022789 | teste@teste.co.mz</li>--}}
            </ul>
            <textarea rows="4"></textarea>
            <div class="body-button">
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-success"><i class="fa fa-whatsapp"></i>&nbsp;whatsapp</button>
                </div>

                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-primary"><i class="fa fa-envelope-o"></i>&nbsp;sms</button>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="footer">
    <footer>
        <p class="text-center">All copyright&copy; are reserved to <b>IDAI</b> TEAM</p>
    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".see-users")
            .click(function () {
                $('.flag-show').toggleClass('d-none')
            });
    })
</script>
</body>
</html>