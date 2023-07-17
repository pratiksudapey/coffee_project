<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Cup of Joe</a>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn-sm btn-primary">Logout</button>
        </form>
    </div>
</nav>
