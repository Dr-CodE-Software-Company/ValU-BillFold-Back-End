<div class="sa-app__sidebar">
    <div class="sa-sidebar">
      <div class="sa-sidebar__header">
        <a class="sa-sidebar__logo" href="{{url('Dashboard')}}"><!-- logo -->
          <div class="sa-sidebar-logo">
              @if(!empty(\App\Models\ContactUs::select('logo')->first()->logo))
              <img src={{\App\Models\ContactUs::select('logo')->first()->logo}} width="120px" height="50px" >
              @else
                  <img src={{asset('img/avatar/logo.png')}} width="120px" height="50px" >
              @endif
            <div class="sa-sidebar-logo__caption">{{__('message.Admins')}}</div>
          </div>
          <!-- logo / end --></a
        >
      </div>
      <div class="sa-sidebar__body" data-simplebar="">
        <ul class="sa-nav sa-nav--sidebar" data-sa-collapse="">
          <li class="sa-nav__section">
            <div class="sa-nav__section-title">
              <span>{{__('message.APPLICATION')}}</span>
            </div>
            <ul class="sa-nav__menu sa-nav__menu--root">
              <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                <a href="{{route('Dashboard')}}" class="sa-nav__link"><span class="sa-nav__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor">
                      <path
                        d="M8,13.1c-4.4,0-8,3.4-8-3C0,5.6,3.6,2,8,2s8,3.6,8,8.1C16,16.5,12.4,13.1,8,13.1zM8,4c-3.3,0-6,2.7-6,6c0,4,2.4,0.9,5,0.2C7,9.9,7.1,9.5,7.4,9.2l3-2.3c0.4-0.3,1-0.2,1.3,0.3c0.3,0.5,0.2,1.1-0.2,1.4l-2.2,1.7c2.5,0.9,4.8,3.6,4.8-0.2C14,6.7,11.3,4,8,4z"
                      ></path></svg></span>
                      <span class="sa-nav__title">{{__('message.Dashboard')}}</span></a>
              </li>
              <li
                class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                data-sa-collapse-item="sa-nav__menu-item--open"
              >
                <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                  ><span class="sa-nav__icon"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="1em"
                      height="1em"
                      viewBox="0 0 16 16"
                      fill="currentColor"
                    >
                      <path
                        d="M8,6C4.7,6,2,4.7,2,3s2.7-3,6-3s6,1.3,6,3S11.3,6,8,6z M2,5L2,5L2,5C2,5,2,5,2,5z M8,8c3.3,0,6-1.3,6-3v3c0,1.7-2.7,3-6,3S2,9.7,2,8V5C2,6.7,4.7,8,8,8z M14,5L14,5C14,5,14,5,14,5L14,5z M2,10L2,10L2,10C2,10,2,10,2,10z M8,13c3.3,0,6-1.3,6-3v3c0,1.7-2.7,3-6,3s-6-1.3-6-3v-3C2,11.7,4.7,13,8,13z M14,10L14,10C14,10,14,10,14,10L14,10z"
                      ></path></svg></span
                  ><span class="sa-nav__title">{{__('message.Mysite')}}</span
                  ><span class="sa-nav__arrow"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="6"
                      height="9"
                      viewBox="0 0 6 9"
                      fill="currentColor"
                    >
                      <path
                        d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                      ></path></svg></span
                ></a>
                <ul
                  class="sa-nav__menu sa-nav__menu--sub"
                  data-sa-collapse-content=""
                >
                    @if(auth('admin')->user()->can('User-List'))

                    <li class="sa-nav__menu-item">
                    <a href="{{url('Admin/users')}}" class="sa-nav__link">
                    <span class="sa-nav__menu-item-padding"></span>
                    <span class="sa-nav__title">{{__('message.users')}}</span>
                    </a>
                </li>
                    @endif
                    @if(auth('admin')->user()->can('AllNotification'))
                    <li class="sa-nav__menu-item">
                    <a href="{{url('Admin/Notify')}}" class="sa-nav__link"
                    ><span class="sa-nav__menu-item-padding"></span
                        ><span class="sa-nav__title">{{__('message.AllNotification')}}</span></a
                        >
                    </li>
                    @endif

                </ul>
              </li>
                <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open">
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                    ><span class="sa-nav__icon"
                        ><svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="1em"
                                height="1em"
                                viewBox="0 0 16 16"
                                fill="currentColor"
                            >
                   <path
                       d="M8,10c-3.3,0-6,2.7-6,6H0c0-3.2,1.9-6,4.7-7.3C3.7,7.8,3,6.5,3,5c0-2.8,2.2-5,5-5s5,2.2,5,5c0,1.5-0.7,2.8-1.7,3.7c2.8,1.3,4.7,4,4.7,7.3h-2C14,12.7,11.3,10,8,10z M8,2C6.3,2,5,3.3,5,5s1.3,3,3,3s3-1.3,3-3S9.7,2,8,2z"
                   ></path></svg></span>
                        <span class="sa-nav__title">{{__('message.users')}}</span>
                        <span class="sa-nav__arrow">
                 <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                   <path
                       d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path></svg></span
                        ></a>
                    <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                        @if(auth('admin')->user()->can('User-List'))
                        <li class="sa-nav__menu-item">
                            <a href="{{url('Admin/users')}}" class="sa-nav__link"><span class="sa-nav__menu-item-padding"></span>
                                <span class="sa-nav__title">{{__('message.user_List')}}</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                {{-- /// end of section --}}

                {{-- /// start of section  --}}
                <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open">
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                    ><span class="sa-nav__icon"
                        >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-behance" viewBox="0 0 16 16">
  <path d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391.286.176.497.426.641.747.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922.281.426.461.957.461 1.563 0 .496-.105.922-.285 1.278a2.317 2.317 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.329 5.329 0 0 1-1.278.176L0 12.803V3h4.654zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a.981.981 0 0 0-.32-.355 1.84 1.84 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305v.005zm6.858-.035c.286.285.711.426 1.278.426.39 0 .746-.106 1.032-.286.285-.215.46-.426.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.135 4.135 0 0 1-1.527-.285 2.827 2.827 0 0 1-1.137-.782 2.851 2.851 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4.018 4.018 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396zm2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176-.215.105-.356.25-.496.39a.957.957 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978v-.957z"/>
</svg>                        </span>
                        <span class="sa-nav__title">{{__('message.Subscription')}}</span>
                        <span class="sa-nav__arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                    <path d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path></svg>
                        </span></a>
                    <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                        @if(auth('admin')->user()->can('Subscription-List'))
                            <li class="sa-nav__menu-item">
                                <a href="{{url('Subscription')}}" class="sa-nav__link"><span class="sa-nav__menu-item-padding"></span>
                                    <span class="sa-nav__title">{{__('message.Subscription_list')}}</span>
                                </a>
                            </li>

                        @endif
                        @if(auth('admin')->user()->can('Subscription-Create'))
                            <li class="sa-nav__menu-item">
                                <a href="{{url('Subscription/create')}}" class="sa-nav__link">
                                    <span class="sa-nav__menu-item-padding"></span>
                                    <span class="sa-nav__title">{{__('message.Subscription_create')}}</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
                {{-- /// end of section --}}

                {{-- /// start of section  --}}
              <li
              class="sa-nav__menu-item sa-nav__menu-item--has-icon"
              data-sa-collapse-item="sa-nav__menu-item--open">
              <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                ><span class="sa-nav__icon"
                  >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
</svg>                  </span>
                    <span class="sa-nav__title">{{__('message.Roles')}}</span>
                    <span class="sa-nav__arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                    <path
                      d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path></svg></span
              ></a>
              <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                      @if(auth('admin')->user()->can('Role-List'))
                      <li class="sa-nav__menu-item">
                    <a href="{{url('Admin/Role')}}" class="sa-nav__link"><span class="sa-nav__menu-item-padding"></span>
                        <span class="sa-nav__title">{{__('message.Roles_list')}}</span>
                    </a>
                </li>
                  @endif
                  @if(auth('admin')->user()->can('Role-Create'))
                  <li class="sa-nav__menu-item">
                  <a href="{{url('Admin/Role/create')}}" class="sa-nav__link">
                    <span class="sa-nav__menu-item-padding"></span>
                    <span class="sa-nav__title">{{__('message.Roles_create')}}</span>
                </a>
                </li>
                  @endif
              </ul>
            </li>
            {{-- /// end of section --}}



             {{-- /// start of section  --}}
             <li
             class="sa-nav__menu-item sa-nav__menu-item--has-icon"
             data-sa-collapse-item="sa-nav__menu-item--open">
             <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
               ><span class="sa-nav__icon"
                 >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
  <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
</svg>                 </span>
                   <span class="sa-nav__title">{{__('message.Admins')}}</span>
                   <span class="sa-nav__arrow">
                 <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                   <path
                     d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path></svg></span
             ></a>
             <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                 @if(auth('admin')->user()->can('Admin-List'))
                 <li class="sa-nav__menu-item">
                 <a href="{{url('Admin')}}" class="sa-nav__link"><span class="sa-nav__menu-item-padding"></span>
                     <span class="sa-nav__title">{{__('message.Admins_list')}}</span>
                 </a>
               </li>
                 @endif
                     @if(auth('admin')->user()->can('Admin-Create'))
                     <li class="sa-nav__menu-item">
                   <a href="{{url('Admin/create')}}" class="sa-nav__link">
                   <span class="sa-nav__menu-item-padding"></span>
                   <span class="sa-nav__title">{{__('message.Admins_create')}}</span>
               </a>
               </li>
                     @endif
             </ul>
           </li>
           {{-- /// end of section --}}

                <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                    ><span class="sa-nav__icon"
                        >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-browser-chrome" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
</svg>                        </span
                        ><span class="sa-nav__title">{{__('message.website')}}</span
                        ><span class="sa-nav__arrow"
                        ><svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="6"
                                height="9"
                                viewBox="0 0 6 9"
                                fill="currentColor"
                            >
                      <path
                          d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                      ></path></svg></span
                        ></a>
                    <ul
                        class="sa-nav__menu sa-nav__menu--sub"
                        data-sa-collapse-content=""
                    >
                        <li
                            class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                            data-sa-collapse-item="sa-nav__menu-item--open">
                            <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                            ><span class="sa-nav__icon"
                                >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
</svg>                                </span>
                                <span class="sa-nav__title">{{__('message.about')}}</span>
                                <span class="sa-nav__arrow">
                 <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                   <path
                       d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path></svg></span
                                ></a>
                            <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                @if(auth('admin')->user()->can('About-List'))
                                    <li class="sa-nav__menu-item">
                                        <a href="{{url('Website/About')}}" class="sa-nav__link"><span class="sa-nav__menu-item-padding"></span>
                                            <span class="sa-nav__title">{{__('message.aboutus')}}</span>
                                        </a>
                                    </li>
                                @endif
                                @if(auth('admin')->user()->can('About-Create'))
                                    @if(\App\Models\About::count() == 0)
                                    <li class="sa-nav__menu-item">
                                        <a href="{{url('Website/About/Create')}}" class="sa-nav__link">
                                            <span class="sa-nav__menu-item-padding"></span>
                                            <span class="sa-nav__title">{{__('message.aboutus_create')}}</span>
                                        </a>
                                    </li>
                                        @endif
                                @endif
                            </ul>
                        </li>
                        {{-- /// start of section  --}}
                        <li
                            class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                            data-sa-collapse-item="sa-nav__menu-item--open">
                            <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                            ><span class="sa-nav__icon"
                                >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reddit" viewBox="0 0 16 16">
  <path d="M6.167 8a.831.831 0 0 0-.83.83c0 .459.372.84.83.831a.831.831 0 0 0 0-1.661zm1.843 3.647c.315 0 1.403-.038 1.976-.611a.232.232 0 0 0 0-.306.213.213 0 0 0-.306 0c-.353.363-1.126.487-1.67.487-.545 0-1.308-.124-1.671-.487a.213.213 0 0 0-.306 0 .213.213 0 0 0 0 .306c.564.563 1.652.61 1.977.61zm.992-2.807c0 .458.373.83.831.83.458 0 .83-.381.83-.83a.831.831 0 0 0-1.66 0z"/>
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.828-1.165c-.315 0-.602.124-.812.325-.801-.573-1.9-.945-3.121-.993l.534-2.501 1.738.372a.83.83 0 1 0 .83-.869.83.83 0 0 0-.744.468l-1.938-.41a.203.203 0 0 0-.153.028.186.186 0 0 0-.086.134l-.592 2.788c-1.24.038-2.358.41-3.17.992-.21-.2-.496-.324-.81-.324a1.163 1.163 0 0 0-.478 2.224c-.02.115-.029.23-.029.353 0 1.795 2.091 3.256 4.669 3.256 2.577 0 4.668-1.451 4.668-3.256 0-.114-.01-.238-.029-.353.401-.181.688-.592.688-1.069 0-.65-.525-1.165-1.165-1.165z"/>
</svg>                                </span>
                                <span class="sa-nav__title">{{__('message.service')}}</span>
                                <span class="sa-nav__arrow">
                 <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                   <path
                       d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path></svg></span
                                ></a>
                            <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                @if(auth('admin')->user()->can('Service-List'))
                                    <li class="sa-nav__menu-item">
                                        <a href="{{url('Website/Service')}}" class="sa-nav__link"><span class="sa-nav__menu-item-padding"></span>
                                            <span class="sa-nav__title">{{__('message.service_list')}}</span>
                                        </a>
                                    </li>
                                @endif
                                @if(auth('admin')->user()->can('Service-Create'))
                                    <li class="sa-nav__menu-item">
                                        <a href="{{url('Website/Service/Create')}}" class="sa-nav__link">
                                            <span class="sa-nav__menu-item-padding"></span>
                                            <span class="sa-nav__title">{{__('message.service_create')}}</span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                        {{-- /// end of section --}}

                        {{-- /// start of section  --}}
                        <li
                            class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                            data-sa-collapse-item="sa-nav__menu-item--open">
                            <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                            ><span class="sa-nav__icon"
                                >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-rain-heavy-fill" viewBox="0 0 16 16">
  <path d="M4.176 11.032a.5.5 0 0 1 .292.643l-1.5 4a.5.5 0 0 1-.936-.35l1.5-4a.5.5 0 0 1 .644-.293zm3 0a.5.5 0 0 1 .292.643l-1.5 4a.5.5 0 0 1-.936-.35l1.5-4a.5.5 0 0 1 .644-.293zm3 0a.5.5 0 0 1 .292.643l-1.5 4a.5.5 0 0 1-.936-.35l1.5-4a.5.5 0 0 1 .644-.293zm3 0a.5.5 0 0 1 .292.643l-1.5 4a.5.5 0 0 1-.936-.35l1.5-4a.5.5 0 0 1 .644-.293zm.229-7.005a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 10H13a3 3 0 0 0 .405-5.973z"/>
</svg>                                </span>
                                <span class="sa-nav__title">{{__('message.blog')}}</span>
                                <span class="sa-nav__arrow">
                 <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                   <path
                       d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path></svg></span
                                ></a>
                            <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                @if(auth('admin')->user()->can('Blog-List'))
                                <li class="sa-nav__menu-item">
                                    <a href="{{url('Website/Blog')}}" class="sa-nav__link"><span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{__('message.blog_list')}}</span>
                                    </a>
                                </li>
                                @endif
                                @if(auth('admin')->user()->can('Blog-Create'))
                                <li class="sa-nav__menu-item">
                                    <a href="{{url('Website/Blog/Create')}}" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{__('message.blog_create')}}</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        {{-- /// end of section --}}
                        {{-- /// start of section  --}}
                        <li
                            class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                            data-sa-collapse-item="sa-nav__menu-item--open">
                            <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                            ><span class="sa-nav__icon"
                                >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
  <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
  <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z"/>
</svg>                                </span>
                                <span class="sa-nav__title">{{__('message.contact')}}</span>
                                <span class="sa-nav__arrow">
                 <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                   <path
                       d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path></svg></span
                                ></a>
                            <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                @if(auth('admin')->user()->can('Contact-List'))
                                <li class="sa-nav__menu-item">
                                    <a href="{{url('Website/Contact')}}" class="sa-nav__link"><span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{__('message.contact_list')}}</span>
                                    </a>
                                </li>
                                @endif
                                @if(auth('admin')->user()->can('Contact-Create'))
                                    @if(\App\Models\ContactUs::count() == 0)
                                <li class="sa-nav__menu-item">
                                    <a href="{{url('Website/Contact/Create')}}" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{__('message.contact_create')}}</span>
                                    </a>
                                </li>
                                        @endif
                                @endif
                            </ul>
                        </li>
                        {{-- /// end of section --}}

                        {{-- /// start of section  --}}
                        <li
                            class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                            data-sa-collapse-item="sa-nav__menu-item--open">
                            <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                            ><span class="sa-nav__icon"
                                >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
  <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
  <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z"/>
</svg>                                </span>
                                <span class="sa-nav__title">{{__('message.company')}}</span>
                                <span class="sa-nav__arrow">
                 <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                   <path
                       d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path></svg></span
                                ></a>
                            <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                @if(auth('admin')->user()->can('Company-List'))
                                <li class="sa-nav__menu-item">
                                    <a href="{{url('Website/Company')}}" class="sa-nav__link"><span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{__('message.company_list')}}</span>
                                    </a>
                                </li>
                                @endif
                                @if(auth('admin')->user()->can('Company-Create'))
                                <li class="sa-nav__menu-item">
                                    <a href="{{url('Website/Company/Create')}}" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{__('message.company_create')}}</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        {{-- /// end of section --}}

                        {{-- /// start of section  --}}
                        <li
                            class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                            data-sa-collapse-item="sa-nav__menu-item--open">
                            <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                            ><span class="sa-nav__icon"
                                >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
</svg>                                </span>
                                <span class="sa-nav__title">{{__('message.portfolio')}}</span>
                                <span class="sa-nav__arrow">
                 <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                   <path
                       d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path></svg></span
                                ></a>
                            <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                @if(auth('admin')->user()->can('Portfolio-List'))
                                <li class="sa-nav__menu-item">
                                    <a href="{{url('Website/Portfolio')}}" class="sa-nav__link"><span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{__('message.portfolio_list')}}</span>
                                    </a>
                                </li>
                                @endif

                                @if(auth('admin')->user()->can('Portfolio-Create'))
                                <li class="sa-nav__menu-item">
                                    <a href="{{url('Website/Portfolio/Create')}}" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{__('message.portfolio_create')}}</span>
                                    </a>
                                </li>
                                    @endif
                            </ul>
                        </li>
                        {{-- /// end of section --}}

                        {{-- /// start of section  --}}
                        <li
                            class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                            data-sa-collapse-item="sa-nav__menu-item--open">
                            <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                            ><span class="sa-nav__icon"
                                >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z"/>
</svg>
                                </span>
                                <span class="sa-nav__title">{{__('message.annoncement')}}</span>
                                <span class="sa-nav__arrow">
                 <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                   <path
                       d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path></svg></span
                                ></a>
                            <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                @if(auth('admin')->user()->can('Anoncement-List'))
                                <li class="sa-nav__menu-item">
                                    <a href="{{url('Website/Announcement')}}" class="sa-nav__link"><span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{__('message.annoncement_list')}}</span>
                                    </a>
                                </li>
                                @endif
                                @if(auth('admin')->user()->can('Anoncement-Create'))
                                <li class="sa-nav__menu-item">
                                    <a href="{{url('Website/Announcement/Create')}}" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{__('message.annoncement_create')}}</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        {{-- /// end of section --}}

                        {{-- /// start of section  --}}
                        <li
                            class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                            data-sa-collapse-item="sa-nav__menu-item--open">
                            <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                            ><span class="sa-nav__icon"
                                >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-button-wide" viewBox="0 0 16 16">
  <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-13z"/>
  <path d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
</svg>
                                </span>
                                <span class="sa-nav__title">{{__('message.allContacts')}}</span>
                                <span class="sa-nav__arrow">
                 <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                   <path
                       d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path></svg></span
                                ></a>
                            <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                @if(auth('admin')->user()->can('AllContact'))
                                <li class="sa-nav__menu-item">
                                    <a href="{{route('AllContact')}}" class="sa-nav__link"><span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{__('message.allContacts')}}</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        {{-- /// end of section --}}
                    </ul>
                </li>

            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="sa-app__sidebar-shadow"></div>
    <div class="sa-app__sidebar-backdrop" data-sa-close-sidebar=""></div>
  </div>
