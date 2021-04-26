<div class="sidebar sidebar-style-2">
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							{{ Auth::user()->name }}
							<span class="user-level">{{ Auth::user()->jabatan}}</span>
							<span class="caret"></span>
						</span>
					</a>
					<div class="clearfix"></div>

					<div class="collapse in" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="#profile">
									<span class="link-collapse">My Profile</span>
								</a>
							</li>
							<li>
								<a href="#edit">
									<span class="link-collapse">Edit Profile</span>
								</a>
							</li>
							<li>
								<a href="#settings">
									<span class="link-collapse">Settings</span>
								</a>
							</li>
							<li>
								<a href="{{ route('logout') }}" onclick="event.preventDefault();
								document.getElementById('logout-form').submit(); ">
								<span class="link-collapse">Logout</span>
								</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="/home">
						<i class="fas fa-home"></i>
						<p>Dashboard</p>
						{{-- <span class="caret"></span> --}}
					</a>
					{{-- <div class="collapse" id="dashboard">
						<ul class="nav nav-collapse">
							<li>
								<a href="../demo1/index.html">
									<span class="sub-item">Dashboard 1</span>
								</a>
							</li>
							<li>
								<a href="../demo2/index.html">
									<span class="sub-item">Dashboard 2</span>
								</a>
							</li>
						</ul>
					</div> --}}
				</li>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">Components</h4>
				</li>

                @if (Auth::user()->is_admin == '1')
				<li class="nav-item">
					<a data-toggle="collapse" href="#base">
						<i class="fas fa-layer-group"></i>
						<p>Data Karyawan</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="base">
						<ul class="nav nav-collapse">
							<li>
								<a href="/karyawan">
									<span class="sub-item">Lihat Data</span>
								</a>
							</li>

						</ul>
					</div>
				</li>
                @endif

                @if (Auth::user()->is_admin == '1')
				<li class="nav-item">
					<a data-toggle="collapse" href="#pekerja">
						<i class="fas fa-layer-group"></i>
						<p>Data Pekerja</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="pekerja">
						<ul class="nav nav-collapse">
							<li>
								<a href="/pekerja">
									<span class="sub-item">Lihat Data</span>
								</a>
							</li>

						</ul>
					</div>
				</li>
                @endif

                @if (Auth::user()->is_admin == '1')
				<li class="nav-item">
					<a data-toggle="collapse" href="#sidebarLayouts">
						<i class="fas fa-users-cog"></i>
						<p>User</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="sidebarLayouts">
						<ul class="nav nav-collapse">
							<li>
								<a href="/pengguna">
									<span class="sub-item">Lihat User</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
                @endif

                @if (Auth::user()->is_admin == '1')
				<li class="nav-item">
					<a data-toggle="collapse" href="#forms">
						<i class="fas fa-user-shield"></i>
						<p>Jabatan</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="forms">
						<ul class="nav nav-collapse">
							<li>
								<a href="/datajabatan">
									<span class="sub-item">Table Data Jabatan</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
                @endif

                @if (Auth::user()->is_admin == '1')
				<li class="nav-item">
					<a data-toggle="collapse" href="#maps">
						{{-- <i class="fas fa-map-marker-alt"></i> --}}
						<i class="far fa-building"></i>
						<p>Departemen</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="maps">
						<ul class="nav nav-collapse">
							<li>
								<a href="/dep">
									<span class="sub-item">Lihat Departemen</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
                @endif

                @if (Auth::user()->is_admin == '1')
				<li class="nav-item">
					<a data-toggle="collapse" href="#cabang">
						<i class="fas fa-code-branch"></i>
						<p>Cabang</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="cabang">
						<ul class="nav nav-collapse">
						<li>
								<a href="cabang">
									<span class="sub-item">Lihat Data Cabang</span>
								</a>
							</li>

						</ul>
					</div>
				</li>
                @endif

                @if (Auth::user()->is_admin == '1' ||Auth::user()->is_admin == '2' )
				<li class="nav-item">
					<a data-toggle="collapse" href="#gaji">
					<i class="fas fa-dollar-sign" aria-hidden="true"></i>
						<p>Data Gaji</p>
						<span class="caret"></span>
					</a>
                @endif

					<div class="collapse" id="gaji">
						<ul class="nav nav-collapse">
                            <li>
                                @if (Auth::user()->is_admin == '1')
                                <a href="datagaji">
                                    <span class="sub-item">Lihat Data Gaji</span>
                                </a>
                                @endif
                                @if (Auth::user()->is_admin == '1' ||Auth::user()->is_admin == '2' )
                                <a href="#">
                                    <span class="sub-item">Slip Gaji</span>
                                </a>
                                @endif
                            </li>
						</ul>
					</div>
				</li>

                @if (Auth::user()->is_admin == '1')
				<li class="nav-item">
					<a data-toggle="collapse" href="#lembur">
						<i class="fas fa-clock" aria-hidden="true"></i>
						<p>Data Lembur</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="lembur">
						<ul class="nav nav-collapse">
                            <li>
                                <a href="lembur">
                                    <span class="sub-item">Lihat Data Lembur</span>
                                </a>
                            </li>
						</ul>
					</div>
				</li>
                @endif

				@if (Auth::user()->is_admin == '1')
                <li class="nav-item">
					<a data-toggle="collapse" href="#cuti">
						<i class="fas fa-calendar-alt" aria-hidden="true"></i>
						<p>Data Cuti</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="cuti">
						<ul class="nav nav-collapse">
                            <li>
                                <a href="cuti">
                                    <span class="sub-item">Lihat Data Cuti</span>
                                </a>
                            </li>
						</ul>
					</div>
				</li>
                @endif

                @if (Auth::user()->is_admin == '1')
				<li class="nav-item">
					<a data-toggle="collapse" href="#pot">
						<i class="fas fa-hand-holding-usd"></i>
						<p>Potongan Lain</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="pot">
						<ul class="nav nav-collapse">
                            <li>
                                <a href="potongan">
                                    <span class="sub-item">Lihat Potongan Lain</span>
                                </a>
                            </li>
						</ul>
					</div>
				</li>
                @endif

				<li class="nav-item">
					<a href="widgets.html">
						<i class="fas fa-desktop"></i>
						<p>Widgets</p>
						<span class="badge badge-success">4</span>
					</a>
				</li>

				<li class="nav-item">
					<a data-toggle="collapse" href="#submenu">
						<i class="fas fa-bars"></i>
						<p>Transaksi Gaji</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="submenu">
						<ul class="nav nav-collapse">
                            <li>
                                <a href="/transaksigaji">
                                <span class="sub-item">Lihat Data Cabang</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
			</ul>
		</div>
							{{-- </li>
							<li>
								<a data-toggle="collapse" href="#subnav2">
									<span class="sub-item">Level 1</span>
									<span class="caret"></span>
								</a>
								<div class="collapse" id="subnav2">
									<ul class="nav nav-collapse subnav">
										<li>
											<a href="#">
												<span class="sub-item">Level 2</span>
											</a>
										</li>
			</ul>
								</div>
							</li>
							<li>
								<a href="#">
									<span class="sub-item">Level 1</span>
								</a>
							</li> --}}
						{{-- </ul>
					</div>
				</li>
			</ul> --}}
		{{-- </div> --}}
	</div>
</div>