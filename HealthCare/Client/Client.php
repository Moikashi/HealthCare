<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
    }

    .hero {
        background: url('barangay28.jpg') no-repeat center center/cover;
        color: #fff;
        text-align: center;
        height: 100vh;
    }

    .schedule-card {
        border: none;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .schedule-card:hover {
        transform: translateY(-5px);
    }

    section#about {
        height: 100vh;
        padding: 80px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
        text-align: left;
    }

    section#schedule {
        height: 100vh;
        padding: 80px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
        text-align: left;
    }

    section#featured {
        height: 100vh;
        padding: 80px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
        text-align: left;
    }

    section#Contact-section {
        height: 100vh;
        padding: 80px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
        text-align: left;
    }

    .aboutparagraph {
        font-size: 30px;
    }
</style>

<body>
    <?php include '../Navbar/Navbar.html'; ?>

    <!-- Hero Section -->
    <section class="hero d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <h1>Welcome to Barangay Health Care System</h1>
            <p>Your trusted partner for healthcare reservations and monitoring.</p>
            <a href="#about" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="About-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2>About Us</h2>
                <p>Providing efficient healthcare services for your community.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="barangay28.jpg" class="img-fluid rounded" alt="About Image">
                </div>
                <div class="col-md-6">
                    <p class="aboutparagraph">
                        Our barangay health care system ensures timely and organized health services for residents.
                        Book your appointments, monitor your health records, and stay connected with our dedicated team.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule Section -->
    <section id="schedule" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Schedule</h2>
                <p>Plan and manage your health appointments seamlessly.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card schedule-card">
                        <div class="card-body">
                            <h5 class="card-title">General Check-up</h5>
                            <p class="card-text">Monday - Friday: 8:00 AM - 5:00 PM</p>
                            <button class="btn btn-primary mt-3" onclick="makeAppointment('General Check-up')">Book Appointment</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card schedule-card">
                        <div class="card-body">
                            <h5 class="card-title">Vaccination</h5>
                            <p class="card-text">Wednesday & Saturday: 9:00 AM - 4:00 PM</p>
                            <button class="btn btn-primary mt-3" onclick="makeAppointment('General Check-up')">Book Appointment</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card schedule-card">
                        <div class="card-body">
                            <h5 class="card-title">Dental Services</h5>
                            <p class="card-text">Tuesday & Thursday: 10:00 AM - 3:00 PM</p>
                            <button class="btn btn-primary mt-3" onclick="makeAppointment('General Check-up')">Book Appointment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Section -->
    <section id="featured" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Featured Services</h2>
                <p>Explore our special healthcare programs and services.</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="6.jpg" class="img-fluid rounded mb-3" alt="Feature">
                    <h5>Maternal Health Care</h5>
                    <p>Comprehensive services for expectant mothers and newborns.</p>
                </div>
                <div class="col-md-4">
                    <img src="2.jpg" class="img-fluid rounded mb-3" alt="Feature">
                    <h5>Child Immunization</h5>
                    <p>Essential vaccines to protect your children from diseases.</p>
                </div>
                <div class="col-md-4">
                    <img src="4.jpg" class="img-fluid rounded mb-3" alt="Feature">
                    <h5>Health Seminars</h5>
                    <p>Educational sessions to promote healthy living habits.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="Contact-section" class="contact-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold contact-us-section">Get in Touch 📞</h2>
                <p class="text-muted contact-us-section">We'd love to hear from you. Reach out to us for inquiries
                    or support.</p>
            </div>
            <div class="row g-4">
                <!-- Contact Info -->
                <div class="col-md-6">
                    <div class="p-4 rounded shadow bg-white contact-us-section">
                        <div class="d-flex mb-4">
                            <i class="bi bi-geo-alt-fill fs-3 text-primary me-3"></i>
                            <div>
                                <h5 class="fw-bold">Address</h5>
                                <p>28, 72 Marcella St, Maypajo, Caloocan, Metro Manila</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <i class="bi bi-telephone-fill fs-3 text-primary me-3"></i>
                            <div>
                                <h5 class="fw-bold">Call Us</h5>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-envelope-fill fs-3 text-primary me-3"></i>
                            <div>
                                <h5 class="fw-bold">Email Us</h5>
                                <p>Barangay28HealthCare@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="col-md-6">
                    <div class="p-4 rounded shadow contact-us-section" style="border:1px solid black;">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" style="border:1px solid black;"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" style="border:1px solid black;"
                                    placeholder="Your Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" style="border:1px solid black;"
                                    placeholder="Subject" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="5" style="border:1px solid black;"
                                    placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" id="Messagebtn" class="btn btn-primary w-100">Send
                                Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="py-4 mt-5" style="background-color: #37517E;">
        <div class="container text-white text-center">
            <p>&copy; 2024 Company, Inc</p>
            <div>
                <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>

<script>
    // Appointment button functionality
    function makeAppointment(service) {
        Swal.fire({
            title: 'Appointment Booking',
            text: `You are booking an appointment for ${service}.`,
            icon: 'info',
            showCancelButton: true,
            confirmButtonText: 'Proceed',
            cancelButtonText: 'Cancel',
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire('Success!', `Your appointment for ${service} has been scheduled.`, 'success');
            }
        });
    }
</script>