<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="p-6 bg-sky-600 flex h-screen lg:h-fit">

        <form action=" {{ route('upload') }} " method="POST" enctype="multipart/form-data"
            class=" m-auto flex flex-col  justify-center space-y-10">

            @csrf

            <div class="flex w-full justify-center bg-grey-lighter">
                <label
                    class="w-64 flex flex-col items-center px-4 py-6 bg-white text-sky-700 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-sky-800">
                    <svg class="w-8 h-8 animate-bounce" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class="mt-2 text-base leading-normal" id="fileName">اختر مقطع فيديو</span>
                    <input  id="file" type='file' name="file" class="hidden"  onchange="getFileName()" />
                </label>
            </div>

            @error('file')
                <span class="text-red-500">
                    يجب أن يكون الملف فيديو
                </span>
            @enderror

            <button class="bg-green-500 text-green-200 font-semibold rounded-full py-2 px-6"> إرسال </button>

        </form>

    </div>

    <script>
        function getFileName() {
            var x = document.getElementById('file')
            x.style.visibility = 'collapse'
            document.getElementById('fileName').innerHTML = x.value.split('\\').pop()
        }
    </script>
</x-app-layout>
