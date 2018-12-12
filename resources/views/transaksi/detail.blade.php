@extends('layouts.user')

@section('content')
<form action="{{route('transaksi.store',$menu)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="container">
       <div class="row">
           
			   <div class="panel panel-default">
					<div class="card" style="width:1100px;height:520px;">
						<div class="card-body">
							<div class="row">
                                <div class="col-3">
                                    <img src="../storage/{{$menu->gambar}}" alt="Gambar" width="256">
                                    <br></br>
                                    <h2 class="card-title text-center" name="id_barang" value="{{$menu->id}}"><strong>{{$menu->nbarang}}</strong></h2>
                                    <h4 class="card-title text-center"><strong>Rp.{{$menu->hbarang}}</strong></h4>
                                    
                                </div>
                                <div class="col">
                                    <style>
                                        h5{
                                            color: black;
                                        }
                                    </style>
                                    <h5 class="card-title"><strong>Deskripsi Produk :</strong></h5>
                                    <p>{{$menu->deskripsi}}</p>
                                    <div class="flex-w bo5 of-hidden w-size17"></div>

								</div>
                                <div class="col">
                               
                                    <h5><strong>Jumlah Yang Dipesan</strong></h5>
									<input name="jbarang" class="size8 m-text18 t-center num-product" type="number" min=25  value="25">
                                    <br></br><h5><strong>Waktu Pengambilan</strong></h5>
                                    <input type="date" name="tanggal_ambil">
                                    <div class="form-group">
                                    <br></br>
                                    <button type="submit"  class="btn btn-outline-success" value="save">Submit</button>
                                    
                                    </div>
                               
                                </div>
                                
                            </row>
						</div>
					</div>
				</div>
               
            
        
        </div>
    </div>
</form>
@endsection