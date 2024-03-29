@include('backend.user.components.breadcrumb', ['title' => $config['seo']['create']['title']])

<form action="{{ route('user.destroy', $user->id) }}" method="post" class="box">
    @csrf
    @method('DELETE')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin chung</div>
                    <div class="panel-description">
                        <p>Bạn đang muốn xoá thành viên có email là: {{ $user->email }}</p>
                        <p>Không thể khôi phục thành viên sau khi xoá. Hãy chắc chắn bạn muốn tiếp tục thực hiện chức
                            năng này</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="email" class="control-lable text-left">
                                        Email
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="text" name="email"
                                        value="{{ old('email', $user->email ?? '') }}"class="form-control"
                                        placeholder="" autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="name" class="control-lable text-left">
                                        Họ tên
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="text" name="name" value="{{ old('name', $user->name ?? '') }}"
                                        class="form-control" placeholder="" autocomplete="off" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mb15">
            <button class="btn btn-danger" type="submit" name="send" value="send">Xoá</button>
        </div>
    </div>
</form>
