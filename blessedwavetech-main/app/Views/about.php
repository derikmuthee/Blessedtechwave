<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>About Us - BlessedWave Tech Ventures</title>
</head>
<body class="bg-gray-100">

    <!-- Navigation -->
    <?= $this->include('nav') ?>

    <!-- About Us Content -->
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">About Us</h1>

        <div class="flex flex-col md:flex-row items-center md:items-start">
    <!-- Text on the right -->
            <div class="md:ml-8">
                <p class="text-gray-700 mb-4">
                    BlessedWave Tech Ventures is a dynamic and innovative technology company dedicated to empowering businesses for success. With a team of skilled professionals, we specialize in providing tailored solutions to meet the unique needs of our clients.
                </p>
                <p class="text-gray-700 mb-4">
                    Our mission is to leverage the power of technology to drive business growth and efficiency. Whether you are a startup or an established enterprise, we are here to guide you on your digital journey and help you achieve your goals.
                </p>
                <p class="text-gray-700">
                    At BlessedWave, we believe in building strong and lasting partnerships with our clients. Our commitment to excellence, creativity, and innovation sets us apart in the ever-evolving landscape of technology.
                </p>
            </div>
       
          
    </div>




    <div class="container mx-auto p-8 mt-8 bg-orange-300 rounded-lg">
            <div class="flex items-center">
                <!-- Image on the left -->
                <img src="<?= base_url('images/md.jpeg'); ?>" alt="Your Image" class="w-20 h-20 md:w-32 md:h-32 rounded-full object-cover shadow-lg">

                <div class="ml-8">
                    <!-- Profile information with different background color and font style -->
                    <div class="bg-orange-300 p-4 rounded-lg">
                        <p class="text-orange-800">
                            Derick Muthee, Managing Director BlessedWave Tech Ventures, He brings a unique insights and vision to the company. His leadership has been instrumental in driving innovation and growth. With a passion for technology and a commitment to excellence, Derick leads our team towards new horizons.
                        </p>
                    </div>
                    <!-- Additional remarks or content for the image can be added here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="container mx-auto flex justify-between items-center">
            <p>&copy; <?= date('Y'); ?> BlessedWave Tech Ventures. All rights reserved.</p>
            <div class="flex space-x-4">
                <a href="#" class="text-white">Privacy Policy</a>
                <a href="#" class="text-white">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>
</html>
