<ul id="menu" class="menu">

	@if(Auth::guard('subadmin')->check())
	<li>
		<a href="{{url('subadmin/beranda')}}">
			<i data-acorn-icon="calendar" class="icon" data-acorn-size="18"></i>
			<span class="label">Dashboard</span>
		</a>
	</li>
	<li>
		<a href="#masterdata">
			<i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
			<span class="label">Master Data</span>
		</a>
		<ul id="masterdata">
			<li>
				<a href="{{url('subadmin/master-data/data-anak')}}">
					<span class="label">Data Anak</span>
				</a>
			</li>
			<li>
				<a href="{{url('subadmin/master-data/pegawai-posyandu')}}">
					<span class="label">Pegawai Posyandu</span>
				</a>
			</li>
			<li>
				<a href="{{url('subadmin/master-data/data-orangtua')}}">
					<span class="label">Data Orang Tua</span>
				</a>
			</li>
			<li>
				<a href="{{url('subadmin/master-data/data-anak')}}">
					<span class="label">Data Anak</span>
				</a>
			</li>
		</ul>
	</li>

	<li>
		<a href="#laporan" data-href="">
			<i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
			<span class="label">Laporan</span>
		</a>
		<ul id="laporan">

			<li>
				<a href="{{url('subadmin/laporan/pegawai-posyandu')}}">
					<span class="label">Laporan Imunisasi</span>
				</a>
			</li>
		</ul>
	</li>


	<li>
		<a href="{{url('subadmin/profil-akun')}}">
			<i class="bi bi-4-square"></i>
			<span class="label">Profil Akun</span>
		</a>
	</li>

	@elseif(Auth::guard('admin')->check())
	<li>
		<a href="#dahsboardAdmin">
			<i class="bi bi-house-door-fill" style="font-size: 14pt;"></i>
			<span class="label">Dashborad</span>
		</a>

		<ul id="dahsboardAdmin">
			<li>
				<li>
					<a href="{{url('admin/beranda')}}">
						<span class="label">Dashboard</span>
					</a>
				</li>


				<li>
					<a href="{{url('admin/dashboard-pelayanan')}}">
						<span class="label">Dashboard Pelayanan</span>
					</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#masterdataAdmin">
				<i class="bi bi-layers" style="font-size: 14pt;"></i>
				<span class="label">Master Data</span>
			</a>
			<ul id="masterdataAdmin">
				<li>
					<li>
						<a href="{{url('admin/master-data/data-orangtua')}}">
							<span class="label">Data Anak</span>
						</a>
					</li>


					<li>
						<a href="{{url('admin/master-data/data-pegawai')}}">
							<span class="label">Data Tim Medis</span>
						</a>
					</li>


			
					<a href="{{url('admin/master-data/data-imunisasi')}}">
						<span class="label">Data Imunisasi</span>
					</a>
				</li>
			</ul>
		</li>



		<li>
			<a href="{{url('admin/master-data/data-orangtua')}}">
				<i class="bi bi-bar-chart-fill" style="font-size: 14pt;"></i>
				<span class="label">Perkembangan Anak</span>
			</a>
		</li>

		<li>
			<a href="{{url('admin/jadwal-imunisasi')}}">
				<i class="bi bi-calendar-date-fill" style="font-size: 14pt;"></i>
				<span class="label">Jadwal Imunisasi</span>
			</a>
		</li>


		<li>
			<a href="{{url('admin/profil-posyandu')}}">
				<i class="bi bi-buildings-fill" style="font-size: 14pt;"></i>
				<span class="label">Profile Posyandu</span>
			</a>
		</li>
		<li>
			<a href="{{url('admin/profil-akun')}}">
				<i class="bi bi-person-fill" style="font-size: 14pt;"></i>
				<span class="label">Profile Akun</span>
			</a>
		</li>

		@elseif(Auth::guard('orangtua')->check())
		<li>
			<a href="{{url('x/beranda')}}">
				<i data-acorn-icon="form-check" class="icon" data-acorn-size="18"></i>
				<span class="label">Beranda</span>
			</a>
		</li>


		<li>
			<a href="{{url('x/data-anak')}}">
				<i data-acorn-icon="form-check" class="icon" data-acorn-size="18"></i>
				<span class="label">Data Anak</span>
			</a>
		</li>


		<li>
			<a href="{{url('x/rekam-medis')}}">
				<i data-acorn-icon="form-check" class="icon" data-acorn-size="18"></i>
				<span class="label">Rekam Medis Anak</span>
			</a>
		</li>

		<li>
			<a href="{{url('x/profil-akun')}}">
				<i data-acorn-icon="form-check" class="icon" data-acorn-size="18"></i>
				<span class="label">Profil Akun & Orangtua</span>
			</a>
		</li>



		@endif

		<li>
			<a href="{{url('logout')}}" onclick="return confirm('Yakin untuk keluar dari sistem?')">
				<i class="bi bi-power" style="font-size: 14pt;"></i>
				<span class="label">Logout</span>
			</a>
		</li>
	</ul>