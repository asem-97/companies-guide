@extends('layouts.base')

@section('content')
<div class="container-fluid">
<h1 class="">تعديل قسم</h1>


     <form method="post" action="{{route('categories.update',$category)}}" enctype="multipart/form-data">

          @method("PATCH")
          @csrf


          <div class="form-group">

               <label for="name">اسم القسم</label>
               <input type="text" name="name" class="form-control" id="" aria-description="" placeholder="">
               @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>

          <div class="form-group">
               <label for="name">اختر قسم أب:</label>
               <select class="form-control" name="parent_id">
                 <option value="">اختر قسم أب</option>

                 @foreach ($categories as $pcategory)
                 <optgroup label="القسم {{$pcategory->name}}  "  >
                   @include('child-category-option', [ 'category' => $pcategory])
                 </optgroup>
                 @endforeach
               </select>
             </div>
          <button type="submit" class="btn btn-primary">تأكيد</button>
     </form>


</div>


@endsection


