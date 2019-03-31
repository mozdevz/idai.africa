
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

    <style type="text/css">

        body{
            background: lightblue;
        }
        .form-box{
            width: 400px;
            margin: 0 auto;
            margin-top: 100px;
        }

        textarea,input[type="text"],select, input[type="button"],input[type="password"],#_provincias,#_cidades{
            width: 100%;
        }

        input[type="text"]{
            margin-bottom: 10px;
        }

        .label-check{
            margin-left: 15px;
        }
        h1 small{
            font-size: 18pt;
        }

        input[type="submit"]{
            margin-bottom: 15px;
        }

        .registration{
            margin-bottom:50px;
        }
    </style>

</head>
<body>


<div class="form-box">
    <form>
        <h1 class="text-center registration">Voluntário <small>Registo</small></h1>
        <label><h4>Nome </h4></label>
        <input type="text" name="nome" required><br>
        <label><h4>Celular</h4></label><br>
        <input type="text" name="celular" required><br>
        <label><h4>Provincia</h4></label><br>
        <select id="provincias" onmousedown="if(this.options.length>5){this.size=5;}"  onchange='this.size=0;' onblur="this.size=0;">
            <option value="Maputo">Maputo</option>
            <option value="Gaza">Gaza</option>
            <option value="Inhambane">Inhambane</option>
            <option value="Manica">Manica</option>
            <option value="Sofala">Sofala</option>
            <option value="Zambezia">Zambezia</option>
            <option value="Tete">Tete</option>
            <option value="Nampula">Nampula</option>
            <option value="Cabo Delgado">Cabo Delgado</option>
            <option value="Niassa">Niassa</option>
        </select><br>

        <label id="cidade"><h4>Cidade</h4></label><br>
        <select id="cidades" onmousedown="if(this.options.length>5){this.size=5;}"  onchange='this.size=0;' onblur="this.size=0;">
            <option value="Matola">Matola</option>
            <option value="Maputo">Maputo</option>
            <option value="Xai-xai">Xai-xai</option>
            <option value="Chibuto">Chibuto</option>
            <option value="Chokwé">Chokwé</option>
            <option value="Inhambane">Inhambane</option>
            <option value="Maxixe">Maxixe</option>
            <option value="Manica">Manica</option>
            <option value="Chimoio">Chimoio</option>
            <option value="Beira">Beira</option>
            <option value="Dondo">Dondo</option>
            <option value="Zambezia">Zambezia</option>
            <option value="Quelimane">Quelimane</option>
            <option value="Mocuba">Mocuba</option>
            <option value="Gurué">Gurué</option>
            <option value="Tete">Tete</option>
            <option value="Nampula">Nampula</option>
            <option value="Nacala">Nacala</option>
            <option value="Ilha de Moçambique">Ilha de Moçambique</option>
            <option value="Pemba">Pemba</option>
            <option value="Montepuez">Montepuez</option>
            <option value="Lichinga">Lichinga</option>
            <option value="Cuamba">Cuamba</option>
        </select><br>



        <label><h4>Password</h4></label><br>
        <input type="password" name="password" required><br><br>
        <input type="button" name="next" value="Proximo">

    </form>
</div>

</body>
</html>