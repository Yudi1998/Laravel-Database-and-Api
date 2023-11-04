
    @include("navigation");

        <div class="container">
        <main role="main" class="flex-shrink-6">
            <div class="container mt-5">
                <div class="jumbotron">
                    <h1 class="display-4">Product</h1>
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga(Rp)</th>
                    <th scope="col">Stok</th>
                </tr>
            </thead>
            <tbody>
            @foreach($prods as $p)
                <tr >

                    <td>{{$p->id}}</td>
                    <td>{{$p->nama_produk}}</td>
                    <td>{{$p->harga}}</td>
                    <td>{{$p->stock}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
                </div>
            </div>
        </main>
        </div>

@include("footer");
