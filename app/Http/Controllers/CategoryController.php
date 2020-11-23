<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Validator;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::orderBy('serial_num','ASC')->paginate(15);
        $max_serial=Category::max('serial_num');
        return view('backend.setting.category.index',compact('categories','max_serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'category'=> 'required|unique:categories,category',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('category_img')){
            $phpo=$request->file('category_img');
            //$fileName=\MyHelper::slugify($phpo->getClientOriginalName());
            //$fileType=$phpo->getClientOriginalExtension();
             $input['category_img']=\MyHelper::photoUpload($request->file('category_img'),'images/category-img/');
        }

        $input['url']=\MyHelper::slugify($request->category);
        try{
            Category::create($input);

            $bug=0;
        }catch(Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Successfully Inserted');
        }else{
            return redirect()->back()->with('error',$bug);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
        'category'=> "required|unique:categories,category,$id",
        //'url'=> "required|unique:divisions,url,$id",
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category=Category::findOrFail($id);
        $input['url']=\MyHelper::slugify($request->category);

        if ($request->hasFile('category_img')){
            $phpo=$request->file('category_img');
            //$fileName=\MyHelper::slugify($phpo->getClientOriginalName());
            //$fileType=$phpo->getClientOriginalExtension();
            $width=50;
            $height=50;
            $input['category_img']=\MyHelper::photoUpload($request->file('category_img'),'images/category-img/',$width,$height);

            if (file_exists($category->category_img)){
                unlink($category->category_img);
            }
        }

        try{
            $category->update($input);

            $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Successfully Update');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try{
            $category->delete();
            $bug=0;
            $error=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
            $error=$e->errorInfo[2];
        }
        if($bug==0){
            return redirect()->back()->with('success','Successfully Deleted!');
        }elseif($bug==1451){
            return redirect()->back()->with('error','This data is already used another table ! ');

        }
        elseif($bug>0){
            return redirect()->back()->with('error','Some thing error found !');

        }
    }
}
