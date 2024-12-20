@extends('layout.layout')

@section('title', 'Support - HopeAid')

@section('content')

<div class="container" style="padding-top: 3%">
    <h2 class="d-flex justify-content-center mb-4 fw-bold fst-italic">Support Page</h2>
        <div class="d-flex justify-content-center mb-3">
            <div class="card" style="width: 18rem;">
                <img src="image/FAQ.jpg" class="card-img-top" height="190">
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center fw-bold">FAQ</h2>
                    <h5 class="card-text d-flex justify-content-center">Welcome to our FAQ page!</h5>
                    <p>Here, you'll find answers to the most common questions about our products, services, and policies. We've organized this section to help you quickly find the information you need. If you don't see your question listed, feel free to contact us for further assistance. We're here to help!</p>
                    <a href="/support/FAQ" class="btn btn-primary d-flex justify-content-center">Learn More</a>
                </div>
            </div>

            {{-- <div class="card" style="width: 18rem;">
                <img src="image/Get_Contact.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h2 class="card-title d-flex justify-content-center fw-bold">Get Contact</h2>
                  <h5 class="card-text d-flex justify-content-center">Need to get in touch with us?</h5>
                    <p>Visit our Contact Us page for all the ways you can reach us! Whether you have a question, need support, or just want to share feedback, we're here to help. You can find our email, phone number, and a contact form for your convenience. Don't hesitate to reach out!</p>
                  <a href="#" class="btn btn-primary d-flex justify-content-center">Contact Us</a>
                </div>
            </div> --}}
        </div>
        <div class="align-items-center">
            <p>Universitas Bina Nusantara</p>
            <p>Jl. K. H. Syahdan No. 9, Kemanggisan, Palmerah Jakarta 11480 Indonesia</p>
            <p>Phone: +62 21 534 5830, +62 21 535 0660 Fax +62 21 530 0244</p>
            <p>Email: b</p>
        </div>
</div>

@endsection


