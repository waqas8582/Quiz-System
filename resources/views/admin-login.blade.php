<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg max-w-sm">
        <h2 class="text-2xl text-center text-gray-800 mb-6">Admin Login</h2>
        @error('user')
            <div class="text-red-500">{{$message}}</div>
        @enderror
        
        <form action="/admin-login" method="post" class="space-y-4">
            @csrf
            <div>
                <label for="adminname" class="text-gray-600 mb-1">Admin Name</label>
                <input type="text" class="w-full px-4 py-2 border-gray-800 rounded-xl" name="name" id="name" value="{{old('name')}}" placeholder="Enter Admin Name ">
                @error('name')
                    <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="" class="text-gray-600 mb-1">Password</label>
                <input type="password" class="w-full px-4 py-2 border-gray-800 rounded-xl" name="password" id="" placeholder="Enter Password">
                @error('password')
                    <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="w-full bg-blue-500 px rounded-xl px-4 py-2 text-white">Login</button>
            
        </form>
    </div>
    
</body>
</html>