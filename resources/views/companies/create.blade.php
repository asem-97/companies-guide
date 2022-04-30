@extends('layouts.base')
@section('content')
<div class="container-fluid">
@if (Session::has('company-created-message'))
<div class="alert alert-primary">

  {{Session::get('company-created-message')}}
</div>
@endif

@if (Session::has('company-updated-message'))
<div class="alert alert-success">

{{Session::get('company-updated-message')}}
</div>
@endif
@if (Session::has('company-deleted-message'))
<div class="alert alert-danger">

{{Session::get('company-deleted-message')}}
</div>
@endif
<div>
     <h3 style="font-size: 26px; margin-top:-6px;margin-bottom:7px; background-color:#e2e2e2; padding-left:5px; border-radius:4px; direction:rtl;">
          @php
               $copyCategory=$category;
               $string="";
               while ($copyCategory) {
                    $string = $copyCategory->name ."/". $string;
                    $copyCategory=$copyCategory->parent;
               }

               echo $string;
          @endphp
     </h3>
</div>
<h1 class="">إضافة شركة</h1>

     <form method="post" action="{{route('companies.store',$category->id)}}" enctype="multipart/form-data" >
          @csrf



          <div class="form-group">
               <label for="name">اسم الشركة</label>
               <input type="text" name="name" class="form-control" id="" aria-description="" placeholder="الاسم">
               @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>




          <div class="form-group">
               <label for="commercialName"> اسم الشركة التجاري</label>
               <input type="text" name="commercialName" class="form-control" id="" aria-description="" placeholder="الاسم التجاري">
               @error('commercialName')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>


          {{-- <div class="form-group">

               <label for="subcategory"> القسم الفرعي </label>
               <input type="text" name="subcategory" class="form-control" id="" aria-description="" placeholder="">
               @error('subcategory')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>
          <div class="form-group">
               <label for="category"> القسم الذي تتبع له الشركة </label>
               <input type="text" name="category" class="form-control" id="" aria-description="" placeholder="">
               @error('category')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div> --}}





          <div class="form-group">
               <label for="description">وصف الشركة</label>
               {{-- <input type="text" name="name" class="form-control" id="" aria-description="" placeholder="الاسم"> --}}
               <textarea class="form-control" name="description" id=""  rows="10">{{ old('description') }}</textarea>
               @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>



 <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#1">رابط لصورة شعار الشركة</a></li>
    <li><a data-toggle="pill" href="#2">صورة شعار الشركة</a></li>
  </ul>
  <div class="tab-content">
    <div id="1" class="form-group tab-pane fade in active">
               <input type="link" name="image_link" class="form-control"  placeholder="رابط الصور">
               @error('image_link')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
    </div>
    <div id="2" class="form-group tab-pane fade">
               <input type="file" name="image"  placeholder="">
               @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
    </div>
  </div>


<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#3">رابط لبروشور الشركة</a></li>
    <li><a data-toggle="pill" href="#4">بروشور الشركة</a></li>
  </ul>
  <div class="tab-content">
    <div id="3" class="form-group tab-pane fade in active">
                <input type="link" name="bruchoure_link" class="form-control"  placeholder="رابط الصور">
               @error('bruchoure_link')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
    </div>
    <div id="4" class="form-group tab-pane fade">
               <input type="file" name="bruchoure"  placeholder="">
               @error('bruchoure')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
    </div>
  </div>




<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#5">رابط لملف تعريف الشركة</a></li>
    <li><a data-toggle="pill" href="#6">تحميل ملف تعريف الشركة</a></li>
  </ul>
  <div class="tab-content">
    <div id="5" class="form-group tab-pane fade in active">
               <input type="link" name="profile_link" class="form-control" value="{{ old('profile_link') }}" placeholder="">
               @error('profile_link')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
    </div>
    <div id="6" class="form-group tab-pane fade">
              <input type="file" name="profile" class="form-control-file" value="{{ old('profile') }}"  placeholder="">
               @error('profile')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
    </div>
  </div>



          <div class="form-group">
               <label for="country">   البلد </label>
               <input type="text" name="country" class="form-control" value="{{ old('country') }}"  placeholder="">
               @error('country')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
           </div>
           <div class="form-group">
               <label for="city">  المدينة  </label>
               <input type="text" name="city" class="form-control" value="{{ old('city') }}"  placeholder="">
               @error('city')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>

          {{-- <div class="form-group">
               <label for="city">  المدينة  </label>
               <input type="text" name="city" class="form-control-file" value="{{ old('city') }}"  placeholder="">
               @error('city')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div> --}}







          <div id="InputLinks" class="form-group">
               <label for="link">روابط الشركة </label>
               <input type="url" class="form-control" name="link[]" placeholder="أدخل الرابط"><br>

          </div>
          <a id="add-link" class="btn btn-info addBtn" style="display: block;width: 30%; direction:rtl;">أضف رابط جديد</a>





          <div id="InputPhone" class="form-group">
               <label for="phones">أرقام الشركة </label>
               <input type="phone" class="form-control" name="phone[]" placeholder="أدخل الرقم"><br>

          </div>
          <a id="add-phone" class="btn btn-info addBtn" style="display: block;width: 30%; direction:rtl;">أضف رقم جديد</a>





          <div id="InputEmails" class="form-group">
               <label for="Emails">ايميلات الشركة</label>
                <input type="email" class="form-control" name="email[]" placeholder="أدخل الإيميل"><br>
          </div>

          <a id="add-email" class="btn btn-info addBtn" style="width: 30%;direction:rtl;">أضف إيميل جديد</a>




          <button type="submit" class="btn btn-primary btn-block" style="margin-top: 8px;margin-bottom: 8px;">تأكيد</button>
     </form>
</div>
@endsection
