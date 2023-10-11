<style type="text/css">
    .dropdown-large {
        padding: 1rem;
    }

    .dropdown-menu h6 {
        font-weight: 600 !important;
    }

    #main_nav .nav-link {
        color: #fff !important;
    }

    .list-unstyled a {
        color: #000;
        font-weight: 400;
        line-height: 32px;
    }

    .list-unstyled a:hover {
        color: #ffb606 !important;
    }

    .dropdown-menu a:hover {
        color: #ffb606 !important;
    }

    .dropdown-item:active {
        background-color: #01803d !important;
    }

    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {
        .dropdown-large {
            min-width: 991px;
        }
    }

    /* ============ desktop view .end// ============ */
</style>
@php
    $top_menus = ['old_site', 'webmail', 'career', 'contacts', 'downloads', 'news'];
@endphp
<div class="header">
    <div class="fixed-top">
        <!-- Top Bar -->
        <section id="topbar" class="d-flex justify-content-center align-items-center d-none d-md-block"
            style="background: #179bd7 !important">
            <div class="topbar text-end container-fluid">
                @foreach ($top_menus as $item)
                    @if (isset($item->url_link_type) && $item->url_link_type == 1)
                        <a href="{{ route($item->url_link) }}">{{ $item->title_en }}</a>
                    @elseif (isset($item->url_link_type) && $item->url_link_type == 3)
                        <a href="{{ $item->url_link }}" target="_blank">{{ $item->title_en }}</a>
                    @endif
                @endforeach
            </div>
            {{-- <div class="topbar text-end container-fluid">
                <a href="https://old.bup.edu.bd/" target="_blank">Old Website</a>
                <a href="https://forms.office.com/r/0VeZTuBMEZ" target="_blank" >Alumni</a>
                <a href="https://webportal.bup.edu.bd/" target="_blank">UCAM</a>
                <a href="https://login.microsoftonline.com/" target="_blank">Webmail</a>
                <a href="https://admission.bup.edu.bd/" target="_blank">Current Admissions</a>
                <a href="{{ route('career_list') }}">Career</a>
                <a href="{{ route('gallery_list') }}">Gallery</a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="{{ route('suggestion') }}">Suggestion</a>
            </div> --}}
        </section>
        {{-- <div class="container"> --}}
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-dark bg-light py-0 shadow"
                style="background: #253b80 !important">
                <div class="container-fluid">
                    <div class="logo">
                        @include('frontend.partials.logo_header')
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                        style="background: #16501d;" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav ms-auto align-items-center">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark @if (request()->routeIs([
                                        'about_overview',
                                        'facts_figures',
                                        'citizen_charter',
                                        'annual_report',
                                        'chancellor',
                                        'vc_info',
                                        'pro_vc_info',
                                        'treasurer_info',
                                        'offices',
                                        'office',
                                        'senate.member',
                                        'all_deans',
                                        'all_chairman',
                                        'faculty_member',
                                        'faculty_officer',
                                    ])) active @endif"
                                    href="#" data-bs-toggle="dropdown"> About </a>
                                <div class="dropdown-menu dropdown-large" style="left: -280px !important;">
                                    <div class="container">
                                        <div class="row g-3">
                                            <div class="col-lg-3 col-sm-12 col-md-12">
                                                <h6 class="title">About BUP</h6>
                                                <ul class="list-unstyled">
                                                    @php
                                                        $committee = ['Monthly Commite', 'Yearly Commite', 'Partial commite', 'Secondery Commite'];
                                                    @endphp
                                                    @foreach ($committee as $item)
                                                        <li><a href="#"> Item Name
                                                            </a></li>
                                                    @endforeach

                                                    {{-- <li><a href="#">Submenu item </a></li>
                                                    <li><a href="#">Submenu item </a></li>
                                                    <li><a href="#">Submenu item </a></li>
                                                    <li><a href="#">Submenu item </a></li> --}}
                                                </ul>
                                            </div><!-- end col-3 -->
                                            <div class="col-lg-4 col-sm-12 col-md-12">
                                                <h6 class="title">Important Links</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Office of the Evaluation, Faculty
                                                            &
                                                            Curriculum Development (OEFCD) </a></li>
                                                    <li><a href="#">Office of the
                                                            International
                                                            Affairs </a></li>
                                                    <li><a href="https://internationalstudents.bup.edu.bd/">Internatonal
                                                            Students </a></li>
                                                    <li><a href="#">Institute of Quality Assurance
                                                            Cell
                                                            (IQAC) </a></li>
                                                    <li><a href="#">Counselling & Placement Center
                                                            (CPC)
                                                        </a></li>
                                                    <li><a href="#">Library </a>
                                                    </li>
                                                    <li><a href="#"> All Clubs </a></li>
                                                    <li><a href="#"> All Labs </a></li>
                                                    <li><a href="#">Academic Calender
                                                        </a>
                                                    </li>
                                                    <li><a href="https://forms.office.com/r/0VeZTuBMEZ"
                                                            target="_blank">Alumni</a></li>
                                                </ul>
                                            </div><!-- end col-3 -->
                                        </div><!-- end row -->
                                    </div> <!-- dropdown-large.// -->
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark  @if (request()->routeIs(['journal.list', 'journal_by_faculty'])) active @endif"
                                    href="#" data-bs-toggle="dropdown"> Research </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"> Centre for Higher
                                            Studies and Research (CHSR)</a></li>
                                    <li><a class="dropdown-item" href="https://bchair.bup.edu.bd/"> Bangabandhu Chair
                                        </a></li>
                                    {{-- <li><a class="dropdown-item" href="#"> Library Research Support </a></li> --}}
                                    <li><a class="dropdown-item" href="#"> BUP Journal </a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"> Faculty
                                            Arts and Social Sciences Inquest Jounal </a></li>
                                    <li><a class="dropdown-item" href="#"> Journal
                                            of Faculty of Science and Technology </a></li>
                                    <li><a class="dropdown-item" href="#"> Journal
                                            of Innovation in Business Studies </a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark @if (request()->routeIs('academics.programCategoryWiseProgramAdmission')) active @endif"
                                    href="#" data-bs-toggle="dropdown"> Admission </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="">
                                            Undergraduate Program </a></li>
                                    <li><a class="dropdown-item" href="">
                                            Graduate Program </a></li>
                                    <li><a class="dropdown-item" href="">
                                            Postgraduate Program </a></li>
                                    <li><a class="dropdown-item" href="">
                                            Certificate Courses </a></li>
                                </ul>
                            </li>

                            {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown"> On Campus  </a>
                                    <div class="dropdown-menu dropdown-large" style="left: -695px !important;">
                                        <div class="row g-3">
                                            <div class="col-lg-4 col-sm-12 col-md-12">
                                                <h6 class="title">Facilities</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="{{ route('office.office_details', 20) }}">Student Halls </a></li>
                                                    <li><a href="{{ route('office.office_details', 10) }}">Medical Centre </a></li>
                                                    <li><a href="{{ route('clubs.list') }}">Clubs </a></li>
                                                    <li><a href="{{ route('office.office_details', 33) }}">Counselling & Placement Center </a></li>
                                                    <li><a href="{{ route('scholarships_and_financial_aids') }}">Scholarships & Financial Aids </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-sm-12 col-md-12">
                                                <h6 class="title">Benefits</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="{{ route('office.office_details', 19) }}">Transport Facilities </a></li>
                                                    <li><a href="{{ route('office.office_details', 13) }}">Sports and Fitness </a></li>
                                                    <li><a href="{{ route('office.office_details', 9) }}">ICT Support </a></li>
                                                    <li><a href="{{ route('office.office_details', 11) }}">Library </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-sm-12 col-md-12">
                                                <h6 class="title">Services</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="https://alumni.bup.edu.bd/">Alumni Association </a></li>
                                                    <li><a href="{{ route('apply_for_certificate') }}">Download Certificate Form </a></li>
                                                    <li><a href="{{ route('apply_for_transcript') }}">Download Transcript Form </a></li>
                                                    <li><a href="https://convocation.bup.edu.bd/">Apply for Convocation </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}

                            <li class="nav-item dropdown">
                                <a class="nav-link text-dark @if (request()->routeIs('campus_life')) active @endif "
                                    href=""> On Campus </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark  @if (request()->routeIs(['news.all', 'events.all', 'notice.all'])) active @endif "
                                    href="#" data-bs-toggle="dropdown">
                                    Announcements
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href=""> News</a></li>
                                    <li><a class="dropdown-item" href=""> Events </a></li>
                                    <li><a class="dropdown-item" href=""> Notice </a></li>
                                    <li><a class="dropdown-item" href=""> Career </a></li>
                                    <li><a class="dropdown-item" href=""> Procurement </a>
                                    </li>
                                    <li><a class="dropdown-item" href=""> Results </a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark  @if (request()->routeIs(['journal.list', 'events.all', 'newsletter'])) active @endif "
                                    href="#" data-bs-toggle="dropdown">
                                    Publications
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href=""> Journal</a></li>
                                    <li><a class="dropdown-item" href=""> Magazine </a></li>
                                    <li><a class="dropdown-item" href=""> Newsletter
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-dark" href="#"> <i class="fas fa-search"></i> </a>
                            </li>
                        </ul>
                    </div> <!-- navbar-collapse.// -->
                </div>
                {{-- <a class="navbar-brand" href="#">Brand</a> --}}

                {{-- <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}"> --}}
                {{-- <span class="common-font-color fs-6 fw-bold mb-0 logo-title">BANGLADESH UNIVERSITY OF <br/>PROFESSIONALS</span> --}}
                {{-- </a> --}}

            </nav>

        </div>
        {{-- </div> --}}
    </div>


</div>


<script>
    $(function() {
        var href = "{{ url()->current() }}";
        var thisUrl = $('.dropdown-item[href="' + href + '"]');
        $(thisUrl).parents('.highlight-nav').find('.nav-bar-item-menu').css('borderBottom',
            '3px solid #006a4e');
        $(thisUrl).css('backgroundColor', '#006a4e').css('color', '#fff');
    });
</script>

<!-- ===== Header section end ===== -->
