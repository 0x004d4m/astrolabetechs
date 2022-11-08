<!--============================== Contact Form Area ==============================-->
<section class=" pt-20 space-bottom" id="contact_form">
    <div class="container">
        <div class="row gx-60 align-items-center">
            <div class="col-lg-5">
                <img src="assets/img/about/contact_us.png" alt="Contact Us">
            </div>
            <div class="col-lg-7 pt-5 pt-xl-0">
                <form action="/contact" method="POST">
                    @csrf
                    <span class="sec-subtitle">For Any Query</span>
                    <h2 class="sec-title mb-4 pb-2">Send Us a Message</h2>
                    <div class="row gx-20">
                        @if(Session::has('success'))
                            <script>
                                alert('{{Session::get('success')}}');
                            </script>
                        @endif
                        <div class="col-md-6 form-group">
                            <input type="text" placeholder="Your Name" name="name" id="name" required class="form-control style4">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" placeholder="Your Email" name="email" id="email" required class="form-control style4">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="number" placeholder="+00 (000) 000-00-00-000">
                        </div>
                        <div class="col-md-6 form-group">
                            <select class="form-select style4" name="subject" id="subject" required>
                                <option hidden selected>Service Cateory</option>
                                <option value="Web-Development">Web Development</option>
                                <option value="User Interface Design">User Interface Design</option>
                                <option value="Web Conversion">Web Conversion</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Business Consultations">Business Consultations</option>
                                <option value="Others Facility">Others Facility</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <textarea placeholder="Message" name="message" id="message" required class="form-control style4"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="vs-btn" type="submit">Submit Now</button>
                        </div>
                    </div>
                </form>
                <p class="form-messages mb-0 mt-3"></p>
            </div>
        </div>
    </div>
</section>
@section('scripts')
    <script>
        document.querySelector('[name="number"]')
            .addEventListener('input', function (e) {
                var x = e.target.value.replace(/\D/g, '')
                    .match(/(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})(\d{0,3})/);

                if (!x[1]) {
                    e.target.value = '+';

                    return;
                }

                if (!x[2]) {
                    e.target.value = `+${x[1]}`;

                    return;
                }

                e.target.value = `+${x[1]} (${x[2]}`
                    + ( x[3] ? `) ${x[3]}` : '' )
                    + ( x[4] ? `-${x[4]}` : '' )
                    + ( x[5] ? `-${x[5]}` : '' )
                    + ( x[6] ? `-${x[6]}` : '' );
            });
    </script>
@endsection
