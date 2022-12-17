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
    <form id="survey-form" method="post" action="{{url('/saveData')}}">
        @csrf
        <div class="rowTab">
            <div class="labels">
                <label id="name-label" for="name">Name: </label>
            </div>
            <div class="rightTab">
                <input autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your name"
                    required>
            </div>
        </div>

        <div class="rowTab">
            <div class="labels">
                <label id="fname-label" for="fname">Father's Name: </label>
            </div>
            <div class="rightTab">
                <input autofocus type="text" name="fname" id="fname" class="input-field"
                    placeholder="Enter your father's name" required>
            </div>
        </div>

        <div class="rowTab">
            <div class="labels">
                <label id="mname-label" for="mname">Mother's Name: </label>
            </div>
            <div class="rightTab">
                <input autofocus type="text" name="mname" id="mname" class="input-field"
                    placeholder="Enter your mother's name" required>
            </div>
        </div>

        <div class="rowTab">
            <div class="labels">
                <label id="email-label" for="email">Email: </label>
            </div>
            <div class="rightTab">
                <input type="email" name="email" id="email" class="input-field" required placeholder="Enter your Email">
            </div>
        </div>
        <div class="rowTab">
            <div class="labels">
                <label id="number-label" for="age">Age: </label>
            </div>
            <div class="rightTab">
                <input type="number" name="age" id="number" min="1" max="125" class="input-field" placeholder="Age"
                    required>
            </div>
        </div>

        <div class="rowTab">
            <div class="labels">
                <label id="dob-label" for="dob">D.O.B: </label>
            </div>
            <div class="rightTab">
                <input type="date" name="dob" id="iddob" class="input-field" required>
            </div>
        </div>

        <div class="rowTab">
            <div class="labels">
                <label for="department">Department: </label>
            </div>
            <div class="rightTab">
                <select id="dropdown" name="department" class="dropdown">
                    <option value>Select an option</option>
                    <option value="it">IT</option>
                    <option value="cse">CSE</option>
                    <option value="ece">ECE</option>
                    <option value="mech">MECH</option>
                    <option value="civil">CIVIL</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>

        <div class="rowTab">
            <div class="labels">
                <label for="gender">Gender: </label>
            </div>
            <div class="rightTab">
                <ul style="list-style: none;">
                    <li class="radio"><label><input name="gender" value="male" type="radio"
                                class="userRatings">Male</label></li>
                    <li class="radio"><label><input name="gender" value="female" type="radio"
                                class="userRatings">Female</label></li>
                    <li class="radio"><label><input name="gender" value="others" type="radio"
                                class="userRatings">Others</label></li>
                </ul>
            </div>
        </div>
        <div class="rowTab">
            <div class="labels">
                <label for="address">Address: </label>
            </div>
            <div class="rightTab">
                <textarea id="comments" class="input-field" style="height:50px;resize:vertical;" name="address"
                    placeholder="Enter your address here..."></textarea>
            </div>
        </div>

        <div class="rowTab">
            <div class="labels">
                <label for="language">Language Known: </label>
            </div>
            <div class="rightTab">
                <ul id="language" style="list-style: none;">
                    <li class="checkbox"><label><input name="language" value="english" type="checkbox"
                                class="userRatings">English</label></li>
                    <li class="checkbox"><label><input name="language" value="tamil" type="checkbox"
                                class="userRatings">Tamil</label></li>
                    <li class="checkbox"><label><input name="language" value="hindi" type="checkbox"
                                class="userRatings">Hindi</label></li>
                    <li class="checkbox"><label><input name="language" value="malayalam" type="checkbox"
                                class="userRatings">Malayalam</label></li>
                    <li class="checkbox"><label><input name="language" value="others" type="checkbox"
                                class="userRatings">Others</label></li>
                </ul>
            </div>
        </div>

        <button id="submit" type="submit">Submit</button>
        <button id="reset" type="reset">Reset</button>
    </form>
</div>
@endsection