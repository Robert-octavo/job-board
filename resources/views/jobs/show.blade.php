<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index'), $job->title => '#']" />

    <x-job-card :$job>
        <div class="text-slate-500 mb-4 text-sm">
            {{-- to scape the html we use nl2br the e scape the htlm again --}}
            {!! nl2br(e($job->description)) !!}
        </div>
    </x-job-card>

    <x-card class="mb-4">
        <h2 class="mb-4 text-lg font-medium">
            More {{ $job->employer->company_name }} Jobs
        </h2>

        <div class="text-sm text-slate-500">
            @foreach ($job->employer->jobs->except($job->id) as $otherJob)
                <div class="mb-4 flex justify-between">
                    <div>
                        <div class="text-slate-700">
                            <a href="{{ route('jobs.show', $otherJob) }}">
                                {{ $otherJob->title }}
                            </a>
                        </div>
                        <div class="text-sm">{{ $otherJob->created_at->diffForHumans() }}</div>
                    </div>
                    <div class="text-sm">${{ number_format($otherJob->salary) }}</div>
                </div>
            @endforeach
        </div>
    </x-card>

    <div>
        <x-link-button :href="route('jobs.index')">
            Back to Jobs
        </x-link-button>
    </div>
</x-layout>
