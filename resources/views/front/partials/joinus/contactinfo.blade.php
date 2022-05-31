<section class="contact-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-content">
                    <div class="contact-item">
                        <i class="fa fa-map-marker"></i>
                        <h4>Address Info</h4>
                        <p>{{ $contact[0]->adress }}</p>
                    </div>
                    <div class="contact-item">
                        <i class="fa fa-envelope-o"></i>
                        <h4>Email Info</h4>
                        <p>{{ $contact[0]->mail }}</p>
                    </div>
                    <div class="contact-item last-contact">
                        <i class="fa fa-phone"></i>
                        <h4>Phone Number</h4>
                        <p>{{ $contact[0]->phone }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>