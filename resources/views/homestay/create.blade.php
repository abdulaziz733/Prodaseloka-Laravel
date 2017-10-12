@extends('layouts.app')

@section('content')
	<div class="container">
		<form class="" action="{{ route('homestay.store') }}" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label>Nama Home Stay</label>
				<input type="text" class="form-control" name="nama" placeholder="Post Title">
			</div>

			<div class="form-group">
				<label>Alamat</label>
				<textarea name="alamat" rows="5" class="form-control" placeholder="Post Content"></textarea>
			</div>

      <div class="form-group">
        <label>Harga</label>
        <input type="text" class="form-control" name="harga" placeholder="Post Title">
      </div>

      <div class="form-group">
        <label>Telepon</label>
        <input type="text" class="form-control" name="telepon" placeholder="Post Title">
      </div>

			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Save">

			</div>
		</form>
	</div>
@endsection
