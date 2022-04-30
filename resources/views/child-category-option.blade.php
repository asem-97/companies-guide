@if (! in_array($category->id,App\Models\Company::get('category_id')->toArray()))

     <option value="{{ $category->id }}">
          
          {{-- @while ($category->parent_id !== null)
               {{ $category->name }}/   
          @endwhile --}}
          @php
               $copyCategory=$category;
               $string="";
               while ($copyCategory) {
                    $string = $copyCategory->name ."/". $string;
                    $copyCategory=$copyCategory->parent;
               }

               echo $string;
          @endphp
     
     
     </option>
     @foreach ($category->children as $child)
          @include('child-category-option', [ 'category' => $child])

     @endforeach

@endif