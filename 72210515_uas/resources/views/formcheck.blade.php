<form action="/formcheck/processcheck" method="POST">
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
    <button type="submit" class="btn btn-light mb-4">Submit</button>
</form>