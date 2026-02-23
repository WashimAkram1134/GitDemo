<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Campus Buddy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-xl font-bold text-red-600">Campus Buddy</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Welcome, {{ session('user.name', 'Student') }}!</span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition-colors">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96 flex items-center justify-center">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Welcome to Dashboard</h2>
                    <p class="text-gray-600">You have successfully logged in to Campus Buddy!</p>
                    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="text-blue-600 text-3xl mb-2">📚</div>
                            <h3 class="font-semibold text-gray-800">Courses</h3>
                            <p class="text-gray-600 text-sm">View your courses</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="text-green-600 text-3xl mb-2">📅</div>
                            <h3 class="font-semibold text-gray-800">Schedule</h3>
                            <p class="text-gray-600 text-sm">Check your schedule</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="text-purple-600 text-3xl mb-2">📊</div>
                            <h3 class="font-semibold text-gray-800">Grades</h3>
                            <p class="text-gray-600 text-sm">View your grades</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
