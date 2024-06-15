<div class="row">
    <div class="col-3">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item"><a href="#" class="nav-link {{$tab=='account' ? 'active' : ''}}" wire:click.prevent="handleChangeTab('account')">Tài khoản</a></li>
            <li class="nav-item"><a href="#" class="nav-link {{$tab=='password' ? 'active' : ''}}" wire:click.prevent="handleChangeTab('password')">Mật khẩu</a></li>
        </ul>
    </div>
    <div class="col-9">
        @if ($tab=='account')
        <h2>Tài khoản</h2>
        <table class="table table-bordered">
            <tr>
                <th width="20%">Tên</th>
                <td>{{$user->name}}</td>
                <td width="10%" class="text-center">
                    <button class="btn btn-warning btn-sm">Sửa</button>
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$user->email}}</td>
                <td class="text-center">
                    <button class="btn btn-warning btn-sm">Sửa</button>
                </td>
            </tr>
            <tr>
                <th>Thời gian đăng ký</th>
                <td>{{$user->created_at}}</td>
                <td></td>
            </tr>
            <tr>
                <th>Thời gian kích hoạt</th>
                <td>{{$user->email_verified_at}}</td>
                <td></td>
            </tr>
        </table>
        @else
        <h2>Đổi mật khẩu</h2>
        <form action="">
            <div class="mb-3">
                <label for="">Mật khẩu</label>
                <input type="password" name="password" class="form-control" placeholder="Mật khẩu..." wire:model="password" />
                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
            </div>
            <div class="mb-3">
                <label for="">Nhập lại mật khẩu</label>
                <input type="password" name="confirm_password" class="form-control" placeholder="Nhập lại mật khẩu..." wire:model="confirm_password" />
                <span class="text-danger">@error('confirm_password') {{ $message }} @enderror</span>
            </div>
            <button class="btn btn-primary">Đổi mật khẩu</button>
        </form>
        @endif
    </div>
</div>