<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Requests\reqBlog;

use App\Http\Controllers\Controller;
use App\Model\Blog;
use Illuminate\Validation\Rule;

use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $blogs = Blog::select(['id','judul_blog','image_blog','author','deskripsi_blog']);
                return DataTables::of($blogs)
                ->addColumn('action', function($blogs){
                    return view('backend.blog._action', [
                        'model'         => $blogs,
                        'form_url'    => route('blog.destroy', $blogs->id),
                        'edit_url'      => route('blog.edit', $blogs->id)]);
                })
                ->addColumn('deskripsi_blog', function($blogs){
                    return strip_tags($blogs->deskripsi_blog);
                })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data'=>'judul_blog', 'name'=>'judul_blog', 'title'=>'Judul Blog'])
            ->addColumn(['data'=>'image_blog', 'name'=>'image_blog', 'title'=>'Gambar Blog'])
            ->addColumn(['data'=>'author', 'name'=>'author', 'title'=>'Author'])
            ->addColumn(['data'=>'deskripsi_blog', 'name'=>'deskripsi_blog', 'title'=>'Deskripsi Blog'])
            ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'Aksi', 'orderable'=>false, 'searchable'=>false]);
        
        return view('backend.blog.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(reqBlog $request)
    {
        $new_blog                 = new \App\Model\Blog;
        $new_blog->judul_blog    = $request->get('judul_blog');
        
        $image_blog = $request->file('image_blog');

        if ($image_blog) {
            $image_path = $image_blog->store('image-blog', 'public');

            $new_blog->image_blog = $image_path;
        }

        $new_blog->author          = $request->get('author');
        $new_blog->created_by          = $request->get('created_by');
        $new_blog->deskripsi_blog    = $request->get('deskripsi_blog');
        $new_blog->save();

        if ($request->get('save_action') == 'PUBLISH'){
            return redirect()->route('blog.create')->with('status', 'Blog Berhasil disimpan dan dipublikasikan');
        } else  {
            return redirect()->route('blog.create')->with('status', 'Blog disimpan sebagai Draft');
        }  

        return redirect()->route('blog.index')->with('status', 'Blog Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('backend.blog.edit', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        \Validator::make($request->all(), [
            "judul_blog"            => "required|min:3|max:100",
            "author"                => "required",
            "created_by"                => "required",
            "deskripsi_blog"           => "required|min:20|max:1000"
        ])->validate();

        $update_blog = Blog::findOrFail($id);

        $update_blog->judul_blog = $request->get('judul_blog');
        $update_blog->author = $request->get('author');
        $update_blog->created_by = $request->get('created_by');
        $update_blog->deskripsi_blog = $request->get('deskripsi_blog');

        if($request->file('image_blog')){
            if ($update_blog->image_blog && file_exists(storage_path('app/public/' . $update_blog->image_blog))) {
                \Storage::delete('public/' . $update_blog->image_blog);
            }
            $file = $request->file('image_blog')->store('image-blog', 'public');
            $update_blog->image_blog = $file;
        }

        $update_blog->save();

        return redirect()->route('blog.edit', $update_blog->id)->with('status', 'Data Blog berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog   = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog.index')->with('status', 'Data Blog berhasil dihapus');
    }
}
