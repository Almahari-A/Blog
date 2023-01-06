<div>
    <div class="flex">
        <div class="flex-grow">
            <div>
                <a href="#" class="font-medium text-gray-900">{{ $comment->user->name }}</a>
            </div>
            <div class="mt-1 flex-grow w-full">
                @if($isEditing)
                    <form wire:submit.prevent="editComment">
                    <div>
                        <label for="comment" class="sr-only">Comment body</label>
                        <textarea id="comment" name="comment" rows="3" class="shadow-sm block w-full 
                        focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md" 
                        placeholder="Write something"
                        wire:model.defer="editState.body"></textarea>

                        @error('newCommentState.body')
                            <p class="mt-2 text-sm">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="mt-3 flex items-center justify-between">
                        <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent 
                        font-medium rounded-md shadow-sm text-black bg-indigo-600 hover:bg-indigo-700 
                        focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Edit
                        </button>
                    </div>
                    </form>
                    @else
                    <p class="text-gray-700">{{ $comment->body }}</p>
                    @endif

                    
                </div>
            <div class="mt-2 space-x-2">
                @can('update', $comment)
                <button wire:click="$toggle('isEditing')" type="button" 
                class="text-gray-900 font-medium">
                    Edit
                </button>
                @endcan

                @can('destroy', $comment)
                    <button type="button" class="text-gray-900 font-medium"
                    x-on:click="confirmCommentDeletion"
                    x-data="{
                        confirmCommentDeletion () {
                            if (window.confirm('Confirm delete')) {
                            @this.call('deleteComment')
                            }
                        }
                    }">
                        Delete
                    </button>
                @endcan
            </div>
        </div>
    </div>
</div>
    
        