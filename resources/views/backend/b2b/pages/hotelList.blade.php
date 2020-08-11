@extends('backend.b2b.layouts.master')
      @section('content')
      
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="card">
                  <div class="card-header">
                     Hotels and Rooms List
                  </div>
                 
                       @include('backend.b2b.layouts.validationError')

                      <table style="table-layout: fixed;width: 100%;" class="table table-dark">
                          <thead>
                              <tr>
                                  <th>Hotel Name</th>
                                  <th>Hotel Image</th>
                                  <th>Room Category</th>
                                  <th>Room Image</th>
                                  <th>Rooms Price</th>
                                  <th>Persons</th>
                                  <th>Description</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($hotel as $hotel)
                              <tr>
                                  <th scope="row">{{ $hotel->hotel->title }}</th>
                                  <td>
                                  <img style="height:80px;width:80px;" src="{{ asset('images/Hotels/'. $hotel->hotel->image) }}">
                                  </td>
        
                                  <td>{{$hotel['room_category']}}</td>
                                  <td>
                                  <img style="height:80px;width:80px;" src="{{ asset('images/hotel_rooms/'. $hotel->image) }}">
                                  </td>
                                  <td>{{$hotel['price']}}</td>
                                  <td>{{$hotel['person']}}</td>
                                  
                                  <td>{{ str_limit($hotel['description'], $limit = 80, $end = '...')  }}</td>
                                  <td>
                                       <a href="#deleteModal{{ $hotel->id}}" data-toggle="modal">Remove</a> |
                                       <a href="{{ route('admin.hotelRoomEdit' , $hotel->id) }}" >Edit</a> |
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
                                                      <form action="{{ route('admin.hotelRoom.delete', $hotel->id)}}" method="post">
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