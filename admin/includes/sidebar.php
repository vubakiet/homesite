<?php
$path = dirname(__FILE__);
require_once $path . '/../../lib/checkLogin.php';
checkLogin();
?>

<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <img src="assets/images/logo-icon-2.png" class="logo-icon" alt="logo icon">
    </div>
    <div>
      <h4 class="logo-text">Blackdash</h4>
    </div>
    <div class="toggle-icon ms-auto">
      <ion-icon name="menu-sharp"></ion-icon>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon">
          <i class="bi bi-house-door"></i>
        </div>
        <div class="menu-title">Dashboard</div>
      </a>
    </li>
    <li class="menu-label">Pages</li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <i class="bi bi-box-seam"></i>
        </div>
        <div class="menu-title">Sản phẩm</div>
      </a>
      <ul>
        <li>
          <a href="product-table.php">
            <div class="parent-icon">
            </div>
            <div class="menu-title">Sản phẩm chưa đăng bán</div>
          </a>
        </li>
        <li>
          <a href="product-table-sell.php">
            <div class="parent-icon">
            </div>
            <div class="menu-title">Sản phẩm đang bán</div>
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="category.php">
        <div class="parent-icon">
          <i class="bi bi-list-nested"></i>
        </div>
        <div class="menu-title">Danh mục sản phẩm</div>
      </a>
    </li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <i class="bi bi-file-earmark-text"></i>
        </div>
        <div class="menu-title">Quản lý đơn hàng</div>
      </a>
      <ul>
        <li>
          <a href="order-canceled.php">
            <div class="parent-icon">
            </div>
            <div class="menu-title">Đơn hàng đã hủy</div>
          </a>
        </li>
        <li>
          <a href="order-processing.php">
            <div class="parent-icon">
            </div>
            <div class="menu-title">Đơn hàng đang xử lý</div>
          </a>
        </li>
        <li>
          <a href="order-processed.php">
            <div class="parent-icon">
            </div>
            <div class="menu-title">Đơn hàng đã xử lý</div>
          </a>
        </li>
        <li>
          <a href="order-completed.php">
            <div class="parent-icon">
            </div>
            <div class="menu-title">Đơn hàng đã hoàn tất</div>
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="customer.php">
        <div class="parent-icon">
          <i class="bi bi-person-circle"></i>
        </div>
        <div class="menu-title">Khách hàng</div>
      </a>
    </li>
    <li>
      <a href="customer-support.php">
        <div class="parent-icon">
          <i class="bi bi-person-bounding-box"></i>
        </div>
        <div class="menu-title">Hỗ trợ khách hàng</div>
      </a>
    </li>
    <li>
      <a href="account.php">
        <div class="parent-icon">
          <i class="bi bi-list-nested"></i>
        </div>
        <div class="menu-title">Tài khoản</div>
      </a>
    </li>
  </ul>

  <!--end navigation-->
</aside>