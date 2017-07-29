

      <!-- Main component for a primary marketing message or call to action -->
      
      <!-- Block-->
      <h3 class="title bg-primary">Description</h3>
      <div class="jumbotron"> 
          <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.component for calling extra attention to featured content or information.component for calling extra attention to featured content or information.</p>
          <p><strong>How we do it ?</strong></p>
          <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.component for to featured content or information.component for calling extra attention to featured content or information.</p>
      </div><!-- End Block-->
      
      <!-- Block-->
      <h3 class="title bg-primary">Material and Process Parameters</h3>
      <div class="jumbotron clearfix">
          <form>
          <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Select Material</label>
                    <select class="form-control">
                      <option value="volvo">Brass</option>
                      <option value="saab">Stanlis Steel</option>
                      <option value="opel">Alimnium</option>
                    </select>
                    </div>
                </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Modulus of elacticity</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="exampleInputAmount" placeholder="value">
                      <div class="input-group-addon">GPa</div>
                    </div>
                    </div>
                </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Die Opening</label>
                    <select class="form-control">
                      <option value="volvo">20 mm</option>
                      <option value="saab">40 mm</option>
                      <option value="opel">133 mm</option>
                    </select>
                    </div>
                </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Sheet Thickness</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="exampleInputAmount" placeholder="value">
                      <div class="input-group-addon">mm</div>
                    </div>
                    </div>
                </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Bend Angle</label>
                        <input type="text" class="form-control" id="exampleInputAmount" value="90°" disabled>
                    </div>
                </div>
          </div>
              <button type="submit" class="btn btn-primary pull-right btn-lg">Calculate Spring Back</button>
          </form>
      </div><!-- End Block-->
        
        <!-- Block-->
      <h3 class="title bg-primary">Result</h3>
      <div class="jumbotron"> 
          <table class="table table-bordered">
          <tr class="info">
            <th>Material Name</th>
            <th>Modulus of elacticity</th>
            <th>Die Opening</th>
            <th>Sheet Thickness</th>
            <th>Bend Angle</th>
            <th>Spring Back</th>
          </tr>
          <tr class="">
            <td>Brass</td>
            <td>65 GPa</td>
            <td>20 mm</td>
            <td>8 mm</td>
            <td>90</td>
            <td class="success"><strong>14.8</strong></td>
          </tr>
          </table>
      </div><!-- End Block-->
