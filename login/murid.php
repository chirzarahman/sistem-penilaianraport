<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Murid - SMK Arimbi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/css/style-login.css">
    <link rel="icon" href="../assets/logo.png" />
</head>

<body>
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <main
        class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden py-6 sm:py-12">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class="text-3xl font-semibold text-white">Login Murid</span>
            <div class="mt-4 bg-white shadow-lg rounded-lg text-left">
                <div class="h-2 bg-pink-500 rounded-t-md"></div>
                <div class="px-8 py-6 ">
                    <label class="block font-medium">NIS</label>
                    <input type="text" placeholder="NIS"
                        class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" />
                    <label class="block mt-3 font-medium">Password</label>
                    <input type="password" placeholder="Password"
                        class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" />
                    <div class="flex justify-between items-baseline">
                        <a href="../dashboard/murid/"
                            class="mt-4 bg-blue-500 text-white py-2 px-6 rounded-md hover:bg-blue-700 ">Login</a>
                        <a href="guru.php" class="text-sm">Masuk Sebagai Guru</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="fixed bottom-4 right-4">
        <a href="admin.php" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full shadow-lg">
            Masuk Sebagai Admin
        </a>
    </div>
</body>

</html>