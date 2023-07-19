<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <main class="container">
       <!-- START FORM -->
        @if ($errors-> any())
        <div class="pt-3">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors -> all() as $item)
                    <li> {{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
       <form action='{{ url ('postingan') }}' method="POST">
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">Kategoriii</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='category_id' value="{{ Session::get ('category_id') }}" id="nim">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='title' value="{{ Session::get ('title') }}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Excerpt</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='excerpt' value="{{ Session::get ('excerpt') }}" id="jurusan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Body</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='body' value="{{ Session::get ('body') }}" id="jurusan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
        <!-- AKHIR FORM -->
