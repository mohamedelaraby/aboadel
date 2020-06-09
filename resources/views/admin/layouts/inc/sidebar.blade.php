<div class="sidebar" data-background-color="white" data-active-color="danger">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                {{trans('admin.admin')}}
            </a>
        </div>

        <ul class="nav">
            <li>
            <a href="{{route('home')}}">
                    <i class="ti-panel"></i>
                    <p>{{trans('admin.main_page')}}</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="ti-panel"></i>
                    <p>{{trans('admin.dashboard')}}</p>
                </a>
            </li>

            <li>
                <a href="{{route('admin.category.index')}}">
                    <i class="ti-view-list-alt"></i>
                    <p>{{trans('admin.category')}}</p>
                </a>
            </li>


            <li>
                <a href="{{route('admin.party.index')}}">
                    <i class="ti-view-list-alt"></i>
                    <p>{{trans('admin.parties_chosen')}}</p>
                </a>
            </li>  <li>
                <a href="{{route('admin.chef.index')}}">
                    <i class="ti-view-list-alt"></i>
                    <p>{{trans('admin.chef')}}</p>
                </a>
            </li>

            <li>
                <a href="{{route('admin.occassion.index')}}">
                    <i class="ti-view-list-alt"></i>
                    <p>{{trans('admin.special_occassions')}}</p>
                </a>
            </li>

            <li>
                <a href="{{route('admin.header.index')}}">
                    <i class="ti-view-list-alt"></i>
                    <p>{{trans('admin.header_cover_image')}}</p>
                </a>
            </li>


        </ul>
    </div>
</div>
