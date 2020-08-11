@extends('backend.admin.layouts.master')
      @section('content')
      
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="card">
                  <div class="card-header">
                     Hotels List
                  </div>
                 
                       @include('backend.admin.layouts.validationError')

                      <table style="table-layout: fixed;width: 100%;" class="table table-dark">
                          <thead>
                              <tr>
                                  <th>Hotel Name</th>
                                  <th>Hotel Image</th>
                                  <th>Location</th>
                                  <th>Address</th>
                                  <th>Price</th>
                                  <th>Star</th>
                                  <th>Description</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($hotel as $hotel)
                              <tr>
                                  <th scope="row">{{ $hotel->title }}</th>
                                  <td>
                                  <img style="height:80px;width:80px;" src="{{ asset('images/Hotels/'. $hotel->image) }}">
                                  </td>
        
                                  <td>{{$hotel['Location']}}</td>
                                  
                                  <td>{{$hotel['address']}}</td>
                                  <td>{{$hotel['price_range']}}</td>
                                  <td>{{$hotel['star']}}</td>
                                  
                                  <td>{{ str_limit($hotel['description'], $limit = 80, $end = '...')  }}</td>
                                  <td>
                                       <a href="#deleteModal{{ $hotel->id}}" data-toggle="modal">Remove</a> |
                                       <a href="{{ route('admin.hotelEdit' , $hotel->id) }}" >Edit</a> |
                                      <!-- Button trigger modal -->
                                      
                                      <!-- Modal -->
                                      <div class="modal fade" id="deleteModal{{ $hotel->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <h5 style="color:black;" class="modal-title" id="exampleModalLabel">Are you want to delete??</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <form action="{{ route('admin.hotel.delete', $hotel->id)}}" method="post">
                                                        {{ csrf_field() }}   
                                                          
                                                          <button type="submit" class="btn btn-danger" >Delete</button>
                                                          
                                                      </form>
                                                      <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                      </div>
                                                  </div>
                                                
                                              </div>
                                          </div>
                                      </div>



                                  </td>
                                  </td>
                    
                                  
                                  </tr>

                                  @endforeach
                          </tbody>
                      </table>
                     
                     
                  </div>
              </div>


          </div>
      </div>
      <!-- main-panel ends -->


      @endsection