<div class="project-title" data-aos="fade-up" data-aos-duration="1000">
    <h4>OUR PROJECTS</h4>
    <p>Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk
        mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi,
        dan tata letak.</p>
</div>

<div class="container project-items mt-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-lg-5 project_long" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img src="{{ asset('storage/Projects/' . $adminProject[0]->filename) }}">
            <div class="named-project">
                <h5>{{ $adminProject[0]->heading }}</h5>
                <p>{{ $adminProject[0]->description }}</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-5" data-aos="fade-left" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <div class="row project_row_1">
                <div class="col-sm-12">
                    <img src="{{ asset('storage/Projects/' . $adminProject[1]->filename) }}">
                    <div class="named-project">
                        <h5>{{ $adminProject[1]->heading }}</h5>
                        <p>{{ $adminProject[1]->description }}</p>
                    </div>
                </div>

            </div>
            <div class="row project_row_1" data-aos="fade-left" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="col-sm-12">
                    <img src="{{ asset('storage/Projects/' . $adminProject[2]->filename) }}">
                    <div class="named-project">
                        <h5>{{ $adminProject[2]->heading }}</h5>
                        <p>{{ $adminProject[2]->description }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center no-gutters" data-aos="fade-up" data-aos-duration="1000">
        <div class="col-sm-12 col-md-12 col-lg-10 project_row_2">
            <img src="{{ asset('storage/Projects/' . $adminProject[3]->filename) }}">
            <div class="named-project">
                <h5>{{ $adminProject[3]->heading }}</h5>
                <p>{{ $adminProject[3]->description }}</p>
            </div>
        </div>
    </div>
</div>