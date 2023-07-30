<div class="container d-flex justify-content-end">
    <div class="row mt-2">
        <div class="col">
            <div class="header-wrapper">
                <div class="profile-info">
                    <img class="img-fluid profile-header" src="{{ $user->profile ? asset('storage/profiles/' . $user->profile->foto) : 'img/add-profile.svg' }}" alt="">
                    <h6 class="mt-2 name-header">{{$user->name}}</h6>
                </div>
            </div>
        </div>
    </div>
</div>




