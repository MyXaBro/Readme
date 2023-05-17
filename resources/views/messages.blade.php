@extends('templates.template')
@section('title', 'Readme: личные сообщения')

@section('styles')
    <link rel="stylesheet" href="/public/css/main.css">
@endsection

@section('content')

    <main class="page__main page__main--messages">
        <h1 class="visually-hidden">Личные сообщения</h1>
        <section class="messages tabs">
            <h2 class="visually-hidden">Сообщения</h2>
            <div class="messages__contacts">
                <ul class="messages__contacts-list tabs__list">
                    @foreach ($contacts as $contact)
                        <li class="messages__contacts-item">
                            <a href="{{ route('messages')}}"
                               class="messages__contacts-tab messages__contacts-tab--active tabs__item {{ $contact->unread_count ? 'messages__contacts-tab--new' : '' }}">
                                <div class="messages__avatar-wrapper">
                                    <img class="messages__avatar" src="{{ $contact->avatar }}" alt="">
                                </div>
                                <div class="messages__info">
                                     <span class="messages__contact-name">
                                         {{ $contact->name }}
                                    </span>
                                    @if ($contact->messages->count() > 0)
                                        <div class="messages__preview">
                                            <p class="messages__preview-text">
                                                {{ $contact->messages->last()->content }}
                                            </p>
                                            <time class="messages__preview-time">
                                                {{ $contact->messages->last()->created_at->format('H:i') }}
                                            </time>
                                        </div>
                                    @endif
                                </div>
                                @if ($contact->unread_count)
                                    <div class="messages__indicator">
                                        {{ $contact->unread_count }}
                                    </div>
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="messages__chat">
                <div class="messages__chat-wrapper">
                    <ul class="messages__list tabs__content tabs__content--active">
                        @foreach ($messages as $message)
                            @if ($message->sender_id == auth()->id())
                                <li class="messages__item messages__item--my">
                                    <div class="messages__info-wrapper">
                                        <div class="messages__item-avatar">
                                            <a class="messages__author-link" href="#">
                                                <img class="messages__avatar" src="{{$message->sender->avatar}}" alt="">
                                            </a>
                                        </div>
                                        <div class="messages__item-info">
                                            <a class="messages__author" href="#">
                                                {{$message->sender->name}}
                                            </a>
                                            <time class="messages__time">
                                                {{$message->created_at->locale('ru')->diffForHumans()}}
                                            </time>
                                        </div>
                                    </div>
                                    <p class="messages__text">
                                        {{ $message->content }}
                                    </p>
                                </li>
                            @else
                                <li class="messages__item">
                                    <div class="messages__info-wrapper">
                                        <div class="messages__item-avatar">
                                            <a class="messages__author-link" href="#">
                                                <img class="messages__avatar" src="{{$message->recipient->avatar}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="messages__item-info">
                                            <a class="messages__author" href="#">
                                                {{$message->recipient->name}}
                                            </a>
                                            <time class="messages__time">
                                                {{$message->created_at->locale('ru')->diffForHumans()}}
                                            </time>
                                        </div>
                                    </div>
                                    <p class="messages__text">
                                        {{ $message->content }}
                                    </p>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>

                        <h2 class="comments">
                            @if(count($contacts) > 0)
                            <form class="comments__form form" action="{{ route('messages.store') }}" method="post">
                                @csrf
                                <div class="comments__my-avatar">
                                    <img class="comments__picture" src="{{ auth()->user()->avatar }}" alt="">
                                </div>
                                @foreach ($contacts as $contact)
                                <input type="hidden" name="recipient_id" value="{{ $contact->id }}">
                                @endforeach
                                <label for="content">
                            <textarea class="comments__textarea form__textarea" placeholder="Ваше сообщение"
                                      name="content"></textarea>
                                </label>
                                <label class="visually-hidden">Ваше сообщение</label>
                                <button class="comments__submit button button--green" type="submit">Отправить</button>
                            </form>
                            @endif
                        </div>
                </div>
        </section>

    </main>

    <script src="/public/js/main.js"></script>
    <script src="/public/js/templates/tabs.js"></script>
@endsection
