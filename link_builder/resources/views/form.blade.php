<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="js/dist/cropper.css"/>
    <style>
        .contacts_child {
            margin-top: 30px;
        }
        .social_child {
            margin-top: 30px;
        }

        .add-button {
            background-color: white; /* Green */
            border: none;
            color: green;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .add-button:hover {
        // background-color: #4CAF50;
            color: white;
        }
        .remove-button {
            background-color: white; /* Green */
            border: none;
            color: red;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .remove-button:hover {
            background-color: red;
            color: white;
        }

        img {
            display: block;
            max-width: 100%;
        }
        .preview {
            overflow: hidden;
            width: 160px;
            height: 160px;
            margin: 10px;
            border: 1px solid red;
        }
        .modal-lg{
            max-width: 1000px !important;
        }
    </style>
</head>
<center>
    <form method="post" action="">
        <section class="detail">
            <h3>
                لینک ها مهم
            </h3>
            <div>
                <label for="fname">نام:</label><br>
                <input type="text" id="name" name="name" value="">
            </div>
            <div>
                <label for="lname">عنوان:</label><br>
                <input type="text" id="title" name="title" value="">
            </div>
            <div>
                <label for="lname">توضیحات:</label><br>
                <textarea  id="description" name="description" value=""></textarea>
            </div>
            <div>
                <label for="lname">کشور:</label><br>
                <input type="text" id="country" name="country" value="">
            </div>
            <div>
                <label for="lname">شهر:</label><br>
                <input type="text" id="city" name="city" value="">
            </div>
            <div>
                <label for="lname">ساب دامنه:</label><br>
                <input type="text" id="user_name" name="user_name" value="">
            </div>
            <div>

                <label for="lname">لوگو:</label><br>
                <input accept="image/*" type="file" id="logo" name="logo" value="">

            </div>
            <div>
                <label for="lname">بنر:</label><br>
                <input type="file" id="banner" name="banner" value="">
            </div>
        </section>
        <section class="section-contacts">
            <h3>اطلاعات تماس</h3>
            <div id="contacts_parent_js"  class="contacts_parent">
                <div id="contacts_child_js"  class="contacts_child">
                    <div>
                        <label for="title">شماره تلفن:</label><br>
                        <input type="text" id="title" name="title[]" value="">
                    </div>
                    <div>
                        <label for="phone">شماره همراه:</label><br>
                        <input type="text" id="phone" name="phone[]" value="">
                    </div>
                    <div>
                        <label for="email">ایمیل:</label><br>
                        <input type="text" id="email" name="email[]" value="">
                    </div>
                    {{--                    <button class="remove-button" type="button" onclick="delete_node(this);">delete</button>--}}

                </div>
            </div>
            {{--            <button type="button" class="add-button" onclick="duplicate_section('contacts_parent_js', 'contacts_child_js');">add</button>--}}
        </section>
        <section class="section-social">
            <h3>شبکه های اجتماعی</h3>
            <div id="social_parent_js"  class="social_parent">
                <div id="social_child_js"  class="social_child">
                    <div >
                        <label for="title">شبکه اجتماعی:</label><br>
                        <select  onchange="show_next_parrant_element(this);" type="text" id="social_network" name="social_network[]" value="">
                            <option selected value="">انتخاب</option>
                            <option value="insta">اینستاگرام</option>
                            <option value="telegram">تلگرام</option>
                        </select>
                    </div>
                    <span style="visibility: hidden;">
                        <div>
                            <label for="title">عنوان:</label><br>
                            <input type="text" id="social_title" name="social_title[]" value="">
                        </div>
                        <div>
                            <label for="url">لینک:</label><br>
                            <input type="text" id="social_url" name="social_url[]" value="">
                        </div>
                    </span>
                    <button class="remove-button" type="button" onclick="delete_node(this);">حذف</button>
                </div>
            </div>
            <button type="button" class="add-button" onclick="duplicate_section('social_parent_js', 'social_child_js');">افزودن</button>


        </section>
        <input type="submit" value="Submit">
    </form>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Laravel Cropper Js - Crop Image Before Upload - wesley-sinde</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                </div>
            </div>
        </div>
    </div>

</center>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
<script src="js/dist/cropper.js"></script>
<script>
    var $modal = $('#modal');
    var image = document.getElementById('logo');
    var cropper;

    $("body").on("change", "#logo", function(e){
        var files = e.target.files;
        var done = function (url) {
            image.src = url;
            $modal.modal('show');
        };
        var reader;
        var file;
        var url;
        if (files && files.length > 0) {
            file = files[0];
            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function (e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });
    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    //ajax
    // $("#crop").click(function(){
    //     canvas = cropper.getCroppedCanvas({
    //         width: 160,
    //         height: 160,
    //     });
    //     canvas.toBlob(function(blob) {
    //         url = URL.createObjectURL(blob);
    //         var reader = new FileReader();
    //         reader.readAsDataURL(blob);
    //         reader.onloadend = function() {
    //             var base64data = reader.result;
    //             $.ajax({
    //                 type: "POST",
    //                 dataType: "json",
    //                 url: "crop-image-upload",
    //                 data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},
    //                 success: function(data){
    //                     console.log(data);
    //                     $modal.modal('hide');
    //                     alert("Crop image successfully uploaded");
    //                 }
    //             });
    //         }
    //     });
    // })
</script>


</html>
