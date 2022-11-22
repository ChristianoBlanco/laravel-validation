<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (session('msg_status'))
    <div id="mensagem" class="alert alert-success" autofocus>
        {{session('msg_status')}}
    </div>
    @endif

   <form action="{{url('/testar')}}" method="POST">
    @csrf

    @if ($errors->any())
        <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
           <ul>
            <li> {{ $error }}<br></li>
          </ul>

          @endforeach
        </div>
      @endif

    <input type="text" name="cpf" value="" placeholder="cpf" class="form-control" id="cpf" required />
    <input type="submit" class="btn btn-primary" value="Enviar teste" name="enviar" >
   </form>
</body>
</html>
