
 <div class="color-line"></div>
                                <div class="modal-header">
                                    <h4 class="modal-title">Modal title</h4>
                                    <small class="font-bold">Lorem Ipsum is simply dummy text.</small>
                                </div>
                                <div class="modal-body">
                                   <form name="simpleForm" novalidate id="simpleForm" action="#" method="post">

                        <div class="text-center m-b-md" id="wizardControl">

                            <a class="btn btn-primary" href="#step1" data-toggle="tab">Step 1 - Personal data</a>
                            <a class="btn btn-default" href="#step2" data-toggle="tab">Step 2 - Payment data</a>
                            <a class="btn btn-default" href="#step3" data-toggle="tab">Step 3 - Approval</a>

                        </div>

                        <div class="tab-content">
                        <div id="step1" class="p-m tab-pane active">

                            <div class="row">
                                <div class="col-lg-3 text-center">
                                    <i class="pe-7s-user fa-5x text-muted"></i>
                                    <p class="small m-t-md">
                                        <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                        <br/><br/>Lorem Ipsum has been the industry's dummy text of the printing and typesetting
                                    </p>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group col-lg-12">
                                            <label>Username</label>
                                            <input type="" value="" id="" class="form-control" name="username" placeholder="username">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Password</label>
                                            <input type="password" value="" id="" class="form-control" name="" placeholder="******" name="password">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Company</label>
                                            <input type="text" value="" id="" class="form-control" name="" placeholder="Company Name" name="company">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Email Address</label>
                                            <input type="" value="" id="" class="form-control" name="" placeholder="user@email.com" name="email">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Country</label>
                                            <input type="text" value="" id="" class="form-control" name="" name="country" placeholder="UK">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right m-t-xs">
                                <a class="btn btn-default prev" href="#">Previous</a>
                                <a class="btn btn-default next" href="#">Next</a>
                            </div>

                        </div>

                        <div id="step2" class="p-m tab-pane">

                            <div class="row">
                                <div class="col-lg-3 text-center">
                                    <i class="pe-7s-credit fa-5x text-muted"></i>
                                    <p class="small m-t-md">
                                        <strong>It is a long</strong> established fact that a reader will be distracted by the readable
                                        <br/><br/>Many desktop publishing packages and web page editors now use
                                    </p>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group col-lg-12">
                                            <label>Name on Card</label>
                                            <input type="" value="" id="" class="form-control" name="card_name">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Card Number</label>
                                            <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Billing Address</label>
                                            <input type="text" value="" id="" class="form-control" name="" name="billing_address">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <div class="row">
                                                <div class="col-xs-4 form-group">
                                                    <label>CVC</label>
                                                    <input class="form-control" placeholder="ex. 381"  type="text" name="cvc">
                                                </div>
                                                <div class="col-xs-4 form-group">
                                                    <label>Expiration</label>
                                                    <input class="form-control" placeholder="MM" type="text" name="expire_month">
                                                </div>
                                                <div class="col-xs-4 form-group">
                                                    <label></label>
                                                    <input class="form-control" placeholder="YYYY" type="text" name="expire_year">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right m-t-xs">
                                <a class="btn btn-default prev" href="#">Previous</a>
                                <a class="btn btn-default next" href="#">Next</a>
                            </div>

                        </div>
                        <div id="step3" class="tab-pane">
                            <div class="row text-center m-t-lg m-b-lg">
                                <div class="col-lg-12">
                                    <i class="pe-7s-check fa-5x text-muted"></i>
                                    <p class="small m-t-md">
                                        <strong>There are many</strong> variations of passages of Lorem Ipsum available, but the majority have suffered
                                    </p>
                                </div>
                                <div class="checkbox col-lg-12">
                                    <input type="checkbox" class="i-checks approveCheck" name="approve" >
                                    Approve this form
                                </div>
                            </div>
                            <div class="text-right m-t-xs">
                                <a class="btn btn-default prev" href="#">Previous</a>
                                <!--
                                <a class="btn btn-default next" href="#">Next</a>
                                <a class="btn btn-success submitWizard" href="#">Submit</a>
                                -->
                            </div>
                        </div>
                        </div>
                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary submitWizard">Save changes</button>
                                </div>



<script>

        $(function(){

                $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('a[data-toggle="tab"]').removeClass('btn-primary');
            $('a[data-toggle="tab"]').addClass('btn-default');
            $(this).removeClass('btn-default');
            $(this).addClass('btn-primary');
        })

        $('.next').click(function(){
            var nextId = $(this).parents('.tab-pane').next().attr("id");
            $('[href=#'+nextId+']').tab('show');
        })

        $('.prev').click(function(){
            var prevId = $(this).parents('.tab-pane').prev().attr("id");
            $('[href=#'+prevId+']').tab('show');
        })

        $('.submitWizard').click(function(){

            var approve = $(".approveCheck").is(':checked');
            if(approve) {
                // Got to step 1
                $('[href=#step1]').tab('show');

                // Serialize data to post method
                var datastring = $("#simpleForm").serialize();

                // Show notification


                $('#myModal5').hide();
                swal({
                     title: "Thank you!",
                    text: "You approved our example form!",
                    type: "success"
                },
                function(isConfirm) {
                    $('#myModal5').hide();
                });


//            Example code for post form
//            $.ajax({
//                type: "POST",
//                url: "your_link.php",
//                data: datastring,
//                success: function(data) {
//                    // Notification
//                }
//            });
            } else {
                // Show notification
                $('#myModal5').hide();
                swal({
                        title: "Error!",
                    text: "You have to approve form checkbox.",
                    type: "error"
                },
                function(isConfirm) {
                    $('#myModal5').show();
                });


            }
        })
    });
</script>