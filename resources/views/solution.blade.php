@extends('layouts.app') 

@section('content')
    <div class="container">
        <h1 class="text-center my-5 text-primary">Climate Change Solutions</h1>

        <!-- General Description -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="mb-4 text-success">Understanding the Importance of Action</h3>
                <p>
                    Climate change poses a significant threat to our planet. However, we believe that there are actionable solutions that individuals, businesses, and governments can implement to mitigate the effects of climate change. Below are some of the most effective solutions that can help us work towards a sustainable future.
                </p>
            </div>
        </div>

        <!-- Solutions -->
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <img src="{{ asset('image/medium-shot-engineer-drawing-plan-outdoors.jpg') }}" alt="Renewable Energy" class="card-img-top" />
                    <div class="card-body">
                        <h4 class="mb-3">Renewable Energy</h4>
                        <p>
                            Transitioning from fossil fuels to renewable energy sources, such as solar, wind, and hydropower, is one of the most impactful ways to reduce carbon emissions. Investing in clean energy technologies is crucial for reducing greenhouse gases and supporting a sustainable energy future.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <img src="{{ asset('image/light-bulb-with-miniature-house.jpg') }}" alt="Energy Efficiency" class="card-img-top" />
                    <div class="card-body">
                        <h4 class="mb-3">Energy Efficiency</h4>
                        <p>
                            Improving energy efficiency in homes, buildings, and industries can significantly reduce energy consumption and lower carbon emissions. Simple measures, like upgrading insulation or using energy-efficient appliances, can make a big difference in the fight against climate change.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <img src="{{ asset('image/sustainable agriculture.jpg') }}" alt="Sustainable Agriculture" class="card-img-top" />
                    <div class="card-body">
                        <h4 class="mb-3">Sustainable Agriculture</h4>
                        <p>
                            Shifting towards sustainable farming practices can reduce greenhouse gas emissions, enhance soil health, and conserve water resources. Organic farming, agroforestry, and regenerative agriculture are all great examples of sustainable practices that can help protect the planet.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <img src="{{ asset('image/beautiful-scenery-river-surrounded-by-greenery-forest.jpg') }}" alt="Conservation of Forests" class="card-img-top" />
                    <div class="card-body">
                        <h4 class="mb-3">Conservation of Forests</h4>
                        <p>
                            Forests play a critical role in absorbing carbon dioxide from the atmosphere. Protecting forests and reforesting degraded areas can help combat climate change by sequestering carbon and preserving biodiversity.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <img src="{{ asset('image/arrangement-finances-elements-graph.jpg') }}" alt="Circular Economy" class="card-img-top" />
                    <div class="card-body">
                        <h4 class="mb-3">Circular Economy</h4>
                        <p>
                            Adopting a circular economy approach can reduce waste, minimize resource extraction, and encourage recycling and reuse. This model helps conserve resources and reduce pollution, contributing to a more sustainable and environmentally-friendly future.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <img src="{{ asset('image/view-green-forest-trees-with-co2.jpg') }}" alt="Carbon Pricing" class="card-img-top" />
                    <div class="card-body">
                        <h4 class="mb-3">Carbon Pricing</h4>
                        <p>
                            Implementing carbon pricing mechanisms, such as carbon taxes or cap-and-trade systems, encourages companies to reduce their carbon emissions. By putting a price on carbon, we can incentivize cleaner practices and drive innovation in low-carbon technologies.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h3 class="mb-4 text-success">Take Action Today</h3>
                <p>
                    Every individual has a role to play in solving the climate crisis. Whether it's through reducing energy consumption, supporting sustainable businesses, or advocating for policy change, your actions can make a difference. Join us in our mission to combat climate change and protect our planet for future generations.
                </p>
                <a href="{{ route('donate') }}" class="btn btn-success btn-lg">Donate Now</a>
            </div>
        </div>
    </div>
@endsection
