@extends('layouts.app')
@section('content')
    <section class="featured mt-5">
       <div class="row">
           <div class="col-12">
               <table class="table table-striped table-hover table-bordered">
                   <thead>
                   <tr>
                       <th scope="col">#</th>
                       <th scope="col">Name</th>
                       <th scope="col">Tel</th>
                       <th scope="col">Action</th>
                   </tr>
                   </thead>
                   <tbody>
                   @php($n=1)
                   @foreach($clients as $c)
                       <tr>
                           <td>{{ $n++ }}</td>
                           <td>{{ $c->name }}</td>
                           <td>{{ $c->tel }}</td>
                           <td>
                                <form action="{{ route('client.destroy',$c->id) }}" 
                                    method="POST" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('client.show',$c->id) }}">
                                        <i class="fas fa-eye text-primary"></i>
                                    </a>
                                    <a  href="{{ route('client.edit',$c->id) }}">
                                        <i class="fas fa-user-edit text-warning"></i>
                                    </a>
                                    <button >
                                        <i class="fas fa-user-times text-danger"></i>
                                    </button>
                                </form>
                            </td>
                       </tr>
                   @endforeach
                   </tbody>
               </table>
           </div>
       </div>
    </section>
@endsection