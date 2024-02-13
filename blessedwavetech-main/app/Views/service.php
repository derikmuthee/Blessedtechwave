<!-- service.php -->
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

<?= $this->include('nav') ?>

<div class="container mx-auto mt-5 flex-grow flex flex-col justify-center items-center">
    <h1 class="text-2xl font-bold mb-4">Our Services</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-8 gap-4">
        <!-- Business Software Card -->
        <div class="bg-cyan-900 text-gray-100 p-6 rounded-lg shadow-md sm:w-full md:w-auto">
            <h2 class="text-xl font-semibold mb-3">Business Software</h2>
            <p class="text-gray-200 mb-4">Explore our business software solutions tailored to your needs.</p>
            <a href="#" class="text-blue-500 hover:underline">Learn More</a>
        </div>

        <!-- Business Equipment Card -->
        <div class="bg-cyan-900 text-gray-100 p-6 rounded-lg shadow-md sm:w-full md:w-auto">
            <h2 class="text-xl font-semibold mb-3">Business Equipment</h2>
            <p class="text-gray-200 mb-4">Discover our range of high-quality business equipment for optimal efficiency.</p>
            <a href="#" class="text-blue-500 hover:underline"></a>
        </div>

        <!-- School Management System Card -->
        <div class="bg-cyan-900 text-gray-100 p-6 rounded-lg shadow-md sm:w-full md:w-auto">
            <h2 class="text-xl font-semibold mb-3">School Management System</h2>
            <p class="text-gray-200 mb-4">Efficiently manage and organize school operations with our comprehensive School Management System.</p>
            <a href="#" class="text-blue-500 hover:underline"></a>
        </div>
    </div>
</div>
    
    <div class="container mx-auto mt-8 mb-16">
        <h2 class="text-2xl font-bold mb-4">Service Explanation</h2>
        <p class="text-gray-700">We offer both Business softwares and computer business eqiupments.
    </br>On the software service we sell a variety of softwares such as POS SYSTEMS, WEB and mobile applications. click on it to find out more
    while On the equipments side we sell a range of computer hardware and accesories that aid business operations.
        </p>
        <!-- Add more content as needed -->
        <!-- Repeat content or add more to make the page scrollable -->
    </div>
</div>

    <footer class="bg-gray-800 text-white py-4 relative">
        <div class="container mx-auto flex justify-between items-center">
            <p>&copy; <?= date('Y'); ?> BlessedWave. All rights reserved.</p>
            <div class="flex space-x-4">
                <a href="#" class="text-white">Privacy Policy</a>
                <a href="#" class="text-white">Terms of Service</a>
            </div>
        </div>
    </footer>
</body>
</html>
