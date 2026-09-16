<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Todo List - Tugas 1</title>
    <style>
        body { font-family: -apple-system, Arial, sans-serif; background:#0f172a; color:#e2e8f0; padding:40px; }
        .card { max-width:480px; margin:auto; background:#1e293b; padding:24px 32px; border-radius:12px; }
        h1 { font-size:22px; margin-bottom:16px; }
        ul { list-style:none; padding:0; }
        li { padding:10px 0; border-bottom:1px solid #334155; display:flex; align-items:center; gap:10px; }
        .done { text-decoration: line-through; color:#64748b; }
        .badge { font-size:11px; padding:2px 8px; border-radius:999px; }
        .badge.done { background:#166534; color:#dcfce7; text-decoration:none; }
        .badge.pending { background:#92400e; color:#fef3c7; }
    </style>
</head>
<body>
    <div class="card">
        <h1>📋 Todo List</h1>
        <ul>
            @foreach ($todos as $todo)
                <li>
                    <span class="{{ $todo['done'] ? 'done' : '' }}">{{ $todo['title'] }}</span>
                    <span class="badge {{ $todo['done'] ? 'done' : 'pending' }}">
                        {{ $todo['done'] ? 'Selesai' : 'Belum' }}
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
