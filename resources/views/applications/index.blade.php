@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">My Job Applications</h2>

    <a href="{{ route('applications.create') }}" class="bg-green-600 text-black px-4 py-2 rounded hover:bg-green-700 mb-4 inline-block">
        + Add New
    </a>

    @if($applications->isEmpty())
        <p class="text-gray-600">No job applications yet.</p>
    @else
        <table class="w-full table-auto border-collapse border border-gray-300 mt-4">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2">Company</th>
                    <th class="border px-4 py-2">Job Title</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Applied Date</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($applications as $application)
                    <tr>
                        <td class="border px-4 py-2">{{ $application->company }}</td>
                        <td class="border px-4 py-2">{{ $application->job_title }}</td>
                        <td class="border px-4 py-2">{{ $application->status }}</td>
                        <td class="border px-4 py-2">{{ $application->applied_date }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('applications.show', $application->id) }}" class="text-blue-600 hover:underline">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
