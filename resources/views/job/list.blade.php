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
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="mt-4" id="job_result">
                            
                        </div>
                    </div>
                    <div class="col-4">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="fa fa-search" aria-hidden="true"></i></span>
                            <input type="text" name="search" id="search" class="form-control" placeholder="Pekerjaan apa yang sedang Anda cari?">
                        </div>

                        <div class="card mt-3">
                            <div class="card-body">
                                <h4>Keahlian</h4>
                                <div id="job-skill" class="mt-3">
                                    @foreach ($skills as $skill)
                                        <div class="form-check">
                                            <input class="form-check-input cskill" type="checkbox" name="skill" value="{{ $skill->id }}" id="skill-{{ $skill->id }}" checked>
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
                                <div id="job-type" class="mt-3">
                                    @foreach ($types as $type)
                                        <div class="form-check">
                                            <input class="form-check-input ctype" type="checkbox" name="type" value="{{ $type->id }}" id="type-{{ $type->id }}" checked>
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
                                <div id="job-city" class="mt-3">
                                    @foreach ($cities as $city)
                                        <div class="form-check">
                                            <input class="form-check-input ccity" type="checkbox" name="city" value="{{ $city->id }}" id="city-{{ $city->id }}" checked>
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
                                <div id="job-experience" class="mt-3">
                                    @foreach ($experiences as $experience)
                                        <div class="form-check">
                                            <input class="form-check-input cexperience" type="checkbox" name="experience" value="{{ $experience->id }}" id="experience-{{ $experience->id }}" checked>
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

@push('after_footer_stack')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        var _token = $('input[name="_token"]').val();

        $(document).ready(function(){
            console.log("Hello world");
            loadJobList();
        })

        function loadJobList() 
        {
            var loader = `
                <div class="d-flex justify-content-center mt-5">
                    <div class="spinner-border text-dark" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            `;
            $('#job_result').html(loader);
            loadContent();

            // Filter Skill 
            $('#job-skill .cskill').click(function(){
                loadContent();
            });

            // Filter Type 
            $('#job-type .ctype').click(function(){
                loadContent();
            });

            // Filter City 
            $('#job-city .ccity').click(function(){
                loadContent();
            });

            // Filter Experience 
            $('#job-experience .cexperience').click(function(){
                loadContent();
            });

            // Search Field 
            $('#search').keyup(function(){
                loadContent();
            });
        }

        function loadContent() 
        {
            var choices = {};

            $('.cskill:checked').each(function() {
                if (!choices.hasOwnProperty(this.name)) 
                    choices[this.name] = [this.value];
                else 
                    choices[this.name].push(this.value);
            });

            $('.ctype:checked').each(function() {
                if (!choices.hasOwnProperty(this.name)) 
                    choices[this.name] = [this.value];
                else 
                    choices[this.name].push(this.value);
            });

            $('.ccity:checked').each(function() {
                if (!choices.hasOwnProperty(this.name)) 
                    choices[this.name] = [this.value];
                else 
                    choices[this.name].push(this.value);
            });

            $('.cexperience:checked').each(function() {
                if (!choices.hasOwnProperty(this.name)) 
                    choices[this.name] = [this.value];
                else 
                    choices[this.name].push(this.value);
            });

            var searchValue = document.getElementById('search').value;
            if (searchValue != null && searchValue != '') {
                choices['search'] = searchValue;
            }

            console.log(choices);

            var data = {
                page: 1,
                filter: choices,
                _token: _token
            };
            $.ajax({
                url: "{{ route('job.load') }}",
                method: "POST",
                data: data,
                success:function(data) {
                    $('#job_result').html(data);
                },
                error: function(data) {
                    $('#job_result').html('Gagal Nih');
                }
            })

        }
    </script>
@endpush