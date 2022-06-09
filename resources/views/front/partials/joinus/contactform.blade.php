<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="location-contact">
                    <div class="widget-heading">
                        <h4>Location Map</h4>
                    </div>
                    <div class="content-map">
                        <div id="map">
                            <iframe width="450" height="350" id="gmap_canvas"
                                src="https://maps.google.com/maps?q={{ $contact[0]->adress }}&t=&z=17&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="message-form">
                    <div class="widget-heading">
                        <h4>Contact Us</h4>
                    </div>
                    @if (session()->has('message'))
                        <div class='alert alert-success'>
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class='alert alert-danger'>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="message-content">
                        <form action="{{ Route('contactforms.store') }}" method='POST'>
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="name" name="" placeholder="Full Name" value="">
                                </div>
                                <div class="col-md-6" style='display:none !important'>
                                    <input type="text" id="name" name="to" placeholder="" value="Administrateur">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="address" name="from" placeholder="E-mail Address" value="">
                                </div>
                                <div class="col-md-12">
                                    <textarea id="message" class="message" name="content" placeholder="Write message"></textarea>
                                </div>
                            </div>
                            <div class="accent-button">
                                <button type="submit" style='border: none !important;'>Submit Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
