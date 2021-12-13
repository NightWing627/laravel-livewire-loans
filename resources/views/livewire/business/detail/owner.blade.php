<div class="sub-part-owner {{ $active ? 'd-block' : 'd-none' }}">
    <div class="sub-content d-flex">
        <div class="col-lg-4 grid-margin stretch-card pr-0 mb-3">
            <div class="card card-custom card-stretch border-r-radius-0">
                <div class="card-header border-tl-radius-20">
                    <div class="card-title pl-2">
                        <p class="text-left font-weight-bold">Personal Details</p>   
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="col-lg-12 pt-1">
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Full Name:</p>
                            <p class="col-6 text-left  mb-0 information-text">John Kilwana</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Gender:</p>
                            <p class="col-6 text-left  mb-0 information-text">Male</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">DOB:</p>
                            <p class="col-6 text-left  mb-0 information-text">28/09/1987</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Education:</p>
                            <p class="col-6 text-left  mb-0 information-text">University</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Material Status:</p>
                            <p class="col-6 text-left  mb-0 information-text">Single</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Yrs in Business:</p>
                            <p class="col-6 text-left  mb-0 information-text">5 years</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">National ID:</p>
                            <p class="col-6 text-left  mb-0 information-text">CM90056VCRK</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 grid-margin stretch-card p-0 mb-3">
            <div class="card card-custom card-stretch border-radius-0">
                <div class="card-header">
                    <div class="card-title pl-2">
                        <p class="text-left font-weight-bold">Contact Details</p>   
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="col-lg-12 pt-1">
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">District:</p>
                            <p class="col-6 text-left  mb-0 information-text">Wakiso</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Village:</p>
                            <p class="col-6 text-left  mb-0 information-text">Nansana</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Residential:</p>
                            <p class="col-6 text-left  mb-0 information-text">Tenant</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Mobile No.</p>
                            <p class="col-6 text-left  mb-0 information-text">+256780756614</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Landlord:</p>
                            <p class="col-6 text-left  mb-0 information-text">Peter Nyoba</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Landlords’s No.:</p>
                            <p class="col-6 text-left  mb-0 information-text">+25670155146</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 grid-margin stretch-card p-0 mb-3">
            <div class="card card-custom card-stretch border-solid-1 border-l-radius-0">
                <div class="card-header border-tr-radius-20">
                    <div class="card-title pl-2">
                        <p class="text-left font-weight-bold">Referee Details</p>   
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="col-lg-12 pt-1 owl-carousel owl-theme">
                        @php
                            for($i = 0; $i < 3; $i ++) {
                        @endphp
                        <div class="referee-item">
                            <div class="row information-item">
                                <p class="col-6 text-left mb-0 information-option">Business Name:</p>
                                <p class="col-6 text-left mb-0 information-text">JK Hardware</p>
                            </div>
                            <div class="row information-item">
                                <p class="col-6 text-left mb-0 information-option">Business Type:</p>
                                <p class="col-6 text-left mb-0 information-text">Solo Proprietorship</p>
                            </div>
                            <div class="row information-item">
                                <p class="col-6 text-left mb-0 information-option">Industry:</p>
                                <p class="col-6 text-left mb-0 information-text">Hardware & Construction</p>
                            </div>
                            <div class="row information-item">
                                <p class="col-6 text-left mb-0 information-option">Location:</p>
                                <p class="col-6 text-left mb-0 information-text">Business Name:</p>
                            </div>
                            <div class="row information-item">
                                <p class="col-6 text-left mb-0 information-option">Contact Person:</p>
                                <p class="col-6 text-left mb-0 information-text">Wakiso</p>
                            </div>
                        </div>
                        @php
                            }
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sub-content d-flex">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <div class="card card-custom card-stretch cert-doc-item">
                <div class="hovereffect">
                    <img class="image img-responsive" src="{{ asset('assets/images/carousel/banner_1.jpg') }}" alt="http://placehold.it/350x250" alt="">
                    <div class="overlay">
                        <h4>National ID Front</h4>
                        <div class="col-12 justify-content-center click-view">
                            <span class="menu-icon icon-full-screen"
                                wire:click="$emit('imageShow', '{{ asset('assets/images/carousel/banner_2.jpg') }}', 'National ID Front')"></span>
                            <p class="text-center">click to view</p>
                        </div>
                        <div class="col-12 d-flex action-bar">
                            <a class="btn btn-priamry col-6">
                                Accept
                            </a>
                            <a class="btn btn-priamry col-6">
                                Reject
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <div class="card card-custom card-stretch cert-doc-item">
                <div class="hovereffect">
                    <img class="image img-responsive" src="{{ asset('assets/images/carousel/banner_2.jpg') }}" alt="http://placehold.it/350x250" alt="">
                    <div class="overlay">
                        <h4>National ID Back</h4>
                        <div class="col-12 justify-content-center click-view">
                            <span class="menu-icon icon-full-screen" 
                                wire:click="$emit('imageShow', '{{ asset('assets/images/carousel/banner_2.jpg') }}', 'National ID Back')"></span>
                            <p class="text-center">click to view</p>
                        </div>
                        <div class="col-12 d-flex action-bar">
                            <a class="btn btn-priamry col-6">
                                Accept
                            </a>
                            <a class="btn btn-priamry col-6">
                                Reject
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <div class="card card-custom card-stretch cert-doc-item">
                <div class="hovereffect">
                    <img class="image img-responsive" src="{{ asset('assets/images/carousel/banner_3.jpg') }}" alt="http://placehold.it/350x250" alt="">
                    <div class="overlay">
                        <h4>Profile Photo</h4>
                        <div class="col-12 justify-content-center click-view">
                            <span class="menu-icon icon-full-screen"
                                wire:click="$emit('imageShow', '{{ asset('assets/images/carousel/banner_3.jpg') }}', 'Profile Photo')"></span>
                            <p class="text-center">click to view</p>
                        </div>
                        <div class="col-12 d-flex action-bar">
                            <a class="btn btn-priamry col-6">
                                Accept
                            </a>
                            <a class="btn btn-priamry col-6">
                                Reject
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <div class="card card-custom card-stretch cert-doc-item">
                <div class="hovereffect">
                    <img class="image img-responsive" src="{{ asset('assets/images/carousel/banner_4.jpg') }}" alt="http://placehold.it/350x250" alt="">
                    <div class="overlay">
                        <h4>Selfie in Business</h4>
                        <div class="col-12 justify-content-center click-view">
                            <span class="menu-icon icon-full-screen" 
                                wire:click="$emit('imageShow', '{{ asset('assets/images/carousel/banner_4.jpg') }}', 'Selfie in Business')"></span>
                            <p class="text-center">click to view</p>
                        </div>
                        <div class="col-12 d-flex action-bar">
                            <a class="btn btn-priamry col-6">
                                Accept
                            </a>
                            <a class="btn btn-priamry col-6">
                                Reject
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>