@extends('layouts.app')

@section('title', 'Open new ticket')


@section('content')

<div class="container" style="margin-top:20px;">

    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Guest ticket submit</h4>
            <p class="card-text">If you want to track all your tickets, Create a account !</p>
        </div>
    </div>

    <form>
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Ticket title" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Full name</label>
            <input type="text" name="fullname" class="form-control" id="exampleFormControlInput1" placeholder="Firstname and Lastname" required>
        </div>
        

        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect2">Category</label>
            <select class="form-control" id="category" name="category" required>
            <option>General</option>
            <option>Hardware</option>
            <option>Software</option>
            <option>Feedback</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlSelect2">Level</label>
            <select class="form-control" id="level" name="level" required>
            <option>Low</option>
            <option>Normal</option>
            <option>Critical</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="submit" class="btn btn-default">Cancel</button>

    </form>
</div>

@endsection