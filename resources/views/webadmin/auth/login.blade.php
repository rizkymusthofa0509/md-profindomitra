<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

  <div class="w-full max-w-sm p-8 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Login</h2>

    <form action="{{url(request()->segment('1').'/loginStore')}}" method="POST">
        @csrf
      <div class="mb-4">
        <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
        <input type="username" id="username" name="username" class="w-full p-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
      </div>

      <div class="mb-6">
        <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
        <input type="password" id="password" name="password" class="w-full p-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
      </div>

      <div class="flex justify-between items-center mb-6">
        <label class="flex items-center">
          <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
          <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
        </label>
      </div>

      <button type="submit" class="w-full py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
        Login
      </button>
    </form>
  </div>

</body>
</html>
