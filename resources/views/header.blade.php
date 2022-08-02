<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <title>Desafio</title>

  <!-- Adicionando Javascript -->
  <script>

    $(function() {
      $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var pessoa_id = $(this).data('id');
        $.ajax({
          type: "GET",
          dataType: "json",
          url: 'changeStatus',
          data: {'status': status, 'pessoa_id': pessoa_id},
          success: function(data){
            console.log(data.success)
          }
        });

      });
    });

    $(function() {
      $('.toggle-pagamento').change(function() {
        var pagamentos = $(this).prop('checked') == true ? 1 : 0;
        var pessoa_id = $(this).data('id');
        $.ajax({
          type: "GET",
          dataType: "json",
          url: 'changePagamentos',
          data: {'pagamentos': pagamentos, 'pessoa_id': pessoa_id},
          success: function(data){
            console.log(data.success)
          }
        });

      });
    });
  </script>
</head>

<body>
  <main>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route ('produtos.index')}}">Digital</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route ('produtos.index')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route ('produtos.create')}}">Cadastro</a></li>
          </ul>
        </div>
      </div>
    </nav>
    </header>
    <canvas class="my-2 w-25" id="myChart" width="900" height="180"></canvas>

    @yield('content')

  </main>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 - Juliana Sued</p>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</html>
