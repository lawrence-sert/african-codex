<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid">
        <i class="g-padding-r-5--xs ti-menu-alt" id="sidebarToggle"></i>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="chat-room.php">
                       <i class="g-padding-r-5--xs ti-comments"></i> Chat Room
                   </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="git-hub.php">
                       <i class="g-padding-r-5--xs ti-github"></i> Github
                   </a>
                </li>
                   <li class="nav-item">
                    <a class="nav-link" href="resources.php">
                        <i class="g-padding-r-5--xs ti-archive"></i> Resources
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#newPageModal">
                        <i class="g-padding-r-5--xs ti-write"></i> New Page
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php require_once'include/snippets/new_page_modal.php'; ?>