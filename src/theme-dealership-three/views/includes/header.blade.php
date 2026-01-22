{{-- Header section --}}
<header class="py-5 fixed top-0 left-0 w-full z-999">
    <div class="main-container">
        <div class="flex items-center justify-between gap-5">
            <a href="#" class="max-w-40 w-40 min-h-7.5 max-h-13 h-full">
                <img class="w-full h-full" src="{{ theme_url('images/logos/logo.svg') }}" alt="logo">
            </a>
            <nav>
                <ul class="items-center justify-end text-sm xl:text-lg leading-none font-light hidden lg:flex gap-0.5" style="color: {{ $website->theme_colors['white'] ?? '#ffffff' }};">
                    <li>
                        <a href="{{ route('websites.view', $uid) }}"
                            class="block px-4 xl:px-6 py-3 xl:py-4.5 bg-transparent border-b-2 border-transparent rounded-xl duration-300 hover:text-thameThreeSecondary hover:font-normal hover:border-thameThreeSecondary active:text-thameThreeSecondary active:font-normal active:border-thameThreeSecondary">
                            Home
                        </a>
                    </li>
                    <!-- <li>
                        <a href="{{ route('websites.about', $uid) }}"
                            class="block px-4 xl:px-6 py-3 xl:py-4.5 bg-transparent border-b-2 border-transparent rounded-xl duration-300 hover:text-thameThreeSecondary hover:font-normal hover:border-thameThreeSecondary active:text-thameThreeSecondary active:font-normal active:border-thameThreeSecondary">
                            About us
                        </a>
                    </li> -->
                    <li>
                        <a href="{{ route('websites.stock', $uid) }}"
                            class="block px-4 xl:px-6 py-3 xl:py-4.5 bg-transparent border-b-2 border-transparent rounded-xl duration-300 hover:text-thameThreeSecondary hover:font-normal hover:border-thameThreeSecondary active:text-thameThreeSecondary active:font-normal active:border-thameThreeSecondary">
                            Stock
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('websites.sell.car', $uid) }}"
                            class="block px-4 xl:px-6 py-3 xl:py-4.5 bg-transparent border-b-2 border-transparent rounded-xl duration-300 hover:text-thameThreeSecondary hover:font-normal hover:border-thameThreeSecondary active:text-thameThreeSecondary active:font-normal active:border-thameThreeSecondary">
                            Sell your car
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('websites.finance', $uid) }}"
                            class="block px-4 xl:px-6 py-3 xl:py-4.5 bg-transparent border-b-2 border-transparent rounded-xl duration-300 hover:text-thameThreeSecondary hover:font-normal hover:border-thameThreeSecondary active:text-thameThreeSecondary active:font-normal active:border-thameThreeSecondary">
                            Finance
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{ route('websites.warranty', $uid) }}"
                            class="block px-4 xl:px-6 py-3 xl:py-4.5 bg-transparent border-b-2 border-transparent rounded-xl duration-300 hover:text-thameThreeSecondary hover:font-normal hover:border-thameThreeSecondary active:text-thameThreeSecondary active:font-normal active:border-thameThreeSecondary">
                            Warranty
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('websites.delivery', $uid) }}"
                            class="block px-4 xl:px-6 py-3 xl:py-4.5 bg-transparent border-b-2 border-transparent rounded-xl duration-300 hover:text-thameThreeSecondary hover:font-normal hover:border-thameThreeSecondary active:text-thameThreeSecondary active:font-normal active:border-thameThreeSecondary">
                            Delivery
                        </a>
                    </li>
                    <!-- <li>
                        <a href="{{ route('websites.roadside.assistant', $uid) }}"
                            class="block px-4 xl:px-6 py-3 xl:py-4.5 bg-transparent border-b-2 border-transparent rounded-xl duration-300 hover:text-thameThreeSecondary hover:font-normal hover:border-thameThreeSecondary active:text-thameThreeSecondary active:font-normal active:border-thameThreeSecondary">
                            Roadside assistance
                        </a>
                    </li> -->
                </ul>
            </nav>
            <div class="w-fit flex items-center gap-8">
                <a href="{{ route('websites.contact', $uid) }}" 
                    class="w-36 xl:w-39 h-11 xl:h-13 px-5 xl:px-6 py-3.25 text-sml xl:text-base font-medium text-white uppercase bg-thameThreePrimary/90 rounded-xl hidden lg:flex items-center gap-4 duration-300 hover:bg-thameThreePrimaryDark/90">
                    Contact
                    <svg class="fill-white duration-300" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 0C10.7 0 10.5 0.0999994 10.3 0.299999L0.3 10.3C-0.1 10.7 -0.1 11.3 0.3 11.7C0.7 12.1 1.3 12.1 1.7 11.7L11.7 1.7C12.1 1.3 12.1 0.699999 11.7 0.299999C11.5 0.0999994 11.3 0 11 0Z" fill=""/>
                        <path d="M11 0H2C1.4 0 1 0.4 1 1C1 1.6 1.4 2 2 2H10V10C10 10.6 10.4 11 11 11C11.6 11 12 10.6 12 10V1C12 0.4 11.6 0 11 0Z" fill=""/>
                    </svg>
                </a>
                <!-- Mobile -->
                <button class="size-8 lg:hidden">
                    <img class="w-full h-full" src="{{ theme_url('images/icons/menubar.svg') }}" alt="icon">
                </button>
            </div>
        </div>
    </div>
</header>
