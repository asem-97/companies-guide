@extends('layouts.base')
@section('content')

<div class="container-fluid">
  
          <div class="">
               <a href="{{route('subcategories.create')}}"><button class="btn btn-info btn-block" >أضف قسم جديد </button></a>
          </div>
     
        <table id="customers">
               <tr>
                    <th>الأقسام الفرعية</th>
                    <th>الأقسام الأساسية</th>
                    <th>تعديل</th>
                    <th>حذف</th>
               </tr>
               @foreach ($subcategories as $subcategory)
                    <tr>
                         <td>{{$subcategory->name}}</td>
                         <td>{{$subcategory->category->name}}</td>
                         <td class="text-center">
                              <a href="{{route('categories.edit',$subcategory->id)}}"><button class="btn btn-primary">تعديل</button></a>
                         </td>
                         <td class="text-right">
                              <form method="post" action="{{route('subcategories.destroy',$subcategory->id)}}" enctype="multipart/form-data">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-danger">حذف</button>
                              </form>
                         </td>
                    </tr>
               @endforeach
          </table>
    
</div>

@endsection
