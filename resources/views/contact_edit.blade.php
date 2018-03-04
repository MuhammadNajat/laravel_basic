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
			<form action="{{ url('/contact_update',$all_contact_info->id)}}" method="post">
				{{ csrf_field() }}
				<table>
				<tr>
					<td>Your First Name:</td>
					<td>
					<input type="text" name="firstname" value="{{$all_contact_info->firstname}}"/>
					</td>
				</tr>
				<tr>
					<td>Your Last Name:</td>
					<td>
					<input type="text" name="lastname" value="{{$all_contact_info->lastname}}"/>
					</td>
				</tr>
				
				<tr>
					<td>Your Email Address:</td>
					<td>
					<input type="email"  name="email" value="{{$all_contact_info->email}}"/>
					</td>
				</tr>
				
				<tr>
					<td></td>
					<td>
					<input type="submit" name="submit" value="Update"/>
					</td>
				</tr>
		</table>
	</form>				
 </div>
@endsection