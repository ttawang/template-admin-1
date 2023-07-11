@extends('layouts.app', [
    'page' => 'Dashboard',
    'active' => '1',
    'breadcumbs' => [
        ['nama' => 'Dashboard', 'link' => 'javascript:void(0)', 'active' => ''],
        ['nama' => 'Dashboard', 'link' => 'javascript:void(0)', 'active' => ''],
        // ['nama' => 'Dashboard', 'link' => '', 'active' => 'active']
    ]
])

@section('content')
    <div class="col-xl-12 col-md-12" style="height: 209.121px;">
        <!-- Widget Linearea One-->
        <div class="card card-shadow" id="widgetLineareaOne">
            <center>
                <h1>
                    Selamat Datang CV Ketjubung
                </h1>
            </center>
            {{-- <div class="card-block p-20 pt-10">
                <div class="clearfix">
                    <div class="grey-800 float-left py-10">
                        <i class="icon md-account grey-600 font-size-24 vertical-align-bottom mr-5"></i> User
                    </div>
                    <span class="float-right grey-700 font-size-30">1,253</span>
                </div>
                <div class="mb-20 grey-500">
                    <i class="icon md-long-arrow-up green-500 font-size-16"></i> 15% From this yesterday
                </div>
                <div class="ct-chart h-50"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                        <g class="ct-grids"></g>
                        <g>
                            <g class="ct-series ct-series-a">
                                <path
                                    d="M0,50L0,50C15.61,45.833,31.22,43.056,46.83,37.5C62.44,31.944,78.051,12.5,93.661,12.5C109.271,12.5,124.881,25,140.491,25C156.101,25,171.711,6.25,187.321,6.25C202.932,6.25,218.542,35,234.152,35C249.762,35,265.372,31.25,280.982,31.25C296.592,31.25,312.202,43.75,327.813,50L327.813,50Z"
                                    class="ct-area"></path>
                            </g>
                        </g>
                        <g class="ct-labels"></g>
                    </svg></div>
            </div> --}}
        </div>
    </div>
@endsection
