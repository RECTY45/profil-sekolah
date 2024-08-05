<div>
    {{-- CAROUSEL --}}
    <x-frontend.benner-carousel :items="$slides"/>

    {{-- KATA SAMBUTAN --}}
    @if (isset($profil->title_foreword) && isset($profil->foreword))
        <section class="mission home-two-mossion mission3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="mission-left-content wow fadeInUp">
                            <div class="mission-image-one text-center">
                                @if (isset($profil->image_04))
                                    <img src="{{ asset('storage/' . $profil->image_04) }}">
                                @else
                                    <img src="{{ asset('backend/assets/images/NoImage.png') }}">
                                @endif
                            </div>
                            <div class="mission-shape-one text-center">
                                <img src="{{ asset('frontend/assets/images/mission-shape-01.png') }}">
                            </div>
                            <div class="mission-shape-two">
                                <img src="{{ asset('frontend/assets/images/mission-shape-02.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mission-right-content wow fadeInUp">
                            <div class="common-title">
                                <span>KATA SAMBUTAN</span>
                                <h3>{{ $profil->title_foreword }}</h3>
                            </div>
                            <p>{{ $profil->foreword }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

</div>
