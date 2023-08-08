<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="overflow-hidden font-['Quicksand']">
        <div class="w-full h-screen flex">
            <div class="w-1/5 h-full bg-indigo-200 flex items-center flex-col p-5">
                <div class="flex items-center">
                    <img src="https://www.pngmart.com/files/22/Steam-Logo-PNG-HD-Isolated.png" class="w-[90px]" alt=""/>
                    <span class="text-3xl text-gray-500 tracking-wide font-semibold">Admin Pannel</span>
                </div>
                
                <ul class="w-full mt-[50px] space-y-3 px-3">
                    <li class="w-full bg-indigo-500 text-white rounded-md shadow-sm cursor-pointer py-3 transition-all duration-500 hover:bg-indigo-600 hover:shadow-md hover:shadow-gray-400"><a href="{{url("index")}}" class="text-xl font-semibold px-3"><i class="fas fa-list fa-lg mr-[20px]"></i>Items</a></li>
                    <li class="w-full bg-indigo-500 text-white rounded-md shadow-sm cursor-pointer py-3 transition-all duration-500 hover:bg-indigo-600 hover:shadow-md hover:shadow-gray-400"><a href="{{url("products/item")}}" class="text-xl font-semibold px-3"><i class="fas fa-plus-circle fa-lg mr-[20px]"></i>Add Items</a></li>
                    <li class="w-full bg-indigo-500 text-white rounded-md shadow-sm cursor-pointer py-3 transition-all duration-500 hover:bg-indigo-600 hover:shadow-md hover:shadow-gray-400"><a href="{{url("items/userview")}}" class="text-xl font-semibold px-3"><i class="fas fa-user-circle fa-lg mr-[20px]"></i>User View</a></li>
                
                </ul>
                
                
                <div class="mt-[500px]">
                    <a href="{{route("users.login")}}" class="text-gray-500 text-[30px] font-thin">Log Out<i class="fas fa-sign-out-alt ml-5"></i></a>
                </div>
            </div>
        
            <div class="w-4/5 h-full overflow-y-auto">
                @yield('content')
            </div>
        </div>
    </body>
</html>