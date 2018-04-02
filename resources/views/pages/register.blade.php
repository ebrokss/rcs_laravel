@extends('layout')

@section('content')
<main>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    <ul class="breadcrumb color-12">
                        <li><a href="/">Home</a></li>
                        <li><a href="/register">Register</a></li>
                      </ul>
                    </div>
                </div>
                <div class="row center-object">
                    <div class="col-sm-4">
                        <form id="reg-form" method="post">
                            @csrf
                            <div class="errors" style="">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            <div class="success" style="">
                                <ul>
                                   @if(Session::has('success'))
                                   <li>{{ Session::get('success') }}</li>
                                   @endif
                                </ul>
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username*">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password*">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password2" class="form-control" placeholder="Retype password*">
                            </div>
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control" placeholder="First name*">
                            </div>
                            <div class="form-group">
                                <input type="text" name="last_name" class="form-control" placeholder="Last name">
                            </div>
                            <!-- <div class="form-group" >
                                <select placeholder="Please select coutnry" name="country" class="form-control">
                                    <option value="0">Select coutnry</option>
                                    <option value="1">Latvia</option>
                                    <option value="2">Lithuania</option>
                                    <option value="3">Estonia</option>
                                    <option value="4">Murrica</option>
                                    <option value="5">Zimbabve</option>
                                    <option value="6">Narnia</option>
                                </select>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="agree" value="1"> Agree with some GDPR related stuff
                                </label>
                            </div> -->
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>          
 </main>
 @endsection