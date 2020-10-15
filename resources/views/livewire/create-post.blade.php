<div>
    
    <div class="bg-gray-50 px-4 py-5 m-4 ">
        {{ $body }}
        <textarea wire:model="body" name="body" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" id="" cols="30" rows="10" placeholder="Post Something ...."></textarea>
        <div class="flex justify-end">
            <button 
            wire:click="createPost" class="mt-2 px-4 py-2 bg-blue-600 text-white hover:bg-blue-400 rounded-md">Post</button>
        </div>
    </div>
</div>
