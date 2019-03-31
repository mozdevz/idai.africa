<!DOCTYPE html>
<html >
<head>
    <!-- Site made with Mobirise Website Builder v4.8.2, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-final2-1-122x86.png') }}" type="image/x-icon">
    <meta name="description" content="">
    <title>Registration user</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ asset('js/funcoes.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/volunter.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/font-awesome.min.css') }}">
</head>
<body>

<div class="brand">
    <div class="brand-logo">
        <img src="{{ asset('img/logo.png') }}" class="IDAI.AFRICA logo">
    </div>
</div>

<div class="form-box" id="form_box">
    <form>
        <label class="button-principal"><h4 class="btn btn-primary btn-block button-principal" onclick="local()">Local</h4></label>
        <div id="local" >
            <label class="label-check"> <input type="checkbox" name="access">Access</label>
            <label class="label-check"> <input type="checkbox" name="transport">Transport</label>
            <label class="label-check"><input type="checkbox" name="storage">Storage</label>
            <label class="label-check"><input type="checkbox" name="labour">Labour</label>
            <label class="label-check"><input type="checkbox" name="translation">Translation</label>
            <label class="label-check"><input type="checkbox" name="accomodation">Accomodation</label>
            <label class="label-check"><input type="checkbox" name="Changing_Points">Changing Points</label>
            <label class="label-check"><input type="checkbox" name="Water_Food">Water + Food</label>
        </div>

        <label class="button-principal"><h4 class="btn btn-primary btn-block" onclick="remote()">Remote</h4></label><br>
        <div id="remote">
            <label class="label-check"> <input type="checkbox" name="Transporte">Transport</label><br>
            <label class="label-check"> <input type="checkbox" name="Labour">Labour</label><br>
            <label class="label-check"><input type="checkbox" name="Donation">Donation</label><br>
        </div>

        <label class="button-principal"><h4 class="btn btn-primary btn-block button-principal" onclick="need()">Assets</h4></label>
        <div id="need">
            <label class="label-check"> <input type="checkbox" name="Transporte">Transport</label><br>
            <label class="label-check"> <input type="checkbox" name="Labour">Labour</label><br>
            <label class="label-check"><input type="checkbox" name="Donation">Donation</label><br>
        </div>

        <div class="register">

            <a href="/organizations/new-message">Ver a página de messagem</a>
            {{--<input type="submit" name="submit" class="btn btn-primary btn-block register button-principal-submit" value="research">--}}
        </div>
    </form>
</div>


<div class="footer">
    <footer>
        <p class="text-center">All copyright&copy; are reserved to <b>IDAI</b> TEAM</p>
    </footer>
</div>

</body>
</html>