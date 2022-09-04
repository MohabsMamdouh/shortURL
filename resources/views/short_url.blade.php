<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-center bg-white border-b border-gray-200">
                    <h1 class="text-blue-900 text-5xl">Short URL</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8 pb-10 bg-white border-b border-gray-200">
            <div class="flex justify-center ">
                <form action="{{ route('short.url') }}" class="w-full justify-center" method="post">
                    @csrf
                    <div class="grid grid-rows-2">
                        <input type="text" required class="w-full border-b border-0 border-indigo-600 focus:ring-0" name="original" id="Originalurl" placeholder="Type the URL">
                        @error('original')
                            <span class="text-red-400 m-2 p-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="border-solid border-2 border-indigo-600 p-3">Create Short URL</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section class="py-4">
        <div class="container mx-auto p-3">
            @if (session('success_message'))
                {!! session('success_message') !!}
            @endif
        </div>
    </section>
</x-guest-layout>
