
@extends('theme.newdefault')
@extends('theme.lecturersidebar')

@section('content')

<body>
   
    
    <div class="container-fluid">
        <div class="col-md-10 col-md-offset-1">
            <h1> Uploaded Documents for {{ Auth::user()->name }}</h1>
            <br>
			<table class="table table-bordered">
        
				<thead>
                    <th>Author </th>
                    <th> Title </th>
                    <th> Description </th>	             
				</thead>
				<tbody> 
                    @foreach($items as $item)
                    <tr>
                        <td> {{ $item->author }} </td>
						<td> {{ $item->file_title }} </td>
                        <td> {{ $item->description }} </td>
					</tr>
                    @endforeach
                </tbody>
			</table>			
        </div>              
    </div>
    
</body>
@endsection