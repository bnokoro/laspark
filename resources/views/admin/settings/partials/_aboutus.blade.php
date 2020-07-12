<div class="tab-pane p-3" id="aboutus" role="tabpanel">

    <form action="/admin/settings/update-aboutus"  method="post" enctype="multipart/form-data">
                                @csrf
   
                                <div class="form-group">
                                    <label for="">About Us</label>
                                    <input id="about_us" class="form-control" type="text" name="about_us"  
                                   placeholder="About Us"   value="{{$setting ? $setting->about_us : ''}}">
                                    
                                </div>

                                <div class="form-group">
                                    <label for="">Contact Us</label>
                                    <input id="contact_us" class="form-control" type="text" name="contact_us" 
                                   placeholder="Contact Us"   value="{{$setting ? $setting->contact_us : ''}}">
                                    
                                </div>

                                <div class="form-group">
                                    <button type="submit"
                                            class="btn btn-primary btn-sm">Update</button>
                                </div>
</form>

</div>