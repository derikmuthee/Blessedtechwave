<!-- products.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>


    <title>Business Equipments - BlessedWave Tech Ventures</title>

    
</head>
<body class="bg-gray-100">

    <?= $this->include( 'nav') ?>

    <!-- Shopping Cart Icon with Item Count -->
    <div id="cart-icon" class="fixed top-16 right-4 z-50" onclick="toggleCartVisibility()">
    <div class="flex items-center space-x-2 justify-end bg-white p-4 rounded-full shadow-md cursor-pointer">
        <span class="text-2xl sm:text-3xl lg:text-4xl">&#128722;</span> <!-- Unicode character for shopping cart -->
        <span id="cart-item-count" class="bg-red-500 text-white rounded-full px-2">0</span>
    </div>

    <!-- Shopping Cart Popup -->
    <div id="cart" class="hidden fixed top-20 right-4 bg-white p-4 rounded-md shadow-md">
        <h2 class="text-xl font-bold mb-4">Shopping Cart</h2>
        <ul id="cart-items"></ul>
        <p id="total-amount" class="text-blue-500 font-bold mt-4">Total: $0.00</p>
    </div>
</div>

<div class="max-w-full min-w-350px w-full mx-0 my-0 p-10 h-200px overflow-x-auto">
        <div class="block relative mb-30px">
            <div id="product-scroll-container" class="flex overflow-x-auto">
                <div id="product-items" class="flex whitespace-nowrap transition-transform duration-150 ease-in-out">
                    <!-- Product Cards -->
                    <div class="inline-block w-150px mr-6">
                        <div class="p-8 bg-white rounded-lg shadow-md">
                            <div class="text-22px font-semibold mb-3">Product 1</div>
                            <p class="text-gray-700 mb-4">Description of Product 1.</p>
                            <p class="text-blue-500 font-bold">Price: $19.99</p>
                            <button onclick="addToCart('Product1', 'Product 1', 19.99)"
                                class="bg-blue-500 text-white py-2 px-4 rounded-full mt-4">Add to Cart</button>
                        </div>
                    </div>
                    <div class="inline-block w-150px mr-6">
                        <div class="p-8 bg-white rounded-lg shadow-md">
                            <div class="text-22px font-semibold mb-3">Product 1</div>
                            <p class="text-gray-700 mb-4">Description of Product 1.</p>
                            <p class="text-blue-500 font-bold">Price: $19.99</p>
                            <button onclick="addToCart('Product1', 'Product 1', 19.99)"
                                class="bg-blue-500 text-white py-2 px-4 rounded-full mt-4">Add to Cart</button>
                        </div>
                    </div>
                    <div class="inline-block w-150px mr-6">
                        <div class="p-8 bg-white rounded-lg shadow-md">
                            <div class="text-22px font-semibold mb-3">Product 1</div>
                            <p class="text-gray-700 mb-4">Description of Product 1.</p>
                            <p class="text-blue-500 font-bold">Price: $19.99</p>
                            <button onclick="addToCart('Product1', 'Product 1', 19.99)"
                                class="bg-blue-500 text-white py-2 px-4 rounded-full mt-4">Add to Cart</button>
                        </div>
                    </div>
                    <div class="inline-block w-150px mr-6">
                        <div class="p-8 bg-white rounded-lg shadow-md">
                            <div class="text-22px font-semibold mb-3">Product 1</div>
                            <p class="text-gray-700 mb-4">Description of Product 1.</p>
                            <p class="text-blue-500 font-bold">Price: $19.99</p>
                            <button onclick="addToCart('Product1', 'Product 1', 19.99)"
                                class="bg-blue-500 text-white py-2 px-4 rounded-full mt-4">Add to Cart</button>
                        </div>
                    </div>
                    <div class="inline-block w-150px mr-6">
                        <div class="p-8 bg-white rounded-lg shadow-md">
                            <div class="text-22px font-semibold mb-3">Product 1</div>
                            <p class="text-gray-700 mb-4">Description of Product 1.</p>
                            <p class="text-blue-500 font-bold">Price: $19.99</p>
                            <button onclick="addToCart('Product1', 'Product 1', 19.99)"
                                class="bg-blue-500 text-white py-2 px-4 rounded-full mt-4">Add to Cart</button>
                        </div>
                    </div>

                    <!-- Repeat the product cards as needed -->

                </div>
            </div>
        </div>
    </div>
    
    <div class="max-w-full min-w-350px w-full mx-0 my-0 p-10 h-200px overflow-x-auto">
        <div class="block relative mb-30px">
            <div id="product-scroll-container" class="flex overflow-x-auto">
                <div id="product-items" class="flex whitespace-nowrap transition-transform duration-150 ease-in-out">
                    <!-- Product Cards -->
                    <div class="inline-block w-150px mr-6">
                        <div class="p-8 bg-white rounded-lg shadow-md">
                            <div class="text-22px font-semibold mb-3">Product 1</div>
                            <p class="text-gray-700 mb-4">Description of Product 1.</p>
                            <p class="text-blue-500 font-bold">Price: $19.99</p>
                            <button onclick="addToCart('Product1', 'Product 1', 19.99)"
                                class="bg-blue-500 text-white py-2 px-4 rounded-full mt-4">Add to Cart</button>
                        </div>
                    </div>
                    <div class="inline-block w-150px mr-6">
                        <div class="p-8 bg-white rounded-lg shadow-md">
                            <div class="text-22px font-semibold mb-3">Product 1</div>
                            <p class="text-gray-700 mb-4">Description of Product 1.</p>
                            <p class="text-blue-500 font-bold">Price: $19.99</p>
                            <button onclick="addToCart('Product1', 'Product 1', 19.99)"
                                class="bg-blue-500 text-white py-2 px-4 rounded-full mt-4">Add to Cart</button>
                        </div>
                    </div>
                    <div class="inline-block w-150px mr-6">
                        <div class="p-8 bg-white rounded-lg shadow-md">
                            <div class="text-22px font-semibold mb-3">Product 1</div>
                            <p class="text-gray-700 mb-4">Description of Product 1.</p>
                            <p class="text-blue-500 font-bold">Price: $19.99</p>
                            <button onclick="addToCart('Product1', 'Product 1', 19.99)"
                                class="bg-blue-500 text-white py-2 px-4 rounded-full mt-4">Add to Cart</button>
                        </div>
                    </div>
                    <div class="inline-block w-150px mr-6">
                        <div class="p-8 bg-white rounded-lg shadow-md">
                            <div class="text-22px font-semibold mb-3">Product 1</div>
                            <p class="text-gray-700 mb-4">Description of Product 1.</p>
                            <p class="text-blue-500 font-bold">Price: $19.99</p>
                            <button onclick="addToCart('Product1', 'Product 1', 19.99)"
                                class="bg-blue-500 text-white py-2 px-4 rounded-full mt-4">Add to Cart</button>
                        </div>
                    </div>
                    <div class="inline-block w-150px mr-6">
                        <div class="p-8 bg-white rounded-lg shadow-md">
                            <div class="text-22px font-semibold mb-3">Product 1</div>
                            <p class="text-gray-700 mb-4">Description of Product 1.</p>
                            <p class="text-blue-500 font-bold">Price: $19.99</p>
                            <button onclick="addToCart('Product1', 'Product 1', 19.99)"
                                class="bg-blue-500 text-white py-2 px-4 rounded-full mt-4">Add to Cart</button>
                        </div>
                    </div>

                    <!-- Repeat the product cards as needed -->

                </div>
            </div>
        </div>
    </div>
  

    <script>

    const cartIcon = document.getElementById('cart-icon');
    const cart = document.getElementById('cart');
    const itemCount = document.getElementById('cart-item-count');
    const cartItemsContainer = document.getElementById('cart-items');
    const totalAmountContainer = document.getElementById('total-amount');

    let totalAmount = 0;

    function addToCart(productId, productName, productPrice) {
        const newCount = parseInt(itemCount.textContent) + 1;
        itemCount.textContent = newCount;

        if (newCount === 1) {
            cart.classList.remove('hidden');
        }

        const cartItem = document.createElement('li');
        cartItem.textContent = `${productName} - $${productPrice.toFixed(2)}`;
        cartItemsContainer.appendChild(cartItem);

        totalAmount += productPrice;
        totalAmountContainer.textContent = `$${totalAmount.toFixed(2)}`;
    }

    function hideCart() {
        cart.classList.add('hidden');
    }

    cartIcon.addEventListener('click', function (event) {
        event.stopPropagation();
        cart.classList.toggle('hidden');
    });

    document.addEventListener('click', function () {
        hideCart();
    });
</script>


    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="container mx-auto flex justify-between items-center">
            <p>&copy; <?= date('Y'); ?> BlessedWave. All rights reserved.</p>
            <div class="flex space-x-4">
                <a href="#" class="text-white">Privacy Policy</a>
                <a href="#" class="text-white">Terms of Service</a>
            </div>
        </div>
    </footer>