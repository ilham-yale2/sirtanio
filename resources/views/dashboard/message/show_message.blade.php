@extends('layout.dashboard')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="">
                    <div class="card">
                        <div class="card-body">
                            <div class="open-email-content">
                                <div class="mail-header">
                                    <div class="mail-title">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                    </div>
                                    <div class="mail-actions">
                                        <a href="{{ route('message.reply', ['message' => $message->id]) }}" class="btn btn-secondary">Reply</a>
                                        {{-- <button type="button" class="btn btn-secondary">Forward</button> --}}
                                        <form id="form-delete{{ $message->id }}"
                                            action="{{ route('message.destroy', ['id' => $message->id]) }}"
                                            method="post" style="display: none">
                                            @method('delete')
                                            @csrf
                                        </form>
                                        <a href="#" class="btn btn-danger" onclick="what({{ $message->id }})">Delete</a>
                                    </div>
                                    <div class="mail-info">
                                        <div class="mail-author">
                                            <div class="mail-author-info">
                                                <span class="mail-author-name">{{ $message->name }}</span>
                                                <span class="mail-author-address">{{ $message->email }}</span>
                                            </div>
                                        </div>
                                        <div class="mail-other-info">
                                            <span>{{ $message->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mail-text">
                                    <p>{{ $message->message }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
