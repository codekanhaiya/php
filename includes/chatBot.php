<head>
    <link rel="stylesheet" href="css/patientDash.css">
</head>

<div class="modal fade" id="chatBot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius:10px;">
            <!-- <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </button>
            </div> -->

            <div class="modal-body" style="margin:0px; padding:0px;">

                <div class="chatBot" style="box-shadow:none;">
                    <div class="chat-header">Let's chat</div>
                    <div class="chat-body">
                        <div class="loading hide">
                            <!-- hide -->
                            <div class="circle circle-1"></div>
                            <div class="circle circle-2"></div>
                            <div class="circle circle-3"></div>
                        </div>
                    </div>
                    <div class="chat-input p-3">
                        <input class="inp form-control" type="text" placeholder="Type a Message" id="txtInput">
                        <!-- <input class="inp" type="text" placeholder="Type a Message" id="txtInput"> -->
                        <button class="send"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<script type="module" src="js/dash.js" defer></script>
    <!-- <script type="text/javascript" src="js/response.js" defer></script> -->