@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-green-600">
    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center text-green-700 mb-6">Fill in the Form</h1>
        <form action="{{ route('form.submit') }}" method="POST">
            @csrf

            <div class="flex justify-between gap-4">
                <div class="w-1/2">
                    <label for="fname" class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" id="fname" name="fname" value="{{ old('fname') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('fname') is-invalid @enderror" required>
                    @error('fname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="w-1/2">
                    <label for="lname" class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" id="lname" name="lname" value="{{ old('lname') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('lname') is-invalid @enderror" required>
                    @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label for="id" class="block text-sm font-medium text-gray-700">ID Number</label>
                <input type="text" id="id" name="id" value="{{ old('id') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('id') is-invalid @enderror" required>
                @error('id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700">Home Address</label>
                <input type="text" id="address" name="address" value="{{ old('address') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('address') is-invalid @enderror" required>
                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">E-mail Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('email') is-invalid @enderror" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('phone') is-invalid @enderror" required>
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="flex justify-between gap-4">
                <div class="w-1/3">
                    <label for="dd" class="block text-sm font-medium text-gray-700">Day</label>
                    <input type="text" id="dd" name="dd" value="{{ old('dd') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('dd') is-invalid @enderror" required>
                    @error('dd')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="w-1/3">
                    <label for="mm" class="block text-sm font-medium text-gray-700">Month</label>
                    <input type="text" id="mm" name="mm" value="{{ old('mm') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('mm') is-invalid @enderror" required>
                    @error('mm')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="w-1/3">
                    <label for="yyyy" class="block text-sm font-medium text-gray-700">Year</label>
                    <input type="text" id="yyyy" name="yyyy" value="{{ old('yyyy') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('yyyy') is-invalid @enderror" required>
                    @error('yyyy')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label for="location" class="block text-sm font-medium text-gray-700">Location of Work</label>
                <input type="text" id="location" name="location" value="{{ old('location') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('location') is-invalid @enderror" required>
                @error('location')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="task" class="block text-sm font-medium text-gray-700">Work Done</label>
                <textarea id="task" name="task" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('task') is-invalid @enderror" style="height: 200px;" required>{{ old('task') }}</textarea>
                @error('task')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-md-6 offset-md-4 mt-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }}
                </button>
            </div>
        </form>
        @if (session('status'))
        <div class="alert alert-success mt-4" role="alert">
            {{ session('status') }}
        </div>
        @endif
    </div>
</div>
@endsection