<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <?= $this->include('nav') ?>

    <!-- Responsive Hero Section with increased height -->
    <div class="relative h-80 bg-cover bg-center flex items-center" style="background-image: url('<?= base_url('images/BUSINESSINFOR.png'); ?>');">
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Hero Content with adjusted text sizes -->
        <div class="text-center text-white mx-auto">
            <h1 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold mb-4">Welcome to BlessedWave Tech Ventures</h1>
            <p class="text-lg md:text-xl lg:text-2xl xl:text-3xl">Empowering the future of Businesses with innovative technology</p>

            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 md:py-3 md:px-6 lg:py-4 lg:px-8 xl:py-5 xl:px-10 rounded mt-4 inline-block">Get Started</a>
        </div>
    </div>

    <div class="container mx-auto p-8 mt-8">
        <div class="flex items-center">
            <!-- Image on the left -->
            <img src="<?= base_url('images/ACE.png'); ?>" alt="Your Image" class="w-20 h-20 md:w-32 md:h-32 rounded-lg object-cover shadow-lg">

            <!-- Text on the right -->
            <div class="ml-8">
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-2 md:mb-4">Grow with Us</h1>
                <p class="text-gray-700">
                    Take a step today and register your business with us. <br>
                    Tell us what your business needs, and we shall provide a solution in terms of technology and smooth business operations.
                </p>
            </div>
        </div>
    </div>

    <footer class="bg-gray-800 text-white py-4">
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
