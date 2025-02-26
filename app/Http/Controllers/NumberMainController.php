<?php

namespace App\Http\Controllers;

use App\Models\NumberMain;
use Illuminate\Http\Request;

class NumberMainController extends Controller
{
    // Hiển thị danh sách các bài viết (Read)
    public function index()
    {
        $numbers = NumberMain::all();
        return view('numbermain.index', compact('numbers'));
    }

    // Hiển thị form tạo bài viết mới (Create)
    public function create()
    {
        return view('numbermain.create');
    }

    // Lưu bài viết mới vào cơ sở dữ liệu (Create)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|max:2',
            'title' => 'required|max:255',
            'content' => 'required',
            'content_detail' => 'required',
        ]);

        NumberMain::create($validated);

        return redirect()->route('numbermain.index');
    }

    // Hiển thị một bài viết cụ thể (Read)
    public function show(NumberMain $number)
    {
        return view('numbermain.show', compact('number'));
    }

    public function edit($id)
    {
        $number = NumberMain::findOrFail($id);
        return view('numbermain.edit', compact('number'));
    }
    

    public function update(Request $request, $id)
    {
        $number = NumberMain::findOrFail($id);
        $validated = $request->validate([
            'code' => 'required|max:2',
            'title' => 'required|max:255',
            'content' => 'required',
            'content_detail' => 'required',
        ]);

        $number->update($validated);

        return redirect()->route('numbermain.index')->with('success', 'Cập nhật bản ghi thành công');
    }

    // Xóa bài viết (Delete)
    public function destroy($id)
    {
        try {
            $number = NumberMain::findOrFail($id);
            $number->delete();
    
            return redirect()->route('numbermain.index')->with('success', 'Bản ghi đã được xoá thành công.');
        } catch (\Exception $e) {
            return redirect()->route('numbermain.index')->with('error', 'Đã xảy ra lỗi khi xoá bản ghi.');
        }
    }
    

}

