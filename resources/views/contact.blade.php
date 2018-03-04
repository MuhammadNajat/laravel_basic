@extends('layout')
@section('content')

			<div class="about">
				<h2>Contact us</h2>
				<p style="font-size:20px;color:green;">
					<?php
						$message=Session::get('message');
						if($message){
						echo $message;
						Session::put('message',null);
						}

					?>


				</p>
			<form action="{{ url('/save_contact') }}" method="post">
				{{ csrf_field() }}
				<table>
				<tr>
					<td>Your First Name:</td>
					<td>
					<input type="text" name="firstname" placeholder="Enter first name" required="1"/>
					</td>
				</tr>
				<tr>
					<td>Your Last Name:</td>
					<td>
					<input type="text" name="lastname" placeholder="Enter Last name" required="1"/>
					</td>
				</tr>
				
				<tr>
					<td>Your Email Address:</td>
					<td>
					<input type="email" name="email" placeholder="Enter Email Address" required="1"/>
					</td>
				</tr>
				
				<tr>
					<td></td>
					<td>
					<input type="submit" name="submit" value="Submit"/>
					</td>
				</tr>
		</table>
	</form>				
 </div>
@endsection