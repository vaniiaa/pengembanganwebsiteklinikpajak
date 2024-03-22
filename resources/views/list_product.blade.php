@extends('layout.list')

@section('title', 'Ini adalah judul pada meta')
@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dataBarang as $barang)
        <tr>
            <td>{{ $barang['id']}}</td>
            <td>{{ $barang['nama']}}</td>
            <td>{{ $barang['harga']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
