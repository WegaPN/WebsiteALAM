@extends('layouts.app')


@section('content')
   

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="pull-right">
            <a class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-4" href="{{ route('shm.index') }}"> Back</a>
        </div>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
       <div class="flex items-start mt-6 mb-4 rounded  bg-gray-50 dark:bg-gray-800">
                <div class="card w-screen ">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body w-full md:w-auto">
              
                    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
            <strong>Name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Permission:</strong>
                    <br/>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        @foreach($permission as $value)
                            <label class="flex items-center space-x-2">
                                {{ Form::checkbox('permission[]', $value->id, false, ['class' => 'w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600']) }}
                                <span class="text-sm text-gray-900 dark:text-white">{{ $value->name }}</span>
                            </label>
                        @endforeach
                    </div>
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left mt-10">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
       
        {!! Form::close() !!}
                    </div>
                </div>
   
    </div>
    </div>
    
</div>
   
@endsection