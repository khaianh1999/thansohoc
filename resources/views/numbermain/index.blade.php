<!-- resources/views/numbermain/index.blade.php -->

@extends('layouts.app')

@section('content')
<!-- Hiển thị thông báo thành công -->
@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
        {{ session('success') }}
    </div>
@endif
<!-- Hiển thị thông báo thất bại -->
@if (session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
        {{ session('error') }}
    </div>
@endif


<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-6 text-center">Danh sách các số chủ đạo</h1>
    <div class="flex justify-end mb-2">
        <a href="{{ route('numbermain.create') }}" class="inline-block bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Thêm mới <i class="fa-solid fa-plus"></i>
        </a>
    </div>
    <div></div>
    <table class="min-w-full bg-white border border-gray-300">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-2 px-4 border-b">Code</th>
                <th class="py-2 px-4 border-b">Title</th>
                <th class="py-2 px-4 border-b">Content</th>
                <th class="py-2 px-4 border-b">Content Detail</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($numbers as $number)
            <tr class="hover:bg-gray-100">
                <td class="py-2 px-4 border-b">{{ $number->code }}</td>
                <td class="py-2 px-4 border-b">{{ $number->title }}</td>
                <td class="py-2 px-4 border-b">{!! Str::limit($number->content, 60) !!}</td>
                <td class="py-2 px-4 border-b">{!! Str::limit($number->content_detail, 60) !!}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('numbermain.edit', $number->id) }}" class="text-indigo-600 hover:text-indigo-900"><i class="fa-regular fa-pen-to-square"></i></a>
                    <form action="{{ route('numbermain.destroy', $number->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900 ml-4" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
