<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index'), $job->title => '#']" />

    <x-job-card :$job>
        <div class="text-slate-500 mb-4 text-sm">
            {{-- to scape the html we use nl2br the e scape the htlm again --}}
            {!! nl2br(e($job->description)) !!}
        </div>
    </x-job-card>
    <div>
        <x-link-button :href="route('jobs.index')">
            Back to Jobs
        </x-link-button>
    </div>
</x-layout>
