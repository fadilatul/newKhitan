@if ($errors->any())
<div class="btn btn-danger btn-icon-split" style="cursor: not-allowed;">
    <span class="icon text-white-50">
        <i class="fas fa-exclamation-triangle"></i>
        @foreach ($errors->all() as $item)
        <span class="text">{{ $item }}</span>
        @endforeach
    </span>
</div>
@endif

@if (Session::get('success'))
<div id="loginSuccessMessage" class="btn btn-success btn-icon-split">
    <span class="icon text-white">
        <i class="fas fa-check"></i>
        <span class="text">{{ Session::get('success')}}</span>
    </span>
</div>

<script>
    // Tampilkan pesan "Login Berhasil" selama 5 detik
    document.addEventListener('DOMContentLoaded', function() {
        var loginSuccessMessage = document.getElementById('loginSuccessMessage');
        setTimeout(function() {
            loginSuccessMessage.style.display = 'none';
        }, 3000); // 5000 milidetik = 5 detik
    });
</script>
@endif