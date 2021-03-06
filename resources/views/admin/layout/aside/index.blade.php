<div class="sidebar px-4 py-4 py-md-5 me-0">
    <div class="d-flex flex-column h-100">
        <a href="index.html" class="mb-0 brand-icon">
            <span class="logo-icon">
                <svg  width="35" height="35" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                </svg>
            </span>
            <span class="logo-text">Panel</span>
        </a>
        <!-- Menu: main ul -->

        <ul class="menu-list flex-grow-1 mt-3">
            <li class="collapsed">
                @includeIf("admin.layout.aside.main-item" ,["href" => "categories " , "title" => trans('web.categories')])
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="categories"  data-parent="#accordionExample">
                    <li>
                        @includeIf("admin.layout.aside.sub-item" ,["href" => "categories" , "title" => trans('web.list') , "tooltip" => trans('web.list') , "class" => "mdi mdi-view-list"])
                    </li>
                    <li>
                        @includeIf("admin.layout.aside.sub-item" ,["href" => "categories/create" , "title" => trans('web.add') , "tooltip" => trans('web.add-user'), "class" => "mdi mdi-plus"])
                    </li>
                </ul>
            </li>

            <li class="collapsed">
                @includeIf("admin.layout.aside.main-item" ,["href" => "subCategory " , "title" => trans('web.subCategory')])
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="subCategory"  data-parent="#accordionExample">
                    <li>
                        @includeIf("admin.layout.aside.sub-item" ,["href" => "subCategory" , "title" => trans('web.list') , "tooltip" => trans('web.list') , "class" => "mdi mdi-view-list"])
                    </li>
                    <li>
                        @includeIf("admin.layout.aside.sub-item" ,["href" => "subCategory/create" , "title" => trans('web.add') , "tooltip" => trans('web.add-user'), "class" => "mdi mdi-plus"])
                    </li>
                </ul>
            </li>



            <li class="collapsed">
                @includeIf("admin.layout.aside.main-item" ,["href" => "product " , "title" => trans('web.products')])
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="product"  data-parent="#accordionExample">
                    <li>
                        @includeIf("admin.layout.aside.sub-item" ,["href" => "product" , "title" => trans('web.list') , "tooltip" => trans('web.list') , "class" => "mdi mdi-view-list"])
                    </li>
                    <li>
                        @includeIf("admin.layout.aside.sub-item" ,["href" => "product/create" , "title" => trans('web.add') , "tooltip" => trans('web.add-user'), "class" => "mdi mdi-plus"])
                    </li>
                </ul>
            </li>


            <li class="collapsed">
                @includeIf("admin.layout.aside.main-item" ,["href" => "about " , "title" => trans('web.about')])
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="about"  data-parent="#accordionExample">
                    <li>
                        @includeIf("admin.layout.aside.sub-item" ,["href" => "about" , "title" => trans('web.list') , "tooltip" => trans('web.list') , "class" => "mdi mdi-view-list"])
                    </li>
                    <li>
                        @includeIf("admin.layout.aside.sub-item" ,["href" => "about/create" , "title" => trans('web.add') , "tooltip" => trans('web.add-user'), "class" => "mdi mdi-plus"])
                    </li>
                </ul>
            </li>



            <li class="collapsed">
                @includeIf("admin.layout.aside.main-item" ,["href" => "blogs " , "title" => trans('web.blogs')])
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="blogs"  data-parent="#accordionExample">
                    <li>
                        @includeIf("admin.layout.aside.sub-item" ,["href" => "blogs" , "title" => trans('web.list') , "tooltip" => trans('web.list') , "class" => "mdi mdi-view-list"])
                    </li>
                    <li>
                        @includeIf("admin.layout.aside.sub-item" ,["href" => "blogs/create" , "title" => trans('web.add') , "tooltip" => trans('web.add-user'), "class" => "mdi mdi-plus"])
                    </li>
                </ul>
            </li>


            <li class="collapsed">
                @includeIf("admin.layout.aside.main-item" ,["href" => "sliders " , "title" => trans('web.sliders')])
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="sliders"  data-parent="#accordionExample">
                    <li>
                        @includeIf("admin.layout.aside.sub-item" ,["href" => "sliders" , "title" => trans('web.list') , "tooltip" => trans('web.list') , "class" => "mdi mdi-view-list"])
                    </li>
                    <li>
                        @includeIf("admin.layout.aside.sub-item" ,["href" => "sliders/create" , "title" => trans('web.add') , "tooltip" => trans('web.add-user'), "class" => "mdi mdi-plus"])
                    </li>
                </ul>
            </li>


            <li class="collapsed">
                @includeIf("admin.layout.aside.main-item" ,["href" => "contact " , "title" => trans('web.contact')])
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="contact"  data-parent="#accordionExample">
                    <li>
                        @includeIf("admin.layout.aside.sub-item" ,["href" => "contact" , "title" => trans('web.list') , "tooltip" => trans('web.list') , "class" => "mdi mdi-view-list"])
                    </li>
                </ul>
            </li>


            <li class="collapsed">
                @includeIf("admin.layout.aside.main-item" ,["href" => "settings " , "title" => trans('web.settings')])
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="settings"  data-parent="#accordionExample">
                    <li>
                        @includeIf("admin.layout.aside.sub-item" ,["href" => "settings" , "title" => trans('web.list') , "tooltip" => trans('web.list') , "class" => "mdi mdi-view-list"])
                    </li>
                </ul>
            </li>

        </ul>

        <!-- Theme: Switch Theme -->
        <ul class="list-unstyled mb-0">
            <li class="d-flex align-items-center justify-content-center">
                <div class="form-check form-switch theme-switch">
                    <input class="form-check-input" type="checkbox" id="theme-switch">
                    <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                </div>
            </li>
            <li class="d-flex align-items-center justify-content-center">
                <div class="form-check form-switch theme-rtl">
                    <input class="form-check-input" type="checkbox" id="theme-rtl">
                    <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                </div>
            </li>
        </ul>

        <!-- Menu: menu collepce btn -->
        <button type="button" class="btn btn-link sidebar-mini-btn text-light">
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
        </button>
    </div>
</div>
