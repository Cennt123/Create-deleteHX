@extends('templates.base')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to My Company</h1>
        <p class="text-gray-700 mb-6">
            At My Company, we are committed to delivering top-notch products and services that meet the diverse needs of our customers. Our dedication to quality and innovation drives us to constantly improve and expand our offerings.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Our Products</h2>
                <p class="text-gray-700 mb-4">
                    Discover a wide range of products that are designed to meet the highest standards of quality and performance. Whether you are looking for the latest innovations or trusted classics, we have something for everyone.
                </p>
                <a href="/product" class="text-blue-500 hover:underline">Explore our products</a>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">About Us</h2>
                <p class="text-gray-700 mb-4">
                    Learn more about our company's history, mission, and the values that guide us. Our commitment to excellence and customer satisfaction is at the core of everything we do.
                </p>
                <a href="/about" class="text-blue-500 hover:underline">Read more about us</a>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Customer Reviews</h2>
                <p class="text-gray-700 mb-4">
                    Hear from our satisfied customers and find out why they trust us for their needs. We are proud to share the positive experiences of those who have chosen our products and services.
                </p>
                <a href="/reviews" class="text-blue-500 hover:underline">Read customer reviews</a>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Contact Us</h2>
                <p class="text-gray-700 mb-4">
                    Have questions or need assistance? Our team is here to help. Get in touch with us today and let us know how we can assist you.
                </p>
                <a href="/contact" class="text-blue-500 hover:underline">Contact us</a>
            </div>
        </div>
    </div>
</div>
@endsection
