<!DOCTYPE html>
<html>
    <head>
        <title>User View</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="overflow-hidden font-['Quicksand'] overflow-y-auto">
        <div class="w-screen h-screen">
            <div class="w-full relative">
                <img src="https://www.zilliondesigns.com/blog/wp-content/uploads/EcommerceLogos.jpg" class="w-full h-64 object-cover" alt="">

                <form action="" method="" class="w-full flex justify-center items-center absolute bottom-[-30px]">
                    <div class="flex justify-center items-center">
                        <input type="text" name="search" id="search" class="w-[500px] bg-white text-stone-500 font-semibold rounded-tl-lg rounded-bl-lg shadow-lg shadow-stone-500 mx-auto p-4 focus:outline-0" placeholder="Search By Name"/>
                        <button type="submit" class="bg-indigo-500 text-white font-semibold rounded-tr-lg rounded-br-lg shadow-lg shadow-stone-500 p-4 hover:bg-indigo-700"><i class="fas fa-search"></i> Search Item</button>
                    </div>
                </form>
            </div>

            <div class="w-4/5 flex justify-between items-center mx-auto my-8">
                <h1 class="text-2xl font-bold text-stone-500">What are you looking for?</h1>

                <a href="javascript:void(0);" class="text-blue-500 font-bold hover:text-blue-700"> View More >> </a>
            </div>

            <div class="w-4/5 mx-auto flex justify-evenly">
                <div class="w-[200px] h-[100px] bg-violet-200 text-stone-500 rounded-md flex justify-center items-center flex-col">
                    <i class="fas fa-laptop fa-3x"></i>
                    <span class="text-lg font-semibold">Computer</span>
                </div>

                <div class="w-[200px] h-[100px] bg-violet-200 text-stone-500 rounded-md flex justify-center items-center flex-col">
                    <i class="fas fa-mobile-alt fa-3x"></i>
                    <span class="text-lg font-semibold">Phone</span>
                </div>

                <div class="w-[200px] h-[100px] bg-violet-200 text-stone-500 rounded-md flex justify-center items-center flex-col">
                    <i class="fas fa-tv fa-3x"></i>
                    <span class="text-lg font-semibold">Television</span>
                </div>

                <div class="w-[200px] h-[100px] bg-violet-200 text-stone-500 rounded-md flex justify-center items-center flex-col">
                    <i class="fas fa-vest fa-3x"></i>
                    <span class="text-lg font-semibold">Fashion</span>
                </div>

                <div class="w-[200px] h-[100px] bg-violet-200 text-stone-500 rounded-md flex justify-center items-center flex-col">
                    <i class="fas fa-tools fa-3x"></i>
                    <span class="text-lg font-semibold">Help</span>
                </div>
            </div>

            <div class="w-3/5 grid grid-cols-3 mx-auto mt-8">

                <div class="w-full col-span-3 flex justify-between">
                    <h2 class="text-xl text-stone-500 font-semibold ">Recent Items</h2>
                    <a href="javascript:void(0);" class="text-blue-500 font-semibold text-xl">View More >> </a>
                </div>

                @foreach ($products as $product)
                    <div class="w-[300px] h-[400px] bg-[#f4f4f4] rounded-md shadow-xl shadow-gray-400 my-[30px]">
                        <img src="{{ asset("photos/".$product->photo) }}" class="w-4/5 h-2/3 rounded-sm my-2 mx-auto" alt=""/>
                        <div class="flex justify-between items-center mx-[30px]">
                            <h2 class="text-xl text-gray-500 font-semibold text-center my-1">{{$product->product_name}}</h2>
                            <h2 class= "font-semibold text-blue-500">{{$product->condition}}</h2>
                        </div>
                        <div class="flex justify-between items-center mx-[30px]">
                            <span class="text-sm font-semibold text-blue-500"> {{$product->price}}$</span>
                            <span class="text-sm font-semibold text-red-500">{{$product->category}}</span>
                        </div>

                        <div class="flex justify-end items-center mt-3">
                            <a href="javascript:void(0);" class="text-green-700 font-semibold text-md tracking-wide cursor-pointer mr-5 hover:tracking-wider" value="{{$product->id}}"><i class="fas fa-shopping-cart fa-lg"></i> Add To Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>