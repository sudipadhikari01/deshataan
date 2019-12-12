@include('frontend.layouts.pageTemplate')
@section('content');
	<!--====== LOCATON ==========-->
	<section>
		<div class="rows contact-map map-container">
			{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005" allowfullscreen></iframe> --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d441.4673366817734!2d85.32257776064357!3d27.725353177144378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd0d150a470c839!2sLaxmi%20Heights!5e0!3m2!1sen!2snp!4v1576130871849!5m2!1sen!2snp" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
	</section>
	<!--====== QUICK ENQUIRY FORM ==========-->
	<section>
		<div class="form form-spac rows con-page">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title col-md-12">
					<h2><span>Contact us</span></h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
				</div>

		<div class="pg-contact">
                        {{-- <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1">
                            <h2>The <span>Travel</span></h2>
                            <p>We Provide Outsourced Software Development Services To Over 50 Clients From 21 Countries.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1"> <img src="img/contact/1.html" alt="">
                            <h4>Address</h4>
                            <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.
                                <br>Landmark : Next To Airport</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con3"> <img src="img/contact/2.html" alt="">
                            <h4>CONTACT INFO:</h4>
                            <p> <a href="tel://0099999999" class="contact-icon">Phone: 01 234874 965478</a>
                                <br> <a href="tel://0099999999" class="contact-icon">Mobile: 01 654874 965478</a>
                                <br> <a href="mailto:mytestmail@gmail.com" class="contact-icon">Email: info@company.com</a> </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con4"> <img src="img/contact/3.html" alt="">
                            <h4>Website</h4>
                            <p> <a href="#">Website: www.mycompany.com</a>
                                <br> <a href="#">Facebook: www.facebook/my</a>
                                <br> <a href="#">Blog: www.blog.mycompany.com</a> </p>
                        </div> --}}
                        <form id="send-email">
                          {{ csrf_field() }}
                            <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" autofocus="">
                                      </div>
                                  
                                  
                                      <div class="form-group form_left">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                                      </div>
                                  
                                    <div class="form-group">
                                         <input type="text" class="form-control" id="phone" name="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Mobile No." required="">
                                    </div>
                                    <div class="form-group">
                                    <textarea class="form-control textarea-contact" rows="5" id="message" name="message" placeholder="Type Your Message here..." required=""></textarea>
                                    <br>
                                      <button class="btn btn-default btn-send" id="submit"> <span class="fa fa-send"></span> Send Feedback</button>
                                    </div>
                        </form>
                    </div>				
			</div>
		</div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.js"></script>
  <script >

    //For get event Form Feedback on submit
		$('#send-email').on('submit', function(event){
			event.preventDefault();
			var formData = new FormData(this);
			
			//Ajax Send Request
			$.ajax({
				url: '{{ route('sendEmail') }}', //Name Api Route
				method: 'POST', //Method Request
				data: formData, 
				cache:false, 
				contentType: false, 
				processData: false, 
				beforeSend:function() {
					$('#submit').attr('disabled', 'disabled');
					$('#submit').html('SENDING...');
				},
				success:function(data) {
					$('#submit').attr('disabled', false);
					$('#submit').html('SEND FEEDBACK');
					$('#send-email')[0].reset();
					
					//Json Parse for Response of Request
					data = JSON.parse(data);
					
					//If response message success
					if (data.message == "success") {
						
						//Show Sweet Alert Success
						Swal.fire({
						  type: 'success',
						  title: 'Success!',
						  text: 'Your FeedBack Has Been Sent!'
						});
					
					//If response message failed
					} else if (data.message == "failed") {
					
						//Show Sweet Alert Error
						Swal.fire({
						  type: 'error',
						  title: 'Opps...!',
						  text: 'Something Wrong Has Happened!'
						});
					} else {
						
						//Show Sweet Alert Error
						Swal.fire({
						  type: 'error',
						  title: 'Opps...!',
						  text: 'Something Wrong Has Happened!',
						  footer: 'Error: ' + data.message
						});
					}
				},
				error:function(data, xhr) {
					$('#submit').attr('disabled', false);
					$('#submit').html('SEND FEEDBACK');
					
					//Show Sweet Alert Error
					Swal.fire({
					  type: 'error',
					  title: 'Opps...!',
					  text: 'Something Wrong Has Happened!',
					  footer: 'Error: ' + data
					});
				}
			});
		});
  </script>
@endsection