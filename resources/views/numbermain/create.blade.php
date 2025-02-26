<!-- resources/views/numbermain/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-700">Tạo mới số chủ đạo</h1>
    <form action="{{ route('numbermain.store') }}" method="POST">
        @csrf
        
        <!-- Date of Birth -->
        <!-- <div class="mb-4">
            <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
            <input type="date" name="dob" id="dob" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div> -->
        <!-- Number Field -->
        <div class="mb-4">
            <label for="code" class="block text-sm font-medium text-gray-700">Mã số</label>
            <input type="number" name="code" id="code" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Tiêu đề</label>
            <input type="text" name="title" id="title" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <!-- Content Field with CKEditor -->
        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Nội dung</label>
            <textarea name="content" id="content" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm"></textarea>
        </div>

        <!-- Content Detail Field with CKEditor -->
        <div class="mb-4">
            <label for="content_detail" class="block text-sm font-medium text-gray-700">Nội dung chi tiết</label>
            <textarea name="content_detail" id="content_detail" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Submit
            </button>
        </div>
    </form>
</div>

<!-- Initialize CKEditor -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        CKEDITOR.replace('content');
        CKEDITOR.replace('content_detail');
    });
</script>

@endsection
