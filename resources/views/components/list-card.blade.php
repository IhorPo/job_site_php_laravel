@props(['l'])

<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$l->logo ? asset('storage/' . $l->logo) : asset('/images/no-image.png')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$l['id']}}">{{$l['title']}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$l['company']}}</div>
            
            <x-tags-iterator :tags="$l['tags']" />
            
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> 
                {{$l['location']}}
            </div>
        </div>
    </div>
</div>