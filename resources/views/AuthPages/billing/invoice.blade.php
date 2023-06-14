 @php
 $data = DB::table('billing')
 ->where('user_id',Auth::user()->id)
 ->leftjoin('package','billing.package_id','package.id')
 ->orderBy('billing.id','desc')
 ->first();
 @endphp
          <a target="_blank" style="text-decoration:none; color: black;" href="@php echo url('') @endphp"><p><u>www.copyright.us.org</u></p></a>

          <div style="text-align: center;font-size: 30px;">Invoice</div><br><br>
      
        <div style="width: 12%;float:left;">
        <div style="float: left;width: ;font-weight: 700;">Name :</div>
      </div>
      <div>
        <div style="float: left;margin-left: 16px;">{{ $data->first_name.' '. $data->last_name}}</div>
      </div>
      <br><br>
      <div style="width: 10%;float:left;">
        <div  style="float: left;width: ;font-weight: 700;">Address :</div>
      </div>
      <div style="float:left;margin-left: 15px;">
         <div>{{ $data->address }}</div>
        <div>{{ $data->city.'/'.$data->state }}</div>
        <div>{{ $data->zip }}</div>
        <div>{{ $data->country }}</div>
      </div><br><br><br>
      <br><br>
      <hr>

     

      <div style="width: 13%;float:left;box-sizing: border-box;">
        <div style="float: left;width: ;font-weight: 700;">Description :</div>
      </div>
      <div>
        <div style="float: left;margin-left: -31px;">{{ $data->name }} membership </div>
      </div>
      <br><br>
      <div style="width: 12%;float:left;">
        <div  style="float: left;font-weight: 700;width:">Reciept Id :</div>
      </div>
      <div style="float:left;width: 100%;margin-left: -31px;">
        <div style="float: left;margin-left: 16px;">{{ $data->invoice_id }}</div>
      </div>
      <br><br>
      <div style="width: 12%;float:left;">
        <div  style="float: left;font-weight: 700;width:">Amount :</div>
      </div>
      <div style="float:left;width: 100%;margin-left: -31px;">
        <div style="float: left;margin-left: 30px;">{{ $data->currency.' '.$data->price }}</div>
      </div>
      <br><br>
      <hr>

      <div style="width: 13%;float:left;">
        <div style="float: left;width: ;font-weight: 700;">Date :</div>
      </div>
      <div>
        <div style="float: left;margin-left: 16px;">{{ Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }}</div>
      </div>
      <br><br>
      <div style="width: 20%;float:left;">
        <div  style="float: left;font-weight: 700;">Payment Method : </div>
      </div>
      <div style="float:left;">
        <div style="float: left;margin-left: -120px;">Cash</div>
      </div>
      <br><br>
      <hr>