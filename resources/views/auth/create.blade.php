<x-layout>
    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">
        Sign in to your account
    </h1>
    <x-card class="py-8 px-16">
        <form action="{{ route('auth.store') }}" method="POST">
            @csrf
            <div class="mb-8">
                <label for="email" class="mb-2 block text-sm font-medium text-slate-900">E-mail</label>
                <x-text-input name='email' />
            </div>
            <div class="mb-8">
                <label for="password" class="mb-2 block text-sm font-medium text-slate-900">Password</label>
                <x-text-input name='password' type='password' />
            </div>

            <div class="mb-8 flex justify-between text-sm font-medium">
                <div>
                    <label for="remember" class="inline-flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="rounded border-gray-300 mr-2">
                        <span class="text-slate-900">Remember me</span>
                    </label>
                </div>
                <div>
                    <a href="#" class="text-indigo-600 hover:underline">
                        Forgot your password?
                    </a>
                </div>
            </div>

            <x-button class="w-full bg-green-300">Login</x-button>
        </form>
    </x-card>
</x-layout>
