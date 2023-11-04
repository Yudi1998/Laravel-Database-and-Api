
@include("navigation");

<div class="container">
<main role="main" class="flex-shrink-6">
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Api Product</h1>
            <p class="lead">Api Product</p>
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga($ US)</th>
                    <th scope="col">Stok</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ss as $prod)
                <tr >

                    <td>{{$prod['id']}}</td>
                    <td> {{$prod['title']}}</td>
                    <td>{{$prod['price']}}</td>
                    <td>{{$prod['stock']}}</td>

                </tr>
                @endforeach
                </tbody>
        </table>
        </div>
    </div>
</main>
</div>

@include("footer");
