<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

@php($title = (isset($title) ? "$title | " : '') . config('app.name'))
<title>{{ $title }}</title>