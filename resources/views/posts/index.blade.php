@extends('main')

@section('title', '| All Augments')

@section('content')
	<div class="row">

		<div class="col-md-10">
			<h3>All augments <small class="text-muted">List view</small></h3>
		</div>

	<!-- 	<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-success btn-h1-spacing">New Augment</a>
		</div> -->

		<div class="row">
			<div class="col-md-12">

				<table class="table table-hover">

  					<thead>
  						<th>#</th>
  						<th>Augments</th>
  						<th>Description</th>
  						<th>Augmented at</th>
  						<th></th>
  					</thead>

  					<tbody>
  						@foreach($posts as $post)

  							<tr>
  								<th>{{ $post->id }}</th>
  								<td>{{ $post->title}}</td>
  								<td>{{ substr(strip_tags($post->body), 0, 140)}}</td>
  								<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
  								<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View</a></td>
                  <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">Edit</a></td>
  							</tr>

  						@endforeach
  						
  					</tbody>

				</table>

        <div class="text-center">
          {!! $posts->links(); !!} <!--pagination -->
          
        </div>
				   	
			</div>
		</div>
		

	</div>

@endsection