<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class WebAdminController extends Controller
{

    public function __construct() {
        $this->admin = request()->segment(1);
    }

    public function index() {
        return view($this->admin.'.dashboard.index');
    }

    public function login() {
        return view($this->admin.'.auth.login');
    }
    public function loginStore(Request $request) {
        $username = $request->username;
        $password = $request->password;

        if ($username == 'admin' && $password == 'admin') {
            session()->put('webadmin', $username);
            return redirect($this->admin.'/dashboard');
        }else{
            return redirect($this->admin.'/login');
        }
    }
    public function logout() {
        return redirect('/');
    }

    public function kategori(){
        $data = Categories::orderBy('id', 'DESC')->get();
        return view($this->admin.'.kategori.index',compact('data'));
    }
    public function kategoriCreate(){
        return view($this->admin.'.kategori.show');
    }
    public function kategoriShow($id){
        $data = Categories::where('id',$id)->first();
        return view($this->admin.'.kategori.show',compact('data'));
    }

    public function  kategoriStore(Request $request){
        $name = $request->name;
        $slug = Str::slug($name);
        $dataStore = [
            'name' => $name,
            'slug' => $slug,
        ];
        Categories::updateOrCreate(
            ['id' => $request->id ?? NULL],
            $dataStore
        );

        return redirect($this->admin.'/kategori');

    }
    public function kategoriDestroy($id){
        $data = Categories::where('id',$id)->first()->delete();
        return redirect()->back();
    }






    public function artikel(){
        $data = Articles::orderBy('id', 'DESC')->get();
        return view($this->admin.'.artikel.index',compact('data'));
    }
    public function artikelCreate(){
        return view($this->admin.'.artikel.show');
    }
    public function artikelShow($id){
        $data = Articles::where('id',$id)->first();
        return view($this->admin.'.artikel.show',compact('data'));
    }

    public function  artikelStore(Request $request){
        date_default_timezone_set("Asia/Jakarta");

        $uploadfile = $request->gambar_old;
        if($request->hasFile('image'))
        {
            $folder = 'images';
            $file = $request->file('image');
            $originalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $newName = 'IMG-' . DATE("Ymd") . '-' . time();
            $newNameWithExtension = $newName . '.' . $extension;

            $upload = $file->move(base_path('/public/uploads/' . $folder), $newNameWithExtension);

            $uploadfile = $folder . '/' . $newNameWithExtension;
        }

        $category_id = $request->category_id;
        $title = $request->title;
        $content = $request->content;
        $author = $request->author;
        $is_published = $request->is_published;
        $slug = Str::slug($title);
        $dataStore = [
            'category_id' => $category_id,
            'title' => $title,
            'slug' => $slug,
            'content' => $content,
            'author' => $author,
            'is_published' => $is_published,
            'image' => $uploadfile,
            'published_at' => DATE("Y-m-d H:i:s"),
        ];
        Articles::updateOrCreate(
            ['id' => $request->id ?? NULL],
            $dataStore
        );

        return redirect($this->admin.'/artikel');

    }
    public function artikelDestroy($id){
        $data = Articles::where('id',$id)->first()->delete();
        return redirect()->back();
    }

}
