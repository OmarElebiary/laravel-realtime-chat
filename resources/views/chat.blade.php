@extends('layouts.app')
@section('content')

		<div id="app">
			<div class="container">
			    <div class="row">
			        <div class="col-md-10 col-md-offset-1">
			            <div class="panel panel-default">
			                <div class="panel-heading"><h3>ChatRoom</h3>
			                <span class="badge pull-right">@{{ usersInRoom.length }}</span>
			                </div>

			                <div class="panel-body">
			                    <chat-message></chat-message>
			                    <chat-log :messages="messages"></chat-log>
			                    <hr>
			                    <chat-composer v-on:messagesent="addMessage"></chat-composer>

			                </div>
			            </div>
			        </div>
			    </div>
			</div>
		</div>

@endsection