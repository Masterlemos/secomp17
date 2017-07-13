@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-10">
	            <div class="panel panel-default" >
	                <div class="panel-heading">
	                	Contatos
	                </div>

	                <div class="panel-body" id="app">
						<p>{!! session('status') !!}</p>
						<p>{!! session('error') !!}</p>

						<form method="GET" action="/contacts">
							
							<div class="col-md-12">
								<div class="col-md-4">
									<label for="name">Name</label>
							        <input id="name" type="text" class="form-control" name="name" />
				    			</div>

				    			<div class="col-md-4">
									<label for="email">E-Mail</label>
							        <input id="email" type="text" class="form-control" name="email" />
				    			</div>

				    			<div class="col-md-3 pull-right">
									<label>&nbsp;</label>
							        <input type="submit" value="Filtrar" class="form-control btn btn-info" />
				    			</div>
			    			</div>
		    			</form>

						<div class="col-md-12">
						<br />
						</div>
						<div class="col-md-12">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Nome</th>
										<th>Telefone</th>
										<th>E-mail</th>
									</tr>
								</thead>
								<tbody>
									<tr v-for="contact in contacts">
										<td><a :href="url+'/'+contact.id">@{{contact.name}}</a></td>
										<td><a :href="url+'/'+contact.id">@{{contact.phone}}</a></td>
										<td><a :href="url+'/'+contact.id">@{{contact.email}}</a></td>
									</tr>
								</tbody>
							</table>
							<center>
								<ul class="pagination">
									<li><a @click="prevPage($event)" :href="prev">&laquo; Previous</a></li>
                    				<li><a @click="nextPage($event)" :href="next">Nextt &raquo;</a></li>
            					</ul>
							</center>
						</div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection