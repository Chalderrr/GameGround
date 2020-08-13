@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
            <div class="flex-none">
                <img src="/ff7.jpg" alt="Cover">
            </div>

            <div class="mt-6 lg:mt-12 lg:ml-12 lg:mr-64">
                <h2 class="font-semibold text-4xl leading-tight">Final Fantasy V11 Remake</h2>
                <div class="text-gray-400">
                    <span>Adventure, RPG</span>
                    &middot;
                    <span>Square Enix</span>
                    &middot;
                    <span>Playstation 4</span>
                </div>

                <div class="flex flex-wrap items-center mt-8">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
                        </div>
                        <div class="ml-4 text-xs">Member<br> Score</div>
                    </div>
                    <div class="flex items-center ml-12">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">92%</div>
                        </div>
                        <div class="ml-4 text-xs">Critic<br> Score</div>
                    </div>

                    <div class="flex items-center space-x-4 mt-4 lg:mt-0 ml-0 lg:ml-12">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">fb</a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">fb</a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">fb</a>
                        </div>
                    </div>

                </div>

                <p class="mt-12">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam assumenda, autem commodi dicta dolor dolores eveniet ex excepturi facilis fugiat illo illum iste labore libero maxime molestias neque officiis quaerat quod rem repudiandae sapiente sit suscipit totam ullam veniam!
                </p>

                <div class="mt-12">
                    <button class="flex bg-blue-500 text-white font-semibold px-4 py-4  hover:bg-blue-600 rounded transition ease-in-out duration-150">
                        Play Trailer
                    </button>
                </div>
            </div>


        </div> <!-- end game deets -->

        <div class="image-container border-b border-gray-800 pb-12 mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Images</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
                <div>
                    <a href="#">
                        <img src="/screenshot1.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="/screenshot2.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="/screenshot3.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="/screenshot4.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="/screenshot5.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="/screenshot6.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            </div>



        </div>

        <div class="similar-games-container mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar Games</h2>

            <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12">
                <div class="game mt-8">
                    <div class="relative inline-block">

                        <a href="">
                            <img src="/ff7.jpg" alt="Game Cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                        </div>

                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">

                        <a href="">
                            <img src="/ff7.jpg" alt="Game Cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                        </div>

                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">

                        <a href="">
                            <img src="/ff7.jpg" alt="Game Cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                        </div>

                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">

                        <a href="">
                            <img src="/ff7.jpg" alt="Game Cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                        </div>

                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">

                        <a href="">
                            <img src="/ff7.jpg" alt="Game Cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                        </div>

                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">

                        <a href="">
                            <img src="/ff7.jpg" alt="Game Cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                        </div>

                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
            </div>
        </div>


    </div>
@endsection