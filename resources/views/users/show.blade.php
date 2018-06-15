@extends('layouts.app')

@section('content')
    
               
            {!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class' => 'btn btn-primary']) !!}
            
            
            
            
            @if (count($tasks) > 0)
                @include('tasks.tasks', ['tasks' => $tasks])
            @endif
           </div>
    </div>
    
    
    
@endsection