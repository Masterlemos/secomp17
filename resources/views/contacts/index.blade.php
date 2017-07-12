@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-10">
	            <div class="panel panel-default">
	                <div class="panel-heading">Contacts</div>

	                <div class="panel-body">
						<p>{!! session('status') !!}</p>
						<p>{!! session('error') !!}</p>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Phone</th>
									<th>E-mail</th>
								</tr>
							</thead>
							<tbody>
								@foreach($cContacts as $oContact)
									<tr>
										<td><a href="/contacts/{{$oContact->id}}">{{$oContact->name}}</a></td>
										<td><a href="/contacts/{{$oContact->id}}">{{$oContact->phone}}</a></td>
										<td><a href="/contacts/{{$oContact->id}}">{{$oContact->email}}</a></td>
									</tr>
								@endforeach
							</tbody>
						</table>
						<a href="/contacts/create" class="btn btn-success">New Contact</a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection