@extends('layouts.index')
@section('title','Convert PDF to JPG. Extract images from a PDF')
@section('content')
    <div class="main">

        <div class="tool">
            <div class="tool__workarea" id="workArea">
                <div id="dropArea"></div>
                <div class="tool__header">
                    <h1 class="tool__header__title">PDF to JPG</h1>
                    <h2 class="tool__header__subtitle">Convert each PDF page into a JPG or extract all images contained in a PDF.</h2>
                </div>
                <div class="uploading__bar uploading__bar--small">
                    <span class="uploading__bar__completed"></span>
                </div>
                <div id="uploader" class="uploader" >
                    <a class="uploader__btn tooltip--left" id="pickfiles" href="javascript:;" title="Add more files">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" stroke-linecap="round" stroke-width="2" stroke="#fff" fill="none" stroke-linejoin="round"><desc>Upload your file and transform it.</desc><path d="M10 1.833v16.333"/><path d="M1.833 10h16.333"/></svg>
                        <span>Select PDF files</span>
                    </a>
                    <div class="uploader__extra">
                        <a class="btn-icon uploader__extra__btn tooltip tooltip--right" id="uploadDisk" href="javascript:;"
                           title="Upload from your computer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="#fff" fill-rule="nonzero"><desc>Upload from computer.</desc><path d="M4.8 19c-.442 0-.8-.448-.8-1s.358-1 .8-1h10.4c.442 0 .8.448.8 1s-.358 1-.8 1H4.8z"/><path d="M7 15h6l-1 3H8z"/><path d="M2 2v11h16V2H2zM1 0h18a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1z"/></svg>
                        </a>
                        <a id="gdrive_file_selector"
                           class="btn-icon uploader__extra__btn tooltip tooltip--right active"
                           title="Select PDF from Google Drive">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"><path fill="#FFF" d="M8.7375,5.80725 L3.021,15.70725 L0.12375,10.69725 L5.847,0.795 L8.7375,5.80725 Z M17.865,10.38225 L12.078,10.39125 L6.378,0.489 L12.1725,0.489 L17.865,10.38225 Z M17.87625,10.9875 L14.9865,15.9975 L3.5415,15.99 L6.43425,10.98375 L17.87625,10.9875 Z"/></svg>
                        </a>
                        <a id="dropbox_file_selector"
                           class="btn-icon uploader__extra__btn tooltip tooltip--right active"
                           title="Select PDF from Dropbox">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path fill="#FFF" d="M5.3475,0.7035 L0.096,4.125 L3.708,7.03725 L9.018,3.765 L5.3475,0.7035 Z M17.904,4.14 L12.66525,0.7275 L9.01875,3.7725 L14.29875,7.03875 L17.904,4.14 Z M9.01875,10.305 L12.66525,13.35975 L17.904,9.945 L14.2995,7.0395 L9.01875,10.305 Z M0.096,9.9585 L5.3475,13.35975 L9.01875,10.305 L3.70875,7.0455 L0.096,9.9585 Z M9.01875,10.9635 L5.35575,14.0385 L3.786,13.02 L3.786,14.16 L9.01875,17.30475 L14.271,14.15175 L14.271,13.0125 L12.693,14.031 L9.01875,10.9635 Z"/></svg>
                        </a>
                    </div>
                    <div class="uploader__droptxt">or drop PDFs here</div>
                </div>            <div id="ad" class="add">
                    <div id='div-gpt-ad-1662466708526-0' class="in_add">
                        <script>
                            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1662466708526-0') });
                        </script>
                    </div>
                </div>

                <div class="sidetools">
                    <a id="settingsToogle" class="btn-icon btn-icon--white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M24 14.187V9.813c-2.148-.766-2.726-.802-3.027-1.53s.083-1.17 1.06-3.223L18.94 1.968c-2.026.963-2.488 1.364-3.224 1.06-.727-.302-.768-.89-1.527-3.027H9.813c-.764 2.144-.8 2.725-1.53 3.027-.752.313-1.203-.1-3.223-1.06L1.968 5.06c.977 2.055 1.362 2.493 1.06 3.224S2.146 9.05 0 9.813v4.375c2.14.76 2.725.8 3.027 1.528.304.734-.08 1.167-1.06 3.223l3.093 3.093c2-.95 2.47-1.373 3.223-1.06.728.302.764.88 1.53 3.027h4.374c.758-2.13.8-2.723 1.537-3.03.745-.308 1.186.1 3.215 1.062l3.093-3.093c-.975-2.05-1.362-2.492-1.06-3.223.3-.726.88-.763 3.027-1.528zm-4.875.764c-.577 1.394-.068 2.458.488 3.578l-1.084 1.084c-1.093-.543-2.16-1.076-3.573-.5-1.396.58-1.8 1.693-2.188 2.877h-1.534c-.398-1.185-.79-2.297-2.183-2.875-1.42-.588-2.507-.045-3.58.488L4.39 18.53c.557-1.118 1.066-2.18.487-3.58-.58-1.39-1.69-1.784-2.876-2.182v-1.533c1.185-.398 2.297-.79 2.875-2.184s.068-2.46-.488-3.58L5.47 4.387c1.082.538 2.162 1.077 3.58.488 1.392-.577 1.785-1.7 2.183-2.875h1.534c.398 1.185.792 2.297 2.184 2.875 1.42.588 2.506.045 3.58-.488l1.084 1.084c-.556 1.12-1.065 2.187-.488 3.58s1.69 1.784 2.875 2.183v1.534c-1.188.398-2.302.79-2.877 2.183zM12 9c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zm0-2a5 5 0 1 0 0 10 5 5 0 1 0 0-10z"/></svg>
                    </a>
                    <a class="btn-icon btn-icon--white tooltip active tooltip--left order" id="orderByName" data-order="asc" href="javascript:;" title="Order files by name">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="#383E45" fill-rule="evenodd"><path d="M2.947 15.297V.23c0-.067.026-.123.077-.166S3.14 0 3.22 0h1.635c.08 0 .145.022.196.065s.077.1.077.166v15.066h2.5a.39.39 0 0 1 .261.087.28.28 0 0 1 .102.222c0 .077-.038.154-.114.23l-3.62 3.076a.42.42 0 0 1-.261.087c-.09 0-.178-.03-.26-.087L.11 15.828c-.113-.103-.14-.215-.08-.338.06-.13.174-.193.34-.193h2.575z" fill-rule="nonzero"/><path d="M11.222 20.2l2.94-7.52c.194-.496.555-.67 1.1-.67h.54c.513 0 .97.12 1.22.804l2.746 7.386c.083.214.222.603.222.845 0 .536-.485.965-1.068.965-.5 0-.86-.174-1.026-.603l-.582-1.6h-3.66l-.596 1.6c-.153.43-.47.603-1.012.603-.624 0-1.054-.375-1.054-.965 0-.24.14-.63.222-.845zm5.602-1.93l-1.3-3.874h-.028L14.15 18.27h2.663zM11.346 8l4.75-6.083h-3.66c-.602 0-1.088-.333-1.088-.958S11.832 0 12.434 0h5.53c.538 0 .973.25.973 1.042 0 .278-.102.583-.294.82l-4.826 6.222h4.096c.602 0 1.088.333 1.088.958s-.486.958-1.088.958h-5.696C11.448 10 11 9.722 11 8.875c0-.36.154-.625.346-.875z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="#383E45" fill-rule="evenodd"><path d="M2.947 15.297V.23c0-.066.026-.122.077-.165S3.14 0 3.22 0h1.634c.08 0 .146.022.196.065s.077.1.077.166v15.066h.33 2.18c.106 0 .193.03.26.087a.28.28 0 0 1 .102.222c0 .077-.038.154-.114.23l-3.62 3.076c-.075.058-.162.087-.26.087a.46.46 0 0 1-.261-.087L.1 15.828c-.112-.103-.14-.216-.078-.328.06-.14.174-.203.34-.203h2.575z" fill-rule="nonzero"/><path d="M11.212 8.083L14.016.66c.185-.5.53-.66 1.058-.66h.516c.5 0 .926.12 1.164.794l2.62 7.3c.08.212.212.595.212.833 0 .53-.463.952-1.02.952-.476 0-.82-.172-.98-.595l-.556-1.587h-3.5l-.57 1.587c-.146.423-.45.595-.966.595C11.41 9.87 11 9.5 11 8.917c0-.238.132-.622.212-.833zm5.344-1.905l-1.23-3.823H15.3l-1.283 3.823h2.54zm-5.2 13.442l4.908-5.794h-3.783c-.622 0-1.124-.317-1.124-.913S11.86 12 12.482 12h5.715c.556 0 1.005.238 1.005.992a1.21 1.21 0 0 1-.304.78L13.9 19.7h4.233c.622 0 1.124.317 1.124.913s-.503.913-1.124.913h-5.887c-.794 0-1.257-.265-1.257-1.072 0-.344.16-.595.357-.833z"/></svg>
                    </a>
                    <a class="btn-icon btn-icon--white tooltip active tooltip--left" id="toggleCover" href="javascript:;" title="Show-hide pdf covers">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 22 19"><path d="M11 4c2.76 0 5 2.24 5 5 0 .65-.13 1.26-.36 1.83l2.92 2.92A11.82 11.82 0 0 0 21.99 9c-1.73-4.4-6-7.5-11-7.5-1.4 0-2.74.25-3.98.7l2.16 2.16C9.74 4.13 10.35 4 11 4zM1 1.27L3.74 4A11.8 11.8 0 0 0 0 9c1.73 4.4 6 7.5 11 7.5a11.78 11.78 0 0 0 4.38-.84l.42.42L18.73 19 20 17.73 2.27 0 1 1.27zM6.53 6.8l1.55 1.55A2.82 2.82 0 0 0 8 9c0 1.66 1.34 3 3 3 .22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.4.53-2.2.53-2.76 0-5-2.24-5-5 0-.8.2-1.53.53-2.2zm4.3-.78L14 9.17V9c0-1.66-1.34-3-3-3l-.17.01z" fill="#383E45" fill-rule="evenodd"/></svg>
                    </a>
                </div>        <div class="tool__workarea__rendered" id="fileGroups"></div>
            </div>
            <div id="sidebar" class="tool__sidebar">
                <div class="option__panel option__panel--active" id="pdfjpg-options">
                    <div class="option__panel__title">PDF to JPG options</div>

                    <div class="options">
                        <ul class="option__select" data-action="null">
                            <li class="option__select__item option__select__item--icon" data-action="pages" data-name="pdfjpg_mode" data-value="pages">
                                <div class="option__select__icon">
                                    <svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-135.000000, -1076.000000)"
                                               fill-rule="nonzero">
                                                <g transform="translate(135.000000, 1076.000000)">
                                                    <path
                                                        d="M30.6715729,2 L3,2 C2.44771525,2 2,2.44771525 2,3 L2,45 C2,45.5522847 2.44771525,46 3,46 L45,46 C45.5522847,46 46,45.5522847 46,45 L46,17.3284271 L30.6715729,2 Z M3,0 L31.5,0 L48,16.5 L48,45 C48,46.6568542 46.6568542,48 45,48 L3,48 C1.34314575,48 0,46.6568542 0,45 L0,3 C0,1.34314575 1.34314575,0 3,0 Z"
                                                        fill="#161616"></path>
                                                    <path d="M33,15 L43.1715729,15 L33,4.82842712 L33,15 Z M31,0 L48,17 L31,17 L31,0 Z"
                                                          fill="#161616"></path>
                                                    <path
                                                        d="M32.0287492,28.3849376 L27.8733376,32.9209486 L20.6304175,24.8407426 C20.2617822,24.4294928 19.6295603,24.3949469 19.2183105,24.7635823 C19.1882439,24.7905333 19.1598372,24.8192806 19.1332465,24.8496663 L6.45140594,39.3414504 C6.08769904,39.7570653 6.12977879,40.3888304 6.54539368,40.7525373 C6.72769113,40.9120668 6.96169954,41 7.20394327,41 L41.8672347,41 C42.4195194,41 42.8672347,40.5522847 42.8672347,40 C42.8672347,39.7663452 42.7854155,39.5400668 42.6359805,39.3604456 L33.5348596,28.4208782 C33.1816434,27.9963116 32.5511259,27.9384706 32.1265593,28.2916868 C32.0918905,28.3205293 32.0592126,28.351684 32.0287492,28.3849376 Z"
                                                        fill="#000000"
                                                        transform="translate(24.500000, 32.500000) scale(-1, 1) translate(-24.500000, -32.500000) "></path>
                                                    <circle fill="#000000"
                                                            transform="translate(17.500000, 20.500000) scale(-1, 1) translate(-17.500000, -20.500000) "
                                                            cx="17.5" cy="20.5" r="3.5"></circle>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="option__select__content">
                                    <div class="option__select__item__title">
                                        Page to JPG                    </div>
                                    <div class="option__description">
                                        Every page of this PDF will be converted into a JPG file. <span class="numPages">-</span> JPG will be created.                    </div>
                                </div>
                            </li>
                            <li class="option__select__item option__select__item--icon" data-action="extract" data-name="pdfjpg_mode" data-value="extract">
                                <div class="option__select__icon">
                                    <svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="User-Interface-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Tabs-&amp;-select-buttons" transform="translate(-136.000000, -1200.000000)">
                                                <g id="extract_images" transform="translate(136.000000, 1200.000000)">
                                                    <path d="M27,2 L3,2 C2.44771525,2 2,2.44771525 2,3 L2,45 C2,45.5522847 2.44771525,46 3,46 L45,46 C45.5522847,46 46,45.5522847 46,45 L46,22 L48,22 L48,45 C48,46.6568542 46.6568542,48 45,48 L3,48 C1.34314575,48 0,46.6568542 0,45 L0,3 C0,1.34314575 1.34314575,0 3,0 L27,0 L27,2 Z" id="Combined-Shape" fill="#161616" fill-rule="nonzero"></path>
                                                    <path d="M40.6758244,0.181314806 L47.8479762,7.35346657 C48.0897293,7.59521964 48.0897293,7.98717882 47.8479762,8.22893189 L40.6758244,15.4010837 C40.4340714,15.6428367 40.0421122,15.6428367 39.8003591,15.4010837 C39.6842652,15.2849897 39.6190443,15.1275326 39.6190443,14.963351 L39.6190443,11.3816745 C33.4285696,11.3816745 29.0952373,13.3626264 26,17.6959587 C27.2380949,11.505484 30.9523797,5.31500936 39.6190443,4.07691442 L39.6190443,0.619047468 C39.6190443,0.277156992 39.8962013,4.4408921e-16 40.2380918,4.4408921e-16 C40.4022734,4.4408921e-16 40.5597305,0.0652208853 40.6758244,0.181314806 Z" id="Path-Copy-10" fill="#161616"></path>
                                                    <path d="M32.1390821,28.4618582 L27.9678414,33.0744266 L20.6962062,24.8565741 C20.3302204,24.4429646 19.6982335,24.404358 19.284624,24.7703438 C19.2511791,24.7999378 19.2197542,24.8317389 19.1905603,24.8655337 L6.42857799,39.6387555 C6.06754039,40.0566912 6.11366545,40.6881739 6.5316012,41.0492115 C6.71324824,41.206129 6.94527858,41.2924719 7.18531761,41.2924719 L42.0458713,41.2924719 C42.598156,41.2924719 43.0458713,40.8447566 43.0458713,40.2924719 C43.0458713,40.0609987 42.9655704,39.836694 42.8186639,39.6578133 L33.6535734,28.4979329 C33.3030611,28.0711313 32.6729237,28.0092867 32.2461221,28.3597989 C32.2079719,28.39113 32.1721941,28.425243 32.1390821,28.4618582 Z" id="Shape-Copy" fill="#000000" fill-rule="nonzero" transform="translate(24.580566, 32.646236) scale(-1, 1) translate(-24.580566, -32.646236) "></path>
                                                    <circle id="Oval-Copy" fill="#000000" fill-rule="nonzero" transform="translate(17.375000, 20.375000) scale(-1, 1) translate(-17.375000, -20.375000) " cx="17.375" cy="20.375" r="3.375"></circle>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="option__select__content">
                                    <div class="option__select__item__title">
                                        Extract images                    </div>
                                    <div class="option__description">
                                        All embedded images inside the PDF will be extracted as JPG images.                    </div>
                                </div>
                            </li>
                        </ul>
                        <br/>
                        <div class="option__panel__content" id="image-quality">
                            <div class="option__title">Image quality</div>
                            <ul class="option__image">
                                <li class="option__image__item option--active" data-name="dpi" data-value="150">
                                    <div class="option__image__item__title">
                                        Normal<br>
                                        <small>Recommended</small>
                                    </div>
                                </li>
                                <li class="option__image__item" data-name="dpi" data-value="300">
                                    <div class="option__image__item__title">
                                        High                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    </div>
        </div>

        <div id="uploading" class="uploading">
            <div id="upload-status" class="uploading__status">
                <div class="uploading__status__title drive"><img src="img/svg_icons/preload.svg" alt="Uploading">Getting files from Drive</div>
                <div class="uploading__status__title dropbox"><img src="img/svg_icons/preload.svg" alt="Uploading">Getting files from Dropbox</div>
                <div class="uploading__status__title user">Uploading file <span class="uploading__status__current">0</span> of <span class="uploading__status__total">0</span></div>
                <div class="uploading__status__file"></div>
                <div class="uploading__status__info">
                    Time left <span id="timeLeft">- seconds</span> -
                    Upload speed <span id="uploadSpeed">- MB/S</span>        </div>
                <div class="uploading__bar">
                    <span class="uploading__bar__completed"></span>
                </div>
                <div class="uploading__status__percent">
                    <div class="uploading__status__percent__value"></div>
                    Uploaded        </div>


            </div>
            <!-- <div id="upload-files" class="uploading__files"></div>-->
        </div><div id="process" class="process">
            <p id="processText" class="processAction title2">Converting PDF to JPG...</p>
            <img src="img/svg_icons/preload.svg" alt="Processing">
            <div id="waitnotify"></div>
        </div>
        <script>
            var iloveLang = {'noTasks': 'sorry, no tasks here!','Update Card Details': 'Update Card Details','login': 'login','email': 'email','waitnotify': 'Do not close your browser. Wait until your files are uploaded and processed! This might take a few minutes. :)','savingFile': 'Saving file...','Save to Drive': 'Save to Drive','Drive saving...': 'Drive saving...','Your file has been saved to Drive!': 'Your file has been saved to Drive!','Ok': 'Ok','processCompleted': 'The task has been completed!<br> Going to download page...','uploadComplete': 'Upload complete!','Save options for next actions': 'Save options for next actions','Some files require password': 'Some files require password','No file selected.': 'No file selected.','Please add a file to activate options': 'Please add a file to activate options','Yes': 'Yes','No': 'No','Over the content': 'Over the content','Below the content': 'Below the content','Facing pages': 'Facing pages','Normal': 'Normal','First cover': 'First cover','none': 'none','Remove': 'Delete','Remove this file': 'Remove this file','Rotate': 'Rotate','Or': 'Or','wops': 'Error','Error': 'Error','Upload error': 'Upload error','InvalidExtension': 'Sorry, this extension is not allowed','FileTooLarge': 'Too many Megapixel for image.','InvalidTask': 'InvalidTask','InvalidParams': 'InvalidParams','CloudError': 'TaskLimit','TaskLimit': 'TaskLimit','EmptyFile': 'This file is empty','UploadError': 'Upload error','DamagedFile': 'Damaged/Corrupted File','FileRemoved': 'Some files you selected from your device seem to have been renamed, deleted or moved. Please, next time, wait until upload finishes.','FileSizeExceeded': 'The filesize of this file exceeds the limits','errorOneRetry': 'It looks like a connection problem is stopping your file from being processed. We suggest that you wait a little while, then reload the page and try again.<br><br>If this doesn\'t work, you could try by disabling your web extensions or using the incognito browser. If the problem persists, please contact us.<br><br><a href="https://www.ilovepdf.com/\&quot;#\"" onclick=\"location.reload();\">Reload the page and try again</a>', 'errorRetry': 'It looks like a connection problem is stopping your files from being processed. We suggest that you wait a little while, then reload the page and try again.<br><br>If this doesn\'t work, you could try by disabling your web extensions or using the incognito browser. If the problem persists, please contact us.<br><br><a href="https://www.ilovepdf.com/\&quot;#\"" onclick=\"location.reload();\">Reload the page and try again</a>','File number exceeded': 'File number exceeded','File size exceeded': 'File size exceeded','Sorry, we are not ready for that.': 'Sorry, we are not ready for that.','superlimitWhoa': "You\'ve hit the limit, even for Premium. Whoa!",'superlimitDownload': "Unfortunately, our system doesn\'t have enough capacity to process your task. For now.",'Original size (in pixels) for this image': 'Original size (in pixels) for this image','This image will be resized to this size (in pixels)': 'This image will be resized to this size (in pixels)','Uploading...': "Uploading...",'1 file': '1 file','1 mb': '1 mb','${limit} files': '${limit} files','${limit} mb': '${limit} mb','registeredLevel': 'registered users','premiumLevel': 'premium users','publicLevel': 'non registered users','limitTaskMsg': "This task is <strong>limited to ${currentLimit}</strong> for ${currentLevel}. <strong>${nextLevel} can upload up to ${nextLimit}</strong>. Some of your files have not been added.",'Wait a moment, please...': 'Wait a moment, please...','Time left': 'Time left','minute': 'minute','hour': 'hour','less than': 'less than','minutes': 'minutes','hours': 'hours','seconds': 'seconds','dropIt': 'Drop it like it\'s hot','featurePremium': 'This <strong>feature</strong> requires you to be <strong>Premium</strong>','Premium feature': 'Premium feature','Welcome back after upload': 'We are glad you are here again. But for security reasons, your files aren\'t. To (toolname) your (fileformat), please get back to our homepage. ','Limit exceeded': 'Limit exceeded','leaveAlert': 'Do you really want to leave our page?','passwordRequiredFor': 'Password required for <br>${filename}','addPage': 'Add a blank page','paswordRequired': 'Password required','Cancel': 'Cancel','Ignore': 'Ignore','Ignore these files': 'Ignore these files','Send': 'Send','Same password for all files': 'Same password for all files','Did you forgot your password?': 'Did you forgot your password?','numPages': '${numPages} pages','Unlock PDF': 'Unlock PDF','damaged file?': 'Damaged file?','previousTaskLoading': 'Loading files from previous task','previousFail': 'We are sorry. We couldn\'t load the previous task files.','previousFailContinue': 'Ok','previousFailBack': 'Back to download','disabledMultipleFiles': 'Option disabled because there are multiple files', 'registeredFeatureTitle': 'Registered feature', 'registeredFeatureSubtitle':'This <strong>feature</strong> requires you to be <strong>Registered user</strong>','authTitle':'iLovePDF Accounts','authSubtitle':'Get access to extended features','ProtectedFile':'Password protected file', 'limitMb': 'The file you are trying to process is bigger than ${mb} MB.', 'limitFiles': 'You are trying to process more than ${files} files.', 'featureRequired': '<strong>Feature</strong> available for <strong>Registered users</strong>','limitFree': 'Free:','limitPremium': 'Premium:', 'limitFiles':'<b>${n} files</b> per task','limitSize':'<b>${n} MB</b> per task','limitPages':'<b>${n} pages</b> per task','upgradePremium': 'Upgrade to Premium'};
            var unlockPdfUrl = '/unlock_pdf';
            var paymentLang = {'yearly': 'Yearly','monthly': 'Monthly','stripePayBtn_web': 'Go Premium','stripePayBtn_web_desktop': 'Go Premium Pro','pack_web': 'Premium','pack_web_desktop': 'Premium Pro','paymentFail': 'The payment can\'t be processed.'};
            var premiumData = {'premiumUrl': '/user/premium',priceMonth: '$<span class="pricing__price__numbers">6</span>',priceYear: '$<span class="pricing__price__numbers">48</span>',priceYearMonthly: '$<span class="pricing__price__numbers">4</span>'};
            var country = 'PK';
            var ab = {"limits":"b"};
        </script><script>
            var ilovepdfConfig = {"action":"tool","fp":1,"fpt":7,"tool":"pdfjpg","site":"ilovepdf","subtool":null,"toolText":"Convert to JPG","token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiIiLCJhdWQiOiIiLCJpYXQiOjE1MjMzNjQ4MjQsIm5iZiI6MTUyMzM2NDgyNCwianRpIjoicHJvamVjdF9wdWJsaWNfYzkwNWRkMWMwMWU5ZmQ3NzY5ODNjYTQwZDBhOWQyZjNfT1Vzd2EwODA0MGI4ZDJjN2NhM2NjZGE2MGQ2MTBhMmRkY2U3NyJ9.qvHSXgCJgqpC4gd6-paUlDLFmg0o2DsOvb1EUYPYx_E","parentId":null,"preWorker":null,"defaultOptions":{"pdfjpg_mode":"pages","output_filename":"{filename}_page","packaged_filename":"ilovepdf_pages-to-jpg"},"fileLimits":{"merge":{"mb":100,"files":25},"split":{"mb":100,"files":1},"compress":{"mb":200,"files":2},"officepdf":{"mb":15,"files":1},"wordpdf":{"mb":15,"files":1},"powerpointpdf":{"mb":15,"files":1},"excelpdf":{"mb":15,"files":1},"pdfoffice":{"mb":15,"files":1},"pdfword":{"mb":15,"files":1},"pdfocr":{"mb":15,"files":1,"pages":50},"pdfpowerpoint":{"mb":15,"files":1},"pdfexcel":{"mb":15,"files":1,"pages":500},"pdfjpg":{"mb":25,"files":2},"imagepdf":{"mb":40,"files":20},"pagenumber":{"mb":100,"files":2},"watermark":{"mb":100,"files":2},"rotate":{"mb":100,"files":20},"unlock":{"mb":100,"files":2},"protect":{"mb":100,"files":2},"pdfa":{"mb":100,"files":1},"repair":{"mb":100,"files":1},"organize":{"mb":100,"files":5},"resizeimage":{"mb":200,"files":30},"compressimage":{"mb":200,"files":30},"cropimage":{"mb":90,"files":1},"converttojpg":{"mb":200,"files":30},"convertfromjpg":{"mb":200,"files":30},"rotateimage":{"mb":200,"files":30},"watermarkimage":{"mb":200,"files":30},"memeimage":{"mb":200,"files":1},"editimage":{"mb":50,"files":1},"editpdf":{"mb":100,"files":1},"sign":{"mb":50,"files":3},"upscaleimage":{"mb":6,"files":3,"pxsize":2073600},"blurfaceimage":{"mb":100,"files":10}},"allFileLimits":{"limits":{"merge":{"mb":100,"files":25},"split":{"mb":100,"files":1},"compress":{"mb":200,"files":2},"officepdf":{"mb":15,"files":1},"wordpdf":{"mb":15,"files":1},"powerpointpdf":{"mb":15,"files":1},"excelpdf":{"mb":15,"files":1},"pdfoffice":{"mb":15,"files":1},"pdfword":{"mb":15,"files":1},"pdfocr":{"mb":15,"files":1,"pages":50},"pdfpowerpoint":{"mb":15,"files":1},"pdfexcel":{"mb":15,"files":1,"pages":500},"pdfjpg":{"mb":25,"files":2},"imagepdf":{"mb":40,"files":20},"pagenumber":{"mb":100,"files":2},"watermark":{"mb":100,"files":2},"rotate":{"mb":100,"files":20},"unlock":{"mb":100,"files":2},"protect":{"mb":100,"files":2},"pdfa":{"mb":100,"files":1},"repair":{"mb":100,"files":1},"organize":{"mb":100,"files":5},"resizeimage":{"mb":200,"files":30},"compressimage":{"mb":200,"files":30},"cropimage":{"mb":90,"files":1},"converttojpg":{"mb":200,"files":30},"convertfromjpg":{"mb":200,"files":30},"rotateimage":{"mb":200,"files":30},"watermarkimage":{"mb":200,"files":30},"memeimage":{"mb":200,"files":1},"editimage":{"mb":50,"files":1},"editpdf":{"mb":100,"files":1},"sign":{"mb":50,"files":3},"upscaleimage":{"mb":6,"files":3,"pxsize":2073600},"blurfaceimage":{"mb":100,"files":10}},"registered_limits":{"merge":{"mb":100,"files":25},"split":{"mb":100,"files":1},"compress":{"mb":200,"files":2},"officepdf":{"mb":15,"files":1},"wordpdf":{"mb":15,"files":1},"powerpointpdf":{"mb":15,"files":1},"excelpdf":{"mb":15,"files":1},"pdfoffice":{"mb":15,"files":1},"pdfword":{"mb":15,"files":1},"pdfocr":{"mb":15,"files":1,"pages":50},"pdfpowerpoint":{"mb":15,"files":1},"pdfexcel":{"mb":15,"files":1,"pages":500},"pdfjpg":{"mb":25,"files":2},"imagepdf":{"mb":40,"files":20},"pagenumber":{"mb":100,"files":2},"watermark":{"mb":100,"files":2},"rotate":{"mb":100,"files":20},"unlock":{"mb":100,"files":2},"protect":{"mb":100,"files":2},"pdfa":{"mb":100,"files":1},"repair":{"mb":100,"files":1},"organize":{"mb":100,"files":5},"resizeimage":{"mb":200,"files":30},"compressimage":{"mb":200,"files":30},"cropimage":{"mb":90,"files":1},"converttojpg":{"mb":200,"files":30},"convertfromjpg":{"mb":200,"files":30},"rotateimage":{"mb":200,"files":30},"watermarkimage":{"mb":200,"files":30},"memeimage":{"mb":200,"files":1},"editimage":{"mb":50,"files":1},"editpdf":{"mb":100,"files":1},"sign":{"mb":50,"files":3},"upscaleimage":{"mb":6,"files":3,"pxsize":2073600},"blurfaceimage":{"mb":100,"files":10}},"premium_limits":{"merge":{"mb":4000,"files":500},"split":{"mb":4000,"files":1},"compress":{"mb":4000,"files":10},"officepdf":{"mb":4000,"files":10},"wordpdf":{"mb":4000,"files":10},"powerpointpdf":{"mb":4000,"files":10},"excelpdf":{"mb":4000,"files":10},"pdfword":{"mb":4000,"files":10},"pdfocr":{"mb":4000,"files":10,"pages":1000},"pdfpowerpoint":{"mb":4000,"files":10},"pdfexcel":{"mb":4000,"files":10,"pages":1000},"pdfoffice":{"mb":4000,"files":10},"pdfjpg":{"mb":4000,"files":10},"imagepdf":{"mb":4000,"files":80},"pagenumber":{"mb":4000,"files":10},"watermark":{"mb":4000,"files":10},"rotate":{"mb":4000,"files":80},"unlock":{"mb":4000,"files":10},"protect":{"mb":4000,"files":80},"pdfa":{"mb":4000,"files":10},"repair":{"mb":4000,"files":10},"organize":{"mb":4000,"files":20},"resizeimage":{"mb":4000,"files":120},"compressimage":{"mb":4000,"files":120},"cropimage":{"mb":4000,"files":1},"converttojpg":{"mb":4000,"files":120},"convertfromjpg":{"mb":4000,"files":120},"rotateimage":{"mb":4000,"files":120},"watermarkimage":{"mb":4000,"files":120},"memeimage":{"mb":4000,"files":1},"editimage":{"mb":50,"files":1},"editpdf":{"mb":100,"files":1},"sign":{"mb":50,"files":5},"upscaleimage":{"mb":6,"files":3,"pxsize":2073600},"blurfaceimage":{"mb":4000,"files":120}},"temp_limits":{"merge":{"mb":1000,"files":80},"split":{"mb":1000,"files":1},"compress":{"mb":1000,"files":3},"officepdf":{"mb":1000,"files":3},"wordpdf":{"mb":100,"files":3},"powerpointpdf":{"mb":100,"files":3},"excelpdf":{"mb":100,"files":3},"pdfword":{"mb":100,"files":1},"pdfocr":{"mb":100,"files":1,"pages":100},"pdfpowerpoint":{"mb":100,"files":1},"pdfexcel":{"mb":100,"files":1,"pages":500},"pdfoffice":{"mb":100,"files":1},"pdfjpg":{"mb":100,"files":3},"imagepdf":{"mb":1000,"files":80},"pagenumber":{"mb":1000,"files":3},"watermark":{"mb":1000,"files":3},"rotate":{"mb":1000,"files":30},"unlock":{"mb":1000,"files":10},"protect":{"mb":1000,"files":5},"pdfa":{"mb":100,"files":1},"repair":{"mb":1000,"files":2},"organize":{"mb":1000,"files":5},"resizeimage":{"mb":1000,"files":60},"compressimage":{"mb":1000,"files":60},"cropimage":{"mb":1000,"files":1},"converttojpg":{"mb":5000,"files":60},"convertfromjpg":{"mb":1000,"files":60},"rotateimage":{"mb":1000,"files":60},"watermarkimage":{"mb":1000,"files":60},"memeimage":{"mb":1000,"files":1},"editimage":{"mb":50,"files":1},"editpdf":{"mb":100,"files":1},"sign":{"mb":50,"files":3},"upscaleimage":{"mb":6,"files":3,"pxsize":2073600},"blurfaceimage":{"mb":150,"files":15}}},"servers":["\/\/api1.ilovepdf.com","\/\/api2.ilovepdf.com","\/\/api3.ilovepdf.com","\/\/api4.ilovepdf.com","\/\/api5.ilovepdf.com","\/\/api6.ilovepdf.com","\/\/api7.ilovepdf.com","\/\/api8.ilovepdf.com","\/\/api9.ilovepdf.com","\/\/api10.ilovepdf.com","\/\/api11.ilovepdf.com","\/\/api12.ilovepdf.com","\/\/api13.ilovepdf.com","\/\/api14.ilovepdf.com","\/\/api15.ilovepdf.com","\/\/api16.ilovepdf.com","\/\/api17.ilovepdf.com","\/\/api18.ilovepdf.com","\/\/api19.ilovepdf.com","\/\/api22.ilovepdf.com","\/\/api23.ilovepdf.com","\/\/api24.ilovepdf.com","\/\/api25.ilovepdf.com","\/\/api26.ilovepdf.com","\/\/api27.ilovepdf.com","\/\/api28.ilovepdf.com","\/\/api29.ilovepdf.com","\/\/api30.ilovepdf.com","\/\/api31.ilovepdf.com","\/\/api32.ilovepdf.com","\/\/api33.ilovepdf.com","\/\/api34.ilovepdf.com","\/\/api35.ilovepdf.com","\/\/api36.ilovepdf.com","\/\/api37.ilovepdf.com","\/\/api38.ilovepdf.com","\/\/api39.ilovepdf.com","\/\/api40.ilovepdf.com","\/\/api41.ilovepdf.com","\/\/api43.ilovepdf.com","\/\/api44.ilovepdf.com","\/\/api45.ilovepdf.com","\/\/api46.ilovepdf.com","\/\/api47.ilovepdf.com","\/\/api48.ilovepdf.com","\/\/api49.ilovepdf.com","\/\/api50.ilovepdf.com","\/\/api51.ilovepdf.com","\/\/api52.ilovepdf.com","\/\/api53.ilovepdf.com","\/\/api54.ilovepdf.com","\/\/api55.ilovepdf.com","\/\/api56.ilovepdf.com","\/\/api57.ilovepdf.com","\/\/api58.ilovepdf.com","\/\/api59.ilovepdf.com","\/\/api60.ilovepdf.com","\/\/api61.ilovepdf.com","\/\/api62.ilovepdf.com","\/\/api63.ilovepdf.com","\/\/api64.ilovepdf.com","\/\/api65.ilovepdf.com"],"level":"user","downloadUrl":"\/download","user":null,"country":"PK","dtr":true};
            ilovepdfConfig.taskId = 'm6x4t176hswfyq5mstz71sk3ystrxf6r2b8f525ghtxssc797crmx8mqw4pzq5wk6662k739hxbjfc6j21qcp4vzqk4bfgzn6196lvh6bythkblprvtj8Aw3kt4pzh75h16lk0q5shb1lAbtk0r11vAvq9m461rxfzx2h0rAfdb6m7wq519q';
        </script>

    </div>
    <div class="footer">
        <div class="footer__copy">
            &copy; iLovePDF 2023 &reg; - Your PDF Editor    </div>
    </div>
    <div id="network" class="network">
        <i class="ico ico--network"></i>
        <div class="network__text">
            Woops! Something is wrong with your Internet connection...    </div>
    </div>

    <script>
        var siteData = {
            csrfParam: '_csrf-ilovepdf',
            csrfToken: 'SIxf0mKfKSxJ-1GIEMCifj-Sgi0T5wdOCKcr60TItycH2gWmJuYeGX2PfMR1tNQkCNjleUK2UgxNz2G9FJjvUA=='
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
            'accept_all':'Accept all',
            'save_txt':'Save',
            'settings_txt':'Settings',
            'close_settings':'Close settings',
        }
    </script>
    <script src="dist/js/app.01f5a37.js" async="async"></script>
@endsection
