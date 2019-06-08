@extends('layout/master')

@section('maincontent')
<section id="writeBox">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        {{$data->title}}
                        <span class="badge badge-light">
                            {{$data->writer}}
                        </span>
                        <span class="badge badge-primary">
                            {{$data->wdate}}
                        </span>
                    </div>
                    <div class="card-body">
                        <!-- !!을 쓰면 html태그는 text출력중에 거름 -->
                        {!! $data->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection