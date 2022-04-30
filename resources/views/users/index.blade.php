@extends('layouts.base')
@section('content')
<div class="container-fluid">
@if (Session::has('user-created-message'))
     <div class="alert alert-info">
          {{Session::get('user-created-message')}}
     </div> 
@endif

@if (Session::has('user-updated-message'))
     <div class="alert alert-success">
          {{Session::get('user-updated-message')}}
     </div> 
@endif
@if (Session::has('user-deleted-message'))
     <div class="alert alert-danger">
          {{Session::get('user-deleted-message')}}
     </div> 
@endif

   
          <div class="">
               <a href="{{ route('users.create') }}"><button class="btn btn-primary btn-block" >أضف مستخدم جديد </button></a>
          </div>
     
     <table id="customers">
               <tr>
                    <th>المستخدم</th>
                    <th>الأيميل</th>
                    <th>تعديل</th>
                    <th>حذف</th>
               </tr>
               @foreach ($users as $user)
                    <tr>
                         <td>{{$user->name}}</td>
                         {{-- <td><img src="{{$user->image}}" alt=""   width="50px" height="50px"></td> --}}
                         <td>{{ $user->email}}</td>
                         {{-- <td>{{ json_encode($user->phone)}}</td> --}}
                         <td class="text-center">
                              @if(Auth::user()->id == $user->id)
                                   <a href="{{route('users.edit',$user->id)}}"><button class="btn btn-primary">تعديل</button></a>
                              @else 
                                   <button class="btn btn-primary" disabled>تعديل</button>
                              @endif
                         </td>
                         <td class="text-right">
                              @if(Auth::user()->id == $user->id)
                                   <form method="post" action="{{route('users.destroy',$user->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">حذف</button>
                                   </form>
                              @else 
                                   <button class="btn btn-danger" disabled>حذف</button>
                              @endif
                         </td>
                    </tr>
               @endforeach
          </table>
     

</div>
@endsection