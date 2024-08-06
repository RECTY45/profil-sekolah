<div>
    <section class="service blog-single">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="common-title text-center">
                        <span>APA KABAR {{ $IdentitySchool->name_school ?? '-'}}</span>
                        <h3>BERITA</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    @foreach ($News as $data)
                        <div class="service-container blog-container wow fadeInUp">
                            <div class="service-content-wrapper">
                                <div class="service-content-wrapper-overlay wow"></div>
                                <div class="service-image blog-image">
                                    <img src="{{asset($data && $data->image  ?  'storage/' . $data->image : 'backend/assets/images/NoImage.png' )}}" alt="img">
                                </div>
                            </div>
                            <div class="service-info">
                                <span>{{ $data->created_at ?? '-'}}</span>
                                <h5>{{ $data->heading ?? '-'}}</h5>
                                {!! $data->body ?? '-' !!}
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
