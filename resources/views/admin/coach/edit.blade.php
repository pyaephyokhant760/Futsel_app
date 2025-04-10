@extends('admin.layout.header')
@section('contact')


    <div class="container">
      <h1>{{__('message.coach-create')}}</h1>
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                <!-- General Form Elements -->
                <form action="{{ route('coachs.update',$coach->id)}}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class=" mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label" >{{__('message.name')}}</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" value="{{ $coach->name }}">
                    </div>
                  </div>
                  <div class=" mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label" >{{__('message.country')}}</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="country" value="{{ $coach->country }}">
                    </div>
                  </div>
                  <div class=" mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label" >{{__('message.birthday')}}</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="birth_date" value="{{ $coach->birth_date }}">
                    </div>
                  </div>
                  <div class=" mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label" >{{__('message.start-date')}}</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="start_date" value="{{ $coach->start_date }}">
                    </div>
                  </div>
                  <div class=" mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label" >{{__('message.history')}}</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="history" value="{{ $coach->history }}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-dark text-white">{{__('message.update')}}</button>
                    </div>
                  </div>
  
                </form><!-- End General Form Elements -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>
    </div><!-- End Page Title -->

    

@endsection
