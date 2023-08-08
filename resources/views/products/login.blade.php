{{-- <!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-full bg-slate-300">
  
    

</body>
</html> --}}

@extends('layouts/loginlayout')

@section('title')
    Login
@endsection

@section('logincontent')
<div class="h-screen w-screen flex justify-center items-center">
    <div class="h-[600px] bg-white rounded-xl shadow-lg shadow-slate-500 p-[70px] pt-[50px] relative">

        <div class="w-full h-[200px] text-center flex justify-center items-center flex-col">
            {{-- <img src="https://cdn.pixabay.com/photo/2014/04/03/10/38/human-chain-310973_1280.png" alt=""/> --}}
            {{-- <img src="https://media.istockphoto.com/id/1171670488/vector/group-of-people-community-togetherness-unity-logo-design-vector-symbol-illustration.jpg?s=170667a&w=0&k=20&c=4X0_4IuTU4PFaIVNR71NOWBEhYkCguvJx2o19u-eudw=" class="w-[150px]" alt=""/> --}}
            <img src="https://www.pngmart.com/files/22/Steam-Logo-PNG-HD-Isolated.png" class="w-[120px]" alt="">
            <h1 class="tracking-wider font-semibold text-3xl text-stone-600">Login To Your Account</h1>
            <span class="text-stone-400 mt-3 mb-5">Welcome Back</span>
        </div>

        <form action="{{url('products/store')}}" method="POST" enctype="multipart/form-data">   
            @csrf
            <div class="my-4">
                <label for="email" class="block text-xl text-stone-900 mb-2">Email:</label>
                <input type="email" id="email" name="email" class="w-full border border-slate-300 rounded-md p-2 focus:outline-0 focus:border-slate-700"autocomplete="off"/>
            </div>

            <div class="my-4 relative">
                <label for="password" class="block text-xl text-stone-900 mb-2">Password:</label>
                <div class="absolute right-5 top-11"><i class="fas fa-lock cursor-pointer text-gray-500" id="lock" onclick="showPwd(event)"></i></div>
                <input type="password" id="password" name="password" class="w-full border border-slate-300 rounded-md p-2 focus:outline-0 focus:border-slate-700"/>
            </div>

            <div class="flex justify-end items-center gap-5 mt-[40px]">
                <button type="reset" class="bg-rose-500 text-lg text-white rounded-md px-3 py-2 hover:bg-rose-700 hover:shadow-lg hover:shadow-stone-500">Cancel</button>
                <button type="submit" class="bg-blue-500 text-lg text-white rounded-md px-3 py-2 hover:bg-blue-700 hover:shadow-lg hover:shadow-stone-500">Log In</button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    let getpassword = document.getElementById("password");
    // console.log(getpassword);

    function showPwd(e){
        if(getpassword.getAttribute("type") === "password"){
            getpassword.setAttribute("type","text");
            e.target.classList.remove("fa-lock");
            e.target.classList.add("fa-lock-open");
        }else{
            getpassword.setAttribute("type","password");
            e.target.classList.add("fa-lock");
            e.target.classList.remove("fa-lock-open");
        }
    }
</script>
@endsection