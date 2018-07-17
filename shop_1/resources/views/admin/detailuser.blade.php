@extends('admin.index')
@section('content')
<div class="row">
	<ol class="breadcrumb">
		<li><a href="{{ route('admin') }}">
			<em class="fa fa-home"></em>
		</a></li>
		<li class="active">Quản lí chiết khấu</li>
		<li>
			@foreach ($user as $u)
			{{$u->full_name}}
			@endforeach
		</li>
	</ol>
</div><!--/.row-->

<div class="row" style="background: #F1F4F7;padding-bottom: 20px;;margin-top: 50px">
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
				<td><a href="{{ route('detailorder',$u->bills_id) }}">{{ $u->bills_id }}</a></td>
				<td>{{ $u->cusname }}</td>
				<td>{{ $u->date_order }}</td>
				<td>{{ $u->total }} VNĐ</td>
				<td>{{ $u->value }} VNĐ @if( $u->status == 0 ) - Đang chờ duyệt @endif</td>
			</tr>
			@endforeach
		</table>
	</div>
</div><!--/.row-->

@endsection