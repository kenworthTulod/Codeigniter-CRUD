<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css')?>">
        <script src="<?php echo base_url('asset/js/jquery-3.1.0.js')?>"></script>
        <script src="<?php echo base_url('asset/js/bootstrap.js')?>"></script>

        <script language="javascript" type="text/javascript">
            
            //JS limit character input in contact_num
            function limitText(limitField, limitCount, limitNum) {
            if (limitField.value.length > limitNum) {
                limitField.value = limitField.value.substring(0, limitNum);
            } else {
                limitCount.value = limitNum - limitField.value.length;
            }
            }

            //JS no special char
            function noSPChar(event){
                if(!((event.keyCode>=65) && (event.keyCode<=90)/*Big letter*/ || (event.keyCode>=97) && (event.keyCode<=122)/*small letter*/ || (event.keyCode==32) || (event.keyCode==8)/*space*/)){
                    event.returnValue = false;
                    return;
                }
                event.returnValue = true;
            }

            function onlyNum(event){
                if(!((event.keycode>=48) && (event.keycode<=57))){
                    event.returnValue = false;
                    return
                }
                event.returnValue = true;
            }

        </script>
    
    

    <title>CRUD</title>

  </head>

  <body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="<?php echo base_url('CRUD_control'); ?>">CRUD</a>
        <a class="navbar-brand" href="<?php echo base_url('CRUD_control_login/logout'); ?>">Logout</a>
    </nav>

    <br>

    <div class="col-md-12">