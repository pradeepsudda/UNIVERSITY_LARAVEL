@extends('frontend.layouts.main')
@section('main-section')
<h1>Contact Us</h1>

    </section>

<!-------------------about our content------------------->

<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60474.152041183916!2d78.06065023926627!3d18.
                680390402804186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcddb27a9a89045%3A0x9f38c4351a
                15bbf2!2sNizamabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1660322982158!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
    </iframe>

</section>
<section class="contact-us">

    <div class="row">
        <div class="contact-col">

            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5> XYZ Road,ABC Building</h5>
                    <p>Nizamabad,Telangana,INDIA</p>
                </span>

            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>+91 8501093301</h5>
                    <p> Monday to Saturday , 10AM to 6PM</p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>rgukt123@gmail.com</h5>
                    <p>Email Us Your Query</p>
                </span>
            </div>

        </div>
        <div class="contact-col">

            <form action="/posting" method="post" autocomplete="off">
                @csrf
                <input type="text"  name="name" placeholder="Enter Your Name"> 
                <span style="color:red;">@error('name'){{$message}}@enderror<span>
                <input type="email" name="email" placeholder="Enter Your Email adress" >
                <span  style="color:red;">@error('email'){{$message}}@enderror<span>
                <input type="text"  name="subject" placeholder="Enter Your subject" >
                <span  style="color:red;">@error('subject'){{$message}}@enderror<span>

                <textarea rows="8"  name="message" placeholder="message"></textarea>
                <span  style="color:red;">@error('message'){{$message}}@enderror<span>

                <button type="submit" class="btn r-btn">Send Message</button>
            </form>

            

        </div>
    </div>
</section>
@endsection
<!----------------------- Footer -------------------->
