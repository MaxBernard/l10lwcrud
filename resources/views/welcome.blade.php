<!DOCTYPE html>
<html>
  <head>
    <title>Laravel Livewire CRUD - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    @livewireStyles
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h3>Laravel Livewire CRUD - ItSolutionStuff.com</h3>
            </div>
            <div class="card-body">
              @if (session()->has('message'))
                <div class="alert alert-success">
                  {{ session('message') }}
                </div>
              @endif
              @livewire('posts')
            </div>
          </div>
        </div>
      </div>
    </div>
    @livewireScripts
  </body>
</html>