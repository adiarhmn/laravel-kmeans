@php
    $segments = Request::segments();
    $url = '';
@endphp

@if (count($segments))
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @foreach ($segments as $segment)
                @php
                    $url .= '/' . $segment;
                @endphp
                <li class="breadcrumb-item">
                    <a href="{{ url($url) }}">{{ ucfirst(str_replace('-', ' ', $segment)) }}</a>
                </li>
            @endforeach
        </ol>
    </nav>
@else
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Dashboard</a></li>
        </ol>
    </nav>
@endif
