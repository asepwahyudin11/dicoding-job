@forelse ($jobs as $job)
    <!-- Section Looping -->
    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-2">
                    <img src="{{ $job->company_logo }}" width="100%" style="border-radius:5px" />
                </div>
                <div class="col-7">
                    <h5 class="mt-2">{{ $job->title }}</h5>
                    <div class="text-secondary mt-3" style="font-size:14px">
                        <span style="padding-right:10px"><i class="fa fa-building" aria-hidden="true"></i> {{ $job->company_name }}</span>
                        <span>{{ $job->type->name }}</span>
                    </div>
                    <div class="text-secondary mt-1" style="font-size:14px">
                        <span style="padding-right:10px"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $job->city->name }}</span>
                        <span><i class="fa fa-briefcase" aria-hidden="true"></i> {{ $job->experience->title }}</span>
                    </div>
                </div>
                <div class="col-3 text-secondary" style="font-size:14px;text-align:right">
                    <div class="mt-2">Dibuat pada {{ date('d M Y', strtotime($job->created_at)) }}</div>
                    <div>Dibuat pada {{ date('d M Y', strtotime($job->closed_at)) }}</div>
                </div>
            </div>
        </div>
    </div>
@empty 
    <div class="alert alert-dark" role="alert">
        Pekerjaan yang Anda cari tidak dapat ditemukan!
    </div>
@endforelse