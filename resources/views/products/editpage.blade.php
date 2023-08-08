@extends("layouts/loginlayout")

@section('title')
    Edit Page
@endsection

@section('logincontent')
<div class="w-4/5 mx-auto mt-[100px]">
    <h1 class="bg-indigo-600 text-gray-200 font-bold text-2xl rounded-lg text-center p-3">Item Update Page</h1>
    <form action="{{url('items/'.$product->id.'/edit')}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 mt-5 gap-x-[50px]">
        @csrf
        {{-- @method("put") --}}
        <div class="w-full">
            <h1 class="text-3xl text-gray-500 tracking-wide mb-5">Item Informations</h1>
    
            <div class="w-full mb-4">
                <label for="itemname" class="text-xl text-gray-500 block mb-1">Item Name <span class="text-rose-500">*</span></label>
                <input type="text" name="itemname" id="itemname" class="w-full border rounded-md p-2 focus:outline-0 focus:border-blue-500" value="{{old("product_name") ?? $product->product_name}}" placeholder="Input Name">
            </div>
    
            <div class="w-full mb-4">
                <label for="category" class="text-xl text-gray-500 block mb-1" value="{{old("category") ?? $product->category}}" >Item Category<span class="text-rose-500">*</span></label>
                <select name="category" id="category" class="w-full border rounded-md p-2 focus:outline-0 focus:border-blue-500">
                    {{-- <option selected disabled class="text-gray-500">Select Category</option> --}}
                    <option value="Phone">Phone</option>
                    <option value="TV">TV</option>
                    <option value="Computer">Computer</option>
                    <option value="Headphone">Headphone</option>
                    <option value="Earphone">Earphone</option>
                    <option value="Cloth">Cloth</option>
                </select>
            </div>
    
            <div class="w-full mb-4">
                <label for="price" class="text-xl text-gray-500 block mb-1">Item Price <span class="text-rose-500">*</span></label>
                <input type="text" name="price" id="price" class="w-full border rounded-md p-2 focus:outline-0 focus:border-blue-500"  value="{{old("price") ?? $product->price}}"  placeholder="Enter Price">
            </div>
    
            <div class="w-full mb-4">
                <label for="condition" class="text-xl text-gray-500 block mb-1">Item condition <span class="text-rose-500">*</span></label>
                <select name="condition" id="condition" class="w-full border rounded-md p-2 focus:outline-0 focus:border-blue-500"  value="{{old("condition") ?? $product->condition}}" >
                    {{-- <option selected disabled class="text-gray-500">Select Condition</option> --}}
                    <option value="Used">Used</option>
                    <option value="Unused">Unused</option>
                </select>
            </div>
    
            <div class="w-full mb-4">
                <label for="type" class="text-xl text-gray-500 block mb-1">Select Item Type<span class="text-rose-500">*</span></label>
                <select name="type" id="type" class="w-full border rounded-md p-2 focus:outline-0 focus:border-blue-500"  value="{{old("type") ?? $product->type}}" >
                    {{-- <option selected disabled class="text-gray-500">Select Item Type</option> --}}
                    <option value="buy">Buy</option>
                    <option value="Sell">Sell</option>
                </select>
            </div>
    
    
        </div>
    
        <div class="w-full">
    
            {{-- <div class="w-full mt-[50px] mb-4">
                <label for="vdo" class="text-xl text-gray-500 block mb-1">Upload Photo</label>
                <div class="full h-32 flex flex-col justify-center items-center border border-dashed border-gray-300 rounded-lg">
                    <input type="file" id="vdo" name="photo" class="hidden" onchange="showPreview(event)" value="{{old("photo") ?? $product->photo}}"/>
                    <label for="vdo" class="w-full h-full flex sm:flex-col lg:flex-col-reverse justify-center items-center cursor-pointer">
                        <i class="fas fa-cloud-upload-alt fa-xl my-5 text-gray-400 text-[40px]"></i>
                    </label>
                </div>
            </div> --}}
    
            <div class="w-full mb-4 mt-[50px]">
                <label for="description" class="text-xl text-gray-500 block mb-1">Item Description <span class="text-rose-500">*</span></label>
                <textarea name="description" id="description" rows="12" class="w-full border rounded-md resize-none p-2 focus:outline-0 focus:border-blue-500"> {{old("description") ?? $product->description}} </textarea>
            </div>
    
            <div class="flex justify-end items-center">
                <button type="reset" class="bg-rose-500 text-white font-semibold text-lg rounded-md mx-3 px-5 py-2 hover:shadow-md hover:shadow-gray-500 hover:bg-rose-700">Cancel</button>
                <button type="submit" class="bg-sky-500 text-white font-semibold text-lg rounded-md mx-3 px-5 py-2 hover:shadow-md hover:shadow-gray-500 hover:bg-sky-700">Update</button>
            </div>
    
        </div>
    </form>
</div>
@endsection