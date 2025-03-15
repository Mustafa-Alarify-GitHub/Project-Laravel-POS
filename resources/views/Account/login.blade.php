<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleForm() {
            document.getElementById('loginForm').classList.toggle('hidden');
            document.getElementById('registerForm').classList.toggle('hidden');
        }
    </script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        
        <div id="loginForm">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>
            <form action="{{ route('Login_user') }}" method="POST" class="space-y-4">
                @csrf
                <label class="block text-gray-700">Email</label>
                <input type="text" name="email" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email">
                
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password">
                
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Login</button>
            </form>
        </div>

        <div id="registerForm" class="hidden">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Sign Up</h2>
            <form action="{{ route('Register') }}" method="post" class="space-y-4">
                @csrf
                <label class="block text-gray-700">Name</label>
                <input type="text" name="name" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your name">
                
                <label class="block text-gray-700">Phone</label>
                <input type="number" name="phone" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your phone number">
                
                <label class="block text-gray-700">Email</label>
                <input type="text" name="email" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email">
                
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password">
                
                <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-md hover:bg-green-600">Sign Up</button>
            </form>
        </div>
        <button onclick="toggleForm()" class="w-full mt-4 mb-4 bg-gray-500 text-white py-2 rounded-md hover:bg-gray-600"> Login/Sign Up</button>
    </div>

</body>
</html>
