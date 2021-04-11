@extends('frontend.layouts.app')
@section('content')
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
				<li>Checkout</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->

		<div class="privacy about">
			<h3>Chec<span>kout</span></h3>
			
	      <div class="checkout-right">
					<h4>Your shopping cart contains: <span>{{ count($carts) }} Products</span></h4>
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>	
							<th>Product</th>
							<th>Quality</th>
							<th>Product Name</th>
						
							<th>Price</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($carts as $row)
                        <tr class="rem1">
                            <td class="invert">{{ $i }}</td>
                            <td class="invert-image"><a href="single.html"><img  src="images/{{  $row->productdetail->image }}" alt=" " class="cart-img img-responsive" ></a></td>
                            <td class="invert">
                                <div class="quantity"> 
                                    <div class="quantity-select">                           
                                        <div class="entry value-minus">&nbsp;</div>
                                        <div class="entry value"><span>{{ $row->qty }}</span></div>
                                        <div class="entry value-plus active">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td class="invert">{{ $row->productdetail->name }}</td>
                            
                            <td class="invert">INR {{ $row->productdetail->price * $row->qty  }}</td>
                            <td class="invert">
                                <div class="rem">
                                    <div class="close1"> </div>
                                </div>

                            </td>
					    </tr>
                        @php
                            $i++;
                        @endphp
                        @endforeach

				</tbody></table>
			</div>
			<div class="checkout-left">	
				<div class="col-md-4 checkout-left-basket">
					<h4>Continue to basket</h4>
					<ul>
                        @php
                            $i = 1;
                            $totalamt = 0;
                        @endphp
                        @foreach($carts as $row)
						<li>{{ $row->productdetail->name }} <i>-</i> <span>INR {{ $row->productdetail->price * $row->qty  }} </span></li>
                        @php 
                            $totalamt += $row->productdetail->price * $row->qty
                        @endphp
                        @endforeach
					
						<li>Total Service Charges <i>-</i> <span>00.00</span></li>
						<li>Total <i>-</i> <span>INR {{$totalamt}}</span></li>
					</ul>
				</div>
				<div class="col-md-8 address_form_agile">
					  <h4>Add a new Details</h4>
				                <form action="{{ url('cartcheckout') }}" method="post" class="creditly-card-form agileinfo_form">
                                    @csrf
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="information-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Full name: </label>
													<input class="billing-address-name form-control" type="text" name="full_name" placeholder="Full name">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Mobile number:</label>
														    <input class="form-control" name="mobile" type="text" placeholder="Mobile number">
														</div>
													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">Landmark: </label>
														 <input class="form-control" name="landmark" type="text" placeholder="Landmark">
														</div>
													</div>
													<div class="clear"> </div>
												</div>
												<div class="controls">
													<label class="control-label">Town/City: </label>
												 <input class="form-control" name="city" type="text" placeholder="Town/City">
												</div>
													<div class="controls">
															<label class="control-label">Address type: </label>
												     <select name="address" class="form-control option-w3ls">
																							<option value="Office">Office</option>
																							<option value="Home">Home</option>
																							<option value="Commercial">Commercial</option>
							
																					</select>
													</div>
											</div>
											<button class="submit check_out">Make payment</button>
										</div>
									</section>
                                    
								</form>
									
					</div>
			
				<div class="clearfix"> </div>
				
			</div>

		</div>
<!-- //about -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
@endsection