@extends('layouts.base')

@section('content')
<div class="container-fluid">
<h3 style="direction: rtl;font-size: 35px; margin-top:-6px;margin-bottom:7px; background-color:#e2e2e2; padding-left:5px; border-radius:4px;">
     @php
          $copyCategory=$company->category;
          $string="";
          while ($copyCategory) {
               $string = $copyCategory->name ."/". $string;
               $copyCategory=$copyCategory->parent;
          }
          echo $string.$company->name;
     @endphp
</h3>



{{-- <h1 class=""> {{$company->name}}</h1> --}}



          @if ($company->commercialName)
               <div class="company-info">
                   <span class="title"> اسم شركة التجاري :</span>
                   <span class="result"> {{$company->commercialName}}</span>
               </div>
          @endif
<hr>

          @if ( $company->description)
               <div class="company-info">
                    <span class="title">وصف الشركة:</span>
                    {{-- <input type="text" name="name" class="form-control" id="" aria-description="" placeholder="الاسم"> --}}
                   <span class="result">   {{ $company->description}}</span>
               </div>
          @endif


<hr>

          @if ($company->image)
               <div class="company-info">
                    <span class="title">:صورة شعار الشركة</span>
                    <div class="container-fluid">
                         <img src="{{$company->image}}" class="img-thumbnail img-rounded" alt="">
                    </div>
               </div>
          @endif

<hr>
          @if ($company->bruchoure)
               <div class="company-info">
                   <span class="title"> :بروشور الشركة</span>
                    <div class="container-fluid">
                         <img src="{{$company->bruchoure}}" class="img-thumbnail img-rounded" alt="">
                    </div>
               </div>
          @endif
<hr>




          @if ($company->profile)
               <div class="btn-wrap" style="text-align: right;margin-bottom: 27px;">
                    <a href="{{route('companies.download',$company->id)}}" class="btn btn-default">
                         <span>تحميل ملف تعريف الشركة </span>
                    </a>
               </div>
          @endif

<hr>
          @if ($company->country)
               <div class="company-info">
                   <span class="title"> البلد:</span>
                    <span class="result"> {{$company->country}}</span>
               </div>
                <div class="company-info">
                    <span class="title">  المدينة:</span>
                     <span class="result">{{ $company->city }}</span>
                </div>
          @endif

<hr>
          @if ($company->link)
               <div id="InputLinks" class="company-info">
                   <span class="title">  :روابط الشركة</span>
                      <ul class="list-phone">
                           @foreach ($company->link as $item)
                        <li><span class="result">{{$item}}</span></li>
                    @endforeach
                 </ul>
               </div>
          @endif
<hr>
          @if ($company->phone)
               <div id="InputPhone" class="company-info">
                  <span class="title">  :أرقام الشركة</span>
                   <ul class="list-phone">
                         @foreach ($company->phone as $item)
                        <li><span class="result">{{$item}}</span></li>
                    @endforeach
                 </ul>
               </div>
          @endif
<hr>
          @if ($company->email)
               <div id="InputEmails" class="company-info">
                 <span class="title">   :ايميلات الشركة</span>

                   <ul class="list-phone">
                         @foreach ($company->email as $item)
                       <li><span class="result">{{$item}}</span></li>
                    @endforeach
                 </ul>
               </div>
          @endif

</div>
@endsection
