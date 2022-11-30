

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
            <a href="{{ route('admin.main.index') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Главный
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.post.index') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Пость
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('admin.category.index') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Категории
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.tag.index') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Тэги
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Список пользователей
              </p>
            </a>
          </li>

            <li class="nav-item">
                <a href="{{ route('personal.main.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        User panel
                    </p>
                </a>
            </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



