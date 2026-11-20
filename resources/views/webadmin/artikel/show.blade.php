@extends('webadmin.index')
@section('title','Artikel ')
@section('content')
<!-- Include CKEditor 5 via CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

<main class="flex-1 p-6">
    <div class="bg-white p-4 rounded shadow-md">
        <div class="flex justify-between mb-4">
            <h2 class="text-xl font-semibold">artikel</h2>
            <a href="{{url(request()->segment(1).'/artikel')}}" class="bg-red-500 text-white px-4 py-2 rounded">Back</a>
        </div>

        <form action="{{ url(request()->segment(1).'/artikel/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$data->id ?? ''}}">
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
                <select name="category_id" id="category_id" class="mt-1 block w-full p-2 border border-gray-300 rounded" required>
                    <option value="">Pilih Kategori</option>
                    @foreach (App\Models\Categories::get() as $item) <option value="{{ $item->id }}" {{ isset($data) && $item->id == $data->category_id ? 'selected' : '' }}>{{ $item->name }}</option> @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" id="image" name="image" value="{{$data->image ?? ''}}" class="mt-1 block w-full p-2 border border-gray-300 rounded" placeholder="Judul Artikel"  {{ isset($data) ? '' : 'selected' }} >
                <input type="hidden" id="gambar_old" name="gambar_old" value="{{$data->image ?? ''}}" class="mt-1 block w-full p-2 border border-gray-300 rounded" placeholder="Judul Artikel" >
            </div>
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Judul Artikel</label>
                <input type="text" id="title" name="title" value="{{$data->title ?? ''}}" class="mt-1 block w-full p-2 border border-gray-300 rounded" placeholder="Judul Artikel" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea id="content" name="content" class="mt-1 block w-full p-2 border border-gray-300 rounded" placeholder="Judul Artikel" required style="height: 300px;">{{ $data->content ?? '' }}</textarea>
            </div>
            <script>
                ClassicEditor
                    .create(document.querySelector('#content'), {
                        toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo']
                    })
                    .catch(error => {
                        console.error(error);
                    });
            </script>



            <div class="mb-4">
                <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                <input type="text" id="author" name="author" value="{{$data->author ?? ''}}" class="mt-1 block w-full p-2 border border-gray-300 rounded" placeholder="Judul Artikel" required>
            </div>
            <div class="mb-4">
                <label for="is_published" class="block text-sm font-medium text-gray-700">Publikasi Artikel ini</label>
                <select name="is_published" id="is_published" class="mt-1 block w-full p-2 border border-gray-300 rounded" required>
                    <option value="">Pilih Kategori</option>
                    <option value="YES"  {{ isset($data) && 'YES' == $data->is_published ? 'selected' : '' }}>Yes</option>
                    <option value="NO"  {{ isset($data) && 'NO' == $data->is_published ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
            </div>
        </form>
    </div>
</main>

@endsection
