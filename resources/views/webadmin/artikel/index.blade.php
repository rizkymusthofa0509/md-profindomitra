@extends('webadmin.index')
@section('title','Artikel ')
@section('content')
<main class="flex-1 p-6">
    <div class="bg-white p-4 rounded shadow-md">
        <div class="flex justify-between mb-4">
            <h2 class="text-xl font-semibold">Artikel</h2>
            <a href="{{url(request()->segment(1).'/artikel/tambah')}}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Tambah </a>
        </div>
        <table class="w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2" width="10%;">Image</th>
                    <th class="border p-2">Title</th>
                    <th class="border p-2" width="50%;">Slug</th>
                    <th class="border p-2" width="2em;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td class="border p-2">
                        @if ($item->image == null)
                        <img src="{{url('uploads/images.jpeg')}}" class="w-24 h-24 object-cover" alt="{{ $item->image }}">
                        @else
                        <img src="{{ url($item->image) }}" class="w-24 h-24 object-cover" alt="{{ $item->image }}">
                        @endif
                    </td>
                    <td class="border p-2">{{$item->title}}</td>
                    <td class="border p-2"><a target="_blank" href="{{url('')}}/articles/{{$item->slug}}">{{$item->slug}}</a></td>
                    <td class="border p-2 flex space-x-2">
                        <a href="{{url(request()->segment(1).'/artikel/edit/'.$item->id)}}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                        <a href="{{url(request()->segment(1).'/artikel/hapus/'.$item->id)}}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="bg-red-500 text-white px-2 py-1 rounded">Hapus</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</main>
@endsection
