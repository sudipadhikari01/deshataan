@extends('frontend.layouts.pageTemplate')

@section('content');
	
	<!--DASHBOARD-->
	<section>
		<div class="tr-register">
			<div class="tr-regi-form v2-search-form">
				<h4>Booking by <span>Email</span></h4>
                <p>It's free and always will be.</p>
                
                {{-- Success Alert --}}
                @if(session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @endif {{-- Error Alert --}}
                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                 


               <form class="contact__form" method="post" action="{{url('/booking')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                            {{-- 
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Thank you for arranging a wonderful trip for us! Our team will contact you shortly!
                            </div> --}}
                            
							<div class="row">
								<div class="input-field col s12">
									<input type="text"  class="validate" name="name" required>
									<label>Enter your name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="number"  class="validate" name="phone" required>
									<label>Enter your phone</label>
								</div>
								<div class="input-field col s6">
									<input type="email"  class="validate" name="email" required>
									<label>Enter your email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text" id="select-city-1" class="autocomplete validate" name="city">
									<label for="select-city-1">Select City or Place</label>
								</div>
								<div class="input-field col s12">
									<select name="packageType">
										<option value="" disabled selected>Select your package</option>
										@foreach ($packageTypes as $packageType)
                                         <option value="{{$packageType->p_id}}">{{$packageType->title}}</option>
                                        @endforeach
									</select>
								</div>
                            </div>
							<div class="row">
								<div class="input-field col s6">
									<input type="date" name="arrival" >
									{{-- <label for="from">Arrival Date</label> --}}
								</div>
								<div class="input-field col s6">
									<input type="date"  name="departure" >
									{{-- <label for="to">Departure Date</label> --}}
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<select name="noofadults">
                                        <option value="" disabled selected>No of adults</option>
                                        @for ($i = 1; $i <= 50; $i++)
										<option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
									</select>
								</div>
								<div class="input-field col s6">
									<select name="noofchildrens">
										<option value="" disabled selected>No of childrens</option>
                                        @for ($i = 1; $i <= 10; $i++)
										<option value="{{ $i }}">{{ $i }}</option>
                                        @endfor											
									</select>
								</div>
							</div>							

							<div class="row">
								<div class="input-field col s6">
									<select name="minprice">
										<option value="" disabled selected>Min Price</option>
										<option value="$200">$200</option>
										<option value="$500">$500</option>
										<option value="$1000">$1000</option>
										<option value="$5000">$5000</option>
										<option value="$10,000">$10,000</option>
										<option value="$50,000">$50,000</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select name="maxprice">
										<option value="" disabled selected>Max Price</option>
										<option value="$200">$200</option>
										<option value="$500">$500</option>
										<option value="$1000">$1000</option>
										<option value="$5000">$5000</option>
										<option value="$10,000">$10,000</option>
										<option value="$50,000">$50,000</option>
									</select>
								</div>								
							</div>							
							<div class="row">
								<div class="input-field col s12">
									<input type="submit" value="Book Now" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
								</div>
							</div>
						</form>
			</div>
		</div>
	</section>
	<!--END DASHBOARD-->
    @endsection
	<!--========= Scripts ===========-->
	<script src="js/jquery-latest.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/mail.js"></script>
    <script src="js/custom.js"></script>
    

   
</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2019 08:21:35 GMT -->
</html>