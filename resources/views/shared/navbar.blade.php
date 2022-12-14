<!-- Navbar Start -->
<div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="{{route('index')}}" class="navbar-brand">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>Fonoaudiología</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{route('index')}}" class="nav-item nav-link  {{request()->route()->getName() == 'index' ? 'active' : ''}}">Inicio</a>
                    <a href="{{route('about')}}" class="nav-item nav-link {{request()->route()->getName() == 'about' ? 'active' : ''}}">Acerca de</a>
                    <a href="{{route('service')}}" class="nav-item nav-link {{request()->route()->getName() == 'service' ? 'active' : ''}}">Servicios</a>
                    <a href="{{route('price')}}" class="nav-item nav-link" {{request()->route()->getName() == 'price' ? 'active' : ''}}>Precios</a>
{{--                    <div class="nav-item dropdown">--}}
{{--                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>--}}
{{--                        <div class="dropdown-menu m-0">--}}
{{--                            <a href="blog.html" class="dropdown-item">Blog Grid</a>--}}
{{--                            <a href="detail.html" class="dropdown-item">Blog Detail</a>--}}
{{--                            <a href="team.html" class="dropdown-item">The Team</a>--}}
{{--                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>--}}
{{--                            <a href="appointment.html" class="dropdown-item">Appointment</a>--}}
{{--                            <a href="search.html" class="dropdown-item">Search</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <a href="{{route('contact')}}" class="nav-item nav-link" {{request()->route()->getName() == 'contact' ? 'active' : ''}}>Contacto</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
