<x-layout>

    <form action="{{route('login')  }}" method="POST">
        @csrf
        <h2>Log in to your Account</h2>
        <label for="email">email: </label>
        <input type="email" id="email" name="email" value="{{ old("email") }}" required>
        <label for="password">password: </label>
        <input type="password" id="password" name="password" required>
        <button class="btn mt-4" type="submit">Login</button>

    </form>
</x-layout>
