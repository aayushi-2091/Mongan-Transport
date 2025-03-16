<?php require_once"../../components/config.php"; ?>
<style>
  .sidebar {
    box-shadow: 0 5px 10px 0 rgba(230, 230, 243, 0.88);
    -webkit-box-shadow: 0 5px 10px 0 #0d6efd;
  }
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="<?= BASE_PATH ?>/dashboard/dashboard.php">
        <i class="typcn typcn-device-desktop menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= BASE_PATH ?>/site_details/site_details.php">
        <i class="typcn typcn-mortar-board menu-icon"></i>
        <span class="menu-title">Site details</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="typcn typcn-document-text menu-icon"></i>
        <span class="menu-title">Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?= BASE_PATH ?>/pages/home.php">Home</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= BASE_PATH ?>/pages/about.php">About</a></li>
          <li class="nav-item"> <a class="nav-link" href="Car_Transport.php">Services</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= BASE_PATH ?>/pages/why_choose_us.php">Why Choose Us </a></li>
          <li class="nav-item"> <a class="nav-link" href="Contact.php">Contact</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
        aria-controls="form-elements">
        <i class="typcn typcn-film menu-icon"></i>
        <span class="menu-title">Testimonials</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="<?= BASE_PATH ?>/testimonials/add_testimonial.php">Add Testimonials</a></li>
        </ul>
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="<?= BASE_PATH ?>/testimonials/view_testimonial.php">View Testimonials</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>