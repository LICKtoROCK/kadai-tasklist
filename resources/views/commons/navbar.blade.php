<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="/">TaskList</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            @if(Auth::check()) 
                <ul class="navbar-nav">
                    <li class="nav-item">{!! link_to_route('tasks.create', '新規タスクの投稿',[],['class'=>'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('logout.get', 'ログアウト',[],['class'=>'nav-link']) !!}</li>
                </ul>
            @else
                <ul class="navbar-nav">
                    <li class="nav-item">{!! link_to_route('signup.get','サインアップ',[],['class'=>'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('login','ログイン',[],['class'=>'nav-link']) !!}</li>
                </ul>
            @endif
        </div>
    </nav>
</header>