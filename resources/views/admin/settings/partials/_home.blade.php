<div class="tab-pane p-3 user-tab active show" id="home" role="tabpanel">
<form action="/admin/settings/update-home"  method="post" enctype="multipart/form-data">
                                @csrf        
                                
                                <div class="row"> 
                                <div class="form-group col-md-6">
                                    <label for="">Home Header</label>
                                    <input id="home_header" class="form-control" type="text" name="home_header"
                                           placeholder="Home Header" value="{{$setting ? $setting->home_header : ''}}">
                                </div>

                                <div class="form-group  col-md-6">
                                    <label for="">Site Logo</label>
                                    <input type="file"
                                           id="filepond"
                                           class="filepond"
                                           name="page2_banner"
                                           data-max-files="1">
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="">Home Heading1</label>
                                    <input id="home_heading1" class="form-control" type="text" name="home_heading1" 
                                      placeholder="Home Heading1"  value="{{$setting ? $setting->home_heading1 : ''}}">
                                   
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Home Heading2</label>
                                    <input id="home_heading2" class="form-control" type="text" name="home_heading2" 
                                    placeholder="Home Heading2"   value="{{$setting ? $setting->home_heading2 : ''}}">
                                    
                                </div>

                                {{-- <div class="form-group col-md-6">
                                    <label for="">Home Content1</label>
                                    <input id="home_content1" class="form-control" type="text" name="home_content1"  
                                   placeholder="Home Content1"   value="{{$setting ? $setting->home_content1 : ''}}">
                                    <div id="editor" class="blog-content quill"></div>
                                </div>
                                

                                
                                <div class="form-group col-md-6">
                                    <label for="">Home Content2</label>
                                    <input id="home_content2" class="form-control" type="text" name="home_content2"   
                                   placeholder="Home Content2"   value="{{$setting ? $setting->home_content2 : ''}}">
                                    <div id="editor" class="blog-content quill"></div>
                                </div> --}}

                                 <div class="form-group col-md-6">
                                    <label for="">Home Point1</label>
                                    <input id="home_point1" class="form-control" type="text" name="home_point1"   
                                   placeholder="Home Point1"   value="{{$setting ? $setting->home_point1 : ''}}">
                                    <div id="editor" class="blog-content quill"></div>
                                </div>

                                 <div class="form-group col-md-6">
                                    <label for="">Home Point2</label>
                                    <input id="home_point2" class="form-control" type="text" name="home_point2"   
                                   placeholder="Home Point2"   value="{{$setting ? $setting->home_point2 : ''}}">
                                    <div id="editor" class="blog-content quill"></div>
                                </div>

                                 <div class="form-group col-md-6">
                                    <label for="">Home Point3</label>
                                    <input id="home_point3" class="form-control" type="text" name="home_point3"   
                                   placeholder="Home Point3"   value="{{$setting ? $setting->home_point3 : ''}}">
                                    <div id="editor" class="blog-content quill"></div>
                                </div>

                                 <div class="form-group col-md-6">
                                    <label for="">Home Point4</label>
                                    <input id="home_point4" class="form-control" type="text" name="home_point4"   
                                   placeholder="Home Point4"   value="{{$setting ? $setting->home_point4 : ''}}">
                                    <div id="editor" class="blog-content quill"></div>
                                </div>

                                 <div class="form-group col-md-6">
                                    <label for="">Home Point5</label>
                                    <input id="home_point5" class="form-control" type="text" name="home_point5"   
                                   placeholder="Home Point5"   value="{{$setting ? $setting->home_point5 : ''}}">
                                    <div id="editor" class="blog-content quill"></div>
                                </div>
                              
                                 <div class="form-group col-md-6">
                                    <label for="">Home Point6</label>
                                    <input id="home_point6" class="form-control" type="text" name="home_point6"   
                                   placeholder="Home Point6"   value="{{$setting ? $setting->home_point6 : ''}}">
                                    <div id="editor" class="blog-content quill"></div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Home Point7</label>
                                    <input id="home_point7" class="form-control" type="text" name="home_point7"   
                                   placeholder="Home Point7"   value="{{$setting ? $setting->home_point7 : ''}}">
                                    <div id="editor" class="blog-content quill"></div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Home Point8</label>
                                    <input id="home_point8" class="form-control" type="text" name="home_point8"   
                                   placeholder="Home Point8"   value="{{$setting ? $setting->home_point8 : ''}}">
                                    <div id="editor" class="blog-content quill"></div>
                                </div>
                                </div>
                                
                     

                                <div class="form-group">
                                    <button type="submit"
                                            class="btn btn-primary btn-sm">Update</button>
                                </div>
</form>
</div>