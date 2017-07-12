@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div>
						<p>{{session('status')}}</p>
						<p>{{session('error')}}</p>
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
										<td><a href="/contacts/{{$oContact->id}}">{{$oContact->age}}</a></td>
									</tr>
								@endforeach
							</tbody>
						</table>
						<a href="/contacts/create" class="btn btn-success">Create</a>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection