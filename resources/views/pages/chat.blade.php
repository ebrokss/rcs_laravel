@extends('layout')

@section('content')

<main>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    <ul class="breadcrumb color-12">
                        <li><a href="/">Home</a></li>
                        <li><a href="/chat">Chat</a></li>
                      </ul>
                    </div>
                </div>
                        <div class="row" id="chat">
                
                            <div class="col-sm-12 ">
                                <div class="chat-main-window">
                                    <div class="chat-message" v-for="message in messages">
                                        <h5>@{{ message.username }} <em>@{{ message.date }}</em></h5>
                                        <p>@{{ message.text }}</p>
                                    </div><!-- chat-message -->
                                    
                                    
                                </div><!-- chat-main-window -->
                            </div>
                            <div class="col-sm-12 ">
                                <div class="chat-message-form">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <label for="chat-username-input">Username</label>
                                            <input v-model="newMessageUsername" type="text" class="form-control" id="chat-username-input">
                                        </div>
                                    </div>
                                    <div class="row">
                                    
                                        <div class="form-group col-sm-10">
                                            <label for="chat-text-input">Message</label>
                                            <textarea v-model="newMessageText" class="form-control" id="chat-text-input"></textarea>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <button class="btn btn-primery" id="chat-send-message-button" v-on:click="sendMessage()">Send</button>
                                        </div>
                                    </div>
            
                                </div>
            
                            </div>
                            <!-- <div class="col-md-12">
                                <hr>
                                <pre>
            newMessageUsername:
            @{{ this.newMessageUsername }}<br>
            newMessageText:
            @{{ this.newMessageText }}<br>
            
            
            <br><br><br><br>
            messages:
            @{{ messages }}
                                </pre>
                            </div> -->
                        </div>
            
                        
                    </div>
        </main>
        @endsection