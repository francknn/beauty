@extends('layouts.app')

@section('content')
{{ Form::model($organisation, [ 'url' => URL::action('OrganisationsController@update', $post ), 'method' => 'post'])}}
         <p>{{ Form::label('nom', 'Nom :') }} {{ Form::text('nom') }}</p>
         <p>{{ Form::label('pays', 'Pays :') }} {{ Form::textarea('pays') }}</p>
         <p>{{ Form::label('ville', 'Ville :') }} {{ Form::textarea('ville') }}</p>
         {{ Form::submit() }}
      {{ Form::close() }}


      {{ Form::model(
       $post, [
          'url'=>$post->id ? URL::action('PostController@update', $post ) : URL::action('PostController@create', $post),
          'method'=>$post->id ? 'POST' : 'PUT'
       ]
    )
 }}
 <p>{{ Form::label('title', 'Titre :') }} {{ Form::text('title') }}</p>
 <p>{{ Form::label('content', 'Article :') }} {{ Form::textarea('content') }}</p>
 {{ Form::submit() }}
 {{ Form::close() }}

@endsection
