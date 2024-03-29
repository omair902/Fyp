<?php
/*
    $data = $menuel['elements']
*/

if(!function_exists('renderDropdown')){
    function renderDropdown($data){
        if(array_key_exists('slug', $data) && $data['slug'] === 'dropdown'){
            echo '<li class="c-sidebar-nav-dropdown">';
            echo '<a class="c-sidebar-nav-dropdown-toggle" href="#">';
            if($data['hasIcon'] === true && $data['iconType'] === 'coreui'){
                echo '<i class="' . $data['icon'] . ' c-sidebar-nav-icon"></i>';    
            }
            echo $data['name'] . '</a>';
            echo '<ul class="c-sidebar-nav-dropdown-items">';
            renderDropdown( $data['elements'] );
            echo '</ul></li>';
        }else{
            for($i = 0; $i < count($data); $i++){
                if( $data[$i]['slug'] === 'link' ){
                    echo '<li class="c-sidebar-nav-item">';
                    echo '<a class="c-sidebar-nav-link" href="' . url($data[$i]['href']) . '">';
                    echo '<span class="c-sidebar-nav-icon"></span>' . $data[$i]['name'] . '</a></li>';
                }elseif( $data[$i]['slug'] === 'dropdown' ){
                    renderDropdown( $data[$i] );
                }
            }
        }
    }
}
?>


        <div class="c-sidebar-brand">
            <img class="c-sidebar-brand-full" src="{{ url('frontend/assets/images/logo.png') }}" width="118" height="46" alt="Logo">
            <img class="c-sidebar-brand-minimized" src="{{ url('frontend/assets/images/logo.png') }}" width="118" height="46" alt="Logo">
        </div>
        <ul class="c-sidebar-nav">
        @if(isset($appMenus['sidebar menu']))
            @foreach($appMenus['sidebar menu'] as $menuel)
                @if($menuel['slug'] === 'link')
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="{{ url($menuel['href']) }}">
                        @if($menuel['hasIcon'] === true)
                            @if($menuel['iconType'] === 'coreui')
                                <i class="{{ $menuel['icon'] }} c-sidebar-nav-icon"></i>
                            @endif
                        @endif 
                        {{ $menuel['name'] }}
                        </a>
                    </li>
                @elseif($menuel['slug'] === 'dropdown')
                    <?php renderDropdown($menuel) ?>
                @elseif($menuel['slug'] === 'title')
                    <li class="c-sidebar-nav-title">
                        @if($menuel['hasIcon'] === true)
                            @if($menuel['iconType'] === 'coreui')
                                <i class="{{ $menuel['icon'] }} c-sidebar-nav-icon"></i>
                            @endif
                        @endif 
                        {{ $menuel['name'] }}
                    </li>
                @endif
            @endforeach
        @endif
        @if(Auth::user()->hasRole('admin'))
        <li class="c-sidebar-nav-item {{Request::is('admin/dashboard') ? 'nav-active' : ''}}">
            <a class="c-sidebar-nav-link" href="/admin/dashboard">
                <i class="fa fa-tachometer mr-3" aria-hidden="true"></i>
            Dashboard
            </a>
        </li>
        <li class="c-sidebar-nav-item {{Request::is('admin/games') ? 'nav-active' : ''}}
                                      {{Request::is('admin/games/create') ? 'nav-active' : ''}}
                                      {{Request::is('admin/games/edit/*') ? 'nav-active' : ''}}
                                      ">
            <a class="c-sidebar-nav-link" href="/admin/games">
                <i class="fa fa-gamepad mr-3" aria-hidden="true"></i>
            Games
            </a>
        </li>
        <li class="c-sidebar-nav-item ">
            <a class="c-sidebar-nav-link" href="/admin/dashboard">
                <i class="fa fa-trophy mr-3" aria-hidden="true"></i>
            Manage Tournaments
            </a>
        </li>
        <li class="c-sidebar-nav-item {{Request::is('admin/forum_categories') ? 'nav-active' : ''}}
                                      {{Request::is('admin/forum_categories/create') ? 'nav-active' : ''}}
                                      {{Request::is('admin/forum_categories/edit/*') ? 'nav-active' : ''}}
                                      ">
            <a class="c-sidebar-nav-link" href="/admin/forum_categories">
                <i class="fa fa-tags mr-3" aria-hidden="true"></i>
            Forum Categories
            </a>
        </li>
        <li class="c-sidebar-nav-item {{Request::is('admin/forums') ? 'nav-active' : ''}}
                                      {{Request::is('admin/forums/create') ? 'nav-active' : ''}}
                                      {{Request::is('admin/forums/edit/*') ? 'nav-active' : ''}}
                                      ">
            <a class="c-sidebar-nav-link" href="/admin/forums">
                <i class="fa fa-comments mr-3" aria-hidden="true"></i>
            Forums
            </a>
        </li>
        <li class="c-sidebar-nav-item {{Request::is('admin/blogs') ? 'nav-active' : ''}}
                                      {{Request::is('admin/blogs/create') ? 'nav-active' : ''}}
                                      {{Request::is('admin/blogs/edit/*') ? 'nav-active' : ''}}
                                      ">
            <a class="c-sidebar-nav-link" href="/admin/blogs">
                <i class="fa fa-newspaper-o mr-3" aria-hidden="true"></i>
            Blogs
            </a>
        </li>
        
        <li class="c-sidebar-nav-item {{Request::is('admin/permissions') ? 'nav-active' : ''}}
                                      {{Request::is('admin/permissions/create') ? 'nav-active' : ''}}
                                      {{Request::is('admin/permissions/edit/*') ? 'nav-active' : ''}}
                                      ">
            <a class="c-sidebar-nav-link" href="/admin/permissions">
                <i class="fa fa-lock mr-3" aria-hidden="true"></i>
            Permissions
            </a>
        </li>

        <li class="c-sidebar-nav-item {{Request::is('admin/roles') ? 'nav-active' : ''}}
                                      {{Request::is('admin/roles/create') ? 'nav-active' : ''}}
                                      {{Request::is('admin/roles/edit/*') ? 'nav-active' : ''}}
                                      ">
            <a class="c-sidebar-nav-link" href="/admin/roles">
                <i class="fa fa-tasks mr-3" aria-hidden="true"></i>
            Roles
            </a>
        </li>

        <li class="c-sidebar-nav-item {{Request::is('admin/users') ? 'nav-active' : ''}}
                                      {{Request::is('admin/users/create') ? 'nav-active' : ''}}
                                      {{Request::is('admin/users/edit/*') ? 'nav-active' : ''}}
                                      ">
            <a class="c-sidebar-nav-link" href="/admin/users">
                <i class="fa fa-users mr-3" aria-hidden="true"></i>
            Users
            </a>
        </li>
        
        @elseif(Auth::user()->hasRole('user'))
        <li class="c-sidebar-nav-item {{Request::is('user/dashboard') ? 'nav-active' : ''}}">
            <a class="c-sidebar-nav-link" href="/user/dashboard">
                <i class="fa fa-tachometer mr-3" aria-hidden="true"></i>
            Dashboard
            </a>
        </li>
        @endif
        </ul>
        {{-- <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button> --}}
    </div>