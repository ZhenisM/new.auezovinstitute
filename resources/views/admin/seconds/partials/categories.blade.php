@foreach ($categories as $category)

    <option value="{{$category->id ?? ""}}"

            @isset($department->id)

                @foreach ($department->categories as $category_seconds)

                    @if ($category->id == $category_seconds->id)
                        selected="selected"
                    @endif

                @endforeach

            @endisset

    >
        {!! $delimiter ?? "" !!}{{$category->title ?? ""}}
    </option>

    @if (count($category->children) > 0)

        @include('admin.departments.partials.categories', [
          'categories' => $category->children,
          'delimiter'  => ' - ' . $delimiter
        ])

    @endif
@endforeach
