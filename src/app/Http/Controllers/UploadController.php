<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        $products =Product::all();
        return view('products', ['products' => $products]);
    }

    public function register(){
        return view('register');
    }

    public function create(Request $request){
        $form = $request->all();
        Product::create($form);
        return redirect('/');
    }

    public function edit(Request $request){
        $product =Product::find($request->id);
        return view('edit',['form' => $product]);
    }



    public function store(RegisterRequest $request)
    {
        $dir ='img';

        $request->file('image')->store('public', $dir);

        return redirect('/');
    }

    public function upload(RegisterRequest $request)
    {
        $dir = 'img';

        $file_name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/' . $dir, $file_name);


        $image = new User(Product);

        $image->file_name = $file_name;
        $image->file_path = 'storage/app/public/' . $dir . '/' . $file_name;
        $image->save();

        return redirect('/');
    }

}

