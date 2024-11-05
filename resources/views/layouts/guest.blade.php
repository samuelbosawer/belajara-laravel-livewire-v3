<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? config('app.name')}}</title>

    @vite(['resources/js/app.js','resources/css/app.css'])
  </head>
  <body>

    <div class="py-5">
        <div class="container">
          <div class="row align-items-center min-vh-100 justify-content-center">
            <div class="col-md-5">
                {{$slot}}
            </div>
          </div>
        </div>
    </div>

  </body>
</html>
