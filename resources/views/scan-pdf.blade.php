@extends('layouts.index')
@section('title','Scan documents to PDF online - Free document scanner')
@section('content')
    <div class="main">

        <div class="tool">
            <div class="tool__workarea" id="workArea">
                <div class="tool__header">
                    <h1 class="tool__header__title">Scan to PDF</h1>
                    <h2 class="tool__header__subtitle">Scan documents from your smartphone to your browser</h2>
                </div>

                <main id="context">
                    <div data-state="ShowQrState">
                        <div data-screen="default" class="d-flex justify-content-center">
                            <div class="row">
                                <div class="col-12 col-md-6 d-flex justify-content-center" style="margin-bottom: 32px;">
                                    <div class="card" style="width: 360px; max-width: 100%; height: 100%; padding: 32px; margin-bottom: 0;">
                                        <div>
                                            <p class="title2">Step 1</p>
                                            <p>Use your smartphone's camera to scan this QR code</p>
                                        </div>
                                        <div style="display: flex; justify-content: center; margin-top: 32px;">
                                            <img style='width: 176px; height: 176px' src='data:image/png;base64,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' alt='QR Code' data-title='https://ws1.ilovepdf.com/link?wsWorkerHost=wss%3A%2F%2Fws1.ilovepdf.com&apiWorkerHost=api56.ilovepdf.com&taskId=zx5gv694dw6rb9p5p78ssrp0d0qs2dkr89mftAxx7zk4n93mky9hjpdx2dwglkpfx172m5ms4ybbsztbgv4yz1qm4b6qg833gnhgh2wx96p082xyAb2ryA3s280kl1m996At75zmf83x4nAwtkpx19x4r0f79ypjngmA4fdqfvh94sbp35x1' />                                </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 d-flex justify-content-center" style="margin-bottom: 32px;">
                                    <div class="card" style="width: 360px; max-width: 100%; height: 100%; padding: 32px; opacity: 0.25; box-shadow: none; margin-bottom: 0;">
                                        <div>
                                            <p class="title2">Step 2</p>
                                            <p><span class="small">Disconnected 📴</span></p>
                                            <p>To scan your documents, please follow the instructions on your mobile screen, and tap <i>Save</i> when you're done</p>
                                            <p><strong>Do not close this tab.</strong></p>
                                        </div>
                                        <img src="img/tools/scan/scan-qr.svg" alt="Scan QR" style="margin-top: 16px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-state="WaitingState" style="display: none;">
                        <div data-screen="default" class="d-flex justify-content-center">
                            <div class="row">
                                <div class="col-12 col-md-6 d-flex justify-content-center" style="margin-bottom: 32px;">
                                    <div class="card" style="width: 360px; max-width: 100%; height: 100%; padding: 32px; margin-bottom: 0;">
                                        <div>
                                            <p class="title2">Step 1</p>
                                        </div>
                                        <img src="img/tools/scan/scan-progress.gif" alt="Progress" style="width: 100%; align-self: center; margin-top: 48px; margin-bottom: 32px;" />
                                        <p style="font-weight: 600;">Searching for iLovePDF Mobile...</p>
                                        <p>... to connect with your mobile device.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 d-flex justify-content-center" style="margin-bottom: 32px;">
                                    <div class="card" style="width: 360px; max-width: 100%; height: 100%; padding: 32px; opacity: 0.25; box-shadow: none; margin-bottom: 0;">
                                        <div>
                                            <p class="title2">Step 2</p>
                                            <p><span class="small">Disconnected 📴</span></p>
                                            <p>To scan your documents, please follow the instructions on your mobile screen, and tap <i>Save</i> when you're done</p>
                                            <p><strong>Do not close this tab.</strong></p>
                                        </div>
                                        <img src="img/tools/scan/scan-qr.svg" alt="Scan QR" style="margin-top: 16px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-state="TimeoutState" style="display: none;">
                        <div data-screen="default" class="d-flex justify-content-center">
                            <div class="row">
                                <!-- Template here. -->
                                <div class="col-12 col-md-6 d-flex justify-content-center" style="margin-bottom: 32px;">
                                    <div class="card" style="width: 360px; max-width: 100%; height: 100%; padding: 32px; opacity: 0.25; box-shadow: none; margin-bottom: 0;">
                                        <div>
                                            <p class="title2">Step 2</p>
                                            <p><span class="small">Disconnected 📴</span></p>
                                            <p>To scan your documents, please follow the instructions on your mobile screen, and tap <i>Save</i> when you're done</p>
                                            <p><strong>Do not close this tab.</strong></p>
                                        </div>
                                        <img src="img/tools/scan/scan-qr.svg" alt="Scan QR" style="margin-top: 16px;" />
                                    </div>
                                    <div style="position: absolute; right: 16px; bottom: -32px; z-index: 10001;">
                                        <svg width="18" height="19" viewBox="0 0 18 19" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 11.24v2.005a.703.703 0 0 1-.703.703h-1.969a.703.703 0 1 1 0-1.406h1.266V11.24a.703.703 0 1 1 1.406 0zM8.297 7.797A.703.703 0 0 0 9 7.092V5.51h.703a.703.703 0 0 0 .703-.703V.87a.703.703 0 0 0-.729-.703.714.714 0 0 0-.677.72v.545h-.703a.703.703 0 1 0 0 1.407H9v1.265h-.703a.703.703 0 0 0-.703.703v2.285c0 .389.315.704.703.704zM.703 10.538a.703.703 0 0 0 .703-.703v-.703h.739a.703.703 0 1 0 0-1.407H.703A.703.703 0 0 0 0 8.428v1.407c0 .388.315.703.703.703zM11.11 9.132h1.899v2.092c0 .381.296.706.677.72.4.014.73-.306.73-.703v-.703h.737a.703.703 0 1 0 0-1.406h-.738v-.704a.703.703 0 0 0-.703-.703h-2.602a.703.703 0 1 0 0 1.407zm6.188-1.407a.703.703 0 1 0 0 1.406.703.703 0 0 0 0-1.406zm-6.188 2.813a.703.703 0 0 0-.703.703v1.3h-.351a.703.703 0 1 0 0 1.407h1.054a.703.703 0 0 0 .704-.703V11.24a.703.703 0 0 0-.704-.703zm0 6.222h-.703v-.703a.703.703 0 0 0-.703-.703H9v-.703a.703.703 0 1 0-1.406 0v1.406c0 .389.315.703.703.703H9v.704c0 .388.315.703.703.703h1.406a.703.703 0 1 0 0-1.407zm2.813-1.406a.703.703 0 0 0-.703-.703h-.352a.703.703 0 1 0 0 1.406h.352a.703.703 0 0 0 .703-.703zm3.375 1.406h-.563v-.703a.703.703 0 1 0-1.406 0v.703h-1.406a.703.703 0 1 0 0 1.407h3.375a.703.703 0 1 0 0-1.407zm-9-4.921A.703.703 0 0 0 9 11.135v-1.3a.703.703 0 0 0-.703-.703H5.766v-.687a.714.714 0 0 0-.678-.72.703.703 0 0 0-.729.703v.704h-.351a.703.703 0 1 0 0 1.406h3.586v.597c0 .389.315.704.703.704zM0 4.385V2.276C0 1.113.946.166 2.11.166h2.109c1.163 0 2.11.947 2.11 2.11v2.11c0 1.163-.947 2.109-2.11 2.109h-2.11A2.112 2.112 0 0 1 0 4.385zm1.406 0c0 .388.316.704.703.704h2.11a.704.704 0 0 0 .703-.704V2.276a.704.704 0 0 0-.703-.703h-2.11a.704.704 0 0 0-.703.703v2.11zm1.758-.351a.703.703 0 1 0 0-1.406.703.703 0 0 0 0 1.406zM18 2.276v2.11c0 1.163-.946 2.109-2.11 2.109h-2.109a2.112 2.112 0 0 1-2.11-2.11V2.276c0-1.163.947-2.11 2.11-2.11h2.11c1.163 0 2.109.947 2.109 2.11zm-1.406 0a.704.704 0 0 0-.703-.703h-2.11a.704.704 0 0 0-.703.703v2.11c0 .387.316.703.703.703h2.11a.704.704 0 0 0 .703-.704V2.276zm-1.758.352a.703.703 0 1 0 0 1.406.703.703 0 0 0 0-1.406zm-8.508 11.32v2.11c0 1.162-.946 2.109-2.11 2.109H2.11A2.112 2.112 0 0 1 0 16.057v-2.11c0-1.162.946-2.108 2.11-2.108h2.109c1.163 0 2.11.946 2.11 2.109zm-1.406 0a.704.704 0 0 0-.703-.703h-2.11a.704.704 0 0 0-.703.703v2.11c0 .387.316.702.703.702h2.11a.704.704 0 0 0 .703-.703v-2.11zm-1.758.351a.703.703 0 1 0 0 1.407.703.703 0 0 0 0-1.407z" fill="#E5322D" fill-rule="nonzero"/>
                                        </svg>
                                        <a href="scan-pdf.html#" data-rescan style="margin-left: 8px; text-decoration: underline;">Re-scan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-state="AppOpenedState" style="display: none;">
                        <div data-screen="default" class="d-flex justify-content-center">
                            <div class="row">
                                <!-- Template here. -->
                                <div class="col-12 col-md-6 d-flex justify-content-center" style="margin-bottom: 32px;">
                                    <div class="card" style="width: 360px; max-width: 100%; height: 100%; padding: 32px; margin-bottom: 0;">
                                        <div>
                                            <p class="title2">Step 2</p>
                                            <p id="connection-message"><span class="small">Connected to: <strong><span data-slot="device-name">device-name</span> <span data-slot="device-model">device-model</span></strong> 📱</span></p>
                                            <p data-js="displayOnUser" class="d-none">Hi, <strong data-slot="user">User</strong>! To scan your documents, please follow the instructions on your mobile screen, and tap <i>Save</i> when you're done</p>
                                            <p data-js="displayOnGuest" class="d-none">To scan your documents, please follow the instructions on your mobile screen, and tap <i>Save</i> when you're done</p>
                                            <p><strong>Do not close this tab.</strong></p>
                                        </div>
                                        <img src="img/tools/scan/scan-qr.gif" alt="Scan QR" style="margin-top: 16px;" />
                                    </div>
                                    <div style="position: absolute; right: 16px; bottom: -32px; z-index: 10001;">
                                        <svg width="18" height="19" viewBox="0 0 18 19" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 11.24v2.005a.703.703 0 0 1-.703.703h-1.969a.703.703 0 1 1 0-1.406h1.266V11.24a.703.703 0 1 1 1.406 0zM8.297 7.797A.703.703 0 0 0 9 7.092V5.51h.703a.703.703 0 0 0 .703-.703V.87a.703.703 0 0 0-.729-.703.714.714 0 0 0-.677.72v.545h-.703a.703.703 0 1 0 0 1.407H9v1.265h-.703a.703.703 0 0 0-.703.703v2.285c0 .389.315.704.703.704zM.703 10.538a.703.703 0 0 0 .703-.703v-.703h.739a.703.703 0 1 0 0-1.407H.703A.703.703 0 0 0 0 8.428v1.407c0 .388.315.703.703.703zM11.11 9.132h1.899v2.092c0 .381.296.706.677.72.4.014.73-.306.73-.703v-.703h.737a.703.703 0 1 0 0-1.406h-.738v-.704a.703.703 0 0 0-.703-.703h-2.602a.703.703 0 1 0 0 1.407zm6.188-1.407a.703.703 0 1 0 0 1.406.703.703 0 0 0 0-1.406zm-6.188 2.813a.703.703 0 0 0-.703.703v1.3h-.351a.703.703 0 1 0 0 1.407h1.054a.703.703 0 0 0 .704-.703V11.24a.703.703 0 0 0-.704-.703zm0 6.222h-.703v-.703a.703.703 0 0 0-.703-.703H9v-.703a.703.703 0 1 0-1.406 0v1.406c0 .389.315.703.703.703H9v.704c0 .388.315.703.703.703h1.406a.703.703 0 1 0 0-1.407zm2.813-1.406a.703.703 0 0 0-.703-.703h-.352a.703.703 0 1 0 0 1.406h.352a.703.703 0 0 0 .703-.703zm3.375 1.406h-.563v-.703a.703.703 0 1 0-1.406 0v.703h-1.406a.703.703 0 1 0 0 1.407h3.375a.703.703 0 1 0 0-1.407zm-9-4.921A.703.703 0 0 0 9 11.135v-1.3a.703.703 0 0 0-.703-.703H5.766v-.687a.714.714 0 0 0-.678-.72.703.703 0 0 0-.729.703v.704h-.351a.703.703 0 1 0 0 1.406h3.586v.597c0 .389.315.704.703.704zM0 4.385V2.276C0 1.113.946.166 2.11.166h2.109c1.163 0 2.11.947 2.11 2.11v2.11c0 1.163-.947 2.109-2.11 2.109h-2.11A2.112 2.112 0 0 1 0 4.385zm1.406 0c0 .388.316.704.703.704h2.11a.704.704 0 0 0 .703-.704V2.276a.704.704 0 0 0-.703-.703h-2.11a.704.704 0 0 0-.703.703v2.11zm1.758-.351a.703.703 0 1 0 0-1.406.703.703 0 0 0 0 1.406zM18 2.276v2.11c0 1.163-.946 2.109-2.11 2.109h-2.109a2.112 2.112 0 0 1-2.11-2.11V2.276c0-1.163.947-2.11 2.11-2.11h2.11c1.163 0 2.109.947 2.109 2.11zm-1.406 0a.704.704 0 0 0-.703-.703h-2.11a.704.704 0 0 0-.703.703v2.11c0 .387.316.703.703.703h2.11a.704.704 0 0 0 .703-.704V2.276zm-1.758.352a.703.703 0 1 0 0 1.406.703.703 0 0 0 0-1.406zm-8.508 11.32v2.11c0 1.162-.946 2.109-2.11 2.109H2.11A2.112 2.112 0 0 1 0 16.057v-2.11c0-1.162.946-2.108 2.11-2.108h2.109c1.163 0 2.11.946 2.11 2.109zm-1.406 0a.704.704 0 0 0-.703-.703h-2.11a.704.704 0 0 0-.703.703v2.11c0 .387.316.702.703.702h2.11a.704.704 0 0 0 .703-.703v-2.11zm-1.758.351a.703.703 0 1 0 0 1.407.703.703 0 0 0 0-1.407z" fill="#E5322D" fill-rule="nonzero"/>
                                        </svg>
                                        <a href="scan-pdf.html#" data-rescan style="margin-left: 8px; text-decoration: underline;">Re-scan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <template id="scan-qr">
                        <div class="col-12 col-md-6 d-flex justify-content-center" style="margin-bottom: 32px;">
                            <div class="card" style="width: 360px; max-width: 100%; height: 100%; padding: 32px; margin-bottom: 0;">
                                <div>
                                    <p class="title2">Step 1</p>
                                    <p>Use your smartphone's camera to scan this QR code</p>
                                </div>
                                <div data-qrcode style="display: flex; justify-content: center; margin-top: 32px;">
                                    <img style='width: 176px; height: 176px' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAVkAAAFZCAIAAAC9kMuMAAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAALzElEQVR4nO3dwY7sOo4FwFON/v9ffr3gzgsNBJGy803Etpy2s+reA4GgxL9//vknwP97/3n7BYBPkAVAIguAIguARBYARRYAiSwAiiwAElkAFFkAJLIAKLIASGQBUGQBkMgCoMgCIJEFQJEFQCILgPLfkw///f11vcfa41DGx3PXP732oGs/fTi5+KHxNdYa/2RbGk/3PPlNzjn5gtYFQCILgCILgEQWAOWodvjwkcLMVtlmrsbTeOf1F9z6tc+91fpBa1sXf7Mou+Xa/5Qt1gVAIguAIguARBYApbN2+HDSiHZy563qUWNlce77njipO54UGucKb+sHbb3GyTdq9JF/OdYFQCILgCILgEQWAGWwdviWk+JKYw/fSZlqrhuysaTXWFi9thv6m32lH2FdACSyACiyAEhkAVD+hbXDh7lq2dZzty5edwf+RC9do7nK4tpJR+Mvsi4AElkAFFkAJLIAKIO1w7lqytyJhtfGrqyd1KVOTvhbv8aWrYLfXAnz2kmKJz5Sd7QuABJZABRZACSyACidtcNrTWyNNZ654cgn5uZ/PLz1u5q781v1v7mZ1NdYFwCJLACKLAASWQCUv4/0PJ34iUPsrhWT3uo7bJxoPHfntwYr/wTrAiCRBUCRBUAiC4By1Hd4bU/rterR2sn25zlzw6BPfHOUyMnU6a1bzbUhznVSWhcAiSwAiiwAElkAlKO+w2u7Rxv70k72Hc8VKeeqsFsaq6GNNa23pqGc3PnkQVsa//rWBUAiC4AiC4BEFgCls3a49hMnCz5c6x5ba7zzW9/om7/Ja82Cax/ZHG1dACSyACiyAEhkAVA6Z6XMDSm+9tmtW73V4Li+1bXRKVuzkk9GRa+fu/7pya7krTufuNb+uGZdACSyACiyAEhkAVA6a4eNPjL/d+utTmpaJw9qLCWeVH9/4rfx1mmXWxXNt86GtC4AElkAFFkAJLIAKPfmLF+r8bxVl9oyN/3lrQ2/W59da7zzv2Df8bX/ONYFQCILgCILgEQWAOUrfYfXSolbz12bKzTO7f+9tpH85EFvFZIb/2RzJynObZ22LgASWQAUWQAksgAoR7XDrRLX3JbPa0NsT8o2jduuT1ybhX2tdXLt5BvN9Sw29krqOwSayQIgkQVAkQVAMjor5eHaVuK5W107ae/agJNr810+Mlb7xMkxkw8nZ0Oub3XCugBIZAFQZAGQyAKgfGXP8rUxJI1v1Xjxw7VDKNfP/eYfpbHwNvfcrc/O7ZXeYl0AJLIAKLIASGQBUI5mpcwdnveR0bqN3WNvTRZ5a0jJ+s5zDY4Pc/Nstj67NtfQucW6AEhkAVBkAZDIAqAM1g7fary7NrVibe58xxNznZTrzzZ6q1Q856020wfrAiCRBUCRBUAiC4DyldphY6Vtyy8Woj7SeDfXWvfWnOWTW731zvoOgWayAEhkAVBkAZAc1g7/j1uPNc+tH/Qwt/P0Iw2Oa9d62q71Sq69tTf85EEfKY5aFwCJLACKLAASWQCUzlkpjTMerpXltqbl/sQIk7W5ds9r7XEnbzVXZp4b2L1mzjLQTBYAiSwAiiwAkpt7lucOR1y79hpzpbW3uhK/eWbhRyb0rO/8zV/dmnUBkMgCoMgCIJEFQOnsOzzptXqY2+O5vtW17rHGB825Vlm8tjd8fee1rRbV9We3XPtzWxcAiSwAiiwAElkAlM6+w8YOv2uv8fCRt2rchrzlrRMcG+usb3UHvnW+Y+NrWBcAiSwAiiwAElkAlM5ZKdd2Fm99trHUtP7sR84OfGtL75a5ot1cUfbkuSfmNik/WBcAiSwAiiwAElkAlKM9y9eKZx+pWl17jZMpHQ8nW8XnprC81Wh4zVznqPMOgVmyAEhkAVBkAZD09h3uPfil0/K2Pru+1VyX3kc63k6e+9bY5Ws7uNcXz5n7D2tdACSyACiyAEhkAVA6Z6VcO6dtPabicatrTYonF2+1mq19ZJTIycVv7Tve+uk3T6w8YV0AJLIAKLIASGQBUAb3LK8vbrzzlsb9oXPnO2799KQN8VrV6iOnMF77C66fe+0czS3WBUAiC4AiC4BEFgDlqHY4V2p6q9PuYa7k84sDnbc0TrvZ+uzcg0681Uq4xboASGQBUGQBkMgCoHTuWT7x1uDdLW9Nfzlpjnz4ZrVs7q0a20xPnrulcff3FusCIJEFQJEFQCILgNK5Z/nhpKoxN5ei8a3eqng1ljBPntt4pN/J3vDGouxbPZof6Uq0LgASWQAUWQAksgAonX2HjY13c2WqufrQN7/RyZ23PvvwkS+4ftBD4xGGWz+d26O9xboASGQBUGQBkMgCoPxdO/HurRre1p0/cmbhlrlGw7W5itdcKbHxH+Fbk3K27rzFugBIZAFQZAGQyAKgDJ532DjCeG77c6O5WcnXKqnXTkPc+m08XNuUPeetTfdr1gVAIguAIguARBYAZbB2uFW1mmsHbGxwnGvLu9Ys2OjapuyT19i6eK4rsXE39MnFa9YFQCILgCILgEQWAOVe3+FJLW3907dGiTRqfO612SFvOelZfPiJwcrXJrhYFwCJLACKLAASWQCU1/oO1xfP9Yc1nmj4VqFxy0cOGnyYq5Zd6zu85trufusCIJEFQJEFQCILgNI5K2Xu5LlrnYVr35zh0VgN/YnmuWvdn2/twr7WaPhgXQAksgAosgBIZAFQjvoOG7chPzQWSK61ms3VLK9tND6p/10bnP2Rgwa3zO0c13cINJMFQCILgCILgOSwdri1m3Lrs+uLT5778FbTXuOhfScaT1JcX7x+7twg6RNz1e6PTLt5sC4AElkAFFkAJLIAKK/NSnlrQ+icuX64uYsbP/vQWHZtnIU9d6JhYz9r46GbW6wLgEQWAEUWAIksAEpn7fBaX9pbDXDX5nA0fsGHa2OXf3Gg8zf/XV1jXQAksgAosgBIZAFQ7p13uP5sY3Xw5Fi+9Z1PbrW+89x27y1zO6k/MrHmWhF6S+M/hhPWBUAiC4AiC4BEFgDlaM7ytVrLW7uSrw1WOfGRLczXJotcm7M8560N3WvWBUAiC4AiC4BEFgDlqHb4vNetQ/u+WUxqfI3GkS1zO5o/sin7rQMdG83tDd9iXQAksgAosgBIZAFQ7tUOH+Z6+OYKUXOVp7nqUWPZde6z13ZDf+QXe1Ian2uOtC4AElkAFFkAJLIAKJ3nHW7VWq710m05OXluztyBjicPauwNnRsGc3KrrTs3ljAbq5JbrAuARBYARRYAiSwAylHtsLHHq7FM1dhZOFdqOrl47dqYmZNfTmNprfFBW9/orcMR517DugBIZAFQZAGQyAKgDM5Kebi2E3NuB+i1bapbz93ykT/ZR5oj1xc/zP3JPjI6xboASGQBUGQBkMgCoBz1HW55q5ryMFcP+/cNg/5mzfKkofPa5Jitn25dPHfopnUBkMgCoMgCIJEFQBncszx357e6x9bmdkO/deDf3BbmayNbTkrF1/r/3hoj/mBdACSyACiyAEhkAVA6Z6XMaTzRcH3x+kFzDY5vTUN+q7OwsYa3vnju1Mm53/NbpUTrAiCRBUCRBUAiC4DSuWd57szCxovnKjGNxaTGxsq1xj3a13oHt356cnGjxufaswzMkgVAIguAIguAZPS8w48UsU5KeusHbWk8w+9h6/teO/7wrULyVudoY5vpw7WW3EbWBUAiC4AiC4BEFgDl3qyURlsVoIdrhcaTixvb8k7uvKXxZMG5wltjr+Tca7zVHGldACSyACiyAEhkAVB+snb4cO3QvrmuxC2N/X/XDt47Oe5xfaut567NTdl+q/tzi3UBkMgCoMgCIJEFQBmsHV6rpc3N0m00N5W4cQ7HnI9MYZmbHDM37vnan8y6AEhkAVBkAZDIAqB01g7fOuOtsadtfedvOjnSr/HOc3OWt8ztSX9rvsv6rRrvbF0AJLIAKLIASGQBUP7eOlwN+BTrAiCRBUCRBUAiC4AiC4BEFgBFFgCJLACKLAASWQAUWQAksgAosgBIZAFQZAGQyAKgyAIgkQVAkQVAkvwP+N1rN+LzCg4AAAAASUVORK5CYII=' alt='QR Code' data-title='https://ws1.ilovepdf.com/link?wsWorkerHost=wss%3A%2F%2Fws1.ilovepdf.com&apiWorkerHost=api56.ilovepdf.com&taskId=zx5gv694dw6rb9p5p78ssrp0d0qs2dkr89mftAxx7zk4n93mky9hjpdx2dwglkpfx172m5ms4ybbsztbgv4yz1qm4b6qg833gnhgh2wx96p082xyAb2ryA3s280kl1m996At75zmf83x4nAwtkpx19x4r0f79ypjngmA4fdqfvh94sbp35x1' />                        </div>
                            </div>
                        </div>
                    </template>
                    <template id="timeout">
                        <div class="col-12 col-md-6 d-flex justify-content-center" style="margin-bottom: 32px;">
                            <div class="card" style="width: 360px; max-width: 100%; height: 100%; padding: 32px; margin-bottom: 0;">
                                <div>
                                    <p class="title3 feedback-error-2">Please download iLovePDF on your mobile, first</p>
                                </div>
                                <img src="img/tools/scan/download-app.svg" style="margin-top: 68px;" />
                            </div>
                        </div>
                    </template>
                </main>

                <div class="uploading__bar uploading__bar--small">
                    <span class="uploading__bar__completed"></span>
                </div>
                <div id="uploader" class="uploader" style="display: none;">
                    <a class="uploader__btn tooltip--left" id="pickfiles" href="javascript:;" title="Add more files">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" stroke-linecap="round" stroke-width="2" stroke="#fff" fill="none" stroke-linejoin="round"><desc>Upload your file and transform it.</desc><path d="M10 1.833v16.333"/><path d="M1.833 10h16.333"/></svg>
                        <span>Select PDF file</span>
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
                    <div class="uploader__droptxt">or drop PDF here</div>
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
                    <a class="btn-icon btn-icon--white tooltip active tooltip--left" id="showQr" href="javascript:;" title="Show QR">
                        <svg width="18" height="19" viewBox="0 0 18 19" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 11.24v2.005a.703.703 0 0 1-.703.703h-1.969a.703.703 0 1 1 0-1.406h1.266V11.24a.703.703 0 1 1 1.406 0zM8.297 7.797A.703.703 0 0 0 9 7.092V5.51h.703a.703.703 0 0 0 .703-.703V.87a.703.703 0 0 0-.729-.703.714.714 0 0 0-.677.72v.545h-.703a.703.703 0 1 0 0 1.407H9v1.265h-.703a.703.703 0 0 0-.703.703v2.285c0 .389.315.704.703.704zM.703 10.538a.703.703 0 0 0 .703-.703v-.703h.739a.703.703 0 1 0 0-1.407H.703A.703.703 0 0 0 0 8.428v1.407c0 .388.315.703.703.703zM11.11 9.132h1.899v2.092c0 .381.296.706.677.72.4.014.73-.306.73-.703v-.703h.737a.703.703 0 1 0 0-1.406h-.738v-.704a.703.703 0 0 0-.703-.703h-2.602a.703.703 0 1 0 0 1.407zm6.188-1.407a.703.703 0 1 0 0 1.406.703.703 0 0 0 0-1.406zm-6.188 2.813a.703.703 0 0 0-.703.703v1.3h-.351a.703.703 0 1 0 0 1.407h1.054a.703.703 0 0 0 .704-.703V11.24a.703.703 0 0 0-.704-.703zm0 6.222h-.703v-.703a.703.703 0 0 0-.703-.703H9v-.703a.703.703 0 1 0-1.406 0v1.406c0 .389.315.703.703.703H9v.704c0 .388.315.703.703.703h1.406a.703.703 0 1 0 0-1.407zm2.813-1.406a.703.703 0 0 0-.703-.703h-.352a.703.703 0 1 0 0 1.406h.352a.703.703 0 0 0 .703-.703zm3.375 1.406h-.563v-.703a.703.703 0 1 0-1.406 0v.703h-1.406a.703.703 0 1 0 0 1.407h3.375a.703.703 0 1 0 0-1.407zm-9-4.921A.703.703 0 0 0 9 11.135v-1.3a.703.703 0 0 0-.703-.703H5.766v-.687a.714.714 0 0 0-.678-.72.703.703 0 0 0-.729.703v.704h-.351a.703.703 0 1 0 0 1.406h3.586v.597c0 .389.315.704.703.704zM0 4.385V2.276C0 1.113.946.166 2.11.166h2.109c1.163 0 2.11.947 2.11 2.11v2.11c0 1.163-.947 2.109-2.11 2.109h-2.11A2.112 2.112 0 0 1 0 4.385zm1.406 0c0 .388.316.704.703.704h2.11a.704.704 0 0 0 .703-.704V2.276a.704.704 0 0 0-.703-.703h-2.11a.704.704 0 0 0-.703.703v2.11zm1.758-.351a.703.703 0 1 0 0-1.406.703.703 0 0 0 0 1.406zM18 2.276v2.11c0 1.163-.946 2.109-2.11 2.109h-2.109a2.112 2.112 0 0 1-2.11-2.11V2.276c0-1.163.947-2.11 2.11-2.11h2.11c1.163 0 2.109.947 2.109 2.11zm-1.406 0a.704.704 0 0 0-.703-.703h-2.11a.704.704 0 0 0-.703.703v2.11c0 .387.316.703.703.703h2.11a.704.704 0 0 0 .703-.704V2.276zm-1.758.352a.703.703 0 1 0 0 1.406.703.703 0 0 0 0-1.406zm-8.508 11.32v2.11c0 1.162-.946 2.109-2.11 2.109H2.11A2.112 2.112 0 0 1 0 16.057v-2.11c0-1.162.946-2.108 2.11-2.108h2.109c1.163 0 2.11.946 2.11 2.109zm-1.406 0a.704.704 0 0 0-.703-.703h-2.11a.704.704 0 0 0-.703.703v2.11c0 .387.316.702.703.702h2.11a.704.704 0 0 0 .703-.703v-2.11zm-1.758.351a.703.703 0 1 0 0 1.407.703.703 0 0 0 0-1.407z" fill="#383E45" fill-rule="nonzero"/>
                        </svg>
                    </a>
                </div>        <div class="tool__workarea__rendered" id="fileGroups"></div>
            </div>
            <div id="sidebar" class="tool__sidebar">
                <div class="option__panel option__panel--active" id="panel-options" data-process="yes">
                    <div class="option__panel__title">Scan options</div>
                    <div class="option__panel__content">
                        <div class="option__title">
                            Select the page orientation</div>
                        <ul class="option__image">
                            <li class="option__image__item option--active" data-name="orientation" data-value="portrait">
                                <svg width="24px" height="32px" viewBox="0 0 24 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-444.000000, -705.000000)" fill="#161616" fill-rule="nonzero">
                                            <path d="M447,708 L447,734 L465,734 L465,708 L447,708 Z M446,705 L466,705 C467.104569,705 468,705.895431 468,707 L468,735 C468,736.104569 467.104569,737 466,737 L446,737 C444.895431,737 444,736.104569 444,735 L444,707 C444,705.895431 444.895431,705 446,705 Z" id="portrait"></path>
                                        </g>
                                    </g>
                                </svg>
                                <div class="option__image__item__title">Portrait</div>
                            </li>
                            <li class="option__image__item" data-name="orientation" data-value="landscape">
                                <svg width="32px" height="24px" viewBox="0 0 32 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-571.000000, -709.000000)" fill="#969696" fill-rule="nonzero">
                                            <path d="M574,730 L600,730 L600,712 L574,712 L574,730 Z M571,731 L571,711 C571,709.895431 571.895431,709 573,709 L601,709 C602.104569,709 603,709.895431 603,711 L603,731 C603,732.104569 602.104569,733 601,733 L573,733 C571.895431,733 571,732.104569 571,731 Z" id="landscape"></path>
                                        </g>
                                    </g>
                                </svg>
                                <div class="option__image__item__title">Landscape</div>
                            </li>
                        </ul>
                    </div>

                    <div class="option__panel__content">
                        <div class="form__group"><div class="option__title">
                                Page size</div>
                            <select name="pagesize" id="pagesize" class="input option">
                                <option value="fit">Fit (Same page size as image)</option>
                                <option value="A4">A4 (297x210 mm)</option>
                                <option value="letter">US Letter (215x279.4 mm)</option>
                            </select>
                        </div>
                    </div>
                    <div class="option__panel__content">
                        <div class="option__title">
                            Margin</div>
                        <ul class="option__image">
                            <li class="option__image__item option--active" data-name="margin" data-value="0">

                                <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-310.000000, -818.000000)" fill="#979797">
                                            <g transform="translate(310.000000, 818.000000)">
                                                <path d="M3,3 L3,29 L29,29 L29,3 L3,3 Z M2,0 L30,0 C31.1045695,-2.02906125e-16 32,0.8954305 32,2 L32,30 C32,31.1045695 31.1045695,32 30,32 L2,32 C0.8954305,32 1.3527075e-16,31.1045695 0,30 L0,2 C-1.3527075e-16,0.8954305 0.8954305,2.02906125e-16 2,0 Z" id="Rectangle-2-Copy-3" fill-rule="nonzero"></path>
                                                <path d="M9.49927274,9 C10.5384703,9 11.3846154,9.82810603 11.3846154,10.8461538 C11.3846154,11.8642017 10.5384703,12.6923077 9.49927274,12.6923077 C8.45904829,12.6923077 7.61290323,11.8642017 7.61290323,10.8461538 C7.61290323,9.82810603 8.45904829,9 9.49927274,9 Z" id="Path" transform="translate(9.498759, 10.846154) scale(-1, 1) translate(-9.498759, -10.846154) "></path>
                                                <path d="M13.3544201,20.9990333 L7.37345658,20.9990333 C7.2894992,20.9990333 7.21253827,20.9555336 7.17155908,20.885934 C7.13057988,20.8153678 7.13157938,20.729335 7.17355806,20.6607021 L13.3754094,10.4875648 C13.4583673,10.3502989 13.6922486,10.3502989 13.7752064,10.4875648 L17.3883721,16.4160949 L19.811142,13.9926765 C19.8551197,13.9482101 19.9150893,13.9240436 19.9780573,13.9240436 L19.9860532,13.9240436 C20.0520198,13.9259769 20.1139883,13.9549767 20.155967,14.0042764 L25.8980518,20.5891692 C25.9590208,20.6297689 26,20.6984019 26,20.7757347 C26,20.8994673 25.8960528,21 25.7671182,21 L25.7561238,21 L19.7871542,21 L19.7761598,21 L13.3544201,21 L13.3544201,20.9990333 Z" id="Path" transform="translate(16.570720, 15.692308) scale(-1, 1) translate(-16.570720, -15.692308) "></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <div class="option__image__item__title">No margin</div>
                            </li>
                            <li class="option__image__item" data-name="margin" data-value="20">
                                <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-441.000000, -818.000000)" fill="#161616">
                                            <g transform="translate(441.000000, 818.000000)">
                                                <polygon id="Shape" fill-rule="nonzero" points="0 0 2 0 2 2 0 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="4 0 6 0 6 2 4 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 2 4 2 4 4 2 4"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 4 2 4 2 6 0 6"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 6 4 6 4 8 2 8"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 8 2 8 2 10 0 10"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 10 4 10 4 12 2 12"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 12 2 12 2 14 0 14"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 14 4 14 4 16 2 16"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 16 2 16 2 18 0 18"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 18 4 18 4 20 2 20"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 20 2 20 2 22 0 22"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 22 4 22 4 24 2 24"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 24 2 24 2 26 0 26"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 26 4 26 4 28 2 28"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 28 2 28 2 30 0 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="4 28 6 28 6 30 4 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 30 4 30 4 32 2 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="6 30 8 30 8 32 6 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="10 30 12 30 12 32 10 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="8 0 10 0 10 2 8 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="6 2 8 2 8 4 6 4"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="10 2 12 2 12 4 10 4"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="8 28 10 28 10 30 8 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="12 0 14 0 14 2 12 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="16 0 18 0 18 2 16 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="14 2 16 2 16 4 14 4"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="12 28 14 28 14 30 12 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="16 28 18 28 18 30 16 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="14 30 16 30 16 32 14 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="18 30 20 30 20 32 18 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="22 30 24 30 24 32 22 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="20 0 22 0 22 2 20 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="18 2 20 2 20 4 18 4"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="22 2 24 2 24 4 22 4"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="20 28 22 28 22 30 20 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="24 0 26 0 26 2 24 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 0 30 0 30 2 28 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="26 2 28 2 28 4 26 4"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 4 30 4 30 6 28 6"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 8 30 8 30 10 28 10"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 12 30 12 30 14 28 14"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 16 30 16 30 18 28 18"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 20 30 20 30 22 28 22"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 24 30 24 30 26 28 26"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="24 28 26 28 26 30 24 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 28 30 28 30 30 28 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="26 30 28 30 28 32 26 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 30 32 30 32 32 30 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 2 32 2 32 4 30 4"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 6 32 6 32 8 30 8"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 10 32 10 32 12 30 12"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 14 32 14 32 16 30 16"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 18 32 18 32 20 30 20"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 22 32 22 32 24 30 24"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 26 32 26 32 28 30 28"></polygon>
                                                <path d="M10.8080731,11.1026393 C11.5787699,11.1026393 12.2062937,11.7299923 12.2062937,12.5012407 C12.2062937,13.272489 11.5787699,13.8998421 10.8080731,13.8998421 C10.0366148,13.8998421 9.40909091,13.272489 9.40909091,12.5012407 C9.40909091,11.7299923 10.0366148,11.1026393 10.8080731,11.1026393 Z" id="Path" transform="translate(10.807692, 12.501241) scale(-1, 1) translate(-10.807692, -12.501241) "></path>
                                                <path d="M13.6671536,20.1928161 L9.23151086,20.1928161 C9.16924582,20.1928161 9.11216953,20.1598617 9.08177826,20.1071348 C9.051387,20.0536755 9.05212825,19.9884991 9.08326077,19.9365045 L13.6827199,12.2295823 C13.7442437,12.125593 13.9176963,12.125593 13.9792201,12.2295823 L16.6588405,16.720893 L18.4556317,14.88497 C18.4882467,14.8512833 18.5327217,14.8329753 18.5794205,14.8329753 L18.5853505,14.8329753 C18.634273,14.83444 18.6802306,14.8564095 18.7113631,14.8937578 L22.969847,19.8823129 C23.0150633,19.9130703 23.0454545,19.9650649 23.0454545,20.0236504 C23.0454545,20.1173872 22.9683645,20.1935484 22.8727432,20.1935484 L22.8645894,20.1935484 L18.4378416,20.1935484 L18.4296879,20.1935484 L13.6671536,20.1935484 L13.6671536,20.1928161 Z" id="Path" transform="translate(16.052448, 16.172569) scale(-1, 1) translate(-16.052448, -16.172569) "></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <div class="option__image__item__title">Small</div>
                            </li>
                            <li class="option__image__item" data-name="margin" data-value="40">

                                <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-571.000000, -818.000000)" fill="#969696">
                                            <g transform="translate(571.000000, 818.000000)">
                                                <polygon id="Shape" fill-rule="nonzero" points="0 0 2 0 2 2 0 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="4 0 6 0 6 2 4 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 2 4 2 4 4 2 4"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 4 2 4 2 6 0 6"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="4 4 6 4 6 6 4 6"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 6 4 6 4 8 2 8"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 8 2 8 2 10 0 10"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 10 4 10 4 12 2 12"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 12 2 12 2 14 0 14"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 14 4 14 4 16 2 16"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 16 2 16 2 18 0 18"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 18 4 18 4 20 2 20"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 20 2 20 2 22 0 22"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 22 4 22 4 24 2 24"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 24 2 24 2 26 0 26"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 26 4 26 4 28 2 28"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="0 28 2 28 2 30 0 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="4 28 6 28 6 30 4 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="2 30 4 30 4 32 2 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="6 30 8 30 8 32 6 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="10 30 12 30 12 32 10 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="8 0 10 0 10 2 8 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="6 2 8 2 8 4 6 4"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="10 2 12 2 12 4 10 4"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="8 28 10 28 10 30 8 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="12 0 14 0 14 2 12 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="16 0 18 0 18 2 16 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="14 2 16 2 16 4 14 4"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="12 28 14 28 14 30 12 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="16 28 18 28 18 30 16 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="14 30 16 30 16 32 14 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="18 30 20 30 20 32 18 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="22 30 24 30 24 32 22 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="20 0 22 0 22 2 20 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="18 2 20 2 20 4 18 4"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="22 2 24 2 24 4 22 4"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="20 28 22 28 22 30 20 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="24 0 26 0 26 2 24 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 0 30 0 30 2 28 2"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="26 2 28 2 28 4 26 4"></polygon>
                                                <path d="M26,4 L24,4 L24,6 L22,6 L22,4 L20,4 L20,6 L18,6 L18,4 L16,4 L16,6 L14,6 L14,4 L12,4 L12,6 L10,6 L10,4 L8,4 L8,6 L6,6 L6,8 L4,8 L4,10 L6,10 L6,12 L4,12 L4,14 L6,14 L6,16 L4,16 L4,18 L6,18 L6,20 L4,20 L4,22 L6,22 L6,24 L4,24 L4,26 L6,26 L6,28 L8,28 L8,26 L10,26 L10,28 L12,28 L12,26 L14,26 L14,28 L16,28 L16,26 L18,26 L18,28 L20,28 L20,26 L22,26 L22,28 L24,28 L24,26 L26,26 L26,24 L28,24 L28,22 L26,22 L26,20 L28,20 L28,18 L26,18 L26,16 L28,16 L28,14 L26,14 L26,12 L28,12 L28,10 L26,10 L26,8 L28,8 L28,6 L26,6 L26,4 Z M24,24 L8,24 L8,8 L24,8 L24,24 Z" id="Shape" fill-rule="nonzero"></path>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 4 30 4 30 6 28 6"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 8 30 8 30 10 28 10"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 12 30 12 30 14 28 14"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 16 30 16 30 18 28 18"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 20 30 20 30 22 28 22"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 24 30 24 30 26 28 26"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="26 26 28 26 28 28 26 28"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="24 28 26 28 26 30 24 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="28 28 30 28 30 30 28 30"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="26 30 28 30 28 32 26 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 30 32 30 32 32 30 32"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 2 32 2 32 4 30 4"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 6 32 6 32 8 30 8"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 10 32 10 32 12 30 12"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 14 32 14 32 16 30 16"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 18 32 18 32 20 30 20"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 22 32 22 32 24 30 24"></polygon>
                                                <polygon id="Shape" fill-rule="nonzero" points="30 26 32 26 32 28 30 28"></polygon>
                                                <path d="M12.2484141,12.3636364 C12.8053047,12.3636364 13.2587413,12.8169495 13.2587413,13.3742387 C13.2587413,13.9315278 12.8053047,14.384841 12.2484141,14.384841 C11.6909732,14.384841 11.2375367,13.9315278 11.2375367,13.3742387 C11.2375367,12.8169495 11.6909732,12.3636364 12.2484141,12.3636364 Z" id="Path" transform="translate(12.248139, 13.374239) scale(-1, 1) translate(-12.248139, -13.374239) "></path>
                                                <path d="M14.3143304,18.9320222 L11.1092207,18.9320222 C11.0642292,18.9320222 11.022987,18.90821 11.0010269,18.8701105 C10.9790667,18.8314819 10.9796023,18.7843867 11.0020981,18.7468164 L14.3255783,13.1779436 C14.3700342,13.1028029 14.4953677,13.1028029 14.5398236,13.1779436 L16.4760654,16.4232778 L17.7743919,15.0966753 C17.7979589,15.072334 17.8300957,15.059105 17.8638393,15.059105 L17.8681242,15.059105 C17.9034747,15.0601633 17.9366827,15.0760381 17.9591785,15.1030252 L21.0362765,18.7076586 C21.0689489,18.7298833 21.0909091,18.7674536 21.0909091,18.8097864 C21.0909091,18.8775187 21.0352053,18.9325513 20.9661112,18.9325513 L20.9602195,18.9325513 L17.7615372,18.9325513 L17.7556454,18.9325513 L14.3143304,18.9325513 L14.3143304,18.9320222 Z" id="Path" transform="translate(16.037898, 16.027070) scale(-1, 1) translate(-16.037898, -16.027070) "></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <div class="option__image__item__title">Big</div>
                            </li>
                        </ul>
                    </div>


                    <div class="option__panel__content">
                        <div class="form__group  form__group--inline">
                            <div class="checkbox">
                                <input type="checkbox" name="merge_after" id="merge_after" value="1">
                                <label for="merge_after">Merge all images in one PDF file</label>
                            </div>
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
            <p id="processText" class="processAction title2">Converting images to PDF...</p>
            <img src="img/svg_icons/preload.svg" alt="Processing">
            <div id="waitnotify"></div>
        </div>
        <script>
            var iloveLang = {'noTasks': 'sorry, no tasks here!','Update Card Details': 'Update Card Details','login': 'login','email': 'email','waitnotify': 'Do not close your browser. Wait until your files are uploaded and processed! This might take a few minutes. :)','savingFile': 'Saving file...','Save to Drive': 'Save to Drive','Drive saving...': 'Drive saving...','Your file has been saved to Drive!': 'Your file has been saved to Drive!','Ok': 'Ok','processCompleted': 'The task has been completed!<br> Going to download page...','uploadComplete': 'Upload complete!','Save options for next actions': 'Save options for next actions','Some files require password': 'Some files require password','No file selected.': 'No file selected.','Please add a file to activate options': 'Please add a file to activate options','Yes': 'Yes','No': 'No','Over the content': 'Over the content','Below the content': 'Below the content','Facing pages': 'Facing pages','Normal': 'Normal','First cover': 'First cover','none': 'none','Remove': 'Delete','Remove this file': 'Remove this file','Rotate': 'Rotate','Or': 'Or','wops': 'Error','Error': 'Error','Upload error': 'Upload error','InvalidExtension': 'Sorry, this extension is not allowed','FileTooLarge': 'Too many Megapixel for image.','InvalidTask': 'InvalidTask','InvalidParams': 'InvalidParams','CloudError': 'TaskLimit','TaskLimit': 'TaskLimit','EmptyFile': 'This file is empty','UploadError': 'Upload error','DamagedFile': 'Damaged/Corrupted File','FileRemoved': 'Some files you selected from your device seem to have been renamed, deleted or moved. Please, next time, wait until upload finishes.','FileSizeExceeded': 'The filesize of this file exceeds the limits','errorOneRetry': 'It looks like a connection problem is stopping your file from being processed. We suggest that you wait a little while, then reload the page and try again.<br><br>If this doesn\'t work, you could try by disabling your web extensions or using the incognito browser. If the problem persists, please contact us.<br><br><a href="https://www.ilovepdf.com/\&quot;#\"" onclick=\"location.reload();\">Reload the page and try again</a>', 'errorRetry': 'It looks like a connection problem is stopping your files from being processed. We suggest that you wait a little while, then reload the page and try again.<br><br>If this doesn\'t work, you could try by disabling your web extensions or using the incognito browser. If the problem persists, please contact us.<br><br><a href="https://www.ilovepdf.com/\&quot;#\"" onclick=\"location.reload();\">Reload the page and try again</a>','File number exceeded': 'File number exceeded','File size exceeded': 'File size exceeded','Sorry, we are not ready for that.': 'Sorry, we are not ready for that.','superlimitWhoa': "You\'ve hit the limit, even for Premium. Whoa!",'superlimitDownload': "Unfortunately, our system doesn\'t have enough capacity to process your task. For now.",'Original size (in pixels) for this image': 'Original size (in pixels) for this image','This image will be resized to this size (in pixels)': 'This image will be resized to this size (in pixels)','Uploading...': "Uploading...",'1 file': '1 file','1 mb': '1 mb','${limit} files': '${limit} files','${limit} mb': '${limit} mb','registeredLevel': 'registered users','premiumLevel': 'premium users','publicLevel': 'non registered users','limitTaskMsg': "This task is <strong>limited to ${currentLimit}</strong> for ${currentLevel}. <strong>${nextLevel} can upload up to ${nextLimit}</strong>. Some of your files have not been added.",'Wait a moment, please...': 'Wait a moment, please...','Time left': 'Time left','minute': 'minute','hour': 'hour','less than': 'less than','minutes': 'minutes','hours': 'hours','seconds': 'seconds','dropIt': 'Drop it like it\'s hot','featurePremium': 'This <strong>feature</strong> requires you to be <strong>Premium</strong>','Premium feature': 'Premium feature','Welcome back after upload': 'We are glad you are here again. But for security reasons, your files aren\'t. To (toolname) your (fileformat), please get back to our homepage. ','Limit exceeded': 'Limit exceeded','leaveAlert': 'Do you really want to leave our page?','passwordRequiredFor': 'Password required for <br>${filename}','addPage': 'Add a blank page','paswordRequired': 'Password required','Cancel': 'Cancel','Ignore': 'Ignore','Ignore these files': 'Ignore these files','Send': 'Send','Same password for all files': 'Same password for all files','Did you forgot your password?': 'Did you forgot your password?','numPages': '${numPages} pages','Unlock PDF': 'Unlock PDF','damaged file?': 'Damaged file?','previousTaskLoading': 'Loading files from previous task','previousFail': 'We are sorry. We couldn\'t load the previous task files.','previousFailContinue': 'Ok','previousFailBack': 'Back to download','disabledMultipleFiles': 'Option disabled because there are multiple files', 'registeredFeatureTitle': 'Registered feature', 'registeredFeatureSubtitle':'This <strong>feature</strong> requires you to be <strong>Registered user</strong>','authTitle':'iLovePDF Accounts','authSubtitle':'Get access to extended features','ProtectedFile':'Password protected file', 'limitMb': 'The file you are trying to process is bigger than ${mb} MB.', 'limitFiles': 'You are trying to process more than ${files} files.', 'featureRequired': '<strong>Feature</strong> available for <strong>Registered users</strong>','limitFree': 'Free:','limitPremium': 'Premium:', 'limitFiles':'<b>${n} files</b> per task','limitSize':'<b>${n} MB</b> per task','limitPages':'<b>${n} pages</b> per task','upgradePremium': 'Upgrade to Premium'};
            var unlockPdfUrl = '/unlock_pdf';
            var paymentLang = {'yearly': 'Yearly','monthly': 'Monthly','stripePayBtn_web': 'Go Premium','stripePayBtn_web_desktop': 'Go Premium Pro','pack_web': 'Premium','pack_web_desktop': 'Premium Pro','paymentFail': 'The payment can\'t be processed.'};
            var premiumData = {'premiumUrl': '/user/premium',priceMonth: '<span class="pricing__price__numbers">6</span><span class="pricing__price__code">US</span>$',priceYear: '<span class="pricing__price__numbers">48</span><span class="pricing__price__code">US</span>$',priceYearMonthly: '<span class="pricing__price__numbers">4</span><span class="pricing__price__code">US</span>$'};
            var country = 'PK';
            var ab = {"limits":"b"};
        </script><script>
            var ilovepdfConfig = {"action":"tool","fp":1,"fpt":7,"tool":"scan","site":"ilovepdf","subtool":null,"toolText":"Save to PDF","token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiIiLCJhdWQiOiIiLCJpYXQiOjE1MjMzNjQ4MjQsIm5iZiI6MTUyMzM2NDgyNCwianRpIjoicHJvamVjdF9wdWJsaWNfYzkwNWRkMWMwMWU5ZmQ3NzY5ODNjYTQwZDBhOWQyZjNfT1Vzd2EwODA0MGI4ZDJjN2NhM2NjZGE2MGQ2MTBhMmRkY2U3NyJ9.qvHSXgCJgqpC4gd6-paUlDLFmg0o2DsOvb1EUYPYx_E","parentId":null,"preWorker":null,"defaultOptions":{"orientation":"portrait","margin":0,"pagesize":"A4","merge_after":true,"output_filename":"{filename}","packaged_filename":"ilovepdf_scanned"},"fileLimits":{"merge":{"mb":100,"files":25},"split":{"mb":100,"files":1},"compress":{"mb":200,"files":2},"officepdf":{"mb":15,"files":1},"wordpdf":{"mb":15,"files":1},"powerpointpdf":{"mb":15,"files":1},"excelpdf":{"mb":15,"files":1},"pdfoffice":{"mb":15,"files":1},"pdfword":{"mb":15,"files":1},"pdfocr":{"mb":15,"files":1,"pages":50},"pdfpowerpoint":{"mb":15,"files":1},"pdfexcel":{"mb":15,"files":1,"pages":500},"pdfjpg":{"mb":25,"files":2},"imagepdf":{"mb":40,"files":20},"pagenumber":{"mb":100,"files":2},"watermark":{"mb":100,"files":2},"rotate":{"mb":100,"files":20},"unlock":{"mb":100,"files":2},"protect":{"mb":100,"files":2},"pdfa":{"mb":100,"files":1},"repair":{"mb":100,"files":1},"organize":{"mb":100,"files":5},"resizeimage":{"mb":200,"files":30},"compressimage":{"mb":200,"files":30},"cropimage":{"mb":90,"files":1},"converttojpg":{"mb":200,"files":30},"convertfromjpg":{"mb":200,"files":30},"rotateimage":{"mb":200,"files":30},"watermarkimage":{"mb":200,"files":30},"memeimage":{"mb":200,"files":1},"editimage":{"mb":50,"files":1},"editpdf":{"mb":100,"files":1},"sign":{"mb":50,"files":3},"upscaleimage":{"mb":6,"files":3,"pxsize":2073600},"blurfaceimage":{"mb":100,"files":10}},"allFileLimits":{"limits":{"merge":{"mb":100,"files":25},"split":{"mb":100,"files":1},"compress":{"mb":200,"files":2},"officepdf":{"mb":15,"files":1},"wordpdf":{"mb":15,"files":1},"powerpointpdf":{"mb":15,"files":1},"excelpdf":{"mb":15,"files":1},"pdfoffice":{"mb":15,"files":1},"pdfword":{"mb":15,"files":1},"pdfocr":{"mb":15,"files":1,"pages":50},"pdfpowerpoint":{"mb":15,"files":1},"pdfexcel":{"mb":15,"files":1,"pages":500},"pdfjpg":{"mb":25,"files":2},"imagepdf":{"mb":40,"files":20},"pagenumber":{"mb":100,"files":2},"watermark":{"mb":100,"files":2},"rotate":{"mb":100,"files":20},"unlock":{"mb":100,"files":2},"protect":{"mb":100,"files":2},"pdfa":{"mb":100,"files":1},"repair":{"mb":100,"files":1},"organize":{"mb":100,"files":5},"resizeimage":{"mb":200,"files":30},"compressimage":{"mb":200,"files":30},"cropimage":{"mb":90,"files":1},"converttojpg":{"mb":200,"files":30},"convertfromjpg":{"mb":200,"files":30},"rotateimage":{"mb":200,"files":30},"watermarkimage":{"mb":200,"files":30},"memeimage":{"mb":200,"files":1},"editimage":{"mb":50,"files":1},"editpdf":{"mb":100,"files":1},"sign":{"mb":50,"files":3},"upscaleimage":{"mb":6,"files":3,"pxsize":2073600},"blurfaceimage":{"mb":100,"files":10}},"registered_limits":{"merge":{"mb":100,"files":25},"split":{"mb":100,"files":1},"compress":{"mb":200,"files":2},"officepdf":{"mb":15,"files":1},"wordpdf":{"mb":15,"files":1},"powerpointpdf":{"mb":15,"files":1},"excelpdf":{"mb":15,"files":1},"pdfoffice":{"mb":15,"files":1},"pdfword":{"mb":15,"files":1},"pdfocr":{"mb":15,"files":1,"pages":50},"pdfpowerpoint":{"mb":15,"files":1},"pdfexcel":{"mb":15,"files":1,"pages":500},"pdfjpg":{"mb":25,"files":2},"imagepdf":{"mb":40,"files":20},"pagenumber":{"mb":100,"files":2},"watermark":{"mb":100,"files":2},"rotate":{"mb":100,"files":20},"unlock":{"mb":100,"files":2},"protect":{"mb":100,"files":2},"pdfa":{"mb":100,"files":1},"repair":{"mb":100,"files":1},"organize":{"mb":100,"files":5},"resizeimage":{"mb":200,"files":30},"compressimage":{"mb":200,"files":30},"cropimage":{"mb":90,"files":1},"converttojpg":{"mb":200,"files":30},"convertfromjpg":{"mb":200,"files":30},"rotateimage":{"mb":200,"files":30},"watermarkimage":{"mb":200,"files":30},"memeimage":{"mb":200,"files":1},"editimage":{"mb":50,"files":1},"editpdf":{"mb":100,"files":1},"sign":{"mb":50,"files":3},"upscaleimage":{"mb":6,"files":3,"pxsize":2073600},"blurfaceimage":{"mb":100,"files":10}},"premium_limits":{"merge":{"mb":4000,"files":500},"split":{"mb":4000,"files":1},"compress":{"mb":4000,"files":10},"officepdf":{"mb":4000,"files":10},"wordpdf":{"mb":4000,"files":10},"powerpointpdf":{"mb":4000,"files":10},"excelpdf":{"mb":4000,"files":10},"pdfword":{"mb":4000,"files":10},"pdfocr":{"mb":4000,"files":10,"pages":1000},"pdfpowerpoint":{"mb":4000,"files":10},"pdfexcel":{"mb":4000,"files":10,"pages":1000},"pdfoffice":{"mb":4000,"files":10},"pdfjpg":{"mb":4000,"files":10},"imagepdf":{"mb":4000,"files":80},"pagenumber":{"mb":4000,"files":10},"watermark":{"mb":4000,"files":10},"rotate":{"mb":4000,"files":80},"unlock":{"mb":4000,"files":10},"protect":{"mb":4000,"files":80},"pdfa":{"mb":4000,"files":10},"repair":{"mb":4000,"files":10},"organize":{"mb":4000,"files":20},"resizeimage":{"mb":4000,"files":120},"compressimage":{"mb":4000,"files":120},"cropimage":{"mb":4000,"files":1},"converttojpg":{"mb":4000,"files":120},"convertfromjpg":{"mb":4000,"files":120},"rotateimage":{"mb":4000,"files":120},"watermarkimage":{"mb":4000,"files":120},"memeimage":{"mb":4000,"files":1},"editimage":{"mb":50,"files":1},"editpdf":{"mb":100,"files":1},"sign":{"mb":50,"files":5},"upscaleimage":{"mb":6,"files":3,"pxsize":2073600},"blurfaceimage":{"mb":4000,"files":120}},"temp_limits":{"merge":{"mb":1000,"files":80},"split":{"mb":1000,"files":1},"compress":{"mb":1000,"files":3},"officepdf":{"mb":1000,"files":3},"wordpdf":{"mb":100,"files":3},"powerpointpdf":{"mb":100,"files":3},"excelpdf":{"mb":100,"files":3},"pdfword":{"mb":100,"files":1},"pdfocr":{"mb":100,"files":1,"pages":100},"pdfpowerpoint":{"mb":100,"files":1},"pdfexcel":{"mb":100,"files":1,"pages":500},"pdfoffice":{"mb":100,"files":1},"pdfjpg":{"mb":100,"files":3},"imagepdf":{"mb":1000,"files":80},"pagenumber":{"mb":1000,"files":3},"watermark":{"mb":1000,"files":3},"rotate":{"mb":1000,"files":30},"unlock":{"mb":1000,"files":10},"protect":{"mb":1000,"files":5},"pdfa":{"mb":100,"files":1},"repair":{"mb":1000,"files":2},"organize":{"mb":1000,"files":5},"resizeimage":{"mb":1000,"files":60},"compressimage":{"mb":1000,"files":60},"cropimage":{"mb":1000,"files":1},"converttojpg":{"mb":5000,"files":60},"convertfromjpg":{"mb":1000,"files":60},"rotateimage":{"mb":1000,"files":60},"watermarkimage":{"mb":1000,"files":60},"memeimage":{"mb":1000,"files":1},"editimage":{"mb":50,"files":1},"editpdf":{"mb":100,"files":1},"sign":{"mb":50,"files":3},"upscaleimage":{"mb":6,"files":3,"pxsize":2073600},"blurfaceimage":{"mb":150,"files":15}}},"servers":["\/\/api1.ilovepdf.com","\/\/api2.ilovepdf.com","\/\/api3.ilovepdf.com","\/\/api4.ilovepdf.com","\/\/api5.ilovepdf.com","\/\/api6.ilovepdf.com","\/\/api7.ilovepdf.com","\/\/api8.ilovepdf.com","\/\/api9.ilovepdf.com","\/\/api10.ilovepdf.com","\/\/api11.ilovepdf.com","\/\/api12.ilovepdf.com","\/\/api13.ilovepdf.com","\/\/api14.ilovepdf.com","\/\/api15.ilovepdf.com","\/\/api16.ilovepdf.com","\/\/api17.ilovepdf.com","\/\/api18.ilovepdf.com","\/\/api19.ilovepdf.com","\/\/api22.ilovepdf.com","\/\/api23.ilovepdf.com","\/\/api24.ilovepdf.com","\/\/api25.ilovepdf.com","\/\/api26.ilovepdf.com","\/\/api27.ilovepdf.com","\/\/api28.ilovepdf.com","\/\/api29.ilovepdf.com","\/\/api30.ilovepdf.com","\/\/api31.ilovepdf.com","\/\/api32.ilovepdf.com","\/\/api33.ilovepdf.com","\/\/api34.ilovepdf.com","\/\/api35.ilovepdf.com","\/\/api36.ilovepdf.com","\/\/api37.ilovepdf.com","\/\/api38.ilovepdf.com","\/\/api39.ilovepdf.com","\/\/api40.ilovepdf.com","\/\/api41.ilovepdf.com","\/\/api43.ilovepdf.com","\/\/api44.ilovepdf.com","\/\/api45.ilovepdf.com","\/\/api46.ilovepdf.com","\/\/api47.ilovepdf.com","\/\/api48.ilovepdf.com","\/\/api49.ilovepdf.com","\/\/api50.ilovepdf.com","\/\/api51.ilovepdf.com","\/\/api52.ilovepdf.com","\/\/api53.ilovepdf.com","\/\/api54.ilovepdf.com","\/\/api55.ilovepdf.com","\/\/api56.ilovepdf.com","\/\/api57.ilovepdf.com","\/\/api58.ilovepdf.com","\/\/api59.ilovepdf.com","\/\/api60.ilovepdf.com","\/\/api61.ilovepdf.com","\/\/api62.ilovepdf.com","\/\/api63.ilovepdf.com","\/\/api64.ilovepdf.com","\/\/api65.ilovepdf.com"],"level":"user","downloadUrl":"\/download","user":null,"country":"PK","dtr":true,"websockets":["ws1.ilovepdf.com","ws1.ilovepdf.com","ws1.ilovepdf.com","ws1.ilovepdf.com","ws1.ilovepdf.com","ws2.ilovepdf.com","ws1.ilovepdf.com","ws1.ilovepdf.com"]};
            ilovepdfConfig.taskId = 'zx5gv694dw6rb9p5p78ssrp0d0qs2dkr89mftAxx7zk4n93mky9hjpdx2dwglkpfx172m5ms4ybbsztbgv4yz1qm4b6qg833gnhgh2wx96p082xyAb2ryA3s280kl1m996At75zmf83x4nAwtkpx19x4r0f79ypjngmA4fdqfvh94sbp35x1';
            ilovepdfConfig.workerServer = '//api56.ilovepdf.com';
            ilovepdfConfig.wsWorkerServer = 'ws1.ilovepdf.com';
        </script>

        <!-- Scan can't support IE and Edge due to they don't implement WebSockets. -->
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
            csrfToken: 'pHPywNOobP47bSAS-u0AGyo7wIOObPWPv739DiZN_g_rJai0l9Fbyw8ZDV6fmXZBHXGn1989oM361bdYdh2meA=='
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
    <script src="dist/js/web.01f5a37.js" async="async"></script>
    <script src="dist/js/scan.01f5a37.js" async="async"></script>
@endsection
