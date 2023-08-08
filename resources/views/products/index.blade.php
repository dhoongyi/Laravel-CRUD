@extends('./layouts/layout')

@section('title')
    Index Page
@endsection


@section('content')

    <div class="w-4/5 h-full">
        <div class="w-full h-12">
            <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:gird-cols-2 gap-5 ml-[50px]">
                @foreach ($products as $product)
                    <div class="w-[350px] h-[400px] bg-[#f4f4f4] rounded-md shadow-xl shadow-gray-400 ml-[100px] my-[30px]">
                        <img src="{{ asset("photos/".$product->photo) }}" class="w-4/5 h-2/3 rounded-sm my-2 mx-auto" alt=""/>
                        <div class="flex justify-between items-center mx-[30px]">
                            <h2 class="text-xl text-gray-500 font-semibold text-center my-1">{{$product->product_name}}</h2>
                            <h2 class= "font-semibold text-blue-500">{{$product->condition}}</h2>
                        </div>
                        <div class="flex justify-between items-center mx-[30px]">
                            <span class="text-sm font-semibold text-blue-500"> {{$product->price}}$</span>
                            <span class="text-sm font-semibold text-red-500">{{$product->category}}</span>
                        </div>

                        <div class="flex justify-center items-center mt-3">
                            <a href="{{url('items/'.$product->id.'/more')}}" class="text-green-700 font-semibold text-md tracking-wide cursor-pointer hover:tracking-wider" value="{{$product->id}}">See More Infos</a>
                        </div>
                    </div>
                @endforeach

                
            </div>
        </div>
    </div>
@endsection