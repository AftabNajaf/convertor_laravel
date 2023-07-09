@extends('layouts.index')
@section('title','Edit PDF | Online PDF Editor and Form Filler')
@section('content')
    <div class="main">

        <div class="tool tool--small">
            <div class="tool__preview">
                <div class="tool__preview__pages"></div>
                <div class="tool__preview__toggle">
                    <svg class="tool__preview__arrow" xmlns="http://www.w3.org/2000/svg" width="6" height="10">
                        <path
                            d="M6 9c0 .216-.057.427-.164.6-.27.442-.784.53-1.145.2l-4.364-4a.93.93 0 0 1-.164-.2c-.27-.442-.198-1.07.164-1.4L4.69.2c.142-.13.314-.2.49-.2C5.634 0 6 .448 6 1v8z"
                            fill="#969696" fill-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="tool__workarea" id="workArea">
                <div class="editpdf-menu-wrapper">
                    <!-- MAIN MENU -->
                    <div id="editpdf-menu-toolbar" class="editpdf__menu hidden">
                        <div class="editpdf__menu__block">
                            <div class="wrapper">
                                <div class="editpdf__menu__option prev">
                                    <svg class="editpdf__menu__option__default" xmlns="http://www.w3.org/2000/svg"
                                         width="24" height="24">
                                        <g transform="matrix(1 0 0 -1 0 24)" fill-rule="nonzero">
                                            <path
                                                d="M20.308 0C22.347 0 24 1.653 24 3.692v16.615C24 22.347 22.347 24 20.308 24H3.692C1.653 24 0 22.347 0 20.308V3.692C0 1.653 1.653 0 3.692 0h16.615z"
                                                fill="#626870" />
                                            <path
                                                d="M20.193 1H3.807a2.81 2.81 0 0 0-2.802 2.642L1 3.807v16.386a2.81 2.81 0 0 0 2.642 2.802l.165.005h16.386a2.81 2.81 0 0 0 2.802-2.642l.005-.165V3.807a2.81 2.81 0 0 0-2.642-2.802L20.193 1z"
                                                fill="#fff" />
                                            <path
                                                d="M14.763 10.204a.73.73 0 0 1 1.055 1.009l-3.5 3.66a.73.73 0 0 1-1.055 0l-3.5-3.66a.73.73 0 0 1 1.055-1.009l2.973 3.108 2.973-3.108z"
                                                fill="#626870" />
                                        </g>
                                    </svg>
                                    <svg class="editpdf__menu__option__hover" xmlns="http://www.w3.org/2000/svg"
                                         width="24" height="24" fill-rule="evenodd">
                                        <path fill="#383e45"
                                              d="M20.308 24C22.347 24 24 22.347 24 20.308V3.692C24 1.653 22.347 0 20.308 0H3.692C1.653 0 0 1.653 0 3.692v16.615C0 22.347 1.653 24 3.692 24h16.615z" />
                                        <path fill="#fff"
                                              d="M20.193 23H3.807a2.81 2.81 0 0 1-2.802-2.642L1 20.193V3.807a2.81 2.81 0 0 1 2.642-2.802L3.807 1h16.386a2.81 2.81 0 0 1 2.802 2.642l.005.165v16.386a2.81 2.81 0 0 1-2.642 2.802l-.165.005z" />
                                        <path fill="#383e45"
                                              d="M14.763 13.796a.73.73 0 0 0 1.055-1.009l-3.5-3.66a.73.73 0 0 0-1.055 0l-3.5 3.66a.73.73 0 0 0 1.055 1.009l2.973-3.108 2.973 3.108z" />
                                    </svg>
                                    <svg class="editpdf__menu__option__active" xmlns="http://www.w3.org/2000/svg"
                                         width="24" height="24">
                                        <g transform="matrix(1 0 0 -1 0 24)" fill-rule="nonzero">
                                            <path
                                                d="M20.308 0C22.347 0 24 1.653 24 3.692v16.615C24 22.347 22.347 24 20.308 24H3.692C1.653 24 0 22.347 0 20.308V3.692C0 1.653 1.653 0 3.692 0h16.615z"
                                                fill="#383e45" />
                                            <path
                                                d="M14.763 10.204a.73.73 0 0 1 1.055 1.009l-3.5 3.66a.73.73 0 0 1-1.055 0l-3.5-3.66a.73.73 0 0 1 1.055-1.009l2.973 3.108 2.973-3.108z"
                                                fill="#fff" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="editpdf__menu__option next">
                                    <svg class="editpdf__menu__option__default" width="24px" height="24px"
                                         viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-76.000000, -55.000000)" fill-rule="nonzero">
                                                <g
                                                    transform="translate(88.000000, 67.000000) scale(1, -1) translate(-88.000000, -67.000000) translate(76.000000, 55.000000)">
                                                    <path
                                                        d="M20.3076923,0 C22.3468975,0 24,1.65310246 24,3.69230769 L24,20.3076923 C24,22.3468975 22.3468975,24 20.3076923,24 L3.69230769,24 C1.65310246,24 0,22.3468975 0,20.3076923 L0,3.69230769 C0,1.65310246 1.65310246,0 3.69230769,0 L20.3076923,0 Z"
                                                        fill="#626870"></path>
                                                    <path
                                                        d="M20.1931034,1 L3.80689655,1 C2.3120549,1 1.09013798,2.16852971 1.00476489,3.64197006 L1,3.80689655 L1,20.1931034 C1,21.6879451 2.16852971,22.909862 3.64197006,22.9952351 L3.80689655,23 L20.1931034,23 C21.6879451,23 22.909862,21.8314703 22.9952351,20.3580299 L23,20.1931034 L23,3.80689655 C23,2.3120549 21.8314703,1.09013798 20.3580299,1.00476489 L20.1931034,1 Z"
                                                        fill="#FFFFFF"></path>
                                                    <path
                                                        d="M14.763241,13.8720164 C15.0418866,14.1632471 15.5038627,14.1734493 15.7950934,13.8948037 C16.086324,13.616158 16.0965262,13.154182 15.8178806,12.8629513 L12.3172602,9.20422538 C12.0298732,8.90385855 11.5500076,8.90385855 11.2626207,9.20422538 L7.76200031,12.8629513 C7.48335466,13.154182 7.49355685,13.616158 7.78478753,13.8948037 C8.0760182,14.1734493 8.53799424,14.1632471 8.81663988,13.8720164 L11.7899404,10.7644267 L14.763241,13.8720164 Z"
                                                        fill="#626870"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <svg class="editpdf__menu__option__hover" xmlns="http://www.w3.org/2000/svg"
                                         width="24" height="24" fill-rule="evenodd">
                                        <path fill="#383e45"
                                              d="M20.308 24C22.347 24 24 22.347 24 20.308V3.692C24 1.653 22.347 0 20.308 0H3.692C1.653 0 0 1.653 0 3.692v16.615C0 22.347 1.653 24 3.692 24h16.615z" />
                                        <path fill="#fff"
                                              d="M20.193 23H3.807a2.81 2.81 0 0 1-2.802-2.642L1 20.193V3.807a2.81 2.81 0 0 1 2.642-2.802L3.807 1h16.386a2.81 2.81 0 0 1 2.802 2.642l.005.165v16.386a2.81 2.81 0 0 1-2.642 2.802l-.165.005z" />
                                        <path fill="#383e45"
                                              d="M14.763 10.128a.73.73 0 0 1 1.055 1.009l-3.5 3.66a.73.73 0 0 1-1.055 0l-3.5-3.66a.73.73 0 0 1 1.055-1.009l2.973 3.108 2.973-3.108z" />
                                    </svg>
                                    <svg class="editpdf__menu__option__active" width="24px" height="24px"
                                         viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-76.000000, -141.000000)" fill-rule="nonzero">
                                                <g transform="translate(76.000000, 141.000000)">
                                                    <path
                                                        d="M20.3076923,0 C22.3468975,0 24,1.65310246 24,3.69230769 L24,20.3076923 C24,22.3468975 22.3468975,24 20.3076923,24 L3.69230769,24 C1.65310246,24 0,22.3468975 0,20.3076923 L0,3.69230769 C0,1.65310246 1.65310246,0 3.69230769,0 L20.3076923,0 Z"
                                                        fill="#383E45"></path>
                                                    <path
                                                        d="M14.763241,10.2042265 C15.0418866,9.91299582 15.5038627,9.90279363 15.7950934,10.1814393 C16.086324,10.4600849 16.0965262,10.922061 15.8178806,11.2132916 L12.3172602,14.8720175 C12.0298732,15.1723844 11.5500076,15.1723844 11.2626207,14.8720175 L7.76200031,11.2132916 C7.48335466,10.922061 7.49355685,10.4600849 7.78478753,10.1814393 C8.0760182,9.90279363 8.53799424,9.91299582 8.81663988,10.2042265 L11.7899404,13.3118162 L14.763241,10.2042265 Z"
                                                        fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <input name="editor_page" id="editor_page"><span id="editor_pages_wrapper">/<span
                                        id="editor_pages"></span></span>
                            </div>
                        </div>
                        <div class="editpdf__menu__block">
                            <div class="item" data-operation-mode="hand">
                                <div class="wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.959" height="19.44">
                                        <path fill="#626870" fill-rule="evenodd"
                                              d="M12.213 19.44H7.37c-1.35 0-2.6-.677-3.263-1.774l-3.94-6.23c-.34-.462-.102-.795.115-.983s.74-.353 1.237-.324c.51.033.98.248 1.298.593l1.208 1.27c.093.097.246.134.384.09s.23-.155.23-.28l.007-8.732C4.65 2.474 5.162 2 5.793 2c.617 0 1.12.462 1.145 1.038l.001 6.78c0 .08.036.155.1.2s.153.087.244.086h.001c.09.001.18-.03.244-.085s.1-.13.102-.21V1.075C7.63.48 8.143 0 8.775 0H8.8c.63 0 1.155.476 1.155 1.072V9.8c0 .165.155.298.346.298s.346-.134.346-.298v-7.61c0-.596.503-1.08 1.134-1.08s1.138.484 1.138 1.08V9.8c0 .165.155.298.346.298s.346-.134.346-.298V5.325c0-.596.525-1.062 1.157-1.062h.033c.63 0 1.144.472 1.145 1.066l-.002 10.64c-.002 1.916-1.68 3.47-3.74 3.47z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="editpdf__menu__block">
                            <div class="item" data-menu-action="zoom_out">
                                <div class="wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="18.523" height="17.926">
                                        <defs>
                                            <circle id="A" cx="7.5" cy="7.5" r="7.5" />
                                            <mask id="B" x="0" y="0" maskUnits="userSpaceOnUse">
                                                <path fill="#000" d="M0 0h18.523v17.926H0z" />
                                                <use fill="#fff" xlink:href="#A" />
                                            </mask>
                                        </defs>
                                        <g stroke="#626870">
                                            <use fill-opacity="0" stroke-width="2" mask="url(#B)" xlink:href="#A" />
                                            <g fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M4 7.5h7" />
                                                <path stroke-width="2" d="M13.198 12.767l4.325 4.158" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="editpdf__menu__block">
                            <div class="item" data-menu-action="zoom_in">
                                <div class="wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="18.523" height="17.926">
                                        <defs>
                                            <circle id="A" cx="7.5" cy="7.5" r="7.5" />
                                            <mask id="B" x="0" y="0" maskUnits="userSpaceOnUse">
                                                <path fill="#000" d="M0 0h18.523v17.926H0z" />
                                                <use fill="#fff" xlink:href="#A" />
                                            </mask>
                                        </defs>
                                        <g stroke="#626870">
                                            <use fill-opacity="0" stroke-width="2" mask="url(#B)" xlink:href="#A" />
                                            <g fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M4 7.5h7" />
                                                <path d="M7.5 4v7" />
                                                <path stroke-width="2" d="M13.198 12.767l4.325 4.158" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="editpdf__menu__block">
                            <div class="item" data-menu-action="fit_viewport_all">
                                <div class="wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="23" fill-rule="evenodd">
                                        <path fill="#616871"
                                              d="M14.654 0H2.346l-.183.008C.92.126 0 1.242 0 2.563v17.875C0 21.84 1.037 23 2.346 23h12.308l.183-.008C16.08 22.874 17 21.758 17 20.437V2.563C17 1.16 15.963 0 14.654 0z" />
                                        <path fill="#fff"
                                              d="M2.234 1.005L2.37 1h12.284C15.384 1 16 1.688 16 2.563v2.733.052 15.1c0 .825-.55 1.492-1.234 1.557L14.63 22H2.346C1.616 22 1 21.312 1 20.437V2.563c0-.825.55-1.492 1.234-1.557z" />
                                        <path fill="#626870"
                                              d="M8.015 11.015v-2.86l-.53.53c-.188.188-.496.188-.684 0s-.2-.5.001-.686l1.353-1.353a.48.48 0 0 1 .687-.003l1.353 1.352c.195.188.196.5.005.7a.49.49 0 0 1-.686 0l-.528-.53v2.86h2.86l-.53-.53c-.188-.188-.188-.496 0-.684s.5-.2.686.001l1.353 1.353a.48.48 0 0 1 .003.687l-1.352 1.353c-.188.195-.5.196-.7.005a.49.49 0 0 1 0-.686l.53-.528h-2.86v2.86l.53-.532c.192-.185.497-.185.684.002s.2.502-.002.688l-1.353 1.353a.48.48 0 0 1-.689-.001l-1.352-1.352c-.193-.188-.193-.498-.002-.688s.496-.188.684 0l.53.53v-2.86h-2.86l.532.53c.185.192.185.497-.002.684s-.502.2-.688-.002l-1.353-1.353a.48.48 0 0 1 .001-.689l1.352-1.352c.188-.193.498-.193.688-.002s.188.496 0 .684l-.53.53h2.86z" />
                                    </svg>
                                </div>
                            </div>

                            <div class="item item--hidden" data-menu-action="fit_viewport_width">
                                <div class="wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="23" fill-rule="evenodd">
                                        <path fill="#616871"
                                              d="M14.654 0H2.346l-.183.008C.92.126 0 1.242 0 2.563v17.875C0 21.84 1.037 23 2.346 23h12.308l.183-.008C16.08 22.874 17 21.758 17 20.437V2.563C17 1.16 15.963 0 14.654 0z" />
                                        <path fill="#fff"
                                              d="M2.234 1.005L2.37 1h12.284C15.384 1 16 1.688 16 2.563v2.733.052 15.1c0 .825-.55 1.492-1.234 1.557L14.63 22H2.346C1.616 22 1 21.312 1 20.437V2.563c0-.825.55-1.492 1.234-1.557z" />
                                        <path fill="#626870"
                                              d="M8.015 10.857h3.83l-.53-.53c-.188-.188-.188-.496 0-.684s.5-.2.686.001l1.353 1.353a.48.48 0 0 1 .003.687l-1.352 1.353c-.188.195-.5.196-.7.005a.49.49 0 0 1 0-.686l.53-.528H5.156l.532.53c.185.192.185.497-.002.684s-.502.2-.688-.002l-1.353-1.353a.48.48 0 0 1 .001-.689l1.352-1.352c.188-.193.498-.193.688-.002s.188.496 0 .684l-.53.53h2.86z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="editpdf__menu__block has-items editpdf__menu__block--text">
                            <div class="item" data-tool="text">
                                <div class="wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="19.893" width="21.871"
                                         fill="#626870" fill-rule="evenodd">
                                        <path
                                            d="M21.03 19.893c.557 0 .84-.254.84-.713s-.283-.693-.84-.693h-1.846V1.416h1.846c.557 0 .84-.254.84-.713S21.588 0 21.03 0H15.7c-.557 0-.85.244-.85.703s.293.713.85.713h1.875v17.07H15.7c-.557 0-.85.234-.85.693s.293.713.85.713h5.342zM13.018 16.4c-.236.204-.507.306-.813.306-.204 0-.395-.054-.574-.163a1.07 1.07 0 0 1-.42-.507l-1.148-2.563H3.33l-1.15 2.565c-.102.23-.242.4-.42.507a1.12 1.12 0 0 1-.593.163 1.22 1.22 0 0 1-.803-.306Q0 16.105 0 15.665a1.18 1.18 0 0 1 .115-.497l5.28-11.344c.115-.255.3-.45.526-.583a1.49 1.49 0 0 1 .756-.2c.268 0 .52.067.756.2s.4.328.526.583l5.3 11.344c.077.166.115.332.115.497a.95.95 0 0 1-.354.746zM4.17 11.57h5.05L6.696 5.9 4.17 11.57z" />
                                    </svg>
                                </div>
                            </div><!-- /.item -->
                        </div>

                        <div id="imgUploaderContainer" class="editpdf__menu__block">
                            <div id="uploadImageBtn" class="item" data-tool="img">
                                <div class="wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20">
                                        <path fill="#626870" fill-rule="evenodd"
                                              d="M17.298 16c1.8 0 2.702-.923 2.702-2.732V2.723C20 .923 19.087 0 17.298 0H2.702C.913 0 0 .914 0 2.723v10.545C0 15.077.913 16 2.702 16h14.595zm-15.82-3.746v-9.43c0-.877.456-1.316 1.28-1.316h14.488c.814 0 1.28.44 1.28 1.316v9.393l-4.43-4.25c-.376-.338-.814-.52-1.27-.52a1.8 1.8 0 0 0-1.271.512l-3.82 3.49-1.566-1.444c-.358-.33-.752-.493-1.145-.493-.385 0-.743.155-1.092.484l-2.452 2.257zM8.403 6.05c0 1.133-.904 2.047-2.004 2.047-1.1 0-2.004-.914-2.004-2.047 0-1.124.895-2.056 2.004-2.056 1.1 0 2.004.932 2.004 2.056z" />
                                    </svg>
                                </div>
                            </div> <!-- .item -->
                        </div>

                        <div class="editpdf__menu__block has-items">
                            <div class="item" data-tool="freehand">
                                <div class="wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="15.999" width="15.999"
                                         fill="#626870" fill-rule="evenodd">
                                        <path
                                            d="M1.53 11.443l9.382-9.383 3.026 3.026-9.382 9.383-3.026-3.026zM0 16l3.344-.926-2.418-2.418L0 16zM14.776.47a1.61 1.61 0 0 0-2.272 0l-.68.68 3.026 3.026.68-.68a1.61 1.61 0 0 0 0-2.272L14.776.47z" />
                                    </svg>
                                </div> <!-- /.wrapper -->
                            </div> <!-- .item -->
                        </div>

                        <div class="editpdf__menu__block has-items editpdf__menu__block--shapes-block">
                            <div class="item" data-menu-action="show_shape_selector_submenu">
                                <div class="wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.001" height="24" fill="#626870"
                                         fill-rule="evenodd">
                                        <path
                                            d="M13.716 10.286v4.286h5.534l.182.613c.188.63.284 1.29.284 1.96A6.86 6.86 0 0 1 12.858 24a6.86 6.86 0 0 1-6.857-6.857 6.86 6.86 0 0 1 6.857-6.857h.857zm-.857 4.418v-3.56a6 6 0 0 0 0 12 6 6 0 0 0 5.752-7.714h-5.026c-.4 0-.725-.325-.725-.725z" />
                                        <path
                                            d="M.12 14.134L8.264.42a.86.86 0 0 1 1.474 0l3.857 6.497c.08.132.12.283.12.437v2.93c0 .474-.384.857-.857.857l-.23.004c-2.372.1-4.453 1.568-5.334 3.746-.13.324-.445.536-.794.536H.858a.86.86 0 0 1-.737-1.295zm12.737-6.78L9 .857.858 14.57H6.5a6.86 6.86 0 0 1 6.359-4.286v-2.93z" />
                                        <path
                                            d="M23.144 4.286h-9.43c-.473 0-.857.384-.857.857v9.43c0 .473.384.857.857.857h9.43c.473 0 .857-.384.857-.857v-9.43c0-.473-.384-.857-.857-.857z" />
                                    </svg>
                                </div> <!-- /.wrapper -->
                            </div> <!-- .item -->
                        </div> <!-- /.block- -->

                        <div class="editpdf__menu__block has-items align-end">
                            <div class="item" data-menu-action="open_gear_menu">
                                <div class="wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path fill="#626870" fill-rule="evenodd"
                                              d="M14.17 8c0 .272-.025.528-.058.784l1.735 1.32c.156.12.197.336.1.512l-1.645 2.768c-.1.176-.312.248-.502.176l-2.048-.8c-.428.312-.888.584-1.4.784l-.313 2.12c-.025.192-.197.336-.403.336h-3.3c-.206 0-.378-.144-.403-.336l-.312-2.12a6.05 6.05 0 0 1-1.39-.784l-2.048.8c-.18.064-.403 0-.502-.176L.057 10.616c-.1-.176-.058-.392.1-.512l1.735-1.32c-.033-.256-.058-.52-.058-.784s.025-.528.058-.784L.156 5.896c-.156-.12-.206-.336-.1-.512l1.645-2.768c.1-.176.312-.248.502-.176l2.048.8c.428-.312.888-.584 1.4-.784l.313-2.12C5.98.144 6.15 0 6.357 0h3.3c.206 0 .378.144.403.336l.313 2.12a6.05 6.05 0 0 1 1.39.784l2.048-.8c.18-.064.403 0 .502.176l1.645 2.768c.1.176.058.392-.1.512l-1.735 1.32c.033.256.058.512.058.784zM5.123 8c0 1.544 1.29 2.8 2.88 2.8s2.88-1.256 2.88-2.8-1.29-2.8-2.88-2.8-2.88 1.256-2.88 2.8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>


                    </div>
                </div> <!-- /MENU WRAPPER -->


                <div class="editpdf-submenu-wrapper submenu-hidden">
                    <div class="editpdf__menu editpdf__submenu">
                        <div class="editpdf__menu__block">
                        </div>
                    </div>
                </div>
                <div id="dropArea"></div>
                <div class="tool__header">
                    <h1 class="tool__header__title">PDF Editor</h1>
                    <h2 class="tool__header__subtitle">Edit PDF by adding text, shapes, comments and highlights. Your
                        secure and simple tool to edit PDF.</h2>
                </div>
                <div class="uploading__bar uploading__bar--small">
                    <span class="uploading__bar__completed"></span>
                </div>
                <div id="uploader" class="uploader">
                    <a class="uploader__btn tooltip--left" id="pickfiles" href="javascript:;" title="Add more files">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" stroke-linecap="round"
                             stroke-width="2" stroke="#fff" fill="none" stroke-linejoin="round">
                            <desc>Upload your file and transform it.</desc>
                            <path d="M10 1.833v16.333" />
                            <path d="M1.833 10h16.333" />
                        </svg>
                        <span>Select PDF file</span>
                    </a>
                    <div class="uploader__extra">
                        <a class="btn-icon uploader__extra__btn tooltip tooltip--right" id="uploadDisk"
                           href="javascript:;" title="Upload from your computer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19"
                                 fill="#fff" fill-rule="nonzero">
                                <desc>Upload from computer.</desc>
                                <path
                                    d="M4.8 19c-.442 0-.8-.448-.8-1s.358-1 .8-1h10.4c.442 0 .8.448.8 1s-.358 1-.8 1H4.8z" />
                                <path d="M7 15h6l-1 3H8z" />
                                <path
                                    d="M2 2v11h16V2H2zM1 0h18a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1z" />
                            </svg>
                        </a>
                        <a id="gdrive_file_selector" class="btn-icon uploader__extra__btn tooltip tooltip--right active"
                           title="Select PDF from Google Drive">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16">
                                <path fill="#FFF"
                                      d="M8.7375,5.80725 L3.021,15.70725 L0.12375,10.69725 L5.847,0.795 L8.7375,5.80725 Z M17.865,10.38225 L12.078,10.39125 L6.378,0.489 L12.1725,0.489 L17.865,10.38225 Z M17.87625,10.9875 L14.9865,15.9975 L3.5415,15.99 L6.43425,10.98375 L17.87625,10.9875 Z" />
                            </svg>
                        </a>
                        <a id="dropbox_file_selector"
                           class="btn-icon uploader__extra__btn tooltip tooltip--right active"
                           title="Select PDF from Dropbox">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                <path fill="#FFF"
                                      d="M5.3475,0.7035 L0.096,4.125 L3.708,7.03725 L9.018,3.765 L5.3475,0.7035 Z M17.904,4.14 L12.66525,0.7275 L9.01875,3.7725 L14.29875,7.03875 L17.904,4.14 Z M9.01875,10.305 L12.66525,13.35975 L17.904,9.945 L14.2995,7.0395 L9.01875,10.305 Z M0.096,9.9585 L5.3475,13.35975 L9.01875,10.305 L3.70875,7.0455 L0.096,9.9585 Z M9.01875,10.9635 L5.35575,14.0385 L3.786,13.02 L3.786,14.16 L9.01875,17.30475 L14.271,14.15175 L14.271,13.0125 L12.693,14.031 L9.01875,10.9635 Z" />
                            </svg>
                        </a>
                    </div>
                    <div class="uploader__droptxt">or drop PDF here</div>
                </div>
                <div class="sidetools">
                    <a id="settingsToogle" class="btn-icon btn-icon--white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                            <path
                                d="M24 14.187V9.813c-2.148-.766-2.726-.802-3.027-1.53s.083-1.17 1.06-3.223L18.94 1.968c-2.026.963-2.488 1.364-3.224 1.06-.727-.302-.768-.89-1.527-3.027H9.813c-.764 2.144-.8 2.725-1.53 3.027-.752.313-1.203-.1-3.223-1.06L1.968 5.06c.977 2.055 1.362 2.493 1.06 3.224S2.146 9.05 0 9.813v4.375c2.14.76 2.725.8 3.027 1.528.304.734-.08 1.167-1.06 3.223l3.093 3.093c2-.95 2.47-1.373 3.223-1.06.728.302.764.88 1.53 3.027h4.374c.758-2.13.8-2.723 1.537-3.03.745-.308 1.186.1 3.215 1.062l3.093-3.093c-.975-2.05-1.362-2.492-1.06-3.223.3-.726.88-.763 3.027-1.528zm-4.875.764c-.577 1.394-.068 2.458.488 3.578l-1.084 1.084c-1.093-.543-2.16-1.076-3.573-.5-1.396.58-1.8 1.693-2.188 2.877h-1.534c-.398-1.185-.79-2.297-2.183-2.875-1.42-.588-2.507-.045-3.58.488L4.39 18.53c.557-1.118 1.066-2.18.487-3.58-.58-1.39-1.69-1.784-2.876-2.182v-1.533c1.185-.398 2.297-.79 2.875-2.184s.068-2.46-.488-3.58L5.47 4.387c1.082.538 2.162 1.077 3.58.488 1.392-.577 1.785-1.7 2.183-2.875h1.534c.398 1.185.792 2.297 2.184 2.875 1.42.588 2.506.045 3.58-.488l1.084 1.084c-.556 1.12-1.065 2.187-.488 3.58s1.69 1.784 2.875 2.183v1.534c-1.188.398-2.302.79-2.877 2.183zM12 9c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zm0-2a5 5 0 1 0 0 10 5 5 0 1 0 0-10z" />
                        </svg>
                    </a>
                    <a class="btn-icon btn-icon--white tooltip active tooltip--left order" id="orderByName"
                       data-order="asc" href="javascript:;" title="Order files by name">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="#383E45"
                             fill-rule="evenodd">
                            <path
                                d="M2.947 15.297V.23c0-.067.026-.123.077-.166S3.14 0 3.22 0h1.635c.08 0 .145.022.196.065s.077.1.077.166v15.066h2.5a.39.39 0 0 1 .261.087.28.28 0 0 1 .102.222c0 .077-.038.154-.114.23l-3.62 3.076a.42.42 0 0 1-.261.087c-.09 0-.178-.03-.26-.087L.11 15.828c-.113-.103-.14-.215-.08-.338.06-.13.174-.193.34-.193h2.575z"
                                fill-rule="nonzero" />
                            <path
                                d="M11.222 20.2l2.94-7.52c.194-.496.555-.67 1.1-.67h.54c.513 0 .97.12 1.22.804l2.746 7.386c.083.214.222.603.222.845 0 .536-.485.965-1.068.965-.5 0-.86-.174-1.026-.603l-.582-1.6h-3.66l-.596 1.6c-.153.43-.47.603-1.012.603-.624 0-1.054-.375-1.054-.965 0-.24.14-.63.222-.845zm5.602-1.93l-1.3-3.874h-.028L14.15 18.27h2.663zM11.346 8l4.75-6.083h-3.66c-.602 0-1.088-.333-1.088-.958S11.832 0 12.434 0h5.53c.538 0 .973.25.973 1.042 0 .278-.102.583-.294.82l-4.826 6.222h4.096c.602 0 1.088.333 1.088.958s-.486.958-1.088.958h-5.696C11.448 10 11 9.722 11 8.875c0-.36.154-.625.346-.875z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="#383E45"
                             fill-rule="evenodd">
                            <path
                                d="M2.947 15.297V.23c0-.066.026-.122.077-.165S3.14 0 3.22 0h1.634c.08 0 .146.022.196.065s.077.1.077.166v15.066h.33 2.18c.106 0 .193.03.26.087a.28.28 0 0 1 .102.222c0 .077-.038.154-.114.23l-3.62 3.076c-.075.058-.162.087-.26.087a.46.46 0 0 1-.261-.087L.1 15.828c-.112-.103-.14-.216-.078-.328.06-.14.174-.203.34-.203h2.575z"
                                fill-rule="nonzero" />
                            <path
                                d="M11.212 8.083L14.016.66c.185-.5.53-.66 1.058-.66h.516c.5 0 .926.12 1.164.794l2.62 7.3c.08.212.212.595.212.833 0 .53-.463.952-1.02.952-.476 0-.82-.172-.98-.595l-.556-1.587h-3.5l-.57 1.587c-.146.423-.45.595-.966.595C11.41 9.87 11 9.5 11 8.917c0-.238.132-.622.212-.833zm5.344-1.905l-1.23-3.823H15.3l-1.283 3.823h2.54zm-5.2 13.442l4.908-5.794h-3.783c-.622 0-1.124-.317-1.124-.913S11.86 12 12.482 12h5.715c.556 0 1.005.238 1.005.992a1.21 1.21 0 0 1-.304.78L13.9 19.7h4.233c.622 0 1.124.317 1.124.913s-.503.913-1.124.913h-5.887c-.794 0-1.257-.265-1.257-1.072 0-.344.16-.595.357-.833z" />
                        </svg>
                    </a>
                    <a class="btn-icon btn-icon--white tooltip active tooltip--left" id="toggleCover"
                       href="javascript:;" title="Show-hide pdf covers">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 22 19">
                            <path
                                d="M11 4c2.76 0 5 2.24 5 5 0 .65-.13 1.26-.36 1.83l2.92 2.92A11.82 11.82 0 0 0 21.99 9c-1.73-4.4-6-7.5-11-7.5-1.4 0-2.74.25-3.98.7l2.16 2.16C9.74 4.13 10.35 4 11 4zM1 1.27L3.74 4A11.8 11.8 0 0 0 0 9c1.73 4.4 6 7.5 11 7.5a11.78 11.78 0 0 0 4.38-.84l.42.42L18.73 19 20 17.73 2.27 0 1 1.27zM6.53 6.8l1.55 1.55A2.82 2.82 0 0 0 8 9c0 1.66 1.34 3 3 3 .22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.4.53-2.2.53-2.76 0-5-2.24-5-5 0-.8.2-1.53.53-2.2zm4.3-.78L14 9.17V9c0-1.66-1.34-3-3-3l-.17.01z"
                                fill="#383E45" fill-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="tool__workarea__rendered editor" id="editor">
                    <div class="editor__content">
                    </div>

                </div>
                <div class="tool__workarea__rendered" id="fileGroups">
                </div>
            </div>
            <div id="sidebar" class="tool__sidebar">
                <div class="option__panel option__panel--active" id="watermark-options">
                    <div class="option__panel__title">Edit pdf options</div>
                    <div class="wrapper tool__sidebar__editpdf-sidebar-wrapper">
                        <div class="layers-header">Elements</div>

                        <div class="info info--noElements">Click on the viewer navigation bar to add elements to the
                            document. They will be listed on the right side bar.</div>
                        <div class="info info--upToFourElements">From this sidebar you can reorder elements to move them
                            back or in front of the document.</div>

                        <div id="reset-all-layers-btn">
                            <a class="link--cancel">
                                Remove all </a>
                        </div>

                        <div class="layers"></div>
                    </div>
                </div>
            </div>
        </div>





        <div id="uploading" class="uploading">
            <div id="upload-status" class="uploading__status">
                <div class="uploading__status__title drive"><img src="img/svg_icons/preload.svg" alt="Uploading">Getting
                    files from Drive</div>
                <div class="uploading__status__title dropbox"><img src="img/svg_icons/preload.svg"
                                                                   alt="Uploading">Getting files from Dropbox</div>
                <div class="uploading__status__title user">Uploading file <span
                        class="uploading__status__current">0</span> of <span class="uploading__status__total">0</span>
                </div>
                <div class="uploading__status__file"></div>
                <div class="uploading__status__info">
                    Time left <span id="timeLeft">- seconds</span> -
                    Upload speed <span id="uploadSpeed">- MB/S</span> </div>
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
            <p id="processText" class="processAction title2">Editing PDF...</p>
            <img src="img/svg_icons/preload.svg" alt="Processing">
            <div id="waitnotify"></div>
        </div>
        <script>
            var iloveLang = { 'noTasks': 'sorry, no tasks here!', 'Update Card Details': 'Update Card Details', 'login': 'login', 'email': 'email', 'waitnotify': 'Do not close your browser. Wait until your files are uploaded and processed! This might take a few minutes. :)', 'savingFile': 'Saving file...', 'Save to Drive': 'Save to Drive', 'Drive saving...': 'Drive saving...', 'Your file has been saved to Drive!': 'Your file has been saved to Drive!', 'Ok': 'Ok', 'processCompleted': 'The task has been completed!<br> Going to download page...', 'uploadComplete': 'Upload complete!', 'Save options for next actions': 'Save options for next actions', 'Some files require password': 'Some files require password', 'No file selected.': 'No file selected.', 'Please add a file to activate options': 'Please add a file to activate options', 'Yes': 'Yes', 'No': 'No', 'Over the content': 'Over the content', 'Below the content': 'Below the content', 'Facing pages': 'Facing pages', 'Normal': 'Normal', 'First cover': 'First cover', 'none': 'none', 'Remove': 'Delete', 'Remove this file': 'Remove this file', 'Rotate': 'Rotate', 'Or': 'Or', 'wops': 'Error', 'Error': 'Error', 'Upload error': 'Upload error', 'InvalidExtension': 'Sorry, this extension is not allowed', 'FileTooLarge': 'Too many Megapixel for image.', 'InvalidTask': 'InvalidTask', 'InvalidParams': 'InvalidParams', 'CloudError': 'TaskLimit', 'TaskLimit': 'TaskLimit', 'EmptyFile': 'This file is empty', 'UploadError': 'Upload error', 'DamagedFile': 'Damaged/Corrupted File', 'FileRemoved': 'Some files you selected from your device seem to have been renamed, deleted or moved. Please, next time, wait until upload finishes.', 'FileSizeExceeded': 'The filesize of this file exceeds the limits', 'errorOneRetry': 'It looks like a connection problem is stopping your file from being processed. We suggest that you wait a little while, then reload the page and try again.<br><br>If this doesn\'t work, you could try by disabling your web extensions or using the incognito browser. If the problem persists, please contact us.<br><br><a href="https://www.ilovepdf.com/\&quot;#\"" onclick=\"location.reload();\">Reload the page and try again</a>', 'errorRetry': 'It looks like a connection problem is stopping your files from being processed. We suggest that you wait a little while, then reload the page and try again.<br><br>If this doesn\'t work, you could try by disabling your web extensions or using the incognito browser. If the problem persists, please contact us.<br><br><a href="https://www.ilovepdf.com/\&quot;#\"" onclick=\"location.reload();\">Reload the page and try again</a>', 'File number exceeded': 'File number exceeded', 'File size exceeded': 'File size exceeded', 'Sorry, we are not ready for that.': 'Sorry, we are not ready for that.', 'superlimitWhoa': "You\'ve hit the limit, even for Premium. Whoa!", 'superlimitDownload': "Unfortunately, our system doesn\'t have enough capacity to process your task. For now.", 'Original size (in pixels) for this image': 'Original size (in pixels) for this image', 'This image will be resized to this size (in pixels)': 'This image will be resized to this size (in pixels)', 'Uploading...': "Uploading...", '1 file': '1 file', '1 mb': '1 mb', '${limit} files': '${limit} files', '${limit} mb': '${limit} mb', 'registeredLevel': 'registered users', 'premiumLevel': 'premium users', 'publicLevel': 'non registered users', 'limitTaskMsg': "This task is <strong>limited to ${currentLimit}</strong> for ${currentLevel}. <strong>${nextLevel} can upload up to ${nextLimit}</strong>. Some of your files have not been added.", 'Wait a moment, please...': 'Wait a moment, please...', 'Time left': 'Time left', 'minute': 'minute', 'hour': 'hour', 'less than': 'less than', 'minutes': 'minutes', 'hours': 'hours', 'seconds': 'seconds', 'dropIt': 'Drop it like it\'s hot', 'featurePremium': 'This <strong>feature</strong> requires you to be <strong>Premium</strong>', 'Premium feature': 'Premium feature', 'Welcome back after upload': 'We are glad you are here again. But for security reasons, your files aren\'t. To (toolname) your (fileformat), please get back to our homepage. ', 'Limit exceeded': 'Limit exceeded', 'leaveAlert': 'Do you really want to leave our page?', 'passwordRequiredFor': 'Password required for <br>${filename}', 'addPage': 'Add a blank page', 'paswordRequired': 'Password required', 'Cancel': 'Cancel', 'Ignore': 'Ignore', 'Ignore these files': 'Ignore these files', 'Send': 'Send', 'Same password for all files': 'Same password for all files', 'Did you forgot your password?': 'Did you forgot your password?', 'numPages': '${numPages} pages', 'Unlock PDF': 'Unlock PDF', 'damaged file?': 'Damaged file?', 'previousTaskLoading': 'Loading files from previous task', 'previousFail': 'We are sorry. We couldn\'t load the previous task files.', 'previousFailContinue': 'Ok', 'previousFailBack': 'Back to download', 'disabledMultipleFiles': 'Option disabled because there are multiple files', 'registeredFeatureTitle': 'Registered feature', 'registeredFeatureSubtitle': 'This <strong>feature</strong> requires you to be <strong>Registered user</strong>', 'authTitle': 'iLovePDF Accounts', 'authSubtitle': 'Get access to extended features', 'ProtectedFile': 'Password protected file', 'limitMb': 'The file you are trying to process is bigger than ${mb} MB.', 'limitFiles': 'You are trying to process more than ${files} files.', 'featureRequired': '<strong>Feature</strong> available for <strong>Registered users</strong>', 'limitFree': 'Free:', 'limitPremium': 'Premium:', 'limitFiles': '<b>${n} files</b> per task', 'limitSize': '<b>${n} MB</b> per task', 'limitPages': '<b>${n} pages</b> per task', 'upgradePremium': 'Upgrade to Premium' };
            var unlockPdfUrl = '/unlock_pdf';
            var paymentLang = { 'yearly': 'Yearly', 'monthly': 'Monthly', 'stripePayBtn_web': 'Go Premium', 'stripePayBtn_web_desktop': 'Go Premium Pro', 'pack_web': 'Premium', 'pack_web_desktop': 'Premium Pro', 'paymentFail': 'The payment can\'t be processed.' };
            var premiumData = { 'premiumUrl': '/user/premium', priceMonth: '<span class="pricing__price__numbers">6</span><span class="pricing__price__code">US</span>$', priceYear: '<span class="pricing__price__numbers">48</span><span class="pricing__price__code">US</span>$', priceYearMonthly: '<span class="pricing__price__numbers">4</span><span class="pricing__price__code">US</span>$' };
            var country = 'PK';
            var ab = { "limits": "b" };
        </script>
        <script>
            var ilovepdfConfig = { "action": "tool", "fp": 1, "fpt": 7, "tool": "editpdf", "site": "ilovepdf", "subtool": "editpdf", "toolText": "Edit PDF", "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiIiLCJhdWQiOiIiLCJpYXQiOjE1MjMzNjQ4MjQsIm5iZiI6MTUyMzM2NDgyNCwianRpIjoicHJvamVjdF9wdWJsaWNfYzkwNWRkMWMwMWU5ZmQ3NzY5ODNjYTQwZDBhOWQyZjNfT1Vzd2EwODA0MGI4ZDJjN2NhM2NjZGE2MGQ2MTBhMmRkY2U3NyJ9.qvHSXgCJgqpC4gd6-paUlDLFmg0o2DsOvb1EUYPYx_E", "parentId": null, "preWorker": null, "defaultOptions": [], "fileLimits": { "merge": { "mb": 100, "files": 25 }, "split": { "mb": 100, "files": 1 }, "compress": { "mb": 200, "files": 2 }, "officepdf": { "mb": 15, "files": 1 }, "wordpdf": { "mb": 15, "files": 1 }, "powerpointpdf": { "mb": 15, "files": 1 }, "excelpdf": { "mb": 15, "files": 1 }, "pdfoffice": { "mb": 15, "files": 1 }, "pdfword": { "mb": 15, "files": 1 }, "pdfocr": { "mb": 15, "files": 1, "pages": 50 }, "pdfpowerpoint": { "mb": 15, "files": 1 }, "pdfexcel": { "mb": 15, "files": 1, "pages": 500 }, "pdfjpg": { "mb": 25, "files": 2 }, "imagepdf": { "mb": 40, "files": 20 }, "pagenumber": { "mb": 100, "files": 2 }, "watermark": { "mb": 100, "files": 2 }, "rotate": { "mb": 100, "files": 20 }, "unlock": { "mb": 100, "files": 2 }, "protect": { "mb": 100, "files": 2 }, "pdfa": { "mb": 100, "files": 1 }, "repair": { "mb": 100, "files": 1 }, "organize": { "mb": 100, "files": 5 }, "resizeimage": { "mb": 200, "files": 30 }, "compressimage": { "mb": 200, "files": 30 }, "cropimage": { "mb": 90, "files": 1 }, "converttojpg": { "mb": 200, "files": 30 }, "convertfromjpg": { "mb": 200, "files": 30 }, "rotateimage": { "mb": 200, "files": 30 }, "watermarkimage": { "mb": 200, "files": 30 }, "memeimage": { "mb": 200, "files": 1 }, "editimage": { "mb": 50, "files": 1 }, "editpdf": { "mb": 100, "files": 1 }, "sign": { "mb": 50, "files": 3 }, "upscaleimage": { "mb": 6, "files": 3, "pxsize": 2073600 }, "blurfaceimage": { "mb": 100, "files": 10 } }, "allFileLimits": { "limits": { "merge": { "mb": 100, "files": 25 }, "split": { "mb": 100, "files": 1 }, "compress": { "mb": 200, "files": 2 }, "officepdf": { "mb": 15, "files": 1 }, "wordpdf": { "mb": 15, "files": 1 }, "powerpointpdf": { "mb": 15, "files": 1 }, "excelpdf": { "mb": 15, "files": 1 }, "pdfoffice": { "mb": 15, "files": 1 }, "pdfword": { "mb": 15, "files": 1 }, "pdfocr": { "mb": 15, "files": 1, "pages": 50 }, "pdfpowerpoint": { "mb": 15, "files": 1 }, "pdfexcel": { "mb": 15, "files": 1, "pages": 500 }, "pdfjpg": { "mb": 25, "files": 2 }, "imagepdf": { "mb": 40, "files": 20 }, "pagenumber": { "mb": 100, "files": 2 }, "watermark": { "mb": 100, "files": 2 }, "rotate": { "mb": 100, "files": 20 }, "unlock": { "mb": 100, "files": 2 }, "protect": { "mb": 100, "files": 2 }, "pdfa": { "mb": 100, "files": 1 }, "repair": { "mb": 100, "files": 1 }, "organize": { "mb": 100, "files": 5 }, "resizeimage": { "mb": 200, "files": 30 }, "compressimage": { "mb": 200, "files": 30 }, "cropimage": { "mb": 90, "files": 1 }, "converttojpg": { "mb": 200, "files": 30 }, "convertfromjpg": { "mb": 200, "files": 30 }, "rotateimage": { "mb": 200, "files": 30 }, "watermarkimage": { "mb": 200, "files": 30 }, "memeimage": { "mb": 200, "files": 1 }, "editimage": { "mb": 50, "files": 1 }, "editpdf": { "mb": 100, "files": 1 }, "sign": { "mb": 50, "files": 3 }, "upscaleimage": { "mb": 6, "files": 3, "pxsize": 2073600 }, "blurfaceimage": { "mb": 100, "files": 10 } }, "registered_limits": { "merge": { "mb": 100, "files": 25 }, "split": { "mb": 100, "files": 1 }, "compress": { "mb": 200, "files": 2 }, "officepdf": { "mb": 15, "files": 1 }, "wordpdf": { "mb": 15, "files": 1 }, "powerpointpdf": { "mb": 15, "files": 1 }, "excelpdf": { "mb": 15, "files": 1 }, "pdfoffice": { "mb": 15, "files": 1 }, "pdfword": { "mb": 15, "files": 1 }, "pdfocr": { "mb": 15, "files": 1, "pages": 50 }, "pdfpowerpoint": { "mb": 15, "files": 1 }, "pdfexcel": { "mb": 15, "files": 1, "pages": 500 }, "pdfjpg": { "mb": 25, "files": 2 }, "imagepdf": { "mb": 40, "files": 20 }, "pagenumber": { "mb": 100, "files": 2 }, "watermark": { "mb": 100, "files": 2 }, "rotate": { "mb": 100, "files": 20 }, "unlock": { "mb": 100, "files": 2 }, "protect": { "mb": 100, "files": 2 }, "pdfa": { "mb": 100, "files": 1 }, "repair": { "mb": 100, "files": 1 }, "organize": { "mb": 100, "files": 5 }, "resizeimage": { "mb": 200, "files": 30 }, "compressimage": { "mb": 200, "files": 30 }, "cropimage": { "mb": 90, "files": 1 }, "converttojpg": { "mb": 200, "files": 30 }, "convertfromjpg": { "mb": 200, "files": 30 }, "rotateimage": { "mb": 200, "files": 30 }, "watermarkimage": { "mb": 200, "files": 30 }, "memeimage": { "mb": 200, "files": 1 }, "editimage": { "mb": 50, "files": 1 }, "editpdf": { "mb": 100, "files": 1 }, "sign": { "mb": 50, "files": 3 }, "upscaleimage": { "mb": 6, "files": 3, "pxsize": 2073600 }, "blurfaceimage": { "mb": 100, "files": 10 } }, "premium_limits": { "merge": { "mb": 4000, "files": 500 }, "split": { "mb": 4000, "files": 1 }, "compress": { "mb": 4000, "files": 10 }, "officepdf": { "mb": 4000, "files": 10 }, "wordpdf": { "mb": 4000, "files": 10 }, "powerpointpdf": { "mb": 4000, "files": 10 }, "excelpdf": { "mb": 4000, "files": 10 }, "pdfword": { "mb": 4000, "files": 10 }, "pdfocr": { "mb": 4000, "files": 10, "pages": 1000 }, "pdfpowerpoint": { "mb": 4000, "files": 10 }, "pdfexcel": { "mb": 4000, "files": 10, "pages": 1000 }, "pdfoffice": { "mb": 4000, "files": 10 }, "pdfjpg": { "mb": 4000, "files": 10 }, "imagepdf": { "mb": 4000, "files": 80 }, "pagenumber": { "mb": 4000, "files": 10 }, "watermark": { "mb": 4000, "files": 10 }, "rotate": { "mb": 4000, "files": 80 }, "unlock": { "mb": 4000, "files": 10 }, "protect": { "mb": 4000, "files": 80 }, "pdfa": { "mb": 4000, "files": 10 }, "repair": { "mb": 4000, "files": 10 }, "organize": { "mb": 4000, "files": 20 }, "resizeimage": { "mb": 4000, "files": 120 }, "compressimage": { "mb": 4000, "files": 120 }, "cropimage": { "mb": 4000, "files": 1 }, "converttojpg": { "mb": 4000, "files": 120 }, "convertfromjpg": { "mb": 4000, "files": 120 }, "rotateimage": { "mb": 4000, "files": 120 }, "watermarkimage": { "mb": 4000, "files": 120 }, "memeimage": { "mb": 4000, "files": 1 }, "editimage": { "mb": 50, "files": 1 }, "editpdf": { "mb": 100, "files": 1 }, "sign": { "mb": 50, "files": 5 }, "upscaleimage": { "mb": 6, "files": 3, "pxsize": 2073600 }, "blurfaceimage": { "mb": 4000, "files": 120 } }, "temp_limits": { "merge": { "mb": 1000, "files": 80 }, "split": { "mb": 1000, "files": 1 }, "compress": { "mb": 1000, "files": 3 }, "officepdf": { "mb": 1000, "files": 3 }, "wordpdf": { "mb": 100, "files": 3 }, "powerpointpdf": { "mb": 100, "files": 3 }, "excelpdf": { "mb": 100, "files": 3 }, "pdfword": { "mb": 100, "files": 1 }, "pdfocr": { "mb": 100, "files": 1, "pages": 100 }, "pdfpowerpoint": { "mb": 100, "files": 1 }, "pdfexcel": { "mb": 100, "files": 1, "pages": 500 }, "pdfoffice": { "mb": 100, "files": 1 }, "pdfjpg": { "mb": 100, "files": 3 }, "imagepdf": { "mb": 1000, "files": 80 }, "pagenumber": { "mb": 1000, "files": 3 }, "watermark": { "mb": 1000, "files": 3 }, "rotate": { "mb": 1000, "files": 30 }, "unlock": { "mb": 1000, "files": 10 }, "protect": { "mb": 1000, "files": 5 }, "pdfa": { "mb": 100, "files": 1 }, "repair": { "mb": 1000, "files": 2 }, "organize": { "mb": 1000, "files": 5 }, "resizeimage": { "mb": 1000, "files": 60 }, "compressimage": { "mb": 1000, "files": 60 }, "cropimage": { "mb": 1000, "files": 1 }, "converttojpg": { "mb": 5000, "files": 60 }, "convertfromjpg": { "mb": 1000, "files": 60 }, "rotateimage": { "mb": 1000, "files": 60 }, "watermarkimage": { "mb": 1000, "files": 60 }, "memeimage": { "mb": 1000, "files": 1 }, "editimage": { "mb": 50, "files": 1 }, "editpdf": { "mb": 100, "files": 1 }, "sign": { "mb": 50, "files": 3 }, "upscaleimage": { "mb": 6, "files": 3, "pxsize": 2073600 }, "blurfaceimage": { "mb": 150, "files": 15 } } }, "servers": ["\/\/api1.ilovepdf.com", "\/\/api2.ilovepdf.com", "\/\/api3.ilovepdf.com", "\/\/api4.ilovepdf.com", "\/\/api5.ilovepdf.com", "\/\/api6.ilovepdf.com", "\/\/api7.ilovepdf.com", "\/\/api8.ilovepdf.com", "\/\/api9.ilovepdf.com", "\/\/api10.ilovepdf.com", "\/\/api11.ilovepdf.com", "\/\/api12.ilovepdf.com", "\/\/api13.ilovepdf.com", "\/\/api14.ilovepdf.com", "\/\/api15.ilovepdf.com", "\/\/api16.ilovepdf.com", "\/\/api17.ilovepdf.com", "\/\/api18.ilovepdf.com", "\/\/api19.ilovepdf.com", "\/\/api22.ilovepdf.com", "\/\/api23.ilovepdf.com", "\/\/api24.ilovepdf.com", "\/\/api25.ilovepdf.com", "\/\/api26.ilovepdf.com", "\/\/api27.ilovepdf.com", "\/\/api28.ilovepdf.com", "\/\/api29.ilovepdf.com", "\/\/api30.ilovepdf.com", "\/\/api31.ilovepdf.com", "\/\/api32.ilovepdf.com", "\/\/api33.ilovepdf.com", "\/\/api34.ilovepdf.com", "\/\/api35.ilovepdf.com", "\/\/api36.ilovepdf.com", "\/\/api37.ilovepdf.com", "\/\/api38.ilovepdf.com", "\/\/api39.ilovepdf.com", "\/\/api40.ilovepdf.com", "\/\/api41.ilovepdf.com", "\/\/api43.ilovepdf.com", "\/\/api44.ilovepdf.com", "\/\/api45.ilovepdf.com", "\/\/api46.ilovepdf.com", "\/\/api47.ilovepdf.com", "\/\/api48.ilovepdf.com", "\/\/api49.ilovepdf.com", "\/\/api50.ilovepdf.com", "\/\/api51.ilovepdf.com", "\/\/api52.ilovepdf.com", "\/\/api53.ilovepdf.com", "\/\/api54.ilovepdf.com", "\/\/api55.ilovepdf.com", "\/\/api56.ilovepdf.com", "\/\/api57.ilovepdf.com", "\/\/api58.ilovepdf.com", "\/\/api59.ilovepdf.com", "\/\/api60.ilovepdf.com", "\/\/api61.ilovepdf.com", "\/\/api62.ilovepdf.com", "\/\/api63.ilovepdf.com", "\/\/api64.ilovepdf.com", "\/\/api65.ilovepdf.com"], "level": "user", "downloadUrl": "\/download", "user": null, "country": "PK", "dtr": true };
            ilovepdfConfig.taskId = 'fn4rwn5xphxy7j0kk1t6qm2qfdlf9n593tctv9fgx1rlzd3nzf6A3k7gAg5wyl3nkmhhj2xA2c2dtAzAhhzgg4A8z10c1vs0tbbdlvw25ldyzj09c7A17ptq6p2ms5gtwk8mbkhrmr2mcn38A7vAt03A97npx0djAA5b7f2hr5d3g064t16q';
            window.fonts = { "arial": { "regular": "arial.ttf", "bold": "arialbd.ttf", "italic": "ariali.ttf", "bold-italic": "arialbi.ttf", "human-name": "Arial" }, "impact": { "regular": "impact.ttf", "human-name": "Impact" }, "arial-unicode-ms": { "regular": "arial-unicode-ms.ttf", "country_extra": ["CN", "JP", "KP", "KR", "AR"], "human-name": "Arial Unicode MS" }, "verdana": { "regular": "verdana.ttf", "bold": "verdanab.ttf", "italic": "verdanai.ttf", "bold-italic": "verdanaz.ttf", "human-name": "Verdana" }, "courier": { "regular": "cour.ttf", "bold": "courbd.ttf", "italic": "couri.ttf", "bold-italic": "courbi.ttf", "human-name": "Courier" }, "comic": { "regular": "comic.ttf", "bold": "comicbd.ttf", "italic": "comici.ttf", "bold-italic": "comicbd.ttf", "human-name": "Comic Sans MS" }, "times-new-roman": { "regular": "times.ttf", "bold": "timesbd.ttf", "italic": "timesi.ttf", "bold-italic": "timesbi.ttf", "human-name": "Times New Roman" }, "lohit-marathi": { "regular": "Lohit-Marathi.ttf", "country_extra": ["IN"], "human-name": "Lohit Marathi" }, "lohit-devanagari": { "regular": "Lohit-Devanagari.ttf", "country_extra": ["IN"], "human-name": "Lohit Devanagari" } };
            if (!window.iloveLang) { window.iloveLang = {}; }

            iloveLang.layer_new_freehand = 'New drawing';
            iloveLang.layer_new_line = 'New Line';
            iloveLang.layer_new_rect = 'New Rectangle';
            iloveLang.layer_new_ellipse = 'New Ellipse';
            iloveLang.layer_new_img = 'New Image';
            iloveLang.layer_new_text = 'New Text';
            iloveLang.layer_new_symbol = 'New Symbol';
            iloveLang.layer_pageSection = 'Page';

            // Tooltips
            iloveLang.tooltip_addText = 'Add text';
            iloveLang.tooltip_addImage = 'Add image';
            iloveLang.tooltip_addShape = 'Add shape';
            iloveLang.tooltip_addFreehand = 'Draw';
            iloveLang.tooltip_addLine = 'Line';
            iloveLang.tooltip_addRect = 'Rectangle';
            iloveLang.tooltip_addEllipse = 'Ellipse';
            iloveLang.tooltip_addSymbol = 'Symbols';
            iloveLang.tooltip_layerRename = 'Rename';
            iloveLang.tooltip_layerReorder = 'Reorder';
            iloveLang.tooltip_layerConfirmRename = 'Confirm';
            iloveLang.tooltip_removeLayer = 'Remove';
            iloveLang.tooltip_applyDraw = 'Apply draw';
            iloveLang.tooltip_rotateLeft = 'Rotate left';
            iloveLang.tooltip_rotateRight = 'Rotate right';
            iloveLang.tooltip_color = 'Color';
            iloveLang.tooltip_fillColor = 'Fill color';
            iloveLang.tooltip_borderColor = 'Border color';
            iloveLang.tooltip_opacity = 'Opacity';
            iloveLang.tooltip_stroke = 'Stroke';
            iloveLang.tooltip_textBold = 'Bold';
            iloveLang.tooltip_textItalic = 'Italic';
            iloveLang.tooltip_textUnderline = 'Underline';
            iloveLang.tooltip_textColor = 'Text color';
            iloveLang.tooltip_textBgColor = 'Background color';
            iloveLang.tooltip_textAlign = 'Align';
            iloveLang.tooltip_navPageUp = 'Previous page';
            iloveLang.tooltip_navPageDown = 'Next page';
            iloveLang.tooltip_fitViewportWidth = 'Fit width';
            iloveLang.tooltip_fitViewportAll = 'Fit page';
            iloveLang.tooltip_zoomIn = 'Zoom in';
            iloveLang.tooltip_zoomOut = 'Zoom out';
            iloveLang.tooltip_pan = 'Pan';
            iloveLang.tooltip_noBorderColorApplied = 'Choose border color to change border width';

            // Tooltip symbols
            iloveLang.tooltip_symbol_heart = 'Heart';
            iloveLang.tooltip_symbol_smiley = 'Smiley';
            iloveLang.tooltip_symbol_neutral = 'Neutral';
            iloveLang.tooltip_symbol_sad = 'Sad';
            iloveLang.tooltip_symbol_exclamation = 'Exclamation';
            iloveLang.tooltip_symbol_question = 'Question';
            iloveLang.tooltip_symbol_cross = 'Cross';
            iloveLang.tooltip_symbol_check = 'Check';

            iloveLang.tooltip_layoutBtn = 'Page Settings';
            iloveLang.tooltip_layoutSinglePage = 'Single Page';
            iloveLang.tooltip_layoutDoublePage = 'Double Page';
            iloveLang.tooltip_layoutCoverPage = 'Cover Page';

            iloveLang.canvasObject_yourTextHere = 'Your text here';

            iloveLang.processBtn_atLeastOneElem = 'You need to add at least one field';
            iloveLang.processBtn_tooManyCanvasObjects = 'Too many canvas objects';
            iloveLang.wip_exitMessage = 'Have you finished editing your PDF?';
            iloveLang.wip_yes = 'Yes';
            iloveLang.wip_no = 'No';

            iloveLang.msg_sending = 'Sending';

            // Forms

            iloveLang.forms_requiredField = 'Required';
            iloveLang.forms_readOnly = 'Read only';
            iloveLang.forms_missingRequiredFields_warning = 'Some required fields need filling. Are you sure you would like to proceed?';
            iloveLang.forms_guided_tooltip = 'This document contains form fields. You can fill them in directly.';
            iloveLang.forms_required_fields_pending_singular = 'There is a required field pending to be filled';
            iloveLang.forms_required_fields_pending_plural = 'There are still ${num_fields} required fields pending to be filled';

            iloveLang.guided_layersPanel_empty = 'Click on the viewer navigation bar to add elements to the document. They will be listed on the right side bar.';
            iloveLang.guided_layersPanel_upToFour = 'From this sidebar you can reorder elements to move them back or in front of the document.';
        </script>

    </div>
    <div class="footer">
        <div class="footer__copy">
            &copy; iLovePDF 2023 &reg; - Your PDF Editor </div>
    </div>
    <div id="network" class="network">
        <i class="ico ico--network"></i>
        <div class="network__text">
            Woops! Something is wrong with your Internet connection... </div>
    </div>

    <script>
        var siteData = {
            csrfParam: '_csrf-ilovepdf',
            csrfToken: 'LpW1p6GKDPmfJI8mcX3J6SluV9nLV169w1SX6NdsT1Bhw-_T5fM7zKtQomoUCb-zHiQwjZoGC_-GPN2-hzwXJw=='
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
    <script src="dist/js/web.01f5a37.js" async="async"></script>
    <script src="dist/js/editpdf.01f5a37.js" async="async"></script>
@endsection
