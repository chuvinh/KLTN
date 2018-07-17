@extends('master')
@section('content')
<div class="row">
	<div class="container">
		<div class="row" style="padding-bottom: 20px;;margin-top: 80px">
			<div class="col-md-12">

				<table class="table table-bordered">
					<tr>
						<th>Mã đơn hàng</th>
						<th>Tên khách hàng</th>
						<th>Ngày thanh toán</th>
						<th>Tổng tiền</th>
						<th>Chiết khấu</th>
					</tr>
					@foreach($user as $u)
					<tr>
						<td><a>{{ $u->bills_id }}</a></td>
						<td>{{ $u->cusname }}</td>
						<td>{{ $u->date_order }}</td>
						<td>{{ $u->total }} VNĐ</td>
						<td>{{ $u->value }} VNĐ @if( $u->status == 0 ) - Đang chờ duyệt @endif</td>
					</tr>
					@endforeach
					
				</table>
			</div>
		</div><!--/.row-->
	</div>
</div>
</div>
@endsection
