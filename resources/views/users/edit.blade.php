@extends('layouts.base')

@section('content')
<div class="container-fluid">
<h1 class="">تعديل مستخدم</h1>


     <form method="post" action="{{route('users.update',$user)}}" enctype="multipart/form-data">

          @method("PATCH")
          @csrf


          <div class="form-group">

               <label for="name">اسم المستخدم</label>
               <input type="text" name="name" class="form-control" value="{{$user->name}}" aria-description="" placeholder="{{$user->name}}">
               @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>
          <div class="form-group">

               <label for="name"> البريد الالكتروني</label>
               <input type="text" name="email" class="form-control" value="{{$user->email}}" aria-description="" placeholder="{{$user->email}}">
               @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>
          <div class="form-group">

               <label for="password">كلمة مرور المستخدم</label>
               <input type="text" name="password" class="form-control" value="" aria-description="" placeholder="">
               @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>
          {{-- <div class="form-group">

               <label for="file">صورة المستخدم</label>
               <input type="file" name="image" class="form-control-file"  value="{{$user->image}}" placeholder="">
               <div class="container">
                    <img src="{{$user->image}}" alt="">
               </div>
               @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div> --}}
          <button type="submit" class="btn btn-primary">تأكيد</button>
     </form>


</div>

@endsection
