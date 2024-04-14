<?php
    $type = 'transparent';
    $top = "false";
    $title = "Khách sạn";
    include './template-parts/header.php'
?>
<?php
    $type = "compact"; // full,compact,title
    $bg = './assets/app/images/cover/hotel-category-cover.jpg';
    $pageTitle = '';
    $tab = "false";
    include './components/main-hero.php'
?>
<section class="collection-main pt-10 pb-14">
    <div class="container">
        <div class="collection-grid grid gap-8">
            <?php
                include './components/filter.php'
            ?>
            <div class="collection-list">
                <div class="block lg:hidden mb-3">
                    <a href="#" class="collection-filter-open d-inline-flex align-items-center gap-2 border border-gray rounded-6 text-body hover:text-primary bg-white">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.33 17.0811H4.0293" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M13.1406 7.3887H19.4413" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.72629 7.33453C8.72629 6.03888 7.66813 4.98828 6.36314 4.98828C5.05816 4.98828 4 6.03888 4 7.33453C4 8.63019 5.05816 9.68079 6.36314 9.68079C7.66813 9.68079 8.72629 8.63019 8.72629 7.33453Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9997 17.0421C19.9997 15.7464 18.9424 14.6958 17.6374 14.6958C16.3316 14.6958 15.2734 15.7464 15.2734 17.0421C15.2734 18.3377 16.3316 19.3883 17.6374 19.3883C18.9424 19.3883 19.9997 18.3377 19.9997 17.0421Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="whitespace-nowrap">Bộ lọc</span>
                    </a>
                </div>
                <div class="collection-list-head pb-6">
                    <h1 class="font-medium fs-24 m-0">128 khách sạn tại Khánh Hoà</h1>
                </div>
                <div class="collection-list-items flex flex-col gap-3">
                    <?php
                        $sale = 'true';
                        include './components/hotel-list.php'
                    ?>
                    <?php
                        $sale = 'true';
                        include './components/hotel-list.php'
                    ?>
                    <?php
                        $sale = 'false';
                        include './components/hotel-list.php'
                    ?>
                    <?php
                        $sale = 'false';
                        include './components/hotel-list.php'
                    ?>
                    <?php
                        $sale = 'false';
                        include './components/hotel-list.php'
                    ?>
                    <?php
                        $sale = 'true';
                        include './components/hotel-list.php'
                    ?>
                    <?php
                        $sale = 'true';
                        include './components/hotel-list.php'
                    ?>
                    <?php
                        $sale = 'true';
                        include './components/hotel-list.php'
                    ?>
                    <?php
                        $sale = 'false';
                        include './components/hotel-list.php'
                    ?>
                    <?php
                        $sale = 'false';
                        include './components/hotel-list.php'
                    ?>
                    <?php
                        $sale = 'false';
                        include './components/hotel-list.php'
                    ?>
                    <?php
                        $sale = 'false';
                        include './components/hotel-list.php'
                    ?>
                </div>
                <div class="collection-navigation pt-6">
                    <nav aria-label="Page navigation">
                        <ul class="pagination mb-0 gap-6px justify-center lg:justify-start flex-wrap">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&lsaquo;</span>
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">25</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&rsaquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include './template-parts/footer.php'
?>