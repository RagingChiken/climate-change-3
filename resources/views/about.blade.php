@extends('layouts.app') 

@section('content')
    <div class="container">
        <h1 class="text-center my-5 text-primary">About Us</h1>

        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4 text-success">Our Mission</h2>
                <p>
                    Our mission is to raise awareness about climate change and its impact on our planet. We aim to inspire individuals and communities to take action toward a sustainable and eco-friendly future.
                </p>
            </div>

            <div class="col-md-6">
                <h2 class="mb-4 text-success">Our Vision</h2>
                <p>
                    We envision a world where every person is aware of their environmental footprint and actively works to reduce it. Our goal is to create a global movement of change toward a cleaner, greener planet.
                </p>
            </div>
        </div>

        <!-- Background Section -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="mb-4 text-success">Background</h2>
                <p>
                    Climate change is one of the most pressing issues of our time. The increasing emissions of greenhouse gases, deforestation, and pollution have caused rapid changes in global climate patterns. It is essential to take immediate action to mitigate its effects and reduce global warming.
                </p>
                <p>
                    Our organization started as a small group of activists and environmentalists who wanted to make a difference in tackling the global climate crisis. Since then, we have been actively working with local communities, policymakers, and organizations to raise awareness and implement practical solutions.
                </p>
            </div>
        </div>

        <!-- Team Section -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="mb-4 text-success">Our Team</h2>
                <p>
                    Our team consists of passionate individuals from various backgrounds including environmental science, policy making, community outreach, and more. Together, we are dedicated to creating impactful solutions for a sustainable future.
                </p>
                <div class="row">
                    <!-- Team Member 1 -->
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <h5 class="card-title">Made Ardhya Bayu Merada</h5>
                                <p class="card-text">Environmental Scientist</p>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <h5 class="card-title">Kenneth Raydeon Suhandi</h5>
                                <p class="card-text">Policy Maker</p>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <h5 class="card-title">Ireneus Nicky Sudjana</h5>
                                <p class="card-text">Community Outreach Coordinator</p>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 4 -->
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <h5 class="card-title">Gabriela Quina Dinata</h5>
                                <p class="card-text">Sustainability Consultant</p>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 5 -->
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <h5 class="card-title">Jason Wiryanatha Sunarto</h5>
                                <p class="card-text">Climate Policy Advocate</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Call to Action Button -->
                <div class="text-center mt-4">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Join Us in Making a Difference!</a>
                </div>
            </div>
        </div>
    </div>

   
    @section('footer')
        <footer style="background-color: #007bff; color: white; padding: 20px; text-align: center;">
            &copy; {{ date('Y') }} Climate Change Awareness. All rights reserved.
        </footer> 
    @endsection 
    
@endsection
