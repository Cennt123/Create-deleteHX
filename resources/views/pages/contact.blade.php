@extends('templates.base')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Contact Us</h1>
        <p class="text-gray-700 mb-6">
            We would love to hear from you! Whether you have a question about our products, need assistance, or just want to provide feedback, feel free to get in touch with us.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Our Office</h2>
                <p class="text-gray-700 mb-4">
                    1234 Main Street<br>
                    Anytown, USA 12345
                </p>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Office Hours</h3>
                <p class="text-gray-700">
                    Monday - Friday: 9:00 AM - 5:00 PM<br>
                    Saturday - Sunday: Closed
                </p>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Contact Information</h2>
                <p class="text-gray-700 mb-4">
                    Phone: (123) 456-7890<br>
                    Email: <a href="mailto:info@mycompany.com" class="text-blue-500 hover:underline">info@mycompany.com</a>
                </p>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Follow Us</h3>
                <p class="text-gray-700">
                    <a href="#" class="text-blue-500 hover:underline">Facebook</a> |
                    <a href="#" class="text-blue-500 hover:underline">Twitter</a> |
                    <a href="#" class="text-blue-500 hover:underline">LinkedIn</a>
                </p>
            </div>
        </div>
        <div class="mt-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Send Us a Message</h2>
            <form action="/submit-contact" method="POST" class="grid grid-cols-1 gap-6">
                @csrf
                <div>
                    <label for="name" class="block text-gray-700 font-semibold">Name</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-semibold">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="message" class="block text-gray-700 font-semibold">Message</label>
                    <textarea id="message" name="message" rows="6" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-blue-700 transition duration-300">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
