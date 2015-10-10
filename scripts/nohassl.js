        $(function() {

            $(window.activeDLG + '.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

            $('a[data-toggle="lifetab"]').on('shown.bs.tab', function(e) {
                $('a[data-toggle="lifetab"]').removeClass('btn-primary');
                $('a[data-toggle="lifetab"]').addClass('btn-default');
                $(this).removeClass('btn-default');
                $(this).addClass('btn-primary');
            })

            $('#lifenext').click(function() {
                 $('[href=#step2life]').tab('show');
            });

            $('#lifeprev').click(function() {
                   $('[href=#step1life]').tab('show');
            });

            $('#lifenext2').click(function() {
                 $('[href=#step3life]').tab('show');
            });

             $('#lifenext3').click(function() {
                 $('[href=#step4life]').tab('show');
            });

            $('#lifeprev2').click(function() {
                $('[href=#step1life]').tab('show');
            });

            $('#lifeprev3').click(function() {
                $('[href=#step2life]').tab('show');
            });


            $('#lifeprev4').click(function() {
                $('[href=#step3life]').tab('show');
            });        


            $('#lifestep1').click(function() {
                $('[href=#step1life]').tab('show');
            });

            $('#lifestep2').click(function() {
                $('[href=#step2life]').tab('show');
            });

            $('#lifestep3').click(function() {
                $('[href=#step3life]').tab('show');
            });


            $('#lifestep4').click(function() {
                $('[href=#step4life]').tab('show');
            });


            $('#lifesubmit').click(function() {
                var approve = $("#lifeapproveCheck").is(':checked');
                if (approve) {
                    // Got to step 1
                    $('[href=#step1]').tab('show');
                    // Serialize data to post method
                    var datastring = $("#simpleFormLife").serialize();
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Thank you!",
                            text: "You approved our example form!",
                            type: "success"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).hide();
                        });
                    //            SEND DATA
      
                } else {
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Error!",
                            text: "You have to approve form checkbox.",
                            type: "error"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).show();
                        });

                }
            })



// Health Insurance
  $('a[data-toggle="healthtab"]').on('shown.bs.tab', function(e) {
                $('a[data-toggle="healthtab"]').removeClass('btn-primary');
                $('a[data-toggle="healthtab"]').addClass('btn-default');
                $(this).removeClass('btn-default');
                $(this).addClass('btn-primary');
            })

            $('#healthnext').click(function() {
                 $('[href=#step2health]').tab('show');
            });

            $('#healthprev').click(function() {
                   $('[href=#step1health]').tab('show');
            });

            $('#healthnext2').click(function() {
                 $('[href=#step3health]').tab('show');
            });

            $('#healthprev2').click(function() {
                $('[href=#step1health]').tab('show');
            });

            $('#healthprev3').click(function() {
                $('[href=#step2health]').tab('show');
            });


            $('#healthstep1').click(function() {
                $('[href=#step1health]').tab('show');
            });

            $('#healthstep2').click(function() {
                $('[href=#step2health]').tab('show');
            });

            $('#healthstep3').click(function() {
                $('[href=#step3health]').tab('show');
            });


            $('#healthsubmit').click(function() {
                var approve = $("#healthapproveCheck").is(':checked');
                if (approve) {
                    // Got to step 1
                    $('[href=#step1]').tab('show');
                    // Serialize data to post method
                    var datastring = $("#simpleFormhealth").serialize();
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Thank you!",
                            text: "You approved our example form!",
                            type: "success"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).hide();
                        });
                    //            SEND DATA
      
                } else {
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Error!",
                            text: "You have to approve form checkbox.",
                            type: "error"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).show();
                        });

                }
            })
  


// home Insurance
  $('a[data-toggle="hometab"]').on('shown.bs.tab', function(e) {
                $('a[data-toggle="hometab"]').removeClass('btn-primary');
                $('a[data-toggle="hometab"]').addClass('btn-default');
                $(this).removeClass('btn-default');
                $(this).addClass('btn-primary');
            })

            $('#homenext').click(function() {
                 $('[href=#step2home]').tab('show');
            });

            $('#homeprev').click(function() {
                   $('[href=#step1home]').tab('show');
            });

            $('#homenext2').click(function() {
                 $('[href=#step3home]').tab('show');
            });

            $('#homeprev2').click(function() {
                $('[href=#step1home]').tab('show');
            });

            $('#homeprev3').click(function() {
                $('[href=#step2home]').tab('show');
            });


            $('#homestep1').click(function() {
                $('[href=#step1home]').tab('show');
            });

            $('#homestep2').click(function() {
                $('[href=#step2home]').tab('show');
            });

            $('#homestep3').click(function() {
                $('[href=#step3home]').tab('show');
            });


            $('#homesubmit').click(function() {
                var approve = $("#homeapproveCheck").is(':checked');
                if (approve) {
                    // Got to step 1
                    $('[href=#step1]').tab('show');
                    // Serialize data to post method
                    var datastring = $("#simpleFormhome").serialize();
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Thank you!",
                            text: "You approved our example form!",
                            type: "success"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).hide();
                        });
                    //            SEND DATA
      
                } else {
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Error!",
                            text: "You have to approve form checkbox.",
                            type: "error"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).show();
                        });

                }
            })
  




// vehicle Insurance
  $('a[data-toggle="vehicletab"]').on('shown.bs.tab', function(e) {
                $('a[data-toggle="vehicletab"]').removeClass('btn-primary');
                $('a[data-toggle="vehicletab"]').addClass('btn-default');
                $(this).removeClass('btn-default');
                $(this).addClass('btn-primary');
            })

            $('#vehiclenext').click(function() {
                 $('[href=#step2vehicle]').tab('show');
            });

            $('#vehicleprev').click(function() {
                   $('[href=#step1vehicle]').tab('show');
            });

            $('#vehiclenext2').click(function() {
                 $('[href=#step3vehicle]').tab('show');
            });

            $('#vehicleprev2').click(function() {
                $('[href=#step1vehicle]').tab('show');
            });

            $('#vehicleprev3').click(function() {
                $('[href=#step2vehicle]').tab('show');
            });


            $('#vehiclestep1').click(function() {
                $('[href=#step1vehicle]').tab('show');
            });

            $('#vehiclestep2').click(function() {
                $('[href=#step2vehicle]').tab('show');
            });

            $('#vehiclestep3').click(function() {
                $('[href=#step3vehicle]').tab('show');
            });


            $('#vehiclesubmit').click(function() {
                var approve = $("#vehicleapproveCheck").is(':checked');
                if (approve) {
                    // Got to step 1
                    $('[href=#step1]').tab('show');
                    // Serialize data to post method
                    var datastring = $("#simpleFormvehicle").serialize();
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Thank you!",
                            text: "You approved our example form!",
                            type: "success"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).hide();
                        });
                    //            SEND DATA
      
                } else {
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Error!",
                            text: "You have to approve form checkbox.",
                            type: "error"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).show();
                        });

                }
            })
  




// funeral Insurance
  $('a[data-toggle="funeraltab"]').on('shown.bs.tab', function(e) {
                $('a[data-toggle="funeraltab"]').removeClass('btn-primary');
                $('a[data-toggle="funeraltab"]').addClass('btn-default');
                $(this).removeClass('btn-default');
                $(this).addClass('btn-primary');
            })

            $('#funeralnext').click(function() {
                 $('[href=#step2funeral]').tab('show');
            });

            $('#funeralprev').click(function() {
                   $('[href=#step1funeral]').tab('show');
            });

            $('#funeralnext2').click(function() {
                 $('[href=#step3funeral]').tab('show');
            });

            $('#funeralprev2').click(function() {
                $('[href=#step1funeral]').tab('show');
            });

            $('#funeralprev3').click(function() {
                $('[href=#step2funeral]').tab('show');
            });


            $('#funeralstep1').click(function() {
                $('[href=#step1funeral]').tab('show');
            });

            $('#funeralstep2').click(function() {
                $('[href=#step2funeral]').tab('show');
            });

            $('#funeralstep3').click(function() {
                $('[href=#step3funeral]').tab('show');
            });


            $('#funeralsubmit').click(function() {
                var approve = $("#funeralapproveCheck").is(':checked');
                if (approve) {
                    // Got to step 1
                    $('[href=#step1]').tab('show');
                    // Serialize data to post method
                    var datastring = $("#simpleFormfuneral").serialize();
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Thank you!",
                            text: "You approved our example form!",
                            type: "success"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).hide();
                        });
                    //            SEND DATA
      
                } else {
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Error!",
                            text: "You have to approve form checkbox.",
                            type: "error"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).show();
                        });

                }
            })
  




// income Insurance
  $('a[data-toggle="incometab"]').on('shown.bs.tab', function(e) {
                $('a[data-toggle="incometab"]').removeClass('btn-primary');
                $('a[data-toggle="incometab"]').addClass('btn-default');
                $(this).removeClass('btn-default');
                $(this).addClass('btn-primary');
            })

            $('#incomenext').click(function() {
                 $('[href=#step2income]').tab('show');
            });

            $('#incomeprev').click(function() {
                   $('[href=#step1income]').tab('show');
            });

            $('#incomenext2').click(function() {
                 $('[href=#step3income]').tab('show');
            });

            $('#incomeprev2').click(function() {
                $('[href=#step1income]').tab('show');
            });

            $('#incomeprev3').click(function() {
                $('[href=#step2income]').tab('show');
            });


            $('#incomestep1').click(function() {
                $('[href=#step1income]').tab('show');
            });

            $('#incomestep2').click(function() {
                $('[href=#step2income]').tab('show');
            });

            $('#incomestep3').click(function() {
                $('[href=#step3income]').tab('show');
            });


            $('#incomesubmit').click(function() {
                var approve = $("#incomeapproveCheck").is(':checked');
                if (approve) {
                    // Got to step 1
                    $('[href=#step1]').tab('show');
                    // Serialize data to post method
                    var datastring = $("#simpleFormincome").serialize();
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Thank you!",
                            text: "You approved our example form!",
                            type: "success"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).hide();
                        });
                    //            SEND DATA
      
                } else {
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Error!",
                            text: "You have to approve form checkbox.",
                            type: "error"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).show();
                        });

                }
            })
  





// travel Insurance
  $('a[data-toggle="traveltab"]').on('shown.bs.tab', function(e) {
                $('a[data-toggle="traveltab"]').removeClass('btn-primary');
                $('a[data-toggle="traveltab"]').addClass('btn-default');
                $(this).removeClass('btn-default');
                $(this).addClass('btn-primary');
            })

            $('#travelnext').click(function() {
                 $('[href=#step2travel]').tab('show');
            });

            $('#travelprev').click(function() {
                   $('[href=#step1travel]').tab('show');
            });

            $('#travelnext2').click(function() {
                 $('[href=#step3travel]').tab('show');
            });

            $('#travelprev2').click(function() {
                $('[href=#step1travel]').tab('show');
            });

            $('#travelprev3').click(function() {
                $('[href=#step2travel]').tab('show');
            });


            $('#travelstep1').click(function() {
                $('[href=#step1travel]').tab('show');
            });

            $('#travelstep2').click(function() {
                $('[href=#step2travel]').tab('show');
            });

            $('#travelstep3').click(function() {
                $('[href=#step3travel]').tab('show');
            });


            $('#travelsubmit').click(function() {
                var approve = $("#travelapproveCheck").is(':checked');
                if (approve) {
                    // Got to step 1
                    $('[href=#step1]').tab('show');
                    // Serialize data to post method
                    var datastring = $("#simpleFormtravel").serialize();
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Thank you!",
                            text: "You approved our example form!",
                            type: "success"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).hide();
                        });
                    //            SEND DATA
      
                } else {
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Error!",
                            text: "You have to approve form checkbox.",
                            type: "error"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).show();
                        });

                }
            })
  





// landlord Insurance
  $('a[data-toggle="landlordtab"]').on('shown.bs.tab', function(e) {
                $('a[data-toggle="landlordtab"]').removeClass('btn-primary');
                $('a[data-toggle="landlordtab"]').addClass('btn-default');
                $(this).removeClass('btn-default');
                $(this).addClass('btn-primary');
            })

            $('#landlordnext').click(function() {
                 $('[href=#step2landlord]').tab('show');
            });

            $('#landlordprev').click(function() {
                   $('[href=#step1landlord]').tab('show');
            });

            $('#landlordnext2').click(function() {
                 $('[href=#step3landlord]').tab('show');
            });

            $('#landlordprev2').click(function() {
                $('[href=#step1landlord]').tab('show');
            });

            $('#landlordprev3').click(function() {
                $('[href=#step2landlord]').tab('show');
            });


            $('#landlordstep1').click(function() {
                $('[href=#step1landlord]').tab('show');
            });

            $('#landlordstep2').click(function() {
                $('[href=#step2landlord]').tab('show');
            });

            $('#landlordstep3').click(function() {
                $('[href=#step3landlord]').tab('show');
            });


            $('#landlordsubmit').click(function() {
                var approve = $("#landlordapproveCheck").is(':checked');
                if (approve) {
                    // Got to step 1
                    $('[href=#step1]').tab('show');
                    // Serialize data to post method
                    var datastring = $("#simpleFormlandlord").serialize();
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Thank you!",
                            text: "You approved our example form!",
                            type: "success"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).hide();
                        });
                    //            SEND DATA
      
                } else {
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Error!",
                            text: "You have to approve form checkbox.",
                            type: "error"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).show();
                        });

                }
            })
  





// pet Insurance
  $('a[data-toggle="pettab"]').on('shown.bs.tab', function(e) {
                $('a[data-toggle="pettab"]').removeClass('btn-primary');
                $('a[data-toggle="pettab"]').addClass('btn-default');
                $(this).removeClass('btn-default');
                $(this).addClass('btn-primary');
            })

            $('#petnext').click(function() {
                 $('[href=#step2pet]').tab('show');
            });

            $('#petprev').click(function() {
                   $('[href=#step1pet]').tab('show');
            });

            $('#petnext2').click(function() {
                 $('[href=#step3pet]').tab('show');
            });

            $('#petprev2').click(function() {
                $('[href=#step1pet]').tab('show');
            });

            $('#petprev3').click(function() {
                $('[href=#step2pet]').tab('show');
            });


            $('#petstep1').click(function() {
                $('[href=#step1pet]').tab('show');
            });

            $('#petstep2').click(function() {
                $('[href=#step2pet]').tab('show');
            });

            $('#petstep3').click(function() {
                $('[href=#step3pet]').tab('show');
            });


            $('#petsubmit').click(function() {
                var approve = $("#petapproveCheck").is(':checked');
                if (approve) {
                    // Got to step 1
                    $('[href=#step1]').tab('show');
                    // Serialize data to post method
                    var datastring = $("#simpleFormpet").serialize();
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Thank you!",
                            text: "You approved our example form!",
                            type: "success"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).hide();
                        });
                    //            SEND DATA
      
                } else {
                    // Show notification
                    $(window.activeDLG).hide();
                    swal({
                            title: "Error!",
                            text: "You have to approve form checkbox.",
                            type: "error"
                        },
                        function(isConfirm) {
                            $(window.activeDLG).show();
                        });

                }
            })
  


        });



/* send functionb */
function sendTheData(url, datastring){
     $.ajax({
             type: "POST",
              url: url,
              data: datastring,
               success: function(data) {
                   // Notification
               }
         });
}