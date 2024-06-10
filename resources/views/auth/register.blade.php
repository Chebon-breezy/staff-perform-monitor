@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-green-600">
    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center text-green-700 mb-6">Sign Up</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="flex justify-between gap-4">
                <div class="w-1/2">
                    <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('first_name') is-invalid @enderror" required>
                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="w-1/2">
                    <label for="middle_name" class="block text-sm font-medium text-gray-700">Middle Name</label>
                    <input type="text" id="middle_name" name="middle_name" value="{{ old('middle_name') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('middle_name') is-invalid @enderror" required>
                    @error('middle_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="surname" class="block text-sm font-medium text-gray-700">Surname</label>
                <input type="text" id="surname" name="surname" value="{{ old('surname') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('surname') is-invalid @enderror" required>
                @error('surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="flex justify-between gap-4">
                <div class="w-1/2">
                    <label for="id_number" class="block text-sm font-medium text-gray-700">ID Number</label>
                    <input type="text" id="id_number" name="id_number" value="{{ old('id_number') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('id_number') is-invalid @enderror" required>
                    @error('id_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="w-1/2">
                    <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('phone_number') is-invalid @enderror" required>
                    @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('email') is-invalid @enderror" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div>
                <label for="department" class="block text-sm font-medium text-gray-700">Department</label>
                <select id="department" name="department" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('department') is-invalid @enderror" required>
                    <option value="" disabled selected hidden>-- Select one --</option>
                    <option value="health" {{ old('department') == 'health' ? 'selected' : '' }}>Health</option>
                    <option value="agriculture" {{ old('department') == 'agriculture' ? 'selected' : '' }}>Agriculture</option>
                    <option value="ict" {{ old('department') == 'ict' ? 'selected' : '' }}>ICT</option>
                    <option value="treasury" {{ old('department') == 'treasury' ? 'selected' : '' }}>Treasury</option>
                    <option value="other" {{ old('department') == 'other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('department')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="flex justify-between gap-4">
                <div class="w-1/2">
                    <label for="county" class="block text-sm font-medium text-gray-700">County</label>
                    <select id="county" name="county" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('county') is-invalid @enderror" required>
                        <option value="" disabled selected hidden>-- Select one --</option>
                        <option value="baringo" {{ old('county') == 'baringo' ? 'selected' : '' }}>Baringo County</option>
                        <option value="other" {{ old('county') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('county')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="w-1/2">
                    <label for="sub_county" class="block text-sm font-medium text-gray-700">Sub-County</label>
                    <select id="sub_county" name="sub_county" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('sub_county') is-invalid @enderror" required>
                        <option value="" disabled selected hidden>-- Select one --</option>
                        <option value="baringonorth" {{ old('sub_county') == 'baringonorth' ? 'selected' : '' }}>Baringo North</option>
                        <option value="baringocentral" {{ old('sub_county') == 'baringocentral' ? 'selected' : '' }}>Baringo Central</option>
                        <option value="baringosouth" {{ old('sub_county') == 'baringosouth' ? 'selected' : '' }}>Baringo South</option>
                        <option value="tiatywest" {{ old('sub_county') == 'tiatywest' ? 'selected' : '' }}>Tiaty West</option>
                        <option value="tiatyeast" {{ old('sub_county') == 'tiatyeast' ? 'selected' : '' }}>Tiaty East</option>
                        <option value="mogotio" {{ old('sub_county') == 'mogotio' ? 'selected' : '' }}>Mogotio</option>
                        <option value="eldamaravine" {{ old('sub_county') == 'eldamaravine' ? 'selected' : '' }}>Eldama Ravine</option>
                    </select>
                    @error('sub_county')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="flex justify-between gap-4">
                <div class="w-1/2">
                    <label for="ward" class="block text-sm font-medium text-gray-700">Ward</label>
                    <select id="ward" name="ward" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('ward') is-invalid @enderror" required>
                        <option value="" disabled selected hidden>-- Select one --</option>
                        <option value="saimosoi" {{ old('ward') == 'saimosoi' ? 'selected' : '' }}>Saimo Soi</option>
                        <option value="emining" {{ old('ward') == 'emining' ? 'selected' : '' }}>Emining</option>
                        <option value="barwesa" {{ old('ward') == 'barwesa' ? 'selected' : '' }}>Barwesa</option>
                        <option value="tirioko" {{ old('ward') == 'tirioko' ? 'selected' : '' }}>Tirioko</option>
                        <option value="silale" {{ old('ward') == 'silale' ? 'selected' : '' }}>Silale</option>
                        <option value="other" {{ old('ward') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('ward')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="w-1/2">
                    <label for="workstation" class="block text-sm font-medium text-gray-700">Work Station</label>
                    <select id="workstation" name="workstation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('workstation') is-invalid @enderror" required>
                        <option value="" disabled selected hidden>-- Select one --</option>
                        <option value="kituro" {{ old('workstation') == 'kituro' ? 'selected' : '' }}>Kituro</option>
                        <option value="kaptere" {{ old('workstation') == 'kaptere' ? 'selected' : '' }}>Kaptere</option>
                        <option value="sibilo" {{ old('workstation') == 'sibilo' ? 'selected' : '' }}>Sibilo</option>
                        <option value="salawa" {{ old('workstation') == 'salawa' ? 'selected' : '' }}>Salawa</option>
                        <option value="boin" {{ old('workstation') == 'boin' ? 'selected' : '' }}>Boin</option>
                        <option value="other" {{ old('workstation') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('workstation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('password') is-invalid @enderror" required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <div class="relative">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" required>
                </div>
            </div>
            <div class="col-md-6 offset-md-4 mt-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
        <p class="mt-4 text-center">Already have an account? <a href="{{ route('login') }}" class="text-green-700">Login here</a></p>
    </div>
</div>
@endsection