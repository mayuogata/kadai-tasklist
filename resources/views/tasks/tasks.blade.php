@if (count($tasks) > 0)
<ul class="media-list">
@foreach ($tasklists as $tasklist)
    <?php $tasks = $task->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('tasks.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $tasklist->created_at }}</span>
            </div>
            <div>
                <p>{!! nl2br(e($tasklist->content)) !!}</p>
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $tasklists->render() !!}
@endif