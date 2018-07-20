@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 col-lg-2">
            <nav class="navbar navbar-default navbar-fixed-side">
                    <ul class="nav navbar-nav">

                    <li><a href="{{ url('chart')}}">Dashboard</a></li>
      
                        </ul>
                        <ul class="nav navbar-nav">

                        <li><a href="{{ url('addtransaction') }}">Add Transaction</a></li>
          
                            </ul>
                            <ul class="nav navbar-nav">

                              <li><a href="{{ url('listtran') }}">List Transaction</a></li>
                
                                  </ul>
                            <ul class="nav navbar-nav">

                                    <li><a href="#">Add Category</a></li>
              
                                </ul>
            </nav>
          </div>
          <div class="col-sm-9 col-lg-10">
            @yield('test')
          </div>
        </div>
      </div>
</div>
</div>
@endsection