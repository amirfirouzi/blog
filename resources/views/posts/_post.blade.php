@php
    $lipsum = new joshtronic\LoremIpsum();
@endphp
<div class="post">
    <a href="{{URL::to('/')}}"><img class="img-fluid" src={{asset('img/pic-2.jpeg')}} alt="Logo"></a>
    <div class="post-content">
        <h3>{{$lipsum->words(6)}}</h3>
        <small>Posted By Anonymous on October 24 2018</small>
        {!! lorem(1) !!}
        <button type="button" class="btn btn-info btn-block">Info</button>
    </div>
</div>