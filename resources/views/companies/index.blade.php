@extends('layouts.base')
@section('content')
<div class="container-fluid">
@if (Session::has('company-created-message'))
     <div class="alert alert-info">
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
     <h3 style="font-size: 35px; margin-top:-6px;margin-bottom:7px; background-color:#e2e2e2; padding-left:5px; border-radius:4px; direction:rtl;">
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

          <div class="">
               <a href="{{ route('companies.create',$category->id) }}"><button class="btn btn-primary btn-block" >أضف شركة جديدة </button></a>
          </div>

     <table id="customers">
               <tr>
                    <th>الشركة</th>
                    {{-- <th>صورة الشركة</th> --}}
                    <th>روابط الشركة</th>
                    <th>الايميلات</th>
                    <th>الهواتف</th>
                    <th>البلد</th>
                    <th>عرض</th>
                    <th>تعديل</th>

                    <th>حذف</th>
               </tr>
               @foreach ($category->companies as $company)
                    <tr>
                         <td>{{$company->name}}</td>
                         {{-- <td><img src="{{$company->image}}" alt=""   width="50px" height="50px"></td> --}}

                         {{-- <td><a href="{{$company->link}}">اضغط</a></td> --}}

                         <td>
                              <select name=""id="" class="form-control">
                                   @foreach ( ($company->link) as $item)
                                        @if ($item)
                                             <option value="">{{$item}}</option>
                                        @endif
                                   @endforeach
                              </select>
                         </td>
                         <td>
                              <select name=""id="" class="form-control">
                                   @foreach ( ($company->email) as $item)
                                        @if ($item)
                                             <option value="">{{$item}}</option>
                                        @endif
                                   @endforeach
                              </select>
                         </td>
                         <td>
                              <select name=""id="" class="form-control">
                                   @foreach ( ($company->phone) as $item)
                                        @if ($item)
                                             <option value="">{{$item}}</option>
                                        @endif
                                   @endforeach
                              </select>
                         </td>
                         <td>{{$company->country}} </td>
                         <td class="text-center">
                              <a href="{{route('companies.show',$company->id)}}"><button class="btn btn-success">عرض</button></a>
                         </td>
                         <td class="text-center">
                              <a href="{{route('companies.edit',$company->id)}}"><button class="btn btn-primary">تعديل</button></a>
                         </td>
                         <td class="text-right">
                              <form method="post" action="{{route('companies.destroy',$company->id)}}" enctype="multipart/form-data">
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
