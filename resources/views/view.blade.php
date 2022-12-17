@extends('template')
@section('title')
View Data
@endsection

@section('content')
<h1 id="title"></h1>
@if(Session::has('succsess'))
<h2>{{Session::get('succsess')}}</h2>
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col">SN</th>
            <th scope="col">Name</th>
            <th scope="col">Father name</th>
            <th scope="col">Mother Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Department</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>

        @foreach($data as $index=>$idata)

        @if($idata->status==1)
        <tr>
            <th>{{$i++}}</th>
            <td>{{$idata->name}}</td>
            <td>{{$idata->fname}}</td>
            <td>{{$idata->mname}}</td>
            <td>{{$idata->email}}</td>
            <td>{{$idata->age}}</td>
            <td>{{$idata->gender}}</td>
            <td>{{$idata->department}}</td>
            <td><a href="{{route('edit', $idata->id)}}" class="btn bg-success text-white ">Edit</a></td>
            <td><a href="" class="btn bg-danger text-white " data-toggle="modal"
                    data-target="#exampleModal{{$idata->id}}">Delete</a>
            </td>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$idata->id}}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="text-danger">Do you want to delete</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            <form method="post" action="{{route('delete')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$idata->id}}">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </tr>
        @endif
        @endforeach

    </tbody>
</table>



@endsection