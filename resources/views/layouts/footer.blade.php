

<!-- ======= footer  ======= -->
<footer class="main">
    <section class="newsletter p-30 text-black wow fadeIn animated">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-md-3 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col flex-horizontal-center">
                            <img class="icon-email" src="frontEnd/imgs/theme/icons/icon-email.svg" alt="">
                            <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- Subscribe Form -->
                    <form action="{{ route('send.email') }}"  method="POST" class="form-subcriber d-flex wow fadeIn animated">
                        @csrf
                        <input type="email" name="email" class="form-control bg-white font-small" placeholder="Enter your email" >
                        <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                    </form>
                    <!-- End Subscribe Form -->
                </div>
            </div>
        </div>
    </section>



<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3 class="whlogo">MagicShop<span>.</span></h3>
          @forelse ($infos as $info)
            <p>
                {{ $info->adresse }}
                <br><br>
                <strong>Phone:</strong><a href="tel:{{ $info->phoneNumber }}"> &nbsp;  <br>{{ $info->phoneNumber }}</a><br>
                <strong>Email:</strong><a href="mailto:{{ $info->email }}">&nbsp; <br> {{ $info->email }}</a>
            </p>
        @empty
            <p>There is no Data here yet...</p>
        @endforelse
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="/shop">Shop</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact.create') }}">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Blog</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('blog') }}">Blog Category</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('shop') }}">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact.create') }}">Site Map</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Social Networks</h4>
          <p class="">Discover the magic beyond our products – follow us on social networks for daily enchantment and exclusive updates – </p>
          <div class="social-links mt-3">
            @foreach ($infos as $item)
                <a href="{{ $item->twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{ $item->facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{ $item->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
            @endforeach

          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>MagicShop</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="{{ route('contact.create') }}">HIBA EL FARISSI</a>
        </div>
  </div>
</footer>
