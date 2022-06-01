<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
<div class="row justify-content-around">
    <div class="col-4">
        <h5>Het bestuur van de Imkervereniging Oegstgeest bestaat uit:</h5><br>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Naam</th>
                <th scope="col">Functie</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Alma van der Wijgaard</td>
                <td>Voorzitter</td>
            </tr>
            <tr>
                <td>Fred Schalker</td>
                <td>Secretaris</td>
            </tr>
            <tr>
                <td>Karel Diephuis</td>
                <td>Penningmeester</td>
            </tr>
            <tr>
                <td>Håvar Solheim</td>
                <td>Bestuurslid</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="col-4">
        <h5>Voor vragen over de vereniging, of onze cursus, verstuur een mail naar onze secretaris.</h5>
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <form action="" method="post" action="{{ route('contact') }}">
            @csrf
            <div class="form-group">
                <label>Naam</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
                <!-- Error -->
                @if ($errors->has('name'))
                    <div class="error">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
                @if ($errors->has('email'))
                    <div class="error">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label>Onderwerp</label>
                <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                       id="subject">
                @if ($errors->has('subject'))
                    <div class="error">
                        {{ $errors->first('subject') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label>Bericht</label>
                <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                          rows="4"></textarea>
                @if ($errors->has('message'))
                    <div class="error">
                        {{ $errors->first('message') }}
                    </div>
                @endif
            </div>
            <input type="submit" name="send" value="Versturen" class="btn btn-outline-warning  btn-block">
        </form>
    </div>
</div>

</div>
</body>
</html>
