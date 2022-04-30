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
          الرئيسية
     </h3>
</div>

<div class="form-group has-warning has-feedback input-group col-sm-12" style="width: 100%;
margin-left: 0;
margin-top: 100px;
margin-bottom: 30px;">
<form action="{{route('index')}}" method="get">
     @csrf
     <input type="text" class="form-control" placeholder="ابحث عن قسم" name="search" value=" {{request('search')}}"
     style="
     padding-left: 25px;
     border: 1px solid #8b939a;
     right: -3px;
     border-radius: 0px;
     position: absolute;
     color: #8c8c8c;
     font-size: 22px;
     margin-bottom: 171px;
     margin-top: -50px;
     top: -11px;
     height: 59px;
     white-space: nowrap;">

          <button class="btnsearch" type="submit">
               <i class="glyphicon glyphicon-search"></i>
          </button>

</form>
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
                    {{-- <th>تعديل</th>

                    <th>حذف</th> --}}
               </tr>
               @foreach ($companies as $company)
                    <tr>
                         <td>{{$company->name}}</td>
                         {{-- <td><img src="{{$company->image}}" alt=""   width="50px" height="50px"></td> --}}

                         {{-- <td><a href="{{$company->link}}">اضغط</a></td> --}}

                         <td>
                              <select class="form-control" name="" id="">
                                   @foreach ( ($company->link) as $item)
                                        @if ($item)
                                             <option value="">{{$item}}</option>
                                        @endif
                                   @endforeach
                              </select>
                         </td>
                         <td>
                              <select class="form-control" name="" id="">
                                   @foreach ( ($company->email) as $item)
                                        @if ($item)
                                             <option value="">{{$item}}</option>
                                        @endif
                                   @endforeach
                              </select>
                         </td>
                         <td>
                              <select class="form-control" name="" id="">
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
                         {{-- <td class="text-center">
                              <a href="{{route('companies.edit',$company->id)}}"><button class="btn btn-primary">تعديل</button></a>
                         </td>
                         <td class="text-right">
                              <form method="post" action="{{route('companies.destroy',$company->id)}}" enctype="multipart/form-data">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-danger">حذف</button>
                              </form>
                         </td> --}}
                    </tr>
               @endforeach
          </table>

</div>

@endsection
