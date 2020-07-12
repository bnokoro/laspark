<div class="tab-pane p-3 user-tab" id="faqs" role="tabpanel">                              
<form action="/admin/settings/update-faqs"  method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">FAQS</label>
                                    <input id="faqs" class="form-control" type="text" name="faqs"  
                                   placeholder="Frequently Asked Questions"   value="{{$setting ? $setting->faqs : ''}}">
                                    
                                </div>

                                <div class="form-group">
                                    <button type="submit"
                                            class="btn btn-primary btn-sm">Update</button>
                                </div>
</form>
</div>