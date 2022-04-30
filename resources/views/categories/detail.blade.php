@extends('layouts.base')
@section('content')

<div class="container-fluid">
     <div class="container">
          <div class="">
               <a href="{{ route('categories.createCompany',$category->id) }}"><button class="btn btn-success btn-block" >أضف شركة جديدة </button></a>
          </div>
     </div>
        <table id="customers">
          
               <tr>
                    <th>الشركة</th>
                    <th>تعديل</th>
                    <th>حذف</th>
               </tr>
               @foreach ($category->companies as $company)
                    <tr>
                         <td>{{$company->name}}</td>
                         <td class="text-center">
                              <a href="{{route('categories.edit',$company->id)}}"><button class="btn btn-primary">تعديل</button></a>
                         </td>
                         <td class="text-right">
                              <form method="post" action="{{route('categories.destroy',$company->id)}}" enctype="multipart/form-data">
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