@extends('layouts.index')
@section('title','Split PDF files online. Free service to split PDF')
@section('content')
    <div class="main">
        <div class="tool">
            <div class="tool__workarea" id="workArea">
                <div id="dropArea"></div>
                <div class="tool__header">
                    <h1 class="tool__header__title">Split PDF file</h1>
                    <h2 class="tool__header__subtitle">Separate one page or a whole set for easy conversion into
                        independent PDF files.</h2>
                </div>
                <div class="uploading__bar uploading__bar--small">
                    <span class="uploading__bar__completed"></span>
                </div>
                <div id="uploader" class="uploader">
                    <a class="uploader__btn tooltip--left" id="pickfiles" href="javascript:" title="Add more files">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" stroke-linecap="round"
                             stroke-width="2" stroke="#fff" fill="none" stroke-linejoin="round">
                            <desc>Upload your file and transform it.</desc>
                            <path d="M10 1.833v16.333"/>
                            <path d="M1.833 10h16.333"/>
                        </svg>
                        <span>Select PDF file</span>
                    </a>
                    <div class="uploader__extra">
                        <a class="btn-icon uploader__extra__btn tooltip tooltip--right" id="uploadDisk"
                           href="javascript:" title="Upload from your computer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19"
                                 fill="#fff" fill-rule="nonzero">
                                <desc>Upload from computer.</desc>
                                <path
                                    d="M4.8 19c-.442 0-.8-.448-.8-1s.358-1 .8-1h10.4c.442 0 .8.448.8 1s-.358 1-.8 1H4.8z"/>
                                <path d="M7 15h6l-1 3H8z"/>
                                <path
                                    d="M2 2v11h16V2H2zM1 0h18a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1z"/>
                            </svg>
                        </a>
                        <a id="gdrive_file_selector" class="btn-icon uploader__extra__btn tooltip tooltip--right active"
                           title="Select PDF from Google Drive">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16">
                                <path fill="#FFF"
                                      d="M8.7375,5.80725 L3.021,15.70725 L0.12375,10.69725 L5.847,0.795 L8.7375,5.80725 Z M17.865,10.38225 L12.078,10.39125 L6.378,0.489 L12.1725,0.489 L17.865,10.38225 Z M17.87625,10.9875 L14.9865,15.9975 L3.5415,15.99 L6.43425,10.98375 L17.87625,10.9875 Z"/>
                            </svg>
                        </a>
                        <a id="dropbox_file_selector"
                           class="btn-icon uploader__extra__btn tooltip tooltip--right active"
                           title="Select PDF from Dropbox">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                <path fill="#FFF"
                                      d="M5.3475,0.7035 L0.096,4.125 L3.708,7.03725 L9.018,3.765 L5.3475,0.7035 Z M17.904,4.14 L12.66525,0.7275 L9.01875,3.7725 L14.29875,7.03875 L17.904,4.14 Z M9.01875,10.305 L12.66525,13.35975 L17.904,9.945 L14.2995,7.0395 L9.01875,10.305 Z M0.096,9.9585 L5.3475,13.35975 L9.01875,10.305 L3.70875,7.0455 L0.096,9.9585 Z M9.01875,10.9635 L5.35575,14.0385 L3.786,13.02 L3.786,14.16 L9.01875,17.30475 L14.271,14.15175 L14.271,13.0125 L12.693,14.031 L9.01875,10.9635 Z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="uploader__droptxt">or drop PDF here</div>
                </div>
                <div id="ad" class="add">
                    <div id='div-gpt-ad-1662466259704-0' class="in_add">
                        <script>
                            googletag.cmd.push(function () {
                                googletag.display('div-gpt-ad-1662466259704-0')
                            });
                        </script>
                    </div>
                </div>

                <div class="sidetools">
                    <a id="settingsToogle" class="btn-icon btn-icon--white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                            <path
                                d="M24 14.187V9.813c-2.148-.766-2.726-.802-3.027-1.53s.083-1.17 1.06-3.223L18.94 1.968c-2.026.963-2.488 1.364-3.224 1.06-.727-.302-.768-.89-1.527-3.027H9.813c-.764 2.144-.8 2.725-1.53 3.027-.752.313-1.203-.1-3.223-1.06L1.968 5.06c.977 2.055 1.362 2.493 1.06 3.224S2.146 9.05 0 9.813v4.375c2.14.76 2.725.8 3.027 1.528.304.734-.08 1.167-1.06 3.223l3.093 3.093c2-.95 2.47-1.373 3.223-1.06.728.302.764.88 1.53 3.027h4.374c.758-2.13.8-2.723 1.537-3.03.745-.308 1.186.1 3.215 1.062l3.093-3.093c-.975-2.05-1.362-2.492-1.06-3.223.3-.726.88-.763 3.027-1.528zm-4.875.764c-.577 1.394-.068 2.458.488 3.578l-1.084 1.084c-1.093-.543-2.16-1.076-3.573-.5-1.396.58-1.8 1.693-2.188 2.877h-1.534c-.398-1.185-.79-2.297-2.183-2.875-1.42-.588-2.507-.045-3.58.488L4.39 18.53c.557-1.118 1.066-2.18.487-3.58-.58-1.39-1.69-1.784-2.876-2.182v-1.533c1.185-.398 2.297-.79 2.875-2.184s.068-2.46-.488-3.58L5.47 4.387c1.082.538 2.162 1.077 3.58.488 1.392-.577 1.785-1.7 2.183-2.875h1.534c.398 1.185.792 2.297 2.184 2.875 1.42.588 2.506.045 3.58-.488l1.084 1.084c-.556 1.12-1.065 2.187-.488 3.58s1.69 1.784 2.875 2.183v1.534c-1.188.398-2.302.79-2.877 2.183zM12 9c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zm0-2a5 5 0 1 0 0 10 5 5 0 1 0 0-10z"/>
                        </svg>
                    </a>
                    <a class="btn-icon btn-icon--white tooltip active tooltip--left order" id="orderByName"
                       data-order="asc" href="javascript:" title="Order files by name">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="#383E45"
                             fill-rule="evenodd">
                            <path
                                d="M2.947 15.297V.23c0-.067.026-.123.077-.166S3.14 0 3.22 0h1.635c.08 0 .145.022.196.065s.077.1.077.166v15.066h2.5a.39.39 0 0 1 .261.087.28.28 0 0 1 .102.222c0 .077-.038.154-.114.23l-3.62 3.076a.42.42 0 0 1-.261.087c-.09 0-.178-.03-.26-.087L.11 15.828c-.113-.103-.14-.215-.08-.338.06-.13.174-.193.34-.193h2.575z"
                                fill-rule="nonzero"/>
                            <path
                                d="M11.222 20.2l2.94-7.52c.194-.496.555-.67 1.1-.67h.54c.513 0 .97.12 1.22.804l2.746 7.386c.083.214.222.603.222.845 0 .536-.485.965-1.068.965-.5 0-.86-.174-1.026-.603l-.582-1.6h-3.66l-.596 1.6c-.153.43-.47.603-1.012.603-.624 0-1.054-.375-1.054-.965 0-.24.14-.63.222-.845zm5.602-1.93l-1.3-3.874h-.028L14.15 18.27h2.663zM11.346 8l4.75-6.083h-3.66c-.602 0-1.088-.333-1.088-.958S11.832 0 12.434 0h5.53c.538 0 .973.25.973 1.042 0 .278-.102.583-.294.82l-4.826 6.222h4.096c.602 0 1.088.333 1.088.958s-.486.958-1.088.958h-5.696C11.448 10 11 9.722 11 8.875c0-.36.154-.625.346-.875z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="#383E45"
                             fill-rule="evenodd">
                            <path
                                d="M2.947 15.297V.23c0-.066.026-.122.077-.165S3.14 0 3.22 0h1.634c.08 0 .146.022.196.065s.077.1.077.166v15.066h.33 2.18c.106 0 .193.03.26.087a.28.28 0 0 1 .102.222c0 .077-.038.154-.114.23l-3.62 3.076c-.075.058-.162.087-.26.087a.46.46 0 0 1-.261-.087L.1 15.828c-.112-.103-.14-.216-.078-.328.06-.14.174-.203.34-.203h2.575z"
                                fill-rule="nonzero"/>
                            <path
                                d="M11.212 8.083L14.016.66c.185-.5.53-.66 1.058-.66h.516c.5 0 .926.12 1.164.794l2.62 7.3c.08.212.212.595.212.833 0 .53-.463.952-1.02.952-.476 0-.82-.172-.98-.595l-.556-1.587h-3.5l-.57 1.587c-.146.423-.45.595-.966.595C11.41 9.87 11 9.5 11 8.917c0-.238.132-.622.212-.833zm5.344-1.905l-1.23-3.823H15.3l-1.283 3.823h2.54zm-5.2 13.442l4.908-5.794h-3.783c-.622 0-1.124-.317-1.124-.913S11.86 12 12.482 12h5.715c.556 0 1.005.238 1.005.992a1.21 1.21 0 0 1-.304.78L13.9 19.7h4.233c.622 0 1.124.317 1.124.913s-.503.913-1.124.913h-5.887c-.794 0-1.257-.265-1.257-1.072 0-.344.16-.595.357-.833z"/>
                        </svg>
                    </a>
                    <a class="btn-icon btn-icon--white tooltip active tooltip--left" id="toggleCover"
                       href="javascript:" title="Show-hide pdf covers">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 22 19">
                            <path
                                d="M11 4c2.76 0 5 2.24 5 5 0 .65-.13 1.26-.36 1.83l2.92 2.92A11.82 11.82 0 0 0 21.99 9c-1.73-4.4-6-7.5-11-7.5-1.4 0-2.74.25-3.98.7l2.16 2.16C9.74 4.13 10.35 4 11 4zM1 1.27L3.74 4A11.8 11.8 0 0 0 0 9c1.73 4.4 6 7.5 11 7.5a11.78 11.78 0 0 0 4.38-.84l.42.42L18.73 19 20 17.73 2.27 0 1 1.27zM6.53 6.8l1.55 1.55A2.82 2.82 0 0 0 8 9c0 1.66 1.34 3 3 3 .22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.4.53-2.2.53-2.76 0-5-2.24-5-5 0-.8.2-1.53.53-2.2zm4.3-.78L14 9.17V9c0-1.66-1.34-3-3-3l-.17.01z"
                                fill="#383E45" fill-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
                <div class="tool__workarea__rendered" id="fileGroups"></div>
                <div class="tool__workarea__rendered" id="split-ranges-rendered"></div>
                <div class="tool__workarea__rendered" id="split-fixed"></div>
                <div class="tool__workarea__rendered" id="split-extract"></div>
            </div>
            <div id="sidebar" class="tool__sidebar">
                <div class="option__panel option__panel--active" id="split">
                    <div class="option__panel__title">Split</div>

                    <div class="option__tab">
                        <ul class="option__tab__select">
                            <li class="option__tab__select__item option--active" id="tab-range" data-action="tab"
                                data-target="range">
                                <svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-707.000000, -294.000000)" fill-rule="nonzero">
                                            <g transform="translate(707.000000, 294.000000)">
                                                <rect id="Rectangle" fill="#000000" x="0" y="46" width="9" height="2">
                                                </rect>
                                                <rect id="Rectangle-Copy-5" fill="#000000" x="13" y="46" width="9"
                                                      height="2"></rect>
                                                <rect id="Rectangle-Copy-6" fill="#000000" x="26" y="46" width="9"
                                                      height="2"></rect>
                                                <rect id="Rectangle-Copy-7" fill="#000000" x="39" y="46" width="9"
                                                      height="2"></rect>
                                                <path
                                                    d="M40.6626536,14.4 L31.4,14.4 L31.4,32.6 L44.1102041,32.6 L44.1102041,17.7963194 L40.6626536,14.4 Z M40.6626536,12 C41.2929501,12 41.8979484,12.2479497 42.346959,12.690288 L46.5102041,16.7916667 L46.5102041,32.6 C46.5102041,33.9254834 45.4356875,35 44.1102041,35 L31.4,35 C30.0745166,35 29,33.9254834 29,32.6 L29,14.4 C29,13.0745166 30.0745166,12 31.4,12 L40.6626536,12 Z M45.1882086,17.4722222 C45.5463797,17.4722222 45.8367347,17.7582625 45.8367347,18.1111111 C45.8367347,18.4639597 45.5463797,18.75 45.1882086,18.75 L40.6485261,18.75 C40.290355,18.75 40,18.4639597 40,18.1111111 L40,13.6388889 C40,13.2860403 40.290355,13 40.6485261,13 C41.0066971,13 41.2970522,13.2860403 41.2970522,13.6388889 L45.1882086,17.4722222 Z"
                                                    id="Rectangle-8" fill="#161616"></path>
                                                <path
                                                    d="M11.6626536,14.4 L2.4,14.4 L2.4,32.6 L15.1102041,32.6 L15.1102041,17.7963194 L11.6626536,14.4 Z M11.6626536,12 C12.2929501,12 12.8979484,12.2479497 13.346959,12.690288 L17.5102041,16.7916667 L17.5102041,32.6 C17.5102041,33.9254834 16.4356875,35 15.1102041,35 L2.4,35 C1.0745166,35 5.68434189e-13,33.9254834 5.68434189e-13,32.6 L0,14.4 C0,13.0745166 1.0745166,12 2.4,12 L11.6626536,12 Z M16.1882086,17.4722222 C16.5463797,17.4722222 16.8367347,17.7582625 16.8367347,18.1111111 C16.8367347,18.4639597 16.5463797,18.75 16.1882086,18.75 L11.6485261,18.75 C11.290355,18.75 11,18.4639597 11,18.1111111 L11,13.6388889 C11,13.2860403 11.290355,13 11.6485261,13 C12.0066971,13 12.2970522,13.2860403 12.2970522,13.6388889 L16.1882086,17.4722222 Z"
                                                    id="Rectangle-8-Copy-2" fill="#161616"></path>
                                                <rect id="Rectangle-12" fill="#000000" x="46" y="43" width="2"
                                                      height="5"></rect>
                                                <rect id="Rectangle-12-Copy" fill="#000000" x="0" y="43" width="2"
                                                      height="5"></rect>
                                                <path
                                                    d="M21.5,25 C20.6715729,25 20,24.3284271 20,23.5 C20,22.6715729 20.6715729,22 21.5,22 L25.5,22 C26.3284271,22 27,22.6715729 27,23.5 C27,24.3284271 26.3284271,25 25.5,25 L21.5,25 Z"
                                                    id="Line" fill="#161616"></path>
                                                <polygon id="Rectangle-Copy-8" fill="#000000" points="0 2 0 0 9 0 9 2">
                                                </polygon>
                                                <polygon id="Rectangle-Copy-9" fill="#000000"
                                                         points="13 2 13 0 22 0 22 2"></polygon>
                                                <polygon id="Rectangle-Copy-10" fill="#000000"
                                                         points="26 2 26 0 35 0 35 2"></polygon>
                                                <polygon id="Rectangle-Copy-11" fill="#000000"
                                                         points="39 2 39 0 48 0 48 2"></polygon>
                                                <polygon id="Rectangle-12-Copy-8" fill="#000000"
                                                         points="46 5 46 0 48 0 48 5"></polygon>
                                                <polygon id="Rectangle-12-Copy-9" fill="#000000"
                                                         points="0 5 0 0 2 0 2 5"></polygon>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <div class="option__image__item__title">Split by range</div>
                            </li>
                            <li class="option__tab__select__item" id="tab-extract" data-action="tab"
                                data-target="extract" data-name="split_mode" data-value="extract_pages">
                                <svg width="47px" height="48px" viewBox="0 0 47 48" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-1309.000000, -194.000000)" fill="#969696"
                                           fill-rule="nonzero">
                                            <g transform="translate(1309.000000, 194.000000)">
                                                <path
                                                    d="M37,2 L37,10 L45,10 L45,2 L37,2 Z M36,0 L46,0 C46.5522847,0 47,0.44771525 47,1 L47,11 C47,11.5522847 46.5522847,12 46,12 L36,12 C35.4477153,12 35,11.5522847 35,11 L35,1 C35,0.44771525 35.4477153,0 36,0 Z"
                                                    id="Rectangle-17"></path>
                                                <path
                                                    d="M37,20 L37,28 L45,28 L45,20 L37,20 Z M36,18 L46,18 C46.5522847,18 47,18.4477153 47,19 L47,29 C47,29.5522847 46.5522847,30 46,30 L36,30 C35.4477153,30 35,29.5522847 35,29 L35,19 C35,18.4477153 35.4477153,18 36,18 Z"
                                                    id="Rectangle-17-Copy"></path>
                                                <path
                                                    d="M37,38 L37,46 L45,46 L45,38 L37,38 Z M36,36 L46,36 C46.5522847,36 47,36.4477153 47,37 L47,47 C47,47.5522847 46.5522847,48 46,48 L36,48 C35.4477153,48 35,47.5522847 35,47 L35,37 C35,36.4477153 35.4477153,36 36,36 Z"
                                                    id="Rectangle-17-Copy-2"></path>
                                                <path
                                                    d="M26,42 L31,42 C31.5522847,42 32,42.4477153 32,43 C32,43.5522847 31.5522847,44 31,44 L24,44 L24,4 L31,4 C31.5522847,4 32,4.44771525 32,5 C32,5.55228475 31.5522847,6 31,6 L26,6 L26,23 L31,23 C31.5522847,23 32,23.4477153 32,24 C32,24.5522847 31.5522847,25 31,25 L26,25 L26,42 Z"
                                                    id="Combined-Shape"></path>
                                                <path
                                                    d="M11.6626536,12.4 L2.4,12.4 L2.4,30.6 L15.1102041,30.6 L15.1102041,15.7963194 L11.6626536,12.4 Z M11.6626536,10 C12.2929501,10 12.8979484,10.2479497 13.346959,10.690288 L17.5102041,14.7916667 L17.5102041,30.6 C17.5102041,31.9254834 16.4356875,33 15.1102041,33 L2.4,33 C1.0745166,33 5.68434189e-13,31.9254834 5.68434189e-13,30.6 L0,12.4 C0,11.0745166 1.0745166,10 2.4,10 L11.6626536,10 Z M16.1882086,15.4722222 C16.5463797,15.4722222 16.8367347,15.7582625 16.8367347,16.1111111 C16.8367347,16.4639597 16.5463797,16.75 16.1882086,16.75 L11.6485261,16.75 C11.290355,16.75 11,16.4639597 11,16.1111111 L11,11.6388889 C11,11.2860403 11.290355,11 11.6485261,11 C12.0066971,11 12.2970522,11.2860403 12.2970522,11.6388889 L16.1882086,15.4722222 Z"
                                                    id="Rectangle-8-Copy"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <div class="option__image__item__title">Extract pages</div>
                            </li>
                        </ul>

                        <div class="option__tab__content option__tab__content--active" id="tab-content-range">
                            <div class="option__panel__content">
                                <div class="option__title">Range mode:</div>
                                <ul class="option__image">
                                    <li class="option__image__item" data-name="split_mode" data-value="ranges">
                                        <div class="option__image__item__title">Custom ranges</div>
                                    </li>
                                    <li class="option__image__item" data-name="split_mode" data-value="fixed_range">
                                        <div class="option__image__item__title">Fixed ranges</div>
                                    </li>
                                </ul>
                            </div>

                            <div data-if="split_mode" data-value="ranges">
                                <div class="rangesList" id="split-ranges">
                                </div>
                                <div class="option__panel__content">
                                    <div class="text-center">
                                        <button class="btn--inline addRanges">
                                            <svg width="12px" height="12px" viewBox="0 0 10 10" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1164.000000, -655.000000)" fill="#ffffff">
                                                        <g transform="translate(1120.000000, 639.000000)">
                                                            <g transform="translate(39.000000, 11.000000)">
                                                                <g>
                                                                    <g transform="translate(5.000000, 5.000000)">
                                                                        <rect id="Rectangle" x="0" y="4.23076923"
                                                                              width="10" height="1.53846154"
                                                                              rx="0.769230769"></rect>
                                                                        <path
                                                                            d="M4.23076923,9.57331008 L4.23076923,0.382932403 C4.23076923,0.171444677 4.40392949,-2.48689958e-14 4.61753349,-2.48689958e-14 L5.391062,-2.48689958e-14 C5.604666,-2.48689958e-14 5.77782625,0.171444677 5.77782625,0.382932403 L5.77782625,9.57331008 C5.77782625,9.78479781 5.604666,9.95624249 5.391062,9.95624249 L4.61753349,9.95624249 C4.40392949,9.95624249 4.23076923,9.78479781 4.23076923,9.57331008 Z"
                                                                            id="Rectangle-Copy-2"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <div>Add Range</div>
                                        </button>
                                    </div>
                                </div>
                                <div class="option__panel__content">
                                    <div class="form__group  form__group--inline">
                                        <div class="checkbox">
                                            <input type="checkbox" name="merge_after_ranges" id="merge_after_ranges"
                                                   value="1">
                                            <label for="merge_after_ranges">Merge all ranges in one PDF file.</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div data-if="split_mode" data-value="fixed_range">
                                <div class="option__panel__content">
                                    <div class="form__group form__group--inline">
                                        <label>Split in page ranges of:</label>
                                        <input class="input" type="number" name="fixed_range" value="2"
                                               placeholder="Type a number">
                                    </div>
                                </div>
                                <div class="option__panel__content">
                                    <div class="info">
                                        This PDF will be split in files of <span class="fixedRange"></span>
                                        Pages.<br><strong><span class="extractFixedFiles"></span> PDF</strong> will be
                                        created.
                                        <!--
                        This PDF will be split in files of <span class="fixedRange"></span> pages.                        <strong><span class="extractFixedFiles"></span> PDF</strong> will be created.                        -->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="option__tab__content" id="tab-content-extract">
                            <div class="option__panel__content">
                                <div class="option__title">Extract mode:</div>
                                <ul class="option__image">
                                    <li class="option__image__item option--active" data-action="selectAll">
                                        <div class="option__image__item__title">Extract all pages</div>
                                    </li>
                                    <li class="option__image__item" data-action="clearAll">
                                        <div class="option__image__item__title">Select pages</div>
                                    </li>
                                </ul>
                            </div>

                            <div class="extractCustom" style="display:none;">
                                <div class="option__panel__content">
                                    <div class="form__group">
                                        <label>Pages to extract:</label>
                                        <input type="text" class="option" name="extract_pages" id="extract_pages"
                                               value="all" placeholder="example: 1,5-8">
                                    </div>
                                </div>
                                <div class="option__panel__content">
                                    <div class="form__group  form__group--inline">
                                        <div class="checkbox">
                                            <input type="checkbox" name="merge_after_extract_pages"
                                                   id="merge_after_extract_pages" value="1" class="option">
                                            <label for="merge_after_extract_pages">Merge extracted pages in one PDF
                                                file.</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="option__panel__content">
                                <div class="info extractPagesInfo">
                                    <!--Every page of this PDF file will be converted in one separated PDF file.-->
                                    Every selected page of this PDF file will be converted in one separated PDF file.
                                    <strong><span class="extractPagesFiles">{fileNumber}</span> PDF</strong> will be
                                    created.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="template template--ranges" data-range="${id}">
                    <div class="formarea ranges" id="range-option-${id}" data-range="${id}">
                        <div class="range__remove">
                            <svg width="12px" height="12px" viewBox="0 0 12 12" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1410.000000, -336.000000)" fill="#383E45">
                                        <g transform="translate(1404.000000, 330.000000)">
                                            <polygon
                                                points="18 7.20857143 16.7914286 6 12 10.7914286 7.20857143 6 6 7.20857143 10.7914286 12 6 16.7914286 7.20857143 18 12 13.2085714 16.7914286 18 18 16.7914286 13.2085714 12">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="d-flex">
                            <span class="ico-drag"></span>
                            <div class="form__group__container">
                                <div class="title4">
                                    Range <span class="range-num">${id}</span></div>
                                <div class="form__group form__group--boxed">
                                    <label>from page</label>
                                    <input class="input option rangefrom" type="number" name="page_init[]" value="1">
                                </div>
                                <div class="form__group form__group--boxed">
                                    <label>to</label>
                                    <input class="input option rangeto" type="number" name="page_end[]" value="1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="uploading" class="uploading">
            <div id="upload-status" class="uploading__status">
                <div class="uploading__status__title drive"><img src="img/svg_icons/preload.svg" alt="Uploading">Getting
                    files from Drive
                </div>
                <div class="uploading__status__title dropbox"><img src="img/svg_icons/preload.svg"
                                                                   alt="Uploading">Getting files from Dropbox
                </div>
                <div class="uploading__status__title user">Uploading file <span
                        class="uploading__status__current">0</span> of <span class="uploading__status__total">0</span>
                </div>
                <div class="uploading__status__file"></div>
                <div class="uploading__status__info">
                    Time left <span id="timeLeft">- seconds</span> -
                    Upload speed <span id="uploadSpeed">- MB/S</span></div>
                <div class="uploading__bar">
                    <span class="uploading__bar__completed"></span>
                </div>
                <div class="uploading__status__percent">
                    <div class="uploading__status__percent__value"></div>
                    Uploaded
                </div>


            </div>
            <!-- <div id="upload-files" class="uploading__files"></div>-->
        </div>
        <div id="process" class="process">
            <p id="processText" class="processAction title2">Splitting PDF...</p>
            <img src="img/svg_icons/preload.svg" alt="Processing">
            <div id="waitnotify"></div>
        </div>
        <script>
            var iloveLang = {
                'noTasks': 'sorry, no tasks here!',
                'Update Card Details': 'Update Card Details',
                'login': 'login',
                'email': 'email',
                'waitnotify': 'Do not close your browser. Wait until your files are uploaded and processed! This might take a few minutes. :)',
                'savingFile': 'Saving file...',
                'Save to Drive': 'Save to Drive',
                'Drive saving...': 'Drive saving...',
                'Your file has been saved to Drive!': 'Your file has been saved to Drive!',
                'Ok': 'Ok',
                'processCompleted': 'The task has been completed!<br> Going to download page...',
                'uploadComplete': 'Upload complete!',
                'Save options for next actions': 'Save options for next actions',
                'Some files require password': 'Some files require password',
                'No file selected.': 'No file selected.',
                'Please add a file to activate options': 'Please add a file to activate options',
                'Yes': 'Yes',
                'No': 'No',
                'Over the content': 'Over the content',
                'Below the content': 'Below the content',
                'Facing pages': 'Facing pages',
                'Normal': 'Normal',
                'First cover': 'First cover',
                'none': 'none',
                'Remove': 'Delete',
                'Remove this file': 'Remove this file',
                'Rotate': 'Rotate',
                'Or': 'Or',
                'wops': 'Error',
                'Error': 'Error',
                'Upload error': 'Upload error',
                'InvalidExtension': 'Sorry, this extension is not allowed',
                'FileTooLarge': 'Too many Megapixel for image.',
                'InvalidTask': 'InvalidTask',
                'InvalidParams': 'InvalidParams',
                'CloudError': 'TaskLimit',
                'TaskLimit': 'TaskLimit',
                'EmptyFile': 'This file is empty',
                'UploadError': 'Upload error',
                'DamagedFile': 'Damaged/Corrupted File',
                'FileRemoved': 'Some files you selected from your device seem to have been renamed, deleted or moved. Please, next time, wait until upload finishes.',
                'FileSizeExceeded': 'The filesize of this file exceeds the limits',
                'errorOneRetry': 'It looks like a connection problem is stopping your file from being processed. We suggest that you wait a little while, then reload the page and try again.<br><br>If this doesn\'t work, you could try by disabling your web extensions or using the incognito browser. If the problem persists, please contact us.<br><br><a href="https://www.ilovepdf.com/\&quot;#\"" onclick=\"location.reload();\">Reload the page and try again</a>',
                'errorRetry': 'It looks like a connection problem is stopping your files from being processed. We suggest that you wait a little while, then reload the page and try again.<br><br>If this doesn\'t work, you could try by disabling your web extensions or using the incognito browser. If the problem persists, please contact us.<br><br><a href="https://www.ilovepdf.com/\&quot;#\"" onclick=\"location.reload();\">Reload the page and try again</a>',
                'File number exceeded': 'File number exceeded',
                'File size exceeded': 'File size exceeded',
                'Sorry, we are not ready for that.': 'Sorry, we are not ready for that.',
                'superlimitWhoa': "You\'ve hit the limit, even for Premium. Whoa!",
                'superlimitDownload': "Unfortunately, our system doesn\'t have enough capacity to process your task. For now.",
                'Original size (in pixels) for this image': 'Original size (in pixels) for this image',
                'This image will be resized to this size (in pixels)': 'This image will be resized to this size (in pixels)',
                'Uploading...': "Uploading...",
                '1 file': '1 file',
                '1 mb': '1 mb',
                '${limit} files': '${limit} files',
                '${limit} mb': '${limit} mb',
                'registeredLevel': 'registered users',
                'premiumLevel': 'premium users',
                'publicLevel': 'non registered users',
                'limitTaskMsg': "This task is <strong>limited to ${currentLimit}</strong> for ${currentLevel}. <strong>${nextLevel} can upload up to ${nextLimit}</strong>. Some of your files have not been added.",
                'Wait a moment, please...': 'Wait a moment, please...',
                'Time left': 'Time left',
                'minute': 'minute',
                'hour': 'hour',
                'less than': 'less than',
                'minutes': 'minutes',
                'hours': 'hours',
                'seconds': 'seconds',
                'dropIt': 'Drop it like it\'s hot',
                'featurePremium': 'This <strong>feature</strong> requires you to be <strong>Premium</strong>',
                'Premium feature': 'Premium feature',
                'Welcome back after upload': 'We are glad you are here again. But for security reasons, your files aren\'t. To (toolname) your (fileformat), please get back to our homepage. ',
                'Limit exceeded': 'Limit exceeded',
                'leaveAlert': 'Do you really want to leave our page?',
                'passwordRequiredFor': 'Password required for <br>${filename}',
                'addPage': 'Add a blank page',
                'paswordRequired': 'Password required',
                'Cancel': 'Cancel',
                'Ignore': 'Ignore',
                'Ignore these files': 'Ignore these files',
                'Send': 'Send',
                'Same password for all files': 'Same password for all files',
                'Did you forgot your password?': 'Did you forgot your password?',
                'numPages': '${numPages} pages',
                'Unlock PDF': 'Unlock PDF',
                'damaged file?': 'Damaged file?',
                'previousTaskLoading': 'Loading files from previous task',
                'previousFail': 'We are sorry. We couldn\'t load the previous task files.',
                'previousFailContinue': 'Ok',
                'previousFailBack': 'Back to download',
                'disabledMultipleFiles': 'Option disabled because there are multiple files',
                'registeredFeatureTitle': 'Registered feature',
                'registeredFeatureSubtitle': 'This <strong>feature</strong> requires you to be <strong>Registered user</strong>',
                'authTitle': 'iLovePDF Accounts',
                'authSubtitle': 'Get access to extended features',
                'ProtectedFile': 'Password protected file',
                'limitMb': 'The file you are trying to process is bigger than ${mb} MB.',
                'limitFiles': 'You are trying to process more than ${files} files.',
                'featureRequired': '<strong>Feature</strong> available for <strong>Registered users</strong>',
                'limitFree': 'Free:',
                'limitPremium': 'Premium:',
                'limitFiles': '<b>${n} files</b> per task',
                'limitSize': '<b>${n} MB</b> per task',
                'limitPages': '<b>${n} pages</b> per task',
                'upgradePremium': 'Upgrade to Premium'
            };
            var unlockPdfUrl = '/unlock_pdf';
            var paymentLang = {
                'yearly': 'Yearly',
                'monthly': 'Monthly',
                'stripePayBtn_web': 'Go Premium',
                'stripePayBtn_web_desktop': 'Go Premium Pro',
                'pack_web': 'Premium',
                'pack_web_desktop': 'Premium Pro',
                'paymentFail': 'The payment can\'t be processed.'
            };
            var premiumData = {
                'premiumUrl': '/user/premium',
                priceMonth: '<span class="pricing__price__numbers">6</span><span class="pricing__price__code">US</span>$',
                priceYear: '<span class="pricing__price__numbers">48</span><span class="pricing__price__code">US</span>$',
                priceYearMonthly: '<span class="pricing__price__numbers">4</span><span class="pricing__price__code">US</span>$'
            };
            var country = 'PK';
            var ab = {"limits": "b"};
        </script>
        <script>
            var ilovepdfConfig = {
                "action": "tool",
                "fp": 1,
                "fpt": 7,
                "tool": "split",
                "site": "ilovepdf",
                "subtool": null,
                "toolText": "Split PDF",
                "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiIiLCJhdWQiOiIiLCJpYXQiOjE1MjMzNjQ4MjQsIm5iZiI6MTUyMzM2NDgyNCwianRpIjoicHJvamVjdF9wdWJsaWNfYzkwNWRkMWMwMWU5ZmQ3NzY5ODNjYTQwZDBhOWQyZjNfT1Vzd2EwODA0MGI4ZDJjN2NhM2NjZGE2MGQ2MTBhMmRkY2U3NyJ9.qvHSXgCJgqpC4gd6-paUlDLFmg0o2DsOvb1EUYPYx_E",
                "parentId": null,
                "preWorker": null,
                "defaultOptions": {
                    "split_mode": null,
                    "fixed_range": 1,
                    "merge_after_ranges": false,
                    "level": null,
                    "output_filename": "{filename}",
                    "packaged_filename": "ilovepdf_split"
                },
                "fileLimits": {
                    "merge": {"mb": 100, "files": 25},
                    "split": {"mb": 100, "files": 1},
                    "compress": {"mb": 200, "files": 2},
                    "officepdf": {"mb": 15, "files": 1},
                    "wordpdf": {"mb": 15, "files": 1},
                    "powerpointpdf": {"mb": 15, "files": 1},
                    "excelpdf": {"mb": 15, "files": 1},
                    "pdfoffice": {"mb": 15, "files": 1},
                    "pdfword": {"mb": 15, "files": 1},
                    "pdfocr": {"mb": 15, "files": 1, "pages": 50},
                    "pdfpowerpoint": {"mb": 15, "files": 1},
                    "pdfexcel": {"mb": 15, "files": 1, "pages": 500},
                    "pdfjpg": {"mb": 25, "files": 2},
                    "imagepdf": {"mb": 40, "files": 20},
                    "pagenumber": {"mb": 100, "files": 2},
                    "watermark": {"mb": 100, "files": 2},
                    "rotate": {"mb": 100, "files": 20},
                    "unlock": {"mb": 100, "files": 2},
                    "protect": {"mb": 100, "files": 2},
                    "pdfa": {"mb": 100, "files": 1},
                    "repair": {"mb": 100, "files": 1},
                    "organize": {"mb": 100, "files": 5},
                    "resizeimage": {"mb": 200, "files": 30},
                    "compressimage": {"mb": 200, "files": 30},
                    "cropimage": {"mb": 90, "files": 1},
                    "converttojpg": {"mb": 200, "files": 30},
                    "convertfromjpg": {"mb": 200, "files": 30},
                    "rotateimage": {"mb": 200, "files": 30},
                    "watermarkimage": {"mb": 200, "files": 30},
                    "memeimage": {"mb": 200, "files": 1},
                    "editimage": {"mb": 50, "files": 1},
                    "editpdf": {"mb": 100, "files": 1},
                    "sign": {"mb": 50, "files": 3},
                    "upscaleimage": {"mb": 6, "files": 3, "pxsize": 2073600},
                    "blurfaceimage": {"mb": 100, "files": 10}
                },
                "allFileLimits": {
                    "limits": {
                        "merge": {"mb": 100, "files": 25},
                        "split": {"mb": 100, "files": 1},
                        "compress": {"mb": 200, "files": 2},
                        "officepdf": {"mb": 15, "files": 1},
                        "wordpdf": {"mb": 15, "files": 1},
                        "powerpointpdf": {"mb": 15, "files": 1},
                        "excelpdf": {"mb": 15, "files": 1},
                        "pdfoffice": {"mb": 15, "files": 1},
                        "pdfword": {"mb": 15, "files": 1},
                        "pdfocr": {"mb": 15, "files": 1, "pages": 50},
                        "pdfpowerpoint": {"mb": 15, "files": 1},
                        "pdfexcel": {"mb": 15, "files": 1, "pages": 500},
                        "pdfjpg": {"mb": 25, "files": 2},
                        "imagepdf": {"mb": 40, "files": 20},
                        "pagenumber": {"mb": 100, "files": 2},
                        "watermark": {"mb": 100, "files": 2},
                        "rotate": {"mb": 100, "files": 20},
                        "unlock": {"mb": 100, "files": 2},
                        "protect": {"mb": 100, "files": 2},
                        "pdfa": {"mb": 100, "files": 1},
                        "repair": {"mb": 100, "files": 1},
                        "organize": {"mb": 100, "files": 5},
                        "resizeimage": {"mb": 200, "files": 30},
                        "compressimage": {"mb": 200, "files": 30},
                        "cropimage": {"mb": 90, "files": 1},
                        "converttojpg": {"mb": 200, "files": 30},
                        "convertfromjpg": {"mb": 200, "files": 30},
                        "rotateimage": {"mb": 200, "files": 30},
                        "watermarkimage": {"mb": 200, "files": 30},
                        "memeimage": {"mb": 200, "files": 1},
                        "editimage": {"mb": 50, "files": 1},
                        "editpdf": {"mb": 100, "files": 1},
                        "sign": {"mb": 50, "files": 3},
                        "upscaleimage": {"mb": 6, "files": 3, "pxsize": 2073600},
                        "blurfaceimage": {"mb": 100, "files": 10}
                    }, "registered_limits": {
                        "merge": {"mb": 100, "files": 25},
                        "split": {"mb": 100, "files": 1},
                        "compress": {"mb": 200, "files": 2},
                        "officepdf": {"mb": 15, "files": 1},
                        "wordpdf": {"mb": 15, "files": 1},
                        "powerpointpdf": {"mb": 15, "files": 1},
                        "excelpdf": {"mb": 15, "files": 1},
                        "pdfoffice": {"mb": 15, "files": 1},
                        "pdfword": {"mb": 15, "files": 1},
                        "pdfocr": {"mb": 15, "files": 1, "pages": 50},
                        "pdfpowerpoint": {"mb": 15, "files": 1},
                        "pdfexcel": {"mb": 15, "files": 1, "pages": 500},
                        "pdfjpg": {"mb": 25, "files": 2},
                        "imagepdf": {"mb": 40, "files": 20},
                        "pagenumber": {"mb": 100, "files": 2},
                        "watermark": {"mb": 100, "files": 2},
                        "rotate": {"mb": 100, "files": 20},
                        "unlock": {"mb": 100, "files": 2},
                        "protect": {"mb": 100, "files": 2},
                        "pdfa": {"mb": 100, "files": 1},
                        "repair": {"mb": 100, "files": 1},
                        "organize": {"mb": 100, "files": 5},
                        "resizeimage": {"mb": 200, "files": 30},
                        "compressimage": {"mb": 200, "files": 30},
                        "cropimage": {"mb": 90, "files": 1},
                        "converttojpg": {"mb": 200, "files": 30},
                        "convertfromjpg": {"mb": 200, "files": 30},
                        "rotateimage": {"mb": 200, "files": 30},
                        "watermarkimage": {"mb": 200, "files": 30},
                        "memeimage": {"mb": 200, "files": 1},
                        "editimage": {"mb": 50, "files": 1},
                        "editpdf": {"mb": 100, "files": 1},
                        "sign": {"mb": 50, "files": 3},
                        "upscaleimage": {"mb": 6, "files": 3, "pxsize": 2073600},
                        "blurfaceimage": {"mb": 100, "files": 10}
                    }, "premium_limits": {
                        "merge": {"mb": 4000, "files": 500},
                        "split": {"mb": 4000, "files": 1},
                        "compress": {"mb": 4000, "files": 10},
                        "officepdf": {"mb": 4000, "files": 10},
                        "wordpdf": {"mb": 4000, "files": 10},
                        "powerpointpdf": {"mb": 4000, "files": 10},
                        "excelpdf": {"mb": 4000, "files": 10},
                        "pdfword": {"mb": 4000, "files": 10},
                        "pdfocr": {"mb": 4000, "files": 10, "pages": 1000},
                        "pdfpowerpoint": {"mb": 4000, "files": 10},
                        "pdfexcel": {"mb": 4000, "files": 10, "pages": 1000},
                        "pdfoffice": {"mb": 4000, "files": 10},
                        "pdfjpg": {"mb": 4000, "files": 10},
                        "imagepdf": {"mb": 4000, "files": 80},
                        "pagenumber": {"mb": 4000, "files": 10},
                        "watermark": {"mb": 4000, "files": 10},
                        "rotate": {"mb": 4000, "files": 80},
                        "unlock": {"mb": 4000, "files": 10},
                        "protect": {"mb": 4000, "files": 80},
                        "pdfa": {"mb": 4000, "files": 10},
                        "repair": {"mb": 4000, "files": 10},
                        "organize": {"mb": 4000, "files": 20},
                        "resizeimage": {"mb": 4000, "files": 120},
                        "compressimage": {"mb": 4000, "files": 120},
                        "cropimage": {"mb": 4000, "files": 1},
                        "converttojpg": {"mb": 4000, "files": 120},
                        "convertfromjpg": {"mb": 4000, "files": 120},
                        "rotateimage": {"mb": 4000, "files": 120},
                        "watermarkimage": {"mb": 4000, "files": 120},
                        "memeimage": {"mb": 4000, "files": 1},
                        "editimage": {"mb": 50, "files": 1},
                        "editpdf": {"mb": 100, "files": 1},
                        "sign": {"mb": 50, "files": 5},
                        "upscaleimage": {"mb": 6, "files": 3, "pxsize": 2073600},
                        "blurfaceimage": {"mb": 4000, "files": 120}
                    }, "temp_limits": {
                        "merge": {"mb": 1000, "files": 80},
                        "split": {"mb": 1000, "files": 1},
                        "compress": {"mb": 1000, "files": 3},
                        "officepdf": {"mb": 1000, "files": 3},
                        "wordpdf": {"mb": 100, "files": 3},
                        "powerpointpdf": {"mb": 100, "files": 3},
                        "excelpdf": {"mb": 100, "files": 3},
                        "pdfword": {"mb": 100, "files": 1},
                        "pdfocr": {"mb": 100, "files": 1, "pages": 100},
                        "pdfpowerpoint": {"mb": 100, "files": 1},
                        "pdfexcel": {"mb": 100, "files": 1, "pages": 500},
                        "pdfoffice": {"mb": 100, "files": 1},
                        "pdfjpg": {"mb": 100, "files": 3},
                        "imagepdf": {"mb": 1000, "files": 80},
                        "pagenumber": {"mb": 1000, "files": 3},
                        "watermark": {"mb": 1000, "files": 3},
                        "rotate": {"mb": 1000, "files": 30},
                        "unlock": {"mb": 1000, "files": 10},
                        "protect": {"mb": 1000, "files": 5},
                        "pdfa": {"mb": 100, "files": 1},
                        "repair": {"mb": 1000, "files": 2},
                        "organize": {"mb": 1000, "files": 5},
                        "resizeimage": {"mb": 1000, "files": 60},
                        "compressimage": {"mb": 1000, "files": 60},
                        "cropimage": {"mb": 1000, "files": 1},
                        "converttojpg": {"mb": 5000, "files": 60},
                        "convertfromjpg": {"mb": 1000, "files": 60},
                        "rotateimage": {"mb": 1000, "files": 60},
                        "watermarkimage": {"mb": 1000, "files": 60},
                        "memeimage": {"mb": 1000, "files": 1},
                        "editimage": {"mb": 50, "files": 1},
                        "editpdf": {"mb": 100, "files": 1},
                        "sign": {"mb": 50, "files": 3},
                        "upscaleimage": {"mb": 6, "files": 3, "pxsize": 2073600},
                        "blurfaceimage": {"mb": 150, "files": 15}
                    }
                },
                "servers": ["\/\/api1.ilovepdf.com", "\/\/api2.ilovepdf.com", "\/\/api3.ilovepdf.com", "\/\/api4.ilovepdf.com", "\/\/api5.ilovepdf.com", "\/\/api6.ilovepdf.com", "\/\/api7.ilovepdf.com", "\/\/api8.ilovepdf.com", "\/\/api9.ilovepdf.com", "\/\/api10.ilovepdf.com", "\/\/api11.ilovepdf.com", "\/\/api12.ilovepdf.com", "\/\/api13.ilovepdf.com", "\/\/api14.ilovepdf.com", "\/\/api15.ilovepdf.com", "\/\/api16.ilovepdf.com", "\/\/api17.ilovepdf.com", "\/\/api18.ilovepdf.com", "\/\/api19.ilovepdf.com", "\/\/api22.ilovepdf.com", "\/\/api23.ilovepdf.com", "\/\/api24.ilovepdf.com", "\/\/api25.ilovepdf.com", "\/\/api26.ilovepdf.com", "\/\/api27.ilovepdf.com", "\/\/api28.ilovepdf.com", "\/\/api29.ilovepdf.com", "\/\/api30.ilovepdf.com", "\/\/api31.ilovepdf.com", "\/\/api32.ilovepdf.com", "\/\/api33.ilovepdf.com", "\/\/api34.ilovepdf.com", "\/\/api35.ilovepdf.com", "\/\/api36.ilovepdf.com", "\/\/api37.ilovepdf.com", "\/\/api38.ilovepdf.com", "\/\/api39.ilovepdf.com", "\/\/api40.ilovepdf.com", "\/\/api41.ilovepdf.com", "\/\/api43.ilovepdf.com", "\/\/api44.ilovepdf.com", "\/\/api45.ilovepdf.com", "\/\/api46.ilovepdf.com", "\/\/api47.ilovepdf.com", "\/\/api48.ilovepdf.com", "\/\/api49.ilovepdf.com", "\/\/api50.ilovepdf.com", "\/\/api51.ilovepdf.com", "\/\/api52.ilovepdf.com", "\/\/api53.ilovepdf.com", "\/\/api54.ilovepdf.com", "\/\/api55.ilovepdf.com", "\/\/api56.ilovepdf.com", "\/\/api57.ilovepdf.com", "\/\/api58.ilovepdf.com", "\/\/api59.ilovepdf.com", "\/\/api60.ilovepdf.com", "\/\/api61.ilovepdf.com", "\/\/api62.ilovepdf.com", "\/\/api63.ilovepdf.com", "\/\/api64.ilovepdf.com", "\/\/api65.ilovepdf.com"],
                "level": "user",
                "downloadUrl": "\/download",
                "user": null,
                "country": "PK",
                "dtr": true
            };
            ilovepdfConfig.taskId = 'npA7tlnf95y22m70hvsv5gmm2tyrp423w64n3jc2dcyxhq2khd27g3wblz5m0643txymr2fyq7d8c8sg4r1ztl6lk5k652xs0Aphrq67s613wmqA6khx371j9gvf4m0z4xmAjbxkbq0qxvhrt1v6p8kv6cq7mbA1mq0A6h9xfwg58xA9tkx1';

            iloveLang.selectToExtract = 'Select pages to extract';
            iloveLang.addRange = 'Add Range';
            iloveLang['Range'] = 'Range';

        </script>

    </div>
    <div class="footer">
        <div class="footer__copy">
            &copy; iLovePDF 2023 &reg; - Your PDF Editor
        </div>
    </div>
    <div id="network" class="network">
        <i class="ico ico--network"></i>
        <div class="network__text">
            Woops! Something is wrong with your Internet connection...
        </div>
    </div>

    <script>
        var siteData = {
            csrfParam: '_csrf-ilovepdf',
            csrfToken: 'WF7bDApSBBQQvoEawBIqrByam1MYTrPGW3NrhqQKlP4XCIF4TiszISTKrFalZlz2K9D8B0kf5oQeGyHQ9FrMiQ=='
        };
        var lang = 'en-US';
        var brand = 'iLovePDF';
        var brand_ref = 'ilovepdf';
        var nds = {
            'ck': 0,
            'content': '<p>We hope you like it and find it easier to use.<br>If you run into any issues, please <a href="https://www.ilovepdf.com/\&quot;/contact\&quot;">let us know</a>.<br>We can fix any problem if we know about it.</p>',
            'title': '<span style="color:#1D9D58">Welcome to the newly designed iLovePDF</span>'
        };
    </script>
    <script>
        var uCookie = {
            'ck': 0,
            'uc': 'PK',
            'settings': '<input type="checkbox" name="allownecessary" id="allownecessary" value="1" checked disabled><label for="allownecessary">Allow necessary cookies</label> <input type="checkbox" name="allowpads" id="allowpads" value="1"><label for="allowpads">Allow personalized Ads</label><input type="checkbox" name="allowanalytics" id="allowanalytics" value="1"><label for="allowanalytics">Allow analytics cookies</label><span>Get more details about our <a target=\"_blank\" href="https://www.ilovepdf.com/\&quot;/help/cookies\&quot;">use of cookies</a> and our <a target=\"_blank\" href="https://www.ilovepdf.com/\&quot;/help/terms#cookies\"">Terms</a>.<br/></span>',
            'content': '<span id=\"ck_cnt\" class=\"txtSmall\">We use strictly necessary cookies for the basic functioning of our tools. By accepting our <a target=\"_blank\" href="https://www.ilovepdf.com/\&quot;/help/terms#cookies\"" style=\"text-decoration: underline;\">Terms</a> you consent to the use of our own and third party cookies for statistical and custom advertising purposes based on your browsing habits. Find more information, manage and reject cookies in <i>Settings</i>.<br/></span>',
            'buttons': '<a id=\"ck_set\">Settings</a> <a id=\"okck\" class=\"langtoas langtoas--big\" style=\"width:auto;margin-left: 0px;margin-top:15px;\">Accept all</a>',
            'title': 'Use of cookies',
            'accept_all': 'Accept all',
            'save_txt': 'Save',
            'settings_txt': 'Settings',
            'close_settings': 'Close settings',
        }
    </script>
    <script src="dist/js/app.01f5a37.js" async="async"></script>

@endsection
