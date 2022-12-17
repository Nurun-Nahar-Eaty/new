@extends('template')
@section('title')
Form
@endsection

@section('content')
<h1 id="title">Bio Data Form</h1>
@if(Session::has('succsess'))
<h2>{{Session::get('succsess')}}</h2>
@endif
<div id="form-outer">
    <p id="description">
        To know the details of students
    </p>
    <form id="survey-form" method="post" action="{{route('update')}}">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}">
        <div class="rowTab">
            <div class="labels">
                <label id="name-label" for="name">Name: </label>
            </div>
            <div class="rightTab">
                <input autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your name"
                    value="{{$data->name}}" required>
            </div>
        </div>

        <div class="rowTab">
            <div class="labels">
                <label id="fname-label" for="fname">Father's Name: </label>
            </div>
            <div class="rightTab">
                <input autofocus type="text" name="fname" id="fname" class="input-field"
                    placeholder="Enter your father's name" value="{{$data->fname}}" required>
            </div>
        </div>

        <div class="rowTab">
            <div class="labels">
                <label id="mname-label" for="mname">Mother's Name: </label>
            </div>
            <div class="rightTab">
                <input autofocus type="text" name="mname" id="mname" class="input-field"
                    placeholder="Enter your mother's name" value="{{$data->mname}}" required>
            </div>
        </div>

        <div class="rowTab">
            <div class="labels">
                <label id="email-label" for="email">Email: </label>
            </div>
            <div class="rightTab">
                <input type="email" name="email" id="email" class="input-field" required value="{{$data->email}}"
                    placeholder="Enter your Email">
            </div>
        </div>
        <div class="rowTab">
            <div class="labels">
                <label id="number-label" for="age">Age: </label>
            </div>
            <div class="rightTab">
                <input type="number" name="age" id="number" min="1" max="125" class="input-field" placeholder="Age"
                    value="{{$data->age}}" required>
            </div>
        </div>

        <div class="rowTab">
            <div class="labels">
                <label id="dob-label" for="dob">D.O.B: </label>
            </div>
            <div class="rightTab">
                <input type="date" name="dob" id="iddob" class="input-field" required value="{{$data->dob}}">
            </div>
        </div>

        <div class="rowTab">
            <div class="labels">
                <label for="department">Department: </label>
            </div>
            <div class="rightTab">
                <select id="dropdown" name="department" class="dropdown">
                    <option value>Select an option</option>
                    <option value="it" {{$data->department=='it'?'selected':''}}>IT</option>
                    <option value="cse" {{$data->department=='cse'?'selected':''}}>CSE</option>
                    <option value="ece" {{$data->department=='ece'?'selected':''}}>ECE</option>
                    <option value="mech" {{$data->department=='mech'?'selected':''}}>MECH</option>
                    <option value="civil" {{$data->department=='civil'?'selected':''}}>CIVIL</option>
                    <option value="other" {{$data->department=='other'?'selected':''}}>Other</option>
                </select>
            </div>
        </div>

        <div class="rowTab">
            <div class="labels">
                <label for="gender">Gender: </label>
            </div>
            <div class="rightTab">
                <ul style="list-style: none;">
                    <li class="radio"><label><input name="gender" value="male" {{$data->gender=='male'?'checked':''}}
                                type="radio" class="userRatings">Male</label>
                    </li>
                    <li class="radio"><label><input name="gender" value="female"
                                {{$data->gender=='female'?'checked':''}} type="radio" class="userRatings">Female</label>
                    </li>
                    <li class="radio"><label><input name="gender" value="others"
                                {{$data->gender=='others'?'checked':''}} type="radio" class="userRatings">Others</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="rowTab">
            <div class="labels">
                <label for="address">Address: </label>
            </div>
            <div class="rightTab">
                <textarea id="comments" class="input-field" style="height:50px;resize:vertical;" name="address"
                    placeholder="Enter your address here...">{{$data->address}}</textarea>
            </div>
        </div>

        <div class="rowTab">
            <div class="labels">
                <label for="language">Language Known: </label>
            </div>
            <div class="rightTab">
                <ul id="language" style="list-style: none;">
                    <li class="checkbox"><label><input name="language" value="english"
                                {{$data->language=='english'?'checked':''}} type="checkbox"
                                class="userRatings">English</label></li>
                    <li class="checkbox"><label><input name="language" value="tamil"
                                {{$data->language=='tamil'?'checked':''}} type="checkbox"
                                class="userRatings">Tamil</label></li>
                    <li class="checkbox"><label><input name="language" value="hindi"
                                {{$data->language=='hindi'?'checked':''}} type="checkbox"
                                class="userRatings">Hindi</label></li>
                    <li class="checkbox"><label><input name="language" value="malayalam"
                                {{$data->language=='malayalam'?'checked':''}} type="checkbox"
                                class="userRatings">Malayalam</label></li>
                    <li class="checkbox"><label><input name="language" value="others"
                                {{$data->language=='others'?'checked':''}} type="checkbox"
                                class="userRatings">Others</label></li>
                </ul>
            </div>
        </div>

        <button id="submit" type="submit">Update</button>
        <button id="reset" type="reset">Reset</button>
    </form>
</div>
@endsection