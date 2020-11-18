<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="turbolinks-cache-control" content="no-cache">

@php($title = (isset($title) ? "$title | " : '') . config('app.name'))
<title>{{ $title }}</title>

<meta property="og:type" content="website">
<meta property="og:title" content="{{ $title }}">
<meta property="og:image" content="{{ asset('/images/driesvints.jpg') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:locale" content="en_US" />
<meta property="twitter:site" content="@driesvints">
<meta property="twitter:creator" content="@driesvints">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="{{ $title }}">
<meta property="twitter:image" content="{{ asset('/images/driesvints.jpg') }}">