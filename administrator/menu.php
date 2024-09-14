 <?php
 session_start();
if($_SESSION['level']=='2'){
?>
 <ul class="nk-menu nk-menu-main ui-s2">
                                <li class="nk-menu-item has-sub">
                                    <a href="dashboard" class="nk-menu-link" style="color: black;">
                                    <em class="fas fa-home fa-lg"></em>
                                    </a>
                                    <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text" style="color: black;">PENANGANAN </span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="penanganan" class="nk-menu-link"><span class="nk-menu-text">Input Penanganan</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="lihatpenanganan" class="nk-menu-link"><span class="nk-menu-text">Lihat Penanganan</span></a>
                                        </li>

                                    </ul><!-- .nk-menu-sub -->
                                </li>
                                    
                                </li><!-- .nk-menu-item -->
</ul>   
<?php
}else{    
?>
    <ul class="nk-menu nk-menu-main ui-s2">
                                <li class="nk-menu-item has-sub">
                                    <a href="dashboard" class="nk-menu-link" style="color: black;">
                                    <em class="fas fa-home fa-lg"></em>
                                    </a>
                                    
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text" style="color: black;">PENDATAAN RTLH</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                            <a href="pendataan" class="nk-menu-link"><span class="nk-menu-text">Input Pendataan</span></a>
                                        </li>
                                        <?php
                                         if($_SESSION['level']=='0'){
                                         ?>
                                        <li class="nk-menu-item">
                                            <a href="pendataankumuh" class="nk-menu-link"><span class="nk-menu-text">Input Pendataan Kumuh</span></a>
                                        </li>
                                        <?php
                                         }
                                         ?>
                                        <li class="nk-menu-item">
                                            <a href="importpendataan" class="nk-menu-link"><span class="nk-menu-text">Import Pendataan</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="draftpendataan" class="nk-menu-link"><span class="nk-menu-text">Draft Pendataan</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="lihatpendataan" class="nk-menu-link"><span class="nk-menu-text">Lihat Pendataan</span></a>
                                        </li>
                                      
                                        <li class="nk-menu-item">
                                            <a href="uploadfoto" class="nk-menu-link"><span class="nk-menu-text">Upload Foto Pendataan</span></a>
                                        </li>
                                        
                                      

                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text" style="color: black;">VERIFIKASI</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="verifikasi" class="nk-menu-link"><span class="nk-menu-text">Verifikasi Data</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="lihatverifikasi" class="nk-menu-link"><span class="nk-menu-text">Lihat Data Verifikasi</span></a>
                                        </li>
                                        <?php
                                         if($_SESSION['level']=='0'){
                                         ?>
                                        <li class="nk-menu-item">
                                            <a href="batalpendataan" class="nk-menu-link"><span class="nk-menu-text">Batal Pendataan</span></a>
                                        </li>
                                        <?php
                                         }
                                         ?>
                                        

                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item airminum -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text" style="color: black;">PENANGANAN </span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="penanganan" class="nk-menu-link"><span class="nk-menu-text">Input Penanganan</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="lihatpenanganan" class="nk-menu-link"><span class="nk-menu-text">Lihat Penanganan</span></a>
                                        </li>

                                    </ul><!-- .nk-menu-sub -->
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text" style="color: black;">PETA SEBARAN</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="petasebaran" class="nk-menu-link"><span class="nk-menu-text">Lihat Sebaran</span></a>
                                        </li>
                                       
                                        

                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item airminum -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text" style="color: black;">LAPORAN</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                                    <a href="lappendataan"  class="nk-menu-link"><span class="nk-menu-text">Data Pendataan</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="lapverifikasi"  class="nk-menu-link"><span class="nk-menu-text">Data Verifikasi</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="lappenanganan"  class="nk-menu-link"><span class="nk-menu-text">Data Penanganan</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="lapcapaian"  class="nk-menu-link"><span class="nk-menu-text">Total Penanganan</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="lapstatistik"  class="nk-menu-link"><span class="nk-menu-text">Statistik Kepemilikan</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="lapmilik"  class="nk-menu-link"><span class="nk-menu-text">Laporan Kepemilikan</span></a>
                                                </li>



                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item airminum -->
                                
                                <?php
if($_SESSION['level']=='0'){
                                ?>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle" style="color: black;">
                                        <em class="fas fa-cog fa-lg"></em> &nbsp; SETING
                                    </a>
                                    <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                            <a href="tahundata" class="nk-menu-link"><span class="nk-menu-text">Tahun Data</span></a>
                                        </li>
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Administrasi Daerah</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                               
                                                <li class="nk-menu-item">
                                            <a href="kab" class="nk-menu-link"><span class="nk-menu-text">Kabupaten</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="kec" class="nk-menu-link"><span class="nk-menu-text">Kecamatan</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="kel" class="nk-menu-link"><span class="nk-menu-text">Kelurahan</span></a>
                                        </li>
                                               
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                   
                                        <li class="nk-menu-item">
                                            <a href="identitas" class="nk-menu-link"><span class="nk-menu-text">Identitas Website</span></a>
                                        </li>
                                         <li class="nk-menu-item">
                                            <a href="menu" class="nk-menu-link"><span class="nk-menu-text">Menu Website</span></a>
                                        </li>
                                        
                                        <li class="nk-menu-item">
                                            <a href="header" class="nk-menu-link"><span class="nk-menu-text">Header Website</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="halaman" class="nk-menu-link"><span class="nk-menu-text">Halaman</span></a>
                                        </li>
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Galeri Kegiatan</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="album"  class="nk-menu-link"><span class="nk-menu-text">Album</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="galeri"  class="nk-menu-link"><span class="nk-menu-text">Galeri</span></a>
                                                </li>
                                               
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Informasi</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                    <a href="kategori"  class="nk-menu-link"><span class="nk-menu-text">Kategori Informasi</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="informasi"  class="nk-menu-link"><span class="nk-menu-text">Berita Dan Informasi</span></a>
                                                </li>
                                               
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                        
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Download</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="kategoridownload" class="nk-menu-link"><span class="nk-menu-text">Kategori Download</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="downloaddata" class="nk-menu-link"><span class="nk-menu-text">Download Data</span></a>
                                                </li>
                                               
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                      
                                        <li class="nk-menu-item">
                                            <a href="link" class="nk-menu-link"><span class="nk-menu-text">Link</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="templatewebsite" class="nk-menu-link"><span class="nk-menu-text">Template</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="usermanager" class="nk-menu-link"><span class="nk-menu-text">User Manager</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="notif" class="nk-menu-link"><span class="nk-menu-text">Notifikasi</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item airminum -->
                               <?php
                              
}
?>
</ul><!-- .nk-menu -->
<?php
}
?>