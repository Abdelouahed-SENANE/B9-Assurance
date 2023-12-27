<?php require APPROOT . '/views/include/header.php'; ?>
<!-- =========== Section Admin ============== -->
<section class="flex items-center h-[100vh]">
    <!--  ======== side bar ========= -->
    <aside class="bg-primary h-[100vh] w-[240px]  text-white" id="sidebar">
        <!-- ============ Toggle Button ============ -->
        <div class="flex justify-between flex-col h-full">
            <div>
                <div class=" px-2 space-y-1 mt-5" id="logo">
        
                    <div class="text-lg text-secondary mt-10">
                        <a href=""
                            class="  text-secondary group flex items-center justify-center px-2 py-2  text-lg leading-6 font-medium rounded-md">
                            <!-- Heroicon name: outline/home -->
        
                            <img src="<?= URLROOT?>/assets/images/logo.png" alt="" class="mr-4 flex-shrink-0 h-10 w-10 text-secondary">
                            <span class="text-2xl font-semibold" id="title">Assurances</span>
                        </a>
        
        
                    </div>
        
                </div>
                <div class="px-10 space-y-1 mt-10 ">
                    <!-- Current: "bg-cyan-800 text-secondary", Default: "text-cyan-100 hover:text-secondary hover:bg-cyan-600" -->
                    <a href="<?php echo URLROOT?>/admin/dashboard"
                        class="<?php echo $data['page'] == 'dashboard' ?  'bg-secondary text-white' : ''; ?> text-secondary group  flex items-center px-2 py-2 hover:bg-primary text-lg leading-6 font-medium rounded-md">
                        <!-- Heroicon name: outline/home -->
                        <svg class="mr-4 flex-shrink-0 h-7 w-7 text-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" height="48" width="48"><g id="dashboard-gauge-2--bar-speed-test-loading-dashboard-internet-gauge-progress"><path id="Union" fill="#000" fill-rule="evenodd" d="M46.5 27C46.5 14.574 36.426 4.5 24 4.5S1.5 14.574 1.5 27c0 3.264 0.684 7.178 2.138 10.053C4.51 38.78 6.312 39.5 7.923 39.5h6.275c0.716 0 1.205 -0.735 1.04 -1.432A9.025 9.025 0 0 1 15 35.999c0 -0.866 0.123 -1.704 0.351 -2.497 0.206 -0.714 -0.287 -1.502 -1.03 -1.502H9.855A14.976 14.976 0 0 1 9 27c0 -8.284 6.716 -15 15 -15 8.284 0 15 6.716 15 15 0 1.753 -0.3 3.436 -0.853 5h-4.469c-0.742 0 -1.235 0.788 -1.03 1.502a9.025 9.025 0 0 1 0.112 4.566c-0.163 0.697 0.326 1.432 1.042 1.432h6.276c1.61 0 3.412 -0.721 4.284 -2.447C45.816 34.178 46.5 30.263 46.5 27ZM29.305 16.199a2.5 2.5 0 0 1 1.768 3.061l-3.39 12.655a5.5 5.5 0 1 1 -4.83 -1.295l3.39 -12.654a2.5 2.5 0 0 1 3.062 -1.767Z" clip-rule="evenodd" stroke-width="1"></path></g></svg>
                        <div id="title">Dashboard</div>
                    </a>
                    <a href="<?php echo URLROOT?>/admin/assureur"
                        class="<?php echo $data['page'] == 'assureur' ?  'bg-secondary text-white' : ''; ?> group text-secondary  flex items-center px-2 py-2 hover:bg-secondary text-lg leading-6 font-medium rounded-md">
                        <!-- Heroicon name: outline/home -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" class="mr-4 flex-shrink-0 h-7 w-7 "><g id="share-lock--give-hand-lock-padlock-secure-security-transfer"><path id="Union" fill="#000" fill-rule="evenodd" d="M30.184 7.027a6.323 6.323 0 0 1 12.632 0l0.13 2.762c1.906 0.445 3.31 1.966 3.458 4.072 0.057 0.81 0.096 1.838 0.096 3.139 0 1.3 -0.039 2.329 -0.096 3.139 -0.167 2.385 -1.944 4.019 -4.239 4.19 -1.267 0.096 -3.084 0.171 -5.665 0.171s-4.398 -0.075 -5.666 -0.17c-2.294 -0.172 -4.07 -1.806 -4.238 -4.191A45.089 45.089 0 0 1 26.5 17c0 -1.154 0.026 -2.09 0.066 -2.85 0.115 -2.184 1.514 -3.82 3.488 -4.337l0.13 -2.786Zm8.745 2.498a116.812 116.812 0 0 0 -4.858 0l0.109 -2.31a2.323 2.323 0 0 1 4.64 0l0.109 2.31ZM36.5 14.25c0.967 0 1.75 0.784 1.75 1.75v2a1.75 1.75 0 1 1 -3.5 0v-2c0 -0.966 0.783 -1.75 1.75 -1.75ZM3.303 25.872a2.776 2.776 0 0 0 -1.939 2.388C1.201 29.904 1 32.452 1 35c0 2.366 0.174 4.733 0.33 6.375a2.844 2.844 0 0 0 2.398 2.54C7.962 44.596 17.526 46 24.284 46c5.116 0 15.352 -3.444 20.138 -5.161 1.559 -0.56 2.705 -2.087 2.199 -3.663 -0.679 -2.11 -2.12 -2.91 -3.116 -3.213 -0.68 -0.207 -1.393 -0.123 -2.093 -0.002 -3.275 0.569 -13.348 2.261 -17.128 2.261 -1.783 0 -4.217 -0.326 -5.642 -0.543a1.387 1.387 0 0 1 -1.173 -1.38c0 -0.83 0.708 -1.482 1.535 -1.415l7.715 0.63c1.747 0.142 3.284 -1.257 2.884 -2.964 -0.214 -0.917 -0.5 -1.68 -0.784 -2.29 -0.594 -1.273 -1.833 -2.036 -3.194 -2.386 -2.81 -0.723 -8.022 -1.874 -12.7 -1.874 -3.115 0 -7.3 1.15 -9.622 1.872Z" clip-rule="evenodd" stroke-width="1"></path></g></svg>
                        <div id="title">Assureur</div>
                    </a>
        
        
                    <a href="<?php echo URLROOT?>/admin/client"
                        class="<?php echo $data['page'] == 'dashboard' ?  'bg-secondary text-white' : ''; ?> text-secondary hover:text-white hover:bg-secondary  hover:transition hover:delay-50 group flex items-center px-2 py-2 text-lg leading-6 font-medium rounded-md">
                        <!-- Heroicon name: outline/scale -->
                        <svg class="mr-4 flex-shrink-0 h-7 w-7 text-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"><g id="user-multiple-group--close-geometric-human-multiple-person-up-user"><path id="Union" fill="#000" fill-rule="evenodd" d="M8 4.5a3 3 0 1 1 -6 0 3 3 0 0 1 6 0Zm-3 4a5 5 0 0 0 -5 5 0.5 0.5 0 0 0 0.5 0.5h9a0.5 0.5 0 0 0 0.5 -0.5 5 5 0 0 0 -5 -5Zm8.5 5.5h-2.322c0.047 -0.158 0.072 -0.326 0.072 -0.5a6.24 6.24 0 0 0 -2.492 -4.994A5 5 0 0 1 14 13.5a0.5 0.5 0 0 1 -0.5 0.5ZM9 7.5a3 3 0 0 1 -0.868 -0.127A4.235 4.235 0 0 0 9.25 4.5a4.235 4.235 0 0 0 -1.118 -2.873A3 3 0 1 1 9 7.5Z" clip-rule="evenodd" stroke-width="1"></path></g></svg>
                        <div id="title">Client</div>
                    </a>
        
                    <a href="<?= APPROOT ?>/views/admin/distributeur/distributeur.php"
                        class="text-secondary hover:text-secondary hover:bg-primary hover:transition hover:delay-50 group flex items-center px-2 py-2 text-lg leading-6 font-medium rounded-md">
                        <!-- Heroicon name: outline/credit-card -->
                        <svg class="mr-4 flex-shrink-0 h-7 w-7 text-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" height="14" width="14"><g id="ambulance--car-emergency-health-medical-ambulance"><path id="Subtract" fill="#000" fill-rule="evenodd" d="m12.353 4.368 1.338 2.74h-3.124V3.526h0.438a1.5 1.5 0 0 1 1.348 0.842ZM8.16 2.5c0.466 0 0.883 0.213 1.158 0.548v4.685c0 0.345 0.28 0.625 0.625 0.625h3.854v2.081a1.5 1.5 0 0 1 -1.5 1.5h-0.166l0 0.06a1.896 1.896 0 0 1 -3.787 0.127H5.79a1.896 1.896 0 0 1 -3.784 0h-0.304a1.5 1.5 0 0 1 -1.5 -1.5V4a1.5 1.5 0 0 1 1.5 -1.5H8.16ZM4.93 4.75c0.345 0 0.625 0.28 0.625 0.625v1h1a0.625 0.625 0 1 1 0 1.25h-1v1a0.625 0.625 0 1 1 -1.25 0v-1h-1a0.625 0.625 0 0 1 0 -1.25h1v-1c0 -0.345 0.28 -0.625 0.625 -0.625Z" clip-rule="evenodd" stroke-width="1"></path></g></svg>
                        <div id="title">Article</div>
                    </a>
        
                    <a href="<?php echo URLROOT?>/admin/user"
                        class="text-secondary hover:text-secondary hover:bg-primary hover:transition hover:delay-50 group flex items-center px-2 py-2 text-lg leading-6 font-medium rounded-md">
                        <!-- Heroicon name: outline/user-group -->
                        <svg class="mr-4 flex-shrink-0 h-7 w-7 text-secondary"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" height="14" width="14"><g id="hand-held-tablet-writing--tablet-kindle-device-electronics-ipad-writing-digital-paper-notepad"><path id="Union" fill="#000" fill-rule="evenodd" d="M1.718 1.594a0.197 0.197 0 0 0 -0.198 0.197v8.521h8.919V7.947a0.75 0.75 0 1 1 1.5 0v4.262c0 0.937 -0.76 1.697 -1.697 1.697H1.716c-0.937 0 -1.697 -0.76 -1.697 -1.697V1.791A1.699 1.699 0 0 1 1.718 0.094h6.156a0.75 0.75 0 0 1 0 1.5H1.718Zm1.894 1.413a0.625 0.625 0 1 0 0 1.25h1.894a0.625 0.625 0 1 0 0 -1.25H3.612ZM2.987 6.5c0 -0.345 0.28 -0.625 0.625 -0.625h0.947a0.625 0.625 0 1 1 0 1.25h-0.947a0.625 0.625 0 0 1 -0.625 -0.625Zm6.332 1.034a0.5 0.5 0 0 0 0.266 -0.14l4.099 -4.118a1 1 0 0 0 0 -1.42l-1.06 -1.06a1 1 0 0 0 -1.42 0L7.088 4.892a0.5 0.5 0 0 0 -0.14 0.273l-0.36 2.182a0.5 0.5 0 0 0 0.583 0.573l2.148 -0.386Z" clip-rule="evenodd" stroke-width="1"></path></g></svg>
                        <div id="title">Claims</div>
                    </a>
        
                    <a href="<?= URLROOT ?>/admin/account"
                        class="text-secondary hover:text-secondary hover:bg-primary hover:transition hover:delay-50 group flex items-center px-2 py-2 text-lg leading-6 font-medium rounded-md">
                        <!-- Heroicon name: outline/document-report -->
                        <svg class="mr-4 flex-shrink-0 h-7 w-7 text-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" height="14" width="14"><g id="bag-dollar--bag-payment-cash-money-finance"><path id="Subtract" fill="#000" fill-rule="evenodd" d="M13.463 9.692C13.463 12.664 10.77 14 7 14S0.537 12.664 0.537 9.713c0 -3.231 1.616 -4.868 4.847 -6.505L4.24 1.077A0.7 0.7 0 0 1 4.843 0H9.41a0.7 0.7 0 0 1 0.603 1.023L8.616 3.208c3.23 1.615 4.847 3.252 4.847 6.484ZM7.625 4.887a0.625 0.625 0 1 0 -1.25 0v0.627a1.74 1.74 0 0 0 -0.298 3.44l1.473 0.322a0.625 0.625 0 0 1 -0.133 1.236h-0.834a0.625 0.625 0 0 1 -0.59 -0.416 0.625 0.625 0 1 0 -1.178 0.416 1.877 1.877 0 0 0 1.56 1.239v0.636a0.625 0.625 0 1 0 1.25 0v-0.636a1.876 1.876 0 0 0 0.192 -3.696l-1.473 -0.322a0.49 0.49 0 0 1 0.105 -0.97h0.968a0.622 0.622 0 0 1 0.59 0.416 0.625 0.625 0 0 0 1.178 -0.417 1.874 1.874 0 0 0 -1.56 -1.238v-0.637Z" clip-rule="evenodd" stroke-width="1"></path></g></svg>
                        <div id="title">Premium</div>
                    </a>
        
                </div>
            </div>
            <div class="px-10 space-y-1 mb-10 ">
            <a href="<?php echo URLROOT?>/admin/home"
                        class="text-secondary group  flex items-center px-2 py-2 hover:bg-primary text-lg leading-6 font-medium rounded-md">
                        <!-- Heroicon name: outline/home -->
                        <svg class="mr-4 flex-shrink-0 h-7 w-7 text-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" height="14" width="14"><g id="logout-1--arrow-exit-frame-leave-logout-rectangle-right"><path id="Union" fill="#000" fill-rule="evenodd" d="M0 1.5A1.5 1.5 0 0 1 1.5 0h7A1.5 1.5 0 0 1 10 1.5v1.939a2 2 0 0 0 -0.734 1.311H5.75a2.25 2.25 0 1 0 0 4.5h3.516A2 2 0 0 0 10 10.561V12.5A1.5 1.5 0 0 1 8.5 14h-7A1.5 1.5 0 0 1 0 12.5v-11Zm10.963 2.807A0.75 0.75 0 0 0 10.5 5v1H5.75a1 1 0 0 0 0 2h4.75v1a0.75 0.75 0 0 0 1.28 0.53l2 -2a0.75 0.75 0 0 0 0 -1.06l-2 -2a0.75 0.75 0 0 0 -0.817 -0.163Z" clip-rule="evenodd" stroke-width="1"></path></g></svg>
                        <div id="title">Logout</div>
                    </a>
            </div>
        </div>
        

    </aside>

    <div class="flex-grow">
        <nav class="w-full bg-third py-3 px-5">
            <div class="navbar flex items-center justify-between">
                <div class="">
                    <a class="btn btn-ghost text-2xl tracking-widest text-secondary font-bold">Dashboard</a>
                </div>
                <div class="flex items-center">
                    <form action="">
                        <div class="relative w-[350px] mr-[20px]">
                            <input type="text" name="" id=""
                                class="block w-full pl-5 focus:outline-gray-400 border border-gray-400 outline-none py-1 rounded-lg"
                                placeholder="Search..." />
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 absolute top-[50%] right-[10px] translate-y-[-50%]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </form>

                    <button class="btn btn-ghost btn-circle mr-3">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="badge badge-xs badge-primary indicator-item"></span>
                        </div>
                    </button>
                    <div class="flex items-center">
                        <img src="<?= URLROOT  ?>/img/profile.png" alt="Photo"
                            class="w-[35px] h-[35px] rounded-full mr-1" />
                        <div class="text-sm font-semibold text-center">
                            <p>Senane Abdelouahed</p>
                            <span class="text-gray-500 text-sm"> Role name </span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>