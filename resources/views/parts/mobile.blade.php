<!-- Make sure to include the required Bootstrap CSS and JS files -->

<div class="d-block d-lg-none">
    <nav class="navbar nav-mobile navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="/" class="d-flex align-items-center text-dark" >
                <img src="/assets/media/logos/VMS Logo.svg" alt="Logo" class="logo me-2" style="width: 21px">
                    Vehicle Maintenance System
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/list-maintenance">Maintenances</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/vehicles">Vehicles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/spareparts">Spareparts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/history">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/weightproduct">Weight Product</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<style>
    /* Optional custom styling */
    .navbar.nav-mobile {
        background-color: #f8f9fa;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
        font-weight: bold;
        color: #333;
    }

    .navbar-toggler {
        border: none;
    }

    .navbar-nav .nav-link {
        color: #333;
    }

    .navbar-nav .nav-link:hover {
        color: #007bff;
    }

    .navbar-collapse {
        justify-content: flex-end;
    }

    /* Optional media query to adjust spacing on smaller screens */
    @media (max-width: 576px) {
        .navbar-nav {
            margin: 0;
        }
        .navbar-nav .nav-item {
            margin-bottom: 10px;
        }
    }
</style>
    <!-- Bootstrap JS (Optional if you don't need the dropdowns) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script> --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Make sure to include the necessary Bootstrap JS files and initialize the collapse functionality -->
