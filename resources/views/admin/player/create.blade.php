@extends('admin.layout.header')
@section('contact')


    <div class="container">
      <h3>{{__('message.player-create')}}</h3>
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                <!-- General Form Elements -->
                <form action="{{ route('players.store')}}" method="POST">
                  @csrf
                  <div class=" mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label" >{{__('message.name')}}</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name">
                    </div>
                  </div>
                  <div class=" mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label" >{{__('message.birthday')}}</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="birth">
                    </div>
                  </div>
                  <div class=" mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label" >{{__('message.position')}}</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="position">
                    </div>
                  </div>
  
                  <div class="row mb-3">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-dark text-white">{{__('message.submit')}}</button>
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
