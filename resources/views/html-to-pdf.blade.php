@extends('layouts.index')
@section('title','HTML to PDF converter. Transform HTML pages into PDF')
@section('content')
    <div class="main">

        <div class="tool">
            <div class="tool__workarea" id="workArea">
                <div id="dropArea"></div>
                <div class="tool__header">
                    <h1 class="tool__header__title">HTML to PDF</h1>
                    <h2 class="tool__header__subtitle">Convert web pages to PDF documents with high accuracy</h2>
                </div>
                <div id="uploader" class="uploader">
                    <button data-toggle="modal" data-target="#htmlModal" data-whatever="@mdo"
                            class="uploader__btn active">
                        <span>Add HTML</span>
                    </button>
                </div>
                <div id="ad" class="add">
                    <div id='div-gpt-ad-1662466998839-0' class="in_add">
                        <script>
                            googletag.cmd.push(function () { googletag.display('div-gpt-ad-1662466998839-0') });
                        </script>
                    </div>
                </div>

                <div class="tool__workarea__rendered editor" id="editor">
                    <div class="editor__content">
                    </div>
                </div>
                <div class="waitMsg">
                    <div class="title2">Creating preview</div>
                    <img src="img/svg_icons/preload2.svg">
                    <div class="title3">
                        <div class="waitMsg_message">Accessing URL ...</div>
                        <div class="waitMsg_message">This may take a while ...</div>
                        <div class="waitMsg_message">We will scan all the URL content ...</div>
                        <div class="waitMsg_message">
                            ... to provide you with the best conversion quality </div>
                    </div>
                    <p>(Click 'Convert HTML' button to convert your webpage without generating a preview)</p>
                </div>
                <div class="waitMsgError">
                    <div class="title2">Unable to access URL</div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="95"
                         height="95">
                        <defs>
                            <circle id="A" cx="44.5" cy="44.5" r="44.5" />
                            <filter x="-6.2%" y="-3.9%" width="112.4%" height="112.4%" id="B">
                                <feOffset dy="2" in="SourceAlpha" />
                                <feGaussianBlur stdDeviation="1.5" />
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                            </filter>
                        </defs>
                        <g transform="translate(3 1)" fill-rule="evenodd">
                            <use fill="#000" filter="url(#B)" xlink:href="#A" />
                            <use fill="#ff6a58" xlink:href="#A" />
                            <g fill="#fff">
                                <path d="M43.73 46.92V34.04h2.376v12.88H43.73zm0 6.48v-3.348h2.376V53.4H43.73z" />
                                <path
                                    d="M44.5 19.235L22.34 60.6h44.32L44.5 19.235zm1.763-.944l22.16 41.365A2 2 0 0 1 66.66 62.6H22.34a2 2 0 0 1-1.763-2.944l22.16-41.365a2 2 0 0 1 3.526 0z"
                                    fill-rule="nonzero" />
                            </g>
                        </g>
                    </svg>
                    <p>The webpage you are trying to access <strong>can't be found</strong> or has <strong>connectivity
                            issues</strong>.</p>
                    <p>Please check if URL is properly written and try again.</p>
                </div>
            </div>
            <div id="sidebar" class="tool__sidebar">
                <div class="option__panel option__panel--active" id="merge-options">
                    <div class="option__panel__title">HTML to PDF</div>
                    <div class="option__panel__content">
                        <div class="option__title">
                            Website Url </div>

                        <div class="form__group form__group--btn form__group--btn-lg">
                            <div class="input--icon input--url">
                                <input name="url" class="input inputUrl option" type="text"
                                       placeholder="Example: https://ilovepdf.com">
                            </div>
                            <button class="btn" id="refreshUrl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 22 22"
                                     fill="#373e46" fill-rule="nonzero">
                                    <path
                                        d="M1.76 16.595L.442 17.922a.24.24 0 0 0 .134.404l4.675.672c.156.022.3-.112.268-.27l-.668-4.705c-.028-.194-.264-.273-.4-.135l-.974.98A8.36 8.36 0 0 1 4.783 4.815a8.21 8.21 0 0 1 6.408-2.417l.2-.076 1.556-1.7C13.07.486 13 .266 12.82.228a10.57 10.57 0 0 0-9.698 2.906A10.75 10.75 0 0 0 1.77 16.595zm15.47.51c-1.96 2.012-4.732 2.853-7.403 2.322-.077-.015-.156.01-.212.066L8.07 21.08c-.125.128-.073.346.095.402 3.752 1.232 7.896.243 10.732-2.667 3.833-3.933 4.14-10.18.788-14.475l1.2-1.243c.137-.14.06-.382-.133-.4l-4.663-.683c-.156-.023-.3.114-.267.274l.666 4.784c.027.197.263.278.4.137l1.106-1.135c2.438 3.336 2.14 8.053-.774 11.043z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <p class="errorMsg">The given URL is invalid. Please check to see if it is written correctly.
                        </p>
                    </div>
                    <hr>
                    <div class="option__panel__content">
                        <div class="float-right option" data-action="reset" id="reset">
                            <span class="link--cancel">Reset all</span>
                        </div>
                        <div class="form__group">
                            <div class="option__title">
                                Screen size</div>
                            <select name="view_width" id="view_width" class="input option">
                                <option value="custom" id="view_width_custom">Your screen (1200px)
                                </option>
                                <option value="1920">Desktop HD (1920px)</option>
                                <option value="1440">Desktop (1440px)</option>
                                <option value="768">Tablet (768px)</option>
                                <option value="320">Mobile (320px)</option>
                            </select>
                        </div>
                    </div>
                    <div class="option__panel__content">
                        <div class="form__group">
                            <div class="option__title">
                                Page size</div>
                            <select name="page_size" id="page_size" class="input option">
                                <option value="A3">A3 (297x420 mm)</option>
                                <option value="A4" selected>A4 (297x210 mm)</option>
                                <option value="A5">A5 (148x210 mm)</option>
                                <option value="Letter">US Letter (216x279 mm)</option>
                            </select>
                        </div>
                        <div style="margin:8px;"></div>
                        <div class="form__group" style=" margin-top: 4px;">
                            <div class="form__group--inline-spaced">
                                <div class="form__group  checkbox">
                                    <input type="checkbox" name="single_page" class="checkbox option" id="single_page"
                                           checked="checked">
                                    <label for="single_page">
                                        One long page <div class="moreinfo tooltip"
                                                           title="Your web page will be converted into a large single page instead of being split into several PDF pages">
                                            <svg height="20" viewBox="0 0 9 20" width="9"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g fill="#E5322D" fill-rule="evenodd">
                                                    <path
                                                        d="m5.33334546 5.7271381c1.5536381.0152627 2.83310477-1.26922169 2.84833652-2.84097724.01523175-1.58671601-1.24900318-2.87120039-2.83310477-2.88616086-1.58410159 0-2.87880001 1.25411011-2.89403176 2.84082612 0 1.57160443 1.27946668 2.8712004 2.87880001 2.88631198" />
                                                    <path
                                                        d="m8.31443906 17.0283037c-.253125.0944704-.4921875.2699156-.7453125.3643861-.3234375.121597-.646875.2294283-.984375.2699156-.4078125.0404874-.703125-.1619494-.8015625-.5398313-.0703125-.2832764-.1125-.5936794-.084375-.8772258.0703125-.6073102.196875-1.2009897.309375-1.8082999.3375-1.8085699.703125-3.6170047 1.0265625-5.43893537.084375-.48584818.1828125-.98519213.16875-1.48453609-.0140625-.59367947-.3796875-.87722586-.9984375-.87722586h-2.5734375-2.4328125c-.196875 0-.4078125.01363074-.6046875.0406223-.3796875.06747892-.5625.24292409-.590625.52620057-.028125.25655482.1125.51283973.4640625.63430178.28125.09460543.5765625.121597.871875.16208434.675.09447048.9.32376383.9.98505717 0 .10796627-.0140625.20243674-.028125.310403-.28125 1.59250236-.590625 3.17150886-.871875 4.76401126-.1546875.9178482-.309375 1.8219306-.4359375 2.7397788-.196875 1.3359475 1.153125 2.604686 2.2078125 2.7396439.6328125.0808397 1.2796875.1078313 1.9265625.0944704 1.378125-.0136307 2.53125-.5804536 3.5015625-1.5115276.16875-.1620843.309375-.3915127.365625-.6073102.1125-.3778819-.196875-.6344368-.590625-.4859831" />
                                                </g>
                                            </svg>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="option__panel__content">
                        <div class="option__title">
                            Orientation</div>
                        <ul class="option__image">
                            <li class="option__image__item option option--active" data-name="page_orientation"
                                data-value="portrait">
                                <svg width="24px" height="32px" viewBox="0 0 24 32" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-1208.000000, -509.000000)" fill="#161616"
                                           fill-rule="nonzero">
                                            <path
                                                d="M1211,512 L1211,538 L1229,538 L1229,512 L1211,512 Z M1210,509 L1230,509 C1231.10457,509 1232,509.895431 1232,511 L1232,539 C1232,540.104569 1231.10457,541 1230,541 L1210,541 C1208.89543,541 1208,540.104569 1208,539 L1208,511 C1208,509.895431 1208.89543,509 1210,509 Z"
                                                id="portrait"></path>
                                        </g>
                                    </g>
                                </svg>
                                <div class="option__image__item__title">Portrait</div>
                            </li>
                            <li class="option__image__item option" data-name="page_orientation" data-value="landscape">
                                <svg width="32px" height="24px" viewBox="0 0 32 24" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-1335.000000, -513.000000)" fill="#969696"
                                           fill-rule="nonzero">
                                            <path
                                                d="M1338,534 L1364,534 L1364,516 L1338,516 L1338,534 Z M1335,535 L1335,515 C1335,513.895431 1335.89543,513 1337,513 L1365,513 C1366.10457,513 1367,513.895431 1367,515 L1367,535 C1367,536.104569 1366.10457,537 1365,537 L1337,537 C1335.89543,537 1335,536.104569 1335,535 Z"
                                                id="landscape"></path>
                                        </g>
                                    </g>
                                </svg>
                                <div class="option__image__item__title">Landscape</div>
                            </li>
                        </ul>
                    </div>

                    <div class="option__panel__content">
                        <div class="option__title">
                            Page margin</div>
                        <ul class="option__image">
                            <li class="option__image__item option--active" data-name="page_margin" data-value="0">

                                <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-310.000000, -818.000000)" fill="#979797">
                                            <g transform="translate(310.000000, 818.000000)">
                                                <path
                                                    d="M3,3 L3,29 L29,29 L29,3 L3,3 Z M2,0 L30,0 C31.1045695,-2.02906125e-16 32,0.8954305 32,2 L32,30 C32,31.1045695 31.1045695,32 30,32 L2,32 C0.8954305,32 1.3527075e-16,31.1045695 0,30 L0,2 C-1.3527075e-16,0.8954305 0.8954305,2.02906125e-16 2,0 Z"
                                                    id="Rectangle-2-Copy-3" fill-rule="nonzero"></path>
                                                <path
                                                    d="M9.49927274,9 C10.5384703,9 11.3846154,9.82810603 11.3846154,10.8461538 C11.3846154,11.8642017 10.5384703,12.6923077 9.49927274,12.6923077 C8.45904829,12.6923077 7.61290323,11.8642017 7.61290323,10.8461538 C7.61290323,9.82810603 8.45904829,9 9.49927274,9 Z"
                                                    id="Path"
                                                    transform="translate(9.498759, 10.846154) scale(-1, 1) translate(-9.498759, -10.846154) ">
                                                </path>
                                                <path
                                                    d="M13.3544201,20.9990333 L7.37345658,20.9990333 C7.2894992,20.9990333 7.21253827,20.9555336 7.17155908,20.885934 C7.13057988,20.8153678 7.13157938,20.729335 7.17355806,20.6607021 L13.3754094,10.4875648 C13.4583673,10.3502989 13.6922486,10.3502989 13.7752064,10.4875648 L17.3883721,16.4160949 L19.811142,13.9926765 C19.8551197,13.9482101 19.9150893,13.9240436 19.9780573,13.9240436 L19.9860532,13.9240436 C20.0520198,13.9259769 20.1139883,13.9549767 20.155967,14.0042764 L25.8980518,20.5891692 C25.9590208,20.6297689 26,20.6984019 26,20.7757347 C26,20.8994673 25.8960528,21 25.7671182,21 L25.7561238,21 L19.7871542,21 L19.7761598,21 L13.3544201,21 L13.3544201,20.9990333 Z"
                                                    id="Path"
                                                    transform="translate(16.570720, 15.692308) scale(-1, 1) translate(-16.570720, -15.692308) ">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <div class="option__image__item__title">No margin</div>
                            </li>
                            <li class="option__image__item" data-name="page_margin" data-value="20">
                                <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-441.000000, -818.000000)" fill="#161616">
                                            <g transform="translate(441.000000, 818.000000)">
                                                <polygon id="Shape" fill-rule="nonzero" points="0 0 2 0 2 2 0 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="4 0 6 0 6 2 4 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 2 4 2 4 4 2 4">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 4 2 4 2 6 0 6">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 6 4 6 4 8 2 8">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 8 2 8 2 10 0 10">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 10 4 10 4 12 2 12">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 12 2 12 2 14 0 14">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 14 4 14 4 16 2 16">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 16 2 16 2 18 0 18">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 18 4 18 4 20 2 20">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 20 2 20 2 22 0 22">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 22 4 22 4 24 2 24">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 24 2 24 2 26 0 26">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 26 4 26 4 28 2 28">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 28 2 28 2 30 0 30">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="4 28 6 28 6 30 4 30">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 30 4 30 4 32 2 32">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="6 30 8 30 8 32 6 32">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="10 30 12 30 12 32 10 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="8 0 10 0 10 2 8 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="6 2 8 2 8 4 6 4">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="10 2 12 2 12 4 10 4">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="8 28 10 28 10 30 8 30">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="12 0 14 0 14 2 12 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="16 0 18 0 18 2 16 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="14 2 16 2 16 4 14 4">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="12 28 14 28 14 30 12 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="16 28 18 28 18 30 16 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="14 30 16 30 16 32 14 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="18 30 20 30 20 32 18 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="22 30 24 30 24 32 22 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="20 0 22 0 22 2 20 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="18 2 20 2 20 4 18 4">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="22 2 24 2 24 4 22 4">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="20 28 22 28 22 30 20 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="24 0 26 0 26 2 24 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 0 30 0 30 2 28 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="26 2 28 2 28 4 26 4">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 4 30 4 30 6 28 6">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 8 30 8 30 10 28 10">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="28 12 30 12 30 14 28 14"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="28 16 30 16 30 18 28 18"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="28 20 30 20 30 22 28 22"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="28 24 30 24 30 26 28 26"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="24 28 26 28 26 30 24 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="28 28 30 28 30 30 28 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="26 30 28 30 28 32 26 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="30 30 32 30 32 32 30 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 2 32 2 32 4 30 4">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 6 32 6 32 8 30 8">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="30 10 32 10 32 12 30 12"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="30 14 32 14 32 16 30 16"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="30 18 32 18 32 20 30 20"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="30 22 32 22 32 24 30 24"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="30 26 32 26 32 28 30 28"></polygon>
                                                <path
                                                    d="M10.8080731,11.1026393 C11.5787699,11.1026393 12.2062937,11.7299923 12.2062937,12.5012407 C12.2062937,13.272489 11.5787699,13.8998421 10.8080731,13.8998421 C10.0366148,13.8998421 9.40909091,13.272489 9.40909091,12.5012407 C9.40909091,11.7299923 10.0366148,11.1026393 10.8080731,11.1026393 Z"
                                                    id="Path"
                                                    transform="translate(10.807692, 12.501241) scale(-1, 1) translate(-10.807692, -12.501241) ">
                                                </path>
                                                <path
                                                    d="M13.6671536,20.1928161 L9.23151086,20.1928161 C9.16924582,20.1928161 9.11216953,20.1598617 9.08177826,20.1071348 C9.051387,20.0536755 9.05212825,19.9884991 9.08326077,19.9365045 L13.6827199,12.2295823 C13.7442437,12.125593 13.9176963,12.125593 13.9792201,12.2295823 L16.6588405,16.720893 L18.4556317,14.88497 C18.4882467,14.8512833 18.5327217,14.8329753 18.5794205,14.8329753 L18.5853505,14.8329753 C18.634273,14.83444 18.6802306,14.8564095 18.7113631,14.8937578 L22.969847,19.8823129 C23.0150633,19.9130703 23.0454545,19.9650649 23.0454545,20.0236504 C23.0454545,20.1173872 22.9683645,20.1935484 22.8727432,20.1935484 L22.8645894,20.1935484 L18.4378416,20.1935484 L18.4296879,20.1935484 L13.6671536,20.1935484 L13.6671536,20.1928161 Z"
                                                    id="Path"
                                                    transform="translate(16.052448, 16.172569) scale(-1, 1) translate(-16.052448, -16.172569) ">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <div class="option__image__item__title">Small</div>
                            </li>
                            <li class="option__image__item" data-name="page_margin" data-value="40">

                                <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-571.000000, -818.000000)" fill="#969696">
                                            <g transform="translate(571.000000, 818.000000)">
                                                <polygon id="Shape" fill-rule="nonzero" points="0 0 2 0 2 2 0 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="4 0 6 0 6 2 4 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 2 4 2 4 4 2 4">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 4 2 4 2 6 0 6">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="4 4 6 4 6 6 4 6">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 6 4 6 4 8 2 8">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 8 2 8 2 10 0 10">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 10 4 10 4 12 2 12">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 12 2 12 2 14 0 14">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 14 4 14 4 16 2 16">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 16 2 16 2 18 0 18">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 18 4 18 4 20 2 20">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 20 2 20 2 22 0 22">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 22 4 22 4 24 2 24">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 24 2 24 2 26 0 26">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 26 4 26 4 28 2 28">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 28 2 28 2 30 0 30">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="4 28 6 28 6 30 4 30">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 30 4 30 4 32 2 32">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="6 30 8 30 8 32 6 32">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="10 30 12 30 12 32 10 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="8 0 10 0 10 2 8 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="6 2 8 2 8 4 6 4">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="10 2 12 2 12 4 10 4">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="8 28 10 28 10 30 8 30">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="12 0 14 0 14 2 12 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="16 0 18 0 18 2 16 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="14 2 16 2 16 4 14 4">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="12 28 14 28 14 30 12 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="16 28 18 28 18 30 16 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="14 30 16 30 16 32 14 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="18 30 20 30 20 32 18 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="22 30 24 30 24 32 22 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="20 0 22 0 22 2 20 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="18 2 20 2 20 4 18 4">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="22 2 24 2 24 4 22 4">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="20 28 22 28 22 30 20 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="24 0 26 0 26 2 24 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 0 30 0 30 2 28 2">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="26 2 28 2 28 4 26 4">
                                                </polygon>
                                                <path
                                                    d="M26,4 L24,4 L24,6 L22,6 L22,4 L20,4 L20,6 L18,6 L18,4 L16,4 L16,6 L14,6 L14,4 L12,4 L12,6 L10,6 L10,4 L8,4 L8,6 L6,6 L6,8 L4,8 L4,10 L6,10 L6,12 L4,12 L4,14 L6,14 L6,16 L4,16 L4,18 L6,18 L6,20 L4,20 L4,22 L6,22 L6,24 L4,24 L4,26 L6,26 L6,28 L8,28 L8,26 L10,26 L10,28 L12,28 L12,26 L14,26 L14,28 L16,28 L16,26 L18,26 L18,28 L20,28 L20,26 L22,26 L22,28 L24,28 L24,26 L26,26 L26,24 L28,24 L28,22 L26,22 L26,20 L28,20 L28,18 L26,18 L26,16 L28,16 L28,14 L26,14 L26,12 L28,12 L28,10 L26,10 L26,8 L28,8 L28,6 L26,6 L26,4 Z M24,24 L8,24 L8,8 L24,8 L24,24 Z"
                                                    id="Shape" fill-rule="nonzero"></path>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 4 30 4 30 6 28 6">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 8 30 8 30 10 28 10">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="28 12 30 12 30 14 28 14"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="28 16 30 16 30 18 28 18"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="28 20 30 20 30 22 28 22"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="28 24 30 24 30 26 28 26"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="26 26 28 26 28 28 26 28"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="24 28 26 28 26 30 24 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="28 28 30 28 30 30 28 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="26 30 28 30 28 32 26 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="30 30 32 30 32 32 30 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 2 32 2 32 4 30 4">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 6 32 6 32 8 30 8">
                                                </polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="30 10 32 10 32 12 30 12"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="30 14 32 14 32 16 30 16"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="30 18 32 18 32 20 30 20"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="30 22 32 22 32 24 30 24"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero"
                                                         points="30 26 32 26 32 28 30 28"></polygon>
                                                <path
                                                    d="M12.2484141,12.3636364 C12.8053047,12.3636364 13.2587413,12.8169495 13.2587413,13.3742387 C13.2587413,13.9315278 12.8053047,14.384841 12.2484141,14.384841 C11.6909732,14.384841 11.2375367,13.9315278 11.2375367,13.3742387 C11.2375367,12.8169495 11.6909732,12.3636364 12.2484141,12.3636364 Z"
                                                    id="Path"
                                                    transform="translate(12.248139, 13.374239) scale(-1, 1) translate(-12.248139, -13.374239) ">
                                                </path>
                                                <path
                                                    d="M14.3143304,18.9320222 L11.1092207,18.9320222 C11.0642292,18.9320222 11.022987,18.90821 11.0010269,18.8701105 C10.9790667,18.8314819 10.9796023,18.7843867 11.0020981,18.7468164 L14.3255783,13.1779436 C14.3700342,13.1028029 14.4953677,13.1028029 14.5398236,13.1779436 L16.4760654,16.4232778 L17.7743919,15.0966753 C17.7979589,15.072334 17.8300957,15.059105 17.8638393,15.059105 L17.8681242,15.059105 C17.9034747,15.0601633 17.9366827,15.0760381 17.9591785,15.1030252 L21.0362765,18.7076586 C21.0689489,18.7298833 21.0909091,18.7674536 21.0909091,18.8097864 C21.0909091,18.8775187 21.0352053,18.9325513 20.9661112,18.9325513 L20.9602195,18.9325513 L17.7615372,18.9325513 L17.7556454,18.9325513 L14.3143304,18.9325513 L14.3143304,18.9320222 Z"
                                                    id="Path"
                                                    transform="translate(16.037898, 16.027070) scale(-1, 1) translate(-16.037898, -16.027070) ">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <div class="option__image__item__title">Big</div>
                            </li>
                        </ul>
                    </div>
                    <div class="option__panel__content">
                        <p class="option__title">HTML Settings</p>
                        <div style="margin:8px;"></div>
                        <div class="form__group" style=" margin-top: 4px;">
                            <div class="form__group--inline-spaced">
                                <div class="form__group  checkbox">
                                    <input type="checkbox" name="block_ads" class="checkbox option" id="block_ads">
                                    <label for="block_ads">
                                        Try to block ads </label>
                                </div>
                            </div>
                        </div>
                        <div style="margin:8px;"></div>
                        <div class="form__group" style=" margin-top: 4px;">
                            <div class="form__group--inline-spaced">
                                <div class="form__group  checkbox">
                                    <input type="checkbox" name="remove_popups" class="checkbox option"
                                           id="remove_popups">
                                    <label for="remove_popups">
                                        <span>
                                            Remove overlay popups <div class="moreinfo tooltip"
                                                                       style="display:inline-flex"
                                                                       title="Enabling this option may cause conversion issues. We suggest you to disable it if you see a bad page preview">
                                                <svg height="20" viewBox="0 0 9 20" width="9"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g fill="#E5322D" fill-rule="evenodd">
                                                        <path
                                                            d="m5.33334546 5.7271381c1.5536381.0152627 2.83310477-1.26922169 2.84833652-2.84097724.01523175-1.58671601-1.24900318-2.87120039-2.83310477-2.88616086-1.58410159 0-2.87880001 1.25411011-2.89403176 2.84082612 0 1.57160443 1.27946668 2.8712004 2.87880001 2.88631198" />
                                                        <path
                                                            d="m8.31443906 17.0283037c-.253125.0944704-.4921875.2699156-.7453125.3643861-.3234375.121597-.646875.2294283-.984375.2699156-.4078125.0404874-.703125-.1619494-.8015625-.5398313-.0703125-.2832764-.1125-.5936794-.084375-.8772258.0703125-.6073102.196875-1.2009897.309375-1.8082999.3375-1.8085699.703125-3.6170047 1.0265625-5.43893537.084375-.48584818.1828125-.98519213.16875-1.48453609-.0140625-.59367947-.3796875-.87722586-.9984375-.87722586h-2.5734375-2.4328125c-.196875 0-.4078125.01363074-.6046875.0406223-.3796875.06747892-.5625.24292409-.590625.52620057-.028125.25655482.1125.51283973.4640625.63430178.28125.09460543.5765625.121597.871875.16208434.675.09447048.9.32376383.9.98505717 0 .10796627-.0140625.20243674-.028125.310403-.28125 1.59250236-.590625 3.17150886-.871875 4.76401126-.1546875.9178482-.309375 1.8219306-.4359375 2.7397788-.196875 1.3359475 1.153125 2.604686 2.2078125 2.7396439.6328125.0808397 1.2796875.1078313 1.9265625.0944704 1.378125-.0136307 2.53125-.5804536 3.5015625-1.5115276.16875-.1620843.309375-.3915127.365625-.6073102.1125-.3778819-.196875-.6344368-.590625-.4859831" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div style="margin:8px;"></div>
                        <!--
        <div class="form__group" style=" margin-top: 4px;">
            <div class="form__group--inline-spaced">
                <div class="form__group  checkbox">
                    <input type="checkbox" name="remove_background" class="checkbox option" id="remove_background">
                    <label for="remove_background">
                        Remove backgrounds                    </label>
                </div>
            </div>
        </div>
        -->
                    </div>
                </div>
            </div>

            <button id="settingsRefresh" class="btn btn--sm htmlpdf">Preview <span>
                    <svg width="16px" height="11px" viewBox="0 0 16 11" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="----↳-PDF---HTML-to-PDF" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="by-URL-Sidebar-Copy-6" transform="translate(-1199.000000, -653.000000)"
                               fill="#FFFFFF">
                                <g id="Group-2-Copy" transform="translate(1000.000000, 644.000000)">
                                    <g id="Group-10" transform="translate(135.000000, 8.000000)">
                                        <path
                                            d="M71.9998121,1 C68.3637389,1 65.2580047,3.16324721 64,6.2173913 C65.2580047,9.27117588 68.3637389,11.4347826 71.9998121,11.4347826 C75.6362611,11.4347826 78.7416195,9.27117588 80,6.2173913 C78.7416195,3.16324721 75.6362611,1 71.9998121,1 L71.9998121,1 Z M71.9998121,9.69541249 C69.9927177,9.69541249 68.3637389,8.13724174 68.3637389,6.2173913 C68.3637389,4.29718134 69.9927177,2.73901059 71.9998121,2.73901059 C74.0072823,2.73901059 75.6362611,4.29718134 75.6362611,6.2173913 C75.6362611,8.13724174 74.0072823,9.69541249 71.9998121,9.69541249 L71.9998121,9.69541249 Z M71.9998121,4.13036288 C70.7925486,4.13036288 69.8179426,5.06260486 69.8179426,6.2173913 C69.8179426,7.37217775 70.7925486,8.30441973 71.9998121,8.30441973 C73.2070756,8.30441973 74.1816815,7.37217775 74.1816815,6.2173913 C74.1816815,5.06260486 73.2070756,4.13036288 71.9998121,4.13036288 L71.9998121,4.13036288 Z"
                                            id="Fill-29"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg></span>
            </button>
        </div>

        <div id="process" class="process">
            <p id="processText" class="processAction title2">Converting HTML to PDF...</p>
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
            var ilovepdfConfig = { "action": "tool", "fp": 1, "fpt": 7, "tool": "htmlpdf", "site": "ilovepdf", "subtool": "htmlpdf", "toolText": "Convert to PDF", "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiIiLCJhdWQiOiIiLCJpYXQiOjE1MjMzNjQ4MjQsIm5iZiI6MTUyMzM2NDgyNCwianRpIjoicHJvamVjdF9wdWJsaWNfYzkwNWRkMWMwMWU5ZmQ3NzY5ODNjYTQwZDBhOWQyZjNfT1Vzd2EwODA0MGI4ZDJjN2NhM2NjZGE2MGQ2MTBhMmRkY2U3NyJ9.qvHSXgCJgqpC4gd6-paUlDLFmg0o2DsOvb1EUYPYx_E", "parentId": null, "preWorker": null, "defaultOptions": [], "fileLimits": { "merge": { "mb": 100, "files": 25 }, "split": { "mb": 100, "files": 1 }, "compress": { "mb": 200, "files": 2 }, "officepdf": { "mb": 15, "files": 1 }, "wordpdf": { "mb": 15, "files": 1 }, "powerpointpdf": { "mb": 15, "files": 1 }, "excelpdf": { "mb": 15, "files": 1 }, "pdfoffice": { "mb": 15, "files": 1 }, "pdfword": { "mb": 15, "files": 1 }, "pdfocr": { "mb": 15, "files": 1, "pages": 50 }, "pdfpowerpoint": { "mb": 15, "files": 1 }, "pdfexcel": { "mb": 15, "files": 1, "pages": 500 }, "pdfjpg": { "mb": 25, "files": 2 }, "imagepdf": { "mb": 40, "files": 20 }, "pagenumber": { "mb": 100, "files": 2 }, "watermark": { "mb": 100, "files": 2 }, "rotate": { "mb": 100, "files": 20 }, "unlock": { "mb": 100, "files": 2 }, "protect": { "mb": 100, "files": 2 }, "pdfa": { "mb": 100, "files": 1 }, "repair": { "mb": 100, "files": 1 }, "organize": { "mb": 100, "files": 5 }, "resizeimage": { "mb": 200, "files": 30 }, "compressimage": { "mb": 200, "files": 30 }, "cropimage": { "mb": 90, "files": 1 }, "converttojpg": { "mb": 200, "files": 30 }, "convertfromjpg": { "mb": 200, "files": 30 }, "rotateimage": { "mb": 200, "files": 30 }, "watermarkimage": { "mb": 200, "files": 30 }, "memeimage": { "mb": 200, "files": 1 }, "editimage": { "mb": 50, "files": 1 }, "editpdf": { "mb": 100, "files": 1 }, "sign": { "mb": 50, "files": 3 }, "upscaleimage": { "mb": 6, "files": 3, "pxsize": 2073600 }, "blurfaceimage": { "mb": 100, "files": 10 } }, "allFileLimits": { "limits": { "merge": { "mb": 100, "files": 25 }, "split": { "mb": 100, "files": 1 }, "compress": { "mb": 200, "files": 2 }, "officepdf": { "mb": 15, "files": 1 }, "wordpdf": { "mb": 15, "files": 1 }, "powerpointpdf": { "mb": 15, "files": 1 }, "excelpdf": { "mb": 15, "files": 1 }, "pdfoffice": { "mb": 15, "files": 1 }, "pdfword": { "mb": 15, "files": 1 }, "pdfocr": { "mb": 15, "files": 1, "pages": 50 }, "pdfpowerpoint": { "mb": 15, "files": 1 }, "pdfexcel": { "mb": 15, "files": 1, "pages": 500 }, "pdfjpg": { "mb": 25, "files": 2 }, "imagepdf": { "mb": 40, "files": 20 }, "pagenumber": { "mb": 100, "files": 2 }, "watermark": { "mb": 100, "files": 2 }, "rotate": { "mb": 100, "files": 20 }, "unlock": { "mb": 100, "files": 2 }, "protect": { "mb": 100, "files": 2 }, "pdfa": { "mb": 100, "files": 1 }, "repair": { "mb": 100, "files": 1 }, "organize": { "mb": 100, "files": 5 }, "resizeimage": { "mb": 200, "files": 30 }, "compressimage": { "mb": 200, "files": 30 }, "cropimage": { "mb": 90, "files": 1 }, "converttojpg": { "mb": 200, "files": 30 }, "convertfromjpg": { "mb": 200, "files": 30 }, "rotateimage": { "mb": 200, "files": 30 }, "watermarkimage": { "mb": 200, "files": 30 }, "memeimage": { "mb": 200, "files": 1 }, "editimage": { "mb": 50, "files": 1 }, "editpdf": { "mb": 100, "files": 1 }, "sign": { "mb": 50, "files": 3 }, "upscaleimage": { "mb": 6, "files": 3, "pxsize": 2073600 }, "blurfaceimage": { "mb": 100, "files": 10 } }, "registered_limits": { "merge": { "mb": 100, "files": 25 }, "split": { "mb": 100, "files": 1 }, "compress": { "mb": 200, "files": 2 }, "officepdf": { "mb": 15, "files": 1 }, "wordpdf": { "mb": 15, "files": 1 }, "powerpointpdf": { "mb": 15, "files": 1 }, "excelpdf": { "mb": 15, "files": 1 }, "pdfoffice": { "mb": 15, "files": 1 }, "pdfword": { "mb": 15, "files": 1 }, "pdfocr": { "mb": 15, "files": 1, "pages": 50 }, "pdfpowerpoint": { "mb": 15, "files": 1 }, "pdfexcel": { "mb": 15, "files": 1, "pages": 500 }, "pdfjpg": { "mb": 25, "files": 2 }, "imagepdf": { "mb": 40, "files": 20 }, "pagenumber": { "mb": 100, "files": 2 }, "watermark": { "mb": 100, "files": 2 }, "rotate": { "mb": 100, "files": 20 }, "unlock": { "mb": 100, "files": 2 }, "protect": { "mb": 100, "files": 2 }, "pdfa": { "mb": 100, "files": 1 }, "repair": { "mb": 100, "files": 1 }, "organize": { "mb": 100, "files": 5 }, "resizeimage": { "mb": 200, "files": 30 }, "compressimage": { "mb": 200, "files": 30 }, "cropimage": { "mb": 90, "files": 1 }, "converttojpg": { "mb": 200, "files": 30 }, "convertfromjpg": { "mb": 200, "files": 30 }, "rotateimage": { "mb": 200, "files": 30 }, "watermarkimage": { "mb": 200, "files": 30 }, "memeimage": { "mb": 200, "files": 1 }, "editimage": { "mb": 50, "files": 1 }, "editpdf": { "mb": 100, "files": 1 }, "sign": { "mb": 50, "files": 3 }, "upscaleimage": { "mb": 6, "files": 3, "pxsize": 2073600 }, "blurfaceimage": { "mb": 100, "files": 10 } }, "premium_limits": { "merge": { "mb": 4000, "files": 500 }, "split": { "mb": 4000, "files": 1 }, "compress": { "mb": 4000, "files": 10 }, "officepdf": { "mb": 4000, "files": 10 }, "wordpdf": { "mb": 4000, "files": 10 }, "powerpointpdf": { "mb": 4000, "files": 10 }, "excelpdf": { "mb": 4000, "files": 10 }, "pdfword": { "mb": 4000, "files": 10 }, "pdfocr": { "mb": 4000, "files": 10, "pages": 1000 }, "pdfpowerpoint": { "mb": 4000, "files": 10 }, "pdfexcel": { "mb": 4000, "files": 10, "pages": 1000 }, "pdfoffice": { "mb": 4000, "files": 10 }, "pdfjpg": { "mb": 4000, "files": 10 }, "imagepdf": { "mb": 4000, "files": 80 }, "pagenumber": { "mb": 4000, "files": 10 }, "watermark": { "mb": 4000, "files": 10 }, "rotate": { "mb": 4000, "files": 80 }, "unlock": { "mb": 4000, "files": 10 }, "protect": { "mb": 4000, "files": 80 }, "pdfa": { "mb": 4000, "files": 10 }, "repair": { "mb": 4000, "files": 10 }, "organize": { "mb": 4000, "files": 20 }, "resizeimage": { "mb": 4000, "files": 120 }, "compressimage": { "mb": 4000, "files": 120 }, "cropimage": { "mb": 4000, "files": 1 }, "converttojpg": { "mb": 4000, "files": 120 }, "convertfromjpg": { "mb": 4000, "files": 120 }, "rotateimage": { "mb": 4000, "files": 120 }, "watermarkimage": { "mb": 4000, "files": 120 }, "memeimage": { "mb": 4000, "files": 1 }, "editimage": { "mb": 50, "files": 1 }, "editpdf": { "mb": 100, "files": 1 }, "sign": { "mb": 50, "files": 5 }, "upscaleimage": { "mb": 6, "files": 3, "pxsize": 2073600 }, "blurfaceimage": { "mb": 4000, "files": 120 } }, "temp_limits": { "merge": { "mb": 1000, "files": 80 }, "split": { "mb": 1000, "files": 1 }, "compress": { "mb": 1000, "files": 3 }, "officepdf": { "mb": 1000, "files": 3 }, "wordpdf": { "mb": 100, "files": 3 }, "powerpointpdf": { "mb": 100, "files": 3 }, "excelpdf": { "mb": 100, "files": 3 }, "pdfword": { "mb": 100, "files": 1 }, "pdfocr": { "mb": 100, "files": 1, "pages": 100 }, "pdfpowerpoint": { "mb": 100, "files": 1 }, "pdfexcel": { "mb": 100, "files": 1, "pages": 500 }, "pdfoffice": { "mb": 100, "files": 1 }, "pdfjpg": { "mb": 100, "files": 3 }, "imagepdf": { "mb": 1000, "files": 80 }, "pagenumber": { "mb": 1000, "files": 3 }, "watermark": { "mb": 1000, "files": 3 }, "rotate": { "mb": 1000, "files": 30 }, "unlock": { "mb": 1000, "files": 10 }, "protect": { "mb": 1000, "files": 5 }, "pdfa": { "mb": 100, "files": 1 }, "repair": { "mb": 1000, "files": 2 }, "organize": { "mb": 1000, "files": 5 }, "resizeimage": { "mb": 1000, "files": 60 }, "compressimage": { "mb": 1000, "files": 60 }, "cropimage": { "mb": 1000, "files": 1 }, "converttojpg": { "mb": 5000, "files": 60 }, "convertfromjpg": { "mb": 1000, "files": 60 }, "rotateimage": { "mb": 1000, "files": 60 }, "watermarkimage": { "mb": 1000, "files": 60 }, "memeimage": { "mb": 1000, "files": 1 }, "editimage": { "mb": 50, "files": 1 }, "editpdf": { "mb": 100, "files": 1 }, "sign": { "mb": 50, "files": 3 }, "upscaleimage": { "mb": 6, "files": 3, "pxsize": 2073600 }, "blurfaceimage": { "mb": 150, "files": 15 } } }, "servers": ["\/\/api32.ilovepdf.com"], "level": "user", "downloadUrl": "\/download", "user": null, "country": "PK", "dtr": true };
            ilovepdfConfig.taskId = 'syAw6wrxqh8r2f8jyj8886lAcyfgpdly3fAdrhlw3nkq5cgr7t27tfk4kyn22ys6dwckchcdfkzvdnyk5tkn9bfmschkdjxmz56ccc105Aswv49pbkrmh5z9n2zcyjr980rzrdbbtlrcfrf132v9j4vzjbc6n4hpdl5syw4lzxzdn1065fr1';
            iloveLang['Click to refresh changes'] = 'Click to refresh changes';
            iloveLang['Your screen'] = 'Your screen';
            iloveLang.waitnotify = 'Do not close your browser. This might take a few minutes. :)';

        </script>

        <style>
            canvas {
                width: 100%;
                height: auto;
            }
        </style>
        <div class="modal fade" id="htmlModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add HTML to convert from</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                <path
                                    d="M12 1.208L10.79 0 6 4.792 1.21 0 0 1.208 4.79 6 0 10.792 1.21 12 6 7.208 10.79 12 12 10.792 7.21 6z"
                                    fill="#383E45" fill-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="html-to-pdf.html#url"
                                   role="tab" aria-controls="home" aria-selected="true">Url</a>
                            </li>
                            <!--
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#zipfile" role="tab"
                           aria-controls="profile" aria-selected="false">Files</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="messages-tab" data-toggle="tab" href="#html" role="tab"
                           aria-controls="messages" aria-selected="false">Html</a>
                    </li>
                    -->
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="url" role="tabpanel" aria-labelledby="home-tab">
                                <div class="form__group">
                                    <label>Write the website URL</label>
                                    <div class="input--icon input--url">
                                        <form>
                                            <input id="inputWeb" type="text" class="input"
                                                   placeholder="Example: https://ilovepdf.com">
                                        </form>
                                    </div>
                                    <p class="errorMsg">The given URL is invalid. Please check to see if it is written
                                        correctly.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="zipfile" role="tabpanel" aria-labelledby="profile-tab">
                                <p>Select your web files here or just drag and drop them here.</p>
                                <p>Files can be <strong>html</strong>, <strong>css</strong> or <strong>js</strong>
                                    types. If your website has multiple files, you can also upload a
                                    <strong>zip</strong> file.</p>
                            </div>
                            <div class="tab-pane" id="html" role="tabpanel" aria-labelledby="messages-tab">
                                <div class="form__group">
                                    <label>Paste HTML Text</label>
                                    <textarea></textarea>
                                </div>
                            </div>
                            <!--
                    Upload                    Upload your HTML files or drag and drop them here.                    Files can be in HTML or CSS format. To convert multiple files, you can upload a ZIP file.                    The selected file doesn’t seem to include CSS styles. Your web page will be converted without format.                    Edit HTML Code                    CODE                    Apply                    -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" id="addWeb">Add</button>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .tab-content>.active {
                border-color: transparent;
            }

            .editor {
                padding-top: 0;
            }
        </style>
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
            csrfToken: 'Qor0VDawrYrkaxVcza0S9G-5VaIaiKPTY851BjBsKtgN3K4gcsmav9AfOBCo2WSuWPMy9kvZ9pEmpj9QYDxyrw=='
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
