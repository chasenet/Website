    <div class="page-header">
        <?php $actions = Theme::getActions(); ?>
        @if( isset($actions['header']) && count($actions['header']) )
        <div class="actions-menu pull-right">
            @foreach($actions['header'] as $btn)
            <a class="{{ $btn['btn-class'] }}" href="{{ $btn['btn-link'] }}">
                <span class="btn-label"><i class="{{ $btn['btn-icon'] }}"></i></span><span>{{ $btn['btn-text'] }}</span>
            </a>
            @endforeach
        </div>
        @endif
        <h1>{{ Theme::place('title') }}</h1>
    </div>
    {{ Theme::breadcrumb()->render() }}
    {{ Theme::partial('theme.msgs') }}
