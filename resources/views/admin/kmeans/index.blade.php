@extends('_layouts.admin')
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Alorithm</a></li>
            <li class="breadcrumb-item"><a>Kmeans</a></li>
        </ol>
    </nav>
@endsection
@section('content')
    <section>
        <div>
            <h2 class="fw-bolder">Result K-Means Algorithm</h2>
        </div>
        {{-- @dd($result) --}}
        @foreach ($result as $key => $item)
            <div class="p-2 mt-3 mb-3 bg-primary">
                <h4 class="m-0 text-white fw-bolder">Iteration - {{ $key + 1 }}</h4>
            </div>
            <div class="row">
                <div class="col-8">
                    <table class="table text-center table-bordered" style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Distance</th>
                                <th>Cluster</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($item['data'] as $value)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ 'TEST' }}</td>
                                    <td>{{ $value['distance'] }}</td>
                                    @if ($value['cluster'] == 0)
                                        <td class="text-white bg-danger">{{ 'C' . ($value['cluster'] + 1) }}</td>
                                    @elseif ($value['cluster'] == 1)
                                        <td class="text-white bg-success">{{ 'C' . ($value['cluster'] + 1) }}</td>
                                    @else
                                        <td class="text-white bg-primary">{{ 'C' . ($value['cluster'] + 1) }}</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-4">
                    <table class="table text-center table-bordered" style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th colspan="3">Centeroid</th>
                            </tr>
                            <tr>
                                <th>Cluster</th>
                                <th>Longitude</th>
                                <th>Latitude</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($item['centeroid'] as $value)
                                <tr>
                                    <td>{{ 'C' . $loop->iteration }}</td>
                                    <td>{{ $value['longitude'] }}</td>
                                    <td>{{ $value['latitude'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </section>
@endsection
