@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
            @foreach($homestays as $homestay)
              <div class="panel panel-default">
                  <div class="panel-heading">
                    {{-- <a href="{{ route('post.show', $post) }}">{{ $post->title }}</a> --}}

                    <p>{{ $homestay->nama }}</p>

                    <div class="pull-right" style="margin-left: 10px;">
                      <form class="" action="{{ route('homestay.destroy', $homestay) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                      </form>
                    </div>

                    <div class="pull-right">
                      <a href="{{ route('homestay.edit',['homestay' => $homestay] ) }}" class="btn btn-xs btn-default">Edit</a>
                    </div>
                  </div>

                  <div class="panel-body">
                    <p>{{ $homestay->alamat }}</p>
                  </div>
                  <div class="panel-body">
                    <p>Rp. {{ $homestay->harga }}</p>
                  </div>
                  <div class="panel-body">
                    <p>{{ $homestay->telepon }}</p>
                  </div>

              </div>
            @endforeach
          </div>
      </div>
  </div>

@endsection
