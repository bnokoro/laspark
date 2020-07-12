<div class="tab-pane p-3 user-tab" id="pagetwo" role="tabpanel">

    <form action="/admin/settings/update-pagetwo"  method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="">Banner</label>
                                    <input type="file"
                                           id="filepond"
                                           class="filepond"
                                           name="page2_banner"
                                           data-max-files="1">
                                </div>

                                
                                <div class="form-group">
                                    <label for="">Header</label>
                                    <input id="page2_heading" class="form-control" type="text" name="page2_heading"  
                                   placeholder="Page2 Heading"   value="{{$setting ? $setting->page2_heading : ''}}">
                                    
                                </div>

                               <div class="form-group">
                                    <label for="">Page3 Banner</label>
                                    <input type="file"
                                           id="filepond"
                                           class="filepond"
                                           name="page3_banner"
                                           data-max-files="1">
                                </div>

                                
                                
                                <div class="form-group">
                                    <label for="">Login Background Image </label>
                                    <input type="file"
                                           id="filepond"
                                           class="filepond"
                                           name="login_background_image"
                                           data-max-files="1">
                                </div>

                                
                                <div class="form-group">
                                    <label for="">Footer Image </label>
                                    <input type="file"
                                           id="filepond"
                                           class="filepond"
                                           name="footer_image"
                                           data-max-files="1">
                                </div>

                                <div class="form-group">
                                    <button type="submit"
                                            class="btn btn-primary btn-sm">Update</button>
                                </div>
</form>

</div>