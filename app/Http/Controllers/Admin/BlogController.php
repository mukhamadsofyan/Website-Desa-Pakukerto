<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function BlogView()
    {
        $blogs = Blog::latest()->get();
        return view('Admin.blog.BlogView', compact('blogs'));
    }

    public function BlogForm()
    {
        return view('Admin.blog.BlogForm');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_blog' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori' => 'nullable|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $data = $request->only([
            'nama_blog',
            'deskripsi',
            'kategori',
        ]);

        $data['penulis'] = $request->input('penulis', 'Admin Desa');

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('blogs'), $imageName);
            $data['gambar'] = 'blogs/' . $imageName;
        }

        Blog::create($data);

        return redirect()->route('admin.blogs.view')->with('success', 'Blog berhasil ditambahkan!');
    }

    public function edit(Blog $blog)
    {
        $blog = Blog::findOrFail($blog->id);
        // dd($blog);
        return view('Admin.blog.EditView', compact('blog'));
    }
    
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'nama_blog' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', // Gambar tidak wajib saat update
        ]);

        $data = $request->only([
            'nama_blog',
            'deskripsi',
            'kategori',
        ]);

        $data['penulis'] = $request->input('penulis', 'Admin Desa');

        if ($request->hasFile('gambar')) {
            if ($blog->gambar && File::exists(public_path($blog->gambar))) {
                File::delete(public_path($blog->gambar));
            }

            $image = $request->file('gambar');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('blogs'), $imageName);
            $data['gambar'] = 'blogs/' . $imageName;
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.view')->with('success', 'Blog berhasil diperbarui!');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->gambar && File::exists(public_path($blog->gambar))) {
            File::delete(public_path($blog->gambar));
        }

        $blog->delete();

        return redirect()->route('admin.blogs.view')->with('success', 'Blog berhasil dihapus!');
    }
}
