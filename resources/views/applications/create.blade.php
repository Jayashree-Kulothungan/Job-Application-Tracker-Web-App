@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">Add Job Application</h2>

    <form method="POST" action="{{ route('applications.store') }}">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold">Company</label>
            <input type="text" name="company" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Job Title</label>
            <input type="text" name="job_title" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Status</label>
            <select name="status" class="w-full border rounded p-2">
                <option value="Applied">Applied</option>
                <option value="Interview">Interview</option>
                <option value="Offer">Offer</option>
                <option value="Rejected">Rejected</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Applied Date</label>
            <input type="date" name="applied_date" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Notes</label>
            <textarea name="notes" rows="4" class="w-full border rounded p-2"></textarea>
        </div>

        <div class="mt-4">
            <button type="submit" class="text-black px-4 py-2 border rounded">
                Save
            </button>
        </div>
    </form>
</div>
@endsection
