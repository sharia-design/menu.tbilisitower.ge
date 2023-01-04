<x-back.layout>
    <x-slot name="title">Reg</x-slot>

    <style>

div { margin: 5px 0;}
        input { border: 2px solid gray; }

        </style>


    <form action="/register" method="POST">
        @csrf

        <fieldset>
            <legend>New User:</legend>
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <p class="red">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <p class="red">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <p class="red">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit">Register</button>
            </div>
            @if ($errors->any())
              <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
              </ul>
                
            @endif
        </fieldset>

    </form>


</x-back.layout>
