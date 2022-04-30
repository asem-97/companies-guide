<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Company;


class CategoryController extends Controller
{
    //
    public function index(Request $request){
        //dd($request);
        // if($request->is('*/categories*'))
        // {
        //     $categories = Category::with('children')->whereNull('parent_id')->get()->dd();
        //     return view('categories.index',['categories'=>$categories]);

        // }
        if($request->is('*subcategories*'))
        {
            $subcategories=Category::with('children')->whereNotNull('parent_id')->get();//->dd();
            return view('subcategories.index',['subcategories'=>$subcategories]);
        }
            $categories = Category::with('children')->whereNull('parent_id')->get();//->dd();
            return view('categories.index',['categories'=>$categories]);
    }

    public function create(){


        $categories =Category::whereNotIn('id',Company::get('category_id'))->get();//->dd();
        $pCategories=$categories->whereNull('parent_id');//->dd();
        return view('categories.create',['categories'=>$pCategories]);
    }

    public function store(Request $request)
    {
        $inputs=$request->validate([
        'name'=>'required|min:2|max:255',
        'parent_id' => 'sometimes|nullable|numeric'

        ]);
        Category::create([
            'name'=>$inputs['name'] ,
            'parent_id' => $inputs['parent_id']
        ]);
        $request->session()->flash('category-created-message',"تم إضافة القسم بنجاح");
        return redirect()->route('categories.index');
    }
    public function edit(Category $category){
        $categories =Category::whereNotIn('id',Company::get('category_id'))->get();//->dd();
        $pCategories=$categories->whereNull('parent_id');//->dd();
        return view('categories.edit',['category'=>$category ,'categories'=>$pCategories]);
    }
    public function update(Category $category,Request $request){
        if($request->name){
            $category->name=$request->name;
        }
        if($request->parent_id){
            $category->parent_id=$request->parent_id;
        }
        $category->save();
        $request->session()->flash('category-updated-message','تم تعديل القسم بنجاح');
        return redirect()->route('categories.index');
    }
    public function destroy(Category $category,Request $request){
        if( $category->children)
        {
            //dd($category->children);
            foreach($category->children as $child)
            {
                $this->destroy($child, $request);
            }
        }
        // foreach ($category->companies as $company) {
        //     $company->update(['category_id' => NULL]);
        // }
        $category->delete();
        $request->session()->flash('category-deleted-message','تم حذف القسم بنجاح');
        return back();
    }



}
