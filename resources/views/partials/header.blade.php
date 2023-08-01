<div class="container container-header">
    <div class="row mt-2 d-flex profile-info ">
        <div class="col-md-12 profile-info ">
           <div class="profile-info">
                <div> <img src="img/burger-user.svg" style="width: 48px; height:48px; " alt=""> </div>
                <div><h4>Dashbord</h4></div>   
                  <div> <img class="img-fluid profile-header" src="{{ $user->profile ? asset('storage/profiles/' . $user->profile->foto) : 'img/add-profile.svg' }}" alt=""></div>   
                 <div><h6 class="mt-2 name-header">{{$user->name}}</h6></div>   
            </div>
        </div>
    </div>
</div>




