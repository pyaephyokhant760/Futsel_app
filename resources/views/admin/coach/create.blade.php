@extends('admin.layout.header')
@section('contact')
    <div class="container">
        <h3>{{ __('message.coach-create') }}</h3>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <!-- General Form Elements -->
                            <form action="{{ route('coachs.store') }}" method="POST">
                                @csrf
                                <div class=" mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">{{ __('message.name') }}</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                                        @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">{{__('message.country')}}</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('country') is-invalid @enderror" name="country">
                                        @error('country')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class=" mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">{{__('message.start-date')}}</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date">
                                        @error('start_date')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class=" mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">{{__('message.birthday')}}</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date">
                                        @error('birth_date')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class=" mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">{{__('message.history')}}</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('history') is-invalid @enderror" name="history">
                                        @error('history')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit"
                                            class="btn btn-dark text-white">{{ __('message.submit') }}</button>
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
