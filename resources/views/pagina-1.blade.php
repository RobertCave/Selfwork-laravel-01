<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page -- Selfwork Laravel Rotte e Viste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
   
    {{-- Selfwork Rotte e Viste
    Traccia:
    
        Installare Composer e Laravel
        Creare un sito web utilizzando le rotte e le viste
        Le viste all'interno del progetto dovranno essere:
            Homepage
            Pagina 1
            Pagina 2
        Le 3 viste(pagine) devono essere collegate tra loro tramite links
        Pushare online su Github laravel_01_nome_cognome
    
    
    
    
 --}}

 <body class="d-flex justify-content-center align-items-center vh-100" style="background-color: #91b8e0;">

    <div class="text-center">
        <!-- Titolo al centro -->
        <h1 class="display-3">Pagina - 1 </h1>

        <!-- Pulsanti sotto -->
        <div class="mt-4">
            <a href="/pagina-1" class="btn btn-sm disabled" tabindex="-1" role="button" >Link alla pagina 1</a>
            <a href="/pagina-2" class="btn btn-primary btn-sm" tabindex="-1" role="button">Link alla pagina 2</a>
            <a href="/" class="btn btn-primary btn-sm" tabindex="-1" role="button">Link alla Homepage</a>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>