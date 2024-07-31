 @include('includes.style')
 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- 404 Error Text -->
     <div class="text-center">
         <div class="error mx-auto" data-text="404">404</div>
         <p class="lead text-gray-800 mb-5">Page Not Found</p>
         <p class="text-gray-500 mb-0">Anda tidak memiliki Akses ke halaman Ini</p>
         @if (Auth::user()->role_id == 1)
         <a href="/admin">&larr; Back to Dashboard</a>
         @else
         <a href="/dokter">&larr; Back to Dashboard</a>
         @endif

     </div>

 </div>
 @include('includes.script')
 <!-- /.container-fluid -->