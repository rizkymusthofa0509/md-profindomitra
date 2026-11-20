@extends('webadmin.index')
@section('title','Kategori ')
@section('content')
<main class="flex-1 p-6">
    <div class="bg-white p-4 rounded shadow-md">
        <div class="flex justify-between mb-4">
            <h2 class="text-xl font-semibold">Kategori</h2>
            <a href="{{url(request()->segment(1).'/kategori/tambah')}}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Tambah </a>
        </div>
        <table class="w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">Name</th>
                    <th class="border p-2" width="50%;">Slug</th>
                    <th class="border p-2" width="2em;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td class="border p-2">{{$item->name}}</td>
                    <td class="border p-2"><a target="_blank" href="{{url('')}}/articles?category={{$item->slug}}">{{$item->slug}}</a></td>
                    <td class="border p-2 flex space-x-2">
                        <a href="{{url(request()->segment(1).'/kategori/edit/'.$item->id)}}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                        <a href="{{url(request()->segment(1).'/kategori/hapus/'.$item->id)}}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="bg-red-500 text-white px-2 py-1 rounded">Hapus</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</main>
@endsection
