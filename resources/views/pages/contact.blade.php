@extends('layouts.base')
@section('content')
@section('title','Contact Page')
@include('sweetalert::alert')


      <!-- ======= Contact Section ======= -->
      <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Contact
                </div>
            </div>
        </div>

      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-title">

            <h3><span>Contact Us</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
              <div class="info-box mb-4">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>

          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-6 ">
              <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>



            {{-- ex --}}
            <form action="{{ route('contact.store') }}" class="contact100-form validate-form" method="post">
                @csrf
                <br>
                <br>
              <div class="row">
                <div class="col-md-6 form-group">
                     @csrf
                        @if(session()->has('message'))
                                <div class="alert alert-success">
                                     {{ session()->get('message') }}
                                </div>
                        @endif
                    <input type="text" name="name"  type="text" class="form-control" name="name"  placeholder="Your Name" data-validate = "Name is required">
                </div>

                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                   @error('name')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>

              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control "  name="subject" placeholder="Subject"  data-validate = "Subject is required">
                            @error('subject')
                                 <span class="text-danger"> {{ $message }} </span>
                            @enderror
              </div>


              {{-- <input type="text" name="message"> --}}

              <div class="form-group mt-3">
               <textarea class="form-control" name="message" rows="5" placeholder="Message"  data-validate = "Message is required"></textarea>
                        @error('message')
                           <span class="text-danger"> {{ $message }} </span>
                        @enderror
              </div>

              <div class="my-3">

              </div>

              <div class="php-email-form">
                <button type="submit">Send Message</button>
            </div>

            </form>
            {{-- Contact  Us --}}
            {{-- <div class="col-lg-6">
              <form action="" method="post" role="form" class="php-email-form">
                @csrf
                <div class="row">
                  <div class="col form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="content" rows="5" placeholder="Message" required></textarea>
                </div>

              <div class="text-center"><button type="submit">Send Message</button></div>
              {{-- <input type="submit" value="Send Message"> --}}
              </form>
            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->
    </main><!-- End #main -->
    <br><br>

       {{-- <div class="container">
          <div class="content">
              <div class="image-box">
                  <img src="images/contact-advise.svg" alt="" />
                  <img src="images/MagicShop.svg" alt="" />
                </div>
                <form action="#">
            <h1>Contact Us</h1>

          <div class="input-box">
            <input type="text" required />
            <label>Enter your name</label>
          </div>
          <div class="input-box">
            <input type="text" required />
            <label>Enter your email</label>
          </div>
          <div class="message-box">
            <textarea></textarea>
            <label>Enter your message</label>
          </div>
          <div class="input-box">
            <input type="submit" value="Send Message" />
          </div>
        </form>
      </div>
    </div> --}}

      <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-e180f630-013d-456d-9e9c-159256b03185" data-elfsight-app-lazy></div>

@endsection
