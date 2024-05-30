<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <p class="overflow-x-auto mt-5 text-center font-bold">LIST PRODUK</p>
    <div class="overflow-x-auto ml-5 mr-5 mt-5">
        <table class="table table-zebra">
            <thead class="bg-info">
                <tr class="text-center text-white">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi Produk</th>
                    <th>Harga Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $item)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$item}}</td>
                    <td>{{$desc[$index]}}</td>
                    <td class="text-center">{{$harga[$index]}}</td>
                    @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>