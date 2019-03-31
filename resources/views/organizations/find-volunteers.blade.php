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

    <form method="POST" action="{{ route('organizations.findVolunteers') }}">

        @csrf

        <label class="button-principal"><h4 class="btn btn-primary btn-block button-principal" onclick="local()">Local</h4></label>
        <div id="local" >
            @foreach($categories as $category)
                @if($category->is_locale)
                    <label class="label-check">
                        <input type="checkbox" name="local_categories[]" value="{{ $category->id }}">{{ $category->name }}
                    </label>
                @endif
            @endforeach
        </div>

        <label class="button-principal"><h4 class="btn btn-primary btn-block" onclick="remote()">Remote</h4></label><br>
        <div id="remote">
            @foreach($categories as $category)
                @if($category->is_remote)
                    <label class="label-check">
                        <input type="checkbox" name="remote_categories[]" value="{{ $category->id }}">{{ $category->name }}
                    </label><br>
                @endif
            @endforeach
        </div>

        <div class="asset-options d-none">
            <label class="button-principal"><h4 class="btn btn-primary btn-block button-principal" onclick="need()">Assets</h4></label>
            <div id="need">
                @foreach($assets as $asset)
                    <label class="label-check">
                        <input type="checkbox" name="assets[]" value="{{ $asset->id }}">{{ $asset->name }}
                    </label><br>
                @endforeach
            </div>
        </div>

        <div class="register">

            {{--<a href="#" id="save_value">Ver a página de messagem</a>--}}
            {{--<a href="/organizations/new-message">Ver a página de messagem</a>--}}
            <input id="submit-button" disabled type="submit" name="submit" class="btn btn-primary btn-block register button-principal-submit" value="research">
        </div>
    </form>
</div>

<div class="footer">
    <footer>
        <p class="text-center">All copyright&copy; are reserved to <b>IDAI</b> TEAM</p>
    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(function () {
        $(':checkbox').change(function(i){
            canToggleAssetButton()
        });

        function canToggleAssetButton() {

            let val = [];
            $('#local :checkbox:checked').each(function(i){
                val[i] = $(this).val();

            });
            $('#remote :checkbox:checked').each(function(i){
                val[i] = $(this).val();

            });

            $('#submit-button').attr('disabled', !(val.length > 0))

            if (val.length > 0)
            {
                $('.asset-options').removeClass('d-none')

            } else {

                $('.asset-options').addClass('d-none')

            }
        }
    })
</script>
</body>
</html>