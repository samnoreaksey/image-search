<div class="container" role="main" style="margin-top: 50px;">
  <div class ="starter-template">
    <loading></loading>
    
      <div class="panel panel-primary">
        <div class="panel-heading">Please choose image to upload</div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-10">
                <input type="file" file-model="myFile" required style="width: 100%;" />
              </div>
            <div class="col-md-2" style="text-align: right;">
              <button class="btn btn-primary"  ng-click="uploadFile()" style="width: 100%;">Upload</button>
            </div>
          </div>

          <div class="panel-body-sep"></div>

          <div class="row">
            <div class="col-md-10" style="text-align: left;">
              <div class="input-group">
                <span class="input-group-addon">Link</span>
                <input type="text" class="form-control" ng-model='image_link' placeholder="image url for advertisement" required>
              </div>
            </div>
            <div class="col-md-2" style="text-align: right;">
              <button class="btn btn-primary"  ng-click="addUrl()"  style="width: 100%;">Add</button>
            </div>
          </div>
        </div>
      </div>


      <div>
        <div class="row" style="align-items: center; border: solid 1px #eee; padding: 5px;" ng-repeat="item in images">
            <div class="col-md-3" style="text-align: center;">
              <img ng-src="{{item.image}}" class="img-rounded" style="max-height: 160px; max-width: 160px;" alt="Advertise image"/>
            </div>
            <div class="col-md-8" style="text-align: left;">
              <div style="width: 100%; word-break: break-all;"><a href="{{item.url}}" class="text-primary" style="font-size: medium;"  target='_blank'>View original image</a></div>
            </div>
            <div class="col-md-1" style="text-align: right; padding: 5px;">
                <button type="button" class="btn btn-primary" ng-click="delete(item)" style="width: 100%; margin-bottom: 5px;">Delete</button>
            </div>
        </div>
    </div>

  </div>
</div>