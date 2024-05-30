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

        <!-- Form Input Produk -->
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 border">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h1 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Input Produk</h1>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form method="POST" action="{{ route('produk.simpan')}}" class="space-y-6">
                    @csrf
                    <div>
                        <label for="nama" class="block text-sm font-semibold leading-6 text-gray-900">Nama :</label>
                        <div class="mt-2">
                            <input type="text" id="nama" name="nama" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 
                            focus:ring-0 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <label for="deskripsi"
                            class="block text-sm font-semibold  leading-6 text-gray-900">Deskripsi:</label>
                        <div class="mt-2">
                            <textarea id="deskripsi" name="deskripsi" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 
                            focus:ring-0 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>

                    <div>
                        <label for="harga" class="block text-sm font-semibold leading-6 text-gray-900">Harga :</label>
                        <div class="mt-2">
                            <input type="number" id="harga" name="harga" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 
                            focus:ring-0 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 
                        focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>