
<div class="tab-pane p-3 user-tab" id="support" role="tabpanel">
<form action="/admin/settings/update-support"  method="post" enctype="multipart/form-data">
                                @csrf                              
                              
                                <div class="form-group">
                                    <label for="">Facebook</label>
                                    <input id="facebook" class="form-control" type="text" name="facebook"  
                                   placeholder="Facebook"   value="{{$setting ? $setting->facebook : ''}}">
                                    
                                </div>

                                <div class="form-group">
                                    <label for="">Instagram</label>
                                    <input id="instagram" class="form-control" type="text" name="instagram"  
                                   placeholder="Instagram"   value="{{$setting ? $setting->instagram : ''}}">
                                    
                                </div>

                                <div class="form-group">
                                    <label for="">Twitter</label>
                                    <input id="twitter" class="form-control" type="text" name="twitter" 
                                   placeholder="Twitter"   value="{{$setting ? $setting->twitter : ''}}">
                                    
                                </div>

                                <div class="form-group">
                                    <label for="">Linkedin</label>
                                    <input id="linkedin" class="form-control" type="text" name="linkedin"  
                                   placeholder="Linkedin"   value="{{$setting ? $setting->linkedin : ''}}">
                                    
                                </div>

                               <div class="form-group">
                                    <button type="submit"
                                            class="btn btn-primary btn-sm">Update</button>
                                </div>
</form>
</div>