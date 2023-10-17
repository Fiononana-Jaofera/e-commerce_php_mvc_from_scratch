<ul class="nav justify-content-center nav-underline my-4">
  @foreach($categories as $key => $category)
    <li class="nav-item m-2">
      <a class="nav-link" href="{{ $category['url'] }}">{{ $category['name'] }}</a>
    </li>  
  @endforeach
</ul>