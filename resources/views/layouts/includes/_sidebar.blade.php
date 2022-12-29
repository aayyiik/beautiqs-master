<div id="sidebar-nav" class="sidebar" style="background-color: #483D8B;">
    <div class="sidebar-scroll">
        <nav> 
            <ul class="nav">
               
                <li><a href="/dashboard"><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
                @if(auth()->user()->id_role=='2')
                    <li><a href="/users"><i class="lnr lnr-user"></i><span>User</span></a></li> 
                    <li><a href="/role"><i class="lnr lnr-book"></i><span>Role</span></a></li>
                @endif


                <li>
                   
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-database"></i> <span>Data Master</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    
                    <div id="subPages" class="collapse ">
                        <ul class="nav">                            
                            <li><a href="/barang" class="lnr lnr-book">Barang</a></li>
                            <li><a href="/jenisbarang" class="lnr lnr-book">Jenis Barang</a></li>
                            <li><a href="/supplier" class="lnr lnr-book">Supplier</a></li>
                            <li><a href="/kota" class="lnr lnr-book">Kota</a></li>
                            <li><a href="/warna" class="lnr lnr-book">Warna</a></li>
                            <li><a href="/ukuran" class="lnr lnr-book">Ukuran</a></li>                          
                        </ul>
                     
                    </div>
                    <li><a href="/history_stok"><i class="lnr lnr-book"></i><span>Histori of Stok</span></a></li>
                </li>  
                <li>
                    <a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-database"></i> <span>Data Transaksi</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages1" class="collapse ">
                        <ul class="nav">

                                @if(auth()->user()->id_role=='1')
                                    <li><a href="/pemesanan"><i class="lnr lnr-book"></i><span>Pemesanan</span></a></li>
                                    <li><a href="/penerimaan"><i class="lnr lnr-book"></i><span>Penerimaan</span></a></li>
                                    @elseif(auth()->user()->id_role=='2')
                                        <li><a href="/pembayaran"><i class="lnr lnr-book"></i><span>Pembayaran</span></a></li>
                                         <li><a href="/penerimaan"><i class="lnr lnr-book"></i><span>Penerimaan</span></a></li>
                                @endif
                                
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>