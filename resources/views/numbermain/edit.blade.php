<!-- resources/views/numbermain/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-700">Chỉnh sửa số chủ đạo</h1>
    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
            <strong class="font-bold">Có lỗi xảy ra:</strong>
            <ul class="mt-2 list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('numbermain.update', $number->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="code" class="block text-sm font-medium text-gray-700">Mã số</label>
            <input type="number" name="code" id="code" value="{{ $number->code }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Tiêu đề</label>
            <input type="text" name="title" id="title" value="{{ $number->title }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <!-- Content Field with CKEditor -->
        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Nội dung</label>
            <textarea name="content" id="content" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">{{ $number->content }}</textarea>
        </div>

        <!-- Content Detail Field with CKEditor -->
        <div class="mb-4">
            <label for="content_detail" class="block text-sm font-medium text-gray-700">Nội dung chi tiết</label>
            <textarea name="content_detail" id="content_detail" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">{{ $number->content_detail }}</textarea>
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Cập nhật
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
