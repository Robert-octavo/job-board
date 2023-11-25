<x-layout>
    <x-job-card :$job />
    <div>
        <x-link-button :href="route('jobs.index')">
            Back to Jobs
        </x-link-button>
    </div>
</x-layout>
