<div class="dashboard__sidebar--inner">
    <ul class="sidebar__menu" id="accordionExample">
        <?php
        if ($_SESSION['userRole'] == 0) {
        ?>
        <li class="sidebar__menu--items"><a class="sidebar__menu--link" href="dashboard.php">
                <svg class="sidebar__menu--icon" fill="none" height="16" viewbox="0 0 16 16" width="16"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.300049 1.40005C0.300049 1.10831 0.415941 0.828521 0.622231 0.622231C0.828521 0.415941 1.10831 0.300049 1.40005 0.300049H14.6C14.8918 0.300049 15.1716 0.415941 15.3779 0.622231C15.5842 0.828521 15.7 1.10831 15.7 1.40005V3.60005C15.7 3.89179 15.5842 4.17158 15.3779 4.37787C15.1716 4.58416 14.8918 4.70005 14.6 4.70005H1.40005C1.10831 4.70005 0.828521 4.58416 0.622231 4.37787C0.415941 4.17158 0.300049 3.89179 0.300049 3.60005V1.40005ZM0.300049 8.00005C0.300049 7.70831 0.415941 7.42852 0.622231 7.22223C0.828521 7.01594 1.10831 6.90005 1.40005 6.90005H8.00005C8.29179 6.90005 8.57158 7.01594 8.77787 7.22223C8.98416 7.42852 9.10005 7.70831 9.10005 8.00005V14.6C9.10005 14.8918 8.98416 15.1716 8.77787 15.3779C8.57158 15.5842 8.29179 15.7 8.00005 15.7H1.40005C1.10831 15.7 0.828521 15.5842 0.622231 15.3779C0.415941 15.1716 0.300049 14.8918 0.300049 14.6V8.00005ZM12.4 6.90005C12.1083 6.90005 11.8285 7.01594 11.6222 7.22223C11.4159 7.42852 11.3 7.70831 11.3 8.00005V14.6C11.3 14.8918 11.4159 15.1716 11.6222 15.3779C11.8285 15.5842 12.1083 15.7 12.4 15.7H14.6C14.8918 15.7 15.1716 15.5842 15.3779 15.3779C15.5842 15.1716 15.7 14.8918 15.7 14.6V8.00005C15.7 7.70831 15.5842 7.42852 15.3779 7.22223C15.1716 7.01594 14.8918 6.90005 14.6 6.90005H12.4Z"
                          fill="currentColor"></path>
                </svg>
                <span class="sidebar__menu--text">داشبورد</span></a></li>
            <li class="sidebar__menu--items"><a class="sidebar__menu--link" href="user-advertisements.php">
                    <svg class="sidebar__menu--icon" fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 10.0001C12.3012 10.0001 14.1667 8.1346 14.1667 5.83342C14.1667 3.53223 12.3012 1.66675 10 1.66675C7.69885 1.66675 5.83337 3.53223 5.83337 5.83342C5.83337 8.1346 7.69885 10.0001 10 10.0001Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M17.1583 18.3333C17.1583 15.1083 13.95 12.5 10 12.5C6.05001 12.5 2.84167 15.1083 2.84167 18.3333" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="sidebar__menu--text">آگهی های من</span></a></li>
        <li class="sidebar__menu--items"><a class="sidebar__menu--link active" href="create-listing.php">
                <svg class="sidebar__menu--icon" fill="none" height="20" viewbox="0 0 20 20" width="20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.99996 18.3334C14.5833 18.3334 18.3333 14.5834 18.3333 10.0001C18.3333 5.41675 14.5833 1.66675 9.99996 1.66675C5.41663 1.66675 1.66663 5.41675 1.66663 10.0001C1.66663 14.5834 5.41663 18.3334 9.99996 18.3334Z"
                          stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M6.66663 10H13.3333" stroke="currentColor" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                    <path d="M10 13.3334V6.66675" stroke="currentColor" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </svg>
                <span class="sidebar__menu--text">ایجاد آگهی</span></a></li>
        <li class="sidebar__menu--items"><a class="sidebar__menu--link active" href="admin-registration.php">
                <svg class="sidebar__menu--icon" fill="none" height="20" viewbox="0 0 20 20" width="20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.99996 18.3334C14.5833 18.3334 18.3333 14.5834 18.3333 10.0001C18.3333 5.41675 14.5833 1.66675 9.99996 1.66675C5.41663 1.66675 1.66663 5.41675 1.66663 10.0001C1.66663 14.5834 5.41663 18.3334 9.99996 18.3334Z"
                          stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M6.66663 10H13.3333" stroke="currentColor" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                    <path d="M10 13.3334V6.66675" stroke="currentColor" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </svg>
                <span class="sidebar__menu--text">ثبت نام ادمین</span></a></li>
        <li class="sidebar__menu--items"><label class="sidebar__menu--title">مدیریت لیست ها</label></li>
        <li class="sidebar__menu--items dropdown__items"><a aria-controls="collapseOne" aria-expanded="true"
                                                            class="sidebar__menu--link dropdown__link--active"
                                                            data-bs-target="#collapseOne"
                                                            data-bs-toggle="collapse"
                                                            href="create-listing.php">
                <svg class="sidebar__menu--icon" fill="none" height="20" viewbox="0 0 20 20" width="20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.51663 2.36664L3.02496 5.86664C2.27496 6.44997 1.66663 7.69164 1.66663 8.63331V14.8083C1.66663 16.7416 3.24163 18.325 5.17496 18.325H14.825C16.7583 18.325 18.3333 16.7416 18.3333 14.8166V8.74997C18.3333 7.74164 17.6583 6.44997 16.8333 5.87497L11.6833 2.26664C10.5166 1.44997 8.64163 1.49164 7.51663 2.36664Z"
                          stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10 14.9917V12.4917" stroke="currentColor" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </svg>
                <span class="sidebar__menu--text">گزارش</span>
                <svg class="sidebar__menu--link__arrow" fill="none" height="8" viewbox="0 0 12 8" width="12"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.99999 3.02344L1.87499 7.14844L0.696655 5.9701L5.99999 0.666771L11.3033 5.9701L10.125 7.14844L5.99999 3.02344Z"
                          fill="currentColor"></path>
                </svg>
            </a>
            <ul class="sidebar__dropdown--menu accordion-collapse collapse show" id="collapseOne">
                <li class="sidebar__dropdown--menu__items"><a class="sidebar__dropdown--menu__link"
                                                              href="users-list.php">کاربران</a></li>
                <li class="sidebar__dropdown--menu__items"><a class="sidebar__dropdown--menu__link"
                                                              href="advertisements-list.php">آگهی ها</a></li>
                <li class="sidebar__dropdown--menu__items"><a class="sidebar__dropdown--menu__link"
                                                              href="locations-list.php">منطقه ها</a></li>
            </ul>
        </li>
        <li class="sidebar__menu--items"><a class="sidebar__menu--link" href="profile.php">
                <svg class="sidebar__menu--icon" fill="none" height="20" viewbox="0 0 20 20" width="20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 10.0001C12.3012 10.0001 14.1667 8.1346 14.1667 5.83342C14.1667 3.53223 12.3012 1.66675 10 1.66675C7.69885 1.66675 5.83337 3.53223 5.83337 5.83342C5.83337 8.1346 7.69885 10.0001 10 10.0001Z"
                          stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M17.1583 18.3333C17.1583 15.1083 13.95 12.5 10 12.5C6.05001 12.5 2.84167 15.1083 2.84167 18.3333"
                          stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="sidebar__menu--text">نمایه من</span></a></li>
        <li class="sidebar__menu--items"><a class="sidebar__menu--link logout color-accent-2"
                                            href="logout.php">
                <svg class="sidebar__menu--icon" fill="none" height="20" viewbox="0 0 20 20" width="20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.41663 6.29995C7.67496 3.29995 9.21663 2.07495 12.5916 2.07495H12.7C16.425 2.07495 17.9166 3.56662 17.9166 7.29162V12.725C17.9166 16.45 16.425 17.9416 12.7 17.9416H12.5916C9.24163 17.9416 7.69996 16.7333 7.42496 13.7833"
                          stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M12.5001 10H3.01672" stroke="currentColor" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                    <path d="M4.87504 7.20825L2.08337 9.99992L4.87504 12.7916" stroke="currentColor"
                          stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="sidebar__menu--text">خروج از سیستم</span></a></li>
        <?php
        }
        ?>

        <?php
        if ($_SESSION['userRole'] == 1) {
            ?>
            <li class="sidebar__menu--items"><a class="sidebar__menu--link" href="dashboard.php">
                    <svg class="sidebar__menu--icon" fill="none" height="16" viewbox="0 0 16 16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.300049 1.40005C0.300049 1.10831 0.415941 0.828521 0.622231 0.622231C0.828521 0.415941 1.10831 0.300049 1.40005 0.300049H14.6C14.8918 0.300049 15.1716 0.415941 15.3779 0.622231C15.5842 0.828521 15.7 1.10831 15.7 1.40005V3.60005C15.7 3.89179 15.5842 4.17158 15.3779 4.37787C15.1716 4.58416 14.8918 4.70005 14.6 4.70005H1.40005C1.10831 4.70005 0.828521 4.58416 0.622231 4.37787C0.415941 4.17158 0.300049 3.89179 0.300049 3.60005V1.40005ZM0.300049 8.00005C0.300049 7.70831 0.415941 7.42852 0.622231 7.22223C0.828521 7.01594 1.10831 6.90005 1.40005 6.90005H8.00005C8.29179 6.90005 8.57158 7.01594 8.77787 7.22223C8.98416 7.42852 9.10005 7.70831 9.10005 8.00005V14.6C9.10005 14.8918 8.98416 15.1716 8.77787 15.3779C8.57158 15.5842 8.29179 15.7 8.00005 15.7H1.40005C1.10831 15.7 0.828521 15.5842 0.622231 15.3779C0.415941 15.1716 0.300049 14.8918 0.300049 14.6V8.00005ZM12.4 6.90005C12.1083 6.90005 11.8285 7.01594 11.6222 7.22223C11.4159 7.42852 11.3 7.70831 11.3 8.00005V14.6C11.3 14.8918 11.4159 15.1716 11.6222 15.3779C11.8285 15.5842 12.1083 15.7 12.4 15.7H14.6C14.8918 15.7 15.1716 15.5842 15.3779 15.3779C15.5842 15.1716 15.7 14.8918 15.7 14.6V8.00005C15.7 7.70831 15.5842 7.42852 15.3779 7.22223C15.1716 7.01594 14.8918 6.90005 14.6 6.90005H12.4Z"
                              fill="currentColor"></path>
                    </svg>
                    <span class="sidebar__menu--text">داشبورد</span></a></li>
            <li class="sidebar__menu--items"><a class="sidebar__menu--link active" href="create-listing.php">
                    <svg class="sidebar__menu--icon" fill="none" height="20" viewbox="0 0 20 20" width="20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.99996 18.3334C14.5833 18.3334 18.3333 14.5834 18.3333 10.0001C18.3333 5.41675 14.5833 1.66675 9.99996 1.66675C5.41663 1.66675 1.66663 5.41675 1.66663 10.0001C1.66663 14.5834 5.41663 18.3334 9.99996 18.3334Z"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.66663 10H13.3333" stroke="currentColor" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        <path d="M10 13.3334V6.66675" stroke="currentColor" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                    </svg>
                    <span class="sidebar__menu--text">ایجاد آگهی</span></a></li>
            <li class="sidebar__menu--items"><a class="sidebar__menu--link" href="user-advertisements.php">
                    <svg class="sidebar__menu--icon" fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 10.0001C12.3012 10.0001 14.1667 8.1346 14.1667 5.83342C14.1667 3.53223 12.3012 1.66675 10 1.66675C7.69885 1.66675 5.83337 3.53223 5.83337 5.83342C5.83337 8.1346 7.69885 10.0001 10 10.0001Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M17.1583 18.3333C17.1583 15.1083 13.95 12.5 10 12.5C6.05001 12.5 2.84167 15.1083 2.84167 18.3333" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="sidebar__menu--text">آگهی های من</span></a></li>
            <li class="sidebar__menu--items"><label class="sidebar__menu--title">مدیریت لیست ها</label></li>
            <li class="sidebar__menu--items dropdown__items"><a aria-controls="collapseOne" aria-expanded="true"
                                                                class="sidebar__menu--link dropdown__link--active"
                                                                data-bs-target="#collapseOne"
                                                                data-bs-toggle="collapse"
                                                                href="create-listing.php">
                    <svg class="sidebar__menu--icon" fill="none" height="20" viewbox="0 0 20 20" width="20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.51663 2.36664L3.02496 5.86664C2.27496 6.44997 1.66663 7.69164 1.66663 8.63331V14.8083C1.66663 16.7416 3.24163 18.325 5.17496 18.325H14.825C16.7583 18.325 18.3333 16.7416 18.3333 14.8166V8.74997C18.3333 7.74164 17.6583 6.44997 16.8333 5.87497L11.6833 2.26664C10.5166 1.44997 8.64163 1.49164 7.51663 2.36664Z"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10 14.9917V12.4917" stroke="currentColor" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                    </svg>
                    <span class="sidebar__menu--text">گزارش</span>
                    <svg class="sidebar__menu--link__arrow" fill="none" height="8" viewbox="0 0 12 8" width="12"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.99999 3.02344L1.87499 7.14844L0.696655 5.9701L5.99999 0.666771L11.3033 5.9701L10.125 7.14844L5.99999 3.02344Z"
                              fill="currentColor"></path>
                    </svg>
                </a>
                <ul class="sidebar__dropdown--menu accordion-collapse collapse show" id="collapseOne">
                    <li class="sidebar__dropdown--menu__items"><a class="sidebar__dropdown--menu__link"
                                                                  href="users-list.php">کاربران</a></li>
                    <li class="sidebar__dropdown--menu__items"><a class="sidebar__dropdown--menu__link"
                                                                  href="advertisements-list.php">آگهی ها</a></li>
                    <li class="sidebar__dropdown--menu__items"><a class="sidebar__dropdown--menu__link"
                                                                  href="locations-list.php">منطقه ها</a></li>
                </ul>
            </li>
            <li class="sidebar__menu--items"><a class="sidebar__menu--link" href="profile.php">
                    <svg class="sidebar__menu--icon" fill="none" height="20" viewbox="0 0 20 20" width="20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 10.0001C12.3012 10.0001 14.1667 8.1346 14.1667 5.83342C14.1667 3.53223 12.3012 1.66675 10 1.66675C7.69885 1.66675 5.83337 3.53223 5.83337 5.83342C5.83337 8.1346 7.69885 10.0001 10 10.0001Z"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M17.1583 18.3333C17.1583 15.1083 13.95 12.5 10 12.5C6.05001 12.5 2.84167 15.1083 2.84167 18.3333"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="sidebar__menu--text">نمایه من</span></a></li>
            <li class="sidebar__menu--items"><a class="sidebar__menu--link logout color-accent-2"
                                                href="logout.php">
                    <svg class="sidebar__menu--icon" fill="none" height="20" viewbox="0 0 20 20" width="20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.41663 6.29995C7.67496 3.29995 9.21663 2.07495 12.5916 2.07495H12.7C16.425 2.07495 17.9166 3.56662 17.9166 7.29162V12.725C17.9166 16.45 16.425 17.9416 12.7 17.9416H12.5916C9.24163 17.9416 7.69996 16.7333 7.42496 13.7833"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12.5001 10H3.01672" stroke="currentColor" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        <path d="M4.87504 7.20825L2.08337 9.99992L4.87504 12.7916" stroke="currentColor"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="sidebar__menu--text">خروج از سیستم</span></a></li>
            <?php
        }
        ?>

        <?php
        if ($_SESSION['userRole'] == 2) {
            ?>
            <li class="sidebar__menu--items"><a class="sidebar__menu--link" href="dashboard.php">
                    <svg class="sidebar__menu--icon" fill="none" height="16" viewbox="0 0 16 16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.300049 1.40005C0.300049 1.10831 0.415941 0.828521 0.622231 0.622231C0.828521 0.415941 1.10831 0.300049 1.40005 0.300049H14.6C14.8918 0.300049 15.1716 0.415941 15.3779 0.622231C15.5842 0.828521 15.7 1.10831 15.7 1.40005V3.60005C15.7 3.89179 15.5842 4.17158 15.3779 4.37787C15.1716 4.58416 14.8918 4.70005 14.6 4.70005H1.40005C1.10831 4.70005 0.828521 4.58416 0.622231 4.37787C0.415941 4.17158 0.300049 3.89179 0.300049 3.60005V1.40005ZM0.300049 8.00005C0.300049 7.70831 0.415941 7.42852 0.622231 7.22223C0.828521 7.01594 1.10831 6.90005 1.40005 6.90005H8.00005C8.29179 6.90005 8.57158 7.01594 8.77787 7.22223C8.98416 7.42852 9.10005 7.70831 9.10005 8.00005V14.6C9.10005 14.8918 8.98416 15.1716 8.77787 15.3779C8.57158 15.5842 8.29179 15.7 8.00005 15.7H1.40005C1.10831 15.7 0.828521 15.5842 0.622231 15.3779C0.415941 15.1716 0.300049 14.8918 0.300049 14.6V8.00005ZM12.4 6.90005C12.1083 6.90005 11.8285 7.01594 11.6222 7.22223C11.4159 7.42852 11.3 7.70831 11.3 8.00005V14.6C11.3 14.8918 11.4159 15.1716 11.6222 15.3779C11.8285 15.5842 12.1083 15.7 12.4 15.7H14.6C14.8918 15.7 15.1716 15.5842 15.3779 15.3779C15.5842 15.1716 15.7 14.8918 15.7 14.6V8.00005C15.7 7.70831 15.5842 7.42852 15.3779 7.22223C15.1716 7.01594 14.8918 6.90005 14.6 6.90005H12.4Z"
                              fill="currentColor"></path>
                    </svg>
                    <span class="sidebar__menu--text">داشبورد</span></a></li>
            <li class="sidebar__menu--items"><a class="sidebar__menu--link active" href="create-listing.php">
                    <svg class="sidebar__menu--icon" fill="none" height="20" viewbox="0 0 20 20" width="20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.99996 18.3334C14.5833 18.3334 18.3333 14.5834 18.3333 10.0001C18.3333 5.41675 14.5833 1.66675 9.99996 1.66675C5.41663 1.66675 1.66663 5.41675 1.66663 10.0001C1.66663 14.5834 5.41663 18.3334 9.99996 18.3334Z"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.66663 10H13.3333" stroke="currentColor" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        <path d="M10 13.3334V6.66675" stroke="currentColor" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                    </svg>
                    <span class="sidebar__menu--text">ایجاد آگهی</span></a></li>
            <li class="sidebar__menu--items"><a class="sidebar__menu--link" href="user-advertisements.php">
                    <svg class="sidebar__menu--icon" fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 10.0001C12.3012 10.0001 14.1667 8.1346 14.1667 5.83342C14.1667 3.53223 12.3012 1.66675 10 1.66675C7.69885 1.66675 5.83337 3.53223 5.83337 5.83342C5.83337 8.1346 7.69885 10.0001 10 10.0001Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M17.1583 18.3333C17.1583 15.1083 13.95 12.5 10 12.5C6.05001 12.5 2.84167 15.1083 2.84167 18.3333" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="sidebar__menu--text">آگهی های من</span></a></li>
            <li class="sidebar__menu--items"><a class="sidebar__menu--link" href="profile.php">
                    <svg class="sidebar__menu--icon" fill="none" height="20" viewbox="0 0 20 20" width="20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 10.0001C12.3012 10.0001 14.1667 8.1346 14.1667 5.83342C14.1667 3.53223 12.3012 1.66675 10 1.66675C7.69885 1.66675 5.83337 3.53223 5.83337 5.83342C5.83337 8.1346 7.69885 10.0001 10 10.0001Z"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M17.1583 18.3333C17.1583 15.1083 13.95 12.5 10 12.5C6.05001 12.5 2.84167 15.1083 2.84167 18.3333"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="sidebar__menu--text">نمایه من</span></a></li>
            <li class="sidebar__menu--items"><a class="sidebar__menu--link logout color-accent-2"
                                                href="logout.php">
                    <svg class="sidebar__menu--icon" fill="none" height="20" viewbox="0 0 20 20" width="20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.41663 6.29995C7.67496 3.29995 9.21663 2.07495 12.5916 2.07495H12.7C16.425 2.07495 17.9166 3.56662 17.9166 7.29162V12.725C17.9166 16.45 16.425 17.9416 12.7 17.9416H12.5916C9.24163 17.9416 7.69996 16.7333 7.42496 13.7833"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12.5001 10H3.01672" stroke="currentColor" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        <path d="M4.87504 7.20825L2.08337 9.99992L4.87504 12.7916" stroke="currentColor"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="sidebar__menu--text">خروج از سیستم</span></a></li>
            <?php
        }
        ?>
    </ul>
</div>