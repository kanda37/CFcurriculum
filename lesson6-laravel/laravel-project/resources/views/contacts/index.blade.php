<!-- resources/views/contacts/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Contacts</h1>
    <a href="{{ route('contact.create')}}" class="btn btn-primary">新規作成</a>
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