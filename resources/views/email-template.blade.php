{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome in MagicShop !</div>
                  <div class="card-body"> --}}
                   {{-- @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           {{ __('A fresh mail has been sent to your email address.') }}
                       </div>
                   @endif --}}
                   {{-- {!! $content !!} --}}
                   {{-- <h1>Welcome anyone here at magicShop, u can sell anything u want from it , enjoy</h1> --}}
               {{-- </div>
           </div>
       </div>
   </div>
</div> --}}

<td class="esd-stripe" align="center">
    <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" align="center" style="background-color: transparent;">
        <tbody>
            <tr>
                <td class="esd-structure es-p25t es-p20b es-p25r es-p25l" align="left" bgcolor="#ffffff" style="background-color: #ffffff; border-radius: 0px 0px 15px 15px;">
                    <table width="100%" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td class="esd-container-frame" width="550" valign="top" align="center">
                                    <table width="100%" cellspacing="0" cellpadding="0">
                                        <tbody>
                                            @if (session('resent'))
                                                <div class="alert alert-success" role="alert">
                                            {{ __('A fresh mail has been sent to your email address.') }}
                                                </div>
                                            @endif
                                            <tr>
                                                <td align="center" class="esd-block-text es-p5b">
                                                    <h1>Dear Client!</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" class="esd-block-text es-p10t">
                                                    <p>We wanted to take a moment to express our sincere gratitude for subscribing to the MagicShop Website E_Commerce . Your interest and support mean the world to us, and we're thrilled to have you as part of our community.<br><br>By subscribing, you'll be the first to know about our latest product launches, exclusive offers, and exciting updates.</p>
                                                    <p><br></p>
                                                    <p>Whether you're looking for the perfect gift, staying up-to-date with the latest trends, or simply browsing for inspiration, we've got you covered.</p>
                                                    <p><br>At MagicShop, we're passionate about providing exceptional products and services that exceed your expectations. We're committed to delivering a seamless shopping experience and ensuring your satisfaction every step of the way.<br><br>Thank you again for joining us on this journey. We can't wait to share more magic with you soon!</p>
                                                    <p><br></p>
                                                    <p>Warm regards,</p>
                                                    <p>MagicShop Team</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" class="esd-block-text es-p15t">
                                                    <p style="color: #dc2a26;"><strong>magicshop.contact1@gmail.com</strong></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</td>
