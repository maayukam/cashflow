

@extends('test')
@section('test')
    
@if (count($trans) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Transaction
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Name</th>

                        <th>Amount</th>


                        <th>category</th>


                        <th>subcategory</th>


                        <th>Date</th>

                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($trans as $tran)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $tran->name }}</div>
                                </td>

                                <td class="table-text">
                                    <div>{{ $tran->amount }}</div>
                                </td>

                                <td class="table-text">
                                    <div>{{ $tran->category }}</div>
                                </td>

                                <td class="table-text">
                                    <div>{{ $tran->subcategory }}</div>
                                </td>

                                <td class="table-text">
                                    <div>{{ $tran->created_at }}</div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->
                                    <form action="/listtran/{{ $tran->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                <td>
                                        <form action="/transactionmodify/{{ $tran->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        </form>
                                    </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    
@endsection

