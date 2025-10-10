<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atse Seyfe Ared Health Center</title>
    <!-- framework CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <?php include __DIR__ . "/includes/head.php"; ?>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/font/all.min.css">


</head>

<body>
    <div class="d-block">
        <!-- reusable nav bar -->
        <?php include 'includes/nav.php'; ?>
        <!-- carousel -->
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                    class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                    class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"
                    class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"
                    class=""></button>
            </div>
            <div class="carousel-inner align-items-center">
                <div class="carousel-item active hero-section">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <h1 class="font-weight-bold">Welcome to Atse Seyfe Ared Health Center</h1>
                            <p class="opacity-75">We are committed to providing quality healthcare services for our
                                community.</p>
                            <p><a class="btn btn-lg btn-primary" href="login.php">Login</a></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item slidePage1">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <h1>Patient Management Services</h1>
                            <p>Efficient patient registration and records management</p>
                            <p><a class="btn btn-lg btn-primary" href="login.php">Login</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item hero-section slidePage2">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <h1>Emergency Health Care Services</h1>
                            <p class="opacity-75">24/7 access to immediate emergency care.</p>
                            <p><a class="btn btn-lg btn-primary" href="login.php">Login</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item hero-section slidePage3">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <h1>Laboratory Services</h1>
                            <p>Modernized laboratory testing and reporting
                            <p>
                            <p><a class="btn btn-lg btn-primary" href="login.php">Login</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item hero-section slidePage4">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <h1>Pharmacy</h1>
                            <p>Complete drug management and Pharmacy
                            <p>
                            <p><a class="btn btn-lg btn-primary" href="login.php">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- end carousel -->
    </div>

    <!-- Services Section -->
    <section class="py-5">

        <div class="container my-5">
            <h2 class="text-center mb-5">Our Services</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 text-center shadow-sm border-0">
                        <div class="card-body">
                            <div class="icon-wrapper"><i class="fa-solid fa-notes-medical"></i></div>
                            <h5 class="card-title">Patient Record Management</h5>
                            <p class="card-text">Securely store and access patient medical history, diagnoses, and
                                treatment plans in a centralized electronic system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 text-center shadow-sm border-0">
                        <div class="card-body">
                            <div class="icon-wrapper"><i class="fa-solid fa-calendar-check"></i></div>
                            <h5 class="card-title">Appointment Scheduling</h5>
                            <p class="card-text">Efficiently book, reschedule, and manage patient appointments to reduce
                                wait times and administrative load.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 text-center shadow-sm border-0">
                        <div class="card-body">
                            <div class="icon-wrapper"><i class="fa-solid fa-prescription-bottle-medical"></i></div>
                            <h5 class="card-title">Pharmacy Management</h5>
                            <p class="card-text">Track medication inventory, manage prescriptions, and automate drug
                                dispensing with real-time stock monitoring.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 text-center shadow-sm border-0">
                        <div class="card-body">
                            <div class="icon-wrapper"><i class="fa-solid fa-flask"></i></div>
                            <h5 class="card-title">Laboratory Management</h5>
                            <p class="card-text">Integrate laboratory tests, track samples, and deliver results directly
                                to the patient’s electronic record.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 text-center shadow-sm border-0">
                        <div class="card-body">
                            <div class="icon-wrapper"><i class="fa-solid fa-users-gear"></i></div>
                            <h5 class="card-title">HR and Staff Management</h5>
                            <p class="card-text">Manage employee records, scheduling, payroll, and performance
                                evaluations for the entire hospital staff.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 text-center shadow-sm border-0">
                        <div class="card-body">
                            <div class="icon-wrapper"><i class="fa-solid fa-chart-line"></i></div>
                            <h5 class="card-title">Reporting and Analytics</h5>
                            <p class="card-text">Generate comprehensive reports on hospital metrics, finances, and
                                patient trends for informed decision-making.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End of Services section -->
    </section>
    <!-- Footer -->
    <?php include __DIR__ . '/includes/footer.php'; ?>
    <!-- Bootstrap JS -->
</body>

</html>