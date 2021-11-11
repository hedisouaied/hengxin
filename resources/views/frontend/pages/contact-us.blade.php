@extends('frontend.layouts.master')

@section('content')


        <!-- START SECTION CONTACT US -->
        <section class="contact-us" style="padding-top: 10rem;">
            <div class="container">
                <div class="property-location mb-5">
                    <h3>Our Location</h3>
                    <div class="divider-fade"></div>
                    <div id="map-contact" class="contact-map"></div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h3 class="mb-4">Contact Us</h3>
                        <form class="contact-form" name="contactform" method="post" action="{{route('contact.submit')}}">
                            @csrf


                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" name="name" placeholder="Nom" value="{{old('name')}}">
                                @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" name="lastname" placeholder="Prénom" value="{{old('lastname')}}">
                                @error('lastname')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-custom input-full" name="email" placeholder="Email" value="{{old('email')}}">
                                @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-custom input-full" name="phone" placeholder="Numéro de télephone" value="{{old('phone')}}">
                                @error('phone')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-custom input-full" name="subject" placeholder="Sujet de message" value="{{old('subject')}}">
                                @error('subject')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="form-control textarea-custom input-full" id="ccomment" name="content" required rows="8" placeholder="Message">{{old('content')}}</textarea>

                            </div>
                            <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-12 bgc">
                        <div class="call-info">
                            <h3>détails du contact</h3>
                            <p class="mb-5">Veuillez trouver les coordonnées ci-dessous et contactez-nous maintenant!</p>
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">{{get_setting('Address')}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">{{get_setting('phone')}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">{{get_setting('email')}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info cll">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <p class="in-p ti">{{get_setting('open_time')}}H - {{get_setting('close_time')}}H</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION CONTACT US -->

@endsection

@section('scripts')
@if(session()->has('success'))

<script>
 $(document).ready(function () {
alertify.set('notifier','position','bottom-left');
alertify.success('{{session()->get('success')}}');
 });
</script>
@endif
@endsection
