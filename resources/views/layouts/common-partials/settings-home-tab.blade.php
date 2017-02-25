<!-- Home tab content -->
<div class="tab-pane active" id="control-sidebar-home-tab">

    <h3 class="control-sidebar-heading">Account Details</h3>


    <!-- Sidebar Menu -->
    <ul class="control-sidebar-menu">

        <!-- Optionally, you can add icons to the links -->

        <li><a href="/determine-profile-route"><i class="fa fa-user"></i> <span>Profile</span></a></li>
        <li><a href="/settings"><i class="fa fa-wrench"></i> <span>Settings</span></a></li>
        <li><a href="/auth/facebook"><i class="fa fa-facebook"></i> <span>Facebook Sync</span></a></li>
        <li><a href="/auth/github"><i class="fa fa-github"></i> <span>Github Sync</span></a></li>
        <li><form id="logout-form" action="/logout" method="POST" style="display: none;">

                {{ csrf_field() }}

            </form>

            <a href="#"

               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i>
                Logout

            </a></li>

    </ul>
    <!-- /.sidebar-menu -->
    <!-- /.control-sidebar-menu -->


</div>
<!-- /.tab-pane -->