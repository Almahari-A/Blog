<div>
    <div class="flex">
        <div class="flex-grow">
            <div>
                <a href="#" class="font-medium text-gray-900">{{ $comment->user->name }}</a>
            </div>
            <div class="mt-1 flex-grow w-full">
                <p class="text-gray-700">{{ $comment->body }}</p>
            </div>
            <div class="mt-2 space-x-2">
                <button type="button" class="text-gray-900 font-medium">
                    Edit
                </button>
                <button type="button" class="text-gray-900 font-medium">
                    Delete
                </button>
            </div>
        </div>
    </div>
</div>
    
        