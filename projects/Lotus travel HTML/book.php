<?php
$type = 'fill';
$top = "false";
$title = "Yêu cầu đặt phòng";
include './template-parts/header.php'
?>
<section class="detail-book-section pb-18 flex-1">
    <div class="container">
        <div class="flex justify-start py-6">
            <a href="./hotel-detail.php" class="hover-opacity-90 font-medium fs-18 md:fs-20 lg:fs-24 line-height-auto flex items-center gap-4 text-body hover:text-primary-600">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_35_3948" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                    <rect x="0.5" y="0.5" width="15" height="15" rx="3.5" transform="matrix(-4.37114e-08 1 1 4.37114e-08 -2.18557e-08 2.18557e-08)" fill="currentColor" stroke="currentColor"/>
                    </mask>
                    <g mask="url(#mask0_35_3948)">
                    <path d="M10 3L5 8L10 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </g>
                </svg>
                <span>Yêu cầu đặt phòng</span>
            </a>
        </div>
        <div class="detail-book-grid grid gap-8">
            <div class="detail-book-left flex flex-col gap-5">
                <div class="bg-white rounded-12 p-8 flex flex-col gap-5 box-shadow">
                    <h3 class="m-0 text-primary-600 font-semibold fs-20">Thông tin liên hệ</h3>
                    <div class="bg-main rounded-8 p-4 text-gray">
                        <button type="button" class="btn-less toggle-modal-account text-blue hover-underline font-medium" data-target-tab="#modal-account-login" data-bs-toggle="modal" data-bs-target="#modal-account">Đăng nhập</button> hoặc <button type="button" class="btn-less toggle-modal-account text-blue hover-underline font-medium" data-target-tab="#modal-account-register" data-bs-toggle="modal" data-bs-target="#modal-account">đăng ký</button> để quản lý đặt phòng mọi lúc mọi nơi
                    </div>
                    <form action="" class="flex flex-col gap-6 items-start w-full">
                        <div class="flex flex-col gap-5 w-full">
                            <div class="theme-form-group">
                                <label for="" class="theme-form-label">Họ và tên</label>
                                <input type="text" class="theme-form-control" required value="" placeholder="Nhập họ tên của bạn">
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="theme-form-group">
                                    <label for="" class="theme-form-label">Số điện thoại</label>
                                    <div class="form-control-tel">
                                        <input type="tel" class="theme-form-control" required value="" placeholder="Số điện thoại của bạn">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="./assets/app/images/icons/flags/flag-vi.png" alt="Việt Nam">
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <label class="custom-radio-flag hover-opacity-75">
                                                        <input type="radio" name="select-region" class="custom-radio-flag-input" data-src="./assets/app/images/icons/flags/flag-vi.png" checked/>
                                                        <div class="d-flex align-items-center gap-2 custom-radio-flag-item">
                                                            <img src="./assets/app/images/icons/flags/flag-vi.png" alt="Việt Nam">
                                                            <span class="fs-13">Việt Nam</span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom-radio-flag hover-opacity-75">
                                                        <input type="radio" name="select-region" class="custom-radio-flag-input" data-src="./assets/app/images/icons/flags/flag-vi.png" checked/>
                                                        <div class="d-flex align-items-center gap-2 custom-radio-flag-item">
                                                            <img src="./assets/app/images/icons/flags/flag-vi.png" alt="Việt Nam">
                                                            <span class="fs-13">Việt Nam</span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom-radio-flag hover-opacity-75">
                                                        <input type="radio" name="select-region" class="custom-radio-flag-input" data-src="./assets/app/images/icons/flags/flag-vi.png" checked/>
                                                        <div class="d-flex align-items-center gap-2 custom-radio-flag-item">
                                                            <img src="./assets/app/images/icons/flags/flag-vi.png" alt="Việt Nam">
                                                            <span class="fs-13">Việt Nam</span>
                                                        </div>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="theme-form-group">
                                    <label for="" class="theme-form-label">Email</label>
                                    <input type="email" class="theme-form-control" required value="" placeholder="Nhập địa chỉ email">
                                </div>
                            </div>
                            <div class="theme-form-group">
                                <label for="" class="theme-form-label">Yêu cầu riêng của bạn</label>
                                <textarea class="theme-form-control no-resize" required value="" placeholder="Yêu cầu riêng" rows="4"></textarea>
                            </div>
                            <label class="custom-checkbox capitalize">
                                Tôi muốn đặt phòng cho người khác
                                <input type="checkbox" class="custom-checkbox-input">
                                <span class="custom-checkbox-mark"></span>
                            </label>
                        </div>
                    </form>                    
                </div>
                <div class="bg-white rounded-12 p-8 flex flex-col gap-5 box-shadow">
                    <h3 class="m-0 text-primary-600 font-semibold fs-20">Phương thức thanh toán</h3>
                    <div class="border border-solid border-gray rounded-8 py-5 px-6 flex items-center gap-4">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_35_4050)">
                            <path d="M27.0667 7H7.93333C7.6756 7 7.46667 7.20893 7.46667 7.46667C7.46667 7.7244 7.6756 7.93333 7.93333 7.93333H10.7543C8.68331 9.25117 7.44002 11.5454 7.46667 14C7.44002 16.4546 8.68331 18.7488 10.7543 20.0667H0.933333V7.93333H5.6C5.85773 7.93333 6.06667 7.7244 6.06667 7.46667C6.06667 7.20893 5.85773 7 5.6 7H0.933333C0.417868 7 0 7.41787 0 7.93333V20.0667C0 20.5821 0.417868 21 0.933333 21H27.0667C27.5821 21 28 20.5821 28 20.0667V7.93333C28 7.41787 27.5821 7 27.0667 7ZM8.4 14C8.4 10.6549 10.9121 7.93333 14 7.93333C17.0879 7.93333 19.6 10.6549 19.6 14C19.6 17.3451 17.0879 20.0667 14 20.0667C10.9121 20.0667 8.4 17.3451 8.4 14ZM27.0667 20.0667H17.2457C19.3167 18.7488 20.56 16.4546 20.5333 14C20.56 11.5454 19.3167 9.25117 17.2457 7.93333H27.0667V20.0667Z" fill="#4D4D4D"/>
                            <path d="M24.6103 1.96465C24.3893 1.85409 24.1336 1.83563 23.8991 1.91332L13.8471 5.28218C13.6022 5.36414 13.4702 5.62907 13.5521 5.87392C13.6341 6.11876 13.899 6.25081 14.1439 6.16885L24.1931 2.79998L25.2244 5.87485C25.2773 6.03324 25.4108 6.15135 25.5744 6.18471C25.738 6.21806 25.907 6.16158 26.0177 6.03654C26.1284 5.9115 26.164 5.73691 26.1111 5.57852L25.0793 2.50552C25.0024 2.26929 24.8332 2.07421 24.6103 1.96465Z" fill="#4D4D4D"/>
                            <path d="M13.8562 21.8315L3.80698 25.1999L2.77564 22.1251C2.69381 21.8802 2.42899 21.7481 2.18414 21.8299C1.9393 21.9117 1.80715 22.1765 1.88898 22.4214L2.91891 25.4935C2.99524 25.7293 3.1635 25.9243 3.38558 26.0343C3.51478 26.0986 3.65708 26.1321 3.80138 26.1323C3.90169 26.1325 4.00139 26.1167 4.09678 26.0857L14.1488 22.7168C14.3936 22.6348 14.5257 22.3699 14.4437 22.1251C14.3618 21.8802 14.0968 21.7482 13.852 21.8301L13.8562 21.8315Z" fill="#4D4D4D"/>
                            <path d="M15.3998 12.3667C15.3998 12.6244 15.6088 12.8334 15.8665 12.8334C16.1242 12.8334 16.3332 12.6244 16.3332 12.3667C16.2881 11.3206 15.5033 10.4555 14.4665 10.3092V10.2667C14.4665 10.009 14.2576 9.80005 13.9998 9.80005C13.7421 9.80005 13.5332 10.009 13.5332 10.2667V10.3092C12.4964 10.4555 11.7116 11.3206 11.6665 12.3667C11.7116 13.4128 12.4964 14.2779 13.5332 14.4242V16.7282C13.0138 16.6104 12.634 16.1648 12.5998 15.6334C12.5998 15.3756 12.3909 15.1667 12.1332 15.1667C11.8754 15.1667 11.6665 15.3756 11.6665 15.6334C11.7116 16.6795 12.4964 17.5446 13.5332 17.6909V17.7334C13.5332 17.9911 13.7421 18.2 13.9998 18.2C14.2576 18.2 14.4665 17.9911 14.4665 17.7334V17.6909C15.5033 17.5446 16.2881 16.6795 16.3332 15.6334C16.2881 14.5873 15.5033 13.7222 14.4665 13.5758V11.2719C14.9858 11.3897 15.3657 11.8353 15.3998 12.3667ZM12.5998 12.3667C12.634 11.8353 13.0138 11.3897 13.5332 11.2719V13.4615C13.0138 13.3437 12.634 12.8981 12.5998 12.3667ZM15.3998 15.6334C15.3657 16.1648 14.9858 16.6104 14.4665 16.7282V14.5386C14.9858 14.6564 15.3657 15.102 15.3998 15.6334Z" fill="#4D4D4D"/>
                            <path d="M23.8002 19.1333H25.6668C25.9246 19.1333 26.1335 18.9243 26.1335 18.6666V16.7999C26.1335 16.5422 25.9246 16.3333 25.6668 16.3333C25.4091 16.3333 25.2002 16.5422 25.2002 16.7999V18.1999H23.8002C23.5424 18.1999 23.3335 18.4089 23.3335 18.6666C23.3335 18.9243 23.5424 19.1333 23.8002 19.1333Z" fill="#4D4D4D"/>
                            <path d="M2.33337 16.3333C2.07563 16.3333 1.8667 16.5422 1.8667 16.7999V18.6666C1.8667 18.9243 2.07563 19.1333 2.33337 19.1333H4.20003C4.45777 19.1333 4.6667 18.9243 4.6667 18.6666C4.6667 18.4089 4.45777 18.1999 4.20003 18.1999H2.80003V16.7999C2.80003 16.5422 2.5911 16.3333 2.33337 16.3333Z" fill="#4D4D4D"/>
                            <path d="M4.20003 8.8667H2.33337C2.07563 8.8667 1.8667 9.07563 1.8667 9.33337V11.2C1.8667 11.4578 2.07563 11.6667 2.33337 11.6667C2.5911 11.6667 2.80003 11.4578 2.80003 11.2V9.80003H4.20003C4.45777 9.80003 4.6667 9.5911 4.6667 9.33337C4.6667 9.07563 4.45777 8.8667 4.20003 8.8667Z" fill="#4D4D4D"/>
                            <path d="M23.8002 9.80003H25.2002V11.2C25.2002 11.4578 25.4091 11.6667 25.6668 11.6667C25.9246 11.6667 26.1335 11.4578 26.1335 11.2V9.33337C26.1335 9.07563 25.9246 8.8667 25.6668 8.8667H23.8002C23.5424 8.8667 23.3335 9.07563 23.3335 9.33337C23.3335 9.5911 23.5424 9.80003 23.8002 9.80003Z" fill="#4D4D4D"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_35_4050">
                            <rect width="28" height="28" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <p class="m-0 font-medium flex-1">Tôi sẽ trả khi đến nghỉ <span class="font-normal fs-12 text-detail-secondary">(Miễn phí huỷ bất kỳ lúc nào)</span></p>
                    </div>
                </div>
            </div>
            <div class="detail-book-right">
                <div class="bg-white rounded-12 p-8 flex flex-col gap-5 box-shadow">
                    <h3 class="m-0 text-primary-600 font-semibold fs-20">Thông tin đặt phòng</h3>
                    <div class="w-full">
                        <div class="border-0 border-b border-solid border-gray pb-6 flex items-center gap-5">
                            <div class="detail-book-thumb">
                                <a href="./hotel-detail.php" class="detail-book-thumb-ratio ratio-thumb rounded-6 hover-opacity-90">
                                    <img src="./assets/app/images/hotel-packs/hotel-pack-1.jpg" alt="Khách sạn Flamingo Đại Hải" class="ratio-media">
                                </a>
                            </div>
                            <div class="flex-1 flex flex-col gap-2">
                                <a href="./hotel-detail.php" class="text-truncate-2 font-semibold fs-16 text-body hover:text-primary-600">Khách sạn Flamingo Đại Hải</a>
                                <div class="flex gap-6px items-start">
                                    <div class="flex">
                                        <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.40022 9.6C8.16504 9.6 9.60025 8.16479 9.60025 6.39998C9.60025 4.63516 8.16504 3.19995 6.40022 3.19995C4.63541 3.19995 3.2002 4.63516 3.2002 6.39998C3.2002 8.16479 4.63541 9.6 6.40022 9.6ZM6.40022 4.79996C7.28263 4.79996 8.00023 5.51757 8.00023 6.39998C8.00023 7.28238 7.28263 7.99999 6.40022 7.99999C5.51781 7.99999 4.80021 7.28238 4.80021 6.39998C4.80021 5.51757 5.51781 4.79996 6.40022 4.79996Z" fill="#677185"/>
                                            <path d="M5.93612 15.8513C6.07152 15.948 6.23374 16 6.40012 16C6.5665 16 6.72873 15.948 6.86413 15.8513C7.10733 15.6793 12.8234 11.5521 12.8002 6.40005C12.8002 2.87122 9.92895 0 6.40012 0C2.87129 0 7.04307e-05 2.87122 7.04307e-05 6.39605C-0.0231298 11.5521 5.69292 15.6793 5.93612 15.8513ZM6.40012 1.60001C9.04734 1.60001 11.2002 3.75283 11.2002 6.40405C11.217 9.95448 7.68973 13.1425 6.40012 14.1881C5.11131 13.1417 1.58328 9.95288 1.60008 6.40005C1.60008 3.75283 3.7529 1.60001 6.40012 1.60001Z" fill="#677185"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-truncate-2 fs-12 text-gray">104 Phạm Văn Đồng, Tổ 14, TP Nha Trang, tỉnh khánh hoà</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-0 border-b border-solid border-gray py-6 flex flex-col items-start gap-4">
                            <div class="flex items-center justify-between gap-4 w-full">
                                <span class="text-gray">Phòng đã chọn</span>
                                <span class="font-medium text-right">1x Deluxe King</span>
                            </div>
                            <div class="detail-read-more-area read-more-area relative block w-full">
                                <div class="detail-read-more-inner relative block w-full overflow-hidden" data-max-height="24" style="max-height: 24px;">
                                    <div class="read-more-area-content relative z-10">
                                        <div class="flex items-center gap-x-4 md:gap-x-5 lg:gap-x-6 gap-y-2 flex-wrap">
                                            <div class="flex items-center gap-2">
                                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.14984 3.59982C3.14984 3.00311 3.38688 2.43085 3.80882 2.00891C4.23076 1.58697 4.80302 1.34993 5.39973 1.34993C5.99644 1.34993 6.56871 1.58697 6.99064 2.00891C7.41258 2.43085 7.64962 3.00311 7.64962 3.59982C7.64962 4.19653 7.41258 4.7688 6.99064 5.19073C6.56871 5.61267 5.99644 5.84971 5.39973 5.84971C4.80302 5.84971 4.23076 5.61267 3.80882 5.19073C3.38688 4.7688 3.14984 4.19653 3.14984 3.59982ZM5.39973 0C4.445 0 3.52937 0.379266 2.85427 1.05436C2.17918 1.72946 1.79991 2.64509 1.79991 3.59982C1.79991 4.55455 2.17918 5.47018 2.85427 6.14528C3.52937 6.82037 4.445 7.19964 5.39973 7.19964C6.35446 7.19964 7.27009 6.82037 7.94519 6.14528C8.62029 5.47018 8.99955 4.55455 8.99955 3.59982C8.99955 2.64509 8.62029 1.72946 7.94519 1.05436C7.27009 0.379266 6.35446 0 5.39973 0ZM12.1494 4.49977C12.1494 4.14175 12.2916 3.79839 12.5448 3.54523C12.7979 3.29207 13.1413 3.14984 13.4993 3.14984C13.8574 3.14984 14.2007 3.29207 14.4539 3.54523C14.707 3.79839 14.8493 4.14175 14.8493 4.49977C14.8493 4.8578 14.707 5.20116 14.4539 5.45432C14.2007 5.70748 13.8574 5.84971 13.4993 5.84971C13.1413 5.84971 12.7979 5.70748 12.5448 5.45432C12.2916 5.20116 12.1494 4.8578 12.1494 4.49977ZM13.4993 1.79991C12.7833 1.79991 12.0966 2.08436 11.5902 2.59068C11.0839 3.09701 10.7995 3.78373 10.7995 4.49977C10.7995 5.21582 11.0839 5.90255 11.5902 6.40887C12.0966 6.91519 12.7833 7.19964 13.4993 7.19964C14.2154 7.19964 14.9021 6.91519 15.4084 6.40887C15.9147 5.90255 16.1992 5.21582 16.1992 4.49977C16.1992 3.78373 15.9147 3.09701 15.4084 2.59068C14.9021 2.08436 14.2154 1.79991 13.4993 1.79991ZM11.0226 13.5335C11.6553 13.79 12.4662 13.9493 13.5002 13.9493C15.5539 13.9493 16.7275 13.322 17.3673 12.5472C17.6778 12.171 17.8353 11.7912 17.9163 11.5005C17.9625 11.3321 17.9905 11.1592 18 10.9849V10.9606C18 10.703 17.9493 10.448 17.8507 10.2101C17.7522 9.97219 17.6077 9.75601 17.4256 9.57391C17.2435 9.39182 17.0274 9.24737 16.7894 9.14882C16.5515 9.05027 16.2965 8.99955 16.039 8.99955H10.9615C10.9363 8.99955 10.912 8.99955 10.8877 9.00135C11.2422 9.37033 11.4996 9.83381 11.622 10.3495H16.039C16.3738 10.3495 16.6456 10.6186 16.6501 10.9516C16.6437 11.0161 16.6316 11.0799 16.6141 11.1423C16.5585 11.3425 16.4602 11.5282 16.3261 11.6868C16.0111 12.0702 15.2713 12.5994 13.5002 12.5994C12.6183 12.5994 11.9919 12.468 11.5473 12.2889C11.4501 12.6489 11.2899 13.0835 11.0226 13.5335ZM2.0249 8.99955C1.48786 8.99955 0.972821 9.21289 0.593079 9.59263C0.213337 9.97237 0 10.4874 0 11.0244V11.2746C0.00105768 11.3372 0.00526274 11.3997 0.0125993 11.4618C0.0869172 12.1315 0.327615 12.7719 0.712764 13.3247C1.44893 14.3759 2.85466 15.2992 5.39973 15.2992C7.9448 15.2992 9.35053 14.3768 10.0867 13.3238C10.4719 12.7711 10.7127 12.1306 10.7869 11.4609C10.7932 11.399 10.7974 11.3369 10.7995 11.2746V11.0244C10.7995 10.4874 10.5861 9.97237 10.2064 9.59263C9.82664 9.21289 9.3116 8.99955 8.77456 8.99955H2.0249ZM1.34993 11.2557V11.0244C1.34993 10.8454 1.42104 10.6738 1.54763 10.5472C1.67421 10.4206 1.84589 10.3495 2.0249 10.3495H8.77456C8.95357 10.3495 9.12525 10.4206 9.25183 10.5472C9.37842 10.6738 9.44953 10.8454 9.44953 11.0244V11.2557L9.44323 11.3277C9.39194 11.767 9.23305 12.1868 8.98065 12.5499C8.53697 13.1843 7.57942 13.9493 5.39973 13.9493C3.22004 13.9493 2.26249 13.1843 1.81791 12.5499C1.56583 12.1867 1.40725 11.7669 1.35623 11.3277C1.3535 11.3038 1.3514 11.2798 1.34993 11.2557Z" fill="#4D4D4D"/>
                                                </svg>
                                                <div class="flex items-center gap-1 text-gray flex-nowrap">
                                                    <span class="whitespace-nowrap">2 người</span>
                                                    <button class="btn-less text-blue hover-underline whitespace-nowrap" data-bs-toggle="modal" data-bs-target="#modal-hotel-book">(Xem chi tiết)</button>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.90909 6.54545C5.39455 6.54545 5.86912 6.4015 6.27276 6.13179C6.67641 5.86208 6.99102 5.47873 7.1768 5.03022C7.36257 4.58171 7.41118 4.08819 7.31647 3.61205C7.22176 3.13592 6.98799 2.69856 6.64472 2.35528C6.30144 2.01201 5.86408 1.77824 5.38795 1.68353C4.91181 1.58882 4.41829 1.63743 3.96978 1.82321C3.52127 2.00898 3.13792 2.32359 2.86821 2.72724C2.5985 3.13088 2.45455 3.60545 2.45455 4.09091C2.45455 4.7419 2.71315 5.36622 3.17347 5.82654C3.63378 6.28685 4.2581 6.54545 4.90909 6.54545ZM4.90909 3.27273C5.07091 3.27273 5.2291 3.32071 5.36365 3.41062C5.4982 3.50052 5.60307 3.6283 5.66499 3.7778C5.72692 3.92731 5.74312 4.09182 5.71155 4.25053C5.67998 4.40924 5.60206 4.55503 5.48763 4.66945C5.37321 4.78388 5.22742 4.8618 5.06871 4.89337C4.91 4.92494 4.74549 4.90874 4.59599 4.84681C4.44648 4.78488 4.3187 4.68002 4.2288 4.54547C4.13889 4.41092 4.09091 4.25273 4.09091 4.09091C4.09091 3.87391 4.17711 3.66581 4.33055 3.51237C4.48399 3.35893 4.6921 3.27273 4.90909 3.27273ZM15.5455 1.63636H9C8.783 1.63636 8.5749 1.72256 8.42146 1.876C8.26802 2.02944 8.18182 2.23755 8.18182 2.45455V7.36364H1.63636V0.818182C1.63636 0.601187 1.55016 0.393079 1.39672 0.23964C1.24328 0.0862012 1.03518 0 0.818182 0C0.601187 0 0.393079 0.0862012 0.23964 0.23964C0.086201 0.393079 0 0.601187 0 0.818182V11.4545C0 11.6715 0.086201 11.8797 0.23964 12.0331C0.393079 12.1865 0.601187 12.2727 0.818182 12.2727C1.03518 12.2727 1.24328 12.1865 1.39672 12.0331C1.55016 11.8797 1.63636 11.6715 1.63636 11.4545V9H16.3636V11.4545C16.3636 11.6715 16.4498 11.8797 16.6033 12.0331C16.7567 12.1865 16.9648 12.2727 17.1818 12.2727C17.3988 12.2727 17.6069 12.1865 17.7604 12.0331C17.9138 11.8797 18 11.6715 18 11.4545V4.09091C18 3.43992 17.7414 2.8156 17.2811 2.35528C16.8208 1.89497 16.1964 1.63636 15.5455 1.63636ZM16.3636 7.36364H9.81818V3.27273H15.5455C15.7625 3.27273 15.9706 3.35893 16.124 3.51237C16.2774 3.66581 16.3636 3.87391 16.3636 4.09091V7.36364Z" fill="#4D4D4D"/>
                                                </svg>
                                                <div class="flex items-center gap-1 text-gray flex-nowrap">
                                                    <span class="whitespace-nowrap">1 giường</span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3028 0.772727C10.3028 0.345962 10.6488 0 11.0755 0H16.227C16.6538 0 16.9998 0.345962 16.9998 0.772727V5.92424C16.9998 6.35101 16.6538 6.69697 16.227 6.69697C15.8003 6.69697 15.4543 6.35101 15.4543 5.92424V2.63826L8.21882 9.87374H11.5048C11.9316 9.87374 12.2775 10.2197 12.2775 10.6465C12.2775 11.0732 11.9316 11.4192 11.5048 11.4192H6.35329C5.92653 11.4192 5.58057 11.0732 5.58057 10.6465V5.49495C5.58057 5.06818 5.92653 4.72222 6.35329 4.72222C6.78006 4.72222 7.12602 5.06818 7.12602 5.49495V8.78094L14.3615 1.54545H11.0755C10.6488 1.54545 10.3028 1.19949 10.3028 0.772727Z" fill="#4D4D4D"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.477801 0.477801C0.783731 0.17187 1.19866 0 1.63131 0H7.64141C8.06818 0 8.41414 0.345962 8.41414 0.772727C8.41414 1.19949 8.06818 1.54545 7.64141 1.54545H1.63131C1.60854 1.54545 1.5867 1.5545 1.5706 1.5706C1.5545 1.5867 1.54545 1.60854 1.54545 1.63131V15.3687C1.54545 15.3915 1.5545 15.4133 1.5706 15.4294C1.5867 15.4455 1.60854 15.4545 1.63131 15.4545H15.3687C15.3915 15.4545 15.4133 15.4455 15.4294 15.4294C15.4455 15.4133 15.4545 15.3915 15.4545 15.3687V9.35859C15.4545 8.93182 15.8005 8.58586 16.2273 8.58586C16.654 8.58586 17 8.93182 17 9.35859V15.3687C17 15.8013 16.8281 16.2163 16.5222 16.5222C16.2163 16.8281 15.8013 17 15.3687 17H1.63131C1.19866 17 0.783732 16.8281 0.477801 16.5222C0.171869 16.2163 0 15.8013 0 15.3687V1.63131C0 1.19866 0.17187 0.783731 0.477801 0.477801Z" fill="#4D4D4D"/>
                                                </svg>
                                                <div class="flex items-center gap-1 text-gray flex-nowrap">
                                                    <span class="whitespace-nowrap">35m2</span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.90909 6.54545C5.39455 6.54545 5.86912 6.4015 6.27276 6.13179C6.67641 5.86208 6.99102 5.47873 7.1768 5.03022C7.36257 4.58171 7.41118 4.08819 7.31647 3.61205C7.22176 3.13592 6.98799 2.69856 6.64472 2.35528C6.30144 2.01201 5.86408 1.77824 5.38795 1.68353C4.91181 1.58882 4.41829 1.63743 3.96978 1.82321C3.52127 2.00898 3.13792 2.32359 2.86821 2.72724C2.5985 3.13088 2.45455 3.60545 2.45455 4.09091C2.45455 4.7419 2.71315 5.36622 3.17347 5.82654C3.63378 6.28685 4.2581 6.54545 4.90909 6.54545ZM4.90909 3.27273C5.07091 3.27273 5.2291 3.32071 5.36365 3.41062C5.4982 3.50052 5.60307 3.6283 5.66499 3.7778C5.72692 3.92731 5.74312 4.09182 5.71155 4.25053C5.67998 4.40924 5.60206 4.55503 5.48763 4.66945C5.37321 4.78388 5.22742 4.8618 5.06871 4.89337C4.91 4.92494 4.74549 4.90874 4.59599 4.84681C4.44648 4.78488 4.3187 4.68002 4.2288 4.54547C4.13889 4.41092 4.09091 4.25273 4.09091 4.09091C4.09091 3.87391 4.17711 3.66581 4.33055 3.51237C4.48399 3.35893 4.6921 3.27273 4.90909 3.27273ZM15.5455 1.63636H9C8.783 1.63636 8.5749 1.72256 8.42146 1.876C8.26802 2.02944 8.18182 2.23755 8.18182 2.45455V7.36364H1.63636V0.818182C1.63636 0.601187 1.55016 0.393079 1.39672 0.23964C1.24328 0.0862012 1.03518 0 0.818182 0C0.601187 0 0.393079 0.0862012 0.23964 0.23964C0.086201 0.393079 0 0.601187 0 0.818182V11.4545C0 11.6715 0.086201 11.8797 0.23964 12.0331C0.393079 12.1865 0.601187 12.2727 0.818182 12.2727C1.03518 12.2727 1.24328 12.1865 1.39672 12.0331C1.55016 11.8797 1.63636 11.6715 1.63636 11.4545V9H16.3636V11.4545C16.3636 11.6715 16.4498 11.8797 16.6033 12.0331C16.7567 12.1865 16.9648 12.2727 17.1818 12.2727C17.3988 12.2727 17.6069 12.1865 17.7604 12.0331C17.9138 11.8797 18 11.6715 18 11.4545V4.09091C18 3.43992 17.7414 2.8156 17.2811 2.35528C16.8208 1.89497 16.1964 1.63636 15.5455 1.63636ZM16.3636 7.36364H9.81818V3.27273H15.5455C15.7625 3.27273 15.9706 3.35893 16.124 3.51237C16.2774 3.66581 16.3636 3.87391 16.3636 4.09091V7.36364Z" fill="#4D4D4D"/>
                                                </svg>
                                                <div class="flex items-center gap-1 text-gray flex-nowrap">
                                                    <span class="whitespace-nowrap">Other</span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3028 0.772727C10.3028 0.345962 10.6488 0 11.0755 0H16.227C16.6538 0 16.9998 0.345962 16.9998 0.772727V5.92424C16.9998 6.35101 16.6538 6.69697 16.227 6.69697C15.8003 6.69697 15.4543 6.35101 15.4543 5.92424V2.63826L8.21882 9.87374H11.5048C11.9316 9.87374 12.2775 10.2197 12.2775 10.6465C12.2775 11.0732 11.9316 11.4192 11.5048 11.4192H6.35329C5.92653 11.4192 5.58057 11.0732 5.58057 10.6465V5.49495C5.58057 5.06818 5.92653 4.72222 6.35329 4.72222C6.78006 4.72222 7.12602 5.06818 7.12602 5.49495V8.78094L14.3615 1.54545H11.0755C10.6488 1.54545 10.3028 1.19949 10.3028 0.772727Z" fill="#4D4D4D"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.477801 0.477801C0.783731 0.17187 1.19866 0 1.63131 0H7.64141C8.06818 0 8.41414 0.345962 8.41414 0.772727C8.41414 1.19949 8.06818 1.54545 7.64141 1.54545H1.63131C1.60854 1.54545 1.5867 1.5545 1.5706 1.5706C1.5545 1.5867 1.54545 1.60854 1.54545 1.63131V15.3687C1.54545 15.3915 1.5545 15.4133 1.5706 15.4294C1.5867 15.4455 1.60854 15.4545 1.63131 15.4545H15.3687C15.3915 15.4545 15.4133 15.4455 15.4294 15.4294C15.4455 15.4133 15.4545 15.3915 15.4545 15.3687V9.35859C15.4545 8.93182 15.8005 8.58586 16.2273 8.58586C16.654 8.58586 17 8.93182 17 9.35859V15.3687C17 15.8013 16.8281 16.2163 16.5222 16.5222C16.2163 16.8281 15.8013 17 15.3687 17H1.63131C1.19866 17 0.783732 16.8281 0.477801 16.5222C0.171869 16.2163 0 15.8013 0 15.3687V1.63131C0 1.19866 0.17187 0.783731 0.477801 0.477801Z" fill="#4D4D4D"/>
                                                </svg>
                                                <div class="flex items-center gap-1 text-gray flex-nowrap">
                                                    <span class="whitespace-nowrap">Other</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="read-more-area-actions w-full" style="display: none;">
                                    <a href="#" class="read-more-area-btn flex items-center gap-6px text-primary-600 font-medium">
                                        <div class="read-more-area-more">
                                            Xem thêm
                                        </div>
                                        <span class="read-more-area-less">
                                            Thu gọn
                                        </span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_35_3664" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                                            <rect x="0.5" y="-0.5" width="19" height="19" rx="3.5" transform="matrix(1 0 0 -1 0 19)" fill="#D9D9D9" stroke="#289EA2"/>
                                            </mask>
                                            <g mask="url(#mask0_35_3664)">
                                            <path d="M5 7L10 12L15 7" stroke="#289EA2" stroke-width="1.5" stroke-linecap="round"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>                        
                        </div>
                        <div class="border-0 border-b border-solid border-gray py-6 flex flex-col items-start gap-4">
                            <div class="flex items-start sm:items-center lg:items-start xl:items-center justify-between gap-4 w-full">
                                <span class="text-gray">Nhận - Trả phòng</span>
                                <div class="flex flex-col sm:flex-row lg:flex-col xl:flex-row items-end sm:items-center lg:items-end xl:items-center gap-1 sm:gap-2 lg:gap-1 xl:gap-2 justify-end">
                                    <span class="font-medium text-right">Ngày 21 - 23/2/2024</span>  
                                    <button class="btn-less text-blue">Sửa</button>
                                </div>
                            </div>
                            <div class="flex items-center justify-between gap-4 w-full">
                                <span class="text-gray">Thời gian lưu trú</span>
                                <span class="font-medium text-right">3 đêm</span>  
                            </div>
                            <div class="flex items-start sm:items-center lg:items-start xl:items-center justify-between gap-4 w-full">
                                <span class="text-gray">Số khách</span>
                                <div class="flex flex-col sm:flex-row lg:flex-col xl:flex-row items-end sm:items-center lg:items-end xl:items-center gap-1 sm:gap-2 lg:gap-1 xl:gap-2 justify-end">
                                    <span class="font-medium text-right">2 người lớn</span>  
                                    <button class="btn-less text-blue">Sửa</button>
                                </div>
                            </div>
                        </div>
                        <div class="border-0 border-b border-solid border-detail-secondary py-6 flex flex-col items-start gap-4">
                            <h4 class="m-0 w-full font-semibold fs-16">Chi tiết giá</h4>
                            <div class="flex items-center justify-between gap-4 w-full">
                                <span class="text-gray">3 đêm</span>
                                <span class="font-medium text-right">9.247.000 đ</span>  
                            </div>
                            <div class="flex items-center justify-between gap-4 w-full">
                                <span class="text-gray">Thuế & phí dịch vụ</span>
                                <span class="font-medium text-right">128.000 đ</span>  
                            </div>
                        </div>
                        <div class="pb-3 pt-6 flex items-center justify-between gap-4">
                            <h4 class="m-0 w-full font-semibold fs-16">Tổng tiền thanh toán</h4>
                            <p class="m-0 w-full font-semibold fs-16 text-right">9.475.000 đ</p> 
                        </div>
                    </div>
                    <button class="theme-btn btn-primary btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#modal-book-success">
                        Đặt phòng
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include './template-parts/footer.php'
?>