@extends('layouts.base')

@section('content')
<h1 class="form-control">تعديل شركة</h1>
<div class="container-fluid" >
     <form method="post" action="{{route('companies.update',$company->id)}}" enctype="multipart/form-data">
          @method("PATCH")
          @csrf
          <div class="form-group">
               <label for="name">اسم الشركة</label>
               <input type="text" name="name" class="form-control" id="" aria-description="" placeholder="" value="{{$company->name}}">
               @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>



          <div class="form-group">
               <label for="commercialName"> اسم الشركة التجاري</label>
               <input type="text" name="commercialName" class="form-control" id="" aria-description="" placeholder="" value="{{$company->commercialName}} ">
               @error('commercialName')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>


          <div class="form-group">
               <label for="description">وصف الشركة</label>
               {{-- <input type="text" name="name" class="form-control" id="" aria-description="" placeholder="الاسم"> --}}
               <textarea name="description" class="form-control" id=""  rows="10">{{ $company->description}}</textarea>
               @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>

          <div class="form-group">
               <select class="form-control" name="parent_id">
                    {{-- <option value="{{$company->category->id}}">{{$company->category->name}}</option> --}}
                    @foreach (App\Models\Category::whereNotIn('id',App\Models\Category::whereNotNull('parent_id')->get('parent_id'))->get() as $category)
                         <option value="{{ $category->id }}" @if($category->id ==$company->category->id ) selected @endif>{{ $category->name }}</option>
                    @endforeach
               </select>
          </div>


          <div class="form-group">
               <label for="image_link">رابط لصورة شعار الشركة </label>
               <input type="link" name="image_link" class="form-control"  placeholder="رابط الصورة" >
               @error('image_link')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>
          <div class="form-group">
               <label for="image">صورة شعار الشركة</label>
               <input type="file" name="image"  placeholder="">

                    <img src="{{$company->image}}" alt="">

               @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>


          <div class="form-group">
               <label for="bruchoure_link">رابط  لبروشور الشركة </label>
               <input type="link" name="bruchoure_link" class="form-control"  placeholder="">
               @error('bruchoure_link')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>
          <div class="form-group">
               <label for="bruchoure"> بروشور الشركة</label>
               <input type="file" name="bruchoure"  placeholder="{{$company->bruchoure}}">

                    <img src="{{$company->bruchoure}}" alt="">

               @error('bruchoure')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>



          <div class="form-group">
               <label for="profile_link">رابط لملف تعريف الشركة </label>
               <input type="link" name="profile_link" class="form-control" value="" placeholder="">
               @error('profile_link')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>
          <div class="form-group">
               <label for="profile">تحميل ملف تعريف الشركة</label>
               <input type="file" name="profile" value=""  placeholder="">
               @error('profile')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>


          <div class="form-group">
               <label for="country">   البلد </label>
               <input type="text" name="country" class="form-control" value="{{$company->country}}"  placeholder="">
               @error('country')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror

               <label for="city">  المدينة  </label>
               <input type="text" name="city" class="form-control" value="{{ $company->city }}"  placeholder="">
               @error('city')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>


          <div id="InputLinks" class="form-group">
               <label for="link">روابط الشركة </label>
               @foreach ($company->link as $item)
                    <input type="url" class="form-control" name="link[]" value={{$item}}><br>
               @endforeach
          </div>
          <a id="add-link" class="btn btn-info addBtn" style="display: block;width: 30%; direction:rtl;">أضف رابط جديد</a>

          <div id="InputPhone" class="form-group">
               <label for="phones">أرقام الشركة </label>
               @foreach ($company->phone as $item)
                    <input type="phone" class="form-control" name="phone[]" value={{$item}} ><br>
               @endforeach
          </div>
          <a id="add-phone" class="btn btn-info addBtn" style="display: block;width: 30%; direction:rtl;">أضف رقم جديد</a>

          <div id="InputEmails" class="form-group">
               <label for="Emails">ايميلات الشركة</label>
               @foreach ($company->email as $item)
                    <input type="email" class="form-control" name="email[]"  value={{$item}} ><br>
               @endforeach
          </div>
        <a id="add-email" class="btn btn-info addBtn" style="width: 30%;direction:rtl;">أضف إيميل جديد</a>




          <button type="submit" class="btn btn-primary btn-block" style="margin-top: 8px;margin-bottom: 8px;">تأكيد</button>
     </form>


</div>
@endsection
