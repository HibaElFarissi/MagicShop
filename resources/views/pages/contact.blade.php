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
            @forelse ($infos as $info)
            <p>{{ $info->title }}</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
              <div class="info-box mb-4">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>{{ $info->adresse }}</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <a href="mailto:{{ $info->email }}"><i class="bx bx-envelope"></i></a>
                <a href="mailto:{{ $info->email }}"><h3>Email Us</h3></a>
                <a href="mailto:{{ $info->email }}"><p>{{ $info->email }}</p></a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <a href="tel:{{ $info->phoneNumber }}"><i class="bx bx-phone-call"></i></a>
                    <a href="tel:{{ $info->phoneNumber }}"><h3>Call Us</h3></a>
                    <a href="tel:{{ $info->phoneNumber }}"><p>{{ $info->phoneNumber }}</p></a>
                </div>
            </div>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-6 ">
                <iframe class="mb-4 mb-lg-0" src="{{ $info->LinkIframeMap }}" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
        @empty
            <h3 class="text-black">There is no Data here yet...</h3>
        @endforelse


            {{-- ex --}}
            <div class="col-lg-6">
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
    </div>
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
