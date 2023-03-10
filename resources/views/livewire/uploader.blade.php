<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" x-data=" {

    dropping:false,

     handleDrop(event) {
         @this.uploadMultiple(
             'files',
             Array.from(event.target)
         )
     }
 }">

    <div class="p-6 text-gray-900">
        <div 
            x-on:dragover.prevent="dropping = true"
            x-on:dragleave.prevent="dropping = false"
            x-bind:class="{
                'border-gray-300': !dropping,
                'border-gray-400': dropping,
            }"

            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-dashed rounded-md">
            <div class="space-y-1 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="mx-auto w-12 h-12 text-gray-400 ">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>

                <div class="flex text-sm text-gray-600">
                    <label for="file-upload"
                        class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <span>Upload a file</span>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only" multiple>
                    </label>
                    <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
            </div>
        </div>
        <p class="mt-2 text-red-500 text-sm">Some validation error</p>

        <div class="mt-6 space-y-3">
            <div class="space-y-2">
                <p class="text-sm font-medium text-gray-900">Uploading files</p>
                <div class="bg-gray-200  rounded-full overflow-hidden">
                    <div class="h-2 bg-indigo-600 rounded-full" style="width: 69%;"></div>
                </div>
            </div>
        </div>

    </div>
</div>
