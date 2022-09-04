@extends('layouts.app')

@section('content')
<div class="container">
  <style>
  .create-form .form-group {
    padding: 0.5rem 0;
  }
  </style>
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card p-3 create-form">
        <form method="POST" action="{{ route('meetup.create') }}"
          enctype="multipart/form-data">
          @csrf
          <input id="user_id" type="hidden"
            name="user_id"
            value="{{ $user->id }}">

          <h2>Schedule Meeting with {{ $user->name}}</h2>

          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right ">Your Name <span
                class="text-red">*</span></label>
            <div class="col-md-6">
              <input id="name" type="text"
                class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right ">Your Email <span
                class="text-red">*</span></label>
            <div class="col-md-6">
              <input id="email" type="email"
                class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right ">Notes <span
                class="text-red">*</span></label>
            <div class="col-md-6">
              <input id="notes" type="text"
                class="form-control @error('notes') is-invalid @enderror" name="notes"
                value="{{ old('notes') }}" required autocomplete="notes" autofocus>
              @error('notes')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="from" class="col-md-4 col-form-label text-md-right ">Starts From <span
                class="text-red">*</span></label>
            <!-- <div class="col-md-4">
              <input id="date" type="date"
                class="form-control @error('date') is-invalid @enderror" name="date"
                value="{{ old('date') }}" required autocomplete="date" autofocus>
              @error('date')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div> -->
            <div class="col-md-6">
              <input id="from" type="datetime-local"
                class="form-control @error('from') is-invalid @enderror" name="from"
                value="{{ old('from') }}" required autocomplete="from" autofocus>
              @error('from')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="duration" class="col-md-4 col-form-label text-md-right ">Duration
              <span class="text-red">*</span></label>
            <div class="col-md-6">
              <select name="duration" id="duration" class=" form-control show-tick"
                data-live-search="true">
                <option value="15">15 Minutes</option>
                <option value="30">30 Minutes</option>
                <option value="45">45 Minutes</option>
                <option value="60">1 Hours</option>
              </select>
            </div>
          </div>

          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
                Schedule Meetup
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>


  </div>
</div>
</div>
@endsection