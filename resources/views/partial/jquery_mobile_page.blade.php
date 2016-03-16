<div data-role="page" id="{{ $page_id }}">

    <div data-role="header">
        @yield("page-header")
    </div>

    <div role="main" class="ui-content">
        @yield("page-main")
    </div>

    <div data-role="footer">
        @yield("page-footer")
    </div>
</div>