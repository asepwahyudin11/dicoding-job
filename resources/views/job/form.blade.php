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

    <div class="bg-white text-dark" style="border-top: 1px solid #E4E4E7">
        <div class="container" style="padding-top:50px;padding-bottom:50px;">
            <div class="container">
                <div class="row">
                    <div class="col-5">
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
                    <div class="col-7 mt-3">
                        <h3>Membuat Lamaran</h3>
                        <div class="mb-3 mt-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Untuk Dihubungi</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Telepon Untuk Dihubungi</label>
                            <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="+6208......">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cover Letter</label>
                            <textarea class="form-control" name="cover_letter" id="cover_letter" rows="5"></textarea>
                            <span style="font-size:10px">Silahkan masukkan kata pengantar untuk lamaran ini dan mengapa Anda adalah kandidat yang cocok untuk lamaran ini.</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Link Ke CV</label>
                            <input type="link" class="form-control" name="link_cv" id="link_cv" placeholder="https://myawesome.cv">
                            <span style="font-size:10px">Silahkan memasukkan link ke CV/Porftolio yang Anda miliki. Contoh: link ke dokumen CV yang Anda simpan di Google Docs atau link ke profile github.com dsb.</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Link Ke Portofolio</label>
                            <input type="link" class="form-control" name="link_portofolio" id="link_portofolio" placeholder="https://myawesome.pdf">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Link Ke File Lain</label>
                            <input type="link" class="form-control" name="link_another" id="link_another" placeholder="https://myawesome.pdf">
                            <span style="font-size:10px">Anda dapat memasukkan link ke dokumen / sumber pendukung untuk lamaran ini.</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keahlian</label>
                            <input type="text" class="form-control" name="skill" id="skill">
                            <span style="font-size:10px">Pisah keahlian dengan koma. <b>Contoh: Javascript, Android, Java, Kotlin, dll</b></span>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-dark rounded-0">Kirim Lamaran</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        @include('partials/footer')
    </div>
@endsection