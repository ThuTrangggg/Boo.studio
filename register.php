<?php
require("./header.php");
include("connect.php");
?>
<html>

<body>
    <section class="boo-form amasty-mega-menu customer-account-create page-layout-1column">
        <div class="columns">
            <div class="column main">
                <div class="page-title-wrapper">
                    <h1 class="page-title">
                        <span class="base" data-ui-id="page-title-wrapper">Đăng ký</span>
                    </h1>
                </div>
                <form class="form create account form-create-account" action="/action/register.php" method="post" id="form-validate" autocomplete="off">
                    <fieldset class="fieldset create info">

                        <div class="field field-name-firstname required">
                            <label class="label" for="firstname">
                                <span>Tên</span>
                            </label>
                            <div class="control">
                                <input type="text" id="firstname" name="firstname" value="" placeholder="Tên" title="Tên" class="input-text required-entry" autocomplete="off" aria-required="true">
                            </div>
                        </div>
                        <div class="field field-name-lastname required">
                            <label class="label" for="lastname">
                                <span>Họ</span>
                            </label>
                            <div class="control">
                                <input type="text" id="lastname" name="lastname" value="" placeholder="Họ" title="Họ" class="input-text required-entry" autocomplete="off" aria-required="true">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="fieldset create account" >
                        <div class="field field-telephone required">
                            <label class="label" for="telephone"><span>Số điện thoại</span></label>
                            <div class="control">
                                <input type="text" id="telephone" name="telephone" placeholder="Số điện thoại" value="" class="input-text" autocomplete="off" aria-required="true">
                            </div>
                        </div>

                        <div class="field required">
                            <label for="email_address" class="label"><span>Email *</span></label>
                            <div class="control">
                                <input type="email" name="email" autocomplete="email" id="email_address" value="" placeholder="Email" title="Email" class="input-text" aria-required="true">
                            </div>
                        </div>
                        <div class="field password required">
                            <label for="password" class="label"><span>Mật khẩu</span></label>
                            <div class="control">
                                <input type="password" name="password" id="password" placeholder="Mật khẩu" title="Mật khẩu" class="input-text" autocomplete="off" aria-required="true">
                            </div>

                        </div>
                    </fieldset>
                    <div class="actions-toolbar">
                        <div class="primary">
                            <button type="button" class="action submit primary" title="Đăng ký">
                                <span>Đăng ký</span>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <script>
        $('#form-validate').click(function(e){
            e.preventDefault();
            var url = $(this).attr('action');
            var field = 0;
            $('.mage-error').remove();
            $('input[aria-required="true"]').each(function(){
                var value = $(this).val();
                var parent = $(this).parent('.control');
                if(value.length == 0){
                    field = field + 1;
                    if(!$(this).hasClass('error')){
                        $(this).addClass('error');
                    }
                    parent.append('<div class="mage-error" generated="true">Đây là trường bắt buộc.</div>');
                    return false;
                }else{
                    $(this).removeClass('error');
                }
            });
            
            if(field > 0){
                return false;
            }
            var formData = new FormData();
            $(this).serializeArray().forEach(function(field) {
                formData.append(field.name, field.value)
            });
            $.ajax({
                url : url,
                type: 'POST',
                dataType: 'json',
                data : formData,
                cache : false,
                processData: false,
                contentType: false,
                success:function(data){
                    alert(data.message);
                    if(data.status){
                        window.location.href = data.url;
                    }
                }
            });
        })
    </script>
</body>

</html>