<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index'), $job->title => '#']" />

    <x-job-card :$job />
    <div>
        <x-link-button :href="route('jobs.index')">
            Back to Jobs
        </x-link-button>
    </div>
</x-layout>
