@extends("layouts.layout")

@section("title","More Infos")

@section('content')
    <div class="w-full flex justify-center items-center">
        <div class="w-3/4 bg-gradient-to-t from-gray-300 to-gray-200 rounded-md shadow-lg flex justify-center items-center flex-col mt-[50px] p-10 relative">

            <div class="absolute right-5 top-6">
                <a href="{{url("items/".$product->id."/delete")}}" class="bg-red-500 rounded-lg text-lg font-semibold text-white p-2" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash-alt"></i> Delete Item</a>
                <a href="{{url("items/".$product->id."/editpage")}}" class="bg-blue-500 rounded-lg text-lg font-semibold text-white p-2"> <i class="fas fa-edit"></i> Edit Item</a>
            </div>

            <div class="border border-gray-300">
                <img src="{{ asset("photos/" . $product->photo) }}" class="w-96 max-h-96 rounded-md shadow-lg shadow-gray-600" alt="">

            </div>

            <div class="w-full grid grid-cols-2 py-[50px]">
                <div class="w-full">
                    <span class="text-2xl font-bold text-gray-600 block">{{$product->product_name}}</span>
                    <span class="text-xl text-green-500 font-semibold block mt-3 mb-5">{{$product->price}}$</span>

                    <div class="w-full text-center text-xl font-semibold flex justify-between items-center">
                        <div class="flex flex-col">
                            <span class="underline text-gray-500 mb-2">Type</span>
                            <span class="text-red-500">{{$product->item_type}}</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="underline text-gray-500 mb-2">Condition</span>
                            <span class="text-green-500">{{$product->condition}}</span>
                        </div>
                        <div class="flex flex-col  mr-10">
                            <span class="underline text-gray-500 mb-2">Status</span>
                            <span class="text-blue-500">Avaliable</span>
                        </div>
                    </div>

                    <div class="mt-[50px]">
                        <h2 class="text-xl text-gray-600 font-semibold mb-2">Product Description</h2>
                        <span class="text-gray-500 font-semibold text-justify mr-5 pr-5">{{$product->description}}</span>

                    </div>

                    <div class="mt-[50px]">
                        <h1 class="text-lg text-gray-500 font-semibold mb-2">Owner Info</h1>

                        <p class="text-gray-500 font-semibold"><i class="fas fa-phone rotate-[100deg] mr-[10px]"></i>Contact Number</p>
                        <p class="text-gray-500 font-semibold cursor-pointer">+95 787958376</p>
                    </div>
                </div>


                <div class="w-full">
                    <div class="w-full">
                        <p class="text-lg text-gray-500 font-semibold mb-5"><i class="fas fa-map-marker-alt"></i> Location:</p>
                        <div class="w-full ml-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15274.936830685107!2d96.17118739306338!3d16.839536845047547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1934788c16f57%3A0xdaf481b76e9e3efa!2sManpuku%20BBQ%20Buffet!5e0!3m2!1sen!2smm!4v1691390043581!5m2!1sen!2smm" class="w-full h-96" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection