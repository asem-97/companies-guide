@if(!empty($category->children))
    <ol class="dd-list list-group">
        @foreach($category->children as $kk => $sub_category)
            <li class="dd-item list-group-item " data-id="{{ $sub_category['id'] }}" >
                <div class="dd-handle" >{{ $sub_category['name'] }}</div>
                <div class="dd-option-handle">
                    <a href="{{ route('categories.edit',  $sub_category['id'] ) }}" class="btn btn-success btn-sm" >تعديل</a> 
                    {{-- <a href="{{ route('categories.destroy',  $sub_category['id'] ) }}" class="btn btn-danger btn-sm" >Delete</a> --}}
                    <div id="id02" class="modal">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
                        <form class="modal-content" action="/action_page.php">
                        <div class="container">
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
                             <button type="button" onclick="document.getElementById('id02').style.display='none';event.preventDefault();document.getElementById('delete{{$sub_category->id}}').submit();" class="deletebtn"  ><a href="{{route('categories.destroy',$sub_category['id'])}}"></a> تأكيد </button>
                             </div>
                        </div>
                        </form>
                   </div>
                    <a  class="btn btn-danger btn-sm" onclick="document.getElementById('id02').style.display='block'" style="cursor: pointer;">حذف</a> 
                         <form id="delete{{$sub_category['id']}}"  method="post" action="{{route('categories.destroy',$sub_category->id)}}" enctype="multipart/form-data" style="display:none;">
                              @csrf
                              @method('DELETE')
                              {{-- <button class="btn btn-danger">حذف</button> --}}
                         </form>
               </div>

                @include('child-category-view', [ 'category' => $sub_category])
            </li>
        @endforeach
    </ol>
@endif