@extends('layouts.app') 
@section('content')
    <div class="container">
        <h1 class="text-center my-5 text-primary">Contact Us</h1>

        <!-- Contact Information -->
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-4 text-success">Our Contact Information</h3>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="fas fa-phone-alt"></i> 
                        <strong>Phone:</strong> +1 234 567 890
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-envelope"></i> 
                        <strong>Email:</strong> info@climatechange.org
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-map-marker-alt"></i> 
                        <strong>Address:</strong> 123 Green Street, Eco City, Planet Earth
                    </li>
                </ul>
            </div>

            <!-- Contact Form -->
            <div class="col-md-6">
                <h3 class="mb-4 text-success">Send Us a Message</h3>

                <!-- Form to send a message -->
                <form action="{{ route('contact.submit') }}" method="POST" class="shadow p-4 rounded bg-light">
                    @csrf 

                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>

        <!-- Map Section -->
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h3 class="mb-4 text-success">Find Us Here</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345095955!2d144.9537353153166!3d-37.8162799797518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11c9e7%3A0x5045675218cee80!2sEco%20City%20Green%20Street%20123%2C%20Melbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sus!4v1616161616161!5m2!1sen!2sus"
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection
