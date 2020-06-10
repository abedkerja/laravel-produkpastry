{{-- Section Footer --}}
@foreach ($profiles as $footer)
<div class="uk-section uk-section-warning uk-background-warning">
    <div class="uk-container uk-container-medium uk-margin-medium uk-margin">
        <div class="uk-child-width-1-3@s uk-child-width-1-3@m uk-child-width-1-3@l uk-grid">
            <div class="uk-grid-item-match uk-first-column">
                <div class="uk-card uk-card-warning uk-card-body uk-card-small">
                    <h4 class="uk-card-title uk-text-bolder">{{$footer->nama_usaha}}</h4>
                    <hr>
                    <span class="uk-text-secondary">
                        {!! substr($footer->deskripsi_profile,0,150)!!}..
                        {{-- {!! $footer->deskripsi_profile !!} --}}
                    </span>
                    
                    <div class="uk-margin-small uk-margin">
                        <a href="https://g.page/omah-pastry-puff-pastry-jogja?share" target="_blank" class="uk-icon-button uk-icon" data-uk-icon="location"></a>
                        <a href="https://bit.ly/3bFoNT1" target="_blank" class="uk-icon-button uk-icon" data-uk-icon="receiver"></a>
                        <a href="mailto:pastryomah@gmail.com" class="uk-icon-button uk-icon" data-uk-icon="mail"></a>
                    
                        <a href="https://www.facebook.com/Omah-Pastry-1410708402353240/" target='_blank' class="uk-icon-button uk-icon" data-uk-icon="facebook"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="facebook"><path d="M11,10h2.6l0.4-3H11V5.3c0-0.9,0.2-1.5,1.5-1.5H14V1.1c-0.3,0-1-0.1-2.1-0.1C9.6,1,8,2.4,8,5v2H5.5v3H8v8h3V10z"></path></svg></a>
                        <a href="https://www.instagram.com/omah_pastry.id/" target='_blank' class="uk-icon-button uk-icon" data-uk-icon="instagram"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="instagram"><path d="M13.55,1H6.46C3.45,1,1,3.44,1,6.44v7.12c0,3,2.45,5.44,5.46,5.44h7.08c3.02,0,5.46-2.44,5.46-5.44V6.44 C19.01,3.44,16.56,1,13.55,1z M17.5,14c0,1.93-1.57,3.5-3.5,3.5H6c-1.93,0-3.5-1.57-3.5-3.5V6c0-1.93,1.57-3.5,3.5-3.5h8 c1.93,0,3.5,1.57,3.5,3.5V14z"></path><circle cx="14.87" cy="5.26" r="1.09"></circle><path d="M10.03,5.45c-2.55,0-4.63,2.06-4.63,4.6c0,2.55,2.07,4.61,4.63,4.61c2.56,0,4.63-2.061,4.63-4.61 C14.65,7.51,12.58,5.45,10.03,5.45L10.03,5.45L10.03,5.45z M10.08,13c-1.66,0-3-1.34-3-2.99c0-1.65,1.34-2.99,3-2.99s3,1.34,3,2.99 C13.08,11.66,11.74,13,10.08,13L10.08,13L10.08,13z"></path></svg></a>
                    </div> 
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-warning uk-card-body uk-card-small">
                    <h4 class="uk-card-title uk-text-bolder">Link Penting</h4>
                    <hr>
                    <ul class="uk-list uk-link-text">
                        <li>
                            <a href="/" style="color: #000; text-decoration: none;">Beranda</a>
                        </li>
                        <li>
                            <a href="/profile" style="color: #000; text-decoration: none;">Profile Kami</a>
                        </li>
                        <li>
                            <a href="/produk" style="color: #000; text-decoration: none;">Daftar Produk</a>
                        </li>
                        <li>
                            <a href="/galeri" style="color: #000; text-decoration: none;">Galeri</a>
                        </li>
                        <li>
                            <a href="/testimonial" style="color: #000; text-decoration: none;">Testimonial</a>
                        </li>
                        <li>
                            <a href="/hubungi-kami" style="color: #000; text-decoration: none;">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div>
            <div class="uk-card uk-card-warning uk-card-body uk-card-small">
                <h4 class="uk-card-title uk-text-bolder">Kontak Kami</h4>
                <hr>
                <ul class="uk-list">
                    <li>
                        <span class="uk-margin-small-right uk-text-secondary" uk-icon="receiver">
                        </span> 
                        <a href="https://bit.ly/3bFoNT1" target="_blank" style="color: #000; text-decoration: none;">{{$footer->nomor_hp}}</a>
                    </li>
                </ul> 
                <ul class="uk-list">
                    <li>
                        <span class="uk-margin-small-right uk-text-secondary" uk-icon="instagram">
                        </span>
                        <a href="https://www.instagram.com/omah_pastry.id/" target='_blank' style="color: #000; text-decoration: none;">omah_pastry.id</a>
                    </li>
                </ul> 
                <ul class="uk-list">
                    <li>
                        <span class="uk-margin-small-right uk-text-secondary" uk-icon="facebook">
                        </span>
                        <a href="https://www.facebook.com/Omah-Pastry-1410708402353240/" target='_blank' style="color: #000; text-decoration: none;">omah pastry</a>
                    </li>
                </ul>
                <ul class="uk-list uk-link-text">
                    <li>
                        <span class="uk-margin-small-right uk-text-secondary" uk-icon="mail">
                        </span>
                        <a href="mailto:pastryomah@gmail.com" style="color: #000; text-decoration: none;">pastryomah@gmail.com</a>
                    </li>
                </ul>  
            </div>
            </div>

        </div>
    </div>

    {{-- <div class="uk-container uk-container-medium uk-margin-bottom-large uk-margin-medium uk-margin">
        <div class="uk-child-width-1-3@s uk-child-width-1-3@m uk-child-width-1-3@l uk-grid">
            <div>
                <div class="uk-card uk-card-warning uk-card-body uk-card-small">
                    <h4 class="uk-card-title uk-text-bolder">Bank 1</h4>
                    <hr>
                    <ul class="uk-list">
                        <li class="uk-text-secondary">
                            {{$footer->nama_bank_1}} a.n
                        </li>
                        <li class="uk-text-secondary">
                            {{$footer->nama_rekening_bank_1}}
                        </li>
                        <li class="uk-text-secondary">
                            {{$footer->nomor_rekening_bank_1}}
                        </li>
                    </ul>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-warning uk-card-body uk-card-small">
                    <h4 class="uk-card-title uk-text-bolder">Bank 2</h4>
                    <hr>
                    <ul class="uk-list">
                        <li class="uk-text-secondary">
                            {{$footer->nama_bank_2}} a.n
                        </li>
                        <li class="uk-text-secondary">
                            {{$footer->nama_rekening_bank_2}}
                        </li>
                        <li class="uk-text-secondary">
                            {{$footer->nomor_rekening_bank_2}}
                        </li>
                    </ul>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-warning uk-card-body uk-card-small">
                    <h4 class="uk-card-title uk-text-bolder">Catatan</h4>
                    <hr>
                    <p class="uk-text-secondary">
                        Stok yang Kami sediakan adalah dengan sistem Pre Order. <br> Silakan melakukan pemesanan terlebih 
                        dahulu dengan melakukan kontak ke nomor whatsapp kami ke : {{$footer->nomor_hp}}.
                    </p>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endforeach

<div class="uk-section-secondary uk-section-small">
    <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@l">
        <div class="uk-flex uk-flex-center uk-flex-middle">
            <span class="uk-text-small uk-text-muted">© 2020 Marketing Layout - <a href="https://github.com/zzseba78/Kick-Off" class="uk-link-muted">Created by KickOff</a> | Built with <a href="http://getuikit.com" class="uk-link-muted" title="" target="_blank" data-uk-tooltip="" aria-expanded="false"><span data-uk-icon="uikit" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="uikit"><polygon points="14.4,3.1 11.3,5.1 15,7.3 15,12.9 10,15.7 5,12.9 5,8.5 2,6.8 2,14.8 9.9,19.5 18,14.8 18,5.3"></polygon><polygon points="9.8,4.2 6.7,2.4 9.8,0.4 12.9,2.3"></polygon></svg></span></a></span>
        </div>
    </div>
</div>