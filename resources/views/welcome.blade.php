<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasky</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes gradientBackground {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body class="min-h-screen bg-gray-50 text-gray-800 font-sans flex flex-col items-center justify-center">

    <div class="text-center px-6 py-8 max-w-xl mx-auto">
        <h1 class="text-5xl font-extrabold tracking-tight leading-tight text-gray-900 mb-4">
            Welcome to <span class="text-teal-500">Tasky</span>
        </h1>

        <p class="text-lg text-gray-600 mb-6">
            Organize your tasks, stay productive, and get things done effortlessly.
        </p>

        <div>
            <a href="/tasks"
               class="inline-block px-8 py-4 bg-teal-500 text-white font-semibold text-lg rounded-full shadow-lg transition duration-300 ease-in-out hover:bg-teal-400 transform hover:scale-105">
                Start Managing Tasks
            </a>
        </div>
    </div>

    <div class="absolute top-1/4 left-1/4 w-48 h-48 bg-gray-300 opacity-15 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-gray-300 opacity-10 rounded-full blur-2xl"></div>

    <footer class="absolute bottom-4 text-sm text-gray-600">
        &copy; {{ date('Y') }} Tasky
    </footer>

</body>
</html>
