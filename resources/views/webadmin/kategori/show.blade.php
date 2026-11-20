@extends('webadmin.index')
@section('title','Kategori ')
@section('content')
<main class="flex-1 p-6">
    <div class="bg-white p-4 rounded shadow-md">
        <div class="flex justify-between mb-4">
            <h2 class="text-xl font-semibold">Kategori</h2>
            <a href="{{url(request()->segment(1).'/kategori')}}" class="bg-red-500 text-white px-4 py-2 rounded">Back</a>
        </div>

        <form action="{{ url(request()->segment(1).'/kategori/store') }}" method="POST">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$data->id ?? ''}}">
            <div class="mb-4">
                <label for="kategori_name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" value="{{$data->name ?? ''}}" class="mt-1 block w-full p-2 border border-gray-300 rounded" placeholder="Enter kategori name" required>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
            </div>
        </form>
    </div>
</main>

@endsection
