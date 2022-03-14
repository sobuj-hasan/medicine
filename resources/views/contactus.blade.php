@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <!-- <form action="https://formsubmit.co/your@email.com" method="POST">
        <input type="text" name="name" required>
        <input type="email" name="email" required>
        <button type="submit">Send</button>
    </form> -->
    <!-- contact page start -->
    <div class="contactpage text-center">
        <div class="container">
        <form action="https://formsubmit.co/sexmedicinebdteam@gmail.com" method="POST">
            <input type="hidden" name="_subject" value="New User Querstions Wooo!">
            <input type="hidden" name="_captcha" value="false">
            <div class="col-lg-12">
            <h1>Get in Touch</h1>
            <div class="contact-box">
                <label for="">NAME</label>
                <input type="text" placeholder="" name="name" required>
            </div>
            <div class="contact-box">
                <label for="">EMAIL</label>
                <input type="email" name="email" placeholder="" required>
                <input type="hidden" name="_next" value="https://sexmedicinebd.com/form/submit">
            </div>
            <div class="contact-box">
                <label for="">PHONE NUMBER</label>
                <input type="text" placeholder="" name="phone" required>
            </div>
            <div class="contact-box">
                <label for="">MESSAGE</label>
                <textarea name="message" id="" cols="30" rows="10" name="message" required></textarea>
            </div>
            <button type="submit">SUBMIT</button>
            </div>
        </form>
        </div>
    </div>
    <!-- contact page end -->
@endsection