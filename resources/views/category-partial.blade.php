
<ul class="sub submenu-{{$x}}">
     @foreach ($children as $child)
          @if ($child->children->count()>0)
               <li class="contain-submenu"><a href="#">{{$child->name}}</a>
                    @php
                        if($x==3)
                        {
                             $x=0;
                        }
                    @endphp
                    @include('category-partial ',['children' => $child->children ,'x'=>($x+1)])
               </li>
          @else
               <li class="active"><a href="{{route('companies.index',$child->id)}}">{{$child->name}}</a></li>
          @endif
     @endforeach
</ul>
