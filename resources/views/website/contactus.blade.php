@extends('website_layouts.master')

@section('title', '')


@section('css')
@endsection



@section('content')


    <!-- header section end -->
    <!-- layout main section start -->
    <div class="container-fluid">
        <div class="layout_main">
            <!-- layout main section start -->
            <div class="container-fluid">

                <!-- banner section end -->
                <!-- contact section start -->
                <div class="contact_section">
                    <div class="container">
                        <div class="contact_section_2" style="background-color: #2c3a55">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="contact_taital">Get In Touch</h1>
                                    <form action="{{ route('contact.store') }}" method="post">
                                        @csrf
                                        <div class="mail_section_1">
                                            <input type="text" class="mail_text" placeholder="Name" name="name">
                                            <input type="text" class="mail_text" placeholder="Email" name="email">
                                            <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="message"></textarea>
                                            {{-- <div class="send_bt"><a href="#">SEND</a></div> --}}
                                            {{-- <button class="send_bt" type="submit">SEND</button> --}}
                                            <button type="submit" class="send_bt"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    height="18" viewBox="0 0 18 18" class="svg replaced-svg">
                                                    <path id="Union_3" data-name="Union 3"
                                                        d="M.973,18A.98.98,0,0,1,0,17.013V16.9a1.009,1.009,0,0,1,.009-.134.993.993,0,0,1,.065-.243c.012-.031.025-.061.037-.092.117-.331.217-.667.335-1a7.091,7.091,0,0,0,.25-.76c.064-.273-.144-.486-.218-.729a5.768,5.768,0,0,1,.008-3.563,5.3,5.3,0,0,1,.869-1.64Q2.58,15.446,9.2,16.588a5.289,5.289,0,0,1-1.673.924,5.529,5.529,0,0,1-3.546,0L3.938,17.5a.665.665,0,0,1-.1-.049,1.051,1.051,0,0,0-1-.008c-.27.113-.546.21-.824.3-.172.058-.344.116-.512.184A.975.975,0,0,1,1.136,18Zm15.758-2.167a1.413,1.413,0,0,1-.374-.092c-.936-.326-1.872-.65-2.807-.979a.378.378,0,0,0-.3.012,7.351,7.351,0,0,1-7.949-.98,7.332,7.332,0,0,1-2.806-5A7.62,7.62,0,0,1,7.122.635a7.253,7.253,0,0,1,7.9,1.293A7.428,7.428,0,0,1,17.531,6.3a6.842,6.842,0,0,1,.135,1.329,7.848,7.848,0,0,1-.694,3.359.438.438,0,0,0-.019.354q.493,1.429.974,2.862a1.191,1.191,0,0,1-1.11,1.633ZM6.885,9.36a.544.544,0,0,0-.542.347.534.534,0,0,0,.5.733c.658.008,1.316,0,1.974,0h0c.629,0,1.257,0,1.886,0a.545.545,0,1,0,.006-1.083c-.37,0-.74,0-1.11,0H6.885ZM6.871,7.116a.543.543,0,0,0-.518.763.574.574,0,0,0,.592.331q3.1,0,6.2,0a1.047,1.047,0,0,0,.21-.02.53.53,0,0,0,.423-.52.548.548,0,0,0-.6-.554q-1.568,0-3.137,0H7.379C7.21,7.112,7.04,7.113,6.871,7.116ZM12,5.966c.417,0,.833,0,1.25,0a.536.536,0,0,0,.529-.457.545.545,0,0,0-.347-.6.835.835,0,0,0-.3-.035H6.948a1.133,1.133,0,0,0-.193.013.5.5,0,0,0-.418.362.539.539,0,0,0,.548.714q1.119,0,2.238,0H12Z"
                                                        fill="#fff"></path>
                                                </svg> Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- contact section end -->

            </div>
        </div>
        <!-- layout main section end -->


    @endsection

    @section('scripts')
        <!-- Javascript files-->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/plugin.js"></script>
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- javascript -->
        <script src="js/owl.carousel.js"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "100%";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
    @endsection
