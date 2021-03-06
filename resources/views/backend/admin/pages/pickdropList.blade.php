@extends('backend.admin.layouts.master')
      @section('content')
      
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="card">
                  <div class="card-header">
                     Pick and Drop List
                  </div>
                 
                       @include('backend.admin.layouts.validationError')

                      <table style="table-layout: fixed;width: 100%;" class="table table-dark">
                          <thead>
                              <tr>
                                  <th>Location</th>
                                  <th>Destination From</th>
                                  <th>Destination To</th>
                                  <th>Person</th>
                                  <th>Price</th>
                                  <th>Description</th>
                                  <!--<th>Action</th>-->
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($pick as $pick)
                              <tr>
                                  <th scope="row">{{ $pick->location }}</th>
                                  
                                  <td>{{$pick['from']}}</td>
                                  <td>{{$pick['to']}}</td>
                                  <td>{{$pick['person']}}</td>
                                  <td>{{$pick['price']}}</td>
                                  
                                  <td>{{ str_limit($pick['description'], $limit = 80, $end = '...')  }}</td>
                                  <!--<td>
                                       <a href="#deleteModal{{ $pick->id}}" data-toggle="modal">Remove</a> |
                                       <a href="{{ route('admin.hotelRoomEdit' , $pick->id) }}" >Edit</a> |
                                      <!-- Button trigger modal -->
                                      
                                      <!-- Modal -->
                                     <!-- <div class="modal fade" id="deleteModal{{ $pick->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <h5 style="color:black;" class="modal-title" id="exampleModalLabel">Are you want to delete??</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <form action="{{ route('admin.hotelRoom.delete', $pick->id)}}" method="post">
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
                                  </td>-->
                    
                                  
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