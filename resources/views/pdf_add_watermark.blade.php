@extends('layouts.index')
@section('title','Add a watermark to a PDF. Add text or image to a PDF')
@section('content')

    <div class="main">

        <div class="tool">
            <div class="tool__workarea" id="workArea">
                <div id="dropArea"></div>
                <div id="hello"></div>
                <div class="tool__header">
                    <h1 class="tool__header__title">Add watermark into a PDF</h1>
                    <h2 class="tool__header__subtitle">Stamp an image or text over your PDF in seconds. Choose the
                        typography, transparency and position.</h2>
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
                <div id="ad" class="add">
                    <div id='div-gpt-ad-1662466164476-0' class="in_add">
                        <script>
                            googletag.cmd.push(function () { googletag.display('div-gpt-ad-1662466164476-0') });
                        </script>
                    </div>
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
                <div class="tool__workarea__rendered" id="filePages">
                    <div class="editor__toolbar">
                        <div class="editor__toolbar__options" id="fileSelectorToolbar">
                            <div class="editor__toolbar__block list tooltip"
                                 title="Page numbers will be applied to these files">
                                <select class="input input--sm" name="editor_file_select" id="editor_file_select">
                                </select>
                            </div>
                            <div class="editor__toolbar__block action">
                                <div class="editor__toolbar__option">
                                    <div class="option drop tooltip" title="Remove">
                                        <svg width="14px" height="21px" viewBox="0 0 14 21" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-919.000000, -391.000000)" fill="#161616">
                                                    <g transform="translate(919.000000, 391.000000)">
                                                        <path
                                                            d="M12.75505,2.94490085 L9.45,2.94490085 L9.45,1.90480651 C9.45,1.33136783 8.9789,0.864712166 8.4,0.864712166 L5.6,0.864712166 C5.0211,0.864712166 4.55,1.33136783 4.55,1.90480651 L4.55,2.94490085 L1.24495,2.94490085 C0.5586,2.94490085 0,3.49823103 0,4.17810603 L0,5.71848575 L14,5.71848575 L14,4.17810603 C14,3.49823103 13.4414,2.94490085 12.75505,2.94490085 L12.75505,2.94490085 L12.75505,2.94490085 Z M8.50611377,3.02220818 L5.10366826,3.02220818 L5.10366826,2.01110409 C5.10366826,1.82506094 5.25643806,1.67406939 5.44391281,1.67406939 L8.16586922,1.67406939 C8.35334397,1.67406939 8.50611377,1.82506094 8.50611377,2.01110409 L8.50611377,3.02220818 L8.50611377,3.02220818 L8.50611377,3.02220818 Z"
                                                            id="Fill-700"></path>
                                                        <path
                                                            d="M0.952380952,18.8801481 C0.952380952,19.5730914 1.52161009,20.1369504 2.22149313,20.1369504 L11.9324129,20.1369504 C12.6319556,20.1369504 13.2011848,19.5730914 13.2011848,18.8801481 L13.2011848,7.66666667 L0.952380952,7.66666667 L0.952380952,18.8801481"
                                                            id="Fill-701"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tool__workarea__rendered" id="fileGroups">
                    <div class="tool__workarea__info">Watermark will be applied to these files</div>
                </div>
            </div>
            <div id="sidebar" class="tool__sidebar">
                <div class="option__panel option__panel--active" id="watermark-options">
                    <div class="option__panel__title">Watermark options</div>

                    <div class="option__tab">
                        <ul class="option__tab__select">
                            <li class="option__tab__select__item option--active" id="tab-text" data-action="tab"
                                data-target="text">
                                <svg width="53px" height="42px" viewBox="0 0 53 42" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="----↳-PDF/IMG---Watermark" stroke="none" stroke-width="1" fill="none"
                                       fill-rule="evenodd">
                                        <g id="Watermark" transform="translate(-1084.000000, -157.000000)"
                                           fill="#161616">
                                            <g id="A-Text" transform="translate(1084.000000, 157.000000)">
                                                <path
                                                    d="M1.134,37 L51.866,37 C52.4922909,37 53,37.5077091 53,38.134 L53,40.4462469 C53,41.0725378 52.4922909,41.5802469 51.866,41.5802469 L1.134,41.5802469 C0.507709094,41.5802469 -3.03192595e-15,41.0725378 -3.10862447e-15,40.4462469 L0,38.134 C-7.66985154e-17,37.5077091 0.507709094,37 1.134,37 Z"
                                                    id="Rectangle-23"></path>
                                                <path
                                                    d="M24.8461538,0 L13,30.6043771 L17.8461538,30.6043771 L20.2584615,24.0462963 L33.72,24.0462963 L36.1323077,30.6043771 L40.9784615,30.6043771 L29.1538462,0 L24.8461538,0 L24.8461538,0 Z M21.8738462,19.6742424 L27,5.83669192 L32.1261538,19.6742424 L21.8738462,19.6742424 L21.8738462,19.6742424 Z"
                                                    id="Shape"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <div class="option__image__item__title">Place text</div>
                            </li>
                            <li class="option__tab__select__item" id="tab-image" data-action="tab" data-target="image"
                                data-name="split_mode" data-value="extract_pages">
                                <svg width="53px" height="43px" viewBox="0 0 53 43" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="----↳-PDF/IMG---Watermark" stroke="none" stroke-width="1" fill="none"
                                       fill-rule="evenodd">
                                        <g id="Watermark" transform="translate(-1306.000000, -157.000000)"
                                           fill="#7D7D7D">
                                            <g id="IMAGE" transform="translate(1306.000000, 157.000000)">
                                                <path
                                                    d="M1.134,37.4650673 L51.866,37.4650673 C52.4922909,37.4650673 53,37.9727764 53,38.5990673 L53,40.9113143 C53,41.5376052 52.4922909,42.0453143 51.866,42.0453143 L1.134,42.0453143 C0.507709094,42.0453143 -3.03192595e-15,41.5376052 -3.10862447e-15,40.9113143 L0,38.5990673 C-7.66985154e-17,37.9727764 0.507709094,37.4650673 1.134,37.4650673 Z"
                                                    id="Rectangle-23"></path>
                                                <path
                                                    d="M1.134,0.46506734 L51.866,0.46506734 C52.4922909,0.46506734 53,0.972776434 53,1.59906734 L53,3.91131425 C53,4.53760516 52.4922909,5.04531425 51.866,5.04531425 L1.134,5.04531425 C0.507709094,5.04531425 -3.03192595e-15,4.53760516 -3.10862447e-15,3.91131425 L0,1.59906734 C-7.66985154e-17,0.972776434 0.507709094,0.46506734 1.134,0.46506734 Z"
                                                    id="Rectangle-23-Copy-3"></path>
                                                <path
                                                    d="M0,38.2106123 L3.55271368e-15,2.80993796 C3.55271368e-15,2.21107657 0.507709094,1.72560349 1.134,1.72560349 L3.44624691,1.72560349 C4.07253782,1.72560349 4.58024691,2.21107657 4.58024691,2.80993796 L4.58024691,38.2106123 C4.58024691,38.8094737 4.07253782,39.2949468 3.44624691,39.2949468 L1.134,39.2949468 C0.507709094,39.2949468 0,38.8094737 0,38.2106123 Z"
                                                    id="Rectangle-23-Copy"></path>
                                                <path
                                                    d="M48.3549383,38.3159181 L48.3549383,2.91524374 C48.3549383,2.31638234 48.8626474,1.83090926 49.4889383,1.83090926 L51.8011852,1.83090926 C52.4274761,1.83090926 52.9351852,2.31638234 52.9351852,2.91524374 L52.9351852,38.3159181 C52.9351852,38.9147794 52.4274761,39.4002525 51.8011852,39.4002525 L49.4889383,39.4002525 C48.8626474,39.4002525 48.3549383,38.9147794 48.3549383,38.3159181 Z"
                                                    id="Rectangle-23-Copy-2"></path>
                                                <path
                                                    d="M31.6923782,15.2520818 L45.7032728,33.6111851 C45.7843565,33.7174326 45.7639571,33.8692945 45.6577095,33.9503782 C45.6155337,33.982565 45.5639492,34 45.5108946,34 L17.4891054,34 C17.3554525,34 17.2471054,33.8916529 17.2471054,33.758 C17.2471054,33.7049454 17.2645404,33.6533609 17.2967272,33.6111851 L31.3076218,15.2520818 C31.3887055,15.1458342 31.5405674,15.1254349 31.6468149,15.2065185 C31.6639658,15.2196074 31.6792894,15.2349309 31.6923782,15.2520818 Z"
                                                    id="Rectangle-4"></path>
                                                <path
                                                    d="M18.6317832,21.1631602 L28.7772059,33.7241597 C28.8359913,33.7969416 28.8246448,33.9035979 28.751863,33.9623832 C28.7217275,33.9867234 28.6841601,34 28.6454227,34 L8.35457733,34 C8.2610203,34 8.18517733,33.924157 8.18517733,33.8306 C8.18517733,33.7918625 8.1984539,33.7542952 8.2227941,33.7241597 L18.3682168,21.1631602 C18.4270021,21.0903783 18.5336584,21.0790319 18.6064403,21.1378173 C18.6157603,21.145345 18.6242555,21.1538402 18.6317832,21.1631602 Z"
                                                    id="Rectangle-4-Copy"></path>
                                                <circle id="Oval-8" cx="14.5" cy="13.5" r="3.5"></circle>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <div class="option__image__item__title">Place image</div>
                            </li>
                        </ul>
                        <!--
        <div class="form__group">
            <label>From url:</label>
            <input class="input option" type="text" name="image_url">
        </div>
        -->
                        <div class="option__tab__content option__tab__content--active" id="tab-content-text">
                            <div class="option__panel__content">
                                <div class="form__group">
                                    <div>
                                        <label class="option__title">Text:</label>
                                        <input class="input option" type="text" name="text" value="iLovePDF">
                                    </div>
                                </div>
                                <p>Text format:</p>

                                <div class="editor__toolbar__options" id="textFormatOptions">
                                    <div class="editor__toolbar__block">
                                        <div class="editor__toolbar__option">
                                            <div class="editor__option__selector ">
                                                <div class="font-selected" data-country="ALL"
                                                     style="font-family:'arial';">Arial</div>
                                            </div>
                                            <div class="editor__option__content">
                                                <div class="font-selector" style="font-family:'arial';"
                                                     data-value="arial" data-country="ALL" data-italic="true"
                                                     data-bold="true">
                                                    Arial </div>
                                                <div class="font-selector" style="font-family:'impact';"
                                                     data-value="impact" data-country="ALL" data-italic="false"
                                                     data-bold="false">
                                                    Impact </div>
                                                <div class="font-selector" style="font-family:'arial-unicode-ms';"
                                                     data-value="arial-unicode-ms" data-country="CN-JP-KP-KR-AR"
                                                     data-italic="false" data-bold="false">
                                                    Arial unicode ms </div>
                                                <div class="font-selector" style="font-family:'verdana';"
                                                     data-value="verdana" data-country="ALL" data-italic="true"
                                                     data-bold="true">
                                                    Verdana </div>
                                                <div class="font-selector" style="font-family:'courier';"
                                                     data-value="courier" data-country="ALL" data-italic="true"
                                                     data-bold="true">
                                                    Courier </div>
                                                <div class="font-selector" style="font-family:'comic';"
                                                     data-value="comic" data-country="ALL" data-italic="true"
                                                     data-bold="true">
                                                    Comic </div>
                                                <div class="font-selector" style="font-family:'times-new-roman';"
                                                     data-value="times-new-roman" data-country="ALL" data-italic="true"
                                                     data-bold="true">
                                                    Times new roman </div>
                                                <div class="font-selector" style="font-family:'lohit-marathi';"
                                                     data-value="lohit-marathi" data-country="IN" data-italic="false"
                                                     data-bold="false">
                                                    Lohit marathi </div>
                                                <div class="font-selector" style="font-family:'lohit-devanagari';"
                                                     data-value="lohit-devanagari" data-country="IN" data-italic="false"
                                                     data-bold="false">
                                                    Lohit devanagari </div>
                                            </div>
                                        </div>
                                        <div class="editor__toolbar__option">
                                            <div class="editor__option__selector">
                                                <svg width="19px" height="14px" viewBox="0 0 19 14" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-538.000000, -563.000000)"
                                                           fill="#161616">
                                                            <g transform="translate(538.000000, 563.000000)">
                                                                <polygon id="T-Copy-4"
                                                                         points="11.4856 1.9404 6.86 1.9404 6.86 13.916 4.6452 13.916 4.6452 1.9404 0 1.9404 0 0 11.4856 0">
                                                                </polygon>
                                                                <polygon id="T-Copy-5"
                                                                         points="18.274 5.694 15.096 5.694 15.096 13.94 13.178 13.94 13.178 5.694 10 5.694 10 4 18.274 4">
                                                                </polygon>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="editor__option__content">
                                                <div class="form__group form__group--inline-3">
                                                    <label for="textFormatOptionsfont_size">Font Size:</label>
                                                    <input id="textFormatOptionsFontSize" name="font_size" value="48"
                                                           type="range" min="0" max="100" step="1" />
                                                    <input class="rangeInput" type="number" name="font_size_number"
                                                           id="textFormatOptionsFontSizeText" value="48" min="0"
                                                           max="100" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="editor__toolbar__block toolbar-format">
                                        <div class="editor__toolbar__option">
                                            <div class="editor__option bold">
                                                <svg width="10px" height="12px" viewBox="0 0 10 12" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-600.000000, -392.000000)"
                                                           fill="#161616">
                                                            <path
                                                                d="M609.921127,400.923944 C609.921127,401.442256 609.814086,401.892956 609.6,402.276056 C609.385914,402.659157 609.09296,402.977464 608.721127,403.230986 C608.349294,403.484508 607.915495,403.676056 607.419718,403.805634 C606.923941,403.935212 606.400003,404 605.847887,404 L600,404 L600,392 L606.676056,392 C607.09296,392 607.470421,392.09014 607.808451,392.270423 C608.146481,392.450705 608.433802,392.684506 608.670423,392.971831 C608.907043,393.259156 609.09014,393.585914 609.219718,393.952113 C609.349296,394.318312 609.414085,394.692956 609.414085,395.076056 C609.414085,395.650707 609.270424,396.191547 608.983099,396.698592 C608.695773,397.205636 608.264792,397.588731 607.690141,397.847887 C608.377468,398.050705 608.921125,398.411265 609.321127,398.929577 C609.721129,399.44789 609.921127,400.112672 609.921127,400.923944 Z M607.098592,400.366197 C607.098592,399.994364 606.99155,399.678875 606.777465,399.419718 C606.563379,399.160562 606.292959,399.030986 605.966197,399.030986 L602.771831,399.030986 L602.771831,401.650704 L605.847887,401.650704 C606.208453,401.650704 606.507041,401.532396 606.743662,401.295775 C606.980283,401.059154 607.098592,400.749298 607.098592,400.366197 Z M602.771831,394.366197 L602.771831,396.850704 L605.492958,396.850704 C605.797185,396.850704 606.067604,396.749297 606.304225,396.546479 C606.540846,396.343661 606.659155,396.028171 606.659155,395.6 C606.659155,395.205632 606.554931,394.90141 606.346479,394.687324 C606.138027,394.473238 605.887325,394.366197 605.594366,394.366197 L602.771831,394.366197 Z"
                                                                id="B-Copy-3"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="editor__toolbar__option">
                                            <div class="editor__option italic">
                                                <svg width="9px" height="12px" viewBox="0 0 9 12" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-637.000000, -563.000000)"
                                                           fill="#161616">
                                                            <polygon id="I-Copy-7"
                                                                     points="644.191772 564.40146 640.033842 573.582614 641.132714 573.582614 640.790312 575 637 575 637.342402 573.582614 638.274054 573.582614 642.463835 564.40146 641.452555 564.40146 641.763106 563 645.426012 563 645.08361 564.40146">
                                                            </polygon>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="editor__toolbar__option">
                                            <div class="editor__option underline">
                                                <svg width="13px" height="14px" viewBox="0 0 13 14" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-671.000000, -563.000000)"
                                                           fill="#161616">
                                                            <path
                                                                d="M677.180265,573.492738 C677.864338,573.492738 678.432551,573.360339 678.884922,573.095537 C679.337292,572.830735 679.698632,572.485945 679.968951,572.061158 C680.23927,571.636371 680.429593,571.150907 680.539928,570.604753 C680.650262,570.058598 680.705428,569.504177 680.705428,568.941472 L680.705428,563 L682.194934,563 L682.194934,568.941472 C682.194934,569.735879 682.103909,570.488899 681.921858,571.200555 C681.739806,571.912211 681.450183,572.538349 681.052979,573.078987 C680.655776,573.619625 680.139971,574.047164 679.505549,574.361616 C678.871127,574.676069 678.101557,574.833293 677.196815,574.833293 C676.258974,574.833293 675.470096,574.667794 674.830157,574.336791 C674.190218,574.005788 673.674413,573.567216 673.282726,573.021062 C672.891039,572.474907 672.609691,571.846011 672.438673,571.134355 C672.267655,570.422698 672.182147,569.691745 672.182147,568.941472 L672.182147,563 L673.671653,563 L673.671653,568.941472 C673.671653,569.526243 673.729577,570.091698 673.845428,570.637853 C673.961279,571.184008 674.154361,571.666713 674.42468,572.085983 C674.694999,572.505253 675.05358,572.844526 675.500434,573.103812 C675.947288,573.363097 676.507226,573.492738 677.180265,573.492738 Z M671,576.003619 L683.412545,576.003619 L683.412545,577 L671,577 L671,576.003619 Z"
                                                                id="U-Copy-5"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="editor__toolbar__option toolbar-background">
                                            <div class="editor__option__selector">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <defs>
                                                        <path
                                                            d="M13.8,7.45 L6.35,0 L5.175,1.175 L7.15833333,3.15833333 L2.86666667,7.45 C2.375,7.94166667 2.375,8.73333333 2.86666667,9.21666667 L7.45,13.8 C7.69166667,14.0416667 8.01666667,14.1666667 8.33333333,14.1666667 C8.65,14.1666667 8.975,14.0416667 9.21666667,13.8 L13.8,9.21666667 C14.2916667,8.73333333 14.2916667,7.94166667 13.8,7.45 L13.8,7.45 Z M4.34166667,8.33333333 L8.33333333,4.34166667 L12.325,8.33333333 L4.34166667,8.33333333 L4.34166667,8.33333333 Z M14.1666667,12.5 C14.1666667,11.3916667 15,11.0416667 15.8333333,9.58333333 C15.8333333,9.58333333 17.5,11.3916667 17.5,12.5 C17.5,13.4166667 16.75,14.1666667 15.8333333,14.1666667 C14.9166667,14.1666667 14.1666667,13.4166667 14.1666667,12.5 Z M0,16.6666667 L20,16.6666667 L20,20 L0,20 L0,16.6666667 Z"
                                                            id="path-1"></path>
                                                    </defs>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-698.000000, -391.000000)">
                                                            <g transform="translate(698.000000, 391.000000)">
                                                                <mask id="mask-2" fill="white">
                                                                    <use xlink:href="#path-1"></use>
                                                                </mask>
                                                                <use id="Mask" fill="#161616" xlink:href="#path-1">
                                                                </use>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="editor__option__content">
                                                <div class="row">
                                                    <div class="col">
                                                        Background color
                                                        <input class="color no-picker" data-inline="true"
                                                               data-limit="true" data-empty="true" type="text"
                                                               name="background" value="transparent">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="editor__toolbar__option toolbar-color">
                                            <div class="editor__option__selector">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="18"
                                                     viewBox="0 0 20 18">
                                                    <defs>
                                                        <path id="mask-a"
                                                              d="M0,14.1666667 L20,14.1666667 L20,17.5 L0,17.5 L0,14.1666667 Z M9.16666667,0 L10.8333333,0 L15.4083333,11.6666667 L13.5333333,11.6666667 L12.6,9.16666667 L7.39166667,9.16666667 L6.45833333,11.6666667 L4.58333333,11.6666667 L9.16666667,0 Z M8.01666667,7.5 L11.9833333,7.5 L10,2.225 L8.01666667,7.5 Z" />
                                                    </defs>
                                                    <g fill="none" fill-rule="evenodd">
                                                        <use fill="#161616" xlink:href="#mask-a" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="editor__option__content">
                                                <div class="row">
                                                    <div class="col">
                                                        Font color:
                                                        <input class="color no-picker" data-inline="true"
                                                               data-limit="true" type="text" name="font_color"
                                                               value="#ffffff">
                                                    </div>
                                                    <div class="col toolbar-font-shadow">
                                                        Font shadow:
                                                        <input class="color no-picker" data-inline="true"
                                                               data-limit="true" type="text" name="font_color_shadow"
                                                               data-empty="true" value="#000000">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="editor__toolbar__block toolbar-align">
                                        <div class="editor__toolbar__option">
                                            <div class="editor__option__selector">
                                                <svg width="20px" height="17px" viewBox="0 0 20 17" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-799.000000, -562.000000)"
                                                           fill="#161616" fill-rule="nonzero">
                                                            <path
                                                                d="M799,567 L818.91342,567 L818.91342,569 L799,569 L799,567 Z M799.04329,562 L810.385281,562 L810.385281,564 L799.04329,564 L799.04329,562 Z M799,572 L814.670996,572 L814.670996,574 L799,574 L799,572 Z M799,577 L818.91342,577 L818.91342,579 L799,579 L799,577 Z"
                                                                id="Rectangle-path-Copy-5"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="editor__option__content">
                                                <div class="row">
                                                    <div class="editor__toolbar__option textAlign" data-align="left">
                                                        <svg width="20px" height="17px" viewBox="0 0 20 17"
                                                             version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <g transform="translate(-768.000000, -604.000000)"
                                                                   fill="#161616" fill-rule="nonzero">
                                                                    <g transform="translate(757.000000, 592.000000)">
                                                                        <g transform="translate(5.000000, 4.000000)">
                                                                            <g>
                                                                                <path
                                                                                    d="M6,13 L25.9134199,13 L25.9134199,15 L6,15 L6,13 Z M6.04329004,8 L17.3852814,8 L17.3852814,10 L6.04329004,10 L6.04329004,8 Z M6,18 L21.6709957,18 L21.6709957,20 L6,20 L6,18 Z M6,23 L25.9134199,23 L25.9134199,25 L6,25 L6,23 Z"
                                                                                    id="Rectangle-path-Copy"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="editor__toolbar__option textAlign active"
                                                         data-align="center">
                                                        <svg width="21px" height="17px" viewBox="0 0 21 17"
                                                             version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <g transform="translate(-804.000000, -604.000000)"
                                                                   fill="#161616" fill-rule="nonzero">
                                                                    <g transform="translate(757.000000, 592.000000)">
                                                                        <g transform="translate(5.000000, 4.000000)">
                                                                            <g
                                                                                transform="translate(36.000000, 0.000000)">
                                                                                <path
                                                                                    d="M6.04329004,8 L26.04329,8 L26.04329,10 L6.04329004,10 L6.04329004,8 Z M6,23 L25.9134199,23 L25.9134199,25 L6,25 L6,23 Z M6,13 L25.9134199,13 L25.9134199,15 L6,15 L6,13 Z M6,18 L26,18 L26,20 L6,20 L6,18 Z"
                                                                                    id="Rectangle-path"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="editor__toolbar__option textAlign" data-align="right">
                                                        <svg width="20px" height="17px" viewBox="0 0 20 17"
                                                             version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <g transform="translate(-840.000000, -604.000000)"
                                                                   fill="#161616" fill-rule="nonzero">
                                                                    <g transform="translate(757.000000, 592.000000)">
                                                                        <g transform="translate(5.000000, 4.000000)">
                                                                            <g
                                                                                transform="translate(72.000000, 0.000000)">
                                                                                <path
                                                                                    d="M25.9134199,13 L25.9134199,15 L6,15 L6,13 L25.9134199,13 Z M25.8701299,8 L25.8701299,10 L14.5281385,10 L14.5281385,8 L25.8701299,8 Z M25.9134199,18 L25.9134199,20 L10.2424242,20 L10.2424242,18 L25.9134199,18 Z M25.9134199,23 L25.9134199,25 L6,25 L6,23 L25.9134199,23 Z"
                                                                                    id="Rectangle-path-Copy-2"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="editor__toolbar__block toolbar-visibility">
                                        <div class="editor__toolbar__option opacity-option">
                                            <div class="editor__option__selector">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-798.000000, -391.000000)">
                                                            <g transform="translate(798.000000, 391.000000)">
                                                                <rect id="shape-copy-3" fill="#626870" x="6.66666667"
                                                                      y="6.66666667" width="6.66666667"
                                                                      height="6.66666667"></rect>
                                                                <rect id="shape-copy-4" fill="#626870" x="0" y="0"
                                                                      width="6.66666667" height="6.66666667"></rect>
                                                                <rect id="shape-copy-6" fill="#626870" x="0"
                                                                      y="13.3333333" width="6.66666667"
                                                                      height="6.66666667"></rect>
                                                                <rect id="shape-copy-5" fill="#626870" x="13.3333333"
                                                                      y="0" width="6.66666667" height="6.66666667"></rect>
                                                                <rect id="shape-copy-7" fill="#626870" x="13.3333333"
                                                                      y="13.3333333" width="6.66666667"
                                                                      height="6.66666667"></rect>
                                                                <rect id="shape-copy-8" stroke="#626870" x="0.5" y="0.5"
                                                                      width="19" height="19"></rect>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="editor__option__content">
                                                <div class="form__group form__group--inline-3">
                                                    <label for="opacity">Opacity:</label>
                                                    <input class="option" id="textFormatOptionsOpacity" name="opacity"
                                                           value="100" type="range" min="0" max="100" step="1"
                                                           data-value="100" />
                                                    <input class="rangeInput" type="number" name="opacity_text"
                                                           id="textFormatOptionsOpacityText" value="100" min="0"
                                                           max="100" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="editor__toolbar__option toolbar-tofront">
                                            <div class="editor__option tofront">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-855.000000, -391.000000)"
                                                           stroke="#161616" stroke-width="2">
                                                            <g transform="translate(855.000000, 391.000000)">
                                                                <rect id="shape-copy-9" x="6.45454545" y="6.45454545"
                                                                      width="12.5454545" height="12.5454545" rx="1">
                                                                </rect>
                                                                <rect id="shape-copy-8" fill="#161616" x="1" y="1"
                                                                      width="12.5454545" height="12.5454545" rx="1">
                                                                </rect>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="editor__toolbar__block toolbar-remove">
                                        <div class="editor__toolbar__option">
                                            <div class="option drop">
                                                <svg width="14px" height="21px" viewBox="0 0 14 21" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-919.000000, -391.000000)"
                                                           fill="#161616">
                                                            <g transform="translate(919.000000, 391.000000)">
                                                                <path
                                                                    d="M12.75505,2.94490085 L9.45,2.94490085 L9.45,1.90480651 C9.45,1.33136783 8.9789,0.864712166 8.4,0.864712166 L5.6,0.864712166 C5.0211,0.864712166 4.55,1.33136783 4.55,1.90480651 L4.55,2.94490085 L1.24495,2.94490085 C0.5586,2.94490085 0,3.49823103 0,4.17810603 L0,5.71848575 L14,5.71848575 L14,4.17810603 C14,3.49823103 13.4414,2.94490085 12.75505,2.94490085 L12.75505,2.94490085 L12.75505,2.94490085 Z M8.50611377,3.02220818 L5.10366826,3.02220818 L5.10366826,2.01110409 C5.10366826,1.82506094 5.25643806,1.67406939 5.44391281,1.67406939 L8.16586922,1.67406939 C8.35334397,1.67406939 8.50611377,1.82506094 8.50611377,2.01110409 L8.50611377,3.02220818 L8.50611377,3.02220818 L8.50611377,3.02220818 Z"
                                                                    id="Fill-700"></path>
                                                                <path
                                                                    d="M0.952380952,18.8801481 C0.952380952,19.5730914 1.52161009,20.1369504 2.22149313,20.1369504 L11.9324129,20.1369504 C12.6319556,20.1369504 13.2011848,19.5730914 13.2011848,18.8801481 L13.2011848,7.66666667 L0.952380952,7.66666667 L0.952380952,18.8801481"
                                                                    id="Fill-701"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    var fonts = { "arial": { "regular": "arial.ttf", "bold": "arialbd.ttf", "italic": "ariali.ttf", "bold-italic": "arialbi.ttf", "human-name": "Arial" }, "impact": { "regular": "impact.ttf", "human-name": "Impact" }, "arial-unicode-ms": { "regular": "arial-unicode-ms.ttf", "country_extra": ["CN", "JP", "KP", "KR", "AR"], "human-name": "Arial Unicode MS" }, "verdana": { "regular": "verdana.ttf", "bold": "verdanab.ttf", "italic": "verdanai.ttf", "bold-italic": "verdanaz.ttf", "human-name": "Verdana" }, "courier": { "regular": "cour.ttf", "bold": "courbd.ttf", "italic": "couri.ttf", "bold-italic": "courbi.ttf", "human-name": "Courier" }, "comic": { "regular": "comic.ttf", "bold": "comicbd.ttf", "italic": "comici.ttf", "bold-italic": "comicbd.ttf", "human-name": "Comic Sans MS" }, "times-new-roman": { "regular": "times.ttf", "bold": "timesbd.ttf", "italic": "timesi.ttf", "bold-italic": "timesbi.ttf", "human-name": "Times New Roman" }, "lohit-marathi": { "regular": "Lohit-Marathi.ttf", "country_extra": ["IN"], "human-name": "Lohit Marathi" }, "lohit-devanagari": { "regular": "Lohit-Devanagari.ttf", "country_extra": ["IN"], "human-name": "Lohit Devanagari" } };
                                </script>
                            </div>
                        </div>
                        <div class="option__tab__content option__tab__content--active" id="tab-content-image">
                            <div class="option__actions">
                                <div id="pickwatermarkContainer">
                                    <button class="option__btn" id="pickwatermark">
                                        <div class="option__btn__icon" id="watermarkPreview">
                                            <svg width="24px" height="20px" viewBox="0 0 24 20" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-736.000000, -1133.000000)" fill="#FFFFFF">
                                                        <g transform="translate(736.000000, 1133.000000)">
                                                            <path
                                                                d="M21.8965758,16.9653135 L21.8965758,2.28467061 L2.07407407,2.28467061 L2.07407407,16.9653135 L21.8965758,16.9653135 Z M23.9706499,17.3072845 C23.9896561,17.360927 24,17.418667 24,17.4788229 L24,18.5258782 C24,18.8094816 23.770094,19.0393876 23.4864906,19.0393876 L0.513509434,19.0393876 C0.229906005,19.0393876 2.35828404e-16,18.8094816 2.01097001e-16,18.5258782 L0,17.4788229 C-3.75676683e-18,17.4481466 0.00268988762,17.4180985 0.00784666393,17.3889017 C0.00268988762,17.3609836 0,17.3322516 0,17.3029188 L0,0.724105965 C-3.47314032e-17,0.440502536 0.229906005,0.210596531 0.513509434,0.210596531 L23.4864906,0.210596531 C23.770094,0.210596531 24,0.440502536 24,0.724105965 L24,1.77116117 C24,1.83131713 23.9896561,1.88905714 23.9706499,1.94269958 L23.9706499,17.3072845 Z"
                                                                id="Combined-Shape"></path>
                                                            <path
                                                                d="M20.608707,15.3962264 L3.78320483,15.3962264 C3.74083938,15.3962264 3.7064954,15.3618824 3.7064954,15.319517 C3.7064954,15.3019755 3.71250743,15.2849639 3.7235294,15.2713176 L8.31768306,9.58331783 C8.34430285,9.55036 8.39260005,9.545222 8.42555788,9.57184178 C8.42977827,9.57525056 8.43362514,9.57909743 8.43703392,9.58331783 L10.3380665,11.9369772 L14.1770363,6.90660307 C14.2137534,6.85849098 14.2825211,6.84925353 14.3306332,6.88597065 C14.3383996,6.89189767 14.3453386,6.89883664 14.3512656,6.90660307 L20.6958216,15.2201593 C20.7325388,15.2682714 20.7233013,15.337039 20.6751892,15.3737562 C20.6560907,15.3883313 20.6327317,15.3962264 20.608707,15.3962264 Z"
                                                                id="Combined-Shape"></path>
                                                            <circle cx="6.56603774" cy="6.11320755" r="1.58490566">
                                                            </circle>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <span>Add image</span>
                                        <span id="changeImage"=>Change image</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="option__panel__content">
                        <p class="option__title">Position:</p>
                        <div class="d-flex">
                            <div class="form__group">
                                <div class="option__page">
                                    <div class="option__page__row">
                                        <div class="option__page__position option--active" data-vertical="top"
                                             data-horizontal="left"></div>
                                        <div class="option__page__position" data-vertical="top"
                                             data-horizontal="center"></div>
                                        <div class="option__page__position" data-vertical="top" data-horizontal="right">
                                        </div>
                                    </div>
                                    <div class="option__page__row">
                                        <div class="option__page__position" data-vertical="middle"
                                             data-horizontal="left"></div>
                                        <div class="option__page__position" data-vertical="middle"
                                             data-horizontal="center"></div>
                                        <div class="option__page__position" data-vertical="middle"
                                             data-horizontal="right"></div>
                                    </div>
                                    <div class="option__page__row">
                                        <div class="option__page__position" data-vertical="bottom"
                                             data-horizontal="left"></div>
                                        <div class="option__page__position" data-vertical="bottom"
                                             data-horizontal="center"></div>
                                        <div class="option__page__position" data-vertical="bottom"
                                             data-horizontal="right"></div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin:8px;"></div>
                            <div class="form__group" style=" margin-top: 4px;">
                                <div class="form__group--inline-spaced">
                                    <div class="form__group  checkbox">
                                        <input type="checkbox" name="mosaic" class="checkbox" id="mosaic">
                                        <label for="mosaic">
                                            Mosaic </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="option__panel__content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form__group">
                                    <label class="option__title">Transparency:</label>
                                    <select class="input option" name="transparency" id="transparency">
                                        <option value="100">No transparency</option>
                                        <option value="75">75%</option>
                                        <option value="50">50%</option>
                                        <option value="25">25%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form__group">
                                    <label class="option__title">Rotation:</label>
                                    <select class="input option" name="rotation">
                                        <option value="0">Do not rotate</option>
                                        <option value="45">45 degrees</option>
                                        <option value="90">90 degrees</option>
                                        <option value="180">180 degrees</option>
                                        <option value="270">270 degrees</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="option__panel__content single_file">
                        <div class="form__group">
                            <label>Pages:</label>
                            <div class="form__group__container">
                                <div class="form__group form__group--boxed">
                                    <label>from page</label>
                                    <input class="input option pagefrom" type="number" name="page_init" value="">
                                </div>
                                <span style="margin:8px;"></span>
                                <div class="form__group form__group--boxed">
                                    <label>to</label>
                                    <input class="input option pageto" type="number" name="page_end" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="option__panel__content multiple_files">
                        <p>All pages will be stamped because multiple PDF have been selected.</p>
                    </div>
                    <div class="option__panel__content">
                        Layer <ul class="option__image">
                            <li class="option__image__item" data-name="layer" data-value="above">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52">
                                    <path fill="#161616" fill-rule="evenodd"
                                          d="M1110,733 L1133.999,751.667 L1129.626,755.054 L1124.875,758.752 L1133.999,765.848 L1129.626,769.235 L1110,784.515 L1090.347,769.235 L1086,765.848 L1095.114,758.76 L1090.347,755.054 L1086,751.667 L1110,733 Z M1122.434,760.653 L1110,770.333 L1097.557,760.66 L1090.883,765.85 L1109.998,780.714 L1129.106,765.844 L1122.434,760.653 Z"
                                          transform="translate(-1086 -733)" />
                                </svg>
                                <div class="option__image__item__title">Over the PDF content</div>
                            </li>
                            <li class="option__image__item" data-name="layer" data-value="below">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52">
                                    <path fill="#161616" fill-rule="evenodd"
                                          d="M1327,721.0001 L1303,739.6671 L1307.347,743.0541 L1312.114,746.7601 L1303,753.8481 L1307.347,757.2351 L1327,772.5151 L1346.626,757.2351 L1350.999,753.8481 L1341.875,746.7521 L1346.626,743.0541 L1350.999,739.6671 L1327,721.0001 Z M1307.883,739.6691 L1327,724.8011 L1346.106,739.6611 L1326.998,754.5331 L1307.883,739.6691 Z"
                                          transform="translate(-1303 -721)" />
                                </svg>
                                <div class="option__image__item__title">Below the PDF content</div>
                            </li>
                        </ul>
                    </div>

                    <div class="gobutton">Click on WATERMARK button</div>
                </div>
            </div>
        </div>

        <div id="picktextwatermark" class="hidden"></div>

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
            <p id="processText" class="processAction title2">Adding watermark...</p>
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
            var ilovepdfConfig = { "action": "tool", "fp": 1, "fpt": 7, "tool": "watermark", "site": "ilovepdf", "subtool": null, "toolText": "Add watermark", "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiIiLCJhdWQiOiIiLCJpYXQiOjE1MjMzNjQ4MjQsIm5iZiI6MTUyMzM2NDgyNCwianRpIjoicHJvamVjdF9wdWJsaWNfYzkwNWRkMWMwMWU5ZmQ3NzY5ODNjYTQwZDBhOWQyZjNfT1Vzd2EwODA0MGI4ZDJjN2NhM2NjZGE2MGQ2MTBhMmRkY2U3NyJ9.qvHSXgCJgqpC4gd6-paUlDLFmg0o2DsOvb1EUYPYx_E", "parentId": null, "preWorker": null, "defaultOptions": { "mode": "image", "pages": "all", "starting_number": 1, "vertical_position": "bottom", "horizontal_position": "center", "vertical_position_adjustment": "0", "horizontal_position_adjustment": "0", "mosaic": false, "rotation": 0, "font_family": "Arial Unicode MS", "font_style": "Regular", "font_size": "14", "font_color": "#000000", "text": "iLovePDF", "transparency": "100", "layer": "above", "image_resize": "1", "image_url": null, "level": null, "isDefault": null, "output_filename": "{filename}_watermark", "packaged_filename": "ilovepdf_watermark" }, "fileLimits": { "merge": { "mb": 100, "files": 25 }, "split": { "mb": 100, "files": 1 }, "compress": { "mb": 200, "files": 2 }, "officepdf": { "mb": 15, "files": 1 }, "wordpdf": { "mb": 15, "files": 1 }, "powerpointpdf": { "mb": 15, "files": 1 }, "excelpdf": { "mb": 15, "files": 1 }, "pdfoffice": { "mb": 15, "files": 1 }, "pdfword": { "mb": 15, "files": 1 }, "pdfocr": { "mb": 15, "files": 1, "pages": 50 }, "pdfpowerpoint": { "mb": 15, "files": 1 }, "pdfexcel": { "mb": 15, "files": 1, "pages": 500 }, "pdfjpg": { "mb": 25, "files": 2 }, "imagepdf": { "mb": 40, "files": 20 }, "pagenumber": { "mb": 100, "files": 2 }, "watermark": { "mb": 100, "files": 2 }, "rotate": { "mb": 100, "files": 20 }, "unlock": { "mb": 100, "files": 2 }, "protect": { "mb": 100, "files": 2 }, "pdfa": { "mb": 100, "files": 1 }, "repair": { "mb": 100, "files": 1 }, "organize": { "mb": 100, "files": 5 }, "resizeimage": { "mb": 200, "files": 30 }, "compressimage": { "mb": 200, "files": 30 }, "cropimage": { "mb": 90, "files": 1 }, "converttojpg": { "mb": 200, "files": 30 }, "convertfromjpg": { "mb": 200, "files": 30 }, "rotateimage": { "mb": 200, "files": 30 }, "watermarkimage": { "mb": 200, "files": 30 }, "memeimage": { "mb": 200, "files": 1 }, "editimage": { "mb": 50, "files": 1 }, "editpdf": { "mb": 100, "files": 1 }, "sign": { "mb": 50, "files": 3 }, "upscaleimage": { "mb": 6, "files": 3, "pxsize": 2073600 }, "blurfaceimage": { "mb": 100, "files": 10 } }, "allFileLimits": { "limits": { "merge": { "mb": 100, "files": 25 }, "split": { "mb": 100, "files": 1 }, "compress": { "mb": 200, "files": 2 }, "officepdf": { "mb": 15, "files": 1 }, "wordpdf": { "mb": 15, "files": 1 }, "powerpointpdf": { "mb": 15, "files": 1 }, "excelpdf": { "mb": 15, "files": 1 }, "pdfoffice": { "mb": 15, "files": 1 }, "pdfword": { "mb": 15, "files": 1 }, "pdfocr": { "mb": 15, "files": 1, "pages": 50 }, "pdfpowerpoint": { "mb": 15, "files": 1 }, "pdfexcel": { "mb": 15, "files": 1, "pages": 500 }, "pdfjpg": { "mb": 25, "files": 2 }, "imagepdf": { "mb": 40, "files": 20 }, "pagenumber": { "mb": 100, "files": 2 }, "watermark": { "mb": 100, "files": 2 }, "rotate": { "mb": 100, "files": 20 }, "unlock": { "mb": 100, "files": 2 }, "protect": { "mb": 100, "files": 2 }, "pdfa": { "mb": 100, "files": 1 }, "repair": { "mb": 100, "files": 1 }, "organize": { "mb": 100, "files": 5 }, "resizeimage": { "mb": 200, "files": 30 }, "compressimage": { "mb": 200, "files": 30 }, "cropimage": { "mb": 90, "files": 1 }, "converttojpg": { "mb": 200, "files": 30 }, "convertfromjpg": { "mb": 200, "files": 30 }, "rotateimage": { "mb": 200, "files": 30 }, "watermarkimage": { "mb": 200, "files": 30 }, "memeimage": { "mb": 200, "files": 1 }, "editimage": { "mb": 50, "files": 1 }, "editpdf": { "mb": 100, "files": 1 }, "sign": { "mb": 50, "files": 3 }, "upscaleimage": { "mb": 6, "files": 3, "pxsize": 2073600 }, "blurfaceimage": { "mb": 100, "files": 10 } }, "registered_limits": { "merge": { "mb": 100, "files": 25 }, "split": { "mb": 100, "files": 1 }, "compress": { "mb": 200, "files": 2 }, "officepdf": { "mb": 15, "files": 1 }, "wordpdf": { "mb": 15, "files": 1 }, "powerpointpdf": { "mb": 15, "files": 1 }, "excelpdf": { "mb": 15, "files": 1 }, "pdfoffice": { "mb": 15, "files": 1 }, "pdfword": { "mb": 15, "files": 1 }, "pdfocr": { "mb": 15, "files": 1, "pages": 50 }, "pdfpowerpoint": { "mb": 15, "files": 1 }, "pdfexcel": { "mb": 15, "files": 1, "pages": 500 }, "pdfjpg": { "mb": 25, "files": 2 }, "imagepdf": { "mb": 40, "files": 20 }, "pagenumber": { "mb": 100, "files": 2 }, "watermark": { "mb": 100, "files": 2 }, "rotate": { "mb": 100, "files": 20 }, "unlock": { "mb": 100, "files": 2 }, "protect": { "mb": 100, "files": 2 }, "pdfa": { "mb": 100, "files": 1 }, "repair": { "mb": 100, "files": 1 }, "organize": { "mb": 100, "files": 5 }, "resizeimage": { "mb": 200, "files": 30 }, "compressimage": { "mb": 200, "files": 30 }, "cropimage": { "mb": 90, "files": 1 }, "converttojpg": { "mb": 200, "files": 30 }, "convertfromjpg": { "mb": 200, "files": 30 }, "rotateimage": { "mb": 200, "files": 30 }, "watermarkimage": { "mb": 200, "files": 30 }, "memeimage": { "mb": 200, "files": 1 }, "editimage": { "mb": 50, "files": 1 }, "editpdf": { "mb": 100, "files": 1 }, "sign": { "mb": 50, "files": 3 }, "upscaleimage": { "mb": 6, "files": 3, "pxsize": 2073600 }, "blurfaceimage": { "mb": 100, "files": 10 } }, "premium_limits": { "merge": { "mb": 4000, "files": 500 }, "split": { "mb": 4000, "files": 1 }, "compress": { "mb": 4000, "files": 10 }, "officepdf": { "mb": 4000, "files": 10 }, "wordpdf": { "mb": 4000, "files": 10 }, "powerpointpdf": { "mb": 4000, "files": 10 }, "excelpdf": { "mb": 4000, "files": 10 }, "pdfword": { "mb": 4000, "files": 10 }, "pdfocr": { "mb": 4000, "files": 10, "pages": 1000 }, "pdfpowerpoint": { "mb": 4000, "files": 10 }, "pdfexcel": { "mb": 4000, "files": 10, "pages": 1000 }, "pdfoffice": { "mb": 4000, "files": 10 }, "pdfjpg": { "mb": 4000, "files": 10 }, "imagepdf": { "mb": 4000, "files": 80 }, "pagenumber": { "mb": 4000, "files": 10 }, "watermark": { "mb": 4000, "files": 10 }, "rotate": { "mb": 4000, "files": 80 }, "unlock": { "mb": 4000, "files": 10 }, "protect": { "mb": 4000, "files": 80 }, "pdfa": { "mb": 4000, "files": 10 }, "repair": { "mb": 4000, "files": 10 }, "organize": { "mb": 4000, "files": 20 }, "resizeimage": { "mb": 4000, "files": 120 }, "compressimage": { "mb": 4000, "files": 120 }, "cropimage": { "mb": 4000, "files": 1 }, "converttojpg": { "mb": 4000, "files": 120 }, "convertfromjpg": { "mb": 4000, "files": 120 }, "rotateimage": { "mb": 4000, "files": 120 }, "watermarkimage": { "mb": 4000, "files": 120 }, "memeimage": { "mb": 4000, "files": 1 }, "editimage": { "mb": 50, "files": 1 }, "editpdf": { "mb": 100, "files": 1 }, "sign": { "mb": 50, "files": 5 }, "upscaleimage": { "mb": 6, "files": 3, "pxsize": 2073600 }, "blurfaceimage": { "mb": 4000, "files": 120 } }, "temp_limits": { "merge": { "mb": 1000, "files": 80 }, "split": { "mb": 1000, "files": 1 }, "compress": { "mb": 1000, "files": 3 }, "officepdf": { "mb": 1000, "files": 3 }, "wordpdf": { "mb": 100, "files": 3 }, "powerpointpdf": { "mb": 100, "files": 3 }, "excelpdf": { "mb": 100, "files": 3 }, "pdfword": { "mb": 100, "files": 1 }, "pdfocr": { "mb": 100, "files": 1, "pages": 100 }, "pdfpowerpoint": { "mb": 100, "files": 1 }, "pdfexcel": { "mb": 100, "files": 1, "pages": 500 }, "pdfoffice": { "mb": 100, "files": 1 }, "pdfjpg": { "mb": 100, "files": 3 }, "imagepdf": { "mb": 1000, "files": 80 }, "pagenumber": { "mb": 1000, "files": 3 }, "watermark": { "mb": 1000, "files": 3 }, "rotate": { "mb": 1000, "files": 30 }, "unlock": { "mb": 1000, "files": 10 }, "protect": { "mb": 1000, "files": 5 }, "pdfa": { "mb": 100, "files": 1 }, "repair": { "mb": 1000, "files": 2 }, "organize": { "mb": 1000, "files": 5 }, "resizeimage": { "mb": 1000, "files": 60 }, "compressimage": { "mb": 1000, "files": 60 }, "cropimage": { "mb": 1000, "files": 1 }, "converttojpg": { "mb": 5000, "files": 60 }, "convertfromjpg": { "mb": 1000, "files": 60 }, "rotateimage": { "mb": 1000, "files": 60 }, "watermarkimage": { "mb": 1000, "files": 60 }, "memeimage": { "mb": 1000, "files": 1 }, "editimage": { "mb": 50, "files": 1 }, "editpdf": { "mb": 100, "files": 1 }, "sign": { "mb": 50, "files": 3 }, "upscaleimage": { "mb": 6, "files": 3, "pxsize": 2073600 }, "blurfaceimage": { "mb": 150, "files": 15 } } }, "servers": ["\/\/api1.ilovepdf.com", "\/\/api2.ilovepdf.com", "\/\/api3.ilovepdf.com", "\/\/api4.ilovepdf.com", "\/\/api5.ilovepdf.com", "\/\/api6.ilovepdf.com", "\/\/api7.ilovepdf.com", "\/\/api8.ilovepdf.com", "\/\/api9.ilovepdf.com", "\/\/api10.ilovepdf.com", "\/\/api11.ilovepdf.com", "\/\/api12.ilovepdf.com", "\/\/api13.ilovepdf.com", "\/\/api14.ilovepdf.com", "\/\/api15.ilovepdf.com", "\/\/api16.ilovepdf.com", "\/\/api17.ilovepdf.com", "\/\/api18.ilovepdf.com", "\/\/api19.ilovepdf.com", "\/\/api22.ilovepdf.com", "\/\/api23.ilovepdf.com", "\/\/api24.ilovepdf.com", "\/\/api25.ilovepdf.com", "\/\/api26.ilovepdf.com", "\/\/api27.ilovepdf.com", "\/\/api28.ilovepdf.com", "\/\/api29.ilovepdf.com", "\/\/api30.ilovepdf.com", "\/\/api31.ilovepdf.com", "\/\/api32.ilovepdf.com", "\/\/api33.ilovepdf.com", "\/\/api34.ilovepdf.com", "\/\/api35.ilovepdf.com", "\/\/api36.ilovepdf.com", "\/\/api37.ilovepdf.com", "\/\/api38.ilovepdf.com", "\/\/api39.ilovepdf.com", "\/\/api40.ilovepdf.com", "\/\/api41.ilovepdf.com", "\/\/api43.ilovepdf.com", "\/\/api44.ilovepdf.com", "\/\/api45.ilovepdf.com", "\/\/api46.ilovepdf.com", "\/\/api47.ilovepdf.com", "\/\/api48.ilovepdf.com", "\/\/api49.ilovepdf.com", "\/\/api50.ilovepdf.com", "\/\/api51.ilovepdf.com", "\/\/api52.ilovepdf.com", "\/\/api53.ilovepdf.com", "\/\/api54.ilovepdf.com", "\/\/api55.ilovepdf.com", "\/\/api56.ilovepdf.com", "\/\/api57.ilovepdf.com", "\/\/api58.ilovepdf.com", "\/\/api59.ilovepdf.com", "\/\/api60.ilovepdf.com", "\/\/api61.ilovepdf.com", "\/\/api62.ilovepdf.com", "\/\/api63.ilovepdf.com", "\/\/api64.ilovepdf.com", "\/\/api65.ilovepdf.com"], "level": "user", "downloadUrl": "\/download", "user": null, "country": "PK", "dtr": true };

            iloveLang.disabledMultipleFiles = 'All pages will be stamped because multiple PDF have been selected.';

            iloveLang.positionTooltip = 'Watermark will be placed on ${positionVertical} ${positionHorizontal}';
            iloveLang.top = 'top';
            iloveLang.middle = 'middle';
            iloveLang.bottom = 'bottom';
            iloveLang.right = 'right';
            iloveLang.center = 'center';
            iloveLang.left = 'left';
            ilovepdfConfig.taskId = '3kj7vn862sAqhy1lr5zpp9qjc2mzkxmAhmws4b8AqxhAzgy65ccn1b808ql6A76xtt8wz38tpjkw48y538j81sr00zzs2gq191kcm02Arfg7s7f1rnv0p2y4cdhd38rv8lzj793k9vgb4hd23tq5mnAmmfv6b53wjfq9k0wp0r756ch87z3q';
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
            csrfToken: 'RvpyMp665PVtCX5DbWIsWpdvNpGrdmz2g4zgnfVWQbcJrChG2sPTwFl9Uw8IFloAoCVRxfonObTG5KrLpQYZwA=='
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
    <script src="dist/js/watermark.01f5a37.js" async="async"></script>
@endsection
