<x-layout>
    <x-slot:judul>Login</x-slot:judul>

    <div class="flex justify-center items-center min-h-[70vh]">
        <div class="w-full max-w-md">
            <!-- Header -->
            <div class="text-center mb-6">
                <div class="inline-block bg-[#FF9013] px-6 py-3 shadow-[4px_4px_0px_0px_rgba(0,0,0,0.25)]">
                    <h2 class="text-2xl font-bold text-[#F5F1DC]">LOG INTO ADMIN DASHBOARD</h2>
                </div>
            </div>
            <!-- Form Container -->
            <div class="bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(115,200,210,1)] p-8">

                <!-- Success Message -->
                @if (session('success'))
                    <div
                        class="mb-4 bg-green-100 border-2 border-green-500 text-green-900 px-4 py-3 shadow-[2px_2px_0px_0px_rgba(0,0,0,0.25)]">
                        <span class="font-semibold">{{ session('success') }}</span>
                    </div>
                @endif

                <!-- Error Messages -->
                @if ($errors->any())
                    <div
                        class="mb-4 bg-red-100 border-2 border-red-500 text-red-900 px-4 py-3 shadow-[2px_2px_0px_0px_rgba(0,0,0,0.25)]">
                        <span class="font-semibold">{{ $errors->first() }}</span>
                    </div>
                @endif

                <form action="{{ route('login.process') }}" method="POST" class="space-y-4">
                    @csrf

                    <!-- Email Input -->
                    <div>
                        <label class="block mb-2 text-sm font-bold text-gray-900 uppercase">
                            Email
                        </label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="bg-[#F5F1DC] border-2 border-black text-gray-900 text-sm font-semibold block w-full p-3 focus:outline-none focus:ring-2 focus:ring-[#FF9013] @error('email') @enderror"
                            placeholder="Your email here" required>
                        @error('email')
                            <p class="mt-1 text-sm text-red-600 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label class="block mb-2 text-sm font-bold text-gray-900 uppercase">
                            Password
                        </label>
                        <input type="password" name="password"
                            class="bg-[#F5F1DC] border-2 border-black text-gray-900 text-sm font-semibold block w-full p-3 focus:outline-none focus:ring-2 focus:ring-[#FF9013] @error('password') @enderror"
                            placeholder="••••••••" required>
                        @error('password')
                            <p class="mt-1 text-sm text-red-600 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- <!-- Remember Me Checkbox -->
                    <div class="flex items-center">
                        <input type="checkbox" 
                               name="remember" 
                               id="remember"
                               class="w-4 h-4 border-2 border-black bg-[#F5F1DC] focus:ring-2 focus:ring-[#FF9013]">
                        <label for="remember" class="ml-2 text-sm font-semibold text-gray-900">
                            Remember Me
                        </label>
                    </div> --}}

                    <!-- Login Button -->
                    <button type="submit"
                        class="w-full bg-[#FF9013] text-[#F5F1DC] border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,0.25)] hover:shadow-[6px_6px_0px_0px_rgba(0,0,0,0.25)] font-bold py-3 uppercase transition-all hover:translate-x-0.5 hover:translate-y-0.5">
                        PRESS HERE
                    </button>
                </form>

                <!-- Info Box -->
                {{-- <div class="mt-6 p-4 bg-[#F5F1DC] border-2 border-black shadow-[2px_2px_0px_0px_rgba(0,0,0,0.25)]">
                    <p class="text-xs font-semibold text-gray-700 text-center">
                        Default credentials:<br>
                        <span class="font-bold">admin@gmail.com</span> / <span class="font-bold">admin123</span>
                    </p>
                </div> --}}
            </div>
        </div>
    </div>
</x-layout>
