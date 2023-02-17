<?php include("common/header-sidebar.php")?>
      
        <?php $data = _fetch("website","id=1"); ?>
        <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">


            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Footer 1</h2>
            </div>
            <div style="display:flex;justify-content:space-around">
              <?php 
              if(isset($_POST['add_logo'])){
                $file_name = $_FILES['file']['name'];
                $file_tmp = $_FILES['file']['tmp_name'];
                move_uploaded_file($file_tmp,"upload/$file_name");
                if(empty($file_name)){
                  $msg = "Please Select File";
                  header("location:settings.php?msg=$msg");
                }else{
                $update = _update("website","footer_img='$file_name'","id=1");
                if($update){
                  $msg = "Successfully Updated";
                  header("location:footer-settings.php?msg=$msg");
                }
                else{
                  $err = "Something is wrong";
                }
              }
              }elseif(isset($_POST['remove_logo'])){
                $update = _update("website","file_name=''","id=1");
                if($update){
                  $msg = "Successfully Removed";
                  header("location:footer-settings.php?msg=$msg");
                }
              }              
              ?>
              <div>
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
                  <label for="logo_image">Logo Image</label>
                  <?php if(empty($data['file_name'])){}else{?>
                  <img style="width:300px;height:100px;margin:10px auto;border-radius:10px;" src="upload/<?php echo $data['footer_img']?>">
                  <?php }?>
                  <input style="padding-top:10px" name="file" class="input" type="file" id="logo_file">
                </div>

                <div class="col-span-2 flex justify-start">
                  <div class="w-fit" style="display:flex;gap:10px;padding:20px 0">
                    <button type="submit" name="add_logo" class="button">Add</button>
                    <button type="submit" name="remove_logo" class="button">Remove</button>
                  </div>
                </div>
                </form>
              </div>

            <form action="" method="POST" class="grid grid-cols-2 gap-y-6 gap-x-12">

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f1_link_title1">Link Title 1</label>
              <input name="f1_link_title1" class="input" type="text" id="f1_link_title1" placeholder="Link Title 1" required value="<?php echo $data['f1_link_title1']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f1_link_url1">Link Url 1</label>
              <input name="f1_link_url1" class="input" type="text" id="f1_link_url1" placeholder="Link Url 1" required value="<?php echo $data['f1_link_url1']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f1_link_title2">Link Title 2</label>
              <input name="f1_link_title2" class="input" type="text" id="f1_link_title2" placeholder="Link Title 2" required value="<?php echo $data['f1_link_title2']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f1_link_url2">Link Url 2</label>
              <input name="f1_link_url2" class="input" type="text" id="f1_link_url2" placeholder="Link Url 2" required value="<?php echo $data['f1_link_url2']?>">
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button type="submit" name="submit" class="button">Save</button>
              </div>
            </div>
          </form>

        </div>

            

<hr>
          <form action="" method="POST" class="">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Footer 2</h2>
            </div>

            <div style="padding:50px 10px">
              <label for="f2_textarea">Footer Text</label>
              <textarea style="padding:10px;border:2px solid gray;width:100%;height:200px;border-radius:5px;" name="f2_textarea" class="textarea" id=""></textarea>
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button type="submit" name="submit" class="button">Save</button>
              </div>
            </div>
          </form>



<hr>
          <form action="" method="POST" class="grid grid-cols-2 gap-y-6 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Footer 3</h2>
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f3_link_title1">Link Title 1</label>
              <input name="f3_link_title1" class="input" type="text" id="f3_link_title1" placeholder="Link Title 1" required value="<?php echo $data['f3_link_title1']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f3_link_url1">Link Url 1</label>
              <input name="f3_link_url1" class="input" type="text" id="f3_link_url1" placeholder="Link Url 1" required value="<?php echo $data['f3_link_url1']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f3_link_title2">Link Title 2</label>
              <input name="f3_link_title2" class="input" type="text" id="f3_link_title2" placeholder="Link Title 2" required value="<?php echo $data['f3_link_title2']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f3_link_url2">Link Url 2</label>
              <input name="f3_link_url2" class="input" type="text" id="f3_link_url2" placeholder="Link Url 2" required value="<?php echo $data['f3_link_url2']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f3_link_title3">Link Title 3</label>
              <input name="f3_link_title3" class="input" type="text" id="f3_link_title3" placeholder="Link Title 3" required value="<?php echo $data['f3_link_title3']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f3_link_url3">Link Url 3</label>
              <input name="f3_link_url3" class="input" type="text" id="f3_link_url3" placeholder="Link Url 3" required value="<?php echo $data['f3_link_url3']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f3_link_title4">Link Title 4</label>
              <input name="f3_link_title4" class="input" type="text" id="f3_link_title4" placeholder="Link Title 4" required value="<?php echo $data['f4_link_title2']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f3_link_url4">Link Url 4</label>
              <input name="f3_link_url4" class="input" type="text" id="f3_link_url4" placeholder="Link Url 4" required value="<?php echo $data['f4_link_url2']?>">
            </div>



            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button type="submit" name="submit" class="button">Save</button>
              </div>
            </div>
          </form>

          



<hr>
          <form action="" method="POST" class="grid grid-cols-2 gap-y-6 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Footer 4</h2>
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f4_link_title1">Link Title 1</label>
              <input name="f4_link_title1" class="input" type="text" id="f4_link_title1" placeholder="Link Title 1" required value="<?php echo $data['f4_link_title1']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f4_link_url1">Link Url 1</label>
              <input name="f4_link_url1" class="input" type="text" id="f4_link_url1" placeholder="Link Url 1" required value="<?php echo $data['f4_link_url1']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f4_link_title2">Link Title 2</label>
              <input name="f4_link_title2" class="input" type="text" id="f4_link_title2" placeholder="Link Title 2" required value="<?php echo $data['f4_link_title2']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f4_link_url2">Link Url 2</label>
              <input name="f4_link_url2" class="input" type="text" id="f4_link_url2" placeholder="Link Url 2" required value="<?php echo $data['f4_link_url2']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f4_link_title3">Link Title 3</label>
              <input name="f4_link_title3" class="input" type="text" id="f4_link_title3" placeholder="Link Title 3" required value="<?php echo $data['f4_link_title3']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f4_link_url3">Link Url 3</label>
              <input name="f4_link_url3" class="input" type="text" id="f4_link_url3" placeholder="Link Url 3" required value="<?php echo $data['f4_link_url3']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f4_link_title4">Link Title 4</label>
              <input name="f4_link_title4" class="input" type="text" id="f4_link_title4" placeholder="Link Title 4" required value="<?php echo $data['f4_link_title2']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="f4_link_url4">Link Url 4</label>
              <input name="f4_link_url4" class="input" type="text" id="f4_link_url4" placeholder="Link Url 4" required value="<?php echo $data['f4_link_url2']?>">
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button type="submit" name="submit" class="button">Save</button>
              </div>
            </div>
          </form>
          



<hr>
          <form action="" method="POST" class="grid grid-cols-2 gap-y-6 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Footer Menu</h2>
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="fm_link_title1">Link Title 1</label>
              <input name="fm_link_title1" class="input" type="text" id="fm_link_title1" placeholder="Link Title 1" required value="<?php echo $data['fm_link_title1']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="fm_link_url1">Link Url 1</label>
              <input name="fm_link_url1" class="input" type="text" id="fm_link_url1" placeholder="Link Url 1" required value="<?php echo $data['fm_link_url1']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="fm_link_title2">Link Title 2</label>
              <input name="fm_link_title2" class="input" type="text" id="fm_link_title2" placeholder="Link Title 2" required value="<?php echo $data['fm_link_title2']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="fm_link_url2">Link Url 2</label>
              <input name="fm_link_url2" class="input" type="text" id="fm_link_url2" placeholder="Link Url 2" required value="<?php echo $data['fm_link_url2']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="fm_link_title3">Link Title 3</label>
              <input name="fm_link_title3" class="input" type="text" id="fm_link_title3" placeholder="Link Title 3" required value="<?php echo $data['fm_link_title3']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="fm_link_url3">Link Url 3</label>
              <input name="fm_link_url3" class="input" type="text" id="fm_link_url3" placeholder="Link Url 3" required value="<?php echo $data['fm_link_url3']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="fm_link_title4">Link Title 4</label>
              <input name="fm_link_title4" class="input" type="text" id="fm_link_title4" placeholder="Link Title 4" required value="<?php echo $data['f4_link_title2']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="fm_link_url4">Link Url 4</label>
              <input name="fm_link_url4" class="input" type="text" id="fm_link_url4" placeholder="Link Url 4" required value="<?php echo $data['f4_link_url2']?>">
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button type="submit" name="submit" class="button">Save</button>
              </div>
            </div>
          </form>


          
<hr>
<?php
        $data = _fetch("website","id=1");

        if(isset($_POST['submit'])){
            $footer_text = $_POST['footer_text'];
            $update = _update("website","footer_text='$footer_text'","id=1");

            if($update){
              $msg = "Update Successfully";
              header("location:footer-settings.php?msg=$msg");
            }else{
              echo $err = "Something is wrong";
            }
        }
        ?>
          <form action="" method="POST" class="">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Copy Right Text</h2>
            </div>

            <div style="padding:50px 10px">
              <label for="footer_text">Footer Text</label>
              <textarea style="padding:10px;border:2px solid gray;width:100%;height:200px;border-radius:5px;" name="" class="textarea" id=""></textarea>
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button type="submit" name="submit" class="button">Save</button>
              </div>
            </div>
          </form>

          




      </div>
    </div>
  </main>

  <script src="js/app.js"></script>
</body>

</html>