@extends('layouts.master')
@section('title')
    Buat Account Baru!
    @endsection
    @section('content')
    <h2> Sign Up Form</h2>

<form action="/welcome" method="POST">
    @csrf
    <label>First name:</label><br>
    <input type="text"  name="fname"><br>
    <label>Last name:</label><br>
    <input type="text"  name="lname"> <br>
    
    <br />
    <br>
    <label>Gender:</label> <br />
    <br />
    <input type="radio" value="1" name="status" /> Male <br />
    <input type="radio" value="2" name="status" /> Female <br />
    <input type="radio" value="3" name="status" /> Other <br />
    <br />

    <p>Nationality:</p>

    <select name="country">
        <option value="1">Indonesia</option>
        <option value="2">Jepang</option>
        <option value="3">Vietnam</option>
        <option value="4">Korea</option>
        <option value="5">China</option>
    </select> 

  <p>Languenge Spoken:</p>

      <input type="checkbox" name="Bahasa Indonesia" value="Bahasa Indonesia">
      <label for="vehicle1"> Bahasa Indonesia </label><br>
      <input type="checkbox" name="English" value="English">
      <label for="vehicle2"> English </label><br>
      <input type="checkbox"  name="Other" value="Other">
      <label for="vehicle3"> Other </label> 

      <p>Bio:</p>
      <textarea name="message" rows="10" cols="30"></textarea> <br>
    <input type="submit" value="Sign Up">
  </form>
  @endsection