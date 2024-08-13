<!-- resources/views/contacts/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create New Contact</h1>
    <form action="{{ route('contact.store') }}" method="post">
        
        @csrf
        <label for="name">Name:</label>
        <!-- この行にinputを追加 -->
        <input type="text" name="name" id="name">

        <label for="phone_number">Phone Number:</label>
        <!-- この行にinputを追加 -->
        <input type="text" name="phone_number" id="phone_number">

        <label for="email">Email:</label>
        <!-- この行にinputを追加 -->
        <input type="text" name="email" id="email">

        <button type="submit">Create</button>
    </form>

    <!-- 過去の連絡先 -->
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone_number }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>
                        <a href="{{ route('contact.edit', $contact)}}" class="btn btn-primary">Edit</a>
                        <!-- 削除ボタンを追加 -->
                        <form action="{{ route('contact.destroy', $contact) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection