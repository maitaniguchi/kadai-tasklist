<ul class="media-list">
@foreach ($tasks as $task)
    <?php $user = $task->user; ?>
    <li class="media">
<!--
        <div>
            ID：{{ $task->id }}
        </div>
-->
        <div>
            タスク内容：{{ $task->content }}
        </div>
        <div>
            ステータス：{{ $task->status }}
        </div>
        <div>
            作成日時：{{ $task->created_at }}
        </div>
        <div>
            更新日時：{{ $task->updated_at }}
        </div>
        <div>
            {!! Form::open(['route' => ['tasks.show', $task->id], 'method' => 'get']) !!}
                {!! Form::submit('詳細表示', ['class' => 'btn btn-warning btn-xs']) !!}
            {!! Form::close() !!}
        </div>
    </li>
@endforeach
</ul>
<!--
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $task->created_at }}</span>
            </div>
            <div>
                <p>タスク内容：{!! nl2br(e($task->content)) !!}</p>
                <p>ステータス：{!! nl2br(e($task->status)) !!}</p>
            </div>
            <div>
                <span class="text-muted">posted at {{ $task->created_at }}</span>
            </div>
        </div>
                        {!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}

                @if (Auth::user()->id == $task->user_id)
                    {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
-->
{!! $tasks->render() !!}