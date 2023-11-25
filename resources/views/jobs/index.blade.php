<x-layout>
    @foreach ($jobs as $job)
        <x-card class="mb-4">
            <div class="flex justify-between mb-4">
                <h2 class="text-lg font-medium">{{ $job->title }}</h2>
                <div class="text-slate-500">
                    ${{ number_format($job->salary) }}
                </div>
            </div>

            <div class=" flex justify-between text-slate-500 mb-4 text-sm items-center">
                {{-- Left --}}
                <div class="flex space-x-4">
                    <div>Company Name:</div>
                    <div>{{ $job->location }}</div>
                </div>

                {{-- Right --}}
                <div class="flex space-x-1 text-xs">
                    <x-tag>{{ Str::ucfirst($job->experience) }}</x-tag>
                    <x-tag>{{ $job->category }}</x-tag>
                </div>
            </div>

            </div>

            <div class="text-slate-500 mb-4 text-sm">
                {{-- to scape the html we use nl2br the e scape the htlm again --}}
                {!! nl2br(e($job->description)) !!}
            </div>

            <div>
                <x-link-button :href="route('jobs.show', $job)">
                    View Job
                </x-link-button>
            </div>
        </x-card>
    @endforeach
</x-layout>
