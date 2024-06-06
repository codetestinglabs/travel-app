<x-front-layout>
    {{-- Hero --}}
    <section class="bg-green-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-red-200 h-screen">
            <div class="search-container pt-40">
                <div class="w-full bg-white rounded-2xl p-16 relative">
                    <div id="topNav" class="py-8 absolute left-[50%] -top-[20%] -translate-x-[50%] w-[50%] drop-shadow-xl bg-white rounded-2xl">
                        <div class="w-[50%] mx-auto flex justify-between">
                            <a href="#" id="flightBtn" class="flex justify-center gap-2">
                                <img id="flightImg" class="" src="{{ asset('images/flight.svg') }}" alt="">
                                {{ __('Flight') }}
                            </a>
            
                            <a href="#" id="hotelBtn" class="flex justify-center gap-2">
                                <img id="hotelImg" class="grayscale" src="{{ asset('images/hotel.svg') }}" alt="">
                                {{ __('Hotel') }}
                            </a>
            
                            <a href="#" id="tourBtn" class="flex justify-center gap-2">
                                <img id="tourImg" class="grayscale" src="{{ asset('images/tour.svg') }}" alt="">
                                {{ __('Tour') }}
                            </a>
                        </div>
                    </div>

                    {{-- Flight --}}
                    <div id="flight" class="">
                        <div class="grid grid-cols-4 gap-4">
                            <div class="border rounded-lg p-2 cursor-pointer">
                                <p class="uppercase font-extralight text-sm">form</p>
                                <p class="capitalize font-bold text-xl">dhaka</p>
                                <span class="font-extralight text-xs">DAC, Hazrat Shahjalal International Airport</span>
                            </div>
                            <div class="border rounded-lg p-2 cursor-pointer">
                                <p class="uppercase font-extralight text-sm">to</p>
                                <p class="capitalize font-bold text-xl">rajshahi</p>
                                <span class="font-extralight text-xs">RJH, Shah Mokhdum Airport</span>
                            </div>
                            <div class="border rounded-lg p-2 cursor-pointer">
                                <p class="uppercase font-extralight text-sm">jorney date</p>
                                <p class="capitalize"><span class="font-bold text-xl">10</span> jun'24</p>
                                <span class="font-extralight text-xs">Monday</span>
                            </div>
                            <div class="border rounded-lg p-2 cursor-pointer">
                                <p class="uppercase font-extralight text-sm">traveler</p>
                                <p class="capitalize font-bold text-xl">1 Traveler</p>
                                <span class="font-extralight text-xs">Economy</span>
                            </div>
                        </div>
    
                        <div class="flex items-center gap-4 mt-2">
                            <span class="font-bold text-lg capitalize">class:</span>
                            <div class="flex items-center gap-1">
                                <input type="radio" name="class" class="cursor-pointer" id="echonomy"> <label for="echonomy" class="capitalize cursor-pointer">echonomy</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="radio" name="class" class="cursor-pointer" id="business"> <label for="business" class="capitalize cursor-pointer">business</label>
                            </div>
                        </div>
                    </div>

                    {{-- Hotel --}}
                    <div id="hotel" class="hidden">
                        <div class="grid grid-cols-4 gap-4">
                            <div class="border rounded-lg p-2 cursor-pointer">
                                <p class="uppercase font-extralight text-sm">city / hotel / resort / area</p>
                                <p class="capitalize font-bold text-xl">cox's bazar</p>
                                <span class="font-extralight text-xs">Bangladesh</span>
                            </div>
                            <div class="border rounded-lg p-2 cursor-pointer">
                                <p class="uppercase font-extralight text-sm">check in</p>
                                <p class="capitalize"><span class="font-bold text-xl">11</span> jun'24</p>
                                <span class="font-extralight text-xs">Tuesday</span>
                            </div>
                            <div class="border rounded-lg p-2 cursor-pointer">
                                <p class="uppercase font-extralight text-sm">check out</p>
                                <p class="capitalize"><span class="font-bold text-xl">12</span> jun'24</p>
                                <span class="font-extralight text-xs">Wednesday</span>
                            </div>
                            <div class="border rounded-lg p-2 cursor-pointer">
                                <p class="uppercase font-extralight text-sm">rooms & guests</p>
                                <p class="capitalize font-bold text-xl">1 room, 2 guests</p>
                                <span class="font-extralight text-xs">2 Adults</span>
                            </div>
                        </div>
    
                        <div class="flex items-center gap-4 mt-2">
                            <span class="font-bold text-lg capitalize">search for:</span>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="business" class="cursor-pointer" id="business"> <label for="business" class="capitalize cursor-pointer">business</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="couples" class="cursor-pointer" id="couples"> <label for="couples" class="capitalize cursor-pointer">couples</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="families" class="cursor-pointer" id="families"> <label for="families" class="capitalize cursor-pointer">families</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="friends" class="cursor-pointer" id="friends"> <label for="friends" class="capitalize cursor-pointer">friends</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="solo" class="cursor-pointer" id="solo"> <label for="solo" class="capitalize cursor-pointer">solo</label>
                            </div>
                        </div>
                    </div>
                    {{-- Hotel End --}}

                    {{-- Tour --}}
                    <div id="tour" class="hidden">
                        <div class="grid grid-cols-1">
                            <div class="border rounded-lg p-2 cursor-pointer">
                                <p class="uppercase font-extralight text-sm">location / tour</p>
                                <p class="capitalize font-bold text-xl">cox's baar</p>
                            </div>
                        </div>
                    </div>
                    {{-- Tour End --}}

                    <a id="searchBtn" href="/" class="absolute left-[50%] -bottom-[20%] -translate-y-[50%] -translate-x-[50%] bg-yellow-400 text-xl font-bold rounded-lg py-3 px-12">Search</a>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Button
        const flight = document.getElementById("flightBtn");
        const hotel = document.getElementById("hotelBtn");
        const tour = document.getElementById("tourBtn");

        // Field
        const flightField = document.getElementById("flight");
        const hotelField = document.getElementById("hotel");
        const tourField = document.getElementById("tour");

        // Img
        const flightImg = document.getElementById("flightImg");
        const hotelImg = document.getElementById("hotelImg");
        const tourImg = document.getElementById("tourImg");

        const searchBtn = document.getElementById("searchBtn");
        const topNav = document.getElementById("topNav");

        flight.onclick = function() {
            flightField.classList.remove('hidden');
            hotelField.classList.add('hidden');
            tourField.classList.add('hidden');

            flightImg.classList.remove('grayscale');
            hotelImg.classList.add('grayscale');
            tourImg.classList.add('grayscale');

            searchBtn.classList.add('-bottom-[20%]');
            searchBtn.classList.remove('-bottom-[25%]');

            topNav.classList.remove('-top-[25%]');
            topNav.classList.add('-top-[20%]');
        }

        hotel.onclick = function() {
            flightField.classList.add('hidden');
            hotelField.classList.remove('hidden');
            tourField.classList.add('hidden');

            flightImg.classList.add('grayscale');
            hotelImg.classList.remove('grayscale');
            tourImg.classList.add('grayscale');
            
            searchBtn.classList.add('-bottom-[20%]');
            searchBtn.classList.remove('-bottom-[25%]');

            topNav.classList.remove('-top-[25%]');
            topNav.classList.add('-top-[20%]');
        }

        tour.onclick = function() {
            flightField.classList.add('hidden');
            hotelField.classList.add('hidden');
            tourField.classList.remove('hidden');

            flightImg.classList.add('grayscale');
            hotelImg.classList.add('grayscale');
            tourImg.classList.remove('grayscale');

            searchBtn.classList.remove('-bottom-[20%]');
            searchBtn.classList.add('-bottom-[25%]');

            topNav.classList.remove('-top-[20%]');
            topNav.classList.add('-top-[25%]');
        }
    </script>
</x-front-layout>