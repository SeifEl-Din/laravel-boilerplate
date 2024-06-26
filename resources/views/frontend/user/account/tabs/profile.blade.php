<!-- resources/views/frontend/user/account/profile.blade.php -->

<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered mb-0">
        <tr>
            <th>@lang('Type')</th>
            <td>@include('backend.auth.user.includes.type', ['user' => $logged_in_user])</td>
        </tr>

        <tr>
            <th>@lang('Avatar')</th>
            <td>
                <div style="display: flex; align-items: center;">
                    <div>
                        @if($logged_in_user->profile_picture)
                            <img src="{{ asset('storage/' . $logged_in_user->profile_picture) }}" class="user-profile-image" style="max-width: 150px; max-height: 150px;" />
                        @else
                            <img src="{{ asset('default-profile-picture.png') }}" class="user-profile-image" style="max-width: 150px; max-height: 150px;" />
                        @endif
                    </div>
                    <div style="margin-left: 10px;">
                        <form id="upload-profile-picture-form" action="{{ route('frontend.user.update-profile-picture') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="profile_picture" id="upload-profile-picture" style="display: none;" onchange="document.getElementById('upload-profile-picture-form').submit();" />
                            <button type="button" class="btn btn-primary" onclick="document.getElementById('upload-profile-picture').click();">@lang('Change Picture')</button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <th>@lang('Name')</th>
            <td>{{ $logged_in_user->name }}</td>
        </tr>

        <tr>
            <th>@lang('E-mail Address')</th>
            <td>{{ $logged_in_user->email }}</td>
        </tr>

        @if ($logged_in_user->isSocial())
            <tr>
                <th>@lang('Social Provider')</th>
                <td>{{ ucfirst($logged_in_user->provider) }}</td>
            </tr>
        @endif

        <tr>
            <th>@lang('Timezone')</th>
            <td>{{ $logged_in_user->timezone ? str_replace('_', ' ', $logged_in_user->timezone) : __('N/A') }}</td>
        </tr>

        <tr>
            <th>@lang('Account Created')</th>
            <td>@displayDate($logged_in_user->created_at) ({{ $logged_in_user->created_at->diffForHumans() }})</td>
        </tr>

        <tr>
            <th>@lang('Last Updated')</th>
            <td>@displayDate($logged_in_user->updated_at) ({{ $logged_in_user->updated_at->diffForHumans() }})</td>
        </tr>
    </table>
</div><!--table-responsive-->
