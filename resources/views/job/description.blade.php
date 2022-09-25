@extends('layout')

@section('title', 'Job - Description')

@section('content')
    <nav class="navbar navbar-expand-lg bg-white text-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/assets/image/dicoding_logo.png" alt="" height="24" class="d-inline-block align-top">
                Jobs
            </a>
            <button class="navbar-toggler" type="button" data-coreui-toggle="collapse" data-coreui-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Looking for job</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hiring</a>
                    </li>
                </ul>
                <div class="d-flex" style="vertical-align:middle">
                    <div class="box-status" style="margin-right:30px">
                        <span style="padding-right:5px" class="text-info"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                        <span style="padding-right:5px">Siap untuk di-interview</span>
                        <span class="text-secondary"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                    </div>
                    <div style="margin-right:30px">
                        <img src="/assets/image/profile.png" width="35" class="image-circle" />
                        <span class="text-secondary"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                    </div>
                    <div style="padding-top:5px"><i class="fa fa-bell" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-white text-dark" style="border-bottom: 1px solid #E4E4E7">
        <div class="container" style="padding-top:50px;padding-bottom:50px;">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="row">
                            <div class="col-12">
                                <a class="text-dark" href="{{ route('job.list') }}" style="font-size:14px">Semua daftar pekerjaan <i class="fa fa-external-link" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <img src="{{ $job->company_logo }}" width="100%" style="border-radius:5px" />
                            </div>
                            <div class="col-10">
                                <h3 class="mt-2">{{ $job->title }}</h3>
                                <b>Sektor Bisnis: {{ $job->company_sector }}</b><br>
                                <div class="mt-1">
                                    <span style="padding-right:10px"><i class="fa fa-building" aria-hidden="true"></i> {{ $job->company_name }}</span>
                                    <span style="padding-right:10px"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $job->city->name }}</span>
                                    <span><i class="fa fa-users" aria-hidden="true"></i> {{ $job->company_size }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex" style="padding:60px 0px">
                            <div style="padding: 0px 10px"><button type="button" class="btn btn-light rounded-0"><i class="fa fa-share-alt" aria-hidden="true"></i></button></div>
                            <div style="padding: 0px 10px"><button type="button" class="btn btn-light rounded-0"><i class="fa fa-heart-o" aria-hidden="true"></i></button></div>
                            <div style="padding: 0px 10px">
                                @if ($job->closed_at < date('Y-m-d'))
                                    <button type="button" class="btn btn-danger rounded-0" disabled>Tidak Menerima Lamaran</button>
                                @else
                                    <a href="{{ route('job.form', ['id' => $job->id]) }}"><button type="button" class="btn btn-dark rounded-0">Kirim Lamaran</button></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                @if ($job->closed_at < date('Y-m-d'))
                    <div class="alert alert-danger mb-4" role="alert">
                        Pekerjaan ini sudah tidak menerima lamaran
                    </div>
                @endif
                <div>
                    <button class="btn-description">{{ $job->type->name }}</button>
                    <button class="btn-description">{{ $job->city->name }}</button>
                </div>
                <div class="mt-4">
                    {!! $job->description !!}
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Tertarik?</h4>
                        <ul>
                            <li>Kirimkan CV dan Portofolio terbaik kamu.</li>
                            <li>Ceritakan ke kami pengalaman apa saja yang kamu miliki. Tunjukan karya-karya kamu di bidang pemrograman atau pengembangan aplikasi.</li>
                            <li>Buatlah sebuah artikel yang membahas tentang pemrograman atau teknologi yang sedang kamu minati.</li>
                            <li>Kamu dapat mencantumkan link ke artikel ini di inputan Cover Letter ketika memasukkan lamaran untuk lowongan ini.</li>
                            <li>Berapa harapan gaji kamu bila bergabung dengan Dicoding Indonesia?</li>
                            <li>Mohon untuk mencantumkan nilainya di inputan Cover Letter.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>

        @include('partials/footer')
    </div>
@endsection