<div class="menu">
    <ul>
        <li><a href="index.php?loai=<?= $_GET['loai']?>"><i class="fas fa-home"></i>Tổng Quan</a></li>
        <li>
            <a href=""><i class="fas fa-database"></i>Quản lý bài viết
                <ul>
                    <li><a href="index.php?loai=<?= $_GET['loai']?>&ac=danhmucsp">Danh mục bài viết</a></li>
                    <li><a href=""> Loại bài viết</a></li>
                    <li><a href="index.php?loai=<?= $_GET['loai']?>&ac=chitietsp">Chi tiêt bài viết</a></li>
                </ul>
            </a>
        </li>
        <li> <a href=""><i class="fas fa-clipboard-list"></i>Quản lý bài viết
                <ul>
                    <li><a href="">Danh mục bài viết</a></li>
                    <li><a href=""> Loại bài viết</a></li>
                    <li><a href="">Chi tiêt bài viết</a></li>
                </ul>
            </a>
        </li>
        <li> <a href=""><i class="fas fa-clipboard-list"></i>Quản lý tài khoản
                <ul>
                    <li><a href="index.php?loai=<?= $_GET['loai']?>&ac=quantrivien">List Quản trị viên</a></li>
                    <li><a href="index.php?loai=<?= $_GET['loai']?>&ac=khachhang">List Khách hàng</a></li>
                    <li><a  href="index.php?loai=<?= $_GET['loai']?>&ac=danhsachden">Danh sách đen</a></li>
                </ul>
            </a>
        </li>

    </ul>
</div>