<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
    <ul class="nav flex-column">
        <li class="nav-item">
        <a class="nav-link active" href="{{url('admin')}}">
            <span data-feather=""></span>
            Ajayi's Dashboard <span class="sr-only">(current)</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('details')}}">
            <span data-feather="file"></span>
            Personal details
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('place_of_work')}}">
            <span data-feather="shopping-cart"></span>
            Previous/Present work place
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('languages')}}">
            <span data-feather="users"></span>
            Languages spoken 
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('interests')}}">
            <span data-feather="bar-chart-2"></span>
            Interests/Hobbies
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('references')}}">
            <span data-feather="layers"></span>
            References
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('images')}}">
            <span data-feather="layers"></span>
            Images
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('pdf')}}">
            <span data-feather="layers"></span>
            Pdf
        </a>
        </li>
        <hr class="my-5 border border-2 border-dark">
        <li class="nav-item">
        <a class="nav-link" href="{{route('contacts')}}">
            <span data-feather="layers"></span>
            Contacts
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">
            <span data-feather="layers"></span>
            Visit site
        </a>
        </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>I will think of more things to put</span>
        <a class="d-flex align-items-center text-muted" href="#">
        <span data-feather="plus-circle"></span>
        </a>
    </h6>
    </div>
</nav>