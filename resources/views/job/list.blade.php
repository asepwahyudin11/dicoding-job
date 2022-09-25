@extends('layout')

@section('title', 'Job - List')

@section('content')
    <nav class="navbar navbar-expand-lg bg-dark text-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/assets/image/dicoding_putih.png" alt="" height="24" class="d-inline-block align-top">
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

    <div class="bg-dark text-white">
        <div class="container" style="padding-top:50px;padding-bottom:50px;">
            <h4 class="text-info">Dicoding Jobs</h4>
            <h1 style="max-width:550px">Temukan lowongan yang cocok untuk Anda <img src="/assets/image/image-home.png" width="200px" class="img-home-circle" /></h1>
        </div>
    </div>

    <div class="bg-dark">
        <div class="paper-rounded">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-8">
                        <h3>Daftar Pekerjaan Terbaru</h3>
                        <div class="mt-4" id="job_result">
                            <!-- Section Looping -->
                            <div class="card mt-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="/company/sample1.jpeg" width="100%" style="border-radius:5px" />
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mt-2">Back-End Engineer</h5>
                                            <div class="text-secondary mt-3" style="font-size:14px">
                                                <span style="padding-right:10px"><i class="fa fa-building" aria-hidden="true"></i> Dicoding</span>
                                                <span>Full-time</span>
                                            </div>
                                            <div class="text-secondary mt-1" style="font-size:14px">
                                                <span style="padding-right:10px"><i class="fa fa-map-marker" aria-hidden="true"></i> Bandung</span>
                                                <span><i class="fa fa-briefcase" aria-hidden="true"></i> 1-3 tahun pengalaman</span>
                                            </div>
                                        </div>
                                        <div class="col-3 text-secondary" style="font-size:14px;text-align:right">
                                            <div class="mt-2">Dibuat pada 15 Juni 2022</div>
                                            <div>Dibuat pada 15 Juli 2022</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="fa fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Pekerjaan apa yang sedang Anda cari?">
                        </div>

                        <div class="card mt-3">
                            <div class="card-body">
                                <h4>Keahlian</h4>
                                <div class="mt-3">
                                    @foreach ($skills as $skill)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $skill->id }}" id="skill-{{ $skill->id }}">
                                            <label class="form-check-label" for="skill-{{ $skill->id }}">
                                                {{ $skill->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-body">
                                <h4>Tipe Pekerjaan</h4>
                                <div class="mt-3">
                                    @foreach ($types as $type)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $type->id }}" id="type-{{ $type->id }}">
                                            <label class="form-check-label" for="skill-{{ $type->id }}">
                                                {{ $type->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-body">
                                <h4>Kota</h4>
                                <div class="mt-3">
                                    @foreach ($cities as $city)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $city->id }}" id="city-{{ $city->id }}">
                                            <label class="form-check-label" for="city-{{ $city->id }}">
                                                {{ $city->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-body">
                                <h4>Pengalaman</h4>
                                <div class="mt-3">
                                    @foreach ($experiences as $experience)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $experience->id }}" id="experience-{{ $experience->id }}">
                                            <label class="form-check-label" for="experience-{{ $experience->id }}">
                                                {{ $experience->title }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                @include('partials/footer')
            </div>
        </div>
    </div>
@endsection