<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/output.css">
    <title>Demo Academy24</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/img/welcome.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
</head>
<body>
    <!-- Header -->
    <header class="bg-darkColor fixed top-0 left-0 w-full z-50">
        <!-- navbar -->
        <nav class="container relative h-14 flex justify-between items-center mb-4">
            <div>
                <a href="#" class="text-2xl uppercase font-oswald">Pizza<span class="text-primaryColor">Hut</span></a>
            </div>
            <div class="hidden absolute bg-darkColor top-0 left-0 w-full py-14 border-b border-primaryColor md:block md:static md:py-0 md:border-none md:w-auto md:ml-auto" id="nav-menu">
                <ul class="flex flex-col text-center pt-4 gap-7 md:flex-row">
                    <li>
                        <a href="./index.php" class="nav__link hover:text-primaryColor hover:border-b hover:border-primaryColor ease-in duration-200">Home</a>
                    </li>
                    <li>
                        <a href="./pages/menu.php" class="nav__link hover:text-primaryColor hover:border-b hover:border-primaryColor duration-200">Menu</a>
                    </li>
                    <li>
                        <a href="./components/login.php" class="bg-primaryColor rounded-md p-2 text-darkColor max-w-[170px] mx-auto hover:bg-transparent hover:border-primaryColor hover:border hover:text-primaryColor">
                            Sign Up/ Login
                        </a>
                    </li>
                </ul>
                <div class="absolute top-[0.7rem] right-4 text-2xl cursor-pointer md:hidden" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <div class="md:hidden" id="hamburger">
                <i class="ri-menu-2-line cursor-pointer text-xl"></i>
            </div>
        </nav>
    </header>

    <!-- Home -->
    <section id="home">
        <div class="container flex flex-col items-center gap-10 md:flex-row">
            <div class="mx-auto md:basis-1/2 lg:basis-2/5 animate-movingY">
                <img src="./assets/img/welcome.png" alt="home image" class="w-60 md:w-full">
            </div>

            <div class="text-center md:basis-1/2 md:text-start lg:basis-3/5">
                <h1 class="home_title">HAPPY TUMMY WITH TASTY PIZZA.</h1>
                <div class="separator mx-auto md:mx-0"></div>
                <p class="paragraph">
                    Indulge in the ultimate pizza experience at PizzaHut. Our delicious, freshly baked pizzas 
                    are made with the finest ingredients and a whole lot of love. From classic flavors to 
                    innovative new creations, there's something for everyone to enjoy. Satisfy your cravings 
                    and treat your taste buds to a slice of happiness today!
                </p>
                <div class="text-base flex items-center justify-center gap-4 py-10 md:justify-start md:gap-20">
                    <div class="text-center">
                        <i class="fa-solid fa-utensils text-primaryColor text-4xl"></i> <br>
                        Delicious
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-droplet text-primaryColor text-4xl"></i> <br>
                        Fresh
                    </div>
                    <div class="text-center">
                    <i class="fa-brands fa-envira text-primaryColor text-4xl"></i> <br>
                        Organic
                    </div>
                </div>

                <button class="btn btn-primary">learn more</button>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="mt-3">
    <h1 class="category__title text-center pb-8">menu</h1>
        <div class="container flex flex-col gap-10 md:flex-row">
            <div class="flex-1"><img src="./assets/img/about.jpg" alt="about image" class="rounded-lg"></div>

            <div class="flex-1">
                <h2 class="section__title">FIND FOOD AND DRINKS, ALL-IN-ONE PLACE FOR YOUR BEST TASTE</h2>
                <div class="separator"></div>
                <p class="paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                <ul class="grid grid-cols-2 py-5 space-y-1">
                    <li class="text-xs text-paragraphColor"><i class="fa-solid fa-check text-primaryColor"></i> Best Price</li>
                    <li class="text-xs text-paragraphColor"><i class="fa-solid fa-check text-primaryColor"></i> Fresh ingredient</li>
                    <li class="text-xs text-paragraphColor"><i class="fa-solid fa-check text-primaryColor"></i> Best Service</li>
                    <li class="text-xs text-paragraphColor"><i class="fa-solid fa-check text-primaryColor"></i> Health Protocol</li>
                </ul>
                <a href="./pages/menu.php" class="btn btn-primary">Check Menu</a>
            </div>
        </div>
    </section>

    <!-- category -->
    <section id="category">
        <h1 class="category__title text-center pb-8">category</h1>
        <div class="container flex flex-col gap-5 md:flex-row">
            <!-- card 1 -->
            <div class="bg-redColor flex py-3 rounded-lg overflow-hidden md:flex-1">
                <div class="basis-1/3 relative">
                    <img src="./assets/img/pizza1.png" alt="category image" class="absolute w-20 -bottom-4 -left-4">
                </div>
                <div>
                    <div class="mb-2">
                        <h4 class="card__title">Food</h4>
                        <p class="text-xs">Lorem ipsum dolor sit.</p>
                    </div>
                    <a href="#" class="text-primaryColor font-semibold cursor-pointer">View Menu</a>
                </div>
            </div>

            <!-- card 2 -->
            <div class="bg-primaryColor flex py-3 rounded-lg overflow-hidden md:flex-1">
                <div class="basis-1/3 relative">
                    <img src="./assets/img/snack-1.png" alt="category image" class="absolute w-20 -bottom-4 -left-4">
                </div>
                <div>
                    <div class="mb-2">
                        <h4 class="card__title">Snack</h4>
                        <p class="text-xs">Lorem ipsum dolor sit.</p>
                    </div>
                    <a href="#" class="text-blackColor font-semibold cursor-pointer">View Menu</a>
                </div>
            </div>

            <!-- card 3 -->
            <div class="bg-greenColor flex py-3 rounded-lg overflow-hidden md:flex-1">
                <div class="basis-1/3 relative">
                    <img src="./assets/img/beverage-2.png" alt="category image" class="absolute w-20 -bottom-4 -left-4">
                </div>
                <div>
                    <div class="mb-2">
                        <h4 class="card__title">Beverage</h4>
                        <p class="text-xs">Lorem ipsum dolor sit.</p>
                    </div>
                    <a href="#" class="text-primaryColor font-semibold cursor-pointer">View Menu</a>
                </div>
            </div>
        </div>
    </section>

    <!-- promo -->
    <section id="promo">
    <h1 class="category__title text-center pb-8">discount</h1>
        <div class="container flex flex-col gap-5 lg:gap-10 lg:flex-row">
            <!-- card 1 -->
             <div class="bg-darkColorLight flex flex-col p-8 rounded-lg md:flex-row md:items-center lg:flex-row-reverse lg-flex-1">
                <img src="./assets/img/promo1.png" alt="promo image" class="w-40 mx-auto hover:animate-movingY md:mx-5">
                <div class="space-y-2 pt-5 md:pt-0">
                    <p class="text-xs text-primaryColor">Payday promo</p>
                    <h3 class="card__title">GET A 10% DISCOUNT ON PAYDAY WEEK</h3>
                    <p class="paragraph">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <a href="#" class="text-xs text-primaryColor">View Menu</a>
                </div>
             </div>
            <!-- card 2 -->
            <div class="bg-darkColorLight flex flex-col p-8 rounded-lg md:flex-row md:items-center lg:flex-row-reverse lg-flex-1">
                <img src="./assets/img/promo2.png" alt="promo image" class="w-40 mx-auto hover:animate-movingY md:mx-5">
                <div class="space-y-2 pt-5 md:pt-0">
                    <p class="text-xs text-primaryColor">Payday promo</p>
                    <h3 class="card__title">GET A 15% DISCOUNT ON PAYDAY WEEK</h3>
                    <p class="paragraph">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <a href="#" class="text-xs text-primaryColor">View Menu</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-darkColor text-white py-4">
        <section class="footer container mx-auto text-center px-4">
            <p class="mb-2 text-sm md:text-base">Created by Aliza Nurfitrian Meizahra (ALL)</p>
            <p class="mb-2 text-sm md:text-base">This is a demo website for Academy 2024</p>
            <a href="https://www.linkedin.com/in/alizaaaja" target="_blank" class="text-primaryColor hover:underline text-sm md:text-base">
                Connect with me on LinkedIn
            </a>
        </section>
    </footer>

     <!-- Main.js -->
    <script src="./constant/main.js"></script>
</body>
</html>
