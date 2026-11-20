<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Admin Panel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between">
            <span class="text-lg font-semibold">Admin Dashboard</span>
            <a href="{{url(request()->segment(1).'/logout')}}" class="text-sm">Logout</a>
        </div>
    </nav>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white h-screen p-4 shadow-lg">
            <ul>
                <li class="mb-2">
                    <a href="{{ url(request()->segment(1).'/dashboard') }}"
                       class="block p-2 {{ request()->segment(2) == 'dashboard' ? 'bg-blue-500 text-white rounded' : 'hover:bg-gray-200' }}">
                        Dashboard
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{ url(request()->segment(1).'/artikel') }}"
                       class="block p-2 {{ request()->segment(2) == 'artikel' ? 'bg-blue-500 text-white rounded' : 'hover:bg-gray-200' }}">
                        Manage Artikel
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{ url(request()->segment(1).'/kategori') }}"
                       class="block p-2 {{ request()->segment(2) == 'kategori' ? 'bg-blue-500 text-white rounded' : 'hover:bg-gray-200' }}">
                        Kategori
                    </a>
                </li>
            </ul>
        </aside>

        @yield('content')
    </div>
</body>
</html>
