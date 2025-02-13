@extends('admin.layout')

@section('content')
    <div class="container my-5">
        <div class="card shadow-sm mx-auto" style="max-width: 1200px;">
            <div class="card-header" style="background-color: #0069B4; color: white; text-align: center;">
                <h5>Tambah Galeri</h5>
            </div>
            <div class="card-body">
                <form action="{{ url('/galleries/' . $gallery->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="post_id">Judul Post</label>
                        <select name="post_id" class="form-control" id="post_id" required>
                            <option value="">Pilih Post</option>
                            @foreach ($posts as $post)
                                <option value="{{ $post->id }}" @if($post->id == $gallery->post_id) selected @endif>
                                    {{ $post->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group mb-3">
                                <label for="position" class="form-label">Posisi</label>
                                <input type="number" name="position" class="form-control" id="position" required value="{{ $gallery->position }}">
                                <small>Nilai posisi harus berupa angka.</small>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control" id="status" required>
                                    <option value="">Pilih Status</option>
                                    <option value="aktif" @if($gallery->status == 'aktif') selected @endif>Aktif</option>
                                    <option value="tidak-aktif" @if($gallery->status == 'tidak-aktif') selected @endif>Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn" style="background-color: #fe9814; border-color: #fe9814; color: white; width: 100%;">Perbaharui</button>
                </form>
            </div>
        </div>
    </div>
@endsection
