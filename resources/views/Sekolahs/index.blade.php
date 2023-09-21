@extends('template.dashboard')

@section('body')
<h1> Siswi XII PPLG 1</h1>

<div class="col-lg-8">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>nama sekolah</th>
                          <th>alamat</th>
                          <th>jurusan</th>
                          <th>jumlah guru</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($sekolahs as $sekolah)
                        <tr>
                          <td>{{ $sekolah->namasekolah }}</td>
                          <td>{{ $sekolah->alamat }}</td>
                          <td>{{ $sekolah->jurusan }}</td>
                          <td>{{ $sekolah->jumlahguru }}</td>
                          <td>
                            <a href="{{ route('sekolahs.edit', $sekolah->id) }}">Edit</a>
                            <form action="{{ route('sekolahs.destroy', $sekolah->id ) }}" method="post">
                              @csrf
                              @method('DELETE')
                              <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                           </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection