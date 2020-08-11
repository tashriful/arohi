
@extends('frontend.layouts.master')
@section('content')

<section style="margin-top:2%;" class="order-form">
    <div class="container">
        <div style="border:2px solid darkslategray;" class="row">
            
             <div style="margin-top:2%;" class="col-sm-12">
               
                <div class="card">
                  <div class="card-header">
                      Order Form
                  
                      
                  </div>
                   <div class="card-body">
                     
                     
                      <form method="post" action="{{ route('pickOrderSubmit') }}">
                        @csrf
                        
    
                        <input type="text" name="from" value="{{ $from }}"> 
                        <input type="text" name="to" value="{{ $to }}"> 
                        <input type="text" name="location" value="{{ $location }}"> 
                        <input type="text" name="price" value="{{ $price }}">
                        <input type="text" name="user_id" value="{{ $user}}">
                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __(' Name :') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="total_car" class="col-md-4 col-form-label text-md-right">{{ __('Total Car') }}</label>

                            <div class="col-md-6">
                                <input id="total_car" type="text" class="form-control @error('total_car') is-invalid @enderror" name="total_car" value="{{ old('total_car') }}" required autocomplete="total_car" autofocus>

                                @error('total_car')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Booking Date') }}</label>

                            <div class="col-md-6">
                                <input id="datepicker" name="booking_date"  placeholder="booking_date" width="276" />

                                @error('booking_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                         
                         <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number :') }}</label>

                            <div class="col-md-6">
                                <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number" autofocus>

                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                         <div class="form-group row">
                            <label for="votar_id" class="col-md-4 col-form-label text-md-right">{{ __('Votar Id No. :') }}</label>

                            <div class="col-md-6">
                                <input id="votar_id" type="text" class="form-control @error('votar_id') is-invalid @enderror" name="votar_id" value="{{ old('votar_id') }}" required autocomplete="votar_id" autofocus>

                                @error('votar_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Living Address :') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" value="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>

                  </div>
              </div>
      </div>
               
            </div>
            
    </div>

    </div>

</section>

<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

@endsection





</tr>