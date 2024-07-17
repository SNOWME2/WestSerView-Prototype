<x-dashboardview>

    <div class="bg-gray-700 p-4 px-10 mt-2">
        <p class="text-white text-3xl text-center">Hotels</p>
    </div>

    <div class="grid md:grid-cols-3 grid-cols-1 p-3 md:px-10 px-5">
        @foreach($hotels as $hotel)
        <div class="mx-2 my-2 p-3 bg-white rounded-md relative hover:drop-shadow-2xl ransition ease-in-out delay-300  hover:cursor-pointer t0 border-solid">
            <a href="{{route('hotel.show',['hotel'=>$hotel->hotel_id])}}">
                <div class=" border-2 rounded-md border-white  border-opacity-15 hover:border-blue-400  hover:rounded-md transition ease-in-out delay-300">
                    <img class="h-full w-full" src="{{ URL('images/rooms/example-1.jpeg') }}">
                </div>
                <div class="px-5 py-2 bg-white relative" style="height: 5rem;">
                    <p class="relative left-0 top-0 text-black text-2xl font-bold">{{$hotel->hotel_name}}</p>
                    <p class="relative right-0 top-0 text-black text-2xl font-bold">{{$hotel->rooms->count()}} Rooms </p>

                </div>
            </a>
        </div>
        @endforeach
    </div>


<div class="mt-auto ">
    {{ $hotels->links('pagination::paginatore') }}
</div>


</x-dashboardview>
