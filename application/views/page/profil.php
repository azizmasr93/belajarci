  <!-- Main Content -->
    <div class="container">
      	<div class="row">   
<!-- ini halaman profil -->
<!--
  //TABLE PROFIL DI CUT KE home.php
<table class="table table-hover">
  <thead>
    <tr>
      <th>Username</th>
      <th>Password</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  	 {user}
       <tr>
        <td>{username}</td>
        <td>{password}</td>
        <td>Aksi</td>
      </tr>    
     {/user}  
  </tbody>
</table>
-->
<table class="table table-hover">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
     {profil}
       <tr>
        <td>{nama}</td>
        <td>{alamat}</td>
        <td>
          <a href="<?=site_url('hapus/profil/{pk_profil}') ?>">Hapus</a>
          <a href="<?=site_url('ubah/profil/{pk_profil}') ?>">Ubah</a>
        </td>
      </tr>    
     {/profil}  
  </tbody>
</table>



		</div>
	</div>