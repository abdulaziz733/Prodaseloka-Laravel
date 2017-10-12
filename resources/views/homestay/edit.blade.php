@extends('layouts.app')

@section('content')
	<div class="container">
		<form class="" action="{{ route('homestay.update', $homestay) }}" method="post">
			{{ csrf_field() }}
      {{ method_field('PATCH') }}

			<div class="form-group">
				<label>Nama Home Stay</label>
				<input type="text" class="form-control" name="nama" placeholder="Nama Home Stay" value="{{ $homestay->nama }}" >
			</div>

			<div class="form-group">
				<label>Alamat</label>
				<textarea name="alamat" rows="5" class="form-control" placeholder="Alamat">{{ $homestay->alamat }}</textarea>
			</div>

      <div class="form-group">
        <label>Harga</label>
        <input type="text" class="form-control" name="harga" placeholder="Harga" value="{{ $homestay->harga }}" >
      </div>

      <div class="form-group">
        <label>Telepon</label>
        <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="{{ $homestay->telepon }}" >
      </div>

			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Save">

			</div>
		</form>
	</div>
@endsection
