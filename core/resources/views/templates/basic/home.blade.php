@extends($activeTemplate.'layouts.frontend')

@php
	$banner = getContent('banner.content',true)->data_values;
	$brand = getContent('brands.content',true)->data_values;
	$brandElement = getContent('brands.element',false,'',1);

@endphp

@section('content')

  <!-- hero section end -->

    @if($sections->secs != null)
        @foreach(json_decode($sections->secs) as $sec)
            @include($activeTemplate.'sections.'.$sec)
        @endforeach
    @endif
@endsection
