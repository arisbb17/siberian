<div>
    {{-- Do your work, then step back. --}}
    @foreach ($posts as $post)
        <div class=" p-4 my-4 bg-white shadow-xl">
            <div>
                <span class="text-xl font-bold">{{$post->user->name}}</span>
            <span class="text-gray-700">{{$post->created_at}}</span>
            {{$post->created_at->diffForHumans()}}
            </div>
            
        <span>{{$post->body}}</span>
        </div>
        
    @endforeach
</div>
