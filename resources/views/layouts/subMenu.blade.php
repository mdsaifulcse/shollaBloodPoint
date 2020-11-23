@if(Session::has('menu'))
    <ul class="navbar-nav">

    @foreach($subMenu as $sMenu)
        <?php
            $subSubMenu = $sMenu->subSubMenu->where('status',1);
            if(count($subSubMenu)>0){
                $subMenuUrl = '#';
            }else{
                $subMenuUrl = URL::to("$sMenu->url");
            }
            ?>
        @canAtLeast(json_decode($sMenu->slug,true))
        <li class="nav-item  @if(count($subSubMenu)>0) dropdown @endif" >
            <a href="{{$subMenuUrl}}" class="nav-link @if(count($subSubMenu)>0) dropdown-toggle @endif" @if(count($subSubMenu)>0) id="navbardrop" data-toggle="dropdown" @endif>
                <i class="fa fa-folder-o text-white"></i>
                <span>{{$sMenu->name}}</span>
            </a>
            @if(count($subSubMenu)>0)
                <div class="dropdown-menu">
                @foreach($subSubMenu as $ssMenu)
                @canAtLeast(json_decode($ssMenu->slug,true))
                    <a href='{{URL::to("$ssMenu->url")}}' class="dropdown-item">{{ $ssMenu->name }}</a>
                @endCanAtLeast
                @endforeach
                </div>
            @endif
        </li>
        @endCanAtLeast
    @endforeach
    </ul>
@endif