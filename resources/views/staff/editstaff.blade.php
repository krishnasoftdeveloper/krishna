<form class="needs-validation" action="{{url('update_staff')}}" method="POST" enctype="multipart/form-data" >
                                              @if(Session::has('success'))
                                              <div class="alert alert-success">{{ Session::get('success') }}</div>
                                              @endif
                                              @if(Session::has('fail'))
                                              <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                              @endif
                                              @csrf

<input type="hidden" name="id" value="{{$staff->id}}">
  <div class="row">
          <div class=" col-sm-4 col-md-3" style="line-height: 2rem;  ">
              <label class="" for="specificSizeSelect">Your Name:</label>
              <input type="text" class="form-control" name="name" value="{{$staff->name}}" placeholder="Enter Your Name">
          </div>



          <div class="  col-md-3 col-sm-12" style="line-height: 2rem;  ">

              <label class="" for="specificSizeSelect">Email Address:</label>
              <input type="email" class="form-control" name="email" value="{{$staff->email}}" placeholder="Enter Your Email">
          </div>

          <div class="  col-md-3 col-sm-12" style="line-height: 2rem;  ">

            <label class="" for="specificSizeSelect">Phone Number:</label>
            <input type="text" class="form-control" name="phone_number" value="{{$staff->phone_number}}" placeholder="Enter Your Number">
        </div>

          <div class="col-sm-4 col-md-3" style="line-height: 2rem;  ">

              <label class="" for="autoSizingInputGroup">Booking Date:</label>
              <input type="date" class="form-control" name="booking_date" value="{{$staff->booking_date}}" id="inputPassword " placeholder="">

          </div>
          <div class=" col-sm-12 col-md-3 mt-3" style="line-height: 2rem;  ">

              <label class="" for="specificSizeSelect">Destination:</label>
              <select class="form-select" id="specificSizeSelect" name="destination" value="{{$staff->destination}}">

                  <option value="1">Paris</option>
                  <option value="2">Tokyo</option>
                  <option value="3">New York</option>
              </select>
          </div>

          <div class="col-sm-4 col-md-3 mt-3" style="line-height: 2rem;  ">

            <label class="" for="autoSizingInputGroup">Number of Travelers:</label>
            <input type="text" class="form-control" name="number_travelers" value="{{$staff->number_travelers}}" id="inputPassword " placeholder="">

        </div>

        <div class="col-sm-4 col-md-3 mt-3" style="line-height: 2rem;  ">

          <label class="" for="autoSizingInputGroup">From:</label>
          <input type="text" name="from" class="form-control" value="{{$staff->from}}" id="inputPassword " placeholder="">

      </div>

      <div class="col-sm-4 col-md-3 mt-3" style="line-height: 2rem;  ">

        <label class="" for="autoSizingInputGroup">To:</label>
        <input type="text" class="form-control" name="to" value="{{$staff->to}}" id="inputPassword " placeholder="">

    </div>

      </div>

      <div class="d-grid gap-2 d-md-flex justify-content-md-end me-4 mt-3">
          <button class="btn btn-primary me-md-2 Btn_Save" type="submit">update</button>
      </div>
  </div>
</form>