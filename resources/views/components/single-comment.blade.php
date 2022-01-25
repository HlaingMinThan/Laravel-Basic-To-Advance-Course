@props(['comment'])

<div class="card d-flex p-3 my-3 shadow-sm">
    <div class="d-flex">
        <div>
            <img
                src="https://i.pravatar.cc/300"
                width="50"
                height="50"
                class="rounded-circle"
                alt=""
            >
        </div>
        <div class="ms-3">
            <h6>{{$comment->author->name}}</h6>
            <p class="text-secondary">{{$comment->created_at->diffForHumans()}}</p>
        </div>
    </div>
    <p class="mt-1">
        {{$comment->body}}
    </p>
</div>
