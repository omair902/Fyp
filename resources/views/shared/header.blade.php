
      
    <div class="c-wrapper">
      <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button><a class="c-header-brand d-sm-none" href="#"><img class="c-header-brand" src="{{ url('/assets/brand/coreui-base.svg" width="97" height="46" alt="CoreUI Logo"></a>
        <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true"><span class="c-header-toggler-icon"></span></button>
        <?php
            use App\MenuBuilder\FreelyPositionedMenus;
            if(isset($appMenus['top menu'])){
                FreelyPositionedMenus::render( $appMenus['top menu'] , 'c-header-', 'd-md-down-none');
            }
        ?>  
        <ul class="c-header-nav ml-auto mr-4">
          <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <div class="c-avatar">
                <img class="c-avatar-img" src="{{ url('/dashboard/assets/img/avatars/8.jpg') }}" alt="{{Auth::user()->email}}">
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
              <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
              <form action="{{ url('/logout') }}" method="POST"> 
                @csrf
                <button class="dropdown-item">
                  <svg class="c-icon mr-2">
                    <use xlink:href="{{ url('/dashboard/icons/sprites/free.svg#cil-account-logout') }}"></use>
                  </svg> Logout  
                </button>
              </form>
              <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
            </div>
          </li>
        </ul>
        <div class="c-subheader px-3 col-md-12">
          <ol class="breadcrumb border-0 m-0 ml-auto">
            <?php $segments = ''; ?>
            @for($i = 1; $i <= count(Request::segments()); $i++)
                <?php $segments .= '/'. Request::segment($i); ?>
                @if($i < count(Request::segments()))
                  @if(Request::segment($i) == 'admin' || Request::segment($i) == 'user')
                  @else
                    @if(Auth::user()->hasRole('admin'))
                    <li class="breadcrumb-item"><a href="/admin/{{Request::segment($i)}}">{{ucfirst( Request::segment($i) )}}</a></li>
                    @else
                    <li class="breadcrumb-item"><a href="/user/{{Request::segment($i)}}">{{ucfirst( Request::segment($i) )}}</a></li>
                    @endif
                  @endif
                @else
                    <li class="breadcrumb-item active">{{ucfirst( Request::segment($i)) }}</li>
                @endif
            @endfor
          </ol>
        </div>
    </header>