@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content" style="background-color: aliceblue;">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <div class="row profile-body">
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
            <div class="card" style="background-color: aliceblue; border:none">
                <div class="card-body">
                    <h6 class="card-title" style="color: black;">View Sale Report</h6>

                        <form id="myForm" method="POST" action="{{ route('update.tickets',$salereports->id)}}" class="forms-sample" >
                          @csrf

                          <div class="mb-3 form-group" >
                            <label for="exampleInputEmail1" style="color: gray;" class="form-label">Assign To *</label>
                            <select name="users_id" style="background-color: aliceblue; color:black" class="form-select" id="exampleFormControlSelect1" value="{{ $salereports->users_id}}">
                               @foreach ($users as $user)
                               <option value="{{ $user->id }}">{{ $user->name }} </option>
                               @endforeach
                            </select>
                        </div>
                        <div class="mb-3 form-group" >
                            <label for="exampleInputEmail1" style="color: gray;" class="form-label">Customer Name *</label>
                            <select name="customers_id" style="background-color: aliceblue; color:black" class="form-select" id="exampleFormControlSelect1" value="{{ $salereports->customers_id }}">
                           @foreach ($customers as $customer)
                           <option value="{{ $customer->id }}">{{ $customer->name }} </option>
                           @endforeach
                            </select>
                        </div>
                        <div class="mb-3 form-group" >
                            <label for="exampleInputEmail1" class="form-label" style="color: gray;">Date of Prospect *</label>
                            <input type="date" name="date_of_project" class="form-control" style="color: black;background-color:aliceblue" value="{{ $salereports->date_of_project }}">
                        </div>
                        <div class="mb-3 form-group" >
                            <label for="exampleInputEmail1" class="form-label" style="color: gray;">Project Name *</label>
                            <input type="name" name="project_name" class="form-control" style="color: black;background-color:aliceblue" value="{{ $salereports->project_name }}">
                        </div>
                        <div class="mb-3 form-group" >
                            <label for="exampleInputEmail1" class="form-label" style="color: gray;">Project Close Date *</label>
                            <input type="date" name="project_close_date" class="form-control" style="color: black;background-color:aliceblue" value="{{ $salereports->project_close_date }}">
                        </div>
                        <div class="mb-3 form-group" >
                            <label for="exampleInputEmail1" class="form-label" style="color: gray;">Summary of Engagment *</label>
                            <input type="text" name="sum_engage_client" class="form-control" style="color: black;background-color:aliceblue" value="{{ $salereports->sum_engage_client }}">
                        </div>
                        <div class="mb-3 form-group" >
                            <label for="exampleInputEmail1" class="form-label" style="color: gray;">Nose of Visit *</label>
                            <input type="number" name="nos_of_visit" class="form-control" style="color: black;background-color:aliceblue" value="{{ $salereports->nos_of_visit }}">
                        </div>
                        <div class="mb-3 form-group" >
                            <label for="exampleInputEmail1" class="form-label" style="color: gray;">Nos of Call *</label>
                            <input type="number" name="nos_of_call" class="form-control" style="color: black;background-color:aliceblue" value="{{ $salereports->nos_of_call }}">
                        </div>
                        <div class="mb-3 form-group" >
                            <label for="exampleInputEmail1" class="form-label" style="color: gray;">Project Size Budget $ *</label>
                            <input type="dollar" name="project_size_budget" class="form-control" style="color: black;background-color:aliceblue" value="{{ $salereports->project_size_budget }}">
                        </div>
                        <div class="mb-3 form-group" >
                            <label for="exampleInputEmail1" class="form-label" style="color: gray;">Note *</label>
                            <input type="text" name="note" class="form-control" style="color: black;background-color:aliceblue" value="{{ $salereports->note }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
