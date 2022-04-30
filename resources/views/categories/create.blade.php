@extends('layouts.base')
@section('content')
<div class="container-fluid">
<h1 class="">إضافة قسم</h1>
{{-- <div class="container-fluid" >

     <form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">

          @csrf

          <div class="form-group">

               <label for="name">اسم القسم</label>
               <input type="text" name="name" class="form-control" id="" aria-description="" placeholder="الاسم">
               @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>
         <button type="submit" class="btn btn-primary">Submit</button>





     </form>

</div> --}}


<div class="card-body">
     <form action="{{ route('categories.store') }}" method="POST">
       @csrf

       {{-- <div class="form-group">
         <select class="form-control" name="parent_id">
           <option value="">Select Parent Category</option>

           @foreach (App\Models\Category::whereNotIn('id',App\Models\Company::get('category_id'))->get() as $category)
             <option value="{{ $category->id }}">{{ $category->name }}</option>
           @endforeach
         </select>
       </div> --}}



      <div class="form-group">
           <label for="select"> اختر قسم أب :</label>
        <select class="form-control" name="parent_id">
          <option value="">اختر قسم أب</option>

          @foreach ($categories as $category)
          <optgroup label="القسم {{$category->name}}  " >
            @include('child-category-option', [ 'category' => $category])
          </optgroup>
          @endforeach
        </select>
      </div>

 <div class="form-group">
        <label for="select"> أسم القسم :</label>
         <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="اسم القسم" required>
       </div>
       @error('name')
       <div class="alert alert-danger">{{ $message }}</div>
  @enderror

       <div class="form-group">
         <button type="submit" class="btn btn-primary btn-block">إضافة</button>
       </div>
     </form>
   </div>

</div>
@endsection
