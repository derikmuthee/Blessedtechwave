<!-- app/Views/dashboard.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    
<?= $this->include('nav') ?>
   
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-4">Welcome, <?= session('username'); ?>!</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- User Profile -->
            <div class="bg-white p-4 rounded-md shadow-md">
                <h3 class="text-lg font-semibold mb-2">User Profile</h3>
                <p class="text-gray-600 mb-4">View and update your profile information.</p>
                <a href="#" class="btn btn-primary">View Profile</a>
            </div>

            <!-- Settings -->
            <div class="bg-white p-4 rounded-md shadow-md">
                <h3 class="text-lg font-semibold mb-2">Settings</h3>
                <p class="text-gray-600 mb-4">Manage your account settings.</p>
                <a href="#" class="btn btn-primary">Account Settings</a>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white p-4 rounded-md shadow-md col-span-2">
                <h3 class="text-lg font-semibold mb-2">Recent Activity</h3>
                <p class="text-gray-600 mb-4">View your recent activity and updates.</p>
                <a href="#" class="btn btn-primary">View Activity</a>
            </div>

            <!-- Messages -->
            <div class="bg-white p-4 rounded-md shadow-md">
                <h3 class="text-lg font-semibold mb-2">Messages</h3>
                <p class="text-gray-600 mb-4">Read and respond to your messages.</p>
                <a href="#" class="btn btn-primary">View Messages</a>
            </div>

            <!-- Notifications -->
            <div class="bg-white p-4 rounded-md shadow-md">
                <h3 class="text-lg font-semibold mb-2">Notifications</h3>
                <p class="text-gray-600 mb-4">Check your latest notifications.</p>
                <a href="#" class="btn btn-primary">View Notifications</a>
            </div>
        </div>
    </div>

</body>
</html>
