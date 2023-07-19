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
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            @if (Session::has ('success'))
            <div class="pt-3">
                <div class="alert alert-success">
                    <ul>
                        {{ Session::get('success') }}
                    </ul>
                </div>
            </div>
            @endif
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='postingan/create' class="btn btn-primary">+ Tambah Post</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-1" >Category_id</th>
                            <th class="col-md-2" >Title</th>
                            <th class="col-md-3" >Excerpt</th>
                            <th class="col-md-4" >Body</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        @foreach ($data as $item)
                        <tr>
                            <td> {{ $i }}</td>
                            <td>{{ $item-> category_id }}</td>
                            <td>{{ $item-> title }}</td>
                            <td>{{ $item-> excerpt }}</td>
                            <td>{{ $item-> body }}</td>
                            <td>
                                <a href='{{ url ('postingan/'. $item->title) }}' class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Yakin ingin menghapus data?')" class='d-inline' action="{{ url('postingan/'. $item-> title. '/delete')}}"
                                    method="post">
                                    @csrf
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm"> Del</button>
                                </form>
                            </td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('jelajahi') }}" class="btn btn-primary "> kembali</a>
                  </div>
          </div>
          <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
