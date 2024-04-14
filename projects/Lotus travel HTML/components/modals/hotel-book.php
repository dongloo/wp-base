<div class="modal fade" id="modal-hotel-book" tabindex="-1" aria-labelledby="modal-hotel-bookLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-hotel-detail-size custom-modal modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.6">
                    <path d="M4.99209 19.4268C4.80127 19.2358 4.69409 18.9768 4.69409 18.7068C4.69409 18.4368 4.80127 18.1779 4.99209 17.9868L17.9605 5.02203C18.0538 4.92224 18.1663 4.84225 18.2912 4.78681C18.4161 4.73138 18.5509 4.70164 18.6875 4.69936C18.8242 4.69708 18.9598 4.72231 19.0865 4.77355C19.2132 4.82479 19.3283 4.90099 19.4249 4.99762C19.5215 5.09424 19.5977 5.20932 19.649 5.336C19.7002 5.46268 19.7254 5.59837 19.7232 5.735C19.7209 5.87163 19.6911 6.00641 19.6357 6.13131C19.5803 6.25621 19.5003 6.36868 19.4005 6.46203L6.42849 19.4268C6.23746 19.6177 5.9785 19.7248 5.70849 19.7248C5.43848 19.7248 5.17952 19.6177 4.98849 19.4268H4.99209Z" fill="white"/>
                    <path d="M4.99286 5.02212C5.18389 4.8313 5.44285 4.72412 5.71286 4.72412C5.98287 4.72412 6.24183 4.8313 6.43286 5.02212L19.3977 17.9905C19.4975 18.0839 19.5774 18.1963 19.6329 18.3212C19.6883 18.4461 19.7181 18.5809 19.7203 18.7176C19.7226 18.8542 19.6974 18.9899 19.6461 19.1166C19.5949 19.2432 19.5187 19.3583 19.4221 19.4549C19.3255 19.5516 19.2104 19.6278 19.0837 19.679C18.957 19.7302 18.8213 19.7555 18.6847 19.7532C18.5481 19.7509 18.4133 19.7212 18.2884 19.6657C18.1635 19.6103 18.051 19.5303 17.9577 19.4305L4.99286 6.45852C4.80314 6.26764 4.69666 6.00945 4.69666 5.74032C4.69666 5.47119 4.80314 5.213 4.99286 5.02212Z" fill="white"/>
                    </g>
                </svg>
            </button>
            <div class="modal-body">
                <div class="border-0 border-b border-solid border-gray px-6 md:px-10 flex items-center justify-between gap-4">
                    <div class="flex-1 py-4 w-full pr-5">
                        <h3 class="m-0 font-semibold fs-18 md:fs-20 text-truncate-1">Phòng Deluxe 3 người (Deluxe Triple Room)</h3>
                    </div>
                </div>                
                <div class="custom-modal-body custom-scrollbar">
                    <div class="modal-hotel-book-grid grid gap-6 lg:gap-8 items-start pt-4 px-6 md:px-10 pb-6 md:pb-10">
                        <div class="modal-hotel-book-left">
                            <div class="theme-slider-outer">
                                <div class="theme-slider-inner">
                                    <div class="theme-slider modal-hotel-book-slider" data-dot-thumb="true" data-dots="true" data-infinite="true" data-gap="24" data-autoplay="false" data-autoplay-speed="6000" data-item="1" data-item-sm="1" data-item-md="1" data-item-lg="1" data-item-xl="1">
                                        <?php for ($i = 1; $i < 16; $i++) :?>
                                            <div class="theme-slider-item">
                                                <div class="modal-hotel-book-image ratio-thumb rounded-8">
                                                    <img src="./assets/app/images/hotel-packs/hotel-pack-<?php echo $i; ?>.jpg" alt="Khách sạn Flamingo Đại Hải">
                                                </div>
                                            </div>
                                        <?php endfor; ?>   
                                    </div>
                                </div>
                                <div class="owl-nav modal-hotel-book-nav">
                                    <a href="#" class="owl-nav-item owl-nav-prev">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_35_7111" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
                                            <rect x="0.5" y="27.5" width="27" height="27" rx="3.5" transform="rotate(-90 0.5 27.5)" fill="#00375A" stroke="#6A0A18"/>
                                            </mask>
                                            <g mask="url(#mask0_35_7111)">
                                            <path d="M17.792 22.75L9.04199 14L17.792 5.25" stroke="#2AAEB2" stroke-width="1.5" stroke-linecap="square"/>
                                            </g>
                                        </svg>                                   
                                    </a>
                                    <a href="#" class="owl-nav-item owl-nav-next">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_35_7116" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
                                            <rect x="-0.5" y="-0.5" width="27" height="27" rx="3.5" transform="matrix(-4.37114e-08 -1 -1 4.37114e-08 27 27)" fill="#00375A" stroke="#6A0A18"/>
                                            </mask>
                                            <g mask="url(#mask0_35_7116)">
                                            <path d="M10.208 22.75L18.958 14L10.208 5.25" stroke="#2AAEB2" stroke-width="1.5" stroke-linecap="square"/>
                                            </g>
                                        </svg>                                   
                                    </a>
                                </div>
                            </div>                            
                        </div>
                        <div class="modal-hotel-book-right">
                            <div class="flex flex-col gap-5">
                                <div class="flex flex-col gap-2px">
                                    <h3 class="m-0 font-medium fs-16">Chi tiết phòng</h3>
                                    <div class="modal-hotel-book-content custom-scrollbar overflow-auto">
                                        <div class="flex flex-col gap-3 border-0 border-b border-solid border-gray pb-5 pt-3">
                                            <div class="flex items-center gap-x-4 md:gap-x-5 lg:gap-x-6 gap-y-2 flex-wrap">
                                                <div class="flex items-center gap-2">
                                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.14984 3.59982C3.14984 3.00311 3.38688 2.43085 3.80882 2.00891C4.23076 1.58697 4.80302 1.34993 5.39973 1.34993C5.99644 1.34993 6.56871 1.58697 6.99064 2.00891C7.41258 2.43085 7.64962 3.00311 7.64962 3.59982C7.64962 4.19653 7.41258 4.7688 6.99064 5.19073C6.56871 5.61267 5.99644 5.84971 5.39973 5.84971C4.80302 5.84971 4.23076 5.61267 3.80882 5.19073C3.38688 4.7688 3.14984 4.19653 3.14984 3.59982ZM5.39973 0C4.445 0 3.52937 0.379266 2.85427 1.05436C2.17918 1.72946 1.79991 2.64509 1.79991 3.59982C1.79991 4.55455 2.17918 5.47018 2.85427 6.14528C3.52937 6.82037 4.445 7.19964 5.39973 7.19964C6.35446 7.19964 7.27009 6.82037 7.94519 6.14528C8.62029 5.47018 8.99955 4.55455 8.99955 3.59982C8.99955 2.64509 8.62029 1.72946 7.94519 1.05436C7.27009 0.379266 6.35446 0 5.39973 0ZM12.1494 4.49977C12.1494 4.14175 12.2916 3.79839 12.5448 3.54523C12.7979 3.29207 13.1413 3.14984 13.4993 3.14984C13.8574 3.14984 14.2007 3.29207 14.4539 3.54523C14.707 3.79839 14.8493 4.14175 14.8493 4.49977C14.8493 4.8578 14.707 5.20116 14.4539 5.45432C14.2007 5.70748 13.8574 5.84971 13.4993 5.84971C13.1413 5.84971 12.7979 5.70748 12.5448 5.45432C12.2916 5.20116 12.1494 4.8578 12.1494 4.49977ZM13.4993 1.79991C12.7833 1.79991 12.0966 2.08436 11.5902 2.59068C11.0839 3.09701 10.7995 3.78373 10.7995 4.49977C10.7995 5.21582 11.0839 5.90255 11.5902 6.40887C12.0966 6.91519 12.7833 7.19964 13.4993 7.19964C14.2154 7.19964 14.9021 6.91519 15.4084 6.40887C15.9147 5.90255 16.1992 5.21582 16.1992 4.49977C16.1992 3.78373 15.9147 3.09701 15.4084 2.59068C14.9021 2.08436 14.2154 1.79991 13.4993 1.79991ZM11.0226 13.5335C11.6553 13.79 12.4662 13.9493 13.5002 13.9493C15.5539 13.9493 16.7275 13.322 17.3673 12.5472C17.6778 12.171 17.8353 11.7912 17.9163 11.5005C17.9625 11.3321 17.9905 11.1592 18 10.9849V10.9606C18 10.703 17.9493 10.448 17.8507 10.2101C17.7522 9.97219 17.6077 9.75601 17.4256 9.57391C17.2435 9.39182 17.0274 9.24737 16.7894 9.14882C16.5515 9.05027 16.2965 8.99955 16.039 8.99955H10.9615C10.9363 8.99955 10.912 8.99955 10.8877 9.00135C11.2422 9.37033 11.4996 9.83381 11.622 10.3495H16.039C16.3738 10.3495 16.6456 10.6186 16.6501 10.9516C16.6437 11.0161 16.6316 11.0799 16.6141 11.1423C16.5585 11.3425 16.4602 11.5282 16.3261 11.6868C16.0111 12.0702 15.2713 12.5994 13.5002 12.5994C12.6183 12.5994 11.9919 12.468 11.5473 12.2889C11.4501 12.6489 11.2899 13.0835 11.0226 13.5335ZM2.0249 8.99955C1.48786 8.99955 0.972821 9.21289 0.593079 9.59263C0.213337 9.97237 0 10.4874 0 11.0244V11.2746C0.00105768 11.3372 0.00526274 11.3997 0.0125993 11.4618C0.0869172 12.1315 0.327615 12.7719 0.712764 13.3247C1.44893 14.3759 2.85466 15.2992 5.39973 15.2992C7.9448 15.2992 9.35053 14.3768 10.0867 13.3238C10.4719 12.7711 10.7127 12.1306 10.7869 11.4609C10.7932 11.399 10.7974 11.3369 10.7995 11.2746V11.0244C10.7995 10.4874 10.5861 9.97237 10.2064 9.59263C9.82664 9.21289 9.3116 8.99955 8.77456 8.99955H2.0249ZM1.34993 11.2557V11.0244C1.34993 10.8454 1.42104 10.6738 1.54763 10.5472C1.67421 10.4206 1.84589 10.3495 2.0249 10.3495H8.77456C8.95357 10.3495 9.12525 10.4206 9.25183 10.5472C9.37842 10.6738 9.44953 10.8454 9.44953 11.0244V11.2557L9.44323 11.3277C9.39194 11.767 9.23305 12.1868 8.98065 12.5499C8.53697 13.1843 7.57942 13.9493 5.39973 13.9493C3.22004 13.9493 2.26249 13.1843 1.81791 12.5499C1.56583 12.1867 1.40725 11.7669 1.35623 11.3277C1.3535 11.3038 1.3514 11.2798 1.34993 11.2557Z" fill="#4D4D4D"/>
                                                    </svg>
                                                    <div class="flex items-center gap-1 text-gray flex-nowrap">
                                                        <span class="whitespace-nowrap">2 người</span>
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
                                            </div>
                                            <ul class="text-gray m-0 pl-4">
                                                <li>Sức chứa tối đa của phòng 4</li>
                                                <li>Số khách tiêu chuẩn 2</li>
                                                <li>Cho phép ở thêm 2 trẻ em thỏa mãn 4 khách tối đa có thể mất thêm phí</li>
                                                <li>Chi tiết phí phụ thu vui lòng xem tại “Giá cuối cùng”</li>
                                            </ul>                                         
                                        </div>
                                        <div class="border-0 border-b border-solid border-gray py-5">
                                            <div class="flex flex-col gap-2px">
                                                <div class="flex items-center gap-6px text-detail-secondary">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <mask id="mask0_35_2534" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                        <rect width="24" height="24" fill="#D9D9D9"/>
                                                        </mask>
                                                        <g mask="url(#mask0_35_2534)">
                                                        <path d="M9.45455 15.306L6.66208 12.5552C6.35786 12.2555 5.86941 12.2555 5.56519 12.5552C5.25443 12.8613 5.25443 13.3626 5.56519 13.6687L9.45455 17.5L18.4348 8.65377C18.7456 8.34765 18.7456 7.84638 18.4348 7.54026C18.1306 7.24058 17.6421 7.24058 17.3379 7.54026L9.45455 15.306Z" fill="#289EA2"/>
                                                        </g>
                                                    </svg>
                                                    <p class="m-0 flex-1 text-truncate-2">Khu nghỉ dưỡng cao cấp có bãi biển riêng</p>
                                                </div>
                                                <div class="flex items-center gap-6px text-detail-secondary">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <mask id="mask0_35_2534" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                        <rect width="24" height="24" fill="#D9D9D9"/>
                                                        </mask>
                                                        <g mask="url(#mask0_35_2534)">
                                                        <path d="M9.45455 15.306L6.66208 12.5552C6.35786 12.2555 5.86941 12.2555 5.56519 12.5552C5.25443 12.8613 5.25443 13.3626 5.56519 13.6687L9.45455 17.5L18.4348 8.65377C18.7456 8.34765 18.7456 7.84638 18.4348 7.54026C18.1306 7.24058 17.6421 7.24058 17.3379 7.54026L9.45455 15.306Z" fill="#289EA2"/>
                                                        </g>
                                                    </svg>
                                                    <p class="m-0 flex-1 text-truncate-2">Khuôn viên rộng rãi, thoáng mát, sạch sẻ</p>
                                                </div>
                                                <div class="flex items-center gap-6px text-detail-secondary">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <mask id="mask0_35_2534" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                        <rect width="24" height="24" fill="#D9D9D9"/>
                                                        </mask>
                                                        <g mask="url(#mask0_35_2534)">
                                                        <path d="M9.45455 15.306L6.66208 12.5552C6.35786 12.2555 5.86941 12.2555 5.56519 12.5552C5.25443 12.8613 5.25443 13.3626 5.56519 13.6687L9.45455 17.5L18.4348 8.65377C18.7456 8.34765 18.7456 7.84638 18.4348 7.54026C18.1306 7.24058 17.6421 7.24058 17.3379 7.54026L9.45455 15.306Z" fill="#289EA2"/>
                                                        </g>
                                                    </svg>
                                                    <p class="m-0 flex-1 text-truncate-2">Đưa đón sân bay khứ hồi</p>
                                                </div>
                                                <div class="flex items-center gap-6px text-detail-secondary">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <mask id="mask0_35_2534" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                        <rect width="24" height="24" fill="#D9D9D9"/>
                                                        </mask>
                                                        <g mask="url(#mask0_35_2534)">
                                                        <path d="M9.45455 15.306L6.66208 12.5552C6.35786 12.2555 5.86941 12.2555 5.56519 12.5552C5.25443 12.8613 5.25443 13.3626 5.56519 13.6687L9.45455 17.5L18.4348 8.65377C18.7456 8.34765 18.7456 7.84638 18.4348 7.54026C18.1306 7.24058 17.6421 7.24058 17.3379 7.54026L9.45455 15.306Z" fill="#289EA2"/>
                                                        </g>
                                                    </svg>
                                                    <p class="m-0 flex-1 text-truncate-2">Đã bao gồm bữa sáng</p>
                                                </div>
                                                <div class="flex items-center gap-6px text-detail-secondary">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <mask id="mask0_35_2534" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                        <rect width="24" height="24" fill="#D9D9D9"/>
                                                        </mask>
                                                        <g mask="url(#mask0_35_2534)">
                                                        <path d="M9.45455 15.306L6.66208 12.5552C6.35786 12.2555 5.86941 12.2555 5.56519 12.5552C5.25443 12.8613 5.25443 13.3626 5.56519 13.6687L9.45455 17.5L18.4348 8.65377C18.7456 8.34765 18.7456 7.84638 18.4348 7.54026C18.1306 7.24058 17.6421 7.24058 17.3379 7.54026L9.45455 15.306Z" fill="#289EA2"/>
                                                        </g>
                                                    </svg>
                                                    <p class="m-0 flex-1 text-truncate-2">Không hỗ trợ hoàn huỷ</p>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="py-5">
                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                                <div class="flex items-center gap-4">
                                                    <div class="image-box">
                                                        <img src="./assets/app/images/icons/utilities/utility-1.svg" alt="Thu đổi ngoại tệ">
                                                    </div>
                                                    <span class="flex-1 text-gray">Thu đổi ngoại tệ</span>
                                                </div>
                                                <div class="flex items-center gap-4">
                                                    <div class="image-box">
                                                        <img src="./assets/app/images/icons/utilities/utility-2.svg" alt="Hồ bơi ngoài trời">
                                                    </div>
                                                    <span class="flex-1 text-gray">Hồ bơi ngoài trời</span>
                                                </div>
                                                <div class="flex items-center gap-4">
                                                    <div class="image-box">
                                                        <img src="./assets/app/images/icons/utilities/utility-3.svg" alt="Sân thượng">
                                                    </div>
                                                    <span class="flex-1 text-gray">Sân thượng</span>
                                                </div>
                                                <div class="flex items-center gap-4">
                                                    <div class="image-box">
                                                        <img src="./assets/app/images/icons/utilities/utility-4.svg" alt="Thang máy">
                                                    </div>
                                                    <span class="flex-1 text-gray">Thang máy</span>
                                                </div>
                                                <div class="flex items-center gap-4">
                                                    <div class="image-box">
                                                        <img src="./assets/app/images/icons/utilities/utility-5.svg" alt="Phòng massage & spa">
                                                    </div>
                                                    <span class="flex-1 text-gray">Phòng massage & spa</span>
                                                </div>
                                                <div class="flex items-center gap-4">
                                                    <div class="image-box">
                                                        <img src="./assets/app/images/icons/utilities/utility-6.svg" alt="Giữ hành lý">
                                                    </div>
                                                    <span class="flex-1 text-gray">Giữ hành lý</span>
                                                </div>
                                                <div class="flex items-center gap-4">
                                                    <div class="image-box">
                                                        <img src="./assets/app/images/icons/utilities/utility-7.svg" alt="Dịch vụ giặt là">
                                                    </div>
                                                    <span class="flex-1 text-gray">Dịch vụ giặt là</span>
                                                </div>
                                                <div class="flex items-center gap-4">
                                                    <div class="image-box">
                                                        <img src="./assets/app/images/icons/utilities/utility-8.svg" alt="Bãi đỗ xe thu phí">
                                                    </div>
                                                    <span class="flex-1 text-gray">Bãi đỗ xe thu phí</span>
                                                </div>
                                                <div class="flex items-center gap-4">
                                                    <div class="image-box">
                                                        <img src="./assets/app/images/icons/utilities/utility-9.svg" alt="Phòng tập gym">
                                                    </div>
                                                    <span class="flex-1 text-gray">Phòng tập gym</span>
                                                </div>
                                                <div class="flex items-center gap-4">
                                                    <div class="image-box">
                                                        <img src="./assets/app/images/icons/utilities/utility-10.svg" alt="View biển">
                                                    </div>
                                                    <span class="flex-1 text-gray">View biển</span>
                                                </div>
                                                <div class="flex items-center gap-4">
                                                    <div class="image-box">
                                                        <img src="./assets/app/images/icons/utilities/utility-11.svg" alt="Ăn sáng">
                                                    </div>
                                                    <span class="flex-1 text-gray">Ăn sáng</span>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                                <a href="./book.php" class="theme-btn btn-primary btn-block">Đặt phòng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>