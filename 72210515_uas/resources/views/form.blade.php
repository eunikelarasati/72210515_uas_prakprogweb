<form action="/form/processradio" method="GET">
    @csrf
    <h1>Masukan Data Verifikasi!</h1>
    <label>Apakah Anda Mahasiswa UKDW?</label>
    <div class="form-group w-25">
        <input type="radio" name="radio" value="Ya" class="form-control">
        <label>Ya</label>
    </div>

    <div class="form-group w-25">
        <input type="radio" name="radio" value="Tidak" class="form-control">
        <label>Tidak</label>
    </div>
    <button type="submit" class="btn btn-light mb-4">Submit</button>
</form>

{{-- <form action="/formcheck/processcheck" method="POST">
    @csrf
    <label>Alasan Masuk UKDW?</label>
    <div class="form-check">
        <input type="checkbox" value="Suka" name="test[]" class="form-check-input">
        <label>Suka</label>
    </div>
    <div class="form-check">
        <input type="checkbox" value="Akreditas A" name="test[]" class="form-check-input">
        <label>Akreditas A</label>
    </div>
    <div class="form-check">
        <input type="checkbox" value="Terkenal" name="test[]" class="form-check-input">
        <label>Terkenal</label>
    </div>
</form> --}}