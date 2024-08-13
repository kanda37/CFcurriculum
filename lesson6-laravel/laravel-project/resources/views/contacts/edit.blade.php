<!-- resources/views/contacts/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Contact</h1>
    <form action="{{ route('contact.update', $contact) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <!-- この行に名前のinputを追加 -->
        <input type="text" name="name" id="name" value="{{ $contact->name }}">

        <label for="phone_number">Phone Number:</label>
        <!-- この行に電話番号のinputを追加 -->
        <input type="text" name="phone_number" id="phone_number" value="{{ $contact->phone_number }}">

        <label for="email">Email:</label>
        <!-- この行にメールアドレスのinputを追加 -->
        <input type="text" name="email" id="email" value="{{ $contact->email }}">

        <button type="submit">Update</button>
    </form>
    <!-- 削除ボタンを追加 -->
    <form action="{{ route('contact.destroy', $contact) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection