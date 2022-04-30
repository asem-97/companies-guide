@extends('layouts.base')
@section('content')
<div class="container-fluid">
@if (Session::has('category-created-message'))
     <div class="alert alert-info">
          {{Session::get('category-created-message')}}
     </div>
@endif

@if (Session::has('category-updated-message'))
     <div class="alert alert-success">
          {{Session::get('category-updated-message')}}
     </div>
@endif
@if (Session::has('category-deleted-message'))
     <div class="alert alert-danger">
          {{Session::get('category-deleted-message')}}
     </div>
@endif

          <div class="">
               <a href="{{route('categories.create')}}"><button class="btn btn-primary btn-block" >أضف قسم جديد </button></a>
          </div>

     {{-- <table id="customers">
               <tr>
                    <th>الأقسام الرئيسية</th>
                    <th>تعديل</th>
                    <th>حذف</th>
               </tr>
               @foreach ($categories as $category)
                    <tr>
                         <td>{{$category->name}}</td>
                         <td class="text-center">
                              <a href="{{route('categories.edit',$category->id)}}"><button class="btn btn-primary">تعديل</button></a>
                         </td>
                         <td class="text-right">
                              <form method="post" action="{{route('categories.destroy',$category->id)}}" enctype="multipart/form-data">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-danger">حذف</button>
                              </form>
                         </td>
                    </tr>
               @endforeach
          </table> --}}







<div class="row">
     <div class="col-md-12 dd" id="nestable-wrapper">
         <ol class="dd-list list-group" style="margin-left: -153px;margin-right: -30px;">
             @foreach($categories as $category)
                 <li class="first dd-item list-group-item" data-id="{{ $category->id }}">
                     <div class="dd-handle" >{{ $category->name }}</div>
                     <div class="dd-option-handle">
                         <a href="{{ route('categories.edit',$category->id ) }}" class="btn btn-success btn-sm" >تعديل</a>


                         <div id="id02" class="modal">
                              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
                              <form class="modal-content" action="/action_page.php">
                              <div class="pop">
                                    <h4 style=" color: #000000;
                                   text-align: center;
                                   margin-top: 3px;
                                   margin-bottom: 9px;
                                   font-size: 45px;
                                   font-weight: bold;"
                              > حذف هذا القسم سيؤدي إلى حذف جميع الأقسام بداخله</h4>
                                   <p> هل أنت متأكد أنك تريد حذف القسم ؟</p>

                                   <div class="clearfix">
                                   <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">إلغاء</button>
                                   <button type="button" onclick="document.getElementById('id02').style.display='none';event.preventDefault();document.getElementById('delete{{$category->id}}').submit();" class="deletebtn"  ><a href="{{route('categories.destroy',$category->id)}}"></a> تأكيد </button>
                                   </div>
                              </div>
                              </form>
                         </div>

                         <a class="btn btn-danger btn-sm"  onclick="document.getElementById('id02').style.display='block'" style="cursor: pointer;">حذف</a>
                         <form id="delete{{$category->id}}"  method="post" action="{{route('categories.destroy',$category->id)}}" enctype="multipart/form-data" style="display:none;">
                              @csrf
                              @method('DELETE')
                              {{-- <button class="btn btn-danger">حذف</button> --}}
                         </form>
                     </div>

                     @if(!empty($category->children))
                         @include('child-category-view', [ 'category' => $category])
                     @endif
                 </li>
             @endforeach
         </ol>
     </div>
 </div>

@endsection
</div>
