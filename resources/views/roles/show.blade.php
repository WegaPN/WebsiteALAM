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
       <div class="flex items-start mt-6 mb-4 rounded bg-gray-50 dark:bg-gray-800">
        <div class="row justify-content-start">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> </div>
    
                    <div class="card-body mt-10">
                            <div class="flex items-center space-x-4 mt-4">
                               <div class="flex-1 min-w-0">
                                  <p class="text-2xl ml-4 font-medium text-gray-900 truncate dark:text-white">
                                    Name
                                  </p>
                                  <p class="text-xl ml-4 text-gray-500 truncate dark:text-gray-400">
                                     {{$role->name}}
                                  </p>
                               </div>
                            </div>
                            <div class="flex items-center space-x-4 mt-4">
                               <div class="flex-1 min-w-0">
                                  <p class="text-2xl ml-4 font-medium text-gray-900 truncate dark:text-white">
                                     Permission
                                  </p>
                                  <p class="text-xl ml-4 text-gray-500 truncate dark:text-gray-400">
                                    @if(!empty($rolePermissions))
                                    @foreach($rolePermissions as $v)
                                        <label class="label label-success">{{ $v->name }},</label>
                                    @endforeach
                                @endif
                                  </p>
                               </div>
                            </div>
                            
                            </div>

                     
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
</div>
   
@endsection