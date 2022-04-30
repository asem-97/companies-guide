<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Company;

class CompanyController extends Controller
{
    //


    public function index(Request $request, Category $category)
    {
        //$cat=Category::find($category);//->dd();
        //dd($category);//->name);//->id);
        return view("companies.index", ['category' => $category]);
    }

    public function create(Request $request, Category $category)
    {
        return view('companies.create', ['category' => $category]);
    }

    public function store(Request $request, Category $category)
    {
        //dd($request);
        $inputs = $request->validate([
            'name' => 'required|max:255',
            'image' => 'sometimes|image',
            //'phone'=>'sometimes',
            //'email'=>'email',
            // 'email'=>'mimes:pdf',
            //'links'=>
            //'commercialName'=>,
            //'description'=>,
            //'bruchoure'=>,
            //'profile'=>,
            //'country'=>,
            //'city'=>,
        ]);
        //dd($request);
        $image = null;
        if ($request->image_link) {
            $image = $request->image_link;
        } else if (request('image')) {
            $image = time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('storage/images/companies'), $image);
        }



        $bruchoure = null;
        if ($request->bruchoure_link) {
            $bruchoure = $request->bruchoure_link;
        } else if (request('bruchoure')) {
            $bruchoure = time() . $request->bruchoure->getClientOriginalName();
            $request->bruchoure->move(public_path('storage/images/companies'), $bruchoure);
        }

        $profile = null;
        if ($request->profile_link) {
            $profile = $request->profile_link;
        } else if ($request->profile) {
            $profile = time() . $request->profile->getClientOriginalName();
            $request->profile->move(public_path('storage/profiles'), $profile);
        }



        //dd($request);
        Company::create([
            'name' => $request->name,
            'image' => $image,
            'bruchoure' => $bruchoure,
            'profile' => $profile,
            'commercialName' => $request->commercialName,
            'description' => $request->description,
            'country' => $request->country,
            'city' => $request->city,
            'category_id' => $category->id,
            'phone' => $request->phone,
            "email" => $request->email,
            'link' => $request->link,


        ]);
        $request->session()->flash('company-created-message', "تم إضافة الشركة بنجاح");
        //return back();
        return redirect()->route('companies.index', $category->id);
        //return view('companies.create' ,['category'=>$category]);
    }



    public function edit(Company $company)
    {

        return view('companies.edit', ['company' => $company]);
    }

    public function show(Company $company)
    {
        return view('companies.companyDetail', ['company' => $company]);
    }


    public function download(Company $company, Request $request)
    {
        if (strpos($company->profile, 'https://') !== FALSE || strpos($company->profile, 'http://') !== FALSE) {
            return redirect()->away($company->profile);
        }
        return response()->download($company->profile);


        return redirect()->route('show', ['company' => $company]);
    }



    public function update(Company $company, Request $request)
    {

        if ($request->name) {
            $request->validate(['name' => 'max:255']);
            $company->name = $request->name;
        }
        if ($request->commercialName) {
            $request->validate(['commercialName' => 'max:255']);
            $company->commercialName = $request->commercialName;
        }
        if ($request->description) {
            //$request->validate(['description'=>'max:255']);
            $company->description = $request->description;
        }
        if ($request->country) {
            //$request->validate(['country'=>'max:255']);
            $company->country = $request->country;
        }
        if ($request->city) {
            //$request->validate(['city'=>'max:255']);
            $company->city = $request->city;
        }
        if ($request->phone) {
            //$request->validate(['name'=>'max:255']);
            $company->phone = $request->phone;
        }
        if ($request->email) {
            //$request->validate(['name'=>'max:255']);
            $company->email = $request->email;
        }
        if ($request->link) {
            //$request->validate(['name'=>'max:255']);
            $company->link = $request->link;
        }
        if ($request->image_link) {
            $company->image = $request->image_link;
            //dd($input);
        } else if ($file = $request->image) {
            $request->validate(['image' => 'image']);
            $input = time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('storage/images/companies'), $input);
            $company->image = $input;
        }
        if ($request->bruchoure_link) {
            $company->bruchoure = $request->bruchoure_link;
            //dd($input);
        } else if ($file = $request->image) {
            $request->validate(['bruchoure' => 'image']);
            $input = time() . $request->bruchoure->getClientOriginalName();
            $request->bruchoure->move(public_path('storage/images/companies'), $input);
            $company->bruchoure = $input;
        }

        if ($request->profile_link) {
            $company->profile = $request->profile_link;
        } else if ($request->profile) {
            $request->validate(['profile' => 'mimes:pdf']);
            $input = time() . $request->profile->getClientOriginalName();
            $request->profile->move(public_path('storage/profiles'), $input);
            $company->profile = $input;
            //$book->file=request('file')->store('booksfiles');
        }


        if ($request->category_id) {
            $company->category_id = $request->category_id;
            //dd($input);
        }





        $company->save();
        $request->session()->flash('company-updated-message', 'تم تعديل الشركة بنجاح');
        return redirect()->route('companies.index', $company->category->id);
    }

    public function destroy(Company $company, Request $request)
    {
        //dd($company);
        $company->delete();
        //dd($company);
        $request->session()->flash('company-deleted-message', ' تم حذف الشركة بنجاح');
        return back();
    }

    public function first(Request $request)
    {
        //dd($company);
        $companies = Company::all();
        // $categoriesSearch=null;
        if ($request->search) {
            //dd($request);
            $companies = Company::query()
                ->where('name', 'LIKE', "{$request->search}%") //->dd()
                // ->orWhere('body', 'LIKE', "%{$search}%")
                ->get();
        }
        //dd($company);
        //$request->session()->flash('company-deleted-message',' تم حذف الشركة بنجاح');
        return view('index', ['companies' => $companies]);
    }
}
