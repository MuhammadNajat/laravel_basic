@extends('layout')
@section('content')

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
 <h2 style="margin-bottom:10px;">All Contact</h2>


	<p style="font-size:20px;color:red;">
					<?php
						$message=Session::get('message');
						if($message){
						echo $message;
						Session::put('message',null);
						}

					?>

</p>
				

<table>
  <tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Action</th>
  </tr>
  @foreach($all_contact_info as $v_contact)

  <tr>
    <td>{{$v_contact->id}}</td>
    <td>{{$v_contact->firstname}}</td>
    <td>{{$v_contact->lastname}}</td>
     <td>{{$v_contact->email}}</td>
     <td>
      <a href="{{URL::to('/edit_contact/'.$v_contact->id)}}">Edit</a>

      <a href="{{URL::to('/delete_contact/'.$v_contact->id)}}" >Delete</a>
     </td>
  </tr>
  @endforeach
 
</table>


@endsection