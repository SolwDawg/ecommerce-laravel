@include('backend.user.components.breadcrumb', ['title' => $config['seo']['index']['title']])
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row mt-20">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>{{ $config['seo']['index']['table'] }}</h5>
                    @include('backend.user.components.toolbox')
                </div>
                <div class="ibox-content">
                    @include('backend.user.components.filter')
                    @include('backend.user.components.table')
                </div>
            </div>
        </div>
    </div>
</div>
