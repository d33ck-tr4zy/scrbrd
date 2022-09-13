{{-- Dashboard where all data sumarizes --}}
<a href="#" @class([
        'nav-item',
        'nav-link',
        'active' => Route::currentRouteName() == "dashboard"
])>

    <i class="fa fa-tachometer-alt me-2"></i>Dashboard
</a>

{{--Reports is where you look at individual reports--}}
<div class="nav-item dropdown">
    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <i class="fa fa-th me-2"></i>Reports
        </a>
        <div class="dropdown-menu bg-transparent border-0">
            <a href="#" class="dropdown-item">
                Delay Reports
            </a>
            <a href="#" class="dropdown-item">
                Manpower Report
            </a>
            <a href="#" class="dropdown-item">
                Efficiency Report
            </a>
            <a href="#" class="dropdown-item">
                Score Report
            </a>
            <a href="#" class="dropdown-item">
                Acitvity Report
            </a>
        </div>
    </div>
</div>

{{--
Members is where :
* you look at the list of members,
* Look at each member data
* Manage member (add or remove)
--}}
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <i class="fa fa-users me-2"></i>Members
    </a>
    <div class="dropdown-menu bg-transparent border-0">
        <a href="#" class="dropdown-item">
            List
        </a>
        <a href="#" class="dropdown-item">
            Add
        </a>
    </div>
</div>

{{--
Scores is where you can:
* Look at the list of scores based on something to be specified
* Add member Scores
* Change Scores
* delete scores
* maybe agregate scores
--}}
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <i class="fa fa-cash-register me-2"></i>Scores
    </a>
    <div class="dropdown-menu bg-transparent border-0">
        <a href="#" class="dropdown-item">
            List
        </a>
        <a href="#" class="dropdown-item">
            Manage Scores
        </a>
    </div>
</div>

{{--
In Manpowers section you can:
* List of man power usage based on week of the month
* Assign Manpower to each member
* The manpower settings

--}}
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <i class="fa fa-briefcase-blank me-2"></i>Manpowers
    </a>
    <div class="dropdown-menu bg-transparent border-0">
        <a href="#" class="dropdown-item">
            List
        </a>
        <a href="#" class="dropdown-item">
            Add
        </a>
    </div>
</div>

{{--
   In Projects you could:
   * See The list of Projects
    - disect it between activ and inactive
   * Look at the project details
   * Manage each project details
   * See the project Manpower usage
--}}

<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <i class="fa fa-construction me-2"></i>Projects
    </a>
    <div class="dropdown-menu bg-transparent border-0">
        <a href="#" class="dropdown-item">
            list
        </a>
        <a href="#" class="dropdown-item">
            Add
        </a>
    </div>
</div>


{{--
    Inside the leave menu you could:
    * See the leave list
        - Globally
        - Based on each member
        - Based weeks of the year
    * Manages Leave
        - Assign leave
        - Modify leave
--}}
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <i class="fa fa-house-leave me-2"></i>Leaves
    </a>
    <div class="dropdown-menu bg-transparent border-0">
        <a href="#" class="dropdown-item">
            List
        </a>
        <a href="#" class="dropdown-item">
            Add
        </a>
    </div>
</div>


{{--
Holiday is a global settings.
It only affects the Manpower allocation
Here you can
*take a look at all the holiday,
* Add and remove holidays
* Set dates and how many day the holiday lasts
--}}
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <i class="fa fa-tree-christmas me-2"></i>Holidays
    </a>
    <div class="dropdown-menu bg-transparent border-0">
        <a href="#" class="dropdown-item">
            list
        </a>
        <a href="#" class="dropdown-item">
            Add
        </a>
    </div>
</div>
 <hr/>
@stack('sidebar-menu') {{-- if you wanna add more in the specific pages --}}
