<div class="isi-pesanan-ada">
    <div class="status-pesanan d-flex justify-content-between">
        <p class="fw-medium">Pesanan No.{{ $item->id_pesanan }}</p>
        <p class="fw-medium">{{ \Carbon\Carbon::createFromTimestamp(strtotime($item->created_at))->format('d F Y H.i') }}</p>
        <p class="fw-semibold">{{ $item->status }}</p>
    </div>
    <div class="detail-pesanan d-flex lh-1">
        <img src="{{asset('assets/imgProduks/'.$item->gambar_produk)}}" alt="" style="width: 10rem; height: 10rem;">
        <div class="nama-produk harga">
            <p class="fw-medium">{{ $item->nama_produk }}</p>
            <p class="fw-medium">{{ $item->kuantitas }}</p>
            <p class="fw-medium">Rp {{ number_format($item->harga_produk, 0, '.', '.') }}</p>
        </div>
    </div>
    <p class="fw-medium fs-4 text-end">Total Rp {{ number_format($item->harga_produk, 0, '.', '.') }}</p>
    <hr>
</div>