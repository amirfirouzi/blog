@php
    $menue_items = array(
        "admin/home" => "Dashboard",
        "admin/posts"  => "Posts",
        "admin/users"  => "Users",
        "admin/categories"  => "Categories",
        )
@endphp

@foreach($menue_items as $key => $value)
    <li class="nav-item">
        <a class="nav-link {{ $key == $route ? 'active' : ''}}" href="{{url($key)}}">
            <span data-feather=""></span>
            {{$value}} <span class="sr-only">{{ $key == $route ? '(current)' : ''}}</span>
        </a>
    </li>
@endforeach
