<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testes de Regras de <?= utf8_encode('Valida??o'); ?></title>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script> -->

    <script type="text/javascript" src="{{ asset('js/plugin/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugin/jquery.inputmask.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/AppMask.js')}}"></script>


</head>
<body></body>
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

    <input type="text" name="cpf" value="" placeholder="cpf" class="form-control cpf" id="cpf"  />
    <br><br>
    <input type="text" name="cnpj" value="" placeholder="cnpj" class="form-control cnpj" id="cnpj"  />
    <br><br>
    <input type="text" name="cpfcnpj" value="" placeholder="cpf ou cnpj" class="form-control cpfcnpj" id="cpfcnpj"  />
    <br><br>
    <input type="text" name="titulo" value="" placeholder="titulo" class="form-control titulo" id="titulo"  />
    <br><br>
    <input type="text" name="cnh" value="" placeholder="cnh" class="form-control cnh" id="cnh"  />
    <br><br>
    <input type="text" name="inscricao_estadual" value="" placeholder="inscricao estadual" class="form-control inscricao_estadual" id="inscricao_estadual"  />
    <br><br>
    <input type="text" name="nis" value="" placeholder="PIS/PASEP/NIT/NIS" class="form-control nis" id="nis"  />
    <br><br>
    <input type="text" name="cns" value="" placeholder="cns" class="form-control cns" id="cns"  />
    <br><br>
    <input type="text" name="renavam" value="" placeholder="Renavam" class="form-control renavam" id="renavam"  />
    <br><br>
    <input type="text" name="placa" value="" placeholder="Placa" class="form-control" id="placa"  />
    <br><br>
    <input type="text" name="certidao" value="" placeholder="Certidao de nascimento/casamento/obito" class="form-control .certidao" id="certidao"  />
    <br><br>
    <input type="text" name="ddd" value="" placeholder="DDD" class="form-control ddd" id="ddd"  />
    <br><br>
    <input type="submit" class="btn btn-primary" value="Enviar teste" name="enviar" >
   </form>
</body>
</html>

