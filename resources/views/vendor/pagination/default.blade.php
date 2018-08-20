<div class="container">
    @foreach ($paginator as $user)
        {{ $user->title }}
    @endforeach
</div>

{{ $paginator->links() }}